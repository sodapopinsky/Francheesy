@extends('layouts.base')

@section('body')


	<!-- start: Header -->
	<header class="navbar" style="background-color:rgb(171,9,31);">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>		
			<a class="navbar-brand col-md-2 col-sm-1 col-xs-2" href="index.html"><span>Francheesy</span></a>
		
	
        
		<!-- start: Header Menu -->
        	<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown hidden-xs" style="background-color:rgb(214,206,20);">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#" style="background-color:rgb(214,206,20);">
							<i class="fa fa-warning"></i>
							<span class="number">11</span>
						</a>
						</li>

							<!-- start: User Dropdown -->
					<li class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<div class="avatar"><img src="assets/img/avatar.png" alt="Avatar"></div>
							<div class="user">
								<span class="hello">Welcome!</span>
								<span class="name">Atomic burger</span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="index.html#"><i class="fa fa-envelope"></i> Messages</a></li>
							<li><a href="page-login.html"><i class="fa fa-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->


					</ul>
				</div>
				


			
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1 ">
								
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<ul class="nav main-menu">
						<li><a href="index.html"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm text"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-eye"></i><span class="hidden-sm text"> UI Features</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="ui-sliders-progress.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Sliders & Progress</span></a></li>
								<li><a class="submenu" href="ui-nestable-list.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Nestable Lists</span></a></li>
								<li><a class="submenu" href="ui-elements.html"><i class="fa fa-eye"></i><span class="hidden-sm text"> Elements</span></a></li>
							</ul>
							</li>
						<li><a href="widgets.html"><i class="fa fa-dashboard"></i><span class="hidden-sm text"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-folder-o"></i><span class="hidden-sm text"> Example Pages</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="page-inbox.html"><i class="fa fa-envelope-o"></i><span class="hidden-sm text"> Inbox</span></a></li>
								<li><a class="submenu" href="page-invoice.html"><i class="fa fa-file-text"></i><span class="hidden-sm text"> Invoice</span></a></li>
								<li><a class="submenu" href="page-todo.html"><i class="fa fa-tasks"></i><span class="hidden-sm text"> ToDo & Timeline</span></a></li>
								<li><a class="submenu" href="page-profile.html"><i class="fa fa-male"></i><span class="hidden-sm text"> Profile</span></a></li>
								<li><a class="submenu" href="page-pricing-tables.html"><i class="fa fa-table"></i><span class="hidden-sm text"> Pricing Tables</span></a></li>
								<li><a class="submenu" href="page-404.html"><i class="fa fa-unlink"></i><span class="hidden-sm text"> 404</span></a></li>
								<li><a class="submenu" href="page-500.html"><i class="fa fa-unlink"></i><span class="hidden-sm text"> 500</span></a></li>
								<li><a class="submenu" href="page-lockscreen.html"><i class="fa fa-lock"></i><span class="hidden-sm text"> LockScreen</span></a></li>
								<li><a class="submenu" href="page-lockscreen2.html"><i class="fa fa-lock"></i><span class="hidden-sm text"> LockScreen2</span></a></li>
								<li><a class="submenu" href="page-login.html"><i class="fa fa-key"></i><span class="hidden-sm text"> Login Page</span></a></li>
								<li><a class="submenu" href="page-register.html"><i class="fa fa-sign-in"></i><span class="hidden-sm text"> Register Page</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-edit"></i><span class="hidden-sm text"> Forms</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="form-elements.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Form elements</span></a></li>
								<li><a class="submenu" href="form-wizard.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Wizard</span></a></li>
								<li><a class="submenu" href="form-dropzone.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> Dropzone Upload</span></a></li>
								<li><a class="submenu" href="form-x-editable.html"><i class="fa fa-edit"></i><span class="hidden-sm text"> X-editable</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-list-alt"></i><span class="hidden-sm text"> Charts</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="charts-flot.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> Flot Charts</span></a></li>
								<li><a class="submenu" href="charts-xcharts.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> xCharts</span></a></li>
								<li><a class="submenu" href="charts-others.html"><i class="fa fa-chevron-right"></i><span class="hidden-sm text"> Other</span></a></li>
							</ul>
						
						</li>
						<li><a href="typography.html"><i class="fa fa-font"></i><span class="hidden-sm text"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="fa fa-picture-o"></i><span class="hidden-sm text"> Gallery</span></a></li>
						<li><a href="table.html"><i class="fa fa-align-justify"></i><span class="hidden-sm text"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="fa fa-calendar"></i><span class="hidden-sm text"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> File Manager</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-star"></i><span class="hidden-sm text"> Icons</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a class="submenu" href="icons-halflings.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Halflings</span></a></li>
								<li><a class="submenu" href="icons-glyphicons-pro.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Glyphicons PRO</span></a></li>
								<li><a class="submenu" href="icons-filetypes.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Filetypes</span></a></li>
								<li><a class="submenu" href="icons-social.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Social</span></a></li>
								<li><a class="submenu" href="icons-font-awesome.html"><i class="fa fa-star"></i><span class="hidden-sm text"> Font Awesome</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 4 Level Menu</span> <span class="chevron closed"></span></a>
							<ul>
								<li><a href="2nd-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 2nd Level</span></a></li>
								<li>
									<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 2nd Level</span> <span class="chevron closed"></span></a>
									<ul>
										<li><a href="3rd-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 3rd Level</span></a></li>
										<li>
											<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a class="dropmenu" href="index.html#"><i class="fa fa-folder-open"></i><span class="hidden-sm text"> 3rd Level</span> <span class="chevron closed"></span></a>
											<ul>
												<li>
													<a class="submenu" href="4th-level2.html"><i class="fa fa-folder"></i><span class="hidden-sm text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
									</ul>	
								</li>
							</ul>
						</li>
					</ul>
				</div>
									<a href="index.html#" id="main-menu-min" class="full visible-md visible-lg"><i class="fa fa-angle-double-left"></i></a>
							</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11 ">
			
			
			<div class="row">
				
				<div class="col-sm-12 col-md-9">
					<ol class="breadcrumb">
					  	<li><a href="index.html#">Genius</a></li>
					  	<li class="active" >Dashboard</li>

						<div class="form-group choose-date hidden-xs">
						  	<div class="controls">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="text" class="form-control" id="daterange" value="09/09/2013 - 09/28/2013">
									<span class="input-group-addon"><i class="fa fa-chevron-down"></i></span>
								</div>
						  	</div>
						</div>

					</ol>
					
					<div class="row">

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="smallstat box">
								<div class="boxchart-overlay blue">
									<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
								</div>	
								<span class="title">Clients</span>
								<span class="value">4 589</span>
								<a href="" class="more">
									<span>View More</span>
									<i class="fa fa-chevron-right"></i>
								</a>	
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="smallstat box">
								<div class="linechart-overlay red">
									<div class="linechart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
								</div>	
								<span class="title">Deals</span>
								<span class="value">789</span>
								<a href="" class="more">
									<span>View More</span>
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="smallstat box">
								<i class="fa fa-usd green"></i>
								<span class="title">Income</span>
								<span class="value">$1 999,99</span>
								<a href="" class="more">
									<span>View More</span>
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="smallstat box">
								<div class="piechart-overlay blue">
									<div class="piechart" data-percent="55"><span>55</span>%</div>
								</div>	
								<span class="title">Account</span>
								<span class="value">$19 999,99</span>
								<a href="" class="more">
									<span>View More</span>
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div><!--/col-->

					</div><!--/row-->

					<div class="row">
						
						<div class="col-xs-12">
						
							<div class="box">
								<div class="box-header">
									<h2><i class="fa fa-bar-chart-o"></i>Traffic</h2>
									<div class="box-icon">
										<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
									<ul class="nav nav-tabs" id="mainCharts">
									  	<li id="chart24h"><a href="index.html#24h">24h</a></li>
									  	<li id="chartWeek"><a href="index.html#week">week</a></li>
									  	<li id="chartMonth" class="active"><a href="index.html#month">month</a></li>
									</ul>
								</div>
								<div class="box-content">

									<div class="tab-content">
									  	<div class="tab-pane" id="24h">
											<div id="chart-24h" style="height:250px;width:100%;"></div>
											<ul class="stats">
												<li>
													<span>17.781</span>
													<h5>Pageviews</h5>
												</li>
												<li>
													<span>9.879</span>
													<h5>Unique Users</h5>
												</li>
												<li>
													<span>00:02:58</span>
													<h5>Avg. Visit Duration</h5>
												</li>
												<li>
													<span>59,83%</span>
													<h5>Bounce Rate</h5>
												</li>
											</ul>
									  	</div>
									  	<div class="tab-pane" id="week">
											<div id="chart-week" style="height:250px;width:100%;"></div>
											<ul class="stats">
												<li>
													<div class="bgchart" id="statsbg1" style="height:93px;width:100%;"></div>
													<span>17.781</span>
													<h5>Pageviews</h5>
												</li>
												<li>
													<div class="bgchart" id="statsbg2" style="height:93px;width:100%;"></div>
													<span>9.879</span>
													<h5>Unique Users</h5>
												</li>
												<li>
													<div class="bgchart" id="statsbg3" style="height:93px;width:100%;"></div>
													<span>00:02:58</span>
													<h5>Avg. Visit Duration</h5>
												</li>
												<li>
													<div class="bgchart" id="statsbg4" style="height:93px;width:100%;"></div>
													<span>59,83%</span>
													<h5>Bounce Rate</h5>
												</li>
											</ul>
									  	</div>
									  	<div class="tab-pane active" id="month">
									  		<div id="chart-month" style="height:250px;width:100%;"></div>
											<ul class="stats">
												<li>
													<span>17.781</span>
													<h5>Pageviews</h5>
												</li>
												<li>
													<span>9.879</span>
													<h5>Unique Users</h5>
												</li>
												<li>
													<span>00:02:58</span>
													<h5>Avg. Visit Duration</h5>
												</li>
												<li>
													<span>59,83%</span>
													<h5>Bounce Rate</h5>
												</li>
											</ul>
									  	</div>
									</div>
										
								</div>
									
							</div>
									
						</div><!--/col-->
						
					</div><!--/row-->
					
					<div class="row">

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="box info-box">
								<div class="backgroundColor blue">
								<div class="clearfix">
									<span class="title">SALE</span>
									<span class="value">$1.890,65</span>
								</div>
								<div class="clearfix">
									<span class="date">Today 6:43 AM</span>
									<span class="change">+$432,50 (15,78%)</span>
								</div>	
								<div class="chart-info-box" style="height:50px;margin-top: 20px;"></div>
								</div>
								
								<div class="quarters">
									
									<div class="quarter q1">
										<div>+$780,98 <span>Weekly Change</span></div>
									</div>
									<div class="quarter q2">
										<div class="verticalChart">

											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>37%</span>
													</div>
												</div>
												<div class="title">M</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>16%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>12%</span>
													</div>
												</div>
												<div class="title">W</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>9%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>7%</span>
													</div>
												</div>
												<div class="title">F</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>6%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>5%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="quarter q3">
										9.127
										<span>Deals</span>
									</div>
									<div class="quarter q4">
										$189.783,87
										<span>Total Income</span>
									</div>
									
								</div>	
								
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="box info-box">
								<div class="backgroundColor orange">
								<div class="clearfix">
									<span class="title">SALE</span>
									<span class="value">$1.890,65</span>
								</div>
								<div class="clearfix">
									<span class="date">Today 6:43 AM</span>
									<span class="change">+$432,50 (15,78%)</span>
								</div>	
								<div class="chart-info-box2" style="height:50px;margin-top: 20px;"></div>
								</div>
								
								<div class="quarters">
									
									<div class="quarter q1">
										<div>+$780,98 <span>Weekly Change</span></div>
									</div>
									<div class="quarter q2">
										<div class="verticalChart">

											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>37%</span>
													</div>
												</div>
												<div class="title">M</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>16%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>12%</span>
													</div>
												</div>
												<div class="title">W</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>9%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>7%</span>
													</div>
												</div>
												<div class="title">F</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>6%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>5%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="quarter q3">
										9.127
										<span>Deals</span>
									</div>
									<div class="quarter q4">
										$189.783,87
										<span>Total Income</span>
									</div>
									
								</div>	
								
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="box info-box">
								<div class="backgroundColor red">
								<div class="clearfix">
									<span class="title">SALE</span>
									<span class="value">$1.890,65</span>
								</div>
								<div class="clearfix">
									<span class="date">Today 6:43 AM</span>
									<span class="change">+$432,50 (15,78%)</span>
								</div>	
								<div class="chart-info-box2" style="height:50px;margin-top: 20px;"></div>
								</div>
								
								<div class="quarters">
									
									<div class="quarter q1">
										<div>+$780,98 <span>Weekly Change</span></div>
									</div>
									<div class="quarter q2">
										<div class="verticalChart">

											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>37%</span>
													</div>
												</div>
												<div class="title">M</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>16%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>12%</span>
													</div>
												</div>
												<div class="title">W</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>9%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>7%</span>
													</div>
												</div>
												<div class="title">F</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>6%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>5%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="quarter q3">
										9.127
										<span>Deals</span>
									</div>
									<div class="quarter q4">
										$189.783,87
										<span>Total Income</span>
									</div>
									
								</div>	
								
							</div>
						</div><!--/col-->

						<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
							<div class="box info-box">
								<div class="backgroundColor pink">
								<div class="clearfix">
									<span class="title">SALE</span>
									<span class="value">$1.890,65</span>
								</div>
								<div class="clearfix">
									<span class="date">Today 6:43 AM</span>
									<span class="change">+$432,50 (15,78%)</span>
								</div>	
								<div class="chart-info-box" style="height:50px;margin-top: 20px;"></div>
								</div>
								
								<div class="quarters">
									
									<div class="quarter q1">
										<div>+$780,98 <span>Weekly Change</span></div>
									</div>
									<div class="quarter q2">
										<div class="verticalChart">

											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>37%</span>
													</div>
												</div>
												<div class="title">M</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>16%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>12%</span>
													</div>
												</div>
												<div class="title">W</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>9%</span>
													</div>
												</div>
												<div class="title">T</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>7%</span>
													</div>
												</div>
												<div class="title">F</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>6%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
											<div class="singleBar">
												<div class="bar">
													<div class="value">
														<span>5%</span>
													</div>
												</div>
												<div class="title">S</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="quarter q3">
										9.127
										<span>Deals</span>
									</div>
									<div class="quarter q4">
										$189.783,87
										<span>Total Income</span>
									</div>
									
								</div>	
								
							</div>
						</div><!--/col-->

					</div><!--/row-->
					
					<div class="row">
						
						<div class="col-lg-6">
							<div class="box calendar">	
								<div class="calendar-small"></div>
								<div class="calendar-details">
									<div class="day">MONDAY</div>
									<div class="date">MAY 22</div>
									<ul class="events">
										<li>MAY 22, 19:30 Meeting</li>
										<li>MAY 22, 19:30 Meeting</li>
									</ul>
									<div class="add-event">
										<input type="text" class="new event" placeholder="click here to add event">
									</div>		
								</div>
								<div class="clearfix"></div>
							</div>
						</div><!--/col-->
						
						<div class="col-lg-6">
							
							<div class="row">
								
								<div class="col-md-12">
									
									<div class="box">
										<div class="box-header">
											<h2><i class="fa fa-check"></i>Tasks in Progress</h2>
											<div class="box-icon">
												<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
												<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
												<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
											</div>
										</div>
										<div class="box-content no-padding">
											<table class="table bootstrap-datatable datatable small-font">
												<thead>
													  <tr>
														  <th>Task</th>
														  <th>Assigned to</th>
														  <th>Progress</th>
														  <th class="center">Status</th>
													  </tr>
												  </thead>   
												  <tbody>
													<tr>
														<td>SEO Optimisation</td>
														<td>Charly Brown</td>
														<td><div class="progress slim simpleProgress progressGreen">80</div></td>
														<td class="center green">
															Active
														</td>
													</tr>
													<tr>
														<td>App Development</td>
														<td>John Smith</td>
														<td><div class="progress slim simpleProgress progressGreen">95</div></td>
														<td class="center green">
															Active
														</td>
													</tr>
													<tr>
														<td>Hire Developers</td>
														<td>Megan Holms</td>
														<td><div class="progress slim simpleProgress progressLightOrange">27</div></td>
														<td class="center lightOrange">
															Pending
														</td>
													</tr>
													<tr>
														<td>Growt Hacking</td>
														<td>Alan Wane</td>
														<td><div class="progress slim simpleProgress progressGreen">11</div></td>
														<td class="center green">
															Active
														</td>
													</tr>
													<tr>
														<td>A/B Tests</td>
														<td>Irina Cole</td>
														<td><div class="progress slim simpleProgress progressRed">73</div></td>
														<td class="center red">
															Canceled
														</td>
													</tr>											
												</tbody>
											</table>	 	
										</div>
									</div>
									
								</div><!--/col-->
								
								<div class="col-md-12">
									
									<div class="box blue">
										<div class="box-header">
											<h2><i class="fa fa-bar-chart-o"></i>Weekly Stat</h2>
											<div class="box-icon">
												<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
												<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
											</div>
										</div>
										<div class="box-content">
											<div class="chart-type1" style="height:170px"></div>	
										</div>	
									</div><!--/span-->
									
								</div><!--/col-->
									
							</div><!--/row-->	

						</div><!--/col-->
							
					</div><!--/row-->
					
					<div class="row">		
						
						<div class="col-lg-4 col-md-4">

							<div class="box">
								<div class="box-header">
									<h2><i class="fa fa-check"></i>To Do List</h2>
									<div class="box-icon">
										<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
										<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="box-content">
									<div class="todo">
										<ul class="todo-list">
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">Windows Phone 8 App</span> 
												<span class="label label-important">today</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>					
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">New frontend layout</span>
												<span class="label label-important">today</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">Hire developers</span>
												<span class="label label-warning">tommorow</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">Windows Phone 8 App</span>
												<span class="label label-warning">tommorow</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">New frontend layout</span>
												<span class="label label-success">this week</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">Hire developers</span>
												<span class="label label-success">this week</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">New frontend layout</span>
												<span class="label label-info">this month</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
											<li>
												<span class="todo-actions">
													<a href="index.html#"><i class="fa fa-check"></i></a>
												</span>
												<span class="desc">Hire developers</span>
												<span class="label label-info">this month</span>
												<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
											</li>
										</ul>
									</div>	
								</div>
							</div>

						</div><!--/col-->
						
						<div class="col-lg-8 col-md-8">
							<div class="box">
								<div class="box-header">
									<h2><i class="fa fa-list"></i>Recent</h2>
									<div class="box-icon">
										<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
									<ul class="nav nav-tabs" id="recent">
									  	<li class="active"><a href="index.html#tickets">Tickets</a></li>
									  	<li><a href="index.html#users">Users</a></li>
									  	<li><a href="index.html#comments">Comments</a></li>
									</ul>
								</div>
								<div class="box-content no-padding">
									
									<div class="tab-content">
									  	<div class="tab-pane active" id="tickets">
											<table class="table bootstrap-datatable datatable small-font">
												<thead>
													<tr>
														<th>Status</th>
														<th>Date</th>
														<th>Description</th>
														<th>User</th>
														<th>Number</th>
													</tr>
												</thead>   
												<tbody>
													<tr>
														<td><span class="label label-success">Complete</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Server problem</td>
														<td>Ashley Tan</td>
														<td><b>[#199278]</b></td>
													</tr>
													<tr>
														<td><span class="label label-warning">Suspended</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Mobile App Problem</td>
														<td>Ann Kovalsky</td>
														<td><b>[#199277]</b></td>
													</tr>
													<tr>
														<td><span class="label label-info">In progress</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Paypal Issue</td>
														<td>Chris Dan</td>
														<td><b>[#199276]</b></td>
													</tr>
													<tr>
														<td><span class="label label-important">Rejected</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>IE7 Problem</td>
														<td>John Grand</td>
														<td><b>[#199275]</b></td>
													</tr>
													<tr>
														<td><span class="label label-success">Complete</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Mobile App Problem</td>
														<td>Agnes Young</td>
														<td><b>[#199274]</b></td>
													</tr>
													<tr>
														<td><span class="label label-warning">Suspended</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Mobile App Problem</td>
														<td>Patricia Doyle</td>
														<td><b>[#199273]</b></td>
													</tr>
													<tr>
														<td><span class="label label-info">In progress</span></td>
														<td>Jul 25, 2012 11:09</td>
														<td>Mobile App Problem</td>
														<td>Melanie Brown</td>
														<td><b>[#199272]</b></td>
													</tr>
																							
												</tbody>
											</table>
									  	</div>
									  	<div class="tab-pane" id="users">
											<ul class="users-list">
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
													</a>
													<div class="name">Łukasz Holeczek 
														<div class="dropdown pull-right">
															<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
																<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
																<li><a href="index.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
																<li><a href="index.html#"><i class="fa fa-trash"></i>Delete</a></li>
															</ul>
														</div>
													</div>
													<span class="place"><i class="fa fa-map-marker"></i>Mikolow, POLAND</span>
													<span class="job"><i class="fa fa-briefcase"></i>Founder, BootstrapMaster.com</span>                                 
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
													</a>
													<div class="name">Bill Cole
														<div class="dropdown pull-right">
															<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
																<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
																<li><a href="index.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
																<li><a href="index.html#"><i class="fa fa-trash"></i>Delete</a></li>
															</ul>
														</div>
													</div>
													<span class="place"><i class="fa fa-map-marker"></i>London, ENGLAND</span>
													<span class="job"><i class="fa fa-briefcase"></i>CEO, Rainbow INC</span>                                 
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
													</a>
													<div class="name">Jane Sanchez
														<div class="dropdown pull-right">
															<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
																<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
																<li><a href="index.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
																<li><a href="index.html#"><i class="fa fa-trash"></i>Delete</a></li>
															</ul>
														</div>
													</div>
													<span class="place"><i class="fa fa-map-marker"></i>Berlin, GERMANY</span>
													<span class="job"><i class="fa fa-briefcase"></i>Head of Stars Group</span>                               
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
													</a>
													<div class="name">Kate Presley
														<div class="dropdown pull-right">
															<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
																<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
																<li><a href="index.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
																<li><a href="index.html#"><i class="fa fa-trash"></i>Delete</a></li>
															</ul>
														</div>
													</div>
													<span class="place"><i class="fa fa-map-marker"></i>Madrid, SPAIN</span>
													<span class="job"><i class="fa fa-briefcase"></i>Creative Director, IdeaLab LTD</span>                                  
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Lucas" src="assets/img/avatar7.jpg">
													</a>
													<div class="name">Anna Holmes 
														<div class="dropdown pull-right">
															<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
																<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
																<li><a href="index.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
																<li><a href="index.html#"><i class="fa fa-trash"></i>Delete</a></li>
															</ul>
														</div>
													</div>
													<span class="place"><i class="fa fa-map-marker"></i>Paris, FRANCE</span>
													<span class="job"><i class="fa fa-briefcase"></i>Co-Founder, ArtStudio</span>                                 
												</li>
											</ul>
									  	</div>
									  	<div class="tab-pane" id="comments">
									  		<ul class="comments-list">
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
													</a>
													<div>
														<strong>Łukasz Holeczek</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
													</div>
													<div class="date">4 minutes ago</div>
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
													</a>
													<div>
														<strong>Bill Cole</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
													</div>
													<div class="date">22 hours ago</div>	                                
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
													</a>
													<div>
														<strong>Jane Sanchez</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
													</div>
													<div class="date">2 days ago</div>		                                  
												</li>
												<li>
													<a href="index.html#">
														<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
													</a>
													<div>
														<strong>Kate Presley</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
													</div>
													<div class="date">10 days ago</div>	                                  
												</li>
											</ul>
										</div>
									</div>
									
								</div>
							</div>	
						</div><!--/col-->
						
					</div><!--/row-->		
	
					<div class="row">

						<div class="col-lg-12 discussions">

							<ul>

								<li>
									<div class="author">
										<img src="assets/img/avatar.jpg" alt="avatar">
									</div>

									<div class="name">Łukasz Holeczek</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>	

									<ul>

										<li>
											<div class="author">
												<img src="assets/img/avatar3.jpg" alt="avatar">
											</div>
											<div class="name">Ann Kovalsky</div>
											<div class="date">Today, 1:08 PM</div>
											<div class="delete"><i class="fa fa-times"></i></div>

											<div class="message">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
											</div>

										</li>

										<li>
											<div class="author">
												<img src="assets/img/avatar6.jpg" alt="avatar">
											</div>
											<div class="name">Megan Abbott</div>
											<div class="date">Today, 1:08 PM</div>
											<div class="delete"><i class="fa fa-times"></i></div>

											<div class="message">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
											</div>	
										</li>

										<li>
											<div class="author">
												<img src="assets/img/avatar.jpg" alt="avatar">
											</div>
											<textarea class="diss-form" placeholder="Write comment"></textarea>
										</li>

									</ul>	

								</li>
								
								<li>
									<div class="author">
										<img src="assets/img/avatar.jpg" alt="avatar">
									</div>

									<div class="name">Łukasz Holeczek</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message row">
										<div class="col-sm-3 col-xs-6">
											<img src="assets/img/gallery/photo2.jpg" class="img-responsive img-thumbnail">
										</div>
										<div class="col-sm-3 col-xs-6">
											<img src="assets/img/gallery/photo3.jpg" class="img-responsive img-thumbnail">
										</div>
										<div class="col-sm-3 col-xs-6">
											<img src="assets/img/gallery/photo4.jpg" class="img-responsive img-thumbnail">
										</div>
										<div class="col-sm-3 col-xs-6">
											<img src="assets/img/gallery/photo5.jpg" class="img-responsive img-thumbnail">
										</div>	
									</div>	

									<ul>

										<li>
											<div class="author">
												<img src="assets/img/avatar.jpg" alt="avatar">
											</div>
											<textarea class="diss-form" placeholder="Write comment"></textarea>
										</li>

									</ul>	

								</li>

								<li>
									<div class="author">
										<img src="assets/img/avatar9.jpg" alt="avatar">
									</div>

									<div class="name">Tom Allen</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>	

									<ul>

										<li>
											<div class="author">
												<img src="assets/img/avatar2.jpg" alt="avatar">
											</div>
											<div class="name">Katie Moss</div>
											<div class="date">Today, 1:08 PM</div>
											<div class="delete"><i class="fa fa-times"></i></div>

											<div class="message">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
											</div>

										</li>

										<li>
											<div class="author">
												<img src="assets/img/avatar4.jpg" alt="avatar">
											</div>
											<div class="name">Anna Holn</div>
											<div class="date">Today, 1:08 PM</div>
											<div class="delete"><i class="fa fa-times"></i></div>

											<div class="message">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
											</div>	
										</li>

										<li>
											<div class="author">
												<img src="assets/img/avatar9.jpg" alt="avatar">
											</div>
											<textarea class="diss-form" placeholder="Write comment"></textarea>
										</li>

									</ul>	

								</li>

							</ul>	

						</div><!--/col-->

					</div><!--/row-->
					
				</div><!--/col-->
				
				<div class="col-md-3 visible-md visible-lg" id="feed">
					
					<h2>Activity Feed <a class="fa fa-repeat"></a></h2>
					
					<ul id="filter">
						<li><a class="green" href="index.html#" data-option-value="task">Tasks</a></li>
						<li><a class="red" href="index.html#" data-option-value="comment">Comments</a></li>
						<li><a class="blue" href="index.html#" data-option-value="message">Messages</a></li>
						<li><a href="index.html#" data-option-value="all">All</a></li>
					</ul>
					
					<ul id="timeline">
						
						<li class="task">
							<i class="fa fa-check-square green"></i>
							<div class="title">New website - A/B Tests</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<span class="date">3 seconds ago</span>
							<span class="separator">•</span>
							<span class="name">Megan Abbott</span>
						</li>
						
						<li class="comment">
							<i class="fa fa-comments red"></i>
							<div class="title">Sales increase</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<span class="date">15 minutes ago</span>
							<span class="separator">•</span>
							<span class="name">Ashley Tan</span>
						</li>
						
						<li class="comment">
							<i class="fa fa-comments red"></i>
							<div class="title">New Bootstrap Theme</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<span class="date">Today</span>
							<span class="separator">•</span>
							<span class="name">Ashley Tan</span>
						</li>
						
						<li class="message">
							<i class="fa fa-pencil-square blue"></i>
							<div class="title">Job offer</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
							<span class="date">Yesterday</span>
							<span class="separator">•</span>
							<span class="name">James Doe</span>
						</li>
						
						<li class="task">
							<i class="fa fa-check-square green"></i>
							<div class="title">Custom Design</div>
							<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<span class="date">5 days ago</span>
							<span class="separator">•</span>
							<span class="name">Megan Abbott</span>
						</li>		
						
					</ul>
					<a href="index.html#" id="load-more">•••</a>		
						
					
				</div><!--/col-->	
				
			</div><!--/row-->	
			
			
			
							
			
     
					
			</div>
			<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->
	
	
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>Here settings can be configured...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="clearfix"></div>
	
	<footer>
		
		<div class="row">
			
			<div class="col-sm-5">
				&copy; 2014 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster
			</div><!--/.col-->
			
			<div class="col-sm-7 text-right">
				Powered by: <a href="http://bootstrapmaster.com/demo/genius/" alt="Bootstrap Admin Templates">Genius Dashboard</a> | Based on Bootstrap 3.1.1 | Built with brix.io <a href="http://brix.io" alt="Brix.io - Interface Builder">Interface Builder</a>
			</div><!--/.col-->	
			
		</div><!--/.row-->	

	</footer>

@stop

@section('js')
<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.flot.min.js"></script>
	<script src="assets/js/jquery.flot.pie.min.js"></script>
	<script src="assets/js/jquery.flot.stack.min.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	<script src="assets/js/jquery.flot.time.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>

<!-- inline scripts related to this page -->
<script src="assets/js/pages/index.js"></script>

@stop