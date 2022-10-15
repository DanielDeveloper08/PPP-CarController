<?php
require_once '../partials/header.php';
?>

<div class="container divContenedor " >
    <div id="styleDivPrincipalAdministracion" class="row pt-4 pb-4 ">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingresar Articulo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="p-1" method="POST" action="">
                            <div class="mb-3">
                                <label class="form-label">Codigo</label>
                                <input type="number" class="form-control" name="txtCodigo" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="txtFabricante" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" class="form-control" name="txtCodigo" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fabricante</label>
                                <input type="text" class="form-control" name="txtFabricante" autofocus required>
                            </div>
                            <div class="">
                                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cerrar">
                                <input type="submit" class="btn btn-primary" value="Registrar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal Editar-->
        <div class="modal fade" id="exampleModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Articulo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="p-1" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Codigo</label>
                                <input type="number" class="form-control" id="txtCodigoEditar" name="txtCodigo" autofocus required readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="txtFabricanteEditar" name="txtFabricante" autofocus required>
                                <input type="hidden" name="id" id="idCategoriaUpdate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" class="form-control" id="txtCodigoEditar" name="txtCodigo" autofocus required readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fabricante</label>
                                <input type="text" class="form-control" id="txtFabricanteEditar" name="txtFabricante" autofocus required>
                                <input type="hidden" name="id" id="idCategoriaUpdate">
                            </div>
                            <div class="">
                                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cerrar">
                                <input type="submit" class="btn btn-primary" value="Editar" id="buttonEditar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- ********************************************************************************************    -->


        <div class="row justify-content-center mt-2">
            <div class="col-md-8">


                <!-- fin alerta -->
                <div class="card">
                    <div class="card-header text-center ">
                        Inventario de articulos
                    </div>
                    <div class="p-4">
                        <div class="filtro d-flex justify-content-between">
                            <div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="botonBuscar" class="btn btn-success" role=" button" data-bs-toggle="button"> <i class="bi bi-plus-circle"></i> Nuevo</a>
                            </div>
                            <form id="frmSearch" class="d-flex">
                                <input type="text" placeholder="código" size="" class="form-control" id="txtBuscar" name="txtBuscar">
                                <button id="fabricante" class="btn btn-primary d-flex" style="margin-left:10px;" type="submit" name="base"> <i class="bi bi-search px-1"></i> Buscar</button>
                            </form>
                        </div>
                        <hr>
                        <table class="table align-middle table-hover table-striped table-bordered text-center table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Fabricante</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="tblDatos">
                                
                                    <tr>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td><a class="btn btn-primary" href="#" data-bs-toggle="modal" id="inicializacion" data-bs-target="#exampleModalEditar"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td><a class="btn btn-primary" href="#" data-bs-toggle="modal" id="inicializacion" data-bs-target="#exampleModalEditar"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td><a class="btn btn-primary" href="#" data-bs-toggle="modal" id="inicializacion" data-bs-target="#exampleModalEditar"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td><a class="btn btn-primary" href="#" data-bs-toggle="modal" id="inicializacion" data-bs-target="#exampleModalEditar"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td>VALOR</td>
                                        <td><a class="btn btn-primary" href="#" data-bs-toggle="modal" id="inicializacion" data-bs-target="#exampleModalEditar"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>

                                    
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once '../partials/footer.php';
?>