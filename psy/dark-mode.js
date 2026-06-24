$(document).ready(function() {

    const currentTheme = localStorage.getItem('theme'); //Colocamos el actual

        if (currentTheme === ""){ //Si viene vacio
             $("#dark-mode").attr("href","");
             $('#darkToggle').text('☀️');
        }
        else {
             $("#dark-mode").attr("href","dark-mode.css");
             $('#darkToggle').text('🌙');
        }


        $('#darkToggle').on('click', function() {

            let currentTheme =  $("#dark-mode").attr("href");

            if (currentTheme === ""){ //Si viene vacio
                $("#dark-mode").attr("href","dark-mode.css");
                $('#darkToggle').text('☀️');
            }
            else {
                $("#dark-mode").attr("href","");
                $('#darkToggle').text('🌙');
            }

              localStorage.setItem('theme', $("#dark-mode").attr("href"));
        });




 
//
//    // Toggle theme on click
//    $('#darkToggle').on('click', function() {

//        //$('body').toggleClass('dark-mode');
//         $("#dark-mode").attr("href","dark-mode.css");
//        
//        let theme = 'light';
//        if ($('body').hasClass('dark-mode')) {
//            theme = 'dark';
//            $(this).text('☀️');
//        } else {
//            $(this).text('🌙');
//        }
//        localStorage.setItem('theme', theme);
//    });

});
