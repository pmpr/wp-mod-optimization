/*! For license information please see frontend-metrics.nGSrJl-xD.js.LICENSE.txt */
!function(){window.opt_lcp={};const e=new PerformanceObserver((e=>{const t=e.getEntries(),n=t[t.length-1].element;if(console.log(n),window.opt_lcp.img=0,window.opt_lcp.path=(e=>{if("BODY"===e.tagName)return"BODY";const t=[];for(;e.parentElement&&"BODY"!==e.tagName;){let n=1,o=e;for(;o.previousElementSibling;o=o.previousElementSibling,n++);t.unshift(e.tagName+":nth-child("+n+")"),e=e.parentElement}return t.join(">").toLowerCase()})(n),"img"===n.tagName.toLowerCase())window.opt_lcp.img=1;else{const e=(n.currentStyle||window.getComputedStyle(n,!1)).backgroundImage.match(/url\(["']?([^"']*)["']?\)/);e&&void 0!==e[1]&&(window.opt_lcp.img=1)}}));e.observe({type:"largest-contentful-paint",buffered:!0}),document.addEventListener("visibilitychange",(()=>{"hidden"===document.visibilityState&&(e.takeRecords(),e.disconnect())}))}();