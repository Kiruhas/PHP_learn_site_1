var auth_form = document.getElementById('auth_form');
var auth_btn = document.getElementById('auth_btn');

var reg_form = document.getElementById('reg_form');
var reg_btn = document.getElementById('reg_btn');

auth_btn.onclick = function(){
    if (reg_form.classList.contains('active')){
        reg_form.classList.remove('active');
        auth_form.classList.toggle('active');
    } else {
        auth_form.classList.toggle('active');
    }
    return false;
};

reg_btn.onclick = function(){
    if (auth_form.classList.contains('active')){
        auth_form.classList.remove('active');
        reg_form.classList.toggle('active');
    } else {
        reg_form.classList.toggle('active');
    }
    return false;
};


