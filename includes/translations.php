<?php
if (ICL_LANGUAGE_CODE === 'es') {
    $appt_link_text = carbon_get_theme_option('crb_appt_link_text_es');
    $portal_link_text = carbon_get_theme_option('crb_portal_link_text_es');
    $tagline1 = carbon_get_theme_option('crb_tagline_1_es');
    $tagline2 = carbon_get_theme_option('crb_tagline_2_es');
    $home_team_title = carbon_get_theme_option('crb_home_team_title_es');
    $home_team_desc = carbon_get_theme_option('crb_home_team_desc_es');
    $learn_more ='APRENDE MÁS';
    $read_more = 'LEE MÁS';
    $services_title = 'Todos los Servicios';
    $insurance_accepted = 'Seguros Aceptados';
    $insurance_subtitle = 'Llame a la oficina para obtener la lista completa.';
    $affiliations_title = 'Afiliaciones';
    $featured_services = 'Servicios Destacados';
    $other_services = 'Otros Servicios';
    $more_members = 'Más Miembros del Equipo';
    $not_found_title = 'Página no encontrada.';
    $not_found_desc = 'Pruebe uno de los enlaces arriba o vaya a la <a href="'. esc_url(home_url()) .'">página de inicio</a>.';
} else {
    $appt_link_text = carbon_get_theme_option('crb_appt_link_text_en');
    $portal_link_text = carbon_get_theme_option('crb_portal_link_text_en');
    $tagline1 = carbon_get_theme_option('crb_tagline_1_en');
    $tagline2 = carbon_get_theme_option('crb_tagline_2_en');
    $home_team_title = carbon_get_theme_option('crb_home_team_title_en');
    $home_team_desc = carbon_get_theme_option('crb_home_team_desc_en');
    $learn_more = 'LEARN MORE';
    $read_more = 'READ MORE';
    $services_title = 'All Services';
    $insurance_accepted = 'Insurance Accepted';
    $insurance_subtitle = 'Call office for complete list.';
    $affiliations_title = 'Affiliations';
    $featured_services = 'Featured';
    $other_services = 'Other Services';
    $more_members = 'More Team Members';
    $not_found_title = 'Page not found.';
    $not_found_desc = 'Try one of the links above or go to the <a href="'. esc_url(home_url()) .'">home page</a>.';
}