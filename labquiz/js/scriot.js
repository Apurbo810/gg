function ajax(){
    let form = document.getElementById("register-form");
    let formData = new FormData(form);
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/registationcheck.php', true);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('show').innerHTML = this.responseText
        }
    }

    xhttp.send(formData);
}   
