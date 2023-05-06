function works(y){
	if(y == 1){
	document.getElementById("work").setAttribute("disabled","");
	}else{
	document.getElementById("work").removeAttribute("disabled","");
	}
}
function worker(){
	var imie = document.getElementsByName("imie")[0].value;
	var nazwisko = document.getElementsByName("nazwisko")[0].value;
	var data = document.getElementsByName("data")[0].value;
	var phone = document.getElementsByName("phone")[0].value;
	var email = document.getElementsByName("email")[0].value;
	var url = document.getElementsByName("url")[0].value;
	var work;
	var heck = document.getElementsByName("praca")[1].checked;
	if(heck){
	work = document.getElementById("work").value;
	}
	else
	{
	work = "brak";
	}
	var file = document.getElementById('file').value;
	console.log(file);
	let lang = "";
	let i = 0;
	for(i in document.getElementsByName("jenzyki")){
		if(document.getElementsByName("jenzyki")[i].checked){
			lang += "<li>"+document.getElementsByName("jenzyki")[i].value+"</li>";}
	}
	
	var color = document.getElementById("color").value;
	var imieinaz = imie+" "+nazwisko;
	document.getElementById("kto").innerHTML = imieinaz;
	document.getElementById("cv_email").innerHTML = "E-mail: "+email;
	document.getElementById("cv_phone").innerHTML = "Telefon: "+phone;
	document.getElementById("cv_date").innerHTML = "Data urodzenia: "+data;
	document.getElementById("cv_www").innerHTML="WWW: "+url;
	document.getElementById("profilowe").src=file;
	
	document.getElementById("cv_dos").innerHTML=work;
	document.getElementById("cv_language").innerHTML=lang;
	document.getElementById("cv").setAttribute("style", "background-color: "+color+";"); 
	
}
