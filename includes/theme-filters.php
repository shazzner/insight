<?php

add_filter( 'the_content', 'insight_filter_contentcode' );

function insight_filter_contentcode( $content ) {

    if ( strpos( $content, '<code>' ) !== false ) {

        //error_log( "Code block found." );
        
        $pos = 0;

        while ( strpos( $content, '<code>', $pos ) !== false ) {
            
            // Fetch the position of the next code block
            $pos = strpos( $content, '<code>', $pos ) + 6;
            
            // Capture the position of the closing end block
            $endpos = strpos( $content, '</code>', $pos );
            
            $chunk = substr( $content, $pos, $endpos - $pos );
            
            //error_log( 'Chunk: ' . $chunk );
            
            $content = str_replace( $chunk, esc_html( $chunk ), $content );
            $pos = $endpos;
            
        }
    }
    return $content;

}
