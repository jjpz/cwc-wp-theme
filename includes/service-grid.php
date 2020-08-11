<div class="grid service-grid">
    <?php foreach ($services as $service) { ?>
    <?php
    $id = $service->ID;
    $url = get_permalink($id);
    $title = $service->post_title;
    $src = get_the_post_thumbnail_url($id, 'medium');
    $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($id));
    ?>
    <div class="grid-item service-item">
        <a href="<?php echo $url; ?>" class="post-thumb service-item-thumb">
            <img class="lazy" src="" srcset="" data-srcset="<?php echo $srcset; ?>" alt="Stock Image">
            <div class="lazy-overlay on"></div>
            <div class="service-item-overlay">
                <span class="link-main service-item-title"><?php echo $title; ?></span>
            </div>
        </a>
    </div>
    <?php } ?>
</div>