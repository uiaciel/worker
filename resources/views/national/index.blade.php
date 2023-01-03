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
            <h3 class="mb-0  text-white">Nationality</h3>
          </div>
          <div>
           
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="row mt-4">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h5 class="text-white">Add Nationality</h5>
                </div>
                <div class="card-body">
                  
                    <form action="{{route('national.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nationality</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                              </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="text-white">Nationality List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">Action</th>
      </tr>
                        </thead>
                        <tbody>
                            @foreach($nationals as $index => $nat)
                            <tr>
                              <th scope="row">{{$index+1}}</th>
                              <th scope="row">{{$nat->name}}</th>
                              <th scope="row">
                                <div class="input-group mb-3">
                                  <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#com{{$nat->id}}">Edit</button>
                                  <form onsubmit="return confirm('Are you sure?');"
                                action="{{ route('national.destroy', $nat->id) }}" method="POST">
                                
                                @csrf
                                @method('DELETE')
                                  <button class="btn btn-sm btn-outline-danger" type="submit" id="button-addon2">Delete</button>
                                </form>
                                </div>
                                  
                              </tr>
                              
                              <!-- Modal -->
  <div class="modal fade" id="com{{$nat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{route('national.update', $nat->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
         
          <div class="mb-3">
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Nationality</label>
                <input type="text" name="name" value="{{$nat->name}}" class="form-control">
              </div>
              
              
        </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection