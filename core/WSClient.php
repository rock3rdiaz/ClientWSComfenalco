<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WSClient
 *
 * @author rockerW7
 */
namespace Core;

require_once( 'PHPHelper.php' );

PHPHelper::includeFile( 'IWSMethods.php' );

class WSClient implements \Core\IWSMethods{
    
    const WSDL = 'http://localhost:8080/onlineComfenalco/onlineComfenalco?WSDL';
    //const WSDL = 'http://200.116.82.166:8080/onlineComfenalco/onlineComfenalco?WSDL';    
    
    public static function getDetailStatisticsByFovis( $nit_company, $year, $section = 1 ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getDetailStatisticsByFovis( array( 
                                'nitCompany'=>$nit_company,
                                'year'=>$year,
                                'section'=>$section) );        
        return $result;
    }
    
    public static function getStatisticsByInputAndSubsidy( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getStatisticsByInputAndSubsidy( array('nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function getPayments( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getPayments( array('nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function getStatisticsEmployeeByAge( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getStatisticsEmployeeByAge( array( 'nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function getStatisticsCategoriesByCompany( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getStatisticsCategoriesByCompany( array( 'nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function getCountAllEmployeesByNITCompany( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getCountAllEmployeesByNITCompany( array( 'nitCompany'=>$nit_company ) );
        
        return $result;
    }

    public static function getStatisticsByFovis($nit_company) {
        
        $soap = new \SoapClient(self::WSDL);
        $result = $soap->getStatisticsByFovis(array('nitCompany' => $nit_company));

        return $result;
    }

    public static function getAllEmployeesByNITCompany( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->getAllEmployeesByNITCompany( array( 'nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function changePassword( $current_pass, $new_pass1, $new_pass2 ){
        
        $soap = new \SoapClient( self::WSDL );        
        $result = $soap->changePassword( array( 
                            'currentPass'=>$current_pass,
                            'newPass1'=>$new_pass1,
                            'newPass2'=>$new_pass2) 
                        );
        
        return  $result;
    }
    
    public static function getStatisticsBySex( $nit_company ){
        
        $soap = new \SoapClient( self::WSDL );
        $result = $soap->getStatisticsBySex( array( 'nitCompany'=>$nit_company ) );
        
        return $result;
    }
    
    public static function validation( $username, $password ){
        
        $soap = new \SoapClient( self::WSDL );
        $result = $soap->validation( array( 'username'=>$username, 'password'=>$password ) );
        
        return $result;
    }
}