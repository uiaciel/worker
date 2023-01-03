@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    DATA PASSPORT CREWS
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Passport ID</th>
                                <th>issued</th>
                                <th>Place</th>
                                <th>Valid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passport as $index => $passport)
                       
                            <tr>
                                <td scope="row">{{$index ++}}</td>
                                <td>{{$passport->crew->nama}}</td>
                                <td>{{$passport->passport_id}}</td>
                                <td>{{$passport->issued}}</td>
                                <td>{{$passport->place}}</td>
                                <td>{{$passport->valid}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                   
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
        </div>
    </div>
@endsection