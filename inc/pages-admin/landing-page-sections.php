<?php

new Custom_Metabox([
    'id' => 'hero_section',
    'title' => 'Hero Section',
    'page_templates' => ['template-landing-page.php'], // Corrected to 'page_templates'
    'fields' => [
        [
        'type'  => 'text',
        'label' => 'Hero Title',
        'name'  => 'hero_title',
        'id'    => 'hero_title',
        ],
        [
        'type'  => 'text',
        'label' => 'Sub Title',
        'name'  => 'sub_title',
        'id'    => 'sub_title',
        ],
        [
        'type'  => 'upload',
        'label' => 'Background Image',
        'name'  => 'background_image',
        'id'    => 'background_image',
        ],
        [
        'type'  => 'text',
        'label' => 'Button Title',
        'name'  => 'button_title',
        'id'    => 'button_title',
        ],
        [
        'type'  => 'text',
        'label' => 'Button Link',
        'name'  => 'button_link',
        'id'    => 'button_link',
        ],
    ],
    // 'post_type' => ['page'], // Use 'post_type' as per the class constructor
]);


/*=Image & Description Section=*/
new Custom_Metabox([
    'id' => 'image_description_section',
    'title' => 'Image & Description Section',
    'page_templates' => ['template-landing-page.php'], // Corrected to 'page_templates'
    'fields' => [
        [
        'type'  => 'text',
        'label' => 'Section Title',
        'name'  => 'section_title',
        'id'    => 'section_title',
        ],
        [
            'type'  => 'upload',
            'label' => 'Section Image',
            'name'  => 'section_image',
            'id'    => 'section_image',
        ],
        [
        'type'  => 'text',
        'label' => 'Section Sub Title',
        'name'  => 'section_sub_title',
        'id'    => 'section_sub_title',
        ],

        [
        'type'  => 'wysiwyg',
        'label' => 'Description',
        'name'  => 'section_description',
        'id'    => 'section_description',
        ]
    ],
    // 'post_type' => ['page'], // Use 'post_type' as per the class constructor
]);