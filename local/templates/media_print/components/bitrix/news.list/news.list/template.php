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

<div class="news-page__items">

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
<div class="pagination">
    <div class="pagination__btn-prev"></div>
    <div class="pagination__page-numbers">
        <a class="pagination__page-number pagination__page-number--current" href="#">1</a>
        <a class="pagination__page-number" href="#">2</a>
        <a class="pagination__page-number" href="#">3</a>
        <a class="pagination__page-number" href="#">4</a>
        <a class="pagination__page-number" href="#">5</a>
    </div>
</div>