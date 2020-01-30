@php use \App\Http\Controllers\Admin\DatabaseController ; @endphp
@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
       
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                {{Auth::user()->id_role}}
                <h3>Kelola Database {{$nama_database->name}}</h3>
                <div class="box-header with-border">
                    
                    <a class="btn btn-primary" href="{{route('db.create.data',$nama_database->id)}}">Tambah Database</a>

                   
                </div><br>
                <form action="{{route('post_index_db',$nama_database->id)}}" method="post">
                    @csrf             
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="nama" placeholder="Search" aria-describedby="namaHelp" value="" name="text_search_db">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Search</button>                              
                </form>
                <div class="row mt-2">
                    <h3>

                    @foreach($database as $databases) 
                       @if($databases)   
                       @php 
                       $checkPriv = '';
                       $checkPriv = DatabaseController::checkPriv($nama_database->id,$databases->id,Auth::user()->id_role); 
                       //dd($checkPriv->permission == '1');
                       @endphp
                        <ul>
                            <li style="margin:20px 0;">
                                @if ($checkPriv->permission == '1' || Auth::user()->id_role == 1)
                                <a href="{{route('database.show',$databases->id)}}">{{$databases->name}}</a><br>
                                @else
                                <a href="">{{$databases->name}}</a><br>
                                @endif
                                <!--small><a data-toggle="modal" href="#editMk1">Edit</a>&nbsp;<a href=""></a></small-->
                                <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                            </li>
                        </ul>
                       @endif 
                    @endforeach 
                    </h3>
                </div>
                <div class="mt-3">
                    {{$database->links()}}
                </div>
                <a class="btn btn-success" href="{{route('sim.show',$nama_database->id)}}">Refresh</a>    <br>    
                <a href="{{route('sim.index')}}">
                 <img src="{{asset('img/back.png')}}" style="width: 30px; height: 30px;margin-top: 20px;" alt="">     
                </a>   
               
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection