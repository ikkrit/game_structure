<?php use App\Core\Constants\ConstantsGameChapOne;?>

<div class="game__start">
    <h1>Prologue</h1>

    <div class="start__container">
        <h2>L'aventure commence...</h2>

        <div class="start__img-1"><img src="/assets/img/game/chap_one/chap_one_back.png" alt=""></div>

        <div class="start__text-1">

            <h2>Chapitre 1 : <span><?=utf8_encode($locations->location_name);?></span>(<?=$locations->location_time;?> après JC)</h2>
            <h3><?=ConstantsGameChapOne::CHAP_01_TITLE_01;?></h3>
            <p><?=ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_01;?></p>
        </div>

        <div class="start__img-2"></div>

        <div class="start__text-2"><p><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_TEXT_01;?></p></div>

        <div class="start__img-3"></div>

        <div class="start__text-3"><p><?=ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_02;?></p></div>

        <div class="start__img-4"></div>

        <div class="start__text-4">
            <p><?=ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_03;?></p>
        </div>

        <div class="start__choice">

            <div class="choice__box box-main">
                <h4>Que fais-tu ?</h4>
            </div>

            <div class="choice__box box-1">
                <a href="/game/choice/one/4/1"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_01;?></a>
            </div>

            <div class="choice__box box-2">
                <a href="/game/choice/one/4/2"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_02;?></a>
            </div>

            <div class="choice__box box-3">
                <a href="/game/choice/one/4/3"><?=ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_03;?></a>
            </div>

        </div>

    </div>

</div>
