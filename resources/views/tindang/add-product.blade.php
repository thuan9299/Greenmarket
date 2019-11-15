@extends('layouts.main_admin')
@section('content')
<form action="{{ route('product.add') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="pro_name" class="form-control" value="" placeholder="">
	<div class="form-group">
		<img src="" style="width: 200px; height: 150px">
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="pro_image" value="" class="form-control">
	</div>
	<div class="form-group">
		<img src="" style="width: 200px; height: 150px">
	</div>
	<div class="form-group">
		<label>Image Thumb</label>
		<input type="file" name="pro_image_thumb" value="" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Price</label>
		<input type="text" name="pro_price" class="form-control" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Address</label>
		<input type="text" name="pro_address" class="form-control" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Date</label>
		<input type="date" name="pro_date" class="form-control" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Description</label>
		<textarea name="pro_description" rows="10" class="form-control">
		</textarea>
	</div>
	<div class="form-group">
		<label for="">view</label>
		<input type="text" name="pro_view" value="" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="" name="pro_status"> Status
		</label>
    </div>
    <div class="checkbox">
		<label>
			<input type="checkbox" value="0" name="pro_active"> Active
		</label>
    </div>
	<div class="form-group">
		<label for="">Danh mục</label>
		<select name="pro_cate_id" class="form-control">
			@foreach($cates as $item)
			<option value="{{$item->id}}">{{$item->cate_name}}</option>
			@endforeach
		</select>
	</div>
		<div class="form-group">
		<label for="">Member</label>
		<select name="pro_mem_id" class="form-control">
			@foreach($member as $item)
			<option value="{{$item->id}}">{{$item->mem_name}}</option>
			@endforeach
		</select>
	</div>
	
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('product')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>

@endsection