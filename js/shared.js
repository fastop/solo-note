

$(function(){ 


    //Profile
    $("#profileOpc").click(function(){ showProfile(); }); 

    //Options
    $("#configOpc").click(function(){ showConfig() }); 

    //Logout
    $("#logoutOpc").click(function(){ showLogout(); });
    $("#btnLogout").click(function(){ logout(); });


    //Edit post
    $("#btn-modPost").click(function(){ saveNMod(); });

    //--------------------------------------------------

    $(document).on('click','.likey', function(){ addLikey(this.attributes[2].value); });
    $(document).on('click','.comment', function(){addComment(this.attributes[2].value); });



    $("#btnOrderUP").click(function(){ 
       console.log('Order UP!'); 
    });

    $("#btnOrderDOWN").click(function(){ 
       console.log('Order DOWN!'); 
    });


 });


// Array para almacenar los posts
 let posts = JSON.parse(localStorage.getItem('microblogPosts')) || [];

// Referencias a elementos del DOM
const postForm = document.getElementById('postForm');
const authorInput = document.getElementById('author');
const title = document.getElementById('txtTitle');
const contentInput = document.getElementById('content');
const postsContainer = document.getElementById('postsContainer');

// Función para guardar posts en localStorage
//function savePosts() {
//    localStorage.setItem('microblogPosts', JSON.stringify(posts));
//}

// Función para obtener la hora formateada
function getFormattedTime(date) {
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    return `${day}/${month}/${year} ${hours}:${minutes}`;
}

// Función para calcular tiempo relativo
function getRelativeTime(date) {
    const now = new Date();
    const diff = now - new Date(date);
    const seconds = Math.floor(diff / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    if (seconds < 60) return 'Hace unos segundos';
    if (minutes < 60) return `Hace ${minutes} minuto${minutes > 1 ? 's' : ''}`;
    if (hours < 24) return `Hace ${hours} hora${hours > 1 ? 's' : ''}`;
    if (days < 7) return `Hace ${days} día${days > 1 ? 's' : ''}`;
    return getFormattedTime(new Date(date));
}

// Función para escapar HTML y prevenir inyecciones
function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, m => map[m]);
}


// Función para renderizar los posts
function renderPosts() {

    if (posts.length === 0) {
        postsContainer.innerHTML = `
            <div class="empty-state">
                <div class="empty-state-icon">✨</div>
                <p>Aún no hay posts. ¡Sé el primero en publicar!</p>
            </div>
        `;
        return;
    }

    postsContainer.innerHTML = posts.map((post, index) => `
        <div class="post">
            <div class="post-header">
                <span class="post-author">👤 ${escapeHtml(post.title)} [${escapeHtml(post.author)}]</span>
                <span class="post-time">${getRelativeTime(post.timestamp)}</span>
            </div>
            <div class="post-content">${escapeHtml(post.content)}</div>
            <div class="post-footer">
                <div class="post-stats">
                    <span>❤️ 0 Me gusta</span>
                    <span>💬 0 Comentarios</span>
                </div>
                <button class="btn-delete" onclick="deletePost(${index})">Eliminar</button>
            </div>
        </div>
    `).join('');
}


// Función para agregar un nuevo post
function addPost(author, content) {
    const newPost = {
        id: Date.now(),
        title: title.value.trim() || "",
        author: author.trim(),
        content: content.trim(),
        timestamp: new Date().toISOString()
    };

    posts.unshift(newPost); // Agregar al inicio del array
    savePosts();
    renderPosts();
    postForm.reset();
    if (authorInput) authorInput.focus();
}

 
// Función para eliminar un post
/* function deletePost(index) {
    if (confirm('¿Estás seguro de que deseas eliminar este post?')) {
        posts.splice(index, 1);
        savePosts();
        renderPosts();
    }
}
 */

//////////////////////////////////////////////////////////
// Función para agregar un nuevo post
function addPostX(author, content, title) { 

    const newPost = {
        author: "MeMaster",
        title: title,
        content: contentInput.value,
        date: getFullDate(),
        time: getSimpleTimeAMPM(),
        timestamp: new Date().toISOString()
    };

    savePost(newPost); 
    renderPostsY(newPost);
    postForm.reset(); //Limpiamos el formulario
    contentInput.focus(); //Enfocamos el textarea para escribir otro post

}

//////////////////////////////////////////////////////////
// Event listener para el formulario
/*     postForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const author = getSimpleTimeAMPM(); //authorInput ? authorInput.value : '6:53 p.m.';
        const content = contentInput.value;
        const title = txtTitle.value;

        if (content.trim()) {
            addPostX(author, content, title);
        }

    }); */


    function fixMyDate(date) {        
        const myArray = date.split(" ");
            let MM = myArray[0].charAt(0).toUpperCase() + myArray[0].slice(1);

       return MM+" "+myArray[1]+" "+myArray[2]+" "+myArray[3];
    }


/*** ***************************************************************
 *  Aca MIS BIROTES
  ****************************************************************** */

    loadPosts();//Cargamos al entrar

    function getSimpleTimeAMPM(date = new Date()) {
        let hours = date.getHours();
        const minutes = String(date.getMinutes()).padStart(2, '0');
        
        const period = hours >= 12 ? 'p.m.' : 'a.m.';
        hours = hours % 12 || 12;
        hours = String(hours).padStart(2, '0');
        
        return `${hours}:${minutes} ${period}`;
    }


    function getFullDate(date = new Date()) {
        const day = String(date.getDate()).padStart(2, '0');
        const year = date.getFullYear();
        
        const nombreMes = date.toLocaleDateString('es-ES', { month: 'long' });
        const nombreDia = date.toLocaleDateString('es-ES', { weekday: 'long' });
        
        return `${nombreDia} ${day} de ${nombreMes} de ${year}`;
    }
 
    function loadPosts(){
            $.ajax({
                url: "proc/posts/posts.php",
                type: "POST",
                data: { opc: 1 },
                dataType: 'json',
                success: function (RES) {
                 //   console.log(RES);
                    renderPostsX(RES);
                },
                error: function (jqXHR, status, error) {
                    console.log("ERROR: algo fallo por ahi... ");
                    console.log(jqXHR);
                },
            });
    }
 
    // Función para renderizar los posts del SERVER
    function renderPostsX(posts) {

        if (posts.length === 0) {
            postsContainer.innerHTML = `
                <div class="empty-state">
                    <div class="empty-state-icon">✨</div>
                    <p>Aún no hay posts. ¡Sé el primero en publicar!</p>
                </div>
            `;
            return;
        }

        postsContainer.innerHTML = posts.map((post, index) => `
            <div class="post" id="post-${post.id}">
                <div class="post-header">
                    <span class="post-author">👤 ${post.title} </span>
                    <span class="post-time">${post.time}</span>
                </div>
                <div class="post-content">${escapeHtml(post.content)}</div>
                <div class="post-footer">
                    <div class="post-stats">
                        <span id="loadr-${post.id}" class="hidex"><div class="spinner-border sppiner" role="status"></div></span>

                        <span  id="likey-${post.id}" class="cursor-pointer likey" data-likey ="${post.id}">❤️ <span id="laiky-${post.id}"> ${post.thumb} </span></span>
                        <span class="cursor-pointer comment" data-comment = "${post.id}">💬 0 </span>
                        <span>${fixMyDate(post.date)}</span>
                    </div>

                    <input type="hidden" id="fullFecha-${post.id}" value="${post.created_at}">
                    <input type="hidden" id="textFecha-${post.id}" value="${post.date}">
                    <input type="hidden" id="tiempoAMPM-${post.id}" value="${post.time}">
                    
                </div>
            </div>
        `).join('');

    }


    // Función para renderizar los posts LOCALES
    function renderPostsY(post) { 

        let postsContainer = `
            <div class="post tmppp"  id="post-}">
                <div class="post-header">
                    <span class="post-author">👤 ${escapeHtml(post.title)} </span>
                    <span class="post-time">${getRelativeTime(post.timestamp)}</span>
                </div>
                <div class="post-content">${escapeHtml(post.content)}</div>
                <div class="post-footer">
                    <div class="post-stats">
                         <span>❤️ 0 </span>
                        <span onclick="editPost(${post.id})" class="cursor-pointer tmpppx"> ✏️</span>
                        <span>${fixMyDate(post.date)}</span>
                    </div>
                    <div class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <button class="btn-delete tmp d-none" onclick="deletePost()">Eliminar</button>
                </div>
            </div>
        `;

        $("#postsContainer").prepend(postsContainer);
    }

    //Para guardar los POSTS en la BD
    function savePost(newPost) {
         
        $(".btn-submit").prop("disabled", true);

        $.ajax({
            url: "proc/posts/posts.php",
            type: "POST",
            data: { opc: 2, post: newPost },
            dataType: 'json',
            success: function (RES) {

                console.log(RES);                
                $(".tmp").attr("onclick", "deletePost("+RES+")");
                $(".tmp").removeClass("d-none");
                $(".spinner-border").hide();

                $(".tmppp").attr("id", "post-"+RES);//Le asignamos el ID real del post que nos devuelve el SERVER
                $(".tmpppx").attr("onclick", "editPost("+RES+")");

                $(".post").removeClass("tmppp");
                 $(".post").removeClass("tmpppx");

                $("button").removeClass("tmp");
                $(".btn-submit").prop("disabled", false);

            },
            error: function (jqXHR, status, error) {
                console.log("ERROR: algo fallo por ahi... ");
                console.log(jqXHR);
            },
        });

    }


    //Para guardar los POSTS en la BD
    function deletePostBack(idPost) {
          

        $.ajax({
            url: "proc/posts/posts.php",
            type: "POST",
            data: { opc: 3, sid: idPost },
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

    // Función para eliminar un post
    function deletePost(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este post?')) {

            $("#post-"+id).hide("slow", function(){ $(this).remove()})
            deletePostBack(id);
        
        }
    }

    function editPost(id) {
        alert("Función de editar post con ID: " + id);
    }




    function showProfile() {          
        $("#profileModal").modal("show");
    }   


    function showConfig() {     
        $("#configModal").modal("show");
    }


    function showLogout(){
        $("#logoutModal").modal("show");     
    }



    function logout() {
        
        $.ajax({
            url: "proc/auth/auth.php",
            type: "POST",
            data: { opc: 2 },
            dataType: 'json',
            success: function (RES) {
                location.href = RES.msg;
            },
            error: function (jqXHR, status, error) {
                console.log("ERROR: algo fallo por ahi... ");
                console.log(jqXHR);
            },
        });

    }



    function editPost(id){

        let text = $("#post-"+id+" .post-author").text();
        let cleaned = text.split('👤 ').join('');

        $("#txtTitleMOD").val(cleaned); //$("#post-"+id+" .post-author").text());
        $("#contentMOD").val($("#post-"+id+" .post-content").text());
        $("#idMOD").val(id);


        $("#txtDateMOD").val($("#fullFecha-"+id).val());
        $("#txtTmeMOD").val($("#post-"+id+" .post-time").text());
          

       $("#ModModal").modal("show");        
    }


    function saveNMod(){

            let SID = $("#idMOD").val();//ID

        //Colocamos los datos de donde viene la publicacion.

            $("#post-"+SID+" .post-author").text( $("#txtTitleMOD").val() ); // post-author
            $("#post-"+SID+" .post-content").text( $("#contentMOD").val() ); // post-content

            // post-author
            // post-time
            // post-stats


            //Colocamos los datos en la base de datos. 



    }


    /** ************************************************************************* 
     * 
     * 
     * 
     * 
     ************************************************************************* */

    function addLikey(sid){

        $("#likey-"+sid).addClass("hidex")
        $("#loadr-"+sid).removeClass("hidex")


        $.ajax({
            url: "proc/posts/likeAndComments.php",
            type: "POST",
            data: { opc: 1, sid: sid },
            dataType: 'json',
            success: function (RES) {
                console.log(RES);

                $("#likey-"+sid).removeClass("hidex");
                $("#loadr-"+sid).addClass("hidex");

                $("#laiky-"+sid).html(RES.CC)
                

            },
            error: function (jqXHR, status, error) {
                console.log("ERROR: algo fallo por ahi... ");
                console.log(jqXHR);
            },
        });




    }
    
    function addComment(sid){
        console.log("Comento Comento "+ sid);
    }