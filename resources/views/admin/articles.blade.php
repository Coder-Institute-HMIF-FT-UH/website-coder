@extends('layouts.dashboard-layout')

@section('content')

<section id="articles">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Post's Database</h1>
  @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
  @endif 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="mt-2 font-weight-bold text-primary float-left">Posts</h6>
    <a href="{{'articles/create'}}" class="btn btn-primary float-right">Create Post</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Cover Image</th>
              <th>Edit / Delete</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($articles as $data)
            <tr>
              <td align="center">{{$loop->iteration}}</td>
              <td align="center">{{$data->title}}</td>
              <td align="center"><img src="/uploads/article image/{{$data->image}}" alt="" style="width: 10rem;"></td>
              <td align="center">
                <a href="articles/{{$data->id}}/edit" class="btn btn-primary m-1">Edit</a>
                <button class="btn btn-danger m-1" data-toggle="modal" data-target="#deleteModal">Delete</button>
              </td>
            </tr>
            {{-- Delete Modal --}}
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">Are You Sure Want to Delete This?</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <form action="articles/{{$data->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection