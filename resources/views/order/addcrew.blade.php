<div class="modal fade" id="com{{ $reqjob->id }}" style="z-index: 1051;" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalLabel">SELECT CREWS
                    {{ $reqjob->job->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ordercrew.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input value="{{ $order->id }}" name="order_id" hidden>
                        <input value="{{ $reqjob->id }}" name="orderjob_id" hidden>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">JOB</label>
                            <input class="form-control" value="{{ $reqjob->job->id }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">AGE</label>
                            <select class="form-control" id="">
                                <option value="{{ $reqjob->age }}">
                                    {{ $reqjob->age }}</option>
                                <option value="18-30">18-30</option>
                                <option value="18-30">31-40</option>
                                <option value="40+">40+</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">EXP</label>
                            <select class="form-control"id="">
                                <option value="{{ $reqjob->exp }}">
                                    {{ $reqjob->exp }}</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NUMBER</label>
                            <select class="form-control" id="">
                                <option value="{{ $reqjob->number }}">
                                    {{ $reqjob->number }}</option>
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
                            <label for="remark" class="form-label">REMARKS</label>
                            <select class="form-control" name="remark">
                                <option value="{{ $reqjob->remark }}">
                                    {{ $reqjob->remark }}</option>
                                <option value="NEW">NEW</option>
                                <option value="FIXED">FIXED</option>
                                <option value="REJOIN">REJOIN</option>
                                <option value="RECOMMEND">RECOMMEND</option>
                            </select>
                        </div>
                    </div>
                    @if ($reqjob->remark == 'NEW')
                        @can('admin')
                            <div class="mb-3" id="formselect">
                                <label for="remark" class="form-label">SELECT
                                    CREWS</label>
                                <select class="form-control select2" multiple name="crew_id[]">
                                    @foreach ($crews->where('job_id', $reqjob->job->id) as $op)
                                        <option value="{{ $op->id }}">
                                            {{ $op->subid }} -
                                            {{ $op->name }} - {{ $op->birth }}
                                            - {{ $op->job->name }} - {{ $op->passport->no ?? 'PASSPORT NO' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
                    @else
                        <div class="mb-3" id="formselect">
                            <label for="remark" class="form-label">SELECT
                                CREWS</label>
                            <select class="form-control select2" multiple name="crew_id[]">
                                @foreach ($crews->where('job_id', $reqjob->job->id) as $op)
                                    <option value="{{ $op->id }}">
                                        {{ $op->subid }} -
                                        {{ $op->name }} - {{ $op->birth }}
                                        - {{ $op->job->name }} - {{ $op->passport->no ?? 'PASSPORT NO' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
