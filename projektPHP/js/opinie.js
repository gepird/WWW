if(document.getElementById('control-div').getAttribute('value')==='1'){
    localStorage.setItem('opinion-added', 'true');
}

if(localStorage.getItem('opinion-added')){
    document.getElementById('form-div').style.display='none';
}else{
    document.getElementById('greetings-div').style.display='none';
    var rez=Math.floor(Math.random()*9)+1, imz=Math.floor(Math.random()*9)+1;
    var b=2*rez, c=rez*rez+imz*imz;
    document.getElementById('rez').setAttribute('value', rez);
    document.getElementById('imz').setAttribute('value', imz);
    document.getElementById('polynomial').innerText="Podaj jeden z pierwiastków wielomianu $x^2+"+b+"x+"+c+"$ w postaci $a+bi$:";
}