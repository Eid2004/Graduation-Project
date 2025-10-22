{{-- Hash Tools Tab Content --}}
<div id="hash-tools" class="tab-pane hidden space-y-6">
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-blue-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
            Hash & Cryptography Tools
        </h3>
        <div class="space-y-4">
            {{-- Text to Hash --}}
            <div>
                <label for="hash-string-input" class="block text-sm font-medium mb-1 text-slate-700">Text to Hash</label>
                <input type="text" id="hash-string-input"
                    class="w-full bg-slate-100 border border-slate-200 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="Enter text...">
                <button id="hash-string-btn" data-auth-required
                    class="mt-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                    Generate Hashes
                </button>
            </div>
            
            <div class="border-t border-slate-200 my-4"></div>
            
            {{-- File to Hash --}}
            <div>
                <label class="block text-sm font-medium mb-2 text-slate-700">File to Hash</label>
                <input type="file" id="hash-file-input"
                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-500 file:text-white hover:file:bg-blue-600 cursor-pointer transition">
            </div>
            
            <div class="border-t border-slate-200 my-4"></div>
            
            {{-- Password Strength Analyzer --}}
            <div>
                <label for="pw-input" class="block text-sm font-medium mb-1 text-slate-700">Password Strength Analyzer</label>
                <div class="flex gap-2">
                    <input type="password" id="pw-input"
                        class="flex-1 bg-slate-100 border border-slate-200 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500 transition"
                        placeholder="Enter password...">
                    <button type="button" id="pw-toggle"
                        class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold px-3 rounded-lg text-sm flex items-center gap-1">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Show
                    </button>
                </div>
                <button id="pw-analyze-btn" data-auth-required
                    class="mt-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                    Analyze Password
                </button>
                <p class="text-xs text-slate-500 mt-1"></p>
            </div>
        </div>
    </div>
</div>
