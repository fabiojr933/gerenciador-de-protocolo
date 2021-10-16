<br>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <a href="<?php echo URL_BASE . "usuario/index" ?>" type="submit" class="float-right btn btn-primary">Voltar</a>
                <h5 class="header-title pb-3">Cadastro de Usuario</h5>
                <div class="general-label">
                    <form action="<?php echo URL_BASE . "usuario/salvar" ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="nome_usuario" required placeholder="Digite seu nome" value="<?php echo isset($usuario->nome) ? $usuario->nome : '' ?>">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email_usuario" required placeholder="Digite seu email" value="<?php echo isset($usuario->email) ? $usuario->email : '' ?> ">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" name="senha_usuario" required placeholder="Password">
                        </div>
                        <input type="hidden" name="data_cadastro" value="<?php echo isset($usuario->data_cadastro) ? $ussuario->data_cadastro : null ?>">
                        <input type="hidden" name="id_usuario" value="<?php echo isset($usuario->id_usuario) ? $usuario->id_usuario : null ?>">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>