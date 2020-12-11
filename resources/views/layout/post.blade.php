<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="font-size: 16px;">
                        Let's Post
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title textmodal" id="exampleModalLabel" style="color:black; font-size: 18px">Post</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {{-- Start Popup --}}
                                <form id="Mypost" name="Mypost" action="Post" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-body">

                                        <!-- Category -->
                                        {{-- <div class="mb-3"> --}}
                                        <select class="custom-select mr-sm-2" style="color:black;font-size: 14px" id="category"
                                            name="category" >
                                            <option selected value="0">Select Category</option>
                                            
                                            @foreach($category as $tl)
                                        
                                                <option value="{{ $tl->id }}">{{ $tl->title }}</option>
                                            
                                            @endforeach
                                        </select>

                                        {{-- </div> --}}

                                        <!-- end  -->
                                        <div class="form-group">
                                            <label class="textmodal" style="color:black">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" style="color:black;font-size: 14px">

                                            <span id="titleloc"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" style="color:black">Nội dung</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" style="color:black;font-size: 14px"></textarea>
                                            {{-- <textarea id="demo" class="form-control ckeditor" name="content" id="content" rows = "3"></textarea> --}}

                                            <span id="show-error"></span>
                                        </div>


                                    </div>
                                    <!-- ENDPOPUP -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal" style="color:black;font-size: 14px">Close</button>
                                        <button id="btn-save" type="submit" class="btn btn-primary" style="color:black;font-size: 14px">Post</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->