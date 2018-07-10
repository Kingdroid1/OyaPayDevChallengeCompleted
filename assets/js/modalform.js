// To show add agent form
document.getElementById('button').addEventListener('click', function(){
	document.querySelector('.bg-modal').style.display = 'flex';
});


// To remove new agent form
document.querySelector('.close').addEventListener('click', function(){
	document.querySelector('.bg-modal').style.display = 'none';
});

