<?php get_header(); ?>

<?php
$id = get_queried_object_id();
$type = get_queried_object()->post_type;
$srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
$position = carbon_get_post_meta($id, 'crb_member_position');
?>

<?php include 'includes/translations.php'; ?>

<?php include 'includes/get-items.php'; ?>

<?php if (have_posts()) { ?>
<?php  while (have_posts()) { the_post(); ?>

<?php $page = getTemplatePage('page-team.php'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="single-post-header">
        <div class="container">
            <a class="link-main" href="<?php echo $page['url']; ?>"><?php echo $page['title']; ?></a>
            <h1 class="single-post-title"><?php the_title(); ?></h1>
            <?php if (!empty($position)) { ?>
            <h2 class="single-member-position"><?php echo $position; ?></h2>
            <?php } ?>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 single-post-col single-post-image">
                    <div class="post-thumb single-member-thumb">
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
$team = get_posts(array(
    'post_type' => $type,
    'post_status' => 'publish',
    'exclude' => [$id],
    'numberposts' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));
?>

<?php if (!empty($team)) { ?>
<hr>
<section class="team other-members">
    <div class="container">
        <p class="p-small other-members-title"><?php echo $more_members; ?></p>
        <div class="grid team-grid">
            <?php foreach ($team as $member) { ?>
            <?php
            $id = $member->ID;
            $title = $member->post_title;
            $url = get_permalink($id);
            $src = get_the_post_thumbnail_url($id, 'medium');
            $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
            ?>
            <div class="grid-item member-item">
                <a href="<?php echo $url; ?>">
                    <div class="post-thumb member-thumb">
                        <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>"
                            title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
                        <div class="lazy-overlay on"></div>
                    </div>
                    <p class="link-main member-name"><?php echo $title; ?></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php get_footer(); ?>