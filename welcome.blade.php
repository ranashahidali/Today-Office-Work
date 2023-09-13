<h1>hello1</h1>




@extends('layout.masterlayout')

@section('content')
<h2>home page</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium, consequatur consequuntur hic nulla accusantium qui voluptas iure distinctio voluptatum expedita quisquam fugiat amet, quam debitis minima ullam, enim ducimus.</p>
    
@endsection

@section('title')
  Home

@endsection

@push('scripts')
    <script src="/example.js"></script>
    <script src="/boot.js"></script>
    <script src="/ss.js"></script>
@endpush

@push('style')
    <link rel="stylesheet" href="boot.css">
@endpush

@prepend('style')
    <style>
        #wrapper{
            background-color: green;
        }
    </style>
@endprepend