@php use \App\Http\Controllers\Admin\TbpermissionController ; @endphp
@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">
    <form action="{{route('tbpermission.store',['sim_id'=>$sim_id,'id'=>$id,'id_role'=>$id_roles])}}" method="post">
        @csrf             
        <input type="hidden" name="_method" value="put">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
        <a href="">
                 <img src="{{asset('img/back.png')}}" style="width: 30px; height: 30px;margin-top: 20px;" alt="">     
        </a>   <br><br>
          <h3 style="text-align: center" class="box-title">{{$nama_database->name}} Permission</h3><br><br>
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
              @foreach($table as $tables)
             
              <!-- {{-- <input type="hidden" name="id_role" value="{{$id_role}}"> --}} -->
                  <tr>
                    
                    <td>{{$tables->name}}</td>
                    @php
                        $result = TbpermissionController::getStatusCheck($id_roles,$sim_id,$tables->id_database,$tables->id,$id_roles)
                    @endphp
                    @if ($result == null || $result->permission == 0) 
                        <td><input type="checkbox" name="permission[{{$tables->id}}]"  ></td>
                    @else
                        <td><input type="checkbox" name="permission[{{$tables->id}}]" @if ($result->permission == 1) checked  @endif></td>
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
