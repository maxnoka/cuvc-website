<?php
require('config.php');

$view = new MyView($additional_styles = array(), $content_file = 'contact.html');
$view->title = 'Contact Us';
$view->render();
?>
