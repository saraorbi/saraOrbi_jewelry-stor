@extends('cms.cmsmaster')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div style="font-weight:bold"><br>
        <div class="row col-md-6 card">
            <div class="login-form-1 card-body">
                <h3 style="font-family:italic;">Add New Product</h3><br>
                <form action="{{url('cms/products').'/'.$product->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Product Price" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Product Description" value="{{$product->description}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="cat_name">
                            <option value="{{$product->cat_id}}">{{$product->cat_name}}</option>
                            @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['cat_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" placeholder="Image" autofocus>
                        <img src="{{asset('img').'/'.$product->image}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit btn btn-primary btn" name="submit" value="Save">

                    </div>


                </form>
                <input type="submit" class="btnSubmit btn btn-primary btn" name="submit" value="Cancle" onclick="window.location='{{url('cms/products')}}'">
                <p class="mt-5 mb-3 text-muted">&copy; Jewerly-Stor</p>
            </div>
        </div>
    </div>
</main>
@endsection