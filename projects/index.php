<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Работы");
?>

    <div class="projects">
        <div class="container">
            <div class="projects__nav">
                <h1 class="title projects__title">Примеры работ по</h1>
                <select class="projects__select" name="projects">
                    <option value="0">всем услугам</option>
                    <option value="1">Печать больших изображений</option>
                    <option value="2">Печать для интерьера</option>
                    <option value="3">УФ печать на плоских материалах</option>
                    <option value="4">Полиграфия</option>
                    <option value="5">Вспомогательные (сопутствующие) услуги</option>
                    <option value="6">Технологические возможности</option>
                    <option value="7">Вывески и стенды</option>
                    <option value="8">Наружная реклама</option>
                    <option value="9">POS материалы</option>
                    <option value="10">Оформление музеев, выставок и конференций</option>
                    <option value="11">Создание материалов для запоминающихся событий</option>
                </select>
            </div>
            <div class="projects__items">
                <div class="projects__item projects__item--larger projects__item-banner"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="subtitle projects__item-title">Название банера</h2>
                        <p class="projects__item-descr">Многие разновидности печатной продукции визуальной рекламы, которые нас окружают, сделаны именно с ее помощью. </p>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
                <div class="projects__item"><img class="projects__item-bg" src="https://picsum.photos/300/250"/><a class="projects__item-content" href="project.html">
                        <h2 class="projects__item-title">Печать на сетке</h2>
                        <p class="projects__item-link">Подробнее</p></a></div>
            </div>
            <div class="pagination">
                <div class="pagination__btn-prev"></div>
                <div class="pagination__page-numbers"><a class="pagination__page-number pagination__page-number--current" href="#">1</a><a class="pagination__page-number" href="#">2</a><a class="pagination__page-number" href="#">3</a><a class="pagination__page-number" href="#">4</a><a class="pagination__page-number" href="#">5</a></div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>