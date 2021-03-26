<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?$APPLICATION->ShowTitle();?></title>
        <?
            Asset::getInstance()->addString('<meta charset="UTF-8"/>');
            Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/plugins/swiper.min.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/plugins/magnific-popup.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/plugins/selectric.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.min.css');
            Asset::getInstance()->addJs('https://api-maps.yandex.ru/2.1/?apikey=e9f29db0-96fa-4f1e-9205-d29880e8157f&amp;lang=ru_RU');
            $APPLICATION->ShowHead();
        ?>
    </head>
    <body id="page-start">

        <div id="panel"><?$APPLICATION->ShowPanel();?></div>

        <div class="body-wrap-scroll">

            <header class="header">
                <div class="container header__container">

                    <!-- Логотип -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/logo.php"
                            )
                        );
                    ?>

                    <!-- Компонент нав-бара -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "nav",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "nav"
                            ),
                            false
                        );
                    ?>

                    <!-- Компонент формы поиска -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:search.form",
                            "search",
                            Array(
                                "PAGE" => "#SITE_DIR##",
                                "USE_SUGGEST" => "N"
                            )
                        );
                    ?>

                    <!-- Компонент заказа звонка -->
                    <div class="header__info">
                        <!-- Область контактного телефона -->
                        <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/contact_phone.php"
                                )
                            );
                        ?>
                        <!-- Область графика работы -->
                        <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/working_time.php"
                                )
                            );
                        ?>
                    </div>
                    <div class="primary-btn header__callback-button" data-popup-selector="#js-callback-popup">
                        Заказать звонок
                    </div>

                    <div class="header__burger"></div>

                </div>
                <div class="header__burger-menu">
                    <div class="container header__burger-container"></div>
                </div>
            </header>

            <a class="btn-start btn-start-desk" href="#page-start"></a>
