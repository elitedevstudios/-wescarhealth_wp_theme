/**
 * WesCarr Health Hub - Main JavaScript
 *
 * Modern interactions inspired by Alevia, Glowdent, and Eldiora
 * Features: Scroll animations, counter animations, mobile menu, sticky header
 *
 * @package WescarHealth
 */

'use strict';

/**
 * Main theme namespace
 */
const WesCarrHealth = {
	/**
	 * Initialize all modules
	 */
	init() {
		this.header.init();
		this.mobileMenu.init();
		this.scrollAnimations.init();
		this.counterAnimation.init();
		this.smoothScroll.init();
		this.faq.init();
		this.accessibility.init();
	},

	/**
	 * Header Module - Sticky header with scroll effects
	 */
	header: {
		element: null,
		lastScrollY: 0,
		ticking: false,

		init() {
			this.element = document.querySelector('.site-header');
			if (!this.element) return;

			this.bindEvents();
			this.checkScroll();
		},

		bindEvents() {
			window.addEventListener('scroll', () => {
				this.lastScrollY = window.scrollY;
				
				if (!this.ticking) {
					window.requestAnimationFrame(() => {
						this.checkScroll();
						this.ticking = false;
					});
					this.ticking = true;
				}
			}, { passive: true });
		},

		checkScroll() {
			if (this.lastScrollY > 50) {
				this.element.classList.add('is-scrolled');
			} else {
				this.element.classList.remove('is-scrolled');
			}
		}
	},

	/**
	 * Mobile Menu Module
	 */
	mobileMenu: {
		toggle: null,
		menu: null,
		isOpen: false,

		init() {
			this.toggle = document.querySelector('.js-menu-toggle');
			this.menu = document.querySelector('.site-header__mobile-menu');

			if (!this.toggle) return;

			this.bindEvents();
		},

		bindEvents() {
			this.toggle.addEventListener('click', (e) => {
				e.preventDefault();
				this.toggleMenu();
			});

			// Close on escape
			document.addEventListener('keydown', (e) => {
				if (e.key === 'Escape' && this.isOpen) {
					this.closeMenu();
				}
			});

			// Close on click outside
			document.addEventListener('click', (e) => {
				if (this.isOpen && 
					!this.toggle.contains(e.target) && 
					this.menu && !this.menu.contains(e.target)) {
					this.closeMenu();
				}
			});

			// Close on resize to desktop
			window.addEventListener('resize', WesCarrHealth.debounce(() => {
				if (window.innerWidth >= 1024 && this.isOpen) {
					this.closeMenu();
				}
			}, 250));
		},

		toggleMenu() {
			this.isOpen ? this.closeMenu() : this.openMenu();
		},

		openMenu() {
			this.isOpen = true;
			this.toggle.setAttribute('aria-expanded', 'true');
			if (this.menu) {
				this.menu.classList.add('is-open');
			}
			document.body.style.overflow = 'hidden';
		},

		closeMenu() {
			this.isOpen = false;
			this.toggle.setAttribute('aria-expanded', 'false');
			if (this.menu) {
				this.menu.classList.remove('is-open');
			}
			document.body.style.overflow = '';
		}
	},

	/**
	 * Scroll Animations Module - Fade in elements on scroll
	 */
	scrollAnimations: {
		elements: [],
		observer: null,

		init() {
			this.elements = document.querySelectorAll('.animate-on-scroll');
			if (this.elements.length === 0) return;

			this.createObserver();
		},

		createObserver() {
			const options = {
				root: null,
				rootMargin: '0px 0px -100px 0px',
				threshold: 0.1
			};

			this.observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						this.observer.unobserve(entry.target);
					}
				});
			}, options);

			this.elements.forEach(el => this.observer.observe(el));
		}
	},

	/**
	 * Counter Animation Module - Animate numbers on scroll
	 */
	counterAnimation: {
		counters: [],
		observer: null,

		init() {
			this.counters = document.querySelectorAll('[data-counter]');
			if (this.counters.length === 0) return;

			this.createObserver();
		},

		createObserver() {
			const options = {
				root: null,
				rootMargin: '0px',
				threshold: 0.5
			};

			this.observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						this.animateCounter(entry.target);
						this.observer.unobserve(entry.target);
					}
				});
			}, options);

			this.counters.forEach(counter => this.observer.observe(counter));
		},

		animateCounter(element) {
			const target = parseInt(element.dataset.counter, 10);
			const duration = parseInt(element.dataset.duration, 10) || 2000;
			const suffix = element.dataset.suffix || '';
			const prefix = element.dataset.prefix || '';
			
			let startTime = null;
			const startValue = 0;

			const animate = (currentTime) => {
				if (!startTime) startTime = currentTime;
				const progress = Math.min((currentTime - startTime) / duration, 1);
				
				// Easing function for smooth animation
				const easeOutQuart = 1 - Math.pow(1 - progress, 4);
				const currentValue = Math.floor(easeOutQuart * (target - startValue) + startValue);
				
				element.textContent = prefix + currentValue.toLocaleString() + suffix;

				if (progress < 1) {
					requestAnimationFrame(animate);
				} else {
					element.textContent = prefix + target.toLocaleString() + suffix;
				}
			};

			requestAnimationFrame(animate);
		}
	},

	/**
	 * Smooth Scroll Module
	 */
	smoothScroll: {
		init() {
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', this.handleClick.bind(this));
			});
		},

		handleClick(e) {
			const href = e.currentTarget.getAttribute('href');
			if (href === '#' || href === '') return;

			const target = document.querySelector(href);
			if (target) {
				e.preventDefault();
				
				const header = document.querySelector('.site-header');
				const headerHeight = header ? header.offsetHeight : 0;
				const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
				const offsetPosition = targetPosition - headerHeight - 20;

				window.scrollTo({
					top: offsetPosition,
					behavior: 'smooth'
				});

				// Update focus for accessibility
				target.setAttribute('tabindex', '-1');
				target.focus({ preventScroll: true });
			}
		}
	},

	/**
	 * FAQ Accordion Module
	 */
	faq: {
		init() {
			const faqItems = document.querySelectorAll('.faq-item');
			if (faqItems.length === 0) return;

			faqItems.forEach(item => {
				const question = item.querySelector('.faq-item__question');
				if (question) {
					question.addEventListener('click', () => {
						// Close other items
						faqItems.forEach(otherItem => {
							if (otherItem !== item && otherItem.hasAttribute('open')) {
								otherItem.removeAttribute('open');
							}
						});
					});
				}
			});
		}
	},

	/**
	 * Accessibility Enhancements
	 */
	accessibility: {
		init() {
			this.handleFocusVisible();
			this.handleReducedMotion();
		},

		handleFocusVisible() {
			document.body.addEventListener('keydown', (e) => {
				if (e.key === 'Tab') {
					document.body.classList.add('using-keyboard');
				}
			});

			document.body.addEventListener('mousedown', () => {
				document.body.classList.remove('using-keyboard');
			});
		},

		handleReducedMotion() {
			const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
			
			const updateMotionPreference = (e) => {
				if (e.matches) {
					document.documentElement.classList.add('reduced-motion');
				} else {
					document.documentElement.classList.remove('reduced-motion');
				}
			};

			updateMotionPreference(mediaQuery);
			mediaQuery.addEventListener('change', updateMotionPreference);
		}
	},

	/**
	 * Utility: Debounce function
	 */
	debounce(func, wait) {
		let timeout;
		return function executedFunction(...args) {
			const later = () => {
				clearTimeout(timeout);
				func(...args);
			};
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
		};
	},

	/**
	 * Utility: Throttle function
	 */
	throttle(func, limit) {
		let inThrottle;
		return function executedFunction(...args) {
			if (!inThrottle) {
				func(...args);
				inThrottle = true;
				setTimeout(() => inThrottle = false, limit);
			}
		};
	}
};

// Initialize when DOM is ready
if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', () => WesCarrHealth.init());
} else {
	WesCarrHealth.init();
}

// Export for use in other scripts
window.WesCarrHealth = WesCarrHealth;
