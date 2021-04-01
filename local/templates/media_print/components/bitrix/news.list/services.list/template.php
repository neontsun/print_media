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

<div class="sidemenu catalog__sidemenu js-scroll" data-sidemenu-page="catalog">

    <div class="js-scroll-wrapper">

        <?php foreach ($arResult as $arItem): ?>

            <div class="sidemenu__item catalog__sidemenu-item">
                <a class="sidemenu__link catalog__sidemenu-link"
                   href="#">
                    <?= $arItem; ?>
                </a>
                <div class="sidemenu__subsidemenu catalog__subsidemenu"></div>
            </div>

        <?php endforeach; ?>

    </div>

</div>
