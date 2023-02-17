let hide=document.getElementById("hide");
let show=document.getElementById("show");
function change(){
  const tipo=document.getElementById("pswd");
  if(tipo.type=="password"){
    tipo.type="text";
    show.classList.toggle('active');
    hide.classList.toggle('active');
  }else{
    tipo.type="password";
    show.classList.toggle('active');
    hide.classList.toggle('active');
  }
}