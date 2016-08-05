@extends('Templates.default')

@section('content')
    <h3>Your search for "{{ Request::input('query') }}" </h3>

    @if (!$users->count())
        <p>No results found, pole</p>
        @endif

    <div class="row">
        <div class="col-lg-12">

            @foreach ($users as $user)
                @include('user.partials.userblock')
            @endforeach

        </div>
    </div>

@stop