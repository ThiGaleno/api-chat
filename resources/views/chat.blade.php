<div class="openChat">
    <button class="btn btn-primary" onClick="openChat()"> Abrir Chat </button>
</div>

<div class="chat" id="formChat">
    <div class="card">
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

        <div class="card-body">
            body
        </div>
    </div>

    <div class="cardFooter"> 
        <form>
            <div class="input-group">
                <input type="text" class="form-control" />
                <button class="button"> Enviar </button>                                     
            </div>      
        </form>
    </div>
</div>
