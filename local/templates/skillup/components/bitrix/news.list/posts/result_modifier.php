<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$aSize = [
    'width' => 200,
    'height' => 200,
];

foreach ($arResult['ITEMS'] as $aItem){
    $aPicture = \CFile::ResizeImageGet($aItem['DETAIL_PICTURE'], $aSize, $aSize, BX_RESIZE_IMAGE_EXACT);
    $arResult['PICTURES'][$aItem['ID']]= $aPicture;

   // echo '<pre>'; print_r($aItem); exit;
}

