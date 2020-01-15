@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('isi.store',$id_table)}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Datatable</legend>

        <!-- Text input-->
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Null?</label>  
            <div class="col-md-4">
                <input id="textinput" name="null" type="text" placeholder="Null?" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
                <input id="textinput" name="type" type="text" placeholder="Type" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Parameter</label>  
            <div class="col-md-4">
                <input id="textinput" name="parameter" type="text" placeholder="Parameter" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Keterangan</label>  
            <div class="col-md-4">
                <textarea name="keterangan" placeholder="Keterangan" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Sample Data</label>  
            <div class="col-md-4">
                <textarea name="sampel_data" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Relasi</label>  
            <div class="col-md-4">
                <input id="textinput" name="relasi" type="text" placeholder="Relasi" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
       <br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
