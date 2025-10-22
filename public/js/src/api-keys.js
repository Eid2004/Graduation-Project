// src/api-keys.js

// حالة المفاتيح والمتغيرات المتعلقة بالتشفير
export const ENCRYPTION_KEY = "CyberGuard2024!@#";

// حالة المفاتيح في الذاكرة (يتم تحميلها عند البدء)
export let virusTotalApiKey = "";
export let whoisApiKey = "";
export let shodanApiKey = "";

// Simple encryption/decryption functions
export function encryptApiKey(key) {
  if (!key) return "";
  try {
    // Simple XOR encryption (for demo purposes)
    let encrypted = "";
    for (let i = 0; i < key.length; i++) {
      encrypted += String.fromCharCode(
        key.charCodeAt(i) ^
        ENCRYPTION_KEY.charCodeAt(i % ENCRYPTION_KEY.length)
      );
    }
    return btoa(encrypted); // Base64 encode
  } catch (e) {
    console.error("Encryption failed:", e);
    return key; // Fallback to plain text
  }
}

export function decryptApiKey(encryptedKey) {
  if (!encryptedKey) return "";
  try {
    const decoded = atob(encryptedKey); // Base64 decode
    let decrypted = "";
    for (let i = 0; i < decoded.length; i++) {
      decrypted += String.fromCharCode(
        decoded.charCodeAt(i) ^
        ENCRYPTION_KEY.charCodeAt(i % ENCRYPTION_KEY.length)
      );
    }
    return decrypted;
  } catch (e) {
    console.error("Decryption failed:", e);
    return encryptedKey; // Fallback to encrypted value
  }
}

// Mask API key for display
export function maskApiKey(key) {
  if (!key || key.length < 8) return key;
  return (
    key.substring(0, 4) +
    "•".repeat(key.length - 8) +
    key.substring(key.length - 4)
  );
}

// وظائف تحميل المفاتيح وتحديث الحالة
export function loadVtKey(logResult) {
    const storedKey = localStorage.getItem("vtApiKey");
    if (storedKey) {
      virusTotalApiKey = decryptApiKey(storedKey);
      logResult(new Date(), "System", "ℹ️ VirusTotal API Key loaded from secure storage.", 'system');
    }
}
export function loadWhoisKey(logResult) {
    const storedKey = localStorage.getItem("whoisApiKey");
    if (storedKey) {
      whoisApiKey = decryptApiKey(storedKey);
      logResult(new Date(), "System", "ℹ️ WhoisXML API Key loaded from secure storage.", 'system');
    }
    return whoisApiKey || "";
}
export function loadShodanKey(logResult) {
    const storedKey = localStorage.getItem("shodanApiKey");
    if (storedKey) {
      shodanApiKey = decryptApiKey(storedKey);
      logResult(new Date(), "System", "ℹ️ Shodan API Key loaded from secure storage.", 'system');
    }
    return shodanApiKey || "";
}
export function loadAbuseKey() {
    const storedKey = localStorage.getItem("abuseApiKey");
    return storedKey ? decryptApiKey(storedKey) : "";
}

// Clear all API keys function (تحتاج إلى LogResult من ui-manager)
// سيتم تنفيذها في main.js