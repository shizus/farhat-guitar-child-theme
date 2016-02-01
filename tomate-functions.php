<?php


function tomate_register_taxonomy ($singular_name, $plural_name, $hierarchical, $post_types){
    $labels = array(
        'name'                       => _x( '' . $plural_name . '', 'taxonomy general name' ),
        'singular_name'              => _x( '' . $singular_name . '', 'taxonomy singular name' ),
        'search_items'               => __( 'Search ' . $plural_name . '' ),
        'popular_items'              => __( 'Popular ' . $plural_name . '' ),
        'all_items'                  => __( 'All ' . $plural_name . '' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit ' . $singular_name . '' ),
        'update_item'                => __( 'Update ' . $singular_name . '' ),
        'add_new_item'               => __( 'Add New ' . $singular_name . '' ),
        'new_item_name'              => __( 'New ' . $singular_name . ' Name' ),
        'separate_items_with_commas' => __( 'Separate ' . $plural_name . ' with commas' ),
        'add_or_remove_items'        => __( 'Add or remove ' . $plural_name . '' ),
        'choose_from_most_used'      => __( 'Choose from the most used ' . $plural_name . '' ),
        'not_found'                  => __( 'No ' . $plural_name . ' found.' ),
        'menu_name'                  => __( '' . $plural_name . '' ),
    );

    $args = array(
        'hierarchical'          => $hierarchical,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => '' . $singular_name . '' ),
    );

    register_taxonomy(
        '' . $singular_name . '',
        $post_types,
        $args
    );
}

function tomate_update_post_meta($post_id, $meta_key, $post_type, $pre = 'tomate_') {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ $post_type . '_meta_box_nonce' ] ) && wp_verify_nonce( $_POST[ $post_type . '_meta_box_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ $pre . $meta_key ] ) ) {
        update_post_meta( $post_id, $pre . $meta_key, sanitize_text_field( $_POST[ $pre . $meta_key ] ) );
    }
}


function print_html_for_meta($post, $meta_key, $name, $pre = 'tomate_') {


    $meta_value = get_post_meta( $post->ID, $pre . $meta_key, true );

    echo '<label class="meta-tag-label" for="' . $pre . $meta_key . '">';
    echo $name . ': ';
    echo '</label>';
    echo '<input type="text" class="meta-tag-input" id="' . $pre . $meta_key . '" name="' . $pre . $meta_key .
        '" value="' . esc_attr( $meta_value ) . '" size="25" />';
    echo '<br>';

}