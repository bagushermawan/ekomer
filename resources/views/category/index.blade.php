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
								<a href="#">Category</a>
							</li>
						</ul>
					</div>
                    <!-- <div class="page-category">Inner page content goes here</div> -->
					@include('layouts.alert')
                    <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Row</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<form class="form-horizontal form-label-left" method="post" action="{{ route('category.store') }}">
                    				{{ csrf_field() }}
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">New Category</span> 
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Make a new Category ..</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Category</label>
																	<input type="text" class="form-control" placeholder="Nama Kategori" name="name">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									</form>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th width="10%"><center>No.</center></th>
													<th>Nama</th>
													<th style="width: 10%"><center>Action</center></th>
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th><center>No.</center></th>
													<th>Nama</th>
													<th><center>Action</center></th>
												</tr>
											</tfoot>
											<tbody>
                                                @foreach($daftar_kategori as $no => $category)
												    <tr>
                                                        <td><center>{{++$no + ($daftar_kategori->currentPage()-1) * $daftar_kategori->perPage()}}</center></td>
				    									<td>{{$category->name}}</td>
			    										<td>
		    												<div class="form-button-action">
		    												    <a href="{{ route('category.edit', ['id'=>$category->id])}}">
		    												        <button type="button" href="" class="btn btn-link btn-primary btn-lg"
		    												            data-original-title="Edit Task">
		    												            <i class="fa fa-edit"></i>
		    												        </button>
		    												    </a>
		    												    <a href="{{ route('category.destroy', ['id'=>$category->id])}}">
		    												        <button id="alert_demo_8" type="button" class="btn btn-link btn-danger">
		    												            <i class="fa fa-times"></i>
		    												        </button>
		    												    </a>
		    												</div>
													    </td>
                                                    </tr>
                                                    @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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