$(function(){
            $(".on").on("click", function(){
                $("#show").fadeIn(500);
            })
            $(".off").on("click", function(){
                $("#show").fadeOut(500);
            })
        })

$(function(){
    $("#showclick").on("click", function(){
        $("#showdiv").fadeToggle(500);
    })
})