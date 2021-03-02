// JS for controlling the menu and overlay

const TOGGLE = document.querySelector("#toggle");
const OVERLAY = document.querySelector("#overlay");
const BODY = document.querySelector("body");

document.addEventListener("DOMContentLoaded", function () {
	if (TOGGLE && OVERLAY) {
		TOGGLE.addEventListener("click", () => {

			// Control the menu button active status
			TOGGLE.classList.toggle("active");

			// Control the aria label
			const open = JSON.parse(OVERLAY.getAttribute("aria-expanded"));
			OVERLAY.setAttribute("aria-expanded", ! open);

			// Control overlay opening and closing
			OVERLAY.classList.toggle("open");

			// Control the body scrolling when overlay open
			BODY.classList.toggle("menu-active");
		});
	}

	OVERLAY.classList.toggle("menu-open");
});
