@extends('layouts.main_admin')
@section('content')
<form action="{{route('category.edit',['id' => $model->id])}}" method="post" enctype="multipart/form-data" novalidate>
	@csrf
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="cate_name" class="form-control" value="{{ $model->cate_name }}" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Date</label>
		<input type="date" name="cate_date" class="form-control" value="{{ $model->cate_date }}" placeholder="">
	</div>

	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('category')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>
@endsection