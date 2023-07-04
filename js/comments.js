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
                $(".comment-list").append()
				$.ajax({
					url: "http://localhost/news/post/details/" + idPost,
					dataType: "json",
					success: function (response){
		
                        // response.forEach(comentario => {
                        //     $(".comment-list").append(`
                        //     <li class="comment">
                        //         <div class="comment-body">
                        //             <h3>${comentario.nome}</h3>
                        //             <div class="meta">${comentario.data}</div>
                        //             <p>${comentario.comentario}</p>
                        //             <p><a href="#" class="reply rounded">Reply</a></p>
                        //         </div>
                        //     </li>
                        //     `)
                        // });

                        console.log(response)
						
		
					  limparCampos();
		
					},error: function(err){
						limparCampos()
						console.log(err)
					}
				})

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





