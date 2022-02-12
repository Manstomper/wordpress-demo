<article>
    <?php if (has_post_thumbnail()) { ?>
        <div class="hero" style="height: 300px; background-image: url('<?= get_the_post_thumbnail_url(null, 'large'); ?>');"></div>
    <?php } ?>

    <?php if (has_post_thumbnail()) { ?>
        <?= get_the_post_thumbnail(null, 'medium'); ?>
    <?php } ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <?php comments_template(); ?>
    <?php comment_form(); ?>
</article>
