function openChat(){
    document.getElementById('formChat').style.display = "block";
}
function closeChat(){
    document.getElementById('formChat').style.display ="none";
}


function addMessage(item){
    document.getElementById('chatContent').insertAdjacentHTML(
        "beforeend",
        "<div class='message bg-secondary text-white rounded-pill'>"
            + "<div>" + item.author + "</div>"
            + "<div>" + item.message + "</div>"
         + "</div>");
}

function getAll(){
    request = new XMLHttpRequest();
    url = 'http://localhost:8000/api/message'

    request.open('GET', url, true)
    request.onreadystatechange = function(){
        if(request.readyState == 4){
            if(request.status == 200){

                data = JSON.parse(request.responseText);
                data.forEach((item, indice) => addMessage(item));
            }
        }
    }
    request.send();
}

window.onload = function(){
    getAll();
}