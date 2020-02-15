<form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post"
                            action="{{ route('product.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Stetoskop" name="title">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Lorem ipsum oraora"
                                        name="description">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" placeholder="Laptop, Aksesoris, .."
                                        name="image">
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
                                            placeholder="4500">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" placeholder="9" name="stock">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <!-- <div class="selectgroup selectgroup-pills">
                                        @foreach($category as $k)
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="category_id" value="{{$k->id}}" class="selectgroup-input">
                                            <span class="selectgroup-button">{{$k->name}}</span>
                                        </label>
                                        @endforeach
                                    </div> -->
                                    <select name="category_id[]" multiple id="categories" class="form-control">
                            </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary"><span>Add</span></button>
                                </div>
                            </div>
                        </form>
                        <script type="text/javascript">
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