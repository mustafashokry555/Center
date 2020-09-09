//regular expression for full name & password &id
const nameRegax = /^[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}\s[\u0620-\u063A\u0641-\u064A]{2,10}$/;
const phoneRegax = /^01[0125][0-9]{8}$/;
const emptyRegax = /^$/;


//check validation on keyup
let name = $("[name='name']");
let phone = $("[name='phone']");
let fPhone = $("[name='fPhone']");

name.keyup(function(){valid(this ,nameRegax)});
phone.keyup(function(){valid(this ,phoneRegax)});
fPhone.keyup(function(){valid(this ,phoneRegax);});

let allVAlid = true;

function valid(input ,regax)
{
    if(regax.test(input.value) == false && emptyRegax.test(input.value) == false)
    {
        input.style.border = "solid 1.5px red";
        allVAlid = false;
    }
    else
    {
        input.style.border = "solid 1.5px green";
        allVAlid = true;
    }
}


$("#addStudents").click(function(){
    
    let year = $("#year").val();
    if(year == 0)
    {
        alert("من فضلك اختار السنه الدراسيه.");
    }

    else if(!allVAlid)
    {
        alert("من فضلك ادخل بيانات صحيحه .");
    }
    else 
    {

        let newNames = [];
        let newPhones = [];
        let newfPhones = [];

        for(let i=0; i<name.length; i++)
        {
                newNames.push(name[i].value);
                newPhones.push(phone[i].value);
                newfPhones.push(fPhone[i].value);
        }
        
        $.ajax({
            url: "add.php",
            method: "POST",
            dataType: "text",
            data: {
                names: newNames,
                phones: newPhones,
                fPhones: newfPhones,
                yy: year
            },
            success: function (response) {
                alert(response);
            }
        });
    }
});