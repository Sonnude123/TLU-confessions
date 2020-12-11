@extends('layout.index')

@section('content')
<!-- Page Content -->
<!-- Page Content -->
<div class="container">



    <div class="space20"></div>


    <div class="row main-left">
        <?php
            function changecolor($str, $tukhoa){

                return str_replace($tukhoa, "<span style='color:red';>$tukhoa</span>",$str);
            }
        ?>

        <div class="col-md-12" style="font-size: 14px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="margin-top:0px; margin-bottom:0px;">Kết quả: {{$keyword}}</h2>
                </div>
                @if(count($post) == 0)
                    <h4> Không có kết quả</h4> 
                @else 
                    @foreach($post as $post)
                    <h4 style="margin-left: 5px">TLU Confession</h4>
                    <div class="postsearch" style="margin: 5px 5px 5px 5px">
                    <p><b>#{{ $post->id }}: {!! changecolor($post->title,$keyword) !!}</b></p>
                    <p>{!! changecolor($post->content,$keyword) !!}</p>
                    <!-- con -->
                    </div>
                    @include('layout.like')
                    <hr>
                @endforeach
                @endif
                

            </div>

        </div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection
