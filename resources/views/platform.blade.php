@extends('layouts.web')

@section('content')
<!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text fade-in">
                    <h1>Trade Smarter with Cutting-Edge Tools</h1>
                    <p>Our platform empowers traders with fast, secure, and intelligent trading solutions. Experience institutional-grade technology with an intuitive interface.</p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary">Explore Platform</button>
                        <button class="btn btn-secondary">Create Account</button>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">&lt;10ms</div>
                            <div class="stat-label">Order Execution</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">99.99%</div>
                            <div class="stat-label">Uptime</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Trading Pairs</div>
                        </div>
                    </div>
                </div>
                <div class="hero-visual fade-in">
                    <div class="dashboard-mockup floating">
                        <div class="dashboard-header">
                            <div class="dashboard-title">BTC/USD Trading Dashboard</div>
                            <div style="color: #00FF9D; font-weight: 600;">Live</div>
                        </div>
                        <div class="chart-container">
                            <div class="chart-line"></div>
                        </div>
                        <div class="order-panel">
                            <div class="order-button buy-btn">BUY LIMIT</div>
                            <div class="order-button sell-btn">SELL STOP</div>
                        </div>
                        <div class="data-row">
                            <div class="data-item">
                                <div class="data-value" style="color: #00FF9D;">$45,230.50</div>
                                <div class="data-label">Current Price</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value" style="color: #00FF9D;">+2.31%</div>
                                <div class="data-label">24h Change</div>
                            </div>
                            <div class="data-item">
                                <div class="data-value">$2.1B</div>
                                <div class="data-label">24h Volume</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Features -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Platform <span>Features</span></h2>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-bolt" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Ultra-Fast Execution</h3>
                    <p>Execute trades in milliseconds with our cutting-edge trading infrastructure. Never miss a market opportunity with sub-10ms latency.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Advanced Charts & Analytics</h3>
                    <p>Professional charting with 100+ technical indicators, drawing tools, and customizable layouts for sophisticated analysis.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Bank-Grade Security</h3>
                    <p>Your funds are protected with AES-256 encryption, multi-signature wallets, and cold storage for maximum security.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-globe" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Global Market Access</h3>
                    <p>Trade 24/7 across crypto, forex, commodities, and indices from a single unified platform with deep liquidity.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-desktop" style="color: #00F7FF;"></i>
                    </div>
                    <h3>Web & Mobile Platforms</h3>
                    <p>Seamless experience across desktop, web, and mobile apps with full feature parity and real-time sync.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-code" style="color: #00FF9D;"></i>
                    </div>
                    <h3>API Access & Automation</h3>
                    <p>Build custom trading bots and algorithms with our REST and WebSocket APIs for automated trading strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Tools -->
    <section class="section">
        <div class="container">
            <div class="trading-tools">
                <div class="tools-text fade-in">
                    <h2>Advanced <span style="background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Trading Tools</span></h2>
                    <p>Access professional-grade trading tools designed for both retail and institutional traders. Our platform provides everything you need for successful trading.</p>
                    
                    <ul class="tools-list">
                        <li><i class="fas fa-check"></i> Real-time market data with depth charts</li>
                        <li><i class="fas fa-check"></i> 100+ technical indicators and drawing tools</li>
                        <li><i class="fas fa-check"></i> One-click and OCO (One-Cancels-Other) orders</li>
                        <li><i class="fas fa-check"></i> Advanced risk management with stop-loss/take-profit</li>
                        <li><i class="fas fa-check"></i> Customizable trading interface with multiple layouts</li>
                        <li><i class="fas fa-check"></i> TradingView integration for chart analysis</li>
                    </ul>
                    
                    <button class="btn btn-primary">Explore All Tools</button>
                </div>
                <div class="tools-visual fade-in">
                    <div class="dashboard-header" style="margin-bottom: 15px;">
                        <div class="dashboard-title">Advanced Trading Interface</div>
                        <div style="font-size: 14px; color: #999;">Demo Mode</div>
                    </div>
                    <div class="chart-container" style="height: 200px;">
                        <div class="chart-line"></div>
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 20px;">
                        <div style="flex: 1; background: rgba(0, 255, 157, 0.1); border-radius: 8px; padding: 12px; border: 1px solid rgba(0, 255, 157, 0.2);">
                            <div style="color: #00FF9D; font-weight: 600; font-size: 14px;">Buy Limit</div>
                            <div style="font-weight: 600; font-size: 18px;">$44,800.00</div>
                        </div>
                        <div style="flex: 1; background: rgba(255, 50, 100, 0.1); border-radius: 8px; padding: 12px; border: 1px solid rgba(255, 50, 100, 0.2);">
                            <div style="color: #FF3264; font-weight: 600; font-size: 14px;">Sell Stop</div>
                            <div style="font-weight: 600; font-size: 18px;">$45,500.00</div>
                        </div>
                    </div>
                    <div style="margin-top: 20px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                        <div style="background: rgba(255, 255, 255, 0.05); padding: 10px; border-radius: 6px; text-align: center;">
                            <div style="color: #999; font-size: 12px;">RSI</div>
                            <div style="font-weight: 600; color: #00FF9D;">64.2</div>
                        </div>
                        <div style="background: rgba(255, 255, 255, 0.05); padding: 10px; border-radius: 6px; text-align: center;">
                            <div style="color: #999; font-size: 12px;">MACD</div>
                            <div style="font-weight: 600; color: #00F7FF;">+12.5</div>
                        </div>
                        <div style="background: rgba(255, 255, 255, 0.05); padding: 10px; border-radius: 6px; text-align: center;">
                            <div style="color: #999; font-size: 12px;">Volume</div>
                            <div style="font-weight: 600;">2.4K BTC</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-Device Access -->
    <section class="section devices-section">
        <div class="container">
            <h2 class="section-title fade-in">Trade Anywhere, <span>Anytime</span></h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 40px; color: var(--text-gray); font-size: 18px;">Access your trading account seamlessly across all your devices with full feature parity and real-time synchronization.</p>
            
            <div class="devices-container">
                <div class="device desktop-device fade-in">
                    <div class="device-screen desktop-screen">
                        <div style="height: 100%; display: flex; align-items: center; justify-content: center; color: #999; font-size: 16px;">
                            <i class="fas fa-desktop" style="font-size: 48px; margin-right: 15px; color: rgba(0, 247, 255, 0.3);"></i>
                            Desktop Trading Platform
                        </div>
                    </div>
                    <div class="device-label">Desktop Application</div>
                </div>
                
                <div class="device tablet-device fade-in" style="animation-delay: 0.2s">
                    <div class="device-screen tablet-screen">
                        <div style="height: 100%; display: flex; align-items: center; justify-content: center; color: #999; font-size: 14px;">
                            <i class="fas fa-tablet-alt" style="font-size: 36px; margin-right: 10px; color: rgba(0, 247, 255, 0.3);"></i>
                            Tablet App
                        </div>
                    </div>
                    <div class="device-label">Tablet App</div>
                </div>
                
                <div class="device mobile-device fade-in" style="animation-delay: 0.4s">
                    <div class="device-screen mobile-screen">
                        <div style="height: 100%; display: flex; align-items: center; justify-content: center; color: #999; font-size: 12px;">
                            <i class="fas fa-mobile-alt" style="font-size: 24px; margin-right: 8px; color: rgba(0, 247, 255, 0.3);"></i>
                            Mobile Trading
                        </div>
                    </div>
                    <div class="device-label">Mobile App</div>
                </div>
            </div>
            
            <div style="margin-top: 60px; display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #00F7FF;">100%</div>
                    <div style="color: var(--text-gray); font-size: 14px;">Feature Parity</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #00FF9D;">Real-time</div>
                    <div style="color: var(--text-gray); font-size: 14px;">Sync Across Devices</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #00F7FF;">Offline</div>
                    <div style="color: var(--text-gray); font-size: 14px;">Mode Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security & Technology -->
    <section class="section security-section">
        <div class="container">
            <h2 class="section-title fade-in">Security & <span>Technology</span></h2>
            <div class="security-grid">
                <div class="security-card fade-in">
                    <div class="security-icon">
                        <i class="fas fa-lock" style="color: #00F7FF;"></i>
                    </div>
                    <h3>256-bit Encryption</h3>
                    <p>All data is secured with bank-grade AES-256 encryption and SSL/TLS protocols.</p>
                </div>
                <div class="security-card fade-in">
                    <div class="security-icon">
                        <i class="fas fa-wallet" style="color: #00FF9D;"></i>
                    </div>
                    <h3>Cold Wallet Storage</h3>
                    <p>95% of digital assets are stored in offline cold wallets with multi-signature access.</p>
                </div>
                <div class="security-card fade-in">
                    <div class="security-icon">
                        <i class="fas fa-shield-alt" style="color: #00F7FF;"></i>
                    </div>
                    <h3>24/7 System Monitoring</h3>
                    <p>Continuous security monitoring and DDoS protection with automated threat detection.</p>
                </div>
                <div class="security-card fade-in">
                    <div class="security-icon">
                        <i class="fas fa-server" style="color: #00FF9D;"></i>
                    </div>
                    <h3>High-Performance Infrastructure</h3>
                    <p>Global server network with low-latency connections and 99.99% uptime guarantee.</p>
                </div>
            </div>
            
            <div class="tech-stats fade-in">
                <div class="tech-stat">
                    <div class="tech-stat-number" id="encryption">256</div>
                    <div class="tech-stat-label">Bit Encryption</div>
                </div>
                <div class="tech-stat">
                    <div class="tech-stat-number" id="uptime">99.99%</div>
                    <div class="tech-stat-label">Platform Uptime</div>
                </div>
                <div class="tech-stat">
                    <div class="tech-stat-number">&lt;10ms</div>
                    <div class="tech-stat-label">Average Latency</div>
                </div>
                <div class="tech-stat">
                    <div class="tech-stat-number">24/7</div>
                    <div class="tech-stat-label">Security Monitoring</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section fade-in">
            <h2>Start Trading on a Platform Designed for the Future</h2>
            <p>Join 250,000+ traders who trust Zimvex with their investments. Experience professional-grade trading tools with an intuitive interface.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" style="padding: 16px 40px; font-size: 18px;">Open Account</button>
                <button class="btn btn-secondary" style="padding: 16px 40px; font-size: 18px;">View Pricing</button>
            </div>
            <div style="margin-top: 30px; color: #999; font-size: 14px;">
                <p><i class="fas fa-check-circle" style="color: #00FF9D;"></i> No hidden fees • $10 minimum deposit • 24/7 support</p>
            </div>
        </div>
    </section>
@endsection
@section('script')
   <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Animated chart lines
            const chartLines = document.querySelectorAll('.chart-line');
            chartLines.forEach(line => {
                // Reset animation
                line.style.animation = 'none';
                setTimeout(() => {
                    line.style.animation = 'drawChart 3s ease-out forwards';
                }, 100);
            });
            
            // Animate chart lines periodically
            setInterval(() => {
                chartLines.forEach(line => {
                    line.style.animation = 'none';
                    setTimeout(() => {
                        line.style.animation = 'drawChart 3s ease-out forwards';
                    }, 10);
                });
            }, 6000);
            
            // Feature card hover effects
            const featureCards = document.querySelectorAll('.feature-card, .security-card, .device');
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Button hover effects
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Trading order buttons interaction
            const orderButtons = document.querySelectorAll('.order-button');
            orderButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.classList.contains('buy-btn') ? 'BUY' : 'SELL';
                    const originalText = this.textContent;
                    this.textContent = `${type} ORDER PLACED`;
                    this.style.background = type === 'BUY' 
                        ? 'rgba(0, 255, 157, 0.3)' 
                        : 'rgba(255, 50, 100, 0.3)';
                    
                    setTimeout(() => {
                        this.textContent = originalText;
                        this.style.background = type === 'BUY' 
                            ? 'linear-gradient(90deg, rgba(0, 255, 157, 0.2), rgba(0, 255, 157, 0.1))' 
                            : 'linear-gradient(90deg, rgba(255, 50, 100, 0.2), rgba(255, 50, 100, 0.1))';
                    }, 1500);
                });
            });
            
            // Update price in dashboard mockup (simulation)
            function updatePrice() {
                const priceElement = document.querySelector('.dashboard-mockup .data-value');
                if (priceElement) {
                    const currentPrice = parseFloat(priceElement.textContent.replace('$', '').replace(',', ''));
                    const change = (Math.random() - 0.5) * 100;
                    const newPrice = currentPrice + change;
                    
                    priceElement.textContent = '$' + newPrice.toLocaleString('en-US', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                    
                    // Update change indicator
                    const changeElement = document.querySelector('.dashboard-mockup .data-item:nth-child(2) .data-value');
                    const changePercent = (change / currentPrice * 100).toFixed(2);
                    const isPositive = change >= 0;
                    
                    changeElement.textContent = (isPositive ? '+' : '') + changePercent + '%';
                    changeElement.style.color = isPositive ? '#00FF9D' : '#FF3264';
                }
            }
            
            // Update price every 3 seconds
            setInterval(updatePrice, 3000);
            
            // Animated counters for stats
            function animateCounter(elementId, finalValue, suffix = '', duration = 2000) {
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
            
            // Animate stats after page loads
            setTimeout(() => {
                animateCounter('encryption', 256, '-bit');
                animateCounter('uptime', 99.99, '%');
            }, 1000);
            
            // CTA button glow effect
            const ctaButton = document.querySelector('.cta-section .btn-primary');
            setInterval(() => {
                ctaButton.style.boxShadow = '0 0 20px rgba(0, 247, 255, 0.7)';
                setTimeout(() => {
                    ctaButton.style.boxShadow = '0 5px 15px rgba(0, 247, 255, 0.4)';
                }, 1000);
            }, 3000);
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 100) {
                    header.style.background = 'rgba(26, 57, 81, 0.95)';
                    header.style.backdropFilter = 'blur(15px)';
                } else {
                    header.style.background = 'rgba(26, 57, 81, 0.9)';
                    header.style.backdropFilter = 'blur(10px)';
                }
            });
        });
    </script>
@endsection