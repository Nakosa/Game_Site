/* DOCUMENT READY */
document.addEventListener('DOMContentLoaded', function(event) {
	set_redirect_links();

});





function set_redirect_links(){
		let arr_redir = [
		{
			'id': 'logo_redir',
			'link': '/',
		},

		{
			'id': 'bar_login',
			'link': '/user/login',
		},
		{
			'id': 'bar_logout',
			'link': '/user/logout',
		},
		{
			'id': 'bar_reg',
			'link': '/user/registration',
		},
		{
			'id': 'bar_settings',
			'link': '/user/settings',
		},


	]

	for(let index in arr_redir){
		let redir = arr_redir[index],
			id = redir.id,
			link = redir.link,
			elem = document.getElementById(id);
		if(elem){
			elem.addEventListener('click', function(event){
				redirect(link);
			});
		}
	}
}
function redirect(link){
	console.log('redir: ' + link);
	AJAX_GET_CONTENT(link, {}, render)
}

function AJAX_GET_CONTENT(url, data = {}, callback = false){
	$.ajax({
		url: url,
		data: data,
		type:'POST',
		success: function(data){
			console.log(data);
			if(callback){
				callback(data);
			}
		}
	});
}

function render(data){
	document.getElementById('main_content').innerHTML = data;
}