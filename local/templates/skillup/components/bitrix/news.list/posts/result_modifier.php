<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$aSize = [
    'width' => 200,
    'height' => 200,
];

foreach ($arResult['ITEMS'] as &$aItem){
    processPost($aItem, $aSize);
}


function processPost(&$aPost, $aSize){
    $aPicture = \CFile::ResizeImageGet($aPost['DETAIL_PICTURE'], $aSize,  BX_RESIZE_IMAGE_EXACT);
    $aPost['DETAIL_PICTURE'][$aItem['ID']]= $aPicture;

    $iAuthorId =  $aItem['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
     $aPost['AUTHOR'] = $aItem['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
}