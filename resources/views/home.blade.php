@extends('layouts.web')

@section('content')
<!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Trade Smarter. Faster. Securely.</h1>
                    <p>Advanced trading tools for crypto, forex, and digital assets — built for modern traders. Join 250,000+ traders worldwide.</p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary">Get Started</button>
                        <button class="btn btn-secondary">Live Markets</button>
                    </div>
                    <div class="stats">
                        <p><i class="fas fa-check" style="color: #00FF9D;"></i> $2.1B+ monthly trading volume</p>
                        <p><i class="fas fa-check" style="color: #00FF9D;"></i> 99.9% platform uptime</p>
                        <p><i class="fas fa-check" style="color: #00FF9D;"></i> 24/7 customer support</p>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="dashboard-mockup floating">
                        <div class="chart-container">
                            <div class="chart-line"></div>
                        </div>
                        <div class="order-panel">
                            <div class="order-button buy-btn">BUY BTC</div>
                            <div class="order-button sell-btn">SELL BTC</div>
                        </div>
                        <div style="margin-top: 15px; display: flex; justify-content: space-between; font-size: 14px;">
                            <div>
                                <div style="color: #999;">Current Price</div>
                                <div style="font-weight: 600; font-size: 18px;">$45,230.50</div>
                            </div>
                            <div>
                                <div style="color: #999;">24h Change</div>
                                <div style="font-weight: 600; color: #00FF9D; font-size: 18px;">+2.31%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Ticker -->
    <section class="market-ticker">
        <div class="ticker-content">
            <!-- Ticker items will be duplicated for seamless scroll -->
            <div class="ticker-item">
                <span class="ticker-symbol">BTC/USD</span>
                <span class="ticker-price">$45,230.50</span>
                <span class="ticker-change positive">+2.31%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">ETH/USD</span>
                <span class="ticker-price">$2,847.20</span>
                <span class="ticker-change positive">+1.87%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">EUR/USD</span>
                <span class="ticker-price">1.0847</span>
                <span class="ticker-change positive">+0.23%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">GBP/USD</span>
                <span class="ticker-price">1.2634</span>
                <span class="ticker-change negative">-0.15%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">XAU/USD</span>
                <span class="ticker-price">$2,034.80</span>
                <span class="ticker-change negative">-0.32%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">SOL/USD</span>
                <span class="ticker-price">$102.45</span>
                <span class="ticker-change positive">+5.12%</span>
            </div>
            <!-- Duplicate for seamless loop -->
            <div class="ticker-item">
                <span class="ticker-symbol">BTC/USD</span>
                <span class="ticker-price">$45,230.50</span>
                <span class="ticker-change positive">+2.31%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">ETH/USD</span>
                <span class="ticker-price">$2,847.20</span>
                <span class="ticker-change positive">+1.87%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">EUR/USD</span>
                <span class="ticker-price">1.0847</span>
                <span class="ticker-change positive">+0.23%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">GBP/USD</span>
                <span class="ticker-price">1.2634</span>
                <span class="ticker-change negative">-0.15%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">XAU/USD</span>
                <span class="ticker-price">$2,034.80</span>
                <span class="ticker-change negative">-0.32%</span>
            </div>
            <div class="ticker-item">
                <span class="ticker-symbol">SOL/USD</span>
                <span class="ticker-price">$102.45</span>
                <span class="ticker-change positive">+5.12%</span>
            </div>
        </div>
    </section>

    <!-- Platform Features -->
    <section class="container">
        <h2 class="section-title">Why Traders Choose <span>Zimvex</span></h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bolt" style="color: #00F7FF;"></i>
                </div>
                <h3>Ultra-Fast Execution</h3>
                <p>Execute trades in milliseconds with our cutting-edge technology. Never miss a profitable opportunity with 99.9% uptime guarantee.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt" style="color: #00FF9D;"></i>
                </div>
                <h3>Bank-Grade Security</h3>
                <p>Your funds are protected with institutional-grade security. We use cold storage and multi-signature wallets for maximum safety.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-bar" style="color: #00F7FF;"></i>
                </div>
                <h3>Advanced Analytics</h3>
                <p>Get real-time market insights powered by AI. Make smarter trading decisions with predictive analytics and professional charting tools.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-globe" style="color: #00FF9D;"></i>
                </div>
                <h3>Global Market Access</h3>
                <p>Trade 24/7 across global markets. Access crypto, forex, commodities, and indices from a single, unified platform.</p>
            </div>
        </div>
    </section>

    <!-- Trading Tools -->
    <section class="container trading-tools">
        <div class="tools-text">
            <h2>Professional Trading <span style="background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Tools</span></h2>
            <p>Access advanced charting with 100+ technical indicators, drawing tools, and customizable layouts. Our platform offers institutional-grade tools for retail traders.</p>
            <p>Execute orders with one-click trading, set stop-loss and take-profit levels, and automate your strategies with our built-in trading bots.</p>
            <button class="btn btn-primary" style="margin-top: 20px;">Explore Trading Tools</button>
        </div>
        <div class="tools-visual">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                <div>
                    <div style="color: #999; font-size: 14px;">Trading Pair</div>
                    <div style="font-weight: 600;">BTC/USD</div>
                </div>
                <div>
                    <div style="color: #999; font-size: 14px;">Timeframe</div>
                    <div style="font-weight: 600;">1H Chart</div>
                </div>
                <div>
                    <div style="color: #999; font-size: 14px;">Indicators</div>
                    <div style="font-weight: 600;">RSI, MACD, EMA</div>
                </div>
            </div>
            <div class="chart-container" style="height: 200px;">
                <div class="chart-line"></div>
            </div>
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <div style="flex: 1; background: rgba(0, 255, 157, 0.1); border-radius: 8px; padding: 12px; border: 1px solid rgba(0, 255, 157, 0.2);">
                    <div style="color: #00FF9D; font-weight: 600;">Buy Limit</div>
                    <div style="font-weight: 600;">$44,800.00</div>
                </div>
                <div style="flex: 1; background: rgba(255, 50, 100, 0.1); border-radius: 8px; padding: 12px; border: 1px solid rgba(255, 50, 100, 0.2);">
                    <div style="color: #FF3264; font-weight: 600;">Sell Stop</div>
                    <div style="font-weight: 600;">$45,500.00</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="container why-us">
        <h2 class="section-title">Built for <span>Modern Traders</span></h2>
        <div class="benefits-grid">
            <div class="benefit-item">
                <div class="benefit-icon">
                    <i class="fas fa-certificate" style="color: #00F7FF;"></i>
                </div>
                <h3>Regulated & Secure</h3>
                <p>Licensed and regulated by top-tier financial authorities worldwide.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon">
                    <i class="fas fa-headset" style="color: #00FF9D;"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Round-the-clock customer service via live chat, email, and phone.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon">
                    <i class="fas fa-percentage" style="color: #00F7FF;"></i>
                </div>
                <h3>Low Fees</h3>
                <p>Competitive trading fees with no hidden charges and tight spreads.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon">
                    <i class="fas fa-water" style="color: #00FF9D;"></i>
                </div>
                <h3>High Liquidity</h3>
                <p>Deep liquidity pools ensuring fast execution at the best prices.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section">
            <h2>Start Trading in Minutes</h2>
            <p>Join over 250,000 traders worldwide who trust Zimvex with their investments. Sign up today and get a free demo account with $10,000 virtual funds to practice.</p>
            <button class="btn btn-primary" style="padding: 16px 40px; font-size: 18px;">Create Free Account</button>
            <div style="margin-top: 30px; color: #999; font-size: 14px;">
                <p><i class="fas fa-lock"></i> No credit card required • $10 minimum deposit</p>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>

        
        // Add interactive effects
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Feature card hover effects
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Simulate live price updates
            function updateTickerPrices() {
                const tickerItems = document.querySelectorAll('.ticker-item');
                tickerItems.forEach(item => {
                    const changeElement = item.querySelector('.ticker-change');
                    const priceElement = item.querySelector('.ticker-price');
                    
                    // Random small price fluctuation
                    if (Math.random() > 0.5) {
                        const currentPrice = parseFloat(priceElement.textContent.replace(/[^0-9.-]+/g,""));
                        const changePercent = (Math.random() * 0.5 - 0.25).toFixed(2);
                        const newPrice = (currentPrice * (1 + changePercent/100)).toFixed(2);
                        
                        // Update price with appropriate formatting
                        if (priceElement.textContent.includes('$')) {
                            priceElement.textContent = '$' + newPrice;
                        } else {
                            priceElement.textContent = newPrice;
                        }
                        
                        // Update change indicator
                        if (parseFloat(changePercent) >= 0) {
                            changeElement.textContent = '+' + Math.abs(changePercent) + '%';
                            changeElement.className = 'ticker-change positive';
                        } else {
                            changeElement.textContent = '-' + Math.abs(changePercent) + '%';
                            changeElement.className = 'ticker-change negative';
                        }
                    }
                });
            }
            
            // Update prices every 10 seconds
            setInterval(updateTickerPrices, 10000);
            
            // Simulate chart animation
            const chartLines = document.querySelectorAll('.chart-line');
            chartLines.forEach(line => {
                // Reset animation
                line.style.animation = 'none';
                setTimeout(() => {
                    line.style.animation = 'drawChart 2s ease-out forwards';
                }, 100);
            });
            
            // CTA button glowing effect
            const ctaButton = document.querySelector('.cta-section .btn-primary');
            setInterval(() => {
                ctaButton.style.boxShadow = '0 0 20px rgba(0, 247, 255, 0.7)';
                setTimeout(() => {
                    ctaButton.style.boxShadow = '0 5px 15px rgba(0, 247, 255, 0.4)';
                }, 1000);
            }, 3000);
        });
    </script>
@endsection