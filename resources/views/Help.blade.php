@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px; margin-left: 20px;">{{ $title }}</h2>
    <a class="btn btn-sm btn-primary" style="margin-left: 20px;" href="/TambahBantuan">Tambah FaQ</a>
        <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent</h6>
                
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">                              
                            <th scope="col">ID Question</th>
                            <th scope="col">Judul Pertanyaan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td width="110px">{{$row->id_question}}</td>
                            <td width="250px">{{$row->title}}</td>
                            <td>{{$row->categories}}</td>
                            <td width="400px">{{$row->desc}}</td>
                            <td width="145px">
                                <a class="btn btn-sm btn-warning" href="{{url('/EditBantuan/'.$row->id_question)}}">Update</a> 
                                <a class="btn btn-sm btn-danger" href="{{url('/DeleteBantuan/'.$row->id_question)}}">Delete</a>
                            </td>                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 @endsection