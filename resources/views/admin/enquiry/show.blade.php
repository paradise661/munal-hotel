@extends('layouts.admin.master')
@php
    $title = 'Enquiries';
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
        <div class="col-md-8">
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
                                    <td>Full Name</td>
                                    <td>{{ ${$name}->full_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Branch</td>
                                    <td>{{ ${$name}->branch ?? '-' }}</td>
                                </tr>

                                <!-- Additional Info -->
                                <tr>
                                    <td>Marital Status</td>
                                    <td>{{ ${$name}->marital_status ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>{{ ${$name}->address ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        @if (${$name}->mobile)
                                            <a href="tel:{{ ${$name}->mobile }}">{{ ${$name}->mobile }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
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
                                    <td>Phone 2</td>
                                    <td>
                                        @if (${$name}->phone2)
                                            <a href="tel:{{ ${$name}->phone2 }}">{{ ${$name}->phone2 }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>


                                {{-- 
                                <tr>
                                    <td>Note</td>
                                    <td>{{ ${$name}->note ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Consultant</td>
                                    <td>{{ ${$name}->consultant ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Priority</td>
                                    <td>{{ ${$name}->priority ?? '-' }}</td>
                                </tr> --}}


                                <!-- Academic Qualification -->
                                <tr>
                                    <td>Qualification</td>
                                    <td>{{ ${$name}->qualification ?? '-' }}</td>
                                </tr>



                                <!-- Other Details -->
                                <tr>
                                    <td>Preferred Country</td>
                                    <td>{{ ${$name}->preferred_country ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Language Test</td>
                                    <td>{{ ${$name}->language_test ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Test Type</td>
                                    <td>{{ ${$name}->test_type ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Test Score</td>
                                    <td>{{ ${$name}->test_score ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Preferred Education</td>
                                    <td>{{ ${$name}->preferred_education ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Preferred Institution Name</td>
                                    <td>{{ ${$name}->preferred_institution_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Source</td>
                                    <td>
                                        @if (!empty(${$name}->source) || ${$name}->source == '{}' || ${$name}->source == '')
                                            <ul>
                                                @foreach (${$name}->source as $src)
                                                    <li class="text-capitalize">{{ $src }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Message</td>
                                    <td>{{ ${$name}->message ?? '-' }}</td>
                                </tr>


                                <!-- Status -->
                                {{-- <tr>
                                    <td>Status</td>
                                    <td>{{ ${$name}->status ?? '-' }}</td>
                                </tr> --}}


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route($name . '.update', ${$name}->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="status" class="form-label">status</label>
                            <select id="status" name="status" class="form-select">
                                <option value="1" @if (old('status', ${$name}->status) == 1) selected @endif>Checked
                                </option>
                                <option value="0" @if (old('status', ${$name}->status) == 0) selected @endif>Unchecked
                                </option>
                            </select>

                            @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 ">
                            <label for="priority" class="form-label">Priority</label>
                            <select id="priority" name="priority" class="form-select">
                                <option value="high" @if (old('priority', ${$name}->priority) == 'high') selected @endif>
                                    High
                                </option>
                                <option value="medium" @if (old('priority', ${$name}->priority) == 'medium') selected @endif>Medium
                                </option>
                                <option value="low" @if (old('priority', ${$name}->priority) == 'low') selected @endif>Low
                                </option>
                            </select>
                            @error('priority')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="note" class="form-label">Note</label>
                            <textarea class="form-control" id="note" name="note" placeholder="Note" rows="4">{{ old('note', ${$name}->note) }}</textarea>
                            @error('note')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="mb-4">
                            <label for="consultant" class="form-label">Consultant</label>
                            <textarea class="form-control" id="consultant" name="consultant" placeholder="Consultant" rows="4">{{ old('consultant', ${$name}->consultant) }}</textarea>
                            @error('consultant')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        <button type="submit" class="btn btn-sm btn-primary mt-4">
                            <i class='bx bx-refresh'></i>
                            Update
                        </button>

                        <a href="{{ route('enquiry.pdf', ['id' => $enquiry->id]) }}" type="button"
                            class="btn btn-sm btn-info mt-4">
                            <i class='bx bxs-file-pdf'></i>
                            Download PDF
                        </a>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <h5 class="card-header">Guardian Information</h5>
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
                                <!-- Guardian Info -->
                                <tr>
                                    <td>Name</td>
                                    <td>{{ ${$name}->parents_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>{{ ${$name}->g_address ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        @if (${$name}->g_mobile)
                                            <a href="tel:{{ ${$name}->g_mobile }}">{{ ${$name}->g_mobile }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>
                                        @if (${$name}->g_email)
                                            <a href="mailto:{{ ${$name}->g_email }}">{{ ${$name}->g_email }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <h5 class="card-header">Academic Qualification</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Degree</th>
                                <th>School / Collage Name</th>
                                <th>GPA Obtained</th>
                                <th>Passed Year</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- Academic Qualification -->
                            {{-- <tr>
                                    <td>Qualification</td>
                                    <td>{{ ${$name}->qualification ?? '-' }}</td>
                                </tr> --}}

                            @if (!empty(${$name}->see_school_name) || !empty(${$name}->see_gpa) || !empty(${$name}->see_passed_year))
                                <tr>
                                    <td>SEE</td>
                                    <td>{{ ${$name}->see_school_name ?? '-' }}</td>
                                    <td>{{ ${$name}->see_gpa ?? '-' }}</td>
                                    <td>{{ ${$name}->see_passed_year ?? '-' }}</td>
                                </tr>
                            @endif

                            @if (!empty(${$name}->plus_two_college_name) || !empty(${$name}->plus_two_gpa) || !empty(${$name}->plus_two_passed_year))
                                <tr>
                                    <td>+2</td>
                                    <td>{{ ${$name}->plus_two_college_name ?? '-' }}</td>
                                    <td>{{ ${$name}->plus_two_gpa ?? '-' }}</td>
                                    <td>{{ ${$name}->plus_two_passed_year ?? '-' }}</td>
                                </tr>
                            @endif

                            @if (!empty(${$name}->bachelor_college_name) || !empty(${$name}->bachelor_gpa) || !empty(${$name}->bachelor_passed_year))
                                <tr>
                                    <td>Bachelor's Degree</td>
                                    <td>{{ ${$name}->bachelor_college_name ?? '-' }}</td>
                                    <td>{{ ${$name}->bachelor_gpa ?? '-' }}</td>
                                    <td>{{ ${$name}->bachelor_passed_year ?? '-' }}</td>
                                </tr>
                            @endif

                            @if (!empty(${$name}->master_college_name) || !empty(${$name}->master_gpa) || !empty(${$name}->master_passed_year))
                                <tr>
                                    <td>Master's Degree</td>
                                    <td>{{ ${$name}->master_college_name ?? '-' }}</td>
                                    <td>{{ ${$name}->master_gpa ?? '-' }}</td>
                                    <td>{{ ${$name}->master_passed_year ?? '-' }}</td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('.delete_contactinquiry').click(function(e) {
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
