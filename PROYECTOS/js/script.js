// Document.getElementById("btnMenu").addEventListener("click",
//     function () {
//         let elemento =document.getElementById("navbar");
//         if (elemento.classList.contains("navbar")) {
//             elemento.classList.remove("navbar");
//             elemento.classList.add("no_navbar");
//         } else {
//             elemento.classList.remove("no_navbar");
//             elemento.classList.add("navbar")
//         }
//     })



const Nombre = document.querySelector("#Nombre");
const Telefono = document.querySelector("#Telefono");
const Email = document.querySelector("#Email");
const Mensaje = document.querySelector("#Mensaje");
const formulario = document.querySelector(".formulario");

formulario.addEventListener("submit", validarformulario);

function validarformulario(e) {
    e.preventDefault();

    if (Nombre.value === "" || Telefono.value === "" || Email.value === "" || Mensaje.value === "") {
        mostrarError('Todos los campos son obligatorios');
        return;
    }

    alert('Hemos recibido tus datos, pronto nos pondremos en contacto');
    e.target.submit();
    formulario.reset();

}

function mostrarError(mensaje) {
    const alerta = document.createElement("p");
    alerta.textContent = mensaje;
    alerta.style.background = "blue";
    alerta.style.color = "white";

    formulario.appendChild(alerta);

    setTimeout(() => {
        alerta.remove();
    }, 5000);
}






