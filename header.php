<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php include 'includes/languages.php'; ?>

<body <?php body_class(); ?>>

    <div id="overlay" class="overlay">
        <div id="loader" class="loader">
            <div class="loader-logo">
                <svg version="1.1" id="site-header-logo-main" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 79 73"
                    style="enable-background:new 0 0 79 73;" xml:space="preserve">
                    <g>
                        <path fill="#0E1E32"
                            d="M47.346,33.021c-0.191-0.197-0.508-0.201-0.707-0.008c-2.687,2.625-4.004,5.407-4.616,7.136c-0.937-2.564-2.486-4.767-2.565-4.878c-0.092-0.13-0.24-0.208-0.399-0.211c-0.171,0.011-0.31,0.07-0.406,0.198c-1.414,1.861-2.218,3.652-2.658,4.898c-1.353-3.707-4.062-6.952-4.193-7.107c-0.178-0.211-0.494-0.238-0.704-0.06c-0.211,0.178-0.238,0.493-0.061,0.704c0.035,0.042,3.547,4.25,4.484,8.361c0.052,0.228,0.254,0.389,0.487,0.389c0.004,0,0.008,0,0.012,0c0.238-0.006,0.438-0.179,0.48-0.412c0.005-0.028,0.497-2.671,2.531-5.593c0.672,1.057,2.026,3.377,2.515,5.612c0.051,0.233,0.257,0.373,0.498,0.394c0.238-0.005,0.44-0.178,0.482-0.413c0.008-0.043,0.825-4.406,4.812-8.3C47.535,33.535,47.539,33.218,47.346,33.021z" />
                        <path fill="#0E1E32"
                            d="M32.833,45.532c-0.898-5.53-4.529-11.218-9.713-15.217c-5.742-4.428-12.816-6.475-19.923-5.766c-0.254,0.025-0.448,0.238-0.45,0.494c-0.001,0.104,0.017,10.394,8.544,15.185c8.424,4.734,15.338,3.694,15.628,3.648c0.134-0.022,0.254-0.098,0.332-0.209s0.106-0.25,0.08-0.383c-0.084-0.42-2.227-10.318-17.261-14.258c-0.267-0.068-0.541,0.09-0.611,0.357c-0.07,0.268,0.09,0.541,0.357,0.611c12.428,3.256,15.707,10.871,16.383,12.954c-1.794,0.132-7.642,0.216-14.417-3.591c-7.013-3.941-7.905-11.881-8.019-13.855c14.46-1.187,26.363,9.598,28.083,20.19c0.431,2.653,0.351,5.026-0.003,7.096c-12.143,5.132-8.47,17.736-8.431,17.864c0.042,0.137,0.14,0.249,0.269,0.309c0.066,0.03,0.138,0.046,0.209,0.046c0.068,0,0.136-0.014,0.2-0.042c12.415-5.414,9.198-16.47,8.733-17.865C33.205,50.906,33.296,48.38,32.833,45.532z M24.224,69.808c-0.553-2.36-1.979-11.45,7.375-15.818c-1.24,5.295-4.19,8.28-4.233,8.322c-0.196,0.193-0.199,0.51-0.006,0.707c0.098,0.1,0.228,0.149,0.357,0.149c0.126,0,0.252-0.048,0.35-0.144c0.175-0.171,2.887-2.917,4.274-7.82C32.976,58.591,33.065,65.678,24.224,69.808z" />
                        <path fill="#0E1E32"
                            d="M29.893,47.387c0.085-0.263-0.059-0.544-0.321-0.63c-0.262-0.087-0.545,0.06-0.63,0.32c-0.178,0.545-4.501,13.139-20.88,9.578C9.09,54.44,13.712,46.1,24.46,47.592c-1.283,1.516-4.939,5.197-10.309,5.358c-0.276,0.009-0.493,0.239-0.485,0.515c0.009,0.277,0.237,0.502,0.515,0.485c7.237-0.218,11.434-6.18,11.609-6.434c0.096-0.14,0.115-0.319,0.05-0.476c-0.065-0.157-0.206-0.271-0.373-0.301C11.719,44.253,6.942,56.71,6.895,56.837c-0.049,0.134-0.039,0.283,0.029,0.409c0.067,0.126,0.186,0.218,0.325,0.25c2.295,0.543,4.374,0.779,6.254,0.779C26.192,58.275,29.853,47.512,29.893,47.387z" />
                        <path fill="#0E1E32"
                            d="M13.429,45.968c0.121-0.068,0.208-0.184,0.241-0.319c0.032-0.135,0.007-0.277-0.07-0.394c-0.045-0.069-4.644-6.78-12.524-2.664c-0.124,0.064-0.214,0.178-0.251,0.312s-0.016,0.277,0.058,0.396c0.034,0.055,2.654,4.158,7.41,4.158C9.795,47.456,11.513,47.046,13.429,45.968z M2.053,43.223c5.7-2.671,9.299,0.843,10.378,2.146C6.662,48.29,3.103,44.58,2.053,43.223z" />
                        <path fill="#0E1E32"
                            d="M21.038,61.295c-0.052-0.018-5.116-1.664-7.551,3.604c-0.059,0.126-0.062,0.271-0.009,0.399c0.053,0.129,0.157,0.229,0.287,0.278c0.021,0.008,0.889,0.322,2.07,0.322c1.723,0,4.113-0.669,5.502-3.934c0.055-0.129,0.053-0.273-0.003-0.4C21.277,61.438,21.17,61.34,21.038,61.295z M14.663,64.791c1.666-2.988,4.349-2.89,5.503-2.682C18.553,65.228,15.826,65.041,14.663,64.791z" />
                        <path fill="#0E1E32"
                            d="M39.056,65.038c-0.118-0.073-0.262-0.096-0.396-0.059c-0.048,0.013-4.754,1.339-3.927,6.599c0.022,0.137,0.1,0.259,0.215,0.337C35.032,71.971,35.129,72,35.228,72c0.038,0,0.076-0.004,0.114-0.013c0.049-0.012,4.958-1.227,3.939-6.618C39.255,65.232,39.174,65.112,39.056,65.038z M35.653,70.83c-0.212-2.976,1.749-4.24,2.732-4.684C38.698,69.189,36.665,70.414,35.653,70.83z" />
                        <path fill="#0E1E32"
                            d="M52.482,40.159c-0.135-0.008-0.271,0.029-0.373,0.118c-0.325,0.278-7.909,6.991-3.988,22.03c0.069,0.267,0.339,0.432,0.609,0.357c0.268-0.069,0.428-0.343,0.357-0.609c-1.434-5.501-1.245-9.852-0.462-13.138c0.282,1.88,1.142,4.309,3.386,6.898c0.099,0.114,0.238,0.173,0.378,0.173c0.116,0,0.233-0.04,0.327-0.122c0.209-0.181,0.231-0.497,0.051-0.705c-3.929-4.532-3.32-8.467-3.102-9.397c0.968-2.259,2.113-3.695,2.702-4.334c0.996,1.499,3.93,6.574,3.924,14.33c-0.005,8.043-6.493,12.707-8.159,13.771c-8.11-12.019-4.53-27.688,3.866-34.371c2.104-1.674,4.214-2.766,6.194-3.47c3.13,2.426,6.15,3.289,8.845,3.289c6.274,0,10.793-4.61,10.857-4.677c0.099-0.103,0.148-0.243,0.137-0.385c-0.011-0.142-0.082-0.273-0.196-0.359c-10.804-8.183-18.875,0.048-19.856,1.127c-2.1,0.741-4.347,1.897-6.604,3.693c-4.383,3.488-7.566,9.438-8.518,15.916c-1.053,7.175,0.624,14.348,4.721,20.197c0.097,0.138,0.251,0.213,0.409,0.213c0.082,0,0.165-0.021,0.241-0.062c0.091-0.05,9.057-5.1,9.062-14.882c0.007-9.663-4.283-15.184-4.466-15.414C52.742,40.24,52.618,40.173,52.482,40.159z M76.762,30.009c-1.787,1.637-9.016,7.331-17.403,1.308c5.225-1.509,9.272-0.397,9.328-0.381c0.268,0.077,0.542-0.076,0.619-0.341c0.077-0.265-0.074-0.542-0.34-0.619c-0.233-0.069-3.957-1.09-8.914,0.101C62.692,27.866,68.83,24.317,76.762,30.009z" />
                        <path fill="#0E1E32"
                            d="M54.434,36.036c-0.271,0.054-0.446,0.317-0.393,0.588c0.055,0.271,0.314,0.441,0.588,0.393c0.559-0.113,13.659-2.504,18.571,13.53c-2.454,0.218-11.938,0.357-15.931-9.872c1.951,0.379,6.955,1.772,9.717,6.367c0.144,0.238,0.45,0.311,0.687,0.171c0.236-0.143,0.312-0.449,0.171-0.687c-3.73-6.205-10.983-6.948-11.291-6.977c-0.162-0.015-0.334,0.056-0.439,0.189c-0.104,0.134-0.135,0.312-0.079,0.472c3.511,10.18,12.154,11.368,15.998,11.368c1.145,0,1.864-0.105,1.895-0.11c0.142-0.022,0.267-0.104,0.344-0.226s0.099-0.269,0.059-0.406C69.295,33.274,54.58,36.004,54.434,36.036z" />
                        <path fill="#0E1E32"
                            d="M61.251,51.089c-0.119-0.074-0.263-0.093-0.396-0.055s-0.245,0.13-0.309,0.254c-0.037,0.073-3.643,7.37,3.805,12.227c0.082,0.054,0.178,0.081,0.273,0.081c0.04,0,0.081-0.005,0.121-0.015c0.135-0.034,0.25-0.122,0.316-0.244C65.103,63.263,69.067,55.85,61.251,51.089z M64.423,62.353c-5.117-3.665-3.814-8.521-3.207-10.1C66.589,55.853,65.094,60.772,64.423,62.353z" />
                        <path fill="#0E1E32"
                            d="M71.332,36.365c-0.138,0.015-0.264,0.087-0.347,0.199c-0.083,0.111-0.115,0.253-0.09,0.39c0.009,0.051,0.967,4.85,6.139,4.85c0.225,0,0.458-0.009,0.698-0.028c0.139-0.011,0.267-0.078,0.353-0.188c0.087-0.109,0.124-0.249,0.103-0.387C78.18,41.146,77.297,35.716,71.332,36.365z M77.042,40.804c-3.404,0-4.626-2.381-5.01-3.487c3.523-0.133,4.679,2.35,5.031,3.487C77.057,40.804,77.049,40.804,77.042,40.804z" />
                        <path fill="#0E1E32"
                            d="M25.257,25.57c1.72,1.416,3.872,2.742,6.577,3.746c2.251,0.835,4.774,1.249,7.399,1.249c3.5,0,7.18-0.735,10.629-2.183c6.687-2.807,11.96-7.949,14.85-14.479c0.104-0.233,0.015-0.507-0.207-0.635c-0.089-0.052-9.044-5.119-17.424-0.067c-8.276,4.989-10.785,11.514-10.888,11.79c-0.048,0.127-0.042,0.269,0.018,0.391c0.059,0.123,0.165,0.216,0.294,0.258c0.407,0.136,10.07,3.16,20.922-7.972c0.192-0.198,0.188-0.515-0.01-0.707c-0.196-0.191-0.513-0.189-0.707,0.009c-3.967,4.07-7.792,6.16-11.01,7.189c1.465-1.213,3.101-3.205,4.157-6.466c0.085-0.263-0.059-0.545-0.321-0.63c-0.266-0.085-0.545,0.059-0.63,0.321c-1.873,5.78-5.627,7.257-6.473,7.523c-2.422,0.334-4.227,0.089-5.075-0.085c0.769-1.627,3.598-6.761,10.239-10.765c6.891-4.153,14.236-1.01,16.008-0.132c-6.097,13.154-21.359,18.188-31.423,14.454c-2.52-0.935-4.544-2.177-6.17-3.507C27.544,11.777,14.77,8.749,14.639,8.72c-0.138-0.032-0.285-0.001-0.401,0.082s-0.191,0.212-0.206,0.354C12.613,22.624,23.814,25.285,25.257,25.57z M14.973,9.843c2.325,0.688,10.931,3.949,10.114,14.223c-3.993-3.693-5.132-7.732-5.148-7.79c-0.071-0.267-0.344-0.421-0.612-0.354c-0.267,0.071-0.425,0.345-0.354,0.611c0.063,0.236,1.111,3.946,4.685,7.571C20.401,22.985,14.201,19.571,14.973,9.843z" />
                        <path fill="#0E1E32"
                            d="M32.041,26.005c0.12,0,0.241-0.043,0.337-0.131c0.204-0.186,0.218-0.502,0.032-0.706c-0.385-0.423-9.204-10.398,1.984-22.892c1.455,1.987,6.477,10.034-0.218,18.74c-0.683-1.867-2.076-6.87,0.429-11.609c0.129-0.244,0.036-0.547-0.208-0.676c-0.245-0.129-0.547-0.036-0.676,0.208c-3.384,6.401-0.272,12.994-0.138,13.271c0.074,0.153,0.22,0.258,0.389,0.278c0.168,0.017,0.336-0.045,0.445-0.176c8.955-10.729,0.476-21.032,0.39-21.135C34.716,1.068,34.582,1.003,34.438,1c-0.148,0.009-0.281,0.055-0.378,0.16c-12.432,13.386-2.489,24.571-2.388,24.683C31.771,25.95,31.906,26.005,32.041,26.005z" />
                    </g>
                </svg>
            </div>
            <div class="spinner" role="status"></div>
        </div>
    </div>

    <header class="site-header<?php echo is_front_page() ? ' home-header' : ''; ?>">
        <div class="site-header-container">
            <div class="site-header-left">
                <a class="site-branding" href="<?php echo home_url('/'); ?>">
                    <div class="site-logo">
                        <?php include 'images/logos/cwc-site-header-logo.svg'; ?>
                    </div>
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                </a>
                <?php include 'includes/appointment.php'; ?>
            </div>
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

    <nav class="nav">
        <header class="site-header nav-header">
            <div class="site-header-container">
                <div class="site-header-left">
                    <a class="site-branding" href="<?php echo home_url('/'); ?>">
                        <div class="site-logo">
                            <?php include 'images/logos/cwc-site-header-logo.svg'; ?>
                        </div>
                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    </a>
                    <div class="nav-appointment">
                        <?php include 'includes/appointment.php'; ?>
                        <?php $hours = carbon_get_theme_option('crb_hours'); ?>
                        <?php if (!empty($hours)) { ?>
                        <?php foreach ($hours as $i => $hour) { ?>
                        <?php if ($i == 0) { ?>
                        <div class="nav-hours"><?php echo $hour['crb_hour']; ?></div>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="nav-toggle">
                    <a class="nav-toggle-link nav-toggle-close" href="#">
                        <span class="nav-toggle-text">CLOSE</span>
                        <span class="nav-toggle-btn">
                            <span class="nav-toggle-btn-bar"></span>
                            <span class="nav-toggle-btn-bar"></span>
                        </span>
                    </a>
                </div>
            </div>
        </header>
        <div class="nav-container">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 nav-col nav-col-left nav-language">
                        <ul class="site-lang"><?php languageSwitcher(); ?></ul>
                    </div>
                    <div class="col-6 nav-col nav-col-right nav-portal">
                        <a class="site-portal" href="<?php echo $appt_link_url; ?>"
                            target="_blank"><?php echo $portal_link_text; ?></a>
                    </div>
                </div>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container_class' => 'col-12 nav-col nav-col-main nav-menu-container'
                )
            );
            ?>
        </div>
    </nav>