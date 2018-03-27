<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$oAsset = \Bitrix\Main\Page\Asset::getInstance();
$oAsset->addCss(SITE_TEMPLATE_PATH . 'style.css');
$oAsset->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>


        <?php
        $APPLICATION->IncludeComponent("bitrix:menu",
            ".default",[
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""

            ]
        );
        ?>

