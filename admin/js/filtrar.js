


function init(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	console.log(toSort);
	toSort.sort(function(a, b) {
		var aord = new Date(a.getAttribute('data-date'));
		var bord = new Date(b.getAttribute('data-date'));
		// two elements never have the same ID hence this is sufficient:
		return (aord < bord) ? 1 : -1;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
	}
	document.getElementById('fecha').value="Fecha ▼";
	document.getElementById('prioridad').value="Relevancia";
	document.getElementById('fecha').setAttribute("onClick",'init1()');
	document.getElementById('prioridad').setAttribute("onClick",'relevancia()');
	document.getElementById('alfabetico').value="Alfabeticamente";
	document.getElementById('alfabetico').setAttribute("onClick",'alfa()');
}

function init1(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	toSort.sort(function(a, b) {
		var aord = new Date(a.getAttribute('data-date'));
		var bord = new Date(b.getAttribute('data-date'));
		// two elements never have the same ID hence this is sufficient:
		return (aord > bord) ? 1 : -1;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
	}
	document.getElementById('fecha').value="Fecha ▲";
	document.getElementById('prioridad').value="Relevancia";
	document.getElementById('fecha').setAttribute("onClick",'init()');
	document.getElementById('prioridad').setAttribute("onClick",'relevancia()');
	document.getElementById('alfabetico').value="Alfabeticamente";
	document.getElementById('alfabetico').setAttribute("onClick",'alfa()');
}




function relevancia(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	toSort.sort(function(a, b) {
		var aord = parseInt(a.getAttribute('data-prioridad'));
		var bord = parseInt(b.getAttribute('data-prioridad'));
		// two elements never have the same ID hence this is sufficient:
		return (aord < bord) ? 1 : -1;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
	}
	document.getElementById('prioridad').value="Relevancia ▼";
	document.getElementById('fecha').value="Fecha";
	document.getElementById('fecha').setAttribute("onClick",'init()');
	document.getElementById('alfabetico').value="Alfabeticamente";
	document.getElementById('prioridad').setAttribute("onClick",'relevancia1()');
	document.getElementById('alfabetico').setAttribute("onClick",'alfa()');
}

function relevancia1(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	toSort.sort(function(a, b) {
		var aord = parseInt(a.getAttribute('data-prioridad'));
		var bord = parseInt(b.getAttribute('data-prioridad'));
		// two elements never have the same ID hence this is sufficient:
		return (aord > bord) ? 1 : -1;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
	}
	document.getElementById('prioridad').value="Relevancia ▲";
	document.getElementById('fecha').value="Fecha";
	document.getElementById('fecha').setAttribute("onClick",'init()');
	document.getElementById('alfabetico').value="Alfabeticamente";
	document.getElementById('prioridad').setAttribute("onClick",'relevancia()');
	document.getElementById('alfabetico').setAttribute("onClick",'alfa()');
}

function alfa(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	toSort.sort(function(a, b) {
		if(a.getAttribute('data-alpha').toUpperCase() < b.getAttribute('data-alpha').toUpperCase()) return -1;
		if(a.getAttribute('data-alpha').toUpperCase() > b.getAttribute('data-alpha').toUpperCase()) return 1;
		return 0;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
		console.log(parent);
	}
	document.getElementById('alfabetico').value="Alfabeticamente ▼";
	document.getElementById('alfabetico').setAttribute("onClick",'alfa1()');
	document.getElementById('fecha').value="Fecha";
	document.getElementById('fecha').setAttribute("onClick",'init()');
	document.getElementById('prioridad').value="Relevancia";
	document.getElementById('prioridad').setAttribute("onClick",'relevancia()');
}

function alfa1(){
	
	var toSort = document.getElementById('list').children;
	toSort = Array.prototype.slice.call(toSort, 0);
	toSort.sort(function(a, b) {
		if(a.getAttribute('data-alpha').toUpperCase() > b.getAttribute('data-alpha').toUpperCase()) return -1;
		if(a.getAttribute('data-alpha').toUpperCase() < b.getAttribute('data-alpha').toUpperCase()) return 1;
		return 0;
	});

	var parent = document.getElementById('list');
	parent.innerHTML = "";

	for(var i = 0, l = toSort.length; i < l; i++) {
		parent.appendChild(toSort[i]);
		console.log(parent);
	}
	document.getElementById('alfabetico').value="Alfabeticamente ▲";
	document.getElementById('alfabetico').setAttribute("onClick",'alfa()');
	document.getElementById('fecha').value="Fecha";
	document.getElementById('fecha').setAttribute("onClick",'init()');
	document.getElementById('prioridad').value="Relevancia";
	document.getElementById('prioridad').setAttribute("onClick",'relevancia()');
}