@extends('layouts.app')

@section('title', 'Dashboard Overview')
@section('page-title', 'Dashboard Overview')
@section('page-subtitle', 'Welcome back, {{ Auth::user()->name }}. Here\'s what\'s happening with your platform today.')

@section('page-header-actions')
    <button class="btn btn-view">
        <i class="fas fa-download"></i> Export Report
    </button>
@endsection

@section('content')
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
                    <a href="#" class="menu-link">
                        <i class="fas fa-money-bill-wave menu-icon"></i>
                        <span class="menu-text">Deposits</span>
                        <span class="badge" style="position: static; margin-left: auto;">12</span>
                    </a>
                </li>
                
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-wallet menu-icon"></i>
                        <span class="menu-text">Withdrawals</span>
                        <span class="badge" style="position: static; margin-left: auto;">8</span>
                    </a>
                </li>
                
                <li class="menu-item">
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
                
                <div class="sidebar-header" style="margin-top: 20px;">
                    <div class="sidebar-title">System</div>
                </div>
                
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
            </ul>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content" id="mainContent">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Dashboard Overview</h1>
                    <p class="page-subtitle">Welcome back, Admin. Here's what's happening with your platform today.</p>
                </div>
                <div>
                    <button class="btn btn-view">
                        <i class="fas fa-download"></i> Export Report
                    </button>
                </div>
            </div>
            
            <!-- KPI Cards -->
            <div class="kpi-grid">
                <div class="kpi-card">
                    <div class="kpi-header">
                        <div class="kpi-icon users">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="kpi-trend trend-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>12.5%</span>
                        </div>
                    </div>
                    <div class="kpi-value count-animation" id="totalUsers">15,842</div>
                    <div class="kpi-label">Total Users</div>
                </div>
                
                <div class="kpi-card">
                    <div class="kpi-header">
                        <div class="kpi-icon deposits">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="kpi-trend trend-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>8.3%</span>
                        </div>
                    </div>
                    <div class="kpi-value count-animation" id="totalDeposits">$4.2M</div>
                    <div class="kpi-label">Total Deposits</div>
                </div>
                
                <div class="kpi-card">
                    <div class="kpi-header">
                        <div class="kpi-icon withdrawals">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="kpi-trend trend-down">
                            <i class="fas fa-arrow-down"></i>
                            <span>3.1%</span>
                        </div>
                    </div>
                    <div class="kpi-value count-animation" id="totalWithdrawals">$1.8M</div>
                    <div class="kpi-label">Total Withdrawals</div>
                </div>
                
                <div class="kpi-card">
                    <div class="kpi-header">
                        <div class="kpi-icon volume">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="kpi-trend trend-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>5.7%</span>
                        </div>
                    </div>
                    <div class="kpi-value count-animation" id="todayVolume">$42.5K</div>
                    <div class="kpi-label">Today's Volume</div>
                </div>
            </div>
            
            <!-- Charts Section -->
            <div class="charts-section">
                <div class="section-header">
                    <h2 class="section-title">Platform Analytics</h2>
                    <div>
                        <button class="btn btn-sm btn-view">
                            <i class="fas fa-calendar-alt"></i> Last 30 Days
                        </button>
                    </div>
                </div>
                
                <div class="charts-grid">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Deposits vs Withdrawals</h3>
                            <div class="kpi-trend trend-up">
                                <i class="fas fa-arrow-up"></i>
                                <span>14.2%</span>
                            </div>
                        </div>
                        <div class="chart-container">
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-line" style="font-size: 40px; margin-right: 15px;"></i>
                                Line Chart: Daily deposits vs withdrawals
                            </div>
                        </div>
                    </div>
                    
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">User Registrations</h3>
                            <div class="kpi-trend trend-up">
                                <i class="fas fa-arrow-up"></i>
                                <span>22.5%</span>
                            </div>
                        </div>
                        <div class="chart-container">
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-bar" style="font-size: 40px; margin-right: 15px;"></i>
                                Bar Chart: Monthly user registrations
                            </div>
                        </div>
                    </div>
                    
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Asset Distribution</h3>
                        </div>
                        <div class="chart-container">
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-pie" style="font-size: 40px; margin-right: 15px;"></i>
                                Pie Chart: USDX, BTC, ETH, USDT holdings
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tables Section -->
            <div class="tables-section">
                <div class="section-header">
                    <h2 class="section-title">Recent Activity</h2>
                    <div>
                        <button class="btn btn-sm btn-view">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
                
                <div class="tables-grid">
                    <!-- Recent Users Table -->
                    <div class="table-card">
                        <h3 style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">Recent Users</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Joined</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">JD</div>
                                                <div>
                                                    <div style="font-weight: 500;">John Doe</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">john@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2024-03-15</td>
                                        <td><span class="status-badge status-approved">Verified</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">AS</div>
                                                <div>
                                                    <div style="font-weight: 500;">Alice Smith</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">alice@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2024-03-14</td>
                                        <td><span class="status-badge status-pending">Pending KYC</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">Review</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">RJ</div>
                                                <div>
                                                    <div style="font-weight: 500;">Robert Johnson</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">robert@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2024-03-13</td>
                                        <td><span class="status-badge status-approved">Verified</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Latest Deposits Table -->
                    <div class="table-card">
                        <h3 style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">Latest Deposits</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">JD</div>
                                                <div>
                                                    <div style="font-weight: 500;">John Doe</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">BTC Deposit</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.5 BTC</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">AS</div>
                                                <div>
                                                    <div style="font-weight: 500;">Alice Smith</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">USDX Deposit</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$5,000</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn btn-sm btn-approve">Approve</button>
                                                <button class="btn btn-sm btn-reject">Reject</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">RJ</div>
                                                <div>
                                                    <div style="font-weight: 500;">Robert Johnson</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">ETH Deposit</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2.5 ETH</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">Details</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Latest Withdrawals Table -->
                    <div class="table-card">
                        <h3 style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">Latest Withdrawals</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">JD</div>
                                                <div>
                                                    <div style="font-weight: 500;">John Doe</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">USDT Withdrawal</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$1,200</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn btn-sm btn-approve">Approve</button>
                                                <button class="btn btn-sm btn-reject">Reject</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">AS</div>
                                                <div>
                                                    <div style="font-weight: 500;">Alice Smith</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">BTC Withdrawal</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.1 BTC</td>
                                        <td><span class="status-badge status-approved">Approved</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="user-avatar">RJ</div>
                                                <div>
                                                    <div style="font-weight: 500;">Robert Johnson</div>
                                                    <div style="font-size: 12px; color: var(--text-gray);">USDX Withdrawal</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$3,500</td>
                                        <td><span class="status-badge status-rejected">Rejected</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-view">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection

@section('scripts')
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
            function animateCounter(elementId, targetValue, duration = 1500) {
                const element = document.getElementById(elementId);
                if (!element) return;
                
                const currentValue = parseInt(element.textContent.replace(/[^0-9]/g, ''));
                if (isNaN(currentValue)) return;
                
                const increment = targetValue / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= targetValue) {
                        element.textContent = formatNumber(targetValue, elementId);
                        clearInterval(timer);
                    } else {
                        element.textContent = formatNumber(Math.floor(current), elementId);
                    }
                }, 16);
            }
            
            function formatNumber(value, elementId) {
                if (elementId === 'totalUsers') {
                    return value.toLocaleString();
                } else if (elementId === 'totalDeposits') {
                    return '$' + (value / 1000000).toFixed(1) + 'M';
                } else if (elementId === 'totalWithdrawals') {
                    return '$' + (value / 1000000).toFixed(1) + 'M';
                } else if (elementId === 'todayVolume') {
                    return '$' + (value / 1000).toFixed(1) + 'K';
                }
                return value;
            }
            
            // Start counter animations after page load
            setTimeout(() => {
                animateCounter('totalUsers', 15842);
                animateCounter('totalDeposits', 4200000);
                animateCounter('totalWithdrawals', 1800000);
                animateCounter('todayVolume', 42500);
            }, 500);
            
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
@endsection