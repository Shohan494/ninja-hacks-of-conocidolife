```

<script type="text/javascript">

$('.itemName').select2({

  placeholder: 'Select User',

  ajax: {

    url: '{{url('select2-autocomplete-ajax')}}',


    dataType: 'json',

    delay: 250,

    processResults: function (data) {

      return {

        results:  $.map(data, function (item) {

              return {

                  text: item.customer_name,

                  id: item.id

              }

          })

      };

    },

    cache: true

  }

});

</script>
```

```
  <div class="form-group col-md-12">

    <select class="itemName form-control" name="itemName[]" multiple="multiple"></select>

  </div>

```

```

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
```
