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
                <div class="card-header">Participants List</div>
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
                            <a class="nav-link" href="{{route('participants.create')}}">Add
                                Participant
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
                            <!--                            <th>QR Code</th>-->
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($participants as $participant)
                        <tr>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->email }}</td>
                            <!--                            <td><img src="{{ asset($participant->qrcode) }}" alt="QR Code" ></td>-->
                            <td>
                                <div class="row gap-md-1">
                                    <div class="col-md-3">
                                        <form method="GET"
                                              action="{{route('participants.show', $participant->id)}}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-success btn-sm ">View</button>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <form method="GET"
                                              action="{{route('participants.edit', $participant->id)}}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-primary btn-sm ">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <form method="POST"
                                              action="{{route('participants.destroy', $participant->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <!--                        {{$participants->links()}}-->
                        </tfoot>
                    </table>
                    {{$participants->links()}}
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
    });
</script>
@endsection
