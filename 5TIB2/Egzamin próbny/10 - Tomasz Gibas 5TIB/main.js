const t1 = document.getElementById('t1'),
t2 = document.getElementById('t2'),
t3 = document.getElementById('t3'),
t4 = document.getElementById('t4'),
t5 = document.getElementById('t5')

function skrypt(){
    const x = parseInt(document.getElementById('skr').value)
    t1.style = 'background-color: hsl(' + x + ',100% , 50%)'
    t2.style = 'background-color: hsl(' + x + ',80% , 50%)'
    t3.style = 'background-color: hsl(' + x + ',60% , 50%)'
    t4.style = 'background-color: hsl(' + x + ',40% , 50%)'
    t5.style = 'background-color: hsl(' + x + ',20% , 50%)'
    }
