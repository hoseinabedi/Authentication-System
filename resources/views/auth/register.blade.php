@extends('layouts.app')
@section('title','')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-top: 30px;">
            <div class="card">
                <div class="card-header">
                    @lang('theme.user register')
                </div>
                <div class="card-body">
                    <form action="{{ route('auth.register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">@lang('theme.user name')</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="@lang('theme.user name')">
                            <small id="nameHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">@lang('theme.email address')</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="@lang('theme.email')">
                            <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone">@lang('theme.user phone')</label>
                            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="@lang('theme.user phone')">
                            <small id="phoneHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">@lang('theme.password')</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="@lang('theme.password')">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">@lang('theme.confirm password')</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('theme.confirm password')">
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('theme.register')</button>
                      </form>
                      @include('partials.validation-errors')
                </div>
              </div>
        </div>
    </div>
@endsection