const zapisane = [
    "Hej, świetnie!",
    "Nie mogę się doczekać!",
    "Co jeszcze planujemy?",
    "Może później?",
    "Dobra decyzja!",
    "Zgadza się.",
    "Brzmi dobrze.",
    "Ciekawy pomysł!",
    "Spróbujmy!"
];

function Wyslij() {
    const messageInput = document.getElementById('messageInput');
    const messageText = messageInput.value;
    const chat = document.querySelector('#chat');
    const newMessage = document.createElement('div');

    newMessage.classList.add('message', 'jolanta');
    newMessage.innerHTML = "<img src='jolka.png' alt='Jolanta Nowak'><p>" + messageText + "</p>";

    chat.appendChild(newMessage);
    newMessage.scrollIntoView();
    messageInput.value = '';
}

function random() {
    const randomIndex = Math.floor(Math.random() * zapisane.length);
    const replyText = zapisane[randomIndex];
    const chat = document.querySelector('#chat');
    const newMessage = document.createElement('div');
    
    newMessage.classList.add('message', 'krzysztof');
    newMessage.innerHTML = "<img src='Krzysiek.jpg' alt='Krzysztof Łukasiński'><p>" + replyText + "</p>";
    chat.appendChild(newMessage);
    newMessage.scrollIntoView();
}
