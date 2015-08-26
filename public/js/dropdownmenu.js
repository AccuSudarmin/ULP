

var pull = document.getElementById("pull");

pull.onclick = dropDownPlease;

function dropDownPlease (){
	var drop = document.getElementById("dropPlease");	
	if (drop.style.display== 'block') { 
		drop.style.display = 'none';
	} else {
		drop.style.display = 'block';
	}
	

}

var pull2 = document.getElementById("pullmobilever");
pull2.onclick = dropDownMobilePlease;

function dropDownMobilePlease(){
	var drop = document.getElementById("dropmobilever");	
	if (drop.style.display== 'block') { 
		drop.style.display = 'none';
	} else {
		drop.style.display = 'block';
	}
	
}