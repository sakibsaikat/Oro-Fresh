let button = document.getElementById("test");
let form = document.getElementById("form1"); 
let msg = document.getElementById("response-msg");



button.addEventListener("click",function(roni){
    roni.preventDefault();
    sendValue();
})


function sendValue(){

    let xhr = new XMLHttpRequest();
    xhr.open('POST','check.php',true);
    xhr.onload = function(){

        if(this.status===200){
            let res = this.responseText;
            
            

            if(res.trim()=="ok"){
                console.log("oops!")
            }
            

            
            // msg.innerText = res;
            //document.write(res);
        }

    };

    let full_form = new FormData(form);
    xhr.send(full_form);

}