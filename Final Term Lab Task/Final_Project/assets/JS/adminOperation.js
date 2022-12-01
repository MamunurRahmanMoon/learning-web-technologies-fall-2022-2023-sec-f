function ajax(){
    let name = document.getElementById('searchAdmin').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+name);
    xhttp.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;
        }
        
    }
}