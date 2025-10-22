<footer
    class="bg-white/80 backdrop-blur-sm border-t border-slate-200 p-2 text-sm text-slate-500 flex justify-between items-center flex-shrink-0">
    <div id="status-bar" class="pl-2"></div>
    <div class="flex items-center gap-2">
        <div id="loading-indicator" class="flex items-center gap-2 hidden"><svg class="spinner w-4 h-4 text-blue-500"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                    d="m4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <div id="progress-bar"
                class="w-24 sm:w-40 h-1.5 bg-slate-200 rounded-full overflow-hidden progress-bar-indeterminate">
                <div></div>
            </div>
        </div>
        <div class="flex items-center gap-2"><button id="save-session-btn"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors flex items-center gap-1"><svg
                    class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                </svg>Save Session</button><button id="load-session-btn"
                class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors flex items-center gap-1"><svg
                    class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>Load Session</button><button id="clear-session-btn"
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors flex items-center gap-1"><svg
                    class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 3L10 3m4.788 3L10 3m0 0L5.5 3m4.5 0L5.5 3" />
                </svg>Clear Session</button><button id="export-csv-btn"
                class="bg-blue-500 hover:bg-slate-200 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors">CSV</button><button
                id="export-pdf-btn"
                class="bg-blue-500 hover:bg-slate-200 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors">PDF</button><button
                id="save-results-btn"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded-md text-xs transition-colors flex items-center gap-1"><svg
                    class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>Save Results</button></div>
    </div>
</footer>
</main>
</div>

<!-- Authentication System -->
{{-- <script src="{{ asset('js/auth.js') }}"></script> --}}

<!-- Main JavaScript File -->
<script type="module" src="{{ asset('js/main.js') }}"></script>

{{-- Page-specific scripts --}}
{{-- @stack('scripts') --}}
</body>

</html>
