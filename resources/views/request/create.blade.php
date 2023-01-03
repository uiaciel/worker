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
            <form action="{{ route('re.storeone') }}" method="POST" >
                @csrf
                <div class="mb-3 row">
                  <label for="shipowner" class="col-sm-3 col-form-label">Request No.</label>
                  <div class="col-sm-9">
                    <input type="text" name="inv" class="form-control" id="shipowner" value="INV-{{ Str::random(5)}}">
                    <input type="text" name="status" class="form-control" id="shipowner" value="Confirm" hidden>
                  </div>
                </div>
                  <div class="mb-3 row">
                    <label for="shipowner" class="col-sm-3 col-form-label">Ship Owner</label>
                    <div class="col-sm-9">
                      <input type="text" name="shipowner" class="form-control" id="shipowner">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Ship Name</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <select class="select2 form-select" name="shipname" >
                                @foreach ($shipname as $ship)
                                    <option value="{{$ship->name}}">{{$ship->name}}</option>
                                @endforeach
                                      
                              </select>
                            
                            <span class="input-group-text" id="inputGroup-sizing-default">Maru</span>
                            <select class="form-control" name="shipmaru" >
                                <option value="Maru">Maru</option>
                                <option value="Non Maru">Non Maru</option>
                            </select>
                            <span class="input-group-text" id="inputGroup-sizing-default">Number</span>
                            <input type="number" name="shipnumber" max="10000" min="0" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                            <select class="form-control" name="shiptype" id="">
                                <option value="Longline">Longline</option>
                                <option value="Trawl">Trawl</option>
                                <option value="Purse Seine">Purse Seine</option>
                                <option value="Pole & Line">Pole & Line</option>
                                <option value="Jigger">Jigger</option>
                                <option value="Fish Carrier">Fish Carrier</option>
                                <option value="Support Vessel">Support Vessel</option>
                                <option value="Fishery Research Vessel">Fishery Research Vessel</option>
                            </select>
                          </div>
                    </div>
                  </div>
                  
                  
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Fishing Area</label>
                    <div class="col-sm-9">
                      <input type="text" name="fishingarea" class="form-control" id="inputPassword">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nationality</label>
                    <div class="col-sm-9">
                      <select class="form-control select2" name="nationaly" >
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
                    <label for="inputPassword" class="col-sm-3 col-form-label">Number of Crew(s)</label>
                    <div class="col-sm-9">
                      <input type="number" name="member" class="form-control" id="inputPassword">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Period of Employment</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                      <input type="number" min="1" name="periode" class="form-control" id="inputPassword">
                      <span class="input-group-text" id="inputGroup-sizing-default">Month(s)</span>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Estimated Date of Embarkation</label>
                    <div class="col-sm-9">
            
                        <div class="input-group">
                          
                          <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                          <input type="text" name="start" value="2022-01-01" id="datestart" class="form-control">
                            <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                            <select class="form-select select2" name="portstart" >
                                @foreach ($port as $po)
                                    <option value="{{$po->name}}">{{$po->name}}</option>
                                @endforeach
                               
                            </select>
                            
                          </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Estimated Date of Disembarkation</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                          <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                          <input type="text" name="end" value="2022-01-01" class="form-control" id="dateend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                            <select class="form-select select2" name="portend" >
                                @foreach ($port as $po)
                                    <option value="{{$po->name}}">{{$po->name}}</option>
                                @endforeach
                            </select>
                            
                          </div>
                    </div>
                  </div>
                  
                  {{-- <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword">
                    </div>
                  </div> --}}
                  
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
              
          </div>
       
        </div>
      </div>
    </div>
    <!-- row -->
@endsection
