const divImagen = document.getElementById('cargarImagen');

const  input_file = document.getElementById('imagen_producto')

const  imagen = document.getElementById('img')



divImagen.addEventListener('click' ,()=> input_file.click());



input_file.addEventListener("change", (e)=>{
    const archivo = e.target.files[0];
    const fileReader = new FileReader();
    fileReader.readAsDataURL(archivo);
    fileReader.addEventListener("load", (e)=>{
        imagen.classList.remove('imagen');
        imagen.setAttribute("src", e.target.result);

    });
})



////validando formulario


const formAc = document.getElementById('form_ac');

const nombreAccesorio = document.getElementById('nombre_ac');
const presio = document.getElementById('presio_ac');
const caracteristicas = document.getElementById('caracteristicas');

let validarPresio= /^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/;


formAc.addEventListener('submit',(e)=>{
    if(nombreAccesorio.value == ''){
        nombreAccesorio.classList.add('is-invalid');
        nombreAccesorio.setAttribute('placeholder', 'Inserte un nombre válido');
        e.preventDefault();

    } else if (presio.value == '' ){
        presio.classList.add('is-invalid');
        presio.setAttribute('placeholder', 'Inserte un precio válido');
        e.preventDefault();

    } else if  (caracteristicas.value == ''){

        caracteristicas.classList.add('is-invalid');
        caracteristicas.setAttribute('placeholder', 'Inserte una Característica');
        e.preventDefault();

    }


});


nombreAccesorio.addEventListener('click' ,()=>{
    nombreAccesorio.classList.remove('is-invalid');
    nombreAccesorio.setAttribute('placeholder', 'Nombre');
});


presio.addEventListener('click' ,()=>{
    presio.classList.remove('is-invalid');
    presio.setAttribute('placeholder', 'Precio');
});

caracteristicas.addEventListener('click' ,()=>{
    caracteristicas.classList.remove('is-invalid');
    caracteristicas.setAttribute('placeholder', 'Características');
});








