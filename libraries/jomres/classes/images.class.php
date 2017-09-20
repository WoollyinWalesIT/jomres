<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.11
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

/*
IMAGES - Simple to use for basic image handling.
Simplifies considerably the interaction of JPG images in PHP (at least that's what I think)
Get the image from post, scale it into a defined area, add a stroke, save it, all in a couple of lines
of code.
An example is down below (at the end of the code)

THIS CLASS IS PROVIDED FREE FOR USE.
All I'd like is that if you modify this code or use it in your site, please add either a thanks or
a link to my site.. in the very least, just leave my signatue at the end...
Developed by Gregory Brown
for use in Doutromundo.com

*******  IMPORTANT
YOU MUST DEFINE TWO VARIABLES BEFORE USING THIS CLASS

JOMRES_JOMRES_IMAGE_MAX_SIZE - Determines the largest image you will accept (usually the max post size)
JOMRES_JOMRES_IMAGE_UPLOAD_PATH - where you will save the images (remember to set write permission to the folder)
*/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 * Image uploading and resizing.
 */
class images
{
    public $orgImage = '';
    public $orgW = 0;
    public $orgH = 0;
    public $tmpImage = '';
    public $jpgCompression = 90;
    public $fileToBeDeletedAtEnd = '';

    public function __construct()
    {
        if (!defined('JOMRES_IMAGE_MAX_SIZE') || !defined('JOMRES_IMAGE_UPLOAD_PATH')) {
            echo 'Could not find the defined variables necessary to make the object work. Make sure you have the defined JOMRES_IMAGE_UPLOAD_PATH and JOMRES_IMAGE_MAX_SIZE file correctly associated';
            exit();
        }
    }

    public function colordecode($hex)
    {
        $code[ r ] = hexdec(substr($hex, 0, 2));
        $code[ g ] = hexdec(substr($hex, 2, 2));
        $code[ b ] = hexdec(substr($hex, 4, 2));

        return $code;
    } // end func colordecode

    /**
     * @desc Open the image
     **/
    public function openImage($srcImage)
    {
        $this->orgImage = imagecreatefromjpeg($srcImage);
        $this->orgW = imagesx($this->orgImage);
        $this->orgH = imagesy($this->orgImage);
    }

    /**
     * @desc Fetch the image submitted via post and save it to a known destination - optionally it may be left open to further edit the picture.
     **/
    public function getImageFromPost($formElement, $open = true)
    {
        $error = false;
        $errorDesc = '';

        //rejects all .exe, .com, .bat, .zip, .doc and .txt files
        if (preg_match('/.exe$|.com$|.bat$|.zip$|.doc$|.txt$/i', $_FILES[ $formElement ][ 'name' ])) {
            exit();
            trigger_error('You cannot upload this type of file </b> '.$_FILES[ $formElement ][ 'name' ].' User id '.$my->id, E_USER_ERROR);
        }
        $defaultProperty = getDefaultProperty();
        if ($_FILES[ $formElement ][ 'name' ] != '') {
            if ($_FILES[ $formElement ][ 'error' ] == UPLOAD_ERR_NO_TMP_DIR) {
                echo 'The file could not be saved, because no server temp folder exists (or, if it does, it\'s not writable). Please ask your hosts to edit php.ini and ensure that they have a valid path set for the php.ini setting "upload_tmp_dir" ';

                return false;
            }
            if (strtolower($_FILES[ $formElement ][ 'type' ]) != 'image/jpg' && strtolower($_FILES[ $formElement ][ 'type' ]) != 'image/jpeg' && strtolower($_FILES[ $formElement ][ 'type' ]) != 'image/pjpeg') {
                $error = true;
                $errorDesc = '<br>Filename: '.$_FILES[ $formElement ][ 'name' ].' Wrong type of file. Only jpg and jpeg files allowed';
            } else {
                if ($_FILES[ $formElement ][ 'size' ] > JOMRES_IMAGE_MAX_SIZE * 1024) {
                    $error = true;
                    $errorDesc = '<br>Max Size Exceeded ['.(JOMRES_IMAGE_MAX_SIZE / 1024).'K]';
                } else {
                    if (is_uploaded_file($_FILES[ $formElement ][ 'tmp_name' ])) {
                        $imagesize = getimagesize($_FILES[ $formElement ][ 'tmp_name' ]);
                        if (!$imagesize) {
                            $error = true;
                            $errorDesc = '<br/>';
                            trigger_error('Unable to upload image, <b>Could not determine image size. Possible hack attempt </b> '.$_FILES[ $formElement ][ 'name' ], E_USER_ERROR);
                        } else {
                            $img_name = $_FILES[ $formElement ][ 'name' ];
                            $img_tmp = $_FILES[ $formElement ][ 'tmp_name' ];
                            $cleanedImg = strtolower(str_replace(' ', '-', $img_name));
                            $img_destination = JOMRES_IMAGE_UPLOAD_PATH.(int) $defaultProperty.'_'.$cleanedImg;
                            //echo "Copying ".$img_destination."<br>";
                            if (!move_uploaded_file($img_tmp, $img_destination)) {
                                $error = true;
                                $errorDesc = '<b>move_uploaded_file failed</b>';
                                echo $errorDesc;
                            }
                            $this->fileToBeDeletedAtEnd = $img_destination;
                        }
                    } else {
                        $error = true;
                        $errorDesc = '<b>is_uploaded_file failed</b>';
                    }
                }
            }
            if ($error) {
                echo $errorDesc;

                return false;
            } else {
                if ($open) {
                    $this->openImage($img_destination);
                }

                return true;
            }
        } else {
            echo 'Filename found to be empty';

            return false;
        }
    }

    /**
     * @desc Set the compression
     **/
    public function setCompression($val = 70)
    {
        if ($val > 0 && $val < 10) {
            $val = 10 * $val;
        } elseif ($val > 100) {
            $val = 100;
        } elseif ($val < 0) {
            $val = 0;
        }
        $this->jpgCompression = $val;
    }

    /**
     * @desc scale the image without constraining proportions
     **/
    public function resizeImage($width, $height)
    {
        $dst_img = imagecreatetruecolor($width, $height);
        $this->imageresizeresult = imagecopyresampled($dst_img, $this->orgImage, 0, 0, 0, 0, $width + 1, $height + 1, $this->orgW, $this->orgH);
        $this->orgImage = $dst_img;
    }

    /**
     * @desc scale the image constraining proportions (maxX and maxY)
     **/
    public function transformToFit($newX, $newY)
    {
        $x = $this->orgW;
        $y = $this->orgH;
        $mlt = $newX / $x;
        $nx = ceil($x * $mlt);
        $ny = ceil($y * $mlt);

        if ($ny > $newY) {
            $mlt = $newY / $ny;
            $nx = ceil($nx * $mlt);
            $ny = ceil($ny * $mlt);
        }

        $this->resizeImage($nx, $ny);
    }

    /**
     * @desc make the image fit in a defined space (scale to fit and add bgcolor to the remainder)
     **/
    public function scaleInto($newX, $newY, $bgColor = 'FFFFFF')
    {
        $backgroundimage = imagecreatetruecolor($newX, $newY);
        $code = $this->colordecode($bgColor);
        $backgroundcolor = imagecolorallocate($backgroundimage, $code[ r ], $code[ g ], $code[ b ]);
        imagefilledrectangle($backgroundimage, 0, 0, $newX, $newY, $backgroundcolor);
        $x = imagesx($this->orgImage);
        $y = imagesy($this->orgImage);

        imagealphablending($backgroundimage, true);
        $this->transformToFit($newX, $newY);

        $x = imagesx($this->orgImage) + 1;
        $y = imagesy($this->orgImage) + 1;
        $sX = ceil(($newX - $x) / 2);
        $sY = ceil(($newY - $y) / 2);

        imagecopy($backgroundimage, $this->orgImage, $sX, $sY, 0, 0, $newX + 4, $newY + 4);
        // fix right side
        imagefilledrectangle($backgroundimage, ($newX - $sX - 1), 0, $newX, $newY, $backgroundcolor);

        // fix bottom side
        imagefilledrectangle($backgroundimage, 0, ($newY - $sY - 1), $newX, $newY, $backgroundcolor);

        $this->orgImage = $backgroundimage;
    }

    /**
     * @desc put a border around the image
     **/
    public function strokeImage($strokeWidth, $strokeColor = '000000')
    {
        $code = $this->colordecode($strokeColor);
        $width = imagesx($this->orgImage);
        $height = imagesy($this->orgImage);
        $color = imagecolorallocate($this->orgImage, $code[ r ], $code[ g ], $code[ b ]);
        if ($strokeWidth > 1) {
            for ($i = 0; $i < $strokeWidth; ++$i) {
                imagerectangle($this->orgImage, $i, $i, $width - ($i + 1), $height - ($i + 1), $color);
            }
        } else {
            imagerectangle($this->orgImage, 0, 0, $width - 1, $height - 1, $color);
        }
    }

    /**
     * @desc actually save the image to disk
     **/
    public function saveImage($destImage, $delete = false)
    {
        if (imagejpeg($this->orgImage, $destImage, $this->jpgCompression)) {
            unlink($this->fileToBeDeletedAtEnd);

            return true;
        } elseif ($delete) {
            unlink($this->fileToBeDeletedAtEnd);

            return false;
        }
    }
}
// <!-- Initially Developed by Greg - Doutromundo.com -->
