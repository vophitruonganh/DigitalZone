
$(function(){
    $(".search").keyup(function(){
        var searchID =  $(this).val();

        var dataString = '/product/livesearch/'+searchID;

        var agrs = {
            url : dataString,
            type : "post",
            cache: false,
            data: dataString ,
            success : function(html){
                $('#result').html(html).show();
                
            },

        };

        $.ajax(agrs);
    })
});
