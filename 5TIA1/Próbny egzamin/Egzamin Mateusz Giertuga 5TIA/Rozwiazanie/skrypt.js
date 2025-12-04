const replies = [
"Świetnie!",
"Kto gra główną rolę?",
"Lubisz filmy Tego reżysera?",
"Będę 10 minut wcześniej",
"Może kupimy sobie popcorn?",
"Ja wolę Colę",
"Zaproszę jeszcze Grześka",
"Tydzień temu też byłem w kinie na Diunie",
"Ja funduję bilety"
]

function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const messageText = messageInput.value;
    const chat = document.querySelector('#chat');
    const newMessage = document.createElement('div');
    newMessage.classList.add('message', 'jolanta');
    newMessage.innerHTML = "<img src='Jolka.jpg' alt='Jolanta Nowak'><p>" + messageText + "</p>";
    chat.appendChild(newMessage);
    newMessage.scrollIntoView();
    messageInput.value = '';
}

