<?php

    if ( !defined( 'QA_VERSION' ) ) { // don't allow this page to be requested directly from browser
        header( 'Location: ../../' );
        exit;
    }

    /**
     * For backward compatibility only
     */
    return array(
        'key' => 'value'
    );