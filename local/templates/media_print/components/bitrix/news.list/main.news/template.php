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

<div class="swiper-container js-news-slider news__container">

    <div class="swiper-wrapper news__wrapper">

        <? foreach($arResult as $arItem): ?>

            <a href="/news/<?= $arItem['code']; ?>" class="swiper-slide news__item news-page__item">
                <div class="news__item-header">
                    <span class="news__item-title"><?= $arItem['name']; ?></span>
                    <span class="news__item-descr"><?= $arItem['preview_text']; ?></span>
                </div>
                <span class="news__item-date"><?= $arItem['create_date']; ?></span>
            </a>

        <? endforeach; ?>

    </div>

    <div class="swiper-pagination slider-pagination"></div>
    <div class="swiper-button-prev slider-button-prev js-news-btn-prev news__btn-prev"></div>
    <div class="swiper-button-next slider-button-next js-news-btn-next news__btn-next"></div>
    <div class="swiper-scrollbar slider-scrollbar js-news-scrollbar"></div>
</div>

