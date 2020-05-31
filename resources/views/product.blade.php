@extends('master.master')

@section('content')


<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
	{{$title}}
		<div class="row isotope-grid" style="margin-right: 10px; margin-left:1100px;">
			<input type="button" class="block2-btn stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-l-22 p-r-11 trans-04 js-show-modal1" value="Back" onclick="window.location='{{url('category').'/'.$category['cat_name']}}'">
		</div>
		<div class="row">

			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<!-- <div class="wrap-slick3-dots"></div> -->
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

						<div class="slick3 gallery-lb">

							<div class="wrap-pic-w pos-relative">
								<img src="{{asset('img').'/'.$product['image']}}" alt="IMG-PRODUCT" style="width:406px;height:421px;">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<br><br>
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						{{$product['name']}}
					</h4>

					<span class="mtext-106 cl2">
						{{$product['price']}}₪
					</span>

					<p class="stext-102 cl3 p-t-23">
						{{$product['description']}}
					</p>
					<br><br><br>
					<div class="flex-w flex-r-m p-b-10">
						<div class="size-204 flex-w flex-m respon6-next">
							<div class="wrap-num-product flex-w m-r-20 m-tb-10">
								<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-minus"></i>
								</div>

								<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

								<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-plus"></i>
								</div>
							</div>
							<br><br>
							<button id="{{$product['id']}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail add_to_cart">
								Add to cart
							</button>

							<br><br><br><br>

							<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" onclick="window.location='{{url('shop/ViewCart')}}'">View cart</button>

							<div>
								<input type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" value="Back" onclick="window.location='{{url('category').'/'.$category['cat_name']}}'">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection