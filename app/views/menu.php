<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>


    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">


                <li class="menu">
                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> Cadastros</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                        <li>
                            <a href="<?php echo URL_BASE . "usuario/index" ?>"> Usuarios </a>
                        </li>
                        <li>
                            <a href="<?php echo URL_BASE . "aluno/index" ?>"> Alunos </a>
                        </li>
                        <li>
                            <a href="<?php echo URL_BASE . "curso/index" ?>"> Cursos </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span> Documentos</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                        <li>
                            <a href="<?php echo URL_BASE . "documento/upload" ?>"> Upload </a>
                        </li>
                        <li>
                            <a href="<?php echo URL_BASE . "documento/lista" ?>"> Atualizar Documentos </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

    </div>

    <!--  END SIDEBAR  -->