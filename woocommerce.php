<?php get_header(); ?>  

<div class="cw-xl">
    <div class="mb-8">
        <?php aws_get_search_form( true ); ?>
    </div>
    <?php woocommerce_content(); ?> 
</div>

<?php get_footer(); ?>
