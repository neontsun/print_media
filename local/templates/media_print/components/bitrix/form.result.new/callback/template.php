<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<? if ($arResult["isFormErrors"] == "Y"): ?>
    <?= $arResult["FORM_ERRORS_TEXT"]; ?>
<? endif; ?>

<?=$arResult["FORM_NOTE"]?>

<? if($arResult["isFormNote"] != "Y"): ?>

    <?= str_replace('<form',
                    '<form class="primary-form__body form callback-popup__form"',
                    $arResult["FORM_HEADER"]);
    ?>

    <? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>

        <? if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'): ?>

            <?= $arQuestion["HTML_CODE"]; ?>

        <? else: ?>

            <div class="primary-form__field-wrapper
                        callback-popup__field-wrapper
                        <?= $arQuestion['CAPTION'] == 'Телефон'
                            ? 'callback-popup__phone'
                            : '' ?>"
            >
                <label class="primary-form__label callback-popup__label">

                    <?= $arQuestion["CAPTION"]; ?>

                </label>
                <?= $arQuestion["HTML_CODE"]; ?>
            </div>

        <? endif; ?>

    <? endforeach; ?>

    <input class="primary-form__button callback-popup__button"
           type="submit"
           value="Отправить заявку"
           disabled="disabled"
           name="web_form_submit" />

    <?= $arResult["FORM_FOOTER"]; ?>

    <script>
        const callPopup = document.querySelector('#js-callback-popup');
        const callInputs = callPopup.querySelectorAll('.inputtext');

        callInputs.forEach(input => {

            if (input.previousElementSibling.innerHTML.trim() === 'Телефон')
                input.type = 'tel';

            input.classList.add('primary-form__field', 'callback-popup__field');

        });
    </script>

<? endif; ?>
