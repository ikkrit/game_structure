<h2>Le profil du personnage</h2>
<br>
<br><br>
<article>
    <h1><?=$characters->character_class;?></h1>
    <p><?=$characters->character_life;?></p>
    <p><?=utf8_encode($characters->character_weapon);?></p>
    <p><?=utf8_encode($characters->character_description);?></p>
    <img src=<?=$characters->character_img;?> alt="">
    <img src=<?=$characters->character_back;?> alt="">
</article>
