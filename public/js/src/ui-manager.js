// src/ui-manager.js

// حالة التطبيق والمتغيرات العالمية
export let isRunning = false;
export let history = [];
export const maxHistorySize = 100;
export let currentTheme = "light";
export let resultsData = [];
export let currentView = "list";
export let currentFilter = "all";
export let searchQuery = "";

// عناصر DOM (تم استخراجها من الكود الأصلي)
const DOMElements = {
    sidebar: document.getElementById("sidebar"),
    sidebarOverlay: document.getElementById("sidebar-overlay"),
    historyList: document.getElementById("history-list"),
    clearHistoryBtn: document.getElementById("clear-history-btn"),
    statusBar: document.getElementById("status-bar"),
    loadingIndicator: document.getElementById("loading-indicator"),
    resultsContainer: document.getElementById("results-container"),
    saveResultsBtn: document.getElementById("save-results-btn"),
    exportCsvBtn: document.getElementById("export-csv-btn"),
    exportPdfBtn: document.getElementById("export-pdf-btn"),
    tabButtons: document.querySelectorAll(".tab-button"),
    tabPanes: document.querySelectorAll(".tab-pane"),
    themeToggleBtn: document.getElementById("theme-toggle"),
    apiKeysToggle: document.getElementById("api-keys-toggle"),
    apiKeysModal: document.getElementById("api-keys-modal"),
    apiKeysClose: document.getElementById("api-keys-close"),
    floatingSidebarToggle: document.getElementById("floating-sidebar-toggle"),
};

// --- Core UI Functions ---

export function showProgressBar() {
  DOMElements.loadingIndicator?.classList.remove("hidden");
}
export function hideProgressBar() {
  DOMElements.loadingIndicator?.classList.add("hidden");
}

export function setButtonLoading(buttonId, loading = true) {
  const button = document.getElementById(buttonId);
  if (button) {
    if (loading) {
      button.classList.add("button-loading");
    } else {
      button.classList.remove("button-loading");
    }
  }
}

export function updateStatus(message = null) {
  const time = new Date().toLocaleTimeString([], {
    hour: "2-digit",
    minute: "2-digit",
  });
  const sessions = JSON.parse(
    localStorage.getItem("cyberGuardSessions") || "{}"
  );
  const sessionCount = Object.keys(sessions).length;
  const sessionStatus =
    sessionCount > 0
      ? `💾 ${sessionCount} Session${sessionCount > 1 ? "s" : ""} Saved`
      : "📝 No Sessions";
  
  const statusText = message || (isRunning ? "🔄 Processing..." : "🟢 Ready");

  if (DOMElements.statusBar) {
    DOMElements.statusBar.textContent = `${statusText} • ${sessionStatus} • ${time}`;
  }
}

export function disableAllButtons() {
  const toolButtons = document.querySelectorAll(
    'button[id$="-btn"]:not(#save-results-btn):not(#export-csv-btn):not(#export-pdf-btn):not(#clear-history-btn):not(#theme-toggle):not(#sidebar-toggle)'
  );
  toolButtons.forEach((button) => {
    button.classList.add("button-disabled");
    button.setAttribute("data-original-disabled", button.disabled);
    button.disabled = true;
  });
}

export function enableAllButtons() {
  const toolButtons = document.querySelectorAll(
    'button[id$="-btn"]:not(#save-results-btn):not(#export-csv-btn):not(#export-pdf-btn):not(#clear-history-btn):not(#theme-toggle):not(#sidebar-toggle)'
  );
  toolButtons.forEach((button) => {
    button.classList.remove("button-disabled", "button-loading");
    const originalDisabled = button.getAttribute("data-original-disabled");
    button.disabled = originalDisabled === "true";
    button.removeAttribute("data-original-disabled");
  });
}

// --- Logging & Results Rendering ---

export function logResult(
  timestamp,
  feature,
  message,
  status = "info",
  details = null
) {
  let newStatus = status;
  if (status === "success") newStatus = "safe";
  else if (status === "warning") newStatus = "warning";
  else if (status === "danger") newStatus = "threat";
  else if (status === "info") newStatus = "system";

  const result = {
    id: Date.now().toString(),
    timestamp: timestamp.toLocaleTimeString(),
    feature: feature,
    message: message,
    status: newStatus,
    details: details,
    date: timestamp,
  };

  resultsData.push(result);
  
  // Also add to history for backward compatibility
  history.push({ timestamp: result.timestamp, feature, message, status });
  if (history.length > maxHistorySize) history.shift();

  // (يجب أن تكون الدوال التالية في نفس الملف أو مستوردة)
  updateResultsStats();
  renderResults();
  updateHistoryList();
  
  DOMElements.resultsContainer?.scrollTop = DOMElements.resultsContainer.scrollHeight;
}

// الدوال المساعدة للـ Rendering (يجب أن تكون مُصدرة أو داخلية إذا أمكن)
export function updateHistoryList() {
  DOMElements.historyList.innerHTML = "";
  [...history]
    .reverse()
    .slice(0, 10)
    .forEach((item) => {
      const div = document.createElement("div");
      div.className = "p-2 bg-slate-100 rounded-md";
      const truncatedMessage =
        item.message.split("\n")[0].substring(0, 30) +
        (item.message.length > 30 ? "..." : "");
      div.innerHTML = `<div class="font-bold text-slate-700 text-xs">🔧 ${item.feature}</div><div class="text-slate-500 text-xs">📝 ${truncatedMessage}</div>`;
      DOMElements.historyList.appendChild(div);
    });
}
export function renderResults() { /* ... منطق renderResults الأصلي ... */ }
export function updateResultsStats() { /* ... منطق updateResultsStats الأصلي ... */ }
export function createResultCard(result) { /* ... منطق createResultCard الأصلي ... */ }
export function getStatusIcon(status) { /* ... منطق getStatusIcon الأصلي ... */ }
export function getStatusText(status) { /* ... منطق getStatusText الأصلي ... */ }
export function getStatusColor(status) { /* ... منطق getStatusColor الأصلي ... */ }
export function formatResultMessage(message) { /* ... منطق formatResultMessage الأصلي ... */ }
export function initializeModernResults() { /* ... منطق initializeModernResults الأصلي ... */ }
export function groupResultsByStatus(results) { /* ... منطق groupResultsByStatus الأصلي ... */ }
export function createResultsSummary(results) { /* ... منطق createResultsSummary الأصلي ... */ }
export function createResultGroup(status, results) { /* ... منطق createResultGroup الأصلي ... */ }
export function updateSearchResults() { /* ... منطق updateSearchResults الأصلي ... */ }
export function updateFilterResults() { /* ... منطق updateFilterResults الأصلي ... */ }


// --- Theme & Sidebar Management ---

export function applyTheme(theme) {
  const root = document.documentElement;
  if (theme === "dark") {
    root.classList.add("dark");
    DOMElements.themeToggleBtn.textContent = "☀️ Light";
  } else {
    root.classList.remove("dark");
    DOMElements.themeToggleBtn.textContent = "🌙 Dark";
  }
  currentTheme = theme;
}

export function loadTheme() {
  const saved = localStorage.getItem("theme");
  if (saved === "dark" || saved === "light") {
    applyTheme(saved);
  } else {
    const prefersDark =
      window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: dark)").matches;
    applyTheme(prefersDark ? "dark" : "light");
  }
}

export function toggleTheme() {
  const next = currentTheme === "dark" ? "light" : "dark";
  localStorage.setItem("theme", next);
  applyTheme(next);
}

export function showSidebar() {
  DOMElements.sidebar.classList.remove("hidden");
  // ... (بقية المنطق الأصلي لـ showSidebar)
}
export function hideSidebar() {
  DOMElements.sidebar.classList.add("hidden");
  // ... (بقية المنطق الأصلي لـ hideSidebar)
}
export function toggleSidebar() {
  if (DOMElements.sidebar.classList.contains("hidden")) {
    showSidebar();
  } else {
    hideSidebar();
  }
}

// --- Session Management (Functions need access to global state and logResult) ---
export function saveSession(sessionName = null) { /* ... منطق saveSession الأصلي ... */ }
export function loadSession() { /* ... منطق loadSession الأصلي ... */ }
export function showSessionSelector(loadSpecificSession) { /* ... منطق showSessionSelector الأصلي ... */ }
export function loadSpecificSession(sessionName) { /* ... منطق loadSpecificSession الأصلي ... */ }
export function deleteSession(sessionName) { /* ... منطق deleteSession الأصلي ... */ }
export function restoreResultsDisplay() { /* ... منطق restoreResultsDisplay الأصلي ... */ }
export function clearSession() { /* ... منطق clearSession الأصلي ... */ }
export function showWelcomePopup() { /* ... منطق showWelcomePopup الأصلي ... */ }
export function hideWelcomePopup() { /* ... منطق hideWelcomePopup الأصلي ... */ }

// --- Global Exported Window Functions (for inline HTML binding) ---

window.toggleResultDetails = function (button) { /* ... منطق toggleResultDetails الأصلي ... */ };
window.toggleGroup = function (status) { /* ... منطق toggleGroup الأصلي ... */ };
window.copyResult = function (resultId) { /* ... منطق copyResult الأصلي ... */ };
window.exportResult = function (resultId) { /* ... منطق exportResult الأصلي ... */ };