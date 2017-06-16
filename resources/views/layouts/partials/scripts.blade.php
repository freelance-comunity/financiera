<!-- REQUIRED JS SCRIPTS -->


<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- bootstrap datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/plugins/fullcalendar/locale/es.js')}}"></script>
<script src="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>

<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });
    //Date range picker
    $('#reservation').daterangepicker();
  </script>
  <!-- DataTables -->
  <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>

  <script src="{{ asset('/select2/js/select2.min.js') }}"></script>

  <script src="{{ asset('/js/dropdown.js')}}"></script>
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
    $(document).ready(function(){
      $('#myTableCustom').DataTable({
        "pageLength": 3,
        responsive: true,
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable( {
        dom: 'Bfrtip',
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
        },
        buttons: [
        {
          extend: 'print',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
        ],
        columnDefs: [ {
          targets: -1,
          visible: false
        } ]
      } );
    } );
  </script>
  <script>
    $(document).ready(function(){
      $('#myTableCustom2').DataTable({
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
<script>
  var date = new Date();

  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();

  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;

  var today = year + "-" + month + "-" + day;


  document.getElementById('theDate').value = today;
</script>
<script>

  var products = {};
  products['diario'] = ['30', '45', '60','90','120','180'];
  products['cuota'] = ['20', '30', '45', '60','90'];

  function ChengeProductList() {
    var ProductList = document.getElementById("product");
    var term = document.getElementById("frecuencia");
    var selCar = ProductList.options[ProductList.selectedIndex].value;
    while (term.options.length) {
      term.remove(0);
    }
    var cars = products[selCar];
    if (cars) {
      var i;
      for (i = 0; i < cars.length; i++) {
        var product = new Option(cars[i], i);
        term.options.add(product);
      }
    }
  } 
</script>
<script>
 $(function () {
   //Colorpicker
   $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();
  }
</script>

<script>
$(function (){
   $(".run").click(function(event){
   alertify.error('Tienes pagos atrasados'); 
  });
});
</script>
<script>
        $.toast({
          heading: 'Error',
          text: 'Report any <a href="https://github.com/kamranahmedse/jquery-toast-plugin/issues">issues</a>',
          showHideTransition: 'fade',
          icon: 'error'
        })
    </script>