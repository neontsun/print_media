<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;


$items = [];
foreach ($arResult['ITEMS'] as $arItem) {
	
	$sectionCode = $arItem['IBLOCK_SECTION_ID'];
	$sectionContent = CIBlockSection::GetByID($sectionCode);
	$sectionName = $sectionContent->fetch()['NAME'];
	
	if (!in_array($sectionName, $items))
		$items[] = $sectionName;
	
}

$arResult = [];
$arResult = $items;

