const forms = document.querySelectorAll('#form-js');

forms.forEach(form => {

	form.addEventListener('submit', function(e) {
		e.preventDefault();//Ne fait pas ce que tu fais par defaut
		//Recuperation de url
		const url = this.getAttribute('action');
		//Récuperer le token
		const token = document.querySelector('meta[name="csrf-token"]').content;
		//Recuperer ID de input
		const postId = this.querySelector('#post-id-js').value;
		const count = this.querySelector('#count-js');

		fetch(url,{

			headers:{

				 "Content-Type": "application/json",
				  "X-CSRF-TOKEN": token
			},
			method: 'POST',
			body: JSON.stringify({
                id:postId
            })
		}).then(response =>{
			response.json().then(data =>{
				count.innerHTML = data.count;
			})
		}).catch(error =>{
			console.log(error)
		});

	});
});