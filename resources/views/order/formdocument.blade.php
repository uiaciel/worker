<!-- Modal -->
<div class="modal fade" id="formdocument" tabindex="-1" aria-labelledby="formdocument" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formdocument">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">


                    <form action="{{ route('orderdocument.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input name="order_id" value="{{ $order->id }}" hidden>
                        <label for="staticEmail" class="col-sm-4 col-form-label">Document Type</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="type" aria-label="Default select example">

                                <option value="Guarantee Letter">Guarantee Letter</option>
                                <option value="Air Tickets">Air Ticket(s)</option>

                            </select>
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">File Pdf</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="file" id="formFileMultiple" name="file">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
            <div class="modal-footer">


            </div>


        </div>
    </div>
</div>
