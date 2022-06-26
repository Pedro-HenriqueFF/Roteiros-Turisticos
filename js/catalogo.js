var btn_add = document.getElementsByClassName('btn-roteiro');
var btn_dim = document.getElementsByClassName('btn-dimiss');

for (let index = 0; index < btn_add.length; index++) {
    let button = btn_add[index];
    button.addEventListener("click", function(){
        var id = button.id.split("_").pop();
        var img = document.getElementById('img_'+id);
        var btn = document.getElementById('dimRoteiro_'+id);
        if (!img.classList.contains('border-success')){
            img.classList.add('border-success');
            btn.removeAttribute('disabled');
        }
    });
}

for (let index = 0; index < btn_dim.length; index++) {
    let button = btn_dim[index];
    button.addEventListener("click", function(){
        var id = button.id.split("_").pop();
        var img = document.getElementById('img_'+id);
        if (img.classList.contains('border-success')){
            img.classList.remove('border-success');
            button.setAttribute('disabled', 'disabled');
        }
    });
}