@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px;">Edit About Us</h2>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">                            
        <form action="{{ url('edit-about-us/update/'.$data->id_about_us) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="">Cover</label>
                <input type="file" name="cover_new" class="form-control form-control-sm" style="background-color:white;">
                <input type="text" value="{{ $data->cover }}" name="cover" hidden>
            </div>
            <div class="form-group mb-2">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control form-control-sm" value="{{ $data->judul }}">
            </div>
            <div class="form-group mb-2">
                <label for="">Deskripsi</label>
                <textarea name="desc" id="" rows="3" class="form-control form-control-sm">{{ $data->desc }}</textarea>
            </div>
            <div class="form-group mb-2">
                <label for="">Informasi Developer 1</label>
                <div class="row g-2">
                    <div class="col-4">
                        <input type="text" name="develop_1" class="form-control form-control-sm" placeholder="Nama Developer" value="{{ $data->develop_1 }}">
                    </div>
                    <div class="col-4">
                        <input type="text" pattern="\d*" maxlength="10" name="nim_develop_1" class="form-control form-control-sm" placeholder="NIM Developer" value="{{ $data->nim_develop_1 }}">
                    </div>
                    <div class="col-4">
                        <input type="file" name="foto_develop_1_new" class="form-control form-control-sm" style="background-color:white;">
                        <input type="text" value="{{ $data->foto_develop_1 }}" name="foto_develop_1" hidden>
                    </div>
                </div>                    
            </div>
            <div class="form-group mb-2">
                <label for="">Informasi Developer 2</label>
                <div class="row g-2">
                    <div class="col-4">
                        <input type="text" name="develop_2" class="form-control form-control-sm" placeholder="Nama Developer" value="{{ $data->develop_2 }}">
                    </div>
                    <div class="col-4">
                        <input type="text" pattern="\d*" maxlength="10" name="nim_develop_2" class="form-control form-control-sm" placeholder="NIM Developer" value="{{ $data->nim_develop_2 }}">
                    </div>
                    <div class="col-4">
                        <input type="file" name="foto_develop_2_new" class="form-control form-control-sm" style="background-color:white;">
                        <input type="text" value="{{ $data->foto_develop_2 }}" name="foto_develop_2" hidden>
                    </div>
                </div>                    
            </div>
            <div class="form-group mb-2">
                <label for="">Informasi Developer 3</label>
                <div class="row g-2">
                    <div class="col-4">
                        <input type="text" name="develop_3" class="form-control form-control-sm" placeholder="Nama Developer" value="{{ $data->develop_3 }}">
                    </div>
                    <div class="col-4">
                        <input type="text" pattern="\d*" maxlength="10" name="nim_develop_3" class="form-control form-control-sm" placeholder="NIM Developer" value="{{ $data->nim_develop_3 }}">
                    </div>
                    <div class="col-4">
                        <input type="file" name="foto_develop_3_new" class="form-control form-control-sm" style="background-color:white;">
                        <input type="text" value="{{ $data->foto_develop_3 }}" name="foto_develop_3" hidden>
                    </div>
                </div>                    
            </div>
            <div class="form-group mb-2">
                <label for="">Informasi Developer 4</label>
                <div class="row g-2">
                    <div class="col-4">
                        <input type="text" name="develop_4" class="form-control form-control-sm" placeholder="Nama Developer" value="{{ $data->develop_4 }}">
                    </div>
                    <div class="col-4">
                        <input type="text" pattern="\d*" maxlength="10" name="nim_develop_4" class="form-control form-control-sm" placeholder="NIM Developer" value="{{ $data->nim_develop_4 }}">
                    </div>
                    <div class="col-4">
                        <input type="file" name="foto_develop_4_new" class="form-control form-control-sm" style="background-color:white;">
                        <input type="text" value="{{ $data->foto_develop_4 }}" name="foto_develop_4" hidden>
                    </div>
                </div>                    
            </div>
            <div class="form-group mb-2">
                <label for="">Informasi Developer 5</label>
                <div class="row g-2">
                    <div class="col-4">
                        <input type="text" name="develop_5" class="form-control form-control-sm" placeholder="Nama Developer" value="{{ $data->develop_5 }}">
                    </div>
                    <div class="col-4">
                        <input type="text" pattern="\d*" maxlength="10" name="nim_develop_5" class="form-control form-control-sm" placeholder="NIM Developer" value="{{ $data->nim_develop_5 }}">
                    </div>
                    <div class="col-4">
                        <input type="file" name="foto_develop_5_new" class="form-control form-control-sm" style="background-color:white;">
                        <input type="text" value="{{ $data->foto_develop_5 }}" name="foto_develop_5" hidden>
                    </div>
                </div>                    
            </div>
            <button type="submit" class="btn btn-sm btn-success mt-2">Simpan</button>           
        </form>        
    </div>
</div>
@endsection