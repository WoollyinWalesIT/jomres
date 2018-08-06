<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use League\Flysystem\MountManager;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

class jomres_filesystem
{
	protected $filesystem;
	
	protected $jrConfig;

	public function __construct($local_root_dir = false)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $siteConfig->get();
		
		if (!$local_root_dir) {
			$local_root_dir = JOMRESPATH_BASE;
		}

		//mount local filesystem
		$this->mount_local_filesystem($local_root_dir);
		
		//mount s3 filesystem if enabled
		if (
			$this->jrConfig['amazon_s3_active'] == '1' && 
			$this->jrConfig['amazon_s3_bucket'] != '' && 
			$this->jrConfig['amazon_s3_key'] != '' &&
			$this->jrConfig['amazon_s3_secret'] != ''
			) {
			$this->mount_s3_filesystem();
		}
	}
	
	public function getFilesystem()
	{
		return $this->filesystem;
	}
	
	private function mount_local_filesystem($local_root_dir = false)
	{
		//local adapter
		$localAdapter = new Local($local_root_dir, LOCK_EX, Local::DISALLOW_LINKS, [
			'file' => [
				'public' => 0644,
				'private' => 0600,
			],
			'dir' => [
				'public' => 0755,
				'private' => 0700,
			]
		]);
		
		$local = new Filesystem($localAdapter);
		
		$this->filesystem = new MountManager([
			'local' => $local
		]);
	}
	
	private function mount_s3_filesystem()
	{
		if ($this->jrConfig['amazon_s3_use_tls'] == '1') {
			$scheme = 'https';
		} else {
			$scheme = 'http';
		}
		
		//s3 adapter
		$s3client = S3Client::factory([
			'credentials' => [
				'key'	=> $this->jrConfig['amazon_s3_key'],
				'secret' => $this->jrConfig['amazon_s3_secret'],
			],
			'region' => $this->jrConfig['amazon_s3_region'],
			'version' => 'latest',
			'validation' => false,
			'scheme' => $scheme,
			/* 'http'	=> [
				'verify' => $this->jrConfig['tls_certificate_path']
			] */
		]);

		$s3Adapter = new AwsS3Adapter(
			$s3client, 
			$this->jrConfig['amazon_s3_bucket'], 
			null, 
			array('ACL' => 'public-read') //if not set, files uploaded to S3 will be private
		);
		
		$s3 = new Filesystem($s3Adapter);
		
		$this->filesystem->mountFilesystem('s3', $s3);
	}
}
