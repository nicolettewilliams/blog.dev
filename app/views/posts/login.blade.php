{{-- view for showing login form --}}
@extends('layouts.master')

@section('content')

<div class="container">
    <p class="titles">Log In!</p>
    @include('partials.alerts.errors')
    {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        <div class="form-group">
            <label class="control-label" for="email">Email</label>
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            {{ Form::password('password', null, ['class' => 'form-control']) }}
        </div>
        <button class="btn purple darken-3 submit" >Login</button>
    {{ Form::close() }}
</div>
@stop