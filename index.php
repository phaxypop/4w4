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
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav id="menu" class="global">
      <header class="menu__header">
        <?php wp_nav_menu(array("container" => "nav" )); ?>
        <header>  
    <nav>
    <div id="entete" class="global">
      <header class="entete__header">
        <h1>Thème Syphax</h1>
        <h2>4W4 - Conception d'interface et dévelopement Web</h2>
        <h2>TIM - Collège de Maisonneuve</h2>
        <button>Évenements</button>
      </header>
      
    </div>
    <div id="accueil" class="global">
      <section>
        <h2>Accueil (h2)</h2>
          <p>
          Événement lorem ipsum dolor sit amet consectetur adipisicing elit.
          Delectus itaque culpa facere deleniti laboriosam rerum, debitis sunt,
          nostrum, exercitationem ipsum deserunt <i>enim libero</i> laborum
          aspernatur perspiciatis est natus qui ipsa.
        </p>

        <div class="p-bkg">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus laboriosam alias fugit magnam, aspernatur ut dolore!
            Quia similique totam maxime. <i>Ipsum cum optio</i> reprehenderit
            odit at praesentium nemo incidunt veritatis.
          </p>
      </section>
    </div>
    <div id="evenement" class="global">
      <section>
        <h2>Événement</h2>
        <p>
          Événement lorem ipsum dolor sit amet consectetur adipisicing elit.
          Delectus itaque culpa facere deleniti laboriosam rerum, debitis sunt,
          nostrum, exercitationem ipsum deserunt <i>enim libero</i> laborum
          aspernatur perspiciatis est natus qui ipsa.
        </p>

        <div class="p-bkg">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus laboriosam alias fugit magnam, aspernatur ut dolore!
            Quia similique totam maxime. <i>Ipsum cum optio</i> reprehenderit
            odit at praesentium nemo incidunt veritatis.
          </p>
        </div>
      </section>
    </div>
    <div id="galerie" class="global diagonal">
      <section>
        <h2>Galerie</h2>
         <div class="cours">
        <?php
          if(have_posts()):
            while(have_posts()) : the_post();
            $titre = get_the_title();
            $sigle = substr($titre,0,7);
            $duree = substr($titre, -6);
            $titre = substr($titre, 8, -6);
        ?>
        <div class="carte">
          <p><?php echo $sigle  ?></p>
          <h3><?php echo $titre ?></h3>
          <p><?php echo $duree ?></p>
          <p> <?php echo wp_trim_words(get_the_content(),30) ?></p>
        </div>
        <?php endwhile;?>
        <?php endif; ?>
       </div>
      </section>
    </div>
    <div id="footer" class="global">
      <!-- <div class="vague">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            style="fill: var(--couleur-arriere-footer)"
          ></path>
        </svg>
      </div> -->
      <section>
        <h2>Footer</h2>
        <h3>Liens (h3)</h3>
        <a href="https://github.com/">Github</a> <br />
        <a href="https://stackoverflow.com/">StackOverflow</a><br />
        <a href="https://developer.mozilla.org/fr/">MDN</a>
        <p>
          Footer lorem ipsum dolor sit amet consectetur adipisicing elit.
          Delectus itaque culpa facere deleniti laboriosam rerum, debitis sunt,
          nostrum, exercitationem ipsum deserunt enim libero laborum aspernatur
          perspiciatis est natus qui ipsa.
        </p>
      </section>
    </div>
  </body>
</html>
