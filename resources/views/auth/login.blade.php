@extends('layouts.web')

@section('content')
<div class="auth-container">
        <!-- Left Side - Visual -->
        <div class="auth-visual ">
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
                <div class="auth-tab active" data-tab="login">Login</div>              
                
            </div>
            
            <!-- Login Form -->
            <form class="auth-form active" method="POST" action="{{ route('login') }}">
              @csrf  
            <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <div class="error-text" >
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="password-wrapper">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <div class="error-text" >
                                        <strong>{{ $message }}</strong>
                                    </div>
                        @enderror
                        <button type="button" class="toggle-password" data-target="password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="error-text" id="passwordError">Password must be at least 8 characters</div>
                </div>
                
                <div class="form-options">
                    <div class="checkbox-group">
                        <input type="checkbox" id="rememberMe">
                        <label class="checkbox-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>
                
                <button type="submit" class="btn btn-primary" id="loginBtn">
                    <i class="fas fa-lock" style="margin-right: 8px;"></i> Secure Login
                </button>
                
                <!-- Social Login
                <div class="social-login">
                    <div class="social-divider">
                        <span>Or continue with</span>
                    </div>
                    <div class="social-buttons">
                        <button type="button" class="social-btn">
                            <i class="fab fa-google"></i> Google
                        </button>
                        <button type="button" class="social-btn">
                            <i class="fab fa-apple"></i> Apple
                        </button>
                    </div>
                </div>
                
                <div class="toggle-prompt">
                    New here? <a class="toggle-link" data-target="register">Create an account in minutes.</a>
                </div> -->
            </form>
            
          
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