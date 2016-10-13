
$(function liveSearch (){
    $('#result').hide();
    $(".search").keyup(function(){
        var searchID =  $(this).val();
      //  alert(searchID);

        var dataString = '/livesearch/'+searchID;
        var agrs = {
            url : dataString,
            type : "get",
            cache: false,
            data: dataString,
            beforeSend: function() {
               $('#loader').html('<img src="asset("images/loading.gif")"').show();
            },
            success : function(data){
              $('#result').html(data).show();
            },
            error: function(data){
              $('#result').html(null).show();
            }

        };

        $.ajax(agrs);
    })
});
