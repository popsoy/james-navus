<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Font
 */
function enqueue_custom_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');



/**
 * Put shortcode [polylang_langswitcher] to post/page for display language dropdown with a globe icon
 */
function custom_polylang_langswitcher()
{
    $langs_array = pll_the_languages(array('dropdown' => 1, 'hide_current' => 0, 'raw' => 1));

    if ($langs_array) : ?>
        <div class="lang-switcher-dropdown">
            <div class="lang-switcher-label">
                <!-- Custom globe icon -->
                <img src="http://localhost/james-navus/wp-content/uploads/2024/09/globe.png" alt="Globe Icon" />
                <select onchange="if (this.value) window.location.href=this.value;">
                    <option value="" disabled selected>
                        Select Language
                    </option>
                    <?php foreach ($langs_array as $lang) : ?>
                        <option value="<?php echo esc_url($lang['url']); ?>" <?php selected($lang['slug'], pll_current_language()); ?>>
                            <?php echo esc_html(strtoupper($lang['slug'])); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
<?php endif;
}

add_shortcode('polylang_langswitcher', 'custom_polylang_langswitcher');
