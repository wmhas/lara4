<?php
namespace App\Reports;

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    // By adding above statement, you have claim the friendship between two frameworks
    // As a result, this report will be able to accessed all databases of Laravel
    // There are no need to define the settings() function anymore
    // while you can do so if you have other datasources rather than those
    // defined in Laravel.
    

    /*function setup()
    {
        // Let say, you have "sale_database" is defined in Laravel's database settings.
        // Now you can use that database without any futher setitngs.
        $this->src("dbautomaker")
        ->query("SELECT * FROM offices")
        ->pipe($this->dataStore("offices"));        
    } */


    protected function settings()
    {
        return array(
            "dataSources"=>array(
                
            )
        );
    }

    
    protected function setup()
    {

    }
}