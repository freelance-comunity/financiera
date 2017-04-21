<!-- REQUIRED JS SCRIPTS -->


<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="{{ asset('/select2/js/select2.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#position').select2({
            // Activamos la opcion "Posotion" del plugin
            placeholder: "Selecciona uno o más roles",
            tags: true,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("positions") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                };
            },
        }
    });
    });
</script>
<script>
	$(document).ready(function(){
		$('#myTable').DataTable({
			responsive: true,
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
			},
			dom: 'Bfrtip',
			buttons: [
			'excel', 'pdf', 'print'
			]
            
		});
	});
</script>
<script>
	$('#select-all').click(function(event) {
		if(this.checked) {
			$(':checkbox').prop('checked', true);
		} else {
			$(':checkbox').prop('checked', false);
		}
	});
</script>
<script>
    $( document ).ready( function() {

        $('body').noisy({
            intensity: 0.2,
            size: 200,
            opacity: 0.28,
    randomColors: false, // true by default
    color: '#000000'
});
        
    //Google Maps JS
    //Set Map
    function initialize() {
        var myLatlng = new google.maps.LatLng(53.3333,-3.08333);
        var imagePath = 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
        var mapOptions = {
            zoom: 11,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //Callout Content
        var contentString = 'Some address here..';
        //Set window width + content
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 500
        });

        //Add Marker
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: imagePath,
            title: 'image title'
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });

        //Resize Function
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});
</script>


