$(function(){
if (localStorage.getItem("Logeo")==null) {
    window.location="index.html";
}

});


function __ajax(usuario){
    var ajax=$.ajax({
    type:'POST',
    url: url,
    data:{'user':usuario}
    })
return ajax;
}

