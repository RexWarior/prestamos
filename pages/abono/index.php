<?php
include('../../inc/header.php');
include('../../inc/BD.php');

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
							<div class="col-xl-12 aling-right" style="aling-right">
							<a href="pages/abono/registro.php"><button class="btn btn-primary">
										Registrar Abono
									</button>	
							</a>
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-12">
										<!--TABLA DE LOS REGISTROS DE CLIENTES-->
										<table id="dt_scroll" class="table-striped" width="100%">
												<thead>
													<tr>
														<th>Cantidad del abono</th>
														<th>Fecha del Abono</th>
														<th>Abono Capital</th>
													</tr>
												</thead>
												<tbody>
												<?php
																 
																  $sql = "SELECT * FROM abono";
																  $result_scale = mysqli_query($conexion, $sql)or die(mysqli_error());
																  
																  while($row = mysqli_fetch_array($result_scale)){
																   //opcional
																   $cant    = $row['cantidad_abono'];
																   $fecha     = $row['fecha_abono'];
																   $cap     = $row['capital_abono'];														   															  
																   // Now for each looped row
																	echo utf8_encode(' 
																	<tr>
																		<td>'.$cant.'</td>
																		<td>'.$fecha.'</td>
																		<td>'.$cap.'</td>
																		<td>
																			<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
																				<i class="la la-edit"></i>
																			</a>
																			<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
																				<i class="la la-trash"></i>
																			</a>
																		</td>
																	</tr>');																												  
																  } // End our scale while loop		
																  
													?>
											   
												</tbody>
											</table>							
									</div>
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