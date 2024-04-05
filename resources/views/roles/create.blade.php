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
                @if($editing)
                <div class="card-header">Edit Role</div>
                @else
                <div class="card-header">Create Role</div>
                @endif
                <div class="container">
                    <div class="row justify-content-center m-2">
                        <div class="col-sm-12">
                            <!-- First column content -->
                            @include('shared.alert')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   @include('roles.role-form')
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

        alert("Home maduhu ***");
    });
</script>
@endsection
