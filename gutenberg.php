<?php
add_action( 'after_setup_theme', '_gutenberg_css' );

function _gutenberg_css(){

	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'icl/build/css/editor.css' ); // tries to include style-editor.css directly from your theme folder
	add_action( 'admin_head', function () { 
		?>
			<style>
				.editor-styles-wrapper {
					background: #FFFFFF!important;
				}
				.editor-styles-wrapper:not(.js) .lazyload {
					display: inherit!important;
				}
				.editor-styles-wrapper .acf-field .validation-error {
					border: solid 3px red;
				}
				.acf-input {

				}

				.acf-input .error-message {
					position: absolute;
					bottom: -18px;
					left: 0;
					right: 0;
					opacity: 0;
					transition: opacity .3s;
				}

				.acf-input.invalid .error-message {
					opacity: 1;
				}

				.edit-post-header__settings {
					position: relative;
				}

				.validator-message {
					color: #FF0000;
					position: absolute;
					bottom: -14px;
					left: 0;
					right: 0;
					text-align: center;
					opacity: 1;
					font-size: 12px;
					transition: opacity .3s ease-out;
				}

				.validator-message.valid {
					opacity: 0;
				}

			</style>
		<?php 
	} );
}

add_action('enqueue_block_editor_assets', '_gutenberg_js');

function _gutenberg_js() {
  wp_register_script('editor-js', get_stylesheet_directory_uri() . '/icl/build/js/editor.js', array(), '', true);
  wp_enqueue_script('editor-js');
}

function customWYSIWYG($arr){
	$arr['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4';
	return $arr;
}

add_filter('tiny_mce_before_init', 'customWYSIWYG');

# Remove visual editor buttons
function this_tinymce_buttons($buttons)
{
    # Remove the text color selector
    $remove = array('blockquote','wp_adv','fullscreen','wp_more'); //Add other button names to this array
    # Find the array key and then unset
    return array_diff($buttons,$remove);
}
add_filter(
    'mce_buttons',
    'this_tinymce_buttons'
);