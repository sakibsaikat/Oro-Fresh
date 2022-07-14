

let submit = document.querySelector("#submit-btn");
let form = document.querySelector("#form1");
let s_msg = document.querySelector("#success-msg");



submit.addEventListener("click",function(e){
    e.preventDefault();
    ajax_code_get();
});





function ajax_code(){

    let xhr = new XMLHttpRequest();
    xhr.open('POST','data.php',true);
    xhr.getResponseHeader('Content-type','application/x-www-form-urlencoded');
    xhr.onload = function(){

        if(this.status==200){
            let respose = this.responseText;

            if(respose.trim()=="ok"){
                s_msg.innerHTML="Submitted";
            }
        }
    };

    let formdata = new FormData(form);
    xhr.send(formdata);

}

function ajax_code_get(){

    let xhr = new XMLHttpRequest();
    xhr.open('GET','sample.txt',true);

    xhr.onload = function(){

        let respose = this.responseText;

        s_msg.innerHTML = respose;
    };


    xhr.send();

}