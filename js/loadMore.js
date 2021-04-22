$(document).ready(function () {
	$("#button__more").bind("click", function(){
		var tek = document.getElementById('recipe__place').getElementsByClassName('recipe').length;
		$.post("php/loadMore.php", ({kol: 5, tek: tek}), successLoad);
	});
});


function successLoad (data){
	data = JSON.parse(data);
	console.log(data);
	for(var i in data)
	{
		let recipe = 
		`<div class="recipe">
		<div class="recipe__items">
		<div class="recipe__img">
		<a href="learnMore.php?id=${data[i].id_recipe}">
		<img src="http://via.placeholder.com/192x144">
		</a>
		</div>

		<div class="recipe__name">
		<a href="learnMore.php?id=${data[i].id_recipe}">
		${data[i].name_recipe}
		</a>
		</div>

		<div class="recipe__uploaded">
		${data[i].user_recipe}
		</div>
		</div>
		</div>`;
		document.getElementById("recipe__place").insertAdjacentHTML('beforeend', recipe);
	}}

