$('#onregister').click(() => {
    var registerObj = {
        'data1' : regfirstname.value,
        'data2' : reglastname.value,
        'data3' : regusername.value,
        'data4' : regpassword.value,
        'data5' : regconfirm.value,
        'registerTrigger' : true
    }
    validateRegistration(registerObj);
})

function validateRegistration(registerObj) {
    if(!registerObj.data1 || !registerObj.data3 || !registerObj.data3 || !registerObj.data4 || !registerObj.data5) { 
        alert("Empty fields please try again.");
        return false;
    } else if(registerObj.data4 != registerObj.data5) {
        alert("Mismtach password");
        return false;
    }else {
        commitPromiseall(registerObj)
    }
}

async function commitPromiseall(registerObj) {
    await Promise.all([__construct(registerObj)]); //Calling multiple function
}

async function __construct(registerObj) {
    const promise = new Promise((resolve) => {
        registrationRequest(registerObj, resolve);
    })
    await promise.then(response => {
        console.log(response);
    })
}

function registrationRequest(registerObj, resolve) {
    //request 
    $.post(app + helper + "/postHelper.php", registerObj, (response) => {
        resolve(response);
    })
}
