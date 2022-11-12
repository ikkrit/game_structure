<h1>Les Personnages</h1>
<?php foreach($characters as $character): ?>
    <article>
        <h2><?=utf8_encode($character->character_class);?></h2>
        <a href="characters/profil/<?=$character->character_id;?>">En savoir plus</a>
    </article>
<?php endforeach; ?>