//Index.js







function checkUser(){
    
        $.ajax({
            url: "proc/auth/auth.php",
            type: "POST",
            data: { opc: x,  },
            dataType: 'json',
            success: function (RES) {
                console.log(RES);
            },
            error: function (jqXHR, status, error) {
                console.log("ERROR: algo fallo por ahi... ");
                console.log(jqXHR);
            },
        });

}