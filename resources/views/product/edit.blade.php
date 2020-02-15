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
                            <a href="{{route('product')}}">Product</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                        Edit ({{$product->id}})
                        </li>
                    </ul>
                </div>
                

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Product</div>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post" action="{{ route('product.update', ['id' => $product->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Stetoskop" name="title" value="{{ $product->title }}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Lorem ipsum oraora"
                                        name="description" value="{{ $product->description }}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                <small class="text-muted">Current image</small><br>
                            @if($product->image)
                            <img src="{{asset('storage/app/public/' . $product->image)}}" width="96px" />
                            @endif
                                    <br><br><input type="file" class="form-control" placeholder="Laptop, Aksesoris, .."
                                        name="image" value="{{ $product->image }}">
                                        <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp
                                        </div>
                                        <input type="text" class="form-control currency" name="price"
                                            placeholder="4500" value="{{ $product->price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="category_id[]" multiple id="categories" class="form-control">
                            </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i><span> Update</span></button>
                                </div>
                            </div>
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
@section('script')
<script>
  $('#categories').select2({
    placeholder: 'Select Category',
    ajax: {
      url: "{{route('category.ajaxsearch')}}",
      dataType: 'json',
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.name,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });
</script>
<script>
$('#categories').select2({
 ajax: {
 url: '{{route('category.ajaxsearch')}}',
 processResults: function(data){
 return {
 results: data.map(function(item){return {id: item.id, text:
item.name} })
 }
 }
 }
});
var categories = {!! $product->categories !!}
 categories.forEach(function(category){
 var option = new Option(category.name, category.id, true, true);
 $('#categories').append(option).trigger('change');
 });
</script>
@endsection