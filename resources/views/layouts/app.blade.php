<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css") }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/dist/css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset("/dist/css/skins/skin-blue.min.css") }}">     

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset("/css/custom.css") }}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset("/adminlte/plugins/iCheck/all.css") }}">     

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">   
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>   
    
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{ asset("/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset("/adminlte/plugins/iCheck/icheck.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("/dist/js/adminlte.min.js") }}"></script>        
    
    <!-- Page script -->
    <script>
        // $(function () {
        //    alert('func');
            //Initialize Select2 Elements
            // $('.select2').select2()

            //Datemask dd/mm/yyyy
            // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            // $('[data-mask]').inputmask()

            //Date range picker
            // $('#reservation').daterangepicker()
            //Date range picker with time picker
            // $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
            //Date range as a button
            // $('#daterange-btn').daterangepicker(
            //     {
            //         ranges   : {
            //           'Today'       : [moment(), moment()],
            //           'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            //           'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            //           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            //           'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            //           'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            //         },
            //         startDate: moment().subtract(29, 'days'),
            //         endDate  : moment()
            //     },
            //     function (start, end) {
            //         $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            //     }
            // )

            //Date picker
            // $('#datepicker').datepicker({
            //     autoclose: true
            // })

            //iCheck for checkbox and radio inputs
            function apply_iCheckToCheckboxRadio() {
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                      checkboxClass: 'icheckbox_minimal-blue',
                      radioClass   : 'iradio_minimal-blue'
                });
            };

            apply_iCheckToCheckboxRadio();

            //Red color scheme for iCheck
            // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            //       checkboxClass: 'icheckbox_minimal-red',
            //       radioClass   : 'iradio_minimal-red'
            // });
            //Flat red color scheme for iCheck
            // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            //       checkboxClass: 'icheckbox_flat-green',
            //       radioClass   : 'iradio_flat-green'
            // })

            //Colorpicker
            // $('.my-colorpicker1').colorpicker()
            //color picker with addon
            // $('.my-colorpicker2').colorpicker()

            //Timepicker
            // $('.timepicker').timepicker({
            //   showI nputs: false
            // })
        // });

        $(function () {
            $('#example1').DataTable()
                $('#example2').DataTable({
                      'paging'      : true,
                      'lengthChange': false,
                      'searching'   : false,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                });
        });
    </script>

</body>
</html>
