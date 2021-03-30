<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы");
?>

    <div class="primary">
        <div class="container-sm">
            <div class="breadcrumbs subservice-page__breadcrumbs">
                <ul class="breadcrumbs__list" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
                    <div itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <li class="breadcrumbs__list-item">
                            <a class="breadcrumbs__list-link" href="/">Главная</a>
                            <meta itemprop="position" content="1"/>
                        </li>
                    </div>
                    <div itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <li class="breadcrumbs__list-item  breadcrumbs__list-item--is-current">
                            <a class="breadcrumbs__list-link" href="/faq">Вопросы</a>
                            <meta itemprop="position" content="2"/>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="default">
            <div class="container-sm">
                <h1 class="title faq__title">Часто задаваемые вопросы</h1>

                <div class="faq">

                    <!-- Вопросы -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/faq_item.php"
                            )
                        );
                    ?>

                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>