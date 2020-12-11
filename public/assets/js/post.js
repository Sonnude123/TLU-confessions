

$(document).ready(function(){
    //like
    $(document).on('click', '.btn-like', function(){
      var idPost = $(this).val();
      
        $.get('like/'+idPost,function(data){
          $("#likep"+idPost).html(data);
        });
        $.get('dadislike/'+idPost,function(data){
          $("#dislikep"+idPost).html(data);
      });
    });
  
    $(document).on('click', '.btn-dalike', function(){
      var idPost = $(this).val();
     
      $.get('dalike/'+idPost,function(data){
        
        $("#likep"+idPost).html(data);
      });
    });
    
    //dislike
    $(document).on('click','.btn-dislike', function(){
      
        var idPost = $(this).val();
        $.get('dislike/'+idPost,function(data){
            $("#dislikep"+idPost).html(data);
        });
        $.get('dalike/'+idPost,function(data){
            $("#likep"+idPost).html(data);
        });
    });

    $(document).on('click','.btn-dadislike', function(){
      var idPost = $(this).val();
      $.get('dadislike/'+idPost,function(data){
        
          $("#dislikep"+idPost).html(data);
      });
    });

    //like comment
    $(document).on('click', '.btn-likecm', function(){
      var idComment = $(this).val();
    
        $.get('likecomment/'+idComment,function(data){
          $("#like"+idComment).html(data);
        });
        $.get('dadislikecomment/'+idComment,function(data){
          $("#dislike"+idComment).html(data);
        });
    });
  
    $(document).on('click', '.btn-dalikecm', function(){
      var idComment = $(this).val();
   
      $.get('dalikecomment/'+idComment,function(data){
        $("#like"+idComment).html(data);
      });
    });

     //dislike comment
    $(document).on('click', '.btn-dislikecm', function(){
      var idComment = $(this).val();
        $.get('dislikecomment/'+idComment,function(data){
          $("#dislike"+idComment).html(data);
        });
        $.get('dalikecomment/'+idComment,function(data){
          $("#like"+idComment).html(data);
        });
    });
  
    $(document).on('click', '.btn-dadislikecm', function(){
      var idComment = $(this).val();
      $.get('dadislikecomment/'+idComment,function(data){
        $("#dislike"+idComment).html(data);
      });
     });

      //like rep comment
    $(document).on('click', '.btn-likecm-rep', function(){
      var idComment = $(this).val();
    
        $.get('likecommentrep/'+idComment,function(data){
          $("#like"+idComment).html(data);
        });
        $.get('dadislikecomment/'+idComment,function(data){
          $("#dislike"+idComment).html(data);
        });
    });

    $(document).on('click', '.btn-dalikecm-rep', function(){
      var idComment = $(this).val();

      $.get('dalikecommentrep/'+idComment,function(data){
        $("#like"+idComment).html(data);
      });
    });

    //dislike rep comment
    $(document).on('click', '.btn-dislikecm-rep', function(){
      var idComment = $(this).val();
        $.get('dislikecommentrep/'+idComment,function(data){
          $("#dislike"+idComment).html(data);
        });
        $.get('dalikecomment/'+idComment,function(data){
          $("#like"+idComment).html(data);
        });
    });
  
    $(document).on('click', '.btn-dadislikecm-rep', function(){
      var idComment = $(this).val();
      $.get('dadislikecommentrep/'+idComment,function(data){
        $("#dislike"+idComment).html(data);
      });
     });

  $(document).on('click', '.btn-dadislike', function () {
    var idPost = $(this).val();
    $.get('dadislike/' + idPost, function (data) {
      $("#dislike" + idPost).html(data);
    });
  });


  
  //vote

  $('.btn-vote').click(function (e) {
   
    e.preventDefault();
    var idpos = $(this).val()
    var pointVote = $('#point'+ idpos).val()

    $.ajax({
      type: 'POST',
      url: 'vote/'+idpos,
      dataType: 'json',
      data:
    
      $('#myForm'+idpos).serialize(),
      success: function (data) {
        $('#vt'+idpos).html(data.tb + '/5');
        $('#resultVote'+idpos).html(data.sl);
        $('#exampleModal'+idpos).modal('hide');
        // $('#btn-'+idpos).removeAttr('style');
        $('#btn-'+idpos).removeClass('btnhover')
          console.log('Submission was successful.')
      },
      error: function (data) {
        console.log('An error occurred.');

      },
    });
  });

});

  