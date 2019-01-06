@extends('layouts.app')
@section('content')
    <section class="py-5" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Messages</h1>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table class=" table table-striped">
                        <tr>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Phone Number</th>
                            <th>Date (year/month/day)</th>
                        </tr>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->email}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->created_at}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>
@endsection