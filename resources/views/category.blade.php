@extends('master.master')

@section('content')


<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
		</div>{{$title}}
		<div class="row isotope-grid" style="margin-right: 10px; margin-left:1100px;">
			<input type="button" class="block2-btn stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-l-22 p-r-11 trans-04 js-show-modal1" value="Back" onclick="window.location='{{url('home2')}}'">
		</div>
		<br><br>

		<div class="row md-20 p-2">
			@foreach($products['data'] as $data)
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
				<!-- Block2 -->

				<div class="block2">
					<div class="block2-pic hov-img0" style=" border: 1px solid grey;
                            border-radius: 12px;">
						<img src="{{asset('img').'/'.$data['image']}}" style="width:250px; height:334px;" alt="IMG-PRODUCT">

						<input type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" value="Quick View" onclick="window.location='{{url('product').'/'.$data['id']}}'">
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="{{asset('product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-detail p-b-6">{{$data['name']}}</a>
							<span class="stext-105 cl3">
								{{$data['price']}}₪
							</span>
							<button id="{{$data['id']}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-addcart-detail add_to_cart">
								Add to cart
							</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<br><br><br>
		{{$objProducts->links()}}
	</div>
</section>

@endsection