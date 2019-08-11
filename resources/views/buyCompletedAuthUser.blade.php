@extends('layouts.master')

@section('contentWrapper')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            Buying Process Completed.
            <br><br>
            This car data has been deactivated on the database, it will not be available for selling again.
            <br><br>
            Here is going the module for proccesing payment transaction and other needed processings.
            <br><br>
            The quantity feature isnt't functional because ussually in the vehicle selling sites cars are displayed/offered by one unit. But, for different kind of units it can be functional.
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->   
@endsection