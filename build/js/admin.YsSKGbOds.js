/*! For license information please see admin.YsSKGbOds.js.LICENSE.txt */
(()=>{"use strict";var e={91:(e,t,n)=>{n.r(t)}},t={};function n(o){var a=t[o];if(void 0!==a)return a.exports;var r=t[o]={exports:{}};return e[o](r,r.exports,n),r.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{const e=jQuery;var t=n.n(e);const o=()=>{PMPRModal.update({refresh:!0})};t()(document).ready((function(){const e={sendRequest:(e,t={},n=!1)=>{e=PMPRUtil.getSettingByPath(`purge.ajax.${e}`),PMPRUtil.isEmpty(e)||PMPRRequest.post(e,t).addNonce().setBefore((()=>{PMPRModal.close()})).setSuccess((()=>{n&&o()})).send()},purgeCache:()=>{e.sendRequest("purge_cache")},purgeSingleCache:t=>{PMPRUtil.isEmpty(t)||e.sendRequest("purge_single_cache",t,!0)}};let n=t()("#opt_purge_opcache");PMPRUtil.isEmpty(n)||n.on("click",(t=>{t.preventDefault(),e.sendRequest("purge_opcache")})),t()(document).on("click",".opt-purge-cache",(t=>{t.preventDefault(),e.purgeCache()})),t()(document).on("click",".opt-purge-post-cache",(n=>{n.preventDefault();let o=t()(n.target);if(!PMPRUtil.isEmpty(o)){let t={},n=["post","term","page","permalink"];for(let e of n){let n=o.data(e);if(!PMPRUtil.isEmpty(n)){t[e]=n;break}}e.purgeSingleCache(t)}}))})),t()(document).ready((function(){t()(document).on("click",".opt-start-preload",(e=>{e.preventDefault(),function(e,t={}){e=PMPRUtil.getSettingByPath(`preload.ajax.${e}`),PMPRRequest.post(e,t).setBefore((()=>{PMPRModal.close()})).addNonce().send()}("start")}))})),n(91),t()(document).ready((function(){function e(n){let o=PMPRUtil.getSettingByPath("page.ajax.check_status");PMPRRequest.post(o,{level:n.data("level"),permalink:n.data("permalink")}).disableLoading().disableModal().addNonce().setSuccess((function(o){PMPRUtil.isEmpty(o)?setTimeout(e,15e3,n):n.replaceWith(t()(o))})).send()}t()(".update-budget").on("click",(function(e){e.preventDefault();let t=PMPRUtil.getSettingByPath("page.ajax.check_budget");PMPRRequest.post(t,{}).addNonce().setSuccess((()=>{PMPRModal.update({refresh:!0})})).send()})),t()('.pr-icon[data-status="running"]').each((function(){setTimeout(e,15e3,t()(this))}))}))})()})();