<br>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <a href="<?php echo URL_BASE . "aluno/index" ?>" type="submit" class="float-right btn btn-primary">Voltar</a>
                <h5 class="header-title pb-3">Cadastro de Aluno</h5>
                <div class="general-label">
                    <form action="<?php echo URL_BASE . "aluno/salvar" ?>" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" required name="nome_aluno" value="<?php echo isset($aluno->nome) ? $aluno->nome : '' ?>" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email_aluno" value="<?php echo isset($aluno->email) ? $aluno->email : '' ?>" placeholder="Digite seu email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Endereco</label>
                                <input type="text" class="form-control" required name="endereco_aluno" value="<?php echo isset($aluno->endereco) ? $aluno->endereco : '' ?>" placeholder="Digite seu endereço">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Bairro</label>
                                <input type="text" class="form-control" name="bairro_aluno" value="<?php echo isset($aluno->bairro) ? $aluno->bairro : '' ?>" placeholder="Digite seu bairro">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Cidade</label>
                                <input type="text" class="form-control" required name="cidade_aluno" value="<?php echo isset($aluno->cidade) ? $aluno->cidade : '' ?>" placeholder="Digite sua cidade">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Telefone</label>
                                <input type="number" class="form-control" required name="telefone_aluno" value="<?php echo isset($aluno->telefone) ? $aluno->telefone : '' ?>" placeholder="Digite seu telefone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Matricula</label>
                                <input type="text" class="form-control" required name="matricula_aluno" value="<?php echo isset($aluno->matricula) ? $aluno->matricula : '' ?>" placeholder="Digite sua matricula">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col-lg-6"> Curso </label>
                                <select class="form-control" name="curso">
                                    <?php foreach ($curso as $lista) { ?>
                                        <option value="<?php echo isset($lista->id_curso) ? $lista->id_curso : null ?>"  <?php echo $aluno->id_curso == $lista->id_curso ? "selected" : null ?>><?php echo $lista->descricao ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>
                        <input type="hidden" name="data_cadastro" value="<?php echo isset($aluno->data_cadastro) ? $aluno->data_cadastro : null ?>">
                        <input type="hidden" name="id_aluno" value="<?php echo isset($aluno->id_aluno) ? $aluno->id_aluno : null ?>">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

