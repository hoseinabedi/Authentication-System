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
                    <form action="{{ route('auth.login.form') }}" method="post">
                        <div class="form-group">
                          <label for="email">@lang('theme.email address')</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="@lang('theme.email')">
                          <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                          <label for="password">@lang('theme.password')</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="@lang('theme.password')">
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="remember-me" name="remember-me">
                          <label class="form-check-label" style="margin-right: 20px;" for="remember-me">@lang('theme.remember me')</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">@lang('theme.register')</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
@endsection