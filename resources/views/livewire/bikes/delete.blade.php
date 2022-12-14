<div>
    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Are you sure to delete it?</h5>
        </div>
        <div class="card-body">
            {{-- <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
            </div> --}}
            <table class="table table-striped">
                <tr>
                    <th>
                        Name:
                    </th>
                    <td>
                        {{ $this->bike->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Contact Number:
                    </th>
                    <td>
                        {{ $this->bike->contact_number }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Brand:
                    </th>
                    <td>
                        {{ $this->bike->brand }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Price:
                    </th>
                    <td>
                        {{ $this->bike->price }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Date Purchase:
                    </th>
                    <td>
                        {{ $this->bike->buy_date }}
                    </td>
                </tr>
            </table>
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
