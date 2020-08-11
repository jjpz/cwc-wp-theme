<?php
function languageSwitcher() {
    $languages = pll_the_languages(array(
        'raw' => true
    ));
    if (count($languages) > 1) {
        foreach ($languages as $lang) {
            if ($lang['slug'] === 'en') { $abbr = 'ENG'; }
            if ($lang['slug'] === 'es') { $abbr = 'ESP'; }
            $html = '<li class="'. implode(' ', $lang['classes']) .'">
                        <a lang="'. $lang['locale'] .'" hreflang="'. $lang['locale'] .'" class="lang-link" href="'. $lang['url'] .'">'. $abbr .'</a>
                        <span class="lang-link-bar"></span>
                    </li>';
            echo $html;
        }
    }
}