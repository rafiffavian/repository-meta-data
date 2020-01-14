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
                <form action="{{route('sim.store')}}" method="post">
                    @csrf             
                    <div class="form-group">
                        <label for="" style="font-weight:bold;">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" value="" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Tambahkan</button>                              
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
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
               
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