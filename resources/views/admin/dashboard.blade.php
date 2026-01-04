@extends('layouts.app')

@section('content')
        
        <!-- Main Content -->
       
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
                    <div class="kpi-value count-animation" id="totalUsers">{{$users}}</div>
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
                    <div class="kpi-value count-animation" id="totalDeposits"><a href="deposits">{{$totalDeposits}}</a></div>
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
                    <div class="kpi-value count-animation" id="totalWithdrawals"><a href="withdrawals">{{$totalWithdrawals}}</a></div>
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
                    <div class="kpi-value count-animation" id="todayVolume">{{$totalBalance}}</div>
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
@endsection
    