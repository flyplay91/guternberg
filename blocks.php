<?php

add_action('acf/init', 'idf_acf_init');

function idf_acf_init() {
    /*---===/ Home Hero \===---*/
    acf_register_block_type( array(
        'name'  => 'home_hero',
        'title' => __( 'Home Hero'),
        'description' => __( 'Home Hero Section'),
        'render_callback' => 'idf_acf_block_render_home_hero',
        'category' => 'heroes',
        'align' => 'wide',
        'supports' => array('align' => array('wide','full' ),'multiple' => false), // wide and full are optional,
        'icon' => 'welcome-widgets-menus',
        'mode' => 'edit',
        'keywords' => array('Hero', 'Heroes', 'Top', 'Home'),
    ));
    /*---===/ Interior Hero \===---*/
    acf_register_block_type( array(
        'name'  => 'interior_hero',
        'title' => __( 'Interior Hero'),
        'description' => __( 'Interior Hero Section'),
        'render_callback' => 'idf_acf_block_render_interior_hero',
        'category' => 'heroes',
        'align' => 'wide',
        'supports' => array('align' => array('wide','full' ),'multiple' => false), // wide and full are optional,
        'icon' => 'welcome-widgets-menus',
        'mode' => 'edit',
        'keywords' => array('Hero', 'Heroes', 'Top', 'Interior'),
    ));
    /*---===/ Text Content \===---*/
    acf_register_block_type( array(
        'name'  => 'text_content',
        'title' => __( 'Text Content'),
        'description' => __( 'WYSIWYG Text Editor'),
        'render_callback' => 'idf_acf_block_render_text_content',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'text',
        'mode' => 'edit',
        'keywords' => array('Text', 'Paragraph', 'Copy', 'Editor'),
    ));
    /*---===/ Link Set \===---*/
    acf_register_block_type( array(
        'name'  => 'link_set',
        'title' => __( 'Link Set'),
        'description' => __( 'Links'),
        'render_callback' => 'idf_acf_block_render_link_set',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'admin-links',
        'mode' => 'edit',
        'keywords' => array('Link'),
    ));
    /*---===/ Content Section \===---*/
    acf_register_block_type( array(
        'name'  => 'content_section',
        'title' => __( 'Content Section'),
        'description' => __( 'Top level content component selector'),
        'render_callback' => 'idf_acf_block_render_content_section',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'welcome-widgets-menus',
        'mode' => 'edit',
        'keywords' => array('Section', 'Content'),
    ));
    /*---===/ Carousel \===---*/
    acf_register_block_type( array(
        'name'  => 'carousel',
        'title' => __( 'Image Carousel'),
        'description' => __( 'A slideshow of images'),
        'render_callback' => 'idf_acf_block_render_carousel',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'images-alt2',
        'mode' => 'edit',
        'keywords' => array('Carousel', 'Images', 'Slide', 'Show', 'Slideshow'),
    ));
    /*---===/ Accordion \===---*/
    acf_register_block_type( array(
        'name'  => 'accordion',
        'title' => __( 'Accordion'),
        'description' => __( 'A set of collapsable content areas'),
        'render_callback' => 'idf_acf_block_render_accordion',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'editor-justify',
        'mode' => 'edit',
        'keywords' => array('Accordion', 'Menu', "List"),
    ));
    /*---===/ Tables \===---*/
    acf_register_block_type( array(
        'name'  => 'tables',
        'title' => __( 'Tables'),
        'description' => __( 'A Data Table'),
        'render_callback' => 'idf_acf_block_render_table',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'editor-table',
        'mode' => 'edit',
        'keywords' => array('Table', 'Data'),
    ));
    /*---===/ Blockquote \===---*/
    acf_register_block_type( array(
        'name'  => 'blockquote',
        'title' => __( 'Featured Quote'),
        'description' => __( 'A decorative blockquote with attribution options'),
        'render_callback' => 'idf_acf_block_render_blockquote',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'format-quote',
        'mode' => 'edit',
        'keywords' => array('Quote', 'Blockquote'),
    ));
    /*---===/ Full Width Media \===---*/
    acf_register_block_type( array(
        'name'  => 'full_width_media',
        'title' => __( 'Full Width Media'),
        'description' => __( 'Full Width Image with optional lower caption'),
        'render_callback' => 'idf_acf_block_render_full_width_media',
        'align' => 'wide',
        'category' => 'custom',
        'icon' => 'format-image',
        'mode' => 'edit',
        'keywords' => array('Image', 'Video', 'Media', 'Full'),
    ));
    /*---===/ Calendar Event \===---*/
    acf_register_block_type( array(
        'name'  => 'calendar_event',
        'title' => __( 'Calendar Event'),
        'description' => __( 'Single Calendar Event intended to slot between two other sections'),
        'render_callback' => 'idf_acf_block_render_event',
        'align' => 'wide',
        'category' => 'custom',
        'icon' => 'calendar-alt',
        'mode' => 'edit',
        'keywords' => array('Event', 'Calendar', 'Date'),
    ));
    /*---===/ Cards \===---*/
    acf_register_block_type( array(
        'name'  => 'cards',
        'title' => __( 'Cards'),
        'description' => __( 'A set of image cards'),
        'render_callback' => 'idf_acf_block_render_cards',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'screenoptions',
        'mode' => 'edit',
        'keywords' => array('Card', 'Cards', 'Set'),
    ));
    /*---===/ Side Image Feature \===---*/
    acf_register_block_type( array(
        'name'  => 'side-image-feature',
        'title' => __( 'Side Image Feature'),
        'description' => __( 'A Featured content section with a side image'),
        'render_callback' => 'idf_acf_block_render_side_image_feature',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'align-wide',
        'mode' => 'edit',
        'keywords' => array('Feature', 'Card', 'Image'), 
    ));
    /*---===/ Link Block \===---*/
    acf_register_block_type( array(
        'name'  => 'link-block',
        'title' => __( 'Link Block'),
        'description' => __( 'A CTA of several links'),
        'render_callback' => 'idf_acf_block_render_link_block',
        'category' => 'custom',
        'align' => 'wide',
        'icon' => 'align-wide',
        'mode' => 'edit',
        'keywords' => array('Link', 'Links'), 
    ));
    /*---===/ CTA \===---*/
    acf_register_block_type( array(
        'name'  => 'cta',
        'title' => __( 'CTA'),
        'description' => __( 'A basic CTA Banner'),
        'render_callback' => 'idf_acf_block_render_cta',
        'align' => 'wide',
        'category' => 'custom',
        'icon' => 'format-image',
        'mode' => 'edit',
        'keywords' => array('CTA', 'Banner')
    ));
    /*---===/ Featured News \===---*/
    acf_register_block_type( array(
        'name'  => 'featured-news',
        'title' => __( 'Featured News Item'),
        'description' => __( 'A Feature Block of a selected news item'),
        'render_callback' => 'idf_acf_block_render_featured_news',
        'supports' => array('align' => array('wide','full' ),'multiple' => false), // wide and full are optional,
        'align' => 'wide',
        'category' => 'custom',
        'icon' => 'format-image',
        'mode' => 'edit',
        'keywords' => array('CTA', 'Banner')
    ));
    /*---===/ News Feed \===---*/
    acf_register_block_type( array(
        'name'  => 'news-feed',
        'title' => __( 'News Feed'),
        'description' => __( 'A Feed of News Items'),
        'render_callback' => 'idf_acf_block_render_news_feed',
        'supports' => array('align' => array('wide','full' ),'multiple' => false), // wide and full are optional,
        'align' => 'wide',
        'category' => 'custom',
        'icon' => 'format-image',
        'mode' => 'edit',
        'keywords' => array('CTA', 'Banner')
    ));
}

function idf_acf_block_render_home_hero( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    
    Timber::render('templates/blocks/home-hero.twig', $context);
}

function idf_acf_block_render_interior_hero( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    
    Timber::render('templates/blocks/interior-hero.twig', $context);
}

function idf_acf_block_render_text_content( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/text-content.twig', $context);
}

function idf_acf_block_render_link_set( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/link-set.twig', $context);
}

function idf_acf_block_render_content_section( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    
    Timber::render('templates/blocks/content-section.twig', $context);
}

function idf_acf_block_render_carousel( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/carousel.twig', $context);
}

function idf_acf_block_render_accordion( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();
    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/accordion.twig', $context);
}

function idf_acf_block_render_table( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/table.twig', $context);
}

function idf_acf_block_render_blockquote( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/blockquote.twig', $context);
}

function idf_acf_block_render_full_width_media( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();

    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/full-width-media.twig', $context);
}

function idf_acf_block_render_cards( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/cards.twig', $context);
}

function idf_acf_block_render_link_block( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/link-block.twig', $context);
}

function idf_acf_block_render_side_image_feature( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();    
    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/side-image-feature.twig', $context);
}

function idf_acf_block_render_cta( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();

    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/cta.twig', $context);
}

function idf_acf_block_render_featured_news( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();

    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/featured-news-item.twig', $context);
}

function idf_acf_block_render_news_feed( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();
    if($context['fields']['feed_type'] == "automated") {
        $order = $context['fields']['feed_order'];
        $arrg = 'post_type=post&numberposts=3&orderby='.$order;
        $context['feed'] = Timber::get_posts($arrg);
    }

    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/news-feed.twig', $context);
}

function idf_acf_block_render_event( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    $context['block'] = $block;
    $context['fields'] = get_fields();

    $context['is_preview'] = $is_preview;
    Timber::render('templates/blocks/calendar-event.twig', $context);
}

function new_block_category($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'heroes',
                'title' => __('Page Hero', 'heroes'),
                'icon' => 'superhero',
                'mode' => 'edit',
            ),
            array(
                'slug' => 'custom',
                'title' => __('Custom', 'custom'),
                'icon' => 'wordpress',
                'mode' => 'edit',
            ),
            array(
                'slug' => 'feature-blocks',
                'title' => __('Feature Blocks', 'custom'),
                'icon' => 'wordpress',
                'mode' => 'edit',
            ),
        )
    );
}

add_filter( 'block_categories_all', 'new_block_category', 10, 2 );

//Block Restrictions by Template
add_filter('allowed_block_types_all', function($block_types, $editor_context) {
    $home_id = get_option( 'page_on_front');
    $id = $editor_context->post->ID;
    $type = $editor_context->post->post_type;
    $name = $editor_context->post->post_name;
    $rent = $editor_context->post->post_parent;
    
    $homeblocks = [
        'acf/home-hero',
        'acf/text-content',
        'acf/link-set',
        'acf/accordion',
        'acf/carousel',
        'acf/tables',
        'acf/blockquote',
        'acf/full-width-media',
        'acf/cards',
        'acf/side-image-feature',
        'acf/link-block',
        'acf/cta',
        'acf/featured-news',
        'acf/news-feed',
        'acf/calendar-event',
    ];
    $interiorblocks = [
        'acf/interior-hero',
        'acf/text-content',
        'acf/link-set',
        'acf/accordion',
        'acf/carousel',
        'acf/tables',
        'acf/blockquote',
        'acf/full-width-media',
        'acf/cards',
        'acf/side-image-feature',
        'acf/link-block',
        'acf/calendar-event'
    ];
    $newsblocks = [
        'acf/interior-hero',
        'acf/text-content',
        'acf/link-set',
        'acf/accordion',
        'acf/carousel',
        'acf/tables',
        'acf/blockquote',
        'acf/full-width-media'
    ];
    $newslandingblock = [
        'acf/featured-news',
    ];
	  if($home_id == $id) {
        return $homeblocks;
    } elseif($type === 'post') {
        return $newsblocks;
    } elseif($name === 'news') {
        return $newslandingblock;
    } else {
        // return $interiorblocks;
    }
	
    return $block_types;
}, 10, 2);