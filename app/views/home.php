<!-- header start -->
<?php $this->view("header") ?>
<!-- header end -->
<!-- content start -->
<div class="content__block">
    <!-- Main block -->
    <div class="content__container">
        <div class="content__posts">
            <!-- Posts start -->
            <div class="post__wrapper">
                <!-- test content block 1 -->
                <div class="content__header">
                    <div class="content__user">
                        <a href="#">
                            <div class="content__user__nickname">
                                <img src="<?= ASSETS?>pa/img/user_avatar.png" alt="user__avatar" class="user__avatar">
                                Vladislav
                            </div>
                        </a>
                    </div>
                    <div class="content__title">
                        Trinity
                    </div>
                </div>
                <div class="content__description">
                    <p><span style="color: brown;">Trinity</span> este un Warframe bazat pe suport. Abilitățile ei favorizează restaurarea și conservarea în locul distrugerii.
                        Puterile de scurgere îi transformă pe inamici în surse de viață și energie, în timp ce puterile defensive își
                        redirecționează și disipează atacurile asupra ei și a echipei sale.</p>
                </div>
                <div class="content__image">
                    <img src="<?= ASSETS?>pa/img/wf--trinity.jpeg" alt="image">
                </div>
            </div>
            <div class="post__wrapper">
                <!-- test content block 2 -->
                <div class="content__header">
                    <!-- user information in post block -->
                    <div class="content__user">
                        <a href="#">
                            <div class="content__user__nickname">
                                <img src="<?= ASSETS?>pa/img/user_avatar.png" alt="user__avatar" class="user__avatar">
                                Vladislove
                            </div>
                        </a>
                    </div>
                    <div class="content__title">
                        Wisp
                    </div>
                </div>
                <div class="content__description">
                    <p>Bântuind intersecțiile spațiale dintre ușile dimensionale, vrăjitoarea eterică Wisp convoacă apariții ciudate de dincolo
                        de breșă. Separați-i sufletul pentru a scăpa de moarte, furați privirea din ochii dușmanului și vaporizați-i totul
                        înaintea flăcării luminii noastre cerești.</p>
                </div>
                <div class="content__image">
                    <img src="<?= ASSETS?>pa/img/wf--wisp.jpeg" alt="image">
                </div>
            </div>
            <!-- Posts end -->
            <!-- Pagination start -->
            <div class="content__pagination">
                <div class="previous_page pagination">
                    <a href=""><i class="arrow left"></i> Previous</a>
                </div>
                <div>...</div>
                <div class="next__page pagination">
                    <a href="">Next <i class="arrow right"></i></a>
                </div>
            </div>
            <!-- Pagination start -->
        </div>
        <div class="content__sidebar">
            <div class="popular__posts sidebar__block">
                <h3 class="sidebar__heading">Popular posts</h3>
                <a href="#">#drop</a>
                <a href="#">#farm</a>
                <a href="#">#price</a>
                <a href="#">#primegarbage</a>
                <a href="#">#builds</a>
                <a href="#">#fashionframes</a>

            </div>
            <div class="social__media sidebar__block">
                <h3 class="sidebar__heading">Find Us</h3>
                <a href="https://www.facebook.com" target="_blank"><img src="<?= ASSETS?>pa/img/facebook.png" alt="Facebook" class="social__media__icon"></a>
                <a href="https://www.instagram.com" target="_blank"><img src="<?= ASSETS?>pa/img/instagram.png" alt="Instagram" class="social__media__icon"></a>
                <a href="https://www.youtube.com" target="_blank"><img src="<?= ASSETS?>pa/img/youtube.png" alt="Youtube" class="social__media__icon"></a>
                <a href="https://web.telegram.org" target="_blank"><img src="<?= ASSETS?>pa/img/telegram.png" alt="Telegram" class="social__media__icon"></a>
                <a href="https://www.discord.com" target="_blank"><img src="<?= ASSETS?>pa/img/discord.png" alt="Discord" class="social__media__icon"></a>
            </div>
        </div>
    </div>


</div>
<!-- content end -->
<!-- footer start -->
<?php $this->view("footer") ?>
<!-- footer end -->