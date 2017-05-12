@extends('master')

@section('title', 'Naslov moje stranice')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('enviroment')
<ul type="1">
    @foreach ($_ENV as $k=>$v)
    <li>{{$k}} : {{$v}}</li>
    @endforeach
</ul>

@endsection

@section('content')
<p>This is my body content.</p>
<h2>Official Packages</h2>
<ul>
    <li><a href="/docs/5.4/billing">Cashier</a></li>
    <li><a href="/docs/5.4/envoy">Envoy</a></li>
    <li><a href="/docs/5.4/passport">Passport</a></li>
    <li><a href="/docs/5.4/scout">Scout</a></li>
    <li><a href="https://github.com/laravel/socialite">Socialite</a></li>
</ul>

{{print_r($studenti)}}

@endsection