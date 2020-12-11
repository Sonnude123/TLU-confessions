@extends('layout.index')

@section('content')

<!-- Page Content -->
<!-- Page Content -->
<div class="container">



    <div class="space20"></div>


    <div class="row main-left">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"  style=" color:black; ">
                    <h2 style="margin-top:0px; margin-bottom:0px;">Top Vote</h2>
                    <div class="container">
                     
                    </div>
                 
                </div>

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
<div class="show" style="margin: 5px 5px 5px 5px;font-size: 14px">
                @include('layout.showpost')
 </div>                      
                
            </div>
            {!! $posthome->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- end Page Content -->
@endsection
