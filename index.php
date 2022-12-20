<?php
ob_start();	
require_once("lib/init.php");

/* 
INI_SET("session.cookie_domain", ".meci.co.kr");
INI_SET("session.cache_expire", 3600);
INI_SET("session.gc_maxlifetime", 3600);
ini_set('session.use_trans_sid', 0); 
*/

error_reporting(E_ALL);
ini_set("display_errors", true);

SESSION_START();

//주소분할
$Route = str_replace("?".$_SERVER['QUERY_STRING'], "", $_SERVER["REQUEST_URI"]);
$arrRoute = explode("/", str_replace("?".$_SERVER['QUERY_STRING'], "", $_SERVER["REQUEST_URI"]));


if($arrRoute[1] != "manager")
{
	$InitPage = $arrRoute[1];

	if(empty($arrRoute[1]))
	{
		$InitPage = "main";
	}

	include APPROOT."/resources/".$InitPage.".php";
	
}else if($arrRoute[1] == "manager")//관리자
{
	$InitPage = $arrRoute[1];

	if(empty($arrRoute[2]))
	{
		$InitPage = "main";
    }else{
		$InitPage = $arrRoute[2];
	}


	include APPROOT."/admin/".$InitPage.".php";
}

?>
