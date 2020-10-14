## ajax checkbox controller view route

```


<label class="checkbox-custom checkbox-inline" data-initialize="checkbox">

    <input type="checkbox" class="checkInvoice form-check-input" data-taskid='{{$siteDetail->id}}' data-groupid='{{$siteDetail->role}}' value="{{$siteDetail->id}}"

    @if($siteDetail->site_group) checked @endif>
    <span class="checkbox-label">Visibility</span>
</label>
```

## Script

```
<script>
    $(".checkInvoice").on("change", function() {
    var taskId = $(this).attr("data-taskid"); // gets task ID of clicked checkbox
    var groupId = $(this).attr("data-groupid");
    var state = $(this).is(':checked'); // gets if checkbox is checked or not
    console.log(taskId);
    console.log(state);
    console.log(groupId);
        
    $.post("addVisibiltyToSite", { '_token': "{{ csrf_token() }}", 'taskId':taskId, 'checkboxStatus':state}, function() {
        //console.log(idTask);
  });
});
</script>
```
