<div class="game__party">

<?php var_dump($party) ?>

    <div class="party__intro-img">
        <img src="/assets/img/game/chap_one/chap_one_back.png" alt="">
    </div>

    <h1><?=$party[0]['title']?></h1>

    <div class="party__container">

        <div class="party__intro">

            <div class="intro__text">
                <!--<h2>Chapitre 1 : utf8_encode();?></span>( après JC)</h2>-->
                <h3></h3>
                <p></p>
            </div>

            <div class="intro__img">
                <img src="/assets/img/game/start/chap_start_1.webp" alt="">
                <img src="/assets/img/game/start/chap_start_2.webp" alt="">
                <img src="/assets/img/game/start/chap_start_3.webp" alt="">
            </div>

        </div>

        <div class="start__choice">

            <div class="start__choice-text"><p></p></div>

            <div class="start__choice-box">

                <div class="choice__box choice__title">
                    <h4 class="choice__container">A toi de jouer</h4>
                </div>

                <div class="choice__box">

                    <a href="/game/choice/one/4/1"><?=$party[0]['choice_one']?></a>

                    <a href="/game/choice/one/4/2"><?=$party[0]['choice_two']?></a>

                    <a href="/game/choice/one/4/3"><?=$party[0]['choice_three']?></a>

                </div>

            </div>

        </div>

    </div>

</div>
