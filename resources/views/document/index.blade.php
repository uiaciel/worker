@extends('layouts.main')
@section('content')
<div class="bg-primary pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
  <div class="col-lg-12 col-md-12 col-12 mb-5">
    <!-- Page header -->
    <div>
      <div class="d-flex justify-content-between align-items-center">
        <div class="mb-2 mb-lg-0">
          <h3 class="mb-0  text-white">Upload Crew Documents</h3>
        </div>
        <div>
          <a href="#" class="btn btn-white" hidden>Create New Project</a>
        </div>
      </div>
    </div>
  </div>

<div class="row">
 
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('doc.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <!-- row -->
          <!-- row -->
          <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label
                form-label">Select Crew</label>
            <div class="col-md-8 col-12">
              <select class="select2 form-control" name="crew_id" id="">
                @foreach ($crews as $crew )
                <option value="{{$crew->id}}">{{$crew->subid}} - {{$crew->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="phone" class="col-sm-4 col-form-label
                form-label">Document File (PDF)</label>
            <div class="col-md-8 col-12">
              <input type="file" class="form-control-file" name="file" id="path" placeholder="" aria-describedby="fileHelpId">
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="location" class="col-sm-4 col-form-label
                form-label">Document Type </label>

            <div class="col-md-8 col-12">
              <select class="form-select" id="location">
                  <option selected="">==Select==</option>
                  <option value="visa">Entry Visa</option>
                  <option value="passport">Passport</option>
                  <option value="seamanbook">Seaman Book</option>
                  <option value="orangebook">Orange Book</option>
                </select>
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="addressLine" class="col-sm-4 col-form-label
                form-label">Document No.</label>
            <div class="col-md-8 col-12">
              <input type="text" class="form-control"  id="addressLine" required="">
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="addressLineTwo" class="col-sm-4
                col-form-label form-label">Issued Date</label>
            <div class="col-md-8 col-12">
              <input type="date" class="form-control" id="addressLineTwo" required="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addressLineTwo" class="col-sm-4
                col-form-label form-label">Issued Place</label>
            <div class="col-md-8 col-12">
              <input type="text" class="form-control" placeholder="Jakarta" id="addressLineTwo" required="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="addressLineTwo" class="col-sm-4
                col-form-label form-label">Valid Until</label>
            <div class="col-md-8 col-12">
              <input type="date" class="form-control" id="addressLineTwo" required="">
            </div>
          </div>
          <!-- row -->
          <div class="row align-items-center">
            
            
            <div class="offset-md-4 col-md-8 mt-4">
              <button type="submit" class="btn btn-primary"> Upload</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-12 col-md-12 col-12">
    <div class="card h-100">
      <!-- card header  -->
      <div class="card-header bg-white py-4">
        <h4 class="mb-0">Crew Documents </h4>
      </div>
      <!-- table  -->
      <div class="table-responsive">
        <table class="table text-nowrap">
          <thead class="table-light">
            <tr>
              <th>Name</th>
              <th>Action</th>
              
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">
                <div class="d-flex align-items-center">
                  <div>
                    <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>
                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Passport - 10154425</h5>
                    <p class="mb-0">02-Nov-2010</p>
                  </div>
                </div>
              </td>
              <td><a href="#">View</a></td>
              <td><a href="#">Download</a></td>
            </tr>
            <tr>
              <td class="align-middle">
                <div class="d-flex align-items-center">
                  <div>
                    <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>
                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Jitu Chauhan</h5>
                    <p class="mb-0">jituchauhan@example.com</p>
                  </div>
                </div>
              </td>
              
            </tr>
            <tr>
              <td class="align-middle">
                <div class="d-flex align-items-center">
                  <div>
                    <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>
                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Sandeep Chauhan</h5>
                    <p class="mb-0">sandeepchauhan@example.com</p>
                  </div>
                </div>
              </td>
              
            </tr>
            <tr>
              <td class="align-middle">
                <div class="d-flex align-items-center">

                  <div>
                    <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>

                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Amanda Darnell</h5>
                    <p class="mb-0">amandadarnell@example.com</p>
                  </div>
                </div>
              </td>
              
            </tr>
            <tr>

              <td class="align-middle">
                <div class="d-flex align-items-center">

                  <div>
                    <img src="assets/images/avatar/avatar-5.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>

                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Patricia Murrill</h5>
                    <p class="mb-0">patriciamurrill@example.com</p>
                  </div>
                </div>
              </td>
              
            </tr>
            <tr>
              <td class="align-middle border-bottom-0">
                <div class="d-flex align-items-center">
                  <div>
                    <img src="assets/images/avatar/avatar-6.jpg" alt="" class="avatar-md avatar rounded-circle">
                  </div>
                  <div class="ms-3 lh-1">
                    <h5 class=" mb-1">Darshini Nair</h5>
                    <p class="mb-0">darshininair@example.com</p>
                  </div>
                </div>
              </td>
              
              
              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
