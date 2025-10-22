{{-- Tab Navigation --}}
<div class="flex border-b border-slate-200 mb-6">
    {{-- Network Button --}}
    <button data-tab="network-tools"
        class="tab-button py-2 px-4 text-sm font-medium text-slate-500 hover:text-blue-500 border-b-2 border-transparent active flex items-center gap-2">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
        </svg>
        Network
    </button>

    {{-- Web Button --}}
    <button data-tab="web-security"
        class="tab-button py-2 px-4 text-sm font-medium text-slate-500 hover:text-blue-500 border-b-2 border-transparent flex items-center gap-2">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
        </svg>
        Web
    </button>

    {{-- Hash Button --}}
    <button data-tab="hash-tools"
        class="tab-button py-2 px-4 text-sm font-medium text-slate-500 hover:text-blue-500 border-b-2 border-transparent flex items-center gap-2">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
        </svg>
        Hash
    </button>
</div>
