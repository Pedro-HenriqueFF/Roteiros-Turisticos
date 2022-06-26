// Formulario Sugestao variaveis

var btn_plus_sugest = document.getElementById('btn_plus_sugest');
var btn_minor_sugest = document.getElementById('btn_minor_sugest');
var div_2_sugest = document.getElementById("div_2_sugest");
var div_3_sugest = document.getElementById("div_3_sugest");

// Formulario Notificacao variaveis

var btn_plus_notif = document.getElementById('btn_plus_notif');
var btn_minor_notif = document.getElementById('btn_minor_notif');
var div_2_notif = document.getElementById("div_2_notif");
var div_3_notif = document.getElementById("div_3_notif");

// Formulario Sugestao eventos dos botoes

btn_plus_sugest.addEventListener("click", function(){
    if (div_2_sugest.classList.contains('hide')){
        div_2_sugest.classList.toggle('hide');
        btn_minor_sugest.classList.toggle('hide');
    }
    else{
        div_3_sugest.classList.toggle('hide');
        btn_plus_sugest.classList.toggle('hide');
    }
    
 
});

btn_minor_sugest.addEventListener("click", function(){
    if (!div_3_sugest.classList.contains('hide')){
        div_3_sugest.classList.toggle('hide');
        div_3_sugest.children[0].selectedIndex = 0;
        btn_plus_sugest.classList.toggle('hide');
    }
    else{
        div_2_sugest.classList.toggle('hide');
        div_2_sugest.children[0].selectedIndex = 0;
        btn_minor_sugest.classList.toggle('hide');
    }
});

// Formulario Notificacao eventos dos botoes

btn_plus_notif.addEventListener("click", function(){
    if (div_2_notif.classList.contains('hide')){
        div_2_notif.classList.toggle('hide');
        btn_minor_notif.classList.toggle('hide');
    }
    else{
        div_3_notif.classList.toggle('hide');
        btn_plus_notif.classList.toggle('hide');
    }
    
 
});

btn_minor_notif.addEventListener("click", function(){
    if (!div_3_notif.classList.contains('hide')){
        div_3_notif.classList.toggle('hide');
        div_3_notif.children[0].selectedIndex = 0;
        btn_plus_notif.classList.toggle('hide');
    }
    else{
        div_2_notif.classList.toggle('hide');
        div_2_notif.children[0].selectedIndex = 0;
        btn_minor_notif.classList.toggle('hide');
    }
});
