function remover(id){
	$.ajax({
		url: "http://localhost/news/post/addComentario",
		type: "POST",
		data: {
			id: id, 
		},
		success: function (response){

		},error: function(err){
			limparCampos()
			console.log(err)
		}
	})

}
