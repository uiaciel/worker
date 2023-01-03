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
                            <h3 class="mb-0  text-white">Crew Database</h3>
                        </div>
                        <div>
                            <a href="{{ route('crew.create') }}" class="btn btn-white">Add New Crew</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row">

        </div>

        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="tab-all" href="#all" class="nav-link active" data-bs-toggle="tab"
                                        role="tab">All <span
                                            class="badge rounded-pill bg-primary">{{ $crew->count() }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-onboard" href="#onboard" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crews On Board <span
                                            class="badge rounded-pill bg-primary">{{ $crew->where('status', 'Onboard')->count() }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-standby" href="#standby" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Stand-by Crews
                                        <span
                                            class="badge rounded-pill bg-primary">{{ $crew->where('status', 'Standby')->count() }}</span></a>
                                </li>


                            </ul>



                        </div>


                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="all" class="tab-pane fade show active">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Crew ID</th>
                                            <th>Name</th>
                                            <th>D.O.B</th>
                                            <th>Job</th>
                                            <th>Passport No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew as $index => $crews)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $crews->subid }}">{{ $crews->subid }}</a></td>

                                                <td>{{ $crews->name }}</td>

                                                <td>{{ $crews->birth }}</td>
                                                <td>{{ $crews->job->code }}</td>
                                                <td>{{ $crews->passport_id }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('doc.index') }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">Documents</a>

                                                        <a href="/print/crew/{{ $crews->subid }}"
                                                            class="btn btn-sm btn-outline-success" target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="onboard" class="tab-pane fade">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Crew ID</th>
                                            <th>Name</th>
                                            <th>D.O.B</th>
                                            <th>Job</th>
                                            <th>Passport No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew->where('status', 'Onboard') as $index => $onboard)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $onboard->subid }}">{{ $onboard->subid }}</a></td>

                                                <td>{{ $onboard->name }}</td>

                                                <td>{{ $onboard->birth }}</td>
                                                <td>{{ $onboard->job->code }}</td>
                                                <td>{{ $onboard->passport_id }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('doc.index') }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">Documents</a>

                                                        <a href="/print/crew/{{ $onboard->subid }}"
                                                            class="btn btn-sm btn-outline-success" target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="standby" class="tab-pane fade">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Crew ID</th>
                                            <th>Name</th>
                                            <th>D.O.B</th>
                                            <th>Job</th>
                                            <th>Passport No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew->where('status', 'Standby') as $index => $standby)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $standby->subid }}">{{ $standby->subid }}</a></td>

                                                <td>{{ $standby->name }}</td>

                                                <td>{{ $standby->birth }}</td>
                                                <td>{{ $standby->job->code }}</td>
                                                <td>{{ $standby->passport_id }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('doc.index') }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">Documents</a>

                                                        <a href="/print/crew/{{ $standby->subid }}"
                                                            class="btn btn-sm btn-outline-success" target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex justify-content-between">

                            <h4 class="mb-0">Crew List</h4>
                            <button class="btn btn-sm btn-primary">Sort by Job</button>
                        </div>
                    </div>
                    <!-- card body  -->
                    <div class="card-body">

                    </div>

                </div>
            </div>
        </div>
        <!-- row  -->
    </div>
    </div>
@endsection
