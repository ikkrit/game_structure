<?php use App\Core\Constants\ConstantsGameChapOne;?>

<div class="game__start">

    <div class="start__intro-img">
        <img src="/assets/img/game/chap_one/chap_one_back.png" alt="">
    </div>

    <h1>Prologue</h1>

    <div class="start__container">
        <h2>L'aventure commence...</h2>

        <div class="start__intro">

            <div class="intro__text">
                <h2>Chapitre 1 : <span><?=utf8_encode($locations->location_name);?></span>(<?=$locations->location_time;?> après JC)</h2>
                <h3><?=ConstantsGameChapOne::CHAP_01_TITLE_01;?></h3>
                <p><?=ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_01;?></p>
            </div>

            <div class="intro__img">
                <img src="/assets/img/game/start/chap_start_1.webp" alt="">
                <img src="/assets/img/game/start/chap_start_2.webp" alt="">
                <img src="/assets/img/game/start/chap_start_3.webp" alt="">
            </div>

        </div>

        <div class="start__choice">

            <div class="start__choice-text"><p><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_TEXT_01;?></p></div>

            <div class="start__choice-box">

                <div class="choice__box choice__title">
                    <h4 class="choice__container">A toi de jouer</h4>
                </div>

                <div class="choice__box">

                    <a href="/game/choice/one/4/1"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_01;?></a>

                    <a href="/game/choice/one/4/2"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_02;?></a>

                    <a href="/game/choice/one/4/3"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_03;?></a>

                </div>

            </div>

        </div>

    </div>

</div>
