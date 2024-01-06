const password = document.getElementById('c_pass');
const iconn = document.getElementById('iconn');

function showHide(){
    if(password.type === 'password'){
        password.setAttribute('type','text');
        iconn.classList.add('hide')
    }
    else{
    password.setAttribute("type","password");
    iconn.classList.remove("hide")
    }
}
