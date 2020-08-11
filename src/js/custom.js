document.addEventListener('DOMContentLoaded', intersection_observer);
function intersection_observer() {
	const imageObserver = new IntersectionObserver(
		(entries, imgObserver) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					const lazyImage = entry.target;
					let srcset = lazyImage.dataset.srcset;
					lazyImage.srcset = srcset;
					lazyImage.src = srcset;
					lazyImage.classList.remove('lazy');
					if (srcset != '') {
						lazyImage.nextElementSibling.classList.remove('on');
					}
					imgObserver.unobserve(lazyImage);
				}
			});
		},
		{ rootMargin: '250px 0px' }
	);
	const images = document.querySelectorAll('img.lazy');
	images.forEach(image => {
		imageObserver.observe(image);
	});
}

let getUrl = globalObject.homeUrl;
let newUrl = getUrl.replace('es', '');
let mainUrl = newUrl;

const body = document.body;
const loader = document.getElementById('loader');
const header = document.querySelector('.site-header');
const nav = document.querySelector('nav.nav');
const open = document.querySelectorAll('a.nav-toggle-open');
const close = document.querySelector('a.nav-toggle-close');

let width;

function checkWindowWidth() {
	width = window.innerWidth;
}

window.onload = function () {
	checkWindowWidth();
	loader.style.opacity = 0;
	nav.style.display = 'block';
	showHomeHeader();
	//siteLogo();
	siteTitle();
	headerAppt();
	navAppt();
	//apptIcon();
	menuItemIcon();
	navSubItems();
	navCloseText();
	setTimeout(function () {
		loader.style.display = 'none';
	}, 500);
};

window.onresize = function () {
	checkWindowWidth();
	//siteLogo();
	siteTitle();
	headerAppt();
	navAppt();
	//apptIcon();
	navSubItems();
	navCloseText();
};

window.onscroll = function () {
	showHomeHeader();
};

function showHomeHeader() {
	if (body.classList.contains('home')) {
		header.style.display = 'flex';
		let home_heder = document.querySelector('.home-header').scrollHeight;
		let home_intro = document.querySelector('.home-intro').scrollHeight;
		let height = home_heder + home_intro;
		let scroll = window.scrollY;
		if (scroll > height) {
			header.classList.add('sticky');
		} else {
			header.classList.remove('sticky');
		}
	}
}

function siteLogo() {
	let site_logos = document.querySelectorAll('.site-logo');
	let logo_main =
		mainUrl +
		'/wp-content/themes/cwc/images/logos/cwc-site-header-logo-main.svg';
	let logo_mobile =
		mainUrl +
		'/wp-content/themes/cwc/images/logos/cwc-site-header-logo-mobile.svg';
	site_logos.forEach(logo => {
		if (width < 992) {
			fetch(logo_mobile)
				.then(response => {
					return response.text();
				})
				.then(data => {
					logo.innerHTML = data;
				});
		} else {
			fetch(logo_main)
				.then(response => {
					return response.text();
				})
				.then(data => {
					logo.innerHTML = data;
				});
		}
	});
}

function siteTitle() {
	let titles = document.querySelectorAll('h1.site-title');
	titles.forEach(title => {
		if (width < 992) {
			title.textContent = 'CWC';
		} else {
			title.textContent = "Collaborative Women's Care";
		}
	});
}

function headerAppt() {
	let appt = header.querySelector('a.appt-link');
	if (width < 992) {
		appt.style.display = 'none';
	} else {
		appt.style.display = 'flex';
	}
}

function navAppt() {
	let navHeader = nav.querySelector('.site-header');
	let navBranding = nav.querySelector('.site-branding');
	let navAppt = nav.querySelector('.nav-appointment');
	if (width < 992) {
		navHeader.insertAdjacentElement('afterend', navAppt);
	} else {
		navBranding.insertAdjacentElement('afterend', navAppt);
	}
}

function apptIcon() {
	let icons = document.querySelectorAll('a.appt-link > span.appt-link-icon');
	let icon_big =
		mainUrl +
		'/wp-content/themes/cwc/images/icons/icon-link-schedule-big.svg';
	let icon_small =
		mainUrl +
		'/wp-content/themes/cwc/images/icons/icon-link-schedule-small.svg';
	icons.forEach(icon => {
		if (width < 992) {
			fetch(icon_small)
				.then(response => {
					return response.text();
				})
				.then(data => {
					icon.innerHTML = data;
				});
		} else {
			fetch(icon_big)
				.then(response => {
					return response.text();
				})
				.then(data => {
					icon.innerHTML = data;
				});
		}
	});
}

function menuItemIcon() {
	let svg = mainUrl + '/wp-content/themes/cwc/images/icons/icon-link.svg';
	let items = nav.querySelectorAll('ul.menu > li > a');
	items.forEach(item => {
		let icon = document.createElement('span');
		fetch(svg)
			.then(response => {
				return response.text();
			})
			.then(data => {
				icon.innerHTML = data;
			});
		item.prepend(icon);
	});
}

function navSubItems() {
	let submenu = nav.querySelector('ul.sub-menu');
	let items = submenu.children;
	let itemDesc = nav.querySelector('p.menu-item-description');
	if (width < 768) {
		itemDesc.style.display = 'none';
		for (let i = 0; i < items.length - 1; i++) {
			items[i].style.display = 'none';
		}
	} else {
		itemDesc.style.display = 'block';
		for (let i = 0; i < items.length; i++) {
			items[i].style.display = 'block';
		}
	}
}

function navCloseText() {
	let close = nav.querySelector('.nav-toggle-text');
	if (width < 992) {
		close.style.display = 'none';
	} else {
		close.style.display = 'block';
	}
}

open.forEach(button => {
	button.addEventListener('click', function (e) {
		e.preventDefault();
		body.classList.add('no-scroll');
		nav.classList.add('open');
	});
});

close.addEventListener('click', function (e) {
	e.preventDefault();
	nav.scroll(0, 0);
	nav.classList.remove('open');
	body.classList.remove('no-scroll');
});

document.querySelectorAll('a[href="#insurances"]').forEach(button => {
	button.addEventListener('click', function (e) {
		e.preventDefault();
		if (body.classList.contains('home')) {
			nav.scroll(0, 0);
			nav.classList.remove('open');
			body.classList.remove('no-scroll');
			let element = document.getElementById('insurances');
			element.scrollIntoView({ behavior: 'smooth', block: 'start' });
		} else {
			let home = document.querySelector('a.site-branding').href;
			window.location = home + '#insurances';
		}
	});
});
