@extends('layouts.admin.master')
@php
    $title = 'Bookings';
    $name = 'enquiry';
@endphp

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Show Student Enquiry</h5>
            <small class="text-muted float-end">
                <a href="{{ route($name . '.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    <i class='ri-arrow-left-line ri-lg'></i>
                    Back
                </a>
            </small>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">General Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <!-- Basic Info -->
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ ${$name}->first_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>First Name</td>
                                    <td>{{ ${$name}->last_name ?? '-' }}</td>
                                </tr>





                                <tr>
                                    <td>Email</td>
                                    <td>
                                        @if (${$name}->email)
                                            <a href="mailto:{{ ${$name}->email }}">{{ ${$name}->email }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        @if (${$name}->phone)
                                            <a href="tel:{{ ${$name}->phone }}">{{ ${$name}->phone }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>CheckIn Date</td>
                                    <td>{{ ${$name}->checkin_date ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>CheckOut Date</td>
                                    <td>{{ ${$name}->checkout_date ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Adults</td>
                                    <td>{{ ${$name}->adults ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Children</td>
                                    <td>{{ ${$name}->children ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Special Request</td>
                                    <td>{{ ${$name}->special_request ?? '-' }}</td>
                                </tr>







                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection

@section('js')
    <script>
        $('.delete_contactinquiry').click(function (e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            });

        });
    </script>
@endsection