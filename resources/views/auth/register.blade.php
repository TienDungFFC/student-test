@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Signup</h1>
                            </div>
                        </div>
                        <form action="{{ route('admin.auth.register') }}" method="post" name="registration">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Enter name">
                            </div>
                           @if ($errors->has('name'))
                              <div class="alert alert-danger" role="alert">
                                 {{ $errors->first('name') }}
                              </div>
                           @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                           @if ($errors->has('email'))
                              <div class="alert alert-danger" role="alert">
                                 {{ $errors->first('email') }}
                              </div>
                           @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                           @if ($errors->has('password'))
                              <div class="alert alert-danger" role="alert">
                                 {{ $errors->first('password') }}
                              </div>
                           @endif
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="{{ route('admin.auth.login') }}" id="signin">Already have an account?</a></p>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
