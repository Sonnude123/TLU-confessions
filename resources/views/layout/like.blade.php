<table class="table table-striped table-bordered table-hover">
    <tr align="center" style="background-color: pink; font-size: 12px">
      
        <th id="likep{{ $post->id }}">

            @if(likePost($post->id) == true )
            <?php echo countLike($post->id)?>
            <button id="btnLike" name="btnLike" value="{{ $post->id }}" class="btn btn-default btn-like" style=" font-size:14px"
                >
         Like
            </button>

            @else
            <?php echo countLike($post->id) ?> 
            <button id="btnDaLike" name="btnDaLike" value="{{ $post->id }}" class="btn btn-primary btn-dalike" style=" font-size:14px">
                {{-- <p id="like" name="like"> --}}
                 Like
            </button>

            @endif

        </th>
        <th id="dislikep{{ $post->id }}">

            @if(disLikePost($post->id) == true)
            <?php echo countDisLike($post->id) ?>
            <button id="btndisLike" name="btndisLike" value="{{ $post->id }}" class="btn btn-default btn-dislike" style=" font-size:14px">
              
                 DisLike
            </button>

            @else
            <?php echo countDisLike($post->id) ?>
            <button id="btnDadisLike" name="btnDadisLike" value="{{ $post->id }}" class="btn btn-primary btn-dadislike" style=" font-size:14px">
                DisLike
            </button>

            @endif

        </th>
        
        <th>
            <a href="chitietbaipost/{{$post->id}}"><button type="button" class="btn btn-primary btn-comment" style=" font-size:14px">
                Comment (<?php echo countComment($post->id) ?>)</button>
            </a>
        </th>
        <!-- //  VOTE  -->
        <th>
            @if(checkVote($post->id) == true)
                <!-- Button trigger modal -->
                <span id="vt{{$post->id}}">  
                    {{number_format(vote($post->id) ,2)}}/ 5
                </span>  
                <button  type="button" class="btn btn-primary" data-toggle="modal" id="btn-{{$post->id}}"
                    data-target="#exampleModal{{ $post->id }}" style=" font-size:14px">
                 Vote  (<span id="resultVote{{$post->id}}"><?php echo countVote($post->id) ?></span>)
                </button>
            @else 
            
                <!-- Button trigger modal -->
                <span id="vt{{$post->id}}">  
                    {{number_format(vote($post->id) ,2)}}/ 5
                </span>  
                <button  type="button" class="btn btn-primary btnhover" data-toggle="modal" id="btn-{{$post->id}}"
                       
                    data-target="#exampleModal{{ $post->id }}" style=" font-size:14px" >
                 Vote  (<span id="resultVote{{$post->id}}"><?php echo countVote($post->id) ?></span>)
                </button>
            @endif
                
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $post->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                            <form action="" method="post" id="myForm{{$post->id}}">
                                
                                @csrf
                                <div class="modal-body">
                                    <div class="container" style=" font-size:14px">

                                        <label>Vote: </label>
                                        <select name="point" id="point{{$post->id}}">

                                            <option value="1">{{ 1 }}</option>
                                            <option value="2">{{ 2 }}</option>
                                            <option value="3">{{ 3 }}</option>
                                            <option value="4">{{ 4 }}</option>
                                            <option value="5">{{ 5 }}</option>

                                        </select>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style=" font-size:14px">Close</button>
                                    <button   type="submit" value="{{$post->id}}" 
                                        class="btn btn-primary btn-vote" style=" font-size:14px"
                                        >Send</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>


        </th>

    </tr>
</table>
