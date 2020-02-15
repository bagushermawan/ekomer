@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">

            <a href="index.html" class="logo">
                <img src="{{asset('/assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

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
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                        Edit ({{$category->id}})
                        </li>
                    </ul>
                </div>
                

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Category</div>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal form-label-left" method="post"
                                    action="{{ route('category.update', ['id' => $category->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $category->name }}">
                                            <small id="emailHelp2" class="form-text text-muted">We'll never share your
                                                email
                                                with anyone else.</small>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                                </form>
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
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                        href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>

</div>
@endsection