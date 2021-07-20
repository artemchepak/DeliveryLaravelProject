@section('form-title'){{$data->name}} @endsection
<div class="item">
    <p>{{$data->city}}, {{$data->area}}, {{$data->street}}, {{$data->house}}, {{$data->info}}</p>
    <input type="hidden" name="lat" id='lat' value="{{$city['lat']}}">
    <input type="hidden" name="lon" id='lon' value="{{$city['lon']}}">
</div>
