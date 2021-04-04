var regfirstname = document.getElementById("txtfirstname");
var reglastname = document.getElementById("txtlastname");
var regusername = document.getElementById("txtusername");
var regpassword = document.getElementById("txtpassword");
var regconfirm = document.getElementById("txtconfirm");

const app = "app/";
const helper = "helpers";

regfirstname.addEventListener("keyup", event => {
    if(event.keyCode === 13) 
    {
        $('#onregister').click();
    }
})
reglastname.addEventListener("keyup", event => {
    if(event.keyCode === 13) 
    {
        $('#onregister').click();
    }
})
regusername.addEventListener("keyup", event => {
    if(event.keyCode === 13) 
    {
        $('#onregister').click();
    }
})
regpassword.addEventListener("keyup", event => {
    if(event.keyCode === 13) 
    {
        $('#onregister').click();
    }
})
regconfirm.addEventListener("keyup", event => {
    if(event.keyCode === 13) 
    {
        $('#onregister').click();
    }
})