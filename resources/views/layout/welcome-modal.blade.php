{{-- Welcome Popup Modal --}}
<div id="welcome-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="welcome-popup">
        <div class="welcome-card bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-8 max-w-md mx-4 text-center border-2 border-blue-500">
            <div class="welcome-icon mb-6">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.396 0-6.648-1.355-9.06-3.77z" />
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-slate-800 dark:text-white mb-4">
                🛡️ CyberGuard Pro
            </h2>
            <p class="text-lg text-slate-600 dark:text-slate-300 mb-6">
                Your comprehensive cybersecurity toolkit is ready!
            </p>
            <div class="space-y-2 text-sm text-slate-500 dark:text-slate-400 mb-6">
                <p>🔍 Advanced port scanning & network analysis</p>
                <p>🦠 VirusTotal integration for threat detection</p>
                <p>🌐 DNS & SSL/TLS security testing</p>
                <p>📊 Real-time vulnerability assessment</p>
            </div>
            <button id="welcome-close-btn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                Start Scanning 🚀
            </button>
        </div>
    </div>
</div>
