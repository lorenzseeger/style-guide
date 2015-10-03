<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <!-- GoogleFonts -->
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,700|Fira+Mono' rel='stylesheet' type='text/css'>

</head>
<body>

  <div class="wrapper">
    <header class="header cf" role="banner">
      <a class="logo" href="<?php echo url() ?>">Style Guide</a>
    </header>
