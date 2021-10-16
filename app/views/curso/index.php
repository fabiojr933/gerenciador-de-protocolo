  <div class="page-head">
    <div class="col-lg-12 col-sm-12">
      <a href="<?php echo URL_BASE . "curso/novo" ?>" type="submit" class="float-right btn btn-primary">Novo</a>
      <h5 class="header-title">Lista de cursos</h5>
    </div>
  </div><br><br>



  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
      <div class="table-responsive mb-4 mt-4">
        <table id="datatable" class="table table-hover" style="width:100%">
          <thead>
            <tr>
              <th width="5%" align="left">Id</th>
              <th width="50%" align="left">Descrição</th>
              <th width="4%" align="center" class="no-content">Editar</th>
              <th width="4%" align="center" class="no-content">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lista_curso as $curso) { ?>
              <tr>
                <td><?php echo $curso->id_curso ?></td>
                <td><?php echo $curso->descricao ?></td>
                <td> <a href="<?php echo URL_BASE . "curso/editar/" . $curso->id_curso ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                      <path d="M12 20h9"></path>
                      <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg></a></td>
                <td class="text-center"> <a href="<?php echo URL_BASE . "curso/excluir/" . $curso->id_curso  ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>





  <!-- Modal -->
  <div class="modal fade" id="excluirModalCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <a href="<?php echo URL_BASE . "curso/excluir/" . $curso->id_curso  ?>" class="btn btn-primary">Confirmar</a>
        </div>
      </div>
    </div>
  </div>