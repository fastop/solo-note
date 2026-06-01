//Index.js
 
$(function(){ 
   
    // Detectar Enter en el campo contraseña
    $("#password").on("keydown", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            checkUser();
        }
    });

    // Manejar submit del formulario
    $("#frm-login").on("submit", function (e) {
        e.preventDefault();
        checkUser();
    });

});


function checkUser(){

    loadr();

     let formx = $("#frm-login").serialize()+"&opc=1";

        $.ajax({
            url: "proc/auth/auth.php",
            type: "POST",
            data: formx,
            dataType: 'json',
            success: function (RES) {
                // console.log(RES);


                if(RES.erro == false){ // Si el login es exitoso, redirige a la página de inicio                    
                    window.location.href = RES.msg; // Redirige a la URL proporcionada por el servidor
                }
                else
                    showModal(RES.msg, "⚠️ Warning");
            },
            error: function (jqXHR, status, error) {
                console.log("ERROR: algo fallo por ahi... ");
                console.log(jqXHR);
            },
        });

}

// Función jQuery para mostrar el modal con id 'miModal'
function showModal(contenido, title =""){

    $("#miModalBody").html(contenido);
    $("#miModalTitle").html(title);

    $('#miModal').modal('show');
}
 

function loadr() {

      let spinner =  `  <div class="text-center">
                                <div class="spinner-border" style="width: 3rem; height: 3rem;"  role="status"></div>                                 
                        </div> `; 

    let title = "⏳ Cargando...";

    showModal(spinner, title);
}