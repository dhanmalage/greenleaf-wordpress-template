<?php
/**
 * Created by PhpStorm.
 * User: dhana
 * Date: 7/23/2016
 * Time: 10:08 PM
 */

?>

<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();

                the_title();
                the_content();

            } // end while
        } // end if
        ?>
    </div>
</div>

<?php get_footer(); ?>
