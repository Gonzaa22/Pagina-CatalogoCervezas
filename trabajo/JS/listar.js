var cervezas;

$(function () {
    $.getJSON("../PHP/obtenerCervezas.php", 
        function (data) {
            cervezas = data;
			
			cervezas.forEach(function(dato, index) { 
				let marca = dato["marca"];
                let tipo = dato["tipo"];
                let litros = dato["litros"];
                let precio = dato["precio"];
                let imagen = dato["img"];
    
            pintar(marca,tipo,litros,precio,imagen);

			});
			
        }
    ); 
});

function pintar(marca,tipo,litros,precio, imagen){
    var estructura = ' \
    <article class="articulo">\
        <div class="imagen">\
            <img src="'+imagen+'" >\
        </div>\
        <div class="detalle">\
            <h2>'+marca+'</h2>\
            <p>'+tipo+' '+litros+'L - $'+precio+' </p>\
        </div>\
    </article>\
    ';
    
    $("#cervezas").append(estructura); 
}