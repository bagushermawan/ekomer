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
                            <a href="#">Product</a>
                        </li>
                    </ul>
                </div>

                @include('layouts.alert')
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Row</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post" action="{{ route('product.store') }}">
                                {{ csrf_field() }}
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">New product</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">Make a new product ..</p>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Souvenir" name="title">
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Description</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Description .." name="description">
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Image</label>
                                                                <input type="file" class="form-control" name="image">
                                                            </div>
                                                            
                                                            <div class="form-group form-group-default">
                                <label>Category</label>
                                <select multiple id="categories" name="category_id[]" class="form-control input-border-bottom">
                            </select>
                                
                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Price</label>
                                                                <input type="number" class="form-control" placeholder="10500" name="price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <button class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">
                                                <center>No.</center>
                                            </th>
                                            <th width="10%">Title</th>
                                            <th width="30%">Description</th>
                                            <th width="15%"><center>Image</center></th>
                                            <th>Category</th>
                                            <th width="10%">Price</th>
                                            <th style="width: 10%"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <center>No.</center>
                                            </th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th><center>Image</center></th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($daftar_product as $no => $product)
                                        <tr>
                                            <td><center>{{++$no + ($daftar_product->currentPage()-1) * $daftar_product->perPage()}}</center></td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->description}}</td>
                                            <td><center>
                                                <img src="{{asset('/storage/app/public/'.$product->image)}}" width="100px" height="100px"/>
                                            </center></td>
                                            <td><ul class="pl-3">
                                @foreach($product->categories as $c)
                                <li class="btn btn-info btn-xs btn-border btn-round">{{$c->name}}</li>
                                @endforeach 
                                </ul>
                                </td>
                                            <td>Rp {{$product->price}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('product.edit', ['id'=>$product->id])}}">
                                                        <button type="button" href=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('product.destroy', ['id'=>$product->id])}}">
                                                        <button id="alert_demo_8" type="button"
                                                            class="btn btn-link btn-danger">
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