<?php get_header(); ?>

<?php include 'includes/translations.php'; ?>
<?php $appt_link_url = carbon_get_theme_option('crb_appt_link_url'); ?>

<header class="site-header home-intro-header">
    <div class="site-header-container">
        <ul class="site-lang"><?php languageSwitcher(); ?></ul>
        <div class="nav-toggle">
            <a class="nav-toggle-link nav-toggle-open" href="#">
                <span class="nav-toggle-text">CLOSE</span>
                <span class="nav-toggle-btn">
                    <span class="nav-toggle-btn-bar"></span>
                    <span class="nav-toggle-btn-bar"></span>
                    <span class="nav-toggle-btn-bar"></span>
                </span>
            </a>
        </div>
    </div>
</header>

<section class="home-intro">
    <div class="home-intro-container">
        <div class="home-intro-logo">
            <?php include 'images/logos/cwc-home-intro-logo.svg'; ?>
        </div>
        <?php if (!empty($tagline1)) { ?>
        <p class="home-intro-tagline home-intro-tagline-1"><?php echo $tagline1; ?></p>
        <?php } ?>
        <?php if (!empty($tagline1)) { ?>
        <p class="home-intro-tagline home-intro-tagline-2"><?php echo $tagline2; ?></p>
        <?php } ?>
        <div class="appointment">
            <a class="appt-link" href="<?php echo $appt_link_url; ?>" target="_blank">
                <span class="appt-link-icon">
                    <svg version="1.1" id="icon-link-schedule-big" class="icon-link-schedule-big"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 17 11" style="enable-background:new 0 0 17 11;" xml:space="preserve">
                        <g>
                            <path fill="#0E1E32"
                                d="M11.483,10.076c-7.678,0-10.557-7.045-10.589-7.127c-0.102-0.259-0.092-0.549,0.029-0.8s0.34-0.44,0.606-0.522c10.895-3.368,14.554,6.479,14.589,6.579c0.094,0.262,0.074,0.551-0.054,0.798c-0.129,0.247-0.354,0.429-0.622,0.503C14,9.903,12.682,10.076,11.483,10.076zM3.27,3.229c1.136,1.933,4.247,5.81,10.483,4.619C12.669,5.853,9.627,1.811,3.27,3.229zM1.824,2.581h0.01H1.824z" />
                        </g>
                    </svg>
                </span>
                <span class="appt-link-text"><?php echo $appt_link_text; ?></span>
                <span class="appt-link-icon">
                    <svg version="1.1" id="icon-link-schedule-big" class="icon-link-schedule-big"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 17 11" style="enable-background:new 0 0 17 11;" xml:space="preserve">
                        <g>
                            <path fill="#0E1E32"
                                d="M11.483,10.076c-7.678,0-10.557-7.045-10.589-7.127c-0.102-0.259-0.092-0.549,0.029-0.8s0.34-0.44,0.606-0.522c10.895-3.368,14.554,6.479,14.589,6.579c0.094,0.262,0.074,0.551-0.054,0.798c-0.129,0.247-0.354,0.429-0.622,0.503C14,9.903,12.682,10.076,11.483,10.076zM3.27,3.229c1.136,1.933,4.247,5.81,10.483,4.619C12.669,5.853,9.627,1.811,3.27,3.229zM1.824,2.581h0.01H1.824z" />
                        </g>
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <div class="arrow-down"><span class="triangle"></span></div>
</section>

<?php include 'includes/get-items.php'; ?>

<?php $features = get_items('feature'); ?>
<?php if (!empty($features)) { ?>
<section class="features">
    <?php foreach ($features as $i => $feature) { ?>
    <?php
    $id = $feature->ID;
    $url = get_permalink($id);
    $title = $feature->post_title;
    $description = wp_trim_words($feature->post_content, 25);
    $main_srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id), 'full');
    $mobile_img = carbon_get_post_meta($id, 'crb_feature_img_mobile');
    $mobile_srcset = wp_get_attachment_image_srcset($mobile_img, 'full');
    $link_url = carbon_get_post_meta($id, 'crb_feature_link_url');
    ?>
    <div id="feature-<?php echo $id; ?>" class="feature feature-<?php echo ($i + 1) % 2 == 0 ? 'even' : 'odd'; ?>">
        <div class="post-thumb feature-thumb">
            <img class="lazy" src="" srcset="" data-srcset=""
                data-main="<?php echo !empty($main_srcset) ? $main_srcset : ''; ?>"
                data-mobile="<?php echo !empty($mobile_srcset) ? $mobile_srcset : ''; ?>" sizes="100vw"
                title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
            <div class="lazy-overlay on"></div>
        </div>
        <div class="feature-overlay">
            <div class="feature-content">
                <h1 class="feature-title"><?php echo $title; ?></h1>
                <p class="feature-description"><?php echo $description; ?></p>
                <?php if (!empty($link_url)) { ?>
                <a class="link-main feature-link" href="<?php echo $link_url; ?>"><?php echo $learn_more; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
<?php } ?>

<?php $services = get_items('service'); ?>
<?php if (!empty($services)) { ?>
<section class="services home-services">
    <div class="container">
        <h1 class="home-services-title"><?php echo $services_title; ?></h1>
        <?php include 'includes/service-grid.php' ?>
    </div>
</section>
<?php } ?>

<?php // Home - Team
$home_team_image = carbon_get_theme_option('crb_home_team_image');
$home_team_image_src = wp_get_attachment_image_src($home_team_image, 'full', false);
$home_team_image_srcset = wp_get_attachment_image_srcset($home_team_image);
!empty($home_team_image) ? $home_team_image_src = $home_team_image_src[0] : '';
$home_team_content = array();
!empty($home_team_title) ? $home_team_content['title'] = $home_team_title : '';
!empty($home_team_desc) ? $home_team_content['desc'] = $home_team_desc : '';
$home_team_link_url = carbon_get_theme_option('crb_home_team_link_url');
?>

<?php if (!empty($home_team_image) || !empty($home_team_content)) { ?>
<section class="team home-team">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="row d-flex align-items-center">
                    <?php
                        if ($home_team_image && $home_team_content) {
                            $class = 'col-lg-6';
                        } else {
                            $class = 'col-12';
                        }
                        ?>
                    <?php if (!empty($home_team_image) || !empty($home_team_content)) { ?>
                    <div class=<?php echo $class; ?>>
                        <div class="post-thumb home-team-thumb">
                            <img class="lazy" src="" srcset="" data-srcset="<?php echo $home_team_image_srcset; ?>"
                                title="<?php echo $home_team_content['title']; ?>"
                                alt="<?php echo $home_team_content['title']; ?>">
                            <div class="lazy-overlay on"></div>
                        </div>
                    </div>
                    <div class=<?php echo $class; ?>>
                        <div class="home-team-content <?php echo $class == 'col-12' ? 'text-center' : ''; ?>">
                            <?php if (array_key_exists('title', $home_team_content)) { ?>
                            <h1 class="home-team-title"><?php echo $home_team_content['title']; ?></h1>
                            <?php } ?>
                            <?php if (array_key_exists('desc', $home_team_content)) { ?>
                            <p class="home-team-description"><?php echo $home_team_content['desc']; ?></p>
                            <?php } ?>
                            <?php if (!empty($home_team_link_url)) { ?>
                            <a class="link-main"
                                href="<?php echo $home_team_link_url; ?>"><?php echo !empty($home_team_link_text) ? $home_team_link_text : $learn_more; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php $insurances = get_items('insurance'); ?>
<?php if (!empty($insurances)) { ?>
<section id="insurances" class="insurances">
    <div class="container">
        <header class="home-section-header">
            <h2 class="home-section-title"><?php echo $insurance_accepted; ?></h2>
            <p class="p-small"><?php echo $insurance_subtitle; ?></p>
        </header>
        <div class="grid insurance-grid">
            <?php foreach ($insurances as $i => $insurance) { ?>
            <?php
            $id = $insurance->ID;
            $title = $insurance->post_title;
            $src = get_the_post_thumbnail_url($id);
            $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
            ?>
            <div class="grid-item insurance-item">
                <div class="post-thumb insurance-thumb">
                    <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>"
                        title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
                    <div class="lazy-overlay on"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php $affiliations = get_items('affiliation'); ?>
<?php if (!empty($affiliations)) { ?>
<section class="affiliations">
    <div class="container">
        <h2 class="home-section-title"><?php echo $affiliations_title; ?></h2>
        <div class="grid affiliation-grid">
            <?php foreach ($affiliations as $i => $affiliation) { ?>
            <?php
            $id = $affiliation->ID;
            $title = $affiliation->post_title;
            $src = get_the_post_thumbnail_url($id);
            $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
            ?>
            <div class="grid-item affiliation-item">
                <div class="post-thumb affiliation-thumb">
                    <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>"
                        title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
                    <div class="lazy-overlay on"></div>
                </div>
                <!--<div class="star"></div>-->
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php get_footer(); ?>