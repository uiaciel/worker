@extends('layouts.main')
@section('content')
    <div class="bg-secondary pt-10 pb-21"></div>
    <div class="container-fluid w-auto bg-secondary mt-n22 px-6">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Request {{ $order->inv }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-white  py-4">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h4 class="mb-0">From: {{ $order->client->nama }}
                                        {{-- // <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC) --}}
                                    </h4>
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary">Print</a>
                                    <a href="" class="btn btn-primary">Confirmed</a>
                                    <a href="" class="btn btn-primary">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center mb-3">CREW ARRANGEMENT REQUEST</h3>
                        <div class="row">
                            <p>Request No.: {{ $order->inv }}
                                <br><br>Ship Owner: {{ $order->shipowner }}
                                <br><br>Ship Name: {{ $order->shipname }}
                            </p>
                            <div class="col">
                                <p>
                                    Fishing Area: {{ $order->fishingarea }}
                                    <br><br>Nationaly: {{ $order->nationaly }}
                                </p>
                            </div>
                            <div class="col">
                                <p>Number of Crew Member(s): {{ $order->member }}</p>
                                <p>Period of Employment: {{ $order->periode }} Months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="margin-left: 25px;" class="mb-3">Estimated Date of Embarkation:
                                    {{ $order->start }}</p>
                                <p style="margin-left: 25px;" class="mb-3">Estimated Date of Disembarkation:
                                    {{ $order->end }}</p>
                            </div>
                            <div class="col">
                                <p style="margin-left: 25px;" class="mb-3">Port: {{ $order->portstart }}</p>
                                <p style="margin-left: 25px;" class="mb-3">Port: {{ $order->portend }}</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-uppercase small font-weight-bold">No.</th>
                                            <th class="text-uppercase small font-weight-bold">Class of Crew</th>
                                            <th class="text-uppercase small font-weight-bold">Age</th>
                                            <th class="text-uppercase small font-weight-bold">Experience</th>
                                            <th class="text-uppercase small font-weight-bold">Number</th>
                                            <th class="text-uppercase small font-weight-bold">Remarks</th>
                                            <th class="text-uppercase small font-weight-bold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orderjob as $index => $reqjob)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $reqjob->job->name }}</td>
                                                <td>{{ $reqjob->age }}</td>
                                                <td>{{ $reqjob->exp }}</td>
                                                <td>{{ $reqjob->number }}</td>
                                                <td>{{ $reqjob->remark }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <form onsubmit="return confirm('Are you sure?');"
                                                            action="{{ route('orderjob.destroy', $reqjob->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                                id="button-addon2">Delete</button>
                                                        </form>

                                                        <button class="btn btn-sm btn-outline-primary cekdata"
                                                            type="button" data-bs-toggle="modal"
                                                            data-bs-target="#com{{ $reqjob->id }}" id="creww">Select
                                                            Crew(s)</button>

                                                    </div>


                                                </td>
                                            </tr>

                                            @include('order.addcrew')

                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot class="font-weight-bold small">
                                    </tfoot>
                                </table>

                                <div class="modal fade" id="datacrewnya" aria-labelledby="datacrewnyaLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#datacrew"
                                                    role="button" aria-expanded="false" aria-controls="datacrew">
                                                    SELECT CREWS
                                                </a>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Selected Crew(s)</h4>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--table responsive end-->
                            <div class="form-group">
                                <label>Notes</label>
                                <div class="border border-primary">

                                    <ul class="numberList">
                                        @foreach ($orderjob as $oj)
                                            <li>
                                                <strong>{{ $oj->number }} - {{ $oj->job->name }}</strong>
                                                <ol class="bulletList">
                                                    @foreach ($oj->ordercrew as $namacrew)
                                                        <li>{{ $namacrew->crew->subid }} - {{ $namacrew->crew->name }}
                                                            {{ $namacrew->crew->birth }} -
                                                            {{ $namacrew->crew->job->name }} -
                                                            NO
                                                            PASSPORT</li>
                                                    @endforeach

                                                </ol>
                                            </li>
                                        @endforeach

                                    </ul>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-white  py-4">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h4 class="mb-0">Request Response </h4>
                                </div>
                                <div>
                                    {{-- <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#datacrewnya">Add Crews</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ url('/ordercrew/deleteall') }}">
                            @csrf
                            <input class="btn btn-success mb-3" type="submit" name="submit" id="btndelete"
                                value="Delete All Users" style="display: none" />

                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox"><input type="checkbox"
                                                    id="checkAll"> Semua</div>
                                        </th>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordercrew as $ordercrewx)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="id[]"
                                                            value="{{ $ordercrewx->id }}">
                                                        <span class="form-check-sign">Select</span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td><input value="{{ $ordercrewx->id }}" name="order_id[]"
                                                    hidden>{{ $ordercrewx->crew->name }}</td>
                                            <td>{{ $ordercrewx->crew->job->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($ordercrewx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                Old</td>
                                            <td>{{ $ordercrewx->status }}</td>
                                            <td>
                                                <form method="POST" action="/ordercrew/{{ $ordercrewx->id }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-danger btn-sm delete-user"
                                                            value="Delete">
                                                    </div>
                                                </form>
                                                <input type="text" class="form-control" name="remark[]"
                                                    aria-describedby="helpId" value="No" hidden>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h3>Air Ticket(s) Provided by : @if ($order->airticketby == $order->client->id)
                                    {{ $order->client->nama }}
                                @else
                                    {{ $order->company->nama }}
                                @endif
                            </h3>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-white  py-4">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h4 class="mb-0">Flight Schedule (TinyMCE) </h4>
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#penawarantiket">Buat Penawaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="accordion" id="accordionExample">
                                @foreach ($tickets as $tikets)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button btn-primary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#penawaran{{ $tikets->id }}"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Penawaran #{{ $tikets->id }} - <strong>
                                                    @if (is_null($tikets->status))
                                                        menunggu respon
                                                    @else
                                                        {{ $tikets->status }}
                                                    @endif
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="penawaran{{ $tikets->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $tikets->detail !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <form action="{{ route('orderjob.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input value="{{ $order->id }}" name="order_id" hidden>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">JOB</label>
                                <select class="form-control" name="job">
                                    <option>--SELECT--</option>
                                    <option>DECK</option>
                                    <option>ENGINE</option>
                                    <option>ASSISTANT ICE MASTER</option>
                                    <option>ICE MASTER</option>
                                    <option>ASSISTANT COOK</option>
                                    <option>CHIEF COOK</option>
                                    <option>BOSUN</option>
                                    <option>QUARTER MASTER</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">AGE</label>
                                <select class="form-control" name="age" id="">
                                    <option>--SELECT--</option>
                                    <option value="18-30">18-30</option>
                                    <option value="18-30">31-40</option>
                                    <option value="40+">40+</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">EXP</label>
                                <select class="form-control" name="exp" id="">
                                    <option>--SELECT--</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">NUMBER</label>
                                <select class="form-control" name="number" id="">
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
                                <select class="form-control" name="remark">
                                    <option>--SELECT--</option>
                                    <option value="NEW">NEW</option>
                                    <option value="FIXED">FIXED</option>
                                    <option value="REJOIN">REJOIN</option>
                                    <option value="RECOMMEND">RECOMMEND</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="penawarantiket" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Buat Penawaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('ticket.store') }}" method="POST">
                            @csrf
                            <input class="form-control" name="orderid" value="{{ $order->id }}" hidden />
                            <input class="form-control" name="orderinv" value="{{ $order->inv }}" hidden />
                            <textarea id="mytextarea" class="form-control" name="detail" rows="30">
                                <p><strong>Re : MV. DAIKICHI MARU / 8 CREW FIX</strong></p>
                                <p><strong>FOLLOWING ARE THE CONFIRMED FLIGHT SCHEDULE FOR 8 INDONESIAN CREW JOINING ABOUT VESSEL AT LAS PALMAS - SPAIN<br></strong></p>
                                <p><span style="text-decoration: underline;"><strong>FLIGHT SCHEDULE</strong></span></p>
                                <table style="border-collapse: collapse; width: 100%;" border="1">
                                <tbody>
                                <tr>
                                <td style="width: 18.6946%;">21-11-2022</td>
                                <td style="width: 18.6946%;">QR596</td>
                                <td style="width: 18.6946%;">CGK-JPN</td>
                                <td style="width: 18.6946%;">18.45 - 23.22</td>
                                <td style="width: 18.7005%;">OK</td>
                                </tr>
                                <tr>
                                <td style="width: 18.6946%;">21-11-2022</td>
                                <td style="width: 18.6946%;">QR596</td>
                                <td style="width: 18.6946%;">CGK-JPN</td>
                                <td style="width: 18.6946%;">18.45 - 23.22</td>
                                <td style="width: 18.7005%;">OK</td>
                                </tr>
                                </tbody>
                                </table>
                                <p><span style="color: #e03e2d;"><strong>** PRICE : US$&nbsp; 1.730 - / PERSON</strong></span></p>
                        </textarea>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var addedrows = new Array();
            $(document).ready(function() {
                $("#sourcetable tbody tr").on("click", function(event) {
                    var ok = 0;
                    var theid = $(this).attr('id').replace("sour", "");
                    var newaddedrows = new Array();
                    for (index = 0; index < addedrows.length; ++index) {
                        // if already selected then remove
                        if (addedrows[index] == theid) {
                            $(this).css("background-color", "#ffffff");
                            // remove from second table :
                            var tr = $("#dest" + theid);
                            tr.css("background-color", "#FF3700");
                            tr.fadeOut(400, function() {
                                tr.remove();
                            });
                            //addedrows.splice(theid, 1);
                            //the boolean
                            ok = 1;
                        } else {
                            newaddedrows.push(addedrows[index]);
                        }
                    }
                    addedrows = newaddedrows;
                    // if no match found then add the row :
                    if (!ok) {
                        // retrieve the id of the element to match the id of the new row :
                        addedrows.push(theid);
                        $(this).css("background-color", "#cacaca");
                        $('#destinationtable tr:last').after('<tr id="dest' + theid + '"><td>' +
                            $(this).find("td").eq(0).html() + '</td><td>' +
                            $(this).find("td").eq(1).html() + '</td><td>' +
                            $(this).find("td").eq(2).html() + '</td><td>' +
                            $(this).find("td").eq(3).html() + '</td></tr>');
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#sourcetable').DataTable();
            });
        </script>
        <script>
            $("#checkAll").click(function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
                if ($('input:checkbox').is(":checked"))
                    $("#btndelete").show();
                else
                    $("#btndelete").hide();
            });
        </script>
        <script>
            $('.delete-user').click(function(e) {
                e.preventDefault() // Don't post the form, unless confirmed
                if (confirm('Are you sure?')) {
                    // Post the form
                    $(e.target).closest('form').submit() // Post the surrounding form
                }
            });
        </script>
        <script>
            $(".checkboxMail1").change(function() {
                var setval = this.checked ? "ACC" : "RECOMMENDATION";
                $(".checkMailOK").text(setval);
                $("#mail1").val(setval);
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".addcl").click(function() {
                    var lsthmtl = $(".clone").html();
                    $(".increment").after(lsthmtl);
                });
                $("body").on("click", ".removecl", function() {
                    $(this).parents(".hdtuto control-group lst").remove();
                });
            });
        </script>
    @endsection
