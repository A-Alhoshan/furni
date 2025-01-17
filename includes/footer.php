 <script src="<?= $jsAssets ?>/glider.js"></script>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToScroll: 1,
            slidesToShow: 4,
            responsive: [
            {

                    breakpoint: 0,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        duration: 0.5,
                        arrows: {
                            prev: ".glider-prev",
                            next: ".glider-next"
                        }
                    }
                },    
            {

                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        duration: 0.5,
                        arrows: {
                            prev: ".glider-prev",
                            next: ".glider-next"
                        }
                    }
                },
                {

                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        duration: 0.5,
                        arrows: {
                            prev: ".glider-prev",
                            next: ".glider-next"
                        }
                    }
                }
            ],
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>

    <script src="<?= $jsAssets ?>/jquery.js"></script>
    <script src="<?= $jsAssets ?>/owl.carousel.min.js"></script>
    <script src="<?= $jsAssets ?>/owl-script.js"></script>

    <footer>
        <section>
            <div class="footer-bar" id="footer-bar">
                <div class="col1" id="logo-text">
                    <h1>Furni</h1>
                    <p> See , Order , Donaite , Become all in one throguht our website
                    </p>
                </div>
                <div class="col2" id="services">
                 <h3 class="footer-orange">Quick Links</h3>
                 <p class="footer-text-list"><a href="/furniture_donation/shop.php">Library</a></p>
                  <p class="footer-text-list"><a href="/furniture_donation/signup.php">Sign Up</a></p>
                 <p class="footer-text-list"><a href="/furniture_donation/login.php">Login</a></p>
                 <p class="footer-text-list"><a href="/furniture_donation/profile.php">Profile</a></p>
                </div>

                <div class="col2" id="furnitures">
                    <h3 class="footer-orange">Furniture</h3>
                    <p class="footer-text-list">Beds</p>
                    <p class="footer-text-list">Chairs</p>
                    <p class="footer-text-list">And More</p>
                </div>
                <div class="col2" id="follow-us">
                    <h3 class="footer-orange">Follow Us</h3>

                    <p class="footer-text-list">
                        <span><i class="fa fa-twitter"></i>&nbsp;</span>
                        <span>Twitter</span>
                    </p>
                    <p class="footer-text-list">
                        <span><i class="fa fa-instagram"></i>&nbsp;&nbsp;</span>
                        <span>Instagram</span>
                    </p>
                    <p class="footer-text-list">
                        <span><i class="fa fa-facebook">&nbsp;&nbsp;</i></span>
                        <span>Facebook</span>
                    </p>
                </div>
            </div>
            <div class="copyright" id="copyright">
                <div class="copy-text">
                   SWE381 | &copy; Copyright 2023
                </div>
                <div class="terms-text">
                    Terms & Conditions &emsp; &emsp; &emsp;
                    Policy Privacy &emsp; &emsp; &emsp;
                    
                    <a href="/furniture_donation/ContactUs.php">Contact Us</a>
                    
                    &emsp; &emsp; &emsp;
                    
                    <a href="/furniture_donation/Faqs.php">FAQs</a> 
                </div>
            </div>
        </section>
    </footer>
</body>
</html>