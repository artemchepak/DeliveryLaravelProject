<div class="uo_adr_list">

    @foreach($data as $item)
        <div class="item">
            <h3>{{$item->name}}</h3>
            <p>{{$item->city}}, {{$item->area}}, {{$item->street}}, {{$item->house}}, {{$item->info}}</p>
            <div class="actbox">
                <a href="{{route('address-delete', $item->id)}}" class="bcross"></a>
            </div>
            <br><a href="{{route('one-address-details', $item->id)}}">View more details</a>
        </div>
    @endforeach

</div>
