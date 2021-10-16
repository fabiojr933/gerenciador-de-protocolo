<form action="<?php echo URL_BASE . "documento/salvar" ?>" method="post" enctype="multipart/form-data">
    <div id="treeviewAnimated" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Importar</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <ul class="file-tree">
                    <li class="file-tree-folder">Dados
                        <ul>
                            <li>
                                <label class="col-lg-3 control-label">Aluno </label>
                                <select class="form-control" name="aluno" id="aluno">
                                    <?php foreach ($alunos as $aluno) { ?>
                                        <option value="<?php echo $aluno->id_aluno ?>"><?php echo $aluno->nome ?></option>
                                    <?php } ?>
                                </select>
                            </li>
                            <li>
                                <label class="col-lg-3 control-label">Curso </label>
                                <select class="form-control" name="curso" id="curso">
                                    <option value=""></option>
                                </select>
                            </li>
                        </ul>
                    </li>
                    <li class="file-tree-folder">RG
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="rg01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="rg02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="rg03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>


                    <li class="file-tree-folder">CPF
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="cpf01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="cpf02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="cpf03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>

                    <li class="file-tree-folder">Histórico escolar
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="historico01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="historico02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="historico03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>

                    <li class="file-tree-folder">Diploma/Certificado de conclusão do Ensino Médio
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certificado01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certificado02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certificado03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>

                    <li class="file-tree-folder">Reservista
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="reservista01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="reservista02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="reservista03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>


                    <li class="file-tree-folder">Foto 3x4
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="foto01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="foto02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="foto03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>


                    <li class="file-tree-folder">Titulo de eleitor
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="eleitor01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="eleitor02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="eleitor03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>


                    <li class="file-tree-folder">Certidao casamento ou nascimento
                        <ul>
                            <li>
                                <label>Copia 01<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certidao01" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 02<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certidao02" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                            <li>
                                <label>Copia 03<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"> - </a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="certidao03" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Salvar Documentos</button>
</form>
















<!--


<br>
<br>
<form action=" <?php echo URL_BASE . "documento/salvar" ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h5 class="header-title pb-3">Importar</h5>
                    <div id="wizard-vertical">
                        <h2>Dados</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label">Aluno </label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="aluno" id="aluno">
                                        <?php foreach ($alunos as $aluno) { ?>
                                            <option value="<?php echo $aluno->id_aluno ?>"><?php echo $aluno->nome ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label " for="password"> Curso </label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="curso" id="curso">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </section>


                        <h2>RG</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> RG Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="rg01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> RG Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="rg02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> RG Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="rg03">
                                </div>
                            </div>
                        </section>

                        <h2>CPF</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> CPF Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="cpf01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> CPF Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="cpf02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> CPF Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="cpf03">
                                </div>
                            </div>
                        </section>

                        <h2>Histórico escolar</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Histórico escolar Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="historico01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Histórico escolar Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="historico02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Histórico escolar Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="historico03">
                                </div>
                            </div>
                        </section>

                        <h2>Diploma/Certificado de conclusão do Ensino Médio</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certificado Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certificado01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certificado Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certificado02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certificado Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certificado03">
                                </div>
                            </div>
                        </section>

                        <h2>Reservista</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Reservista Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="reservista01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Reservista Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="reservista02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Reservista Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="reservista03">
                                </div>
                            </div>
                        </section>

                        <h2>Foto 3x4</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Foto 3x4 Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="foto01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Reservista Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="foto02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Reservista Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="foto03">
                                </div>
                            </div>
                        </section>

                        <h2>Titulo de eleitor</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Titulo de eleitor Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="eleitor01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Titulo de eleitor Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="eleitor02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Titulo de eleitor Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="eleitor03">
                                </div>
                            </div>
                        </section>


                        <h2>Certidao casamento ou nascimento</h2>
                        <section class="mt-4 ml-2">
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certidao casamento ou nascimento Upload 01</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certidao01">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certidao casamento ou nascimento Upload 02</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certidao02">
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <label class="col-lg-3 control-label" for="name"> Certidao casamento ou nascimento Upload 03</label>
                                <div class="form-group">
                                    <label>Enviar arquivo</label>
                                    <input type="file" class="form-control-file" name="certidao03">
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Salvar Documentos</button>
</form>

                                        -->