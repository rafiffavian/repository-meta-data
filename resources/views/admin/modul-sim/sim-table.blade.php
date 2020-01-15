@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      
       
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <h3>Kelola SIM</h3>
                <div class="box-header with-border">
                    
                    <a class="btn btn-primary" href="{{route('sim.create')}}">Tambah SIM</a>

                   
                </div><br>
                <form action="{{route('post_index')}}" method="post">
                    @csrf             
                    <div class="form-group">
                        <!-- <label for="" style="font-weight:bold;">Search</!--> 
                        <input type="text" placeholder="search" class="form-control" id="nama" aria-describedby="namaHelp" value="" name="text_search_sim">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Search</button>                              
                </form>
                <div class="row mt-2">
                    <h3>
                    @foreach($sim as $sims) 
                        <ul>
                            <li style="margin:20px 0;">
                                <a href="{{route('sim.show',$sims->id)}}">{{$sims->name}}</a><br>
                                <!--small><a data-toggle="modal" href="#editMk1">Edit</a>&nbsp;<a href=""></a></small-->
                                <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                <small><a href="/edit-matkul/sis-infor-akun">Delete</a>&nbsp;<a href=""></a></small>
                            </li>
                        </ul>
                    @endforeach 
                    </h3>
                </div>
                <div class="mt-3">
                    {{$sim->links()}}
                </div>
                <a class="btn btn-success" href="{{route('sim.index')}}">Refresh</a>        
               
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