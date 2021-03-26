<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>


<form class="header__search" action="<?=$arResult["FORM_ACTION"]?>">
    <div class="header__search-field-wrapper">
        <input class="header__search-field" type="search" placeholder="Поиск по услугам"/>
        <div class="header__search-close"></div>
    </div>
    <input class="header__search-button" type="submit"/>
</form>