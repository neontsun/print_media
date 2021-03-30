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
$this->setFrameMode(true);
?>

<? foreach($arResult as $arItem): ?>

    <a href="/news/<?= $arItem['code']; ?>" class="swiper-slide news__item">
        <div class="news__item-header">
            <span class="news__item-title"><?= $arItem['name']; ?></span>
            <span class="news__item-descr"><?= $arItem['preview_text']; ?></span>
        </div>
        <span class="news__item-date"><?= $arItem['create_date']; ?></span>
    </a>

<? endforeach; ?>

