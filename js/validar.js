
$("#sbimg").validate({ 
    rules: {


            i:{
                required:true
                 
            },

            ti: {

                    required: true,
                    minlength: 5,
                    maxlength: 20

            },

            a: {

                    required: true,
                    minlength: 5,
                    maxlength: 100
            }

           
    },
      messages: {

            i: {
                    required: "Adjunte una imagen"
                    },

            ti: {
                    required: "Ingrese un titulo",
                    minlength: "Minimo 5 caracteres",
                    maxlength: "Minimo 20 caracteres"
            },


            a:{
              required:"Ingrese un Asunto",
              minlength:"Minimo 5 caracteres",
              maxlength:"Minimo 100 caracteres"
            }
        },

    highlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
    },
    unhighlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
    },
    errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.length) {
                error.insertAfter(element);
            } else {
            error.insertAfter(element);
            }
        }
 });

$("#rgus").validate({ 
    rules: {

        carrera:{
            required:true
        },
      usua:{
                required:true,
                minlength:3,
                maxlength:13
               
            },

            clave: {

                    required: true,
                    minlength: 4,
                    maxlength:20

            },

            nombre: {

                    required: true,
                    minlength: 2,
                    maxlength:10

            },

            apellido:{
              required: true,
              minlength: 2,
              maxlength:10
            },


            correo:{
              required:true,
              email:true,
              minlength:8,
              maxlength:30
            },

            telefono:{
                required:true,
                number:true,
                minlength:11,
                maxlength:11
            }

    },
      messages: {

            carrera: {
                    required: "Seleccione una carrera"
                    },

            usua:{
                required:"Ingrese un usuario",
                minlength:"3 caracteres minimo",
                maxlength:"13 caracteres maximo"
               
            },

            clave: {

                    required: "Ingrese una clave",
                    minlength: "4 caracteres minimo",
                    maxlength:"20 caracteres maximo"

            },

            nombre: {

                    required: "Ingrese su nombre",
                    minlength: "2 caracteres minimo",
                    maxlength:"10 caracteres maximo"

            },

            apellido:{
              required: "Ingrese su apellido",
              minlength: "2 caracteres minimo",
              maxlength:"10 caracteres maximo"
            },


            correo:{
              required:"Ingrese un correo",
              email:"Debe ser un correo",
              minlength:"8 caracteres minimo",
              maxlength:"30 caracteres maximo"
            },

            telefono:{
                required:"Ingrese su numero",
                number:"Solo numeros, porfavor",
                minlength:"11 digitos maximo",
                maxlength:"11 digitos maximo"
            }



        },

    highlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
    },
    unhighlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
    },
    errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.length) {
                error.insertAfter(element);
            } else {
            error.insertAfter(element);
            }
        }
 });


