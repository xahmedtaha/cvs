@extends('multiauth::layouts.app')

@section('content')
        <div class="row align-items-center flex-column">
            <div class="col-md-12 col-lg-11 col-xl-10 order-xl-1 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-danger mr-2 mt-2 mt-sm-0" data-toggle="modal" data-target="#delete{{$playlist->id}}">Delete Playlist</button>

                            <!-- Delete Modal Only If Normal playlist -->
                                <div class="modal fade" id="delete{{$playlist->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                        <div class="modal-content bg-gradient-danger">

                                            <div class="modal-header ltr-dir">
                                                <h6 class="modal-title" id="modal-title-notification">Delete confirmation</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="py-3 text-center">
                                                    <i class="ni ni-circle-08 ni-3x"></i>
                                                    <h3 class="heading text-center mt-4">Are you sure ypu want to delete this playlist?</h3>
                                                    <form action="{{route('admin.playlist.delete', $playlist->id)}}" method="POST" id="delete{{$playlist->id}}Form">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                    </form>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white mr-2" onclick="(document.getElementById('delete{{$playlist->id}}Form')).submit()">Confirm</button>
                                                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Cancel</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image mt-5">
                                <a href="#">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($playlist->thumbnail)}}" class="rounded border">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-8 pt-md-6">

                        <div class="row">
                            <div class="col mt-md-5">
                                <div>

                                    <h2 class="text-center mx-auto mt-5">
                                        {{ $playlist->name }}
                                    </h2>
                                </div>
                                <div class="card-profile-stats d-flex justify-content-center">

                                    <div>
                                        <span class="heading text-center">{{$playlist->videos()->count()}}</span>
                                        <span class="description text-center">Videos</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <div class="nav-wrapper text-center">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item text-center mx-1 ">
                                        <a class="nav-link text-center mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-circle-08 mr-2"></i> Information</a>
                                    </li>
                                    <li class="nav-item text-center mx-1 ">
                                        <a class="nav-link text-center mb-sm-3 mb-md-0 mx-1" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fab fa-youtube mr-2"></i> Videos</a>
                                    </li>
                                </ul>
                            </div>
                            @if (session('updated'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Information Updated Successfully
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('created'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Video Added Successfully
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('deleted'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Video Deleted Successfully
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <hr class="my-3" />
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active text-left" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="card-body">
                                                <form method="post" action="{{ route('admin.playlist.update', $playlist->id) }}" autocomplete="off">
                                                    @csrf
                                                    @method('put')

                                                    <h6 class="heading-small text-muted mb-4">Playlist Information</h6>



                                                    <div class="pl-lg-4">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                            <label class="form-control-label" for="input-name">Title</label>
                                                            <input required value="{{$playlist->name}}" type="text" name="name" id="input-name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Playlist Title" autofocus>

                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                            <label class="form-control-label" for="input-description">Description</label>
                                                            <textarea rows="10" required name="description" id="input-description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Playlist Description">{{$playlist->description}}</textarea>

                                                            @if ($errors->has('description'))
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('description') }}</strong>
                                                                    </span>
                                                            @endif
                                                        </div>


                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-success mt-4">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                            <div class="table-responsive">
                                                <!-- Projects table -->
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                    <tr class="text-left">
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Thumbnail</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">
                                                            <a class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#createModal">Add Video</a>
                                                            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body p-0">
                                                                            <div class="card bg-secondary border-0 mb-0">
                                                                                <div class="card-header bg-transparent">
                                                                                    <div class="text-primary text-lg text-center mt-2 mb-3">Add Video</div>
                                                                                </div>
                                                                                <div class="card-body px-lg-5 pb-lg-5">
                                                                                    <form enctype="multipart/form-data" role="form" method="POST" action="{{route('admin.video.create')}}">
                                                                                        @csrf
                                                                                        <div class="form-group mb-3">
                                                                                            <label>Title</label>
                                                                                            <input required name="name" class="form-control mb-1" placeholder="Video Title" type="text">
                                                                                        </div>
                                                                                        <div class="form-group mb-3">
                                                                                            <label>Description</label>
                                                                                            <textarea required rows="8" name="description" class="form-control mb-1" placeholder="Video Description"></textarea>
                                                                                        </div>
                                                                                        <div class="form-group mb-3">
                                                                                            <label>Thumbnail</label>
                                                                                            <input type="file" required accept="image/jpeg,image/png" name="thumbnail" class="form-control mb-1">
                                                                                        </div>
                                                                                        <div class="form-group mb-3">
                                                                                            <label>Youtube Link</label>
                                                                                            <input required type="text" name="embed" class="form-control mb-1" placeholder="Video Youtube Link">
                                                                                        </div>
                                                                                        <input type="hidden" name="playlist_id" value="{{$playlist->id}}">
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
                                                    @forelse($playlist->videos as $video)
                                                        <tr class="text-left">
                                                            <th scope="row">
                                                                #{{$video->id}}
                                                            </th>
                                                            <td>
                                                                <div class="rounded border" style="width: 150px; height: 100px; background-image: url({{Storage::url($video->thumbnail)}}); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
                                                            </td>
                                                            <td>
                                                                <span class="name mb-0 text-sm">
                                                                    {{$video->name}}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                {{\Illuminate\Support\Str::limit($video->description, 30)}}
                                                            </td>

                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                        <a class="dropdown-item" data-toggle="modal" data-target="#update{{$video->id}}Modal">Edit</a>



                                                                        <a class="dropdown-item" data-toggle="modal" data-target="#delete{{$video->id}}Modal">Delete</a>
                                                                    </div>
                                                                    <div class="modal fade" id="update{{$video->id}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body p-0">
                                                                                    <div class="card bg-secondary border-0 mb-0">
                                                                                        <div class="card-header bg-transparent">
                                                                                            <div class="text-primary text-lg text-center mt-2 mb-3">Edit Video</div>
                                                                                        </div>
                                                                                        <div class="card-body px-lg-5 pb-lg-5">
                                                                                            <form enctype="multipart/form-data" role="form" method="POST" action="{{route('admin.video.update', $video->id)}}">
                                                                                                @csrf
                                                                                                @method('put')
                                                                                                <div class="form-group mb-3">
                                                                                                    <label>Title</label>
                                                                                                    <input value="{{$video->name}}" required name="name" class="form-control mb-1" placeholder="Video Title" type="text">
                                                                                                </div>
                                                                                                <div class="form-group mb-3">
                                                                                                    <label>Description</label>
                                                                                                    <textarea required rows="8" name="description" class="form-control mb-1" placeholder="Video Description">{{$video->description}}</textarea>
                                                                                                </div>
                                                                                                <div class="form-group mb-3">
                                                                                                    <label>Thumbnail</label>
                                                                                                    <input type="file" accept="image/jpeg,image/png" name="thumbnail" class="form-control mb-1">
                                                                                                </div>
                                                                                                <div class="form-group mb-3">
                                                                                                    <label>Youtube Link</label>
                                                                                                    <input required type="text" name="embed" class="form-control mb-1" placeholder="Video Youtube Link" value="{{$video->embed}}">
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
                                                                    <div class="modal fade" id="delete{{$video->id}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Video</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Are you sure you want to delete video #{{$video->id}} ?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                                    <form method="POST" action="{{route('admin.video.delete', $video->id)}}">
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
                                                        <p class="text-center px-2 py-1 mx-auto text-muted">No videos yet</p>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
