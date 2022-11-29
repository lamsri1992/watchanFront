@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>มาตรฐานขั้นตอนการให้บริการ</h2>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <iframe src="{{ asset('files/service.pdf') }}#toolbar=1" width="100%" height="800px"></iframe>
    </div>
</section>
@endsection
