<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../../mainHead.php");?>
    <title>Mantenimiento de Producto</title>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once("../../mainNavBar.php");?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once("../../mainSideBar.php");?>
        <!-- /Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Producto</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Mantenimiento</a></li>
                                <li class="breadcrumb-item active">Producto</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="px-2">
                    <p>Desde esta ventana podrá dar mantenimiento a productos</p>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-uppercase font-weight-bold">Mantenimiento de Producto</h2>
                    </div>
                    <div class="card-body py-1">
                            <button id="btn-nuevo" type="button" class="btn btn-block btn-outline-primary">Nuevo Registro</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body py-1">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="producto_data" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php require_once("../../mainFooter.php");?>
        <!-- /Footer -->

    </div>
    <!-- ./wrapper -->

    <?php require_once("./modalmantenimiento.php");?>

    <?php require_once("../../mainJScript.php");?>
</body>

</html>