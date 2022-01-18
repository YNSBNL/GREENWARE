let titre1=document.querySelector(".titre1");
let paysage1=document.querySelector(".paysage1");
let paragraphe1=document.querySelector(".paragraphe1");

let titre2=document.querySelector(".titre2");
let paysage2=document.querySelector(".paysage2");
let paragraphe2=document.querySelector(".paragraphe2");

let titre3=document.querySelector(".titre3");
let paysage3=document.querySelector(".paysage3");
let paragraphe3=document.querySelector(".paragraphe3");


/*ANIMATION PICTURES*/

function textappears(){
	titre1.style.opacity="1"
	paragraphe1.style.opacity="1"
	paysage1.style.opacity="0.5"

}
function textleave(){
	titre1.style.opacity="0"
	paragraphe1.style.opacity="0"
	paysage1.style.opacity="1"
}

function textappears1(){
	titre2.style.opacity="1"
	paragraphe2.style.opacity="1"
	paysage2.style.opacity="0.5"

}
function textleave1(){
	titre2.style.opacity="0"
	paragraphe2.style.opacity="0"
	paysage2.style.opacity="1"
}

function textappears2(){
	titre3.style.opacity="1"
	paragraphe3.style.opacity="1"
	paysage3.style.opacity="0.5"

}
function textleave2(){
	titre3.style.opacity="0"
	paragraphe3.style.opacity="0"
	paysage3.style.opacity="1"
}


/*CHECK EMAIL*/

function checkEmail(email) {
            ar email = document.myForm.email.value;
			atpos = email.indexOf("@");
			dotpos = email.lastIndexOf(".");

			if (atpos < 1 || ( dotpos - atpos < 2 )) {
				alert("Please enter correct email ID")
				document.myForm.email.focus() ;
				return false;
}
         }