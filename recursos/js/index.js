function Eliminar(id){
    if(confirm("¿Estas seguro eliminar los datos de: " + id + " ?")){
        window.location = "index.php?Eliminar=" + id + "#tbl_data";
    }
}

function Modificar(id){
    if(confirm("¿Deseas modificar los datos de: " + id + " ?")){
        window.location = "index.php?Modificar=" + id + "#ing_data";
    }
}

const button = document.getElementById("btnopcion");
button.addEventListener('input',  function() {
const op = this.options[this.selectedIndex];
alert(op.value);
});



