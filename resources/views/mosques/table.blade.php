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
            </tr>
        </thead>
        <tbody>
        @foreach($mosques as $mosque)
            <tr>
                <td><a href="{!! route('mosques.show', [$mosque->id]) !!}">{!! $mosque->name !!}</a></td>
                <td>{!! $mosque->image !!}</td>
                <td>{!! $mosque->description !!}</td>
                <td>{!! $mosque->address !!}</td>
                <td>{!! $mosque->website !!}</td>
                <td>{!! $mosque->prefectures !!}</td>
                <td>{!! $mosque->city !!}</td>
                <td>{!! $mosque->status !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>