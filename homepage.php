<?php
		/**
		 * Template Name: Homepage
		 *
		 *  @package New_Beginnings
		 * 
		 */
?>
<?php get_header(); ?>
<!--This is the start of the hero section -->
<main>
	<div>
		<h1 class="hero-text">It's A New Day</h1>
	</div>

</main>    <!-- This is the start of icon section -->
    <section class="row">
        <div class="column">
            <img src="http://new-beginnings.local/wp-content/uploads/2022/06/pexels-tim-mossholder-942317-maze-scaled.jpg" alt="maze icon.">
            <h2>Beginning</h2>
            <h4>
            <p> This maze depicts a journey for me that is filled with wonder and excitement, as I take the steps that are necessary for me to continue on this unfamiliar, but fullfilling path. </p>
            </h4>
        </div>
        <div class="column">
            <img src="http://new-beginnings.local/wp-content/uploads/2022/06/pexels-daria-shevtsova-1356300-neon-1.jpg" alt="neon sign icon.">
            <h2>Middle</h2>
            <h4>
            <p>Just knowing that everything is connected is not enough for me. I am driven by my desire to learn as much as I can about technology. </p>
            </h4>   
        </div>
        <div class="column">
            <img src="http://new-beginnings.local/wp-content/uploads/2022/06/rolandas-s-xh7-lf5M91g-unsplash-computer-desk-1-scaled.jpg" alt="desktp icon.">
            <h2>Continuation</h2>
            <h4>
            <p>Technology is forever evolving, so the learning has to continue in order for me to keep up, and that is done by having the access and usage of a computer. </p>
            </h4> 
        </div>
    </section>
    <!-- This is the end of icon section -->
   <?php get_template_part('template-parts/back-to-top-button') ?>
    <?php get_footer(); ?>
