@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @include('shared.left-sidebar')
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Participant</div>
                <div class="container">
                    <div class="row justify-content-center m-2">
                        <div class="col-sm-12">
                            <!-- First column content -->
                            @include('shared.alert')
                        </div>
                    </div>
                    <div class="row justify-content-end m-2">
                        <div class="col-sm-3">
                            <!-- Second column content -->
                            <a class="nav-link" href="{{route('participants.edit', $participant->id)}}">Edit Participant
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table" id="participants-table" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Uploaded file location</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->qrcode }}</td>
                            <!--  <td><img src="{{ asset($participant->qrcode) }}" alt="Uploaded File" ></td>-->
                        </tr>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomSection')
<script>
    $(document).ready(function () {
        $('#participants-table').DataTable();

        alert("Home maduhu ***");
    });
</script>
@endsection
