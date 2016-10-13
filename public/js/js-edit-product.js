$(function(){
    $('#btnCreateProduct').click(function(){
        var product_name =  $('#editProductName').val();
        var product_url = $('#editProductUrl').val();
        var product_avata =  $('#editProductAvata').val();
        var product_price = $('#editProductPrice').val();
        var product_group =  $('#editProductGroup').val();
        var product_trademark = $('#editProductTrademark').val();
        var product_feature =  $('#editProductFeature').val();
        var product_sale = $('#editProductSale').val();
        var product_detail =  $('#editProductDetail').val();

        var dataString = 'product/updateitem/'+product_name+'/'+product_url+'/'+product_avata+'/'+product_price+'/'+product_group+'/'+product_trademark+'/'+product_feature+'/'+product_sale+'/'+product_detail;

        alert(dataString);
        var agrs = {
            url : dataString,
            type : 'post',
            cache: true,
            data: dataString ,
            success : function(html){
               // $("#resultUpdate").html(html).show();
               alert(html);
            },
        };

        $.ajax(agrs); // running ajax
    })
});
