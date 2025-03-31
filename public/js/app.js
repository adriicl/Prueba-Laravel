document.addEventListener("DOMContentLoaded", () => {
  // Elementos del DOM
  const html = document.documentElement;

  const icons = {
    light: document.getElementById("light-icon"),
    dark: document.getElementById("dark-icon"),
    system: document.getElementById("system-icon"),
  };

  const themeMenu = document.getElementById("theme-menu");
  const themeOptions = document.querySelectorAll("[data-theme-option]");
  const isDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  let currentTheme = localStorage.getItem("theme") || "system";
  localStorage.setItem("theme", currentTheme);

  updateTheme(currentTheme);
  updateThemeUI(currentTheme);

  function updateThemeUI(theme) {
    // Verifica si los íconos existen antes de manipularlos
    Object.entries(icons).forEach(([key, icon]) => {
      if (icon) {
        key === theme
          ? icon.classList.remove("hidden")
          : icon.classList.add("hidden");
      }
    });

    // Verifica si el menú existe antes de manipularlo
    if (themeMenu) {
      themeMenu.classList.add("hidden");
    }

    localStorage.setItem("theme", theme);
  }

  function updateTheme(theme) {
    if (
      theme === "dark" ||
      (theme === "system" && isDarkMode.matches)
    ) {
      html.classList.add("dark");
    } else if (
      theme === "light" ||
      (theme === "system" && !isDarkMode.matches)
    ) {
      html.classList.remove("dark");
    }
    currentTheme = theme;
  }

  // Escucha los cambios en el sistema para el tema "system"
  isDarkMode.addEventListener("change", ({ matches }) => {
    if (currentTheme === "system") {
      matches
        ? html.classList.add("dark")
        : html.classList.remove("dark");
    }
  });

  // Agrega eventos a las opciones de tema
  themeOptions.forEach((option) => {
    option.addEventListener("click", () => {
      const theme = option.dataset.themeOption;

      updateThemeUI(theme);
      updateTheme(theme);
    });
  });

  // Alternar visibilidad del menú de temas
  const toggleThemeMenu = document.getElementById("toggle-theme-menu");
  if (toggleThemeMenu && themeMenu) {
    toggleThemeMenu.addEventListener("click", () =>
      themeMenu.classList.toggle("hidden")
    );
  }

  // Manejo del menú móvil
  const toggleMobileMenu = document.getElementById("toggle-mobile-menu");
  if (toggleMobileMenu) {
    toggleMobileMenu.addEventListener("click", () => {
      const mobileMenu = document.getElementById("mobile-menu");
      const openMenuIcon = document.getElementById("open-menu-icon");
      const closeMenuIcon = document.getElementById("close-menu-icon");

      if (mobileMenu) mobileMenu.classList.toggle("hidden");
      if (openMenuIcon) openMenuIcon.classList.toggle("hidden");
      if (closeMenuIcon) closeMenuIcon.classList.toggle("hidden");
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  // Selecciona el botón del perfil y el menú desplegable
  const profileButton = document.getElementById("profile-button");
  const profileMenu = document.getElementById("profile-menu");

  if (profileButton && profileMenu) {
      // Alternar visibilidad del menú al hacer clic en el botón
      profileButton.addEventListener("click", (event) => {
          event.stopPropagation(); // Evita que el evento se propague
          profileMenu.classList.toggle("hidden");
      });

      // Cerrar el menú si se hace clic fuera de él
      document.addEventListener("click", (event) => {
          if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
              profileMenu.classList.add("hidden");
          }
      });
  }
});