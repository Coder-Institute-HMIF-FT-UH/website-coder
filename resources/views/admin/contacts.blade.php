@extends('layouts.dashboard-layout')

@section('content')

<section id="contacts">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Contact's Database</h1>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $data)
                        <tr>
                        <td align="center">{{$loop->iteration}}</td>
                        <td align="center">{{$data->name}}</td>
                        <td align="center">{{$data->email}}</td>
                        <td align="center">{{$data->category}}</td>
                        <td align="center">{{$data->body}}</td>
                        <td align="center">
                            <button data-toggle="modal" data-target="#detailCModal{{$data->id}}" class="btn btn-primary m-1">Detail</button>
                            <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger m-1">Delete</button>
                        </td>
                        </tr>
                        {{-- Delete Modal --}}
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
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
                                        <form action="contacts/{{$data->id}}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger m-1">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        {{-- Detail Modal --}}
                        <div class="modal fade" id="detailCModal{{$data->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Contact</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Name</label>
                                                <input readonly type="email" class="form-control"
                                                    id="exampleFormControlInput1" value="{{$data->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input readonly class="form-control" rows="5" value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <label>Category</label>
                                                    <input readonly type="email" class="form-control"
                                                    id="exampleFormControlInput1" value="{{$data->category}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <label>Content</label>
                                                    <input readonly type="email" class="form-control"
                                                    id="exampleFormControlInput1" value="{{$data->body}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
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