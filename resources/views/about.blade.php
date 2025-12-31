@extends('layouts.web')

@section('content')
<!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="fade-in">Built for Traders. Trusted Worldwide.</h1>
            <p class="fade-in">Empowering global traders with secure, fast, and intelligent trading technology. Join 250,000+ traders across 150 countries.</p>
            
            <div class="stats-bar fade-in">
                <div class="stat-item">
                    <div class="stat-number" id="traders-count">0</div>
                    <div class="stat-label">Active Traders</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="countries-count">0</div>
                    <div class="stat-label">Countries</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">$2.1B+</div>
                    <div class="stat-label">Daily Volume</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="section">
        <div class="container">
            <div class="two-column fade-in">
                <div class="column-text">
                    <h2>Who We <span style="background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Are</span></h2>
                    <p>Founded in 2018, Zimvex was born from a simple vision: to democratize access to professional trading tools and create a platform where anyone, anywhere could trade with confidence.</p>
                    <p>Our team of financial technologists, security experts, and former traders came together to build a platform that combines institutional-grade technology with an intuitive user experience.</p>
                    <p>Today, we serve a global community of traders, providing secure, transparent, and high-performance trading solutions across crypto, forex, and digital assets.</p>
                    <button class="btn btn-primary" style="margin-top: 30px;">Our Story</button>
                </div>
                <div class="column-visual">
                    <div class="dashboard-mockup floating">
                        <div class="chart-area">
                            <div class="chart-line"></div>
                        </div>
                        <div class="data-row">
                            <div class="data-item">
                                <div class="data-value" style="color: #00FF9D;">$45,230.50</div>
                                <div class="data-label">BTC/USD</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value" style="color: #00FF9D;">+2.31%</div>
                                <div class="data-label">24h Change</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value">$2,847.20</div>
                                <div class="data-label">ETH/USD</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our <span>Mission & Vision</span></h2>
            <div class="mission-vision">
                <div class="mission-card fade-in">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>Deliver secure, transparent, and high-performance trading solutions that empower individuals and institutions to participate in global financial markets with confidence.</p>
                </div>
                <div class="mission-card fade-in">
                    <div class="mission-icon">
                        <i class="fas fa-eye" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>Become the most trusted and accessible digital trading ecosystem globally, breaking down barriers to financial markets through innovative technology and education.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our <span>Core Values</span></h2>
            <div class="values-grid">
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Security First</h3>
                    <p>We prioritize the safety of our users' funds and data above all else with institutional-grade security protocols.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-bolt" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Speed & Performance</h3>
                    <p>Our trading engine executes orders in milliseconds, ensuring you never miss a market opportunity.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-globe" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Global Accessibility</h3>
                    <p>We're building a borderless trading platform accessible to anyone with an internet connection.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-chart-line" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Transparency</h3>
                    <p>Clear pricing, no hidden fees, and open communication are at the heart of everything we do.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-users" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Customer-Centric</h3>
                    <p>We listen to our community and continuously improve our platform based on user feedback.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We continuously explore new technologies to enhance the trading experience and stay ahead of market trends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology & Security -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Technology & <span>Security</span></h2>
            <div class="tech-section">
                <div class="tech-content">
                    <div class="security-card fade-in">
                        <h3><i class="fas fa-server"></i> Advanced Trading Engine</h3>
                        <p>Our proprietary trading infrastructure processes millions of transactions per second with sub-10ms latency.</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="security-card fade-in">
                        <h3><i class="fas fa-lock"></i> Bank-Grade Encryption</h3>
                        <p>All data is encrypted with AES-256 and SSL/TLS protocols, ensuring your information remains confidential.</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 99%"></div>
                        </div>
                    </div>
                    <div class="security-card fade-in">
                        <h3><i class="fas fa-wallet"></i> Secure Fund Storage</h3>
                        <p>95% of digital assets are stored in offline cold wallets, with multi-signature authorization for withdrawals.</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 95%"></div>
                        </div>
                    </div>
                    
                    <div class="tech-stats">
                        <div class="tech-stat">
                            <div class="tech-stat-number" id="uptime">0%</div>
                            <div class="tech-stat-label">Platform Uptime</div>
                        </div>
                        <div class="tech-stat">
                            <div class="tech-stat-number">&lt;10ms</div>
                            <div class="tech-stat-label">Order Execution</div>
                        </div>
                        <div class="tech-stat">
                            <div class="tech-stat-number">256-bit</div>
                            <div class="tech-stat-label">Encryption</div>
                        </div>
                    </div>
                </div>
                <div class="tech-visual fade-in">
                    <div class="dashboard-mockup">
                        <div class="chart-area">
                            <div class="chart-line"></div>
                        </div>
                        <div class="data-row">
                            <div class="data-item">
                                <div class="data-value" style="color: #00FF9D;">7.2M</div>
                                <div class="data-label">Orders/Day</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value">&lt;10ms</div>
                                <div class="data-label">Avg Latency</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value">99.99%</div>
                                <div class="data-label">Reliability</div>
                            </div>
                        </div>
                        <div style="margin-top: 20px; text-align: center; color: #999; font-size: 14px;">
                            <i class="fas fa-shield-alt" style="color: #00FF9D; margin-right: 5px;"></i> Real-time Trading Infrastructure
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Presence -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Global <span>Presence</span></h2>
            <div class="global-section">
                <div class="map-container fade-in">
                    <!-- Simplified world map representation -->
                    <div class="world-map">
                        <div style="position: relative; width: 100%; height: 300px; background: rgba(10, 25, 40, 0.5); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <div style="font-size: 18px; color: #999; text-align: center;">
                                <i class="fas fa-globe-americas" style="font-size: 60px; margin-bottom: 20px; display: block; color: rgba(0, 247, 255, 0.3);"></i>
                                Serving Traders Across 150+ Countries
                            </div>
                        </div>
                    </div>
                    <div class="map-pin pin-1 pulse"></div>
                    <div class="map-pin pin-2 pulse" style="animation-delay: 0.2s"></div>
                    <div class="map-pin pin-3 pulse" style="animation-delay: 0.4s"></div>
                    <div class="map-pin pin-4 pulse" style="animation-delay: 0.6s"></div>
                    <div class="map-pin pin-5 pulse" style="animation-delay: 0.8s"></div>
                    <div class="map-pin pin-6 pulse" style="animation-delay: 1s"></div>
                    <div class="map-pin pin-7 pulse" style="animation-delay: 1.2s"></div>
                </div>
                
                <div class="global-stats fade-in">
                    <div class="global-stat">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Countries Supported</div>
                    </div>
                    <div class="global-stat">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Trading Hours</div>
                    </div>
                    <div class="global-stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Languages</div>
                    </div>
                    <div class="global-stat">
                        <div class="stat-number">10</div>
                        <div class="stat-label">Global Offices</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance & Trust -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Compliance & <span>Trust</span></h2>
            <div class="compliance-grid">
                <div class="compliance-card fade-in">
                    <div class="compliance-icon">
                        <i class="fas fa-gavel" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>We operate under strict regulatory frameworks and maintain licenses in multiple jurisdictions to ensure full compliance.</p>
                </div>
                <div class="compliance-card fade-in">
                    <div class="compliance-icon">
                        <i class="fas fa-user-shield" style="color: #00FF9D;"></i>
                    </div>
                    <h3>AML/KYC Standards</h3>
                    <p>Advanced anti-money laundering and know-your-customer protocols protect our platform and community.</p>
                </div>
                <div class="compliance-card fade-in">
                    <div class="compliance-icon">
                        <i class="fas fa-balance-scale" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Transparent Operations</h3>
                    <p>We believe in complete transparency with clear fee structures, execution policies, and operational practices.</p>
                </div>
                <div class="compliance-card fade-in">
                    <div class="compliance-icon">
                        <i class="fas fa-award" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Industry Recognition</h3>
                    <p>Award-winning platform recognized for innovation, security, and user experience by leading industry bodies.</p>
                </div>
            </div>
            
            <div class="cert-badges fade-in">
                <div class="cert-badge">ISO 27001 Certified</div>
                <div class="cert-badge">SOC 2 Type II</div>
                <div class="cert-badge">GDPR Compliant</div>
                <div class="cert-badge">Cybersecurity Excellence</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section fade-in">
            <h2>Trade with Confidence on a Platform Built for the Future</h2>
            <p>Join a global community of traders who trust Zimvex with their investments. Start your trading journey today with our secure, high-performance platform.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" style="padding: 16px 40px; font-size: 18px;">Start Trading</button>
                <button class="btn btn-secondary" style="padding: 16px 40px; font-size: 18px;">View Pricing</button>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animated counters
            function animateCounter(elementId, finalValue, duration = 2000) {
                const element = document.getElementById(elementId);
                if (!element) return;
                
                let startValue = 0;
                const increment = finalValue / (duration / 16); // 60fps
                const timer = setInterval(() => {
                    startValue += increment;
                    if (startValue >= finalValue) {
                        element.textContent = finalValue.toLocaleString();
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(startValue).toLocaleString();
                    }
                }, 16);
            }
            
            // Initialize counters
            animateCounter('traders-count', 250000);
            animateCounter('countries-count', 150);
            
            // Animate progress bars
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
            
            // Animate tech stats
            function animateTechStat(elementId, finalValue, suffix = '', duration = 1500) {
                const element = document.getElementById(elementId);
                if (!element) return;
                
                let startValue = 0;
                const increment = finalValue / (duration / 16);
                const timer = setInterval(() => {
                    startValue += increment;
                    if (startValue >= finalValue) {
                        element.textContent = finalValue + suffix;
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(startValue) + suffix;
                    }
                }, 16);
            }
            
            // Animate uptime counter
            setTimeout(() => {
                animateTechStat('uptime', 99.9, '%');
            }, 1000);
            
            // Scroll animations
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
            
            // Button hover effects
            const buttons = document.querySelectorAll('.btn, .mission-card, .value-card, .compliance-card');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Map pin animations
            const mapPins = document.querySelectorAll('.map-pin');
            setInterval(() => {
                mapPins.forEach(pin => {
                    pin.classList.toggle('pulse');
                });
            }, 3000);
            
            // Chart animation
            const chartLines = document.querySelectorAll('.chart-line');
            chartLines.forEach(line => {
                // Reset animation
                line.style.animation = 'none';
                setTimeout(() => {
                    line.style.animation = 'drawChart 2s ease-out forwards';
                }, 100);
            });
            
            // Define drawChart animation
            const styleSheet = document.styleSheets[0];
            styleSheet.insertRule(`
                @keyframes drawChart {
                    0% { transform: scaleX(0); }
                    100% { transform: scaleX(1); }
                }
            `, styleSheet.cssRules.length);
        });
    </script>
@endsection