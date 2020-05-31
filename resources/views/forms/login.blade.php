@extends('master.master')

@section('content')


<div class="container login-container py-5 mb-4 position-static mt-5" style="font-weight:bold">
    <!-- <h3>Please Sign In ..</h3><br> -->
    <div class="row col-md-6 card">
        <div class="login-form-1 card-body">
            <h3 style="font-family:italic;">Log In:</h3><br>
            <form action="{{url('user/login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email address" autofocus>
                    @if($errors->has('email'))
                    <span class="text-danger"> {{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <span class="text-danger"> {{$errors->first('password')}}</span>
                    @endif
                    <br>
                    <div>
                        <input type="submit" class="btnSubmit btn btn-primary btn" aria-pressed="false" autocomplete="off" name="submit" value="sign in">
                        <p class="mt-5 mb-3 text-muted">&copy; Jewerly-Stor</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection