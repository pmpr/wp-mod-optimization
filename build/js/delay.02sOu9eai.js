/*! For license information please see delay.02sOu9eai.js.LICENSE.txt */
(()=>{class t{constructor(){this.loadApproach="{{ load_approach }}",this.triggerEvents=["wheel","keydown","touchend","mousedown","mousemove","touchmove","touchstart"],this.scriptsLoaded=!1,this.userEventHandler=this.triggerListener.bind(this),this.touchStartHandler=this.onTouchStart.bind(this),this.touchMoveHandler=this.onTouchMove.bind(this),this.touchEndHandler=this.onTouchEnd.bind(this),this.clickHandler=this.onClick.bind(this),this.interceptedClicks=[],this.interceptedClickListeners=[],this.interceptClickListeners(this),window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.everythingLoaded&&this.triggerLastFunctions()})),document.addEventListener("DOMContentLoaded",(()=>{this.preconnect3rdParties()})),this.isLoadByUserInteraction()||(window.onload=this.loadEverythingNow.bind(this)),this.delayedAssets={normal:[],async:[],defer:[],style:[]},this.trash=[],this.allJQueries=[]}isLoadByUserInteraction(){return"user_interaction"===this.loadApproach}addUserInteractionListener(t){document.hidden?t.triggerListener():(this.triggerEvents.forEach((e=>window.addEventListener(e,t.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler))}removeUserInteractionListener(){this.triggerEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0})),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this.disableOtherEventListeners(t.target,!0),this.renameDOMAttribute(t.target,"onclick","opt-onclick"),this.pendingClickStarted()}onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this.disableOtherEventListeners(t.target,!1),this.renameDOMAttribute(t.target,"opt-onclick","onclick"),this.pendingClickFinished()}onTouchEnd(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}onClick(t){t.target.removeEventListener("click",this.clickHandler),this.disableOtherEventListeners(t.target,!1),this.renameDOMAttribute(t.target,"opt-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this.pendingClickFinished()}replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))}))}interceptClickListeners(t){EventTarget.prototype.addEventListenerBase=EventTarget.prototype.addEventListener,EventTarget.prototype.addEventListener=function(e,i,n){("click"!==e||t.windowLoaded||i===t.clickHandler)&&t.interceptedClickListeners.push({target:this,func:i,options:n}),(this||window).addEventListenerBase(e,i,n)}}disableOtherEventListeners(t,e){this.interceptedClickListeners.forEach((i=>{i.target===t&&(e?t.removeEventListener("click",i.func,i.options):t.addEventListener("click",i.func,i.options))})),t!==document.documentElement&&t.parentNode!==document.documentElement&&this.disableOtherEventListeners(t.parentNode,e)}waitForPendingClicks(){return new Promise((t=>{this.isClickPending?this.pendingClickFinished=t:t()}))}pendingClickStarted(){this.isClickPending=!0}pendingClickFinished(){this.isClickPending=!1}triggerListener(){this.removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this.loadEverythingNow.bind(this)):this.loadEverythingNow()}preconnect3rdParties(){let t=[];document.querySelectorAll("script.optdelayasset[data-opt-src]").forEach((e=>{let i=e.getAttribute("data-opt-src");if(i&&0!==i.indexOf("data:")){0===i.indexOf("//")&&(i=location.protocol+i);try{let n=new URL(i).origin;n!==location.origin&&t.push({src:n,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-opt-type")})}catch(t){}}})),t.length>0&&(t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.batchInjectResourceHints(t,"preconnect"))}async loadScripts(){if(this.lastBreath=Date.now(),!this.scriptsLoaded){this.delayEventListeners(this),this.delayJQueryReady(this),this.handleDocumentWrite(),this.preloadAllScripts(),await this.loadAssetsFromList(this.delayedAssets.normal),await this.loadAssetsFromList(this.delayedAssets.defer),await this.loadAssetsFromList(this.delayedAssets.async);try{await this.triggerDOMContentLoaded(),await this.pendingWebpackRequests(this),await this.triggerWindowLoad()}catch(t){}}this.scriptsLoaded=!0}async loadEverythingNow(){this.registerAllDelaiedAssets(),await this.loadAssetsFromList(this.delayedAssets.style),setTimeout((()=>{document.querySelectorAll("link.optdelayasset").forEach((t=>{t.removeAttribute("media")}))}),1e3),await this.loadScripts(),window.dispatchEvent(new Event("opt-delay-loaded")),this.everythingLoaded=!0,this.waitForPendingClicks().then((()=>this.replayClicks())),this.emptyTrash()}registerAllDelaiedAssets(){document.querySelectorAll(".optdelayasset").forEach((t=>{"link"===t.tagName.toLowerCase()?this.delayedAssets.style.push(t):t.hasAttribute("data-opt-src")?t.hasAttribute("data-async")&&!1!==t.getAttribute("data-async")?this.delayedAssets.async.push(t):t.hasAttribute("data-defer")&&!1!==t.getAttribute("data-defer")||"module"===t.getAttribute("data-opt-type")?this.delayedAssets.defer.push(t):this.delayedAssets.normal.push(t):this.delayedAssets.normal.push(t)}))}async transformScript(t){if(await this.littleBreath(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function n(){(i||t).setAttribute("data-opt-status","executed"),e()}try{if(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)i=document.createElement("script"),Array.from(t.attributes).forEach((t=>{let e=t.nodeName;if("type"!==e){switch(e){case"data-opt-type":e="type";break;case"data-opt-src":e="src"}i.setAttribute(e,t.nodeValue)}})),t.text&&(i.text=t.text),i.hasAttribute("src")?(i.addEventListener("load",n),i.addEventListener("error",(t=>{console.log(t),i.setAttribute("data-opt-status","failed"),e()})),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,n()),t.parentNode.replaceChild(i,t);else{let i=t.getAttribute("data-opt-type"),s=t.getAttribute("data-opt-src");i?(t.type=i,t.removeAttribute("data-opt-type")):t.removeAttribute("type"),t.addEventListener("load",n),t.addEventListener("error",(i=>{console.log(i),t.setAttribute("data-opt-status","failed"),e()})),s?(t.removeAttribute("data-opt-src"),t.src=s):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){console.log(i),t.setAttribute("data-opt-status","failed"),e()}}));t.setAttribute("data-opt-status","skipped")}async loadAssetsFromList(t){const e=t.shift();return e&&e.isConnected?(await this.transformScript(e),this.loadAssetsFromList(t)):Promise.resolve()}preloadAllScripts(){this.batchInjectResourceHints([...this.delayedAssets.normal,...this.delayedAssets.defer,...this.delayedAssets.async],"preload")}batchInjectResourceHints(t,e){let i=document.createDocumentFragment();t.forEach((t=>{let n=this.getAttribute(t,"data-opt-src",t.src);if(n){let s=document.createElement("link");s.href=n,s.rel=e,"preconnect"!==e&&(s.as="script"),"module"===this.getAttribute(t,"data-opt-type")&&(s.crossOrigin=!0),t.crossOrigin&&(s.crossOrigin=t.crossOrigin),t.integrity&&(s.integrity=t.integrity),i.appendChild(s),this.trash.push(s)}})),document.head.appendChild(i)}delayEventListeners(t){let e={};function i(i,n){return e[n].eventsToRewrite.indexOf(i)>=0&&!t.everythingLoaded?"opt-"+i:i}function n(t,n){let s=t;e[t]||(e[s]={originalFunctions:{add:s.addEventListener,remove:s.removeEventListener},eventsToRewrite:[]},s.addEventListener=function(){arguments[0]=i(arguments[0],s),e[s].originalFunctions.add.apply(s,arguments)},s.removeEventListener=function(){arguments[0]=i(arguments[0],s),e[s].originalFunctions.remove.apply(s,arguments)}),e[t].eventsToRewrite.push(n)}function s(e,i){let n=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>n||function(){},set(s){t.everythingLoaded?n=s:e["opt"+i]=n=s}})}n(document,"DOMContentLoaded"),n(window,"DOMContentLoaded"),n(window,"load"),n(window,"pageshow"),n(document,"readystatechange"),s(document,"onreadystatechange"),s(window,"onload"),s(window,"onpageshow")}delayJQueryReady(t){let e;function i(e){return t.everythingLoaded||(e=e.split(" ").map((t=>"load"===t||0===t.indexOf("load.")?"opt-jquery-load":t)).join(" ")),e}function n(n){if(n&&n.fn&&!t.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(n):document.addEventListener("opt-DOMContentLoaded",(()=>e.bind(document)(n))),n([])};let e=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{let e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),e.apply(this,arguments),this},t.allJQueries.push(n)}e=n}n(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){n(t)}})}async pendingWebpackRequests(t){let e=document.querySelector("script[data-webpack]");e&&(await async function(){return new Promise((t=>{e.addEventListener("load",t),e.addEventListener("error",t)}))}(),await t.requestAnimFrame(),await t.pendingWebpackRequests(t))}async triggerDOMContentLoaded(){this.domReadyFired=!0,await this.littleBreath(),document.dispatchEvent(new Event("opt-readystatechange")),await this.littleBreath(),document.optonreadystatechange&&document.optonreadystatechange(),await this.littleBreath(),document.dispatchEvent(new Event("opt-DOMContentLoaded")),await this.littleBreath(),window.dispatchEvent(new Event("opt-DOMContentLoaded"))}async triggerWindowLoad(){await this.littleBreath(),window.dispatchEvent(new Event("opt-load")),await this.littleBreath(),window.optonload&&window.optonload(),await this.littleBreath(),this.allJQueries.forEach((t=>t(window).trigger("opt-jquery-load"))),await this.littleBreath();const t=new Event("opt-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.littleBreath(),window.optonpageshow&&window.optonpageshow({persisted:this.persisted})}triggerLastFunctions(){document.onreadystatechange&&document.onreadystatechange(),window.onload&&window.onload(),window.onpageshow&&window.onpageshow({persisted:this.persisted})}handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let i=document.currentScript;i||console.error("Optimization unable to document.write this: "+e);let n=document.createRange(),s=i.parentElement,r=t.get(i);void 0===r&&(r=i.nextSibling,t.set(i,r));let o=document.createDocumentFragment();n.setStart(o,0),o.appendChild(n.createContextualFragment(e)),s.insertBefore(o,r)}}async littleBreath(){Date.now()-this.lastBreath>45&&(await this.requestAnimFrame(),this.lastBreath=Date.now())}async requestAnimFrame(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}emptyTrash(){this.trash.forEach((t=>t.remove()))}getAttribute(t,e,i=!1){return t.getAttribute&&t.getAttribute(e)||i}renameDOMAttribute(t,e,i){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(i,event.target.getAttribute(e)),event.target.removeAttribute(e))}static init(){const e=new t;e.addUserInteractionListener(e)}}t.init()})();