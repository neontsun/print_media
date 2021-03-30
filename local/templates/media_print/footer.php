<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>

                <? if ($APPLICATION->GetCurPage() == '/'): ?>

                    <div class="features">
                        <div class="container-sm">
                            <h2 class="subtitle features__title">О компании</h2>
                            
                            <!-- Область описания компании -->
                            <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about_company.php"
                                    )
                                );
                            ?>
                            
                        </div>
                    </div>

                <? endif; ?>

                <footer class="footer">
                    <div class="container-sm">
                        <div class="footer__container">
                            <div class="footer-left">
                                <div class="footer__contacts">
                                    <h4 class="footer__contacts-title">Контакты</h4>

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

                                    <div class="tooltip">
                                    
                                        <!-- Область контактного email'a -->
                                        <?
                                            $APPLICATION->IncludeComponent(
                                                "bitrix:main.include",
                                                "",
                                                Array(
                                                    "AREA_FILE_SHOW" => "file",
                                                    "AREA_FILE_SUFFIX" => "inc",
                                                    "EDIT_TEMPLATE" => "",
                                                    "PATH" => "/include/contact_email.php"
                                                )
                                            );
                                        ?>

                                        <script>
                                            const email = document.querySelector('.footer__email');
                                            const text = email.innerText;
                                            email.dataset.value = 'mailto:' + text;

                                            if (window.location.pathname === '/contacts/') {
                                                email.href = 'mailto:' + text;
                                                email.classList.remove(email.classList[0]);
                                                email.classList.add('contacts__info-link', 'contacts__info-link--email');
                                            }
                                        </script>

                                        <span class="tooltiptext" data-event="copyEmailTooltip">
                                            При нажатии будет скопировано в буфер обмена
                                        </span>
                                    </div>

                                    <span class="footer__worktime">
                                    
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
                                        
                                    </span>

                                    <div class="primary-btn footer__callback-button" data-popup-selector="#js-callback-popup">
                                        Заказать звонок
                                    </div>
                                </div>
                            <div class="footer__contacts">
                                <a class="footer__payment-title" href="./checkout.html">
                                    Способы оплаты
                                </a>
                                <a class="footer__payment-link" href="./checkout.html">Visa</a>
                                <a class="footer__payment-link" href="./checkout.html">Mastercard</a>
                                <a class="footer__payment-link" href="./checkout.html">Qiwi</a>
                                <a class="footer__payment-link" href="./checkout.html">Яндекс.Деньги</a>
                                <a class="footer__payment-link" href="./checkout.html">Альфа-клик</a></div>
                                <div class="footer__info">
                                
                                    <!-- Область копирайта -->
                                    <?
                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/footer_secure.php"
                                            )
                                        );
                                    ?>
                                    
                                    <a class="footer__author" href="#" target="_blank" rel="noopener noreferrer"> </a>
                                </div>
                            </div>
                            <div class="footer-right">
                                <div class="footer__projects">
                                    <h4 class="footer__projects-title">Последние работы в Instagram</h4>
                                    <div class="footer__projects-list">
                                        <a class="footer__projects-item" href="#" target="_blank" rel="noopener noreferrer"></a>
                                        <a class="footer__projects-item" href="#" target="_blank" rel="noopener noreferrer"></a>
                                        <a class="footer__projects-item" href="#" target="_blank" rel="noopener noreferrer"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <div class="callback-popup" id="js-callback-popup">
                <div class="primary-form callback-popup__body">
                    <div class="primary-form__header callback-popup__header">
                    <h2 class="primary-form__title callback-popup__title">Заказать звонок</h2>
                    <div class="callback-popup__close"> </div>
                    </div>
                    <form class="primary-form__body form callback-popup__form" action="#">
                    <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__name">
                        <label class="primary-form__label callback-popup__label" for="callback-popup__field-name">Имя</label>
                        <input class="primary-form__field callback-popup__field" type="text" id="callback-popup__field-name"/>
                    </div>
                    <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__phone">
                        <label class="primary-form__label callback-popup__label" for="callback-popup__field-phone">Телефон</label>
                        <input class="primary-form__field callback-popup__field" type="tel" id="callback-popup__field-phone"/>
                    </div>
                    <input class="primary-form__button callback-popup__button" type="submit" value="Отправить заявку" disabled="disabled"/>
                    </form>
                    <p class="primary-form__confirm callback-popup__confirm">Нажимая на кнопку «Отправить заявку» вы даёте своё <a class="primary-form__confirm-link callback-popup__confirm-link" href="#">согласие на обработку персональных данных</a></p>
                </div>
            </div>
            <div class="callback-popup project-popup" id="js-project-popup">
                <div class="primary-form callback-popup__body">
                    <div class="primary-form__header callback-popup__header">
                    <h2 class="primary-form__title callback-popup__title">Предложить проект</h2>
                    <div class="callback-popup__close"> </div>
                    </div>
                    <form class="primary-form__body form callback-popup__form" action="#">
                    <div class="primary-form__field-wrapper">
                        <label class="primary-form__label" for="project-popup__field-text">Описание проекта</label>
                        <textarea class="primary-form__field primary-form__field--textarea" placeholder="Текст вопроса" id="project-popup__field-text"></textarea>
                    </div>
                    <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__name">
                        <label class="primary-form__label callback-popup__label" for="project-popup__field-name">Компания</label>
                        <input class="primary-form__field callback-popup__field" type="text" id="project-popup__field-name"/>
                    </div>
                    <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__name">
                        <label class="primary-form__label callback-popup__label" for="project-popup__field-email">E-mail</label>
                        <input class="primary-form__field callback-popup__field" type="text" id="project-popup__field-email"/>
                    </div>
                    <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__phone">
                        <label class="primary-form__label callback-popup__label" for="project-popup__field-phone">Телефон</label>
                        <input class="primary-form__field callback-popup__field" type="tel" id="project-popup__field-phone"/>
                    </div>
                    <input class="primary-form__button callback-popup__button" type="submit" value="Отправить заявку" disabled="disabled"/>
                    </form>
                    <p class="primary-form__confirm project-popup__descr">Мы перезваниваем в рабочие дни с&nbsp;9&nbsp;-&nbsp;00&nbsp;до&nbsp;18&nbsp;-&nbsp;00</p>
                    <p class="primary-form__confirm callback-popup__confirm">Нажимая на кнопку «Отправить заявку» вы даёте своё <a class="primary-form__confirm-link callback-popup__confirm-link" href="#">согласие на обработку персональных данных</a></p>
                </div>
            </div>
            <div class="callback-popup question-popup" id="js-question-popup">
                <div class="primary-form callback-popup__body">
                    <div class="primary-form__header">
                        <h3 class="primary-form__title">Не можете подобрать?</h3>
                        <div class="callback-popup__close"> </div>
                    </div>
                    <form class="primary-form__body">
                        <div class="primary-form__field-wrapper">
                            <label class="primary-form__label" for="question-popup__field-text">Вопрос</label>
                            <textarea class="primary-form__field primary-form__field--textarea" placeholder="Текст вопроса"
                                      id="question-popup__field-text"></textarea>
                        </div>
                        <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__name">
                            <label class="primary-form__label callback-popup__label" for="question-popup__field-email">E-mail</label>
                            <input class="primary-form__field callback-popup__field" type="email" id="question-popup__field-email" />
                        </div>
                        <div class="primary-form__field-wrapper">
                            <label class="primary-form__label" for="question-popup__field-phone">Телефон</label>
                            <input class="primary-form__field" type="tel" id="question-popup__field-phone" />
                        </div>
                        <input class="primary-form__button" type="submit" value="Спросить совета" disabled="disabled" />
                    </form>
                    <p class="primary-form__confirm">Нажимая на кнопку «Отправить заявку» вы даёте своё <a
                                class="primary-form__confirm-link" href="#">согласие на обработку персональных данных</a></p>
                </div>
            </div>
            <div class="callback-popup requirements-popup" id="js-requirements-popup">
    <div class="primary-form callback-popup__body requirements-popup__body">
        <div class="primary-form__header">
            <h3 class="primary-form__title">Полные требования</h3>
            <div class="callback-popup__close"></div>
        </div>
        <div class="requirements-popup__content">
            <div class="info info-list info-list--hide-dot">
                <ul class="info-list__items">
                    <li class="info-list__item">Формат .tiff, вес до 300мб без компрессии</li>
                    <li class="info-list__item">Однослойный</li>
                    <li class="info-list__item">Палитра CMYK (версия U.S. Web Coated v2) 8 бит</li>
                    <li class="info-list__item">В реальном размере, без вылетов</li>
                    <li class="info-list__item">Разрешение до 180 dpi</li>
                    <li class="info-list__item">Без альфа-каналов</li>
                    <li class="info-list__item">Формат .tiff, вес до 300мб без компрессии</li>
                    <li class="info-list__item">Однослойный</li>
                    <li class="info-list__item">Палитра CMYK (версия U.S. Web Coated v2) 8 бит</li>
                    <li class="info-list__item">В реальном размере, без вылетов</li>
                    <li class="info-list__item">Разрешение до 180 dpi</li>
                    <li class="info-list__item">Без альфа-каналов</li>
                    <li class="info-list__item">Формат .tiff, вес до 300мб без компрессии</li>
                    <li class="info-list__item">Однослойный</li>
                    <li class="info-list__item">Палитра CMYK (версия U.S. Web Coated v2) 8 бит</li>
                    <li class="info-list__item">В реальном размере, без вылетов</li>
                    <li class="info-list__item">Разрешение до 180 dpi</li>
                    <li class="info-list__item">Без альфа-каналов</li>
                    <li class="info-list__item">Формат .tiff, вес до 300мб без компрессии</li>
                    <li class="info-list__item">Однослойный</li>
                    <li class="info-list__item">Палитра CMYK (версия U.S. Web Coated v2) 8 бит</li>
                    <li class="info-list__item">В реальном размере, без вылетов</li>
                    <li class="info-list__item">Разрешение до 180 dpi</li>
                    <li class="info-list__item">Без альфа-каналов</li>
                </ul>
            </div>
        </div>
    </div>
</div>
            <div class="callback-popup question-popup" id="js-request-popup">
    <div class="primary-form callback-popup__body">
        <div class="primary-form__header">
            <h3 class="primary-form__title">Оставить заявку</h3>
            <div class="callback-popup__close"> </div>
        </div>
        <form class="primary-form__body">
            <div class="primary-form__field-wrapper callback-popup__field-wrapper callback-popup__name">
                <label class="primary-form__label callback-popup__label" for="question-popup__field-email">E-mail</label>
                <input class="primary-form__field callback-popup__field" type="email" id="question-popup__field-email"/>
            </div>
            <div class="primary-form__field-wrapper">
                <label class="primary-form__label" for="question-popup__field-phone">Телефон</label>
                <input class="primary-form__field" type="tel" id="question-popup__field-phone"/>
            </div>
            <div class="primary-form__field-wrapper">
                <textarea class="primary-form__field primary-form__field--textarea" placeholder="Текст заявки" id="question-popup__field-text"></textarea>
            </div>
            <input class="primary-form__button" type="submit" value="Отправить заявку" disabled="disabled"/>
        </form>
        <p class="primary-form__confirm">Нажимая на кнопку «Отправить заявку» вы даёте своё <a class="primary-form__confirm-link" href="#">согласие на обработку персональных данных</a></p>
    </div>
</div>
        </div>
        
        <?php
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/libs/jquery.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/swiper.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/magnific-popup.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/jquery.selectric.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/jquery.maskedinput.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/jquery.nicescroll.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.min.js');
        ?>
        
    </body>
</html>
