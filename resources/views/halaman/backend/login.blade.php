@extends('halaman.backend.app', ['class' => 'bg-default'])

@section('isi')
    @include('tambahan.backend.navs.guest')

    <div class="container mt--12 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 pt-5 pt-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-2">
                        <!-- <div class="text-muted text-center mt-2 mb-3"><small>{{ __('Sign in with') }}</small></div> -->
                        <div class="btn-wrapper text-center">
                            <h3>Login</h3>
                        </div>
                    </div>
                    <form role="form" method="POST" action="/login">
                    <div class="card-body px-lg-5 py-lg-5">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Sign in') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
