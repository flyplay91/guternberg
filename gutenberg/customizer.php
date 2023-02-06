<?php
// Template may need to be formatted based on page conditionals to tailor to specific page types
function pre_populate_content() {
    $pg = get_post_type_object( 'page' );
    $pst = get_post_type_object( 'post' );
    $pg->template = array(
        array( 'acf/interior-hero', array(
            'lock' => array(
                'move' => true,
                'remove' => true
            ),
        ) ),
        array( 'core/paragraph', array(
            'placeholder' => 'Add a Description...',
        ) ),
        array( 'core/paragraph', array(
            'placeholder' => 'Here too...',
        ) ),
    );
    $pst->template = array(
        array( 'acf/interior-hero', array(
            'lock' => array(
                'move' => true,
                'remove' => true
            ),
        ) ),
        array( 'core/paragraph', array(
            'placeholder' => 'Add a Description...',
        ) ),
        array( 'core/paragraph', array(
            'placeholder' => 'Here too...',
        ) ),
        array( 'core/paragraph', array(
            'placeholder' => 'And here...',
        ) ),
    );
}
add_action( 'init', 'pre_populate_content' );