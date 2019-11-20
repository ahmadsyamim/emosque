<div class="table-responsive">
    <table class="table" id="mosques-table">
        <thead>
            <tr>
                <th>@lang('models/mosques.fields.name')</th>
        <th>@lang('models/mosques.fields.image')</th>
        <th>@lang('models/mosques.fields.description')</th>
        <th>@lang('models/mosques.fields.address')</th>
        <th>@lang('models/mosques.fields.website')</th>
        <th>@lang('models/mosques.fields.prefectures')</th>
        <th>@lang('models/mosques.fields.city')</th>
        <th>@lang('models/mosques.fields.status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mosques as $mosque)
            <tr>
                <td>{!! $mosque->name !!}</td>
            <td>{!! $mosque->image !!}</td>
            <td>{!! $mosque->description !!}</td>
            <td>{!! $mosque->address !!}</td>
            <td>{!! $mosque->website !!}</td>
            <td>{!! $mosque->prefectures !!}</td>
            <td>{!! $mosque->city !!}</td>
            <td>{!! $mosque->status !!}</td>
                <td>
                    {!! Form::open(['route' => ['mosques.destroy', $mosque->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('mosques.show', [$mosque->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('mosques.edit', [$mosque->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
