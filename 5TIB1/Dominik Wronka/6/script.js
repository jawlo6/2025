function chatuj(){
       let parent=document.getElementById("chatbox");
       let child=document.createElement("div");
       child.setAttribute("id", "Jolanta");

       let zdj=document.createElement("img");
       zdj.setAttribute("src", "Jolka.png");
       zdj.setAttribute("alt", "Jolanta Nowak");
       
       child.appendChild(zdj);

    

       let akapit=document.createElement("p");
       akapit.textContent=document.getElementById("msg").value;

       child.appendChild(akapit);
       
       parent.appendChild(child);
}

function generuj(){


let parent=document.getElementById("chatbox");
       let child=document.createElement("div");
       child.setAttribute("id", "Krzysztof");

       let zdj=document.createElement("img");
       zdj.setAttribute("src", "Krzysiek.jpg");
       zdj.setAttribute("alt", "Krzysztof Łukasiński");
       
       child.appendChild(zdj);

       let akapit=document.createElement("p");

    let tab =["Świetnie!",
"Kto gra główną rolę?",
"Lubisz filmy Tego reżysera?",
"Będę 10 minut wcześniej",
"Może kupimy sobie popcorn?",
"Ja wolę Colę",
"Zaproszę jeszcze Grześka",
"Tydzień temu też byłem w kinie na Diunie",
"Ja funduję bilety"]
let indeks = Math.floor(Math.random()*8);
       akapit.textContent = tab[indeks];

       child.appendChild(akapit);
       
       parent.appendChild(child);
}
