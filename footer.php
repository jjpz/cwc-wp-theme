<section class="ratings">
    <div class="container">
        <!-- Begin widget code -->
        <div data-rw-badge1="17352"></div>
        <script type="module" src="https://widgets.thereviewsplace.com/2.0/rw-widget-badge1.js"></script>
        <!-- End widget code -->
    </div>
</section>

<?php
$address_array = array();
$address_line1 = carbon_get_theme_option('crb_address_line_1');
$address_line2 = carbon_get_theme_option('crb_address_line_2');
$address_line3 = carbon_get_theme_option('crb_address_line_3');
array_push($address_array, $address_line1, $address_line2, $address_line3);
$hours = carbon_get_theme_option('crb_hours');
$numbers = carbon_get_theme_option('crb_numbers');
?>

<footer class="site-footer">
    <div class="container">

        <div class="footer-row">

            <div class="footer-col">
                <div class="footer-inner">
                    <div class="footer-logo">
                        <?php include 'images/logos/cwc-footer-logo.svg'; ?>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <div class="footer-inner">
                    <p class="footer-title"><?php bloginfo('name'); ?></p>
                    <?php if (!empty($address_array)) { ?>
                    <address class="footer-address">
                        <?php foreach ($address_array as $i => $address_line) { ?>
                        <p class="footer-address-line-<?php echo $i+1; ?>"><?php echo $address_line; ?></p>
                        <?php } ?>
                    </address>
                    <?php } ?>
                    <?php if (!empty($numbers)) { ?>
                    <div class="footer-numbers">
                        <?php foreach ($numbers as $i => $number) { ?>
                        <p class="footer-number-line-<?php echo $i+1; ?>"><?php echo $number['crb_number']; ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="footer-inner">
                    <?php include 'includes/appointment.php'; ?>
                    <?php if (!empty($hours)) { ?>
                    <div class="footer-hours">
                        <p class="footer-hours-title">Hours</p>
                        <?php foreach ($hours as $i => $hour) { ?>
                        <p class="hours-line-<?php echo $i+1; ?>"><?php echo $hour['crb_hour']; ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>