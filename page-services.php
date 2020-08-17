<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<?php include 'includes/translations.php'; ?>

<main id="primary" class="site-main">

    <?php include 'includes/page-header.php'; ?>

    <?php include 'includes/get-items.php'; ?>

    <?php $features = get_items('feature'); ?>
    <?php if (!empty($features)) { ?>
    <section class="page-services-features">
        <div class="container">
            <p class="p-small"><?php echo $featured_services; ?></p>
            <?php
        foreach ($features as $feature) {
            $id = $feature->ID;
            $url = carbon_get_post_meta($id, 'crb_feature_link_url');
            $title = $feature->post_title;
            echo '<a href="' . $url . '" class="link-main">' . $title . '</a>';
        }
        ?>
        </div>
    </section>
    <?php } ?>

    <?php $services = get_items('service'); ?>
    <?php if (!empty($services)) { ?>
    <section class="services page-services">
        <div class="container">
            <?php include 'includes/service-grid.php'; ?>
        </div>
    </section>
    <?php } ?>

</main>

<?php get_footer(); ?>