@extends('layouts.main')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Print Crews Profile</h3>
                        </div>
                        <div>
                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">

                            <label class="form-label">Select Crew(s)</label>
                            <select class="form-select select2" multiple aria-label="Default select example">
                                @foreach ($crews as $crew)
                                    <option value="{{ $crew->id }}">{{ $crew->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-grid gap-2">

                            <button class="btn btn-primary" type="button">Print All</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
