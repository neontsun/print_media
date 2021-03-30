<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

    <div class="container-sm">
        <div class="container-col-2 about about__container">

            <div class="sidebar about__sidebar">

                <h1 class="title about__title">О компании</h1>

                <div class="sidemenu about__sidemenu" data-sidemenu-page="about">
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link is-active" href="#">О компании</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">История</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">Отзывы и благодарственные письма</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">Команда</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">Вакансии</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">Партнёрство</a>
                    </div>
                    <div class="sidemenu__item about__sidemenu-item">
                        <a class="sidemenu__link about__sidemenu-link" href="#">Оборудование и материалы</a>
                    </div>
                </div>

            </div>

            <div class="primary about__primary">

                <!-- Короткое описание -->
                <?php

                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about_short-description.php"
                        )
                    );

                ?>

                <div class="about__section">
                    <h2 class="subtitle about__subtitle">О компании</h2>

                    <!-- О компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_about-company.php"
                            )
                        );

                    ?>

                    <div class="photo__slider">
                        <div class="swiper-container js-photo-slider photo__container">
                            <div class="swiper-wrapper photo__wrapper">

                                <!-- Фото о компании -->
                                <?php

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/about_about-company-photo.php"
                                        )
                                    );

                                ?>

                            </div>
                            <div class="swiper-pagination slider-pagination js-photo-pagination photo__pagination"></div>
                        </div>
                        <div class="swiper-button-prev slider-button-prev js-photo-btn-prev photo__btn-prev"></div>
                        <div class="swiper-button-next slider-button-next js-photo-btn-next photo__btn-next"></div>
                    </div>
                </div>

                <div class="about__section">
                    <h2 class="subtitle about__subtitle">История</h2>

                    <!-- История компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_history.php"
                            )
                        );

                    ?>

                </div>

                <div class="about__section">
                    <h2 class="subtitle about__subtitle">Отзывы и благодарственные письма</h2>

                    <!-- Отзывы о компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_feedback.php"
                            )
                        );

                    ?>

                    <div class="reviews__slider"><div class="swiper-container js-reviews-slider reviews__container">
                            <div class="swiper-wrapper reviews__wrapper">
                                <div class="swiper-slide reviews__slide">
                                    <p class="reviews__slide-intro">Все быстро, класс!</p>
                                    <p class="reviews__slide-descr">
                                        Текст отзыва после окончания рекламных акций нанесенная пленка с более
                                        сильным и стойким клеевым слоем продолжала существовать на полу в виде
                                        неприглядного пятна, напоминая владельцам торговых площадей о неудачном опыте.
                                    </p>
                                    <div class="reviews__slide-images">
                                        <a class="image-link reviews__slide-img-link" href="https://picsum.photos/500/500">
                                            <img class="reviews__slide-img" src="https://picsum.photos/300/250" alt=""/>
                                        </a>
                                        <a class="image-link reviews__slide-img-link" href="https://picsum.photos/500/500">
                                            <img class="reviews__slide-img" src="https://picsum.photos/300/250" alt=""/>
                                        </a>
                                    </div>
                                    <p class="reviews__slide-author">Семина Евгения, специалист по рекламе. Компания Останкино</p>
                                </div>
                                <div class="swiper-slide reviews__slide">
                                    <p class="reviews__slide-intro">Все быстро, класс!</p>
                                    <p class="reviews__slide-descr">Текст отзыва после окончания рекламных акций
                                        нанесенная пленка с более сильным и стойким клеевым слоем продолжала
                                        существовать на полу в виде неприглядного пятна, напоминая владельцам
                                        торговых площадей о неудачном опыте.
                                    </p>
                                    <p class="reviews__slide-author">Семина Евгения, специалист по рекламе. Компания Останкино</p>
                                </div>
                            </div>
                            <div class="swiper-scrollbar slider-scrollbar js-reviews-scrollbar reviews__slider-scrollbar"></div>
                        </div>
                        <div class="swiper-button-prev slider-button-prev js-reviews-btn-prev reviews__btn-prev"></div>
                        <div class="swiper-button-next slider-button-next js-reviews-btn-next reviews__btn-next"></div>
                    </div>
                </div>
                <div class="about__section">
                    <h2 class="subtitle about__subtitle">Команда</h2>

                    <!-- Команда компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_team.php"
                            )
                        );

                    ?>

                </div>
                <div class="about__section">
                    <h2 class="subtitle about__subtitle">Вакансии</h2>

                    <!-- Вакансии компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_vacancies.php"
                            )
                        );

                    ?>

                </div>
                <div class="about__section">
                    <h2 class="subtitle about__subtitle">Партнёрство</h2>

                    <!-- Партнерство компании -->
                    <?php

                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about_partner.php"
                            )
                        );

                    ?>

                </div>
                <div class="about__section">
                    <h2 class="subtitle about__subtitle">Оборудование и материалы</h2>
                    <div class="about__subsection">
                        <h3 class="about__section-title">Оборудование</h3>
                        <div class="search-list">
                            <div class="search-list__items">

                                <!-- Оборудование компании -->
                                <?php

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/about_equipment.php"
                                        )
                                    );

                                ?>

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
                        </div>
                    </div>
                    <div class="about__subsection">
                        <h3 class="about__section-title">Материалы</h3>
                        <div class="search-list">
                            <div class="search-list__items">

                                <!-- Материалы компании -->
                                <?php

                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/about_materials.php"
                                        )
                                    );

                                ?>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>