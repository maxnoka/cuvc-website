<?php
require('config.php');

$view = new MyView($additional_styles = array(), $content_file = 'prospective.html');
$view->title = 'Prospective Players';
$view->render();
?>
