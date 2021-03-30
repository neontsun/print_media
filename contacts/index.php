<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <div class="container-sm">
        <div class="contacts__header">
            <h1 class="title contacts__title">Контакты</h1>
        </div>
    </div>
    <div class="container-sm">
        <div class="container-col-2 contacts__container">
            <div class="sidebar contacts__sidebar">
                <div class="contacts__info contacts__info--links">
                    <h3 class="contacts__info-title">Отдел клиенского сервиса</h3>

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

                    <!-- Область контактного телефона -->
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

                    <span class="contacts__info-worktime">

                        <!-- Область контактного телефона -->
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

                    <div class="primary-btn contacts__info-button" data-popup-selector="#js-request-popup">
                        Оставить заявку
                    </div>
                </div>
                <div class="contacts__info contacts__info--address">

                    <!-- Юридичиский и фактический адрес -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/contacts_uraddress.php"
                            )
                        );
                    ?>

                </div>
                <div class="contacts__info contacts__info--m-address">

                    <!-- Почтовый адрес -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/contacts_mailaddress.php"
                            )
                        );
                    ?>

                </div>
                <div class="contacts__info contacts__info--director">

                    <!-- Контакты директора -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/contacts_director-info.php"
                            )
                        );
                    ?>

                    <div class="primary-btn contacts__info-button contacts__info-button--director"
                         data-popup-selector="#js-callback-popup">
                        Обратная связь
                    </div>
                </div>
                <div class="contacts__info contacts__info--way">

                    <!-- Как добраться -->
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/contacts_how-walk.php"
                            )
                        );
                    ?>

                </div>
                <div class="socials contacts__socials">
                    <span class="socials__descr contacts__socials-descr">Отправить в соцсети или мэссенджере:</span>
                    <div class="socials__icons contacts__socials-icons">

                        <a class="socials__icon socials__icon--vk" href="#" target="_blank" rel="noopener noreferrer"></a>
                        <a class="socials__icon socials__icon--inst" href="#" target="_blank" rel="noopener noreferrer"></a>
                        <a class="socials__icon socials__icon--fb" href="#" target="_blank" rel="noopener noreferrer"></a>

                    </div>
                </div>
            </div>
            <div class="primary contacts__primary">
                <div class="contacts__map" id="map"></div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>