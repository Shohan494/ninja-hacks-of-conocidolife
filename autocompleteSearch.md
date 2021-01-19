```
    <div class="field">
    	{!! Form::Label('assigned_user', 'Assign User:') !!}
        <input class="typeahead form-control" type="text" name="userInput" value="">
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'ui teal button']) !!}
        <a href="{!! route('keys.index') !!}" class="ui yellow button">Cancel</a>
    </div>
</div>

<script>
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
            console.log(data);
                return process(data);
            });
        }
    });

</script>

```

Controller File

```

    public function autocomplete(Request $request)
    {
        $datas = DB::Table('users')
                ->where("name","LIKE","%{$request->input('query')}%")
                //->where("first_name","LIKE","%{$request->input('query')}%")
                //->where("last_name","LIKE","%{$request->input('query')}%")
                ->get();

        $dataModified = array();

         foreach ($datas as $data)
         {
           $dataModified[] = $data->first_name . $data->last_name ;
         }

        return $dataModified;

    }
