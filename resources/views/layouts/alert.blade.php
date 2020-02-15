@if($errors->any())
<div data-notify="container" class="col-10 col-xs-11 col-sm-4 alert alert-danger fade show" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; padding-left: 65px; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;">
    <button type="button" aria-hidden="true" class="close" data-notify="dismiss" data-dismiss="alert" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button>
        <span data-notify="icon" class="fa fa-times"></span>
        <span data-notify="title">{{$a}}</span>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <a href="#" data-notify="url" data-dismiss="alert"
        style="background-image: url(&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;); height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; z-index: 1032;"></a>
</div>
@endif
@if ($message = Session::get('sukses'))
<div data-notify="container" class="col-10 col-xs-11 col-sm-4 alert alert-success fade show" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; padding-left: 65px; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;">
    <button type="button" aria-hidden="true" class="close" data-notify="dismiss" data-dismiss="alert" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button>
        <span data-notify="icon" class="fa fa-check"></span>
        <span data-notify="title">{{$a}}</span>
        <span data-notify="message">{{$message}}</span>
        <a href="#" data-notify="url" data-dismiss="alert"
        style="background-image: url(&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;); height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; z-index: 1032;"></a>
</div>
@endif
@if ($message = Session::get('gagal'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('delete'))
<div data-notify="container" class="col-10 col-xs-11 col-sm-4 alert alert-warning fade show" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; padding-left: 65px; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;">
    <button type="button" aria-hidden="true" class="close" data-notify="dismiss" data-dismiss="alert" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button>
        <span data-notify="icon" class="fa fa-exclamation"></span>
        <span data-notify="title">{{$a}}</span>
        <span data-notify="message">{{$message}}</span>
        <a href="#" data-notify="url" data-dismiss="alert"
        style="background-image: url(&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;); height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; z-index: 1032;"></a>
</div>
@endif
