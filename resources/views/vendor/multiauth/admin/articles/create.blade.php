@extends('multiauth::layouts.app')

@section('content')
    <div class="row px-4 w-100 mx-auto flex items-center">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="col-12 mb-0">Create Article</h3>
                    </div>
                </div>
                <div class="card-body">
                    @push('css')
                        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                    @endpush
                    @push('js')
                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                        <script>
                            var quill = new Quill('#editor', {
                                modules: {
                                    toolbar: [
                                        [{ header: [1, 2, false] }],
                                        ['bold', 'italic', 'underline'],
                                        ['link', 'blockquote'],
                                        [{ list: 'ordered' }, { list: 'bullet' }]
                                    ],
                                },
                                theme: 'snow',
                                placeholder: 'Article Content'
                            });

                            $('#createForm').on('submit', (event) => {
                                event.preventDefault();
                                const html = quill.root.innerHTML;
                                if(quill.getText().trim().length){
                                    $('#input-content').val(html);
                                    event.target.submit();
                                }
                                else{
                                    // event.preventDefault();
                                }
                            });
                        </script>
                    @endpush
                    <form method="post" action="{{ route('admin.article.create') }}" autocomplete="off" id="createForm" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">Name</label>
                                <input value="{{old('name')}}" id="input-name" type="text" name="name" class="form-control  mb-1 {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Article Name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-description">Description</label>
                                <input value="{{old('description')}}" type="text" name="description" id="input-description" class="mb-1 form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Article Description" required autofocus>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('thumbnail') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" id="input-thumbnail" class="form-control {{ $errors->has('thumbnail') ? ' is-invalid' : '' }}">
                                @if ($errors->has('thumbnail'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('thumbnail') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <input type="hidden" id="input-content" name="content">
                            <div class="mb-3">
                                <div id="editor" style="min-height: 300px;">{{old('content')}}</div>
                            </div>
                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <hr class="my-4" />

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
