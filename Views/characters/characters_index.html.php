<h1>Les Personnages</h1>
<?php foreach($characters as $character): ?>
    <article>
        <h2><?=$character->character_class;?></h2>
        <div><?=$character->character_weapon;?></div>
        <div><?=$character->character_description;?></div>
    </article>
<?php endforeach; ?>