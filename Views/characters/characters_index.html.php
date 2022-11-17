<section class="characters__container">
    <h1 class="characters__title">Les Personnages</h1>

    <div class="characters">

        <?php foreach($characters as $character): ?>
            <div class="characters__card">
                <div class="characters__content">
                    <h2><?=utf8_encode($character->character_name);?></h2>
                    <a href="characters/profil/<?=$character->character_id;?>">En savoir plus</a>
                </div>
                <img src="/assets/img/cards/card<?=$character->character_id;?>.png" alt="image ">
            </div>
        <?php endforeach; ?>

    </div>

</section>
