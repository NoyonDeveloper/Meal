;(function($){
    $(document).ready(function(){
        $("#reservnow").on('click',function(){
            $.post(mealurl.ajaxurl,{
            action:'reservation',
            name:$("#name").val(),
            email:$("#email").val(),
            phone:$("#phone").val(),
            persons:$("#persons").val(),
            date:$("#date").val(),
            time:$("#time").val(),
            rev:$("#rev").val()
        },function(data){
            if('Duplacted' == data){
                alert('You have alredy placed a request for this reservation. No need to submit Agin');
            }else{
                $("#paynow").attr('href', data);
                $("#reservnow").hide();
                $("#paynow").show();
            }
        });
        return false;
        });
        
    });
})(jQuery);