## Html

```
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

```

## Form

```

<div class="form-group">
    <label class="h6">Users List</label>

    <select class="auto-complete form-control" name="assigned_user" id="assigned_user">

        @foreach($users as $user )
            <option value="{{$user->id}}"> {{ $user->first_name }} {{ $user->last_name }}</option>
        @endforeach
    </select>
    @error('email')
    <div class="alert alert-danger" role="alert">
        @foreach($errors->get('user') as $e)
            {{$e}}
        @endforeach
    </div>
    @enderror
</div>

<div class="alert alert-light" role="alert">
    <h5 id="selected-email">Selected Email: </h5>

</div>
```

## JQuery

```
<script>


let email = $('#email option:first').text();


$('#selected-email').text('Selected Email: ' + email);

$(document).ready(function () {
    $('#email').change(function () {
        let selectedEmail = $(this).children("option:selected").text();

        $('#selected-email').text('Selected Email: ' + selectedEmail);

    });

    $('.auto-complete').select2();
});



</script>
```
