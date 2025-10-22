      <!-- Floating Sidebar Toggle Button -->
      <button id="floating-sidebar-toggle"
          class="fixed top-2 left-2 z-50 bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow-lg transition-all duration-200 hover:shadow-xl transform hover:scale-105 flex items-center gap-2 px-3 py-2 text-sm"
          title="Show/Hide Sidebar">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25A2.25 2.25 0 0 1 13.5 8.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
          </svg>
          <span class="text-sm font-medium">Sidebar</span>
      </button> <!-- sidebar button -->

      <aside id="sidebar"
          class="w-64 bg-white border-r border-slate-200 flex-shrink-0 flex flex-col transition-all duration-300 ease-in-out z-40">
          <div class="p-5 pt-16 flex items-center gap-3">
              <svg class="h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
              </svg>
              <div>
                  <h1 class="text-xl font-bold text-slate-800">CyberGuard</h1>
                  <p class="text-xs text-slate-500">Security Toolkit</p>
              </div>
          </div>

          <div class="border-t border-slate-200 mx-5 my-2"></div>


          <div class="border-t border-slate-200 mx-5 my-3"></div>

          <div class="flex-grow flex flex-col px-5 overflow-y-auto scrollbar-hide">
              <h2 class="text-sm font-semibold mb-3 text-slate-600">Recent Activity</h2>
              <div id="history-list" class="text-sm text-slate-500 space-y-2 flex-grow"></div>
          </div>

          <div class="p-5"><button id="clear-history-btn"
                  class="w-full bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2 px-4 rounded-lg transition-colors">Clear
                  History</button></div>
      </aside> <!-- sidebar -->
