<div class="modal fade" id="createOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="create-pharmacy-form" enctype="multipart/form-data" action="{{ route('orders.store') }}">
                @csrf
                <div class="modal-body row gy-2 gx-3 align-items-center">
                    <div class="col-md-12 mb-2">
                        <label for="orderUser" class="form-label">Assigned User</label>
                        <select name="user_id" id="email" class="form-control">
                            <option value="" disabled selected hidden></option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">
                                    {{ $user->name }}{{ '/' }}{{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- medicine --}}
                    <div class="form-group">
                        <label>Medicine</label>
                        <select name="medicine_id[]" id="medicine-select" class="select2 " multiple="multiple"
                            data-placeholder="Select a State" data-dropdown-css-class="select2-purple"
                            style="width: 100%;">
                            <option></option>
                            @foreach ($medicines as $medicine)
                                <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                            @endforeach
                        </select>
                        <!-- /.form-group -->
                    </div>
                    <div class="form-group">
                        <label>Qunatity</label>
                        <div class="input-group" id="input-container">
                            <!-- input fields will be dynamically added/removed here -->
                        </div>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="createPharmacyName" class="form-label">Pharmacy Name</label>
                        <select name="pharmacy_id" id="pharmacySelect" class="form-control">
                            <option value="" disabled selected hidden></option>
                            @foreach ($pharmacies as $pharmacy)
                                <option value="{{ $pharmacy->id }}">{{ $pharmacy->pharmacy_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="createDoctorName" class="form-label">Doctor Name</label>
                        <select name="doctor_id" id="doctorSelect" class="form-control">
                            <option value="" disabled selected hidden></option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->User->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="createOrderCreator" class="form-label">Order Creator</label>
                        <select name="creator_type" id="createPharmacyName" class="form-control">
                            <option value="" disabled selected hidden></option>
                            <option value="client">client</option>
                            <option value="doctor">doctor</option>
                            <option value="pharmacy">pharmacy</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="createStatus" class="form-label">status</label>
                        <select name="status" id="createPharmacyName" class="form-control">
                            <option value="" disabled selected hidden></option>
                            <option value="New">New</option>
                            <option value="Processing">Processing</option>
                            <option value="WaitingForUserConfirmation">WaitingForUserConfirmation</option>
                            <option value="Canceled">Canceled</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 ml-3 ">
                        <input name="is_insured" class="form-check-input" type="checkbox" id="banned" value="1">
                        <label for="createPharmacyName" class="form-check-label">Is insured?</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success text-white">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

  
</script>
