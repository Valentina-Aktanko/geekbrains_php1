<?php

function getImages()
{

    $sql = "SELECT * FROM `images`";

    return getAssocResult($sql);
}


function renderGallery($galleryItems)
{
    $galleryContent = '';
    foreach ($galleryItems as $img) {
//        if (empty($img)) {
//            $img['src'] = 'img/no-image.jpeg';
//        }
        $galleryContent .= render(TEMPLATES_DIR . 'gallery.tpl', $img);
    }
    return $galleryContent;
}

function getImgItem($id)
{
    $sql = "SELECT * FROM `images` WHERE id = $id";
    return getAssocResult($sql);
}

function renderGalleryItem($img)
{
   return render(TEMPLATES_DIR . 'galleryItem.tpl', $img);
}