@extends('cms.cmsmaster')

@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>
	<!-- <input class="form-control" type="text" placeholder="search category" id="search-text" onkeyup="tableSearch()"> -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<br>
			<a class="btn btn-dark" href="{{url('cms/categories/create')}}">
				+Add new category
			</a>
			<br><br>
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table table-bordered text-center">
								<thead>
									<tr class="table_head">
										<th class="column-1">#</th>
										<th class="column-2">Category Name</th>
										<th class="column-3">Image</th>
										<th class="column-4">Edit Category</th>
										<th class="column-5">Delete category</th>
									</tr>
									<?php $counter = 1; ?>
									@foreach($categories as $data)
									<tr class="table_row">
										<td scope="row">{{$counter++}}</td>
										<td class="column-2">{{$data['cat_name']}}</td>
										<td>
											<div class="media">
												<div class="d-flex">
													<img src="{{asset('img').'/'.$data['image']}}" width="80px">
												</div>
											</div>
										</td>
										<td>
											<button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{url('cms/categories/'.$data['id'].'/edit')}}'"><i class="far fa-edit"></i>
											</button>
										</td>
										<td>
											<button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{url('cms/categories').'/'.$data['id']}}'"><i class="far fa-trash-alt"></i>
											</button>
										</td>
									</tr>
									@endforeach
								</thead>
							</table>
						</div>
					</div>
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