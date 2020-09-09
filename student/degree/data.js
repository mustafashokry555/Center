let year = $("#year");
let search = $("#search");
var date = $("#history");

year.change(function(){
    show();
});


date.change(function(){
    show();
});

search.keyup(function () { 
    show();
});


function show()
{
    $.ajax({
        url: "brows.php",
        method: "POST",
        dataType: "text",
        data: {
            search: search.val(),
            year: year.val(),
            date:date.val(),
        },
        success: function (response) {
            document.getElementById("tBody").innerHTML=response;
        }
    });
}



function update(name,cell,e)
{   
    $.ajax({
        url: "update.php",
        method: "POST",
        dataType: "text",
        data: {
            name:name,
            date:date.val(),
            cell:cell,
            value:e.value
        },
        success: function (response) {
            console.log(response);
        }
    });
}




function check(name,cell,e)
{   
    let value = 0;
    if(e.checked)
        value=1;
    $.ajax({
        url: "update.php",
        method: "POST",
        dataType: "text",
        data: {
            name:name,
            date:date.val(),
            cell:cell,
            value:value
        },
        success: function (response) {
            console.log(response);
        }
    });
}