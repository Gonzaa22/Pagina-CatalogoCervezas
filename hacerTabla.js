var cervezas;

$(function () {
    $.getJSON("PHP/obtenerCervezas.php",
        function (data) {
            cervezas = data;
			
			cervezas.forEach(function(dato, index) {
                let id = dato["id"];
				let marca = dato["marca"];
                let tipo = dato["tipo"];
                let litros = dato["litros"];
                let precio = dato["precio"];
                let imagen = dato["img"];
    
    hacerTabla(id,marca,tipo,litros,precio,imagen);
			});
			
        }
    ); 
});

function hacerTabla(id,marca,tipo,litros,precio, imagen){
    var estructura = ' \
    <tr">\
        <td>'+ id +'</td>\
        <td>'+ marca +'</td>\
        <td>'+ tipo +'</td>\
        <td>'+ litros +'</td>\
        <td>'+ precio +'</td>\
        <td>'+ imagen +'</td>\
        <a onclick>Modificar</a>\
        <a>Eliminar</a>\
    </tr>\
    <br>\
    ';

    $("#tabla-cervezas").append(estructura);    
}