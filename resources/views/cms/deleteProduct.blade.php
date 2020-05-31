@extends('cms.cmsmaster')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div style="font-weight:bold"><br>
        <div class="row col-md-6 card">
            <div class="login-form-1 card-body">
                <h3 style="font-family:italic;">Are you sure you want to delete this {{$deleteType}}?</h3><br>

                <form action="{{url('cms/products').'/'.$product['id']}}" method="post">
                    @csrf
                    @method('DELETE')
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit btn btn-primary btn" name="submit" value="Delete {{$deleteType}}">

                    </div>


                </form>
                <div>
                    <input type="submit" class="btnSubmit btn btn-primary btn" value="Cancle" onclick="window.location='{{url('cms/products')}}'">
                </div>
                <p class="mt-5 mb-3 text-muted">&copy; Jewerly-Stor</p>
            </div>
        </div>
    </div>
</main>
@endsection