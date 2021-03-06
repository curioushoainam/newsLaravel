@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Tin
                    <small>Danh sách</small>
                </h1>
            </div>

            {!! message( session('msg') ) !!}
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tên không dấu</th>
                        <th>Thể loại</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaitin as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->Ten}}</td>
                            <td>{{$item->TenKhongDau}}</td>
                            <td>{{$item->theloai->Ten}}</td>
                            {{-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloai/xoa/{{$item->id}}" > Delete</a></td> --}}
                            <td>
                                <form method="post" action="admin/loaitin/xoa" style="display:inline" id="theloai{{$item->id}}" onsubmit="return confirm('Bạn muốn xóa item {{$item->id}} không ?')" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input name="delID" value="{{$item->id}}" hidden>
                                    <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                                </form>
                            </td>

                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{$item->id}}">Edit</a></td>
                        </tr>
                    @endforeach                 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection