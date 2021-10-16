<br>




<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
  <div class="widget-content widget-content-area br-6">
    <div class="table-responsive mb-4 mt-4">
      <table id="datatable" class="table table-hover" style="width:100%">
        <thead>
          <tr>
            <th width="5%" align="left">Aluno</th>
            <th width="35%" align="left">Curso</th>
            <th width="20%" align="left">Matricula</th>
            <th width="20%" align="left">Protocolo</th>
            <th width="4%" align="center" class="no-content">Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista as $aluno) { ?>

            <tr>
              <td><?php echo $aluno->nome_aluno ?></td>
              <td><?php echo $aluno->curso ?></td>
              <td><?php echo $aluno->matricula ?></td>
              <td><?php echo $aluno->protocolo ?></td>
              <td> <a href="<?php echo URL_BASE . "aluno/editar/" . $aluno->id_aluno ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg></a></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>