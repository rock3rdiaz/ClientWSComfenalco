<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author rockerW7
 */

namespace Core;

interface IWSMethods {

    public static function getDetailStatisticsByFovis($nit_company, $year, $section = 1);

    public static function getStatisticsByInputAndSubsidy($nit_company);

    public static function getPayments($nit_company);

    public static function getStatisticsEmployeeByAge($nit_company);

    public static function getStatisticsCategoriesByCompany($nit_company);
    
    public static function getCountAllEmployeesByNITCompany( $nit_company );
    
    public static function getStatisticsByFovis($nit_company);
    
    public static function getAllEmployeesByNITCompany( $nit_company );
    
    public static function changePassword( $current_pass, $new_pass1, $new_pass2 );
    
    public static function getStatisticsBySex( $nit_company );
    
    public static function validation( $username, $password );
}

?>
