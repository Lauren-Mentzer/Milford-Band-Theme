<?php
    get_header();
    get_template_part('template-parts/banner', 'title');
?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-10 offset-1 overflow-hidden search-page">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part( 'template-parts/search', 'result' );
                    }
                } else {
            ?>
                <h4 class="text-center pt-5"><?php esc_html_e('Sorry, nothing matched your search criteria.', 'milfordband'); ?></h4>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>