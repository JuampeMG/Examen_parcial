function Quotes(){
    var sentences = document.getElementById("sentences").value;
    if (sentences !=  '') {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("suggestions").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "main.php?quotes=" + sentences, true);
        xhttp.send();
    }
    else{
        document.getElementById("suggestions").innerHTML = "<p> [nada] </p>";
    }


}