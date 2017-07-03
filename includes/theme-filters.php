<?php

add_filter( 'the_content', 'insight_filter_contentcode' )

function insight_filter_contentcode( $content ) {
    //$code = substr( $content, strpos( $content, '<code>' ) + 6, strpos( $content, '</code>' ) - 1 );
    //$content = str_replace( esc_html
    $content = esc_html( $content );
}
