<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function philosophy_attachments($attachments){
    $fields = array(
       array(
           'name'      => 'title',
           'type'      => 'text',
           'label'     => __( 'Title', 'philosophy' ),
       ),
    );

    $args = array(

        'label'         => 'Gallery',
        'post_type'     => array( 'post'),
        'filetype'      => array("image"),
        'note'          => 'Add Gallery Images',
        'button_text'   => __( 'Attach Files', 'philosophy' ),
        'fields'        => $fields,
    );

    $attachments->register( 'gallery', $args );
}
add_action( 'attachments_register', 'philosophy_attachments' );