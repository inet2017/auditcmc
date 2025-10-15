
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
                                            <input class="form-control" type="text" id="tipo_contrato_id" name="tipo_contrato_id" placeholder="" value="<?= htmlspecialchars($cliente['sitio_tipo_contrato_idweb']) ?>">
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
                          <p>
                              Tabla de contacto Asociados.
                            </p>
                            
                      </div>
                      <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                        <!--  TAB DE DATOS ADMINISTRATIVOS. -->
                          <p>
                              Tabla de datos administrativos.
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