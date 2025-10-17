@extends('layouts.app')

@section('title', 'Register - MRRPS')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-6 fw-bold text-dark-navy mb-2">
                    <i class="fas fa-graduation-cap text-primary me-2"></i>MRRPS
                </h1>
                <p class="text-gray-medium">Create your account to get started</p>
            </div>

            <!-- Registration Card -->
            <div class="card border-0 shadow-lg registration-card">
                <div class="card-header bg-gradient-primary text-white py-4">
                    <h4 class="mb-0 text-center fw-bold">
                        <i class="fas fa-user-plus me-2"></i>Join MRRPS
                    </h4>
                </div>

                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="{{ route('register') }}" id="registrationForm" novalidate>
                        @csrf

                        <!-- User Type Selection -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark-navy mb-3">I am a:</label>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <div class="form-check-card">
                                        <input class="form-check-input" type="radio" name="user_type" id="student" value="student" checked>
                                        <label class="form-check-label card-option" for="student">
                                            <div class="option-content">
                                                <i class="fas fa-user-graduate fa-2x mb-2 text-primary"></i>
                                                <span class="fw-semibold">Student</span>
                                                <small class="text-muted d-block">Access marks and results</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check-card">
                                        <input class="form-check-input" type="radio" name="user_type" id="lecturer" value="lecturer">
                                        <label class="form-check-label card-option" for="lecturer">
                                            <div class="option-content">
                                                <i class="fas fa-chalkboard-teacher fa-2x mb-2 text-accent"></i>
                                                <span class="fw-semibold">Lecturer</span>
                                                <small class="text-muted d-block">Manage student marks</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @error('user_type')
                                    <div class="text-danger small mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Full Name">
                                    <label for="name" class="form-label">Full Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Email Address">
                                    <label for="email" class="form-label">Email Address</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Password Fields -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="form-floating">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                           name="password" required autocomplete="new-password"
                                           placeholder="Password">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="password-strength mt-2">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" id="passwordStrength" role="progressbar"></div>
                                        </div>
                                        <small class="text-muted" id="passwordFeedback"></small>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="password-confirm" type="password" class="form-control" 
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Confirm Password">
                                    <label for="password-confirm" class="form-label">Confirm Password</label>
                                    <div class="form-text" id="passwordMatch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Password Requirements -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert alert-light border">
                                    <h6 class="fw-semibold mb-2">Password Requirements:</h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-1"><i class="fas fa-check text-success me-2 requirement" data-requirement="length"></i>At least 8 characters</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2 requirement" data-requirement="uppercase"></i>One uppercase letter</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2 requirement" data-requirement="lowercase"></i>One lowercase letter</li>
                                        <li class="mb-1"><i class="fas fa-check text-success me-2 requirement" data-requirement="number"></i>One number</li>
                                        <li class="mb-0"><i class="fas fa-check text-success me-2 requirement" data-requirement="special"></i>One special character</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-primary fw-semibold">Terms of Service</a> and <a href="#" class="text-primary fw-semibold">Privacy Policy</a>
                                    </label>
                                    @error('terms')
                                        <div class="invalid-feedback d-block">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-semibold" id="submitBtn">
                                    <i class="fas fa-user-plus me-2"></i>
                                    <span class="btn-text">Create Account</span>
                                    <div class="spinner-border spinner-border-sm ms-2 d-none" role="status" id="spinner">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <!-- Login Link -->
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="mb-0 text-gray-medium">
                                    Already have an account? 
                                    <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Security Notice -->
            <div class="text-center mt-4">
                <small class="text-muted">
                    <i class="fas fa-shield-alt me-1"></i>
                    Your information is secure and protected
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.registration-card {
    border-radius: 16px;
    overflow: hidden;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-dark) 100%);
}

.form-check-card {
    flex: 1;
    max-width: 200px;
}

.card-option {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem 1rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.card-option:hover {
    border-color: var(--bs-primary-light);
    transform: translateY(-2px);
}

.form-check-input:checked + .card-option {
    border-color: var(--bs-primary);
    background-color: rgba(37, 99, 235, 0.05);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
}

.option-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-floating {
    position: relative;
}

.form-floating > .form-control {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
}

.form-floating > label {
    padding: 1rem 0.75rem;
}

.password-strength .progress {
    background-color: #e2e8f0;
}

.requirement.unmet {
    color: #6c757d;
}

.requirement.unmet .fa-check {
    display: none;
}

.requirement.unmet::before {
    content: "○";
    margin-right: 0.5rem;
    color: #6c757d;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password-confirm');
    const strengthBar = document.getElementById('passwordStrength');
    const passwordFeedback = document.getElementById('passwordFeedback');
    const passwordMatch = document.getElementById('passwordMatch');
    const requirements = document.querySelectorAll('.requirement');
    const form = document.getElementById('registrationForm');
    const submitBtn = document.getElementById('submitBtn');
    const spinner = document.getElementById('spinner');

    // Password strength checker
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        checkPasswordStrength(password);
        checkPasswordMatch();
    });

    // Confirm password match
    confirmInput.addEventListener('input', checkPasswordMatch);

    // Form submission
    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitBtn.querySelector('.btn-text').textContent = 'Creating Account...';
        spinner.classList.remove('d-none');
    });

    function checkPasswordStrength(password) {
        let strength = 0;
        const feedback = [];

        // Check requirements
        checkRequirement('length', password.length >= 8);
        checkRequirement('uppercase', /[A-Z]/.test(password));
        checkRequirement('lowercase', /[a-z]/.test(password));
        checkRequirement('number', /[0-9]/.test(password));
        checkRequirement('special', /[!@#$%^&*(),.?":{}|<>]/.test(password));

        // Calculate strength
        if (password.length >= 8) strength += 20;
        if (/[A-Z]/.test(password)) strength += 20;
        if (/[a-z]/.test(password)) strength += 20;
        if (/[0-9]/.test(password)) strength += 20;
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength += 20;

        // Update progress bar
        strengthBar.style.width = strength + '%';
        
        // Update colors and feedback
        if (strength < 40) {
            strengthBar.className = 'progress-bar bg-danger';
            passwordFeedback.textContent = 'Weak password';
            passwordFeedback.className = 'text-danger';
        } else if (strength < 80) {
            strengthBar.className = 'progress-bar bg-warning';
            passwordFeedback.textContent = 'Moderate password';
            passwordFeedback.className = 'text-warning';
        } else {
            strengthBar.className = 'progress-bar bg-success';
            passwordFeedback.textContent = 'Strong password';
            passwordFeedback.className = 'text-success';
        }
    }

    function checkRequirement(type, met) {
        const element = document.querySelector(`[data-requirement="${type}"]`);
        if (met) {
            element.classList.remove('unmet');
            element.classList.add('text-success');
        } else {
            element.classList.add('unmet');
            element.classList.remove('text-success');
        }
    }

    function checkPasswordMatch() {
        const password = passwordInput.value;
        const confirm = confirmInput.value;

        if (confirm === '') {
            passwordMatch.textContent = '';
            passwordMatch.className = 'form-text';
        } else if (password === confirm) {
            passwordMatch.textContent = '✓ Passwords match';
            passwordMatch.className = 'form-text text-success';
        } else {
            passwordMatch.textContent = '✗ Passwords do not match';
            passwordMatch.className = 'form-text text-danger';
        }
    }

    // Initialize
    checkPasswordStrength(passwordInput.value);
});
</script>
@endpush