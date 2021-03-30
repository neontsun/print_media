<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?>

    <div class="checkout">
        <div class="container-sm">
            <h1 class="title checkout__title">Оплата заказа</h1>
            <div class="checkout__payment-info">

                <!-- Ифнормация об оплате -->
                <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/checkout_payment-info.php"
                        )
                    );
                ?>

            </div>
            <form class="checkout__form checkout__form--step-2" action="">
                <div class="checkout__payment-type">
                    <h3 class="primary-form__title checkout__form-title">Выберите способ оплаты</h3>
                    <div class="checkout__payment-select">
                        <div class="checkout__payment-items">
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type" checked="checked"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Со счёта а Яндекс.Деньгах (яндекс кошелёк)</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">С банковской карты</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Оплата по коду через терминал</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Оплата со счёта WebMoney</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Оплата через Альфа–Клик</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Оплата через Промсвязьбанк</label>
                            </div>
                            <div class="checkout__payment-item primary-form__radio-wrapper checkout__payment-item-wrapper">
                                <input class="primary-form__radio checkout__radio" type="radio" name="payment-type"/>
                                <div class="primary-form__radio-custom"></div>
                                <label class="primary-form__select-label">Оплата через MasterPass</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="primary-form__title checkout__form-title">Укажите информацию о заказе</h3>
                <div class="checkout__form-number">
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper checkout__form-field-number">
                        <label class="primary-form__label checkout__form-label" for="#">Номер заказа</label>
                        <input class="primary-form__field checkout__form-field number-f" type="text" value="1234567890"/>
                    </div>
                    <div class="primary-form__button number-btn-f">Проверить</div>
                </div>
                <div class="checkout__order-info">
                    <h4 class="section-title checkout__form-section-title">Информация по вашему заказу</h4>
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#">Сумма оплаты, руб</label>
                        <input class="primary-form__field checkout__form-field" type="text" readonly="readonly"/>
                    </div>
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#">Итоговая сумма  с учётом комиссии, руб</label>
                        <input class="primary-form__field checkout__form-field" type="text" readonly="readonly"/>
                    </div>
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#"> ФИО</label>
                        <input class="primary-form__field checkout__form-field" type="text"/>
                    </div>
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#">E-mail</label>
                        <input class="primary-form__field checkout__form-field" type="email"/>
                    </div>
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#">Содержание заказа</label>
                        <input class="primary-form__field checkout__form-field checkout__form-field--larger" type="text" readonly="readonly"/>
                    </div>
                    <input class="primary-form__button" type="submit" value="Оплатить" disabled="disabled"/>
                    <p class="primary-form__confirm checkout__form-confrim">Нажимая на кнопку «Отправить заявку» вы даёте своё <a class="primary-form__confirm-link" href="#">согласие на обработку персональных данных</a></p>
                </div>
            </form>
            <div class="checkout__order-number">
                <form class="checkout__form number-form" action="">
                    <div class="primary-form__field-wrapper checkout__form-field-wrapper">
                        <label class="primary-form__label checkout__form-label" for="#">Номер заказа</label>
                        <input class="primary-form__field checkout__form-field number-value" type="text"/>
                    </div>
                    <input class="primary-form__button" type="submit" value="Проверить"/>
                </form>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>