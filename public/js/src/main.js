// src/main.js

import { isValidIP, isValidDomain, isValidTarget, validateTargetInput } from './validation.js';
import * as Keys from './api-keys.js';
import * as UI from './ui-manager.js';
import * as NetTools from './tools/network-scanner.js';
import * as WebTools from './tools/web-security.js';
import * as CryptoTools from './tools/crypto-tools.js';

// ------------------------------------
// CORE RUNNER FUNCTION (وظيفة التشغيل المركزية)
// ------------------------------------

/**
 * الوظيفة المركزية لتشغيل أي أداة بشكل آمن.
 */
async function runTool(feature, toolFunction, inputProvider, validationMessage, buttonId = null) {
  if (UI.isRunning) return;
  
  const inputValue = inputProvider ? inputProvider() : "N/A";
  if (inputProvider && !inputValue) {
    alert(validationMessage);
    return;
  }

  // Enhanced validation for target input
  if (inputProvider && inputValue && 
      (feature.includes("Port Scan") || feature.includes("Reverse DNS") || 
       feature.includes("IP Geolocation") || feature.includes("Threat Intelligence"))
  ) {
    const validation = validateTargetInput(inputValue, feature);
    if (!validation.valid) {
      alert(validation.message);
      return;
    }
  }

  UI.isRunning = true;
  UI.showProgressBar();
  UI.disableAllButtons();
  if (buttonId) UI.setButtonLoading(buttonId, true);
  UI.updateStatus();

  try {
    await toolFunction(inputValue);
  } catch (error) {
    UI.logResult(new Date(), feature, `❌ [ERROR] An unexpected error occurred: ${error.message}`, "danger");
  } finally {
    UI.isRunning = false;
    UI.hideProgressBar();
    UI.enableAllButtons();
    if (buttonId) UI.setButtonLoading(buttonId, false);
    UI.updateStatus();
  }
}

// ------------------------------------
// INITIALIZATION AND EVENT LISTENERS
// ------------------------------------

document.addEventListener("DOMContentLoaded", () => {
  console.log("CyberGuard Pro: main.js loaded and DOM ready");
  
  // تهيئة عناصر DOM وتحميل الحالة الأولية
  // (Note: The initialization of DOMElements is implicitly done inside ui-manager.js or here by selecting elements)
  UI.loadTheme();
  Keys.loadAllKeys(UI.logResult);
  UI.updateStatus();
  setInterval(UI.updateStatus, 5000); 

  // ===== ربط أحداث الـ UI العامة =====
  document.getElementById("theme-toggle")?.addEventListener("click", UI.toggleTheme);
  // ... (ربط باقي أحداث الشريط الجانبي والـ Session والـ Exports)
  
  // -----------------------
  // ربط أدوات الشبكة (Network Tools)
  // -----------------------
  document.getElementById("whois-btn")?.addEventListener("click", () =>
    runTool("WHOIS Lookup", NetTools.whoisLookup, () => document.getElementById("target-ip")?.value || "", "Please enter a domain name.", "whois-btn")
  );
  document.getElementById("reverse-dns-btn")?.addEventListener("click", () =>
    runTool("Reverse DNS", NetTools.reverseDns, () => document.getElementById("target-ip")?.value || "", "Please enter an IP or hostname.", "reverse-dns-btn")
  );
  document.getElementById("ip-geo-btn")?.addEventListener("click", () =>
    runTool("IP Geolocation", NetTools.ipGeolocation, () => document.getElementById("target-ip").value, "Please enter an IP address.", "ip-geo-btn")
  );
  document.getElementById("port-scan-btn")?.addEventListener("click", () =>
    runTool("Port Scanner", NetTools.portScan, () => document.getElementById("target-ip").value, "Please enter an IP or hostname.", "port-scan-btn")
  );
  document.getElementById("tcp-scan-btn")?.addEventListener("click", () =>
    runTool("TCP Port Scan", NetTools.realTcpPortScan, () => document.getElementById("target-ip").value, "Please enter an IP address or hostname.", "tcp-scan-btn")
  );
  document.getElementById("udp-scan-btn")?.addEventListener("click", () =>
    runTool("UDP Port Scan", NetTools.realUdpConnectivityTest, () => document.getElementById("target-ip").value, "Please enter an IP address or hostname.", "udp-scan-btn")
  );

  // -----------------------
  // ربط أدوات أمن الويب (Web Security Tools)
  // -----------------------
  document.getElementById("phishing-btn")?.addEventListener("click", () =>
    runTool("URL Phishing Analyzer", WebTools.detectPhishing, () => document.getElementById("target-url").value, "Please enter a URL.", "phishing-btn")
  );
  document.getElementById("xss-btn")?.addEventListener("click", () =>
    runTool("XSS Test", WebTools.testXss, () => document.getElementById("target-url").value, "Please enter a URL.", "xss-btn")
  );
  document.getElementById("ssl-btn")?.addEventListener("click", () =>
    runTool("SSL/TLS Check", WebTools.checkSsl, () => document.getElementById("target-url").value, "Please enter a URL.", "ssl-btn")
  );
  document.getElementById("threat-intel-btn")?.addEventListener("click", () =>
    runTool("Threat Intelligence", WebTools.threatIntelCheck, () => document.getElementById("target-ip").value, "Please enter an IP or domain.", "threat-intel-btn")
  );
  
  // ربط أدوات VirusTotal (يجب أن يتم استبدال المتغيرات المحلية Keys.virusTotalApiKey)
  document.getElementById("vt-hash-btn")?.addEventListener("click", () => 
    runTool("VT Hash Check", WebTools.scanHashVirusTotal, () => document.getElementById("vt-hash-input").value, "Please enter a file hash.", "vt-hash-btn")
  );
  document.getElementById("vt-url-btn")?.addEventListener("click", () => 
    runTool("VT URL Scan", WebTools.scanUrlVirusTotal, () => document.getElementById("target-url").value, "Please enter a URL.", "vt-url-btn")
  );
  document.getElementById("vt-file-btn")?.addEventListener("click", () => 
    runTool("VT File Scan", WebTools.scanFileVirusTotal, () => document.getElementById("vt-file-input").files?.[0], "Please select a file to scan.", "vt-file-btn")
  );

  // -----------------------
  // ربط أدوات التشفير (Crypto Tools)
  // -----------------------
  document.getElementById("hash-string-btn")?.addEventListener("click", () => {
    const input = document.getElementById("hash-string-input").value;
    if (!input) { alert("Please enter text."); return; }
    UI.setButtonLoading("hash-string-btn", true);
    setTimeout(() => {
        CryptoTools.hashString(input);
        UI.setButtonLoading("hash-string-btn", false);
    }, 500);
  });
  
  document.getElementById("hash-file-input")?.addEventListener("change", (e) => {
    const file = e.target.files?.[0];
    if (!file) return;
    UI.isRunning = true;
    UI.showProgressBar();
    UI.disableAllButtons();
    UI.updateStatus();
    CryptoTools.hashFile(file); // يتم التعامل مع الإنهاء في الدالة نفسها
  });
  
  document.getElementById("pw-analyze-btn")?.addEventListener("click", () => {
    const pwd = document.getElementById("pw-input").value || "";
    if (!pwd) { alert("Please enter a password."); return; }
    UI.setButtonLoading("pw-analyze-btn", true);
    setTimeout(() => {
        CryptoTools.analyzePasswordWrapper(pwd);
        UI.setButtonLoading("pw-analyze-btn", false);
    }, 500);
  });
  
  document.getElementById("pw-toggle")?.addEventListener("click", () => {
      const input = document.getElementById("pw-input");
      if (!input) return;
      const isHidden = input.type === "password";
      input.type = isHidden ? "text" : "password";
      document.getElementById("pw-toggle").textContent = isHidden ? " Hide" : " Show";
  });


  // -----------------------
  // بدء التشغيل النهائي
  // -----------------------
  // يتم استبدال الدوال القديمة بوظائف UI المُصدرة
  UI.initializeModernResults();
  
  setTimeout(() => {
    UI.showWelcomePopup();
    setTimeout(() => {
      UI.showSidebar();
    }, 30);
  }, 50);
});