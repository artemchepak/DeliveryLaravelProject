<?php


namespace App\Modules\Delivery\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Request;
use App\Modules\Delivery\Requests\DeliveryRequest;
use App\Modules\Delivery\Models\Delivery;
use App\Modules\Delivery\Controllers\GeolocationController as Geolocation;

class DeliveryController extends Controller
{
    public function submit(DeliveryRequest $request){
        $userAddress = new Delivery();
        $userAddress->name = $request->input('name');
        $userAddress->city = $request->input('city');
        $userAddress->area = $request->input('area');
        $userAddress->street = $request->input('street');
        $userAddress->house = $request->input('house');
        $userAddress->info = $request->input('info');

        $userAddress->save();
        return redirect()->route('home');
    }

    public function allData(){
        $userAddress = new Delivery();
        return view('home', ['data' => $userAddress->orderBy('name')->get()]);
    }

    public function oneAddress($id){
        $userAddress = new Delivery();
        $cityLocation = new Geolocation();
        $city = $userAddress->find($id)['city'];
        return view('details', ['data' => $userAddress->find($id), 'city' => $cityLocation->getLocationByCity($city)[0]]);
    }

    public function deleteAddress($id){
        Delivery::find($id)->delete();
        return redirect()->route('home');
    }
}
