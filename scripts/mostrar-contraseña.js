
// Muestra la contraseña al pulsar el botón de ver contraseña

// Selecciono el input de password y el botón de ver contraseña
let password = document.getElementById('password');
let viewPassword = document.getElementById('ver-contraseña');

// Creo una variable para saber si se ha pulsado el botón o no
let click = false;

// Cambia el tipo de input de password a text y viceversa al pulsar el botón
viewPassword.addEventListener('click', (e)=>{
if(!click){
    password.type = 'text'
    click = true
}else if(click){
    password.type = 'password'
    click = false
}
});
