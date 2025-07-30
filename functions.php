<?php
/**
 * Kadence Child Theme - Lottery Results
 * Functions and definitions
 *
 * @package Kadence_Child_Lottery
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue child theme styles
 */
function kadence_child_lottery_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style('kadence-parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue child theme styles
    wp_enqueue_style(
        'kadence-child-lottery-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('kadence-parent-style'),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom JavaScript
    wp_enqueue_script(
        'kadence-child-lottery-script',
        get_stylesheet_directory_uri() . '/assets/js/lottery.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('kadence-child-lottery-script', 'lottery_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('lottery_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'kadence_child_lottery_enqueue_styles');

/**
 * Register Custom Post Types for Lottery Games
 */
function kadence_child_lottery_register_post_types() {
    
    // EuroMillions
    register_post_type('euromillions', array(
        'labels' => array(
            'name' => 'EuroMillions',
            'singular_name' => 'EuroMillions Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New EuroMillions Draw',
            'edit_item' => 'Edit EuroMillions Draw',
            'new_item' => 'New EuroMillions Draw',
            'view_item' => 'View EuroMillions Draw',
            'search_items' => 'Search EuroMillions Draws',
            'not_found' => 'No EuroMillions draws found',
            'not_found_in_trash' => 'No EuroMillions draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 20
    ));
    
    // La Primitiva
    register_post_type('primitiva', array(
        'labels' => array(
            'name' => 'La Primitiva',
            'singular_name' => 'Primitiva Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Primitiva Draw',
            'edit_item' => 'Edit Primitiva Draw',
            'new_item' => 'New Primitiva Draw',
            'view_item' => 'View Primitiva Draw',
            'search_items' => 'Search Primitiva Draws',
            'not_found' => 'No Primitiva draws found',
            'not_found_in_trash' => 'No Primitiva draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 21
    ));
    
    // Bonoloto
    register_post_type('bonoloto', array(
        'labels' => array(
            'name' => 'Bonoloto',
            'singular_name' => 'Bonoloto Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Bonoloto Draw',
            'edit_item' => 'Edit Bonoloto Draw',
            'new_item' => 'New Bonoloto Draw',
            'view_item' => 'View Bonoloto Draw',
            'search_items' => 'Search Bonoloto Draws',
            'not_found' => 'No Bonoloto draws found',
            'not_found_in_trash' => 'No Bonoloto draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 22
    ));
    
    // El Gordo
    register_post_type('elgordo', array(
        'labels' => array(
            'name' => 'El Gordo',
            'singular_name' => 'El Gordo Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New El Gordo Draw',
            'edit_item' => 'Edit El Gordo Draw',
            'new_item' => 'New El Gordo Draw',
            'view_item' => 'View El Gordo Draw',
            'search_items' => 'Search El Gordo Draws',
            'not_found' => 'No El Gordo draws found',
            'not_found_in_trash' => 'No El Gordo draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 23
    ));
    
    // EuroDreams
    register_post_type('eurodreams', array(
        'labels' => array(
            'name' => 'EuroDreams',
            'singular_name' => 'EuroDreams Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New EuroDreams Draw',
            'edit_item' => 'Edit EuroDreams Draw',
            'new_item' => 'New EuroDreams Draw',
            'view_item' => 'View EuroDreams Draw',
            'search_items' => 'Search EuroDreams Draws',
            'not_found' => 'No EuroDreams draws found',
            'not_found_in_trash' => 'No EuroDreams draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 24
    ));
    
    // Lototurf
    register_post_type('lototurf', array(
        'labels' => array(
            'name' => 'Lototurf',
            'singular_name' => 'Lototurf Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Lototurf Draw',
            'edit_item' => 'Edit Lototurf Draw',
            'new_item' => 'New Lototurf Draw',
            'view_item' => 'View Lototurf Draw',
            'search_items' => 'Search Lototurf Draws',
            'not_found' => 'No Lototurf draws found',
            'not_found_in_trash' => 'No Lototurf draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 25
    ));
    
    // Quintuple Plus
    register_post_type('quintupleplus', array(
        'labels' => array(
            'name' => 'Quintuple Plus',
            'singular_name' => 'Quintuple Plus Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Quintuple Plus Draw',
            'edit_item' => 'Edit Quintuple Plus Draw',
            'new_item' => 'New Quintuple Plus Draw',
            'view_item' => 'View Quintuple Plus Draw',
            'search_items' => 'Search Quintuple Plus Draws',
            'not_found' => 'No Quintuple Plus draws found',
            'not_found_in_trash' => 'No Quintuple Plus draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 26
    ));
    
    // Lotería Nacional
    register_post_type('nacional', array(
        'labels' => array(
            'name' => 'Lotería Nacional',
            'singular_name' => 'Nacional Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Nacional Draw',
            'edit_item' => 'Edit Nacional Draw',
            'new_item' => 'New Nacional Draw',
            'view_item' => 'View Nacional Draw',
            'search_items' => 'Search Nacional Draws',
            'not_found' => 'No Nacional draws found',
            'not_found_in_trash' => 'No Nacional draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 27
    ));
    
    // La Quiniela
    register_post_type('quiniela', array(
        'labels' => array(
            'name' => 'La Quiniela',
            'singular_name' => 'Quiniela Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Quiniela Draw',
            'edit_item' => 'Edit Quiniela Draw',
            'new_item' => 'New Quiniela Draw',
            'view_item' => 'View Quiniela Draw',
            'search_items' => 'Search Quiniela Draws',
            'not_found' => 'No Quiniela draws found',
            'not_found_in_trash' => 'No Quiniela draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 28
    ));
    
    // Quinigol
    register_post_type('quinigol', array(
        'labels' => array(
            'name' => 'Quinigol',
            'singular_name' => 'Quinigol Draw',
            'add_new' => 'Add New Draw',
            'add_new_item' => 'Add New Quinigol Draw',
            'edit_item' => 'Edit Quinigol Draw',
            'new_item' => 'New Quinigol Draw',
            'view_item' => 'View Quinigol Draw',
            'search_items' => 'Search Quinigol Draws',
            'not_found' => 'No Quinigol draws found',
            'not_found_in_trash' => 'No Quinigol draws found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_position' => 29
    ));
}
add_action('init', 'kadence_child_lottery_register_post_types');

/**
 * Add custom meta boxes for lottery data
 */
function kadence_child_lottery_add_meta_boxes() {
    $post_types = array('euromillions', 'primitiva', 'bonoloto', 'elgordo', 'eurodreams', 'lototurf', 'quintupleplus', 'nacional', 'quiniela', 'quinigol');
    
    foreach ($post_types as $post_type) {
        add_meta_box(
            'lottery_draw_data',
            'Draw Data',
            'kadence_child_lottery_draw_data_callback',
            $post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'kadence_child_lottery_add_meta_boxes');

/**
 * Meta box callback function
 */
function kadence_child_lottery_draw_data_callback($post) {
    wp_nonce_field('kadence_child_lottery_save_meta_box_data', 'kadence_child_lottery_meta_box_nonce');
    
    $post_type = get_post_type($post);
    $draw_date = get_post_meta($post->ID, '_draw_date', true);
    $prize_amount = get_post_meta($post->ID, '_prize_amount', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="draw_date">Draw Date:</label></th>';
    echo '<td><input type="date" id="draw_date" name="draw_date" value="' . esc_attr($draw_date) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="prize_amount">Prize Amount (€):</label></th>';
    echo '<td><input type="number" id="prize_amount" name="prize_amount" value="' . esc_attr($prize_amount) . '" step="0.01" /></td>';
    echo '</tr>';
    
    // Game-specific fields
    switch ($post_type) {
        case 'euromillions':
            kadence_child_lottery_euromillions_fields($post);
            break;
        case 'primitiva':
            kadence_child_lottery_primitiva_fields($post);
            break;
        case 'bonoloto':
            kadence_child_lottery_bonoloto_fields($post);
            break;
        case 'elgordo':
            kadence_child_lottery_elgordo_fields($post);
            break;
        case 'eurodreams':
            kadence_child_lottery_eurodreams_fields($post);
            break;
        case 'lototurf':
            kadence_child_lottery_lototurf_fields($post);
            break;
        case 'quintupleplus':
            kadence_child_lottery_quintupleplus_fields($post);
            break;
        case 'nacional':
            kadence_child_lottery_nacional_fields($post);
            break;
        case 'quiniela':
            kadence_child_lottery_quiniela_fields($post);
            break;
        case 'quinigol':
            kadence_child_lottery_quinigol_fields($post);
            break;
    }
    
    echo '</table>';
}

/**
 * EuroMillions specific fields
 */
function kadence_child_lottery_euromillions_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $stars = get_post_meta($post->ID, '_star_numbers', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 08,15,26,33,41" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="star_numbers">Star Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="star_numbers" name="star_numbers" value="' . esc_attr($stars) . '" placeholder="e.g., 09,10" /></td>';
    echo '</tr>';
}

/**
 * Primitiva specific fields
 */
function kadence_child_lottery_primitiva_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $complementary = get_post_meta($post->ID, '_complementary_number', true);
    $reintegro = get_post_meta($post->ID, '_reintegro_number', true);
    $joker = get_post_meta($post->ID, '_joker_number', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 18,19,24,28,32,44" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="complementary_number">Complementary Number:</label></th>';
    echo '<td><input type="number" id="complementary_number" name="complementary_number" value="' . esc_attr($complementary) . '" min="1" max="49" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="reintegro_number">Reintegro Number:</label></th>';
    echo '<td><input type="number" id="reintegro_number" name="reintegro_number" value="' . esc_attr($reintegro) . '" min="0" max="9" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="joker_number">Joker Number:</label></th>';
    echo '<td><input type="text" id="joker_number" name="joker_number" value="' . esc_attr($joker) . '" placeholder="e.g., 3710529" /></td>';
    echo '</tr>';
}

/**
 * Bonoloto specific fields
 */
function kadence_child_lottery_bonoloto_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $complementary = get_post_meta($post->ID, '_complementary_number', true);
    $reintegro = get_post_meta($post->ID, '_reintegro_number', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 14,18,21,24,30,33" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="complementary_number">Complementary Number:</label></th>';
    echo '<td><input type="number" id="complementary_number" name="complementary_number" value="' . esc_attr($complementary) . '" min="1" max="49" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="reintegro_number">Reintegro Number:</label></th>';
    echo '<td><input type="number" id="reintegro_number" name="reintegro_number" value="' . esc_attr($reintegro) . '" min="0" max="9" /></td>';
    echo '</tr>';
}

/**
 * El Gordo specific fields
 */
function kadence_child_lottery_elgordo_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $key_number = get_post_meta($post->ID, '_key_number', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 01,30,36,37,54" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="key_number">Key Number:</label></th>';
    echo '<td><input type="number" id="key_number" name="key_number" value="' . esc_attr($key_number) . '" min="0" max="9" /></td>';
    echo '</tr>';
}

/**
 * EuroDreams specific fields
 */
function kadence_child_lottery_eurodreams_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $dream_number = get_post_meta($post->ID, '_dream_number', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 01,02,05,06,15,38" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="dream_number">Dream Number:</label></th>';
    echo '<td><input type="number" id="dream_number" name="dream_number" value="' . esc_attr($dream_number) . '" min="1" max="5" /></td>';
    echo '</tr>';
}

/**
 * Lototurf specific fields
 */
function kadence_child_lottery_lototurf_fields($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $horse = get_post_meta($post->ID, '_horse_number', true);
    $r_number = get_post_meta($post->ID, '_r_number', true);
    
    echo '<tr>';
    echo '<th><label for="winning_numbers">Winning Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="winning_numbers" name="winning_numbers" value="' . esc_attr($numbers) . '" placeholder="e.g., 09,15,17,22,27,29" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="horse_number">Horse Number:</label></th>';
    echo '<td><input type="number" id="horse_number" name="horse_number" value="' . esc_attr($horse) . '" min="1" max="10" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="r_number">R Number:</label></th>';
    echo '<td><input type="number" id="r_number" name="r_number" value="' . esc_attr($r_number) . '" min="0" max="9" /></td>';
    echo '</tr>';
}

/**
 * Quintuple Plus specific fields
 */
function kadence_child_lottery_quintupleplus_fields($post) {
    $race_results = get_post_meta($post->ID, '_race_results', true);
    
    echo '<tr>';
    echo '<th><label for="race_results">Race Results (JSON format):</label></th>';
    echo '<td><textarea id="race_results" name="race_results" rows="5" cols="50" placeholder=\'[{"race":"Race 1","number":"03"},{"race":"Race 2","number":"03"}]\'>' . esc_textarea($race_results) . '</textarea></td>';
    echo '</tr>';
}

/**
 * Nacional specific fields
 */
function kadence_child_lottery_nacional_fields($post) {
    $first_prize = get_post_meta($post->ID, '_first_prize_number', true);
    $second_prize = get_post_meta($post->ID, '_second_prize_number', true);
    $additional_numbers = get_post_meta($post->ID, '_additional_numbers', true);
    
    echo '<tr>';
    echo '<th><label for="first_prize_number">1st Prize Number:</label></th>';
    echo '<td><input type="text" id="first_prize_number" name="first_prize_number" value="' . esc_attr($first_prize) . '" placeholder="e.g., 48994" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="second_prize_number">2nd Prize Number:</label></th>';
    echo '<td><input type="text" id="second_prize_number" name="second_prize_number" value="' . esc_attr($second_prize) . '" placeholder="e.g., 26019" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="additional_numbers">Additional Numbers (comma separated):</label></th>';
    echo '<td><input type="text" id="additional_numbers" name="additional_numbers" value="' . esc_attr($additional_numbers) . '" placeholder="e.g., 1,3,4" /></td>';
    echo '</tr>';
}

/**
 * Quiniela specific fields
 */
function kadence_child_lottery_quiniela_fields($post) {
    $matches = get_post_meta($post->ID, '_match_results', true);
    
    echo '<tr>';
    echo '<th><label for="match_results">Match Results (JSON format):</label></th>';
    echo '<td><textarea id="match_results" name="match_results" rows="10" cols="50" placeholder=\'[{"match":1,"team1":"Team A","team2":"Team B","result":"1"}]\'>' . esc_textarea($matches) . '</textarea></td>';
    echo '</tr>';
}

/**
 * Quinigol specific fields
 */
function kadence_child_lottery_quinigol_fields($post) {
    $matches = get_post_meta($post->ID, '_match_results', true);
    
    echo '<tr>';
    echo '<th><label for="match_results">Match Results (JSON format):</label></th>';
    echo '<td><textarea id="match_results" name="match_results" rows="10" cols="50" placeholder=\'[{"match":1,"team1":"Team A","team2":"Team B","result":"1-0"}]\'>' . esc_textarea($matches) . '</textarea></td>';
    echo '</tr>';
}

/**
 * Save meta box data
 */
function kadence_child_lottery_save_meta_box_data($post_id) {
    if (!isset($_POST['kadence_child_lottery_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['kadence_child_lottery_meta_box_nonce'], 'kadence_child_lottery_save_meta_box_data')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save common fields
    $fields = array(
        'draw_date', 'prize_amount', 'winning_numbers', 'star_numbers',
        'complementary_number', 'reintegro_number', 'joker_number',
        'key_number', 'dream_number', 'horse_number', 'r_number',
        'race_results', 'first_prize_number', 'second_prize_number',
        'additional_numbers', 'match_results'
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'kadence_child_lottery_save_meta_box_data');

/**
 * Create shortcode for displaying lottery results
 */
function kadence_child_lottery_results_shortcode($atts) {
    $atts = shortcode_atts(array(
        'games' => 'all',
        'limit' => 10,
        'show_latest' => false
    ), $atts, 'lottery_results');
    
    ob_start();
    
    if ($atts['games'] === 'all') {
        $post_types = array('euromillions', 'primitiva', 'bonoloto', 'elgordo', 'quintupleplus', 'nacional', 'quiniela', 'quinigol');
    } else {
        $post_types = explode(',', $atts['games']);
    }
    
    echo '<div class="lottery-results-container">';
    echo '<div class="lottery-results-grid">';
    
    foreach ($post_types as $post_type) {
        $posts = get_posts(array(
            'post_type' => trim($post_type),
            'posts_per_page' => $atts['show_latest'] ? 1 : intval($atts['limit']),
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        
        if ($posts) {
            foreach ($posts as $post) {
                setup_postdata($post);
                kadence_child_lottery_display_result_card($post);
            }
            wp_reset_postdata();
        }
    }
    
    echo '</div>';
    echo '</div>';
    
    return ob_get_clean();
}
add_shortcode('lottery_results', 'kadence_child_lottery_results_shortcode');

/**
 * Display individual result card
 */
function kadence_child_lottery_display_result_card($post) {
    $post_type = get_post_type($post);
    $draw_date = get_post_meta($post->ID, '_draw_date', true);
    $prize_amount = get_post_meta($post->ID, '_prize_amount', true);
    
    echo '<div class="lottery-result-card ' . esc_attr($post_type) . '">';
    echo '<div class="card-header">';
    echo '<h3>' . get_the_title($post) . '</h3>';
    echo '<div class="draw-info">';
    if ($draw_date) {
        echo '<span class="draw-date">' . date('d/m/Y', strtotime($draw_date)) . '</span>';
    }
    if ($prize_amount) {
        echo '<span class="prize-amount">Jackpot: €' . number_format($prize_amount, 2) . '</span>';
    }
    echo '</div>';
    echo '</div>';
    
    echo '<div class="card-body">';
    echo '<div class="winning-numbers-section">';
    echo '<h3>Winning Numbers</h3>';
    echo '<p class="numbers-instruction">See in order of appearance</p>';
    
    switch ($post_type) {
        case 'euromillions':
            kadence_child_lottery_display_euromillions($post);
            break;
        case 'primitiva':
            kadence_child_lottery_display_primitiva($post);
            break;
        case 'bonoloto':
            kadence_child_lottery_display_bonoloto($post);
            break;
        case 'elgordo':
            kadence_child_lottery_display_elgordo($post);
            break;
        case 'quintupleplus':
            kadence_child_lottery_display_quintupleplus($post);
            break;
        case 'nacional':
            kadence_child_lottery_display_nacional($post);
            break;
        case 'quiniela':
            kadence_child_lottery_display_quiniela($post);
            break;
        case 'quinigol':
            kadence_child_lottery_display_quinigol($post);
            break;
    }
    
    echo '</div>'; // Close winning-numbers-section
    echo '<a href="' . get_permalink($post->ID) . '" class="view-details-btn">View Full Details</a>';
    echo '</div>'; // Close card-body
    echo '</div>'; // Close lottery-result-card
}

/**
 * Display EuroMillions results
 */
function kadence_child_lottery_display_euromillions($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $stars = get_post_meta($post->ID, '_star_numbers', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    if ($stars) {
        $star_array = explode(',', $stars);
        foreach ($star_array as $star) {
            echo '<div class="lottery-number star-number">' . trim($star) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-50)</span>';
    echo '</div>';
    echo '<div class="legend-item">';
    echo '<div class="legend-number star-number">00</div>';
    echo '<span>Lucky Stars (1-12)</span>';
    echo '</div>';
    echo '</div>';
    
    $million = get_post_meta($post->ID, '_million_code', true);
    if ($million) {
        echo '<div class="supplementary-info">';
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">EL MILLÓN:</span>';
        echo '<span class="supplementary-value">' . $million . '</span>';
        echo '</div>';
        echo '</div>';
    }
}

/**
 * Display Primitiva results
 */
function kadence_child_lottery_display_primitiva($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $complementary = get_post_meta($post->ID, '_complementary_number', true);
    $reintegro = get_post_meta($post->ID, '_reintegro_number', true);
    $joker = get_post_meta($post->ID, '_joker_number', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-49)</span>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="supplementary-info">';
    if ($complementary) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">C:</span>';
        echo '<span class="supplementary-value">' . $complementary . '</span>';
        echo '</div>';
    }
    if ($reintegro) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">R:</span>';
        echo '<span class="supplementary-value">' . $reintegro . '</span>';
        echo '</div>';
    }
    echo '</div>';
    
    if ($joker) {
        echo '<div class="supplementary-info">';
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">JOKER:</span>';
        echo '<span class="supplementary-value">' . $joker . '</span>';
        echo '</div>';
        echo '</div>';
    }
}

/**
 * Display Bonoloto results
 */
function kadence_child_lottery_display_bonoloto($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $complementary = get_post_meta($post->ID, '_complementary_number', true);
    $reintegro = get_post_meta($post->ID, '_reintegro_number', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-49)</span>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="supplementary-info">';
    if ($complementary) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">C:</span>';
        echo '<span class="supplementary-value">' . $complementary . '</span>';
        echo '</div>';
    }
    if ($reintegro) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">R:</span>';
        echo '<span class="supplementary-value">' . $reintegro . '</span>';
        echo '</div>';
    }
    echo '</div>';
}

/**
 * Display El Gordo results
 */
function kadence_child_lottery_display_elgordo($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $key_number = get_post_meta($post->ID, '_key_number', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-54)</span>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="supplementary-info">';
    if ($key_number !== '') {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">KEY NO:</span>';
        echo '<span class="supplementary-value">' . $key_number . '</span>';
        echo '</div>';
    }
    echo '</div>';
}

/**
 * Display EuroDreams results
 */
function kadence_child_lottery_display_eurodreams($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $dream_number = get_post_meta($post->ID, '_dream_number', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-40)</span>';
    echo '</div>';
    
    if ($dream_number) {
        echo '<div class="legend-item">';
        echo '<div class="legend-number dream-number">0</div>';
        echo '<span>Dream Number (1-5)</span>';
        echo '</div>';
    }
    echo '</div>';
    
    echo '<div class="supplementary-info">';
    if ($dream_number) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">DREAM:</span>';
        echo '<span class="supplementary-value dream-number">' . $dream_number . '</span>';
        echo '</div>';
    }
    echo '</div>';
}

/**
 * Display Lototurf results
 */
function kadence_child_lottery_display_lototurf($post) {
    $numbers = get_post_meta($post->ID, '_winning_numbers', true);
    $horse = get_post_meta($post->ID, '_horse_number', true);
    $r_number = get_post_meta($post->ID, '_r_number', true);
    
    echo '<div class="lottery-numbers">';
    
    if ($numbers) {
        $number_array = explode(',', $numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
    }
    
    echo '</div>';
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00</div>';
    echo '<span>Main Numbers (1-31)</span>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="supplementary-info">';
    if ($horse) {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">🐎:</span>';
        echo '<span class="supplementary-value">' . $horse . '</span>';
        echo '</div>';
    }
    if ($r_number !== '') {
        echo '<div class="supplementary-item">';
        echo '<span class="supplementary-label">R:</span>';
        echo '<span class="supplementary-value">' . $r_number . '</span>';
        echo '</div>';
    }
    echo '</div>';
}

/**
 * Display Quintuple Plus results
 */
function kadence_child_lottery_display_quintupleplus($post) {
    $race_results = get_post_meta($post->ID, '_race_results', true);
    
    if ($race_results) {
        $results = json_decode($race_results, true);
        if ($results) {
            echo '<div class="quintuple-results">';
            foreach ($results as $result) {
                echo '<div class="quintuple-race">';
                echo '<span class="quintuple-race-name">' . esc_html($result['race']) . '</span>';
                echo '<span class="quintuple-race-number main-number">' . esc_html($result['number']) . '</span>';
                echo '</div>';
            }
            echo '</div>';
            
            echo '<div class="numbers-legend">';
            echo '<div class="legend-item">';
            echo '<div class="legend-number main-number">0</div>';
            echo '<span>Race Winner</span>';
            echo '</div>';
            echo '</div>';
        }
    }
}

/**
 * Display Nacional results
 */
function kadence_child_lottery_display_nacional($post) {
    $first_prize = get_post_meta($post->ID, '_first_prize_number', true);
    $second_prize = get_post_meta($post->ID, '_second_prize_number', true);
    $additional_numbers = get_post_meta($post->ID, '_additional_numbers', true);
    
    echo '<div class="nacional-prizes">';
    
    if ($first_prize) {
        echo '<div class="nacional-prize">';
        echo '<div class="nacional-prize-label">1ST PRIZE</div>';
        echo '<div class="nacional-prize-number main-number">' . $first_prize . '</div>';
        echo '<div class="nacional-prize-description">Shared between...</div>';
        echo '</div>';
    }
    
    if ($second_prize) {
        echo '<div class="nacional-prize">';
        echo '<div class="nacional-prize-label">2º PRIZE</div>';
        echo '<div class="nacional-prize-number main-number">' . $second_prize . '</div>';
        echo '<div class="nacional-prize-description">Shared between...</div>';
        echo '</div>';
    }
    
    echo '</div>';
    
    if ($additional_numbers) {
        echo '<div class="nacional-additional-numbers">';
        $number_array = explode(',', $additional_numbers);
        foreach ($number_array as $number) {
            echo '<div class="lottery-number main-number">' . trim($number) . '</div>';
        }
        echo '</div>';
    }
    
    echo '<div class="numbers-legend">';
    echo '<div class="legend-item">';
    echo '<div class="legend-number main-number">00000</div>';
    echo '<span>Prize Numbers</span>';
    echo '</div>';
    echo '</div>';
}

/**
 * Display Quiniela results
 */
function kadence_child_lottery_display_quiniela($post) {
    $matches = get_post_meta($post->ID, '_match_results', true);
    
    if ($matches) {
        $match_results = json_decode($matches, true);
        if ($match_results) {
            echo '<div class="match-results-wrapper">';
            echo '<table class="quiniela-table">';
            echo '<thead><tr><th>#</th><th>Teams</th><th>Result</th></tr></thead>';
            echo '<tbody>';
            foreach ($match_results as $match) {
                echo '<tr>';
                echo '<td class="match-number">' . $match['match'] . '</td>';
                echo '<td class="team-names">' . esc_html($match['team1']) . ' - ' . esc_html($match['team2']) . '</td>';
                echo '<td class="result win-' . strtolower($match['result']) . '">' . $match['result'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            
            echo '<div class="numbers-legend">';
            echo '<div class="legend-item">';
            echo '<span class="result-legend win-1">1</span>';
            echo '<span>Home Win</span>';
            echo '</div>';
            echo '<div class="legend-item">';
            echo '<span class="result-legend win-x">X</span>';
            echo '<span>Draw</span>';
            echo '</div>';
            echo '<div class="legend-item">';
            echo '<span class="result-legend win-2">2</span>';
            echo '<span>Away Win</span>';
            echo '</div>';
            echo '</div>';
        }
    }
}

/**
 * Display Quinigol results
 */
function kadence_child_lottery_display_quinigol($post) {
    $matches = get_post_meta($post->ID, '_match_results', true);
    
    if ($matches) {
        $match_results = json_decode($matches, true);
        if ($match_results) {
            echo '<div class="match-results-wrapper">';
            echo '<table class="quiniela-table">';
            echo '<thead><tr><th>#</th><th>Teams</th><th>Score</th></tr></thead>';
            echo '<tbody>';
            foreach ($match_results as $match) {
                echo '<tr>';
                echo '<td class="match-number">' . $match['match'] . '</td>';
                echo '<td class="team-names">' . esc_html($match['team1']) . ' - ' . esc_html($match['team2']) . '</td>';
                echo '<td class="result">' . $match['result'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            
            echo '<div class="numbers-legend">';
            echo '<div class="legend-item">';
            echo '<span class="result-legend">0-0</span>';
            echo '<span>Match Score</span>';
            echo '</div>';
            echo '</div>';
        }
    }
}

/**
 * Add admin menu for lottery management
 */
function kadence_child_lottery_admin_menu() {
    add_menu_page(
        'Lottery Management',
        'Lottery Results',
        'manage_options',
        'lottery-management',
        'kadence_child_lottery_admin_page',
        'dashicons-tickets-alt',
        30
    );
}
add_action('admin_menu', 'kadence_child_lottery_admin_menu');

/**
 * Admin page callback
 */
function kadence_child_lottery_admin_page() {
    echo '<div class="wrap">';
    echo '<h1>Lottery Management</h1>';
    echo '<p>Manage all your lottery results from this central location.</p>';
    
    echo '<div class="lottery-admin-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">';
    
    $post_types = array(
        'euromillions' => 'EuroMillions',
        'primitiva' => 'La Primitiva',
        'bonoloto' => 'Bonoloto',
        'elgordo' => 'El Gordo',
        'eurodreams' => 'EuroDreams',
        'lototurf' => 'Lototurf',
        'quintupleplus' => 'Quintuple Plus',
        'nacional' => 'Lotería Nacional',
        'quiniela' => 'La Quiniela',
        'quinigol' => 'Quinigol'
    );
    
    foreach ($post_types as $post_type => $label) {
        $count = wp_count_posts($post_type)->publish;
        echo '<div class="lottery-admin-card" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center;">';
        echo '<h3>' . $label . '</h3>';
        echo '<p><strong>' . $count . '</strong> draws</p>';
        echo '<a href="' . admin_url('edit.php?post_type=' . $post_type) . '" class="button button-primary">Manage</a>';
        echo '</div>';
    }
    
    echo '</div>';
    echo '</div>';
}

/**
 * Flush rewrite rules on theme activation
 */
function kadence_child_lottery_flush_rewrite_rules() {
    kadence_child_lottery_register_post_types();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'kadence_child_lottery_flush_rewrite_rules');


/**
 * Enqueue admin styles
 */
function kadence_child_lottery_admin_styles($hook) {
    global $post_type;
    
    $lottery_post_types = array('euromillions', 'primitiva', 'bonoloto', 'elgordo', 'eurodreams', 'lototurf', 'quintupleplus', 'nacional', 'quiniela', 'quinigol');
    
    if (in_array($post_type, $lottery_post_types) || $hook === 'toplevel_page_lottery-management') {
        wp_enqueue_style(
            'kadence-child-lottery-admin',
            get_stylesheet_directory_uri() . '/admin-styles.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('admin_enqueue_scripts', 'kadence_child_lottery_admin_styles');

/**
 * Add custom columns to post type lists
 */
function kadence_child_lottery_custom_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['draw_date'] = 'Draw Date';
    $new_columns['prize_amount'] = 'Prize Amount';
    $new_columns['winning_numbers'] = 'Winning Numbers';
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}

// Add columns to all lottery post types
$lottery_post_types = array('euromillions', 'primitiva', 'bonoloto', 'elgordo', 'eurodreams', 'lototurf', 'quintupleplus', 'nacional', 'quiniela', 'quinigol');
foreach ($lottery_post_types as $post_type) {
    add_filter("manage_{$post_type}_posts_columns", 'kadence_child_lottery_custom_columns');
}

/**
 * Populate custom columns
 */
function kadence_child_lottery_custom_column_content($column, $post_id) {
    switch ($column) {
        case 'draw_date':
            $draw_date = get_post_meta($post_id, '_draw_date', true);
            echo $draw_date ? date('d/m/Y', strtotime($draw_date)) : '—';
            break;
            
        case 'prize_amount':
            $prize_amount = get_post_meta($post_id, '_prize_amount', true);
            echo $prize_amount ? '€' . number_format($prize_amount, 2) : '—';
            break;
            
        case 'winning_numbers':
            $numbers = get_post_meta($post_id, '_winning_numbers', true);
            if ($numbers) {
                $number_array = explode(',', $numbers);
                $formatted_numbers = array_map('trim', $number_array);
                echo implode(', ', $formatted_numbers);
            } else {
                echo '—';
            }
            break;
    }
}

// Add column content to all lottery post types
foreach ($lottery_post_types as $post_type) {
    add_action("manage_{$post_type}_posts_custom_column", 'kadence_child_lottery_custom_column_content', 10, 2);
}

/**
 * Make custom columns sortable
 */
function kadence_child_lottery_sortable_columns($columns) {
    $columns['draw_date'] = 'draw_date';
    $columns['prize_amount'] = 'prize_amount';
    return $columns;
}

foreach ($lottery_post_types as $post_type) {
    add_filter("manage_edit-{$post_type}_sortable_columns", 'kadence_child_lottery_sortable_columns');
}

/**
 * Handle sorting by custom fields
 */
function kadence_child_lottery_orderby($query) {
    if (!is_admin()) return;
    
    $orderby = $query->get('orderby');
    
    if ('draw_date' === $orderby) {
        $query->set('meta_key', '_draw_date');
        $query->set('orderby', 'meta_value');
    }
    
    if ('prize_amount' === $orderby) {
        $query->set('meta_key', '_prize_amount');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'kadence_child_lottery_orderby');

/**
 * Add help text to meta boxes
 */
function kadence_child_lottery_add_help_text() {
    $screen = get_current_screen();
    
    if (strpos($screen->id, 'euromillions') !== false) {
        $screen->add_help_tab(array(
            'id' => 'euromillions_help',
            'title' => 'EuroMillions Help',
            'content' => '<p><strong>Winning Numbers:</strong> Enter 5 numbers separated by commas (e.g., 08,15,26,33,41)</p>
                         <p><strong>Star Numbers:</strong> Enter 2 star numbers separated by commas (e.g., 09,10)</p>
                         <p><strong>Prize Amount:</strong> Enter the jackpot amount in euros</p>'
        ));
    }
    
    // Add help for other post types as needed
}
add_action('current_screen', 'kadence_child_lottery_add_help_text');

/**
 * AJAX handler for refreshing lottery results
 */
function kadence_child_lottery_ajax_refresh_results() {
    check_ajax_referer('lottery_nonce', 'nonce');
    
    // Get latest results
    $post_types = array('euromillions', 'primitiva', 'bonoloto', 'elgordo', 'eurodreams', 'lototurf', 'quintupleplus', 'nacional', 'quiniela', 'quinigol');
    
    ob_start();
    
    foreach ($post_types as $post_type) {
        $posts = get_posts(array(
            'post_type' => $post_type,
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        
        if ($posts) {
            foreach ($posts as $post) {
                setup_postdata($post);
                kadence_child_lottery_display_result_card($post);
            }
            wp_reset_postdata();
        }
    }
    
    $html = ob_get_clean();
    
    wp_send_json_success(array('html' => $html));
}
add_action('wp_ajax_refresh_lottery_results', 'kadence_child_lottery_ajax_refresh_results');
add_action('wp_ajax_nopriv_refresh_lottery_results', 'kadence_child_lottery_ajax_refresh_results');

/**
 * Add lottery games banner shortcode
 */
function kadence_child_lottery_games_banner_shortcode($atts) {
    $atts = shortcode_atts(array(
        'show_prizes' => 'true'
    ), $atts, 'lottery_games_banner');
    
    ob_start();
    
    echo '<div class="lottery-games-banner">';
    echo '<div class="lottery-games-container">';
    echo '<div class="lottery-games-grid">';
    
    // Sample game data - in real implementation, this would come from the database
    $games = array(
        // All lottery games have been removed as requested
    );
    
    foreach ($games as $game) {
        echo '<div class="lottery-game-item">';
        echo '<div class="lottery-game-icon">' . $game['icon'] . '</div>';
        echo '<div class="lottery-game-name">' . $game['name'] . '</div>';
        if ($atts['show_prizes'] === 'true') {
            echo '<div class="lottery-game-prize">';
            echo $game['prize'];
            if ($game['unit'] === 'million') {
                echo '<span class="million">million</span>';
            } else {
                echo '<span class="currency">' . $game['unit'] . '</span>';
            }
            echo '</div>';
        }
        echo '</div>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
    return ob_get_clean();
}
add_shortcode('lottery_games_banner', 'kadence_child_lottery_games_banner_shortcode');

/**
 * Widget for displaying latest lottery results
 */
class Kadence_Child_Lottery_Widget extends WP_Widget {
    
    public function __construct() {
        parent::__construct(
            'kadence_child_lottery_widget',
            'Lottery Results Widget',
            array('description' => 'Display latest lottery results in sidebar')
        );
    }
    
    public function widget($args, $instance) {
        echo $args['before_widget'];
        
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        
        $game_type = !empty($instance['game_type']) ? $instance['game_type'] : 'euromillions';
        $posts = get_posts(array(
            'post_type' => $game_type,
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        
        if ($posts) {
            foreach ($posts as $post) {
                setup_postdata($post);
                echo '<div class="lottery-widget-result">';
                echo '<h4>' . get_the_title($post) . '</h4>';
                
                $draw_date = get_post_meta($post->ID, '_draw_date', true);
                if ($draw_date) {
                    echo '<p class="draw-date">' . date('d/m/Y', strtotime($draw_date)) . '</p>';
                }
                
                $numbers = get_post_meta($post->ID, '_winning_numbers', true);
                if ($numbers) {
                    echo '<div class="widget-lottery-numbers">';
                    $number_array = explode(',', $numbers);
                    foreach ($number_array as $number) {
                        echo '<span class="widget-lottery-number">' . trim($number) . '</span>';
                    }
                    echo '</div>';
                }
                
                echo '</div>';
            }
            wp_reset_postdata();
        }
        
        echo $args['after_widget'];
    }
    
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Latest Results';
        $game_type = !empty($instance['game_type']) ? $instance['game_type'] : 'euromillions';
        
        echo '<p>';
        echo '<label for="' . $this->get_field_id('title') . '">Title:</label>';
        echo '<input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '">';
        echo '</p>';
        
        echo '<p>';
        echo '<label for="' . $this->get_field_id('game_type') . '">Game Type:</label>';
        echo '<select class="widefat" id="' . $this->get_field_id('game_type') . '" name="' . $this->get_field_name('game_type') . '">';
        
        $game_types = array(
            'euromillions' => 'EuroMillions',
            'primitiva' => 'La Primitiva',
            'bonoloto' => 'Bonoloto',
            'elgordo' => 'El Gordo',
            'eurodreams' => 'EuroDreams',
            'lototurf' => 'Lototurf',
            'quintupleplus' => 'Quintuple Plus',
            'nacional' => 'Lotería Nacional',
            'quiniela' => 'La Quiniela',
            'quinigol' => 'Quinigol'
        );
        
        foreach ($game_types as $value => $label) {
            echo '<option value="' . $value . '"' . selected($game_type, $value, false) . '>' . $label . '</option>';
        }
        
        echo '</select>';
        echo '</p>';
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['game_type'] = (!empty($new_instance['game_type'])) ? strip_tags($new_instance['game_type']) : 'euromillions';
        return $instance;
    }
}

/**
 * Register the widget
 */
function kadence_child_lottery_register_widget() {
    register_widget('Kadence_Child_Lottery_Widget');
}
add_action('widgets_init', 'kadence_child_lottery_register_widget');

/**
 * Add custom CSS for widget
 */
function kadence_child_lottery_widget_styles() {
    echo '<style>
    .lottery-widget-result {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    
    .lottery-widget-result h4 {
        margin-top: 0;
        color: #333;
        font-size: 16px;
    }
    
    .lottery-widget-result .draw-date {
        color: #666;
        font-size: 12px;
        margin-bottom: 10px;
    }
    
    .widget-lottery-numbers {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }
    
    .widget-lottery-number {
        background: #007cba;
        color: white;
        padding: 5px 8px;
        border-radius: 50%;
        font-size: 12px;
        font-weight: bold;
        min-width: 25px;
        text-align: center;
        display: inline-block;
    }
    </style>';
}
add_action('wp_head', 'kadence_child_lottery_widget_styles');


/**
 * Add Prize Breakdown Meta Box for EuroMillions
 */
function kadence_child_lottery_add_prize_breakdown_meta_box() {
    add_meta_box(
        'lottery_prize_breakdown',
        'Prize Breakdown',
        'kadence_child_lottery_prize_breakdown_callback',
        'euromillions',
        'normal',
        'high'
    );
    
    // Add to other lottery types that need prize breakdown
    add_meta_box(
        'lottery_prize_breakdown',
        'Prize Breakdown',
        'kadence_child_lottery_prize_breakdown_callback',
        'primitiva',
        'normal',
        'high'
    );
    
    add_meta_box(
        'lottery_prize_breakdown',
        'Prize Breakdown',
        'kadence_child_lottery_prize_breakdown_callback',
        'bonoloto',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'kadence_child_lottery_add_prize_breakdown_meta_box');

/**
 * Prize Breakdown Meta Box Callback
 */
function kadence_child_lottery_prize_breakdown_callback($post) {
    wp_nonce_field('lottery_prize_breakdown_nonce', 'lottery_prize_breakdown_nonce');
    
    $prize_breakdown = get_post_meta($post->ID, '_prize_breakdown', true);
    
    // Default prize breakdown structure for EuroMillions
    $default_breakdown = array(
        array('match' => '5 + 2', 'winners' => '0', 'prize' => '0.00'),
        array('match' => '5 + 1', 'winners' => '3', 'prize' => '234567.89'),
        array('match' => '5 + 0', 'winners' => '12', 'prize' => '45678.90'),
        array('match' => '4 + 2', 'winners' => '89', 'prize' => '3456.78'),
        array('match' => '4 + 1', 'winners' => '1234', 'prize' => '234.56'),
        array('match' => '3 + 2', 'winners' => '2345', 'prize' => '78.90'),
        array('match' => '4 + 0', 'winners' => '12345', 'prize' => '45.67'),
        array('match' => '2 + 2', 'winners' => '123456', 'prize' => '12.34'),
        array('match' => '3 + 1', 'winners' => '234567', 'prize' => '8.90'),
        array('match' => '3 + 0', 'winners' => '345678', 'prize' => '5.67'),
        array('match' => '1 + 2', 'winners' => '1234567', 'prize' => '4.50'),
        array('match' => '2 + 1', 'winners' => '2345678', 'prize' => '4.50'),
        array('match' => '2 + 0', 'winners' => '3456789', 'prize' => '4.50')
    );
    
    if (empty($prize_breakdown)) {
        $prize_breakdown = $default_breakdown;
    }
    
    echo '<div class="lottery-prize-breakdown-container">';
    echo '<p><strong>Enter the prize breakdown for this draw:</strong></p>';
    echo '<div class="prize-breakdown-table">';
    echo '<div class="prize-breakdown-header">';
    echo '<div class="breakdown-col">Match</div>';
    echo '<div class="breakdown-col">Winners</div>';
    echo '<div class="breakdown-col">Prize per Winner (€)</div>';
    echo '<div class="breakdown-col">Actions</div>';
    echo '</div>';
    
    echo '<div id="prize-breakdown-rows">';
    foreach ($prize_breakdown as $index => $row) {
        echo '<div class="prize-breakdown-row" data-index="' . $index . '">';
        echo '<div class="breakdown-col">';
        echo '<input type="text" name="prize_breakdown[' . $index . '][match]" value="' . esc_attr($row['match']) . '" placeholder="e.g., 5 + 2" />';
        echo '</div>';
        echo '<div class="breakdown-col">';
        echo '<input type="number" name="prize_breakdown[' . $index . '][winners]" value="' . esc_attr($row['winners']) . '" placeholder="0" min="0" />';
        echo '</div>';
        echo '<div class="breakdown-col">';
        echo '<input type="number" name="prize_breakdown[' . $index . '][prize]" value="' . esc_attr($row['prize']) . '" placeholder="0.00" step="0.01" min="0" />';
        echo '</div>';
        echo '<div class="breakdown-col">';
        echo '<button type="button" class="button remove-breakdown-row">Remove</button>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    
    echo '<div class="prize-breakdown-actions">';
    echo '<button type="button" id="add-breakdown-row" class="button button-secondary">Add Row</button>';
    echo '<button type="button" id="reset-breakdown" class="button">Reset to Default</button>';
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
    
    // Add JavaScript for dynamic rows
    echo '<script>
    jQuery(document).ready(function($) {
        var rowIndex = ' . count($prize_breakdown) . ';
        
        $("#add-breakdown-row").on("click", function() {
            var newRow = `
                <div class="prize-breakdown-row" data-index="${rowIndex}">
                    <div class="breakdown-col">
                        <input type="text" name="prize_breakdown[${rowIndex}][match]" placeholder="e.g., 5 + 2" />
                    </div>
                    <div class="breakdown-col">
                        <input type="number" name="prize_breakdown[${rowIndex}][winners]" placeholder="0" min="0" />
                    </div>
                    <div class="breakdown-col">
                        <input type="number" name="prize_breakdown[${rowIndex}][prize]" placeholder="0.00" step="0.01" min="0" />
                    </div>
                    <div class="breakdown-col">
                        <button type="button" class="button remove-breakdown-row">Remove</button>
                    </div>
                </div>
            `;
            $("#prize-breakdown-rows").append(newRow);
            rowIndex++;
        });
        
        $(document).on("click", ".remove-breakdown-row", function() {
            $(this).closest(".prize-breakdown-row").remove();
        });
        
        $("#reset-breakdown").on("click", function() {
            if (confirm("Are you sure you want to reset to default values? This will overwrite all current data.")) {
                location.reload();
            }
        });
    });
    </script>';
    
    // Add CSS for the meta box
    echo '<style>
    .lottery-prize-breakdown-container {
        margin: 20px 0;
    }
    
    .prize-breakdown-table {
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
    }
    
    .prize-breakdown-header {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 120px;
        background: #f1f1f1;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
    }
    
    .prize-breakdown-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 120px;
        border-bottom: 1px solid #eee;
    }
    
    .prize-breakdown-row:last-child {
        border-bottom: none;
    }
    
    .breakdown-col {
        padding: 10px;
        display: flex;
        align-items: center;
    }
    
    .breakdown-col input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    
    .prize-breakdown-actions {
        margin-top: 15px;
        display: flex;
        gap: 10px;
    }
    
    @media (max-width: 768px) {
        .prize-breakdown-header,
        .prize-breakdown-row {
            grid-template-columns: 1fr;
            gap: 5px;
        }
        
        .breakdown-col {
            padding: 5px;
        }
    }
    </style>';
}

/**
 * Save Prize Breakdown Meta Box Data
 */
function kadence_child_lottery_save_prize_breakdown($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['lottery_prize_breakdown_nonce']) || !wp_verify_nonce($_POST['lottery_prize_breakdown_nonce'], 'lottery_prize_breakdown_nonce')) {
        return;
    }
    
    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save prize breakdown data
    if (isset($_POST['prize_breakdown'])) {
        $prize_breakdown = array();
        foreach ($_POST['prize_breakdown'] as $row) {
            if (!empty($row['match']) || !empty($row['winners']) || !empty($row['prize'])) {
                $prize_breakdown[] = array(
                    'match' => sanitize_text_field($row['match']),
                    'winners' => intval($row['winners']),
                    'prize' => floatval($row['prize'])
                );
            }
        }
        update_post_meta($post_id, '_prize_breakdown', $prize_breakdown);
    }
}
add_action('save_post', 'kadence_child_lottery_save_prize_breakdown');

/**
 * Add Statistics Meta Box for detailed lottery information
 */
function kadence_child_lottery_add_statistics_meta_box() {
    add_meta_box(
        'lottery_statistics',
        'Draw Statistics',
        'kadence_child_lottery_statistics_callback',
        'euromillions',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'kadence_child_lottery_add_statistics_meta_box');

/**
 * Statistics Meta Box Callback
 */
function kadence_child_lottery_statistics_callback($post) {
    wp_nonce_field('lottery_statistics_nonce', 'lottery_statistics_nonce');
    
    $bets_received = get_post_meta($post->ID, '_bets_received', true);
    $collected = get_post_meta($post->ID, '_collected', true);
    $european_earnings = get_post_meta($post->ID, '_european_earnings', true);
    $advertised_jackpot = get_post_meta($post->ID, '_advertised_jackpot', true);
    $prizes_total = get_post_meta($post->ID, '_prizes_total', true);
    
    echo '<table class="form-table">';
    
    echo '<tr>';
    echo '<th><label for="bets_received">Bets Received:</label></th>';
    echo '<td><input type="number" id="bets_received" name="bets_received" value="' . esc_attr($bets_received) . '" step="1" min="0" style="width: 100%;" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="collected">Collected (€):</label></th>';
    echo '<td><input type="number" id="collected" name="collected" value="' . esc_attr($collected) . '" step="0.01" min="0" style="width: 100%;" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="european_earnings">European Earnings (€):</label></th>';
    echo '<td><input type="number" id="european_earnings" name="european_earnings" value="' . esc_attr($european_earnings) . '" step="0.01" min="0" style="width: 100%;" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="advertised_jackpot">Advertised Jackpot (€):</label></th>';
    echo '<td><input type="number" id="advertised_jackpot" name="advertised_jackpot" value="' . esc_attr($advertised_jackpot) . '" step="0.01" min="0" style="width: 100%;" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="prizes_total">Total Prizes (€):</label></th>';
    echo '<td><input type="number" id="prizes_total" name="prizes_total" value="' . esc_attr($prizes_total) . '" step="0.01" min="0" style="width: 100%;" /></td>';
    echo '</tr>';
    
    echo '</table>';
    
    echo '<p class="description">These statistics will be displayed at the bottom of the draw results page.</p>';
}

/**
 * Save Statistics Meta Box Data
 */
function kadence_child_lottery_save_statistics($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['lottery_statistics_nonce']) || !wp_verify_nonce($_POST['lottery_statistics_nonce'], 'lottery_statistics_nonce')) {
        return;
    }
    
    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save statistics data
    $fields = array('bets_received', 'collected', 'european_earnings', 'advertised_jackpot', 'prizes_total');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            if ($field === 'bets_received') {
                update_post_meta($post_id, '_' . $field, intval($_POST[$field]));
            } else {
                update_post_meta($post_id, '_' . $field, floatval($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'kadence_child_lottery_save_statistics');

