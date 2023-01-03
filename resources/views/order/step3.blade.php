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
                            <h3 class="mb-0  text-white">Request #IND-9238</h3>
                        </div>
                        <div>
                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        @isset($orderjob)
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <div class="d-flex ">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">Admin AAT</h5>
                                    <p class="fs-2 text-dark mb-2">Please do approval to the selected crew(s) below!
                                    </p>
                                    <p class="fs-5 mb-0">2m ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">To: PT. ANGKASA AKBAR TARUNA (AAT)
                                            <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                        </h4>
                                    </div>
                                    <div>
                                        <a href="/orderprint/{{ $order->inv }}" target="_blank" class="btn btn-primary">Print
                                            Crew Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card body  -->
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('ordercrewall.update') }}">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Job</th>
                                            <th>Age</th>
                                            <th>Action</th>
                                            <th class="bg-primary text-white">APPROVAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordercrew as $index => $ordercrx)
                                            <tr @if ($ordercrx->status == 'ACC') class="bg-primary text-white" @endif>
                                                <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                        hidden>{{ $ordercrx->crew->name }}</td>
                                                <td>{{ $ordercrx->crew->job->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($ordercrx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                    Old</td>
                                                <td>View
                                                </td>
                                                <td class="bg-primary">
                                                    <select name="status[]" class="form-control">
                                                        @if ($ordercrx->status == 'ACC')
                                                            <option value="ACC">APPROVE</option>
                                                            <option value="RECOMMENDATION">NO ACC</option>
                                                        @else
                                                            <option value="RECOMMENDATION">NO ACC</option>
                                                            <option value="ACC">APPROVE</option>
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mb-3 row">
                                    <label for="shipowner" class="col-sm-3 col-form-label">Air Ticket(s) Provided by</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="orderid" value="{{ $order->id }}" hidden />
                                        <select class="form-control" name="airticketby">

                                            <option value="{{ $order->airticketby }}">{{ $order->airticketby }}</option>
                                            <option>== CHOOSE ==</option>
                                            <option value="JTFC">JTFC</option>
                                            <option value="AAT">AAT</option>

                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    @endsection
