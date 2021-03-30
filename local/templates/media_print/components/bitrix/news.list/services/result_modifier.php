<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;

$items = [];
foreach($arResult['ITEMS'] as $arItem) {

    $sectionID = $arItem['IBLOCK_SECTION_ID'];
    $sectionContent = CIBlockSection::GetByID($sectionID)->fetch();

    $sectionName = $sectionContent['NAME'];
    $sectionCode = $sectionContent['CODE'];

    $sectionPictureID = $sectionContent['PICTURE'];
    $picturePath = CFile::GetPath($sectionPictureID);

    $items[$sectionName]['child'][] = [
        'name' => $arItem['NAME'],
        'code' => $arItem['CODE']
    ];
    $items[$sectionName]['picture'] = $picturePath;
    $items[$sectionName]['code'] = $sectionContent['CODE'];

}

$arResult = [];
$arResult['result'] = $items;
