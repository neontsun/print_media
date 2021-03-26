<img class="header__logo" src="" alt="" />

<script>
    const logo = document.querySelector('.header__logo');
    if (document.documentElement.clientWidth > 1239)
        logo.src = '<?= SITE_TEMPLATE_PATH; ?>/img/icons/logo.png';
    else
        logo.src = '<?= SITE_TEMPLATE_PATH; ?>/img/icons/logo-mob.png';
</script>