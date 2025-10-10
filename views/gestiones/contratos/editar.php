<?php 
    // Cargamos las variable .ENV
    require_once __DIR__ . '/../../../config/env.php';
    cargarDotEnv(__DIR__ . '/../../../.env');

?>
<!-- Cabecera -->
<?php include_once __DIR__ . '/../../header.php'; ?>


<!-- Cierre Head y Menú -->
<?php include_once __DIR__ . '/../../menu.php'; ?>

<!-- Contenido principal -->
<div class="container-xxl flex-grow-1 container-p-y">
<!-- Formulario de edición/Visualización -->
              <div class="row mb-12 gy-12">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                     
                      <h5 class="mb-0">Contrato <?= htmlspecialchars($contrato['nombre']) ?> </h5>
                      <small class="text-body-secondary float-end">Vista contrato</small>
                    </div>
                    <div class="card-body">
                      <form action="index.php?action=actualizar_contrato" method="POST">
                        <div class="row mb-6">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre</label>
                          <div class="col-sm-10">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($contrato['id']) ?>" />
                            <input type="text" name="nombre" class="form-control" id="basic-default-name" placeholder="Nombre del contrato" value="<?= htmlspecialchars($contrato['nombre']) ?>"/>
                          </div>
                        </div>
                        <div class="row mb-6">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Estado</label>
                          <div class="col-sm-10">
                            <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox"
                                  id="bootstrapValidationSwitch" name="estado"
                                  value="1" <?= !empty($contrato['estado']) ? 'checked' : '' ?>>
                          </div>
                          </div>
                        </div>
                        <div class="row mb-6">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Descripción</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              name="descripcion"
                              class="form-control"
                              placeholder="Descripción del contrato"
                              aria-label="Descripción del contrato"
                              aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                 <!-- Cierre Basic Layout -->
              </div>
</div>
<!-- Cierre Main Content -->
<!-- Footer -->
<?php include_once __DIR__ . '/../../footer.php'; ?>