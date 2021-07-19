<?php


namespace App\Modules\Delivery\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Request;
use App\Modules\Delivery\Requests\DeliveryRequest;
use App\Modules\Delivery\Models\Delivery;

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
        return view('user_office_address', ['data' => $userAddress->orderBy('name')->get()]);
    }

    public function deleteAddress($id){
        Delivery::find($id)->delete();
        return redirect()->route('home');
    }
}
