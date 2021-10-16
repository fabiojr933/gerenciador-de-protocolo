function excluir(obj) {
	var entidade = $(obj).attr('data-entidade');
	var id = $(obj).attr('data-id');
	if (confirm('Deseja realmente excluir ?')) {
		console.log(id);
		window.location.href = base_url + entidade + "/excluir/" + id;
	}
}
function fecharMsg(obj) {
	$(".msg").hide();
}


//datatable
$(function () {
	// DATATABLES
	$('#datatable').DataTable({
		responsive: true,
		"pageLength": 10,
		"language": {
			"sEmptyTable": "Nenhum registro encontrado",
			"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
			"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
			"sInfoFiltered": "(Filtrados de _MAX_ registros)",
			"sInfoPostFix": "",
			"sInfoThousands": ".",
			"sLengthMenu": "_MENU_ resultados por página",
			"sLoadingRecords": "Carregando...",
			"sProcessing": "Processando...",
			"sZeroRecords": "Nenhum registro encontrado",
			"sSearch": "Pesquisar",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			},
			"oAria": {
				"sSortAscending": ": Ordenar colunas de forma ascendente",
				"sSortDescending": ": Ordenar colunas de forma descendente"
			}
		},
	});

});

$(function () {
	$("#aluno").on("change", function () {
		var id_aluno = $("#aluno").val();
		$.ajax({
			url: base_url + "documento/buscarAluno/" + id_aluno,
			type: "POST",
			dataType: "json",
			data: {},
			success: function (data) {
				listaCursoAluno(data);
			}
		});
	});
});
function listaCursoAluno(data) {
	html = "<select class='form-control' name='curso' id='curso'></select>"
	html += "<option value=" + data.id_curso + ">" + data.descricao + "</option>";
	html += '</select>'
	$("#curso").html(html);
	$("#curso").show();
	console.log(html);

}

