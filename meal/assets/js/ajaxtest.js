;(function($){
    $(document).ready(function(){
        //alert(urls.ajaxurl);

        $("#ajaxsubmit").on('click', function(){
            var info = $("#info").val();
            var nonce = $("#ajaxtest").val();
            console.log(info);
            $.post(urls.ajaxurl,{
                action: "ajaxtest",
                info: info,
                secruity: nonce
            },function(data){
                console.log(data);
            });
            return false;
        });
    });
})(jQuery);