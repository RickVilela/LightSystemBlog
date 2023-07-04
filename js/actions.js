$("#btn-excluir").on("click", (e) =>{
	e.preventDefault();

	let idDelete = $("#btn-excluir").attr("value");

	Swal.fire({
		title: 'Você tem certeza?',
		text: "Não será possível reverter!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Sim, Remover!'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://localhost/news/admin/remove/" + idDelete,
				type: "post",
				dataType: "json",
				data: {
					id: idDelete
				},
				success: function(response){
					console.log(response);

					Swal.fire(
						'Removido!',
						'Post removido com Sucesso.',
						'success'
					  )
				},
				error: function(err){
					console.log(err);
				}
			});  
		}
	  })
})

