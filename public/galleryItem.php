<?php

require_once __DIR__ . '/../config/config.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;

if (!$id) {
    echo 'id not indefinite';
    die;
}

$imgItem = getImgItem($id);
//$galleryItemContent = renderGalleryItem($imgItem);
echo renderGalleryItem($imgItem);

//echo render(TEMPLATES_DIR . 'galleryItem.tpl', [
//    'title' => 'Изображение' . $id,
//    'content' => $galleryItemContent
//]);