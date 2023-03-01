@php
$points = explode(',', $point_descriptions);
@endphp
@foreach($points as $key => $point)
@php
$point = str_replace('[', '', $point);
$point = str_replace(']', '', $point);
$point = str_replace('"', '', $point);
@endphp
@if($key == 0)
<div class="row">
    <div class="col-md-10">
        <textarea class="form-control" id="point_description" placeholder="Point Description"
            name="point_description[]">{{$point}}</textarea>
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-outline-success btn-sm addPointDescriptionBtn">
            <i class="fa fa-plus"></i>
        </button>
    </div>
</div>
@else
<span class="appendPointDescription">
    <div class="row mt-2">
        <div class="col-md-10">
            <textarea class="form-control" id="point_description" placeholder="Point Description"
                name="point_description[]">{{$point}}</textarea>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-outline-danger btn-sm removePointDescriptionBtn">
                <i class="fa fa-trash"></i>
            </button>
        </div>
    </div>
</span>
@endif
@if(count($points) == 1)
<span class="appendPointDescription"></span>
@endif
@endforeach
