@if($editing)
<form method="POST" action="{{ route('roles.update', $role->id ?? '') }}">
    @csrf
    @method('PUT')
    <div class="row mb-3">

        <div class="col-md-12">
            <label for="name" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Name') }}</label>

            <input id="name" type="text" class="form-control custom-input @error('name') is-invalid @enderror" name="name"
                   value="{{ $role->name ?? '' }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <label for="slug" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Slug') }}</label>

            <input id="slug" type="slug" class="form-control custom-input @error('slug') is-invalid @enderror" name="slug"
                   value="{{ $role->slug ?? '' }}" required autocomplete="slug" autofocus>

            @error('slug')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <label for="description" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Description')
                }}</label>

            <input id="description" type="text" class="form-control custom-input @error('description') is-invalid @enderror"
                   name="description"
                   value="{{$role->description }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <!--        <div class="col-md-2 ">-->
        <!--            <button type="submit" class="btn btn-close-white">-->
        <!--                {{ __('Close') }}-->
        <!--            </button>-->
        <!--        </div>-->
        <div class="col-md-12">
            <div class="row justify-content-center m-4">
                <button type="submit" class="btn btn-custom-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
    </div>
</form>
@else
<form method="POST" action="{{ route('roles.store') }}">
    @csrf
    @method('POST')
    <div class="row mb-3">

        <div class="col-md-12">
            <label for="name" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Name') }}</label>

            <input id="name" type="text" class="form-control custom-input @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <label for="slug" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Slug') }}</label>

            <input id="slug" type="slug" class="form-control custom-input @error('slug') is-invalid @enderror" name="slug"
                   value="{{ old('slug') }}" required autocomplete="slug" autofocus>

            @error('slug')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <label for="description" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Description') }}</label>

            <input id="description" type="text" class="form-control custom-input @error('description') is-invalid @enderror"
                   name="description"
                   value="{{ old('description') }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-12">
            <div class="row justify-content-center m-4">
                <button type="submit" class="btn btn-custom-primary">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endif
