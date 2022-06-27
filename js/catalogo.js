
// Controles dos botões de adicionar ao roteiro
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
            var linha = document.getElementById('table-linha_'+id);
            linha.remove();
            img.classList.remove('border-success');
            button.setAttribute('disabled', 'disabled');
        }
    });
}

// Controle do Roteiro
var btn_roteiro = document.getElementById('mostra-roteiro');

btn_roteiro.addEventListener("click", function(){
    var img_all = document.getElementsByClassName('border-success');
    if (img_all.length > 0){
        var tabela = document.getElementById('bodyTable');
        for (let i = 0; i < img_all.length; i++){
            var id = img_all[i].id.split("_").pop();
            if (tabela.querySelector('#table-linha_'+id))
                continue;
            let linha = document.createElement('tr');
            let coluna1 = document.createElement('td');
            let coluna2 = document.createElement('td');
            let coluna3 = document.createElement('td');
            linha.id = "table-linha_"+id;
            coluna1.innerHTML = "<img src='"+img_all[i].getAttribute('src')+"' class='img-thumbnail' alt='"+img_all[i].getAttribute('alt')+"' width='25%' height='25%'>";
            coluna2.innerHTML = img_all[i].getAttribute('alt');
            coluna3.innerHTML = "<button type='button' class='btn btn-sm btn-outline-danger'>Remover</button>";
            linha.appendChild(coluna1);
            linha.appendChild(coluna2);
            linha.appendChild(coluna3);
            tabela.appendChild(linha);
        }
        document.getElementById('tabela').classList.remove('hide');
        document.getElementById('msg').classList.add('hide');
    }
    else{
        document.getElementById('tabela').classList.add('hide');
        document.getElementById('msg').classList.remove('hide');
    }
});