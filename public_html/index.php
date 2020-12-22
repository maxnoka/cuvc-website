<?php
require('../private/config/config.php');

$view = new MyView($additional_styles = array(), $content_file = 'index.html');
$view->title = 'Home';
$view->render();
?>