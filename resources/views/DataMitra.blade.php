@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px; margin-left: 20px;">{{ $title }}</h2>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent</h6>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">                             
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>  
                                    <td width="30px">{{$row->id}}</td>
                                    <td width="200px">{{$row->name}}</td>
                                    <td width="120px">{{$row->no_hp}}</td>
                                    <td width="110px">{{$row->email}}</td>
                                    <td width="110px">
                                        <a class="btn btn-sm btn-warning" href="{{url('/EditDataMitraUser/'.$row->id)}}">Update</a>
                                        <a class="btn btn-sm btn-danger" href="{{url('/DeleteDataMitra/'.$row->id)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection