function cargarLibro(id){
    
    //hacer una petición get del libro identificado como "id" y cargar los datos en el main.
    //la cabecera tiene que tener la forma: "buscarlibro.php?id=0"
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(ajax.readyState==4){
        
            var datos = JSON.parse(ajax.responseText);
            mostrarLibro(datos);
            
            // esta parte de la funcion  en ajax cargar los datos utilizado el id del enlace del la web index 
        }
    }
    ajax.open("get", 'buscarlibro.php?id='+id, true);// se envia por liena de url el id del libro
    ajax.send();
}


function  mostrarLibro(datos)
{
    
    // muestra los datos del libro selecionado ,utilizando el selector parrafo
    var res  = document.querySelector("p");
    res.innerHTML='<table><tr><td><strong>titulo</strong> '+datos.título+'<td></tr><tr><td><strong>autor </strong>'+datos.autor+'</td></tr><tr><td> <strong>genero </strong>'+datos.genero+'</td></tr><tr><td><strong>resumen </strong>'+datos.resumen+'</td></tr></table>'
}