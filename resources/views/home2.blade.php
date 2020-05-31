@extends('master.master')

@section('content')

<!-- Banner -->

<section class="bg0 p-t-80 p-b-50">

    <div class="container">
        <div class="row isotope-grid" style="margin-right: 10px; margin-left:1100px;">
            <input type="button" class="block2-btn stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-l-22 p-r-11 trans-04 js-show-modal1" value="Back" onclick="window.location='{{url('/')}}'">
        </div>

        <h3>Choose a brand ..</h3><br>
        <div class="row">
            @foreach ($categories as $data)
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('img').'/'.$data['image']}}" style="width: 370px; height:251px;" alt="IMG-BANNER">
                    <a href="{{url('category').'/'.$data['cat_name']}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                <!-- SWAROVSKI -->
                            </span>

                            <span class="block1-info stext-102 trans-04">

                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endsection