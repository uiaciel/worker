<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1051;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
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
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">JOB</th>
                                    <th scope="col">AGE</th>
                                    <th scope="col">EXP</th>
                                    <th scope="col">NUMBER</th>
                                    <th scope="col">REMARK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">1</td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="job[]" id="">
                                                <option>--SELECT--</option>
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}" data="{{ $job->id }}">
                                                        {{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="age[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="18-30">18-30</option>
                                                <option value="18-30">31-40</option>
                                                <option value="40+">40+</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="exp[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="number[]" id="">
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
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="remark[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="NEW">NEW</option>
                                                <option value="FIXED">FIXED</option>
                                                <option value="REJOIN">REJOIN</option>
                                                <option value="RECOMMEND">RECOMMEND</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">2</td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="job[]" id="">
                                                <option>--SELECT--</option>
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}" data="{{ $job->id }}">
                                                        {{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="age[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="18-30">18-30</option>
                                                <option value="18-30">31-40</option>
                                                <option value="40+">40+</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="exp[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="number[]"
                                                id="">
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
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="remark[]"
                                                id="">
                                                <option>--SELECT--</option>
                                                <option value="NEW">NEW</option>
                                                <option value="FIXED">FIXED</option>
                                                <option value="REJOIN">REJOIN</option>
                                                <option value="RECOMMEND">RECOMMEND</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">3</td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="job[]" id="">
                                                <option>--SELECT--</option>
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}" data="{{ $job->id }}">
                                                        {{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="age[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="18-30">18-30</option>
                                                <option value="18-30">31-40</option>
                                                <option value="40+">40+</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="exp[]" id="">
                                                <option>--SELECT--</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="number[]"
                                                id="">
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
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg" name="remark[]"
                                                id="">
                                                <option>--SELECT--</option>
                                                <option value="NEW">NEW</option>
                                                <option value="FIXED">FIXED</option>
                                                <option value="REJOIN">REJOIN</option>
                                                <option value="RECOMMEND">RECOMMEND</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
