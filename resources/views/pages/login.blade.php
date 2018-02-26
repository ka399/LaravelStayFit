@extends('layouts.default')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-7">
            <div class="card">
            <div class="card-title ml-3">
                <h1>Please Login</h1>
            </div>
            <div class="card-body">
                <form>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                   placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.
                            </small>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                    </div>
                    <br/>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a class="ml-3" href="{{route('register')}}">New to StayFit? Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>

@endsection
