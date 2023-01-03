@extends('layouts.main')
@section('content')
<div class="bg-primary pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
  <div class="col-lg-12 col-md-12 col-12 mb-5">
    <!-- Page header -->
    <div>
      <div class="d-flex justify-content-between align-items-center">
        <div class="mb-2 mb-lg-0">
          <h3 class="mb-0  text-white">Upload Document Crew</h3>
        </div>
        <div>
          <a href="#" class="btn btn-white">Create New Project</a>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('doc.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <!-- row -->
          <!-- row -->
          <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label
                form-label">Pilih Crew</label>
            <div class="col-md-8 col-12">
              <select class="form-control" name="crew_id" id="">
                @foreach ($crews as $crew )
                <option value="{{$crew->id}}">{{$crew->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="phone" class="col-sm-4 col-form-label
                form-label">File Document <span class="text-muted">(PDF)</span></label>
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
                  <option selected="">==Choose==</option>
                  <option value="visa">VISA</option>
                  <option value="passport">PASSPORT</option>
                  <option value="orangebook">ORANGEBOOK</option>
                  <option value="seamanbook">SEAMANBOOK</option>
                </select>
            </div>
          </div>
          <!-- row -->
          <div class="mb-3 row">
            <label for="addressLine" class="col-sm-4 col-form-label
                form-label">Document Number</label>
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
</div>

</div>
@endsection
