function openChat(){
    document.getElementById('formChat').style.display = "block";
}
function closeChat(){
    document.getElementById('formChat').style.display ="none";
}

//Recebe mensagem de getAll() e adiciona ao CHAT com uma DIV completa
function addMessage(item){
    document.getElementById('chatContent').insertAdjacentHTML(
        "beforeend", 
        "<div class='message bg-secondary text-white rounded-pill'>"
            + "<div>" + item.author + " disse: "+ "</div>"
            + "<div>" + item.message + "</div>"
         + "</div>");
}

//Recupera o JSON (mensagens) da URL abaixo
function getAll(){
    request = new XMLHttpRequest();
    url = 'http://localhost:8000/api/message'

    request.open('GET', url, true)
    request.onreadystatechange = function(){
        if(request.readyState === 4){           //nao sei pra que serve, mas é necessário
            if(request.status === 200){         //algo em relação ao status de sucesso da requisição API
                data = JSON.parse(request.responseText);
                data.forEach((item) => addMessage(item));
            }
        }
    }
    request.send();
}

window.onload = function(){
    getAll();
    openChat();
}
