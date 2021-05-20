var duze = /^[A-Z]$/;
var male = /^[a-z]$/;
var cyfry = /^[0-9]$/;
var odstepy = " "; //var odstepy = "/^\s$";
haslo.onkeydown = function(x) {
    var d = 0;
    var m = 0;
    var c = 0;
    var o = 0;
    var z = 0;
    if (x.keyCode == 13) {
        var has = document.getElementById("haslo").value;
        var znak;
        for (var i = 0, i< has.length; i++)
            {
                znak = has[i].search(duze)
                if(znak == 0)
                    d++;
            }
        for (var i = 0, i< has.length; i++)
            {
                znak = has[i].search(male)
                if(znak == 0)
                    m++;
            }
        for (var i = 0, i< has.length; i++)
            {
                znak = has[i].search(cyfry)
                if(znak == 0)
                    c++;
            }
        for (var i = 0, i< has.length; i++)
            {
                znak = has[i].search(odstepy)
                if(znak == 0)
                    o++;
            }
        z= has.length-d-m-c-o;
    }
    if(d>=3 && n>=2 && (c>=2 || o>=1 ) && z>=2)
        {
            haslo.style.border = "2px solid green";
        }
    else
        {
            haslo.style.border = "2px solid red";
        }
    document.getElementById("lista").innerHTML = "<li>Wielkie litery"+d+"</li>"+"<li>Małe litery"+m+"</li>"+"<li>Cyfry"+c+"</li>"+"<li>Odstępy"+o+"</li>"+ "<li>Pozostałe znaki"+z+"</li>"
}



