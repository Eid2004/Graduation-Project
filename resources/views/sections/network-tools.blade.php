{{-- Network Tools Tab Content --}}
<div id="network-tools" class="tab-pane active space-y-6">
    {{-- Target Configuration --}}
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-blue-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            Target Configuration
        </h3>
        <div>
            <label for="target-ip" class="block text-sm font-medium mb-1 text-slate-700">
                Target IP/Domain
            </label>
            <input type="text" id="target-ip"
                class="w-full bg-slate-100 border border-slate-200 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500 transition"
                placeholder="8.8.8.8"
                pattern="^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$|^[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?(\.[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?)*$"
                title="Enter a valid IP address (e.g., 8.8.8.8) or domain name (e.g., google.com)">
        </div>
    </div>

    {{-- Network Analysis Tools --}}
    <div class="bg-white p-5 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
        <h3 class="text-md font-semibold text-blue-500 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655-4.653a2.548 2.548 0 0 1-.766-1.205l-.33-1.242a2.548 2.548 0 0 1 .514-2.049l.927-.927A2.548 2.548 0 0 1 9.157 4.5l1.242.33c.433.113.828.342 1.205.766l4.653 4.653.33 1.242c.113.433.342.828.766 1.205l.927.927a2.548 2.548 0 0 1 .514 2.049l-.33 1.242a2.548 2.548 0 0 1-.766 1.205M11.42 15.17l2.496-3.03" />
            </svg>
            Network Analysis Tools
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <button id="reverse-dns-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m-4.991 4.992" />
                </svg>
                Reverse DNS
            </button>
            
            <button id="ip-geo-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3s-4.5 4.03-4.5 9 2.015 9 4.5 9Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12c0 5.385 4.365 9.75 9.75 9.75s9.75-4.365 9.75-9.75S17.385 2.25 12 2.25 2.25 6.615 2.25 12Z" />
                </svg>
                IP Geolocation
            </button>
            
            <button id="whois-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                WHOIS Lookup
            </button>
            
            <button id="port-scan-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0 3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0Z" />
                </svg>
                Port Scanner
            </button>
            
            <button id="tcp-scan-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                </svg>
                TCP Port Scan
            </button>
            
            <button id="udp-scan-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                </svg>
                UDP Port Scan
            </button>
            
            <button id="threat-intel-btn" data-auth-required
                class="group bg-slate-100 hover:bg-slate-200 p-4 rounded-lg text-center transition-all font-semibold text-slate-700 hover:ring-2 hover:ring-blue-500 flex flex-col items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-6 h-6 transition-transform group-hover:rotate-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                Threat Intelligence
            </button>
        </div>
    </div>
</div>
