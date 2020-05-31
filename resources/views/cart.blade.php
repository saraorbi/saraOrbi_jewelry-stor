@extends('master.master')

@section('content')


<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 m-lr-auto">
				<div class="">
					<div>
					<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Product</th>
	  <th scope="col">Price</th>
      <th scope="col">Quantity</th>
	  <th scope="col">Total</th>
	  <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cartContent as $data)
    <tr>
	<td>{{$data->name}}</td>
	<td>{{$data->price}}₪</td>
	<td>
		<button id="{{$data->id}}" class="btn btn-sm btn-outline-secondary add_to_cart">
		<i class="far fa-plus-square"></i>
		</button>
		{{$data->quantity}}
		<button id="{{$data->id}}" class="btn btn-sm btn-outline-secondary update_cart">
	    <i class="far fa-minus-square"></i>
		</button>
	</td>
	<td>{{$data->quantity*$data->price}}₪</td>
	<td>
	<button id="{{$data->id}}" class="btn btn-sm btn-outline-secondary delete_product">
	<i class="far fa-trash-alt"></i>
	</button>
	</td>
    </tr>
	@endforeach
  </tbody>
</table>
					</div>
				</div>
			</div>
			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Cart Totals
					</h4>
					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Subtotal:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2">
								{{Cart::getSubTotal()}}₪
							</span>
						</div>
					</div>
				</div>
<div>
				<input type="button" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 trans-04 pointer" value="Proceed to Checkout" onclick="window.location='{{url('shop/Save_Order')}}'">
				</div>
				
				<div>
				<input type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" value="Continue shopping" onclick="window.location='{{url('home2')}}'">
				</div>
				<!-- <a class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 trans-04 pointer" href="{{url('shop/save_order')}}">
					Proceed to Checkout
				</a> -->

			</div>
		</div>
	</div>

</form>
@endsection
