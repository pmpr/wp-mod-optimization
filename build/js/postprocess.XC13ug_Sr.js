/*! For license information please see postprocess.XC13ug_Sr.js.LICENSE.txt */
Array.from(document.querySelectorAll(".pr-opt-clone")).map((e=>{const t=e.getAttribute("data-opt-type").toLowerCase();switch(t){case"sr6-module":case"sr7-module":case"rs-module":const o=function(e,t){let o=!1;switch(e){case"sr6-module":case"sr7-module":case"rs-module":if(o=t.getAttribute(t,"data-id"),void 0===o||""===o||null===o){let e=0,n=t.id.split("_");for(;e<n.length;){const t=n[e];if(!isNaN(t)){o=t;break}e++}}}return o}(t,e);if(o){const t=`revapi${o}`,n=`pr_opt_${t}`;void 0===window[t]&&Object.defineProperty(window,t,{get(){return this[n]},set(t){this[n]=t;let o=t.element;void 0===o&&(o=t[0]),t.one("revolution.slide.onloaded",(()=>{e.remove()}))}})}}})),document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector(".pr-opt-lcp-item");null!==e&&e instanceof Element&&(e.style["font-family"]=null)}));