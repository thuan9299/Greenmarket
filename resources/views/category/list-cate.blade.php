@extends('layouts.main_admin')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Category</h3>

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
        <table class="table table-hover table-bordered">
          <tbody>
            <tr>
              <th></th>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th>
                <a href="" class="btn btn-sm btn-danger">Delete all select</a>
              </th>
              <!--  -->
            </tr>
            @foreach($dsDanhMuc as $item)
            <tr>
              <td><input type="checkbox" name=""></td>
              <td>{{$item->id}}</td>
              <td>{{$item->cate_name}}</td>
              <td>
                <a href="{{route('category.edit', ['id' => $item->id])}}"
                 class="btn btn-sm btn-primary" title="">Edit</a>
                 &nbsp &nbsp &nbsp
                 <a href="{{route('category.remove', 
                ['id' => $item->id])}}" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')" class="btn btn-sm btn-danger" title="">Del</a>
              </td>
            </tr>
            @endforeach 
            <tr>
              <td colspan="4" class="text-center">
                {{ $dsDanhMuc->links() }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection