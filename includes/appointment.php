<?php
$appt_link_url = carbon_get_theme_option('crb_appt_link_url');
include 'translations.php';

if (!empty($appt_link_url)) {
    $html = sprintf(
        '<div class="appointment">
            <a class="appt-link" href="%s" target="_blank">
                <span class="appt-link-icon">
                <svg version="1.1" id="icon-link-schedule-small" class="icon-link-schedule-small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 9" style="enable-background:new 0 0 13 9;" xml:space="preserve">
                    <g>
                        <path fill="#0E1E32" d="M8.575,8C3.018,8,0.93,2.889,0.906,2.828C0.804,2.57,0.814,2.28,0.935,2.029s0.34-0.44,0.606-0.522C9.42-0.93,12.08,6.216,12.105,6.288c0.094,0.263,0.074,0.551-0.054,0.798c-0.129,0.247-0.354,0.429-0.622,0.503C10.39,7.876,9.44,8,8.575,8zM3.337,3.126c0.873,1.295,2.812,3.281,6.35,2.788C8.848,4.576,6.934,2.506,3.337,3.126z M1.836,2.462h0.01H1.836z"/>
                    </g>
                </svg>
                </span>
                <span class="appt-link-text">%s</span>
                <span class="appt-link-icon">
                <svg version="1.1" id="icon-link-schedule-small" class="icon-link-schedule-small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 9" style="enable-background:new 0 0 13 9;" xml:space="preserve">
                    <g>
                        <path fill="#0E1E32" d="M8.575,8C3.018,8,0.93,2.889,0.906,2.828C0.804,2.57,0.814,2.28,0.935,2.029s0.34-0.44,0.606-0.522C9.42-0.93,12.08,6.216,12.105,6.288c0.094,0.263,0.074,0.551-0.054,0.798c-0.129,0.247-0.354,0.429-0.622,0.503C10.39,7.876,9.44,8,8.575,8zM3.337,3.126c0.873,1.295,2.812,3.281,6.35,2.788C8.848,4.576,6.934,2.506,3.337,3.126z M1.836,2.462h0.01H1.836z"/>
                    </g>
                </svg>
                </span>
            </a>
        </div>',
        $appt_link_url,
        $appt_link_text
    );
    echo $html;
}