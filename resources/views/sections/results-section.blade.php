{{-- Results Section --}}
<div class="mt-6">
    {{-- Modern Results Section --}}
    <div class="bg-white border border-slate-200 rounded-2xl flex-grow flex flex-col overflow-hidden shadow-lg">
        {{-- Enhanced Header with Controls --}}
        <div class="p-6 border-b border-slate-200 bg-gradient-to-r from-slate-50 via-blue-50 to-indigo-50">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-600 rounded-2xl flex items-center justify-center shadow-xl">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">Analysis Results</h3>
                        <p class="text-sm text-slate-500 font-medium">Real-time security analysis and threat intelligence</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div id="results-stats" class="flex items-center gap-4 text-sm">
                        <div class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border-2 border-green-200 shadow-lg">
                            <div class="w-4 h-4 bg-green-500 rounded-full shadow-sm"></div>
                            <span class="text-green-700 font-bold text-base">Safe: <span id="safe-count" class="text-green-800">0</span></span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border-2 border-orange-200 shadow-lg">
                            <div class="w-4 h-4 bg-orange-500 rounded-full shadow-sm"></div>
                            <span class="text-orange-700 font-bold text-base">Warning: <span id="warning-count" class="text-orange-800">0</span></span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border-2 border-red-200 shadow-lg">
                            <div class="w-4 h-4 bg-red-500 rounded-full shadow-sm"></div>
                            <span class="text-red-700 font-bold text-base">Threat: <span id="threat-count" class="text-red-800">0</span></span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Advanced Controls --}}
            <div class="flex flex-wrap items-center gap-4">
                {{-- Search and Filter --}}
                <div class="flex items-center gap-3 flex-1 min-w-64">
                    <div class="relative flex-1">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <input type="text" id="results-search" placeholder="Search results..." class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm bg-white shadow-sm transition-all">
                    </div>
                    <select id="results-filter" class="px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm bg-white shadow-sm transition-all min-w-32">
                        <option value="all">All Results</option>
                        <option value="safe">🛡️ Safe</option>
                        <option value="warning">⚠️ Warning</option>
                        <option value="threat">🚨 Threat</option>
                        <option value="system">⚙️ System</option>
                    </select>
                    <button id="clear-results-btn" class="px-4 py-3 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-xl text-sm font-semibold transition-all flex items-center gap-2 shadow-lg hover:shadow-xl">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 3L10 3m4.788 3L10 3m0 0L5.5 3m4.5 0L5.5 3" />
                        </svg>
                        Clear
                    </button>
                </div>
                
                {{-- View Toggle --}}
                <div class="flex items-center bg-slate-100 rounded-xl p-1 shadow-lg border border-slate-200">
                    <button id="list-view-btn" class="px-5 py-3 rounded-lg text-sm font-bold bg-blue-600 text-white shadow-lg transition-all flex items-center gap-2 border-2 border-blue-600">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h7.5m-7.5 3h7.5m-7.5 3h7.5m-7.5 3h7.5" />
                        </svg>
                        List
                    </button>
                    <button id="grid-view-btn" class="px-5 py-3 rounded-lg text-sm font-bold text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-all flex items-center gap-2 border-2 border-transparent hover:border-blue-200">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5m0 0V5.625m0 0h7.5c.621 0 1.125.504 1.125 1.125v1.5m-9.75 0h7.5m-7.5 0V5.625m0 0h7.5m-7.5 0v1.5m7.5-1.5v1.5m0 0h7.5m-7.5 0V5.625m0 0h7.5m-7.5 0v1.5m7.5-1.5v1.5" />
                        </svg>
                        Grid
                    </button>
                </div>
            </div>
        </div>
        
        {{-- Results Container --}}
        <div class="flex-1 overflow-y-auto">
            <div id="results-container" class="p-6 space-y-4 min-h-[300px]">
                {{-- Empty State --}}
                <div id="empty-results" class="flex flex-col items-center justify-center py-12 text-center">
                    <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-800 mb-2">No Analysis Results Yet</h3>
                    <p class="text-slate-600 mb-4">Start by running security analysis tools to see results here</p>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm font-medium transition-colors">
                            Run Network Scan
                        </button>
                        <button class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-sm font-medium transition-colors">
                            View Documentation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
