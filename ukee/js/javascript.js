var auth_form = document.getElementById('auth_form');
var auth_btn = document.getElementById('auth_btn');

var reg_form = document.getElementById('reg_form');
var reg_btn = document.getElementById('reg_btn');

var lk_error_auth = document.getElementById('lk_error_auth');
var lk_error_reg = document.getElementById('lk_error_reg');

if (lk_error_auth){
    auth_form.classList.add('active');
} else {
    auth_form.classList.remove('active');
}

if (lk_error_reg){
    reg_form.classList.add('active');
} else {
    reg_form.classList.remove('active');
}

auth_btn.onclick = function(){
    if (reg_form.classList.contains('active')){
        reg_form.classList.remove('active');
        auth_form.classList.toggle('active');
    } else {
        auth_form.classList.toggle('active');
    }
    removediv();
    return false;
};

reg_btn.onclick = function(){
    if (auth_form.classList.contains('active')){
        auth_form.classList.remove('active');
        reg_form.classList.toggle('active');
    } else {
        reg_form.classList.toggle('active');
    }
    removediv();
    return false;
};

function removediv() {
    if (lk_error_auth) lk_error_auth.remove();
    if (lk_error_reg) lk_error_reg.remove();
    history.pushState(null, null, document.URL.split('?')[0]);
}




