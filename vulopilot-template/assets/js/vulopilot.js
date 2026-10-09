/**
 * VuloPilot landing page — lightweight interaction layer.
 *
 * The original site is a React/Next.js app. This static conversion
 * preserves the exact visual markup, but a few widgets (the process
 * stepper, the "Eleven areas" sidebar, the before/after toggle) were
 * driven by React state that swapped in content not present in the
 * static HTML snapshot used for this conversion. Where the alternate
 * panel markup wasn't available to extract, this script still makes the
 * buttons feel alive by toggling the active/selected visual state.
 */
(function () {
	'use strict';

	var ACTIVE_BTN = ['border-ink', 'bg-surface', 'shadow-lg'];
	var INACTIVE_BTN = ['border-line', 'bg-surface/40'];

	function toggleGroupActive(group, clicked) {
		var buttons = group.querySelectorAll(':scope > button');
		buttons.forEach(function (btn) {
			var isClicked = btn === clicked;
			ACTIVE_BTN.forEach(function (c) {
				btn.classList.toggle(c, isClicked);
			});
			INACTIVE_BTN.forEach(function (c) {
				btn.classList.toggle(c, !isClicked);
			});

			var iconWrap = btn.querySelector(':scope > div > span');
			if (iconWrap) {
				iconWrap.classList.toggle('bg-ink', isClicked);
				iconWrap.classList.toggle('text-bg', isClicked);
				iconWrap.classList.toggle('bg-sage-soft', !isClicked);
				iconWrap.classList.toggle('text-sage', !isClicked);
			}
		});
	}

	function initStepper() {
		document.querySelectorAll('.space-y-3').forEach(function (group) {
			var buttons = group.querySelectorAll(':scope > button');
			if (!buttons.length) {
				return;
			}
			buttons.forEach(function (btn) {
				btn.addEventListener('click', function () {
					toggleGroupActive(group, btn);
				});
			});
		});
	}

	function initSidebarNav() {
		document.querySelectorAll('.lg\\:flex-col.lg\\:overflow-visible').forEach(function (group) {
			var buttons = group.querySelectorAll(':scope > button');
			if (!buttons.length) {
				return;
			}
			buttons.forEach(function (btn) {
				btn.addEventListener('click', function () {
					buttons.forEach(function (b) {
						var active = b === btn;
						b.classList.toggle('text-bg', active);
						b.classList.toggle('text-muted', !active);
					});
				});
			});
		});
	}

	function initPillToggle() {
		document.querySelectorAll('.rounded-full.border.border-line.bg-surface.p-1').forEach(function (group) {
			var buttons = group.querySelectorAll(':scope > button');
			if (buttons.length !== 2) {
				return;
			}
			buttons.forEach(function (btn, i) {
				btn.addEventListener('click', function () {
					buttons.forEach(function (b, j) {
						var active = i === j;
						var pill = b.querySelector('span.absolute.inset-0');
						var label = b.querySelector('span.relative');
						if (pill) {
							pill.style.opacity = active ? '1' : '0';
						}
						if (label) {
							label.classList.toggle('text-bg', active);
							label.classList.toggle('text-muted', !active);
						}
					});
				});
			});
		});
	}

	function initFaqAccordion() {
		document.querySelectorAll('[id="faq"] button, [id="faqs"] button').forEach(function (btn) {
			btn.addEventListener('click', function () {
				var panel = btn.nextElementSibling;
				if (panel) {
					panel.classList.toggle('hidden');
				}
				btn.setAttribute('aria-expanded', panel && !panel.classList.contains('hidden') ? 'true' : 'false');
			});
		});
	}

	document.addEventListener('DOMContentLoaded', function () {
		initStepper();
		initSidebarNav();
		initPillToggle();
		initFaqAccordion();
	});
})();
