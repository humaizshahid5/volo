function collapse(name, id) {
    var div = document.getElementById(name);
    var Chck = document.getElementById(id);
    if (Chck.innerHTML == "Collapse") {

        div.style.display = 'none';
        Chck.innerHTML = "View";

    }
    else if (Chck.innerHTML == "View") {
        div.style.display = 'block';
        Chck.innerHTML = "Collapse";

    }
        
    
 }