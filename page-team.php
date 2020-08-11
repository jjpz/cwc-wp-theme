<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<?php include 'includes/translations.php'; ?>

<main id="primary" class="site-main team-page">

    <?php include 'includes/page-header.php'; ?>

    <?php include 'includes/get-items.php'; ?>
    <?php $team = get_items('member'); ?>

    <?php if (!empty($team)) { ?>
    <section class="team page-team">
        <div class="container">
            <?php foreach ($team as $i => $member) { ?>
            <?php
                $id = $member->ID;
                $url = get_permalink($id);
                $src = get_the_post_thumbnail_url($id);
                $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
                $position = carbon_get_post_meta($id, 'crb_member_position');
            ?>
            <div class="row page-team-member member-<?php echo ($i+1)%2 == 0 ? 'even' : 'odd'; ?>">
                <div class="col-sm-10 offset-sm-1">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-6 <?php echo ($i+1)%2 == 0 ? 'order-sm-2' : ''; ?> member-col member-image">
                            <div href="<?php echo $url; ?>" class="post-thumb member-thumb">
                                <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>"
                                    alt="Stock Image">
                                <div class="lazy-overlay on"></div>
                            </div>
                        </div>
                        <div
                            class="col-sm-6 <?php echo ($i+1)%2 == 0 ? 'order-sm-1' : ''; ?> member-col member-content">
                            <div class="member-info">
                                <a href="<?php echo $url; ?>">
                                    <h1 class="member-name">
                                        <?php echo $member->post_title; ?>
                                    </h1>
                                </a>
                                <?php if (!empty($position)) { ?>
                                <h2 class="member-position"><?php echo $position; ?></h2>
                                <?php } ?>
                                <p class="member-description"><?php echo wp_trim_words($member->post_content, 25); ?>
                                </p>
                                <a class="link-main" href="<?php echo $url; ?>"><?php echo $read_more; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php } ?>

</main>

<?php get_footer(); ?>