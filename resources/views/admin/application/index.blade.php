@extends('layouts.admin.master')
@php
    $title = 'Applications';
    $name = 'application';
@endphp
@section('content')
    {{-- {{ dd($countrylocationes) }} --}}

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">{{ $name }}</h5>
            <small class="text-muted float-end">
                {{-- <a href="{{ route($name . '.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2"><i
                        class="ri-add-line ri-lg"></i>
                    Create</a> --}}
            </small>
        </div>
    </div>

    <div class="card">
        {{-- {{ dd($applications) }} --}}

        @if (!${$name . 's'}->isEmpty())
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Select Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach (${$name . 's'} as $key => ${$name})
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ ${$name}->student->full_name }}</td>

                                    <td>{{ ${$name}->student->phone2 }}</td>

                                    <td>{{ ${$name}->student->email }}</td>

                                    <td>
                                        @if (${$name}->status == 'preparation')
                                            <span class="badge bg-label-warning me-1">Preparation</span>
                                        @elseif (${$name}->status == 'documentation')
                                            <span class="badge bg-label-warning me-1">Documentation</span>
                                        @elseif (${$name}->status == 'apply')
                                            <span class="badge bg-label-success me-1">Apply</span>
                                        @elseif (${$name}->status == 'processing')
                                            <span class="badge bg-label-warning me-1">Processing</span>
                                        @elseif (${$name}->status == 'withdraw')
                                            <span class="badge bg-label-warning me-1">Withdraw</span>
                                        @elseif (${$name}->status == 'classenroll')
                                            <span class="badge bg-label-warning me-1">Class Enrollment</span>
                                        @endif
                                    </td>
                                    <td class="">
                                        <a href="{{ route('enquiry.show', ${$name}->id) }}" type="button"
                                            class="btn btn-sm btn-icon btn-primary">
                                            <i class="tf-icons bx bx-show text-white"></i>
                                        </a>
                                        {{-- <form action="{{ route($name . '.destroy', ${$name}->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-icon btn-danger delete_{{ $name }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Withdraw Daily Visit">
                                                <i class="tf-icons bx bx-undo text-white"></i>
                                            </button>
                                        </form> --}}
                                    </td>
                                    <td>
                                        <form action="{{ route('application.update', ${$name}->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="form-select form-select-sm"
                                                onchange="this.form.submit()">
                                                <option value="" disabled>
                                                    Choose Status
                                                </option>
                                                <option value="processing"
                                                    {{ ${$name}->status == 'processing' ? 'selected' : '' }}>
                                                    Processing
                                                </option>
                                                <option value="withdraw"
                                                    {{ ${$name}->status == 'withdraw' ? 'selected' : '' }}>
                                                    Withdraw
                                                </option>
                                                <option value="classenroll"
                                                    {{ ${$name}->status == 'classenroll' ? 'selected' : '' }}>
                                                    Class Enrollment
                                                </option>
                                                <option value="preparation"
                                                    {{ ${$name}->status == 'preparation' ? 'selected' : '' }}>Preparation
                                                </option>
                                                <option value="documentation"
                                                    {{ ${$name}->status == 'documentation' ? 'selected' : '' }}>
                                                    Documentation
                                                </option>
                                                <option value="apply" {{ ${$name}->status == 'apply' ? 'selected' : '' }}>
                                                    Apply
                                                </option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="card-body">
                <h6>No Data Found!</h6>
            </div>
        @endif
    </div>
@endsection
