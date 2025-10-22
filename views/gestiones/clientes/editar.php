
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

<!-- Contenido principal -->
<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Formulario de nuevo cliente -->

  <div class="col-12">
                    <div class="col-xl-12">
                
                  <div class="nav-align-top nav-tabs-shadow">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-home"
                          aria-controls="navs-justified-home"
                          aria-selected="true">
                          <span class="d-none d-sm-inline-flex align-items-center">
                            <i class="icon-base bx bx-home icon-sm me-1_5"></i>Ficha de cliente
                            
                            
                          </span>
                          <i class="icon-base bx bx-home icon-sm d-sm-none"></i>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-profile"
                          aria-controls="navs-justified-profile"
                          aria-selected="false">
                          <span class="d-none d-sm-inline-flex align-items-center"
                            ><i class="icon-base bx bx-user icon-sm me-1_5"></i>Contactos asociados</span
                          >
                          <i class="icon-base bx bx-user icon-sm d-sm-none"></i>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-messages"
                          aria-controls="navs-justified-messages"
                          aria-selected="false">
                          <span class="d-none d-sm-inline-flex align-items-center"
                            ><i class="icon-base bx bx-message-square icon-sm me-1_5"></i>Datos administrativos</span
                          >
                          <i class="icon-base bx bx-message-square icon-sm d-sm-none"></i>
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                       
                          <!--  TAB CONTENIDO DE FORM. CLIENTE -->

                                <div class="card">
                                  
                                  <div class="card-body">
                                    <form id="formValidationExamples" class="row g-6 fv-plugins-bootstrap5 fv-plugins-framework"  action="index.php?action=actualizar_cliente" method="POST">
                                      <!-- Datos de la empresa -->

                                      <div class="col-12">
                                        <h6>1. Datos Empresa</h6>
                                        <hr class="mt-0">
                                      </div>

                                      <input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationName">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?= htmlspecialchars($cliente['nombre']) ?>">
                                      <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <label class="form-label" for="formValidationEmail">Razón Social</label>
                                        <input class="form-control" type="text" id="razon_social" name="razon_social" placeholder="Razón social empresa" value="<?= htmlspecialchars($cliente['razon_social']) ?>">
                                      <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Cif</label>
                                            <input class="form-control" type="text" id="cif" name="cif" placeholder="Cif" value="<?= htmlspecialchars($cliente['cif']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Tipo empresa</label>
                                            <input class="form-control" type="text" id="tipo_empresa" name="tipo_empresa" placeholder="Tipo empresa" value="<?= htmlspecialchars($cliente['tipo_empresa']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Actividad</label>
                                            <input class="form-control" type="text" id="actividad" name="actividad" placeholder="Actividad sociedad" value="<?= htmlspecialchars($cliente['actividad']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        
                                      </div>
                                      <!-- FIN Datos de la empresa -->

                                      <!-- Información de dirección  -->

                                      <div class="col-12">
                                        <h6 class="mt-2">2. Dirección </h6>
                                        <hr class="mt-0">
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Dirección</label>
                                            <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección..." value="<?= htmlspecialchars($cliente['direccion']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Codigo Postal</label>
                                            <input class="form-control" type="text" id="codigo_postal" name="codigo_postal" placeholder="Codigo postal..." value="<?= htmlspecialchars($cliente['codigo_postal']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Población</label>
                                            <input class="form-control" type="text" id="poblacion" name="poblacion" placeholder="Población..." value="<?= htmlspecialchars($cliente['poblacion']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Provincia</label>
                                            <input class="form-control" type="text" id="provincia" name="provincia" placeholder="Provincia..." value="<?= htmlspecialchars($cliente['provincia']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Pais</label>
                                            <input class="form-control" type="text" id="pais" name="pais" placeholder="Pais..." value="<?= htmlspecialchars($cliente['pais']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                      
                                      </div>

                                      <!-- FIIN Información de dirección  -->

                                      <!-- Información de contacto  -->

                                      <div class="col-12">
                                        <h6 class="mt-2">3. Información de contacto </h6>
                                        <hr class="mt-0">
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Teléfono principal</label>
                                            <input class="form-control" type="text" id="telefono_principal" name="telefono_principal" placeholder="Teléfono..." value="<?= htmlspecialchars($cliente['telefono_principal']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Teléfono secundario</label>
                                            <input class="form-control" type="text" id="telefono_secundario" name="telefono_secundario" placeholder="Teléfono secundario..." value="<?= htmlspecialchars($cliente['telefono_secundario']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Email</label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="mail@mail.com..." value="<?= htmlspecialchars($cliente['email']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Sitio_web</label>
                                            <input class="form-control" type="text" id="sitio_web" name="sitio_web" placeholder="Sitio web..." value="<?= htmlspecialchars($cliente['sitio_web']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      
                                      <!-- FIN Información de contacto  -->

                                      <!-- Información de administrativa  -->

                                      <div class="col-12">
                                        <h6 class="mt-2">4. Informacion administrativa </h6>
                                        <hr class="mt-0">
                                      </div>

                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationPass">Tipo de contrato</label>
                                            
                                           <select name="tipo_contrato_id" class="form-select">
                                          <option value="">— Seleccione tipo de contrato —</option>
                                             <?php foreach ($data['contratoTipos'] as $tipo): ?>
                                              <option value="<?= (int)$tipo['id'] ?>" 
                                                <?= ((int)$cliente['tipo_contrato_id'] === (int)$tipo['id']) ? 'selected' : '' ?>>
                                                <?= htmlspecialchars($tipo['nombre']) ?>
                                              </option>
                                            <?php endforeach; ?>
                                        </select>

                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Número de contrato</label>
                                            <input class="form-control" type="text" id="sitnumero_contratoio_web" name="numero_contrato" placeholder="contrato número..." value="<?= htmlspecialchars($cliente['numero_contrato']) ?>">
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>


                                      <div class="col-12 form-control-validation fv-plugins-icon-container">
                                        <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="estado_cliente" name="estado_cliente" required="" value="<?= htmlspecialchars($cliente['estado_cliente']) ?>">
                                          <label class="form-check-label" for="formValidationSwitch">Activado</label>
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                      </div>



                                      <!-- FIN Información de administrativa   -->

                                      <!-- Otros  -->

                                      <div class="col-12">
                                        <h6 class="mt-2">5. Otros </h6>
                                        <hr class="mt-0">
                                      </div>

                                      
                                      <div class="col-md-12 form-control-validation fv-plugins-icon-container">
                                        <div class="form-password-toggle">
                                          <label class="form-label" for="formValidationConfirmPass">Observaciones</label>
                                          <textarea class="form-control" id="observaciones" name="observaciones" rows="3"><?= htmlspecialchars($cliente['observaciones']) ?></textarea>
                                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                      </div>

                                      <!--   FIN Otros  -->


                                     
                                      <div class="col-12 form-control-validation">
                                        <button type="submit" name="submitButton" class="btn btn-primary">Enviar</button>
                                      </div>
                                    <input type="hidden"></form>
                                  </div>
                                </div>
                              </div>




                      </div>
                      <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                        
                          <!--  TAB DE CONTACTOS ASOCIADOS. -->
                          
                              
                                        <?php $contactos = $data['contactos'] ?? []; ?>

                                                <hr class="my-0" />
                                                <h5 class="mb-3">Contactos del cliente</h5>

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                  <div></div>
                                                  <button class="btn btn-primary"
                                                          type="button"
                                                          data-bs-toggle="offcanvas"
                                                          data-bs-target="#offcanvas-nuevo-contacto"
                                                          aria-controls="offcanvas-nuevo-contacto">
                                                    Nuevo contacto
                                                  </button>
                                                </div>

                                                <div class="table-responsive text-nowrap">
                                                  <table class="table">
                                                    <thead>
                                                      <tr>
                                                        <th>Nombre</th>
                                                        <th>Cargo</th>
                                                        <th>Departamento</th>
                                                        <th>Teléfonos</th>
                                                        <th>Email</th>
                                                        <th>Estado</th>
                                                        <th>Alta</th>
                                                        <th>Acciones</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                      <?php foreach ($contactos as $r): ?>
                                                        <tr>
                                                          <td><?= htmlspecialchars(trim(($r['nombre']??'').' '.($r['apellidos']??''))) ?></td>
                                                          <td><?= htmlspecialchars($r['cargo'] ?? '—') ?></td>
                                                          <td><?= htmlspecialchars($r['departamento'] ?? '—') ?></td>
                                                          <td>
                                                            <?php if (!empty($r['telefono'])): ?><div><i class="icon-base bx bx-phone"></i> <?= htmlspecialchars($r['telefono']) ?></div><?php endif; ?>
                                                            <?php if (!empty($r['movil'])): ?><div><i class="icon-base bx bx-mobile"></i> <?= htmlspecialchars($r['movil']) ?></div><?php endif; ?>
                                                          </td>
                                                          <td><?= htmlspecialchars($r['email'] ?? '—') ?></td>
                                                          <td><span class="badge bg-label-primary"><?= htmlspecialchars($r['estado_contacto'] ?? 'Activo') ?></span></td>
                                                          <td><?= htmlspecialchars($r['fecha_alta'] ?? '') ?></td>
                                                          <td>
                                                            <div class="dropdown">
                                                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                                              </button>
                                                              <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=editar_cliente_contacto&id=<?= (int)$r['id'] ?>">
                                                                  <i class="icon-base bx bx-edit-alt me-1"></i> Editar
                                                                </a>
                                                                <a class="dropdown-item"
                                                                  href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=eliminar_cliente_contacto&id=<?= (int)$r['id'] ?>"
                                                                  onclick="return confirm('¿Eliminar contacto?');">
                                                                  <i class="icon-base bx bx-trash me-1"></i> Eliminar
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </td>
                                                        </tr>
                                                      <?php endforeach; ?>
                                                      <?php if (empty($contactos)): ?>
                                                        <tr><td colspan="8" class="text-muted">Sin contactos todavía.</td></tr>
                                                      <?php endif; ?>
                                                    </tbody>
                                                  </table>
                                                </div>

                                                <!-- Offcanvas: nuevo contacto -->
                                                <div class="offcanvas offcanvas-end" id="offcanvas-nuevo-contacto">
                                                  <div class="offcanvas-header border-bottom">
                                                    <h5 class="offcanvas-title">Nuevo contacto</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                  </div>
                                                  <div class="offcanvas-body flex-grow-1">
                                                    <form class="row g-2" method="POST" action="index.php?action=crear_cliente_contacto">
                                                      <input type="hidden" name="cliente_id" value="<?= (int)$cliente['id'] ?>" />

                                                      <div class="col-md-6">
                                                        <label class="form-label">Nombre</label>
                                                        <input type="text" name="nombre" class="form-control" required />
                                                      </div>
                                                      <div class="col-md-6">
                                                        <label class="form-label">Apellidos</label>
                                                        <input type="text" name="apellidos" class="form-control" />
                                                      </div>

                                                      <div class="col-md-6">
                                                        <label class="form-label">Cargo</label>
                                                        <input type="text" name="cargo" class="form-control" />
                                                      </div>
                                                      <div class="col-md-6">
                                                        <label class="form-label">Departamento</label>
                                                        <input type="text" name="departamento" class="form-control" />
                                                      </div>

                                                      <div class="col-md-3">
                                                        <label class="form-label">Teléfono</label>
                                                        <input type="text" name="telefono" class="form-control" />
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-label">Móvil</label>
                                                        <input type="text" name="movil" class="form-control" />
                                                      </div>
                                                      <div class="col-md-6">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" />
                                                      </div>

                                                      <div class="col-12">
                                                        <label class="form-label">Notas</label>
                                                        <textarea name="notas" class="form-control" rows="2"></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                        <label class="form-label">Fecha alta</label>
                                                        <input type="date" name="fecha_alta" class="form-control" value="<?= date('Y-m-d') ?>" />
                                                      </div>
                                                      <div class="col-md-6">
                                                        <label class="form-label">Estado</label>
                                                        <select name="estado_contacto" class="form-select">
                                                          <?php foreach (['Activo','Inactivo','Principal'] as $e): ?>
                                                            <option value="<?= $e ?>"><?= $e ?></option>
                                                          <?php endforeach; ?>
                                                        </select>
                                                      </div>

                                                      <div class="col-12">
                                                        <button type="submit" class="btn btn-primary me-sm-2 me-1">Guardar</button>
                                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancelar</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>

                          
                          
                          
                           
                            
                      </div>
                      <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                        <!--  TAB DE DATOS ADMINISTRATIVOS. -->
                          
                              


                              <?php $datosAdmin = $data['datosAdmin'] ?? []; ?>

                                  <hr class="my-o" />
                                  <h5 class="mb-3">Datos administrativos</h5>

                                  <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div></div>
                                    <button class="btn btn-primary"
                                            type="button"
                                            data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvas-nuevo-admin"
                                            aria-controls="offcanvas-nuevo-admin">
                                      Nuevo registro
                                    </button>
                                  </div>

                                  <div class="table-responsive text-nowrap">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Código interno</th>
                                          <th>Comercial</th>
                                          <th>Prioridad</th>
                                          <th>Últ. interacción</th>
                                          <th>Renovación</th>
                                          <th>SLA</th>
                                          <th>RGPD</th>
                                          <th>Acciones</th>
                                        </tr>
                                      </thead>
                                      <tbody class="table-border-bottom-0">
                                        <?php foreach ($datosAdmin as $r): ?>
                                          <tr>
                                            <td><?= htmlspecialchars($r['codigo_interno'] ?? '—') ?></td>
                                            <td><?= htmlspecialchars($r['comercial_asignado'] ?? '—') ?></td>
                                            <td><span class="badge bg-label-primary"><?= htmlspecialchars($r['nivel_prioridad'] ?? '—') ?></span></td>
                                            <td><?= htmlspecialchars($r['fecha_ultima_interaccion'] ?? '—') ?></td>
                                            <td><?= htmlspecialchars($r['fecha_renovacion'] ?? '—') ?></td>
                                            <td><?= htmlspecialchars($r['sla'] ?? '—') ?></td>
                                            <td><?= !empty($r['consentimiento_rgpd']) ? 'Sí' : 'No' ?></td>
                                            <td>
                                              <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                  <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item"
                                                    href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=editar_dato_admin&id=<?= (int)$r['id'] ?>">
                                                    <i class="icon-base bx bx-edit-alt me-1"></i> Editar
                                                  </a>
                                                  <a class="dropdown-item"
                                                    href="<?= $_ENV['BASE_URL'] ?>/public/index.php?action=eliminar_dato_admin&id=<?= (int)$r['id'] ?>"
                                                    onclick="return confirm('¿Eliminar registro administrativo?');">
                                                    <i class="icon-base bx bx-trash me-1"></i> Eliminar
                                                  </a>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        <?php endforeach; ?>
                                        <?php if (empty($datosAdmin)): ?>
                                          <tr><td colspan="8" class="text-muted">Sin registros administrativos.</td></tr>
                                        <?php endif; ?>
                                      </tbody>
                                    </table>
                                  </div>

                                  <!-- Offcanvas: nuevo dato administrativo -->
                                  <div class="offcanvas offcanvas-end" id="offcanvas-nuevo-admin">
                                    <div class="offcanvas-header border-bottom">
                                      <h5 class="offcanvas-title">Nuevo dato administrativo</h5>
                                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body flex-grow-1">
                                      <form class="row g-2" method="POST" action="index.php?action=crear_cliente_dato_admin" enctype="multipart/form-data">
                                        <input type="text" name="cliente_id" value="<?= (int)$cliente['id'] ?>" />

                                        <div class="col-sm-6">
                                          <label class="form-label">Comercial asignado</label>
                                          <input type="text" name="comercial_asignado" class="form-control" />
                                        </div>
                                        <div class="col-sm-6">
                                          <label class="form-label">Código interno</label>
                                          <input type="text" name="codigo_interno" class="form-control" />
                                        </div>

                                        <div class="col-sm-6">
                                          <label class="form-label">Fecha última interacción</label>
                                          <input type="date" name="fecha_ultima_interaccion" class="form-control" />
                                        </div>
                                        <div class="col-sm-6">
                                          <label class="form-label">Fecha renovación</label>
                                          <input type="date" name="fecha_renovacion" class="form-control" />
                                        </div>

                                        <div class="col-sm-6">
                                          <label class="form-label">Nivel de prioridad</label>
                                          <select name="nivel_prioridad" class="form-select">
                                            <option>Baja</option><option selected>Media</option><option>Alta</option><option>Crítica</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-6">
                                          <label class="form-label">SLA</label>
                                          <input type="text" name="sla" class="form-control" placeholder="8x5, 24x7, etc." />
                                        </div>

                                        <div class="col-sm-12">
                                          <label class="form-label">Documentación adjunta</label>
                                          <input type="file" name="documentacion_adjunta" class="form-control" />
                                        </div>

                                        <div class="col-sm-12 form-check mt-2">
                                          <input class="form-check-input" type="checkbox" name="consentimiento_rgpd" id="rgpdCheck" value="1">
                                          <label class="form-check-label" for="rgpdCheck">Consentimiento RGPD</label>
                                        </div>

                                        <div class="col-sm-12">
                                          <label class="form-label">Comentarios internos</label>
                                          <textarea name="comentarios_internos" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-sm-12">
                                          <button type="submit" class="btn btn-primary me-sm-2 me-1">Guardar</button>
                                          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancelar</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>

                          
                          
                          
                          
                            </p>
                            
                       
                      </div>
                    </div>
                  </div>
                </div>



    <!-- FIN Formulario de nuevo cliente -->
</div>
<!-- FIN De contenidor del contenido -->

  <!-- Footer -->
<?php include_once __DIR__ . '/../../footer.php'; ?>