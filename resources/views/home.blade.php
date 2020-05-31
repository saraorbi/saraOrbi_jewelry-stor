@extends('master.master')

@section('content')


<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(img/logo1.jpg);">
                <div class="container h-90"> <br>
                    <div class="flex-col-l-m h-90 p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">

                            <span style="font-family: italic; font-size:50px;color:whitesmoke;">
                                Express all your loves<br>
                                With unique jewelry..
                            </span>
                        </div><br>
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="{{url('home2')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection