/*! For license information please see subscription.H1H5Rgd59.js.LICENSE.txt */
(()=>{var e={510:(e,t,o)=>{"use strict";o.r(t)}},t={};function o(r){var n=t[r];if(void 0!==n)return n.exports;var l=t[r]={exports:{}};return e[r](l,l.exports,o),l.exports}o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o(510),function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),o=PRHelper.getTool(),r=PRHelper.getSetting(),n=PRHelper.getRequest(),l=PRBackendHelper.getModal();t.bubbling("click",(t=>{let a=e.getTarget(t);e.setElementActivity(a),n.ajax(r.getOption("ajax.sync_data")).addNonce().onSuccess((e=>{l.show({content:e,type:"primary",onClose:()=>o.reload()})})).onError((e=>{l.show({content:e,type:"danger"})})).onFinally((()=>{e.setElementActivity(a,!0)})).send()}),".opt-sync-data")}()})();