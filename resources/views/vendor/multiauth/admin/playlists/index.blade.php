@extends('multiauth::layouts.app')

@section('content')
    <div class="row container mx-auto items-center w-100">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h3 class="mb-0">Playlists</h3>
                        </div>
                        <div class="col-md-3 mt-3 mt-md-0 playlist">
                            <form method="GET">
                                <div class="input-group">
                                    <input value="{{old('query')}}" name="query" type="search" class="form-control form-control-md" placeholder="Search" aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(session()->has('created'))
                    <div class="px-4 py-2">
                        <div class="alert alert-dismissible fade show alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text mr-3">Playlist created successfully</span>

                        </div>
                    </div>
                @endif
                @if(session()->has('updated'))
                    <div class="px-4 py-2">
                        <div class="alert alert-dismissible fade show alert-success" role="alert">

                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text mr-3">Playlist updated successfully</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    </div>
                @endif
                @if(session()->has('deleted'))
                    <div class="px-4 py-2">
                        <div class="alert alert-dismissible fade show alert-danger" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text mr-3">Playlist deleted successfully</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="col-12"></div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">
                                <a class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#createModal">Create Playlist</a>
                                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card bg-secondary border-0 mb-0">
                                                    <div class="card-header bg-transparent">
                                                        <div class="text-primary text-lg text-center mt-2 mb-3">Create a playlist</div>
                                                    </div>
                                                    <div class="card-body px-lg-5 pb-lg-5">
                                                        <form enctype="multipart/form-data" role="form" method="POST" action="{{route('admin.playlist.create')}}">
                                                            @csrf
                                                            <div class="form-group mb-3">
                                                                <label>Title</label>
                                                                <input required name="name" class="form-control mb-1" placeholder="Playlist Title" type="text">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Playlist Description</label>
                                                                <textarea required rows="8" name="description" class="form-control mb-1" placeholder="Playlist Description"></textarea>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Thumbnail</label>
                                                                <input type="file" required accept="image/jpeg,image/png" name="thumbnail" class="form-control mb-1">
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary my-4">Create</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($playlists as $playlist)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a class="mr-3">
                                            <div class="rounded" style="width: 150px; height: 100px; background-image: url({{Storage::url($playlist->thumbnail)}}); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$playlist->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    {{\Illuminate\Support\Str::limit($playlist->description, 30)}}
                                </td>
                                <td>{{$playlist->created_at->toDateString()}}</td>
                                <td class="playlist">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#update{{$playlist->id}}Modal">Edit</a>



                                            <a class="dropdown-item" data-toggle="modal" data-target="#delete{{$playlist->id}}Modal">Delete</a>
                                        </div>
                                        <div class="modal fade" id="update{{$playlist->id}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-secondary border-0 mb-0">
                                                            <div class="card-header bg-transparent">
                                                                <div class="text-primary text-lg text-center mt-2 mb-3">Edit playlist</div>
                                                            </div>
                                                            <div class="card-body px-lg-5 pb-lg-5">
                                                                <form enctype="multipart/form-data" role="form" method="POST" action="{{route('admin.playlist.update', $playlist->id)}}">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="form-group mb-3">
                                                                        <label>Title</label>
                                                                        <input value="{{$playlist->name}}" required name="name" class="form-control mb-1" placeholder="Playlist Title" type="text">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label>Description</label>
                                                                        <textarea required rows="8" name="description" class="form-control mb-1" placeholder="Playlist Description">{{$playlist->description}}</textarea>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label>Thumbnail</label>
                                                                        <input type="file" accept="image/jpeg,image/png" name="thumbnail" class="form-control mb-1">
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <button type="submit" class="btn btn-primary my-4">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="delete{{$playlist->id}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete playlist</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete playlist #{{$playlist->id}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <form method="POST" action="{{route('admin.playlist.delete', $playlist->id)}}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger mr-2">Confirm</button>
                                                            @method('delete')
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center font-weight-bold">No playlists, yet</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-center" aria-label="...">
                        {!!$playlists->links() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
