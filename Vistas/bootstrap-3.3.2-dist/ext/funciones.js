

function modall(tit,ur,descri){
    
    document.getElementById('titulo').innerHTML=tit;
    document.getElementById('imagen').setAttribute('src', "../Recursos/revista/"+ ur);
    document.getElementById('descripcion').innerHTML=descri;
    
    $('#modalito').modal({
        show: 'true'
    });

//alert(tit + " " + descri + " "+ ur);  
   
}


