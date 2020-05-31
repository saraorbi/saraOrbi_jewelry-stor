@extends('master.master')

@section('content')

<!-- <div class="container">
    <div class="row pt-3">

    </div>
</div> -->
<style>

</style>

<div class="container login-container py-5 mb-4 position-static mt-5 ">
    <div class="row col-md-6 card">
        <div class="login-form-1 card-body">
            <h3 style="font-family:italic;">Create a new user:</h3><br>
            <form action="{{url('user/signup')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required autofocus>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email address" required autofocus>
                </div>
                @if($errors->has('email'))
                <span class="text-danger"> {{$errors->first('email')}}</span>
                @endif

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    @if($errors->has('password'))
                    <span class="text-danger"> {{$errors->first('password')}}</span>
                    @endif
                </div>
                <div>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Verify Password" required>
                </div>
                <br>
                <div>
                    <input type="submit" class="btnSubmit btn btn-primary btn" aria-pressed="false" autocomplete="off" name="submit" value="Sign up">
                    <p class="mt-5 mb-3 text-muted">&copy; Jewerly-Stor</p>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection