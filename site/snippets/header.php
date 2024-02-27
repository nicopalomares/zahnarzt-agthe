<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"  content="<?= $site->description() ?>">
  <title>
    <?= $page->title() ?> | <?= $site->title() ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <?= css([
    'assets/css/index.css',
    '@auto'
  ]) ?>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <header>
  <nav>
    <ul class="menu">
        <?php foreach ($pages->listed() as $page): ?>
            <li>
                <a href="<?= $page->url() ?>">
                    <?= $page->title() ?>
                </a>
                <div >
                <?php if ($page->hasChildren()): ?>
                    <ul class="dropdownList">
                        <?php foreach ($page->children()->listed() as $child): ?>
                            <li>
                                <a href="<?= $child->url() ?>">
                                    <?= $child->title() ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
                </div>
            </li>
        <?php endforeach ?>
    </ul>
</nav>
 
  </header>