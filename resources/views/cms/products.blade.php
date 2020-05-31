@extends('cms.cmsmaster')

@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>
	<!-- <input class="form-control" type="text" placeholder="search product" id="search-text" onkeyup="tableSearch()"> -->
	<form class="">
		<div class="container">
			<br>
			<a class="btn btn-dark" href="{{url('cms/products/create')}}">
				+Add new product
			</a>
			<br><br>
			<div class="row">
				<div>
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th class="column-1">#</th>
								<th class="column-2">Product Name</th>
								<th class="column-2">Category Name</th>
								<th class="column-2">Price</th>
								<th class="column-3">Image</th>
								<th class="column-4">Edit Product</th>
								<th class="column-5">Delete Product</th>
							</tr>
							<?php $counter = 1; ?>
							@foreach($products as $data)
							<tr>
								<td scope="row" class="column-1">{{$counter++}}</td>
								<td class="column-2">{{$data->name}}</td>

								<td class="column-2">{{$data->cat_name}}</td>
								<td class="column-2">{{$data->price}}</td>
								<td>
									<div class="media">
										<div class="d-flex">
											<img src="{{asset('img').'/'.$data->image}}" width="80px">
										</div>
									</div>
								</td>
								<td>
									<button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{url('cms/products/'.$data->id.'/edit')}}'"><i class="far fa-edit"></i>
									</button>
								</td>
								<td>
									<button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{url('cms/products').'/'.$data->id}}'"><i class="far fa-trash-alt"></i>
									</button>
								</td>
							</tr>
							@endforeach
						</thead>
					</table>
				</div>

			</div>
		</div>
	</form>
</main>
@endsection

<script>
	function tableSearch() {
		var phrase = document.getElementById('search-text');
		var table = document.getElementById('info-table');
		var regPhrase = new RegExp(phrase.value, 'i');
		var flag = false;
		for (var i = 1; i < table.rows.length; i++) {
			flag = false;
			for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
				flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
				if (flag) break;
			}
			if (flag) {
				table.rows[i].style.display = "";
			} else {
				table.rows[i].style.display = "none";
			}

		}
	}
</script>
</body>

</html>