<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once(__DIR__ . '/../vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

// Theme Options
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_fields(array(
            Field::make('separator', 'crb_address_separator', 'Address'),
            Field::make('text', 'crb_address_line_1', 'Address Line 1'),
            Field::make('text', 'crb_address_line_2', 'Address Line 2')->set_classes('admin-col-6'),
            Field::make('text', 'crb_address_line_3', 'Address Line 3')->set_classes('admin-col-6'),
            Field::make('separator', 'crb_hours_separator', 'Hours'),
            Field::make('complex', 'crb_hours', '')
                ->set_layout('grid')
                ->add_fields(array(
                    Field::make('text', 'crb_hour', 'Hours')
                )),
            Field::make('separator', 'crb_contact_separator', 'Contact'),
            Field::make('complex', 'crb_numbers', 'Phone Numbers')
                ->set_layout('grid')
                ->add_fields(array(
                    Field::make('text', 'crb_number', 'Number')
                )),
            Field::make('separator', 'crb_patient_separator', 'Patient Links / Enlaces Para Pacientes'),
            Field::make('text', 'crb_appt_link_url', 'Schedule Appointment Link URL / URL del Enlace Para Agendar Cita'),
            Field::make('text', 'crb_appt_link_text_en', 'Schedule Appointment Link Text - English')->set_classes('admin-col-6'),
            Field::make('text', 'crb_appt_link_text_es', 'Texto del Enlace Para Agendar Cita - Español')->set_classes('admin-col-6'),
            Field::make('text', 'crb_portal_link_url', 'Patient Portal Link URL / URL del Enlace del Portal del Paciente'),
            Field::make('text', 'crb_portal_link_text_en', 'Patient Portal Link Text - English')->set_classes('admin-col-6'),
            Field::make('text', 'crb_portal_link_text_es', 'Texto del Enlace del Portal del Paciente - Español')->set_classes('admin-col-6'),
            Field::make('separator', 'crb_home_intro_separator', 'Home Intro Section / Sección de Inicio'),
            Field::make('text', 'crb_tagline_1_en', 'Tagline #1 - English')->set_classes('admin-col-6'),
            Field::make('text', 'crb_tagline_1_es', 'Lema #1 - Español')->set_classes('admin-col-6'),
            Field::make('text', 'crb_tagline_2_en', 'Tagline #2 - English')->set_classes('admin-col-6'),
            Field::make('text', 'crb_tagline_2_es', 'Lema #2 - Español')->set_classes('admin-col-6'),
            Field::make('separator', 'crb_home_team_separator', 'Home Team Section / Sección del Equipo'),
            Field::make('image', 'crb_home_team_image', 'Image'),
            Field::make('text', 'crb_home_team_title_en', 'Title - English')->set_classes('admin-col-6'),
            Field::make('text', 'crb_home_team_title_es', 'Título - Español')->set_classes('admin-col-6'),
            Field::make('textarea', 'crb_home_team_desc_en', 'Description - English')->set_classes('admin-col-6'),
            Field::make('textarea', 'crb_home_team_desc_es', 'Descripción - Español')->set_classes('admin-col-6'),
            Field::make('text', 'crb_home_team_link_url', 'Link URL / URL del Enlace')
        ));
}

// Feature Post Meta
add_action('carbon_fields_register_fields', 'crb_feature_meta');
function crb_feature_meta()
{
    Container::make('post_meta', __('Banner Options / Opciones del Banner'))
        ->where('post_type', '=', 'feature')
        ->add_fields(array(
            Field::make('image', 'crb_feature_img_mobile', 'Mobile Image / Imagen Móvil'),
            Field::make('text', 'crb_feature_link_url', 'Link URL / URL del Enlace')
        ));
}

// Team Member Meta
add_action('carbon_fields_register_fields', 'crb_member_meta');
function crb_member_meta()
{
    Container::make('post_meta', __('Team Member Position / Puesto de Miembro del Equipo'))
        ->where('post_type', '=', 'member')
        ->add_fields(array(
            Field::make('text', 'crb_member_position', '')
        ));
}