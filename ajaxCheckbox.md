## ajax checkbox controller view route

```

<label class="checkbox-custom checkbox-inline" data-initialize="checkbox">

    <input type="checkbox" class="checkInvoice form-check-input" data-taskid='{{$siteDetail->id}}' value="{{$siteDetail->id}}"

    @if($siteDetail->site_group) checked @endif>
    <span class="checkbox-label">Visibility</span>
</label>

```
