<?php


namespace App\Modules\Delivery\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class GeolocationController
{
    public function getLocationByCity($city){
        $url = 'https://eu1.locationiq.com/v1/search.php';

        $options = [
            'key' => 'pk.77ea7ab036c905f2e4c8230495ad804b',
            'q' => $city,
            'format' => 'json'
        ];

        $optionsString = http_build_query($options);;

        $request = curl_init();

        curl_setopt($request,CURLOPT_URL, $url . '?' . $optionsString);
        curl_setopt($request,CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($request);
        $result = json_decode($result, true);

//        curl_close($result);
        return $result;
    }
}
