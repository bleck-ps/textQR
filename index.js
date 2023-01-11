const textver = document.getElementById('verify');
const buttonver = document.getElementById('verpass');
const passtext = document.getElementById('passtext');
const alertpass = document.getElementById('alertpass');

const cobru = document.getElementById('cobrooo');
const monto = document.getElementById('monto');

var idtar = undefined;

let tarjeta1 = 750;
let tarjeta2 = 1500;

buttonver.addEventListener('click',function(){
    var password = document.getElementById('verify').value;
    if (password == '123'){
        passtext.style.display = 'none';
        summon();
    } else {
        alertpass.style.display = 'block';
    }
});
 function summon() {
    cobru.style.display = 'flex';
    if(idtar == 13323) {
        monto.textContent = tarjeta1;
    } else if(idtar == 13343) {
        monto.textContent = tarjeta2;
    }
 }
