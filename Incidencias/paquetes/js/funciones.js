function limpiar(){
    
    document.form.reset();
    document.form.nom.focus();
}
function validar(){
    var form=document.form;
    if(form.nom.value==0){
        alert("ingrese su nombre");
        form.nom.value="";
        form.nom.focus();
        return false;
        
    }
    
    if(form.texto.value==0){
        alert("ingrese su texto");
        form.texto.value="";
        form.texto.focus();
        return false;
        
    }
    
   form.submit();
    
}