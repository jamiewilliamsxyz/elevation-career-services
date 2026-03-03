const ecsNavbarToggle = document.getElementById("ecs-navbar-toggle");
const ecsMenuIcon = document.getElementById("ecs-menu-icon");
const ecsXIcon = document.getElementById("ecs-x-icon");
const ecsHeaderNav = document.getElementById("ecs-header-nav");
const ecsNavbarContainer = document.getElementById("ecs-navbar-container");

let ecsMenuIsOpen = false;

ecsNavbarToggle.addEventListener("click", () => {
  ecsMenuIsOpen = !ecsMenuIsOpen;

  // Toggle aria attributes
  ecsNavbarToggle.setAttribute("aria-expanded", ecsMenuIsOpen);

  ecsNavbarToggle.setAttribute(
    "aria-label",
    ecsMenuIsOpen ? "Close menu" : "Open menu",
  );

  // Switch icons
  ecsMenuIcon.classList.toggle("ecs-menu-open");
  ecsXIcon.classList.toggle("ecs-menu-open");

  // Toggle shadow
  ecsHeaderNav.classList.toggle("ecs-menu-open");

  // Show/hide menu
  ecsNavbarContainer.classList.toggle("ecs-menu-open");
});
