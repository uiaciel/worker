<div id="contact" class="tab-pane">
    <div class="card-body">

        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>ID Type</th>
                            <th>ID No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>National ID</td>
                            <td></td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <a href="https://image.shutterstock.com/image-vector/ktp-indonesia-id-card-260nw-1628461459.jpg"
                                            class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                        <form onclick="return confirm('Are you sure?')" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                id="button-addon2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Family ID</td>
                            <td></td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <a href="https://i.pinimg.com/736x/17/75/dd/1775dd83c315f498397774c634f14267.jpg"
                                            class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                        <form onclick="return confirm('Are you sure?')" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                id="button-addon2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">船員連絡先 (Crew Contacts)</h3>
                        <form action="{{ route('contact.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>

                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">ID伍
                                    (PDF)<br /> ID File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">ID方
                                    <br /> ID Type</label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==Select==</option>
                                        <option value='National ID'>National ID</option>
                                        <option value='National ID'>Family ID</option>
                                    </select>
                                </div>
                            </div>
                            <!-- row -->

                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                          form-label">国民ID番号
                                    <br />National ID No.

                                </label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" id="addressLine" required="">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                          col-form-label form-label">家族ID番号
                                    <br />Family ID No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" id="addressLineTwo" required="">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                          col-form-label form-label">携帯番号<br />Mobile
                                    No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="number" class="form-control" id="addressLineTwo" required="">
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                          col-form-label form-label">メール<br />Email</label>
                                <div class="col-md-8 col-12">
                                    <input type="number" class="form-control" id="addressLineTwo" required="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>



        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="mb-4">1緊急連絡先 (Emergency Contact 1):</h4>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">関係<br>Relationship</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="">
                            <option>--SELECT--</option>
                            <option>Wife</option>
                            <option>Son</option>
                            <option>Daughter</option>
                            <option>Father</option>
                            <option>Mother</option>
                            <option>Brother</option>
                            <option>Sister</option>
                            <option>Uncle</option>
                            <option>Auntie</option>
                            <option>Nephew</option>
                            <option>Niece</option>
                            <option>Grandfather</option>
                            <option>Grandmother</option>
                            <option>Grandson</option>
                            <option>Granddaughter</option>
                            <option>Granduncle</option>
                            <option>Grandauntie</option>
                            <option>Grandnephew</option>
                            <option>Grandniece</option>
                            <option>Father in Law</option>
                            <option>Mother in Law</option>
                            <option>Grandfather in Law</option>
                            <option>Grandmother in Law</option>
                            <option>Friend</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                        No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="mb-4">2緊急連絡先 (Emergency Contact 2):</h4>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">関係<br>Relationship</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="">
                            <option>--SELECT--</option>
                            <option>Wife</option>
                            <option>Son</option>
                            <option>Daughter</option>
                            <option>Father</option>
                            <option>Mother</option>
                            <option>Brother</option>
                            <option>Sister</option>
                            <option>Uncle</option>
                            <option>Auntie</option>
                            <option>Nephew</option>
                            <option>Niece</option>
                            <option>Grandfather</option>
                            <option>Grandmother</option>
                            <option>Grandson</option>
                            <option>Granddaughter</option>
                            <option>Granduncle</option>
                            <option>Grandauntie</option>
                            <option>Grandnephew</option>
                            <option>Grandniece</option>
                            <option>Father in Law</option>
                            <option>Mother in Law</option>
                            <option>Grandfather in Law</option>
                            <option>Grandmother in Law</option>
                            <option>Friend</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                        No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2">

            <button class="btn btn-primary" type="submit">Upload</button>
        </div>

        </form>
    </div>
</div>
