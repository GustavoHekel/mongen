$(document).ready(function(){

    $("#enviardatos").on('click', function() {
        
        var usuario = $("#email").val();
        
        if(usuario =="asd@asd.com"){
//            alert("Correcto");

            $("#ingreso").fadeOut(1000);
            $("#cotainer-logueo").append("<span id='usuarionombre'>Hola " + usuario +"</span>");
            $("#usuarionombre").hide();
            $("#usuarionombre").delay(1000).fadeIn(1000);   
        }else{
            
            $("#ingreso").prepend("<span id='usuarioincorrecto' style='padding-right:10px'>Usuario o password incorrecto</span>");
            $("#usuarioincorrecto").hide()
                    .fadeIn(1000)
                    .delay(1000)
                    .fadeOut(1500);
        }
        
        
    });
});
    
 