// JS for controlling the menu and overlay

const toggle = document.querySelector("#toggle");
const overlay = document.querySelector("#overlay");

document.addEventListener("DOMContentLoaded", function () {
	if (toggle && overlay) {
		toggle.addEventListener("click", () => {

			// Control the menu button active status
			toggle.classList.toggle("active");

			// Control the aria label
			const open = JSON.parse(overlay.getAttribute("aria-expanded"));
			overlay.setAttribute("aria-expanded", ! open);

			// Control overlay opening and closing
			overlay.classList.toggle("open");

			// Control the body scrolling when overlay open
			document.body.classList.toggle("menu-active");
		});
	}

	overlay.classList.toggle("menu-open");
});
