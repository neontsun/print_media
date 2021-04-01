<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<? if ($arResult["isFormErrors"] == "Y"): ?>

    <?=$arResult["FORM_ERRORS_TEXT"];?>

<? endif; ?>

<? if($arResult["isFormNote"] == "Y"): ?>

    <p style="color: #000000;">Заявка отправлена, в скором времени мы вам перезвоним!</p>

<? else: ?>

    <?=
        $arResult["FORM_HEADER"] = str_replace(
            '<form',
            '<form class="primary-form__body form callback-popup__form"',
            $arResult["FORM_HEADER"]
        );
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

    <p class="primary-form__confirm project-popup__descr">
        Мы перезваниваем в рабочие дни с&nbsp;9&nbsp;-&nbsp;00&nbsp;до&nbsp;18&nbsp;-&nbsp;00
    </p>
    <p class="primary-form__confirm callback-popup__confirm">
        Нажимая на кнопку «Отправить заявку» вы даёте своё
        <a class="primary-form__confirm-link callback-popup__confirm-link" href="#">
            согласие на обработку персональных данных
        </a>
    </p>

    <script>
        const projectPopup = document.querySelector('#js-project-popup');
        const projectInputs = projectPopup.querySelectorAll('.inputtext');
        const projectTextarea = projectPopup.querySelectorAll('.inputtextarea');

        projectInputs.forEach(input => {

            if (input.previousElementSibling.innerHTML.trim() === 'Телефон')
                input.type = 'tel';
            else if (input.previousElementSibling.innerHTML.trim() === 'E-mail')
                input.type = 'email';

            input.classList.add('primary-form__field', 'callback-popup__field');

        });

        projectTextarea.forEach(textarea => {

            textarea.classList.add('primary-form__field--textarea');

        });
    </script>

<? endif; ?>