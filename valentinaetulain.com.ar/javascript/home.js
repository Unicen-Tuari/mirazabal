window.addEventListener('load', inicializarEventos, false);//una vez cargada la pagina llama a la funcion inicializareventos

function inicializarEventos() {
	i = 0;
	direccion = new Array();
	direccion[0] = "imagenes/home1.jpg";
	direccion[1] = "imagenes/home2.jpg";
	direccion[2] = "imagenes/home3.jpg";
	direccion[3] = "imagenes/home4.jpg";
	direccion[4] = "imagenes/home5.jpg";
	cambiaIMG();			
}

function cambiaIMG(){
    i = i+1;
    if(i == direccion.length)i = 0;
    document.images.miImagen.src = direccion[i];
    setTimeout('cambiaIMG()',3500)
};