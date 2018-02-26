@extends('layouts.default')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title ml-3">
                        <h1>Please Register</h1>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="Enter Name">
                                </div>
                            </div>
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
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="Confirm Password">Confirm Password</label>
                                    <input type="confirmpassword" class="form-control" id="confirmpassword"
                                           placeholder="Confirm Password">
                                </div>
                            </div>
                                                        <br/>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

