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
            <h3 class="mb-0  text-white">Create Crew</h3>
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
          <h4 class="mb-0">Add Crew</h4>
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <!-- card body  -->
        <div class="card-body">
                        
          <form action="{{ route('crew.store') }}" method="POST" >
              @csrf
             
                <div class="mb-3 row">
                  <label for="subid" class="col-sm-3 col-form-label">ID</label>
                  <div class="col-sm-9">
                    <input type="text" name="subid" class="form-control" >
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="place" class="col-sm-3 col-form-label">Place of Birth</label>
                    <div class="col-sm-9">
                      <input type="text" name="place" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="birth" class="col-sm-3 col-form-label">Date Birth</label>
                    <div class="col-sm-9">
                      <input type="date" name="birth" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="religion" class="col-sm-3 col-form-label">Religion</label>
                    <div class="col-sm-9">
                      
                      <select class="form-select" name="religion">
                      
                      <option value="Islam">Islam</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Khonghucu">Khonghucu</option>
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="height" class="col-sm-3 col-form-label">Height (cm)</label>
                    <div class="col-sm-9">
                      <input type="number" name="height" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="weight" class="col-sm-3 col-form-label">Weight (cm)</label>
                    <div class="col-sm-9">
                      <input type="number" name="weight" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="marital" class="col-sm-3 col-form-label">Marital</label>
                    <div class="col-sm-9">
                       <select class="form-select" name="marital">
                      
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="specialmark" class="col-sm-3 col-form-label">Special Mark</label>
                    <div class="col-sm-9">
                      <input type="text" name="specialmark" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                      <input type="text" name="status" class="form-control" >
                    </div>
                  </div>
                  {{-- status misalnya avaliable, on board --}}
                  <div class="mb-3 row">
                    <label for="nationaly" class="col-sm-3 col-form-label">Nationality</label>
                    <div class="col-sm-9">
                      <select class="form-select" name="nationaly">
                      
                      <option value="Indonesian">Indonesian</option>
                      
                    </select>
                    </div>
                  </div>
                  
                  <div class="mb-3 row">
                    <label for="photo" class="col-sm-3 col-form-label">Upload Photo</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="file" name="photo" class="form-control" id="inputGroupFile02">
                          </div>
                    </div>
                  </div>
                  <hr>
                  <h4>Crew Document ID</h4>
                  <div class="mb-3 row">
                    <label for="visa_id" class="col-sm-3 col-form-label">Visa ID</label>
                    <div class="col-sm-9">
                      <input type="text" name="visa_id" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="visa_issued" class="col-sm-3 col-form-label">Visa Issued</label>
                    <div class="col-sm-9">
                      <input type="date" name="visa_issued" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="visa_place" class="col-sm-3 col-form-label">Visa Place</label>
                    <div class="col-sm-9">
                      <input type="text" name="visa_place" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="visa_valid" class="col-sm-3 col-form-label">Visa Valid</label>
                    <div class="col-sm-9">
                      <input type="date" name="visa_valid" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="passport_id" class="col-sm-3 col-form-label">Passport ID</label>
                    <div class="col-sm-9">
                      <input type="text" name="passport_id" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="passport_issued" class="col-sm-3 col-form-label">Passport issued</label>
                    <div class="col-sm-9">
                      <input type="date" name="passport_issued" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="passport_place" class="col-sm-3 col-form-label">Passport Place</label>
                    <div class="col-sm-9">
                      <input type="text" name="passport_place" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="passport_valid" class="col-sm-3 col-form-label">Passport Valid</label>
                    <div class="col-sm-9">
                      <input type="date" name="passport_valid" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="orangebook_id" class="col-sm-3 col-form-label">Orangebook ID</label>
                    <div class="col-sm-9">
                      <input type="text" name="orangebook_id" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="orangebook_issued" class="col-sm-3 col-form-label">Orangebook issued</label>
                    <div class="col-sm-9">
                      <input type="date" name="orangebook_issued" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="orangebook_place" class="col-sm-3 col-form-label">Orangebook Place</label>
                    <div class="col-sm-9">
                      <input type="text" name="orangebook_place" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="orangebook_valid" class="col-sm-3 col-form-label">Orangebook Valid</label>
                    <div class="col-sm-9">
                      <input type="date" name="orangebook_valid" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="seamanbook_id" class="col-sm-3 col-form-label">Seamanbook ID</label>
                    <div class="col-sm-9">
                      <input type="text" name="seamanbook_id" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="seamanbook_issued" class="col-sm-3 col-form-label">Seamanbook issued</label>
                    <div class="col-sm-9">
                      <input type="date" name="seamanbook_issued" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="seamanbook_place" class="col-sm-3 col-form-label">Seamanbook Place</label>
                    <div class="col-sm-9">
                      <input type="text" name="seamanbook_place" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="seamanbook_valid" class="col-sm-3 col-form-label">Seamanbook Valid</label>
                    <div class="col-sm-9">
                      <input type="date" name="seamanbook_valid" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="signoff" class="col-sm-3 col-form-label">Sign off</label>
                    <div class="col-sm-9">
                      <input type="text" name="signoff" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="salary" class="col-sm-3 col-form-label">Salary</label>
                    <div class="col-sm-9">
                      <input type="text" name="salary" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="job" class="col-sm-3 col-form-label">Job</label>
                    <div class="col-sm-9">
                      <select class="form-select" name="job_id">
                        @foreach ($jobs as $job )
                        <option value="{{$job->id}}">{{$job->name}}</option>
                        @endforeach
                      {{-- <option value="DECK">DECK</option>
                      <option value="ENGINE">ENGINE</option>
                      <option value="ASSISTANT ICE MASTER">ASSISTANT ICE MASTER</option>
                      <option value="ICE MASTER">ICE MASTER</option>
                      <option value="ASSISTANT COOK">ASSISTANT COOK</option>
                      <option value="CHIEF COOK">CHIEF COOK</option>
                      <option value="BOSUN">BOSUN</option>
                      <option value="QUARTER MASTER">QUARTER MASTER</option> --}}
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="shoes" class="col-sm-3 col-form-label">Shoes</label>
                    <div class="col-sm-9">
                      <select class="form-select" name="shoes">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="glove" class="col-sm-3 col-form-label">Glove</label>
                    <div class="col-sm-9">
                       <select class="form-select" name="glove">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kappa" class="col-sm-3 col-form-label">Kappa</label>
                    <div class="col-sm-9">
                       <select class="form-select" name="kappa">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      
                    </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="remark" class="col-sm-3 col-form-label">Remark</label>
                    <div class="col-sm-9">
                      <input type="text" name="remark" class="form-control" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="license" class="col-sm-3 col-form-label">License</label>
                    <div class="col-sm-9">
                      <input type="text" name="license" class="form-control" >
                    </div>
                  </div>
                
                
                <button class="btn btn-primary btn-md" type="submit"> Submit</button>
                
            </form>
            
        </div>
     
      </div>
    </div>
  </div>
  <!-- row  -->
</div>
@endsection