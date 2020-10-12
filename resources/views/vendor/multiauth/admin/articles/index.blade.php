@extends('multiauth::layouts.app')

@section('content')
        <div class="row px-4 mx-auto items-center w-100">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <h3 class="mb-0">Articles</h3>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0 text-right">
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
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text mr-3">Article Created Successfully</span>

                            </div>
                        </div>
                    @endif
                    @if(session()->has('deleted'))
                        <div class="px-4 py-2">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text mr-3">Article Deleted Successfully</span>

                            </div>
                        </div>
                    @endif
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="text-left table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">
                                    <a class="btn btn-primary btn-sm text-white" href="{{route('admin.article.create')}}">Create Article</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($articles as $article)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a class="mr-3">
                                                <div class="rounded border" style="width: 150px; height: 100px; background-image: url({{Storage::url($article->thumbnail)}}); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$article->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>{{\Illuminate\Support\Str::limit($article->description)}}</td>
                                    <td>{{$article->created_at->toDateString()}}</td>
                                    <td class="text-left">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('admin.article.edit', $article->id)}}">Edit</a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#delete{{$article->id}}Modal">Delete</a>
                                            </div>
                                            <div class="modal fade" id="delete{{$article->id}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this article?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <form method="POST" action="{{route('admin.article.delete', $article->id)}}">
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
                                <p class="text-center font-weight-bold">No articles, yet</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="...">
                            {!!$articles->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>



@endsection
