@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/mosques.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('mosques.show_fields')
                    <a href="{!! route('mosques.index') !!}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
