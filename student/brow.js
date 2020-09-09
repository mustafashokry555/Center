let year = $("#year");
let search = $("#search");


year.change(function(){
    ajax(search.val(), year.val());
});


search.keyup(function () { 
    ajax(search.val(), year.val());
});


function ajax (input1, input2)
{
    $.ajax({
        url: "brows.php",
        method: "POST",
        dataType: "text",
        data: {
            search: input1,
            year: input2
        },
        success: function (response) {
            document.getElementById("tBody").innerHTML=response;
        }
    });
}