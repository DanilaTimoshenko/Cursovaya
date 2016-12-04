<?php
/**
 * Created by PhpStorm.
 * User: student01
 * Date: 19.11.2016
 * Time: 15:24
 */
?>
<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => GetMessage("NAME_COMPONENT"),
    "DESCRIPTION" => GetMessage("DESCRIPTION_COMPONENT"),
    "SORT" => 20,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "intranet",
        "NAME" => GetMessage("NAME_INTRANET"),
        "CHILD" => array(
            "ID" => "BS",
            "NAME" => GetMessage("NAME_BS"),
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "BSValue",
            )
        ),
    ),
);
?>
