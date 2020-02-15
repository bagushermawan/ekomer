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