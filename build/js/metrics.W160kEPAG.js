/*! For license information please see metrics.W160kEPAG.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getType(),o=PRHelper.getHook(),c=PRHelper.getServer(),n=PRHelper.getRequest(),a=PRHelper.getSetting();o.on("load",r);let s={};function r(){s={},n.ajax(a.getOption("ajax.get_pages")).onSuccess((e=>{const o=e;t.isEmpty(o)||d(o)})).onError((e=>{console.log(e)})).addNonce().send()}function d(e,o=0){if(e.hasOwnProperty(o)){const t=e[o].id,c=e[o].url;i(t,c,"desktop").then((()=>{i(t,c,"mobile").then((()=>{d(e,++o)})).catch((e=>{console.log(e)}))})).catch((e=>{console.log(e)}))}else t.isEmpty(s)||(c=s,n.ajax(a.getOption("ajax.update_pages")).addNonce().onSuccess(r).send({pages:c}));var c}async function i(o,n,a){return new Promise(((r,d)=>{void 0!==s[o]&&void 0!==s[o][a]&&d("metric already extracted.");const i=c.addParams({"dont-opt":1,"calc-metrics":1,device:a},n),l=e.createElement(`<iframe id="calc_metrics" data-device="${a}"  src="${i}" class="${a}"/>`);l.onload=()=>{const e=l.contentWindow.opt_lcp;t.isEmpty(e)?d("can not detect lcp item."):(void 0===s[o]&&(s[o]={}),s[o][a]=e,l.remove(),r("lcp item extracted."))},e.append(l,"body")}))}}();