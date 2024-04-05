@if($editing)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <form method="POST" action="{{ route('roles.store') }}">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Role</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name')
                                }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ $role->name ?? '' }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="slug" class="col-md-4 col-form-label text-md-start">{{ __('Slug')
                                }}</label>

                            <input id="slug" type="slug" class="form-control @error('slug') is-invalid @enderror"
                                   name="slug"
                                   value="{{ $role->slug ?? '' }}" required autocomplete="slug" autofocus>

                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="description" class="col-md-4 col-form-label text-md-start">{{ __('Description')
                                }}</label>

                            <input id="slug" type="description" class="form-control @error('description') is-invalid @enderror"
                                   name="description"
                                   value="{{ $role->description ?? '' }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@else
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <form method="POST" action="{{ route('roles.update', $role->id ?? '') }}">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Role</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('POST')
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name')
                                }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="slug" class="col-md-4 col-form-label text-md-start">{{ __('Slug')
                                }}</label>

                            <input id="slug" type="slug" class="form-control @error('slug') is-invalid @enderror"
                                   name="slug"
                                   value="{{ old('slug') }}" required autocomplete="slug" autofocus>

                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-8">
                            <label for="description" class="col-md-4 col-form-label text-md-start">{{ __('Description')
                                }}</label>

                            <input id="description" type="description"
                                   class="form-control @error('description') is-invalid @enderror" name="description"
                                   value="{{ old('description') }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif



