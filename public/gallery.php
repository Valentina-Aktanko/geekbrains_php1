<?php

require_once __DIR__ . '/../config/config.php';

$images = getImages();
$imgContent = renderGallery($images);
echo render(TEMPLATES_DIR . 'index.tpl', [
    'title' => 'Галерея',
    'h1' => 'Галерея',
    'content' => $imgContent
]);

//echo createGallery();