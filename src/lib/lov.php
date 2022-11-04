<?php
/*
* List of Values used in the web application.
*/

unset($LOV);
global $LOV;
$LOV = new stdClass();

// Database Table data structure 
$LOV->tables = array(
    'city' => 'GUNGO06.City',
    'country' => 'GUNGO06.Country',
    'regtemp' => 'GUNGO06.RegionalTemperature',
    'disaster' => 'GUNGO06.Disaster',
    'usprec' => 'GUNGO06.USPrecipitation',
    'gmsl' => 'GUNGO06.GlobalMeanSeaLevel',
    'cityelev' => 'GUNGO06.CityElevationAboveGMSL',
);
