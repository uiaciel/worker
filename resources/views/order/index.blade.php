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
                            <h4 class="mb-0  text-white">Request List</h4>
                            <h3 class="mb-0 text-white">CREW ARRANGEMENT REQUESTS (C.A.R)</h3>
                        </div>
                        <div>
                            <a href="{{ route('order.create') }}" class="btn btn-white">Create New Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">

                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="active" href="#active" class="nav-link active" data-bs-toggle="tab"
                                        role="tab">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#cancel" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Cancelled</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#finish" class="nav-link" data-bs-toggle="tab" role="tab">Fixed</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#all" class="nav-link" data-bs-toggle="tab" role="tab">All</a>
                                </li>

                            </ul>

                        </div>


                    </div>
                    <div class="tab-content">
                        <div id="active" class="tab-pane fade active show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Request Date</th>
                                                <th>Request No.</th>
                                                <th>Status</th>
                                                <th>Vessel Name</th>
                                                <th>Fishing Area</th>
                                                <th>Number of Crew</th>
                                                <th>Estimated Date of Embarkation</th>
                                                <th>Embarkation Port</th>
                                                <th>Period of Employment</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($active as $index => $reqs)
                                                <tr>
                                                    <td scope="row">{{ $index + 1 }}</td>
                                                    <td>{{ $reqs->created_at }}</td>
                                                    <td>
                                                        @can('admin')
                                                            <a href="/admin/order/{{ $reqs->inv }}">{{ $reqs->inv }}</a>
                                                        @endcan <a href="/order/{{ $reqs->inv }}">{{ $reqs->inv }}</a>
                                                    </td>
                                                    <td>{{ $reqs->status }}</td>
                                                    <td>{{ $reqs->shipname }}</td>
                                                    <td>{{ $reqs->fishingarea }}</td>
                                                    <td>{{ $reqs->member }}</td>
                                                    <td>{{ $reqs->start }}</td>
                                                    <td>{{ $reqs->portstart }}</td>
                                                    <td>{{ $reqs->periode }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="cancel" class="tab-pane">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Request Date</th>
                                            <th>Request No.</th>
                                            <th>Status</th>
                                            <th>Vessel Name</th>
                                            <th>Fishing Area</th>
                                            <th>Number of Crew</th>
                                            <th>Estimated Date of Embarkation</th>
                                            <th>Embarkation Port</th>
                                            <th>Period of Employment</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cancel as $index => $cancel)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td>{{ $cancel->created_at }}</td>
                                                <td><a href="/order/{{ $cancel->inv }}">{{ $cancel->inv }}</a></td>
                                                <td>{{ $cancel->status }}</td>
                                                <td>{{ $cancel->shipname }}</td>
                                                <td>{{ $cancel->fishingarea }}</td>
                                                <td>{{ $cancel->member }}</td>
                                                <td>{{ $cancel->start }}</td>
                                                <td>{{ $cancel->portstart }}</td>
                                                <td>{{ $cancel->periode }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="finish" class="tab-pane">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Request Date</th>
                                            <th>Request No.</th>
                                            <th>Status</th>
                                            <th>Vessel Name</th>
                                            <th>Fishing Area</th>
                                            <th>Number of Crew</th>
                                            <th>Estimated Date of Embarkation</th>
                                            <th>Embarkation Port</th>
                                            <th>Period of Employment</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fix as $index => $fix)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td>{{ $fix->created_at }}</td>
                                                <td><a href="/order/{{ $fix->inv }}">{{ $fix->inv }}</a></td>

                                                <td>{{ $fix->status }}</td>
                                                <td>{{ $fix->shipname }}</td>


                                                <td>{{ $fix->fishingarea }}</td>
                                                <td>{{ $fix->member }}</td>
                                                <td>{{ $fix->start }}</td>
                                                <td>{{ $fix->portstart }}</td>
                                                <td>{{ $fix->periode }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="all" class="tab-pane">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Request Date</th>
                                            <th>Request No.</th>
                                            <th>Status</th>
                                            <th>Vessel Name</th>

                                            <th>Fishing Area</th>
                                            <th>Number of crew</th>
                                            <th>Estimated Date of Embarkation</th>
                                            <th>Embarkation Port</th>
                                            <th>Period of Employment</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all as $index => $all)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td>{{ $all->created_at }}</td>
                                                <td><a href="/order/{{ $all->inv }}">{{ $all->inv }}</a></td>
                                                <td>{{ $all->status }}</td>
                                                <td>{{ $all->shipname }}</td>
                                                <td>{{ $all->fishingarea }}</td>
                                                <td>{{ $all->member }}</td>
                                                <td>{{ $all->start }}</td>
                                                <td>{{ $all->portstart }}</td>
                                                <td>{{ $all->periode }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- card body  -->

                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->

    </div>
@endsection
