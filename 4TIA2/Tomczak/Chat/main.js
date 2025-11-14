function sendMessage(){
    let input = document.getElementById('messageInput').value;
    let chat = document.querySelector('#chat');
    let newMessage = document.createElement("div");
    if (!input){
        return
    }
    newMessage.classList.add("message","krzysztof");
    newMessage.innerHTML=`<img src="Krzysiek.jpg" alt="Krzysztof Łukasiński"><p>${input}</p>`;
    chat.appendChild(newMessage);
    document.getElementById("messageInput")
}

function generateRandomReply(){
    let response = ["Niestety nie dam rady, może kiedy indziej?","Miło się z tobą dyskutuje","Musze lecieć zobaczymy się potem"];
    let choose = Math.floor(Math.random()* response.length);
    let chatting = document.querySelector('#chat');
    let generatedMessage = document.createElement("div");
    generatedMessage.classList.add("message","Jolanta");
    generatedMessage.innerHTML=`<img src="Jolanta.jpg" alt="Jolanta Nowak"><p>${response[choose]}<p>`
    chatting.appendChild(generatedMessage);
}