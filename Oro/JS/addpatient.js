let form = document.getElementById("patient-form");
let submit_btn = document.getElementById("submit-btn");
let msg_btn = document.getElementById("msg-btn");


submit_btn.addEventListener("click",function(e){
    e.preventDefault();
    addPatient();
});

function addPatient(){

    const xhr = new XMLHttpRequest();
    xhr.open('POST','addpatient.php',true);
    xhr.getResponseHeader('Content-type','application-x-www-form-urlencoded');
    xhr.onload = function(){
        if(this.status===200){
            msg_btn.click();
        }
    };
    let formdata = new FormData(form);
    xhr.send(formdata);

}
