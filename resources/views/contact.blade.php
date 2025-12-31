@extends('layouts.web')

@section('content')
 <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="fade-in">Get in Touch with Zimvex</h1>
            <p class="fade-in">Our support team is available 24/7 to assist with any questions about trading, accounts, or technical issues. Fast, secure, and professional assistance.</p>
            
            <div class="stats-bar fade-in" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; margin-top: 60px;">
                <div class="stat-item">
                    <div class="stat-number" style="font-size: 42px; font-weight: 700; background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 5px;">24/7</div>
                    <div class="stat-label" style="color: #E0E0E0; font-size: 16px;">Support Availability</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="font-size: 42px; font-weight: 700; background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 5px;">&lt;5 min</div>
                    <div class="stat-label" style="color: #E0E0E0; font-size: 16px;">Avg Response Time</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="font-size: 42px; font-weight: 700; background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 5px;">98%</div>
                    <div class="stat-label" style="color: #E0E0E0; font-size: 16px;">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Contact <span>Methods</span></h2>
            <div class="contact-methods">
                <div class="contact-card fade-in">
                    <div class="contact-icon">
                        <i class="fas fa-envelope" style="color: #00F7FF; position: relative; z-index: 2;"></i>
                    </div>
                    <h3>Email Support</h3>
                    <div class="contact-info">support@Zimvex.com</div>
                    <p class="contact-desc">For account assistance, technical issues, and general inquiries. Average response time: 2 hours.</p>
                </div>
                
                <div class="contact-card fade-in">
                    <div class="contact-icon">
                        <i class="fas fa-comment-dots" style="color: #00FF9D; position: relative; z-index: 2;"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <div class="contact-info">Available 24/7</div>
                    <p class="contact-desc">Instant assistance for urgent matters. Click the chat icon in the bottom right corner of any page.</p>
                </div>
                
                <div class="contact-card fade-in">
                    <div class="contact-icon">
                        <i class="fas fa-phone" style="color: #00F7FF; position: relative; z-index: 2;"></i>
                    </div>
                    <h3>Phone Support</h3>
                    <div class="contact-info">+1 (888) 555-TRADE</div>
                    <p class="contact-desc">Global hotline available 24/7 for urgent account and trading assistance.</p>
                </div>
                
                <div class="contact-card fade-in">
                    <div class="contact-icon">
                        <i class="fas fa-handshake" style="color: #00FF9D; position: relative; z-index: 2;"></i>
                    </div>
                    <h3>Business Inquiries</h3>
                    <div class="contact-info">partnerships@Zimvex.com</div>
                    <p class="contact-desc">For institutional partnerships, API integration, and enterprise solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="section">
        <div class="container">
            <div class="contact-form-section">
                <div class="form-side fade-in">
                    <h3>Send us a <span style="background: linear-gradient(90deg, #00F7FF, #00FF9D); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Message</span></h3>
                    <p>Our team typically responds within 2 hours during business hours. For urgent matters, please use our live chat or phone support.</p>
                    <p>Before contacting us, you might find answers in our <a href="#" style="color: #00F7FF; text-decoration: none;">Help Center</a> or <a href="#" style="color: #00F7FF; text-decoration: none;">FAQ section</a> below.</p>
                    
                    <div style="margin-top: 40px;">
                        <h4 style="margin-bottom: 15px;">Office Hours</h4>
                        <p style="color: var(--text-gray); font-size: 15px; margin-bottom: 5px;"><strong>Support:</strong> 24/7</p>
                        <p style="color: var(--text-gray); font-size: 15px; margin-bottom: 5px;"><strong>Business Inquiries:</strong> Mon-Fri, 9AM-6PM EST</p>
                        <p style="color: var(--text-gray); font-size: 15px;"><strong>Emergency:</strong> Always available for urgent account issues</p>
                    </div>
                </div>
                
                <div class="form-container fade-in">
                    <form id="contactForm">
                        <div class="form-group">
                            <label class="form-label" for="fullName">Full Name *</label>
                            <input type="text" id="fullName" class="form-control" placeholder="Enter your full name">
                            <div class="error-message" id="nameError">Please enter your full name</div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address *</label>
                            <input type="email" id="email" class="form-control" placeholder="your.email@example.com">
                            <div class="error-message" id="emailError">Please enter a valid email address</div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="subject">Subject *</label>
                            <select id="subject" class="form-control">
                                <option value="" disabled selected>Select a subject</option>
                                <option value="account">Account Support</option>
                                <option value="deposit">Deposit & Withdrawal</option>
                                <option value="trading">Trading Issues</option>
                                <option value="technical">Technical Support</option>
                                <option value="security">Security & Verification</option>
                                <option value="partnership">Business Partnership</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                            <div class="error-message" id="subjectError">Please select a subject</div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message">Message *</label>
                            <textarea id="message" class="form-control" placeholder="Please provide details about your inquiry..."></textarea>
                            <div class="error-message" id="messageError">Please enter your message</div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 16px;">Send Message</button>
                        
                        <div class="success-message" id="successMessage">
                            <i class="fas fa-check-circle" style="color: #00FF9D; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                            <h4>Message Sent Successfully!</h4>
                            <p>Thank you for contacting Zimvex. Our support team will respond within 2 hours.</p>
                        </div>
                        
                        <div class="form-footer">
                            <div class="spam-notice">
                                <i class="fas fa-shield-alt"></i>
                                <span>We use advanced spam protection. Your data is secure and encrypted.</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Presence -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Global <span>Presence</span></h2>
            <div class="global-presence">
                <div class="map-container fade-in">
                    <!-- Simplified world map representation -->
                    <div class="world-map">
                        <div style="position: relative; width: 100%; height: 300px; background: rgba(10, 25, 40, 0.5); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <div style="font-size: 18px; color: #999; text-align: center;">
                                <i class="fas fa-globe-americas" style="font-size: 60px; margin-bottom: 20px; display: block; color: rgba(0, 247, 255, 0.3);"></i>
                                Global Support Network
                            </div>
                        </div>
                    </div>
                    
                    <!-- Map Pins -->
                    <div class="map-pin pin-1">
                        <div class="pin-label">New York, USA</div>
                    </div>
                    <div class="map-pin pin-2">
                        <div class="pin-label">London, UK</div>
                    </div>
                    <div class="map-pin pin-3">
                        <div class="pin-label">Singapore</div>
                    </div>
                    <div class="map-pin pin-4">
                        <div class="pin-label">Sydney, Australia</div>
                    </div>
                    <div class="map-pin pin-5">
                        <div class="pin-label">Dubai, UAE</div>
                    </div>
                </div>
                
                <div class="office-list fade-in">
                    <div class="office-item">
                        <div class="office-name">Headquarters</div>
                        <div class="office-location">New York, USA</div>
                        <div style="font-size: 13px; color: #999; margin-top: 5px;">+1 (888) 555-TRADE</div>
                    </div>
                    <div class="office-item">
                        <div class="office-name">European Office</div>
                        <div class="office-location">London, United Kingdom</div>
                        <div style="font-size: 13px; color: #999; margin-top: 5px;">+44 20 7946 0958</div>
                    </div>
                    <div class="office-item">
                        <div class="office-name">Asia-Pacific Office</div>
                        <div class="office-location">Singapore</div>
                        <div style="font-size: 13px; color: #999; margin-top: 5px;">+65 6011 9999</div>
                    </div>
                    <div class="office-item">
                        <div class="office-name">Australia Office</div>
                        <div class="office-location">Sydney, Australia</div>
                        <div style="font-size: 13px; color: #999; margin-top: 5px;">+61 2 8039 5000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
            <div class="faq-section">
                <div class="faq-container fade-in">
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do I verify my trading account?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Account verification typically takes 1-2 business days. You'll need to provide a government-issued ID and proof of address. You can start the verification process in your account settings under "Verification".</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What are the deposit and withdrawal processing times?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Deposits are usually instant for crypto and within 1-3 business days for bank transfers. Withdrawals take 1-5 business days depending on the method. Crypto withdrawals are typically processed within 24 hours.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How secure is my funds and personal information?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We use bank-grade AES-256 encryption, multi-signature wallets, and store 95% of digital assets in offline cold storage. Our platform is SOC 2 Type II certified and complies with global security standards.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What should I do if I experience trading issues?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>For immediate trading issues, contact our 24/7 support via live chat or phone. Provide your order ID and a screenshot if possible. Most technical issues are resolved within 15 minutes.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you offer API access for automated trading?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer REST and WebSocket APIs for automated trading. API access is available on Pro Trader and higher plans. Documentation and sandbox environment are available in our Developer Portal.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-link fade-in">
                    <p style="color: var(--text-gray); margin-top: 30px;">Can't find what you're looking for? Visit our <a href="#" style="color: #00F7FF; text-decoration: none; font-weight: 500;">Full Help Center</a> for more resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section fade-in">
            <h2>Need Immediate Assistance?</h2>
            <p>Our 24/7 support team is ready to help with urgent account issues, trading problems, or security concerns.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" id="startChatBtn" style="padding: 16px 40px; font-size: 18px;">
                    <i class="fas fa-comment-dots" style="margin-right: 8px;"></i> Start Live Chat
                </button>
                <button class="btn btn-secondary" style="padding: 16px 40px; font-size: 18px;">
                    <i class="fas fa-ticket-alt" style="margin-right: 8px;"></i> Open Support Ticket
                </button>
            </div>
            <div style="margin-top: 30px; color: #999; font-size: 14px;">
                <p><i class="fas fa-clock" style="color: #00FF9D; margin-right: 5px;"></i> Current estimated wait time: <strong style="color: white;">Less than 2 minutes</strong></p>
            </div>
        </div>
    </section>

@endsection
@section('script')
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const contactForm = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Reset previous errors
                const errorMessages = document.querySelectorAll('.error-message');
                errorMessages.forEach(msg => {
                    msg.classList.remove('show');
                });
                
                const inputs = document.querySelectorAll('.form-control');
                inputs.forEach(input => {
                    input.classList.remove('error');
                });
                
                // Validate form
                let isValid = true;
                const fullName = document.getElementById('fullName');
                const email = document.getElementById('email');
                const subject = document.getElementById('subject');
                const message = document.getElementById('message');
                
                // Name validation
                if (!fullName.value.trim()) {
                    document.getElementById('nameError').classList.add('show');
                    fullName.classList.add('error');
                    isValid = false;
                }
                
                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.value.trim() || !emailRegex.test(email.value)) {
                    document.getElementById('emailError').classList.add('show');
                    email.classList.add('error');
                    isValid = false;
                }
                
                // Subject validation
                if (!subject.value) {
                    document.getElementById('subjectError').classList.add('show');
                    subject.classList.add('error');
                    isValid = false;
                }
                
                // Message validation
                if (!message.value.trim() || message.value.trim().length < 10) {
                    document.getElementById('messageError').textContent = 'Please enter a message with at least 10 characters';
                    document.getElementById('messageError').classList.add('show');
                    message.classList.add('error');
                    isValid = false;
                }
                
                if (isValid) {
                    // Simulate form submission
                    successMessage.classList.add('show');
                    
                    // Reset form after 5 seconds
                    setTimeout(() => {
                        contactForm.reset();
                        successMessage.classList.remove('show');
                    }, 5000);
                }
            });
            
            // FAQ accordion functionality
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const faqItem = this.parentElement;
                    faqItem.classList.toggle('active');
                });
            });
            
            // Live chat button functionality
            const liveChatBtn = document.getElementById('liveChatBtn');
            const startChatBtn = document.getElementById('startChatBtn');
            
            function simulateLiveChat() {
                const chatWindow = document.createElement('div');
                chatWindow.innerHTML = `
                    <div style="position: fixed; bottom: 100px; right: 30px; width: 350px; height: 450px; background: rgba(30, 45, 65, 0.95); border-radius: 12px; backdrop-filter: blur(10px); border: 1px solid rgba(0, 247, 255, 0.2); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); z-index: 1000; display: flex; flex-direction: column; overflow: hidden;">
                        <div style="background: linear-gradient(90deg, #1A3951, #134061); padding: 20px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <h4 style="margin: 0; font-size: 18px;">Zimvex Live Chat</h4>
                                    <p style="margin: 5px 0 0; font-size: 12px; color: #00F7FF;">Connecting to support agent...</p>
                                </div>
                                <button id="closeChat" style="background: none; border: none; color: white; cursor: pointer; font-size: 20px;">×</button>
                            </div>
                        </div>
                        <div style="flex: 1; padding: 20px; overflow-y: auto; display: flex; flex-direction: column; gap: 15px;">
                            <div style="background: rgba(0, 247, 255, 0.1); padding: 12px; border-radius: 12px; max-width: 80%; align-self: flex-start; border: 1px solid rgba(0, 247, 255, 0.2);">
                                <div style="font-size: 12px; color: #00F7FF; margin-bottom: 5px;">Support Bot</div>
                                <div>Hello! You're connected to Zimvex Support. An agent will be with you shortly. How can we help you today?</div>
                            </div>
                            <div style="font-size: 12px; color: #999; text-align: center; margin: 10px 0;">Agent connected • Average wait time: 1 min</div>
                        </div>
                        <div style="padding: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; gap: 10px;">
                                <input type="text" placeholder="Type your message..." style="flex: 1; padding: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 8px; color: white; font-family: 'Inter', sans-serif;">
                                <button style="background: linear-gradient(90deg, #00F7FF, #00FF9D); border: none; border-radius: 8px; padding: 0 20px; color: #1A3951; font-weight: 600; cursor: pointer;">Send</button>
                            </div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(chatWindow);
                
                // Add close functionality
                const closeBtn = chatWindow.querySelector('#closeChat');
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(chatWindow);
                });
            }
            
            liveChatBtn.addEventListener('click', simulateLiveChat);
            startChatBtn.addEventListener('click', simulateLiveChat);
            
            // Map pin hover effects
            const mapPins = document.querySelectorAll('.map-pin');
            mapPins.forEach(pin => {
                pin.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.3)';
                });
                
                pin.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
            
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
            
            // Contact card hover effects
            const contactCards = document.querySelectorAll('.contact-card');
            contactCards.forEach(card => {
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
            
            // Animate live chat button
            setInterval(() => {
                liveChatBtn.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    liveChatBtn.style.transform = 'scale(1)';
                }, 500);
            }, 3000);
            
            // Add pulse animation
            const styleSheet = document.styleSheets[0];
            styleSheet.insertRule(`
                @keyframes pulse {
                    0%, 100% { opacity: 0.3; transform: scale(1); }
                    50% { opacity: 0.6; transform: scale(1.1); }
                }
            `, styleSheet.cssRules.length);
        });
    </script>
@endsection