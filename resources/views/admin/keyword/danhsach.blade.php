@extends('admin.layout.index')

@section('content')
  <!-- Page Content -->
<div id="page-wrapper">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">Keyword
                   <small>Danh sách</small>
               </h1>
           </div>
           <!-- /.col-lg-12 -->
           @if(session()->get('success'))
               <div class="alert alert-success">
                   {{ session()->get('success') }}
               </div>
           @endif
           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
               <thead>
                   <tr >
                       <th>ID</th>
                       <th>Nội dung từ khóa</th>
                       <th>Ngày tạo</th>
                       <th>Xóa</th>
                       <th>Sửa</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($keyword as $tk)
                        <tr class="even gradeC">
                            <td>{{$tk->id}}</td>
                            <td>{{$tk->content}}</td>
                            <td>{{$tk->created_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/keyword/xoa/{{$tk->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/keyword/sua/{{$tk->id}}">Sửa</a></td>
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