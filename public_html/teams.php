<?php
require('../private/config/config.php');

$view = new MyView($additional_styles = array(), $content_file = 'teams.html');
$view->title = 'Teams';
$view->render();
?>
