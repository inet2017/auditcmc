<?php 
    // Cargamos las variable .ENV
    require_once __DIR__ . '/../../../config/env.php';
    cargarDotEnv(__DIR__ . '/../../../.env');

?>
<!-- Cabecera -->
<?php include_once __DIR__ . '/../../header.php'; ?>


<!-- Cierre Head y Menú -->
<?php include_once __DIR__ . '/../../menu.php'; ?>

<!-- Main Content -->



<!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">Listado de contratos</h5>
                <div class="action-btns">
                  <a href="javascript:history.back()" class="btn btn-link align-middle">
                    <span class="align-middle">← Volver</span>
                  </a>
                  <button class="btn btn-primary" 
                        type="button" 
                        data-bs-toggle="offcanvas" 
                        data-bs-target="#add-new-record"
                        aria-controls="add-new-record">
                      Nuevo contrato
                </button>
                </div>
              </div>


                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Contrato</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($data['contratos'] as $contrato): ?>
                            <tr>
                                <td>
                                <i class="icon-base bx bxl-angular icon-md text-danger me-4"></i> 
                                    <span><?= htmlspecialchars($contrato['nombre']) ?></span>
                                </td>
                               
                                
                                <td><span class="badge bg-label-primary me-1">Activo</span></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=editar_contrato&id=<?= htmlspecialchars($contrato['id']) ?>"
                                        ><i class="icon-base bx bx-edit-alt me-1"></i> Editar</a
                                    >
                                    <a class="dropdown-item"
                                      href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=eliminar_contrato&id=<?= htmlspecialchars($contrato['id']) ?>"
                                      onclick="return confirm('¿Estás seguro de eliminar este contrato?');">
                                      <i class="icon-base bx bx-trash me-1"></i> Eliminar
                                    </a>

                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->



            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->

  <!-- Modal para nuevo contrato -->
  <div class="offcanvas offcanvas-end" id="add-new-record">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="exampleModalLabel">Nuevo Contrato</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body flex-grow-1">
      <form class="add-new-record pt-0 row g-2" id="form-add-new-record" method="POST" action="index.php?action=crear_contrato">
        
        <div class="col-sm-12 form-control-validation">
          <label class="form-label" for="basicPost">Nombre del contrato</label>
          <div class="input-group input-group-merge">
            <span id="basicPost2" class="input-group-text"><i class="icon-base bx bxs-briefcase"></i></span>
            <input type="text" id="nombre" name="nombre" class="form-control dt-post" placeholder="Nombre del contrato" aria-label="Nombre del contrato" aria-describedby="basicPost2" />
          </div>
        </div>
        
       
        
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary data-submit me-sm-4 me-1">Enviar</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Modal para nuevo contrato  -->

<!-- Footer -->
<?php include_once __DIR__ . '/../../footer.php'; ?>