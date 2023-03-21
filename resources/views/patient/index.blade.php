@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dt/jquery.dataTables.min.css') }}"
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row mt-2 mx-2 py-1 float-right">
                <a href="{{ route('patient.create') }}" class="btn btn-primary">Add Patient</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card border-primary">
                <div class="card-header bg-transparent border-primary">{{ __('Patients List') }}
                    
                </div>

                <div class="card-body">
                    
                    <div id="tblAria" class="col-md-12">
                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Registered date</th>
                                    <th>Ref. No</th>
                                    <th></th>
                                </tr>
                            </thead>
                   
                        </table>
                    </div>
                    
                </div>
            </div>
            <p></p>
            @if (session()->has('msgSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great! </strong> {{ session()->get('msgSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
            @endif
            @if (session()->has('dltMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>OK! </strong> {{ session()->get('msgSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" defer ></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        // tooltip initialising script
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endpush