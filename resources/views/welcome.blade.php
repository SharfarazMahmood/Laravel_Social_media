@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    @include('includes.message_block')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign-up</h3>
            <form action="signup" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="emailId"
                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder=""
                        aria-describedby="emailHelpId" value="{{ Request::old('email') }}">
                    <small id="emailHelpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="first name">First name</label>
                    <input type="text" name="first_name" id="firstNameId"
                        class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder=""
                        aria-describedby="firstNameHelpId" value="{{ Request::old('first_name') }}">
                    <small id="firstNameHelpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="last name">Last name</label>
                    <input type="text" name="last_name" id="lastNameId"
                        class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder=""
                        aria-describedby="lastNameHelpId" value="{{ Request::old('last_name') }}">
                    <small id="lastNameHelpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="passwordId"
                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder=""
                        aria-describedby="passwordHelpId">
                    <small id="passwordHelpId" class="text-muted">Help text</small>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="Submit" class="btn btn-primary">Sign-up</button>
            </form>
        </div>

        <div class="col-md-6">
            <h3>Sign-in</h3>
            <form action="signin" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="emailId" class="form-control" placeholder=""
                        aria-describedby="emailHelpId">
                    <small id="emailHelpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="passwordId" class="form-control" placeholder=""
                        aria-describedby="passwordHelpId">
                    <small id="passwordHelpId" class="text-muted">Help text</small>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="Submit" class="btn btn-primary">Sign-in</button>
            </form>
        </div>
    </div>
@endsection
