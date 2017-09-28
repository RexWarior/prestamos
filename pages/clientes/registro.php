<?php
include('../../inc/header.php');
?>
			
				<!-- BEGIN: Left Aside -->
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div 
						id="m_ver_menu" 
						class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
						data-menu-vertical="true"
						 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
						>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
								<a  href="pages/home.php" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Estadisticas
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													
												</span>
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__section">
								<h4 class="m-menu__section-text">
									Administración
								</h4>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
								<a  href="pages/clientes" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-text">
										Clientes
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>	
							</li>
							
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
								<a  href="pages/prestamo" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-coins"></i>
									<span class="m-menu__link-text">
										Prestamos
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>	
							</li>
							
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
								<a  href="pages/abono" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-calendar-1"></i>
									<span class="m-menu__link-text">
										Abonos
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>	
							</li>
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Clientes
								</h3>
							</div>
							<div>
								
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Main Portlet-->

						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->
						<div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-8">
										<!--formulario -->
										<form class="m-form m-form--fit m-form--label-align-right" role="form"  action="inc/registro_cliente.php" method="post">
										<div class="m-portlet__foot m-portlet__foot--fit">
											
										</div>
										<div class="m-portlet__body">
											<div class="form-group m-form__group m--margin-top-10">
												<div class="alert m-alert m-alert--default" role="alert">
												Ingrese los datos del cliente a solicitar prestamo.	
												</div>
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputNombre">
													Nombre
												</label>
												<input type="nombre" name="nombre" class="form-control m-input" id="exampleInputNombre1" aria-describedby="emailHelp" placeholder="Nombre">
												<span class="m-form__help">
												*Ingrese el nombre completo.
												</span>
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputDomicilio1">
													Domicilio
												</label>
												<input type="domicilio" name="domicilio" class="form-control m-input" id="exampleInputDomicilio1" placeholder="Domicilio">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputCelular1">
													Celular
												</label>
												<input type="celular" name="celular" class="form-control m-input" id="exampleInputCelular1" placeholder="Celular">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputDomiciliot1">
													Domicilio del Trabajo
												</label>
												<input type="domiciliot" name="domilio_trabajo" class="form-control m-input" id="exampleInputDomiciliot1" placeholder="Domicilio del trabajo">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputTelefonoT1">
													Telefono del trabajo
												</label>
												<input type="telefonot" name="tel_trabajo" class="form-control m-input" id="exampleInputTelefonot1" placeholder="Telefono del trabajo">
											</div>
											
										</div>
										<div class="form-group m-form__group">
											<label for="exampleInputIFE1">
												Adjuntar Imagen de IFE
											</label>
											<div></div>
											<label class="custom-file">
											<input type="file" id="file2" name="ife" class="custom-file-input" placeholder="adjuntar">
											<span class="custom-file-control"></span>
											</label>
										</div>
										<div class="form-group m-form__group">
											<label for="exampleInputEmail1">
												Adjuntar Imagen de comprobante de domicilio
											</label>
										<div></div>
										<label class="custom-file">
										<input type="file" id="file2" name="comprobante_dom" class="custom-file-input">
										<span class="custom-file-control"></span>
										</label>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">
													Guardar
												</button>
												<button type="reset" class="btn btn-secondary">
													Cancelar
												</button>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->				
						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->
						<!--end:: Widgets/Sales Stats-->
						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->
						<!--End::Main Portlet-->
					</div>
				</div>
<?php
include('../../inc/footer.php');
?>