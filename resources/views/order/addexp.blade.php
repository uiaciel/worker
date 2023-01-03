@extends('layouts.main')
@section('content')
<div class="container-fluid">
            <div class="row mt-4">
            <div class="col-12">
                <div class="card">
            <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('ordercrewall.update') }}">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>JOB / AGE</th>
                                            <th>Age</th>
                                            <th>Action</th>
                                            <th class="bg-primary text-white">APPROVAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordercrew as $index => $ordercrx)
                                            <tr @if ($ordercrx->status == 'ACC') class="bg-primary text-white"@endif>
                                                <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                        hidden>{{ $ordercrx->crew->name }}</td>
                                                <td>{{ $ordercrx->crew->job }}</td>
                                                <td>{{ \Carbon\Carbon::parse($ordercrx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                    Old</td>
                                                <td>View
                                                </td>
                                                <td class="bg-primary">
                                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#uiaciel" role="button" aria-expanded="false" aria-controls="uiaciel">Isi Data</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </form>
                        </div>
                    
            
        </div>
            </div>
        
    </div>
    </div>
    
    
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#uiaciel" role="button" aria-expanded="false" aria-controls="uiaciel">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p> 
    
    
<div class="collapse multi-collapse" id="uiaciel">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input class="form-control" id="orderId" type="text" placeholder="Order ID" data-sb-validations="required" />
            <label for="orderId">Order ID</label>
            <div class="invalid-feedback" data-sb-feedback="orderId:required">Order ID is required.</div>
        </div>
        <div class="form-floating mb-3" hidden>
            <input class="form-control" id="crewId" type="text" placeholder="Crew ID" data-sb-validations="required" />
            <label for="crewId">Crew ID</label>
            <div class="invalid-feedback" data-sb-feedback="crewId:required">Crew ID is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="vesselname" type="text" placeholder="Vesselname" data-sb-validations="" />
            <label for="vesselname">船名
Vessel's Name</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="signon" type="date" placeholder="&gt;signon " data-sb-validations="" />
            <label for="signon">signon </label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="signoff" type="date" placeholder="&gt;signoff" data-sb-validations="" />
            <label for="signoff">signoff</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="periode" type="number" placeholder="periode" data-sb-validations="" />
            <label for="periode">periode</label>
        </div>    
        </div>
        <div class="col-md-4">
        <div class="form-floating mb-3">
            <input class="form-control" id="salary" type="text" placeholder="salary" data-sb-validations="" />
            <label for="salary">salary</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="bonus" type="text" placeholder="bonus" data-sb-validations="" />
            <label for="bonus">bonus</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="job" type="text" placeholder="job" data-sb-validations="" />
            <label for="job">job</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="shipflag" type="text" placeholder="shipflag" data-sb-validations="" />
            <label for="shipflag">shipflag</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="freezer" type="text" placeholder="freezer" data-sb-validations="" />
            <label for="freezer">freezer</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="type" type="text" placeholder="type" data-sb-validations="" />
            <label for="type">type</label>
        </div>
            
        </div>
        <div class="col-md-4">
        
        <div class="form-floating mb-3">
            <input class="form-control" id="fishingground" type="text" placeholder="fishingground" data-sb-validations="" />
            <label for="fishingground">fishingground</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="tonnage" type="text" placeholder="tonnage" data-sb-validations="" />
            <label for="tonnage">tonnage</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="fishingmaster" type="text" placeholder="fishingmaster" data-sb-validations="" />
            <label for="fishingmaster">fishingmaster</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="coldarea" type="text" placeholder="coldarea" data-sb-validations="" />
            <label for="coldarea">coldarea</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="disembark" type="text" placeholder="disembark" data-sb-validations="" />
            <label for="disembark">disembark</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="grade" type="text" placeholder="grade" data-sb-validations="" />
            <label for="grade">grade</label>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        
        
        
          
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
            
        </div>
    </div>
</div>    
</div>
    
    <div class="container px-5 my-5">
    
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection