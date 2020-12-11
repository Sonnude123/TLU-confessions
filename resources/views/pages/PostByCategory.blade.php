@extends('layout.index')

@section('content')

<!-- Page Content -->
<!-- Page Content -->
<div class="container" style="font-size: 14px">

 <div class="space20"></div>

    <div class="row main-left">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="margin-top:0px; margin-bottom:0px;">Thể Loại: {{$categoryPost->title}}</h2>

                    @include('layout.post')
                </div>

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
            <div class="chitiet" style="margin: 5px 5px 5px 5px; ">
                @foreach($post as $post)
                    <hr>
                    <h4>TLU Confession</h4>
                    <a " href="chitietbaipost/{{$post->id}}"><b>#{{ $post->id }}:</b> {{ $post->title }}</a>
                    <p>{!! $post->content !!}</p>
                    <!-- con -->
                    <!-- <hr>
                <p>2 like</p>
                <hr> -->
                   
                    
                @include('layout.like')
                
                @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection
