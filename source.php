<?php
require_once 'prepend.inc';

$SIDEBAR_DATA = '
<p>
The syntax highlighted source is automatically generated by PHP from
the plaintext script.<br><br>

If you\'re interested in what\'s behind the several functions we
used, you can always take a look at the source of the<br>
&nbsp; ' . make_link("/source.php?url=/include/shared.inc", "shared.inc") . ',<br>
&nbsp; ' . make_link("/source.php?url=/include/prepend.inc", "prepend.inc") . ',<br>
&nbsp; ' . make_link("/source.php?url=/include/site.inc", "site.inc") . ',<br>
&nbsp; ' . make_link("/source.php?url=/include/layout.inc", "layout.inc") . ',<br>
&nbsp; ' . make_link("/source.php?url=/include/shared-manual.inc", "shared-manual.inc") . ' and<br>
&nbsp; ' . make_link("/source.php?url=/include/manual-lookup.inc", "manual-lookup.inc") . '<br>
files.<br><br>

Of course, if you want to see the source of this page, have a look ' .
make_link("/source.php?url=/source.php", "here") . '.
You can also browse the cvs repository for this website ' .
make_link("http://cvs.php.net/cvs.php/phpweb/", "here") . '.
</p>
';

commonHeader("Show Source");

if (!isset($url)) {
    echo "No page URL specified.";
    commonFooter();
    exit;
}

echo "<h1>Source of: $url</h1>" . hdelim(); 

$legal_dirs = array(
  "/manual"  => 1,
  "/include" => 1,
  "/stats"   => 1
);

$dir = dirname($url);

// The separate manual language dirs are legal dirs
if (preg_match("!^/manual/(en|pt_BR|cs|nl|fr|de|hu|it|ja|kr|es)$!", $dir) || $legal_dirs[$dir]) {
      $legal_dir = TRUE;
} else { $legal_dir = FALSE; }

// If this is a legal dir, then it is under the docroot, else use basename
if ($dir && $legal_dir) {
    $page_name = $DOCUMENT_ROOT . $url;
} else {
    $page_name = basename($url);
}

echo("<!-- $page_name -->\n");

if (file_exists($page_name) && !is_dir($page_name)) {
    show_source($page_name);
} else if (@is_dir($page_name)) {
    echo "<p>No file specified.  Can't show source for a directory.</p>\n";
}

commonFooter();

?>
