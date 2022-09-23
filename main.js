
    let modal = document.getElementById('miModal');
    let flex = document.getElementById('flex');
    let abrir = document.getElementById('almacen');
    let cerrar = document.getElementById('close');

    abrir.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    cerrar.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(e) {
        console.log(e.target);
        if (e.target == flex) {
            modal.style.display = 'none';
    }
});




function calcular(){
    v = document.getElementById('montoVoucher').value;
    b = document.getElementById('montoBanco').value;

    total=((100*b)/v);
    total=100-total; 

    porcentIzi.value=parseFloat(total.toFixed(2))+"%";
}

function alargar(){
    let body = document.getElementById('body-general').value;

    


}