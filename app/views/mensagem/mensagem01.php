<script>
  swal({
      title: "Você não pode deletar esse curso",
      text: "Esse curso esta vinculado a um aluno! \n Voce vai se direcionado para a pagina inicial",
      icon: "warning",
      buttons: false,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Voce vai se direcionado para a pagina inicial", {
          icon: "success",
        });
      }
    });
  setTimeout(function() {
    location.href = base_url + "curso/index";
  }, 6000)
</script>


<div class="widget-content widget-content-area">
  <div class="infobox-3">
    <div class="info-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
        <line x1="12" y1="22.08" x2="12" y2="12"></line>
      </svg>
    </div>
    <h5 class="info-heading">Você não pode deletar esse curso</h5>
    <p class="info-text">Esse curso esta vinculado a um aluno! Voce vai se direcionado para a pagina inicial</p>
    <a class="info-link" href="<?php echo URL_BASE . "curso/index" ?>">OK <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <polyline points="12 5 19 12 12 19"></polyline>
      </svg></a>
  </div>

  <div class="code-section-container">

    <button class="btn toggle-code-snippet"><span></span></button>

    <div class="code-section text-left">
      <pre>
&lt;div class="infobox-3"&gt;
    &lt;div class="info-icon"&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;h5 class="info-heading"&gt;Layout Package&lt;/h5&gt;
    &lt;p class="info-text"&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
    &lt;a class="info-link" href=""&gt;Discover &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
    </div>
  </div>
</div>