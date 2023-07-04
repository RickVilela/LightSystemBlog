$("#btnComentar").on("click", (e) =>{
      e.preventDefault();
    
        const nome = $("#nome").val();
        const email = $("#email").val();
        const comentario = $("#comentario").val();  


        let url = window.location.pathname;
        let parts = url.split('/');
        let idPost = parts.pop() || parts.pop();
        
    
        $.ajax({
            url: "http://localhost/news/post/addComentario",
            type: "POST",
            data: {
                nome: nome, 
                email: email,
                comentario: comentario,
                id_post: idPost
            },
            success: function (response){

			
				
            },error: function(err){
                limparCampos()
                console.log(err)
            }
        })
    
    
        function limparCampos(){
            $("#nome").val('');
            $("#email").val('');
            $("#comentario").val('');
        }
    })





