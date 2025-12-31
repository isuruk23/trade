@extends('layouts.web')

@section('content')
<<!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Choose the Right Trading Plan for You</h1>
            <p>Flexible packages designed for beginners, active traders, and professionals. Start with any plan and upgrade anytime as your trading grows.</p>
            
            <!-- Pricing Toggle -->
            <div class="pricing-toggle">
                <span class="toggle-label active" id="monthly-label">Monthly</span>
                <div class="toggle-switch">
                    <input type="checkbox" id="pricing-toggle">
                    <label for="pricing-toggle" class="slider"></label>
                </div>
                <span class="toggle-label" id="yearly-label">Yearly <span style="color: var(--accent-green); font-size: 14px;">(Save 20%)</span></span>
            </div>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="container">
        <div class="pricing-cards">
            <!-- Starter Card -->
            <div class="pricing-card">
                <h3 class="plan-name">Starter</h3>
                <p class="plan-description">Perfect for beginners entering the trading world</p>
                <div class="price" id="starter-price">$49<span style="font-size: 24px;">/mo</span></div>
                <div class="price-period" id="starter-period">Billed monthly</div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Access to 50+ trading pairs</li>
                    <li><i class="fas fa-check"></i> $10,000 daily trade limit</li>
                    <li><i class="fas fa-check"></i> 1:10 leverage</li>
                    <li><i class="fas fa-check"></i> Basic charting tools</li>
                    <li><i class="fas fa-times"></i> No API access</li>
                    <li><i class="fas fa-times"></i> No priority support</li>
                </ul>
                <button class="card-button">Start Now</button>
            </div>
            
            <!-- Pro Trader Card (Most Popular) -->
            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <h3 class="plan-name">Pro Trader</h3>
                <p class="plan-description">For active traders seeking advanced tools</p>
                <div class="price" id="pro-price">$99<span style="font-size: 24px;">/mo</span></div>
                <div class="price-period" id="pro-period">Billed monthly</div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Access to 150+ trading pairs</li>
                    <li><i class="fas fa-check"></i> $50,000 daily trade limit</li>
                    <li><i class="fas fa-check"></i> 1:25 leverage</li>
                    <li><i class="fas fa-check"></i> Advanced charting with indicators</li>
                    <li><i class="fas fa-check"></i> Basic API access</li>
                    <li><i class="fas fa-times"></i> No dedicated account manager</li>
                </ul>
                <button class="card-button">Start Now</button>
            </div>
            
            <!-- Advanced Card -->
            <div class="pricing-card">
                <h3 class="plan-name">Advanced</h3>
                <p class="plan-description">For serious traders requiring premium features</p>
                <div class="price" id="advanced-price">$199<span style="font-size: 24px;">/mo</span></div>
                <div class="price-period" id="advanced-period">Billed monthly</div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Access to 300+ trading pairs</li>
                    <li><i class="fas fa-check"></i> $250,000 daily trade limit</li>
                    <li><i class="fas fa-check"></i> 1:50 leverage</li>
                    <li><i class="fas fa-check"></i> Professional charting suite</li>
                    <li><i class="fas fa-check"></i> Full API access</li>
                    <li><i class="fas fa-check"></i> Priority email support</li>
                </ul>
                <button class="card-button">Start Now</button>
            </div>
            
            <!-- Institutional Card -->
            <div class="pricing-card">
                <h3 class="plan-name">Institutional</h3>
                <p class="plan-description">Custom solutions for institutions and whales</p>
                <div class="price">Custom</div>
                <div class="price-period">Tailored pricing</div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Unlimited trading pairs</li>
                    <li><i class="fas fa-check"></i> No daily trade limits</li>
                    <li><i class="fas fa-check"></i> Up to 1:100 leverage</li>
                    <li><i class="fas fa-check"></i> Institutional charting tools</li>
                    <li><i class="fas fa-check"></i> Advanced API & FIX connectivity</li>
                    <li><i class="fas fa-check"></i> 24/7 dedicated support</li>
                </ul>
                <button class="card-button">Contact Sales</button>
            </div>
        </div>
    </section>

    <!-- Feature Comparison Table -->
    <section class="container comparison-section">
        <h2 class="section-title">Plan <span>Comparison</span></h2>
        <div class="comparison-table">
            <div class="table-header">
                <div class="feature-name">Features</div>
                <div class="plan-cell">Starter</div>
                <div class="plan-cell">Pro Trader</div>
                <div class="plan-cell">Advanced</div>
                <div class="plan-cell">Institutional</div>
            </div>
            <div class="table-row">
                <div class="feature-name">Trading Pairs</div>
                <div class="plan-cell">50+</div>
                <div class="plan-cell">150+</div>
                <div class="plan-cell">300+</div>
                <div class="plan-cell">Unlimited</div>
            </div>
            <div class="table-row">
                <div class="feature-name">Daily Trade Limit</div>
                <div class="plan-cell">$10,000</div>
                <div class="plan-cell">$50,000</div>
                <div class="plan-cell">$250,000</div>
                <div class="plan-cell">Unlimited</div>
            </div>
            <div class="table-row">
                <div class="feature-name">Maximum Leverage</div>
                <div class="plan-cell">1:10</div>
                <div class="plan-cell">1:25</div>
                <div class="plan-cell">1:50</div>
                <div class="plan-cell">1:100</div>
            </div>
            <div class="table-row">
                <div class="feature-name">Charting Tools</div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
            </div>
            <div class="table-row">
                <div class="feature-name">Advanced Indicators</div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
            </div>
            <div class="table-row">
                <div class="feature-name">API Access</div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
            </div>
            <div class="table-row">
                <div class="feature-name">Priority Support</div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
            </div>
            <div class="table-row">
                <div class="feature-name">Dedicated Account Manager</div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-times x-icon"></i></div>
                <div class="plan-cell"><i class="fas fa-check check-icon"></i></div>
            </div>
        </div>
    </section>

    <!-- Add-Ons Section -->
    <section class="container addons-section">
        <h2 class="section-title">Premium <span>Add-Ons</span></h2>
        <div class="addons-grid">
            <div class="addon-card">
                <div class="addon-icon">
                    <i class="fas fa-robot" style="color: #00F7FF;"></i>
                </div>
                <h3>AI Trading Signals</h3>
                <p>Receive AI-powered trading signals and market insights to enhance your trading decisions.</p>
                <div class="addon-price">+$29/month</div>
            </div>
            <div class="addon-card">
                <div class="addon-icon">
                    <i class="fas fa-users" style="color: #00FF9D;"></i>
                </div>
                <h3>Copy Trading</h3>
                <p>Automatically copy trades from top-performing traders in our community.</p>
                <div class="addon-price">+$19/month</div>
            </div>
            <div class="addon-card">
                <div class="addon-icon">
                    <i class="fas fa-user-tie" style="color: #00F7FF;"></i>
                </div>
                <h3>Dedicated Account Manager</h3>
                <p>Get personalized assistance and strategic advice from a trading expert.</p>
                <div class="addon-price">+$99/month</div>
            </div>
            <div class="addon-card">
                <div class="addon-icon">
                    <i class="fas fa-bolt" style="color: #00FF9D;"></i>
                </div>
                <h3>Priority Withdrawals</h3>
                <p>Expedited withdrawal processing with higher daily limits and reduced fees.</p>
                <div class="addon-price">+$49/month</div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="container">
        <div class="trust-section">
            <h2 style="font-size: 32px; margin-bottom: 20px;">Secure & Transparent Trading</h2>
            <p style="max-width: 700px; margin: 0 auto 30px; color: var(--text-gray);">Your funds are protected with bank-level security. We maintain complete transparency with no hidden fees or unexpected charges.</p>
            <div class="trust-icons">
                <div class="trust-icon">
                    <i class="fas fa-shield-alt"></i>
                    <div>Secure Funds</div>
                </div>
                <div class="trust-icon">
                    <i class="fas fa-lock"></i>
                    <div>Regulated Platform</div>
                </div>
                <div class="trust-icon">
                    <i class="fas fa-handshake"></i>
                    <div>No Hidden Fees</div>
                </div>
                <div class="trust-icon">
                    <i class="fas fa-certificate"></i>
                    <div>Licensed Broker</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section">
            <h2>Upgrade Your Trading Experience Today</h2>
            <p>Start with any plan. Upgrade anytime as your trading skills and portfolio grow. All plans include a 7-day free trial.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" style="padding: 16px 40px; font-size: 18px;">Create Account</button>
                <button class="btn btn-secondary" style="padding: 16px 40px; font-size: 18px;">Compare Plans</button>
            </div>
            <div style="margin-top: 30px; color: #999; font-size: 14px;">
                <p><i class="fas fa-check-circle" style="color: #00FF9D;"></i> No credit card required for trial • Cancel anytime</p>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        // Monthly/Yearly Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const pricingToggle = document.getElementById('pricing-toggle');
            const monthlyLabel = document.getElementById('monthly-label');
            const yearlyLabel = document.getElementById('yearly-label');
            
            // Price elements
            const starterPrice = document.getElementById('starter-price');
            const proPrice = document.getElementById('pro-price');
            const advancedPrice = document.getElementById('advanced-price');
            const starterPeriod = document.getElementById('starter-period');
            const proPeriod = document.getElementById('pro-period');
            const advancedPeriod = document.getElementById('advanced-period');
            
            // Monthly prices
            const monthlyPrices = {
                starter: 49,
                pro: 99,
                advanced: 199
            };
            
            // Yearly prices (20% discount)
            const yearlyPrices = {
                starter: Math.round(monthlyPrices.starter * 12 * 0.8),
                pro: Math.round(monthlyPrices.pro * 12 * 0.8),
                advanced: Math.round(monthlyPrices.advanced * 12 * 0.8)
            };
            
            pricingToggle.addEventListener('change', function() {
                if (this.checked) {
                    // Switch to yearly pricing
                    monthlyLabel.classList.remove('active');
                    yearlyLabel.classList.add('active');
                    
                    starterPrice.innerHTML = `$${yearlyPrices.starter}<span style="font-size: 24px;">/yr</span>`;
                    proPrice.innerHTML = `$${yearlyPrices.pro}<span style="font-size: 24px;">/yr</span>`;
                    advancedPrice.innerHTML = `$${yearlyPrices.advanced}<span style="font-size: 24px;">/yr</span>`;
                    
                    starterPeriod.textContent = 'Billed annually (save 20%)';
                    proPeriod.textContent = 'Billed annually (save 20%)';
                    advancedPeriod.textContent = 'Billed annually (save 20%)';
                } else {
                    // Switch to monthly pricing
                    monthlyLabel.classList.add('active');
                    yearlyLabel.classList.remove('active');
                    
                    starterPrice.innerHTML = `$${monthlyPrices.starter}<span style="font-size: 24px;">/mo</span>`;
                    proPrice.innerHTML = `$${monthlyPrices.pro}<span style="font-size: 24px;">/mo</span>`;
                    advancedPrice.innerHTML = `$${monthlyPrices.advanced}<span style="font-size: 24px;">/mo</span>`;
                    
                    starterPeriod.textContent = 'Billed monthly';
                    proPeriod.textContent = 'Billed monthly';
                    advancedPeriod.textContent = 'Billed monthly';
                }
            });
            
            // Card hover effects
            const pricingCards = document.querySelectorAll('.pricing-card');
            pricingCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('popular')) {
                        this.style.transform = 'translateY(-10px)';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('popular')) {
                        this.style.transform = 'translateY(0)';
                    } else {
                        this.style.transform = 'scale(1.03)';
                    }
                });
            });
            
            // Add hover effect to addon cards
            const addonCards = document.querySelectorAll('.addon-card');
            addonCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Button hover effects
            const buttons = document.querySelectorAll('.btn, .card-button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Make comparison table rows highlight on hover
            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = 'transparent';
                });
            });
            
            // Glow effect for popular card
            const popularCard = document.querySelector('.pricing-card.popular');
            setInterval(() => {
                if (popularCard) {
                    popularCard.style.boxShadow = '0 20px 50px rgba(0, 255, 157, 0.3)';
                    setTimeout(() => {
                        popularCard.style.boxShadow = '0 20px 50px rgba(0, 255, 157, 0.2)';
                    }, 1000);
                }
            }, 3000);
        });
    </script>
@endsection