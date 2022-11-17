<?php
    function element($element)
    {
        switch($element) {
            case 1:
                echo "Lumiere";
                break;
            case 2;
                echo "Eau";
                break;
            case 3:
                echo "Feu";
                break;
            case 4: 
                echo "Ténèbres";
                break;
            default:
                echo "Aucun";
        }
    }
?>

<div class="profils__container">
    <article>

        <h2 class="characters__title"><?=$characters->character_name;?></h2>

        <img src=<?=$characters->character_img;?> alt="<?=$characters->character_name;?>">
        
        <div class="profil__life">
            <div class="life__img">
                <img src="/assets/img/logos/heart.png" alt="">
            </div>
            <div class="life__text">
                <p><?=$characters->character_life;?></p>
            </div>
        </div>

        <div class="profil__weapon">
            <div class="weapon__img">
                <img src="/assets/img/logos/weapon.png" alt="arme <?=utf8_encode($characters->character_weapon);?>">
            </div>
            <div class="weapon__text">
                <h3>Arme :<?=utf8_encode($characters->character_weapon);?></h3>
            </div>
        </div>

        <div class="profil__element">
            <div class="element__img">
                <img src="/assets/img/logos/<?=$characters->character_element;?>" alt="">
            </div>
            <div class="element_text">
                <h4>Element :<?php element($characters->character_element)?></h4>
            </div>
        </div>

        <div class="profil__desc">
            <div class="desc__text">
                <p><?=utf8_encode($characters->character_description);?></p>
            </div>

            <div class="desc__img">
                <img src=<?=$characters->character_back;?> alt="<?=$characters->character_name;?>">
            </div>
        </div>
    
    </article>
</div>
