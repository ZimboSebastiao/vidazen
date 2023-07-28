!function(){"use strict";function e(e,t){return!!e.includes(parseInt(t))||!!e.includes(t.toString())}function t(e,t){return parseInt(e+t)}function n(e){let t=""+e.getMinutes();return 1===t.length&&(t="0"+t),e.getHours()+":"+t}function a(e){this.qlwapp=e,this.init(this)}a.prototype={open:function(e,t){let n="https://api.whatsapp.com/send";this.mobiledevice||(n="https://web.whatsapp.com/send");const a=t,s=a.dataset.message||"",o=a.dataset.phone||"",i=a.dataset.type||"phone",l=a.dataset.group||"";"group"==i?a.setAttribute("href",l):a.setAttribute("href",n+"?phone="+o+"&text="+s);const p=new CustomEvent("qlwapp.click",{bubbles:!0,cancelable:!0});this.qlwapp.dispatchEvent(p)},toggle:function(e){e.preventDefault();const t=new CustomEvent("qlwapp.toggle");this.qlwapp.dispatchEvent(t)},chat:function(e,t){e.preventDefault();const n=t.closest(".qlwapp-box"),a=n.querySelector(".qlwapp-reply"),s=n.querySelector(".qlwapp-header"),o=t.querySelector(".qlwapp-avatar img")?.getAttribute("src"),i=t.querySelector(".qlwapp-name")?.textContent,l=t.querySelector(".qlwapp-label")?.textContent,p=t.querySelector(".qlwapp-time")?.textContent,c=t.dataset.message,r=t.dataset.type,u=t.dataset.group,d=t.dataset.phone;n.classList.add("response","opening"),this.qlwapp.dispatchEvent(new CustomEvent("qlwapp.height")),setTimeout((function(){n.classList.remove("opening")}),300);const w=s.querySelector(".qlwapp-avatar img"),q=s.querySelector(".qlwapp-number"),m=s.querySelector(".qlwapp-name"),g=s.querySelector(".qlwapp-label"),f=n.querySelector(".qlwapp-message");w&&(w.setAttribute("src",o),w.setAttribute("alt",i)),q&&(q.innerHTML=u),m&&(m.innerHTML=i),g&&(g.innerHTML=p?p+" - "+l:l),f&&(f.innerHTML=c),a.dataset[r]="phone"==r?d:u,a.dataset.type=r},previous:function(e,t){e.preventDefault();const n=t.closest(".qlwapp-box");n.classList.add("closing"),setTimeout((function(){n.classList.remove("response","closing"),n.classList.remove("texting")}),300)},init:function(a){const s=new CustomEvent("qlwapp.init"),o=new CustomEvent("qlwapp.resize"),i=this.qlwapp;if(i.classList.add("qlwapp-js-ready"),i.classList.contains("auto-load")&&!function(e){const t=document.cookie.match("(^|;) ?qlwapp-auto-load=([^;]*)(;|$)");return t?t[2]:null}()){const e=Number(i.dataset.autoloadelay);setTimeout((()=>{a.toggle()}),e),function(e,t,n){const a=new Date;a.setTime(a.getTime()+864e5*n),document.cookie=e+"="+t+";path=/;expires="+a.toGMTString()}("qlwapp-auto-load","auto open cookie",1)}i.addEventListener("qlwapp.init",(function(e){a.mobiledevice=function(){const e=window.matchMedia("(pointer:coarse)");return e&&e.matches}()})),i.addEventListener("qlwapp.time",(function(a){const s=a.target,o=JSON.parse(s.dataset.timedays)||[],i=parseInt(s.dataset.timezone)||0,l=new Date((new Date).getTime()+60*i*1e3).getUTCDay().toString(),p=s.querySelector(".qlwapp-days"),c=s.querySelector(".qlwapp-time");if(o&&o.length&&!o.includes(l)){s.classList.add("qlwapp-timeout"),p&&(p.style.display="block"),c&&(c.style.display="none");const t=function(t,n){for(let a=t;a<=6;a++)if(e(n,a))return a;for(let a=0;a<=t;a++)if(e(n,a))return a}(l,o),n=s.querySelector(`.day${t}`);return n&&n.classList.add("qlwapp-available-day"),!0}o&&o.length&&o.includes(l)&&(p&&(p.style.display="none"),c&&(c.style.display="block"));const r=s.dataset.timefrom||!1,u=s.dataset.timeto||!1;if(!u||!r||r===u)return!0;const d=new Date,w=-d.getTimezoneOffset()-i,q=new Date,m=new Date;let g,f;g=t(r[0],r[1]),f=t(r[3],r[4]),m.setHours(g),m.setMinutes(f+w),g=t(u[0],u[1]),f=t(u[3],u[4]),q.setHours(g),q.setMinutes(f+w);let y=m.getTime(),v=q.getTime();if(y>v&&(y-=864e5),d.getTime()>=y&&d.getTime()<=v||(s.classList.add("qlwapp-timeout"),p&&(p.style.display="none"),c&&(c.style.display="block")),!i)return!0;s.querySelector(".from").textContent=n(m),s.querySelector(".to").textContent=n(q)})),i.addEventListener("qlwapp.pro",(function(){const e=i.querySelector(".qlwapp-toggle"),t=i.querySelectorAll(".qlwapp-account"),n=new CustomEvent("qlwapp.time",{bubbles:!0});e.dispatchEvent(n),t.forEach((function(e){e.dispatchEvent(n)}))})),i.addEventListener("qlwapp.resize",(function(){this.classList.contains("qlwapp-show")&&a.toggle()})),i.addEventListener("qlwapp.init",(function(){a.mobiledevice?(i.classList.add("mobile"),i.classList.remove("desktop")):(i.classList.add("desktop"),i.classList.remove("mobile")),i.classList.add("qlwapp-js-ready")})),i.addEventListener("qlwapp.init",(function(){if(i.classList.contains("qlwapp-premium")){const e=new CustomEvent("qlwapp.pro");i.dispatchEvent(e)}})),i.addEventListener("qlwapp.height",(function(e){const t=e.currentTarget,n=t.querySelector(".qlwapp-body").querySelector(".qlwapp-carousel"),s=t?.querySelector(".qlwapp-header")?.offsetHeight||0,o=t?.querySelector(".qlwapp-footer")?.offsetHeight||0;if(!n)return;let i=window.innerHeight-s-o;a.mobiledevice||(i=.7*window.innerHeight-s-o),n.style.maxHeight=i+"px"})),i.addEventListener("qlwapp.toggle",(function(e){const t=e.currentTarget,n=t.querySelector(".qlwapp-box");t.classList.add("qlwapp-transition"),n.classList.remove("response","texting"),setTimeout((function(){t.classList.toggle("qlwapp-show");const e=new CustomEvent("qlwapp.height",{bubbles:!0});t.dispatchEvent(e)}),10),setTimeout((function(){t.classList.toggle("qlwapp-transition")}),300)})),i.addEventListener("click",(function(e){const t=e.target.closest("[data-action]");if(!t||!i.contains(t))return;const n=t.dataset?.action;switch(n){case"open":a.open(e,t);break;case"box":case"close":a.toggle(e,t);break;case"chat":a.chat(e,t);break;case"previous":a.previous(e,t)}})),i.querySelector("[data-action=response]")?.addEventListener("click",(function(e){e.target.matches("textarea")})),i.querySelector("[data-action=response]")?.addEventListener("keypress",(function(e){e.target.matches("textarea")&&13==e.keyCode&&setTimeout((function(){!function(e){if("createEvent"in document){const t=e.ownerDocument,n=t.createEvent("MouseEvents");n.initMouseEvent("click",!0,!0,t.defaultView,1,0,0,0,0,!1,!1,!1,!1,0,null),e.dispatchEvent(n)}else e.click()}(i.querySelector(".qlwapp-reply"))}),100)})),i.querySelector("[data-action=response]")?.addEventListener("keyup",(function(e){if(e.target.matches("textarea")){e.preventDefault();const t=e.currentTarget,n=e.target,a=t.querySelector("pre"),s=t.querySelector(".qlwapp-reply"),o=i.querySelector(".qlwapp-box"),l=o.querySelector(".qlwapp-buttons");a.innerHTML=n.value,setTimeout((function(){o.classList.add("texting"),o.style.paddingBottom=a.offsetHeight+"px",l.classList.add("active");const e=n.value;s.dataset.message=e,""==e&&(o.classList.remove("texting"),l.classList.remove("active"))}),300)}})),i.dispatchEvent(s),window.addEventListener("click",(e=>{if(!e.target.closest("#qlwapp.qlwapp-show")){const e=document.querySelector("#qlwapp.qlwapp-show");e&&e.dispatchEvent(new CustomEvent("qlwapp.toggle"))}})),window.addEventListener("resize",(()=>{const e=document.querySelector("#qlwapp");e&&(e.dispatchEvent(o),e.dispatchEvent(s))}))}};var s=a;(()=>{window.qlwapp=(e,t)=>{if(void 0===t||"object"==typeof t)e.plugin_qlwapp||(e.plugin_qlwapp=new s(e,t));else if("string"==typeof t&&"_"!==t[0]&&"init"!==t){let n;const a=e.plugin_qlwapp;if(a instanceof s&&"function"==typeof a[t]){const e=Array.from(arguments).slice(1);n=a[t](...e)}return"destroy"===t&&(e.plugin_qlwapp=null),void 0!==n?n:e}};const e=()=>{document.querySelectorAll(".qlwapp").forEach((function(e){window.qlwapp(e)}))};e(),window.addEventListener("load",(()=>{e()}))})()}();