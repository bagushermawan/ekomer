@extends('layouts.app')
@section('title')
 Dashboard
@endsection
@section('content')
<div class="wrapper">
		<div class="main-header">
			@include('layouts.header')

			@include('layouts.navbar')
		</div>

		@include('layouts.sidebar')

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pages</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Dashboard</a>
							</li>
						</ul>
					</div>
					<div class="page-category">Inner page content goes here</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									x
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									x
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									x
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>
				</div>
			</footer>
		</div>

	</div>
@endsection
