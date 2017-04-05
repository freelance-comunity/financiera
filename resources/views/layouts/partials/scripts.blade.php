<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$('#myTable').DataTable({
			responsive: true,
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
			}
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
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->