<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/events.fields.title').':') !!}
    <p>{!! $event->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/events.fields.description').':') !!}
    <p>{!! $event->description !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/events.fields.image').':') !!}
    <p>{!! $event->image !!}</p>
</div>

<!-- Date From Field -->
<div class="form-group">
    {!! Form::label('date_from', __('models/events.fields.date_from').':') !!}
    <p>{!! $event->date_from !!}</p>
</div>

<!-- Date To Field -->
<div class="form-group">
    {!! Form::label('date_to', __('models/events.fields.date_to').':') !!}
    <p>{!! $event->date_to !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', __('models/events.fields.user_id').':') !!}
    <p>{!! $event->user_id !!}</p>
</div>

<!-- Mosque Id Field -->
<div class="form-group">
    {!! Form::label('mosque_id', __('models/events.fields.mosque_id').':') !!}
    <p>{!! $event->mosque_id !!}</p>
</div>

