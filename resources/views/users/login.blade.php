@include('partials._nav')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="/users/authenticate">
                        @csrf

                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>


                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <!-- <button class="btn btn-outline-secondary" type="button" id="password-toggle"><i class="bi bi-eye"></i></button> -->
                            </div>
                        </div>


                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        <div class="mt-3">
                            <p>
                                Don't have an account?
                                <a href="/register" class="text-success"><span class="fw-bold">Sign Up</span></a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    // Toggle password visibility
    document.getElementById('password-toggle').addEventListener('click', function() {
        var passwordField = document.getElementById('password');
        var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
    });
</script>
@endpush


@include('partials._footer')