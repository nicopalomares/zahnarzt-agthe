<?php snippet('header') ?>

<div class="imageContainer">
<?php  if($page->hasImages()): ?>
    <img src="<?= $page->image()->url()?>" alt=""/>
<?php endif ?>
</div>
<div>
<div>
<?php foreach ($page->headlings()->toBlocks() as $block): ?>
<div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
  <?= $block->text() ?>
</div>
<?php endforeach ?>
</div>
   

<?php snippet('footer') ?>