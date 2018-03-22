<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />



	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>



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

	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

		
		<div id="banner">		
			<table id="banner-layout" cellspacing="0">
				<tr>
					<td id="banner-image"><div><img src="<?=SITE_TEMPLATE_PATH?>/images/head.jpg" /></div></td>
					<td id="banner-slogan">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/motto.php",
	Array(),
	Array("MODE"=>"html")
);
?>
					</td>
				</tr>
			</table>
			<div id="banner-overlay"></div>	
		</div>
		
		<div id="content">
		
			<div id="sidebar">
<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
				<div class="content-block">
					<div class="content-block-inner">
						<h3><?=GetMessage('CFT_NEWS')?></h3>
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/news.php",
	Array(),
	Array("MODE"=>"html")
);
?>
					</div>
				</div>
				
				<div class="content-block">
					<div class="content-block-inner">
						
<?
$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
	"PAGE" => "#SITE_DIR#search/",
),
	false
);
?>
					</div>
				</div>

				<div class="information-block">
					<div class="top"></div>
					<div class="information-block-inner">
						<h3><?=GetMessage('CFT_FEATURED')?></h3>
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/random.php",
	Array(),
	Array("MODE"=>"html")
);
?>						
					</div>
					<div class="bottom"></div>
				</div>
			</div>
		
			<div id="workarea">
				<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>