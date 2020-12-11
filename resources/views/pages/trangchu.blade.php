@extends('layout.index')
@include('layout.main')
@section('content')

<!-- Page Content -->
<!-- Page Content -->

  <div class="container" id="post">


        {{-- @include('layout.slideshow') --}}

    <div class="row main-left">

    <div class="container-home" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:black;">
                    <h2 style="margin-top:0px; margin-bottom:0px;">POSTS</h2>
                    <div class="container">
                    </div>
                </div>
                <div>
              <form class="navbar-form navbar-left" role="search" action="search" method="POST" style="margin-top: 11px">
                @csrf
                <div class="form-group" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="keyword" class="form-control" placeholder="Search" style="font-size: 14px">
                </div>
                <div class="form-group">

                    <select class="form-control" name="category" style="color: blu; font-size: 14px">
                        <option value='0' selected="selected">Tất cả thể loại</option>
                        @foreach($category as $tl)

                            <option value={{ $tl->id }}>{{ $tl->title }}</option>

                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="font-size: 14px">Tìm kiếm</button>
            </form>
                </div>

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
           <div class="post" style=" padding: 10px 10px 10px 10px; font-size: 18px">
               <div>
                @include('layout.post')
                </div>
            <!-- Show Post -->
                @include('layout.showpost')


            <div class="pagination" style=" width: 100%">
            {!! $posthome->links('vendor.pagination.bootstrap-4') !!}
        </div>


    </div>
    <!-- /.row -->
    </div>
  </div>
  </div>
    </div>
  </div>

<!-- end Page Content -->
@endsection
