
$(document).ready(function(){

	tablaPersonas = $("#tablaPersonas").DataTable({
			"columnDefs":[{
			"targets": -1,
			"data":null,
			"defaultContent": "<div	class='text-center'><div class='btn-group'><botton class='btn btn-primary btnEditar'>Editar</botton><botton class='btn btn-danger btnBorrar'>Borrar</botton></div></div>"
			}],

			"language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            }
	});

	$("#btnNuevo").click(function(){
	$("#formPersonas").trigger("reset");	
		$(".modal-header").css("background-color", "#28a745");
		$(".modal-header").css("color", "white");
		$(".modal-title").text("Nueva Persona");

		$("#modalCRUD").modal("show");
		id=null;
		opcion = 1;
	

	});

	var fila; 
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    codigo = parseInt(fila.find('td:eq(1)').text());
	nombre = fila.find('td:eq(2)').text();
    
 
    $("#codigo").val(codigo);
    $("#nombre").val(nombre);
   
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    

    fila = $(this);

    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar

    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
   
    if(respuesta){
        $.ajax({
            url: "../Actividad 6/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},

            success: function(){
  
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }

        });

    }   

});

	$("#formPersonas").submit(function(e){

		e.preventDefault();

		codigo = $.trim($("#codigo").val());
		nombre = $.trim($("#nombre").val());
		$.ajax({
			url: "../Actividad 6/crud.php",
			type: "POST",
			dataType: "json",
			data: {codigo:codigo, nombre:nombre, id:id, opcion:opcion},
			success: function(data){
				console.log(data);
				id=data[0].id;
				codigo=data[0].codigo;
				nombre=data[0].nombre;
				if(opcion == 1){tablaPersonas.row.add([id,codigo,nombre]).draw();}
            	else{tablaPersonas.row(fila).data([id,codigo,nombre]).draw();}

			}


		});
		$("#modalCRUD").modal("hide");

	});
});
