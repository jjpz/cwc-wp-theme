<?php get_header(); ?>
<?php include 'includes/translations.php'; ?>
<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <div class="container">
            <h1><?php echo $not_found_title; ?></h1>
            <p><?php echo $not_found_desc; ?></p>
        </div>
    </section>
</main>
<?php get_footer(); ?>