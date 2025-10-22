{{-- Web Security Tab Content --}}
<div id="web-security" class="tab-pane hidden space-y-6">
    {{-- Web Target Configuration --}}
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-blue-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3s-4.5 4.03-4.5 9 2.015 9 4.5 9Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3l1.5 1.5" />
            </svg>
            Web Target Configuration
        </h3>
        <label for="target-url" class="block text-sm font-medium mb-1 text-slate-700">Website URL</label>
        <input type="url" id="target-url"
            class="w-full bg-slate-100 border border-slate-200 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500 transition"
            placeholder="https://example.com">
    </div>

    {{-- Security Analysis Tools --}}
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-blue-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
            </svg>
            Security Analysis Tools
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
            <button id="phishing-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                URL Phishing Analyzer
            </button>
            
            <button id="xss-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>
                XSS Test
            </button>
            
            <button id="ssl-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
                SSL/TLS Check
            </button>
            
            <button id="dns-spoof-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                DNS Spoofing
            </button>

            <button id="web-enumeration-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                <a href="">Web Enumeration</a>
            </button>
        </div>
    </div>

    {{-- VirusTotal Intelligence --}}
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-red-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>
            VirusTotal Intelligence
        </h3>
        <div class="space-y-4">
            <div>
                <label for="vt-hash-input" class="block text-sm font-medium mb-1 text-slate-700">File Hash (SHA256/MD5)</label>
                <input type="text" id="vt-hash-input"
                    class="w-full bg-slate-100 border border-slate-200 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="Enter file hash...">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1 text-slate-700">File for Scanning</label>
                <input type="file" id="vt-file-input"
                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-500 file:text-white hover:file:bg-blue-600 cursor-pointer transition">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                <button id="vt-url-btn" data-auth-required
                    class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 disabled:opacity-50 disabled:cursor-not-allowed">
                    Scan URL
                </button>
                <button id="vt-hash-btn" data-auth-required
                    class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 disabled:opacity-50 disabled:cursor-not-allowed">
                    Check Hash
                </button>
                <button id="vt-file-btn" data-auth-required
                    class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 disabled:opacity-50 disabled:cursor-not-allowed">
                    Scan File
                </button>
            </div>
        </div>
    </div>
</div>
