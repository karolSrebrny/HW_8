<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$tag= \App\Model\Tag::find($_GET['id']);
$tag ->delete();

header('Location: index.php');







