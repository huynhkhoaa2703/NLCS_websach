@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê tên sản phẩm
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Hình ảnh</th>
              <th>Tên bộ sách</th>
              <th>Tên tác giả</th>
              {{-- <th>Hiển thị</th> --}}
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_product as $all_product => $p)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$p->ten}}</td>
              <td>{{$p->gia}}</td>
              <td><img src = "public/up/product/{{$p->hinhanh}}" style = "width: 130px; height: 200px; object-fit: cover;"></td>
              <td>{{$p->ten_bo_sach}}</td>
              <td>{{$p->ten_tac_gia}}</td>
              <td>
                <span class="text-ellipsis">
                  {{-- <?php
                    if($cate_pro->tinhtrang_sanpham = 0) {
                      echo 'Ẩn';
                    }else {
                      echo 'Hiển thị';
                    }
                  ?> --}}
                </span></td>
              <td>
                <a href="{{URL::to('/edit-product/'.$p->id)}}" class="active" ui-toggle-class="">
                  <i class="fas fa-edit text-success text-active"></i>  
                </a>
                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')" href="{{URL::to('/delete-product/'.$p->id)}}" class="active" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          {{-- <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div> --}}
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection