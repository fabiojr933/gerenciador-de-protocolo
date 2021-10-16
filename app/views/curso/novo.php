<br>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <a href="<?php echo URL_BASE . "curso/index" ?>" type="submit" class="float-right btn btn-primary">Voltar</a>
                <h5 class="header-title pb-3">Cadastro de curso</h5>
                <div class="general-label">
                    <form action="<?php echo URL_BASE . "curso/salvar" ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" required class="form-control" name="nome_curso" value="<?php echo isset($curso->descricao) ? $curso->descricao : '' ?>" placeholder="Digite o nome do curso">
                        </div>
                        <input type="hidden" name="id_curso" value="<?php echo isset($curso->id_curso) ? $curso->id_curso : null ?>">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>