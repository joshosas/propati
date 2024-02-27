<x-layout>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/users">
                            @csrf

                            <div class="mb-3">
                                <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <button class="btn btn-outline-secondary" type="button" id="password-toggle"><i class="bi bi-eye"></i></button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    <button class="btn btn-outline-secondary" type="button" id="confirm-password-toggle"><i class="bi bi-eye"></i></button>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
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

        document.getElementById('confirm-password-toggle').addEventListener('click', function() {
            var confirmPasswordField = document.getElementById('password_confirmation');
            var type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.setAttribute('type', type);
        });

        // Remove outline on input focus
        var inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.outline = 'none';
            });
        });
    </script>
    @endpush



</x-layout>