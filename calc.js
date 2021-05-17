function insert(num) {
document.form.text.value=document.form.text.value+num
} function clean(){
	document.form.text.value="";
}
function equal(){
	var exp=document.form.text.value;
	if (exp){
		document.form.text.value=eval(exp);
	}
}
function expo(){
	var exp=document.form.text.value;
	if(exp){
		document.form.text.value=Math.sqrt(exp)
	}
}
function cube(){
	var exp=document.form.text.value;
	if(exp){
		document.form.text.value=Math.cbrt(exp)
	}
}
function back(){
	var exp=document.form.text.value;
	if(exp){
		document.form.text.value=exp.substr(0,exp.length-1);
	}
}
