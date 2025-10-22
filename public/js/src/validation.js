// src/validation.js

// ===== INPUT VALIDATION FUNCTIONS =====
// Validation functions for target input to prevent XSS and ensure proper IP/domain format

export function isValidIP(ip) {
  const ipRegex =
    /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
  return ipRegex.test(ip);
}

export function isValidDomain(domain) {
  const domainRegex =
    /^[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?(\.[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?)*$/;
  return domainRegex.test(domain);
}

export function isValidTarget(target) {
  if (!target || typeof target !== "string") return false;

  // Remove any potential XSS attempts
  const cleanTarget = target.trim().replace(/[<>\"'&]/g, "");

  // Check if it's a valid IP or domain
  return isValidIP(cleanTarget) || isValidDomain(cleanTarget);
}

export function validateTargetInput(target, toolName) {
  if (!target || target.trim() === "") {
    return {
      valid: false,
      message: `Please enter a target IP address or domain name for ${toolName}.`,
    };
  }

  if (!isValidTarget(target)) {
    return {
      valid: false,
      message: `Invalid target format. Please enter a valid IP address (e.g., 8.8.8.8) or domain name (e.g., google.com).`,
    };
  }

  return { valid: true, message: "" };
}