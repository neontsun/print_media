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

<?php foreach ($arResult as $key => $arItem): ?>

	<div class="catalog__section">
		
		<h2 class="catalog__section-title"><?= $key; ?></h2>
		
		<div class="catalog__section-list">
			
			<?php foreach($arItem['child'] as $item): ?>
				
				<a class="catalog__subservice" 
					 href="/catalog/<?= $arItem['code'] . '/' . $item['code']; ?>"
				>
					<img class="catalog__subservice-bg" src="<?= $item['picture']; ?>" alt="" />
					<div class="catalog__subservice-content">
						<span class="catalog__subservice-label">
							<?php if ($item['special'] == 1): ?>
								Специальное предложение
							<?php endif;?>
						</span>
						<span class="catalog__subservice-title"><?= $item['name']; ?></span>
					</div>
				</a>
				
			<?php endforeach; ?>
			
		</div>
			
	</div>

<?php endforeach; ?>
