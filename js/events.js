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

function log(){
    document.getElementById("in").style.display="none";
    document.getElementById("out").style.display="inline";
}

function validate1(){
	var valid=false;
	if(document.getElementById('Mon').checked){
		valid=true;
	}
	else if(document.getElementById('Tue').checked){
		valid=true;
	}
	else if(document.getElementById('Wed').checked){
		valid=true;
	}
	else if(document.getElementById('Thu').checked){
		valid=true;
	}
	else if(document.getElementById('Fri').checked){
		valid=true;
	}
	else if(document.getElementById('Sat').checked){
		valid=true;
	}
	else if(document.getElementById('Sun').checked){
		valid=true;
	}
	if(!valid){
		alert("Please select atleast one Working days")
		return false;
	}
	else{
		return true;
	}

}
function validate2(){
	var valid=false;
	if(document.getElementById('toys').checked){
		valid=true;
	}
	else if(document.getElementById('bags').checked){
		valid=true;
	}
	else if(document.getElementById('dress').checked){
		valid=true;
	}
	else if(document.getElementById('shoes').checked){
		valid=true;
	}
	if(!valid){
		alert("Please select atleast one item to donate.")
		return false;
	}
	else{
		return true;
	}

}
