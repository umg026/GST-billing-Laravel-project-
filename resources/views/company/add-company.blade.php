@extends('layout.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title font-weight-bold">Add Your Company </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                        @endif

                        @if (count($errors))
                            <div class="alert alert-danger">
                                <strong>please fix this following issues</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h4 class="header-title text-uppercase"> Basic Info</h4>
                        <hr>
                        <form class="needs-validation" method="post" action="{{ route('createCompany') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label>Who are you?</label>
                                        <select class="form-control border-bottom" required name="party_id"
                                            id="validationCustom01">
                                            <option value="">Please select</option>
                                            @foreach($parties as $party)
                                                <option value="{{ $party->id }}">{{ $party->full_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Company Name</label>
                                        <input type="text" name="company_name" class="form-control border-bottom "
                                            id="validationCustom01" placeholder="Enter company name">
                                        <div class="invalid-feedback">
                                            Please provide a Full name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Phone/Mobile Number</label>
                                        <input type="text" name="mobile_no" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter phone/mobile number">
                                        <div class="invalid-feedback">
                                            Please provide a Number.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom03">Email</label>
                                        <input name="email" type="email" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter email">
                                        <div class="invalid-feedback">
                                            Please provide a valid Address.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom03">Website</label>
                                        <input name="website" type="text" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter website">
                                        <div class="invalid-feedback">
                                            Please provide a valid Address.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">State</label>
                                        <input name="state" type="text" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter state">
                                        <div class="invalid-feedback">
                                            Please provide a Email.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Country</label>
                                        <input name="country" type="text" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter country">
                                        <div class="invalid-feedback">
                                            Please provide a Zip.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">PAN no.</label>
                                        <input name="pan_no" type="text" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter PAN number">
                                        <div class="invalid-feedback">
                                            Please provide a State.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="validationCustom02">Invoice number</label>
                                    <input name="invoice_no" type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter invoice number">
                                    <div class="invalid-feedback">
                                        Please provide a Branch Name.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button name="reset" class="btn btn-secondary" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection