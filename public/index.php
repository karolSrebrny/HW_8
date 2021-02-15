<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$tags = \App\Model\Tag::all();
$categories = \App\Model\Category::all();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = \App\Model\Category::find($_POST['id']);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $tags = \App\Model\Category::find($_POST['id']);
    $tags -> title =$_POST['title'];
    $tags -> slug =$_POST['slug'];
    $tags -> save();
    header('Location: index.php');
}

echo $blade->make('category_tag/table', ['categories' => $categories])->render();

echo $blade->make('category_tag/tag-table', ['tags' => $tags])->render();





