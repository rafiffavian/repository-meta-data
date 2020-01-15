@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('sim.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create SIM</legend>

        <!-- Text input-->
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama User</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
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
