@extends('layouts.main_admin')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Product</h3>
        <div class="filter">
          
        </div>

        <div class="box-tools">
          <form action="" method="get">
            <div class="input-group input-group-sm hidden-xs" style="width: 250px;">
              <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <form action="{{ url('myproductsDeleteAll') }}" method="post">
          @csrf
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th><input type="checkbox" id="master"></th>
                  <th >ID</th>
                  <th >Name</th>
                  <th >Images</th>
                  <th >Image-thumb</th>
                  <th >Price</th>
                  <th >Address</th>
                  <th >Date</th>
                  <th >Description</th>
                  <th >View</th>
                  <th >Status</th>
                  <th >Member</th>
                  <th >Category</th>
                  <th >
                      <button type="submit" onclick="return" class="btn btn-danger">Delete</button>
                  </th>
                </tr>

                @foreach($dsSanPham as $item)
                <tr>
                  <td><input type="checkbox" class="" name="del[]" value="{{$item->id}}"></td>
                  <td>{{$item->id}}</td>
                  <td>{{$item->pro_name}}</td>
                  <td>
                    <img src="{{$item->pro_image}}" width="100" >
                  </td>
                  <td>
                    <img src="{{$item->pro_image_thumb}}" width="100" >
                  </td>
                  <td>{{$item->pro_price}}</td>
                  <td>{{$item->pro_address}}</td>
                  <td>{{$item->pro_date}}</td>
                  <td>{{$item->pro_description}}</td>
                  <td>{{$item->pro_view}}</td>
                  <td>{{$item->pro_status}}</td>
                  <td>{{$item->member->mem_name}}</td>
                  <td>{{$item->category->cate_name}}</td>
                  <td>
                    <a href="{{route('product.edit', ['id' => $item->id])}}" class="btn btn-sm btn-primary" title="">Edit</a>
                    &nbsp &nbsp
                    <a href="{{route('product.remove', ['id' => $item->id])}}" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')" class="btn btn-sm btn-danger" data-url="{{ url('myproductsDeleteAll') }}">Del</a>
                    <a href="{{route('product.add')}}" class="btn btn-success">ADD</a>
                  </td>
                </tr>
                @endforeach 
                <tr>
                  <td colspan="4" class="text-center">
                    {{ $dsSanPham->links() }}
                  </td>
                </tr>
              </tbody>
            </table>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection