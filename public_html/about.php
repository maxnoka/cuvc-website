<?php
require('../private/config/config.php');

$view = new MyView($additional_styles = array(), $content_file = 'about.html');
$view->title = 'About';
$view->render();
?>
