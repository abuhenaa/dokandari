@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <h1>This is the welcome page</h1>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection