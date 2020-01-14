@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create User</legend>

        <!-- Text input-->
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama User</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Nama User" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email User</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="text" placeholder="Email User" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Password User</label>  
            <div class="col-md-4">
                <input id="textinput" name="password" type="password" placeholder="Password User" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Role</label>  
            <div class="col-md-4">
                <select name="id_role" id="" class="form-control">
               @foreach($role as $roles)
                    <option value="{{$roles->id}}">{{$roles->name}}</option>
               @endforeach     
               
                </select>
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
