@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
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
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($theloai as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->Ten}}</td>
                            <td>{{$item->TenKhongDau}}</td>
                            {{-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td> --}}
                            <td class="center">
                                <form action="admin/theloai/xoa" method="post" onclick="return confirm('Bạn có muốn xóa #id {{$item->id}} không ?')">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="number" name="delID" value="{{$item->id}}" hidden>
                                    <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloai/sua/{{$item->id}}">Edit</a></td>
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