
//regular expression for full name & password &id
const nameRegax =/^[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}$/;
const passRegax=/[a-zA-Z0-9]{5,100}$/;
const idRegax = /^[0-9]{14}$/;
const phoneRegax = /^01[0125][0-9]{8}$/;


//check validation on keyup for login form
let name = $("[name='name']");

let pass = $("[name='pass']");

let id = $("[name='id']");


name.keyup(function(){valid(this ,nameRegax)});

pass.keyup(function(){valid(this ,passRegax)});

id.keyup(function(){valid(this ,idRegax)});


function valid(input ,regax)
{
    if(regax.test(input.value) == false)
    {
        input.style.border = "solid 1.5px red";
    }
    else
    {
        input.style.border = "solid 1.5px green";
    }
}


//prevent submitting the login form for wrong data for login form
/*$(".form").submit(function(e){
    if(passRegax.test(pass.val())==false || nameRegax.test(name.val())==false)
    {
        e.preventDefault();
    }
});*/


//show and hide forms
$(".addBTn").click(function() {$(".addDiv").css("display","flex")});

$(".deletBTn").click(function() {$(".deletDiv").css("display","flex")});

$(".changeBtn").click(function() {$(".changeDiv").css("display","flex")});

$("body").keyup(function(e){
    if(e.keyCode == 27)
    {
        $(".addDiv").css("display","none");
        $(".deletDiv").css("display","none");
        $(".changeDiv").css("display","none");
    }    
});

$(".close").click(function(){
    $(".deletDiv").css("display","none");
    $(".addDiv").css("display","none");
    $(".changeDiv").css("display","none");
});