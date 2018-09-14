/*FormWizard Init*/
$(document).ready(function(){
	"use strict";
	if($('#add_contrato').length >0){
		var form_2 = $("#add_contrato");
		form_2.steps({
			headerTag: "h3",
			bodyTag: "fieldset",
			transitionEffect: "fade",
			titleTemplate: '#title#',
			labels: {
				finish: "Finalizar",
				next: "Siguiente",
				previous: "Anterior",
			},
			onStepChanging: function (event, currentIndex, newIndex)
			{
				if($( "#add_contrato-h-2" ).hasClass("current")){
				if($("#tipo_cargo").val()==2){
					if ($( "#solicitar_director1" ).val()=="" || $( "#solicitar_director1" ).val()==null)
				{	alert("Se necesita enviar la solicitud");
					return false;
				}
				}else{
					
				if (($( "#solicitar_director" ).val()=="" || $( "#solicitar_director" ).val()==null) && $( "#requiere_habilitacion" ).val()==1)  
				{	alert("Se necesita enviar la solicitud");
					return false;
				}
				}
				
			}
			
				// Allways allow previous action even if the current form is not valid!
				if (currentIndex > newIndex)
				{
					return true;
				}
				if ($( "#first_name" ).val()=="" || $( "#first_name" ).val()==null)
				{	$(".error_rut").html("Ingrese un rut valido y espere la carga de información");
					return false;
				}else{
					$(".error_rut").html("");
				}
				// Needed in some cases if the user went back (clean up)
				if (currentIndex < newIndex)
				{
					// To remove error styles
					form_2.find(".body:eq(" + newIndex + ") label.error").remove();
					form_2.find(".body:eq(" + newIndex + ") .error").removeClass("error");
				}
				
				return form_2.valid();
			
			},
			onFinishing: function (event, currentIndex)
			{
				
				return form_2.valid();
			},
			onFinished: function (event, currentIndex)
			{
				 swal({   
					title: "¿Seguro que la información suministrada es correcta?",     
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#e69a2a",   
					confirmButtonText: "¡Si, Guardar contrato!",  
					cancelButtonText: "Cancelar",  					
					closeOnConfirm: false 
				}, function(){   
					/*$.ajax({
            type: "POST",
            url: "http://"+window.location.hostname+"/cake34/remcontratos/addajax",
            data:$("#example-advanced-form").serialize(),
            cache: false,
            success: function(data){
           
				alert(data);

            }
            });*/form_2.submit();
				});
				return false;
			}
		});
	}

			$("input[name='tch2']").TouchSpin({
	min: 0,
	max: 1000000000,
	stepinterval: 50,
	maxboostedstep: 10000000,
	prefix: '$'
});
	$('.datepicker').datetimepicker({
			useCurrent: false,
			   widgetPositioning:{
                                horizontal: 'left',
                                vertical: 'auto'
                            },
							format: 'YYYY/MM/DD',
			icons: {
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                },
		}).on('dp.show', function() {
		if($(this).data("DateTimePicker").date() === null)
			$(this).data("DateTimePicker").date(moment());
	});
	
			});
			