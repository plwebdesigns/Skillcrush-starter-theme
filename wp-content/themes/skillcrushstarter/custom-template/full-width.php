<?php
/**
 * Template Name: Full Width Page
 *
 * The template for displaying a full width page without a sidebar.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
get_header();

?>

<section class="index-page">
    <div class="main-content">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('content', get_post_format()) ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
</section>
