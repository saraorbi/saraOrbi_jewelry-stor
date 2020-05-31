@extends('cms.cmsmaster')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div style="font-weight:bold"><br>
        <div class="row col-md-6 card">
            <div class="login-form-1 card-body">
                <h3 style="font-family:italic;">Add New Category</h3><br>
                <form action="{{url('cms/categories')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="cat_name" placeholder="Category Name" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Category Description">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" placeholder="Image" autofocus>
                    </div>
                    <br>
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