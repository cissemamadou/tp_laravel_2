@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('etudiant._form')
                        @include('etudiant._table')
                            <select>
                            <option>fr</option>
                            <option>en</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    {{--<ul class="navbar-nav mr-auto">--}}
        {{--<li class="nav-item dropdown">--}}
            {{--<a class="nav-link" href="#" id="navbarDropdownFlag" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--<img width="32" height="32" alt="{{ session('locale') }}"  src="{!! asset('images/flags/' . session('locale') . '-flag.png') !!}" />--}}
            {{--</a>--}}
            {{--<div id="flags" class="dropdown-menu" aria-labelledby="navbarDropdownFlag">--}}
                {{--@foreach(config('app.locales') as $locale)--}}
                    {{--@if($locale != session('locale'))--}}
                        {{--<a class="dropdown-item" href="{{ route('language', $locale) }}">--}}
                            {{--<img width="32" height="32" alt="{{ session('locale') }}"  src="{!! asset('images/flags/' . $locale . '-flag.png') !!}" />--}}
                        {{--</a>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</li>--}}
    {{--</ul>--}}
