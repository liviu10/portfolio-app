@extends('layouts.app')
@extends('components.navbar')

@section('content')

    <div class="resume resume--container">

        RESUME PAGE SECTION HERE

        <br><br><br>
        {{ $displayAllRecords }}
        <br><br><br>

        @include('components.footer')

    </div>

@endsection