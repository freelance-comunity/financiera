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

