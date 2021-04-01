<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (empty($arResult)) return; ?>

<nav class="header__nav">
    <ul class="header__nav-list">

        <? $index = 0; ?>
        <? foreach($arResult as $arItem): ?>

            <? if ($index < 4): ?>

                <li class="header__nav-item">
                    <a class="header__nav-link"
                       href="<?= $arItem["LINK"]; ?>">
                        <?= $arItem["TEXT"]; ?>
                    </a>
                </li>

                <? $index++; ?>

            <? endif; ?>

        <? endforeach; ?>

        <? if ($index == 4): ?>

            <li class="header__nav-item header__nav-item--has-included">
                <div class="header__nav-link header__nav-link--showing">
                    Ещё
                    <span class="header__nav-link-arrow"></span>
                </div>
                <ul class="header__nav-list header__nav-list--included">

                    <? $index = 0; ?>
                    <? foreach($arResult as $arItem): ?>

                        <? if ($index >= 4): ?>

                            <li class="header__nav-item header__nav-item--included">
                                <a class="header__nav-link header__nav-link--included"
                                   href="<?= $arItem["LINK"]; ?>">
                                    <?= $arItem["TEXT"]; ?>
                                </a>
                            </li>

                        <? endif; ?>

                        <? $index++; ?>

                    <? endforeach; ?>

                </ul>
            </li>

        <? endif; ?>

    </ul>
</nav>
