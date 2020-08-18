let getUrl = globalObject.homeUrl;
let newUrl = getUrl.replace('es', '');
let mainUrl = newUrl;
const body = document.body;
const overlay = document.getElementById('overlay');
const loader = document.getElementById('loader');
const header = document.querySelector('.site-header');
const nav = document.querySelector('nav.nav');
const open = document.querySelectorAll('a.nav-toggle-open');
const close = document.querySelector('a.nav-toggle-close');
const features = document.querySelectorAll('.feature');
let width;

document.addEventListener('DOMContentLoaded', intersectionObserver);
function intersectionObserver() {
	const imageObserver = new IntersectionObserver(
		(entries, imgObserver) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					let lazyImage = entry.target;
					let srcset = lazyImage.dataset.srcset;
					lazyImage.srcset = srcset;
					lazyImage.src = srcset;
					lazyImage.classList.remove('lazy');
					if (lazyImage.srcset != '') {
						lazyImage.nextElementSibling.classList.remove('on');
					}
					imgObserver.unobserve(lazyImage);
				}
			});
		},
		{ rootMargin: '250px 0px' }
	);
	featureImages();
	const images = document.querySelectorAll('img.lazy');
	images.forEach(image => {
		imageObserver.observe(image);
	});
}

function featureImages() {
	checkWindowWidth();
	if (body.classList.contains('home')) {
		features.forEach(feature => {
			let image = feature.getElementsByTagName('img')[0];
			let main = image.dataset.main;
			let mainSrcset = main.split(', ');
			let mobile = image.dataset.mobile;
			let mobileSrcset = mobile.split(', ');
			let targetSrcset;
			let arr = [];

			if (width < 992) {
				targetSrcset = mobileSrcset;
			} else {
				targetSrcset = mainSrcset;
			}
			//console.log(targetSrcset);

			targetSrcset.forEach(src => {
				let obj = {};
				let srcset = src.split(' ');
				//console.log(srcset);
				srcset[1] = srcset[1].slice(0, -1);
				obj.width = srcset[1];
				obj.src = srcset[0];
				//console.log(obj);
				arr.push(obj);
			});

			arr.sort(function (a, b) {
				return a.width - b.width;
			});
			//console.log(arr);

			let w;
			let s;
			for (let i = 0, l = arr.length; i < l; i++) {
				if (arr[i].width > width) {
					w = arr[i].width;
					s = arr[i].src;
					break;
				} else {
					w = arr[l - 1].width;
					s = arr[l - 1].src;
				}
			}
			//console.log(w + ' : ' + s);

			if (image.classList.contains('lazy')) {
				image.dataset.srcset = s;
			} else {
				image.dataset.srcset = s;
				image.srcset = s;
				image.src = s;
			}

			/*if (width < 768) {
				if (mobile != '') {
					image.dataset.srcset = mobile;
					image.srcset = mobile;
					image.src = mobile;
				}
			} else {
				image.dataset.srcset = main;
				image.srcset = main;
				image.src = main;
			}*/
		});
	}
}

function checkWindowWidth() {
	width = window.innerWidth;
}

function checkMobile() {
	if (window.navigator.userAgent.includes('Mobi')) {
		body.classList.add('mobile');
	} else {
		body.classList.add('desktop');
	}
}

function loading() {
	nav.style.display = 'block';
	loader.classList.add('loaded');
	overlay.classList.add('loaded');
	setTimeout(function () {
		overlay.style.display = 'none';
	}, 1500);
}

window.onload = function () {
	checkMobile();
	checkWindowWidth();
	showHomeHeader();
	siteTitle();
	headerAppt();
	navAppt();
	menuItemIcon();
	navSubItems();
	navCloseText();
	loading();
};

window.onresize = function () {
	checkMobile();
	checkWindowWidth();
	siteTitle();
	headerAppt();
	navAppt();
	navSubItems();
	navCloseText();
	featureImages();
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

/* Deprecated */
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
		if (width < 768) {
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

/* Deprecated */
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

document.addEventListener('keydown', function (e) {
	if (e.keyCode === 9) {
		e.preventDefault();
		open[0].click();
	}
	if (e.keyCode === 27) {
		close.click();
	}
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
