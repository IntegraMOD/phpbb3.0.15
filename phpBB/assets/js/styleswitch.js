function usesThemeSelectorMode() {
  return !!document.querySelector('.theme-choice');
}

function getValidThemeColor(requestedColor) {
  var choices = document.querySelectorAll('.theme-choice');
  
  // If the current theme has color switcher buttons, check if it supports the requested color
  if (choices.length > 0) {
    var supportedColors = [];
    for (var i = 0; i < choices.length; i++) {
      var c = choices[i].getAttribute('data-style-color');
      if (c && supportedColors.indexOf(c) === -1) {
        supportedColors.push(c);
      }
    }
    
    // If the color exists in the current theme, use it
    if (supportedColors.indexOf(requestedColor) !== -1) {
      return requestedColor;
    }
    
    // If the color isn't supported by this theme, safely fall back to blue (or the first available color)
    return supportedColors.indexOf('blue') !== -1 ? 'blue' : supportedColors[0];
  }

  // Fallback for pages without theme buttons
  var validColors = ['blue', 'orange', 'green', 'sky', 'purple', 'cyan'];
  return validColors.indexOf(requestedColor) !== -1 ? requestedColor : 'blue';
}

function setThemeColor(color) {
  var selectedColor = getValidThemeColor(color);
  document.documentElement.setAttribute('data-style-color', selectedColor);

  if (document.body) {
    document.body.setAttribute('data-style-color', selectedColor);
  }
}

function applyIntegraTheme(color, mode) {
  setThemeColor(color);
  setThemeMode(mode);
}

function setActiveStyleSheet(title) {
  if (usesThemeSelectorMode()) {
    setThemeMode(title);
    return;
  }

  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }

  setThemeMode(title);
}

function setThemeMode(title) {
  var theme = title === 'dark' ? 'dark' : 'light';
  document.documentElement.setAttribute('data-bs-theme', theme);

  if (document.body) {
    document.body.setAttribute('data-bs-theme', theme);
  }

  var toggle = document.getElementById('style-mode-toggle');
  if (toggle) {
    var isDark = theme === 'dark';
    toggle.setAttribute('aria-pressed', isDark ? 'true' : 'false');
    toggle.setAttribute('title', isDark ? 'Switch to light mode' : 'Switch to dark mode');
    toggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
    toggle.innerHTML = isDark ? '<i class="fa-solid fa-sun"></i>' : '<i class="fa-solid fa-moon"></i>';
  }
}

function syncStyleSelector(title) {
  var themeChoices = document.querySelectorAll('.theme-choice');
  if (!themeChoices.length) {
    return;
  }

  var activeMode = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'dark' : 'light';
  themeChoices.forEach(function(choice) {
    var isActive = choice.getAttribute('data-style-color') === title && choice.getAttribute('data-theme-mode') === activeMode;
    choice.classList.toggle('is-active', isActive);
    choice.setAttribute('aria-pressed', isActive ? 'true' : 'false');
  });
}

function getIntegraThemeMode() {
  var storedMode = readCookie('style_mode');
  return storedMode === 'dark' ? 'dark' : 'light';
}

function getIntegraThemeColor() {
  var storedColor = readCookie('style_color');
  return getValidThemeColor(storedColor);
}

function getCurrentIntegraThemeColor() {
  var currentColor = document.documentElement.getAttribute('data-style-color');
  return getValidThemeColor(currentColor);
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  if (usesThemeSelectorMode()) {
    return 'light';
  }

  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       && a.getAttribute("media") !== 'print'
       && a.getAttribute("title") !== 'printonly'
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function initializeStyleSwitcher() {
  if (usesThemeSelectorMode()) {
    var color = getIntegraThemeColor();
    var mode = getIntegraThemeMode();

    applyIntegraTheme(color, mode);
    syncStyleSelector(color);

    var themeChoices = document.querySelectorAll('.theme-choice');
    themeChoices.forEach(function(choice) {
      if (!choice.hasAttribute('data-style-switcher-bound')) {
        choice.setAttribute('data-style-switcher-bound', 'true');
        choice.addEventListener('click', function(e) {
          e.preventDefault();
          var attrColor = this.getAttribute('data-style-color');
          var selectedColor = getValidThemeColor(attrColor);
          var selectedMode = this.getAttribute('data-theme-mode') === 'dark' ? 'dark' : 'light';
          
          applyIntegraTheme(selectedColor, selectedMode);
          createCookie('style_color', selectedColor, 365);
          createCookie('style_mode', selectedMode, 365);
          syncStyleSelector(selectedColor);
        });
      }
    });

    return;
  }

  var cookie = readCookie("style");
  var title = cookie ? cookie : (getPreferredStyleSheet() || 'light');
  setActiveStyleSheet(title);
  syncStyleSelector(title);

  var selector = document.getElementById('style-color-selector');
  if (selector && !selector.hasAttribute('data-style-switcher-bound')) {
    selector.setAttribute('data-style-switcher-bound', 'true');
    selector.addEventListener('change', function() {
      setActiveStyleSheet(this.value);
      createCookie("style", this.value, 365);
      syncStyleSelector(this.value);
    });
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeStyleSwitcher);
} else {
  initializeStyleSwitcher();
}