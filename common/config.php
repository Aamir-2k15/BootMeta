<?php
/** ***/
$available_social_media_platforms = [
    'Facebook' => 'facebook',
    'Twitter' => 'twitter',
    'LinkedIn' => 'linkedin',
    // 'Pinterest' => 'pinterest',
    'Reddit' => 'reddit',
    'Tumblr' => 'tumblr',
    'Instagram' => 'instagram',
    // 'Snapchat' => 'snapchat',
    'YouTube' => 'youtube',
    'Vimeo' => 'vimeo',
    // 'Telegram' => 'telegram',
    'WhatsApp' => 'whatsapp',
    'Email' => 'site_email', // Not a social media platform, but often included in sharing options.
    'Phone' => 'phone',
];

define('WPL_SOCIAL_MEDIA_PLATFORMS', $available_social_media_platforms);

/** ***/
$available_options_array = [
     'wpl_excerpt_length' => 'text',
     'wpl_search_in_menu' => 'checkbox'
];
define('WPL_AVAILABLE_OPTIONS', $available_options_array);

/** ***/
$theme_features_array = [
    'site_logo' => 'wp_upload',
    // 'logo_max-width' => 'text',
    // 'logo_max-height' => 'text',
    'favicon' => 'wp_upload',
    'address' => 'textarea',
    'map' => 'textarea',
    'contact_form' => 'textarea',
];
define('WPL_AVAILABLE_FEATURES', $theme_features_array);


/** ***/
$theme_support_array['widgets'] =  [
    'Topbar One' => 'topbar_1',
    'Topbar Two' => 'topbar_2',
    'Topbar Three' => 'topbar_3',
    'Topbar Four' => 'topbar_4',
    'Header' => 'header', 
    'Page Sidebar' => 'page', 
    'Blog Sidebar' => 'blog', 
    'Footer One' => 'footer_1', 
    'Footer Two' => 'footer_2',
    'Footer Three' => 'footer_3',
    'Footer Four' => 'footer_4'
];
$theme_support_array['nav_menu'] =  [
    'Primary Menu' => 'primary_menu', 
    'Secondary Menu' => 'secondary_menu', 
    'Footer Menu' => 'footer_menu'
];

// $theme_support_array['cpts'] = [];
define('WPL_THEME_SUPPORT_OPTIONS',$theme_support_array);



$fb = new FormBuilder();
define('FORMBUILDER', $fb);

$wpl_settings = get_option('wpl_settings');
$wpl_socialmedia = get_option('wpl_socialmedia');

define('WPL_SETTINGS', $wpl_settings);
define('WPL_SOCIALMEDIA', $wpl_socialmedia); 

include_once get_template_directory() . '/inc/pages-admin/landing-page-sections.php';
////////

// $field_1 = array(
//     array(
//         'type'  => 'text',
//         'label' => 'Text Field',
//         'name'  => 'text_field',
//         'id'    => 'text_field',
//         'value' => 'Default Text Value',
//         ),
    
// );


// $field_2 = [
//     array(
//         'type'  => 'email',
//         'label' => 'Email Field',
//         'name'  => 'email_field',
//         'id'    => 'email_field',
//         'value' => 'default@example.com',
//     ),
// ];

//  new Custom_Metabox([
//     'id' => 'text_metabox',
//     'title' => 'Custom Metabox with All Fields',
//     'page_templates' => ['temp-contact-us.php'], // Corrected to 'page_templates'
//     'fields' => $field_1,
//     // 'post_type' => ['page'], // Use 'post_type' as per the class constructor
//     'field_width' => 'half-width', 
// ]);
//  new Custom_Metabox([
//     'id' => 'email_metabox',
//     'title' => 'Custom Metabox with All Fields',
//     'page_templates' => ['temp-contact-us.php'], // Corrected to 'page_templates'
//     'fields' => $field_1,
//     // 'post_type' => ['page'], // Use 'post_type' as per the class constructor
//     'field_width' => 'half-width', 
// ]);


// $fields = [
//     array(
//         'type'  => 'number',
//         'label' => 'Number Field',
//         'name'  => 'number_field',
//         'id'    => 'number_field',
//         'value' => '10', 
//     ),
//     array(
//         'type'  => 'textarea',
//         'label' => 'Textarea Field',
//         'name'  => 'textarea_field',
//         'id'    => 'textarea_field',
//         'value' => 'Default Textarea Value',
//     ),
//     array(
//         'type'  => 'wysiwyg',
//         'label' => 'WYSIWYG Editor',
//         'name'  => 'wysiwyg_field',
//         'id'    => 'wysiwyg_field',
//         'value' => 'Default WYSIWYG Content',
//     ),
//     array(
//         'type'  => 'radio',
//         'label' => 'Radio Button Field',
//         'name'  => 'radio_field',
//         'id'    => 'radio_field',
//         'options' => array(
//             'Option 1' => 'option_1',
//             'Option 2' => 'option_2',
//         ),
//         'value' => 'option_1',
//     ), 
 
 
//     array(
//         'type'  => 'dynamic_select',
//         'label' => 'Select Page',
//         'name'  => 'select_page_field',
//         'id'    => 'select_page_field',
//         'options' =>  'all_pages'
//     ),
 
//     array(
//         'type'  => 'upload',
//         'label' => 'File Upload',
//         'name'  => 'upload_field',
//         'id'    => 'upload_field',
//         'value' => '', // URL or file path to the uploaded file
//     ),
//     array(
//         'type'  => 'date',
//         'label' => 'Date Picker',
//         'name'  => 'date_field',
//         'id'    => 'date_field',
//         'value' => '2024-01-01',
//     ),
// ];