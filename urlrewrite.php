<?
$arUrlRewrite = array(

    array(
        "CONDITION"	=>	"#^/products/([\\w-]+)([/\\?].*)#",
        "RULE"	=>	"CODE=\$1",
        "ID"	=>	"bitrix:news.list",
        "PATH"	=>	"/post/detai.php",
    ),

    array(
		"CONDITION"	=>	"#^/services/#",
		"RULE"	=>	"",
		"ID"	=>	"",
		"PATH"	=>	"/posts/index.php",
	),


);

?>