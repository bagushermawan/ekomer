<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item {{ Request::route()->getName() == 'home' ? 'active' :''}}">
							<a href="{{route('home')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item {{ Request::route()->getName() == 'category' ? 'active' :''}}">
							<a href="{{route('category')}}">
								<i class="fas fa-pen-square"></i>
								<p>Categories</p>
							</a>
						</li>
						<li class="nav-item {{ Request::route()->getName() == 'product' ? 'active' :''}}">
							<a href="{{route('product')}}">
								<i class="fas fa-pen-square"></i>
								<p>Products</p>
							</a>
						</li>
						<li class="nav-item {{ Request::route()->getName() == 'user' ? 'active' :''}}">
							<a href="#">
								<i class="fas fa-pen-square"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->