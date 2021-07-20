<div id="map" style="width: 400px; height: 400px"></div>

@section('map_script')
    <script acync defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl1nACSJGVUMGW_COBy3xd7S4JbhCCqNM&callback=myMap"></script>
    <script>
        function myMap() {
            let mapCanvas = document.getElementById("map");
            let latitude = document.getElementById("lat").value;
            let longitude = document.getElementById("lon").value;
            console.log(latitude)
            let mapOptions = {
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 15
            };
            let map = new google.maps.Map(mapCanvas, mapOptions);
            let marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map
            });
            let infoWindow = new google.maps.InfoWindow({
                content: '<b>Место проведения основной церемонии</b>'
            });
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        }
    </script>
@endsection
