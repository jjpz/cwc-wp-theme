<?php get_header(); ?>

<?php
$id = get_queried_object_id();
$type = get_queried_object()->post_type;
$srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
?>

<?php include 'includes/translations.php'; ?>

<?php include 'includes/get-items.php'; ?>

<?php if (have_posts()) { ?>
<?php  while (have_posts()) { the_post(); ?>

<?php $page = getTemplatePage('page-services.php'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="single-post-header">
        <div class="container">
            <a class="link-main" href="<?php echo $page['url']; ?>"><?php echo $page['title']; ?></a>
            <h1 class="single-post-title"><?php the_title(); ?></h1>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 single-post-col single-post-image">
                    <div class="post-thumb single-service-thumb">
                        <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>"
                            title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                        <div class="lazy-overlay on"></div>
                    </div>
                </div>
                <div class="col-lg-6 single-post-col single-post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</article>

<?php } ?>
<?php } ?>

<?php
$services = get_posts(array(
    'post_type' => $type,
    'post_status' => 'publish',
    'exclude' => [$id],
    'numberposts' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));
?>

<?php if (!empty($services)) { ?>
<hr>
<section class="services other-services">
    <div class="container">
        <p class="p-small other-services-title"><?php echo $other_services; ?></p>
        <?php include 'includes/service-grid.php'; ?>
    </div>
</section>
<?php } ?>

<?php get_footer(); ?>