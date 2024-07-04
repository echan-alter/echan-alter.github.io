<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__container container grid">
        <div>
            <h1 class="footer__title">
                <span>M. Eric Chaniago</span>
            </h1>

            <h2 class="footer__education">
                Student of UIN SUSKA Riau
            </h2>
        </div>

        <div class="footer__social">
            <a href="" target="_blank" class="footer__social-link">
                <i class="ri-github-fill"></i>
            </a>

            <a href="" target="_blank" class="footer__social-link">
                <i class="ri-linkedin-fill"></i>
            </a>

            <a href="" target="_blank" class="footer__social-link">
                <i class="ri-facebook-fill"></i>
            </a>

            <a href="" target="_blank" class="footer__social-link">
                <i class="ri-instagram-fill"></i>
            </a>
        </div>

        <span class="footer__copy">
            &#169; Copyright echan. All rights reserved
        </span>
    </div>
</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
</a>


<!--=============== SCROLLREVEAL ===============-->
<script src="assets/js/scrollreveal.min.js"></script>

<!--=============== EMAIL JS ===============-->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<!--=============== Owl Carousel Slider ===============-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    loop: true
                },
                576: {
                    items: 1,
                    nav: true,
                    dots: false
                },
                768: {
                    items: 2
                },
                1023: {
                    items: 2,
                    margin: 5
                },
                1141: {
                    items: 3,
                    margin: 5
                }
            }
        });
    });
</script>

</body>

</html>