@extends('layouts.app')

@section('title','ورود کاربر')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-top: 30px;">
            <div class="card">
                <div class="card-header">
                  @lang('theme.user register')
                </div>
                <div class="card-body">
                    @if (session('LoginFirst'))
                    <div class="alert alert-danger">
                      @lang('auth.LoginFirst')
                    </div>
                    @endif
                    @if (session('wrongCredential'))
                    <div class="alert alert-danger">
                      @lang('auth.Invalid username or password')
                    </div>
                    @endif
                    <form action="{{ route('auth.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="email">@lang('theme.email address')</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="@lang('theme.email')">
                          <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                          <label for="password">@lang('theme.password')</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="@lang('theme.password')">
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="remember" name="remember">
                          <label class="form-check-label" style="margin-right: 20px;" for="remember">@lang('theme.remember me')</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">@lang('theme.register')</button>
                      </form>
                      @if ($errors->any())
                      <br />
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                                      <li style="font-size: 14px;">{{ $error }}</li>
                              @endforeach
                          </ul>
                          </div>
                      @endif
                </div>
              </div>
        </div>
    </div>
@endsection