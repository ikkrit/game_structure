<?php use App\Core\Constants\ConstantsGameChapOne;?>

<div class="game__start">
    <h1>Prologue</h1>

    <div class="start__container">
        <h2>L'aventure commence...</h2>

        <div class="start__img-1"></div>

        <div class="start__text-1">

            <h2>Chapitre 1 : <span><?=utf8_encode($locations->location_name);?></span>(<?=$locations->location_time;?> après JC)</h2>
            <h3>La fête du millénaire</h3>
            <p><?=ConstantsGameChapOne::CHAP_01_INTRO_1;?></p>
        </div>

        <div class="start__img-2"></div>

        <div class="start__text-2">
            <p><?=ConstantsGameChapOne::CHAP_01_INTRO_2;?></p>
        </div>

        <div class="start__img-3"></div>

        <div class="start__text-3">
            <p><?=ConstantsGameChapOne::CHAP_01_INTRO_3;?></p>
        </div>

        <div class="start__choice">

            <div class="choice__box box-main">
                <h4>Que fais-tu ?</h4>
            </div>

            <div class="choice__box box-1">
                <a href="/game/choice/one/1/1">Tu décide de partir la secourir et plonge dans le vortex</a>
            </div>

            <div class="choice__box box-2">
                <a href="/game/choice/one/1/2">Tu jetes Lucca dans le vortex</a>
            </div>

            <div class="choice__box box-3">
                <a href="/game/choice/one/1/3">Tu rentre chez toi aller dormir...</a>
            </div>

        </div>

    </div>

</div>
