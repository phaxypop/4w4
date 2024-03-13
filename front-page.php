<?php get_header(); ?>
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
      if (have_posts()) :
        while (have_posts()) : the_post();
          $titre = get_the_title();
      ?>
          <div class="carte">
            <h3><?php echo $titre ?></h3>
            <p> <?php echo wp_trim_words(get_the_content(), 30) ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</div>
<div id="footer" class="global">
  <?php get_template_part("gabarits/vague"); ?>
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