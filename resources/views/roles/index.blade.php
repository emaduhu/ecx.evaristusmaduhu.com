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
                <div class="card-header">Roles List</div>
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
<!--                            <a class="nav-link" href="{{route('roles.create')}}">Add-->
<!--                                Role-->
<!--                            </a>-->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Add Role
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <!-- Modal -->
                    @include('roles.role-form')

                    <table class="table" id="roles-table" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->slug }}</td>
                            <td>{{ $role->description }}</td>
                           <td>
                                <div class="row gap-md-1">
                                    <div class="col-md-3">
                                        <form method="GET"
                                              action="{{route('roles.show', $role->id)}}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-success btn-sm ">View</button>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <form method="GET"
                                              action="{{route('roles.edit', $role->id)}}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-primary btn-sm ">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <form method="POST"
                                              action="{{route('roles.destroy', $role->id)}}">
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
                        <!--                        {{$roles->links()}}-->
                        </tfoot>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomSection')
<script>
    $(document).ready(function () {
        $('#roles-table').DataTable();
    });
</script>
@endsection
