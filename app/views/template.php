<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Gerenciador Protocolos </title>
    <link rel="icon" type="image/x-icon" href="<?php echo URL_BASE ?>assets/assets/img/favicon.ico" />
    <link href="<?php echo URL_BASE ?>assets/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo URL_BASE ?>assets/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL_BASE ?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL_BASE ?>assets/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo URL_BASE ?>assets/assets/css/elements/infobox.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/plugins/table/datatable/dt-global_style.css">
    <link href="<?php echo URL_BASE ?>assets/assets/css/elements/custom-tree_view.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo URL_BASE ?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <script>
        var base_url = "<?php echo URL_BASE ?>";
    </script>
</head>

<body>
    <?php include "cabecalho.php"; ?>
    <!--  BEGIN MAIN CONTAINER  -->
    <?php include "menu.php"; ?>
    <!--  BEGIN CONTENT PART  -->

    <div id="content" class="main-content">
        <div class="layout-px-spacing"><br>
            <?php $this->load($view, $viewData); ?>
            <div class="row layout-top-spacing">
            </div>

        </div>
        <?php include "rodape.php"; ?>
    </div>
    <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="<?php echo URL_BASE ?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/assets/js/app.js"></script>
    <script src="<?php echo URL_BASE ?>assets/assets/js/js.js"></script>



    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo URL_BASE ?>assets/assets/js/custom.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/table/datatable/datatables.js"></script>

    <script src="<?php echo URL_BASE ?>assets/plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo URL_BASE ?>assets/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo URL_BASE ?>assets/assets/js/scrollspyNav.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/treeview/custom-jstree.js"></script>


</body>

</html>