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
                            <h3 class="mb-0  text-white">Create Request</h3>
                        </div>
                        <div>
                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
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
                        <h4 class="mb-0">CREW ARRANGEMENT REQUEST</h4>
                    </div>
                    <!-- card body  -->
                    <div class="card-body">
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="shipowner" class="col-sm-4 col-form-label">Request No.</label>
                                <div class="col-sm-8">
                                    <input type="text" name="inv" class="form-control" id="shipowner"
                                        value="INV-{{ Str::random(5) }}">
                                    <input type="text" name="status" class="form-control" id="shipowner" value="Active"
                                        hidden>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="shipowner" class="col-sm-4 col-form-label">Request To.</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="company_id" id="">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->nama }}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="client_id" value="{{ Auth::user()->client->id }}"
                                        class="form-control" hidden>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="shipowner" class="col-sm-4 col-form-label">Ship Owner</label>
                                <div class="col-sm-8">
                                    <input type="text" name="shipowner" class="form-control" id="shipowner">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Ship Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="select2 form-select" name="shipname">
                                            @foreach ($shipname as $ship)
                                                <option value="{{ $ship->name }}">{{ $ship->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-text" id="inputGroup-sizing-default">Maru</span>
                                        <select class="form-control" name="shipmaru">
                                            <option value="Maru">Maru</option>
                                            <option value="">Non Maru</option>
                                        </select>
                                        <span class="input-group-text" id="inputGroup-sizing-default">Number</span>
                                        <input type="number" name="shipnumber" max="10000" min="0"
                                            class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                                        <select class="form-control" name="shiptype" id="">
                                            <option value="Longline">Longline</option>
                                            <option value="Trawl">Trawl</option>
                                            <option value="Purse Seine">Purse Seine</option>
                                            <option value="Pole & Line">Pole & Line</option>
                                            <option value="Jigger">Jigger</option>
                                            <option value="Fish Carrier">Fish Carrier</option>
                                            <option value="Fishery Research Vessel">Fishery Research Vessel</option>
                                            <option value="Fishery Training Vessel">Fishery Training Vessel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Fishing Area</label>
                                <div class="col-sm-8">
                                    <input type="text" name="fishingarea" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nationality</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" name="nationaly">
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="China">China</option>
                                        <option value="Japan">Japan</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Rusia">Rusia</option>
                                        <option value="Ukraine">Ukraine</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Number of Crew(s)</label>
                                <div class="col-sm-8">
                                    <input type="number" name="member" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Period of Employment</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="number" min="1" name="periode" class="form-control"
                                            id="inputPassword">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Month(s)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Estimated Date of
                                    Embarkation</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                        <input type="text" name="start" value="2022-01-01" id="datestart"
                                            class="form-control">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                                        <select class="form-select select2" name="portstart">
                                            @foreach ($port as $po)
                                                <option value="{{ $po->name }}">{{ $po->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Estimated Date of
                                    Disembarkation</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                        <input type="text" name="end" value="2022-01-01" class="form-control"
                                            id="dateend" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                                        <select class="form-select select2" name="portend">
                                            @foreach ($port as $po)
                                                <option value="{{ $po->name }}">{{ $po->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputPassword">
                    </div>
                  </div> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- <form method="POST" action="{{route('ordercrew.store')}}">
          @csrf --}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Request</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- <form action="{{ route('orderjob.store') }}" enctype="multipart/form-data" method="POST">
            @csrf --}}
                        {{-- <input value="" name="order_id" hidden> --}}
                        <form id="formadd">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">JOB</label>
                                <select class="form-control" id="job">
                                    <option>--SELECT--</option>
                                    <option value="D">DECK</option>
                                    <option value="E">ENGINE</option>
                                    <option value="AI/AIM">ASSISTANT ICE MASTER</option>
                                    <option value="IM">ICE MASTER</option>
                                    <option value="AC">ASSISTANT COOK</option>
                                    <option value="CC">CHIEF COOK</option>
                                    <option value="BS">BOSUN</option>
                                    <option value="QM">QUARTER MASTER</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">AGE</label>
                                <select class="form-control" id="age">
                                    <option>--SELECT--</option>
                                    <option value="18-30">18-30</option>
                                    <option value="18-30">31-40</option>
                                    <option value="40+">40+</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">EXP</label>
                                <select class="form-control" id="exp">
                                    <option>--SELECT--</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">NUMBER</label>
                                <select class="form-control" id="number">
                                    <option>--SELECT--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">REMARKS</label>
                                <select class="form-control" id="remark">
                                    <option>--SELECT--</option>
                                    <option value="NEW">NEW</option>
                                    <option value="FIXED">FIXED</option>
                                    <option value="REJOIN">REJOIN</option>
                                    <option value="RECOMMEND">RECOMMEND</option>
                                </select>
                            </div>
                            <button type="button" id="add-row" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#add-row").click(function() {
                    var job = $("#job").val();
                    var age = $("#age").val();
                    var exp = $("#exp").val();
                    var number = $("#number").val();
                    var remark = $("#remark").val();
                    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + job + "</td><td>" +
                        age + "</td><td>" + exp + "</td><td>" + number + "</td><td>" + remark + "</td></tr>";
                    $("table tbody").append(markup);
                    $("#formadd").each(function() {
                        this.reset();
                    });
                });
                // Find and remove selected table rows
                $(".delete-row").click(function() {
                    $("table tbody").find('input[name="record"]').each(function() {
                        if ($(this).is(":checked")) {
                            $(this).parents("tr").remove();
                        }
                    });
                });
            });
        </script>
        <style>
            .btn {
                width: 150px;
            }
        </style>
    @endsection
