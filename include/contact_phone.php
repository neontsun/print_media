<a class="contact__phone" href="tel:88004815162">8 800 481 51 62</a><script>
    const phone = document.querySelectorAll('.contact__phone');
    phone.forEach(el => {
        if (el.parentNode.parentNode.classList[0] === 'footer__contacts')
            el.classList.add('footer__phone');
        else
            el.classList.add('header__info-phone');
    });
</script>