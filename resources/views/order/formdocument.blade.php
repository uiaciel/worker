<form action="{{ route('orderdocument.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input name="order_id" value="{{ $order->id }}" hidden>

    <div class="col-md-6">
        <div class="mb-3 row">
            @if ($ticket->status == 'client')
            @endif
            <label for="staticEmail" class="col-sm-4 col-form-label">Document Type</label>
            <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">

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
        <div class="md-3 row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8 text-right">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>


    </div>
</form>
