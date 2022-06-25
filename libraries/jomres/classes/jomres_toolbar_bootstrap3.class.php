<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * 	 * @package Jomres\Core\Classes
 * Creates the Jomres menu bar icons and the toolbar icons. These have been replaced because the standard Joomla toolbar doesn't return a value, simply outputting the toolbar when the method is called, no use when you want to use patTemplates.
 */
class jomres_toolbar_bootstrap
{
	/**
	 * Constructor. Generates the images based on hard coded arrays, and sets the livesite and icon sizes.
	 */
	public function __construct()
	{
		$mrConfig = getPropertySpecificSettings();
		$this->livesite = get_showtime('live_site');
		$this->standardActivityImages = $this->getStandardActivityImagesArray();
		$this->menubarImagesArray = $this->getMenubarImagesArray();
		$this->imageSize = 'small';
		if (isset($mrConfig[ 'editiconsize' ])) {
			$this->imageSize = $mrConfig[ 'editiconsize' ];
		}
		$this->imageExtension = 'png';
		$this->items = array();
	}

	/**
	 * Inserts a spacer cell into the toolbar. Pass in a width to set your width.
	 */
	public function spacer($width = 40)
	{
		$image = JOMRES_IMAGES_RELPATH.'blank.png';
		$link = '';
		$submit = '';
		$output = '
			';

		return $output;
	}

	/**
	 * Inserts a spacer cell into the toolbar. Pass in a width to set your width.
	 */
	public function makeImageValid($imageName = '')
	{
		$image = str_replace('+', '%20', $imageName);
		$image = str_replace('%2F', '/', $image);

		return $image;
	}

	/**
	 * Allows for custom toolbar items. Set $image to the full path from the root of livesite.
	 */
	public function customToolbarItem($targetTask, $link, $text, $submitOnClick, $submitTask, $image, $concat = false)
	{
		$this->items[] = array('cell' => $this->makeCell($image, $targetTask, $link, $text, $submitOnClick, $submitTask), 'concat' => $concat);
	}

	/**
	 * Creates a cell with a standard toolbar item.
	 */
	public function toolbarItem($targetTask, $link, $text = '', $submitOnClick = false, $submitTask = '', $concat = false)
	{
		if (empty($text)) {
			$text = $this->standardActivityImages[ $targetTask ][ 'label' ];
		}
		$image = JOMRES_IMAGES_RELPATH.'jomresimages/'.$this->imageSize.'/'.$this->standardActivityImages[ $targetTask ][ 'image' ].'.'.$this->imageExtension;
		$this->items[] = array('cell' => $this->makeCell($image, $targetTask, $link, $text, $submitOnClick, $submitTask), 'concat' => $concat);
	}

	/**
	 * Starts the table and inserts css to the rendered page if it hasn't been done before.
	 */
	public function startTable()
	{
	}

	/**
	 * Ends the toolbar table.
	 */
	public function endTable()
	{
		$new_arr = array();
		$first = array();
		foreach ($this->items as $item) {
			if (strstr($item['cell'], 'primary')) {
				$first[] = $item;
			} else {
				$new_arr[] = $item;
			}
		}

		if (!empty($first)) {
			$this->items = array_merge($first, $new_arr);
		} else {
			$this->items = $new_arr;
		}

		$output = '';
		foreach ($this->items as $item) {
			if ($item['concat'] == true) {
				$output .= $item['cell'];
			}
		}
		$output .= '';

		foreach ($this->items as $item) {
			if ($item['concat'] == false) {
				$output .= $item['cell'].'';
			}
		}

		$this->items = array();

		return $output;
	}

	/**
	 * The various toolbar item type methods refer to this to actually finish the construction of the cell.
	 */
	public function makeCell($image, $targetTask, $link, $text, $submitOnClick = false, $submitTask = '')
	{
		$image = urlencode($image);
		$image = str_replace('+', '%20', $image);
		$image = str_replace('%2F', '/', $image);

		$image = $this->livesite.$image;
		$t = str_replace("'", "\'", $text);
		$t = str_replace('&#39;', "\'", $t);
		$title = 'title="'.$t.'"';

		// This class is a modification of an older class. We're not going to rewrite every script that calls the buttons, there're too many, instead we'll modify this class to look at what is passed.

		$icon = '';
		if (strpos($image, 'EditItem.png')) {
			$icon = 'fa-pencil-square-o';
		}
		if (strpos($image, 'Tick.png')) {
			$icon = 'fa-check';
		}
		if (strpos($image, 'AddItem.png')) {
			$icon = 'fa-plus';
		}
		if (strpos($image, 'guestAdd.png')) {
			$icon = 'fa-plus';
		}
		if (strpos($image, 'Cancel.png')) {
			$icon = 'fa-times';
		}
		if (strpos($image, 'Save.png')) {
			$icon = 'fa-check';
		}
		if (strpos($image, 'WasteBasket.png')) {
			$icon = 'fa-trash-o';
		}
		if (strpos($image, 'Symbol%20Refresh.png')) {
			$icon = 'fa-refresh';
		}
		if (strpos($image, 'CopyItem.png')) {
			$icon = 'fa-files-o';
		}
		if (strpos($image, 'ViewArchive.png')) {
			$icon = 'fa-archive';
		}
		if (strpos($image, 'BookGuestIn.png')) {
			$icon = 'fa-sign-in';
		}
		if (strpos($image, 'BookGuestOut.png')) {
			$icon = 'fa-sign-out';
		}
		if (strpos($image, 'Printer.png')) {
			$icon = 'fa-print';
		}

		//var_dump($image." ".$icon);

		$emphasis = ' btn-default';
		if (strpos($image, 'Tick.png')) {
			$emphasis = 'btn-success';
			//$icon .= " icon-white";
		}
		if (strpos($image, 'guestAdd.png')) {
			$emphasis = 'btn-primary';
			//$icon .= " icon-white ";
		}
		if (strpos($image, 'AddItem.png')) {
			$emphasis = 'btn-primary';
			//$icon .= " icon-white ";
		}
		if (strpos($image, 'Save.png')) {
			$emphasis = 'btn-primary';
			//$icon .= " icon-white ";
		}
		if (strpos($image, 'WasteBasket.png')) {
			$emphasis = 'btn-danger';
			//$icon .= " icon-white ";
		}
		if (strpos($image, 'EditItem.png')) {
			$emphasis = 'btn-info';
			//$icon .= " icon-white ";
		}
		if (strpos($image, 'BookGuestOut.png')) {
			$emphasis = 'btn-success';
			//$icon .= " icon-white ";
		}

		if ($submitOnClick) {
			$submit = '<a class="btn btn-md '.$emphasis.'" href="javascript:jomres_submitbutton(\''.$submitTask.'\');"><i class="fa '.$icon.'"></i> '.$text.'</a> ';
		} else {
			$submit = '<a href="'.$link.'" class="btn btn-md '.$emphasis.'"><i class="fa '.$icon.'"></i> '.$text.'</a> ';
		}
		$output = $submit;

		return $output;
	}

	/**
	 * Returns an array of all the standard images, with default text that is used for the button hint if nothing was supplied.
	 */
	public function getStandardActivityImagesArray()
	{
		$array = array();
		$array[ 'new' ] = array('image' => 'AddItem', 'label' => jr_gettext('_JOMRES_COM_MR_NEWTARIFF', '_JOMRES_COM_MR_NEWTARIFF', false));
		$array[ 'edit' ] = array('image' => 'EditItem', 'label' => jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', false));
		$array[ 'cancel' ] = array('image' => 'Cancel', 'label' => jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false));
		$array[ 'help' ] = array('image' => 'Symbol Help', 'label' => 'Help');
		$array[ 'apply' ] = array('image' => 'Symbol Refresh', 'label' => 'Refresh');
		$array[ 'information' ] = array('image' => 'Symbol Information', 'label' => 'Information');
		$array[ 'copy' ] = array('image' => 'CopyItem', 'label' => jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', false));
		$array[ 'save' ] = array('image' => 'Save', 'label' => jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false));
		$array[ 'delete' ] = array('image' => 'WasteBasket', 'label' => jr_gettext('_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE', false));
		$array[ 'publish' ] = array('image' => 'Tick', 'label' => jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH', '_JOMRES_COM_MR_VRCT_UNPUBLISH', false));
		$array[ 'unpublish' ] = array('image' => 'Cancel', 'label' => jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false));
		$array[ 'archive' ] = array('image' => 'ViewArchive', 'label' => jr_gettext('_JOMRES_MR_AUDIT_ARCHIVE', '_JOMRES_MR_AUDIT_ARCHIVE', false));

		$array[ 'edit_deposit' ] = array('image' => 'enterDeposit', 'label' => jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', $editable = false, $isLink = true));
		$array[ 'edit_booking' ] = array('image' => 'ContactCardEdit', 'label' => jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', false));
		$array[ 'cancel_booking' ] = array('image' => 'HotelReservationStop', 'label' => jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', $editable = false, $isLink = false));
		$array[ 'addservice' ] = array('image' => 'addService', 'label' => jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE', '_JOMRES_COM_ADDSERVICE_TITLE', $editable = false, $isLink = false));
		$array[ 'printer' ] = array('image' => 'Printer', 'label' => 'Print');
		$array[ 'emailsend' ] = array('image' => 'EmailSend', 'label' => 'Email');
		$array[ 'stats' ] = array('image' => 'ChartBarTrend', 'label' => 'Stats');

		$array[ 'note' ] = array('image' => 'postnote', 'label' => 'Note');
		$array[ 'deleteproperty' ] = array('image' => 'WasteBasket', 'label' => 'Delete');

		$array[ 'bookGuestIn' ] = array('image' => 'BookGuestIn', 'label' => jr_gettext('_JOMRES_FRONT_MR_BOOKIN_TITLE', '_JOMRES_FRONT_MR_BOOKIN_TITLE', false));
		$array[ 'bookGuestOut' ] = array('image' => 'BookGuestOut', 'label' => jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE', '_JOMRES_FRONT_MR_BOOKOUT_TITLE', false));

		return $array;
	}

	/**
	 * Returns an array of all the menubar images.
	 */
	public function getMenubarImagesArray()
	{
		$array = array();
		$array[ 'bookaroom' ] = 'NewBooking';
		$array[ 'blackbookings' ] = 'EditBlackBookings';
		$array[ 'listbookings' ] = 'ListBookings';
		$array[ 'listnewbookings' ] = 'ListNewBookings';
		$array[ 'guesttypes' ] = 'EditGuestTypes';
		$array[ 'dashboard' ] = 'Home';
		$array[ 'audittrail' ] = 'auditLog';
		$array[ 'extras' ] = 'EditOptions';
		$array[ 'slidwshowimages' ] = 'SlideShowImages';
		$array[ 'editlanguage' ] = 'EditText';
		$array[ 'bookguestin' ] = 'BookGuestIn';
		$array[ 'bookguestout' ] = 'BookGuestOut';
		$array[ 'guestadmin' ] = 'GuestAdmin';
		$array[ 'propertyadmin' ] = 'PropertyAdmin';
		$array[ 'preview' ] = 'Preview';
		$array[ 'emailsend' ] = 'EmailSend';
		$array[ 'stats' ] = 'ChartBarTrend';

		$array[ 'configuration' ] = 'EditConfiguration';
		$array[ 'newproperty' ] = 'AddProperty';
		$array[ 'publish' ] = 'PublishProperty';
		$array[ 'unpublish' ] = 'UnpublishProperty';
		$array[ 'deleteproperty' ] = 'WasteBasket';

		return $array;
	}
}
