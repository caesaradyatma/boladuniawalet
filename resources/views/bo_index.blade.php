@extends('layouts.app')
@section('content')
    <section class="py-5" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Bola Dunia Walet Backoffice</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('bo_messages') }}" class="btn btn-primary">List of Messages</a>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-primary">Website Content</a>
                </div>
            </div>
        </div>
    </section>
@endsection