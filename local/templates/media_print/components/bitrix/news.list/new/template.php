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

<? foreach($arResult['result'] as $key => $item): ?>

    <div class="catalog__service hover">
        <img class="catalog__service-bg" src="<?= $item['picture']; ?>"/>
        <div class="catalog__service-cover">
            <div class="catalog__service-header">
                <span class="catalog__service-title"><?= $key ?></span>
                <span class="catalog__service-descr"> </span></div>
            <div class="catalog__service-signature">
                <span class="counter-all-links"><?= count($item['child']); ?></span>
            </div>
        </div>
        <div class="catalog__service-content">
            <ul class="catalog__subservices">

                <? foreach($item['child'] as $object): ?>

                    <li class="catalog__subservices-item">
                        <a class="catalog__subservices-link"
                           href="/catalog/<?= $item['code'] . '/' . $object['code']; ?>">
                            <?= $object['name']; ?>
                        </a>
                    </li>

                <? endforeach; ?>

            </ul>
            <span class="catalog__service-link"> </span>
        </div>
    </div>

<? endforeach; ?>

<div class="catalog__service catalog__service--special">
    <img class="catalog__service-bg" src="<?= SITE_TEMPLATE_PATH; ?>/img/index/12.jpg"/>
    <div class="catalog__service-cover">
        <div class="catalog__service-header">
            <span class="catalog__service-title">Специальные проекты</span>
            <span class="catalog__service-descr"> </span></div>
        <div class="catalog__service-signature catalog__service-signature--special"
             data-popup-selector="#js-project-popup">
            Предложить проект
        </div>
        <span class="catalog__service-link catalog__service-link--special"></span>
    </div>
</div>

