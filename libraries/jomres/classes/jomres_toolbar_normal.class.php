<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.26
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * Creates the Jomres menu bar icons and the toolbar icons. These have been replaced because the standard Joomla toolbar doesn't return a value, simply outputting the toolbar when the method is called, no use when you want to use patTemplates.
 */
class jomres_toolbar_normal
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
    }

    /**
     * Inserts a spacer cell into the toolbar. Pass in a width to set your width.
     */
    public function spacer($width = 40)
    {
        $image = $this->livesite.'/'.JOMRES_ROOT_DIRECTORY.'/images/blank.png';
        $link = '';
        $submit = '';
        $output = '
			<td>
			<a class="toolbar" href="' .$link.'" '.$submit.' >
				<img src="' .$image.'" align="middle" height="1" width="'.$width.'" border="0" alt="spacer" title="spacer" /></a>
			</td>
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
    public function customToolbarItem($targetTask, $link, $text, $submitOnClick, $submitTask, $image)
    {
        $output = $this->makeCell($image, $targetTask, $link, $text, $submitOnClick, $submitTask);

        return $output;
    }

    /**
     * Creates a cell with a standard toolbar item.
     */
    public function toolbarItem($targetTask, $link, $text = '', $submitOnClick = false, $submitTask = '')
    {
        if (empty($text)) {
            $text = $this->standardActivityImages[ $targetTask ][ 'label' ];
        }
        $image = '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/'.$this->imageSize.'/'.$this->standardActivityImages[ $targetTask ][ 'image' ].'.'.$this->imageExtension;
        $output = $this->makeCell($image, $targetTask, $link, $text, $submitOnClick, $submitTask);

        return $output;
    }

    /**
     * Starts the table and inserts css to the rendered page if it hasn't been done before.
     */
    public function startTable()
    {
        $output = '';
        $output .= '
		<table cellpadding="0" cellspacing="3" border="0" id="jomresmenu"><tr valign="bottom" align="center">';

        return $output;
    }

    /**
     * Ends the toolbar table.
     */
    public function endTable()
    {
        $output = '</tr></table>
		';

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
        //var_dump($image);exit;
        $image = $this->livesite.$image;
        $t = str_replace("'", "\'", $text);
        $t = str_replace('&#39;', "\'", $t);
        $title = 'title="'.$t.'"';
        if ($submitOnClick) {
            $submit = '<a class="jomresmenu" href="javascript:jomres_submitbutton(\''.$submitTask.'\');"><img src="'.$image.'" alt="'.$text.'" title="'.$text.'" border="0" /></a>';
        } else {
            $submit = '<a class="jomresmenu" href="'.$link.'"><img src="'.$image.'" align="bottom" alt="'.$text.'" border="0" title="'.$text.'" /></a>';
        }
        $output = '<td>'.$submit.'</td>';

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

        $array[ 'enterdeposit' ] = array('image' => 'enterDeposit', 'label' => jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', $editable = false, $isLink = true));
        $array[ 'editbooking' ] = array('image' => 'ContactCardEdit', 'label' => jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', false));
        $array[ 'cancelbooking' ] = array('image' => 'HotelReservationStop', 'label' => jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', $editable = false, $isLink = false));
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
