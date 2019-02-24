<?php
/**
 * Add extra functions and hooks.
 *
 * @package    Kirki
 * @copyright  Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license    https://opensource.org/licenses/MIT
 * @since      4.0
 */

add_action(
    'customize_register',
    function() {
        class_alias( 'Kirki\Control\Generic', 'Kirki_Control_Generic' );
    }
);

add_action(
    'customize_controls_print_footer_scripts',
    function() {
        $path = apply_filters( 'kirki_control_view_generic', __DIR__ . '/view-generic.php' );
        echo '<script type="text/html" id="tmpl-kirki-input-generic">';
        include $path;
        echo '</script>';
    }
);

add_action(
    'customize_controls_print_footer_scripts',
    function() {
        $path = apply_filters( 'kirki_control_view_textarea', __DIR__ . '/view-textarea.php' );
        echo '<script type="text/html" id="tmpl-kirki-input-textarea">';
        include $path;
        echo '</script>';
    }
);
