<?php if ( ! defined('BASEPATH') ) exit( 'No direct script access allowed' );
/**
 *  http://www.moreofless.co.uk/using-native-php-sessions-with-codeigniter/
 */

class Nativesession
{
    public function __construct(){
        session_start();
    }

    public function set( $key, $value ){
        $_SESSION[$key] = $value;
    }

    public function get( $key ){
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : null;
    }

    public function regenerateId( $delOld = false ){
        session_regenerate_id( $delOld );
    }

    public function delete( $key ){
        unset( $_SESSION[$key] );
    }

    public function delete_all(){
		session_destroy();
	}
}

/* End of file nativesession.php */
/* Location: ./application/libraries/nativesession.php */