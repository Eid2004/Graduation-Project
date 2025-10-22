<header
          class="bg-white/80 backdrop-blur-sm border-b border-slate-200 p-4 flex items-center justify-between z-10">
          <div class="flex items-center">
              <button id="sidebar-toggle" class="p-2 rounded-md hover:bg-slate-100 mr-2 sm:hidden"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7" />
                  </svg></button>
              <div>
                  <h2 class="text-lg font-bold text-slate-800">Security Dashboard</h2>
                  <p class="text-sm text-slate-600">Comprehensive cybersecurity analysis</p>
              </div>
          </div>
          <div class="flex items-center gap-2">
              <!-- User Info (Authenticated) -->
              <div id="user-info" data-auth class="flex items-center gap-3 hidden">
                  <div class="text-right">
                      <div class="text-sm font-semibold text-slate-800" id="userName">User Name</div>
                      <div class="text-xs text-slate-500" id="userEmail">user@example.com</div>
                  </div>
                  <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                      </svg>
                  </div>
                  <button id="logoutBtn" class="px-3 py-1.5 rounded-md text-xs font-semibold bg-red-100 hover:bg-red-200 text-red-700 transition-colors flex items-center gap-1">
                      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                      </svg>
                      Logout
                  </button>
              </div>

              <!-- Guest Actions (Not Authenticated) -->
              <div id="guest-actions" data-guest class="flex items-center gap-2">
                  <a href="login.html" class="px-3 py-1.5 rounded-md text-xs font-semibold bg-blue-100 hover:bg-blue-200 text-blue-700 transition-colors flex items-center gap-1">
                      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                      </svg>
                      Login
                  </a>
                  <a href="signup.html" class="px-3 py-1.5 rounded-md text-xs font-semibold bg-green-100 hover:bg-green-200 text-green-700 transition-colors flex items-center gap-1">
                      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                      </svg>
                      Sign Up
                  </a>
              </div>

              <button id="api-keys-toggle" data-auth-required
                  class="px-3 py-1.5 rounded-md text-xs font-semibold bg-blue-100 hover:bg-blue-200 text-blue-700 transition-colors flex items-center gap-1 disabled:opacity-50 disabled:cursor-not-allowed"
                  title="Toggle API Keys">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                  </svg>
                  API Keys
              </button>
              <button id="theme-toggle"
                  class="px-3 py-1.5 rounded-md text-xs font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-colors"
                  title="Toggle dark mode">🌙 Dark</button>
          </div>
      </header>