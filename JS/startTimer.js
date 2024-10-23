function startTimer(){
    let shc = new Date();

    var day = shc.toDateString();
    // var dd = shc.getDay();
    // var mm = shc.getMonth();
    // var yy = shc.getFullYear();
    // var datestr = shc.toDateString();

    var h = shc.getHours();
    var m = shc.getMinutes();
    var s = shc.getSeconds();

    
    
    h = addZero(h);
    m = addZero(m);
    s = addZero(s);

    document.getElementById("tmr").innerHTML =day + " " + h+":"+m+":"+s;
    t = setTimeout("startTimer()",1000);
    }

function addZero(z) {
    if (z < 10) {
        z = "0" + z;
    }
    return z;
}