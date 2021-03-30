<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;

$items = [];
foreach($arResult['ITEMS'] as $arItem) {

    $date = new DateTime($arItem['DATE_CREATE']);
    $preText = preg_replace('/\s+/', ' ', $arItem['PREVIEW_TEXT']);
    $name = $arItem['NAME'];

    if (strlen($preText) > 250) {
        for ($i = 250; $i < strlen($preText); $i++) { 
            if ($preText[$i] == ' ') {
                $preText = substr($preText, 0, $i) . '...';
            }
        }
    }
    
    if (strlen($name) >= 130) {
        for ($i = 130; $i < strlen($name); $i++) { 
            if ($name[$i] == ' ') {
                $name = substr($name, 0, $i) . '...';
            }
        }
    }

    $items[] = [
        'name' => $name,
        'code' => $arItem['CODE'],
        'preview_text' => $preText,
        'create_date' => $date->format('d.m.Y')
    ];

}

$arResult = [];
$arResult = $items;
