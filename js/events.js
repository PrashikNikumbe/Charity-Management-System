function Show() {
	document.getElementById('userlogin').style.display="none";
	document.getElementById('usersignup').style.display="block";
}
function Hide() {
	document.getElementById('userlogin').style.display="block";
	document.getElementById('usersignup').style.display="none";
}
function TextShow(Image) {
	if(Image.alt=="Image of Toy"){
		var e=document.getElementById('info1');
		e.style.display="inline-block";
	}
	else if(Image.alt=="Image of Bag"){
		var e=document.getElementById('info2');
		e.style.display="inline-block";
	}
	else if(Image.alt=="Image of dress"){
		var e=document.getElementById('info3');
		e.style.display="inline-block";
	}
	else if(Image.alt=="Image of shoes"){
		var e=document.getElementById('info4');
		e.style.display="inline-block";		
	}
	else if (Image.alt=="Image of Voluteer information") {
		var e=document.getElementById('Ainfo1');
		e.style.display="inline-block";	
	} 
	else {
		var e=document.getElementById('Ainfo2');
		e.style.display="inline-block";	
	}
}

function TextHide(Image) {
	if(Image.alt=="Image of Toy"){
		var e=document.getElementById('info1');
		e.style.display="none";
	}
	else if(Image.alt=="Image of Bag"){
		var e=document.getElementById('info2');
		e.style.display="none";
	}
	else if(Image.alt=="Image of dress"){
		var e=document.getElementById('info3');
		e.style.display="none";
	}
	else{
		var e=document.getElementById('info4');
		e.style.display="none";		
	}
}

function ShowForm(Image){
	var e=document.getElementById('donate');
	e.style.display="none";
	var f=document.getElementById('donateform');
	f.style.display="inline-block";
	var g=document.getElementById('donatebody');
	g.style.backgroundImage="url('"+Image.src+"')";
}

function AnotherItem(Check){
	var cid=Check.id;
	if(cid=="check1"){
		var a=document.getElementById("another1");
	}
	else if(cid=="check2"){
		var a=document.getElementById("another2");
	}
	else if(cid=="check3"){
		var a=document.getElementById("another3");
	}
		console.log(a);

	if (cid.checked){	
		a.style.display="block";
	}
	else{
		a.style.display="none";
	}
}
