@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px; margin-left: 20px;">{{ $title }}</h2>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">                        
                            <th scope="col">Id Ulasan</th>
                            <th scope="col">Nama Pengguna</th>
                            <th scope="col">Nama Wisata</th>
                            <th scope="col">Ulasan</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>

                            <td width="80px">{{$row->id}}</td>
                            <td width="150px">{{$row->name}}</td>
                            <td width="150px">{{$row->title}}</td>
                            <td width="300px">{{$row->desc}}</td>
                            <td width="100px">{{$row->created_at}}</td>
                            <td width="60px">{{$row->status}}</td>
                            <td width="80px"> 
                                <div class="mb-2">
                                    @if ($row->status =="no")
                                    <form action="{{ url('/KelolaReview/show/'.$row->id) }}" method="POST">
                                        @csrf
                                        <input name="status" type="text" value="yes" hidden>
                                        <input name="id" type="text" value="{{$row->id}}" hidden>
                                        <button type="submit" class="btn btn-sm btn-success" style="height: 30px;width: 60px;">Show</button>
                                    </form>
                                    @elseif ($row->status =="yes")
                                    <form action="{{ url('/KelolaReview/hide/'.$row->id) }}" method="POST">
                                        @csrf
                                        <input name="status" type="text" value="no" hidden>
                                        <input name="id" type="text" value="{{$row->id}}" hidden>
                                        <button type="submit" class="btn btn-sm btn-warning" style="height: 30px;width: 60px;">Hide</button>
                                    </form>
                                    @endif
                                </div>
                                <a class="btn btn-sm btn-danger" style="height: 30px;width: 60px; " href="{{url('/DeleteKelolaReview/'.$row->id)}}" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 @endsection