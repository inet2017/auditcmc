
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
      <div class="card">
        <h5 class="card-header">Alta Cliente</h5>
        <div class="card-body">
          <form id="formValidationExamples" class="row g-6 fv-plugins-bootstrap5 fv-plugins-framework"  action="index.php?action=crear_cliente" method="POST">
            <!-- Datos de la empresa -->

            <div class="col-12">
              <h6>1. Datos Empresa</h6>
              <hr class="mt-0">
            </div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationName">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationEmail">Razón Social</label>
              <input class="form-control" type="text" id="razon_social" name="razon_social" placeholder="Razón social empresa">
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass">Cif</label>
                  <input class="form-control" type="text" id="cif" name="cif" placeholder="Cif">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Tipo empresa</label>
                  <input class="form-control" type="text" id="tipo_empresa" name="tipo_empresa" placeholder="Tipo empresa" >
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass">Actividad</label>
                  <input class="form-control" type="text" id="actividad" name="actividad" placeholder="Actividad sociedad">
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
                  <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección...">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Codigo Postal</label>
                  <input class="form-control" type="text" id="codigo_postal" name="codigo_postal" placeholder="Codigo postal..." >
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass">Población</label>
                  <input class="form-control" type="text" id="poblacion" name="poblacion" placeholder="Población...">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Provincia</label>
                  <input class="form-control" type="text" id="provincia" name="provincia" placeholder="Provincia..." >
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass">Pais</label>
                  <input class="form-control" type="text" id="pais" name="pais" placeholder="Pais...">
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
                  <input class="form-control" type="text" id="telefono_principal" name="telefono_principal" placeholder="Teléfono...">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Teléfono secundario</label>
                  <input class="form-control" type="text" id="telefono_secundario" name="protelefono_secundariovincia" placeholder="Teléfono secundario..." >
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>

             <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass">Email</label>
                  <input class="form-control" type="text" id="email" name="email" placeholder="mail@mail.com...">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass">Sitio_web</label>
                  <input class="form-control" type="text" id="sitio_web" name="sitio_web" placeholder="Sitio web..." >
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
                        <option value="<?= (int)$tipo['id'] ?>">
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
                  <input class="form-control" type="text" id="sitnumero_contratoio_web" name="numero_contrato" placeholder="contrato número..." >
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>


            <div class="col-12 form-control-validation fv-plugins-icon-container">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="estado_cliente" name="estado_cliente" required="">
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
                 <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
            </div>

            <!--   FIN Otros  -->


            <!--

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label for="formValidationFile" class="form-label">Profile Pic</label>
              <input class="form-control" type="file" id="formValidationFile" name="formValidationFile">
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationDob">DOB</label>
              <input type="text" class="form-control flatpickr-validation flatpickr-input" name="formValidationDob" id="formValidationDob" required="" readonly="readonly">
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationSelect2">Country</label>
              <div class="position-relative"><select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2 select2-hidden-accessible" data-allow-clear="true" data-select2-id="formValidationSelect2" tabindex="-1" aria-hidden="true">
                <option value="" data-select2-id="2">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 568.4px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-formValidationSelect2-container"><span class="select2-selection__rendered" id="select2-formValidationSelect2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationLang">Languages</label>
              <tags class="tagify form-control tagify--noTags tagify--empty" tabindex="-1">
                      <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" autocapitalize="false" autocorrect="off" aria-autocomplete="both" aria-multiline="false"></span>
                  ​
          </tags><input type="text" value="" class="form-control" name="formValidationLang" id="formValidationLang" tabindex="-1">
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationTech">Tech</label>
              <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="form-control typeahead tt-hint" type="text" autocomplete="off" readonly="" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgba(0, 0, 0, 0);"><input class="form-control typeahead tt-input" type="text" id="formValidationTech" name="formValidationTech" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Public Sans&quot;, -apple-system, blinkmacsystemfont, &quot;Segoe UI&quot;, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-tech"></div></div></span>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationHobbies">Hobbies</label>
              <div class="dropdown bootstrap-select show-tick hobbies-select w-100"><select class="selectpicker hobbies-select w-100" id="formValidationHobbies" data-style="btn-default" data-icon-base="icon-base bx" data-tick-icon="bx-check text-primary" name="formValidationHobbies" multiple="">
                <option>Sports</option>
                <option>Movies</option>
                <option>Books</option>
              </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-default" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="formValidationHobbies"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label" for="formValidationBio">Bio</label>
              <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            <div class="col-md-6 form-control-validation fv-plugins-icon-container">
              <label class="form-label">Gender</label>
              <div class="form-check custom mb-2">
                <input type="radio" id="formValidationGender" name="formValidationGender" class="form-check-input" checked="">
                <label class="form-check-label" for="formValidationGender">Male</label>
              </div>

              <div class="form-check custom">
                <input type="radio" id="formValidationGender2" name="formValidationGender" class="form-check-input">
                <label class="form-check-label" for="formValidationGender2">Female</label>
              <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            </div>

            

            <div class="col-12">
              <h6 class="mt-2">3. Choose Your Plan</h6>
              <hr class="mt-0">
            </div>
            <div class="row gy-3 mt-0">
              <div class="col-xl-3 col-md-5 col-sm-6 col-12 form-control-validation fv-plugins-icon-container">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="basicPlanMain1">
                    <span class="custom-option-body">
                      <i class="icon-base bx bx-rocket"></i>
                      <span class="custom-option-title"> Starter </span>
                      <small> Get 5gb of space and 1 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain1" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl-3 col-md-5 col-sm-6 col-12 form-control-validation">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="basicPlanMain2">
                    <span class="custom-option-body">
                      <i class="icon-base bx bx-user"></i>
                      <span class="custom-option-title"> Personal </span>
                      <small> Get 15gb of space and 5 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain2">
                  </label>
                </div>
              </div>
              <div class="col-xl-3 col-md-5 col-sm-6 col-12 form-control-validation">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="basicPlanMain3">
                    <span class="custom-option-body">
                      <i class="icon-base bx bx-crown"></i>
                      <span class="custom-option-title"> Premium </span>
                      <small> Get 25gb of space and 15 members. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain3">
                  </label>
                </div>
              </div>
            </div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>

            <div class="col-12 form-control-validation fv-plugins-icon-container">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="formValidationSwitch" name="formValidationSwitch" required="">
                <label class="form-check-label" for="formValidationSwitch">Send me related emails</label>
              <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            </div>
            <div class="col-12 form-control-validation fv-plugins-icon-container">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formValidationCheckbox" name="formValidationCheckbox">
                <label class="form-check-label" for="formValidationCheckbox">Agree to our terms and conditions</label>
              <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
            </div>

-->
            <div class="col-12 form-control-validation">
              <button type="submit" name="submitButton" class="btn btn-primary">Enviar</button>
            </div>
          <input type="hidden"></form>
        </div>
      </div>
    </div>


    <!-- FIN Formulario de nuevo cliente -->
</div>
<!-- FIN De contenidor del contenido -->

  <!-- Footer -->
<?php include_once __DIR__ . '/../../footer.php'; ?>