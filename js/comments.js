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

				$.ajax({
					url: "http://localhost/news/post/getComentarios/" + idPost,
					dataType: "json",
					success: function (response){
		
						console.log(response);
		
					  limparCampos();
		
					},error: function(err){
						limparCampos()
						console.log(err)
					}
				})


			// console.log(response)

            //     $(".comment").append(`
            //     <div class="comment-body">
            //         <h3>${nome}</h3>
            //         <div class="meta"></div>
            //         <p>${comentario}</p>
            //         <p><a href="#" class="reply rounded">Reply</a></p>
            //     </div>
            //   `)

            //   limparCampos();

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





