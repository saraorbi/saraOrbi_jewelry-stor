@extends('cms.cmsmaster')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div style="font-weight:bold"><br>
        <div class="row col-md-6 card">
            <div class="login-form-1 card-body">
                <h3 style="font-family:italic;">Edit your category</h3><br>
                <form action="{{url('cms/categories').'/'.$category['id']}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="requestType" value="update">
                    <div class="form-group">
                        <input type="text" class="form-control" name="cat_name" placeholder="Category Name" autofocus value="{{$category['cat_name']}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Category Description" value="{{$category['description']}}">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" placeholder="Image" autofocus>
                    </div>
                    <img src="{{asset('img').'/'.$category['image']}}">
                    <br><br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit btn btn-primary btn" name="submit" value="Save">
                    </div>
                </form>
                <input type="submit" class="btnSubmit btn btn-primary btn" name="submit" value="Cancle" onclick="window.location='{{url('cms/categories')}}'">
                <p class="mt-5 mb-3 text-muted">&copy; Jewerly-Stor</p>
            </div>
        </div>
    </div>
</main>
@endsection