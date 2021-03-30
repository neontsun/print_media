<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;

$items = [];
foreach ($arResult['ITEMS'] as $arItem) {
	
	$sectionCode = $arItem['IBLOCK_SECTION_ID'];
	$sectionContent = CIBlockSection::GetByID($sectionCode)->fetch();
	
	$items[$sectionContent['NAME']]['code'] = $sectionContent['CODE'];
	$items[$sectionContent['NAME']]['child'][] = [
		'name' => $arItem['NAME'],
		'code' => $arItem['CODE'],
		'picture' => $arItem['FIELDS']['DETAIL_PICTURE']['SRC'],
		'special' => $arItem['PROPERTIES']['SPECIAL']['VALUE']
	];
	
}

$arResult = [];
$arResult = $items;
