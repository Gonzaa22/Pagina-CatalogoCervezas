var cervezas;

$(function () {
    $.getJSON("../PHP/obtenerCervezas.php",
        function (data) {
            cervezas = data;
			
			cervezas.forEach(function(dato, index) {
                let id = dato["id"];
				let marca = dato["marca"];
                let tipo = dato["tipo"];
                let litros = dato["litros"];
                let precio = dato["precio"];
                let imagen = dato["img"];
    
                hacerCervezas(id,marca,tipo,litros,precio,imagen);
			});
			
        }
    );
    $.getJSON("../PHP/obtenerUsuarios.php",
        function (data) {
            cervezas = data;
			
			cervezas.forEach(function(dato, index) {
                let id = dato["id"];
				let nombre = dato["nombre"];
                let contrasenia = dato["contrasenia"];
                    
                hacerUsuarios(id,nombre,contrasenia);
			});
			
        }
    );
});

function hacerCervezas(id,marca,tipo,litros,precio, imagen){
    var estructura = ' \
    <tr align="center">\
			<td>'+ id +'</td>\
			<td>'+ marca +'</td>\
			<td>'+ tipo +'</td>\
			<td>'+ litros +'Lt</td>\
			<td>$'+ precio +'</td>\
			<td>'+ imagen +'</td>\
		</tr>\
    ';

    $("#tabla-cervezas").append(estructura);
    
    estructura = '\
     <option value="'+id+'">'+id+'</option>\
    ';

    $("#cervezas").append(estructura);
}

function hacerUsuarios(id,nombre,contrasenia){
    var estructura = ' \
    <tr align="center">\
			<td>'+ id +'</td>\
			<td>'+ nombre +'</td>\
			<td>'+ contrasenia +'</td>\
		</tr>\
    ';

    $("#tabla-usuarios").append(estructura);
    
    estructura = '\
     <option value="'+id+'">'+id+'</option>\
    ';

    $("#usuarios").append(estructura);
}

function editarCerveza(id, marca, tipo, litros, precio, imagen){
    $.getJSON("../PHP/obtenerCervezas.php",
        function (data) {
            cervezas = data;
			
			cervezas.forEach(function(dato, index) {
                let id = dato["id"];
				let marca = dato["marca"];
                let tipo = dato["tipo"];
                let litros = dato["litros"];
                let precio = dato["precio"];
                let imagen = dato["img"];
    
                mostrarOpciones(id,marca,tipo,litros,precio,imagen);
			});
			
        }
    );
}


/* - '+marca+' - '+tipo+' - '+ litros +'Lt - $'+ precio +' 
     - '+nombre+' - '+contrasenia+'
*/