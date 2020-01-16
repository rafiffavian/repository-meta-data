@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
       
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <h3>Kelola Table Database {{$nama_database->name}}</h3>
                <div class="box-header with-border">
                    
                    <a class="btn btn-primary" href="{{route('table.create.data',$nama_database->id)}}">Tambah Table</a>

                   
                </div><br>
                <form action="{{route('post_index_table',$nama_database->id)}}" method="post">
                    @csrf             
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Search" id="nama" aria-describedby="namaHelp" value="" name="text_search_table">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Search</button>                              
                </form>
                <div class="row mt-2">
                    <h3>
                    @foreach($table as $tables) 
                        <ul>
                            <li style="margin:20px 0;">
                                <a href="{{route('table.show',$tables->id)}}">{{$tables->name}}</a><br>
                                <!--small><a data-toggle="modal" href="#editMk1">Edit</a>&nbsp;<a href=""></a></small-->
                                <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                            </li>
                        </ul>
                    @endforeach 
                    </h3>
                </div>
                <div class="mt-3">
                    {{$table->links()}}
                </div>
                <a class="btn btn-success" href="{{route('database.show',$nama_database->id)}}">Refresh</a><br>
                <a href="{{route('table.back',$nama_database->id_sim)}}">
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