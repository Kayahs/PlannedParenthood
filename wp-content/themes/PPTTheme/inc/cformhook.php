<?php
/**
 * Custom Contact Form 7 Hook
 *
 * @package RED_Starter_Theme
 */

function dynamic_select_list( $tag ) {
    // Only run on select lists
    if( 'select*' !== $tag['type'] ) {
        return $tag;
    } else if ( empty( $tag['options'] ) ) {
        return $tag;
    }
    $term_args = array();

    // Loop thorugh options to look for our custom options
    foreach( $tag['options'] as $option ) {

        $matches = explode( ':', $option );
        //echo "Options Exploded";
        if( ! empty( $matches ) ) {

            switch( $matches[0] ) {

                case 'term':
                    $term_args['programcat'] = $matches[1];
                    break;

            }
        }

    }

    // Ensure we have a term arguments to work with
    if( empty( $term_args ) ) {
        return $tag;
    }

    // Merge dynamic arguments with static arguments
    $term_args = array_merge( $term_args, array(
        'posts_per_page' => -1,
        'post_type' => 'program',
    ) );
    $terms = get_posts( $term_args );

    // Add terms to values
    if( ! empty( $terms ) && ! is_wp_error( $term_args ) ) {
        foreach( $terms as $term ) {
            $tag['values'][] = $term->post_title  ;

        }

    }

    return $tag;

}
add_filter( 'wpcf7_form_tag', 'dynamic_select_list', 10 );