<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "TRUNCATE TABLE `#__jomres_roomtypes_propertytypes_xref`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_roomtypes_propertytypes_xref table', 'danger');
}

$query = "
INSERT INTO `#__jomres_roomtypes_propertytypes_xref` (`id`, `roomtype_id`, `propertytype_id`) VALUES
(1, 11, 4),
(2, 12, 4),
(3, 13, 4),
(4, 14, 4),
(5, 15, 4),
(6, 21, 4),
(7, 24, 2),
(8, 25, 2),
(9, 16, 3),
(10, 17, 3),
(11, 19, 3),
(12, 20, 3),
(13, 22, 2),
(14, 23, 2),
(15, 18, 3),
(16, 4, 1),
(17, 4, 5),
(18, 1, 1),
(19, 1, 5),
(20, 3, 1),
(21, 3, 5),
(22, 2, 1),
(23, 2, 5),
(24, 6, 6),
(25, 6, 7),
(26, 6, 8),
(27, 7, 6),
(28, 7, 7),
(29, 7, 8),
(30, 8, 6),
(31, 8, 7),
(32, 8, 8),
(33, 9, 6),
(34, 9, 7),
(35, 9, 8),
(36, 10, 6),
(37, 10, 7),
(38, 10, 8),
(39, 5, 7),
(40, 5, 8),
(41, 5, 6);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_roomtypes_propertytypes_xref table', 'danger');
}
