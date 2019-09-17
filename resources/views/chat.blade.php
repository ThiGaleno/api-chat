<div class="openChat">
    <button class="btn btn-primary" onClick="openChat()"> Abrir Chat </button>
</div>

<div class="chat bg-dark " id="formChat">
    <div id="chatContent" class="card border-0 bg-dark">
        <div class="card-header bg-primary">
            <div class="row chatHeader">
                <div class="col">
                    <div class="chatTitle" onClick="closeChat()">Chat-Desktopper</div>
                </div>
                <div class="col">
                    <div class="closeChat" onClick="closeChat()"> X </div>
                </div>
            </div>
        </div>

        <div class="message bg-secondary text-white rounded-pill">
            <div>Autor</div>
            <div>Mensagem da pessoa que manda coisa no chat</div>
        </div>
        <div class="message bg-secondary text-white rounded-pill">
            <div>Autor</div>
            <div>Mensagem da pessoa que manda coisa no chat</div>
        </div>
    </div>

    <div class="cardFooter"> 
        <form>
            <div class="input-group">
                <input type="text" name="msgChat" class="bgTextChat form-control text-white bg-secondary border" />
                <button class="button btn-dark border" onClick="getAll()"> Enviar </button>                                     
            </div>      
        </form>
    </div>
</div>
