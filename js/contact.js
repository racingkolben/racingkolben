$(document).ready(function(){

    $(function(){
        $(".chzn-select").chosen();
    });


    $("#contact_form_container").submit(function(event){

        $("#status").css("visibility","hidden");

        event.preventDefault();
        var url = $(this).attr("action");

        var postData = {
            membername:$("#membername").val(),
            name : $("#name").val(),
            email : $("#email").val(),
            phone : $("#phone").val(),
            message : $("#message").val()
        };

        postData = JSON.stringify(postData);

        if(postData.length !==0){

            $("#send_button").attr("disabled",true);
            $("#loader").css( "visibility","visible");

            function restore(){

                $("#loader").css( "visibility","hidden");
                $("#send_button").removeAttr("disabled");
            }

            $.post(url,{
                postData:postData
            },function(result){
                if(result){
                    $("#status").css("visibility","visible").html("Message Sent");
                    restore();
                    setTimeout(function(){
                        $("#status").css("visibility","hidden");
                    }, 2000);
                    $('#contact_form_container').find('form')[0].reset();
                }else{
                    $("#status").css("visibility","visible").html("Try Resending");
                    restore();
                }
            });
        }
    });
});
