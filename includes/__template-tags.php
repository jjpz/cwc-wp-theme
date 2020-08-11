<?php

if (!function_exists('cwc_post_thumbnail')) {
    function cwc_post_thumbnail() {
        if (!has_post_thumbnail()) {
            return;
        }
    }
}