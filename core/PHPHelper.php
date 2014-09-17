<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PHPHelper
 *
 * @author rockerW7
 */
namespace Core;

abstract class PHPHelper {
    
    public static function JSONDecode( $json ){
        
        return json_decode( $json );
    }
    
    public static function JSONEncode( $obj ){
        
        return json_encode( $obj );
    }
    
    public static function numberToMoney( $number ){
        
        $money = number_format( $number, 1, '.', ',' );
        return '$' . $money;
    }
    
    public static function getCurrentDate(){
        
        return date( 'Y-m-d h:i:s' );
    }

    public static function redirect( $page ){
        
        header( "Location: " . $page );
    }
    
    public static function insertJSCode( $js_code ){
        
        echo '<script type = "text/javascript">' . $js_code . '</script>';
    }
    
    public static function exist( $element ){
        
        if( isset( $element ) ){
            
            return true;
        }
        else{
            
            return false;
        }
    }
    
    public static function stringToDate( $str ){
        
        $date = new \DateTime( $str );
        return $date->format( 'Y-m-d' );
    } 
    
    public static function formatText( $srt ){
        
        return ucfirst( strtolower( $srt ) );
    }
    
    public static function includeFile( $path ){
        
        require_once( $path );
    }
    
    public static function printArray( $array ){
        
        if( is_array( $array ) || is_object( $array ) ){
            
            print_r( $array );
        }  
        else{
            echo "No es un array";
        }
    } 
    
    public static function objectToArray( $obj ) {
        
        if ( is_object( $obj ) ) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars( $obj );
		}
 
		if ( is_array( $obj ) ) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map( __FUNCTION__, $obj );
		}
		else {
			// Return array
			return $d;
		}
	}
}

?>
