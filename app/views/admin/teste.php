




<form action="/admin/create" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='id' placeholder=":)">
                            <small id="emailHelp" class="form-text text-muted">Indique o nome para o cadastro</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='name' placeholder="maromba@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='email' placeholder="maromba@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder=" ">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning" id="conf-modal">Adicionar</button>
                        </div>
                    </form>



    <div class="modal fade" id="modal-view-<?=$function->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Visualização de usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/admin/show" method="GET">
              <input type="hidden" value="<?=$function->id?>" name="id">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome de usuário:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function->nome?>" readonly placeholder="">     
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function->email?>" readonly placeholder="">     
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?=$function->senha?>" readonly placeholder="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div> 
</div>


<?php foreach ($users as $function) : ?>
        <div class="modal-body">
            <form action="/admin/show" method="GET">
              <input type="hidden" value="<?=$function->id?>" name="id">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome de usuário:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function->name?>" readonly placeholder="">     
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function->email?>" readonly placeholder="">     
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?=$function->password?>" readonly placeholder="">
                </div>
            </form>
        </div>
      </div>
      <?php endforeach; ?>    