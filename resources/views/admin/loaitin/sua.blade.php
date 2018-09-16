@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

                {!! errAlert( $errors->all() ) !!}                
                {!! message( session('msg') ) !!}

                <form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>                    

                    <div class="form-group">
                        <label>Thể Loại</label>                        
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $item)                            
                                <option 
                                    @if($loaitin->idTheLoai == $item->id) {{"selected"}} @endif
                                    value="{{$item->id}}">{{$item->Ten}}                                    
                                </option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên loại tin</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên loại tin" value="{{ $loaitin->Ten }}" />
                    </div>
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection