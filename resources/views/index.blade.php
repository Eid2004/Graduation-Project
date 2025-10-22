@extends('layout.app')

@section('title', 'CyberGuard Pro - Security Dashboard')

@section('content')
{{-- Dashboard content is automatically included via the layout --}}
{{-- This allows for custom content to be added if needed --}}

{{-- Welcome Banner for Homepage --}}
{{-- <div class="mb-6 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 rounded-2xl p-6 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-2">🛡️ CyberGuard Pro</h1>
            <p class="text-blue-100 text-lg">Your comprehensive cybersecurity toolkit</p>
            <p class="text-blue-200 text-sm mt-2">Advanced network analysis, threat detection, and security testing tools</p>
        </div>
        <div class="hidden md:block">
            <div class="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                </svg>
            </div>
        </div>
    </div>
</div> --}}

{{-- Quick Stats Section --}}
{{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-slate-600">Tools Available</p>
                <p class="text-2xl font-bold text-slate-800">15+</p>
            </div>
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l4.83-4.83a3 3 0 0 0-4.24-4.24L7.17 10.93a3 3 0 0 0 4.24 4.24Z" />
                </svg>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-slate-600">Scans Completed</p>
                <p class="text-2xl font-bold text-slate-800" id="total-scans">0</p>
            </div>
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75" />
                </svg>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-slate-600">Threats Detected</p>
                <p class="text-2xl font-bold text-red-600" id="threats-detected">0</p>
            </div>
            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </div>
        </div>
    </div>
</div> --}}
@endsection
{{-- <script src="{{ asset('js/main.js')}}"></script> --}}
{{-- @push('scripts') --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the dashboard
        console.log('CyberGuard Pro Dashboard Loaded');
        
        // Load saved statistics from localStorage
        loadDashboardStats();
        
        // Update statistics periodically
        setInterval(loadDashboardStats, 30000); // Update every 30 seconds
    });
    
    function loadDashboardStats() {
        // Load total scans
        const totalScans = localStorage.getItem('cyberguard_total_scans') || '0';
        document.getElementById('total-scans').textContent = totalScans;
        
        // Load threats detected
        const threatsDetected = localStorage.getItem('cyberguard_threats_detected') || '0';
        document.getElementById('threats-detected').textContent = threatsDetected;
        
        // Load results and update threat count
        const results = JSON.parse(localStorage.getItem('cyberguard_results') || '[]');
        const threatCount = results.filter(r => r.severity === 'threat' || r.severity === 'danger').length;
        document.getElementById('threats-detected').textContent = threatCount;
    }
</script> --}}
{{--@endpush --}}
