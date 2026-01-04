
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/css/admin.css') }}">
    
</head>
<body>
    <!-- Admin Layout -->
    <div class="admin-layout">
        <!-- Top Navigation Bar -->
        <nav class="top-navbar">
            <div class="navbar-left">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="logo">
                    <i class="fas fa-chart-line"></i>
                    <span>NexTradeX Admin</span>
                </div>
            </div>
            
            <div class="navbar-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Search users, transactions...">
                </div>
                
                <button class="nav-icon">
                    <i class="fas fa-bell"></i>
                    <span class="badge">5</span>
                </button>
                
                <button class="nav-icon">
                    <i class="fas fa-flag"></i>
                    <span class="badge">3</span>
                </button>
                
                <div class="admin-profile" id="adminProfile">
                    <div class="avatar">AJ</div>
                    <div class="profile-name">{{ Auth::user()->name }}</div>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>

                  

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                </div>
            </div>
        </nav>
        
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-title">Main Navigation</div>
            </div>
            
            <ul class="sidebar-menu">
                <li class="menu-item">
                    <a href="#" class="menu-link active">
                        <i class="fas fa-tachometer-alt menu-icon"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                @if(auth()->check() && auth()->user()->role === 'admin')
                <li class="menu-item has-submenu">
                    <a href="#" class="menu-link">
                        <i class="fas fa-users menu-icon"></i>
                        <span class="menu-text">Users Management</span>
                        <i class="fas fa-chevron-right menu-arrow"></i>
                    </a>
                    
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="#" class="menu-link">All Users</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="menu-link">Active Users</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="menu-link">Suspended Users</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="menu-link">User Activity</a>
                        </li>
                        
                    </ul>
                </li>
               
                
                <li class="menu-item">
                    <a href="deposits" class="menu-link">
                        <i class="fas fa-money-bill-wave menu-icon"></i>
                        <span class="menu-text">Deposits</span>
                        <span class="badge" style="position: static; margin-left: auto;">12</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="withdrawals" class="menu-link">
                        <i class="fas fa-wallet menu-icon"></i>
                        <span class="menu-text">Withdrawals</span>
                        <span class="badge" style="position: static; margin-left: auto;">8</span>
                    </a>
                </li>
                 <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-coins menu-icon"></i>
                        <span class="menu-text">ETX Coin Management</span>
                    </a>
                </li>
                 @endif
                 
                <!-- <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-exchange-alt menu-icon"></i>
                        <span class="menu-text">Trades</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-coins menu-icon"></i>
                        <span class="menu-text">USDX Coin Management</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-credit-card menu-icon"></i>
                        <span class="menu-text">Wallets</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chart-pie menu-icon"></i>
                        <span class="menu-text">Reports</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-user-check menu-icon"></i>
                        <span class="menu-text">KYC Verification</span>
                        <span class="badge" style="position: static; margin-left: auto;">7</span>
                    </a>
                </li>
                 -->
                @if(auth()->check() && auth()->user()->role === 'user')

                 <li class="menu-item">
                    <a href="{{ route('deposit.create') }}" class="menu-link">
                        <i class="fas fa-money-bill-wave menu-icon"></i>
                        <span class="menu-text">Deposits</span>
                        <span class="badge" style="position: static; margin-left: auto;">12</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="{{ route('withdraw.create') }}" class="menu-link">
                        <i class="fas fa-wallet menu-icon"></i>
                        <span class="menu-text">Withdrawals</span>
                        <span class="badge" style="position: static; margin-left: auto;">8</span>
                    </a>
                </li>
                @endif
                
                <div class="sidebar-header" style="margin-top: 20px;">
                    <div class="sidebar-title">System</div>
                </div>
                @if(auth()->check() && auth()->user()->role === 'admin')
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-cog menu-icon"></i>
                        <span class="menu-text">Settings</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-user-shield menu-icon"></i>
                        <span class="menu-text">Admin Roles</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-clipboard-list menu-icon"></i>
                        <span class="menu-text">System Logs</span>
                    </a>
                </li>
                @endif
                <li  class="menu-item">
                    <a class="menu-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-clipboard-list menu-icon"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </aside>
        <main class="main-content" id="mainContent">
            @yield('content')
        </main>
        </div>
    
    <!-- Transaction Detail Modal -->
    <div class="modal-overlay" id="transactionModal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title">Transaction Details</h3>
                <button class="modal-close" id="closeModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                        <div>
                            <div style="font-size: 12px; color: var(--text-gray);">Transaction ID</div>
                            <div style="font-weight: 600;">TX-20240315-001</div>
                        </div>
                        <div>
                            <span class="status-badge status-approved">Approved</span>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <div style="font-size: 12px; color: var(--text-gray);">User</div>
                            <div style="font-weight: 600;">John Doe</div>
                            <div style="font-size: 13px; color: var(--text-gray);">john@example.com</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-gray);">Amount</div>
                            <div style="font-weight: 600; color: var(--accent-green);">$1,200.00</div>
                            <div style="font-size: 13px; color: var(--text-gray);">USDT</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-gray);">Date</div>
                            <div style="font-weight: 600;">2024-03-15 14:30</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-gray);">Type</div>
                            <div style="font-weight: 600;">Withdrawal</div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 25px;">
                        <div style="font-size: 14px; font-weight: 600; margin-bottom: 10px;">Transaction Notes</div>
                        <div style="background-color: rgba(255, 255, 255, 0.05); padding: 15px; border-radius: 8px; font-size: 14px;">
                            User requested withdrawal to external wallet. Approved after KYC verification and security check.
                        </div>
                    </div>
                </div>
                
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button class="btn btn-approve">
                        <i class="fas fa-check"></i> Approve Transaction
                    </button>
                    <button class="btn btn-reject">
                        <i class="fas fa-times"></i> Reject
                    </button>
                    <button class="btn btn-view" id="closeModalBtn">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>





<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                sidebar.classList.toggle('open');
                
                // For mobile, add overlay to main content when sidebar is open
                if (window.innerWidth < 992) {
                    if (sidebar.classList.contains('open')) {
                        mainContent.style.position = 'fixed';
                        mainContent.style.width = '100%';
                    } else {
                        mainContent.style.position = 'static';
                        mainContent.style.width = 'auto';
                    }
                }
            });
            
            // Close sidebar when clicking outside on mobile
            mainContent.addEventListener('click', function() {
                if (window.innerWidth < 992 && sidebar.classList.contains('open')) {
                    sidebar.classList.remove('open');
                    mainContent.style.position = 'static';
                    mainContent.style.width = 'auto';
                }
            });
            
            // Submenu toggle
            const submenuToggles = document.querySelectorAll('.has-submenu > .menu-link');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    parent.classList.toggle('open');
                });
            });
            
            // Modal functionality
            const transactionModal = document.getElementById('transactionModal');
            const closeModalBtn = document.getElementById('closeModal');
            const closeModalBtn2 = document.getElementById('closeModalBtn');
            const viewButtons = document.querySelectorAll('.btn-view:not(#closeModalBtn)');
            
            // Open modal when clicking view buttons (except the close button in modal)
            viewButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Don't open modal if button is for export or refresh
                    if (this.innerHTML.includes('Export') || this.innerHTML.includes('Refresh')) {
                        return;
                    }
                    e.preventDefault();
                    transactionModal.classList.add('open');
                });
            });
            
            // Close modal
            function closeModal() {
                transactionModal.classList.remove('open');
            }
            
            if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
            if (closeModalBtn2) closeModalBtn2.addEventListener('click', closeModal);
            
            // Close modal when clicking outside
            transactionModal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });
            
            // Admin profile dropdown
            const adminProfile = document.getElementById('adminProfile');
            adminProfile.addEventListener('click', function() {
                // In a real app, this would toggle a dropdown menu
                alert('Profile dropdown would open here with Logout option');
            });
            
            // Animate KPI counters
            // function animateCounter(elementId, targetValue, duration = 1500) {
            //     const element = document.getElementById(elementId);
            //     if (!element) return;
                
            //     const currentValue = parseInt(element.textContent.replace(/[^0-9]/g, ''));
            //     if (isNaN(currentValue)) return;
                
            //     const increment = targetValue / (duration / 16);
            //     let current = 0;
                
            //     const timer = setInterval(() => {
            //         current += increment;
            //         if (current >= targetValue) {
            //             element.textContent = formatNumber(targetValue, elementId);
            //             clearInterval(timer);
            //         } else {
            //             element.textContent = formatNumber(Math.floor(current), elementId);
            //         }
            //     }, 16);
            // }
            
            // function formatNumber(value, elementId) {
            //     if (elementId === 'totalUsers') {
            //         return value.toLocaleString();
            //     } else if (elementId === 'totalDeposits') {
            //         return '$' + (value / 1000000).toFixed(1) + '$';
            //     } else if (elementId === 'totalWithdrawals') {
            //         return '$' + (value / 1000000).toFixed(1) + '$';
            //     } else if (elementId === 'todayVolume') {
            //         return '$' + (value / 1000).toFixed(1) + '$';
            //     }
            //     return value;
            // }
            
            // // Start counter animations after page load
            // setTimeout(() => {
            //     animateCounter('totalUsers', 0);
            //     animateCounter('totalDeposits', 0);
            //     animateCounter('totalWithdrawals', 0);
            //     animateCounter('todayVolume', 0);
            // }, 500);
            
            // Approve/Reject buttons
            const approveButtons = document.querySelectorAll('.btn-approve');
            const rejectButtons = document.querySelectorAll('.btn-reject');
            
            approveButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent modal from opening
                    const row = this.closest('tr');
                    if (row) {
                        const statusCell = row.querySelector('.status-badge');
                        if (statusCell) {
                            statusCell.className = 'status-badge status-approved';
                            statusCell.textContent = 'Approved';
                            
                            // Remove action buttons
                            const actionCell = row.querySelector('td:last-child');
                            if (actionCell) {
                                actionCell.innerHTML = '<button class="btn btn-sm btn-view">Details</button>';
                            }
                        }
                    }
                });
            });
            
            rejectButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent modal from opening
                    const row = this.closest('tr');
                    if (row) {
                        const statusCell = row.querySelector('.status-badge');
                        if (statusCell) {
                            statusCell.className = 'status-badge status-rejected';
                            statusCell.textContent = 'Rejected';
                            
                            // Remove action buttons
                            const actionCell = row.querySelector('td:last-child');
                            if (actionCell) {
                                actionCell.innerHTML = '<button class="btn btn-sm btn-view">Details</button>';
                            }
                        }
                    }
                });
            });
            
            // Search functionality
            const searchInput = document.querySelector('.search-input');
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    const query = this.value.trim();
                    if (query) {
                        alert(`Searching for: ${query}\nIn a real app, this would filter the tables.`);
                    }
                }
            });
            
            // Responsive adjustments
            function handleResize() {
                if (window.innerWidth >= 992) {
                    // Desktop: ensure sidebar is visible
                    sidebar.classList.remove('collapsed');
                    sidebar.classList.remove('open');
                    mainContent.style.position = 'static';
                    mainContent.style.width = 'auto';
                } else {
                    // Mobile: ensure sidebar is hidden by default
                    sidebar.classList.add('collapsed');
                }
            }
            
            window.addEventListener('resize', handleResize);
            handleResize(); // Initial check
        });
    </script>
</html>