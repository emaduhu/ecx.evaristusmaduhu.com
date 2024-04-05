@if($editing)
<form method="POST" action="{{ route('participants.update', $participant->id ?? '') }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="row mb-3">

        <div class="col-md-8">
            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Full name') }}</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ $participant->name ?? '' }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-8">
            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ $participant->email ?? '' }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-8">
            <label for="participant_file" class="col-md-4 col-form-label text-md-start">{{ __('Participant File') }}</label>

            <input id="participant_file" type="file" class="form-control @error('participant_file') is-invalid @enderror" name="participant_file"
                   value="{{ old('participant_file') }}" required autocomplete="participant_file" autofocus>

            @error('participant_file')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 ">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>
@else
<form method="POST" action="{{ route('participants.store') }}" enctype="multipart/form-data" >
    @csrf
    @method('POST')
    <div class="row mb-3">

        <div class="col-md-8">
            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Full name') }}</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
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
            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-8">
            <label for="participant_file" class="col-md-4 col-form-label text-md-start">{{ __('Participant File') }}</label>

            <input id="participant_file" type="file" class="form-control @error('participant_file') is-invalid @enderror" name="participant_file"
                   value="{{ old('participant_file') }}" required autocomplete="participant_file" autofocus>

            @error('participant_file')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 ">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>
@endif
