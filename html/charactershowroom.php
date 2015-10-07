<?php include 'includes/functions.php' ?>
<?php include 'includes/header.php' ?>
<article>
<?php foreach (getCharacters($mysqli) as $character) { ?>
<div class="character">
  <h2><?= $character->name ?></h2>
  <p>Race <?= $character->race ?></p>
</div>
<?php } ?>
</article>
<?php include 'includes/footer.php' ?>
