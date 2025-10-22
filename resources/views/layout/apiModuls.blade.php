<!-- API Keys Modal -->
<div id="api-keys-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div
        class="api-keys-modal-content bg-white rounded-2xl shadow-2xl max-w-6xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-3">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                    </div>
                    API Key Configuration
                </h3>
                <button id="api-keys-close"
                    class="text-slate-400 hover:text-slate-600 transition-colors p-1 rounded-lg hover:bg-slate-200">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                <!-- VirusTotal API Key -->
                <div class="api-key-card bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-800">VirusTotal</h4>
                            <p class="text-sm text-slate-500">Required for threat intelligence</p>
                        </div>
                    </div>
                    <input type="password" id="vt-api-key"
                        class="api-key-input w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-sm focus:ring-2 focus:ring-red-500 focus:border-red-500"
                        placeholder="Enter VirusTotal API key...">
                    <button id="save-vt-key-btn"
                        class="api-save-btn mt-3 w-full bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold py-2.5 px-4 rounded-lg text-sm shadow-lg">Save
                        Key</button>
                </div>

                <!-- AbuseIPDB API Key -->
                <div class="api-key-card bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-800">AbuseIPDB</h4>
                            <p class="text-sm text-slate-500">Optional for IP reputation</p>
                        </div>
                    </div>
                    <input type="password" id="abuse-api-key"
                        class="api-key-input w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-sm focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                        placeholder="Enter AbuseIPDB API key...">
                    <button id="save-abuse-key-btn"
                        class="api-save-btn mt-3 w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-2.5 px-4 rounded-lg text-sm shadow-lg">Save
                        Key</button>
                </div>

                <!-- WhoisXML API Key -->
                <div class="api-key-card bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-800">WhoisXML</h4>
                            <p class="text-sm text-slate-500">Required for domain intelligence</p>
                        </div>
                    </div>
                    <input type="password" id="whois-api-key"
                        class="api-key-input w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        placeholder="Enter WhoisXML API key...">
                    <button id="save-whois-key-btn"
                        class="api-save-btn mt-3 w-full bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white font-semibold py-2.5 px-4 rounded-lg text-sm shadow-lg">Save
                        Key</button>
                </div>

                <!-- Shodan API Key -->
                <div class="api-key-card bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-800">Shodan</h4>
                            <p class="text-sm text-slate-500">Required for network intelligence</p>
                        </div>
                    </div>
                    <input type="password" id="shodan-api-key"
                        class="api-key-input w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                        placeholder="Enter Shodan API key...">
                    <button id="save-shodan-key-btn"
                        class="api-save-btn mt-3 w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-2.5 px-4 rounded-lg text-sm shadow-lg">Save
                        Key</button>
                </div>
            </div>

            <!-- Security Actions -->
            <div class="mt-6 flex justify-between items-center">
                <button id="clear-all-keys-btn"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg text-sm transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 3L10 3m4.788 3L10 3m0 0L5.5 3m4.5 0L5.5 3" />
                    </svg>
                    Clear All Keys
                </button>
                <div class="text-xs text-slate-500">
                    🔒 Keys are encrypted in storage
                </div>
            </div>

            <div class="mt-6 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl">
                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-blue-800 mb-1">Get Your API Keys</h4>
                        <p class="text-sm text-blue-700 mb-2">Access these trusted security services to get
                            your API keys:</p>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://www.virustotal.com/gui/my-apikey" target="_blank"
                                class="inline-flex items-center gap-1 text-sm bg-red-100 hover:bg-red-200 text-red-700 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>
                                VirusTotal
                            </a>
                            <a href="https://www.abuseipdb.com/api" target="_blank"
                                class="inline-flex items-center gap-1 text-sm bg-amber-100 hover:bg-amber-200 text-amber-700 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>
                                AbuseIPDB
                            </a>
                            <a href="https://whoisxmlapi.com/api" target="_blank"
                                class="inline-flex items-center gap-1 text-sm bg-emerald-100 hover:bg-emerald-200 text-emerald-700 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                </svg>
                                WhoisXML
                            </a>
                            <a href="https://account.shodan.io/" target="_blank"
                                class="inline-flex items-center gap-1 text-sm bg-purple-100 hover:bg-purple-200 text-purple-700 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                </svg>
                                Shodan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
