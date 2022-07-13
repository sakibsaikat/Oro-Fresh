
let submit_btn = document.getElementById("appointment-submit");
let msg_btn = document.getElementById("msg-btn");
let form = document.getElementById("appointment-form");

submit_btn.addEventListener("click",function(e){
    e.preventDefault();
    submit_appointment();
});


function submit_appointment(){

    const xhr = new XMLHttpRequest();
    xhr.open('POST','appointmentSend.php',true);

    xhr.onload = function(){
        if(this.status===200){
            let respon = this.responseText;
            
            if(respon.trim()=="ok"){
                msg_btn.click();
            }
           
        }
    };

    let formdetails = new FormData(form);
    xhr.send(formdetails);

}

