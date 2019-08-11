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
            <div class="box box-info custom-addACar">
                <div class="box-header with-border">
                    <h3 class="box-title">Changes saved</h3>
                </div> 

                <div class="box-body">
                    <div class="input-group custom-input-group-addCar">
                        <span class="input-group-addon custom-addCarLabel">Make</span>
                        <input id="Make" name="Make" type="text" class="form-control" value="{{ $car->Make }}" disabled>
                    </div>
                    <br>

                    <div class="input-group custom-input-group-addCar">
                        <span class="input-group-addon custom-addCarLabel">Model</span>
                        <input id="Model" name="Model" type="text" class="form-control" value="{{ $car->Model }}" disabled>
                    </div>
                    <br>

                    <div class="input-group custom-input-group-addCar">
                        <span class="input-group-addon custom-addCarLabel">Registration</span>
                        <input id="Registration" name="Registration" type="date" class="form-control" value="{{ $car->Registration }}" disabled>
                    </div>
                    <br>

                    <div class="input-group custom-input-group-addCar">
                        <span class="input-group-addon custom-addCarLabel">Engine Size</span>
                        <input id="EngineSize" name="EngineSize" type="text" class="form-control" value="{{ $car->{'Engine Size'} }}" disabled>
                    </div>
                    <br>
                    
                    <div class="box-body">                  
                        <div class="form-group">                              
                            <label>
                                <input id="Active" name="Active" type="checkbox" class="minimal" disabled 
                                @if ($car->Active === 'Active')
                                    {{ 'checked' }}
                                @endif
                                >
                                Make this car available for selling
                            </label>
                        </div>            
                    </div>                              

                    <div class="custom-input-group-addCar-inline">
                        <div class="input-group custom-input-group-addCar2">
                            <span class="input-group-addon custom-addCarLabel">Price in $</span>
                            <input id="Price" name="Price" type="text" class="form-control" value="{{ $car->Price }}" disabled>
                            <span class="input-group-addon">.00</span>
                        </div>
                        

                        <div class="input-group custom-input-group-addCar2">
                            <span class="input-group-addon custom-addCarLabel">Color</span>
                            <input id="Color" name="Color" type="color" class="form-control custom-carColor" value="{{ $car->Color }}" disabled>                            
                        </div>
                                            

                        <div class="input-group custom-input-group-addCar2">
                            <span class="input-group-addon custom-addCarLabel">Dors #</span>
                            <select id="Dors" name="Dors" class="form-control select2" disabled>                                    
                                  <option selected>{{ $car->Dors }}</option>                                                       
                            </select>
                        </div>
                    </div>
                    <br>                        

                    <div class="box-footer custom-input-group-addCar3">
                        <button type="button" class="btn btn-primary custom-input-submit"
                            onclick="window.location='{{ url("/listCars") }}'"
                        >List Cars</button>                            
                    </div>
                </div>           
            </div>            
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection