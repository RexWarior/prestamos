<?php
include('../inc/header.php');
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
								<a  href="index.html" class="m-menu__link ">
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
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-text">
										Clientes
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>	
							</li>
							
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-coins"></i>
									<span class="m-menu__link-text">
										Prestamos
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>	
							</li>
							
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
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
									Prestamos
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
										<form class="m-form m-form--fit m-form--label-align-right">
										<div class="m-portlet__body">
											<div class="form-group m-form__group">
												<label for="exampleInputimporte">
													Prestamo Solicitado
												</label>
												<input type="importe" class="form-control m-input" id="exampleInputimporte" aria-describedby="emailHelp" placeholder="Ingrese el monto del prestamo">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputfecha_prestamo">
													Fecha de solicitud del prestamo
												</label>
												<input type="fecha_prestamo" class="form-control m-input" id="exampleInputfecha_prestamo" placeholder="--/--/----">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleSelect1">
													Porcentaje de interes %
												</label>
												<select class="form-control m-input" id="exampleSelect1">
													<option>
														4
													</option>
													<option>
														5
													</option>
													<option>
														6
													</option>
													<option>
														7
													</option>
													<option>
														8
													</option>
													<option>
														9
													</option>
													<option>
														10
													</option>
												</select>
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputdia_cobro">
													Fecha de Cobro
												</label>
												<input type="dia_cobro" class="form-control m-input" id="exampleInputdia_cobro" placeholder="--/--/----">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputmensualidad">
													Mensualidad
												</label>
												<input type="mensualidad" class="form-control m-input" id="exampleInputmensualidad" placeholder="Mensualidad">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputestado">
													Estado del prestamo.
												</label>
												<input type="estado" class="form-control m-input" id="exampleInputmensualidad" placeholder="Corriente, Atrasado">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputplazo">
													Plazo del prestamo
												</label>
												<input type="plazo" class="form-control m-input" id="exampleInputplazo" placeholder="Tiempo en que pagara el prestamo">
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="reset" class="btn btn-primary">
													Submit
												</button>
												<button type="reset" class="btn btn-secondary">
													Cancel
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
include('../inc/footer.php');
?>