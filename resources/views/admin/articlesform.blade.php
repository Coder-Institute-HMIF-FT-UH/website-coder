@extends('layouts.dashboard-layout')

@section('content')

<form action="/admin/articles" method="post" enctype='multipart/form-data'>
    @csrf
    <div class="form-group col-md-6">
        <label for="inputTitle">Title</label>
        <input name="title" type="text" class="form-control" id="inputAddress" placeholder="Input Title Here..." value="">
    </div>
    <div class="form-group col-md-6">
            <label for="inputTitle">Kategori</label>
            <select name="category" class="form-control">
                    <option selected disabled>Pilih kategori</option>
                    <option>Kegiatan</option>
                    <option>Pelatihan Website</option>
                    <option>Pelatihan Mobile</option>
                    <option>Pelatihan IOT</option>
                    <option>Pelatihan Games</option>
                    <option>Info Teknologi</option>
                    <option>Berita</option>
                    <option>Lainnya</option>
            </select>
    </div>
    <div class="form-group col-md-11">
        <label for="ckeditor1">Content</label>
        <textarea  class="form-control" id="ckeditor1" rows="5" type="text" name="content" value=""></textarea> 
    </div>
    <div class="form-group col-md-6">
        <div class="custom-file">
            <label class="custom-file-label" for="customFile">Choose file</label>
            <input type="file" class="custom-file-input" id="customFile" name="image" value="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary col-md-7">Upload</button>
            </div>
        </div>
    </div>    
</form>

@endsection