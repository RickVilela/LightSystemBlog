const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {

    const button = event.relatedTarget
  
    const recipient = button.getAttribute('data-bs-whatever')
		

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    // modalTitle.textContent = `Editar Post `;
  })
}

function remover(id){
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
				url: "http://localhost/news/admin/remove/" + id,
				type: "post",
				dataType: "json",
				data: {
					id: id
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
	}

	function editar(id){
		$.ajax({
			url: "http://localhost/news/admin/details/" + id,
			type: "post",
			dataType: "json",
			data: {
				id: id
			},
			success: function(response){

				console.log(response)
				
				let ckeditor = CKEDITOR.replace( 'descricao' );
				ckeditor.setData(response.descricao);

				$("#titulo").val(response.titulo);
				

				//ckeditor.getData();

				$("#salvar").on("click", () =>{

					let valorTitulo =  $("#titulo").val();
					let descricao = ckeditor.getData();

					$.ajax({
						url: "http://localhost/news/admin/editPost/" + id ,
						type: "post",
						dataType: "json",
						data: {
							id: id,
							titulo: valorTitulo,
							descricao: descricao
						},
						success: function(response){
			
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							})
							
							Toast.fire({
								icon: 'success',
								title: 'Alterado com Sucesso!'
							})
						
			
						},
						error: function(err){
							
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							})
							
							Toast.fire({
								icon: 'err',
								title: 'Erro ao alterar!'
							})
						}
					});  
				})

			},
			error: function(err){
				console.log(err);
			}
		});  
	}

	
