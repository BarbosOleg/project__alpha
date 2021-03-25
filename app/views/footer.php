<footer>
    <div class="footer__row">
        <!-- upper footer with information about site -->
        <div class="upper__footer">
            <div class="slideshow__container">
                <!-- slide-elements -->
                <div class="slideshow__element">
                    <img src="<?= ASSETS?>pa/img/s1.png" alt="img">
                </div>
                <div class="slideshow__element">
                    <img src="<?= ASSETS?>pa/img/s2.png" alt="img">
                </div>
                <div class="slideshow__element">
                    <img src="<?= ASSETS?>pa/img/tsetus.jpg" alt="img">
                </div>
                <!-- slide-control-buttons -->
                <div class="slide__control">
                    <button class="prev__button slide__btn" onclick="plusSlides(-1)">
                        <i class="arrow left"></i>
                    </button>
                    <button class="next__button slide__btn" onclick="plusSlides(1)">
                        <i class="arrow right"></i>
                    </button>
                </div>
                <!-- slide-control-dots -->
                <div class="slide__dots" style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <!-- copyright block -->
        <div class="lower__footer">
            <div class="footer__copyright">Copyright &copy Barbos Oleg, All right reserved</div>
        </div>
    </div>
    <script type="text/javascript" src="<?= ASSETS?>pa/js/slide.js"></script>
    <script src="<?= ASSETS?>pa/js/user-interface.js"></script>
    <script src="<?= ASSETS?>pa/js/page-config.js"></script>
</footer>
</div>
</body>

</html>