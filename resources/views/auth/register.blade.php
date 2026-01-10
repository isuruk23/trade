@extends('layouts.web')

@section('content')
<div class="auth-container">
        <!-- Left Side - Visual -->
        <div class="auth-visual">
            <h2>Trade Smarter, Securely</h2>
            <p>Access the world's most advanced trading platform with institutional-grade security and lightning-fast execution.</p>
            
            <ul class="features-list">
                <li><i class="fas fa-shield-alt"></i> Bank-level encryption & security</li>
                <li><i class="fas fa-bolt"></i> Sub-10ms trade execution</li>
                <li><i class="fas fa-globe"></i> Trade 24/7 across global markets</li>
                <li><i class="fas fa-chart-line"></i> Advanced charting & analytics</li>
            </ul>
            
            <div class="chart-visual">
                <div class="chart-line"></div>
            </div>
            
            <div class="security-indicators">
                <div class="security-item">
                    <div class="security-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>Encrypted & Secure</div>
                </div>
                <div class="security-item">
                    <div class="security-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>Trusted by 250K+ Traders</div>
                </div>
                <div class="security-item">
                    <div class="security-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div>Fast Account Setup</div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Authentication Forms -->
        <div class="auth-forms">
            <div class="logo">
                <i class="fas fa-chart-line"></i> Zimvex
            </div>
            
            <!-- Tab Switch -->
            <div class="auth-tabs">                
                <div class="auth-tab active" data-tab="register">Register</div>
                <div class="tab-indicator" style="transform: translateX(0);"></div>
            </div>
            
           
            
            <!-- Register Form -->
             {{-- Success Message --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Error Messages --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            <form class="auth-form active" id="registerForm" method="POST" action="{{ route('register') }}" >
                 @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Trader">
                   @error('name')
                        <div class="error-text" id="registerNameError">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="trading@example.com">
                    @error('email')
                        <div class="error-text">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Create a strong password">
                        @error('password')
                            <div class="error-text">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        <button type="button" class="toggle-password" data-target="password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="password-strength">
                        <div class="strength-bar" id="passwordStrengthBar"></div>
                    </div>
                  
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password-confirm">Confirm Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm your password">
                        <button type="button" class="toggle-password" data-target="password-confirm">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="error-text" id="registerConfirmPasswordError">Passwords do not match</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="registerCountry">Country</label>
                    <select id="country" name="country" class="form-control">
                        <option value="" disabled selected>Select your country</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <option value="au">Australia</option>
                        <option value="sg">Singapore</option>
                        <option value="de">Germany</option>
                        <option value="fr">France</option>
                        <option value="jp">Japan</option>
                        <option value="other">Other</option>
                    </select>
                     @error('country')
                            <div class="error-text">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    
                </div>
                
                <div class="form-group terms-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" name="terms">
                        <label class="checkbox-label" for="terms">
                            I accept the <a href="#" class="terms-link">Terms of Service</a> and <a href="#" class="terms-link">Privacy Policy</a>
                        </label>
                        @error('terms')
                            <div class="error-text">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    
                </div>
                
                <div class="security-notice">
                    <i class="fas fa-shield-alt"></i> Your account will require KYC verification to enable full trading features.
                </div>
                
                <button type="submit" class="btn btn-primary" id="registerBtn">
                    <i class="fas fa-user-plus" style="margin-right: 8px;"></i> Create Account
                </button>
                
                <div class="toggle-prompt">
                    Already have an account? <a class="toggle-link" data-target="login">Sign in securely.</a>
                </div>
            </form>
            
            <!-- Messages -->
            <div class="auth-message error-message" id="errorMessage">
                <i class="fas fa-exclamation-circle"></i> <span id="errorText"></span>
            </div>
            
            <div class="auth-message success-message" id="successMessage">
                <i class="fas fa-check-circle"></i> <span id="successText"></span>
            </div>
        </div>
    </div>

@endsection
@section('script')
   <script>
    // Toggle password visibility
    const togglePasswordBtns = document.querySelectorAll('.toggle-password');
    
            togglePasswordBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const passwordInput = document.getElementById(targetId);
                    const icon = this.querySelector('i');
                    
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        passwordInput.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
</script>     
@endsection