@extends('layouts.main_admin')
@section('content')
<form action="{{route('product.edit',['id' => $model->id])}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="pro_name" class="form-control" value="{{ $model->pro_name }}" placeholder="">
	<div class="form-group">
		<img src="{{ $model->pro_image }}" style="width: 200px; height: 150px">
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="pro_image" value="{{ $model->pro_image }}" class="form-control">
	</div>
	<div class="form-group">
		<img src="{{ $model->pro_image_thumb }}" style="width: 200px; height: 150px">
	</div>
	<div class="form-group">
		<label>Image-thumb</label>
		<input type="file" name="pro_image_thumb" value="{{ $model->pro_image_thumb }}" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Price</label>
		<input type="text" name="pro_price" class="form-control" value="{{ $model->pro_price }}" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Address</label>
		<input type="text" name="pro_address" class="form-control" value="{{ $model->pro_address }}" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Date</label>
		<input type="date" name="pro_date" class="form-control" value="{{ $model->pro_date }}" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Description</label>
		<textarea id="mota" name="pro_description" rows="10" class="form-control">
			{{ $model->pro_description }}
		</textarea>
	</div>
	<div class="form-group">
		<label for="">view</label>
		<input type="text" name="pro_view" value="{{ $model->pro_view }}" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" 
             @if($model->pro_active)
	    		checked 
	    		@endif
			 name="pro_active" value="1"> Active
		</label>
    </div>
	<div class="form-group">
		<label for="">Category</label>
		<select name="pro_cate_id" class="form-control">
			@foreach($cates as $item)
			<option value="{{$item->id}}"
                @if($item->id == $model->pro_cate_id)
					selected
					@endif
				>{{$item->cate_name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Member</label>
		<select name="pro_cate_id" class="form-control">
			@foreach($member as $item)
			<option value="{{$item->id}}"
                @if($item->id == $model->pro_member_id)
					selected
					@endif
				>{{$item->mem_name}}</option>
			@endforeach
		</select>
	</div>
	
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('product')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>

<script src="ckeditor/ckeditor.js"></script>
<script>
	$(function){
		CKEDITOR.replace('mota');
	}

</script>
@endsection