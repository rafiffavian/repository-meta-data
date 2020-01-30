@php use \App\Http\Controllers\Admin\DbpermissionController ; @endphp
@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">
    <form action="{{route('dbpermission.store',['id'=>$nama_sim,'id_role'=>$id_roles])}}" method="post">
        @csrf             
        <input type="hidden" name="_method" value="put">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
        <a href="">
                 <img src="{{asset('img/back.png')}}" style="width: 30px; height: 30px;margin-top: 20px;" alt="">     
        </a>   <br><br>
          <h3 style="text-align: center" class="box-title">{{$nama_sim->name}} Permission</h3><br><br>
          <button type="submit" class="btn btn-primary" style="float:left; width:10%;">Tambah</button>                              

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>access</th>
                  
                  </tr>
                </thead>
                <tbody>
              @foreach($database as $databases)
             
              <!-- {{-- <input type="hidden" name="id_role" value="{{$id_role}}"> --}} -->
                  <tr>
                    
                    <td><a href="{{route('tbpermission.index',['sim_id'=>$databases->id_sim,'id'=>$databases->id,'id_role'=>$id_roles])}}">{{$databases->name}}</a></td>
                    @php
                        $result = DbpermissionController::getStatusCheck($id_roles,$databases->id_sim,$databases->id)
                    @endphp
                    @if ($result == null || $result->permission == 0) 
                        <td><input type="checkbox" name="permission[{{$databases->id}}]"  ></td>
                    @else
                        <td><input type="checkbox" name="permission[{{$databases->id}}]" @if ($result->permission == 1) checked  @endif></td>
                    @endif
                   
                  </tr>
             
              @endforeach   
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </form>
    </section>
@endsection
