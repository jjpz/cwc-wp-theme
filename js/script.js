"use strict";var width,getUrl=globalObject.homeUrl,newUrl=getUrl.replace("es",""),mainUrl=newUrl,body=document.body,overlay=document.getElementById("overlay"),loader=document.getElementById("loader"),header=document.querySelector(".site-header"),nav=document.querySelector("nav.nav"),open=document.querySelectorAll("a.nav-toggle-open"),close=document.querySelector("a.nav-toggle-close"),features=document.querySelectorAll(".feature");function intersectionObserver(){var t=new IntersectionObserver(function(e,o){e.forEach(function(e){var t,n;e.isIntersecting&&(n=(t=e.target).dataset.srcset,t.srcset=n,t.src=n,t.classList.remove("lazy"),""!=t.srcset&&t.nextElementSibling.classList.remove("on"),o.unobserve(t))})},{rootMargin:"250px 0px"});featureImages(),document.querySelectorAll("img.lazy").forEach(function(e){t.observe(e)})}function featureImages(){checkWindowWidth(),body.classList.contains("home")&&features.forEach(function(e){var t,n=e.getElementsByTagName("img")[0],o=n.dataset.main.split(", "),c=n.dataset.mobile.split(", "),i=[],r=width<992?c:o;r.forEach(function(e){var t={},n=e.split(" ");n[1]=n[1].slice(0,-1),t.width=n[1],t.src=n[0],i.push(t)}),i.sort(function(e,t){return e.width-t.width});for(var s=0,a=i.length;s<a;s++){if(i[s].width>width){i[s].width,t=i[s].src;break}i[a-1].width,t=i[a-1].src}n.classList.contains("lazy")?n.dataset.srcset=t:(n.dataset.srcset=t,n.srcset=t,n.src=t)})}function checkWindowWidth(){width=window.innerWidth}function checkMobile(){window.navigator.userAgent.includes("Mobi")?body.classList.add("mobile"):body.classList.add("desktop")}function loading(){nav.style.display="block",loader.classList.add("loaded"),overlay.classList.add("loaded"),setTimeout(function(){overlay.style.display="none"},1500)}function showHomeHeader(){body.classList.contains("home")&&(header.style.display="flex",document.querySelector(".home-header").scrollHeight+document.querySelector(".home-intro").scrollHeight<window.scrollY?header.classList.add("sticky"):header.classList.remove("sticky"))}function siteLogo(){var e=document.querySelectorAll(".site-logo"),n=mainUrl+"/wp-content/themes/cwc/images/logos/cwc-site-header-logo-main.svg",o=mainUrl+"/wp-content/themes/cwc/images/logos/cwc-site-header-logo-mobile.svg";e.forEach(function(t){width<992?fetch(o).then(function(e){return e.text()}).then(function(e){t.innerHTML=e}):fetch(n).then(function(e){return e.text()}).then(function(e){t.innerHTML=e})})}function siteTitle(){document.querySelectorAll("h1.site-title").forEach(function(e){e.textContent=width<768?"CWC":"Collaborative Women's Care"})}function headerAppt(){var e=header.querySelector("a.appt-link");e.style.display=width<992?"none":"flex"}function navAppt(){var e=nav.querySelector(".site-header"),t=nav.querySelector(".site-branding"),n=nav.querySelector(".nav-appointment");width<992?e.insertAdjacentElement("afterend",n):t.insertAdjacentElement("afterend",n)}function apptIcon(){var e=document.querySelectorAll("a.appt-link > span.appt-link-icon"),n=mainUrl+"/wp-content/themes/cwc/images/icons/icon-link-schedule-big.svg",o=mainUrl+"/wp-content/themes/cwc/images/icons/icon-link-schedule-small.svg";e.forEach(function(t){width<992?fetch(o).then(function(e){return e.text()}).then(function(e){t.innerHTML=e}):fetch(n).then(function(e){return e.text()}).then(function(e){t.innerHTML=e})})}function menuItemIcon(){var n=mainUrl+"/wp-content/themes/cwc/images/icons/icon-link.svg";nav.querySelectorAll("ul.menu > li > a").forEach(function(e){var t=document.createElement("span");fetch(n).then(function(e){return e.text()}).then(function(e){t.innerHTML=e}),e.prepend(t)})}function navSubItems(){var e=nav.querySelector("ul.sub-menu").children,t=nav.querySelector("p.menu-item-description");if(width<768){t.style.display="none";for(var n=0;n<e.length-1;n++)e[n].style.display="none"}else{t.style.display="block";for(var o=0;o<e.length;o++)e[o].style.display="block"}}function navCloseText(){var e=nav.querySelector(".nav-toggle-text");e.style.display=width<992?"none":"block"}document.addEventListener("DOMContentLoaded",intersectionObserver),window.onload=function(){checkMobile(),checkWindowWidth(),showHomeHeader(),siteTitle(),headerAppt(),navAppt(),menuItemIcon(),navSubItems(),navCloseText(),loading()},window.onresize=function(){checkMobile(),checkWindowWidth(),siteTitle(),headerAppt(),navAppt(),navSubItems(),navCloseText(),featureImages()},window.onscroll=function(){showHomeHeader()},open.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),body.classList.add("no-scroll"),nav.classList.add("open")})}),close.addEventListener("click",function(e){e.preventDefault(),nav.scroll(0,0),nav.classList.remove("open"),body.classList.remove("no-scroll")}),document.addEventListener("keydown",function(e){9===e.keyCode&&(e.preventDefault(),open[0].click()),27===e.keyCode&&close.click()}),document.querySelectorAll('a[href="#insurances"]').forEach(function(e){e.addEventListener("click",function(e){var t;e.preventDefault(),body.classList.contains("home")?(nav.scroll(0,0),nav.classList.remove("open"),body.classList.remove("no-scroll"),document.getElementById("insurances").scrollIntoView({behavior:"smooth",block:"start"})):(t=document.querySelector("a.site-branding").href,window.location=t+"#insurances")})});