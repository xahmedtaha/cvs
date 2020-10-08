@extends('multiauth::layouts.guest')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-gray-dark border-0 mb-0">

                <div class="card-body px-lg-5 py-lg-5">
                    <form role="form" method="POST" action="{{route('admin.login')}}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input name="remember" class="custom-control-input" id=" customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin">
                                <span class="text-muted">Remember me</span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-white mt-4">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">

                <a href="{{route('admin.password.request')}}" class="text-default mt-2"><small>Forgot password?</small></a>

            </div>
        </div>
    </div>
@endsection
