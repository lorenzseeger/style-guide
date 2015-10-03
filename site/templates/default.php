<?php snippet('header') ?>

  <div class="row row--flex">
    <aside class="sidebar">

      <?php snippet('menu') ?>

    </aside>

    <main class="content" role="main">

      <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>

    </main>
  </div>

<?php snippet('footer') ?>
