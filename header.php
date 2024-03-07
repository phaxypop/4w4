<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème truc</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="menu" class="global">
        <input type="checkbox" name="" id="chk_burger">
        <label id="burger" for="chk-burger">
            <svg id="burger" width="48" height="48" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <!-- <input type="checkbox" id="chk_burger" />
    <label for="burger" class="chk-burger">
      <span></span>
      <span></span>
      <span></span> -->
        </label>
        <header class=" menu__header">
            <?php wp_nav_menu(array("container" => "nav")); ?>
            <header>