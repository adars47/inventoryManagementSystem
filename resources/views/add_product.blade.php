@extends('layouts.app')

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Product</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
  <form role="form" action="{{ route('save_product') }}" method="POST">
      <div class="box-body">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" onchange="check_product_duplicate()">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
      </div>


      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <script>
    var check_url="{{ route('check_product_duplicate') }}";
    var csrf_token="{{csrf_token()}}";
    function check_product_duplicate()
    {
      var input=$("#name").val();
      if(!(input=="" || input==null))
      {
          $.ajax({
            type: 'POST',
            url: check_url,
            data: {name:input,
                    _token:csrf_token
                  },
            success: function(resultData) { 
                if(resultData!="okay")
                {
                  var product_id=resultData[0]['product_id'];
                  $('#name').val('');
                  alertify.alert('Duplicate Alert!','Product Already exists!</br> <a href="#"'+product_id+'> Add item for this product </a>');
                }
            }
          });        
      }
    }
  </script>
@endsection