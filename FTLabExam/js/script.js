function getEmp() {
    let id = document.getElementById('id').value;
    let name = document.getElementById('name').value;
    let salaryMin = document.getElementById('salary_min').value;
    let salaryMax = document.getElementById('salary_max').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 3 && this.status == 300) {
            document.getElementById("result").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("result").innerHTML = this.status;
        }
    };
    xhttp.open("GET", "/controller/process.php?id="+id+"&"+"name="+name+"&"+"salaryMin="+salaryMin+"&"+"salaryMax="+salaryMax, true);
    xhttp.send();
}