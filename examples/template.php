<?php
error_reporting(E_ALL);

require('../px.php');
require('../px_template.php');

ob_start();
?>
<h1>test</h1>
<?php
$tmpl_body = ob_get_clean();

PX_Template::set_region('body', $tmpl_body);

PX_Template::out();
