// vanilla js

window.onload=preparePage();

function preparePage(){
    var bodyID = document.body.id;
    if (bodyID==="index"){
        readMore();
    } else if (bodyID==="policies") {
        loadDoc();
    }
}

// display hidden text 
function readMore() {
    var readMore = document.getElementById("readmore");
    readMore.addEventListener("click", function() {
        var text = document.getElementById("more");
        if (text.classList.contains("collapse")) {
            text.classList.remove("collapse");
            readMore.innerHTML = "Read Less";    
        } else {
            text.classList.add("collapse");
            readMore.innerHTML = "Read More";    
        }
    });   
}

// load privacy policy document
function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
        }
    };
    
    xhttp.open("GET", "documents/GDPR.txt", true);
    
    xhttp.send();
}