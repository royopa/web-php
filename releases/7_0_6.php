<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'releases/7_0_6.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("PHP 7.0.6 Release Announcement");
?>

     <h1>PHP 7.0.6 Release Announcement</h1>
     
     <p>The PHP development team announces the immediate availability of PHP
     7.0.6. This is a security release. Several security bugs were fixed in
     this release, including</p>
     <ul>
         <li>CVE-2016-3078</li>
         <li>CVE-2016-3074</li>
     </ul>
     <p>
     All PHP 7.0 users are encouraged to upgrade to this version.
     </p>
     
     <p>For source downloads of PHP 7.0.6 please visit our <a href="http://www.php.net/downloads.php">downloads page</a>,
     Windows source and binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-7.php#7.0.6">ChangeLog</a>.
     </p>

<?php site_footer(); ?>
