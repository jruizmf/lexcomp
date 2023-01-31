<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
       /*! For license information please see app.js.LICENSE.txt */
(()=>{var t,e={669:(t,e,n)=>{t.exports=n(609)},448:(t,e,n)=>{"use strict";var r=n(867),i=n(26),o=n(372),a=n(327),s=n(97),c=n(109),u=n(985),l=n(61),f=n(655),p=n(263);t.exports=function(t){return new Promise((function(e,n){var d,h=t.data,v=t.headers,g=t.responseType;function m(){t.cancelToken&&t.cancelToken.unsubscribe(d),t.signal&&t.signal.removeEventListener("abort",d)}r.isFormData(h)&&delete v["Content-Type"];var _=new XMLHttpRequest;if(t.auth){var y=t.auth.username||"",b=t.auth.password?unescape(encodeURIComponent(t.auth.password)):"";v.Authorization="Basic "+btoa(y+":"+b)}var w=s(t.baseURL,t.url);function x(){if(_){var r="getAllResponseHeaders"in _?c(_.getAllResponseHeaders()):null,o={data:g&&"text"!==g&&"json"!==g?_.response:_.responseText,status:_.status,statusText:_.statusText,headers:r,config:t,request:_};i((function(t){e(t),m()}),(function(t){n(t),m()}),o),_=null}}if(_.open(t.method.toUpperCase(),a(w,t.params,t.paramsSerializer),!0),_.timeout=t.timeout,"onloadend"in _?_.onloadend=x:_.onreadystatechange=function(){_&&4===_.readyState&&(0!==_.status||_.responseURL&&0===_.responseURL.indexOf("file:"))&&setTimeout(x)},_.onabort=function(){_&&(n(l("Request aborted",t,"ECONNABORTED",_)),_=null)},_.onerror=function(){n(l("Network Error",t,null,_)),_=null},_.ontimeout=function(){var e=t.timeout?"timeout of "+t.timeout+"ms exceeded":"timeout exceeded",r=t.transitional||f.transitional;t.timeoutErrorMessage&&(e=t.timeoutErrorMessage),n(l(e,t,r.clarifyTimeoutError?"ETIMEDOUT":"ECONNABORTED",_)),_=null},r.isStandardBrowserEnv()){var C=(t.withCredentials||u(w))&&t.xsrfCookieName?o.read(t.xsrfCookieName):void 0;C&&(v[t.xsrfHeaderName]=C)}"setRequestHeader"in _&&r.forEach(v,(function(t,e){void 0===h&&"content-type"===e.toLowerCase()?delete v[e]:_.setRequestHeader(e,t)})),r.isUndefined(t.withCredentials)||(_.withCredentials=!!t.withCredentials),g&&"json"!==g&&(_.responseType=t.responseType),"function"==typeof t.onDownloadProgress&&_.addEventListener("progress",t.onDownloadProgress),"function"==typeof t.onUploadProgress&&_.upload&&_.upload.addEventListener("progress",t.onUploadProgress),(t.cancelToken||t.signal)&&(d=function(t){_&&(n(!t||t&&t.type?new p("canceled"):t),_.abort(),_=null)},t.cancelToken&&t.cancelToken.subscribe(d),t.signal&&(t.signal.aborted?d():t.signal.addEventListener("abort",d))),h||(h=null),_.send(h)}))}},609:(t,e,n)=>{"use strict";var r=n(867),i=n(849),o=n(321),a=n(185);var s=function t(e){var n=new o(e),s=i(o.prototype.request,n);return r.extend(s,o.prototype,n),r.extend(s,n),s.create=function(n){return t(a(e,n))},s}(n(655));s.Axios=o,s.Cancel=n(263),s.CancelToken=n(972),s.isCancel=n(502),s.VERSION=n(288).version,s.all=function(t){return Promise.all(t)},s.spread=n(713),s.isAxiosError=n(268),t.exports=s,t.exports.default=s},263:t=>{"use strict";function e(t){this.message=t}e.prototype.toString=function(){return"Cancel"+(this.message?": "+this.message:"")},e.prototype.__CANCEL__=!0,t.exports=e},972:(t,e,n)=>{"use strict";var r=n(263);function i(t){if("function"!=typeof t)throw new TypeError("executor must be a function.");var e;this.promise=new Promise((function(t){e=t}));var n=this;this.promise.then((function(t){if(n._listeners){var e,r=n._listeners.length;for(e=0;e<r;e++)n._listeners[e](t);n._listeners=null}})),this.promise.then=function(t){var e,r=new Promise((function(t){n.subscribe(t),e=t})).then(t);return r.cancel=function(){n.unsubscribe(e)},r},t((function(t){n.reason||(n.reason=new r(t),e(n.reason))}))}i.prototype.throwIfRequested=function(){if(this.reason)throw this.reason},i.prototype.subscribe=function(t){this.reason?t(this.reason):this._listeners?this._listeners.push(t):this._listeners=[t]},i.prototype.unsubscribe=function(t){if(this._listeners){var e=this._listeners.indexOf(t);-1!==e&&this._listeners.splice(e,1)}},i.source=function(){var t;return{token:new i((function(e){t=e})),cancel:t}},t.exports=i},502:t=>{"use strict";t.exports=function(t){return!(!t||!t.__CANCEL__)}},321:(t,e,n)=>{"use strict";var r=n(867),i=n(327),o=n(782),a=n(572),s=n(185),c=n(875),u=c.validators;function l(t){this.defaults=t,this.interceptors={request:new o,response:new o}}l.prototype.request=function(t,e){if("string"==typeof t?(e=e||{}).url=t:e=t||{},!e.url)throw new Error("Provided config url is not valid");(e=s(this.defaults,e)).method?e.method=e.method.toLowerCase():this.defaults.method?e.method=this.defaults.method.toLowerCase():e.method="get";var n=e.transitional;void 0!==n&&c.assertOptions(n,{silentJSONParsing:u.transitional(u.boolean),forcedJSONParsing:u.transitional(u.boolean),clarifyTimeoutError:u.transitional(u.boolean)},!1);var r=[],i=!0;this.interceptors.request.forEach((function(t){"function"==typeof t.runWhen&&!1===t.runWhen(e)||(i=i&&t.synchronous,r.unshift(t.fulfilled,t.rejected))}));var o,l=[];if(this.interceptors.response.forEach((function(t){l.push(t.fulfilled,t.rejected)})),!i){var f=[a,void 0];for(Array.prototype.unshift.apply(f,r),f=f.concat(l),o=Promise.resolve(e);f.length;)o=o.then(f.shift(),f.shift());return o}for(var p=e;r.length;){var d=r.shift(),h=r.shift();try{p=d(p)}catch(t){h(t);break}}try{o=a(p)}catch(t){return Promise.reject(t)}for(;l.length;)o=o.then(l.shift(),l.shift());return o},l.prototype.getUri=function(t){if(!t.url)throw new Error("Provided config url is not valid");return t=s(this.defaults,t),i(t.url,t.params,t.paramsSerializer).replace(/^\?/,"")},r.forEach(["delete","get","head","options"],(function(t){l.prototype[t]=function(e,n){return this.request(s(n||{},{method:t,url:e,data:(n||{}).data}))}})),r.forEach(["post","put","patch"],(function(t){l.prototype[t]=function(e,n,r){return this.request(s(r||{},{method:t,url:e,data:n}))}})),t.exports=l},782:(t,e,n)=>{"use strict";var r=n(867);function i(){this.handlers=[]}i.prototype.use=function(t,e,n){return this.handlers.push({fulfilled:t,rejected:e,synchronous:!!n&&n.synchronous,runWhen:n?n.runWhen:null}),this.handlers.length-1},i.prototype.eject=function(t){this.handlers[t]&&(this.handlers[t]=null)},i.prototype.forEach=function(t){r.forEach(this.handlers,(function(e){null!==e&&t(e)}))},t.exports=i},97:(t,e,n)=>{"use strict";var r=n(793),i=n(303);t.exports=function(t,e){return t&&!r(e)?i(t,e):e}},61:(t,e,n)=>{"use strict";var r=n(481);t.exports=function(t,e,n,i,o){var a=new Error(t);return r(a,e,n,i,o)}},572:(t,e,n)=>{"use strict";var r=n(867),i=n(527),o=n(502),a=n(655),s=n(263);function c(t){if(t.cancelToken&&t.cancelToken.throwIfRequested(),t.signal&&t.signal.aborted)throw new s("canceled")}t.exports=function(t){return c(t),t.headers=t.headers||{},t.data=i.call(t,t.data,t.headers,t.transformRequest),t.headers=r.merge(t.headers.common||{},t.headers[t.method]||{},t.headers),r.forEach(["delete","get","head","post","put","patch","common"],(function(e){delete t.headers[e]})),(t.adapter||a.adapter)(t).then((function(e){return c(t),e.data=i.call(t,e.data,e.headers,t.transformResponse),e}),(function(e){return o(e)||(c(t),e&&e.response&&(e.response.data=i.call(t,e.response.data,e.response.headers,t.transformResponse))),Promise.reject(e)}))}},481:t=>{"use strict";t.exports=function(t,e,n,r,i){return t.config=e,n&&(t.code=n),t.request=r,t.response=i,t.isAxiosError=!0,t.toJSON=function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:this.config,code:this.code,status:this.response&&this.response.status?this.response.status:null}},t}},185:(t,e,n)=>{"use strict";var r=n(867);t.exports=function(t,e){e=e||{};var n={};function i(t,e){return r.isPlainObject(t)&&r.isPlainObject(e)?r.merge(t,e):r.isPlainObject(e)?r.merge({},e):r.isArray(e)?e.slice():e}function o(n){return r.isUndefined(e[n])?r.isUndefined(t[n])?void 0:i(void 0,t[n]):i(t[n],e[n])}function a(t){if(!r.isUndefined(e[t]))return i(void 0,e[t])}function s(n){return r.isUndefined(e[n])?r.isUndefined(t[n])?void 0:i(void 0,t[n]):i(void 0,e[n])}function c(n){return n in e?i(t[n],e[n]):n in t?i(void 0,t[n]):void 0}var u={url:a,method:a,data:a,baseURL:s,transformRequest:s,transformResponse:s,paramsSerializer:s,timeout:s,timeoutMessage:s,withCredentials:s,adapter:s,responseType:s,xsrfCookieName:s,xsrfHeaderName:s,onUploadProgress:s,onDownloadProgress:s,decompress:s,maxContentLength:s,maxBodyLength:s,transport:s,httpAgent:s,httpsAgent:s,cancelToken:s,socketPath:s,responseEncoding:s,validateStatus:c};return r.forEach(Object.keys(t).concat(Object.keys(e)),(function(t){var e=u[t]||o,i=e(t);r.isUndefined(i)&&e!==c||(n[t]=i)})),n}},26:(t,e,n)=>{"use strict";var r=n(61);t.exports=function(t,e,n){var i=n.config.validateStatus;n.status&&i&&!i(n.status)?e(r("Request failed with status code "+n.status,n.config,null,n.request,n)):t(n)}},527:(t,e,n)=>{"use strict";var r=n(867),i=n(655);t.exports=function(t,e,n){var o=this||i;return r.forEach(n,(function(n){t=n.call(o,t,e)})),t}},655:(t,e,n)=>{"use strict";var r=n(155),i=n(867),o=n(16),a=n(481),s={"Content-Type":"application/x-www-form-urlencoded"};function c(t,e){!i.isUndefined(t)&&i.isUndefined(t["Content-Type"])&&(t["Content-Type"]=e)}var u,l={transitional:{silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},adapter:(("undefined"!=typeof XMLHttpRequest||void 0!==r&&"[object process]"===Object.prototype.toString.call(r))&&(u=n(448)),u),transformRequest:[function(t,e){return o(e,"Accept"),o(e,"Content-Type"),i.isFormData(t)||i.isArrayBuffer(t)||i.isBuffer(t)||i.isStream(t)||i.isFile(t)||i.isBlob(t)?t:i.isArrayBufferView(t)?t.buffer:i.isURLSearchParams(t)?(c(e,"application/x-www-form-urlencoded;charset=utf-8"),t.toString()):i.isObject(t)||e&&"application/json"===e["Content-Type"]?(c(e,"application/json"),function(t,e,n){if(i.isString(t))try{return(e||JSON.parse)(t),i.trim(t)}catch(t){if("SyntaxError"!==t.name)throw t}return(n||JSON.stringify)(t)}(t)):t}],transformResponse:[function(t){var e=this.transitional||l.transitional,n=e&&e.silentJSONParsing,r=e&&e.forcedJSONParsing,o=!n&&"json"===this.responseType;if(o||r&&i.isString(t)&&t.length)try{return JSON.parse(t)}catch(t){if(o){if("SyntaxError"===t.name)throw a(t,this,"E_JSON_PARSE");throw t}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*"}}};i.forEach(["delete","get","head"],(function(t){l.headers[t]={}})),i.forEach(["post","put","patch"],(function(t){l.headers[t]=i.merge(s)})),t.exports=l},288:t=>{t.exports={version:"0.25.0"}},849:t=>{"use strict";t.exports=function(t,e){return function(){for(var n=new Array(arguments.length),r=0;r<n.length;r++)n[r]=arguments[r];return t.apply(e,n)}}},327:(t,e,n)=>{"use strict";var r=n(867);function i(t){return encodeURIComponent(t).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}t.exports=function(t,e,n){if(!e)return t;var o;if(n)o=n(e);else if(r.isURLSearchParams(e))o=e.toString();else{var a=[];r.forEach(e,(function(t,e){null!=t&&(r.isArray(t)?e+="[]":t=[t],r.forEach(t,(function(t){r.isDate(t)?t=t.toISOString():r.isObject(t)&&(t=JSON.stringify(t)),a.push(i(e)+"="+i(t))})))})),o=a.join("&")}if(o){var s=t.indexOf("#");-1!==s&&(t=t.slice(0,s)),t+=(-1===t.indexOf("?")?"?":"&")+o}return t}},303:t=>{"use strict";t.exports=function(t,e){return e?t.replace(/\/+$/,"")+"/"+e.replace(/^\/+/,""):t}},372:(t,e,n)=>{"use strict";var r=n(867);t.exports=r.isStandardBrowserEnv()?{write:function(t,e,n,i,o,a){var s=[];s.push(t+"="+encodeURIComponent(e)),r.isNumber(n)&&s.push("expires="+new Date(n).toGMTString()),r.isString(i)&&s.push("path="+i),r.isString(o)&&s.push("domain="+o),!0===a&&s.push("secure"),document.cookie=s.join("; ")},read:function(t){var e=document.cookie.match(new RegExp("(^|;\\s*)("+t+")=([^;]*)"));return e?decodeURIComponent(e[3]):null},remove:function(t){this.write(t,"",Date.now()-864e5)}}:{write:function(){},read:function(){return null},remove:function(){}}},793:t=>{"use strict";t.exports=function(t){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(t)}},268:(t,e,n)=>{"use strict";var r=n(867);t.exports=function(t){return r.isObject(t)&&!0===t.isAxiosError}},985:(t,e,n)=>{"use strict";var r=n(867);t.exports=r.isStandardBrowserEnv()?function(){var t,e=/(msie|trident)/i.test(navigator.userAgent),n=document.createElement("a");function i(t){var r=t;return e&&(n.setAttribute("href",r),r=n.href),n.setAttribute("href",r),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:"/"===n.pathname.charAt(0)?n.pathname:"/"+n.pathname}}return t=i(window.location.href),function(e){var n=r.isString(e)?i(e):e;return n.protocol===t.protocol&&n.host===t.host}}():function(){return!0}},16:(t,e,n)=>{"use strict";var r=n(867);t.exports=function(t,e){r.forEach(t,(function(n,r){r!==e&&r.toUpperCase()===e.toUpperCase()&&(t[e]=n,delete t[r])}))}},109:(t,e,n)=>{"use strict";var r=n(867),i=["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"];t.exports=function(t){var e,n,o,a={};return t?(r.forEach(t.split("\n"),(function(t){if(o=t.indexOf(":"),e=r.trim(t.substr(0,o)).toLowerCase(),n=r.trim(t.substr(o+1)),e){if(a[e]&&i.indexOf(e)>=0)return;a[e]="set-cookie"===e?(a[e]?a[e]:[]).concat([n]):a[e]?a[e]+", "+n:n}})),a):a}},713:t=>{"use strict";t.exports=function(t){return function(e){return t.apply(null,e)}}},875:(t,e,n)=>{"use strict";var r=n(288).version,i={};["object","boolean","number","function","string","symbol"].forEach((function(t,e){i[t]=function(n){return typeof n===t||"a"+(e<1?"n ":" ")+t}}));var o={};i.transitional=function(t,e,n){function i(t,e){return"[Axios v"+r+"] Transitional option '"+t+"'"+e+(n?". "+n:"")}return function(n,r,a){if(!1===t)throw new Error(i(r," has been removed"+(e?" in "+e:"")));return e&&!o[r]&&(o[r]=!0,console.warn(i(r," has been deprecated since v"+e+" and will be removed in the near future"))),!t||t(n,r,a)}},t.exports={assertOptions:function(t,e,n){if("object"!=typeof t)throw new TypeError("options must be an object");for(var r=Object.keys(t),i=r.length;i-- >0;){var o=r[i],a=e[o];if(a){var s=t[o],c=void 0===s||a(s,o,t);if(!0!==c)throw new TypeError("option "+o+" must be "+c)}else if(!0!==n)throw Error("Unknown option "+o)}},validators:i}},867:(t,e,n)=>{"use strict";var r=n(849),i=Object.prototype.toString;function o(t){return Array.isArray(t)}function a(t){return void 0===t}function s(t){return"[object ArrayBuffer]"===i.call(t)}function c(t){return null!==t&&"object"==typeof t}function u(t){if("[object Object]"!==i.call(t))return!1;var e=Object.getPrototypeOf(t);return null===e||e===Object.prototype}function l(t){return"[object Function]"===i.call(t)}function f(t,e){if(null!=t)if("object"!=typeof t&&(t=[t]),o(t))for(var n=0,r=t.length;n<r;n++)e.call(null,t[n],n,t);else for(var i in t)Object.prototype.hasOwnProperty.call(t,i)&&e.call(null,t[i],i,t)}t.exports={isArray:o,isArrayBuffer:s,isBuffer:function(t){return null!==t&&!a(t)&&null!==t.constructor&&!a(t.constructor)&&"function"==typeof t.constructor.isBuffer&&t.constructor.isBuffer(t)},isFormData:function(t){return"[object FormData]"===i.call(t)},isArrayBufferView:function(t){return"undefined"!=typeof ArrayBuffer&&ArrayBuffer.isView?ArrayBuffer.isView(t):t&&t.buffer&&s(t.buffer)},isString:function(t){return"string"==typeof t},isNumber:function(t){return"number"==typeof t},isObject:c,isPlainObject:u,isUndefined:a,isDate:function(t){return"[object Date]"===i.call(t)},isFile:function(t){return"[object File]"===i.call(t)},isBlob:function(t){return"[object Blob]"===i.call(t)},isFunction:l,isStream:function(t){return c(t)&&l(t.pipe)},isURLSearchParams:function(t){return"[object URLSearchParams]"===i.call(t)},isStandardBrowserEnv:function(){return("undefined"==typeof navigator||"ReactNative"!==navigator.product&&"NativeScript"!==navigator.product&&"NS"!==navigator.product)&&("undefined"!=typeof window&&"undefined"!=typeof document)},forEach:f,merge:function t(){var e={};function n(n,r){u(e[r])&&u(n)?e[r]=t(e[r],n):u(n)?e[r]=t({},n):o(n)?e[r]=n.slice():e[r]=n}for(var r=0,i=arguments.length;r<i;r++)f(arguments[r],n);return e},extend:function(t,e,n){return f(e,(function(e,i){t[i]=n&&"function"==typeof e?r(e,n):e})),t},trim:function(t){return t.trim?t.trim():t.replace(/^\s+|\s+$/g,"")},stripBOM:function(t){return 65279===t.charCodeAt(0)&&(t=t.slice(1)),t}}},745:(t,e,n)=>{n(333),window.Vue=n(538).ZP,Vue.component("example-component",n(51).Z);new Vue({el:"#app"})},333:(t,e,n)=>{window._=n(486);try{n(877)}catch(t){}window.axios=n(669),window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest",$(document).ready((function(){$("#sidebar").mCustomScrollbar({theme:"minimal"}),$("#sidebarCollapse").on("click",(function(){$("#sidebar").toggleClass("active")}))})),$(document).ready((function(){$("#sidebar").mCustomScrollbar({theme:"minimal"}),$("#sidebarCollapse").on("click",(function(){$("#sidebar").toggleClass("active"),$(".collapse.in").toggleClass("in"),$("a[aria-expanded=true]").attr("aria-expanded","false")}))}))},877:(t,e,n)=>{"use strict";n.r(e),n.d(e,{Alert:()=>Ee,Button:()=>Se,Carousel:()=>ln,Collapse:()=>An,Dropdown:()=>Xn,Modal:()=>Sr,Offcanvas:()=>Jr,Popover:()=>mi,ScrollSpy:()=>Ei,Tab:()=>Ji,Toast:()=>uo,Tooltip:()=>hi});var r={};n.r(r),n.d(r,{afterMain:()=>C,afterRead:()=>b,afterWrite:()=>k,applyStyles:()=>N,arrow:()=>G,auto:()=>c,basePlacements:()=>u,beforeMain:()=>w,beforeRead:()=>_,beforeWrite:()=>A,bottom:()=>o,clippingParents:()=>p,computeStyles:()=>rt,createPopper:()=>Nt,createPopperBase:()=>Lt,createPopperLite:()=>Dt,detectOverflow:()=>yt,end:()=>f,eventListeners:()=>ot,flip:()=>bt,hide:()=>Ct,left:()=>s,main:()=>x,modifierPhases:()=>$,offset:()=>At,placements:()=>m,popper:()=>h,popperGenerator:()=>jt,popperOffsets:()=>Ot,preventOverflow:()=>kt,read:()=>y,reference:()=>v,right:()=>a,start:()=>l,top:()=>i,variationPlacements:()=>g,viewport:()=>d,write:()=>O});var i="top",o="bottom",a="right",s="left",c="auto",u=[i,o,a,s],l="start",f="end",p="clippingParents",d="viewport",h="popper",v="reference",g=u.reduce((function(t,e){return t.concat([e+"-"+l,e+"-"+f])}),[]),m=[].concat(u,[c]).reduce((function(t,e){return t.concat([e,e+"-"+l,e+"-"+f])}),[]),_="beforeRead",y="read",b="afterRead",w="beforeMain",x="main",C="afterMain",A="beforeWrite",O="write",k="afterWrite",$=[_,y,b,w,x,C,A,O,k];function E(t){return t?(t.nodeName||"").toLowerCase():null}function T(t){if(null==t)return window;if("[object Window]"!==t.toString()){var e=t.ownerDocument;return e&&e.defaultView||window}return t}function S(t){return t instanceof T(t).Element||t instanceof Element}function j(t){return t instanceof T(t).HTMLElement||t instanceof HTMLElement}function L(t){return"undefined"!=typeof ShadowRoot&&(t instanceof T(t).ShadowRoot||t instanceof ShadowRoot)}const N={name:"applyStyles",enabled:!0,phase:"write",fn:function(t){var e=t.state;Object.keys(e.elements).forEach((function(t){var n=e.styles[t]||{},r=e.attributes[t]||{},i=e.elements[t];j(i)&&E(i)&&(Object.assign(i.style,n),Object.keys(r).forEach((function(t){var e=r[t];!1===e?i.removeAttribute(t):i.setAttribute(t,!0===e?"":e)})))}))},effect:function(t){var e=t.state,n={popper:{position:e.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(e.elements.popper.style,n.popper),e.styles=n,e.elements.arrow&&Object.assign(e.elements.arrow.style,n.arrow),function(){Object.keys(e.elements).forEach((function(t){var r=e.elements[t],i=e.attributes[t]||{},o=Object.keys(e.styles.hasOwnProperty(t)?e.styles[t]:n[t]).reduce((function(t,e){return t[e]="",t}),{});j(r)&&E(r)&&(Object.assign(r.style,o),Object.keys(i).forEach((function(t){r.removeAttribute(t)})))}))}},requires:["computeStyles"]};function D(t){return t.split("-")[0]}var I=Math.max,P=Math.min,M=Math.round;function R(){var t=navigator.userAgentData;return null!=t&&t.brands?t.brands.map((function(t){return t.brand+"/"+t.version})).join(" "):navigator.userAgent}function F(){return!/^((?!chrome|android).)*safari/i.test(R())}function B(t,e,n){void 0===e&&(e=!1),void 0===n&&(n=!1);var r=t.getBoundingClientRect(),i=1,o=1;e&&j(t)&&(i=t.offsetWidth>0&&M(r.width)/t.offsetWidth||1,o=t.offsetHeight>0&&M(r.height)/t.offsetHeight||1);var a=(S(t)?T(t):window).visualViewport,s=!F()&&n,c=(r.left+(s&&a?a.offsetLeft:0))/i,u=(r.top+(s&&a?a.offsetTop:0))/o,l=r.width/i,f=r.height/o;return{width:l,height:f,top:u,right:c+l,bottom:u+f,left:c,x:c,y:u}}function z(t){var e=B(t),n=t.offsetWidth,r=t.offsetHeight;return Math.abs(e.width-n)<=1&&(n=e.width),Math.abs(e.height-r)<=1&&(r=e.height),{x:t.offsetLeft,y:t.offsetTop,width:n,height:r}}function U(t,e){var n=e.getRootNode&&e.getRootNode();if(t.contains(e))return!0;if(n&&L(n)){var r=e;do{if(r&&t.isSameNode(r))return!0;r=r.parentNode||r.host}while(r)}return!1}function H(t){return T(t).getComputedStyle(t)}function W(t){return["table","td","th"].indexOf(E(t))>=0}function q(t){return((S(t)?t.ownerDocument:t.document)||window.document).documentElement}function V(t){return"html"===E(t)?t:t.assignedSlot||t.parentNode||(L(t)?t.host:null)||q(t)}function K(t){return j(t)&&"fixed"!==H(t).position?t.offsetParent:null}function J(t){for(var e=T(t),n=K(t);n&&W(n)&&"static"===H(n).position;)n=K(n);return n&&("html"===E(n)||"body"===E(n)&&"static"===H(n).position)?e:n||function(t){var e=/firefox/i.test(R());if(/Trident/i.test(R())&&j(t)&&"fixed"===H(t).position)return null;var n=V(t);for(L(n)&&(n=n.host);j(n)&&["html","body"].indexOf(E(n))<0;){var r=H(n);if("none"!==r.transform||"none"!==r.perspective||"paint"===r.contain||-1!==["transform","perspective"].indexOf(r.willChange)||e&&"filter"===r.willChange||e&&r.filter&&"none"!==r.filter)return n;n=n.parentNode}return null}(t)||e}function X(t){return["top","bottom"].indexOf(t)>=0?"x":"y"}function Z(t,e,n){return I(t,P(e,n))}function Y(t){return Object.assign({},{top:0,right:0,bottom:0,left:0},t)}function Q(t,e){return e.reduce((function(e,n){return e[n]=t,e}),{})}const G={name:"arrow",enabled:!0,phase:"main",fn:function(t){var e,n=t.state,r=t.name,c=t.options,l=n.elements.arrow,f=n.modifiersData.popperOffsets,p=D(n.placement),d=X(p),h=[s,a].indexOf(p)>=0?"height":"width";if(l&&f){var v=function(t,e){return Y("number"!=typeof(t="function"==typeof t?t(Object.assign({},e.rects,{placement:e.placement})):t)?t:Q(t,u))}(c.padding,n),g=z(l),m="y"===d?i:s,_="y"===d?o:a,y=n.rects.reference[h]+n.rects.reference[d]-f[d]-n.rects.popper[h],b=f[d]-n.rects.reference[d],w=J(l),x=w?"y"===d?w.clientHeight||0:w.clientWidth||0:0,C=y/2-b/2,A=v[m],O=x-g[h]-v[_],k=x/2-g[h]/2+C,$=Z(A,k,O),E=d;n.modifiersData[r]=((e={})[E]=$,e.centerOffset=$-k,e)}},effect:function(t){var e=t.state,n=t.options.element,r=void 0===n?"[data-popper-arrow]":n;null!=r&&("string"!=typeof r||(r=e.elements.popper.querySelector(r)))&&U(e.elements.popper,r)&&(e.elements.arrow=r)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function tt(t){return t.split("-")[1]}var et={top:"auto",right:"auto",bottom:"auto",left:"auto"};function nt(t){var e,n=t.popper,r=t.popperRect,c=t.placement,u=t.variation,l=t.offsets,p=t.position,d=t.gpuAcceleration,h=t.adaptive,v=t.roundOffsets,g=t.isFixed,m=l.x,_=void 0===m?0:m,y=l.y,b=void 0===y?0:y,w="function"==typeof v?v({x:_,y:b}):{x:_,y:b};_=w.x,b=w.y;var x=l.hasOwnProperty("x"),C=l.hasOwnProperty("y"),A=s,O=i,k=window;if(h){var $=J(n),E="clientHeight",S="clientWidth";if($===T(n)&&"static"!==H($=q(n)).position&&"absolute"===p&&(E="scrollHeight",S="scrollWidth"),c===i||(c===s||c===a)&&u===f)O=o,b-=(g&&$===k&&k.visualViewport?k.visualViewport.height:$[E])-r.height,b*=d?1:-1;if(c===s||(c===i||c===o)&&u===f)A=a,_-=(g&&$===k&&k.visualViewport?k.visualViewport.width:$[S])-r.width,_*=d?1:-1}var j,L=Object.assign({position:p},h&&et),N=!0===v?function(t){var e=t.x,n=t.y,r=window.devicePixelRatio||1;return{x:M(e*r)/r||0,y:M(n*r)/r||0}}({x:_,y:b}):{x:_,y:b};return _=N.x,b=N.y,d?Object.assign({},L,((j={})[O]=C?"0":"",j[A]=x?"0":"",j.transform=(k.devicePixelRatio||1)<=1?"translate("+_+"px, "+b+"px)":"translate3d("+_+"px, "+b+"px, 0)",j)):Object.assign({},L,((e={})[O]=C?b+"px":"",e[A]=x?_+"px":"",e.transform="",e))}const rt={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(t){var e=t.state,n=t.options,r=n.gpuAcceleration,i=void 0===r||r,o=n.adaptive,a=void 0===o||o,s=n.roundOffsets,c=void 0===s||s,u={placement:D(e.placement),variation:tt(e.placement),popper:e.elements.popper,popperRect:e.rects.popper,gpuAcceleration:i,isFixed:"fixed"===e.options.strategy};null!=e.modifiersData.popperOffsets&&(e.styles.popper=Object.assign({},e.styles.popper,nt(Object.assign({},u,{offsets:e.modifiersData.popperOffsets,position:e.options.strategy,adaptive:a,roundOffsets:c})))),null!=e.modifiersData.arrow&&(e.styles.arrow=Object.assign({},e.styles.arrow,nt(Object.assign({},u,{offsets:e.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:c})))),e.attributes.popper=Object.assign({},e.attributes.popper,{"data-popper-placement":e.placement})},data:{}};var it={passive:!0};const ot={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(t){var e=t.state,n=t.instance,r=t.options,i=r.scroll,o=void 0===i||i,a=r.resize,s=void 0===a||a,c=T(e.elements.popper),u=[].concat(e.scrollParents.reference,e.scrollParents.popper);return o&&u.forEach((function(t){t.addEventListener("scroll",n.update,it)})),s&&c.addEventListener("resize",n.update,it),function(){o&&u.forEach((function(t){t.removeEventListener("scroll",n.update,it)})),s&&c.removeEventListener("resize",n.update,it)}},data:{}};var at={left:"right",right:"left",bottom:"top",top:"bottom"};function st(t){return t.replace(/left|right|bottom|top/g,(function(t){return at[t]}))}var ct={start:"end",end:"start"};function ut(t){return t.replace(/start|end/g,(function(t){return ct[t]}))}function lt(t){var e=T(t);return{scrollLeft:e.pageXOffset,scrollTop:e.pageYOffset}}function ft(t){return B(q(t)).left+lt(t).scrollLeft}function pt(t){var e=H(t),n=e.overflow,r=e.overflowX,i=e.overflowY;return/auto|scroll|overlay|hidden/.test(n+i+r)}function dt(t){return["html","body","#document"].indexOf(E(t))>=0?t.ownerDocument.body:j(t)&&pt(t)?t:dt(V(t))}function ht(t,e){var n;void 0===e&&(e=[]);var r=dt(t),i=r===(null==(n=t.ownerDocument)?void 0:n.body),o=T(r),a=i?[o].concat(o.visualViewport||[],pt(r)?r:[]):r,s=e.concat(a);return i?s:s.concat(ht(V(a)))}function vt(t){return Object.assign({},t,{left:t.x,top:t.y,right:t.x+t.width,bottom:t.y+t.height})}function gt(t,e,n){return e===d?vt(function(t,e){var n=T(t),r=q(t),i=n.visualViewport,o=r.clientWidth,a=r.clientHeight,s=0,c=0;if(i){o=i.width,a=i.height;var u=F();(u||!u&&"fixed"===e)&&(s=i.offsetLeft,c=i.offsetTop)}return{width:o,height:a,x:s+ft(t),y:c}}(t,n)):S(e)?function(t,e){var n=B(t,!1,"fixed"===e);return n.top=n.top+t.clientTop,n.left=n.left+t.clientLeft,n.bottom=n.top+t.clientHeight,n.right=n.left+t.clientWidth,n.width=t.clientWidth,n.height=t.clientHeight,n.x=n.left,n.y=n.top,n}(e,n):vt(function(t){var e,n=q(t),r=lt(t),i=null==(e=t.ownerDocument)?void 0:e.body,o=I(n.scrollWidth,n.clientWidth,i?i.scrollWidth:0,i?i.clientWidth:0),a=I(n.scrollHeight,n.clientHeight,i?i.scrollHeight:0,i?i.clientHeight:0),s=-r.scrollLeft+ft(t),c=-r.scrollTop;return"rtl"===H(i||n).direction&&(s+=I(n.clientWidth,i?i.clientWidth:0)-o),{width:o,height:a,x:s,y:c}}(q(t)))}function mt(t,e,n,r){var i="clippingParents"===e?function(t){var e=ht(V(t)),n=["absolute","fixed"].indexOf(H(t).position)>=0&&j(t)?J(t):t;return S(n)?e.filter((function(t){return S(t)&&U(t,n)&&"body"!==E(t)})):[]}(t):[].concat(e),o=[].concat(i,[n]),a=o[0],s=o.reduce((function(e,n){var i=gt(t,n,r);return e.top=I(i.top,e.top),e.right=P(i.right,e.right),e.bottom=P(i.bottom,e.bottom),e.left=I(i.left,e.left),e}),gt(t,a,r));return s.width=s.right-s.left,s.height=s.bottom-s.top,s.x=s.left,s.y=s.top,s}function _t(t){var e,n=t.reference,r=t.element,c=t.placement,u=c?D(c):null,p=c?tt(c):null,d=n.x+n.width/2-r.width/2,h=n.y+n.height/2-r.height/2;switch(u){case i:e={x:d,y:n.y-r.height};break;case o:e={x:d,y:n.y+n.height};break;case a:e={x:n.x+n.width,y:h};break;case s:e={x:n.x-r.width,y:h};break;default:e={x:n.x,y:n.y}}var v=u?X(u):null;if(null!=v){var g="y"===v?"height":"width";switch(p){case l:e[v]=e[v]-(n[g]/2-r[g]/2);break;case f:e[v]=e[v]+(n[g]/2-r[g]/2)}}return e}function yt(t,e){void 0===e&&(e={});var n=e,r=n.placement,s=void 0===r?t.placement:r,c=n.strategy,l=void 0===c?t.strategy:c,f=n.boundary,g=void 0===f?p:f,m=n.rootBoundary,_=void 0===m?d:m,y=n.elementContext,b=void 0===y?h:y,w=n.altBoundary,x=void 0!==w&&w,C=n.padding,A=void 0===C?0:C,O=Y("number"!=typeof A?A:Q(A,u)),k=b===h?v:h,$=t.rects.popper,E=t.elements[x?k:b],T=mt(S(E)?E:E.contextElement||q(t.elements.popper),g,_,l),j=B(t.elements.reference),L=_t({reference:j,element:$,strategy:"absolute",placement:s}),N=vt(Object.assign({},$,L)),D=b===h?N:j,I={top:T.top-D.top+O.top,bottom:D.bottom-T.bottom+O.bottom,left:T.left-D.left+O.left,right:D.right-T.right+O.right},P=t.modifiersData.offset;if(b===h&&P){var M=P[s];Object.keys(I).forEach((function(t){var e=[a,o].indexOf(t)>=0?1:-1,n=[i,o].indexOf(t)>=0?"y":"x";I[t]+=M[n]*e}))}return I}const bt={name:"flip",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options,r=t.name;if(!e.modifiersData[r]._skip){for(var f=n.mainAxis,p=void 0===f||f,d=n.altAxis,h=void 0===d||d,v=n.fallbackPlacements,_=n.padding,y=n.boundary,b=n.rootBoundary,w=n.altBoundary,x=n.flipVariations,C=void 0===x||x,A=n.allowedAutoPlacements,O=e.options.placement,k=D(O),$=v||(k===O||!C?[st(O)]:function(t){if(D(t)===c)return[];var e=st(t);return[ut(t),e,ut(e)]}(O)),E=[O].concat($).reduce((function(t,n){return t.concat(D(n)===c?function(t,e){void 0===e&&(e={});var n=e,r=n.placement,i=n.boundary,o=n.rootBoundary,a=n.padding,s=n.flipVariations,c=n.allowedAutoPlacements,l=void 0===c?m:c,f=tt(r),p=f?s?g:g.filter((function(t){return tt(t)===f})):u,d=p.filter((function(t){return l.indexOf(t)>=0}));0===d.length&&(d=p);var h=d.reduce((function(e,n){return e[n]=yt(t,{placement:n,boundary:i,rootBoundary:o,padding:a})[D(n)],e}),{});return Object.keys(h).sort((function(t,e){return h[t]-h[e]}))}(e,{placement:n,boundary:y,rootBoundary:b,padding:_,flipVariations:C,allowedAutoPlacements:A}):n)}),[]),T=e.rects.reference,S=e.rects.popper,j=new Map,L=!0,N=E[0],I=0;I<E.length;I++){var P=E[I],M=D(P),R=tt(P)===l,F=[i,o].indexOf(M)>=0,B=F?"width":"height",z=yt(e,{placement:P,boundary:y,rootBoundary:b,altBoundary:w,padding:_}),U=F?R?a:s:R?o:i;T[B]>S[B]&&(U=st(U));var H=st(U),W=[];if(p&&W.push(z[M]<=0),h&&W.push(z[U]<=0,z[H]<=0),W.every((function(t){return t}))){N=P,L=!1;break}j.set(P,W)}if(L)for(var q=function(t){var e=E.find((function(e){var n=j.get(e);if(n)return n.slice(0,t).every((function(t){return t}))}));if(e)return N=e,"break"},V=C?3:1;V>0;V--){if("break"===q(V))break}e.placement!==N&&(e.modifiersData[r]._skip=!0,e.placement=N,e.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function wt(t,e,n){return void 0===n&&(n={x:0,y:0}),{top:t.top-e.height-n.y,right:t.right-e.width+n.x,bottom:t.bottom-e.height+n.y,left:t.left-e.width-n.x}}function xt(t){return[i,a,o,s].some((function(e){return t[e]>=0}))}const Ct={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(t){var e=t.state,n=t.name,r=e.rects.reference,i=e.rects.popper,o=e.modifiersData.preventOverflow,a=yt(e,{elementContext:"reference"}),s=yt(e,{altBoundary:!0}),c=wt(a,r),u=wt(s,i,o),l=xt(c),f=xt(u);e.modifiersData[n]={referenceClippingOffsets:c,popperEscapeOffsets:u,isReferenceHidden:l,hasPopperEscaped:f},e.attributes.popper=Object.assign({},e.attributes.popper,{"data-popper-reference-hidden":l,"data-popper-escaped":f})}};const At={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(t){var e=t.state,n=t.options,r=t.name,o=n.offset,c=void 0===o?[0,0]:o,u=m.reduce((function(t,n){return t[n]=function(t,e,n){var r=D(t),o=[s,i].indexOf(r)>=0?-1:1,c="function"==typeof n?n(Object.assign({},e,{placement:t})):n,u=c[0],l=c[1];return u=u||0,l=(l||0)*o,[s,a].indexOf(r)>=0?{x:l,y:u}:{x:u,y:l}}(n,e.rects,c),t}),{}),l=u[e.placement],f=l.x,p=l.y;null!=e.modifiersData.popperOffsets&&(e.modifiersData.popperOffsets.x+=f,e.modifiersData.popperOffsets.y+=p),e.modifiersData[r]=u}};const Ot={name:"popperOffsets",enabled:!0,phase:"read",fn:function(t){var e=t.state,n=t.name;e.modifiersData[n]=_t({reference:e.rects.reference,element:e.rects.popper,strategy:"absolute",placement:e.placement})},data:{}};const kt={name:"preventOverflow",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options,r=t.name,c=n.mainAxis,u=void 0===c||c,f=n.altAxis,p=void 0!==f&&f,d=n.boundary,h=n.rootBoundary,v=n.altBoundary,g=n.padding,m=n.tether,_=void 0===m||m,y=n.tetherOffset,b=void 0===y?0:y,w=yt(e,{boundary:d,rootBoundary:h,padding:g,altBoundary:v}),x=D(e.placement),C=tt(e.placement),A=!C,O=X(x),k="x"===O?"y":"x",$=e.modifiersData.popperOffsets,E=e.rects.reference,T=e.rects.popper,S="function"==typeof b?b(Object.assign({},e.rects,{placement:e.placement})):b,j="number"==typeof S?{mainAxis:S,altAxis:S}:Object.assign({mainAxis:0,altAxis:0},S),L=e.modifiersData.offset?e.modifiersData.offset[e.placement]:null,N={x:0,y:0};if($){if(u){var M,R="y"===O?i:s,F="y"===O?o:a,B="y"===O?"height":"width",U=$[O],H=U+w[R],W=U-w[F],q=_?-T[B]/2:0,V=C===l?E[B]:T[B],K=C===l?-T[B]:-E[B],Y=e.elements.arrow,Q=_&&Y?z(Y):{width:0,height:0},G=e.modifiersData["arrow#persistent"]?e.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},et=G[R],nt=G[F],rt=Z(0,E[B],Q[B]),it=A?E[B]/2-q-rt-et-j.mainAxis:V-rt-et-j.mainAxis,ot=A?-E[B]/2+q+rt+nt+j.mainAxis:K+rt+nt+j.mainAxis,at=e.elements.arrow&&J(e.elements.arrow),st=at?"y"===O?at.clientTop||0:at.clientLeft||0:0,ct=null!=(M=null==L?void 0:L[O])?M:0,ut=U+ot-ct,lt=Z(_?P(H,U+it-ct-st):H,U,_?I(W,ut):W);$[O]=lt,N[O]=lt-U}if(p){var ft,pt="x"===O?i:s,dt="x"===O?o:a,ht=$[k],vt="y"===k?"height":"width",gt=ht+w[pt],mt=ht-w[dt],_t=-1!==[i,s].indexOf(x),bt=null!=(ft=null==L?void 0:L[k])?ft:0,wt=_t?gt:ht-E[vt]-T[vt]-bt+j.altAxis,xt=_t?ht+E[vt]+T[vt]-bt-j.altAxis:mt,Ct=_&&_t?function(t,e,n){var r=Z(t,e,n);return r>n?n:r}(wt,ht,xt):Z(_?wt:gt,ht,_?xt:mt);$[k]=Ct,N[k]=Ct-ht}e.modifiersData[r]=N}},requiresIfExists:["offset"]};function $t(t,e,n){void 0===n&&(n=!1);var r,i,o=j(e),a=j(e)&&function(t){var e=t.getBoundingClientRect(),n=M(e.width)/t.offsetWidth||1,r=M(e.height)/t.offsetHeight||1;return 1!==n||1!==r}(e),s=q(e),c=B(t,a,n),u={scrollLeft:0,scrollTop:0},l={x:0,y:0};return(o||!o&&!n)&&(("body"!==E(e)||pt(s))&&(u=(r=e)!==T(r)&&j(r)?{scrollLeft:(i=r).scrollLeft,scrollTop:i.scrollTop}:lt(r)),j(e)?((l=B(e,!0)).x+=e.clientLeft,l.y+=e.clientTop):s&&(l.x=ft(s))),{x:c.left+u.scrollLeft-l.x,y:c.top+u.scrollTop-l.y,width:c.width,height:c.height}}function Et(t){var e=new Map,n=new Set,r=[];function i(t){n.add(t.name),[].concat(t.requires||[],t.requiresIfExists||[]).forEach((function(t){if(!n.has(t)){var r=e.get(t);r&&i(r)}})),r.push(t)}return t.forEach((function(t){e.set(t.name,t)})),t.forEach((function(t){n.has(t.name)||i(t)})),r}var Tt={placement:"bottom",modifiers:[],strategy:"absolute"};function St(){for(var t=arguments.length,e=new Array(t),n=0;n<t;n++)e[n]=arguments[n];return!e.some((function(t){return!(t&&"function"==typeof t.getBoundingClientRect)}))}function jt(t){void 0===t&&(t={});var e=t,n=e.defaultModifiers,r=void 0===n?[]:n,i=e.defaultOptions,o=void 0===i?Tt:i;return function(t,e,n){void 0===n&&(n=o);var i,a,s={placement:"bottom",orderedModifiers:[],options:Object.assign({},Tt,o),modifiersData:{},elements:{reference:t,popper:e},attributes:{},styles:{}},c=[],u=!1,l={state:s,setOptions:function(n){var i="function"==typeof n?n(s.options):n;f(),s.options=Object.assign({},o,s.options,i),s.scrollParents={reference:S(t)?ht(t):t.contextElement?ht(t.contextElement):[],popper:ht(e)};var a=function(t){var e=Et(t);return $.reduce((function(t,n){return t.concat(e.filter((function(t){return t.phase===n})))}),[])}(function(t){var e=t.reduce((function(t,e){var n=t[e.name];return t[e.name]=n?Object.assign({},n,e,{options:Object.assign({},n.options,e.options),data:Object.assign({},n.data,e.data)}):e,t}),{});return Object.keys(e).map((function(t){return e[t]}))}([].concat(r,s.options.modifiers)));return s.orderedModifiers=a.filter((function(t){return t.enabled})),s.orderedModifiers.forEach((function(t){var e=t.name,n=t.options,r=void 0===n?{}:n,i=t.effect;if("function"==typeof i){var o=i({state:s,name:e,instance:l,options:r}),a=function(){};c.push(o||a)}})),l.update()},forceUpdate:function(){if(!u){var t=s.elements,e=t.reference,n=t.popper;if(St(e,n)){s.rects={reference:$t(e,J(n),"fixed"===s.options.strategy),popper:z(n)},s.reset=!1,s.placement=s.options.placement,s.orderedModifiers.forEach((function(t){return s.modifiersData[t.name]=Object.assign({},t.data)}));for(var r=0;r<s.orderedModifiers.length;r++)if(!0!==s.reset){var i=s.orderedModifiers[r],o=i.fn,a=i.options,c=void 0===a?{}:a,f=i.name;"function"==typeof o&&(s=o({state:s,options:c,name:f,instance:l})||s)}else s.reset=!1,r=-1}}},update:(i=function(){return new Promise((function(t){l.forceUpdate(),t(s)}))},function(){return a||(a=new Promise((function(t){Promise.resolve().then((function(){a=void 0,t(i())}))}))),a}),destroy:function(){f(),u=!0}};if(!St(t,e))return l;function f(){c.forEach((function(t){return t()})),c=[]}return l.setOptions(n).then((function(t){!u&&n.onFirstUpdate&&n.onFirstUpdate(t)})),l}}var Lt=jt(),Nt=jt({defaultModifiers:[ot,Ot,rt,N,At,bt,kt,G,Ct]}),Dt=jt({defaultModifiers:[ot,Ot,rt,N]});const It="transitionend",Pt=t=>{let e=t.getAttribute("data-bs-target");if(!e||"#"===e){let n=t.getAttribute("href");if(!n||!n.includes("#")&&!n.startsWith("."))return null;n.includes("#")&&!n.startsWith("#")&&(n=`#${n.split("#")[1]}`),e=n&&"#"!==n?n.trim():null}return e},Mt=t=>{const e=Pt(t);return e&&document.querySelector(e)?e:null},Rt=t=>{const e=Pt(t);return e?document.querySelector(e):null},Ft=t=>{t.dispatchEvent(new Event(It))},Bt=t=>!(!t||"object"!=typeof t)&&(void 0!==t.jquery&&(t=t[0]),void 0!==t.nodeType),zt=t=>Bt(t)?t.jquery?t[0]:t:"string"==typeof t&&t.length>0?document.querySelector(t):null,Ut=t=>{if(!Bt(t)||0===t.getClientRects().length)return!1;const e="visible"===getComputedStyle(t).getPropertyValue("visibility"),n=t.closest("details:not([open])");if(!n)return e;if(n!==t){const e=t.closest("summary");if(e&&e.parentNode!==n)return!1;if(null===e)return!1}return e},Ht=t=>!t||t.nodeType!==Node.ELEMENT_NODE||(!!t.classList.contains("disabled")||(void 0!==t.disabled?t.disabled:t.hasAttribute("disabled")&&"false"!==t.getAttribute("disabled"))),Wt=t=>{if(!document.documentElement.attachShadow)return null;if("function"==typeof t.getRootNode){const e=t.getRootNode();return e instanceof ShadowRoot?e:null}return t instanceof ShadowRoot?t:t.parentNode?Wt(t.parentNode):null},qt=()=>{},Vt=t=>{t.offsetHeight},Kt=()=>window.jQuery&&!document.body.hasAttribute("data-bs-no-jquery")?window.jQuery:null,Jt=[],Xt=()=>"rtl"===document.documentElement.dir,Zt=t=>{var e;e=()=>{const e=Kt();if(e){const n=t.NAME,r=e.fn[n];e.fn[n]=t.jQueryInterface,e.fn[n].Constructor=t,e.fn[n].noConflict=()=>(e.fn[n]=r,t.jQueryInterface)}},"loading"===document.readyState?(Jt.length||document.addEventListener("DOMContentLoaded",(()=>{for(const t of Jt)t()})),Jt.push(e)):e()},Yt=t=>{"function"==typeof t&&t()},Qt=(t,e,n=!0)=>{if(!n)return void Yt(t);const r=(t=>{if(!t)return 0;let{transitionDuration:e,transitionDelay:n}=window.getComputedStyle(t);const r=Number.parseFloat(e),i=Number.parseFloat(n);return r||i?(e=e.split(",")[0],n=n.split(",")[0],1e3*(Number.parseFloat(e)+Number.parseFloat(n))):0})(e)+5;let i=!1;const o=({target:n})=>{n===e&&(i=!0,e.removeEventListener(It,o),Yt(t))};e.addEventListener(It,o),setTimeout((()=>{i||Ft(e)}),r)},Gt=(t,e,n,r)=>{const i=t.length;let o=t.indexOf(e);return-1===o?!n&&r?t[i-1]:t[0]:(o+=n?1:-1,r&&(o=(o+i)%i),t[Math.max(0,Math.min(o,i-1))])},te=/[^.]*(?=\..*)\.|.*/,ee=/\..*/,ne=/::\d+$/,re={};let ie=1;const oe={mouseenter:"mouseover",mouseleave:"mouseout"},ae=new Set(["click","dblclick","mouseup","mousedown","contextmenu","mousewheel","DOMMouseScroll","mouseover","mouseout","mousemove","selectstart","selectend","keydown","keypress","keyup","orientationchange","touchstart","touchmove","touchend","touchcancel","pointerdown","pointermove","pointerup","pointerleave","pointercancel","gesturestart","gesturechange","gestureend","focus","blur","change","reset","select","submit","focusin","focusout","load","unload","beforeunload","resize","move","DOMContentLoaded","readystatechange","error","abort","scroll"]);function se(t,e){return e&&`${e}::${ie++}`||t.uidEvent||ie++}function ce(t){const e=se(t);return t.uidEvent=e,re[e]=re[e]||{},re[e]}function ue(t,e,n=null){return Object.values(t).find((t=>t.callable===e&&t.delegationSelector===n))}function le(t,e,n){const r="string"==typeof e,i=r?n:e||n;let o=he(t);return ae.has(o)||(o=t),[r,i,o]}function fe(t,e,n,r,i){if("string"!=typeof e||!t)return;let[o,a,s]=le(e,n,r);if(e in oe){const t=t=>function(e){if(!e.relatedTarget||e.relatedTarget!==e.delegateTarget&&!e.delegateTarget.contains(e.relatedTarget))return t.call(this,e)};a=t(a)}const c=ce(t),u=c[s]||(c[s]={}),l=ue(u,a,o?n:null);if(l)return void(l.oneOff=l.oneOff&&i);const f=se(a,e.replace(te,"")),p=o?function(t,e,n){return function r(i){const o=t.querySelectorAll(e);for(let{target:a}=i;a&&a!==this;a=a.parentNode)for(const s of o)if(s===a)return ge(i,{delegateTarget:a}),r.oneOff&&ve.off(t,i.type,e,n),n.apply(a,[i])}}(t,n,a):function(t,e){return function n(r){return ge(r,{delegateTarget:t}),n.oneOff&&ve.off(t,r.type,e),e.apply(t,[r])}}(t,a);p.delegationSelector=o?n:null,p.callable=a,p.oneOff=i,p.uidEvent=f,u[f]=p,t.addEventListener(s,p,o)}function pe(t,e,n,r,i){const o=ue(e[n],r,i);o&&(t.removeEventListener(n,o,Boolean(i)),delete e[n][o.uidEvent])}function de(t,e,n,r){const i=e[n]||{};for(const o of Object.keys(i))if(o.includes(r)){const r=i[o];pe(t,e,n,r.callable,r.delegationSelector)}}function he(t){return t=t.replace(ee,""),oe[t]||t}const ve={on(t,e,n,r){fe(t,e,n,r,!1)},one(t,e,n,r){fe(t,e,n,r,!0)},off(t,e,n,r){if("string"!=typeof e||!t)return;const[i,o,a]=le(e,n,r),s=a!==e,c=ce(t),u=c[a]||{},l=e.startsWith(".");if(void 0===o){if(l)for(const n of Object.keys(c))de(t,c,n,e.slice(1));for(const n of Object.keys(u)){const r=n.replace(ne,"");if(!s||e.includes(r)){const e=u[n];pe(t,c,a,e.callable,e.delegationSelector)}}}else{if(!Object.keys(u).length)return;pe(t,c,a,o,i?n:null)}},trigger(t,e,n){if("string"!=typeof e||!t)return null;const r=Kt();let i=null,o=!0,a=!0,s=!1;e!==he(e)&&r&&(i=r.Event(e,n),r(t).trigger(i),o=!i.isPropagationStopped(),a=!i.isImmediatePropagationStopped(),s=i.isDefaultPrevented());let c=new Event(e,{bubbles:o,cancelable:!0});return c=ge(c,n),s&&c.preventDefault(),a&&t.dispatchEvent(c),c.defaultPrevented&&i&&i.preventDefault(),c}};function ge(t,e){for(const[n,r]of Object.entries(e||{}))try{t[n]=r}catch(e){Object.defineProperty(t,n,{configurable:!0,get:()=>r})}return t}const me=new Map,_e={set(t,e,n){me.has(t)||me.set(t,new Map);const r=me.get(t);r.has(e)||0===r.size?r.set(e,n):console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(r.keys())[0]}.`)},get:(t,e)=>me.has(t)&&me.get(t).get(e)||null,remove(t,e){if(!me.has(t))return;const n=me.get(t);n.delete(e),0===n.size&&me.delete(t)}};function ye(t){if("true"===t)return!0;if("false"===t)return!1;if(t===Number(t).toString())return Number(t);if(""===t||"null"===t)return null;if("string"!=typeof t)return t;try{return JSON.parse(decodeURIComponent(t))}catch(e){return t}}function be(t){return t.replace(/[A-Z]/g,(t=>`-${t.toLowerCase()}`))}const we={setDataAttribute(t,e,n){t.setAttribute(`data-bs-${be(e)}`,n)},removeDataAttribute(t,e){t.removeAttribute(`data-bs-${be(e)}`)},getDataAttributes(t){if(!t)return{};const e={},n=Object.keys(t.dataset).filter((t=>t.startsWith("bs")&&!t.startsWith("bsConfig")));for(const r of n){let n=r.replace(/^bs/,"");n=n.charAt(0).toLowerCase()+n.slice(1,n.length),e[n]=ye(t.dataset[r])}return e},getDataAttribute:(t,e)=>ye(t.getAttribute(`data-bs-${be(e)}`))};class xe{static get Default(){return{}}static get DefaultType(){return{}}static get NAME(){throw new Error('You have to implement the static method "NAME", for each component!')}_getConfig(t){return t=this._mergeConfigObj(t),t=this._configAfterMerge(t),this._typeCheckConfig(t),t}_configAfterMerge(t){return t}_mergeConfigObj(t,e){const n=Bt(e)?we.getDataAttribute(e,"config"):{};return{...this.constructor.Default,..."object"==typeof n?n:{},...Bt(e)?we.getDataAttributes(e):{},..."object"==typeof t?t:{}}}_typeCheckConfig(t,e=this.constructor.DefaultType){for(const r of Object.keys(e)){const i=e[r],o=t[r],a=Bt(o)?"element":null==(n=o)?`${n}`:Object.prototype.toString.call(n).match(/\s([a-z]+)/i)[1].toLowerCase();if(!new RegExp(i).test(a))throw new TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${r}" provided type "${a}" but expected type "${i}".`)}var n}}class Ce extends xe{constructor(t,e){super(),(t=zt(t))&&(this._element=t,this._config=this._getConfig(e),_e.set(this._element,this.constructor.DATA_KEY,this))}dispose(){_e.remove(this._element,this.constructor.DATA_KEY),ve.off(this._element,this.constructor.EVENT_KEY);for(const t of Object.getOwnPropertyNames(this))this[t]=null}_queueCallback(t,e,n=!0){Qt(t,e,n)}_getConfig(t){return t=this._mergeConfigObj(t,this._element),t=this._configAfterMerge(t),this._typeCheckConfig(t),t}static getInstance(t){return _e.get(zt(t),this.DATA_KEY)}static getOrCreateInstance(t,e={}){return this.getInstance(t)||new this(t,"object"==typeof e?e:null)}static get VERSION(){return"5.2.3"}static get DATA_KEY(){return`bs.${this.NAME}`}static get EVENT_KEY(){return`.${this.DATA_KEY}`}static eventName(t){return`${t}${this.EVENT_KEY}`}}const Ae=(t,e="hide")=>{const n=`click.dismiss${t.EVENT_KEY}`,r=t.NAME;ve.on(document,n,`[data-bs-dismiss="${r}"]`,(function(n){if(["A","AREA"].includes(this.tagName)&&n.preventDefault(),Ht(this))return;const i=Rt(this)||this.closest(`.${r}`);t.getOrCreateInstance(i)[e]()}))},Oe=".bs.alert",ke=`close${Oe}`,$e=`closed${Oe}`;class Ee extends Ce{static get NAME(){return"alert"}close(){if(ve.trigger(this._element,ke).defaultPrevented)return;this._element.classList.remove("show");const t=this._element.classList.contains("fade");this._queueCallback((()=>this._destroyElement()),this._element,t)}_destroyElement(){this._element.remove(),ve.trigger(this._element,$e),this.dispose()}static jQueryInterface(t){return this.each((function(){const e=Ee.getOrCreateInstance(this);if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t](this)}}))}}Ae(Ee,"close"),Zt(Ee);const Te='[data-bs-toggle="button"]';class Se extends Ce{static get NAME(){return"button"}toggle(){this._element.setAttribute("aria-pressed",this._element.classList.toggle("active"))}static jQueryInterface(t){return this.each((function(){const e=Se.getOrCreateInstance(this);"toggle"===t&&e[t]()}))}}ve.on(document,"click.bs.button.data-api",Te,(t=>{t.preventDefault();const e=t.target.closest(Te);Se.getOrCreateInstance(e).toggle()})),Zt(Se);const je={find:(t,e=document.documentElement)=>[].concat(...Element.prototype.querySelectorAll.call(e,t)),findOne:(t,e=document.documentElement)=>Element.prototype.querySelector.call(e,t),children:(t,e)=>[].concat(...t.children).filter((t=>t.matches(e))),parents(t,e){const n=[];let r=t.parentNode.closest(e);for(;r;)n.push(r),r=r.parentNode.closest(e);return n},prev(t,e){let n=t.previousElementSibling;for(;n;){if(n.matches(e))return[n];n=n.previousElementSibling}return[]},next(t,e){let n=t.nextElementSibling;for(;n;){if(n.matches(e))return[n];n=n.nextElementSibling}return[]},focusableChildren(t){const e=["a","button","input","textarea","select","details","[tabindex]",'[contenteditable="true"]'].map((t=>`${t}:not([tabindex^="-"])`)).join(",");return this.find(e,t).filter((t=>!Ht(t)&&Ut(t)))}},Le=".bs.swipe",Ne=`touchstart${Le}`,De=`touchmove${Le}`,Ie=`touchend${Le}`,Pe=`pointerdown${Le}`,Me=`pointerup${Le}`,Re={endCallback:null,leftCallback:null,rightCallback:null},Fe={endCallback:"(function|null)",leftCallback:"(function|null)",rightCallback:"(function|null)"};class Be extends xe{constructor(t,e){super(),this._element=t,t&&Be.isSupported()&&(this._config=this._getConfig(e),this._deltaX=0,this._supportPointerEvents=Boolean(window.PointerEvent),this._initEvents())}static get Default(){return Re}static get DefaultType(){return Fe}static get NAME(){return"swipe"}dispose(){ve.off(this._element,Le)}_start(t){this._supportPointerEvents?this._eventIsPointerPenTouch(t)&&(this._deltaX=t.clientX):this._deltaX=t.touches[0].clientX}_end(t){this._eventIsPointerPenTouch(t)&&(this._deltaX=t.clientX-this._deltaX),this._handleSwipe(),Yt(this._config.endCallback)}_move(t){this._deltaX=t.touches&&t.touches.length>1?0:t.touches[0].clientX-this._deltaX}_handleSwipe(){const t=Math.abs(this._deltaX);if(t<=40)return;const e=t/this._deltaX;this._deltaX=0,e&&Yt(e>0?this._config.rightCallback:this._config.leftCallback)}_initEvents(){this._supportPointerEvents?(ve.on(this._element,Pe,(t=>this._start(t))),ve.on(this._element,Me,(t=>this._end(t))),this._element.classList.add("pointer-event")):(ve.on(this._element,Ne,(t=>this._start(t))),ve.on(this._element,De,(t=>this._move(t))),ve.on(this._element,Ie,(t=>this._end(t))))}_eventIsPointerPenTouch(t){return this._supportPointerEvents&&("pen"===t.pointerType||"touch"===t.pointerType)}static isSupported(){return"ontouchstart"in document.documentElement||navigator.maxTouchPoints>0}}const ze=".bs.carousel",Ue=".data-api",He="next",We="prev",qe="left",Ve="right",Ke=`slide${ze}`,Je=`slid${ze}`,Xe=`keydown${ze}`,Ze=`mouseenter${ze}`,Ye=`mouseleave${ze}`,Qe=`dragstart${ze}`,Ge=`load${ze}${Ue}`,tn=`click${ze}${Ue}`,en="carousel",nn="active",rn=".active",on=".carousel-item",an=rn+on,sn={ArrowLeft:Ve,ArrowRight:qe},cn={interval:5e3,keyboard:!0,pause:"hover",ride:!1,touch:!0,wrap:!0},un={interval:"(number|boolean)",keyboard:"boolean",pause:"(string|boolean)",ride:"(boolean|string)",touch:"boolean",wrap:"boolean"};class ln extends Ce{constructor(t,e){super(t,e),this._interval=null,this._activeElement=null,this._isSliding=!1,this.touchTimeout=null,this._swipeHelper=null,this._indicatorsElement=je.findOne(".carousel-indicators",this._element),this._addEventListeners(),this._config.ride===en&&this.cycle()}static get Default(){return cn}static get DefaultType(){return un}static get NAME(){return"carousel"}next(){this._slide(He)}nextWhenVisible(){!document.hidden&&Ut(this._element)&&this.next()}prev(){this._slide(We)}pause(){this._isSliding&&Ft(this._element),this._clearInterval()}cycle(){this._clearInterval(),this._updateInterval(),this._interval=setInterval((()=>this.nextWhenVisible()),this._config.interval)}_maybeEnableCycle(){this._config.ride&&(this._isSliding?ve.one(this._element,Je,(()=>this.cycle())):this.cycle())}to(t){const e=this._getItems();if(t>e.length-1||t<0)return;if(this._isSliding)return void ve.one(this._element,Je,(()=>this.to(t)));const n=this._getItemIndex(this._getActive());if(n===t)return;const r=t>n?He:We;this._slide(r,e[t])}dispose(){this._swipeHelper&&this._swipeHelper.dispose(),super.dispose()}_configAfterMerge(t){return t.defaultInterval=t.interval,t}_addEventListeners(){this._config.keyboard&&ve.on(this._element,Xe,(t=>this._keydown(t))),"hover"===this._config.pause&&(ve.on(this._element,Ze,(()=>this.pause())),ve.on(this._element,Ye,(()=>this._maybeEnableCycle()))),this._config.touch&&Be.isSupported()&&this._addTouchEventListeners()}_addTouchEventListeners(){for(const t of je.find(".carousel-item img",this._element))ve.on(t,Qe,(t=>t.preventDefault()));const t={leftCallback:()=>this._slide(this._directionToOrder(qe)),rightCallback:()=>this._slide(this._directionToOrder(Ve)),endCallback:()=>{"hover"===this._config.pause&&(this.pause(),this.touchTimeout&&clearTimeout(this.touchTimeout),this.touchTimeout=setTimeout((()=>this._maybeEnableCycle()),500+this._config.interval))}};this._swipeHelper=new Be(this._element,t)}_keydown(t){if(/input|textarea/i.test(t.target.tagName))return;const e=sn[t.key];e&&(t.preventDefault(),this._slide(this._directionToOrder(e)))}_getItemIndex(t){return this._getItems().indexOf(t)}_setActiveIndicatorElement(t){if(!this._indicatorsElement)return;const e=je.findOne(rn,this._indicatorsElement);e.classList.remove(nn),e.removeAttribute("aria-current");const n=je.findOne(`[data-bs-slide-to="${t}"]`,this._indicatorsElement);n&&(n.classList.add(nn),n.setAttribute("aria-current","true"))}_updateInterval(){const t=this._activeElement||this._getActive();if(!t)return;const e=Number.parseInt(t.getAttribute("data-bs-interval"),10);this._config.interval=e||this._config.defaultInterval}_slide(t,e=null){if(this._isSliding)return;const n=this._getActive(),r=t===He,i=e||Gt(this._getItems(),n,r,this._config.wrap);if(i===n)return;const o=this._getItemIndex(i),a=e=>ve.trigger(this._element,e,{relatedTarget:i,direction:this._orderToDirection(t),from:this._getItemIndex(n),to:o});if(a(Ke).defaultPrevented)return;if(!n||!i)return;const s=Boolean(this._interval);this.pause(),this._isSliding=!0,this._setActiveIndicatorElement(o),this._activeElement=i;const c=r?"carousel-item-start":"carousel-item-end",u=r?"carousel-item-next":"carousel-item-prev";i.classList.add(u),Vt(i),n.classList.add(c),i.classList.add(c);this._queueCallback((()=>{i.classList.remove(c,u),i.classList.add(nn),n.classList.remove(nn,u,c),this._isSliding=!1,a(Je)}),n,this._isAnimated()),s&&this.cycle()}_isAnimated(){return this._element.classList.contains("slide")}_getActive(){return je.findOne(an,this._element)}_getItems(){return je.find(on,this._element)}_clearInterval(){this._interval&&(clearInterval(this._interval),this._interval=null)}_directionToOrder(t){return Xt()?t===qe?We:He:t===qe?He:We}_orderToDirection(t){return Xt()?t===We?qe:Ve:t===We?Ve:qe}static jQueryInterface(t){return this.each((function(){const e=ln.getOrCreateInstance(this,t);if("number"!=typeof t){if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t]()}}else e.to(t)}))}}ve.on(document,tn,"[data-bs-slide], [data-bs-slide-to]",(function(t){const e=Rt(this);if(!e||!e.classList.contains(en))return;t.preventDefault();const n=ln.getOrCreateInstance(e),r=this.getAttribute("data-bs-slide-to");return r?(n.to(r),void n._maybeEnableCycle()):"next"===we.getDataAttribute(this,"slide")?(n.next(),void n._maybeEnableCycle()):(n.prev(),void n._maybeEnableCycle())})),ve.on(window,Ge,(()=>{const t=je.find('[data-bs-ride="carousel"]');for(const e of t)ln.getOrCreateInstance(e)})),Zt(ln);const fn=".bs.collapse",pn=`show${fn}`,dn=`shown${fn}`,hn=`hide${fn}`,vn=`hidden${fn}`,gn=`click${fn}.data-api`,mn="show",_n="collapse",yn="collapsing",bn=`:scope .${_n} .${_n}`,wn='[data-bs-toggle="collapse"]',xn={parent:null,toggle:!0},Cn={parent:"(null|element)",toggle:"boolean"};class An extends Ce{constructor(t,e){super(t,e),this._isTransitioning=!1,this._triggerArray=[];const n=je.find(wn);for(const t of n){const e=Mt(t),n=je.find(e).filter((t=>t===this._element));null!==e&&n.length&&this._triggerArray.push(t)}this._initializeChildren(),this._config.parent||this._addAriaAndCollapsedClass(this._triggerArray,this._isShown()),this._config.toggle&&this.toggle()}static get Default(){return xn}static get DefaultType(){return Cn}static get NAME(){return"collapse"}toggle(){this._isShown()?this.hide():this.show()}show(){if(this._isTransitioning||this._isShown())return;let t=[];if(this._config.parent&&(t=this._getFirstLevelChildren(".collapse.show, .collapse.collapsing").filter((t=>t!==this._element)).map((t=>An.getOrCreateInstance(t,{toggle:!1})))),t.length&&t[0]._isTransitioning)return;if(ve.trigger(this._element,pn).defaultPrevented)return;for(const e of t)e.hide();const e=this._getDimension();this._element.classList.remove(_n),this._element.classList.add(yn),this._element.style[e]=0,this._addAriaAndCollapsedClass(this._triggerArray,!0),this._isTransitioning=!0;const n=`scroll${e[0].toUpperCase()+e.slice(1)}`;this._queueCallback((()=>{this._isTransitioning=!1,this._element.classList.remove(yn),this._element.classList.add(_n,mn),this._element.style[e]="",ve.trigger(this._element,dn)}),this._element,!0),this._element.style[e]=`${this._element[n]}px`}hide(){if(this._isTransitioning||!this._isShown())return;if(ve.trigger(this._element,hn).defaultPrevented)return;const t=this._getDimension();this._element.style[t]=`${this._element.getBoundingClientRect()[t]}px`,Vt(this._element),this._element.classList.add(yn),this._element.classList.remove(_n,mn);for(const t of this._triggerArray){const e=Rt(t);e&&!this._isShown(e)&&this._addAriaAndCollapsedClass([t],!1)}this._isTransitioning=!0;this._element.style[t]="",this._queueCallback((()=>{this._isTransitioning=!1,this._element.classList.remove(yn),this._element.classList.add(_n),ve.trigger(this._element,vn)}),this._element,!0)}_isShown(t=this._element){return t.classList.contains(mn)}_configAfterMerge(t){return t.toggle=Boolean(t.toggle),t.parent=zt(t.parent),t}_getDimension(){return this._element.classList.contains("collapse-horizontal")?"width":"height"}_initializeChildren(){if(!this._config.parent)return;const t=this._getFirstLevelChildren(wn);for(const e of t){const t=Rt(e);t&&this._addAriaAndCollapsedClass([e],this._isShown(t))}}_getFirstLevelChildren(t){const e=je.find(bn,this._config.parent);return je.find(t,this._config.parent).filter((t=>!e.includes(t)))}_addAriaAndCollapsedClass(t,e){if(t.length)for(const n of t)n.classList.toggle("collapsed",!e),n.setAttribute("aria-expanded",e)}static jQueryInterface(t){const e={};return"string"==typeof t&&/show|hide/.test(t)&&(e.toggle=!1),this.each((function(){const n=An.getOrCreateInstance(this,e);if("string"==typeof t){if(void 0===n[t])throw new TypeError(`No method named "${t}"`);n[t]()}}))}}ve.on(document,gn,wn,(function(t){("A"===t.target.tagName||t.delegateTarget&&"A"===t.delegateTarget.tagName)&&t.preventDefault();const e=Mt(this),n=je.find(e);for(const t of n)An.getOrCreateInstance(t,{toggle:!1}).toggle()})),Zt(An);const On="dropdown",kn=".bs.dropdown",$n=".data-api",En="ArrowUp",Tn="ArrowDown",Sn=`hide${kn}`,jn=`hidden${kn}`,Ln=`show${kn}`,Nn=`shown${kn}`,Dn=`click${kn}${$n}`,In=`keydown${kn}${$n}`,Pn=`keyup${kn}${$n}`,Mn="show",Rn='[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)',Fn=`${Rn}.${Mn}`,Bn=".dropdown-menu",zn=Xt()?"top-end":"top-start",Un=Xt()?"top-start":"top-end",Hn=Xt()?"bottom-end":"bottom-start",Wn=Xt()?"bottom-start":"bottom-end",qn=Xt()?"left-start":"right-start",Vn=Xt()?"right-start":"left-start",Kn={autoClose:!0,boundary:"clippingParents",display:"dynamic",offset:[0,2],popperConfig:null,reference:"toggle"},Jn={autoClose:"(boolean|string)",boundary:"(string|element)",display:"string",offset:"(array|string|function)",popperConfig:"(null|object|function)",reference:"(string|element|object)"};class Xn extends Ce{constructor(t,e){super(t,e),this._popper=null,this._parent=this._element.parentNode,this._menu=je.next(this._element,Bn)[0]||je.prev(this._element,Bn)[0]||je.findOne(Bn,this._parent),this._inNavbar=this._detectNavbar()}static get Default(){return Kn}static get DefaultType(){return Jn}static get NAME(){return On}toggle(){return this._isShown()?this.hide():this.show()}show(){if(Ht(this._element)||this._isShown())return;const t={relatedTarget:this._element};if(!ve.trigger(this._element,Ln,t).defaultPrevented){if(this._createPopper(),"ontouchstart"in document.documentElement&&!this._parent.closest(".navbar-nav"))for(const t of[].concat(...document.body.children))ve.on(t,"mouseover",qt);this._element.focus(),this._element.setAttribute("aria-expanded",!0),this._menu.classList.add(Mn),this._element.classList.add(Mn),ve.trigger(this._element,Nn,t)}}hide(){if(Ht(this._element)||!this._isShown())return;const t={relatedTarget:this._element};this._completeHide(t)}dispose(){this._popper&&this._popper.destroy(),super.dispose()}update(){this._inNavbar=this._detectNavbar(),this._popper&&this._popper.update()}_completeHide(t){if(!ve.trigger(this._element,Sn,t).defaultPrevented){if("ontouchstart"in document.documentElement)for(const t of[].concat(...document.body.children))ve.off(t,"mouseover",qt);this._popper&&this._popper.destroy(),this._menu.classList.remove(Mn),this._element.classList.remove(Mn),this._element.setAttribute("aria-expanded","false"),we.removeDataAttribute(this._menu,"popper"),ve.trigger(this._element,jn,t)}}_getConfig(t){if("object"==typeof(t=super._getConfig(t)).reference&&!Bt(t.reference)&&"function"!=typeof t.reference.getBoundingClientRect)throw new TypeError(`${On.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);return t}_createPopper(){if(void 0===r)throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");let t=this._element;"parent"===this._config.reference?t=this._parent:Bt(this._config.reference)?t=zt(this._config.reference):"object"==typeof this._config.reference&&(t=this._config.reference);const e=this._getPopperConfig();this._popper=Nt(t,this._menu,e)}_isShown(){return this._menu.classList.contains(Mn)}_getPlacement(){const t=this._parent;if(t.classList.contains("dropend"))return qn;if(t.classList.contains("dropstart"))return Vn;if(t.classList.contains("dropup-center"))return"top";if(t.classList.contains("dropdown-center"))return"bottom";const e="end"===getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();return t.classList.contains("dropup")?e?Un:zn:e?Wn:Hn}_detectNavbar(){return null!==this._element.closest(".navbar")}_getOffset(){const{offset:t}=this._config;return"string"==typeof t?t.split(",").map((t=>Number.parseInt(t,10))):"function"==typeof t?e=>t(e,this._element):t}_getPopperConfig(){const t={placement:this._getPlacement(),modifiers:[{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"offset",options:{offset:this._getOffset()}}]};return(this._inNavbar||"static"===this._config.display)&&(we.setDataAttribute(this._menu,"popper","static"),t.modifiers=[{name:"applyStyles",enabled:!1}]),{...t,..."function"==typeof this._config.popperConfig?this._config.popperConfig(t):this._config.popperConfig}}_selectMenuItem({key:t,target:e}){const n=je.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",this._menu).filter((t=>Ut(t)));n.length&&Gt(n,e,t===Tn,!n.includes(e)).focus()}static jQueryInterface(t){return this.each((function(){const e=Xn.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}static clearMenus(t){if(2===t.button||"keyup"===t.type&&"Tab"!==t.key)return;const e=je.find(Fn);for(const n of e){const e=Xn.getInstance(n);if(!e||!1===e._config.autoClose)continue;const r=t.composedPath(),i=r.includes(e._menu);if(r.includes(e._element)||"inside"===e._config.autoClose&&!i||"outside"===e._config.autoClose&&i)continue;if(e._menu.contains(t.target)&&("keyup"===t.type&&"Tab"===t.key||/input|select|option|textarea|form/i.test(t.target.tagName)))continue;const o={relatedTarget:e._element};"click"===t.type&&(o.clickEvent=t),e._completeHide(o)}}static dataApiKeydownHandler(t){const e=/input|textarea/i.test(t.target.tagName),n="Escape"===t.key,r=[En,Tn].includes(t.key);if(!r&&!n)return;if(e&&!n)return;t.preventDefault();const i=this.matches(Rn)?this:je.prev(this,Rn)[0]||je.next(this,Rn)[0]||je.findOne(Rn,t.delegateTarget.parentNode),o=Xn.getOrCreateInstance(i);if(r)return t.stopPropagation(),o.show(),void o._selectMenuItem(t);o._isShown()&&(t.stopPropagation(),o.hide(),i.focus())}}ve.on(document,In,Rn,Xn.dataApiKeydownHandler),ve.on(document,In,Bn,Xn.dataApiKeydownHandler),ve.on(document,Dn,Xn.clearMenus),ve.on(document,Pn,Xn.clearMenus),ve.on(document,Dn,Rn,(function(t){t.preventDefault(),Xn.getOrCreateInstance(this).toggle()})),Zt(Xn);const Zn=".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",Yn=".sticky-top",Qn="padding-right",Gn="margin-right";class tr{constructor(){this._element=document.body}getWidth(){const t=document.documentElement.clientWidth;return Math.abs(window.innerWidth-t)}hide(){const t=this.getWidth();this._disableOverFlow(),this._setElementAttributes(this._element,Qn,(e=>e+t)),this._setElementAttributes(Zn,Qn,(e=>e+t)),this._setElementAttributes(Yn,Gn,(e=>e-t))}reset(){this._resetElementAttributes(this._element,"overflow"),this._resetElementAttributes(this._element,Qn),this._resetElementAttributes(Zn,Qn),this._resetElementAttributes(Yn,Gn)}isOverflowing(){return this.getWidth()>0}_disableOverFlow(){this._saveInitialAttribute(this._element,"overflow"),this._element.style.overflow="hidden"}_setElementAttributes(t,e,n){const r=this.getWidth();this._applyManipulationCallback(t,(t=>{if(t!==this._element&&window.innerWidth>t.clientWidth+r)return;this._saveInitialAttribute(t,e);const i=window.getComputedStyle(t).getPropertyValue(e);t.style.setProperty(e,`${n(Number.parseFloat(i))}px`)}))}_saveInitialAttribute(t,e){const n=t.style.getPropertyValue(e);n&&we.setDataAttribute(t,e,n)}_resetElementAttributes(t,e){this._applyManipulationCallback(t,(t=>{const n=we.getDataAttribute(t,e);null!==n?(we.removeDataAttribute(t,e),t.style.setProperty(e,n)):t.style.removeProperty(e)}))}_applyManipulationCallback(t,e){if(Bt(t))e(t);else for(const n of je.find(t,this._element))e(n)}}const er="backdrop",nr="show",rr=`mousedown.bs.${er}`,ir={className:"modal-backdrop",clickCallback:null,isAnimated:!1,isVisible:!0,rootElement:"body"},or={className:"string",clickCallback:"(function|null)",isAnimated:"boolean",isVisible:"boolean",rootElement:"(element|string)"};class ar extends xe{constructor(t){super(),this._config=this._getConfig(t),this._isAppended=!1,this._element=null}static get Default(){return ir}static get DefaultType(){return or}static get NAME(){return er}show(t){if(!this._config.isVisible)return void Yt(t);this._append();const e=this._getElement();this._config.isAnimated&&Vt(e),e.classList.add(nr),this._emulateAnimation((()=>{Yt(t)}))}hide(t){this._config.isVisible?(this._getElement().classList.remove(nr),this._emulateAnimation((()=>{this.dispose(),Yt(t)}))):Yt(t)}dispose(){this._isAppended&&(ve.off(this._element,rr),this._element.remove(),this._isAppended=!1)}_getElement(){if(!this._element){const t=document.createElement("div");t.className=this._config.className,this._config.isAnimated&&t.classList.add("fade"),this._element=t}return this._element}_configAfterMerge(t){return t.rootElement=zt(t.rootElement),t}_append(){if(this._isAppended)return;const t=this._getElement();this._config.rootElement.append(t),ve.on(t,rr,(()=>{Yt(this._config.clickCallback)})),this._isAppended=!0}_emulateAnimation(t){Qt(t,this._getElement(),this._config.isAnimated)}}const sr=".bs.focustrap",cr=`focusin${sr}`,ur=`keydown.tab${sr}`,lr="backward",fr={autofocus:!0,trapElement:null},pr={autofocus:"boolean",trapElement:"element"};class dr extends xe{constructor(t){super(),this._config=this._getConfig(t),this._isActive=!1,this._lastTabNavDirection=null}static get Default(){return fr}static get DefaultType(){return pr}static get NAME(){return"focustrap"}activate(){this._isActive||(this._config.autofocus&&this._config.trapElement.focus(),ve.off(document,sr),ve.on(document,cr,(t=>this._handleFocusin(t))),ve.on(document,ur,(t=>this._handleKeydown(t))),this._isActive=!0)}deactivate(){this._isActive&&(this._isActive=!1,ve.off(document,sr))}_handleFocusin(t){const{trapElement:e}=this._config;if(t.target===document||t.target===e||e.contains(t.target))return;const n=je.focusableChildren(e);0===n.length?e.focus():this._lastTabNavDirection===lr?n[n.length-1].focus():n[0].focus()}_handleKeydown(t){"Tab"===t.key&&(this._lastTabNavDirection=t.shiftKey?lr:"forward")}}const hr=".bs.modal",vr=`hide${hr}`,gr=`hidePrevented${hr}`,mr=`hidden${hr}`,_r=`show${hr}`,yr=`shown${hr}`,br=`resize${hr}`,wr=`click.dismiss${hr}`,xr=`mousedown.dismiss${hr}`,Cr=`keydown.dismiss${hr}`,Ar=`click${hr}.data-api`,Or="modal-open",kr="show",$r="modal-static",Er={backdrop:!0,focus:!0,keyboard:!0},Tr={backdrop:"(boolean|string)",focus:"boolean",keyboard:"boolean"};class Sr extends Ce{constructor(t,e){super(t,e),this._dialog=je.findOne(".modal-dialog",this._element),this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._isShown=!1,this._isTransitioning=!1,this._scrollBar=new tr,this._addEventListeners()}static get Default(){return Er}static get DefaultType(){return Tr}static get NAME(){return"modal"}toggle(t){return this._isShown?this.hide():this.show(t)}show(t){if(this._isShown||this._isTransitioning)return;ve.trigger(this._element,_r,{relatedTarget:t}).defaultPrevented||(this._isShown=!0,this._isTransitioning=!0,this._scrollBar.hide(),document.body.classList.add(Or),this._adjustDialog(),this._backdrop.show((()=>this._showElement(t))))}hide(){if(!this._isShown||this._isTransitioning)return;ve.trigger(this._element,vr).defaultPrevented||(this._isShown=!1,this._isTransitioning=!0,this._focustrap.deactivate(),this._element.classList.remove(kr),this._queueCallback((()=>this._hideModal()),this._element,this._isAnimated()))}dispose(){for(const t of[window,this._dialog])ve.off(t,hr);this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}handleUpdate(){this._adjustDialog()}_initializeBackDrop(){return new ar({isVisible:Boolean(this._config.backdrop),isAnimated:this._isAnimated()})}_initializeFocusTrap(){return new dr({trapElement:this._element})}_showElement(t){document.body.contains(this._element)||document.body.append(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.scrollTop=0;const e=je.findOne(".modal-body",this._dialog);e&&(e.scrollTop=0),Vt(this._element),this._element.classList.add(kr);this._queueCallback((()=>{this._config.focus&&this._focustrap.activate(),this._isTransitioning=!1,ve.trigger(this._element,yr,{relatedTarget:t})}),this._dialog,this._isAnimated())}_addEventListeners(){ve.on(this._element,Cr,(t=>{if("Escape"===t.key)return this._config.keyboard?(t.preventDefault(),void this.hide()):void this._triggerBackdropTransition()})),ve.on(window,br,(()=>{this._isShown&&!this._isTransitioning&&this._adjustDialog()})),ve.on(this._element,xr,(t=>{ve.one(this._element,wr,(e=>{this._element===t.target&&this._element===e.target&&("static"!==this._config.backdrop?this._config.backdrop&&this.hide():this._triggerBackdropTransition())}))}))}_hideModal(){this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._isTransitioning=!1,this._backdrop.hide((()=>{document.body.classList.remove(Or),this._resetAdjustments(),this._scrollBar.reset(),ve.trigger(this._element,mr)}))}_isAnimated(){return this._element.classList.contains("fade")}_triggerBackdropTransition(){if(ve.trigger(this._element,gr).defaultPrevented)return;const t=this._element.scrollHeight>document.documentElement.clientHeight,e=this._element.style.overflowY;"hidden"===e||this._element.classList.contains($r)||(t||(this._element.style.overflowY="hidden"),this._element.classList.add($r),this._queueCallback((()=>{this._element.classList.remove($r),this._queueCallback((()=>{this._element.style.overflowY=e}),this._dialog)}),this._dialog),this._element.focus())}_adjustDialog(){const t=this._element.scrollHeight>document.documentElement.clientHeight,e=this._scrollBar.getWidth(),n=e>0;if(n&&!t){const t=Xt()?"paddingLeft":"paddingRight";this._element.style[t]=`${e}px`}if(!n&&t){const t=Xt()?"paddingRight":"paddingLeft";this._element.style[t]=`${e}px`}}_resetAdjustments(){this._element.style.paddingLeft="",this._element.style.paddingRight=""}static jQueryInterface(t,e){return this.each((function(){const n=Sr.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===n[t])throw new TypeError(`No method named "${t}"`);n[t](e)}}))}}ve.on(document,Ar,'[data-bs-toggle="modal"]',(function(t){const e=Rt(this);["A","AREA"].includes(this.tagName)&&t.preventDefault(),ve.one(e,_r,(t=>{t.defaultPrevented||ve.one(e,mr,(()=>{Ut(this)&&this.focus()}))}));const n=je.findOne(".modal.show");n&&Sr.getInstance(n).hide();Sr.getOrCreateInstance(e).toggle(this)})),Ae(Sr),Zt(Sr);const jr=".bs.offcanvas",Lr=".data-api",Nr=`load${jr}${Lr}`,Dr="show",Ir="showing",Pr="hiding",Mr=".offcanvas.show",Rr=`show${jr}`,Fr=`shown${jr}`,Br=`hide${jr}`,zr=`hidePrevented${jr}`,Ur=`hidden${jr}`,Hr=`resize${jr}`,Wr=`click${jr}${Lr}`,qr=`keydown.dismiss${jr}`,Vr={backdrop:!0,keyboard:!0,scroll:!1},Kr={backdrop:"(boolean|string)",keyboard:"boolean",scroll:"boolean"};class Jr extends Ce{constructor(t,e){super(t,e),this._isShown=!1,this._backdrop=this._initializeBackDrop(),this._focustrap=this._initializeFocusTrap(),this._addEventListeners()}static get Default(){return Vr}static get DefaultType(){return Kr}static get NAME(){return"offcanvas"}toggle(t){return this._isShown?this.hide():this.show(t)}show(t){if(this._isShown)return;if(ve.trigger(this._element,Rr,{relatedTarget:t}).defaultPrevented)return;this._isShown=!0,this._backdrop.show(),this._config.scroll||(new tr).hide(),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.classList.add(Ir);this._queueCallback((()=>{this._config.scroll&&!this._config.backdrop||this._focustrap.activate(),this._element.classList.add(Dr),this._element.classList.remove(Ir),ve.trigger(this._element,Fr,{relatedTarget:t})}),this._element,!0)}hide(){if(!this._isShown)return;if(ve.trigger(this._element,Br).defaultPrevented)return;this._focustrap.deactivate(),this._element.blur(),this._isShown=!1,this._element.classList.add(Pr),this._backdrop.hide();this._queueCallback((()=>{this._element.classList.remove(Dr,Pr),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._config.scroll||(new tr).reset(),ve.trigger(this._element,Ur)}),this._element,!0)}dispose(){this._backdrop.dispose(),this._focustrap.deactivate(),super.dispose()}_initializeBackDrop(){const t=Boolean(this._config.backdrop);return new ar({className:"offcanvas-backdrop",isVisible:t,isAnimated:!0,rootElement:this._element.parentNode,clickCallback:t?()=>{"static"!==this._config.backdrop?this.hide():ve.trigger(this._element,zr)}:null})}_initializeFocusTrap(){return new dr({trapElement:this._element})}_addEventListeners(){ve.on(this._element,qr,(t=>{"Escape"===t.key&&(this._config.keyboard?this.hide():ve.trigger(this._element,zr))}))}static jQueryInterface(t){return this.each((function(){const e=Jr.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t](this)}}))}}ve.on(document,Wr,'[data-bs-toggle="offcanvas"]',(function(t){const e=Rt(this);if(["A","AREA"].includes(this.tagName)&&t.preventDefault(),Ht(this))return;ve.one(e,Ur,(()=>{Ut(this)&&this.focus()}));const n=je.findOne(Mr);n&&n!==e&&Jr.getInstance(n).hide();Jr.getOrCreateInstance(e).toggle(this)})),ve.on(window,Nr,(()=>{for(const t of je.find(Mr))Jr.getOrCreateInstance(t).show()})),ve.on(window,Hr,(()=>{for(const t of je.find("[aria-modal][class*=show][class*=offcanvas-]"))"fixed"!==getComputedStyle(t).position&&Jr.getOrCreateInstance(t).hide()})),Ae(Jr),Zt(Jr);const Xr=new Set(["background","cite","href","itemtype","longdesc","poster","src","xlink:href"]),Zr=/^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,Yr=/^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,Qr=(t,e)=>{const n=t.nodeName.toLowerCase();return e.includes(n)?!Xr.has(n)||Boolean(Zr.test(t.nodeValue)||Yr.test(t.nodeValue)):e.filter((t=>t instanceof RegExp)).some((t=>t.test(n)))},Gr={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]};const ti={allowList:Gr,content:{},extraClass:"",html:!1,sanitize:!0,sanitizeFn:null,template:"<div></div>"},ei={allowList:"object",content:"object",extraClass:"(string|function)",html:"boolean",sanitize:"boolean",sanitizeFn:"(null|function)",template:"string"},ni={entry:"(string|element|function|null)",selector:"(string|element)"};class ri extends xe{constructor(t){super(),this._config=this._getConfig(t)}static get Default(){return ti}static get DefaultType(){return ei}static get NAME(){return"TemplateFactory"}getContent(){return Object.values(this._config.content).map((t=>this._resolvePossibleFunction(t))).filter(Boolean)}hasContent(){return this.getContent().length>0}changeContent(t){return this._checkContent(t),this._config.content={...this._config.content,...t},this}toHtml(){const t=document.createElement("div");t.innerHTML=this._maybeSanitize(this._config.template);for(const[e,n]of Object.entries(this._config.content))this._setContent(t,n,e);const e=t.children[0],n=this._resolvePossibleFunction(this._config.extraClass);return n&&e.classList.add(...n.split(" ")),e}_typeCheckConfig(t){super._typeCheckConfig(t),this._checkContent(t.content)}_checkContent(t){for(const[e,n]of Object.entries(t))super._typeCheckConfig({selector:e,entry:n},ni)}_setContent(t,e,n){const r=je.findOne(n,t);r&&((e=this._resolvePossibleFunction(e))?Bt(e)?this._putElementInTemplate(zt(e),r):this._config.html?r.innerHTML=this._maybeSanitize(e):r.textContent=e:r.remove())}_maybeSanitize(t){return this._config.sanitize?function(t,e,n){if(!t.length)return t;if(n&&"function"==typeof n)return n(t);const r=(new window.DOMParser).parseFromString(t,"text/html"),i=[].concat(...r.body.querySelectorAll("*"));for(const t of i){const n=t.nodeName.toLowerCase();if(!Object.keys(e).includes(n)){t.remove();continue}const r=[].concat(...t.attributes),i=[].concat(e["*"]||[],e[n]||[]);for(const e of r)Qr(e,i)||t.removeAttribute(e.nodeName)}return r.body.innerHTML}(t,this._config.allowList,this._config.sanitizeFn):t}_resolvePossibleFunction(t){return"function"==typeof t?t(this):t}_putElementInTemplate(t,e){if(this._config.html)return e.innerHTML="",void e.append(t);e.textContent=t.textContent}}const ii=new Set(["sanitize","allowList","sanitizeFn"]),oi="fade",ai="show",si=".modal",ci="hide.bs.modal",ui="hover",li="focus",fi={AUTO:"auto",TOP:"top",RIGHT:Xt()?"left":"right",BOTTOM:"bottom",LEFT:Xt()?"right":"left"},pi={allowList:Gr,animation:!0,boundary:"clippingParents",container:!1,customClass:"",delay:0,fallbackPlacements:["top","right","bottom","left"],html:!1,offset:[0,0],placement:"top",popperConfig:null,sanitize:!0,sanitizeFn:null,selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',title:"",trigger:"hover focus"},di={allowList:"object",animation:"boolean",boundary:"(string|element)",container:"(string|element|boolean)",customClass:"(string|function)",delay:"(number|object)",fallbackPlacements:"array",html:"boolean",offset:"(array|string|function)",placement:"(string|function)",popperConfig:"(null|object|function)",sanitize:"boolean",sanitizeFn:"(null|function)",selector:"(string|boolean)",template:"string",title:"(string|element|function)",trigger:"string"};class hi extends Ce{constructor(t,e){if(void 0===r)throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");super(t,e),this._isEnabled=!0,this._timeout=0,this._isHovered=null,this._activeTrigger={},this._popper=null,this._templateFactory=null,this._newContent=null,this.tip=null,this._setListeners(),this._config.selector||this._fixTitle()}static get Default(){return pi}static get DefaultType(){return di}static get NAME(){return"tooltip"}enable(){this._isEnabled=!0}disable(){this._isEnabled=!1}toggleEnabled(){this._isEnabled=!this._isEnabled}toggle(){this._isEnabled&&(this._activeTrigger.click=!this._activeTrigger.click,this._isShown()?this._leave():this._enter())}dispose(){clearTimeout(this._timeout),ve.off(this._element.closest(si),ci,this._hideModalHandler),this._element.getAttribute("data-bs-original-title")&&this._element.setAttribute("title",this._element.getAttribute("data-bs-original-title")),this._disposePopper(),super.dispose()}show(){if("none"===this._element.style.display)throw new Error("Please use show on visible elements");if(!this._isWithContent()||!this._isEnabled)return;const t=ve.trigger(this._element,this.constructor.eventName("show")),e=(Wt(this._element)||this._element.ownerDocument.documentElement).contains(this._element);if(t.defaultPrevented||!e)return;this._disposePopper();const n=this._getTipElement();this._element.setAttribute("aria-describedby",n.getAttribute("id"));const{container:r}=this._config;if(this._element.ownerDocument.documentElement.contains(this.tip)||(r.append(n),ve.trigger(this._element,this.constructor.eventName("inserted"))),this._popper=this._createPopper(n),n.classList.add(ai),"ontouchstart"in document.documentElement)for(const t of[].concat(...document.body.children))ve.on(t,"mouseover",qt);this._queueCallback((()=>{ve.trigger(this._element,this.constructor.eventName("shown")),!1===this._isHovered&&this._leave(),this._isHovered=!1}),this.tip,this._isAnimated())}hide(){if(!this._isShown())return;if(ve.trigger(this._element,this.constructor.eventName("hide")).defaultPrevented)return;if(this._getTipElement().classList.remove(ai),"ontouchstart"in document.documentElement)for(const t of[].concat(...document.body.children))ve.off(t,"mouseover",qt);this._activeTrigger.click=!1,this._activeTrigger[li]=!1,this._activeTrigger[ui]=!1,this._isHovered=null;this._queueCallback((()=>{this._isWithActiveTrigger()||(this._isHovered||this._disposePopper(),this._element.removeAttribute("aria-describedby"),ve.trigger(this._element,this.constructor.eventName("hidden")))}),this.tip,this._isAnimated())}update(){this._popper&&this._popper.update()}_isWithContent(){return Boolean(this._getTitle())}_getTipElement(){return this.tip||(this.tip=this._createTipElement(this._newContent||this._getContentForTemplate())),this.tip}_createTipElement(t){const e=this._getTemplateFactory(t).toHtml();if(!e)return null;e.classList.remove(oi,ai),e.classList.add(`bs-${this.constructor.NAME}-auto`);const n=(t=>{do{t+=Math.floor(1e6*Math.random())}while(document.getElementById(t));return t})(this.constructor.NAME).toString();return e.setAttribute("id",n),this._isAnimated()&&e.classList.add(oi),e}setContent(t){this._newContent=t,this._isShown()&&(this._disposePopper(),this.show())}_getTemplateFactory(t){return this._templateFactory?this._templateFactory.changeContent(t):this._templateFactory=new ri({...this._config,content:t,extraClass:this._resolvePossibleFunction(this._config.customClass)}),this._templateFactory}_getContentForTemplate(){return{".tooltip-inner":this._getTitle()}}_getTitle(){return this._resolvePossibleFunction(this._config.title)||this._element.getAttribute("data-bs-original-title")}_initializeOnDelegatedTarget(t){return this.constructor.getOrCreateInstance(t.delegateTarget,this._getDelegateConfig())}_isAnimated(){return this._config.animation||this.tip&&this.tip.classList.contains(oi)}_isShown(){return this.tip&&this.tip.classList.contains(ai)}_createPopper(t){const e="function"==typeof this._config.placement?this._config.placement.call(this,t,this._element):this._config.placement,n=fi[e.toUpperCase()];return Nt(this._element,t,this._getPopperConfig(n))}_getOffset(){const{offset:t}=this._config;return"string"==typeof t?t.split(",").map((t=>Number.parseInt(t,10))):"function"==typeof t?e=>t(e,this._element):t}_resolvePossibleFunction(t){return"function"==typeof t?t.call(this._element):t}_getPopperConfig(t){const e={placement:t,modifiers:[{name:"flip",options:{fallbackPlacements:this._config.fallbackPlacements}},{name:"offset",options:{offset:this._getOffset()}},{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"arrow",options:{element:`.${this.constructor.NAME}-arrow`}},{name:"preSetPlacement",enabled:!0,phase:"beforeMain",fn:t=>{this._getTipElement().setAttribute("data-popper-placement",t.state.placement)}}]};return{...e,..."function"==typeof this._config.popperConfig?this._config.popperConfig(e):this._config.popperConfig}}_setListeners(){const t=this._config.trigger.split(" ");for(const e of t)if("click"===e)ve.on(this._element,this.constructor.eventName("click"),this._config.selector,(t=>{this._initializeOnDelegatedTarget(t).toggle()}));else if("manual"!==e){const t=e===ui?this.constructor.eventName("mouseenter"):this.constructor.eventName("focusin"),n=e===ui?this.constructor.eventName("mouseleave"):this.constructor.eventName("focusout");ve.on(this._element,t,this._config.selector,(t=>{const e=this._initializeOnDelegatedTarget(t);e._activeTrigger["focusin"===t.type?li:ui]=!0,e._enter()})),ve.on(this._element,n,this._config.selector,(t=>{const e=this._initializeOnDelegatedTarget(t);e._activeTrigger["focusout"===t.type?li:ui]=e._element.contains(t.relatedTarget),e._leave()}))}this._hideModalHandler=()=>{this._element&&this.hide()},ve.on(this._element.closest(si),ci,this._hideModalHandler)}_fixTitle(){const t=this._element.getAttribute("title");t&&(this._element.getAttribute("aria-label")||this._element.textContent.trim()||this._element.setAttribute("aria-label",t),this._element.setAttribute("data-bs-original-title",t),this._element.removeAttribute("title"))}_enter(){this._isShown()||this._isHovered?this._isHovered=!0:(this._isHovered=!0,this._setTimeout((()=>{this._isHovered&&this.show()}),this._config.delay.show))}_leave(){this._isWithActiveTrigger()||(this._isHovered=!1,this._setTimeout((()=>{this._isHovered||this.hide()}),this._config.delay.hide))}_setTimeout(t,e){clearTimeout(this._timeout),this._timeout=setTimeout(t,e)}_isWithActiveTrigger(){return Object.values(this._activeTrigger).includes(!0)}_getConfig(t){const e=we.getDataAttributes(this._element);for(const t of Object.keys(e))ii.has(t)&&delete e[t];return t={...e,..."object"==typeof t&&t?t:{}},t=this._mergeConfigObj(t),t=this._configAfterMerge(t),this._typeCheckConfig(t),t}_configAfterMerge(t){return t.container=!1===t.container?document.body:zt(t.container),"number"==typeof t.delay&&(t.delay={show:t.delay,hide:t.delay}),"number"==typeof t.title&&(t.title=t.title.toString()),"number"==typeof t.content&&(t.content=t.content.toString()),t}_getDelegateConfig(){const t={};for(const e in this._config)this.constructor.Default[e]!==this._config[e]&&(t[e]=this._config[e]);return t.selector=!1,t.trigger="manual",t}_disposePopper(){this._popper&&(this._popper.destroy(),this._popper=null),this.tip&&(this.tip.remove(),this.tip=null)}static jQueryInterface(t){return this.each((function(){const e=hi.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}Zt(hi);const vi={...hi.Default,content:"",offset:[0,8],placement:"right",template:'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',trigger:"click"},gi={...hi.DefaultType,content:"(null|string|element|function)"};class mi extends hi{static get Default(){return vi}static get DefaultType(){return gi}static get NAME(){return"popover"}_isWithContent(){return this._getTitle()||this._getContent()}_getContentForTemplate(){return{".popover-header":this._getTitle(),".popover-body":this._getContent()}}_getContent(){return this._resolvePossibleFunction(this._config.content)}static jQueryInterface(t){return this.each((function(){const e=mi.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}Zt(mi);const _i=".bs.scrollspy",yi=`activate${_i}`,bi=`click${_i}`,wi=`load${_i}.data-api`,xi="active",Ci="[href]",Ai=".nav-link",Oi=`${Ai}, .nav-item > ${Ai}, .list-group-item`,ki={offset:null,rootMargin:"0px 0px -25%",smoothScroll:!1,target:null,threshold:[.1,.5,1]},$i={offset:"(number|null)",rootMargin:"string",smoothScroll:"boolean",target:"element",threshold:"array"};class Ei extends Ce{constructor(t,e){super(t,e),this._targetLinks=new Map,this._observableSections=new Map,this._rootElement="visible"===getComputedStyle(this._element).overflowY?null:this._element,this._activeTarget=null,this._observer=null,this._previousScrollData={visibleEntryTop:0,parentScrollTop:0},this.refresh()}static get Default(){return ki}static get DefaultType(){return $i}static get NAME(){return"scrollspy"}refresh(){this._initializeTargetsAndObservables(),this._maybeEnableSmoothScroll(),this._observer?this._observer.disconnect():this._observer=this._getNewObserver();for(const t of this._observableSections.values())this._observer.observe(t)}dispose(){this._observer.disconnect(),super.dispose()}_configAfterMerge(t){return t.target=zt(t.target)||document.body,t.rootMargin=t.offset?`${t.offset}px 0px -30%`:t.rootMargin,"string"==typeof t.threshold&&(t.threshold=t.threshold.split(",").map((t=>Number.parseFloat(t)))),t}_maybeEnableSmoothScroll(){this._config.smoothScroll&&(ve.off(this._config.target,bi),ve.on(this._config.target,bi,Ci,(t=>{const e=this._observableSections.get(t.target.hash);if(e){t.preventDefault();const n=this._rootElement||window,r=e.offsetTop-this._element.offsetTop;if(n.scrollTo)return void n.scrollTo({top:r,behavior:"smooth"});n.scrollTop=r}})))}_getNewObserver(){const t={root:this._rootElement,threshold:this._config.threshold,rootMargin:this._config.rootMargin};return new IntersectionObserver((t=>this._observerCallback(t)),t)}_observerCallback(t){const e=t=>this._targetLinks.get(`#${t.target.id}`),n=t=>{this._previousScrollData.visibleEntryTop=t.target.offsetTop,this._process(e(t))},r=(this._rootElement||document.documentElement).scrollTop,i=r>=this._previousScrollData.parentScrollTop;this._previousScrollData.parentScrollTop=r;for(const o of t){if(!o.isIntersecting){this._activeTarget=null,this._clearActiveClass(e(o));continue}const t=o.target.offsetTop>=this._previousScrollData.visibleEntryTop;if(i&&t){if(n(o),!r)return}else i||t||n(o)}}_initializeTargetsAndObservables(){this._targetLinks=new Map,this._observableSections=new Map;const t=je.find(Ci,this._config.target);for(const e of t){if(!e.hash||Ht(e))continue;const t=je.findOne(e.hash,this._element);Ut(t)&&(this._targetLinks.set(e.hash,e),this._observableSections.set(e.hash,t))}}_process(t){this._activeTarget!==t&&(this._clearActiveClass(this._config.target),this._activeTarget=t,t.classList.add(xi),this._activateParents(t),ve.trigger(this._element,yi,{relatedTarget:t}))}_activateParents(t){if(t.classList.contains("dropdown-item"))je.findOne(".dropdown-toggle",t.closest(".dropdown")).classList.add(xi);else for(const e of je.parents(t,".nav, .list-group"))for(const t of je.prev(e,Oi))t.classList.add(xi)}_clearActiveClass(t){t.classList.remove(xi);const e=je.find(`${Ci}.${xi}`,t);for(const t of e)t.classList.remove(xi)}static jQueryInterface(t){return this.each((function(){const e=Ei.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t]()}}))}}ve.on(window,wi,(()=>{for(const t of je.find('[data-bs-spy="scroll"]'))Ei.getOrCreateInstance(t)})),Zt(Ei);const Ti=".bs.tab",Si=`hide${Ti}`,ji=`hidden${Ti}`,Li=`show${Ti}`,Ni=`shown${Ti}`,Di=`click${Ti}`,Ii=`keydown${Ti}`,Pi=`load${Ti}`,Mi="ArrowLeft",Ri="ArrowRight",Fi="ArrowUp",Bi="ArrowDown",zi="active",Ui="fade",Hi="show",Wi=":not(.dropdown-toggle)",qi='[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',Vi=`${`.nav-link${Wi}, .list-group-item${Wi}, [role="tab"]${Wi}`}, ${qi}`,Ki=`.${zi}[data-bs-toggle="tab"], .${zi}[data-bs-toggle="pill"], .${zi}[data-bs-toggle="list"]`;class Ji extends Ce{constructor(t){super(t),this._parent=this._element.closest('.list-group, .nav, [role="tablist"]'),this._parent&&(this._setInitialAttributes(this._parent,this._getChildren()),ve.on(this._element,Ii,(t=>this._keydown(t))))}static get NAME(){return"tab"}show(){const t=this._element;if(this._elemIsActive(t))return;const e=this._getActiveElem(),n=e?ve.trigger(e,Si,{relatedTarget:t}):null;ve.trigger(t,Li,{relatedTarget:e}).defaultPrevented||n&&n.defaultPrevented||(this._deactivate(e,t),this._activate(t,e))}_activate(t,e){if(!t)return;t.classList.add(zi),this._activate(Rt(t));this._queueCallback((()=>{"tab"===t.getAttribute("role")?(t.removeAttribute("tabindex"),t.setAttribute("aria-selected",!0),this._toggleDropDown(t,!0),ve.trigger(t,Ni,{relatedTarget:e})):t.classList.add(Hi)}),t,t.classList.contains(Ui))}_deactivate(t,e){if(!t)return;t.classList.remove(zi),t.blur(),this._deactivate(Rt(t));this._queueCallback((()=>{"tab"===t.getAttribute("role")?(t.setAttribute("aria-selected",!1),t.setAttribute("tabindex","-1"),this._toggleDropDown(t,!1),ve.trigger(t,ji,{relatedTarget:e})):t.classList.remove(Hi)}),t,t.classList.contains(Ui))}_keydown(t){if(![Mi,Ri,Fi,Bi].includes(t.key))return;t.stopPropagation(),t.preventDefault();const e=[Ri,Bi].includes(t.key),n=Gt(this._getChildren().filter((t=>!Ht(t))),t.target,e,!0);n&&(n.focus({preventScroll:!0}),Ji.getOrCreateInstance(n).show())}_getChildren(){return je.find(Vi,this._parent)}_getActiveElem(){return this._getChildren().find((t=>this._elemIsActive(t)))||null}_setInitialAttributes(t,e){this._setAttributeIfNotExists(t,"role","tablist");for(const t of e)this._setInitialAttributesOnChild(t)}_setInitialAttributesOnChild(t){t=this._getInnerElement(t);const e=this._elemIsActive(t),n=this._getOuterElement(t);t.setAttribute("aria-selected",e),n!==t&&this._setAttributeIfNotExists(n,"role","presentation"),e||t.setAttribute("tabindex","-1"),this._setAttributeIfNotExists(t,"role","tab"),this._setInitialAttributesOnTargetPanel(t)}_setInitialAttributesOnTargetPanel(t){const e=Rt(t);e&&(this._setAttributeIfNotExists(e,"role","tabpanel"),t.id&&this._setAttributeIfNotExists(e,"aria-labelledby",`#${t.id}`))}_toggleDropDown(t,e){const n=this._getOuterElement(t);if(!n.classList.contains("dropdown"))return;const r=(t,r)=>{const i=je.findOne(t,n);i&&i.classList.toggle(r,e)};r(".dropdown-toggle",zi),r(".dropdown-menu",Hi),n.setAttribute("aria-expanded",e)}_setAttributeIfNotExists(t,e,n){t.hasAttribute(e)||t.setAttribute(e,n)}_elemIsActive(t){return t.classList.contains(zi)}_getInnerElement(t){return t.matches(Vi)?t:je.findOne(Vi,t)}_getOuterElement(t){return t.closest(".nav-item, .list-group-item")||t}static jQueryInterface(t){return this.each((function(){const e=Ji.getOrCreateInstance(this);if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t]()}}))}}ve.on(document,Di,qi,(function(t){["A","AREA"].includes(this.tagName)&&t.preventDefault(),Ht(this)||Ji.getOrCreateInstance(this).show()})),ve.on(window,Pi,(()=>{for(const t of je.find(Ki))Ji.getOrCreateInstance(t)})),Zt(Ji);const Xi=".bs.toast",Zi=`mouseover${Xi}`,Yi=`mouseout${Xi}`,Qi=`focusin${Xi}`,Gi=`focusout${Xi}`,to=`hide${Xi}`,eo=`hidden${Xi}`,no=`show${Xi}`,ro=`shown${Xi}`,io="hide",oo="show",ao="showing",so={animation:"boolean",autohide:"boolean",delay:"number"},co={animation:!0,autohide:!0,delay:5e3};class uo extends Ce{constructor(t,e){super(t,e),this._timeout=null,this._hasMouseInteraction=!1,this._hasKeyboardInteraction=!1,this._setListeners()}static get Default(){return co}static get DefaultType(){return so}static get NAME(){return"toast"}show(){if(ve.trigger(this._element,no).defaultPrevented)return;this._clearTimeout(),this._config.animation&&this._element.classList.add("fade");this._element.classList.remove(io),Vt(this._element),this._element.classList.add(oo,ao),this._queueCallback((()=>{this._element.classList.remove(ao),ve.trigger(this._element,ro),this._maybeScheduleHide()}),this._element,this._config.animation)}hide(){if(!this.isShown())return;if(ve.trigger(this._element,to).defaultPrevented)return;this._element.classList.add(ao),this._queueCallback((()=>{this._element.classList.add(io),this._element.classList.remove(ao,oo),ve.trigger(this._element,eo)}),this._element,this._config.animation)}dispose(){this._clearTimeout(),this.isShown()&&this._element.classList.remove(oo),super.dispose()}isShown(){return this._element.classList.contains(oo)}_maybeScheduleHide(){this._config.autohide&&(this._hasMouseInteraction||this._hasKeyboardInteraction||(this._timeout=setTimeout((()=>{this.hide()}),this._config.delay)))}_onInteraction(t,e){switch(t.type){case"mouseover":case"mouseout":this._hasMouseInteraction=e;break;case"focusin":case"focusout":this._hasKeyboardInteraction=e}if(e)return void this._clearTimeout();const n=t.relatedTarget;this._element===n||this._element.contains(n)||this._maybeScheduleHide()}_setListeners(){ve.on(this._element,Zi,(t=>this._onInteraction(t,!0))),ve.on(this._element,Yi,(t=>this._onInteraction(t,!1))),ve.on(this._element,Qi,(t=>this._onInteraction(t,!0))),ve.on(this._element,Gi,(t=>this._onInteraction(t,!1)))}_clearTimeout(){clearTimeout(this._timeout),this._timeout=null}static jQueryInterface(t){return this.each((function(){const e=uo.getOrCreateInstance(this,t);if("string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t](this)}}))}}Ae(uo),Zt(uo)},486:function(t,e,n){var r;t=n.nmd(t),function(){var i,o="Expected a function",a="__lodash_hash_undefined__",s="__lodash_placeholder__",c=16,u=32,l=64,f=128,p=256,d=1/0,h=9007199254740991,v=NaN,g=4294967295,m=[["ary",f],["bind",1],["bindKey",2],["curry",8],["curryRight",c],["flip",512],["partial",u],["partialRight",l],["rearg",p]],_="[object Arguments]",y="[object Array]",b="[object Boolean]",w="[object Date]",x="[object Error]",C="[object Function]",A="[object GeneratorFunction]",O="[object Map]",k="[object Number]",$="[object Object]",E="[object Promise]",T="[object RegExp]",S="[object Set]",j="[object String]",L="[object Symbol]",N="[object WeakMap]",D="[object ArrayBuffer]",I="[object DataView]",P="[object Float32Array]",M="[object Float64Array]",R="[object Int8Array]",F="[object Int16Array]",B="[object Int32Array]",z="[object Uint8Array]",U="[object Uint8ClampedArray]",H="[object Uint16Array]",W="[object Uint32Array]",q=/\b__p \+= '';/g,V=/\b(__p \+=) '' \+/g,K=/(__e\(.*?\)|\b__t\)) \+\n'';/g,J=/&(?:amp|lt|gt|quot|#39);/g,X=/[&<>"']/g,Z=RegExp(J.source),Y=RegExp(X.source),Q=/<%-([\s\S]+?)%>/g,G=/<%([\s\S]+?)%>/g,tt=/<%=([\s\S]+?)%>/g,et=/\.|\[(?:[^[\]]*|(["'])(?:(?!\1)[^\\]|\\.)*?\1)\]/,nt=/^\w*$/,rt=/[^.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|$))/g,it=/[\\^$.*+?()[\]{}|]/g,ot=RegExp(it.source),at=/^\s+/,st=/\s/,ct=/\{(?:\n\/\* \[wrapped with .+\] \*\/)?\n?/,ut=/\{\n\/\* \[wrapped with (.+)\] \*/,lt=/,? & /,ft=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g,pt=/[()=,{}\[\]\/\s]/,dt=/\\(\\)?/g,ht=/\$\{([^\\}]*(?:\\.[^\\}]*)*)\}/g,vt=/\w*$/,gt=/^[-+]0x[0-9a-f]+$/i,mt=/^0b[01]+$/i,_t=/^\[object .+?Constructor\]$/,yt=/^0o[0-7]+$/i,bt=/^(?:0|[1-9]\d*)$/,wt=/[\xc0-\xd6\xd8-\xf6\xf8-\xff\u0100-\u017f]/g,xt=/($^)/,Ct=/['\n\r\u2028\u2029\\]/g,At="\\ud800-\\udfff",Ot="\\u0300-\\u036f\\ufe20-\\ufe2f\\u20d0-\\u20ff",kt="\\u2700-\\u27bf",$t="a-z\\xdf-\\xf6\\xf8-\\xff",Et="A-Z\\xc0-\\xd6\\xd8-\\xde",Tt="\\ufe0e\\ufe0f",St="\\xac\\xb1\\xd7\\xf7\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf\\u2000-\\u206f \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",jt="['’]",Lt="["+At+"]",Nt="["+St+"]",Dt="["+Ot+"]",It="\\d+",Pt="["+kt+"]",Mt="["+$t+"]",Rt="[^"+At+St+It+kt+$t+Et+"]",Ft="\\ud83c[\\udffb-\\udfff]",Bt="[^"+At+"]",zt="(?:\\ud83c[\\udde6-\\uddff]){2}",Ut="[\\ud800-\\udbff][\\udc00-\\udfff]",Ht="["+Et+"]",Wt="\\u200d",qt="(?:"+Mt+"|"+Rt+")",Vt="(?:"+Ht+"|"+Rt+")",Kt="(?:['’](?:d|ll|m|re|s|t|ve))?",Jt="(?:['’](?:D|LL|M|RE|S|T|VE))?",Xt="(?:"+Dt+"|"+Ft+")"+"?",Zt="["+Tt+"]?",Yt=Zt+Xt+("(?:"+Wt+"(?:"+[Bt,zt,Ut].join("|")+")"+Zt+Xt+")*"),Qt="(?:"+[Pt,zt,Ut].join("|")+")"+Yt,Gt="(?:"+[Bt+Dt+"?",Dt,zt,Ut,Lt].join("|")+")",te=RegExp(jt,"g"),ee=RegExp(Dt,"g"),ne=RegExp(Ft+"(?="+Ft+")|"+Gt+Yt,"g"),re=RegExp([Ht+"?"+Mt+"+"+Kt+"(?="+[Nt,Ht,"$"].join("|")+")",Vt+"+"+Jt+"(?="+[Nt,Ht+qt,"$"].join("|")+")",Ht+"?"+qt+"+"+Kt,Ht+"+"+Jt,"\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])","\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",It,Qt].join("|"),"g"),ie=RegExp("["+Wt+At+Ot+Tt+"]"),oe=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/,ae=["Array","Buffer","DataView","Date","Error","Float32Array","Float64Array","Function","Int8Array","Int16Array","Int32Array","Map","Math","Object","Promise","RegExp","Set","String","Symbol","TypeError","Uint8Array","Uint8ClampedArray","Uint16Array","Uint32Array","WeakMap","_","clearTimeout","isFinite","parseInt","setTimeout"],se=-1,ce={};ce[P]=ce[M]=ce[R]=ce[F]=ce[B]=ce[z]=ce[U]=ce[H]=ce[W]=!0,ce[_]=ce[y]=ce[D]=ce[b]=ce[I]=ce[w]=ce[x]=ce[C]=ce[O]=ce[k]=ce[$]=ce[T]=ce[S]=ce[j]=ce[N]=!1;var ue={};ue[_]=ue[y]=ue[D]=ue[I]=ue[b]=ue[w]=ue[P]=ue[M]=ue[R]=ue[F]=ue[B]=ue[O]=ue[k]=ue[$]=ue[T]=ue[S]=ue[j]=ue[L]=ue[z]=ue[U]=ue[H]=ue[W]=!0,ue[x]=ue[C]=ue[N]=!1;var le={"\\":"\\","'":"'","\n":"n","\r":"r","\u2028":"u2028","\u2029":"u2029"},fe=parseFloat,pe=parseInt,de="object"==typeof n.g&&n.g&&n.g.Object===Object&&n.g,he="object"==typeof self&&self&&self.Object===Object&&self,ve=de||he||Function("return this")(),ge=e&&!e.nodeType&&e,me=ge&&t&&!t.nodeType&&t,_e=me&&me.exports===ge,ye=_e&&de.process,be=function(){try{var t=me&&me.require&&me.require("util").types;return t||ye&&ye.binding&&ye.binding("util")}catch(t){}}(),we=be&&be.isArrayBuffer,xe=be&&be.isDate,Ce=be&&be.isMap,Ae=be&&be.isRegExp,Oe=be&&be.isSet,ke=be&&be.isTypedArray;function $e(t,e,n){switch(n.length){case 0:return t.call(e);case 1:return t.call(e,n[0]);case 2:return t.call(e,n[0],n[1]);case 3:return t.call(e,n[0],n[1],n[2])}return t.apply(e,n)}function Ee(t,e,n,r){for(var i=-1,o=null==t?0:t.length;++i<o;){var a=t[i];e(r,a,n(a),t)}return r}function Te(t,e){for(var n=-1,r=null==t?0:t.length;++n<r&&!1!==e(t[n],n,t););return t}function Se(t,e){for(var n=null==t?0:t.length;n--&&!1!==e(t[n],n,t););return t}function je(t,e){for(var n=-1,r=null==t?0:t.length;++n<r;)if(!e(t[n],n,t))return!1;return!0}function Le(t,e){for(var n=-1,r=null==t?0:t.length,i=0,o=[];++n<r;){var a=t[n];e(a,n,t)&&(o[i++]=a)}return o}function Ne(t,e){return!!(null==t?0:t.length)&&He(t,e,0)>-1}function De(t,e,n){for(var r=-1,i=null==t?0:t.length;++r<i;)if(n(e,t[r]))return!0;return!1}function Ie(t,e){for(var n=-1,r=null==t?0:t.length,i=Array(r);++n<r;)i[n]=e(t[n],n,t);return i}function Pe(t,e){for(var n=-1,r=e.length,i=t.length;++n<r;)t[i+n]=e[n];return t}function Me(t,e,n,r){var i=-1,o=null==t?0:t.length;for(r&&o&&(n=t[++i]);++i<o;)n=e(n,t[i],i,t);return n}function Re(t,e,n,r){var i=null==t?0:t.length;for(r&&i&&(n=t[--i]);i--;)n=e(n,t[i],i,t);return n}function Fe(t,e){for(var n=-1,r=null==t?0:t.length;++n<r;)if(e(t[n],n,t))return!0;return!1}var Be=Ke("length");function ze(t,e,n){var r;return n(t,(function(t,n,i){if(e(t,n,i))return r=n,!1})),r}function Ue(t,e,n,r){for(var i=t.length,o=n+(r?1:-1);r?o--:++o<i;)if(e(t[o],o,t))return o;return-1}function He(t,e,n){return e==e?function(t,e,n){var r=n-1,i=t.length;for(;++r<i;)if(t[r]===e)return r;return-1}(t,e,n):Ue(t,qe,n)}function We(t,e,n,r){for(var i=n-1,o=t.length;++i<o;)if(r(t[i],e))return i;return-1}function qe(t){return t!=t}function Ve(t,e){var n=null==t?0:t.length;return n?Ze(t,e)/n:v}function Ke(t){return function(e){return null==e?i:e[t]}}function Je(t){return function(e){return null==t?i:t[e]}}function Xe(t,e,n,r,i){return i(t,(function(t,i,o){n=r?(r=!1,t):e(n,t,i,o)})),n}function Ze(t,e){for(var n,r=-1,o=t.length;++r<o;){var a=e(t[r]);a!==i&&(n=n===i?a:n+a)}return n}function Ye(t,e){for(var n=-1,r=Array(t);++n<t;)r[n]=e(n);return r}function Qe(t){return t?t.slice(0,mn(t)+1).replace(at,""):t}function Ge(t){return function(e){return t(e)}}function tn(t,e){return Ie(e,(function(e){return t[e]}))}function en(t,e){return t.has(e)}function nn(t,e){for(var n=-1,r=t.length;++n<r&&He(e,t[n],0)>-1;);return n}function rn(t,e){for(var n=t.length;n--&&He(e,t[n],0)>-1;);return n}function on(t,e){for(var n=t.length,r=0;n--;)t[n]===e&&++r;return r}var an=Je({À:"A",Á:"A",Â:"A",Ã:"A",Ä:"A",Å:"A",à:"a",á:"a",â:"a",ã:"a",ä:"a",å:"a",Ç:"C",ç:"c",Ð:"D",ð:"d",È:"E",É:"E",Ê:"E",Ë:"E",è:"e",é:"e",ê:"e",ë:"e",Ì:"I",Í:"I",Î:"I",Ï:"I",ì:"i",í:"i",î:"i",ï:"i",Ñ:"N",ñ:"n",Ò:"O",Ó:"O",Ô:"O",Õ:"O",Ö:"O",Ø:"O",ò:"o",ó:"o",ô:"o",õ:"o",ö:"o",ø:"o",Ù:"U",Ú:"U",Û:"U",Ü:"U",ù:"u",ú:"u",û:"u",ü:"u",Ý:"Y",ý:"y",ÿ:"y",Æ:"Ae",æ:"ae",Þ:"Th",þ:"th",ß:"ss",Ā:"A",Ă:"A",Ą:"A",ā:"a",ă:"a",ą:"a",Ć:"C",Ĉ:"C",Ċ:"C",Č:"C",ć:"c",ĉ:"c",ċ:"c",č:"c",Ď:"D",Đ:"D",ď:"d",đ:"d",Ē:"E",Ĕ:"E",Ė:"E",Ę:"E",Ě:"E",ē:"e",ĕ:"e",ė:"e",ę:"e",ě:"e",Ĝ:"G",Ğ:"G",Ġ:"G",Ģ:"G",ĝ:"g",ğ:"g",ġ:"g",ģ:"g",Ĥ:"H",Ħ:"H",ĥ:"h",ħ:"h",Ĩ:"I",Ī:"I",Ĭ:"I",Į:"I",İ:"I",ĩ:"i",ī:"i",ĭ:"i",į:"i",ı:"i",Ĵ:"J",ĵ:"j",Ķ:"K",ķ:"k",ĸ:"k",Ĺ:"L",Ļ:"L",Ľ:"L",Ŀ:"L",Ł:"L",ĺ:"l",ļ:"l",ľ:"l",ŀ:"l",ł:"l",Ń:"N",Ņ:"N",Ň:"N",Ŋ:"N",ń:"n",ņ:"n",ň:"n",ŋ:"n",Ō:"O",Ŏ:"O",Ő:"O",ō:"o",ŏ:"o",ő:"o",Ŕ:"R",Ŗ:"R",Ř:"R",ŕ:"r",ŗ:"r",ř:"r",Ś:"S",Ŝ:"S",Ş:"S",Š:"S",ś:"s",ŝ:"s",ş:"s",š:"s",Ţ:"T",Ť:"T",Ŧ:"T",ţ:"t",ť:"t",ŧ:"t",Ũ:"U",Ū:"U",Ŭ:"U",Ů:"U",Ű:"U",Ų:"U",ũ:"u",ū:"u",ŭ:"u",ů:"u",ű:"u",ų:"u",Ŵ:"W",ŵ:"w",Ŷ:"Y",ŷ:"y",Ÿ:"Y",Ź:"Z",Ż:"Z",Ž:"Z",ź:"z",ż:"z",ž:"z",Ĳ:"IJ",ĳ:"ij",Œ:"Oe",œ:"oe",ŉ:"'n",ſ:"s"}),sn=Je({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"});function cn(t){return"\\"+le[t]}function un(t){return ie.test(t)}function ln(t){var e=-1,n=Array(t.size);return t.forEach((function(t,r){n[++e]=[r,t]})),n}function fn(t,e){return function(n){return t(e(n))}}function pn(t,e){for(var n=-1,r=t.length,i=0,o=[];++n<r;){var a=t[n];a!==e&&a!==s||(t[n]=s,o[i++]=n)}return o}function dn(t){var e=-1,n=Array(t.size);return t.forEach((function(t){n[++e]=t})),n}function hn(t){var e=-1,n=Array(t.size);return t.forEach((function(t){n[++e]=[t,t]})),n}function vn(t){return un(t)?function(t){var e=ne.lastIndex=0;for(;ne.test(t);)++e;return e}(t):Be(t)}function gn(t){return un(t)?function(t){return t.match(ne)||[]}(t):function(t){return t.split("")}(t)}function mn(t){for(var e=t.length;e--&&st.test(t.charAt(e)););return e}var _n=Je({"&amp;":"&","&lt;":"<","&gt;":">","&quot;":'"',"&#39;":"'"});var yn=function t(e){var n,r=(e=null==e?ve:yn.defaults(ve.Object(),e,yn.pick(ve,ae))).Array,st=e.Date,At=e.Error,Ot=e.Function,kt=e.Math,$t=e.Object,Et=e.RegExp,Tt=e.String,St=e.TypeError,jt=r.prototype,Lt=Ot.prototype,Nt=$t.prototype,Dt=e["__core-js_shared__"],It=Lt.toString,Pt=Nt.hasOwnProperty,Mt=0,Rt=(n=/[^.]+$/.exec(Dt&&Dt.keys&&Dt.keys.IE_PROTO||""))?"Symbol(src)_1."+n:"",Ft=Nt.toString,Bt=It.call($t),zt=ve._,Ut=Et("^"+It.call(Pt).replace(it,"\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,"$1.*?")+"$"),Ht=_e?e.Buffer:i,Wt=e.Symbol,qt=e.Uint8Array,Vt=Ht?Ht.allocUnsafe:i,Kt=fn($t.getPrototypeOf,$t),Jt=$t.create,Xt=Nt.propertyIsEnumerable,Zt=jt.splice,Yt=Wt?Wt.isConcatSpreadable:i,Qt=Wt?Wt.iterator:i,Gt=Wt?Wt.toStringTag:i,ne=function(){try{var t=ho($t,"defineProperty");return t({},"",{}),t}catch(t){}}(),ie=e.clearTimeout!==ve.clearTimeout&&e.clearTimeout,le=st&&st.now!==ve.Date.now&&st.now,de=e.setTimeout!==ve.setTimeout&&e.setTimeout,he=kt.ceil,ge=kt.floor,me=$t.getOwnPropertySymbols,ye=Ht?Ht.isBuffer:i,be=e.isFinite,Be=jt.join,Je=fn($t.keys,$t),bn=kt.max,wn=kt.min,xn=st.now,Cn=e.parseInt,An=kt.random,On=jt.reverse,kn=ho(e,"DataView"),$n=ho(e,"Map"),En=ho(e,"Promise"),Tn=ho(e,"Set"),Sn=ho(e,"WeakMap"),jn=ho($t,"create"),Ln=Sn&&new Sn,Nn={},Dn=zo(kn),In=zo($n),Pn=zo(En),Mn=zo(Tn),Rn=zo(Sn),Fn=Wt?Wt.prototype:i,Bn=Fn?Fn.valueOf:i,zn=Fn?Fn.toString:i;function Un(t){if(is(t)&&!Ka(t)&&!(t instanceof Vn)){if(t instanceof qn)return t;if(Pt.call(t,"__wrapped__"))return Uo(t)}return new qn(t)}var Hn=function(){function t(){}return function(e){if(!rs(e))return{};if(Jt)return Jt(e);t.prototype=e;var n=new t;return t.prototype=i,n}}();function Wn(){}function qn(t,e){this.__wrapped__=t,this.__actions__=[],this.__chain__=!!e,this.__index__=0,this.__values__=i}function Vn(t){this.__wrapped__=t,this.__actions__=[],this.__dir__=1,this.__filtered__=!1,this.__iteratees__=[],this.__takeCount__=g,this.__views__=[]}function Kn(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function Jn(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function Xn(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var r=t[e];this.set(r[0],r[1])}}function Zn(t){var e=-1,n=null==t?0:t.length;for(this.__data__=new Xn;++e<n;)this.add(t[e])}function Yn(t){var e=this.__data__=new Jn(t);this.size=e.size}function Qn(t,e){var n=Ka(t),r=!n&&Va(t),i=!n&&!r&&Ya(t),o=!n&&!r&&!i&&ps(t),a=n||r||i||o,s=a?Ye(t.length,Tt):[],c=s.length;for(var u in t)!e&&!Pt.call(t,u)||a&&("length"==u||i&&("offset"==u||"parent"==u)||o&&("buffer"==u||"byteLength"==u||"byteOffset"==u)||wo(u,c))||s.push(u);return s}function Gn(t){var e=t.length;return e?t[Zr(0,e-1)]:i}function tr(t,e){return Ro(ji(t),ur(e,0,t.length))}function er(t){return Ro(ji(t))}function nr(t,e,n){(n!==i&&!Ha(t[e],n)||n===i&&!(e in t))&&sr(t,e,n)}function rr(t,e,n){var r=t[e];Pt.call(t,e)&&Ha(r,n)&&(n!==i||e in t)||sr(t,e,n)}function ir(t,e){for(var n=t.length;n--;)if(Ha(t[n][0],e))return n;return-1}function or(t,e,n,r){return hr(t,(function(t,i,o){e(r,t,n(t),o)})),r}function ar(t,e){return t&&Li(e,Ds(e),t)}function sr(t,e,n){"__proto__"==e&&ne?ne(t,e,{configurable:!0,enumerable:!0,value:n,writable:!0}):t[e]=n}function cr(t,e){for(var n=-1,o=e.length,a=r(o),s=null==t;++n<o;)a[n]=s?i:Ts(t,e[n]);return a}function ur(t,e,n){return t==t&&(n!==i&&(t=t<=n?t:n),e!==i&&(t=t>=e?t:e)),t}function lr(t,e,n,r,o,a){var s,c=1&e,u=2&e,l=4&e;if(n&&(s=o?n(t,r,o,a):n(t)),s!==i)return s;if(!rs(t))return t;var f=Ka(t);if(f){if(s=function(t){var e=t.length,n=new t.constructor(e);e&&"string"==typeof t[0]&&Pt.call(t,"index")&&(n.index=t.index,n.input=t.input);return n}(t),!c)return ji(t,s)}else{var p=mo(t),d=p==C||p==A;if(Ya(t))return Oi(t,c);if(p==$||p==_||d&&!o){if(s=u||d?{}:yo(t),!c)return u?function(t,e){return Li(t,go(t),e)}(t,function(t,e){return t&&Li(e,Is(e),t)}(s,t)):function(t,e){return Li(t,vo(t),e)}(t,ar(s,t))}else{if(!ue[p])return o?t:{};s=function(t,e,n){var r=t.constructor;switch(e){case D:return ki(t);case b:case w:return new r(+t);case I:return function(t,e){var n=e?ki(t.buffer):t.buffer;return new t.constructor(n,t.byteOffset,t.byteLength)}(t,n);case P:case M:case R:case F:case B:case z:case U:case H:case W:return $i(t,n);case O:return new r;case k:case j:return new r(t);case T:return function(t){var e=new t.constructor(t.source,vt.exec(t));return e.lastIndex=t.lastIndex,e}(t);case S:return new r;case L:return i=t,Bn?$t(Bn.call(i)):{}}var i}(t,p,c)}}a||(a=new Yn);var h=a.get(t);if(h)return h;a.set(t,s),us(t)?t.forEach((function(r){s.add(lr(r,e,n,r,t,a))})):os(t)&&t.forEach((function(r,i){s.set(i,lr(r,e,n,i,t,a))}));var v=f?i:(l?u?ao:oo:u?Is:Ds)(t);return Te(v||t,(function(r,i){v&&(r=t[i=r]),rr(s,i,lr(r,e,n,i,t,a))})),s}function fr(t,e,n){var r=n.length;if(null==t)return!r;for(t=$t(t);r--;){var o=n[r],a=e[o],s=t[o];if(s===i&&!(o in t)||!a(s))return!1}return!0}function pr(t,e,n){if("function"!=typeof t)throw new St(o);return Do((function(){t.apply(i,n)}),e)}function dr(t,e,n,r){var i=-1,o=Ne,a=!0,s=t.length,c=[],u=e.length;if(!s)return c;n&&(e=Ie(e,Ge(n))),r?(o=De,a=!1):e.length>=200&&(o=en,a=!1,e=new Zn(e));t:for(;++i<s;){var l=t[i],f=null==n?l:n(l);if(l=r||0!==l?l:0,a&&f==f){for(var p=u;p--;)if(e[p]===f)continue t;c.push(l)}else o(e,f,r)||c.push(l)}return c}Un.templateSettings={escape:Q,evaluate:G,interpolate:tt,variable:"",imports:{_:Un}},Un.prototype=Wn.prototype,Un.prototype.constructor=Un,qn.prototype=Hn(Wn.prototype),qn.prototype.constructor=qn,Vn.prototype=Hn(Wn.prototype),Vn.prototype.constructor=Vn,Kn.prototype.clear=function(){this.__data__=jn?jn(null):{},this.size=0},Kn.prototype.delete=function(t){var e=this.has(t)&&delete this.__data__[t];return this.size-=e?1:0,e},Kn.prototype.get=function(t){var e=this.__data__;if(jn){var n=e[t];return n===a?i:n}return Pt.call(e,t)?e[t]:i},Kn.prototype.has=function(t){var e=this.__data__;return jn?e[t]!==i:Pt.call(e,t)},Kn.prototype.set=function(t,e){var n=this.__data__;return this.size+=this.has(t)?0:1,n[t]=jn&&e===i?a:e,this},Jn.prototype.clear=function(){this.__data__=[],this.size=0},Jn.prototype.delete=function(t){var e=this.__data__,n=ir(e,t);return!(n<0)&&(n==e.length-1?e.pop():Zt.call(e,n,1),--this.size,!0)},Jn.prototype.get=function(t){var e=this.__data__,n=ir(e,t);return n<0?i:e[n][1]},Jn.prototype.has=function(t){return ir(this.__data__,t)>-1},Jn.prototype.set=function(t,e){var n=this.__data__,r=ir(n,t);return r<0?(++this.size,n.push([t,e])):n[r][1]=e,this},Xn.prototype.clear=function(){this.size=0,this.__data__={hash:new Kn,map:new($n||Jn),string:new Kn}},Xn.prototype.delete=function(t){var e=fo(this,t).delete(t);return this.size-=e?1:0,e},Xn.prototype.get=function(t){return fo(this,t).get(t)},Xn.prototype.has=function(t){return fo(this,t).has(t)},Xn.prototype.set=function(t,e){var n=fo(this,t),r=n.size;return n.set(t,e),this.size+=n.size==r?0:1,this},Zn.prototype.add=Zn.prototype.push=function(t){return this.__data__.set(t,a),this},Zn.prototype.has=function(t){return this.__data__.has(t)},Yn.prototype.clear=function(){this.__data__=new Jn,this.size=0},Yn.prototype.delete=function(t){var e=this.__data__,n=e.delete(t);return this.size=e.size,n},Yn.prototype.get=function(t){return this.__data__.get(t)},Yn.prototype.has=function(t){return this.__data__.has(t)},Yn.prototype.set=function(t,e){var n=this.__data__;if(n instanceof Jn){var r=n.__data__;if(!$n||r.length<199)return r.push([t,e]),this.size=++n.size,this;n=this.__data__=new Xn(r)}return n.set(t,e),this.size=n.size,this};var hr=Ii(xr),vr=Ii(Cr,!0);function gr(t,e){var n=!0;return hr(t,(function(t,r,i){return n=!!e(t,r,i)})),n}function mr(t,e,n){for(var r=-1,o=t.length;++r<o;){var a=t[r],s=e(a);if(null!=s&&(c===i?s==s&&!fs(s):n(s,c)))var c=s,u=a}return u}function _r(t,e){var n=[];return hr(t,(function(t,r,i){e(t,r,i)&&n.push(t)})),n}function yr(t,e,n,r,i){var o=-1,a=t.length;for(n||(n=bo),i||(i=[]);++o<a;){var s=t[o];e>0&&n(s)?e>1?yr(s,e-1,n,r,i):Pe(i,s):r||(i[i.length]=s)}return i}var br=Pi(),wr=Pi(!0);function xr(t,e){return t&&br(t,e,Ds)}function Cr(t,e){return t&&wr(t,e,Ds)}function Ar(t,e){return Le(e,(function(e){return ts(t[e])}))}function Or(t,e){for(var n=0,r=(e=wi(e,t)).length;null!=t&&n<r;)t=t[Bo(e[n++])];return n&&n==r?t:i}function kr(t,e,n){var r=e(t);return Ka(t)?r:Pe(r,n(t))}function $r(t){return null==t?t===i?"[object Undefined]":"[object Null]":Gt&&Gt in $t(t)?function(t){var e=Pt.call(t,Gt),n=t[Gt];try{t[Gt]=i;var r=!0}catch(t){}var o=Ft.call(t);r&&(e?t[Gt]=n:delete t[Gt]);return o}(t):function(t){return Ft.call(t)}(t)}function Er(t,e){return t>e}function Tr(t,e){return null!=t&&Pt.call(t,e)}function Sr(t,e){return null!=t&&e in $t(t)}function jr(t,e,n){for(var o=n?De:Ne,a=t[0].length,s=t.length,c=s,u=r(s),l=1/0,f=[];c--;){var p=t[c];c&&e&&(p=Ie(p,Ge(e))),l=wn(p.length,l),u[c]=!n&&(e||a>=120&&p.length>=120)?new Zn(c&&p):i}p=t[0];var d=-1,h=u[0];t:for(;++d<a&&f.length<l;){var v=p[d],g=e?e(v):v;if(v=n||0!==v?v:0,!(h?en(h,g):o(f,g,n))){for(c=s;--c;){var m=u[c];if(!(m?en(m,g):o(t[c],g,n)))continue t}h&&h.push(g),f.push(v)}}return f}function Lr(t,e,n){var r=null==(t=So(t,e=wi(e,t)))?t:t[Bo(Go(e))];return null==r?i:$e(r,t,n)}function Nr(t){return is(t)&&$r(t)==_}function Dr(t,e,n,r,o){return t===e||(null==t||null==e||!is(t)&&!is(e)?t!=t&&e!=e:function(t,e,n,r,o,a){var s=Ka(t),c=Ka(e),u=s?y:mo(t),l=c?y:mo(e),f=(u=u==_?$:u)==$,p=(l=l==_?$:l)==$,d=u==l;if(d&&Ya(t)){if(!Ya(e))return!1;s=!0,f=!1}if(d&&!f)return a||(a=new Yn),s||ps(t)?ro(t,e,n,r,o,a):function(t,e,n,r,i,o,a){switch(n){case I:if(t.byteLength!=e.byteLength||t.byteOffset!=e.byteOffset)return!1;t=t.buffer,e=e.buffer;case D:return!(t.byteLength!=e.byteLength||!o(new qt(t),new qt(e)));case b:case w:case k:return Ha(+t,+e);case x:return t.name==e.name&&t.message==e.message;case T:case j:return t==e+"";case O:var s=ln;case S:var c=1&r;if(s||(s=dn),t.size!=e.size&&!c)return!1;var u=a.get(t);if(u)return u==e;r|=2,a.set(t,e);var l=ro(s(t),s(e),r,i,o,a);return a.delete(t),l;case L:if(Bn)return Bn.call(t)==Bn.call(e)}return!1}(t,e,u,n,r,o,a);if(!(1&n)){var h=f&&Pt.call(t,"__wrapped__"),v=p&&Pt.call(e,"__wrapped__");if(h||v){var g=h?t.value():t,m=v?e.value():e;return a||(a=new Yn),o(g,m,n,r,a)}}if(!d)return!1;return a||(a=new Yn),function(t,e,n,r,o,a){var s=1&n,c=oo(t),u=c.length,l=oo(e),f=l.length;if(u!=f&&!s)return!1;var p=u;for(;p--;){var d=c[p];if(!(s?d in e:Pt.call(e,d)))return!1}var h=a.get(t),v=a.get(e);if(h&&v)return h==e&&v==t;var g=!0;a.set(t,e),a.set(e,t);var m=s;for(;++p<u;){var _=t[d=c[p]],y=e[d];if(r)var b=s?r(y,_,d,e,t,a):r(_,y,d,t,e,a);if(!(b===i?_===y||o(_,y,n,r,a):b)){g=!1;break}m||(m="constructor"==d)}if(g&&!m){var w=t.constructor,x=e.constructor;w==x||!("constructor"in t)||!("constructor"in e)||"function"==typeof w&&w instanceof w&&"function"==typeof x&&x instanceof x||(g=!1)}return a.delete(t),a.delete(e),g}(t,e,n,r,o,a)}(t,e,n,r,Dr,o))}function Ir(t,e,n,r){var o=n.length,a=o,s=!r;if(null==t)return!a;for(t=$t(t);o--;){var c=n[o];if(s&&c[2]?c[1]!==t[c[0]]:!(c[0]in t))return!1}for(;++o<a;){var u=(c=n[o])[0],l=t[u],f=c[1];if(s&&c[2]){if(l===i&&!(u in t))return!1}else{var p=new Yn;if(r)var d=r(l,f,u,t,e,p);if(!(d===i?Dr(f,l,3,r,p):d))return!1}}return!0}function Pr(t){return!(!rs(t)||(e=t,Rt&&Rt in e))&&(ts(t)?Ut:_t).test(zo(t));var e}function Mr(t){return"function"==typeof t?t:null==t?ac:"object"==typeof t?Ka(t)?Hr(t[0],t[1]):Ur(t):vc(t)}function Rr(t){if(!ko(t))return Je(t);var e=[];for(var n in $t(t))Pt.call(t,n)&&"constructor"!=n&&e.push(n);return e}function Fr(t){if(!rs(t))return function(t){var e=[];if(null!=t)for(var n in $t(t))e.push(n);return e}(t);var e=ko(t),n=[];for(var r in t)("constructor"!=r||!e&&Pt.call(t,r))&&n.push(r);return n}function Br(t,e){return t<e}function zr(t,e){var n=-1,i=Xa(t)?r(t.length):[];return hr(t,(function(t,r,o){i[++n]=e(t,r,o)})),i}function Ur(t){var e=po(t);return 1==e.length&&e[0][2]?Eo(e[0][0],e[0][1]):function(n){return n===t||Ir(n,t,e)}}function Hr(t,e){return Co(t)&&$o(e)?Eo(Bo(t),e):function(n){var r=Ts(n,t);return r===i&&r===e?Ss(n,t):Dr(e,r,3)}}function Wr(t,e,n,r,o){t!==e&&br(e,(function(a,s){if(o||(o=new Yn),rs(a))!function(t,e,n,r,o,a,s){var c=Lo(t,n),u=Lo(e,n),l=s.get(u);if(l)return void nr(t,n,l);var f=a?a(c,u,n+"",t,e,s):i,p=f===i;if(p){var d=Ka(u),h=!d&&Ya(u),v=!d&&!h&&ps(u);f=u,d||h||v?Ka(c)?f=c:Za(c)?f=ji(c):h?(p=!1,f=Oi(u,!0)):v?(p=!1,f=$i(u,!0)):f=[]:ss(u)||Va(u)?(f=c,Va(c)?f=bs(c):rs(c)&&!ts(c)||(f=yo(u))):p=!1}p&&(s.set(u,f),o(f,u,r,a,s),s.delete(u));nr(t,n,f)}(t,e,s,n,Wr,r,o);else{var c=r?r(Lo(t,s),a,s+"",t,e,o):i;c===i&&(c=a),nr(t,s,c)}}),Is)}function qr(t,e){var n=t.length;if(n)return wo(e+=e<0?n:0,n)?t[e]:i}function Vr(t,e,n){e=e.length?Ie(e,(function(t){return Ka(t)?function(e){return Or(e,1===t.length?t[0]:t)}:t})):[ac];var r=-1;e=Ie(e,Ge(lo()));var i=zr(t,(function(t,n,i){var o=Ie(e,(function(e){return e(t)}));return{criteria:o,index:++r,value:t}}));return function(t,e){var n=t.length;for(t.sort(e);n--;)t[n]=t[n].value;return t}(i,(function(t,e){return function(t,e,n){var r=-1,i=t.criteria,o=e.criteria,a=i.length,s=n.length;for(;++r<a;){var c=Ei(i[r],o[r]);if(c)return r>=s?c:c*("desc"==n[r]?-1:1)}return t.index-e.index}(t,e,n)}))}function Kr(t,e,n){for(var r=-1,i=e.length,o={};++r<i;){var a=e[r],s=Or(t,a);n(s,a)&&ei(o,wi(a,t),s)}return o}function Jr(t,e,n,r){var i=r?We:He,o=-1,a=e.length,s=t;for(t===e&&(e=ji(e)),n&&(s=Ie(t,Ge(n)));++o<a;)for(var c=0,u=e[o],l=n?n(u):u;(c=i(s,l,c,r))>-1;)s!==t&&Zt.call(s,c,1),Zt.call(t,c,1);return t}function Xr(t,e){for(var n=t?e.length:0,r=n-1;n--;){var i=e[n];if(n==r||i!==o){var o=i;wo(i)?Zt.call(t,i,1):di(t,i)}}return t}function Zr(t,e){return t+ge(An()*(e-t+1))}function Yr(t,e){var n="";if(!t||e<1||e>h)return n;do{e%2&&(n+=t),(e=ge(e/2))&&(t+=t)}while(e);return n}function Qr(t,e){return Io(To(t,e,ac),t+"")}function Gr(t){return Gn(Hs(t))}function ti(t,e){var n=Hs(t);return Ro(n,ur(e,0,n.length))}function ei(t,e,n,r){if(!rs(t))return t;for(var o=-1,a=(e=wi(e,t)).length,s=a-1,c=t;null!=c&&++o<a;){var u=Bo(e[o]),l=n;if("__proto__"===u||"constructor"===u||"prototype"===u)return t;if(o!=s){var f=c[u];(l=r?r(f,u,c):i)===i&&(l=rs(f)?f:wo(e[o+1])?[]:{})}rr(c,u,l),c=c[u]}return t}var ni=Ln?function(t,e){return Ln.set(t,e),t}:ac,ri=ne?function(t,e){return ne(t,"toString",{configurable:!0,enumerable:!1,value:rc(e),writable:!0})}:ac;function ii(t){return Ro(Hs(t))}function oi(t,e,n){var i=-1,o=t.length;e<0&&(e=-e>o?0:o+e),(n=n>o?o:n)<0&&(n+=o),o=e>n?0:n-e>>>0,e>>>=0;for(var a=r(o);++i<o;)a[i]=t[i+e];return a}function ai(t,e){var n;return hr(t,(function(t,r,i){return!(n=e(t,r,i))})),!!n}function si(t,e,n){var r=0,i=null==t?r:t.length;if("number"==typeof e&&e==e&&i<=2147483647){for(;r<i;){var o=r+i>>>1,a=t[o];null!==a&&!fs(a)&&(n?a<=e:a<e)?r=o+1:i=o}return i}return ci(t,e,ac,n)}function ci(t,e,n,r){var o=0,a=null==t?0:t.length;if(0===a)return 0;for(var s=(e=n(e))!=e,c=null===e,u=fs(e),l=e===i;o<a;){var f=ge((o+a)/2),p=n(t[f]),d=p!==i,h=null===p,v=p==p,g=fs(p);if(s)var m=r||v;else m=l?v&&(r||d):c?v&&d&&(r||!h):u?v&&d&&!h&&(r||!g):!h&&!g&&(r?p<=e:p<e);m?o=f+1:a=f}return wn(a,4294967294)}function ui(t,e){for(var n=-1,r=t.length,i=0,o=[];++n<r;){var a=t[n],s=e?e(a):a;if(!n||!Ha(s,c)){var c=s;o[i++]=0===a?0:a}}return o}function li(t){return"number"==typeof t?t:fs(t)?v:+t}function fi(t){if("string"==typeof t)return t;if(Ka(t))return Ie(t,fi)+"";if(fs(t))return zn?zn.call(t):"";var e=t+"";return"0"==e&&1/t==-1/0?"-0":e}function pi(t,e,n){var r=-1,i=Ne,o=t.length,a=!0,s=[],c=s;if(n)a=!1,i=De;else if(o>=200){var u=e?null:Yi(t);if(u)return dn(u);a=!1,i=en,c=new Zn}else c=e?[]:s;t:for(;++r<o;){var l=t[r],f=e?e(l):l;if(l=n||0!==l?l:0,a&&f==f){for(var p=c.length;p--;)if(c[p]===f)continue t;e&&c.push(f),s.push(l)}else i(c,f,n)||(c!==s&&c.push(f),s.push(l))}return s}function di(t,e){return null==(t=So(t,e=wi(e,t)))||delete t[Bo(Go(e))]}function hi(t,e,n,r){return ei(t,e,n(Or(t,e)),r)}function vi(t,e,n,r){for(var i=t.length,o=r?i:-1;(r?o--:++o<i)&&e(t[o],o,t););return n?oi(t,r?0:o,r?o+1:i):oi(t,r?o+1:0,r?i:o)}function gi(t,e){var n=t;return n instanceof Vn&&(n=n.value()),Me(e,(function(t,e){return e.func.apply(e.thisArg,Pe([t],e.args))}),n)}function mi(t,e,n){var i=t.length;if(i<2)return i?pi(t[0]):[];for(var o=-1,a=r(i);++o<i;)for(var s=t[o],c=-1;++c<i;)c!=o&&(a[o]=dr(a[o]||s,t[c],e,n));return pi(yr(a,1),e,n)}function _i(t,e,n){for(var r=-1,o=t.length,a=e.length,s={};++r<o;){var c=r<a?e[r]:i;n(s,t[r],c)}return s}function yi(t){return Za(t)?t:[]}function bi(t){return"function"==typeof t?t:ac}function wi(t,e){return Ka(t)?t:Co(t,e)?[t]:Fo(ws(t))}var xi=Qr;function Ci(t,e,n){var r=t.length;return n=n===i?r:n,!e&&n>=r?t:oi(t,e,n)}var Ai=ie||function(t){return ve.clearTimeout(t)};function Oi(t,e){if(e)return t.slice();var n=t.length,r=Vt?Vt(n):new t.constructor(n);return t.copy(r),r}function ki(t){var e=new t.constructor(t.byteLength);return new qt(e).set(new qt(t)),e}function $i(t,e){var n=e?ki(t.buffer):t.buffer;return new t.constructor(n,t.byteOffset,t.length)}function Ei(t,e){if(t!==e){var n=t!==i,r=null===t,o=t==t,a=fs(t),s=e!==i,c=null===e,u=e==e,l=fs(e);if(!c&&!l&&!a&&t>e||a&&s&&u&&!c&&!l||r&&s&&u||!n&&u||!o)return 1;if(!r&&!a&&!l&&t<e||l&&n&&o&&!r&&!a||c&&n&&o||!s&&o||!u)return-1}return 0}function Ti(t,e,n,i){for(var o=-1,a=t.length,s=n.length,c=-1,u=e.length,l=bn(a-s,0),f=r(u+l),p=!i;++c<u;)f[c]=e[c];for(;++o<s;)(p||o<a)&&(f[n[o]]=t[o]);for(;l--;)f[c++]=t[o++];return f}function Si(t,e,n,i){for(var o=-1,a=t.length,s=-1,c=n.length,u=-1,l=e.length,f=bn(a-c,0),p=r(f+l),d=!i;++o<f;)p[o]=t[o];for(var h=o;++u<l;)p[h+u]=e[u];for(;++s<c;)(d||o<a)&&(p[h+n[s]]=t[o++]);return p}function ji(t,e){var n=-1,i=t.length;for(e||(e=r(i));++n<i;)e[n]=t[n];return e}function Li(t,e,n,r){var o=!n;n||(n={});for(var a=-1,s=e.length;++a<s;){var c=e[a],u=r?r(n[c],t[c],c,n,t):i;u===i&&(u=t[c]),o?sr(n,c,u):rr(n,c,u)}return n}function Ni(t,e){return function(n,r){var i=Ka(n)?Ee:or,o=e?e():{};return i(n,t,lo(r,2),o)}}function Di(t){return Qr((function(e,n){var r=-1,o=n.length,a=o>1?n[o-1]:i,s=o>2?n[2]:i;for(a=t.length>3&&"function"==typeof a?(o--,a):i,s&&xo(n[0],n[1],s)&&(a=o<3?i:a,o=1),e=$t(e);++r<o;){var c=n[r];c&&t(e,c,r,a)}return e}))}function Ii(t,e){return function(n,r){if(null==n)return n;if(!Xa(n))return t(n,r);for(var i=n.length,o=e?i:-1,a=$t(n);(e?o--:++o<i)&&!1!==r(a[o],o,a););return n}}function Pi(t){return function(e,n,r){for(var i=-1,o=$t(e),a=r(e),s=a.length;s--;){var c=a[t?s:++i];if(!1===n(o[c],c,o))break}return e}}function Mi(t){return function(e){var n=un(e=ws(e))?gn(e):i,r=n?n[0]:e.charAt(0),o=n?Ci(n,1).join(""):e.slice(1);return r[t]()+o}}function Ri(t){return function(e){return Me(tc(Vs(e).replace(te,"")),t,"")}}function Fi(t){return function(){var e=arguments;switch(e.length){case 0:return new t;case 1:return new t(e[0]);case 2:return new t(e[0],e[1]);case 3:return new t(e[0],e[1],e[2]);case 4:return new t(e[0],e[1],e[2],e[3]);case 5:return new t(e[0],e[1],e[2],e[3],e[4]);case 6:return new t(e[0],e[1],e[2],e[3],e[4],e[5]);case 7:return new t(e[0],e[1],e[2],e[3],e[4],e[5],e[6])}var n=Hn(t.prototype),r=t.apply(n,e);return rs(r)?r:n}}function Bi(t){return function(e,n,r){var o=$t(e);if(!Xa(e)){var a=lo(n,3);e=Ds(e),n=function(t){return a(o[t],t,o)}}var s=t(e,n,r);return s>-1?o[a?e[s]:s]:i}}function zi(t){return io((function(e){var n=e.length,r=n,a=qn.prototype.thru;for(t&&e.reverse();r--;){var s=e[r];if("function"!=typeof s)throw new St(o);if(a&&!c&&"wrapper"==co(s))var c=new qn([],!0)}for(r=c?r:n;++r<n;){var u=co(s=e[r]),l="wrapper"==u?so(s):i;c=l&&Ao(l[0])&&424==l[1]&&!l[4].length&&1==l[9]?c[co(l[0])].apply(c,l[3]):1==s.length&&Ao(s)?c[u]():c.thru(s)}return function(){var t=arguments,r=t[0];if(c&&1==t.length&&Ka(r))return c.plant(r).value();for(var i=0,o=n?e[i].apply(this,t):r;++i<n;)o=e[i].call(this,o);return o}}))}function Ui(t,e,n,o,a,s,c,u,l,p){var d=e&f,h=1&e,v=2&e,g=24&e,m=512&e,_=v?i:Fi(t);return function i(){for(var f=arguments.length,y=r(f),b=f;b--;)y[b]=arguments[b];if(g)var w=uo(i),x=on(y,w);if(o&&(y=Ti(y,o,a,g)),s&&(y=Si(y,s,c,g)),f-=x,g&&f<p){var C=pn(y,w);return Xi(t,e,Ui,i.placeholder,n,y,C,u,l,p-f)}var A=h?n:this,O=v?A[t]:t;return f=y.length,u?y=jo(y,u):m&&f>1&&y.reverse(),d&&l<f&&(y.length=l),this&&this!==ve&&this instanceof i&&(O=_||Fi(O)),O.apply(A,y)}}function Hi(t,e){return function(n,r){return function(t,e,n,r){return xr(t,(function(t,i,o){e(r,n(t),i,o)})),r}(n,t,e(r),{})}}function Wi(t,e){return function(n,r){var o;if(n===i&&r===i)return e;if(n!==i&&(o=n),r!==i){if(o===i)return r;"string"==typeof n||"string"==typeof r?(n=fi(n),r=fi(r)):(n=li(n),r=li(r)),o=t(n,r)}return o}}function qi(t){return io((function(e){return e=Ie(e,Ge(lo())),Qr((function(n){var r=this;return t(e,(function(t){return $e(t,r,n)}))}))}))}function Vi(t,e){var n=(e=e===i?" ":fi(e)).length;if(n<2)return n?Yr(e,t):e;var r=Yr(e,he(t/vn(e)));return un(e)?Ci(gn(r),0,t).join(""):r.slice(0,t)}function Ki(t){return function(e,n,o){return o&&"number"!=typeof o&&xo(e,n,o)&&(n=o=i),e=gs(e),n===i?(n=e,e=0):n=gs(n),function(t,e,n,i){for(var o=-1,a=bn(he((e-t)/(n||1)),0),s=r(a);a--;)s[i?a:++o]=t,t+=n;return s}(e,n,o=o===i?e<n?1:-1:gs(o),t)}}function Ji(t){return function(e,n){return"string"==typeof e&&"string"==typeof n||(e=ys(e),n=ys(n)),t(e,n)}}function Xi(t,e,n,r,o,a,s,c,f,p){var d=8&e;e|=d?u:l,4&(e&=~(d?l:u))||(e&=-4);var h=[t,e,o,d?a:i,d?s:i,d?i:a,d?i:s,c,f,p],v=n.apply(i,h);return Ao(t)&&No(v,h),v.placeholder=r,Po(v,t,e)}function Zi(t){var e=kt[t];return function(t,n){if(t=ys(t),(n=null==n?0:wn(ms(n),292))&&be(t)){var r=(ws(t)+"e").split("e");return+((r=(ws(e(r[0]+"e"+(+r[1]+n)))+"e").split("e"))[0]+"e"+(+r[1]-n))}return e(t)}}var Yi=Tn&&1/dn(new Tn([,-0]))[1]==d?function(t){return new Tn(t)}:fc;function Qi(t){return function(e){var n=mo(e);return n==O?ln(e):n==S?hn(e):function(t,e){return Ie(e,(function(e){return[e,t[e]]}))}(e,t(e))}}function Gi(t,e,n,a,d,h,v,g){var m=2&e;if(!m&&"function"!=typeof t)throw new St(o);var _=a?a.length:0;if(_||(e&=-97,a=d=i),v=v===i?v:bn(ms(v),0),g=g===i?g:ms(g),_-=d?d.length:0,e&l){var y=a,b=d;a=d=i}var w=m?i:so(t),x=[t,e,n,a,d,y,b,h,v,g];if(w&&function(t,e){var n=t[1],r=e[1],i=n|r,o=i<131,a=r==f&&8==n||r==f&&n==p&&t[7].length<=e[8]||384==r&&e[7].length<=e[8]&&8==n;if(!o&&!a)return t;1&r&&(t[2]=e[2],i|=1&n?0:4);var c=e[3];if(c){var u=t[3];t[3]=u?Ti(u,c,e[4]):c,t[4]=u?pn(t[3],s):e[4]}(c=e[5])&&(u=t[5],t[5]=u?Si(u,c,e[6]):c,t[6]=u?pn(t[5],s):e[6]);(c=e[7])&&(t[7]=c);r&f&&(t[8]=null==t[8]?e[8]:wn(t[8],e[8]));null==t[9]&&(t[9]=e[9]);t[0]=e[0],t[1]=i}(x,w),t=x[0],e=x[1],n=x[2],a=x[3],d=x[4],!(g=x[9]=x[9]===i?m?0:t.length:bn(x[9]-_,0))&&24&e&&(e&=-25),e&&1!=e)C=8==e||e==c?function(t,e,n){var o=Fi(t);return function a(){for(var s=arguments.length,c=r(s),u=s,l=uo(a);u--;)c[u]=arguments[u];var f=s<3&&c[0]!==l&&c[s-1]!==l?[]:pn(c,l);return(s-=f.length)<n?Xi(t,e,Ui,a.placeholder,i,c,f,i,i,n-s):$e(this&&this!==ve&&this instanceof a?o:t,this,c)}}(t,e,g):e!=u&&33!=e||d.length?Ui.apply(i,x):function(t,e,n,i){var o=1&e,a=Fi(t);return function e(){for(var s=-1,c=arguments.length,u=-1,l=i.length,f=r(l+c),p=this&&this!==ve&&this instanceof e?a:t;++u<l;)f[u]=i[u];for(;c--;)f[u++]=arguments[++s];return $e(p,o?n:this,f)}}(t,e,n,a);else var C=function(t,e,n){var r=1&e,i=Fi(t);return function e(){return(this&&this!==ve&&this instanceof e?i:t).apply(r?n:this,arguments)}}(t,e,n);return Po((w?ni:No)(C,x),t,e)}function to(t,e,n,r){return t===i||Ha(t,Nt[n])&&!Pt.call(r,n)?e:t}function eo(t,e,n,r,o,a){return rs(t)&&rs(e)&&(a.set(e,t),Wr(t,e,i,eo,a),a.delete(e)),t}function no(t){return ss(t)?i:t}function ro(t,e,n,r,o,a){var s=1&n,c=t.length,u=e.length;if(c!=u&&!(s&&u>c))return!1;var l=a.get(t),f=a.get(e);if(l&&f)return l==e&&f==t;var p=-1,d=!0,h=2&n?new Zn:i;for(a.set(t,e),a.set(e,t);++p<c;){var v=t[p],g=e[p];if(r)var m=s?r(g,v,p,e,t,a):r(v,g,p,t,e,a);if(m!==i){if(m)continue;d=!1;break}if(h){if(!Fe(e,(function(t,e){if(!en(h,e)&&(v===t||o(v,t,n,r,a)))return h.push(e)}))){d=!1;break}}else if(v!==g&&!o(v,g,n,r,a)){d=!1;break}}return a.delete(t),a.delete(e),d}function io(t){return Io(To(t,i,Jo),t+"")}function oo(t){return kr(t,Ds,vo)}function ao(t){return kr(t,Is,go)}var so=Ln?function(t){return Ln.get(t)}:fc;function co(t){for(var e=t.name+"",n=Nn[e],r=Pt.call(Nn,e)?n.length:0;r--;){var i=n[r],o=i.func;if(null==o||o==t)return i.name}return e}function uo(t){return(Pt.call(Un,"placeholder")?Un:t).placeholder}function lo(){var t=Un.iteratee||sc;return t=t===sc?Mr:t,arguments.length?t(arguments[0],arguments[1]):t}function fo(t,e){var n,r,i=t.__data__;return("string"==(r=typeof(n=e))||"number"==r||"symbol"==r||"boolean"==r?"__proto__"!==n:null===n)?i["string"==typeof e?"string":"hash"]:i.map}function po(t){for(var e=Ds(t),n=e.length;n--;){var r=e[n],i=t[r];e[n]=[r,i,$o(i)]}return e}function ho(t,e){var n=function(t,e){return null==t?i:t[e]}(t,e);return Pr(n)?n:i}var vo=me?function(t){return null==t?[]:(t=$t(t),Le(me(t),(function(e){return Xt.call(t,e)})))}:_c,go=me?function(t){for(var e=[];t;)Pe(e,vo(t)),t=Kt(t);return e}:_c,mo=$r;function _o(t,e,n){for(var r=-1,i=(e=wi(e,t)).length,o=!1;++r<i;){var a=Bo(e[r]);if(!(o=null!=t&&n(t,a)))break;t=t[a]}return o||++r!=i?o:!!(i=null==t?0:t.length)&&ns(i)&&wo(a,i)&&(Ka(t)||Va(t))}function yo(t){return"function"!=typeof t.constructor||ko(t)?{}:Hn(Kt(t))}function bo(t){return Ka(t)||Va(t)||!!(Yt&&t&&t[Yt])}function wo(t,e){var n=typeof t;return!!(e=null==e?h:e)&&("number"==n||"symbol"!=n&&bt.test(t))&&t>-1&&t%1==0&&t<e}function xo(t,e,n){if(!rs(n))return!1;var r=typeof e;return!!("number"==r?Xa(n)&&wo(e,n.length):"string"==r&&e in n)&&Ha(n[e],t)}function Co(t,e){if(Ka(t))return!1;var n=typeof t;return!("number"!=n&&"symbol"!=n&&"boolean"!=n&&null!=t&&!fs(t))||(nt.test(t)||!et.test(t)||null!=e&&t in $t(e))}function Ao(t){var e=co(t),n=Un[e];if("function"!=typeof n||!(e in Vn.prototype))return!1;if(t===n)return!0;var r=so(n);return!!r&&t===r[0]}(kn&&mo(new kn(new ArrayBuffer(1)))!=I||$n&&mo(new $n)!=O||En&&mo(En.resolve())!=E||Tn&&mo(new Tn)!=S||Sn&&mo(new Sn)!=N)&&(mo=function(t){var e=$r(t),n=e==$?t.constructor:i,r=n?zo(n):"";if(r)switch(r){case Dn:return I;case In:return O;case Pn:return E;case Mn:return S;case Rn:return N}return e});var Oo=Dt?ts:yc;function ko(t){var e=t&&t.constructor;return t===("function"==typeof e&&e.prototype||Nt)}function $o(t){return t==t&&!rs(t)}function Eo(t,e){return function(n){return null!=n&&(n[t]===e&&(e!==i||t in $t(n)))}}function To(t,e,n){return e=bn(e===i?t.length-1:e,0),function(){for(var i=arguments,o=-1,a=bn(i.length-e,0),s=r(a);++o<a;)s[o]=i[e+o];o=-1;for(var c=r(e+1);++o<e;)c[o]=i[o];return c[e]=n(s),$e(t,this,c)}}function So(t,e){return e.length<2?t:Or(t,oi(e,0,-1))}function jo(t,e){for(var n=t.length,r=wn(e.length,n),o=ji(t);r--;){var a=e[r];t[r]=wo(a,n)?o[a]:i}return t}function Lo(t,e){if(("constructor"!==e||"function"!=typeof t[e])&&"__proto__"!=e)return t[e]}var No=Mo(ni),Do=de||function(t,e){return ve.setTimeout(t,e)},Io=Mo(ri);function Po(t,e,n){var r=e+"";return Io(t,function(t,e){var n=e.length;if(!n)return t;var r=n-1;return e[r]=(n>1?"& ":"")+e[r],e=e.join(n>2?", ":" "),t.replace(ct,"{\n/* [wrapped with "+e+"] */\n")}(r,function(t,e){return Te(m,(function(n){var r="_."+n[0];e&n[1]&&!Ne(t,r)&&t.push(r)})),t.sort()}(function(t){var e=t.match(ut);return e?e[1].split(lt):[]}(r),n)))}function Mo(t){var e=0,n=0;return function(){var r=xn(),o=16-(r-n);if(n=r,o>0){if(++e>=800)return arguments[0]}else e=0;return t.apply(i,arguments)}}function Ro(t,e){var n=-1,r=t.length,o=r-1;for(e=e===i?r:e;++n<e;){var a=Zr(n,o),s=t[a];t[a]=t[n],t[n]=s}return t.length=e,t}var Fo=function(t){var e=Ma(t,(function(t){return 500===n.size&&n.clear(),t})),n=e.cache;return e}((function(t){var e=[];return 46===t.charCodeAt(0)&&e.push(""),t.replace(rt,(function(t,n,r,i){e.push(r?i.replace(dt,"$1"):n||t)})),e}));function Bo(t){if("string"==typeof t||fs(t))return t;var e=t+"";return"0"==e&&1/t==-1/0?"-0":e}function zo(t){if(null!=t){try{return It.call(t)}catch(t){}try{return t+""}catch(t){}}return""}function Uo(t){if(t instanceof Vn)return t.clone();var e=new qn(t.__wrapped__,t.__chain__);return e.__actions__=ji(t.__actions__),e.__index__=t.__index__,e.__values__=t.__values__,e}var Ho=Qr((function(t,e){return Za(t)?dr(t,yr(e,1,Za,!0)):[]})),Wo=Qr((function(t,e){var n=Go(e);return Za(n)&&(n=i),Za(t)?dr(t,yr(e,1,Za,!0),lo(n,2)):[]})),qo=Qr((function(t,e){var n=Go(e);return Za(n)&&(n=i),Za(t)?dr(t,yr(e,1,Za,!0),i,n):[]}));function Vo(t,e,n){var r=null==t?0:t.length;if(!r)return-1;var i=null==n?0:ms(n);return i<0&&(i=bn(r+i,0)),Ue(t,lo(e,3),i)}function Ko(t,e,n){var r=null==t?0:t.length;if(!r)return-1;var o=r-1;return n!==i&&(o=ms(n),o=n<0?bn(r+o,0):wn(o,r-1)),Ue(t,lo(e,3),o,!0)}function Jo(t){return(null==t?0:t.length)?yr(t,1):[]}function Xo(t){return t&&t.length?t[0]:i}var Zo=Qr((function(t){var e=Ie(t,yi);return e.length&&e[0]===t[0]?jr(e):[]})),Yo=Qr((function(t){var e=Go(t),n=Ie(t,yi);return e===Go(n)?e=i:n.pop(),n.length&&n[0]===t[0]?jr(n,lo(e,2)):[]})),Qo=Qr((function(t){var e=Go(t),n=Ie(t,yi);return(e="function"==typeof e?e:i)&&n.pop(),n.length&&n[0]===t[0]?jr(n,i,e):[]}));function Go(t){var e=null==t?0:t.length;return e?t[e-1]:i}var ta=Qr(ea);function ea(t,e){return t&&t.length&&e&&e.length?Jr(t,e):t}var na=io((function(t,e){var n=null==t?0:t.length,r=cr(t,e);return Xr(t,Ie(e,(function(t){return wo(t,n)?+t:t})).sort(Ei)),r}));function ra(t){return null==t?t:On.call(t)}var ia=Qr((function(t){return pi(yr(t,1,Za,!0))})),oa=Qr((function(t){var e=Go(t);return Za(e)&&(e=i),pi(yr(t,1,Za,!0),lo(e,2))})),aa=Qr((function(t){var e=Go(t);return e="function"==typeof e?e:i,pi(yr(t,1,Za,!0),i,e)}));function sa(t){if(!t||!t.length)return[];var e=0;return t=Le(t,(function(t){if(Za(t))return e=bn(t.length,e),!0})),Ye(e,(function(e){return Ie(t,Ke(e))}))}function ca(t,e){if(!t||!t.length)return[];var n=sa(t);return null==e?n:Ie(n,(function(t){return $e(e,i,t)}))}var ua=Qr((function(t,e){return Za(t)?dr(t,e):[]})),la=Qr((function(t){return mi(Le(t,Za))})),fa=Qr((function(t){var e=Go(t);return Za(e)&&(e=i),mi(Le(t,Za),lo(e,2))})),pa=Qr((function(t){var e=Go(t);return e="function"==typeof e?e:i,mi(Le(t,Za),i,e)})),da=Qr(sa);var ha=Qr((function(t){var e=t.length,n=e>1?t[e-1]:i;return n="function"==typeof n?(t.pop(),n):i,ca(t,n)}));function va(t){var e=Un(t);return e.__chain__=!0,e}function ga(t,e){return e(t)}var ma=io((function(t){var e=t.length,n=e?t[0]:0,r=this.__wrapped__,o=function(e){return cr(e,t)};return!(e>1||this.__actions__.length)&&r instanceof Vn&&wo(n)?((r=r.slice(n,+n+(e?1:0))).__actions__.push({func:ga,args:[o],thisArg:i}),new qn(r,this.__chain__).thru((function(t){return e&&!t.length&&t.push(i),t}))):this.thru(o)}));var _a=Ni((function(t,e,n){Pt.call(t,n)?++t[n]:sr(t,n,1)}));var ya=Bi(Vo),ba=Bi(Ko);function wa(t,e){return(Ka(t)?Te:hr)(t,lo(e,3))}function xa(t,e){return(Ka(t)?Se:vr)(t,lo(e,3))}var Ca=Ni((function(t,e,n){Pt.call(t,n)?t[n].push(e):sr(t,n,[e])}));var Aa=Qr((function(t,e,n){var i=-1,o="function"==typeof e,a=Xa(t)?r(t.length):[];return hr(t,(function(t){a[++i]=o?$e(e,t,n):Lr(t,e,n)})),a})),Oa=Ni((function(t,e,n){sr(t,n,e)}));function ka(t,e){return(Ka(t)?Ie:zr)(t,lo(e,3))}var $a=Ni((function(t,e,n){t[n?0:1].push(e)}),(function(){return[[],[]]}));var Ea=Qr((function(t,e){if(null==t)return[];var n=e.length;return n>1&&xo(t,e[0],e[1])?e=[]:n>2&&xo(e[0],e[1],e[2])&&(e=[e[0]]),Vr(t,yr(e,1),[])})),Ta=le||function(){return ve.Date.now()};function Sa(t,e,n){return e=n?i:e,e=t&&null==e?t.length:e,Gi(t,f,i,i,i,i,e)}function ja(t,e){var n;if("function"!=typeof e)throw new St(o);return t=ms(t),function(){return--t>0&&(n=e.apply(this,arguments)),t<=1&&(e=i),n}}var La=Qr((function(t,e,n){var r=1;if(n.length){var i=pn(n,uo(La));r|=u}return Gi(t,r,e,n,i)})),Na=Qr((function(t,e,n){var r=3;if(n.length){var i=pn(n,uo(Na));r|=u}return Gi(e,r,t,n,i)}));function Da(t,e,n){var r,a,s,c,u,l,f=0,p=!1,d=!1,h=!0;if("function"!=typeof t)throw new St(o);function v(e){var n=r,o=a;return r=a=i,f=e,c=t.apply(o,n)}function g(t){return f=t,u=Do(_,e),p?v(t):c}function m(t){var n=t-l;return l===i||n>=e||n<0||d&&t-f>=s}function _(){var t=Ta();if(m(t))return y(t);u=Do(_,function(t){var n=e-(t-l);return d?wn(n,s-(t-f)):n}(t))}function y(t){return u=i,h&&r?v(t):(r=a=i,c)}function b(){var t=Ta(),n=m(t);if(r=arguments,a=this,l=t,n){if(u===i)return g(l);if(d)return Ai(u),u=Do(_,e),v(l)}return u===i&&(u=Do(_,e)),c}return e=ys(e)||0,rs(n)&&(p=!!n.leading,s=(d="maxWait"in n)?bn(ys(n.maxWait)||0,e):s,h="trailing"in n?!!n.trailing:h),b.cancel=function(){u!==i&&Ai(u),f=0,r=l=a=u=i},b.flush=function(){return u===i?c:y(Ta())},b}var Ia=Qr((function(t,e){return pr(t,1,e)})),Pa=Qr((function(t,e,n){return pr(t,ys(e)||0,n)}));function Ma(t,e){if("function"!=typeof t||null!=e&&"function"!=typeof e)throw new St(o);var n=function(){var r=arguments,i=e?e.apply(this,r):r[0],o=n.cache;if(o.has(i))return o.get(i);var a=t.apply(this,r);return n.cache=o.set(i,a)||o,a};return n.cache=new(Ma.Cache||Xn),n}function Ra(t){if("function"!=typeof t)throw new St(o);return function(){var e=arguments;switch(e.length){case 0:return!t.call(this);case 1:return!t.call(this,e[0]);case 2:return!t.call(this,e[0],e[1]);case 3:return!t.call(this,e[0],e[1],e[2])}return!t.apply(this,e)}}Ma.Cache=Xn;var Fa=xi((function(t,e){var n=(e=1==e.length&&Ka(e[0])?Ie(e[0],Ge(lo())):Ie(yr(e,1),Ge(lo()))).length;return Qr((function(r){for(var i=-1,o=wn(r.length,n);++i<o;)r[i]=e[i].call(this,r[i]);return $e(t,this,r)}))})),Ba=Qr((function(t,e){var n=pn(e,uo(Ba));return Gi(t,u,i,e,n)})),za=Qr((function(t,e){var n=pn(e,uo(za));return Gi(t,l,i,e,n)})),Ua=io((function(t,e){return Gi(t,p,i,i,i,e)}));function Ha(t,e){return t===e||t!=t&&e!=e}var Wa=Ji(Er),qa=Ji((function(t,e){return t>=e})),Va=Nr(function(){return arguments}())?Nr:function(t){return is(t)&&Pt.call(t,"callee")&&!Xt.call(t,"callee")},Ka=r.isArray,Ja=we?Ge(we):function(t){return is(t)&&$r(t)==D};function Xa(t){return null!=t&&ns(t.length)&&!ts(t)}function Za(t){return is(t)&&Xa(t)}var Ya=ye||yc,Qa=xe?Ge(xe):function(t){return is(t)&&$r(t)==w};function Ga(t){if(!is(t))return!1;var e=$r(t);return e==x||"[object DOMException]"==e||"string"==typeof t.message&&"string"==typeof t.name&&!ss(t)}function ts(t){if(!rs(t))return!1;var e=$r(t);return e==C||e==A||"[object AsyncFunction]"==e||"[object Proxy]"==e}function es(t){return"number"==typeof t&&t==ms(t)}function ns(t){return"number"==typeof t&&t>-1&&t%1==0&&t<=h}function rs(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}function is(t){return null!=t&&"object"==typeof t}var os=Ce?Ge(Ce):function(t){return is(t)&&mo(t)==O};function as(t){return"number"==typeof t||is(t)&&$r(t)==k}function ss(t){if(!is(t)||$r(t)!=$)return!1;var e=Kt(t);if(null===e)return!0;var n=Pt.call(e,"constructor")&&e.constructor;return"function"==typeof n&&n instanceof n&&It.call(n)==Bt}var cs=Ae?Ge(Ae):function(t){return is(t)&&$r(t)==T};var us=Oe?Ge(Oe):function(t){return is(t)&&mo(t)==S};function ls(t){return"string"==typeof t||!Ka(t)&&is(t)&&$r(t)==j}function fs(t){return"symbol"==typeof t||is(t)&&$r(t)==L}var ps=ke?Ge(ke):function(t){return is(t)&&ns(t.length)&&!!ce[$r(t)]};var ds=Ji(Br),hs=Ji((function(t,e){return t<=e}));function vs(t){if(!t)return[];if(Xa(t))return ls(t)?gn(t):ji(t);if(Qt&&t[Qt])return function(t){for(var e,n=[];!(e=t.next()).done;)n.push(e.value);return n}(t[Qt]());var e=mo(t);return(e==O?ln:e==S?dn:Hs)(t)}function gs(t){return t?(t=ys(t))===d||t===-1/0?17976931348623157e292*(t<0?-1:1):t==t?t:0:0===t?t:0}function ms(t){var e=gs(t),n=e%1;return e==e?n?e-n:e:0}function _s(t){return t?ur(ms(t),0,g):0}function ys(t){if("number"==typeof t)return t;if(fs(t))return v;if(rs(t)){var e="function"==typeof t.valueOf?t.valueOf():t;t=rs(e)?e+"":e}if("string"!=typeof t)return 0===t?t:+t;t=Qe(t);var n=mt.test(t);return n||yt.test(t)?pe(t.slice(2),n?2:8):gt.test(t)?v:+t}function bs(t){return Li(t,Is(t))}function ws(t){return null==t?"":fi(t)}var xs=Di((function(t,e){if(ko(e)||Xa(e))Li(e,Ds(e),t);else for(var n in e)Pt.call(e,n)&&rr(t,n,e[n])})),Cs=Di((function(t,e){Li(e,Is(e),t)})),As=Di((function(t,e,n,r){Li(e,Is(e),t,r)})),Os=Di((function(t,e,n,r){Li(e,Ds(e),t,r)})),ks=io(cr);var $s=Qr((function(t,e){t=$t(t);var n=-1,r=e.length,o=r>2?e[2]:i;for(o&&xo(e[0],e[1],o)&&(r=1);++n<r;)for(var a=e[n],s=Is(a),c=-1,u=s.length;++c<u;){var l=s[c],f=t[l];(f===i||Ha(f,Nt[l])&&!Pt.call(t,l))&&(t[l]=a[l])}return t})),Es=Qr((function(t){return t.push(i,eo),$e(Ms,i,t)}));function Ts(t,e,n){var r=null==t?i:Or(t,e);return r===i?n:r}function Ss(t,e){return null!=t&&_o(t,e,Sr)}var js=Hi((function(t,e,n){null!=e&&"function"!=typeof e.toString&&(e=Ft.call(e)),t[e]=n}),rc(ac)),Ls=Hi((function(t,e,n){null!=e&&"function"!=typeof e.toString&&(e=Ft.call(e)),Pt.call(t,e)?t[e].push(n):t[e]=[n]}),lo),Ns=Qr(Lr);function Ds(t){return Xa(t)?Qn(t):Rr(t)}function Is(t){return Xa(t)?Qn(t,!0):Fr(t)}var Ps=Di((function(t,e,n){Wr(t,e,n)})),Ms=Di((function(t,e,n,r){Wr(t,e,n,r)})),Rs=io((function(t,e){var n={};if(null==t)return n;var r=!1;e=Ie(e,(function(e){return e=wi(e,t),r||(r=e.length>1),e})),Li(t,ao(t),n),r&&(n=lr(n,7,no));for(var i=e.length;i--;)di(n,e[i]);return n}));var Fs=io((function(t,e){return null==t?{}:function(t,e){return Kr(t,e,(function(e,n){return Ss(t,n)}))}(t,e)}));function Bs(t,e){if(null==t)return{};var n=Ie(ao(t),(function(t){return[t]}));return e=lo(e),Kr(t,n,(function(t,n){return e(t,n[0])}))}var zs=Qi(Ds),Us=Qi(Is);function Hs(t){return null==t?[]:tn(t,Ds(t))}var Ws=Ri((function(t,e,n){return e=e.toLowerCase(),t+(n?qs(e):e)}));function qs(t){return Gs(ws(t).toLowerCase())}function Vs(t){return(t=ws(t))&&t.replace(wt,an).replace(ee,"")}var Ks=Ri((function(t,e,n){return t+(n?"-":"")+e.toLowerCase()})),Js=Ri((function(t,e,n){return t+(n?" ":"")+e.toLowerCase()})),Xs=Mi("toLowerCase");var Zs=Ri((function(t,e,n){return t+(n?"_":"")+e.toLowerCase()}));var Ys=Ri((function(t,e,n){return t+(n?" ":"")+Gs(e)}));var Qs=Ri((function(t,e,n){return t+(n?" ":"")+e.toUpperCase()})),Gs=Mi("toUpperCase");function tc(t,e,n){return t=ws(t),(e=n?i:e)===i?function(t){return oe.test(t)}(t)?function(t){return t.match(re)||[]}(t):function(t){return t.match(ft)||[]}(t):t.match(e)||[]}var ec=Qr((function(t,e){try{return $e(t,i,e)}catch(t){return Ga(t)?t:new At(t)}})),nc=io((function(t,e){return Te(e,(function(e){e=Bo(e),sr(t,e,La(t[e],t))})),t}));function rc(t){return function(){return t}}var ic=zi(),oc=zi(!0);function ac(t){return t}function sc(t){return Mr("function"==typeof t?t:lr(t,1))}var cc=Qr((function(t,e){return function(n){return Lr(n,t,e)}})),uc=Qr((function(t,e){return function(n){return Lr(t,n,e)}}));function lc(t,e,n){var r=Ds(e),i=Ar(e,r);null!=n||rs(e)&&(i.length||!r.length)||(n=e,e=t,t=this,i=Ar(e,Ds(e)));var o=!(rs(n)&&"chain"in n&&!n.chain),a=ts(t);return Te(i,(function(n){var r=e[n];t[n]=r,a&&(t.prototype[n]=function(){var e=this.__chain__;if(o||e){var n=t(this.__wrapped__),i=n.__actions__=ji(this.__actions__);return i.push({func:r,args:arguments,thisArg:t}),n.__chain__=e,n}return r.apply(t,Pe([this.value()],arguments))})})),t}function fc(){}var pc=qi(Ie),dc=qi(je),hc=qi(Fe);function vc(t){return Co(t)?Ke(Bo(t)):function(t){return function(e){return Or(e,t)}}(t)}var gc=Ki(),mc=Ki(!0);function _c(){return[]}function yc(){return!1}var bc=Wi((function(t,e){return t+e}),0),wc=Zi("ceil"),xc=Wi((function(t,e){return t/e}),1),Cc=Zi("floor");var Ac,Oc=Wi((function(t,e){return t*e}),1),kc=Zi("round"),$c=Wi((function(t,e){return t-e}),0);return Un.after=function(t,e){if("function"!=typeof e)throw new St(o);return t=ms(t),function(){if(--t<1)return e.apply(this,arguments)}},Un.ary=Sa,Un.assign=xs,Un.assignIn=Cs,Un.assignInWith=As,Un.assignWith=Os,Un.at=ks,Un.before=ja,Un.bind=La,Un.bindAll=nc,Un.bindKey=Na,Un.castArray=function(){if(!arguments.length)return[];var t=arguments[0];return Ka(t)?t:[t]},Un.chain=va,Un.chunk=function(t,e,n){e=(n?xo(t,e,n):e===i)?1:bn(ms(e),0);var o=null==t?0:t.length;if(!o||e<1)return[];for(var a=0,s=0,c=r(he(o/e));a<o;)c[s++]=oi(t,a,a+=e);return c},Un.compact=function(t){for(var e=-1,n=null==t?0:t.length,r=0,i=[];++e<n;){var o=t[e];o&&(i[r++]=o)}return i},Un.concat=function(){var t=arguments.length;if(!t)return[];for(var e=r(t-1),n=arguments[0],i=t;i--;)e[i-1]=arguments[i];return Pe(Ka(n)?ji(n):[n],yr(e,1))},Un.cond=function(t){var e=null==t?0:t.length,n=lo();return t=e?Ie(t,(function(t){if("function"!=typeof t[1])throw new St(o);return[n(t[0]),t[1]]})):[],Qr((function(n){for(var r=-1;++r<e;){var i=t[r];if($e(i[0],this,n))return $e(i[1],this,n)}}))},Un.conforms=function(t){return function(t){var e=Ds(t);return function(n){return fr(n,t,e)}}(lr(t,1))},Un.constant=rc,Un.countBy=_a,Un.create=function(t,e){var n=Hn(t);return null==e?n:ar(n,e)},Un.curry=function t(e,n,r){var o=Gi(e,8,i,i,i,i,i,n=r?i:n);return o.placeholder=t.placeholder,o},Un.curryRight=function t(e,n,r){var o=Gi(e,c,i,i,i,i,i,n=r?i:n);return o.placeholder=t.placeholder,o},Un.debounce=Da,Un.defaults=$s,Un.defaultsDeep=Es,Un.defer=Ia,Un.delay=Pa,Un.difference=Ho,Un.differenceBy=Wo,Un.differenceWith=qo,Un.drop=function(t,e,n){var r=null==t?0:t.length;return r?oi(t,(e=n||e===i?1:ms(e))<0?0:e,r):[]},Un.dropRight=function(t,e,n){var r=null==t?0:t.length;return r?oi(t,0,(e=r-(e=n||e===i?1:ms(e)))<0?0:e):[]},Un.dropRightWhile=function(t,e){return t&&t.length?vi(t,lo(e,3),!0,!0):[]},Un.dropWhile=function(t,e){return t&&t.length?vi(t,lo(e,3),!0):[]},Un.fill=function(t,e,n,r){var o=null==t?0:t.length;return o?(n&&"number"!=typeof n&&xo(t,e,n)&&(n=0,r=o),function(t,e,n,r){var o=t.length;for((n=ms(n))<0&&(n=-n>o?0:o+n),(r=r===i||r>o?o:ms(r))<0&&(r+=o),r=n>r?0:_s(r);n<r;)t[n++]=e;return t}(t,e,n,r)):[]},Un.filter=function(t,e){return(Ka(t)?Le:_r)(t,lo(e,3))},Un.flatMap=function(t,e){return yr(ka(t,e),1)},Un.flatMapDeep=function(t,e){return yr(ka(t,e),d)},Un.flatMapDepth=function(t,e,n){return n=n===i?1:ms(n),yr(ka(t,e),n)},Un.flatten=Jo,Un.flattenDeep=function(t){return(null==t?0:t.length)?yr(t,d):[]},Un.flattenDepth=function(t,e){return(null==t?0:t.length)?yr(t,e=e===i?1:ms(e)):[]},Un.flip=function(t){return Gi(t,512)},Un.flow=ic,Un.flowRight=oc,Un.fromPairs=function(t){for(var e=-1,n=null==t?0:t.length,r={};++e<n;){var i=t[e];r[i[0]]=i[1]}return r},Un.functions=function(t){return null==t?[]:Ar(t,Ds(t))},Un.functionsIn=function(t){return null==t?[]:Ar(t,Is(t))},Un.groupBy=Ca,Un.initial=function(t){return(null==t?0:t.length)?oi(t,0,-1):[]},Un.intersection=Zo,Un.intersectionBy=Yo,Un.intersectionWith=Qo,Un.invert=js,Un.invertBy=Ls,Un.invokeMap=Aa,Un.iteratee=sc,Un.keyBy=Oa,Un.keys=Ds,Un.keysIn=Is,Un.map=ka,Un.mapKeys=function(t,e){var n={};return e=lo(e,3),xr(t,(function(t,r,i){sr(n,e(t,r,i),t)})),n},Un.mapValues=function(t,e){var n={};return e=lo(e,3),xr(t,(function(t,r,i){sr(n,r,e(t,r,i))})),n},Un.matches=function(t){return Ur(lr(t,1))},Un.matchesProperty=function(t,e){return Hr(t,lr(e,1))},Un.memoize=Ma,Un.merge=Ps,Un.mergeWith=Ms,Un.method=cc,Un.methodOf=uc,Un.mixin=lc,Un.negate=Ra,Un.nthArg=function(t){return t=ms(t),Qr((function(e){return qr(e,t)}))},Un.omit=Rs,Un.omitBy=function(t,e){return Bs(t,Ra(lo(e)))},Un.once=function(t){return ja(2,t)},Un.orderBy=function(t,e,n,r){return null==t?[]:(Ka(e)||(e=null==e?[]:[e]),Ka(n=r?i:n)||(n=null==n?[]:[n]),Vr(t,e,n))},Un.over=pc,Un.overArgs=Fa,Un.overEvery=dc,Un.overSome=hc,Un.partial=Ba,Un.partialRight=za,Un.partition=$a,Un.pick=Fs,Un.pickBy=Bs,Un.property=vc,Un.propertyOf=function(t){return function(e){return null==t?i:Or(t,e)}},Un.pull=ta,Un.pullAll=ea,Un.pullAllBy=function(t,e,n){return t&&t.length&&e&&e.length?Jr(t,e,lo(n,2)):t},Un.pullAllWith=function(t,e,n){return t&&t.length&&e&&e.length?Jr(t,e,i,n):t},Un.pullAt=na,Un.range=gc,Un.rangeRight=mc,Un.rearg=Ua,Un.reject=function(t,e){return(Ka(t)?Le:_r)(t,Ra(lo(e,3)))},Un.remove=function(t,e){var n=[];if(!t||!t.length)return n;var r=-1,i=[],o=t.length;for(e=lo(e,3);++r<o;){var a=t[r];e(a,r,t)&&(n.push(a),i.push(r))}return Xr(t,i),n},Un.rest=function(t,e){if("function"!=typeof t)throw new St(o);return Qr(t,e=e===i?e:ms(e))},Un.reverse=ra,Un.sampleSize=function(t,e,n){return e=(n?xo(t,e,n):e===i)?1:ms(e),(Ka(t)?tr:ti)(t,e)},Un.set=function(t,e,n){return null==t?t:ei(t,e,n)},Un.setWith=function(t,e,n,r){return r="function"==typeof r?r:i,null==t?t:ei(t,e,n,r)},Un.shuffle=function(t){return(Ka(t)?er:ii)(t)},Un.slice=function(t,e,n){var r=null==t?0:t.length;return r?(n&&"number"!=typeof n&&xo(t,e,n)?(e=0,n=r):(e=null==e?0:ms(e),n=n===i?r:ms(n)),oi(t,e,n)):[]},Un.sortBy=Ea,Un.sortedUniq=function(t){return t&&t.length?ui(t):[]},Un.sortedUniqBy=function(t,e){return t&&t.length?ui(t,lo(e,2)):[]},Un.split=function(t,e,n){return n&&"number"!=typeof n&&xo(t,e,n)&&(e=n=i),(n=n===i?g:n>>>0)?(t=ws(t))&&("string"==typeof e||null!=e&&!cs(e))&&!(e=fi(e))&&un(t)?Ci(gn(t),0,n):t.split(e,n):[]},Un.spread=function(t,e){if("function"!=typeof t)throw new St(o);return e=null==e?0:bn(ms(e),0),Qr((function(n){var r=n[e],i=Ci(n,0,e);return r&&Pe(i,r),$e(t,this,i)}))},Un.tail=function(t){var e=null==t?0:t.length;return e?oi(t,1,e):[]},Un.take=function(t,e,n){return t&&t.length?oi(t,0,(e=n||e===i?1:ms(e))<0?0:e):[]},Un.takeRight=function(t,e,n){var r=null==t?0:t.length;return r?oi(t,(e=r-(e=n||e===i?1:ms(e)))<0?0:e,r):[]},Un.takeRightWhile=function(t,e){return t&&t.length?vi(t,lo(e,3),!1,!0):[]},Un.takeWhile=function(t,e){return t&&t.length?vi(t,lo(e,3)):[]},Un.tap=function(t,e){return e(t),t},Un.throttle=function(t,e,n){var r=!0,i=!0;if("function"!=typeof t)throw new St(o);return rs(n)&&(r="leading"in n?!!n.leading:r,i="trailing"in n?!!n.trailing:i),Da(t,e,{leading:r,maxWait:e,trailing:i})},Un.thru=ga,Un.toArray=vs,Un.toPairs=zs,Un.toPairsIn=Us,Un.toPath=function(t){return Ka(t)?Ie(t,Bo):fs(t)?[t]:ji(Fo(ws(t)))},Un.toPlainObject=bs,Un.transform=function(t,e,n){var r=Ka(t),i=r||Ya(t)||ps(t);if(e=lo(e,4),null==n){var o=t&&t.constructor;n=i?r?new o:[]:rs(t)&&ts(o)?Hn(Kt(t)):{}}return(i?Te:xr)(t,(function(t,r,i){return e(n,t,r,i)})),n},Un.unary=function(t){return Sa(t,1)},Un.union=ia,Un.unionBy=oa,Un.unionWith=aa,Un.uniq=function(t){return t&&t.length?pi(t):[]},Un.uniqBy=function(t,e){return t&&t.length?pi(t,lo(e,2)):[]},Un.uniqWith=function(t,e){return e="function"==typeof e?e:i,t&&t.length?pi(t,i,e):[]},Un.unset=function(t,e){return null==t||di(t,e)},Un.unzip=sa,Un.unzipWith=ca,Un.update=function(t,e,n){return null==t?t:hi(t,e,bi(n))},Un.updateWith=function(t,e,n,r){return r="function"==typeof r?r:i,null==t?t:hi(t,e,bi(n),r)},Un.values=Hs,Un.valuesIn=function(t){return null==t?[]:tn(t,Is(t))},Un.without=ua,Un.words=tc,Un.wrap=function(t,e){return Ba(bi(e),t)},Un.xor=la,Un.xorBy=fa,Un.xorWith=pa,Un.zip=da,Un.zipObject=function(t,e){return _i(t||[],e||[],rr)},Un.zipObjectDeep=function(t,e){return _i(t||[],e||[],ei)},Un.zipWith=ha,Un.entries=zs,Un.entriesIn=Us,Un.extend=Cs,Un.extendWith=As,lc(Un,Un),Un.add=bc,Un.attempt=ec,Un.camelCase=Ws,Un.capitalize=qs,Un.ceil=wc,Un.clamp=function(t,e,n){return n===i&&(n=e,e=i),n!==i&&(n=(n=ys(n))==n?n:0),e!==i&&(e=(e=ys(e))==e?e:0),ur(ys(t),e,n)},Un.clone=function(t){return lr(t,4)},Un.cloneDeep=function(t){return lr(t,5)},Un.cloneDeepWith=function(t,e){return lr(t,5,e="function"==typeof e?e:i)},Un.cloneWith=function(t,e){return lr(t,4,e="function"==typeof e?e:i)},Un.conformsTo=function(t,e){return null==e||fr(t,e,Ds(e))},Un.deburr=Vs,Un.defaultTo=function(t,e){return null==t||t!=t?e:t},Un.divide=xc,Un.endsWith=function(t,e,n){t=ws(t),e=fi(e);var r=t.length,o=n=n===i?r:ur(ms(n),0,r);return(n-=e.length)>=0&&t.slice(n,o)==e},Un.eq=Ha,Un.escape=function(t){return(t=ws(t))&&Y.test(t)?t.replace(X,sn):t},Un.escapeRegExp=function(t){return(t=ws(t))&&ot.test(t)?t.replace(it,"\\$&"):t},Un.every=function(t,e,n){var r=Ka(t)?je:gr;return n&&xo(t,e,n)&&(e=i),r(t,lo(e,3))},Un.find=ya,Un.findIndex=Vo,Un.findKey=function(t,e){return ze(t,lo(e,3),xr)},Un.findLast=ba,Un.findLastIndex=Ko,Un.findLastKey=function(t,e){return ze(t,lo(e,3),Cr)},Un.floor=Cc,Un.forEach=wa,Un.forEachRight=xa,Un.forIn=function(t,e){return null==t?t:br(t,lo(e,3),Is)},Un.forInRight=function(t,e){return null==t?t:wr(t,lo(e,3),Is)},Un.forOwn=function(t,e){return t&&xr(t,lo(e,3))},Un.forOwnRight=function(t,e){return t&&Cr(t,lo(e,3))},Un.get=Ts,Un.gt=Wa,Un.gte=qa,Un.has=function(t,e){return null!=t&&_o(t,e,Tr)},Un.hasIn=Ss,Un.head=Xo,Un.identity=ac,Un.includes=function(t,e,n,r){t=Xa(t)?t:Hs(t),n=n&&!r?ms(n):0;var i=t.length;return n<0&&(n=bn(i+n,0)),ls(t)?n<=i&&t.indexOf(e,n)>-1:!!i&&He(t,e,n)>-1},Un.indexOf=function(t,e,n){var r=null==t?0:t.length;if(!r)return-1;var i=null==n?0:ms(n);return i<0&&(i=bn(r+i,0)),He(t,e,i)},Un.inRange=function(t,e,n){return e=gs(e),n===i?(n=e,e=0):n=gs(n),function(t,e,n){return t>=wn(e,n)&&t<bn(e,n)}(t=ys(t),e,n)},Un.invoke=Ns,Un.isArguments=Va,Un.isArray=Ka,Un.isArrayBuffer=Ja,Un.isArrayLike=Xa,Un.isArrayLikeObject=Za,Un.isBoolean=function(t){return!0===t||!1===t||is(t)&&$r(t)==b},Un.isBuffer=Ya,Un.isDate=Qa,Un.isElement=function(t){return is(t)&&1===t.nodeType&&!ss(t)},Un.isEmpty=function(t){if(null==t)return!0;if(Xa(t)&&(Ka(t)||"string"==typeof t||"function"==typeof t.splice||Ya(t)||ps(t)||Va(t)))return!t.length;var e=mo(t);if(e==O||e==S)return!t.size;if(ko(t))return!Rr(t).length;for(var n in t)if(Pt.call(t,n))return!1;return!0},Un.isEqual=function(t,e){return Dr(t,e)},Un.isEqualWith=function(t,e,n){var r=(n="function"==typeof n?n:i)?n(t,e):i;return r===i?Dr(t,e,i,n):!!r},Un.isError=Ga,Un.isFinite=function(t){return"number"==typeof t&&be(t)},Un.isFunction=ts,Un.isInteger=es,Un.isLength=ns,Un.isMap=os,Un.isMatch=function(t,e){return t===e||Ir(t,e,po(e))},Un.isMatchWith=function(t,e,n){return n="function"==typeof n?n:i,Ir(t,e,po(e),n)},Un.isNaN=function(t){return as(t)&&t!=+t},Un.isNative=function(t){if(Oo(t))throw new At("Unsupported core-js use. Try https://npms.io/search?q=ponyfill.");return Pr(t)},Un.isNil=function(t){return null==t},Un.isNull=function(t){return null===t},Un.isNumber=as,Un.isObject=rs,Un.isObjectLike=is,Un.isPlainObject=ss,Un.isRegExp=cs,Un.isSafeInteger=function(t){return es(t)&&t>=-9007199254740991&&t<=h},Un.isSet=us,Un.isString=ls,Un.isSymbol=fs,Un.isTypedArray=ps,Un.isUndefined=function(t){return t===i},Un.isWeakMap=function(t){return is(t)&&mo(t)==N},Un.isWeakSet=function(t){return is(t)&&"[object WeakSet]"==$r(t)},Un.join=function(t,e){return null==t?"":Be.call(t,e)},Un.kebabCase=Ks,Un.last=Go,Un.lastIndexOf=function(t,e,n){var r=null==t?0:t.length;if(!r)return-1;var o=r;return n!==i&&(o=(o=ms(n))<0?bn(r+o,0):wn(o,r-1)),e==e?function(t,e,n){for(var r=n+1;r--;)if(t[r]===e)return r;return r}(t,e,o):Ue(t,qe,o,!0)},Un.lowerCase=Js,Un.lowerFirst=Xs,Un.lt=ds,Un.lte=hs,Un.max=function(t){return t&&t.length?mr(t,ac,Er):i},Un.maxBy=function(t,e){return t&&t.length?mr(t,lo(e,2),Er):i},Un.mean=function(t){return Ve(t,ac)},Un.meanBy=function(t,e){return Ve(t,lo(e,2))},Un.min=function(t){return t&&t.length?mr(t,ac,Br):i},Un.minBy=function(t,e){return t&&t.length?mr(t,lo(e,2),Br):i},Un.stubArray=_c,Un.stubFalse=yc,Un.stubObject=function(){return{}},Un.stubString=function(){return""},Un.stubTrue=function(){return!0},Un.multiply=Oc,Un.nth=function(t,e){return t&&t.length?qr(t,ms(e)):i},Un.noConflict=function(){return ve._===this&&(ve._=zt),this},Un.noop=fc,Un.now=Ta,Un.pad=function(t,e,n){t=ws(t);var r=(e=ms(e))?vn(t):0;if(!e||r>=e)return t;var i=(e-r)/2;return Vi(ge(i),n)+t+Vi(he(i),n)},Un.padEnd=function(t,e,n){t=ws(t);var r=(e=ms(e))?vn(t):0;return e&&r<e?t+Vi(e-r,n):t},Un.padStart=function(t,e,n){t=ws(t);var r=(e=ms(e))?vn(t):0;return e&&r<e?Vi(e-r,n)+t:t},Un.parseInt=function(t,e,n){return n||null==e?e=0:e&&(e=+e),Cn(ws(t).replace(at,""),e||0)},Un.random=function(t,e,n){if(n&&"boolean"!=typeof n&&xo(t,e,n)&&(e=n=i),n===i&&("boolean"==typeof e?(n=e,e=i):"boolean"==typeof t&&(n=t,t=i)),t===i&&e===i?(t=0,e=1):(t=gs(t),e===i?(e=t,t=0):e=gs(e)),t>e){var r=t;t=e,e=r}if(n||t%1||e%1){var o=An();return wn(t+o*(e-t+fe("1e-"+((o+"").length-1))),e)}return Zr(t,e)},Un.reduce=function(t,e,n){var r=Ka(t)?Me:Xe,i=arguments.length<3;return r(t,lo(e,4),n,i,hr)},Un.reduceRight=function(t,e,n){var r=Ka(t)?Re:Xe,i=arguments.length<3;return r(t,lo(e,4),n,i,vr)},Un.repeat=function(t,e,n){return e=(n?xo(t,e,n):e===i)?1:ms(e),Yr(ws(t),e)},Un.replace=function(){var t=arguments,e=ws(t[0]);return t.length<3?e:e.replace(t[1],t[2])},Un.result=function(t,e,n){var r=-1,o=(e=wi(e,t)).length;for(o||(o=1,t=i);++r<o;){var a=null==t?i:t[Bo(e[r])];a===i&&(r=o,a=n),t=ts(a)?a.call(t):a}return t},Un.round=kc,Un.runInContext=t,Un.sample=function(t){return(Ka(t)?Gn:Gr)(t)},Un.size=function(t){if(null==t)return 0;if(Xa(t))return ls(t)?vn(t):t.length;var e=mo(t);return e==O||e==S?t.size:Rr(t).length},Un.snakeCase=Zs,Un.some=function(t,e,n){var r=Ka(t)?Fe:ai;return n&&xo(t,e,n)&&(e=i),r(t,lo(e,3))},Un.sortedIndex=function(t,e){return si(t,e)},Un.sortedIndexBy=function(t,e,n){return ci(t,e,lo(n,2))},Un.sortedIndexOf=function(t,e){var n=null==t?0:t.length;if(n){var r=si(t,e);if(r<n&&Ha(t[r],e))return r}return-1},Un.sortedLastIndex=function(t,e){return si(t,e,!0)},Un.sortedLastIndexBy=function(t,e,n){return ci(t,e,lo(n,2),!0)},Un.sortedLastIndexOf=function(t,e){if(null==t?0:t.length){var n=si(t,e,!0)-1;if(Ha(t[n],e))return n}return-1},Un.startCase=Ys,Un.startsWith=function(t,e,n){return t=ws(t),n=null==n?0:ur(ms(n),0,t.length),e=fi(e),t.slice(n,n+e.length)==e},Un.subtract=$c,Un.sum=function(t){return t&&t.length?Ze(t,ac):0},Un.sumBy=function(t,e){return t&&t.length?Ze(t,lo(e,2)):0},Un.template=function(t,e,n){var r=Un.templateSettings;n&&xo(t,e,n)&&(e=i),t=ws(t),e=As({},e,r,to);var o,a,s=As({},e.imports,r.imports,to),c=Ds(s),u=tn(s,c),l=0,f=e.interpolate||xt,p="__p += '",d=Et((e.escape||xt).source+"|"+f.source+"|"+(f===tt?ht:xt).source+"|"+(e.evaluate||xt).source+"|$","g"),h="//# sourceURL="+(Pt.call(e,"sourceURL")?(e.sourceURL+"").replace(/\s/g," "):"lodash.templateSources["+ ++se+"]")+"\n";t.replace(d,(function(e,n,r,i,s,c){return r||(r=i),p+=t.slice(l,c).replace(Ct,cn),n&&(o=!0,p+="' +\n__e("+n+") +\n'"),s&&(a=!0,p+="';\n"+s+";\n__p += '"),r&&(p+="' +\n((__t = ("+r+")) == null ? '' : __t) +\n'"),l=c+e.length,e})),p+="';\n";var v=Pt.call(e,"variable")&&e.variable;if(v){if(pt.test(v))throw new At("Invalid `variable` option passed into `_.template`")}else p="with (obj) {\n"+p+"\n}\n";p=(a?p.replace(q,""):p).replace(V,"$1").replace(K,"$1;"),p="function("+(v||"obj")+") {\n"+(v?"":"obj || (obj = {});\n")+"var __t, __p = ''"+(o?", __e = _.escape":"")+(a?", __j = Array.prototype.join;\nfunction print() { __p += __j.call(arguments, '') }\n":";\n")+p+"return __p\n}";var g=ec((function(){return Ot(c,h+"return "+p).apply(i,u)}));if(g.source=p,Ga(g))throw g;return g},Un.times=function(t,e){if((t=ms(t))<1||t>h)return[];var n=g,r=wn(t,g);e=lo(e),t-=g;for(var i=Ye(r,e);++n<t;)e(n);return i},Un.toFinite=gs,Un.toInteger=ms,Un.toLength=_s,Un.toLower=function(t){return ws(t).toLowerCase()},Un.toNumber=ys,Un.toSafeInteger=function(t){return t?ur(ms(t),-9007199254740991,h):0===t?t:0},Un.toString=ws,Un.toUpper=function(t){return ws(t).toUpperCase()},Un.trim=function(t,e,n){if((t=ws(t))&&(n||e===i))return Qe(t);if(!t||!(e=fi(e)))return t;var r=gn(t),o=gn(e);return Ci(r,nn(r,o),rn(r,o)+1).join("")},Un.trimEnd=function(t,e,n){if((t=ws(t))&&(n||e===i))return t.slice(0,mn(t)+1);if(!t||!(e=fi(e)))return t;var r=gn(t);return Ci(r,0,rn(r,gn(e))+1).join("")},Un.trimStart=function(t,e,n){if((t=ws(t))&&(n||e===i))return t.replace(at,"");if(!t||!(e=fi(e)))return t;var r=gn(t);return Ci(r,nn(r,gn(e))).join("")},Un.truncate=function(t,e){var n=30,r="...";if(rs(e)){var o="separator"in e?e.separator:o;n="length"in e?ms(e.length):n,r="omission"in e?fi(e.omission):r}var a=(t=ws(t)).length;if(un(t)){var s=gn(t);a=s.length}if(n>=a)return t;var c=n-vn(r);if(c<1)return r;var u=s?Ci(s,0,c).join(""):t.slice(0,c);if(o===i)return u+r;if(s&&(c+=u.length-c),cs(o)){if(t.slice(c).search(o)){var l,f=u;for(o.global||(o=Et(o.source,ws(vt.exec(o))+"g")),o.lastIndex=0;l=o.exec(f);)var p=l.index;u=u.slice(0,p===i?c:p)}}else if(t.indexOf(fi(o),c)!=c){var d=u.lastIndexOf(o);d>-1&&(u=u.slice(0,d))}return u+r},Un.unescape=function(t){return(t=ws(t))&&Z.test(t)?t.replace(J,_n):t},Un.uniqueId=function(t){var e=++Mt;return ws(t)+e},Un.upperCase=Qs,Un.upperFirst=Gs,Un.each=wa,Un.eachRight=xa,Un.first=Xo,lc(Un,(Ac={},xr(Un,(function(t,e){Pt.call(Un.prototype,e)||(Ac[e]=t)})),Ac),{chain:!1}),Un.VERSION="4.17.21",Te(["bind","bindKey","curry","curryRight","partial","partialRight"],(function(t){Un[t].placeholder=Un})),Te(["drop","take"],(function(t,e){Vn.prototype[t]=function(n){n=n===i?1:bn(ms(n),0);var r=this.__filtered__&&!e?new Vn(this):this.clone();return r.__filtered__?r.__takeCount__=wn(n,r.__takeCount__):r.__views__.push({size:wn(n,g),type:t+(r.__dir__<0?"Right":"")}),r},Vn.prototype[t+"Right"]=function(e){return this.reverse()[t](e).reverse()}})),Te(["filter","map","takeWhile"],(function(t,e){var n=e+1,r=1==n||3==n;Vn.prototype[t]=function(t){var e=this.clone();return e.__iteratees__.push({iteratee:lo(t,3),type:n}),e.__filtered__=e.__filtered__||r,e}})),Te(["head","last"],(function(t,e){var n="take"+(e?"Right":"");Vn.prototype[t]=function(){return this[n](1).value()[0]}})),Te(["initial","tail"],(function(t,e){var n="drop"+(e?"":"Right");Vn.prototype[t]=function(){return this.__filtered__?new Vn(this):this[n](1)}})),Vn.prototype.compact=function(){return this.filter(ac)},Vn.prototype.find=function(t){return this.filter(t).head()},Vn.prototype.findLast=function(t){return this.reverse().find(t)},Vn.prototype.invokeMap=Qr((function(t,e){return"function"==typeof t?new Vn(this):this.map((function(n){return Lr(n,t,e)}))})),Vn.prototype.reject=function(t){return this.filter(Ra(lo(t)))},Vn.prototype.slice=function(t,e){t=ms(t);var n=this;return n.__filtered__&&(t>0||e<0)?new Vn(n):(t<0?n=n.takeRight(-t):t&&(n=n.drop(t)),e!==i&&(n=(e=ms(e))<0?n.dropRight(-e):n.take(e-t)),n)},Vn.prototype.takeRightWhile=function(t){return this.reverse().takeWhile(t).reverse()},Vn.prototype.toArray=function(){return this.take(g)},xr(Vn.prototype,(function(t,e){var n=/^(?:filter|find|map|reject)|While$/.test(e),r=/^(?:head|last)$/.test(e),o=Un[r?"take"+("last"==e?"Right":""):e],a=r||/^find/.test(e);o&&(Un.prototype[e]=function(){var e=this.__wrapped__,s=r?[1]:arguments,c=e instanceof Vn,u=s[0],l=c||Ka(e),f=function(t){var e=o.apply(Un,Pe([t],s));return r&&p?e[0]:e};l&&n&&"function"==typeof u&&1!=u.length&&(c=l=!1);var p=this.__chain__,d=!!this.__actions__.length,h=a&&!p,v=c&&!d;if(!a&&l){e=v?e:new Vn(this);var g=t.apply(e,s);return g.__actions__.push({func:ga,args:[f],thisArg:i}),new qn(g,p)}return h&&v?t.apply(this,s):(g=this.thru(f),h?r?g.value()[0]:g.value():g)})})),Te(["pop","push","shift","sort","splice","unshift"],(function(t){var e=jt[t],n=/^(?:push|sort|unshift)$/.test(t)?"tap":"thru",r=/^(?:pop|shift)$/.test(t);Un.prototype[t]=function(){var t=arguments;if(r&&!this.__chain__){var i=this.value();return e.apply(Ka(i)?i:[],t)}return this[n]((function(n){return e.apply(Ka(n)?n:[],t)}))}})),xr(Vn.prototype,(function(t,e){var n=Un[e];if(n){var r=n.name+"";Pt.call(Nn,r)||(Nn[r]=[]),Nn[r].push({name:e,func:n})}})),Nn[Ui(i,2).name]=[{name:"wrapper",func:i}],Vn.prototype.clone=function(){var t=new Vn(this.__wrapped__);return t.__actions__=ji(this.__actions__),t.__dir__=this.__dir__,t.__filtered__=this.__filtered__,t.__iteratees__=ji(this.__iteratees__),t.__takeCount__=this.__takeCount__,t.__views__=ji(this.__views__),t},Vn.prototype.reverse=function(){if(this.__filtered__){var t=new Vn(this);t.__dir__=-1,t.__filtered__=!0}else(t=this.clone()).__dir__*=-1;return t},Vn.prototype.value=function(){var t=this.__wrapped__.value(),e=this.__dir__,n=Ka(t),r=e<0,i=n?t.length:0,o=function(t,e,n){var r=-1,i=n.length;for(;++r<i;){var o=n[r],a=o.size;switch(o.type){case"drop":t+=a;break;case"dropRight":e-=a;break;case"take":e=wn(e,t+a);break;case"takeRight":t=bn(t,e-a)}}return{start:t,end:e}}(0,i,this.__views__),a=o.start,s=o.end,c=s-a,u=r?s:a-1,l=this.__iteratees__,f=l.length,p=0,d=wn(c,this.__takeCount__);if(!n||!r&&i==c&&d==c)return gi(t,this.__actions__);var h=[];t:for(;c--&&p<d;){for(var v=-1,g=t[u+=e];++v<f;){var m=l[v],_=m.iteratee,y=m.type,b=_(g);if(2==y)g=b;else if(!b){if(1==y)continue t;break t}}h[p++]=g}return h},Un.prototype.at=ma,Un.prototype.chain=function(){return va(this)},Un.prototype.commit=function(){return new qn(this.value(),this.__chain__)},Un.prototype.next=function(){this.__values__===i&&(this.__values__=vs(this.value()));var t=this.__index__>=this.__values__.length;return{done:t,value:t?i:this.__values__[this.__index__++]}},Un.prototype.plant=function(t){for(var e,n=this;n instanceof Wn;){var r=Uo(n);r.__index__=0,r.__values__=i,e?o.__wrapped__=r:e=r;var o=r;n=n.__wrapped__}return o.__wrapped__=t,e},Un.prototype.reverse=function(){var t=this.__wrapped__;if(t instanceof Vn){var e=t;return this.__actions__.length&&(e=new Vn(this)),(e=e.reverse()).__actions__.push({func:ga,args:[ra],thisArg:i}),new qn(e,this.__chain__)}return this.thru(ra)},Un.prototype.toJSON=Un.prototype.valueOf=Un.prototype.value=function(){return gi(this.__wrapped__,this.__actions__)},Un.prototype.first=Un.prototype.head,Qt&&(Un.prototype[Qt]=function(){return this}),Un}();ve._=yn,(r=function(){return yn}.call(e,n,e,t))===i||(t.exports=r)}.call(this)},864:()=>{},155:t=>{var e,n,r=t.exports={};function i(){throw new Error("setTimeout has not been defined")}function o(){throw new Error("clearTimeout has not been defined")}function a(t){if(e===setTimeout)return setTimeout(t,0);if((e===i||!e)&&setTimeout)return e=setTimeout,setTimeout(t,0);try{return e(t,0)}catch(n){try{return e.call(null,t,0)}catch(n){return e.call(this,t,0)}}}!function(){try{e="function"==typeof setTimeout?setTimeout:i}catch(t){e=i}try{n="function"==typeof clearTimeout?clearTimeout:o}catch(t){n=o}}();var s,c=[],u=!1,l=-1;function f(){u&&s&&(u=!1,s.length?c=s.concat(c):l=-1,c.length&&p())}function p(){if(!u){var t=a(f);u=!0;for(var e=c.length;e;){for(s=c,c=[];++l<e;)s&&s[l].run();l=-1,e=c.length}s=null,u=!1,function(t){if(n===clearTimeout)return clearTimeout(t);if((n===o||!n)&&clearTimeout)return n=clearTimeout,clearTimeout(t);try{n(t)}catch(e){try{return n.call(null,t)}catch(e){return n.call(this,t)}}}(t)}}function d(t,e){this.fun=t,this.array=e}function h(){}r.nextTick=function(t){var e=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)e[n-1]=arguments[n];c.push(new d(t,e)),1!==c.length||u||a(p)},d.prototype.run=function(){this.fun.apply(null,this.array)},r.title="browser",r.browser=!0,r.env={},r.argv=[],r.version="",r.versions={},r.on=h,r.addListener=h,r.once=h,r.off=h,r.removeListener=h,r.removeAllListeners=h,r.emit=h,r.prependListener=h,r.prependOnceListener=h,r.listeners=function(t){return[]},r.binding=function(t){throw new Error("process.binding is not supported")},r.cwd=function(){return"/"},r.chdir=function(t){throw new Error("process.chdir is not supported")},r.umask=function(){return 0}},51:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var r=function(t,e,n,r,i,o,a,s){var c,u="function"==typeof t?t.options:t;if(e&&(u.render=e,u.staticRenderFns=n,u._compiled=!0),r&&(u.functional=!0),o&&(u._scopeId="data-v-"+o),a?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},u._ssrRegister=c):i&&(c=s?function(){i.call(this,(u.functional?this.parent:this).$root.$options.shadowRoot)}:i),c)if(u.functional){u._injectStyles=c;var l=u.render;u.render=function(t,e){return c.call(e),l(t,e)}}else{var f=u.beforeCreate;u.beforeCreate=f?[].concat(f,c):[c]}return{exports:t,options:u}}({mounted:function(){console.log("Component mounted.")}},(function(){this._self._c;return this._m(0)}),[function(){var t=this,e=t._self._c;return e("div",{staticClass:"container"},[e("div",{staticClass:"row justify-content-center"},[e("div",{staticClass:"col-md-8"},[e("div",{staticClass:"card"},[e("div",{staticClass:"card-header"},[t._v("Example Component")]),t._v(" "),e("div",{staticClass:"card-body"},[t._v("\n                    I'm an example component.\n                ")])])])])])}],!1,null,null,null);const i=r.exports},538:(t,e,n)=>{"use strict";n.d(e,{ZP:()=>Gn});var r=Object.freeze({}),i=Array.isArray;function o(t){return null==t}function a(t){return null!=t}function s(t){return!0===t}function c(t){return"string"==typeof t||"number"==typeof t||"symbol"==typeof t||"boolean"==typeof t}function u(t){return"function"==typeof t}function l(t){return null!==t&&"object"==typeof t}var f=Object.prototype.toString;function p(t){return"[object Object]"===f.call(t)}function d(t){return"[object RegExp]"===f.call(t)}function h(t){var e=parseFloat(String(t));return e>=0&&Math.floor(e)===e&&isFinite(t)}function v(t){return a(t)&&"function"==typeof t.then&&"function"==typeof t.catch}function g(t){return null==t?"":Array.isArray(t)||p(t)&&t.toString===f?JSON.stringify(t,null,2):String(t)}function m(t){var e=parseFloat(t);return isNaN(e)?t:e}function _(t,e){for(var n=Object.create(null),r=t.split(","),i=0;i<r.length;i++)n[r[i]]=!0;return e?function(t){return n[t.toLowerCase()]}:function(t){return n[t]}}var y=_("slot,component",!0),b=_("key,ref,slot,slot-scope,is");function w(t,e){var n=t.length;if(n){if(e===t[n-1])return void(t.length=n-1);var r=t.indexOf(e);if(r>-1)return t.splice(r,1)}}var x=Object.prototype.hasOwnProperty;function C(t,e){return x.call(t,e)}function A(t){var e=Object.create(null);return function(n){return e[n]||(e[n]=t(n))}}var O=/-(\w)/g,k=A((function(t){return t.replace(O,(function(t,e){return e?e.toUpperCase():""}))})),$=A((function(t){return t.charAt(0).toUpperCase()+t.slice(1)})),E=/\B([A-Z])/g,T=A((function(t){return t.replace(E,"-$1").toLowerCase()}));var S=Function.prototype.bind?function(t,e){return t.bind(e)}:function(t,e){function n(n){var r=arguments.length;return r?r>1?t.apply(e,arguments):t.call(e,n):t.call(e)}return n._length=t.length,n};function j(t,e){e=e||0;for(var n=t.length-e,r=new Array(n);n--;)r[n]=t[n+e];return r}function L(t,e){for(var n in e)t[n]=e[n];return t}function N(t){for(var e={},n=0;n<t.length;n++)t[n]&&L(e,t[n]);return e}function D(t,e,n){}var I=function(t,e,n){return!1},P=function(t){return t};function M(t,e){if(t===e)return!0;var n=l(t),r=l(e);if(!n||!r)return!n&&!r&&String(t)===String(e);try{var i=Array.isArray(t),o=Array.isArray(e);if(i&&o)return t.length===e.length&&t.every((function(t,n){return M(t,e[n])}));if(t instanceof Date&&e instanceof Date)return t.getTime()===e.getTime();if(i||o)return!1;var a=Object.keys(t),s=Object.keys(e);return a.length===s.length&&a.every((function(n){return M(t[n],e[n])}))}catch(t){return!1}}function R(t,e){for(var n=0;n<t.length;n++)if(M(t[n],e))return n;return-1}function F(t){var e=!1;return function(){e||(e=!0,t.apply(this,arguments))}}function B(t,e){return t===e?0===t&&1/t!=1/e:t==t||e==e}var z="data-server-rendered",U=["component","directive","filter"],H=["beforeCreate","created","beforeMount","mounted","beforeUpdate","updated","beforeDestroy","destroyed","activated","deactivated","errorCaptured","serverPrefetch","renderTracked","renderTriggered"],W={optionMergeStrategies:Object.create(null),silent:!1,productionTip:!1,devtools:!1,performance:!1,errorHandler:null,warnHandler:null,ignoredElements:[],keyCodes:Object.create(null),isReservedTag:I,isReservedAttr:I,isUnknownElement:I,getTagNamespace:D,parsePlatformTagName:P,mustUseProp:I,async:!0,_lifecycleHooks:H},q=/a-zA-Z\u00B7\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u037D\u037F-\u1FFF\u200C-\u200D\u203F-\u2040\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD/;function V(t){var e=(t+"").charCodeAt(0);return 36===e||95===e}function K(t,e,n,r){Object.defineProperty(t,e,{value:n,enumerable:!!r,writable:!0,configurable:!0})}var J=new RegExp("[^".concat(q.source,".$_\\d]"));var X="__proto__"in{},Z="undefined"!=typeof window,Y=Z&&window.navigator.userAgent.toLowerCase(),Q=Y&&/msie|trident/.test(Y),G=Y&&Y.indexOf("msie 9.0")>0,tt=Y&&Y.indexOf("edge/")>0;Y&&Y.indexOf("android");var et=Y&&/iphone|ipad|ipod|ios/.test(Y);Y&&/chrome\/\d+/.test(Y),Y&&/phantomjs/.test(Y);var nt,rt=Y&&Y.match(/firefox\/(\d+)/),it={}.watch,ot=!1;if(Z)try{var at={};Object.defineProperty(at,"passive",{get:function(){ot=!0}}),window.addEventListener("test-passive",null,at)}catch(t){}var st=function(){return void 0===nt&&(nt=!Z&&void 0!==n.g&&(n.g.process&&"server"===n.g.process.env.VUE_ENV)),nt},ct=Z&&window.__VUE_DEVTOOLS_GLOBAL_HOOK__;function ut(t){return"function"==typeof t&&/native code/.test(t.toString())}var lt,ft="undefined"!=typeof Symbol&&ut(Symbol)&&"undefined"!=typeof Reflect&&ut(Reflect.ownKeys);lt="undefined"!=typeof Set&&ut(Set)?Set:function(){function t(){this.set=Object.create(null)}return t.prototype.has=function(t){return!0===this.set[t]},t.prototype.add=function(t){this.set[t]=!0},t.prototype.clear=function(){this.set=Object.create(null)},t}();var pt=null;function dt(t){void 0===t&&(t=null),t||pt&&pt._scope.off(),pt=t,t&&t._scope.on()}var ht=function(){function t(t,e,n,r,i,o,a,s){this.tag=t,this.data=e,this.children=n,this.text=r,this.elm=i,this.ns=void 0,this.context=o,this.fnContext=void 0,this.fnOptions=void 0,this.fnScopeId=void 0,this.key=e&&e.key,this.componentOptions=a,this.componentInstance=void 0,this.parent=void 0,this.raw=!1,this.isStatic=!1,this.isRootInsert=!0,this.isComment=!1,this.isCloned=!1,this.isOnce=!1,this.asyncFactory=s,this.asyncMeta=void 0,this.isAsyncPlaceholder=!1}return Object.defineProperty(t.prototype,"child",{get:function(){return this.componentInstance},enumerable:!1,configurable:!0}),t}(),vt=function(t){void 0===t&&(t="");var e=new ht;return e.text=t,e.isComment=!0,e};function gt(t){return new ht(void 0,void 0,void 0,String(t))}function mt(t){var e=new ht(t.tag,t.data,t.children&&t.children.slice(),t.text,t.elm,t.context,t.componentOptions,t.asyncFactory);return e.ns=t.ns,e.isStatic=t.isStatic,e.key=t.key,e.isComment=t.isComment,e.fnContext=t.fnContext,e.fnOptions=t.fnOptions,e.fnScopeId=t.fnScopeId,e.asyncMeta=t.asyncMeta,e.isCloned=!0,e}var _t=0,yt=[],bt=function(){function t(){this._pending=!1,this.id=_t++,this.subs=[]}return t.prototype.addSub=function(t){this.subs.push(t)},t.prototype.removeSub=function(t){this.subs[this.subs.indexOf(t)]=null,this._pending||(this._pending=!0,yt.push(this))},t.prototype.depend=function(e){t.target&&t.target.addDep(this)},t.prototype.notify=function(t){var e=this.subs.filter((function(t){return t}));for(var n=0,r=e.length;n<r;n++){0,e[n].update()}},t}();bt.target=null;var wt=[];function xt(t){wt.push(t),bt.target=t}function Ct(){wt.pop(),bt.target=wt[wt.length-1]}var At=Array.prototype,Ot=Object.create(At);["push","pop","shift","unshift","splice","sort","reverse"].forEach((function(t){var e=At[t];K(Ot,t,(function(){for(var n=[],r=0;r<arguments.length;r++)n[r]=arguments[r];var i,o=e.apply(this,n),a=this.__ob__;switch(t){case"push":case"unshift":i=n;break;case"splice":i=n.slice(2)}return i&&a.observeArray(i),a.dep.notify(),o}))}));var kt=Object.getOwnPropertyNames(Ot),$t={},Et=!0;function Tt(t){Et=t}var St={notify:D,depend:D,addSub:D,removeSub:D},jt=function(){function t(t,e,n){if(void 0===e&&(e=!1),void 0===n&&(n=!1),this.value=t,this.shallow=e,this.mock=n,this.dep=n?St:new bt,this.vmCount=0,K(t,"__ob__",this),i(t)){if(!n)if(X)t.__proto__=Ot;else for(var r=0,o=kt.length;r<o;r++){K(t,s=kt[r],Ot[s])}e||this.observeArray(t)}else{var a=Object.keys(t);for(r=0;r<a.length;r++){var s;Nt(t,s=a[r],$t,void 0,e,n)}}}return t.prototype.observeArray=function(t){for(var e=0,n=t.length;e<n;e++)Lt(t[e],!1,this.mock)},t}();function Lt(t,e,n){return t&&C(t,"__ob__")&&t.__ob__ instanceof jt?t.__ob__:!Et||!n&&st()||!i(t)&&!p(t)||!Object.isExtensible(t)||t.__v_skip||Bt(t)||t instanceof ht?void 0:new jt(t,e,n)}function Nt(t,e,n,r,o,a){var s=new bt,c=Object.getOwnPropertyDescriptor(t,e);if(!c||!1!==c.configurable){var u=c&&c.get,l=c&&c.set;u&&!l||n!==$t&&2!==arguments.length||(n=t[e]);var f=!o&&Lt(n,!1,a);return Object.defineProperty(t,e,{enumerable:!0,configurable:!0,get:function(){var e=u?u.call(t):n;return bt.target&&(s.depend(),f&&(f.dep.depend(),i(e)&&Pt(e))),Bt(e)&&!o?e.value:e},set:function(e){var r=u?u.call(t):n;if(B(r,e)){if(l)l.call(t,e);else{if(u)return;if(!o&&Bt(r)&&!Bt(e))return void(r.value=e);n=e}f=!o&&Lt(e,!1,a),s.notify()}}}),s}}function Dt(t,e,n){if(!Ft(t)){var r=t.__ob__;return i(t)&&h(e)?(t.length=Math.max(t.length,e),t.splice(e,1,n),r&&!r.shallow&&r.mock&&Lt(n,!1,!0),n):e in t&&!(e in Object.prototype)?(t[e]=n,n):t._isVue||r&&r.vmCount?n:r?(Nt(r.value,e,n,void 0,r.shallow,r.mock),r.dep.notify(),n):(t[e]=n,n)}}function It(t,e){if(i(t)&&h(e))t.splice(e,1);else{var n=t.__ob__;t._isVue||n&&n.vmCount||Ft(t)||C(t,e)&&(delete t[e],n&&n.dep.notify())}}function Pt(t){for(var e=void 0,n=0,r=t.length;n<r;n++)(e=t[n])&&e.__ob__&&e.__ob__.dep.depend(),i(e)&&Pt(e)}function Mt(t){return Rt(t,!0),K(t,"__v_isShallow",!0),t}function Rt(t,e){if(!Ft(t)){Lt(t,e,st());0}}function Ft(t){return!(!t||!t.__v_isReadonly)}function Bt(t){return!(!t||!0!==t.__v_isRef)}function zt(t,e,n){Object.defineProperty(t,n,{enumerable:!0,configurable:!0,get:function(){var t=e[n];if(Bt(t))return t.value;var r=t&&t.__ob__;return r&&r.dep.depend(),t},set:function(t){var r=e[n];Bt(r)&&!Bt(t)?r.value=t:e[n]=t}})}var Ut=A((function(t){var e="&"===t.charAt(0),n="~"===(t=e?t.slice(1):t).charAt(0),r="!"===(t=n?t.slice(1):t).charAt(0);return{name:t=r?t.slice(1):t,once:n,capture:r,passive:e}}));function Ht(t,e){function n(){var t=n.fns;if(!i(t))return tn(t,null,arguments,e,"v-on handler");for(var r=t.slice(),o=0;o<r.length;o++)tn(r[o],null,arguments,e,"v-on handler")}return n.fns=t,n}function Wt(t,e,n,r,i,a){var c,u,l,f;for(c in t)u=t[c],l=e[c],f=Ut(c),o(u)||(o(l)?(o(u.fns)&&(u=t[c]=Ht(u,a)),s(f.once)&&(u=t[c]=i(f.name,u,f.capture)),n(f.name,u,f.capture,f.passive,f.params)):u!==l&&(l.fns=u,t[c]=l));for(c in e)o(t[c])&&r((f=Ut(c)).name,e[c],f.capture)}function qt(t,e,n){var r;t instanceof ht&&(t=t.data.hook||(t.data.hook={}));var i=t[e];function c(){n.apply(this,arguments),w(r.fns,c)}o(i)?r=Ht([c]):a(i.fns)&&s(i.merged)?(r=i).fns.push(c):r=Ht([i,c]),r.merged=!0,t[e]=r}function Vt(t,e,n,r,i){if(a(e)){if(C(e,n))return t[n]=e[n],i||delete e[n],!0;if(C(e,r))return t[n]=e[r],i||delete e[r],!0}return!1}function Kt(t){return c(t)?[gt(t)]:i(t)?Xt(t):void 0}function Jt(t){return a(t)&&a(t.text)&&!1===t.isComment}function Xt(t,e){var n,r,u,l,f=[];for(n=0;n<t.length;n++)o(r=t[n])||"boolean"==typeof r||(l=f[u=f.length-1],i(r)?r.length>0&&(Jt((r=Xt(r,"".concat(e||"","_").concat(n)))[0])&&Jt(l)&&(f[u]=gt(l.text+r[0].text),r.shift()),f.push.apply(f,r)):c(r)?Jt(l)?f[u]=gt(l.text+r):""!==r&&f.push(gt(r)):Jt(r)&&Jt(l)?f[u]=gt(l.text+r.text):(s(t._isVList)&&a(r.tag)&&o(r.key)&&a(e)&&(r.key="__vlist".concat(e,"_").concat(n,"__")),f.push(r)));return f}function Zt(t,e,n,r,o,f){return(i(n)||c(n))&&(o=r,r=n,n=void 0),s(f)&&(o=2),function(t,e,n,r,o){if(a(n)&&a(n.__ob__))return vt();a(n)&&a(n.is)&&(e=n.is);if(!e)return vt();0;i(r)&&u(r[0])&&((n=n||{}).scopedSlots={default:r[0]},r.length=0);2===o?r=Kt(r):1===o&&(r=function(t){for(var e=0;e<t.length;e++)if(i(t[e]))return Array.prototype.concat.apply([],t);return t}(r));var s,c;if("string"==typeof e){var f=void 0;c=t.$vnode&&t.$vnode.ns||W.getTagNamespace(e),s=W.isReservedTag(e)?new ht(W.parsePlatformTagName(e),n,r,void 0,void 0,t):n&&n.pre||!a(f=Kn(t.$options,"components",e))?new ht(e,n,r,void 0,void 0,t):Mn(f,n,t,r,e)}else s=Mn(e,n,t,r);return i(s)?s:a(s)?(a(c)&&Yt(s,c),a(n)&&function(t){l(t.style)&&gn(t.style);l(t.class)&&gn(t.class)}(n),s):vt()}(t,e,n,r,o)}function Yt(t,e,n){if(t.ns=e,"foreignObject"===t.tag&&(e=void 0,n=!0),a(t.children))for(var r=0,i=t.children.length;r<i;r++){var c=t.children[r];a(c.tag)&&(o(c.ns)||s(n)&&"svg"!==c.tag)&&Yt(c,e,n)}}function Qt(t,e){var n,r,o,s,c=null;if(i(t)||"string"==typeof t)for(c=new Array(t.length),n=0,r=t.length;n<r;n++)c[n]=e(t[n],n);else if("number"==typeof t)for(c=new Array(t),n=0;n<t;n++)c[n]=e(n+1,n);else if(l(t))if(ft&&t[Symbol.iterator]){c=[];for(var u=t[Symbol.iterator](),f=u.next();!f.done;)c.push(e(f.value,c.length)),f=u.next()}else for(o=Object.keys(t),c=new Array(o.length),n=0,r=o.length;n<r;n++)s=o[n],c[n]=e(t[s],s,n);return a(c)||(c=[]),c._isVList=!0,c}function Gt(t,e,n,r){var i,o=this.$scopedSlots[t];o?(n=n||{},r&&(n=L(L({},r),n)),i=o(n)||(u(e)?e():e)):i=this.$slots[t]||(u(e)?e():e);var a=n&&n.slot;return a?this.$createElement("template",{slot:a},i):i}function te(t){return Kn(this.$options,"filters",t,!0)||P}function ee(t,e){return i(t)?-1===t.indexOf(e):t!==e}function ne(t,e,n,r,i){var o=W.keyCodes[e]||n;return i&&r&&!W.keyCodes[e]?ee(i,r):o?ee(o,t):r?T(r)!==e:void 0===t}function re(t,e,n,r,o){if(n)if(l(n)){i(n)&&(n=N(n));var a=void 0,s=function(i){if("class"===i||"style"===i||b(i))a=t;else{var s=t.attrs&&t.attrs.type;a=r||W.mustUseProp(e,s,i)?t.domProps||(t.domProps={}):t.attrs||(t.attrs={})}var c=k(i),u=T(i);c in a||u in a||(a[i]=n[i],o&&((t.on||(t.on={}))["update:".concat(i)]=function(t){n[i]=t}))};for(var c in n)s(c)}else;return t}function ie(t,e){var n=this._staticTrees||(this._staticTrees=[]),r=n[t];return r&&!e||ae(r=n[t]=this.$options.staticRenderFns[t].call(this._renderProxy,this._c,this),"__static__".concat(t),!1),r}function oe(t,e,n){return ae(t,"__once__".concat(e).concat(n?"_".concat(n):""),!0),t}function ae(t,e,n){if(i(t))for(var r=0;r<t.length;r++)t[r]&&"string"!=typeof t[r]&&se(t[r],"".concat(e,"_").concat(r),n);else se(t,e,n)}function se(t,e,n){t.isStatic=!0,t.key=e,t.isOnce=n}function ce(t,e){if(e)if(p(e)){var n=t.on=t.on?L({},t.on):{};for(var r in e){var i=n[r],o=e[r];n[r]=i?[].concat(i,o):o}}else;return t}function ue(t,e,n,r){e=e||{$stable:!n};for(var o=0;o<t.length;o++){var a=t[o];i(a)?ue(a,e,n):a&&(a.proxy&&(a.fn.proxy=!0),e[a.key]=a.fn)}return r&&(e.$key=r),e}function le(t,e){for(var n=0;n<e.length;n+=2){var r=e[n];"string"==typeof r&&r&&(t[e[n]]=e[n+1])}return t}function fe(t,e){return"string"==typeof t?e+t:t}function pe(t){t._o=oe,t._n=m,t._s=g,t._l=Qt,t._t=Gt,t._q=M,t._i=R,t._m=ie,t._f=te,t._k=ne,t._b=re,t._v=gt,t._e=vt,t._u=ue,t._g=ce,t._d=le,t._p=fe}function de(t,e){if(!t||!t.length)return{};for(var n={},r=0,i=t.length;r<i;r++){var o=t[r],a=o.data;if(a&&a.attrs&&a.attrs.slot&&delete a.attrs.slot,o.context!==e&&o.fnContext!==e||!a||null==a.slot)(n.default||(n.default=[])).push(o);else{var s=a.slot,c=n[s]||(n[s]=[]);"template"===o.tag?c.push.apply(c,o.children||[]):c.push(o)}}for(var u in n)n[u].every(he)&&delete n[u];return n}function he(t){return t.isComment&&!t.asyncFactory||" "===t.text}function ve(t){return t.isComment&&t.asyncFactory}function ge(t,e,n,i){var o,a=Object.keys(n).length>0,s=e?!!e.$stable:!a,c=e&&e.$key;if(e){if(e._normalized)return e._normalized;if(s&&i&&i!==r&&c===i.$key&&!a&&!i.$hasNormal)return i;for(var u in o={},e)e[u]&&"$"!==u[0]&&(o[u]=me(t,n,u,e[u]))}else o={};for(var l in n)l in o||(o[l]=_e(n,l));return e&&Object.isExtensible(e)&&(e._normalized=o),K(o,"$stable",s),K(o,"$key",c),K(o,"$hasNormal",a),o}function me(t,e,n,r){var o=function(){var e=pt;dt(t);var n=arguments.length?r.apply(null,arguments):r({}),o=(n=n&&"object"==typeof n&&!i(n)?[n]:Kt(n))&&n[0];return dt(e),n&&(!o||1===n.length&&o.isComment&&!ve(o))?void 0:n};return r.proxy&&Object.defineProperty(e,n,{get:o,enumerable:!0,configurable:!0}),o}function _e(t,e){return function(){return t[e]}}function ye(t){return{get attrs(){if(!t._attrsProxy){var e=t._attrsProxy={};K(e,"_v_attr_proxy",!0),be(e,t.$attrs,r,t,"$attrs")}return t._attrsProxy},get listeners(){t._listenersProxy||be(t._listenersProxy={},t.$listeners,r,t,"$listeners");return t._listenersProxy},get slots(){return function(t){t._slotsProxy||xe(t._slotsProxy={},t.$scopedSlots);return t._slotsProxy}(t)},emit:S(t.$emit,t),expose:function(e){e&&Object.keys(e).forEach((function(n){return zt(t,e,n)}))}}}function be(t,e,n,r,i){var o=!1;for(var a in e)a in t?e[a]!==n[a]&&(o=!0):(o=!0,we(t,a,r,i));for(var a in t)a in e||(o=!0,delete t[a]);return o}function we(t,e,n,r){Object.defineProperty(t,e,{enumerable:!0,configurable:!0,get:function(){return n[r][e]}})}function xe(t,e){for(var n in e)t[n]=e[n];for(var n in t)n in e||delete t[n]}var Ce,Ae=null;function Oe(t,e){return(t.__esModule||ft&&"Module"===t[Symbol.toStringTag])&&(t=t.default),l(t)?e.extend(t):t}function ke(t){if(i(t))for(var e=0;e<t.length;e++){var n=t[e];if(a(n)&&(a(n.componentOptions)||ve(n)))return n}}function $e(t,e){Ce.$on(t,e)}function Ee(t,e){Ce.$off(t,e)}function Te(t,e){var n=Ce;return function r(){var i=e.apply(null,arguments);null!==i&&n.$off(t,r)}}function Se(t,e,n){Ce=t,Wt(e,n||{},$e,Ee,Te,t),Ce=void 0}var je=null;function Le(t){var e=je;return je=t,function(){je=e}}function Ne(t){for(;t&&(t=t.$parent);)if(t._inactive)return!0;return!1}function De(t,e){if(e){if(t._directInactive=!1,Ne(t))return}else if(t._directInactive)return;if(t._inactive||null===t._inactive){t._inactive=!1;for(var n=0;n<t.$children.length;n++)De(t.$children[n]);Pe(t,"activated")}}function Ie(t,e){if(!(e&&(t._directInactive=!0,Ne(t))||t._inactive)){t._inactive=!0;for(var n=0;n<t.$children.length;n++)Ie(t.$children[n]);Pe(t,"deactivated")}}function Pe(t,e,n,r){void 0===r&&(r=!0),xt();var i=pt;r&&dt(t);var o=t.$options[e],a="".concat(e," hook");if(o)for(var s=0,c=o.length;s<c;s++)tn(o[s],t,n||null,t,a);t._hasHookEvent&&t.$emit("hook:"+e),r&&dt(i),Ct()}var Me=[],Re=[],Fe={},Be=!1,ze=!1,Ue=0;var He=0,We=Date.now;if(Z&&!Q){var qe=window.performance;qe&&"function"==typeof qe.now&&We()>document.createEvent("Event").timeStamp&&(We=function(){return qe.now()})}var Ve=function(t,e){if(t.post){if(!e.post)return 1}else if(e.post)return-1;return t.id-e.id};function Ke(){var t,e;for(He=We(),ze=!0,Me.sort(Ve),Ue=0;Ue<Me.length;Ue++)(t=Me[Ue]).before&&t.before(),e=t.id,Fe[e]=null,t.run();var n=Re.slice(),r=Me.slice();Ue=Me.length=Re.length=0,Fe={},Be=ze=!1,function(t){for(var e=0;e<t.length;e++)t[e]._inactive=!0,De(t[e],!0)}(n),function(t){var e=t.length;for(;e--;){var n=t[e],r=n.vm;r&&r._watcher===n&&r._isMounted&&!r._isDestroyed&&Pe(r,"updated")}}(r),function(){for(var t=0;t<yt.length;t++){var e=yt[t];e.subs=e.subs.filter((function(t){return t})),e._pending=!1}yt.length=0}(),ct&&W.devtools&&ct.emit("flush")}function Je(t){var e=t.id;if(null==Fe[e]&&(t!==bt.target||!t.noRecurse)){if(Fe[e]=!0,ze){for(var n=Me.length-1;n>Ue&&Me[n].id>t.id;)n--;Me.splice(n+1,0,t)}else Me.push(t);Be||(Be=!0,dn(Ke))}}var Xe="watcher";"".concat(Xe," callback"),"".concat(Xe," getter"),"".concat(Xe," cleanup");var Ze;var Ye=function(){function t(t){void 0===t&&(t=!1),this.detached=t,this.active=!0,this.effects=[],this.cleanups=[],this.parent=Ze,!t&&Ze&&(this.index=(Ze.scopes||(Ze.scopes=[])).push(this)-1)}return t.prototype.run=function(t){if(this.active){var e=Ze;try{return Ze=this,t()}finally{Ze=e}}else 0},t.prototype.on=function(){Ze=this},t.prototype.off=function(){Ze=this.parent},t.prototype.stop=function(t){if(this.active){var e=void 0,n=void 0;for(e=0,n=this.effects.length;e<n;e++)this.effects[e].teardown();for(e=0,n=this.cleanups.length;e<n;e++)this.cleanups[e]();if(this.scopes)for(e=0,n=this.scopes.length;e<n;e++)this.scopes[e].stop(!0);if(!this.detached&&this.parent&&!t){var r=this.parent.scopes.pop();r&&r!==this&&(this.parent.scopes[this.index]=r,r.index=this.index)}this.parent=void 0,this.active=!1}},t}();function Qe(t){var e=t._provided,n=t.$parent&&t.$parent._provided;return n===e?t._provided=Object.create(n):e}function Ge(t,e,n){xt();try{if(e)for(var r=e;r=r.$parent;){var i=r.$options.errorCaptured;if(i)for(var o=0;o<i.length;o++)try{if(!1===i[o].call(r,t,e,n))return}catch(t){en(t,r,"errorCaptured hook")}}en(t,e,n)}finally{Ct()}}function tn(t,e,n,r,i){var o;try{(o=n?t.apply(e,n):t.call(e))&&!o._isVue&&v(o)&&!o._handled&&(o.catch((function(t){return Ge(t,r,i+" (Promise/async)")})),o._handled=!0)}catch(t){Ge(t,r,i)}return o}function en(t,e,n){if(W.errorHandler)try{return W.errorHandler.call(null,t,e,n)}catch(e){e!==t&&nn(e,null,"config.errorHandler")}nn(t,e,n)}function nn(t,e,n){if(!Z||"undefined"==typeof console)throw t;console.error(t)}var rn,on=!1,an=[],sn=!1;function cn(){sn=!1;var t=an.slice(0);an.length=0;for(var e=0;e<t.length;e++)t[e]()}if("undefined"!=typeof Promise&&ut(Promise)){var un=Promise.resolve();rn=function(){un.then(cn),et&&setTimeout(D)},on=!0}else if(Q||"undefined"==typeof MutationObserver||!ut(MutationObserver)&&"[object MutationObserverConstructor]"!==MutationObserver.toString())rn="undefined"!=typeof setImmediate&&ut(setImmediate)?function(){setImmediate(cn)}:function(){setTimeout(cn,0)};else{var ln=1,fn=new MutationObserver(cn),pn=document.createTextNode(String(ln));fn.observe(pn,{characterData:!0}),rn=function(){ln=(ln+1)%2,pn.data=String(ln)},on=!0}function dn(t,e){var n;if(an.push((function(){if(t)try{t.call(e)}catch(t){Ge(t,e,"nextTick")}else n&&n(e)})),sn||(sn=!0,rn()),!t&&"undefined"!=typeof Promise)return new Promise((function(t){n=t}))}function hn(t){return function(e,n){if(void 0===n&&(n=pt),n)return function(t,e,n){var r=t.$options;r[e]=Hn(r[e],n)}(n,t,e)}}hn("beforeMount"),hn("mounted"),hn("beforeUpdate"),hn("updated"),hn("beforeDestroy"),hn("destroyed"),hn("activated"),hn("deactivated"),hn("serverPrefetch"),hn("renderTracked"),hn("renderTriggered"),hn("errorCaptured");var vn=new lt;function gn(t){return mn(t,vn),vn.clear(),t}function mn(t,e){var n,r,o=i(t);if(!(!o&&!l(t)||t.__v_skip||Object.isFrozen(t)||t instanceof ht)){if(t.__ob__){var a=t.__ob__.dep.id;if(e.has(a))return;e.add(a)}if(o)for(n=t.length;n--;)mn(t[n],e);else if(Bt(t))mn(t.value,e);else for(n=(r=Object.keys(t)).length;n--;)mn(t[r[n]],e)}}var _n=0,yn=function(){function t(t,e,n,r,i){var o,a;o=this,void 0===(a=Ze&&!Ze._vm?Ze:t?t._scope:void 0)&&(a=Ze),a&&a.active&&a.effects.push(o),(this.vm=t)&&i&&(t._watcher=this),r?(this.deep=!!r.deep,this.user=!!r.user,this.lazy=!!r.lazy,this.sync=!!r.sync,this.before=r.before):this.deep=this.user=this.lazy=this.sync=!1,this.cb=n,this.id=++_n,this.active=!0,this.post=!1,this.dirty=this.lazy,this.deps=[],this.newDeps=[],this.depIds=new lt,this.newDepIds=new lt,this.expression="",u(e)?this.getter=e:(this.getter=function(t){if(!J.test(t)){var e=t.split(".");return function(t){for(var n=0;n<e.length;n++){if(!t)return;t=t[e[n]]}return t}}}(e),this.getter||(this.getter=D)),this.value=this.lazy?void 0:this.get()}return t.prototype.get=function(){var t;xt(this);var e=this.vm;try{t=this.getter.call(e,e)}catch(t){if(!this.user)throw t;Ge(t,e,'getter for watcher "'.concat(this.expression,'"'))}finally{this.deep&&gn(t),Ct(),this.cleanupDeps()}return t},t.prototype.addDep=function(t){var e=t.id;this.newDepIds.has(e)||(this.newDepIds.add(e),this.newDeps.push(t),this.depIds.has(e)||t.addSub(this))},t.prototype.cleanupDeps=function(){for(var t=this.deps.length;t--;){var e=this.deps[t];this.newDepIds.has(e.id)||e.removeSub(this)}var n=this.depIds;this.depIds=this.newDepIds,this.newDepIds=n,this.newDepIds.clear(),n=this.deps,this.deps=this.newDeps,this.newDeps=n,this.newDeps.length=0},t.prototype.update=function(){this.lazy?this.dirty=!0:this.sync?this.run():Je(this)},t.prototype.run=function(){if(this.active){var t=this.get();if(t!==this.value||l(t)||this.deep){var e=this.value;if(this.value=t,this.user){var n='callback for watcher "'.concat(this.expression,'"');tn(this.cb,this.vm,[t,e],this.vm,n)}else this.cb.call(this.vm,t,e)}}},t.prototype.evaluate=function(){this.value=this.get(),this.dirty=!1},t.prototype.depend=function(){for(var t=this.deps.length;t--;)this.deps[t].depend()},t.prototype.teardown=function(){if(this.vm&&!this.vm._isBeingDestroyed&&w(this.vm._scope.effects,this),this.active){for(var t=this.deps.length;t--;)this.deps[t].removeSub(this);this.active=!1,this.onStop&&this.onStop()}},t}(),bn={enumerable:!0,configurable:!0,get:D,set:D};function wn(t,e,n){bn.get=function(){return this[e][n]},bn.set=function(t){this[e][n]=t},Object.defineProperty(t,n,bn)}function xn(t){var e=t.$options;if(e.props&&function(t,e){var n=t.$options.propsData||{},r=t._props=Mt({}),i=t.$options._propKeys=[],o=!t.$parent;o||Tt(!1);var a=function(o){i.push(o);var a=Jn(o,e,n,t);Nt(r,o,a),o in t||wn(t,"_props",o)};for(var s in e)a(s);Tt(!0)}(t,e.props),function(t){var e=t.$options,n=e.setup;if(n){var r=t._setupContext=ye(t);dt(t),xt();var i=tn(n,null,[t._props||Mt({}),r],t,"setup");if(Ct(),dt(),u(i))e.render=i;else if(l(i))if(t._setupState=i,i.__sfc){var o=t._setupProxy={};for(var a in i)"__sfc"!==a&&zt(o,i,a)}else for(var a in i)V(a)||zt(t,i,a)}}(t),e.methods&&function(t,e){t.$options.props;for(var n in e)t[n]="function"!=typeof e[n]?D:S(e[n],t)}(t,e.methods),e.data)!function(t){var e=t.$options.data;e=t._data=u(e)?function(t,e){xt();try{return t.call(e,e)}catch(t){return Ge(t,e,"data()"),{}}finally{Ct()}}(e,t):e||{},p(e)||(e={});var n=Object.keys(e),r=t.$options.props,i=(t.$options.methods,n.length);for(;i--;){var o=n[i];0,r&&C(r,o)||V(o)||wn(t,"_data",o)}var a=Lt(e);a&&a.vmCount++}(t);else{var n=Lt(t._data={});n&&n.vmCount++}e.computed&&function(t,e){var n=t._computedWatchers=Object.create(null),r=st();for(var i in e){var o=e[i],a=u(o)?o:o.get;0,r||(n[i]=new yn(t,a||D,D,Cn)),i in t||An(t,i,o)}}(t,e.computed),e.watch&&e.watch!==it&&function(t,e){for(var n in e){var r=e[n];if(i(r))for(var o=0;o<r.length;o++)$n(t,n,r[o]);else $n(t,n,r)}}(t,e.watch)}var Cn={lazy:!0};function An(t,e,n){var r=!st();u(n)?(bn.get=r?On(e):kn(n),bn.set=D):(bn.get=n.get?r&&!1!==n.cache?On(e):kn(n.get):D,bn.set=n.set||D),Object.defineProperty(t,e,bn)}function On(t){return function(){var e=this._computedWatchers&&this._computedWatchers[t];if(e)return e.dirty&&e.evaluate(),bt.target&&e.depend(),e.value}}function kn(t){return function(){return t.call(this,this)}}function $n(t,e,n,r){return p(n)&&(r=n,n=n.handler),"string"==typeof n&&(n=t[n]),t.$watch(e,n,r)}function En(t,e){if(t){for(var n=Object.create(null),r=ft?Reflect.ownKeys(t):Object.keys(t),i=0;i<r.length;i++){var o=r[i];if("__ob__"!==o){var a=t[o].from;if(a in e._provided)n[o]=e._provided[a];else if("default"in t[o]){var s=t[o].default;n[o]=u(s)?s.call(e):s}else 0}}return n}}var Tn=0;function Sn(t){var e=t.options;if(t.super){var n=Sn(t.super);if(n!==t.superOptions){t.superOptions=n;var r=function(t){var e,n=t.options,r=t.sealedOptions;for(var i in n)n[i]!==r[i]&&(e||(e={}),e[i]=n[i]);return e}(t);r&&L(t.extendOptions,r),(e=t.options=Vn(n,t.extendOptions)).name&&(e.components[e.name]=t)}}return e}function jn(t,e,n,o,a){var c,u=this,l=a.options;C(o,"_uid")?(c=Object.create(o))._original=o:(c=o,o=o._original);var f=s(l._compiled),p=!f;this.data=t,this.props=e,this.children=n,this.parent=o,this.listeners=t.on||r,this.injections=En(l.inject,o),this.slots=function(){return u.$slots||ge(o,t.scopedSlots,u.$slots=de(n,o)),u.$slots},Object.defineProperty(this,"scopedSlots",{enumerable:!0,get:function(){return ge(o,t.scopedSlots,this.slots())}}),f&&(this.$options=l,this.$slots=this.slots(),this.$scopedSlots=ge(o,t.scopedSlots,this.$slots)),l._scopeId?this._c=function(t,e,n,r){var a=Zt(c,t,e,n,r,p);return a&&!i(a)&&(a.fnScopeId=l._scopeId,a.fnContext=o),a}:this._c=function(t,e,n,r){return Zt(c,t,e,n,r,p)}}function Ln(t,e,n,r,i){var o=mt(t);return o.fnContext=n,o.fnOptions=r,e.slot&&((o.data||(o.data={})).slot=e.slot),o}function Nn(t,e){for(var n in e)t[k(n)]=e[n]}function Dn(t){return t.name||t.__name||t._componentTag}pe(jn.prototype);var In={init:function(t,e){if(t.componentInstance&&!t.componentInstance._isDestroyed&&t.data.keepAlive){var n=t;In.prepatch(n,n)}else{(t.componentInstance=function(t,e){var n={_isComponent:!0,_parentVnode:t,parent:e},r=t.data.inlineTemplate;a(r)&&(n.render=r.render,n.staticRenderFns=r.staticRenderFns);return new t.componentOptions.Ctor(n)}(t,je)).$mount(e?t.elm:void 0,e)}},prepatch:function(t,e){var n=e.componentOptions;!function(t,e,n,i,o){var a=i.data.scopedSlots,s=t.$scopedSlots,c=!!(a&&!a.$stable||s!==r&&!s.$stable||a&&t.$scopedSlots.$key!==a.$key||!a&&t.$scopedSlots.$key),u=!!(o||t.$options._renderChildren||c),l=t.$vnode;t.$options._parentVnode=i,t.$vnode=i,t._vnode&&(t._vnode.parent=i),t.$options._renderChildren=o;var f=i.data.attrs||r;t._attrsProxy&&be(t._attrsProxy,f,l.data&&l.data.attrs||r,t,"$attrs")&&(u=!0),t.$attrs=f,n=n||r;var p=t.$options._parentListeners;if(t._listenersProxy&&be(t._listenersProxy,n,p||r,t,"$listeners"),t.$listeners=t.$options._parentListeners=n,Se(t,n,p),e&&t.$options.props){Tt(!1);for(var d=t._props,h=t.$options._propKeys||[],v=0;v<h.length;v++){var g=h[v],m=t.$options.props;d[g]=Jn(g,m,e,t)}Tt(!0),t.$options.propsData=e}u&&(t.$slots=de(o,i.context),t.$forceUpdate())}(e.componentInstance=t.componentInstance,n.propsData,n.listeners,e,n.children)},insert:function(t){var e,n=t.context,r=t.componentInstance;r._isMounted||(r._isMounted=!0,Pe(r,"mounted")),t.data.keepAlive&&(n._isMounted?((e=r)._inactive=!1,Re.push(e)):De(r,!0))},destroy:function(t){var e=t.componentInstance;e._isDestroyed||(t.data.keepAlive?Ie(e,!0):e.$destroy())}},Pn=Object.keys(In);function Mn(t,e,n,c,u){if(!o(t)){var f=n.$options._base;if(l(t)&&(t=f.extend(t)),"function"==typeof t){var p;if(o(t.cid)&&(t=function(t,e){if(s(t.error)&&a(t.errorComp))return t.errorComp;if(a(t.resolved))return t.resolved;var n=Ae;if(n&&a(t.owners)&&-1===t.owners.indexOf(n)&&t.owners.push(n),s(t.loading)&&a(t.loadingComp))return t.loadingComp;if(n&&!a(t.owners)){var r=t.owners=[n],i=!0,c=null,u=null;n.$on("hook:destroyed",(function(){return w(r,n)}));var f=function(t){for(var e=0,n=r.length;e<n;e++)r[e].$forceUpdate();t&&(r.length=0,null!==c&&(clearTimeout(c),c=null),null!==u&&(clearTimeout(u),u=null))},p=F((function(n){t.resolved=Oe(n,e),i?r.length=0:f(!0)})),d=F((function(e){a(t.errorComp)&&(t.error=!0,f(!0))})),h=t(p,d);return l(h)&&(v(h)?o(t.resolved)&&h.then(p,d):v(h.component)&&(h.component.then(p,d),a(h.error)&&(t.errorComp=Oe(h.error,e)),a(h.loading)&&(t.loadingComp=Oe(h.loading,e),0===h.delay?t.loading=!0:c=setTimeout((function(){c=null,o(t.resolved)&&o(t.error)&&(t.loading=!0,f(!1))}),h.delay||200)),a(h.timeout)&&(u=setTimeout((function(){u=null,o(t.resolved)&&d(null)}),h.timeout)))),i=!1,t.loading?t.loadingComp:t.resolved}}(p=t,f),void 0===t))return function(t,e,n,r,i){var o=vt();return o.asyncFactory=t,o.asyncMeta={data:e,context:n,children:r,tag:i},o}(p,e,n,c,u);e=e||{},Sn(t),a(e.model)&&function(t,e){var n=t.model&&t.model.prop||"value",r=t.model&&t.model.event||"input";(e.attrs||(e.attrs={}))[n]=e.model.value;var o=e.on||(e.on={}),s=o[r],c=e.model.callback;a(s)?(i(s)?-1===s.indexOf(c):s!==c)&&(o[r]=[c].concat(s)):o[r]=c}(t.options,e);var d=function(t,e,n){var r=e.options.props;if(!o(r)){var i={},s=t.attrs,c=t.props;if(a(s)||a(c))for(var u in r){var l=T(u);Vt(i,c,u,l,!0)||Vt(i,s,u,l,!1)}return i}}(e,t);if(s(t.options.functional))return function(t,e,n,o,s){var c=t.options,u={},l=c.props;if(a(l))for(var f in l)u[f]=Jn(f,l,e||r);else a(n.attrs)&&Nn(u,n.attrs),a(n.props)&&Nn(u,n.props);var p=new jn(n,u,s,o,t),d=c.render.call(null,p._c,p);if(d instanceof ht)return Ln(d,n,p.parent,c);if(i(d)){for(var h=Kt(d)||[],v=new Array(h.length),g=0;g<h.length;g++)v[g]=Ln(h[g],n,p.parent,c);return v}}(t,d,e,n,c);var h=e.on;if(e.on=e.nativeOn,s(t.options.abstract)){var g=e.slot;e={},g&&(e.slot=g)}!function(t){for(var e=t.hook||(t.hook={}),n=0;n<Pn.length;n++){var r=Pn[n],i=e[r],o=In[r];i===o||i&&i._merged||(e[r]=i?Rn(o,i):o)}}(e);var m=Dn(t.options)||u;return new ht("vue-component-".concat(t.cid).concat(m?"-".concat(m):""),e,void 0,void 0,void 0,n,{Ctor:t,propsData:d,listeners:h,tag:u,children:c},p)}}}function Rn(t,e){var n=function(n,r){t(n,r),e(n,r)};return n._merged=!0,n}var Fn=D,Bn=W.optionMergeStrategies;function zn(t,e,n){if(void 0===n&&(n=!0),!e)return t;for(var r,i,o,a=ft?Reflect.ownKeys(e):Object.keys(e),s=0;s<a.length;s++)"__ob__"!==(r=a[s])&&(i=t[r],o=e[r],n&&C(t,r)?i!==o&&p(i)&&p(o)&&zn(i,o):Dt(t,r,o));return t}function Un(t,e,n){return n?function(){var r=u(e)?e.call(n,n):e,i=u(t)?t.call(n,n):t;return r?zn(r,i):i}:e?t?function(){return zn(u(e)?e.call(this,this):e,u(t)?t.call(this,this):t)}:e:t}function Hn(t,e){var n=e?t?t.concat(e):i(e)?e:[e]:t;return n?function(t){for(var e=[],n=0;n<t.length;n++)-1===e.indexOf(t[n])&&e.push(t[n]);return e}(n):n}function Wn(t,e,n,r){var i=Object.create(t||null);return e?L(i,e):i}Bn.data=function(t,e,n){return n?Un(t,e,n):e&&"function"!=typeof e?t:Un(t,e)},H.forEach((function(t){Bn[t]=Hn})),U.forEach((function(t){Bn[t+"s"]=Wn})),Bn.watch=function(t,e,n,r){if(t===it&&(t=void 0),e===it&&(e=void 0),!e)return Object.create(t||null);if(!t)return e;var o={};for(var a in L(o,t),e){var s=o[a],c=e[a];s&&!i(s)&&(s=[s]),o[a]=s?s.concat(c):i(c)?c:[c]}return o},Bn.props=Bn.methods=Bn.inject=Bn.computed=function(t,e,n,r){if(!t)return e;var i=Object.create(null);return L(i,t),e&&L(i,e),i},Bn.provide=function(t,e){return t?function(){var n=Object.create(null);return zn(n,u(t)?t.call(this):t),e&&zn(n,u(e)?e.call(this):e,!1),n}:e};var qn=function(t,e){return void 0===e?t:e};function Vn(t,e,n){if(u(e)&&(e=e.options),function(t,e){var n=t.props;if(n){var r,o,a={};if(i(n))for(r=n.length;r--;)"string"==typeof(o=n[r])&&(a[k(o)]={type:null});else if(p(n))for(var s in n)o=n[s],a[k(s)]=p(o)?o:{type:o};t.props=a}}(e),function(t,e){var n=t.inject;if(n){var r=t.inject={};if(i(n))for(var o=0;o<n.length;o++)r[n[o]]={from:n[o]};else if(p(n))for(var a in n){var s=n[a];r[a]=p(s)?L({from:a},s):{from:s}}}}(e),function(t){var e=t.directives;if(e)for(var n in e){var r=e[n];u(r)&&(e[n]={bind:r,update:r})}}(e),!e._base&&(e.extends&&(t=Vn(t,e.extends,n)),e.mixins))for(var r=0,o=e.mixins.length;r<o;r++)t=Vn(t,e.mixins[r],n);var a,s={};for(a in t)c(a);for(a in e)C(t,a)||c(a);function c(r){var i=Bn[r]||qn;s[r]=i(t[r],e[r],n,r)}return s}function Kn(t,e,n,r){if("string"==typeof n){var i=t[e];if(C(i,n))return i[n];var o=k(n);if(C(i,o))return i[o];var a=$(o);return C(i,a)?i[a]:i[n]||i[o]||i[a]}}function Jn(t,e,n,r){var i=e[t],o=!C(n,t),a=n[t],s=Qn(Boolean,i.type);if(s>-1)if(o&&!C(i,"default"))a=!1;else if(""===a||a===T(t)){var c=Qn(String,i.type);(c<0||s<c)&&(a=!0)}if(void 0===a){a=function(t,e,n){if(!C(e,"default"))return;var r=e.default;0;if(t&&t.$options.propsData&&void 0===t.$options.propsData[n]&&void 0!==t._props[n])return t._props[n];return u(r)&&"Function"!==Zn(e.type)?r.call(t):r}(r,i,t);var l=Et;Tt(!0),Lt(a),Tt(l)}return a}var Xn=/^\s*function (\w+)/;function Zn(t){var e=t&&t.toString().match(Xn);return e?e[1]:""}function Yn(t,e){return Zn(t)===Zn(e)}function Qn(t,e){if(!i(e))return Yn(e,t)?0:-1;for(var n=0,r=e.length;n<r;n++)if(Yn(e[n],t))return n;return-1}function Gn(t){this._init(t)}function tr(t){t.cid=0;var e=1;t.extend=function(t){t=t||{};var n=this,r=n.cid,i=t._Ctor||(t._Ctor={});if(i[r])return i[r];var o=Dn(t)||Dn(n.options);var a=function(t){this._init(t)};return(a.prototype=Object.create(n.prototype)).constructor=a,a.cid=e++,a.options=Vn(n.options,t),a.super=n,a.options.props&&function(t){var e=t.options.props;for(var n in e)wn(t.prototype,"_props",n)}(a),a.options.computed&&function(t){var e=t.options.computed;for(var n in e)An(t.prototype,n,e[n])}(a),a.extend=n.extend,a.mixin=n.mixin,a.use=n.use,U.forEach((function(t){a[t]=n[t]})),o&&(a.options.components[o]=a),a.superOptions=n.options,a.extendOptions=t,a.sealedOptions=L({},a.options),i[r]=a,a}}function er(t){return t&&(Dn(t.Ctor.options)||t.tag)}function nr(t,e){return i(t)?t.indexOf(e)>-1:"string"==typeof t?t.split(",").indexOf(e)>-1:!!d(t)&&t.test(e)}function rr(t,e){var n=t.cache,r=t.keys,i=t._vnode;for(var o in n){var a=n[o];if(a){var s=a.name;s&&!e(s)&&ir(n,o,r,i)}}}function ir(t,e,n,r){var i=t[e];!i||r&&i.tag===r.tag||i.componentInstance.$destroy(),t[e]=null,w(n,e)}!function(t){t.prototype._init=function(t){var e=this;e._uid=Tn++,e._isVue=!0,e.__v_skip=!0,e._scope=new Ye(!0),e._scope._vm=!0,t&&t._isComponent?function(t,e){var n=t.$options=Object.create(t.constructor.options),r=e._parentVnode;n.parent=e.parent,n._parentVnode=r;var i=r.componentOptions;n.propsData=i.propsData,n._parentListeners=i.listeners,n._renderChildren=i.children,n._componentTag=i.tag,e.render&&(n.render=e.render,n.staticRenderFns=e.staticRenderFns)}(e,t):e.$options=Vn(Sn(e.constructor),t||{},e),e._renderProxy=e,e._self=e,function(t){var e=t.$options,n=e.parent;if(n&&!e.abstract){for(;n.$options.abstract&&n.$parent;)n=n.$parent;n.$children.push(t)}t.$parent=n,t.$root=n?n.$root:t,t.$children=[],t.$refs={},t._provided=n?n._provided:Object.create(null),t._watcher=null,t._inactive=null,t._directInactive=!1,t._isMounted=!1,t._isDestroyed=!1,t._isBeingDestroyed=!1}(e),function(t){t._events=Object.create(null),t._hasHookEvent=!1;var e=t.$options._parentListeners;e&&Se(t,e)}(e),function(t){t._vnode=null,t._staticTrees=null;var e=t.$options,n=t.$vnode=e._parentVnode,i=n&&n.context;t.$slots=de(e._renderChildren,i),t.$scopedSlots=n?ge(t.$parent,n.data.scopedSlots,t.$slots):r,t._c=function(e,n,r,i){return Zt(t,e,n,r,i,!1)},t.$createElement=function(e,n,r,i){return Zt(t,e,n,r,i,!0)};var o=n&&n.data;Nt(t,"$attrs",o&&o.attrs||r,null,!0),Nt(t,"$listeners",e._parentListeners||r,null,!0)}(e),Pe(e,"beforeCreate",void 0,!1),function(t){var e=En(t.$options.inject,t);e&&(Tt(!1),Object.keys(e).forEach((function(n){Nt(t,n,e[n])})),Tt(!0))}(e),xn(e),function(t){var e=t.$options.provide;if(e){var n=u(e)?e.call(t):e;if(!l(n))return;for(var r=Qe(t),i=ft?Reflect.ownKeys(n):Object.keys(n),o=0;o<i.length;o++){var a=i[o];Object.defineProperty(r,a,Object.getOwnPropertyDescriptor(n,a))}}}(e),Pe(e,"created"),e.$options.el&&e.$mount(e.$options.el)}}(Gn),function(t){var e={get:function(){return this._data}},n={get:function(){return this._props}};Object.defineProperty(t.prototype,"$data",e),Object.defineProperty(t.prototype,"$props",n),t.prototype.$set=Dt,t.prototype.$delete=It,t.prototype.$watch=function(t,e,n){var r=this;if(p(e))return $n(r,t,e,n);(n=n||{}).user=!0;var i=new yn(r,t,e,n);if(n.immediate){var o='callback for immediate watcher "'.concat(i.expression,'"');xt(),tn(e,r,[i.value],r,o),Ct()}return function(){i.teardown()}}}(Gn),function(t){var e=/^hook:/;t.prototype.$on=function(t,n){var r=this;if(i(t))for(var o=0,a=t.length;o<a;o++)r.$on(t[o],n);else(r._events[t]||(r._events[t]=[])).push(n),e.test(t)&&(r._hasHookEvent=!0);return r},t.prototype.$once=function(t,e){var n=this;function r(){n.$off(t,r),e.apply(n,arguments)}return r.fn=e,n.$on(t,r),n},t.prototype.$off=function(t,e){var n=this;if(!arguments.length)return n._events=Object.create(null),n;if(i(t)){for(var r=0,o=t.length;r<o;r++)n.$off(t[r],e);return n}var a,s=n._events[t];if(!s)return n;if(!e)return n._events[t]=null,n;for(var c=s.length;c--;)if((a=s[c])===e||a.fn===e){s.splice(c,1);break}return n},t.prototype.$emit=function(t){var e=this,n=e._events[t];if(n){n=n.length>1?j(n):n;for(var r=j(arguments,1),i='event handler for "'.concat(t,'"'),o=0,a=n.length;o<a;o++)tn(n[o],e,r,e,i)}return e}}(Gn),function(t){t.prototype._update=function(t,e){var n=this,r=n.$el,i=n._vnode,o=Le(n);n._vnode=t,n.$el=i?n.__patch__(i,t):n.__patch__(n.$el,t,e,!1),o(),r&&(r.__vue__=null),n.$el&&(n.$el.__vue__=n);for(var a=n;a&&a.$vnode&&a.$parent&&a.$vnode===a.$parent._vnode;)a.$parent.$el=a.$el,a=a.$parent},t.prototype.$forceUpdate=function(){this._watcher&&this._watcher.update()},t.prototype.$destroy=function(){var t=this;if(!t._isBeingDestroyed){Pe(t,"beforeDestroy"),t._isBeingDestroyed=!0;var e=t.$parent;!e||e._isBeingDestroyed||t.$options.abstract||w(e.$children,t),t._scope.stop(),t._data.__ob__&&t._data.__ob__.vmCount--,t._isDestroyed=!0,t.__patch__(t._vnode,null),Pe(t,"destroyed"),t.$off(),t.$el&&(t.$el.__vue__=null),t.$vnode&&(t.$vnode.parent=null)}}}(Gn),function(t){pe(t.prototype),t.prototype.$nextTick=function(t){return dn(t,this)},t.prototype._render=function(){var t,e=this,n=e.$options,r=n.render,o=n._parentVnode;o&&e._isMounted&&(e.$scopedSlots=ge(e.$parent,o.data.scopedSlots,e.$slots,e.$scopedSlots),e._slotsProxy&&xe(e._slotsProxy,e.$scopedSlots)),e.$vnode=o;try{dt(e),Ae=e,t=r.call(e._renderProxy,e.$createElement)}catch(n){Ge(n,e,"render"),t=e._vnode}finally{Ae=null,dt()}return i(t)&&1===t.length&&(t=t[0]),t instanceof ht||(t=vt()),t.parent=o,t}}(Gn);var or=[String,RegExp,Array],ar={name:"keep-alive",abstract:!0,props:{include:or,exclude:or,max:[String,Number]},methods:{cacheVNode:function(){var t=this,e=t.cache,n=t.keys,r=t.vnodeToCache,i=t.keyToCache;if(r){var o=r.tag,a=r.componentInstance,s=r.componentOptions;e[i]={name:er(s),tag:o,componentInstance:a},n.push(i),this.max&&n.length>parseInt(this.max)&&ir(e,n[0],n,this._vnode),this.vnodeToCache=null}}},created:function(){this.cache=Object.create(null),this.keys=[]},destroyed:function(){for(var t in this.cache)ir(this.cache,t,this.keys)},mounted:function(){var t=this;this.cacheVNode(),this.$watch("include",(function(e){rr(t,(function(t){return nr(e,t)}))})),this.$watch("exclude",(function(e){rr(t,(function(t){return!nr(e,t)}))}))},updated:function(){this.cacheVNode()},render:function(){var t=this.$slots.default,e=ke(t),n=e&&e.componentOptions;if(n){var r=er(n),i=this.include,o=this.exclude;if(i&&(!r||!nr(i,r))||o&&r&&nr(o,r))return e;var a=this.cache,s=this.keys,c=null==e.key?n.Ctor.cid+(n.tag?"::".concat(n.tag):""):e.key;a[c]?(e.componentInstance=a[c].componentInstance,w(s,c),s.push(c)):(this.vnodeToCache=e,this.keyToCache=c),e.data.keepAlive=!0}return e||t&&t[0]}},sr={KeepAlive:ar};!function(t){var e={get:function(){return W}};Object.defineProperty(t,"config",e),t.util={warn:Fn,extend:L,mergeOptions:Vn,defineReactive:Nt},t.set=Dt,t.delete=It,t.nextTick=dn,t.observable=function(t){return Lt(t),t},t.options=Object.create(null),U.forEach((function(e){t.options[e+"s"]=Object.create(null)})),t.options._base=t,L(t.options.components,sr),function(t){t.use=function(t){var e=this._installedPlugins||(this._installedPlugins=[]);if(e.indexOf(t)>-1)return this;var n=j(arguments,1);return n.unshift(this),u(t.install)?t.install.apply(t,n):u(t)&&t.apply(null,n),e.push(t),this}}(t),function(t){t.mixin=function(t){return this.options=Vn(this.options,t),this}}(t),tr(t),function(t){U.forEach((function(e){t[e]=function(t,n){return n?("component"===e&&p(n)&&(n.name=n.name||t,n=this.options._base.extend(n)),"directive"===e&&u(n)&&(n={bind:n,update:n}),this.options[e+"s"][t]=n,n):this.options[e+"s"][t]}}))}(t)}(Gn),Object.defineProperty(Gn.prototype,"$isServer",{get:st}),Object.defineProperty(Gn.prototype,"$ssrContext",{get:function(){return this.$vnode&&this.$vnode.ssrContext}}),Object.defineProperty(Gn,"FunctionalRenderContext",{value:jn}),Gn.version="2.7.14";var cr=_("style,class"),ur=_("input,textarea,option,select,progress"),lr=function(t,e,n){return"value"===n&&ur(t)&&"button"!==e||"selected"===n&&"option"===t||"checked"===n&&"input"===t||"muted"===n&&"video"===t},fr=_("contenteditable,draggable,spellcheck"),pr=_("events,caret,typing,plaintext-only"),dr=_("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,truespeed,typemustmatch,visible"),hr="http://www.w3.org/1999/xlink",vr=function(t){return":"===t.charAt(5)&&"xlink"===t.slice(0,5)},gr=function(t){return vr(t)?t.slice(6,t.length):""},mr=function(t){return null==t||!1===t};function _r(t){for(var e=t.data,n=t,r=t;a(r.componentInstance);)(r=r.componentInstance._vnode)&&r.data&&(e=yr(r.data,e));for(;a(n=n.parent);)n&&n.data&&(e=yr(e,n.data));return function(t,e){if(a(t)||a(e))return br(t,wr(e));return""}(e.staticClass,e.class)}function yr(t,e){return{staticClass:br(t.staticClass,e.staticClass),class:a(t.class)?[t.class,e.class]:e.class}}function br(t,e){return t?e?t+" "+e:t:e||""}function wr(t){return Array.isArray(t)?function(t){for(var e,n="",r=0,i=t.length;r<i;r++)a(e=wr(t[r]))&&""!==e&&(n&&(n+=" "),n+=e);return n}(t):l(t)?function(t){var e="";for(var n in t)t[n]&&(e&&(e+=" "),e+=n);return e}(t):"string"==typeof t?t:""}var xr={svg:"http://www.w3.org/2000/svg",math:"http://www.w3.org/1998/Math/MathML"},Cr=_("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template,blockquote,iframe,tfoot"),Ar=_("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,foreignobject,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",!0),Or=function(t){return Cr(t)||Ar(t)};function kr(t){return Ar(t)?"svg":"math"===t?"math":void 0}var $r=Object.create(null);var Er=_("text,number,password,search,email,tel,url");function Tr(t){if("string"==typeof t){var e=document.querySelector(t);return e||document.createElement("div")}return t}var Sr=Object.freeze({__proto__:null,createElement:function(t,e){var n=document.createElement(t);return"select"!==t||e.data&&e.data.attrs&&void 0!==e.data.attrs.multiple&&n.setAttribute("multiple","multiple"),n},createElementNS:function(t,e){return document.createElementNS(xr[t],e)},createTextNode:function(t){return document.createTextNode(t)},createComment:function(t){return document.createComment(t)},insertBefore:function(t,e,n){t.insertBefore(e,n)},removeChild:function(t,e){t.removeChild(e)},appendChild:function(t,e){t.appendChild(e)},parentNode:function(t){return t.parentNode},nextSibling:function(t){return t.nextSibling},tagName:function(t){return t.tagName},setTextContent:function(t,e){t.textContent=e},setStyleScope:function(t,e){t.setAttribute(e,"")}}),jr={create:function(t,e){Lr(e)},update:function(t,e){t.data.ref!==e.data.ref&&(Lr(t,!0),Lr(e))},destroy:function(t){Lr(t,!0)}};function Lr(t,e){var n=t.data.ref;if(a(n)){var r=t.context,o=t.componentInstance||t.elm,s=e?null:o,c=e?void 0:o;if(u(n))tn(n,r,[s],r,"template ref function");else{var l=t.data.refInFor,f="string"==typeof n||"number"==typeof n,p=Bt(n),d=r.$refs;if(f||p)if(l){var h=f?d[n]:n.value;e?i(h)&&w(h,o):i(h)?h.includes(o)||h.push(o):f?(d[n]=[o],Nr(r,n,d[n])):n.value=[o]}else if(f){if(e&&d[n]!==o)return;d[n]=c,Nr(r,n,s)}else if(p){if(e&&n.value!==o)return;n.value=s}else 0}}}function Nr(t,e,n){var r=t._setupState;r&&C(r,e)&&(Bt(r[e])?r[e].value=n:r[e]=n)}var Dr=new ht("",{},[]),Ir=["create","activate","update","remove","destroy"];function Pr(t,e){return t.key===e.key&&t.asyncFactory===e.asyncFactory&&(t.tag===e.tag&&t.isComment===e.isComment&&a(t.data)===a(e.data)&&function(t,e){if("input"!==t.tag)return!0;var n,r=a(n=t.data)&&a(n=n.attrs)&&n.type,i=a(n=e.data)&&a(n=n.attrs)&&n.type;return r===i||Er(r)&&Er(i)}(t,e)||s(t.isAsyncPlaceholder)&&o(e.asyncFactory.error))}function Mr(t,e,n){var r,i,o={};for(r=e;r<=n;++r)a(i=t[r].key)&&(o[i]=r);return o}var Rr={create:Fr,update:Fr,destroy:function(t){Fr(t,Dr)}};function Fr(t,e){(t.data.directives||e.data.directives)&&function(t,e){var n,r,i,o=t===Dr,a=e===Dr,s=zr(t.data.directives,t.context),c=zr(e.data.directives,e.context),u=[],l=[];for(n in c)r=s[n],i=c[n],r?(i.oldValue=r.value,i.oldArg=r.arg,Hr(i,"update",e,t),i.def&&i.def.componentUpdated&&l.push(i)):(Hr(i,"bind",e,t),i.def&&i.def.inserted&&u.push(i));if(u.length){var f=function(){for(var n=0;n<u.length;n++)Hr(u[n],"inserted",e,t)};o?qt(e,"insert",f):f()}l.length&&qt(e,"postpatch",(function(){for(var n=0;n<l.length;n++)Hr(l[n],"componentUpdated",e,t)}));if(!o)for(n in s)c[n]||Hr(s[n],"unbind",t,t,a)}(t,e)}var Br=Object.create(null);function zr(t,e){var n,r,i=Object.create(null);if(!t)return i;for(n=0;n<t.length;n++){if((r=t[n]).modifiers||(r.modifiers=Br),i[Ur(r)]=r,e._setupState&&e._setupState.__sfc){var o=r.def||Kn(e,"_setupState","v-"+r.name);r.def="function"==typeof o?{bind:o,update:o}:o}r.def=r.def||Kn(e.$options,"directives",r.name)}return i}function Ur(t){return t.rawName||"".concat(t.name,".").concat(Object.keys(t.modifiers||{}).join("."))}function Hr(t,e,n,r,i){var o=t.def&&t.def[e];if(o)try{o(n.elm,t,n,r,i)}catch(r){Ge(r,n.context,"directive ".concat(t.name," ").concat(e," hook"))}}var Wr=[jr,Rr];function qr(t,e){var n=e.componentOptions;if(!(a(n)&&!1===n.Ctor.options.inheritAttrs||o(t.data.attrs)&&o(e.data.attrs))){var r,i,c=e.elm,u=t.data.attrs||{},l=e.data.attrs||{};for(r in(a(l.__ob__)||s(l._v_attr_proxy))&&(l=e.data.attrs=L({},l)),l)i=l[r],u[r]!==i&&Vr(c,r,i,e.data.pre);for(r in(Q||tt)&&l.value!==u.value&&Vr(c,"value",l.value),u)o(l[r])&&(vr(r)?c.removeAttributeNS(hr,gr(r)):fr(r)||c.removeAttribute(r))}}function Vr(t,e,n,r){r||t.tagName.indexOf("-")>-1?Kr(t,e,n):dr(e)?mr(n)?t.removeAttribute(e):(n="allowfullscreen"===e&&"EMBED"===t.tagName?"true":e,t.setAttribute(e,n)):fr(e)?t.setAttribute(e,function(t,e){return mr(e)||"false"===e?"false":"contenteditable"===t&&pr(e)?e:"true"}(e,n)):vr(e)?mr(n)?t.removeAttributeNS(hr,gr(e)):t.setAttributeNS(hr,e,n):Kr(t,e,n)}function Kr(t,e,n){if(mr(n))t.removeAttribute(e);else{if(Q&&!G&&"TEXTAREA"===t.tagName&&"placeholder"===e&&""!==n&&!t.__ieph){var r=function(e){e.stopImmediatePropagation(),t.removeEventListener("input",r)};t.addEventListener("input",r),t.__ieph=!0}t.setAttribute(e,n)}}var Jr={create:qr,update:qr};function Xr(t,e){var n=e.elm,r=e.data,i=t.data;if(!(o(r.staticClass)&&o(r.class)&&(o(i)||o(i.staticClass)&&o(i.class)))){var s=_r(e),c=n._transitionClasses;a(c)&&(s=br(s,wr(c))),s!==n._prevClass&&(n.setAttribute("class",s),n._prevClass=s)}}var Zr,Yr,Qr,Gr,ti,ei,ni={create:Xr,update:Xr},ri=/[\w).+\-_$\]]/;function ii(t){var e,n,r,i,o,a=!1,s=!1,c=!1,u=!1,l=0,f=0,p=0,d=0;for(r=0;r<t.length;r++)if(n=e,e=t.charCodeAt(r),a)39===e&&92!==n&&(a=!1);else if(s)34===e&&92!==n&&(s=!1);else if(c)96===e&&92!==n&&(c=!1);else if(u)47===e&&92!==n&&(u=!1);else if(124!==e||124===t.charCodeAt(r+1)||124===t.charCodeAt(r-1)||l||f||p){switch(e){case 34:s=!0;break;case 39:a=!0;break;case 96:c=!0;break;case 40:p++;break;case 41:p--;break;case 91:f++;break;case 93:f--;break;case 123:l++;break;case 125:l--}if(47===e){for(var h=r-1,v=void 0;h>=0&&" "===(v=t.charAt(h));h--);v&&ri.test(v)||(u=!0)}}else void 0===i?(d=r+1,i=t.slice(0,r).trim()):g();function g(){(o||(o=[])).push(t.slice(d,r).trim()),d=r+1}if(void 0===i?i=t.slice(0,r).trim():0!==d&&g(),o)for(r=0;r<o.length;r++)i=oi(i,o[r]);return i}function oi(t,e){var n=e.indexOf("(");if(n<0)return'_f("'.concat(e,'")(').concat(t,")");var r=e.slice(0,n),i=e.slice(n+1);return'_f("'.concat(r,'")(').concat(t).concat(")"!==i?","+i:i)}function ai(t,e){console.error("[Vue compiler]: ".concat(t))}function si(t,e){return t?t.map((function(t){return t[e]})).filter((function(t){return t})):[]}function ci(t,e,n,r,i){(t.props||(t.props=[])).push(mi({name:e,value:n,dynamic:i},r)),t.plain=!1}function ui(t,e,n,r,i){(i?t.dynamicAttrs||(t.dynamicAttrs=[]):t.attrs||(t.attrs=[])).push(mi({name:e,value:n,dynamic:i},r)),t.plain=!1}function li(t,e,n,r){t.attrsMap[e]=n,t.attrsList.push(mi({name:e,value:n},r))}function fi(t,e,n,r,i,o,a,s){(t.directives||(t.directives=[])).push(mi({name:e,rawName:n,value:r,arg:i,isDynamicArg:o,modifiers:a},s)),t.plain=!1}function pi(t,e,n){return n?"_p(".concat(e,',"').concat(t,'")'):t+e}function di(t,e,n,i,o,a,s,c){var u;(i=i||r).right?c?e="(".concat(e,")==='click'?'contextmenu':(").concat(e,")"):"click"===e&&(e="contextmenu",delete i.right):i.middle&&(c?e="(".concat(e,")==='click'?'mouseup':(").concat(e,")"):"click"===e&&(e="mouseup")),i.capture&&(delete i.capture,e=pi("!",e,c)),i.once&&(delete i.once,e=pi("~",e,c)),i.passive&&(delete i.passive,e=pi("&",e,c)),i.native?(delete i.native,u=t.nativeEvents||(t.nativeEvents={})):u=t.events||(t.events={});var l=mi({value:n.trim(),dynamic:c},s);i!==r&&(l.modifiers=i);var f=u[e];Array.isArray(f)?o?f.unshift(l):f.push(l):u[e]=f?o?[l,f]:[f,l]:l,t.plain=!1}function hi(t,e,n){var r=vi(t,":"+e)||vi(t,"v-bind:"+e);if(null!=r)return ii(r);if(!1!==n){var i=vi(t,e);if(null!=i)return JSON.stringify(i)}}function vi(t,e,n){var r;if(null!=(r=t.attrsMap[e]))for(var i=t.attrsList,o=0,a=i.length;o<a;o++)if(i[o].name===e){i.splice(o,1);break}return n&&delete t.attrsMap[e],r}function gi(t,e){for(var n=t.attrsList,r=0,i=n.length;r<i;r++){var o=n[r];if(e.test(o.name))return n.splice(r,1),o}}function mi(t,e){return e&&(null!=e.start&&(t.start=e.start),null!=e.end&&(t.end=e.end)),t}function _i(t,e,n){var r=n||{},i=r.number,o="$$v",a=o;r.trim&&(a="(typeof ".concat(o," === 'string'")+"? ".concat(o,".trim()")+": ".concat(o,")")),i&&(a="_n(".concat(a,")"));var s=yi(e,a);t.model={value:"(".concat(e,")"),expression:JSON.stringify(e),callback:"function (".concat(o,") {").concat(s,"}")}}function yi(t,e){var n=function(t){if(t=t.trim(),Zr=t.length,t.indexOf("[")<0||t.lastIndexOf("]")<Zr-1)return(Gr=t.lastIndexOf("."))>-1?{exp:t.slice(0,Gr),key:'"'+t.slice(Gr+1)+'"'}:{exp:t,key:null};Yr=t,Gr=ti=ei=0;for(;!wi();)xi(Qr=bi())?Ai(Qr):91===Qr&&Ci(Qr);return{exp:t.slice(0,ti),key:t.slice(ti+1,ei)}}(t);return null===n.key?"".concat(t,"=").concat(e):"$set(".concat(n.exp,", ").concat(n.key,", ").concat(e,")")}function bi(){return Yr.charCodeAt(++Gr)}function wi(){return Gr>=Zr}function xi(t){return 34===t||39===t}function Ci(t){var e=1;for(ti=Gr;!wi();)if(xi(t=bi()))Ai(t);else if(91===t&&e++,93===t&&e--,0===e){ei=Gr;break}}function Ai(t){for(var e=t;!wi()&&(t=bi())!==e;);}var Oi,ki="__r",$i="__c";function Ei(t,e,n){var r=Oi;return function i(){var o=e.apply(null,arguments);null!==o&&ji(t,i,n,r)}}var Ti=on&&!(rt&&Number(rt[1])<=53);function Si(t,e,n,r){if(Ti){var i=He,o=e;e=o._wrapper=function(t){if(t.target===t.currentTarget||t.timeStamp>=i||t.timeStamp<=0||t.target.ownerDocument!==document)return o.apply(this,arguments)}}Oi.addEventListener(t,e,ot?{capture:n,passive:r}:n)}function ji(t,e,n,r){(r||Oi).removeEventListener(t,e._wrapper||e,n)}function Li(t,e){if(!o(t.data.on)||!o(e.data.on)){var n=e.data.on||{},r=t.data.on||{};Oi=e.elm||t.elm,function(t){if(a(t[ki])){var e=Q?"change":"input";t[e]=[].concat(t[ki],t[e]||[]),delete t[ki]}a(t[$i])&&(t.change=[].concat(t[$i],t.change||[]),delete t[$i])}(n),Wt(n,r,Si,ji,Ei,e.context),Oi=void 0}}var Ni,Di={create:Li,update:Li,destroy:function(t){return Li(t,Dr)}};function Ii(t,e){if(!o(t.data.domProps)||!o(e.data.domProps)){var n,r,i=e.elm,c=t.data.domProps||{},u=e.data.domProps||{};for(n in(a(u.__ob__)||s(u._v_attr_proxy))&&(u=e.data.domProps=L({},u)),c)n in u||(i[n]="");for(n in u){if(r=u[n],"textContent"===n||"innerHTML"===n){if(e.children&&(e.children.length=0),r===c[n])continue;1===i.childNodes.length&&i.removeChild(i.childNodes[0])}if("value"===n&&"PROGRESS"!==i.tagName){i._value=r;var l=o(r)?"":String(r);Pi(i,l)&&(i.value=l)}else if("innerHTML"===n&&Ar(i.tagName)&&o(i.innerHTML)){(Ni=Ni||document.createElement("div")).innerHTML="<svg>".concat(r,"</svg>");for(var f=Ni.firstChild;i.firstChild;)i.removeChild(i.firstChild);for(;f.firstChild;)i.appendChild(f.firstChild)}else if(r!==c[n])try{i[n]=r}catch(t){}}}}function Pi(t,e){return!t.composing&&("OPTION"===t.tagName||function(t,e){var n=!0;try{n=document.activeElement!==t}catch(t){}return n&&t.value!==e}(t,e)||function(t,e){var n=t.value,r=t._vModifiers;if(a(r)){if(r.number)return m(n)!==m(e);if(r.trim)return n.trim()!==e.trim()}return n!==e}(t,e))}var Mi={create:Ii,update:Ii},Ri=A((function(t){var e={},n=/:(.+)/;return t.split(/;(?![^(]*\))/g).forEach((function(t){if(t){var r=t.split(n);r.length>1&&(e[r[0].trim()]=r[1].trim())}})),e}));function Fi(t){var e=Bi(t.style);return t.staticStyle?L(t.staticStyle,e):e}function Bi(t){return Array.isArray(t)?N(t):"string"==typeof t?Ri(t):t}var zi,Ui=/^--/,Hi=/\s*!important$/,Wi=function(t,e,n){if(Ui.test(e))t.style.setProperty(e,n);else if(Hi.test(n))t.style.setProperty(T(e),n.replace(Hi,""),"important");else{var r=Vi(e);if(Array.isArray(n))for(var i=0,o=n.length;i<o;i++)t.style[r]=n[i];else t.style[r]=n}},qi=["Webkit","Moz","ms"],Vi=A((function(t){if(zi=zi||document.createElement("div").style,"filter"!==(t=k(t))&&t in zi)return t;for(var e=t.charAt(0).toUpperCase()+t.slice(1),n=0;n<qi.length;n++){var r=qi[n]+e;if(r in zi)return r}}));function Ki(t,e){var n=e.data,r=t.data;if(!(o(n.staticStyle)&&o(n.style)&&o(r.staticStyle)&&o(r.style))){var i,s,c=e.elm,u=r.staticStyle,l=r.normalizedStyle||r.style||{},f=u||l,p=Bi(e.data.style)||{};e.data.normalizedStyle=a(p.__ob__)?L({},p):p;var d=function(t,e){var n,r={};if(e)for(var i=t;i.componentInstance;)(i=i.componentInstance._vnode)&&i.data&&(n=Fi(i.data))&&L(r,n);(n=Fi(t.data))&&L(r,n);for(var o=t;o=o.parent;)o.data&&(n=Fi(o.data))&&L(r,n);return r}(e,!0);for(s in f)o(d[s])&&Wi(c,s,"");for(s in d)(i=d[s])!==f[s]&&Wi(c,s,null==i?"":i)}}var Ji={create:Ki,update:Ki},Xi=/\s+/;function Zi(t,e){if(e&&(e=e.trim()))if(t.classList)e.indexOf(" ")>-1?e.split(Xi).forEach((function(e){return t.classList.add(e)})):t.classList.add(e);else{var n=" ".concat(t.getAttribute("class")||""," ");n.indexOf(" "+e+" ")<0&&t.setAttribute("class",(n+e).trim())}}function Yi(t,e){if(e&&(e=e.trim()))if(t.classList)e.indexOf(" ")>-1?e.split(Xi).forEach((function(e){return t.classList.remove(e)})):t.classList.remove(e),t.classList.length||t.removeAttribute("class");else{for(var n=" ".concat(t.getAttribute("class")||""," "),r=" "+e+" ";n.indexOf(r)>=0;)n=n.replace(r," ");(n=n.trim())?t.setAttribute("class",n):t.removeAttribute("class")}}function Qi(t){if(t){if("object"==typeof t){var e={};return!1!==t.css&&L(e,Gi(t.name||"v")),L(e,t),e}return"string"==typeof t?Gi(t):void 0}}var Gi=A((function(t){return{enterClass:"".concat(t,"-enter"),enterToClass:"".concat(t,"-enter-to"),enterActiveClass:"".concat(t,"-enter-active"),leaveClass:"".concat(t,"-leave"),leaveToClass:"".concat(t,"-leave-to"),leaveActiveClass:"".concat(t,"-leave-active")}})),to=Z&&!G,eo="transition",no="animation",ro="transition",io="transitionend",oo="animation",ao="animationend";to&&(void 0===window.ontransitionend&&void 0!==window.onwebkittransitionend&&(ro="WebkitTransition",io="webkitTransitionEnd"),void 0===window.onanimationend&&void 0!==window.onwebkitanimationend&&(oo="WebkitAnimation",ao="webkitAnimationEnd"));var so=Z?window.requestAnimationFrame?window.requestAnimationFrame.bind(window):setTimeout:function(t){return t()};function co(t){so((function(){so(t)}))}function uo(t,e){var n=t._transitionClasses||(t._transitionClasses=[]);n.indexOf(e)<0&&(n.push(e),Zi(t,e))}function lo(t,e){t._transitionClasses&&w(t._transitionClasses,e),Yi(t,e)}function fo(t,e,n){var r=ho(t,e),i=r.type,o=r.timeout,a=r.propCount;if(!i)return n();var s=i===eo?io:ao,c=0,u=function(){t.removeEventListener(s,l),n()},l=function(e){e.target===t&&++c>=a&&u()};setTimeout((function(){c<a&&u()}),o+1),t.addEventListener(s,l)}var po=/\b(transform|all)(,|$)/;function ho(t,e){var n,r=window.getComputedStyle(t),i=(r[ro+"Delay"]||"").split(", "),o=(r[ro+"Duration"]||"").split(", "),a=vo(i,o),s=(r[oo+"Delay"]||"").split(", "),c=(r[oo+"Duration"]||"").split(", "),u=vo(s,c),l=0,f=0;return e===eo?a>0&&(n=eo,l=a,f=o.length):e===no?u>0&&(n=no,l=u,f=c.length):f=(n=(l=Math.max(a,u))>0?a>u?eo:no:null)?n===eo?o.length:c.length:0,{type:n,timeout:l,propCount:f,hasTransform:n===eo&&po.test(r[ro+"Property"])}}function vo(t,e){for(;t.length<e.length;)t=t.concat(t);return Math.max.apply(null,e.map((function(e,n){return go(e)+go(t[n])})))}function go(t){return 1e3*Number(t.slice(0,-1).replace(",","."))}function mo(t,e){var n=t.elm;a(n._leaveCb)&&(n._leaveCb.cancelled=!0,n._leaveCb());var r=Qi(t.data.transition);if(!o(r)&&!a(n._enterCb)&&1===n.nodeType){for(var i=r.css,s=r.type,c=r.enterClass,f=r.enterToClass,p=r.enterActiveClass,d=r.appearClass,h=r.appearToClass,v=r.appearActiveClass,g=r.beforeEnter,_=r.enter,y=r.afterEnter,b=r.enterCancelled,w=r.beforeAppear,x=r.appear,C=r.afterAppear,A=r.appearCancelled,O=r.duration,k=je,$=je.$vnode;$&&$.parent;)k=$.context,$=$.parent;var E=!k._isMounted||!t.isRootInsert;if(!E||x||""===x){var T=E&&d?d:c,S=E&&v?v:p,j=E&&h?h:f,L=E&&w||g,N=E&&u(x)?x:_,D=E&&C||y,I=E&&A||b,P=m(l(O)?O.enter:O);0;var M=!1!==i&&!G,R=bo(N),B=n._enterCb=F((function(){M&&(lo(n,j),lo(n,S)),B.cancelled?(M&&lo(n,T),I&&I(n)):D&&D(n),n._enterCb=null}));t.data.show||qt(t,"insert",(function(){var e=n.parentNode,r=e&&e._pending&&e._pending[t.key];r&&r.tag===t.tag&&r.elm._leaveCb&&r.elm._leaveCb(),N&&N(n,B)})),L&&L(n),M&&(uo(n,T),uo(n,S),co((function(){lo(n,T),B.cancelled||(uo(n,j),R||(yo(P)?setTimeout(B,P):fo(n,s,B)))}))),t.data.show&&(e&&e(),N&&N(n,B)),M||R||B()}}}function _o(t,e){var n=t.elm;a(n._enterCb)&&(n._enterCb.cancelled=!0,n._enterCb());var r=Qi(t.data.transition);if(o(r)||1!==n.nodeType)return e();if(!a(n._leaveCb)){var i=r.css,s=r.type,c=r.leaveClass,u=r.leaveToClass,f=r.leaveActiveClass,p=r.beforeLeave,d=r.leave,h=r.afterLeave,v=r.leaveCancelled,g=r.delayLeave,_=r.duration,y=!1!==i&&!G,b=bo(d),w=m(l(_)?_.leave:_);0;var x=n._leaveCb=F((function(){n.parentNode&&n.parentNode._pending&&(n.parentNode._pending[t.key]=null),y&&(lo(n,u),lo(n,f)),x.cancelled?(y&&lo(n,c),v&&v(n)):(e(),h&&h(n)),n._leaveCb=null}));g?g(C):C()}function C(){x.cancelled||(!t.data.show&&n.parentNode&&((n.parentNode._pending||(n.parentNode._pending={}))[t.key]=t),p&&p(n),y&&(uo(n,c),uo(n,f),co((function(){lo(n,c),x.cancelled||(uo(n,u),b||(yo(w)?setTimeout(x,w):fo(n,s,x)))}))),d&&d(n,x),y||b||x())}}function yo(t){return"number"==typeof t&&!isNaN(t)}function bo(t){if(o(t))return!1;var e=t.fns;return a(e)?bo(Array.isArray(e)?e[0]:e):(t._length||t.length)>1}function wo(t,e){!0!==e.data.show&&mo(e)}var xo=function(t){var e,n,r={},u=t.modules,l=t.nodeOps;for(e=0;e<Ir.length;++e)for(r[Ir[e]]=[],n=0;n<u.length;++n)a(u[n][Ir[e]])&&r[Ir[e]].push(u[n][Ir[e]]);function f(t){var e=l.parentNode(t);a(e)&&l.removeChild(e,t)}function p(t,e,n,i,o,c,u){if(a(t.elm)&&a(c)&&(t=c[u]=mt(t)),t.isRootInsert=!o,!function(t,e,n,i){var o=t.data;if(a(o)){var c=a(t.componentInstance)&&o.keepAlive;if(a(o=o.hook)&&a(o=o.init)&&o(t,!1),a(t.componentInstance))return d(t,e),h(n,t.elm,i),s(c)&&function(t,e,n,i){var o,s=t;for(;s.componentInstance;)if(a(o=(s=s.componentInstance._vnode).data)&&a(o=o.transition)){for(o=0;o<r.activate.length;++o)r.activate[o](Dr,s);e.push(s);break}h(n,t.elm,i)}(t,e,n,i),!0}}(t,e,n,i)){var f=t.data,p=t.children,g=t.tag;a(g)?(t.elm=t.ns?l.createElementNS(t.ns,g):l.createElement(g,t),y(t),v(t,p,e),a(f)&&m(t,e),h(n,t.elm,i)):s(t.isComment)?(t.elm=l.createComment(t.text),h(n,t.elm,i)):(t.elm=l.createTextNode(t.text),h(n,t.elm,i))}}function d(t,e){a(t.data.pendingInsert)&&(e.push.apply(e,t.data.pendingInsert),t.data.pendingInsert=null),t.elm=t.componentInstance.$el,g(t)?(m(t,e),y(t)):(Lr(t),e.push(t))}function h(t,e,n){a(t)&&(a(n)?l.parentNode(n)===t&&l.insertBefore(t,e,n):l.appendChild(t,e))}function v(t,e,n){if(i(e)){0;for(var r=0;r<e.length;++r)p(e[r],n,t.elm,null,!0,e,r)}else c(t.text)&&l.appendChild(t.elm,l.createTextNode(String(t.text)))}function g(t){for(;t.componentInstance;)t=t.componentInstance._vnode;return a(t.tag)}function m(t,n){for(var i=0;i<r.create.length;++i)r.create[i](Dr,t);a(e=t.data.hook)&&(a(e.create)&&e.create(Dr,t),a(e.insert)&&n.push(t))}function y(t){var e;if(a(e=t.fnScopeId))l.setStyleScope(t.elm,e);else for(var n=t;n;)a(e=n.context)&&a(e=e.$options._scopeId)&&l.setStyleScope(t.elm,e),n=n.parent;a(e=je)&&e!==t.context&&e!==t.fnContext&&a(e=e.$options._scopeId)&&l.setStyleScope(t.elm,e)}function b(t,e,n,r,i,o){for(;r<=i;++r)p(n[r],o,t,e,!1,n,r)}function w(t){var e,n,i=t.data;if(a(i))for(a(e=i.hook)&&a(e=e.destroy)&&e(t),e=0;e<r.destroy.length;++e)r.destroy[e](t);if(a(e=t.children))for(n=0;n<t.children.length;++n)w(t.children[n])}function x(t,e,n){for(;e<=n;++e){var r=t[e];a(r)&&(a(r.tag)?(C(r),w(r)):f(r.elm))}}function C(t,e){if(a(e)||a(t.data)){var n,i=r.remove.length+1;for(a(e)?e.listeners+=i:e=function(t,e){function n(){0==--n.listeners&&f(t)}return n.listeners=e,n}(t.elm,i),a(n=t.componentInstance)&&a(n=n._vnode)&&a(n.data)&&C(n,e),n=0;n<r.remove.length;++n)r.remove[n](t,e);a(n=t.data.hook)&&a(n=n.remove)?n(t,e):e()}else f(t.elm)}function A(t,e,n,r){for(var i=n;i<r;i++){var o=e[i];if(a(o)&&Pr(t,o))return i}}function O(t,e,n,i,c,u){if(t!==e){a(e.elm)&&a(i)&&(e=i[c]=mt(e));var f=e.elm=t.elm;if(s(t.isAsyncPlaceholder))a(e.asyncFactory.resolved)?E(t.elm,e,n):e.isAsyncPlaceholder=!0;else if(s(e.isStatic)&&s(t.isStatic)&&e.key===t.key&&(s(e.isCloned)||s(e.isOnce)))e.componentInstance=t.componentInstance;else{var d,h=e.data;a(h)&&a(d=h.hook)&&a(d=d.prepatch)&&d(t,e);var v=t.children,m=e.children;if(a(h)&&g(e)){for(d=0;d<r.update.length;++d)r.update[d](t,e);a(d=h.hook)&&a(d=d.update)&&d(t,e)}o(e.text)?a(v)&&a(m)?v!==m&&function(t,e,n,r,i){var s,c,u,f=0,d=0,h=e.length-1,v=e[0],g=e[h],m=n.length-1,_=n[0],y=n[m],w=!i;for(;f<=h&&d<=m;)o(v)?v=e[++f]:o(g)?g=e[--h]:Pr(v,_)?(O(v,_,r,n,d),v=e[++f],_=n[++d]):Pr(g,y)?(O(g,y,r,n,m),g=e[--h],y=n[--m]):Pr(v,y)?(O(v,y,r,n,m),w&&l.insertBefore(t,v.elm,l.nextSibling(g.elm)),v=e[++f],y=n[--m]):Pr(g,_)?(O(g,_,r,n,d),w&&l.insertBefore(t,g.elm,v.elm),g=e[--h],_=n[++d]):(o(s)&&(s=Mr(e,f,h)),o(c=a(_.key)?s[_.key]:A(_,e,f,h))?p(_,r,t,v.elm,!1,n,d):Pr(u=e[c],_)?(O(u,_,r,n,d),e[c]=void 0,w&&l.insertBefore(t,u.elm,v.elm)):p(_,r,t,v.elm,!1,n,d),_=n[++d]);f>h?b(t,o(n[m+1])?null:n[m+1].elm,n,d,m,r):d>m&&x(e,f,h)}(f,v,m,n,u):a(m)?(a(t.text)&&l.setTextContent(f,""),b(f,null,m,0,m.length-1,n)):a(v)?x(v,0,v.length-1):a(t.text)&&l.setTextContent(f,""):t.text!==e.text&&l.setTextContent(f,e.text),a(h)&&a(d=h.hook)&&a(d=d.postpatch)&&d(t,e)}}}function k(t,e,n){if(s(n)&&a(t.parent))t.parent.data.pendingInsert=e;else for(var r=0;r<e.length;++r)e[r].data.hook.insert(e[r])}var $=_("attrs,class,staticClass,staticStyle,key");function E(t,e,n,r){var i,o=e.tag,c=e.data,u=e.children;if(r=r||c&&c.pre,e.elm=t,s(e.isComment)&&a(e.asyncFactory))return e.isAsyncPlaceholder=!0,!0;if(a(c)&&(a(i=c.hook)&&a(i=i.init)&&i(e,!0),a(i=e.componentInstance)))return d(e,n),!0;if(a(o)){if(a(u))if(t.hasChildNodes())if(a(i=c)&&a(i=i.domProps)&&a(i=i.innerHTML)){if(i!==t.innerHTML)return!1}else{for(var l=!0,f=t.firstChild,p=0;p<u.length;p++){if(!f||!E(f,u[p],n,r)){l=!1;break}f=f.nextSibling}if(!l||f)return!1}else v(e,u,n);if(a(c)){var h=!1;for(var g in c)if(!$(g)){h=!0,m(e,n);break}!h&&c.class&&gn(c.class)}}else t.data!==e.text&&(t.data=e.text);return!0}return function(t,e,n,i){if(!o(e)){var c,u=!1,f=[];if(o(t))u=!0,p(e,f);else{var d=a(t.nodeType);if(!d&&Pr(t,e))O(t,e,f,null,null,i);else{if(d){if(1===t.nodeType&&t.hasAttribute(z)&&(t.removeAttribute(z),n=!0),s(n)&&E(t,e,f))return k(e,f,!0),t;c=t,t=new ht(l.tagName(c).toLowerCase(),{},[],void 0,c)}var h=t.elm,v=l.parentNode(h);if(p(e,f,h._leaveCb?null:v,l.nextSibling(h)),a(e.parent))for(var m=e.parent,_=g(e);m;){for(var y=0;y<r.destroy.length;++y)r.destroy[y](m);if(m.elm=e.elm,_){for(var b=0;b<r.create.length;++b)r.create[b](Dr,m);var C=m.data.hook.insert;if(C.merged)for(var A=1;A<C.fns.length;A++)C.fns[A]()}else Lr(m);m=m.parent}a(v)?x([t],0,0):a(t.tag)&&w(t)}}return k(e,f,u),e.elm}a(t)&&w(t)}}({nodeOps:Sr,modules:[Jr,ni,Di,Mi,Ji,Z?{create:wo,activate:wo,remove:function(t,e){!0!==t.data.show?_o(t,e):e()}}:{}].concat(Wr)});G&&document.addEventListener("selectionchange",(function(){var t=document.activeElement;t&&t.vmodel&&So(t,"input")}));var Co={inserted:function(t,e,n,r){"select"===n.tag?(r.elm&&!r.elm._vOptions?qt(n,"postpatch",(function(){Co.componentUpdated(t,e,n)})):Ao(t,e,n.context),t._vOptions=[].map.call(t.options,$o)):("textarea"===n.tag||Er(t.type))&&(t._vModifiers=e.modifiers,e.modifiers.lazy||(t.addEventListener("compositionstart",Eo),t.addEventListener("compositionend",To),t.addEventListener("change",To),G&&(t.vmodel=!0)))},componentUpdated:function(t,e,n){if("select"===n.tag){Ao(t,e,n.context);var r=t._vOptions,i=t._vOptions=[].map.call(t.options,$o);if(i.some((function(t,e){return!M(t,r[e])})))(t.multiple?e.value.some((function(t){return ko(t,i)})):e.value!==e.oldValue&&ko(e.value,i))&&So(t,"change")}}};function Ao(t,e,n){Oo(t,e,n),(Q||tt)&&setTimeout((function(){Oo(t,e,n)}),0)}function Oo(t,e,n){var r=e.value,i=t.multiple;if(!i||Array.isArray(r)){for(var o,a,s=0,c=t.options.length;s<c;s++)if(a=t.options[s],i)o=R(r,$o(a))>-1,a.selected!==o&&(a.selected=o);else if(M($o(a),r))return void(t.selectedIndex!==s&&(t.selectedIndex=s));i||(t.selectedIndex=-1)}}function ko(t,e){return e.every((function(e){return!M(e,t)}))}function $o(t){return"_value"in t?t._value:t.value}function Eo(t){t.target.composing=!0}function To(t){t.target.composing&&(t.target.composing=!1,So(t.target,"input"))}function So(t,e){var n=document.createEvent("HTMLEvents");n.initEvent(e,!0,!0),t.dispatchEvent(n)}function jo(t){return!t.componentInstance||t.data&&t.data.transition?t:jo(t.componentInstance._vnode)}var Lo={bind:function(t,e,n){var r=e.value,i=(n=jo(n)).data&&n.data.transition,o=t.__vOriginalDisplay="none"===t.style.display?"":t.style.display;r&&i?(n.data.show=!0,mo(n,(function(){t.style.display=o}))):t.style.display=r?o:"none"},update:function(t,e,n){var r=e.value;!r!=!e.oldValue&&((n=jo(n)).data&&n.data.transition?(n.data.show=!0,r?mo(n,(function(){t.style.display=t.__vOriginalDisplay})):_o(n,(function(){t.style.display="none"}))):t.style.display=r?t.__vOriginalDisplay:"none")},unbind:function(t,e,n,r,i){i||(t.style.display=t.__vOriginalDisplay)}},No={model:Co,show:Lo},Do={name:String,appear:Boolean,css:Boolean,mode:String,type:String,enterClass:String,leaveClass:String,enterToClass:String,leaveToClass:String,enterActiveClass:String,leaveActiveClass:String,appearClass:String,appearActiveClass:String,appearToClass:String,duration:[Number,String,Object]};function Io(t){var e=t&&t.componentOptions;return e&&e.Ctor.options.abstract?Io(ke(e.children)):t}function Po(t){var e={},n=t.$options;for(var r in n.propsData)e[r]=t[r];var i=n._parentListeners;for(var r in i)e[k(r)]=i[r];return e}function Mo(t,e){if(/\d-keep-alive$/.test(e.tag))return t("keep-alive",{props:e.componentOptions.propsData})}var Ro=function(t){return t.tag||ve(t)},Fo=function(t){return"show"===t.name},Bo={name:"transition",props:Do,abstract:!0,render:function(t){var e=this,n=this.$slots.default;if(n&&(n=n.filter(Ro)).length){0;var r=this.mode;0;var i=n[0];if(function(t){for(;t=t.parent;)if(t.data.transition)return!0}(this.$vnode))return i;var o=Io(i);if(!o)return i;if(this._leaving)return Mo(t,i);var a="__transition-".concat(this._uid,"-");o.key=null==o.key?o.isComment?a+"comment":a+o.tag:c(o.key)?0===String(o.key).indexOf(a)?o.key:a+o.key:o.key;var s=(o.data||(o.data={})).transition=Po(this),u=this._vnode,l=Io(u);if(o.data.directives&&o.data.directives.some(Fo)&&(o.data.show=!0),l&&l.data&&!function(t,e){return e.key===t.key&&e.tag===t.tag}(o,l)&&!ve(l)&&(!l.componentInstance||!l.componentInstance._vnode.isComment)){var f=l.data.transition=L({},s);if("out-in"===r)return this._leaving=!0,qt(f,"afterLeave",(function(){e._leaving=!1,e.$forceUpdate()})),Mo(t,i);if("in-out"===r){if(ve(o))return u;var p,d=function(){p()};qt(s,"afterEnter",d),qt(s,"enterCancelled",d),qt(f,"delayLeave",(function(t){p=t}))}}return i}}},zo=L({tag:String,moveClass:String},Do);delete zo.mode;var Uo={props:zo,beforeMount:function(){var t=this,e=this._update;this._update=function(n,r){var i=Le(t);t.__patch__(t._vnode,t.kept,!1,!0),t._vnode=t.kept,i(),e.call(t,n,r)}},render:function(t){for(var e=this.tag||this.$vnode.data.tag||"span",n=Object.create(null),r=this.prevChildren=this.children,i=this.$slots.default||[],o=this.children=[],a=Po(this),s=0;s<i.length;s++){if((l=i[s]).tag)if(null!=l.key&&0!==String(l.key).indexOf("__vlist"))o.push(l),n[l.key]=l,(l.data||(l.data={})).transition=a;else;}if(r){var c=[],u=[];for(s=0;s<r.length;s++){var l;(l=r[s]).data.transition=a,l.data.pos=l.elm.getBoundingClientRect(),n[l.key]?c.push(l):u.push(l)}this.kept=t(e,null,c),this.removed=u}return t(e,null,o)},updated:function(){var t=this.prevChildren,e=this.moveClass||(this.name||"v")+"-move";t.length&&this.hasMove(t[0].elm,e)&&(t.forEach(Ho),t.forEach(Wo),t.forEach(qo),this._reflow=document.body.offsetHeight,t.forEach((function(t){if(t.data.moved){var n=t.elm,r=n.style;uo(n,e),r.transform=r.WebkitTransform=r.transitionDuration="",n.addEventListener(io,n._moveCb=function t(r){r&&r.target!==n||r&&!/transform$/.test(r.propertyName)||(n.removeEventListener(io,t),n._moveCb=null,lo(n,e))})}})))},methods:{hasMove:function(t,e){if(!to)return!1;if(this._hasMove)return this._hasMove;var n=t.cloneNode();t._transitionClasses&&t._transitionClasses.forEach((function(t){Yi(n,t)})),Zi(n,e),n.style.display="none",this.$el.appendChild(n);var r=ho(n);return this.$el.removeChild(n),this._hasMove=r.hasTransform}}};function Ho(t){t.elm._moveCb&&t.elm._moveCb(),t.elm._enterCb&&t.elm._enterCb()}function Wo(t){t.data.newPos=t.elm.getBoundingClientRect()}function qo(t){var e=t.data.pos,n=t.data.newPos,r=e.left-n.left,i=e.top-n.top;if(r||i){t.data.moved=!0;var o=t.elm.style;o.transform=o.WebkitTransform="translate(".concat(r,"px,").concat(i,"px)"),o.transitionDuration="0s"}}var Vo={Transition:Bo,TransitionGroup:Uo};Gn.config.mustUseProp=lr,Gn.config.isReservedTag=Or,Gn.config.isReservedAttr=cr,Gn.config.getTagNamespace=kr,Gn.config.isUnknownElement=function(t){if(!Z)return!0;if(Or(t))return!1;if(t=t.toLowerCase(),null!=$r[t])return $r[t];var e=document.createElement(t);return t.indexOf("-")>-1?$r[t]=e.constructor===window.HTMLUnknownElement||e.constructor===window.HTMLElement:$r[t]=/HTMLUnknownElement/.test(e.toString())},L(Gn.options.directives,No),L(Gn.options.components,Vo),Gn.prototype.__patch__=Z?xo:D,Gn.prototype.$mount=function(t,e){return function(t,e,n){var r;t.$el=e,t.$options.render||(t.$options.render=vt),Pe(t,"beforeMount"),r=function(){t._update(t._render(),n)},new yn(t,r,D,{before:function(){t._isMounted&&!t._isDestroyed&&Pe(t,"beforeUpdate")}},!0),n=!1;var i=t._preWatchers;if(i)for(var o=0;o<i.length;o++)i[o].run();return null==t.$vnode&&(t._isMounted=!0,Pe(t,"mounted")),t}(this,t=t&&Z?Tr(t):void 0,e)},Z&&setTimeout((function(){W.devtools&&ct&&ct.emit("init",Gn)}),0);var Ko=/\{\{((?:.|\r?\n)+?)\}\}/g,Jo=/[-.*+?^${}()|[\]\/\\]/g,Xo=A((function(t){var e=t[0].replace(Jo,"\\$&"),n=t[1].replace(Jo,"\\$&");return new RegExp(e+"((?:.|\\n)+?)"+n,"g")}));var Zo={staticKeys:["staticClass"],transformNode:function(t,e){e.warn;var n=vi(t,"class");n&&(t.staticClass=JSON.stringify(n.replace(/\s+/g," ").trim()));var r=hi(t,"class",!1);r&&(t.classBinding=r)},genData:function(t){var e="";return t.staticClass&&(e+="staticClass:".concat(t.staticClass,",")),t.classBinding&&(e+="class:".concat(t.classBinding,",")),e}};var Yo,Qo={staticKeys:["staticStyle"],transformNode:function(t,e){e.warn;var n=vi(t,"style");n&&(t.staticStyle=JSON.stringify(Ri(n)));var r=hi(t,"style",!1);r&&(t.styleBinding=r)},genData:function(t){var e="";return t.staticStyle&&(e+="staticStyle:".concat(t.staticStyle,",")),t.styleBinding&&(e+="style:(".concat(t.styleBinding,"),")),e}},Go=function(t){return(Yo=Yo||document.createElement("div")).innerHTML=t,Yo.textContent},ta=_("area,base,br,col,embed,frame,hr,img,input,isindex,keygen,link,meta,param,source,track,wbr"),ea=_("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr,source"),na=_("address,article,aside,base,blockquote,body,caption,col,colgroup,dd,details,dialog,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,legend,li,menuitem,meta,optgroup,option,param,rp,rt,source,style,summary,tbody,td,tfoot,th,thead,title,tr,track"),ra=/^\s*([^\s"'<>\/=]+)(?:\s*(=)\s*(?:"([^"]*)"+|'([^']*)'+|([^\s"'=<>`]+)))?/,ia=/^\s*((?:v-[\w-]+:|@|:|#)\[[^=]+?\][^\s"'<>\/=]*)(?:\s*(=)\s*(?:"([^"]*)"+|'([^']*)'+|([^\s"'=<>`]+)))?/,oa="[a-zA-Z_][\\-\\.0-9_a-zA-Z".concat(q.source,"]*"),aa="((?:".concat(oa,"\\:)?").concat(oa,")"),sa=new RegExp("^<".concat(aa)),ca=/^\s*(\/?)>/,ua=new RegExp("^<\\/".concat(aa,"[^>]*>")),la=/^<!DOCTYPE [^>]+>/i,fa=/^<!\--/,pa=/^<!\[/,da=_("script,style,textarea",!0),ha={},va={"&lt;":"<","&gt;":">","&quot;":'"',"&amp;":"&","&#10;":"\n","&#9;":"\t","&#39;":"'"},ga=/&(?:lt|gt|quot|amp|#39);/g,ma=/&(?:lt|gt|quot|amp|#39|#10|#9);/g,_a=_("pre,textarea",!0),ya=function(t,e){return t&&_a(t)&&"\n"===e[0]};function ba(t,e){var n=e?ma:ga;return t.replace(n,(function(t){return va[t]}))}function wa(t,e){for(var n,r,i=[],o=e.expectHTML,a=e.isUnaryTag||I,s=e.canBeLeftOpenTag||I,c=0,u=function(){if(n=t,r&&da(r)){var u=0,p=r.toLowerCase(),d=ha[p]||(ha[p]=new RegExp("([\\s\\S]*?)(</"+p+"[^>]*>)","i"));x=t.replace(d,(function(t,n,r){return u=r.length,da(p)||"noscript"===p||(n=n.replace(/<!\--([\s\S]*?)-->/g,"$1").replace(/<!\[CDATA\[([\s\S]*?)]]>/g,"$1")),ya(p,n)&&(n=n.slice(1)),e.chars&&e.chars(n),""}));c+=t.length-x.length,t=x,f(p,c-u,c)}else{var h=t.indexOf("<");if(0===h){if(fa.test(t)){var v=t.indexOf("--\x3e");if(v>=0)return e.shouldKeepComment&&e.comment&&e.comment(t.substring(4,v),c,c+v+3),l(v+3),"continue"}if(pa.test(t)){var g=t.indexOf("]>");if(g>=0)return l(g+2),"continue"}var m=t.match(la);if(m)return l(m[0].length),"continue";var _=t.match(ua);if(_){var y=c;return l(_[0].length),f(_[1],y,c),"continue"}var b=function(){var e=t.match(sa);if(e){var n={tagName:e[1],attrs:[],start:c};l(e[0].length);for(var r=void 0,i=void 0;!(r=t.match(ca))&&(i=t.match(ia)||t.match(ra));)i.start=c,l(i[0].length),i.end=c,n.attrs.push(i);if(r)return n.unarySlash=r[1],l(r[0].length),n.end=c,n}}();if(b)return function(t){var n=t.tagName,c=t.unarySlash;o&&("p"===r&&na(n)&&f(r),s(n)&&r===n&&f(n));for(var u=a(n)||!!c,l=t.attrs.length,p=new Array(l),d=0;d<l;d++){var h=t.attrs[d],v=h[3]||h[4]||h[5]||"",g="a"===n&&"href"===h[1]?e.shouldDecodeNewlinesForHref:e.shouldDecodeNewlines;p[d]={name:h[1],value:ba(v,g)}}u||(i.push({tag:n,lowerCasedTag:n.toLowerCase(),attrs:p,start:t.start,end:t.end}),r=n);e.start&&e.start(n,p,u,t.start,t.end)}(b),ya(b.tagName,t)&&l(1),"continue"}var w=void 0,x=void 0,C=void 0;if(h>=0){for(x=t.slice(h);!(ua.test(x)||sa.test(x)||fa.test(x)||pa.test(x)||(C=x.indexOf("<",1))<0);)h+=C,x=t.slice(h);w=t.substring(0,h)}h<0&&(w=t),w&&l(w.length),e.chars&&w&&e.chars(w,c-w.length,c)}if(t===n)return e.chars&&e.chars(t),"break"};t;){if("break"===u())break}function l(e){c+=e,t=t.substring(e)}function f(t,n,o){var a,s;if(null==n&&(n=c),null==o&&(o=c),t)for(s=t.toLowerCase(),a=i.length-1;a>=0&&i[a].lowerCasedTag!==s;a--);else a=0;if(a>=0){for(var u=i.length-1;u>=a;u--)e.end&&e.end(i[u].tag,n,o);i.length=a,r=a&&i[a-1].tag}else"br"===s?e.start&&e.start(t,[],!0,n,o):"p"===s&&(e.start&&e.start(t,[],!1,n,o),e.end&&e.end(t,n,o))}f()}var xa,Ca,Aa,Oa,ka,$a,Ea,Ta,Sa=/^@|^v-on:/,ja=/^v-|^@|^:|^#/,La=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,Na=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,Da=/^\(|\)$/g,Ia=/^\[.*\]$/,Pa=/:(.*)$/,Ma=/^:|^\.|^v-bind:/,Ra=/\.[^.\]]+(?=[^\]]*$)/g,Fa=/^v-slot(:|$)|^#/,Ba=/[\r\n]/,za=/[ \f\t\r\n]+/g,Ua=A(Go),Ha="_empty_";function Wa(t,e,n){return{type:1,tag:t,attrsList:e,attrsMap:Ya(e),rawAttrsMap:{},parent:n,children:[]}}function qa(t,e){xa=e.warn||ai,$a=e.isPreTag||I,Ea=e.mustUseProp||I,Ta=e.getTagNamespace||I;var n=e.isReservedTag||I;(function(t){return!(!(t.component||t.attrsMap[":is"]||t.attrsMap["v-bind:is"])&&(t.attrsMap.is?n(t.attrsMap.is):n(t.tag)))}),Aa=si(e.modules,"transformNode"),Oa=si(e.modules,"preTransformNode"),ka=si(e.modules,"postTransformNode"),Ca=e.delimiters;var r,i,o=[],a=!1!==e.preserveWhitespace,s=e.whitespace,c=!1,u=!1;function l(t){if(f(t),c||t.processed||(t=Va(t,e)),o.length||t===r||r.if&&(t.elseif||t.else)&&Ja(r,{exp:t.elseif,block:t}),i&&!t.forbidden)if(t.elseif||t.else)a=t,s=function(t){for(var e=t.length;e--;){if(1===t[e].type)return t[e];t.pop()}}(i.children),s&&s.if&&Ja(s,{exp:a.elseif,block:a});else{if(t.slotScope){var n=t.slotTarget||'"default"';(i.scopedSlots||(i.scopedSlots={}))[n]=t}i.children.push(t),t.parent=i}var a,s;t.children=t.children.filter((function(t){return!t.slotScope})),f(t),t.pre&&(c=!1),$a(t.tag)&&(u=!1);for(var l=0;l<ka.length;l++)ka[l](t,e)}function f(t){if(!u)for(var e=void 0;(e=t.children[t.children.length-1])&&3===e.type&&" "===e.text;)t.children.pop()}return wa(t,{warn:xa,expectHTML:e.expectHTML,isUnaryTag:e.isUnaryTag,canBeLeftOpenTag:e.canBeLeftOpenTag,shouldDecodeNewlines:e.shouldDecodeNewlines,shouldDecodeNewlinesForHref:e.shouldDecodeNewlinesForHref,shouldKeepComment:e.comments,outputSourceRange:e.outputSourceRange,start:function(t,n,a,s,f){var p=i&&i.ns||Ta(t);Q&&"svg"===p&&(n=function(t){for(var e=[],n=0;n<t.length;n++){var r=t[n];Qa.test(r.name)||(r.name=r.name.replace(Ga,""),e.push(r))}return e}(n));var d,h=Wa(t,n,i);p&&(h.ns=p),"style"!==(d=h).tag&&("script"!==d.tag||d.attrsMap.type&&"text/javascript"!==d.attrsMap.type)||st()||(h.forbidden=!0);for(var v=0;v<Oa.length;v++)h=Oa[v](h,e)||h;c||(!function(t){null!=vi(t,"v-pre")&&(t.pre=!0)}(h),h.pre&&(c=!0)),$a(h.tag)&&(u=!0),c?function(t){var e=t.attrsList,n=e.length;if(n)for(var r=t.attrs=new Array(n),i=0;i<n;i++)r[i]={name:e[i].name,value:JSON.stringify(e[i].value)},null!=e[i].start&&(r[i].start=e[i].start,r[i].end=e[i].end);else t.pre||(t.plain=!0)}(h):h.processed||(Ka(h),function(t){var e=vi(t,"v-if");if(e)t.if=e,Ja(t,{exp:e,block:t});else{null!=vi(t,"v-else")&&(t.else=!0);var n=vi(t,"v-else-if");n&&(t.elseif=n)}}(h),function(t){var e=vi(t,"v-once");null!=e&&(t.once=!0)}(h)),r||(r=h),a?l(h):(i=h,o.push(h))},end:function(t,e,n){var r=o[o.length-1];o.length-=1,i=o[o.length-1],l(r)},chars:function(t,e,n){if(i&&(!Q||"textarea"!==i.tag||i.attrsMap.placeholder!==t)){var r,o=i.children;if(t=u||t.trim()?"script"===(r=i).tag||"style"===r.tag?t:Ua(t):o.length?s?"condense"===s&&Ba.test(t)?"":" ":a?" ":"":""){u||"condense"!==s||(t=t.replace(za," "));var l=void 0,f=void 0;!c&&" "!==t&&(l=function(t,e){var n=e?Xo(e):Ko;if(n.test(t)){for(var r,i,o,a=[],s=[],c=n.lastIndex=0;r=n.exec(t);){(i=r.index)>c&&(s.push(o=t.slice(c,i)),a.push(JSON.stringify(o)));var u=ii(r[1].trim());a.push("_s(".concat(u,")")),s.push({"@binding":u}),c=i+r[0].length}return c<t.length&&(s.push(o=t.slice(c)),a.push(JSON.stringify(o))),{expression:a.join("+"),tokens:s}}}(t,Ca))?f={type:2,expression:l.expression,tokens:l.tokens,text:t}:" "===t&&o.length&&" "===o[o.length-1].text||(f={type:3,text:t}),f&&o.push(f)}}},comment:function(t,e,n){if(i){var r={type:3,text:t,isComment:!0};0,i.children.push(r)}}}),r}function Va(t,e){var n;!function(t){var e=hi(t,"key");if(e){t.key=e}}(t),t.plain=!t.key&&!t.scopedSlots&&!t.attrsList.length,function(t){var e=hi(t,"ref");e&&(t.ref=e,t.refInFor=function(t){var e=t;for(;e;){if(void 0!==e.for)return!0;e=e.parent}return!1}(t))}(t),function(t){var e;"template"===t.tag?(e=vi(t,"scope"),t.slotScope=e||vi(t,"slot-scope")):(e=vi(t,"slot-scope"))&&(t.slotScope=e);var n=hi(t,"slot");n&&(t.slotTarget='""'===n?'"default"':n,t.slotTargetDynamic=!(!t.attrsMap[":slot"]&&!t.attrsMap["v-bind:slot"]),"template"===t.tag||t.slotScope||ui(t,"slot",n,function(t,e){return t.rawAttrsMap[":"+e]||t.rawAttrsMap["v-bind:"+e]||t.rawAttrsMap[e]}(t,"slot")));if("template"===t.tag){if(a=gi(t,Fa)){0;var r=Xa(a),i=r.name,o=r.dynamic;t.slotTarget=i,t.slotTargetDynamic=o,t.slotScope=a.value||Ha}}else{var a;if(a=gi(t,Fa)){0;var s=t.scopedSlots||(t.scopedSlots={}),c=Xa(a),u=c.name,l=(o=c.dynamic,s[u]=Wa("template",[],t));l.slotTarget=u,l.slotTargetDynamic=o,l.children=t.children.filter((function(t){if(!t.slotScope)return t.parent=l,!0})),l.slotScope=a.value||Ha,t.children=[],t.plain=!1}}}(t),"slot"===(n=t).tag&&(n.slotName=hi(n,"name")),function(t){var e;(e=hi(t,"is"))&&(t.component=e);null!=vi(t,"inline-template")&&(t.inlineTemplate=!0)}(t);for(var r=0;r<Aa.length;r++)t=Aa[r](t,e)||t;return function(t){var e,n,r,i,o,a,s,c,u=t.attrsList;for(e=0,n=u.length;e<n;e++){if(r=i=u[e].name,o=u[e].value,ja.test(r))if(t.hasBindings=!0,(a=Za(r.replace(ja,"")))&&(r=r.replace(Ra,"")),Ma.test(r))r=r.replace(Ma,""),o=ii(o),(c=Ia.test(r))&&(r=r.slice(1,-1)),a&&(a.prop&&!c&&"innerHtml"===(r=k(r))&&(r="innerHTML"),a.camel&&!c&&(r=k(r)),a.sync&&(s=yi(o,"$event"),c?di(t,'"update:"+('.concat(r,")"),s,null,!1,0,u[e],!0):(di(t,"update:".concat(k(r)),s,null,!1,0,u[e]),T(r)!==k(r)&&di(t,"update:".concat(T(r)),s,null,!1,0,u[e])))),a&&a.prop||!t.component&&Ea(t.tag,t.attrsMap.type,r)?ci(t,r,o,u[e],c):ui(t,r,o,u[e],c);else if(Sa.test(r))r=r.replace(Sa,""),(c=Ia.test(r))&&(r=r.slice(1,-1)),di(t,r,o,a,!1,0,u[e],c);else{var l=(r=r.replace(ja,"")).match(Pa),f=l&&l[1];c=!1,f&&(r=r.slice(0,-(f.length+1)),Ia.test(f)&&(f=f.slice(1,-1),c=!0)),fi(t,r,i,o,f,c,a,u[e])}else ui(t,r,JSON.stringify(o),u[e]),!t.component&&"muted"===r&&Ea(t.tag,t.attrsMap.type,r)&&ci(t,r,"true",u[e])}}(t),t}function Ka(t){var e;if(e=vi(t,"v-for")){var n=function(t){var e=t.match(La);if(!e)return;var n={};n.for=e[2].trim();var r=e[1].trim().replace(Da,""),i=r.match(Na);i?(n.alias=r.replace(Na,"").trim(),n.iterator1=i[1].trim(),i[2]&&(n.iterator2=i[2].trim())):n.alias=r;return n}(e);n&&L(t,n)}}function Ja(t,e){t.ifConditions||(t.ifConditions=[]),t.ifConditions.push(e)}function Xa(t){var e=t.name.replace(Fa,"");return e||"#"!==t.name[0]&&(e="default"),Ia.test(e)?{name:e.slice(1,-1),dynamic:!0}:{name:'"'.concat(e,'"'),dynamic:!1}}function Za(t){var e=t.match(Ra);if(e){var n={};return e.forEach((function(t){n[t.slice(1)]=!0})),n}}function Ya(t){for(var e={},n=0,r=t.length;n<r;n++)e[t[n].name]=t[n].value;return e}var Qa=/^xmlns:NS\d+/,Ga=/^NS\d+:/;function ts(t){return Wa(t.tag,t.attrsList.slice(),t.parent)}var es=[Zo,Qo,{preTransformNode:function(t,e){if("input"===t.tag){var n=t.attrsMap;if(!n["v-model"])return;var r=void 0;if((n[":type"]||n["v-bind:type"])&&(r=hi(t,"type")),n.type||r||!n["v-bind"]||(r="(".concat(n["v-bind"],").type")),r){var i=vi(t,"v-if",!0),o=i?"&&(".concat(i,")"):"",a=null!=vi(t,"v-else",!0),s=vi(t,"v-else-if",!0),c=ts(t);Ka(c),li(c,"type","checkbox"),Va(c,e),c.processed=!0,c.if="(".concat(r,")==='checkbox'")+o,Ja(c,{exp:c.if,block:c});var u=ts(t);vi(u,"v-for",!0),li(u,"type","radio"),Va(u,e),Ja(c,{exp:"(".concat(r,")==='radio'")+o,block:u});var l=ts(t);return vi(l,"v-for",!0),li(l,":type",r),Va(l,e),Ja(c,{exp:i,block:l}),a?c.else=!0:s&&(c.elseif=s),c}}}}];var ns,rs,is={model:function(t,e,n){n;var r=e.value,i=e.modifiers,o=t.tag,a=t.attrsMap.type;if(t.component)return _i(t,r,i),!1;if("select"===o)!function(t,e,n){var r=n&&n.number,i='Array.prototype.filter.call($event.target.options,function(o){return o.selected}).map(function(o){var val = "_value" in o ? o._value : o.value;'+"return ".concat(r?"_n(val)":"val","})"),o="$event.target.multiple ? $$selectedVal : $$selectedVal[0]",a="var $$selectedVal = ".concat(i,";");a="".concat(a," ").concat(yi(e,o)),di(t,"change",a,null,!0)}(t,r,i);else if("input"===o&&"checkbox"===a)!function(t,e,n){var r=n&&n.number,i=hi(t,"value")||"null",o=hi(t,"true-value")||"true",a=hi(t,"false-value")||"false";ci(t,"checked","Array.isArray(".concat(e,")")+"?_i(".concat(e,",").concat(i,")>-1")+("true"===o?":(".concat(e,")"):":_q(".concat(e,",").concat(o,")"))),di(t,"change","var $$a=".concat(e,",")+"$$el=$event.target,"+"$$c=$$el.checked?(".concat(o,"):(").concat(a,");")+"if(Array.isArray($$a)){"+"var $$v=".concat(r?"_n("+i+")":i,",")+"$$i=_i($$a,$$v);"+"if($$el.checked){$$i<0&&(".concat(yi(e,"$$a.concat([$$v])"),")}")+"else{$$i>-1&&(".concat(yi(e,"$$a.slice(0,$$i).concat($$a.slice($$i+1))"),")}")+"}else{".concat(yi(e,"$$c"),"}"),null,!0)}(t,r,i);else if("input"===o&&"radio"===a)!function(t,e,n){var r=n&&n.number,i=hi(t,"value")||"null";i=r?"_n(".concat(i,")"):i,ci(t,"checked","_q(".concat(e,",").concat(i,")")),di(t,"change",yi(e,i),null,!0)}(t,r,i);else if("input"===o||"textarea"===o)!function(t,e,n){var r=t.attrsMap.type;0;var i=n||{},o=i.lazy,a=i.number,s=i.trim,c=!o&&"range"!==r,u=o?"change":"range"===r?ki:"input",l="$event.target.value";s&&(l="$event.target.value.trim()");a&&(l="_n(".concat(l,")"));var f=yi(e,l);c&&(f="if($event.target.composing)return;".concat(f));ci(t,"value","(".concat(e,")")),di(t,u,f,null,!0),(s||a)&&di(t,"blur","$forceUpdate()")}(t,r,i);else{if(!W.isReservedTag(o))return _i(t,r,i),!1}return!0},text:function(t,e){e.value&&ci(t,"textContent","_s(".concat(e.value,")"),e)},html:function(t,e){e.value&&ci(t,"innerHTML","_s(".concat(e.value,")"),e)}},os={expectHTML:!0,modules:es,directives:is,isPreTag:function(t){return"pre"===t},isUnaryTag:ta,mustUseProp:lr,canBeLeftOpenTag:ea,isReservedTag:Or,getTagNamespace:kr,staticKeys:function(t){return t.reduce((function(t,e){return t.concat(e.staticKeys||[])}),[]).join(",")}(es)},as=A((function(t){return _("type,tag,attrsList,attrsMap,plain,parent,children,attrs,start,end,rawAttrsMap"+(t?","+t:""))}));function ss(t,e){t&&(ns=as(e.staticKeys||""),rs=e.isReservedTag||I,cs(t),us(t,!1))}function cs(t){if(t.static=function(t){if(2===t.type)return!1;if(3===t.type)return!0;return!(!t.pre&&(t.hasBindings||t.if||t.for||y(t.tag)||!rs(t.tag)||function(t){for(;t.parent;){if("template"!==(t=t.parent).tag)return!1;if(t.for)return!0}return!1}(t)||!Object.keys(t).every(ns)))}(t),1===t.type){if(!rs(t.tag)&&"slot"!==t.tag&&null==t.attrsMap["inline-template"])return;for(var e=0,n=t.children.length;e<n;e++){var r=t.children[e];cs(r),r.static||(t.static=!1)}if(t.ifConditions)for(e=1,n=t.ifConditions.length;e<n;e++){var i=t.ifConditions[e].block;cs(i),i.static||(t.static=!1)}}}function us(t,e){if(1===t.type){if((t.static||t.once)&&(t.staticInFor=e),t.static&&t.children.length&&(1!==t.children.length||3!==t.children[0].type))return void(t.staticRoot=!0);if(t.staticRoot=!1,t.children)for(var n=0,r=t.children.length;n<r;n++)us(t.children[n],e||!!t.for);if(t.ifConditions)for(n=1,r=t.ifConditions.length;n<r;n++)us(t.ifConditions[n].block,e)}}var ls=/^([\w$_]+|\([^)]*?\))\s*=>|^function(?:\s+[\w$]+)?\s*\(/,fs=/\([^)]*?\);*$/,ps=/^[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['[^']*?']|\["[^"]*?"]|\[\d+]|\[[A-Za-z_$][\w$]*])*$/,ds={esc:27,tab:9,enter:13,space:32,up:38,left:37,right:39,down:40,delete:[8,46]},hs={esc:["Esc","Escape"],tab:"Tab",enter:"Enter",space:[" ","Spacebar"],up:["Up","ArrowUp"],left:["Left","ArrowLeft"],right:["Right","ArrowRight"],down:["Down","ArrowDown"],delete:["Backspace","Delete","Del"]},vs=function(t){return"if(".concat(t,")return null;")},gs={stop:"$event.stopPropagation();",prevent:"$event.preventDefault();",self:vs("$event.target !== $event.currentTarget"),ctrl:vs("!$event.ctrlKey"),shift:vs("!$event.shiftKey"),alt:vs("!$event.altKey"),meta:vs("!$event.metaKey"),left:vs("'button' in $event && $event.button !== 0"),middle:vs("'button' in $event && $event.button !== 1"),right:vs("'button' in $event && $event.button !== 2")};function ms(t,e){var n=e?"nativeOn:":"on:",r="",i="";for(var o in t){var a=_s(t[o]);t[o]&&t[o].dynamic?i+="".concat(o,",").concat(a,","):r+='"'.concat(o,'":').concat(a,",")}return r="{".concat(r.slice(0,-1),"}"),i?n+"_d(".concat(r,",[").concat(i.slice(0,-1),"])"):n+r}function _s(t){if(!t)return"function(){}";if(Array.isArray(t))return"[".concat(t.map((function(t){return _s(t)})).join(","),"]");var e=ps.test(t.value),n=ls.test(t.value),r=ps.test(t.value.replace(fs,""));if(t.modifiers){var i="",o="",a=[],s=function(e){if(gs[e])o+=gs[e],ds[e]&&a.push(e);else if("exact"===e){var n=t.modifiers;o+=vs(["ctrl","shift","alt","meta"].filter((function(t){return!n[t]})).map((function(t){return"$event.".concat(t,"Key")})).join("||"))}else a.push(e)};for(var c in t.modifiers)s(c);a.length&&(i+=function(t){return"if(!$event.type.indexOf('key')&&"+"".concat(t.map(ys).join("&&"),")return null;")}(a)),o&&(i+=o);var u=e?"return ".concat(t.value,".apply(null, arguments)"):n?"return (".concat(t.value,").apply(null, arguments)"):r?"return ".concat(t.value):t.value;return"function($event){".concat(i).concat(u,"}")}return e||n?t.value:"function($event){".concat(r?"return ".concat(t.value):t.value,"}")}function ys(t){var e=parseInt(t,10);if(e)return"$event.keyCode!==".concat(e);var n=ds[t],r=hs[t];return"_k($event.keyCode,"+"".concat(JSON.stringify(t),",")+"".concat(JSON.stringify(n),",")+"$event.key,"+"".concat(JSON.stringify(r))+")"}var bs={on:function(t,e){t.wrapListeners=function(t){return"_g(".concat(t,",").concat(e.value,")")}},bind:function(t,e){t.wrapData=function(n){return"_b(".concat(n,",'").concat(t.tag,"',").concat(e.value,",").concat(e.modifiers&&e.modifiers.prop?"true":"false").concat(e.modifiers&&e.modifiers.sync?",true":"",")")}},cloak:D},ws=function(t){this.options=t,this.warn=t.warn||ai,this.transforms=si(t.modules,"transformCode"),this.dataGenFns=si(t.modules,"genData"),this.directives=L(L({},bs),t.directives);var e=t.isReservedTag||I;this.maybeComponent=function(t){return!!t.component||!e(t.tag)},this.onceId=0,this.staticRenderFns=[],this.pre=!1};function xs(t,e){var n=new ws(e),r=t?"script"===t.tag?"null":Cs(t,n):'_c("div")';return{render:"with(this){return ".concat(r,"}"),staticRenderFns:n.staticRenderFns}}function Cs(t,e){if(t.parent&&(t.pre=t.pre||t.parent.pre),t.staticRoot&&!t.staticProcessed)return As(t,e);if(t.once&&!t.onceProcessed)return Os(t,e);if(t.for&&!t.forProcessed)return Es(t,e);if(t.if&&!t.ifProcessed)return ks(t,e);if("template"!==t.tag||t.slotTarget||e.pre){if("slot"===t.tag)return function(t,e){var n=t.slotName||'"default"',r=Ls(t,e),i="_t(".concat(n).concat(r?",function(){return ".concat(r,"}"):""),o=t.attrs||t.dynamicAttrs?Is((t.attrs||[]).concat(t.dynamicAttrs||[]).map((function(t){return{name:k(t.name),value:t.value,dynamic:t.dynamic}}))):null,a=t.attrsMap["v-bind"];!o&&!a||r||(i+=",null");o&&(i+=",".concat(o));a&&(i+="".concat(o?"":",null",",").concat(a));return i+")"}(t,e);var n=void 0;if(t.component)n=function(t,e,n){var r=e.inlineTemplate?null:Ls(e,n,!0);return"_c(".concat(t,",").concat(Ts(e,n)).concat(r?",".concat(r):"",")")}(t.component,t,e);else{var r=void 0,i=e.maybeComponent(t);(!t.plain||t.pre&&i)&&(r=Ts(t,e));var o=void 0,a=e.options.bindings;i&&a&&!1!==a.__isScriptSetup&&(o=function(t,e){var n=k(e),r=$(n),i=function(i){return t[e]===i?e:t[n]===i?n:t[r]===i?r:void 0},o=i("setup-const")||i("setup-reactive-const");if(o)return o;var a=i("setup-let")||i("setup-ref")||i("setup-maybe-ref");if(a)return a}(a,t.tag)),o||(o="'".concat(t.tag,"'"));var s=t.inlineTemplate?null:Ls(t,e,!0);n="_c(".concat(o).concat(r?",".concat(r):"").concat(s?",".concat(s):"",")")}for(var c=0;c<e.transforms.length;c++)n=e.transforms[c](t,n);return n}return Ls(t,e)||"void 0"}function As(t,e){t.staticProcessed=!0;var n=e.pre;return t.pre&&(e.pre=t.pre),e.staticRenderFns.push("with(this){return ".concat(Cs(t,e),"}")),e.pre=n,"_m(".concat(e.staticRenderFns.length-1).concat(t.staticInFor?",true":"",")")}function Os(t,e){if(t.onceProcessed=!0,t.if&&!t.ifProcessed)return ks(t,e);if(t.staticInFor){for(var n="",r=t.parent;r;){if(r.for){n=r.key;break}r=r.parent}return n?"_o(".concat(Cs(t,e),",").concat(e.onceId++,",").concat(n,")"):Cs(t,e)}return As(t,e)}function ks(t,e,n,r){return t.ifProcessed=!0,$s(t.ifConditions.slice(),e,n,r)}function $s(t,e,n,r){if(!t.length)return r||"_e()";var i=t.shift();return i.exp?"(".concat(i.exp,")?").concat(o(i.block),":").concat($s(t,e,n,r)):"".concat(o(i.block));function o(t){return n?n(t,e):t.once?Os(t,e):Cs(t,e)}}function Es(t,e,n,r){var i=t.for,o=t.alias,a=t.iterator1?",".concat(t.iterator1):"",s=t.iterator2?",".concat(t.iterator2):"";return t.forProcessed=!0,"".concat(r||"_l","((").concat(i,"),")+"function(".concat(o).concat(a).concat(s,"){")+"return ".concat((n||Cs)(t,e))+"})"}function Ts(t,e){var n="{",r=function(t,e){var n=t.directives;if(!n)return;var r,i,o,a,s="directives:[",c=!1;for(r=0,i=n.length;r<i;r++){o=n[r],a=!0;var u=e.directives[o.name];u&&(a=!!u(t,o,e.warn)),a&&(c=!0,s+='{name:"'.concat(o.name,'",rawName:"').concat(o.rawName,'"').concat(o.value?",value:(".concat(o.value,"),expression:").concat(JSON.stringify(o.value)):"").concat(o.arg?",arg:".concat(o.isDynamicArg?o.arg:'"'.concat(o.arg,'"')):"").concat(o.modifiers?",modifiers:".concat(JSON.stringify(o.modifiers)):"","},"))}if(c)return s.slice(0,-1)+"]"}(t,e);r&&(n+=r+","),t.key&&(n+="key:".concat(t.key,",")),t.ref&&(n+="ref:".concat(t.ref,",")),t.refInFor&&(n+="refInFor:true,"),t.pre&&(n+="pre:true,"),t.component&&(n+='tag:"'.concat(t.tag,'",'));for(var i=0;i<e.dataGenFns.length;i++)n+=e.dataGenFns[i](t);if(t.attrs&&(n+="attrs:".concat(Is(t.attrs),",")),t.props&&(n+="domProps:".concat(Is(t.props),",")),t.events&&(n+="".concat(ms(t.events,!1),",")),t.nativeEvents&&(n+="".concat(ms(t.nativeEvents,!0),",")),t.slotTarget&&!t.slotScope&&(n+="slot:".concat(t.slotTarget,",")),t.scopedSlots&&(n+="".concat(function(t,e,n){var r=t.for||Object.keys(e).some((function(t){var n=e[t];return n.slotTargetDynamic||n.if||n.for||Ss(n)})),i=!!t.if;if(!r)for(var o=t.parent;o;){if(o.slotScope&&o.slotScope!==Ha||o.for){r=!0;break}o.if&&(i=!0),o=o.parent}var a=Object.keys(e).map((function(t){return js(e[t],n)})).join(",");return"scopedSlots:_u([".concat(a,"]").concat(r?",null,true":"").concat(!r&&i?",null,false,".concat(function(t){var e=5381,n=t.length;for(;n;)e=33*e^t.charCodeAt(--n);return e>>>0}(a)):"",")")}(t,t.scopedSlots,e),",")),t.model&&(n+="model:{value:".concat(t.model.value,",callback:").concat(t.model.callback,",expression:").concat(t.model.expression,"},")),t.inlineTemplate){var o=function(t,e){var n=t.children[0];0;if(n&&1===n.type){var r=xs(n,e.options);return"inlineTemplate:{render:function(){".concat(r.render,"},staticRenderFns:[").concat(r.staticRenderFns.map((function(t){return"function(){".concat(t,"}")})).join(","),"]}")}}(t,e);o&&(n+="".concat(o,","))}return n=n.replace(/,$/,"")+"}",t.dynamicAttrs&&(n="_b(".concat(n,',"').concat(t.tag,'",').concat(Is(t.dynamicAttrs),")")),t.wrapData&&(n=t.wrapData(n)),t.wrapListeners&&(n=t.wrapListeners(n)),n}function Ss(t){return 1===t.type&&("slot"===t.tag||t.children.some(Ss))}function js(t,e){var n=t.attrsMap["slot-scope"];if(t.if&&!t.ifProcessed&&!n)return ks(t,e,js,"null");if(t.for&&!t.forProcessed)return Es(t,e,js);var r=t.slotScope===Ha?"":String(t.slotScope),i="function(".concat(r,"){")+"return ".concat("template"===t.tag?t.if&&n?"(".concat(t.if,")?").concat(Ls(t,e)||"undefined",":undefined"):Ls(t,e)||"undefined":Cs(t,e),"}"),o=r?"":",proxy:true";return"{key:".concat(t.slotTarget||'"default"',",fn:").concat(i).concat(o,"}")}function Ls(t,e,n,r,i){var o=t.children;if(o.length){var a=o[0];if(1===o.length&&a.for&&"template"!==a.tag&&"slot"!==a.tag){var s=n?e.maybeComponent(a)?",1":",0":"";return"".concat((r||Cs)(a,e)).concat(s)}var c=n?function(t,e){for(var n=0,r=0;r<t.length;r++){var i=t[r];if(1===i.type){if(Ns(i)||i.ifConditions&&i.ifConditions.some((function(t){return Ns(t.block)}))){n=2;break}(e(i)||i.ifConditions&&i.ifConditions.some((function(t){return e(t.block)})))&&(n=1)}}return n}(o,e.maybeComponent):0,u=i||Ds;return"[".concat(o.map((function(t){return u(t,e)})).join(","),"]").concat(c?",".concat(c):"")}}function Ns(t){return void 0!==t.for||"template"===t.tag||"slot"===t.tag}function Ds(t,e){return 1===t.type?Cs(t,e):3===t.type&&t.isComment?function(t){return"_e(".concat(JSON.stringify(t.text),")")}(t):function(t){return"_v(".concat(2===t.type?t.expression:Ps(JSON.stringify(t.text)),")")}(t)}function Is(t){for(var e="",n="",r=0;r<t.length;r++){var i=t[r],o=Ps(i.value);i.dynamic?n+="".concat(i.name,",").concat(o,","):e+='"'.concat(i.name,'":').concat(o,",")}return e="{".concat(e.slice(0,-1),"}"),n?"_d(".concat(e,",[").concat(n.slice(0,-1),"])"):e}function Ps(t){return t.replace(/\u2028/g,"\\u2028").replace(/\u2029/g,"\\u2029")}new RegExp("\\b"+"do,if,for,let,new,try,var,case,else,with,await,break,catch,class,const,super,throw,while,yield,delete,export,import,return,switch,default,extends,finally,continue,debugger,function,arguments".split(",").join("\\b|\\b")+"\\b"),new RegExp("\\b"+"delete,typeof,void".split(",").join("\\s*\\([^\\)]*\\)|\\b")+"\\s*\\([^\\)]*\\)");function Ms(t,e){try{return new Function(t)}catch(n){return e.push({err:n,code:t}),D}}function Rs(t){var e=Object.create(null);return function(n,r,i){(r=L({},r)).warn;delete r.warn;var o=r.delimiters?String(r.delimiters)+n:n;if(e[o])return e[o];var a=t(n,r);var s={},c=[];return s.render=Ms(a.render,c),s.staticRenderFns=a.staticRenderFns.map((function(t){return Ms(t,c)})),e[o]=s}}var Fs,Bs,zs=(Fs=function(t,e){var n=qa(t.trim(),e);!1!==e.optimize&&ss(n,e);var r=xs(n,e);return{ast:n,render:r.render,staticRenderFns:r.staticRenderFns}},function(t){function e(e,n){var r=Object.create(t),i=[],o=[];if(n)for(var a in n.modules&&(r.modules=(t.modules||[]).concat(n.modules)),n.directives&&(r.directives=L(Object.create(t.directives||null),n.directives)),n)"modules"!==a&&"directives"!==a&&(r[a]=n[a]);r.warn=function(t,e,n){(n?o:i).push(t)};var s=Fs(e.trim(),r);return s.errors=i,s.tips=o,s}return{compile:e,compileToFunctions:Rs(e)}}),Us=zs(os).compileToFunctions;function Hs(t){return(Bs=Bs||document.createElement("div")).innerHTML=t?'<a href="\n"/>':'<div a="\n"/>',Bs.innerHTML.indexOf("&#10;")>0}var Ws=!!Z&&Hs(!1),qs=!!Z&&Hs(!0),Vs=A((function(t){var e=Tr(t);return e&&e.innerHTML})),Ks=Gn.prototype.$mount;Gn.prototype.$mount=function(t,e){if((t=t&&Tr(t))===document.body||t===document.documentElement)return this;var n=this.$options;if(!n.render){var r=n.template;if(r)if("string"==typeof r)"#"===r.charAt(0)&&(r=Vs(r));else{if(!r.nodeType)return this;r=r.innerHTML}else t&&(r=function(t){if(t.outerHTML)return t.outerHTML;var e=document.createElement("div");return e.appendChild(t.cloneNode(!0)),e.innerHTML}(t));if(r){0;var i=Us(r,{outputSourceRange:!1,shouldDecodeNewlines:Ws,shouldDecodeNewlinesForHref:qs,delimiters:n.delimiters,comments:n.comments},this),o=i.render,a=i.staticRenderFns;n.render=o,n.staticRenderFns=a}}return Ks.call(this,t,e)},Gn.compile=Us}},n={};function r(t){var i=n[t];if(void 0!==i)return i.exports;var o=n[t]={id:t,loaded:!1,exports:{}};return e[t].call(o.exports,o,o.exports,r),o.loaded=!0,o.exports}r.m=e,t=[],r.O=(e,n,i,o)=>{if(!n){var a=1/0;for(l=0;l<t.length;l++){for(var[n,i,o]=t[l],s=!0,c=0;c<n.length;c++)(!1&o||a>=o)&&Object.keys(r.O).every((t=>r.O[t](n[c])))?n.splice(c--,1):(s=!1,o<a&&(a=o));if(s){t.splice(l--,1);var u=i();void 0!==u&&(e=u)}}return e}o=o||0;for(var l=t.length;l>0&&t[l-1][2]>o;l--)t[l]=t[l-1];t[l]=[n,i,o]},r.d=(t,e)=>{for(var n in e)r.o(e,n)&&!r.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),r.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),r.r=t=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.nmd=t=>(t.paths=[],t.children||(t.children=[]),t),(()=>{var t={773:0,170:0};r.O.j=e=>0===t[e];var e=(e,n)=>{var i,o,[a,s,c]=n,u=0;if(a.some((e=>0!==t[e]))){for(i in s)r.o(s,i)&&(r.m[i]=s[i]);if(c)var l=c(r)}for(e&&e(n);u<a.length;u++)o=a[u],r.o(t,o)&&t[o]&&t[o][0](),t[o]=0;return r.O(l)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(e.bind(null,0)),n.push=e.bind(null,n.push.bind(n))})(),r.O(void 0,[170],(()=>r(745)));var i=r.O(void 0,[170],(()=>r(864)));i=r.O(i)})();
   </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Nunito);
@charset "UTF-8";
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0d6efd;
  --bs-secondary: #6c757d;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 248, 250, 252;
  --bs-font-sans-serif: "Nunito", sans-serif;
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 0.9rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.6;
  --bs-body-color: #212529;
  --bs-body-bg: #f8fafc;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}

hr:not([size]) {
  height: 1px;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.35rem + 1.2vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.25rem;
  }
}

h2, .h2 {
  font-size: calc(1.305rem + 0.66vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 1.8rem;
  }
}

h3, .h3 {
  font-size: calc(1.2825rem + 0.39vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.575rem;
  }
}

h4, .h4 {
  font-size: calc(1.26rem + 0.12vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.35rem;
  }
}

h5, .h5 {
  font-size: 1.125rem;
}

h6, .h6 {
  font-size: 0.9rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: #0d6efd;
  text-decoration: underline;
}
a:hover {
  color: #0a58ca;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::-webkit-file-upload-button {
  font: inherit;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.125rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.125rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #f8fafc;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
.gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
.gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
.gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
.gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
.gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
.gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
.gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
.gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
.gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
.gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
.gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
.gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
.gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
.gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
.gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
.gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
.gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
.gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
.gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
.gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
.gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
.gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
.gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
.gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
.gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
.gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
.gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
.gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
.gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
.gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
.gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
.gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
.gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
.gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
.gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
.gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
.gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
.gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
.gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
.gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
.gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
.gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
.gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
.gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
.gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
.gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
.gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
.gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
.gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
.gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
.gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
.gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
.gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
.gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
.gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
.gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
.gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
.gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
.gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
.gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #dee2e6;
}
.table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}
.table > :not(:first-child) {
  border-top: 2px solid currentColor;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6;
}

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce;
}

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1;
}

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.6;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.125rem;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.7875rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1.6;
  color: #212529;
  background-color: #f8fafc;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #212529;
  background-color: #f8fafc;
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-control::-webkit-date-and-time-value {
  height: 1.6em;
}
.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}
.form-control::-webkit-file-upload-button {
  padding: 0.375rem 0.75rem;
  margin: -0.375rem -0.75rem;
  -webkit-margin-end: 0.75rem;
          margin-inline-end: 0.75rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control::file-selector-button {
  padding: 0.375rem 0.75rem;
  margin: -0.375rem -0.75rem;
  -webkit-margin-end: 0.75rem;
          margin-inline-end: 0.75rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #dde0e3;
}
.form-control::-webkit-file-upload-button {
  padding: 0.375rem 0.75rem;
  margin: -0.375rem -0.75rem;
  -webkit-margin-end: 0.75rem;
          margin-inline-end: 0.75rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  line-height: 1.6;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.6em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.7875rem;
  border-radius: 0.2rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}
.form-control-sm::file-selector-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}

.form-control-lg {
  min-height: calc(1.6em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.125rem;
  border-radius: 0.3rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}
.form-control-lg::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}

textarea.form-control {
  min-height: calc(1.6em + 0.75rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.6em + 0.5rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.6em + 1rem + 2px);
}

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.375rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  height: 1.6em;
  border-radius: 0.25rem;
}
.form-control-color::-webkit-color-swatch {
  height: 1.6em;
  border-radius: 0.25rem;
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1.6;
  color: #212529;
  background-color: #f8fafc;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.75rem;
  background-image: none;
}
.form-select:disabled {
  background-color: #e9ecef;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #212529;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.7875rem;
  border-radius: 0.2rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.125rem;
  border-radius: 0.3rem;
}

.form-check {
  display: block;
  min-height: 1.44rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.3em;
  vertical-align: top;
  background-color: #f8fafc;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-check-input:checked {
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #0d6efd;
  border-color: #0d6efd;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #f8fafc, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #f8fafc, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #b6d4fe;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
       appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #b6d4fe;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control:-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-ms-input-placeholder) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus {
  z-index: 3;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 3;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1.6;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.125rem;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.7875rem;
  border-radius: 0.2rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.7875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #198754;
  padding-right: calc(1.6em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.4em + 0.1875rem) center;
  background-size: calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.6em + 0.75rem);
  background-position: top calc(0.4em + 0.1875rem) right calc(0.4em + 0.1875rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754;
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #198754;
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:valid, .input-group .form-control.is-valid,
.was-validated .input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 1;
}
.was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus,
.was-validated .input-group .form-select:valid:focus,
.input-group .form-select.is-valid:focus {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.7875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.6em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.4em + 0.1875rem) center;
  background-size: calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.6em + 0.75rem);
  background-position: top calc(0.4em + 0.1875rem) right calc(0.4em + 0.1875rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.8em + 0.375rem) calc(0.8em + 0.375rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #dc3545;
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid,
.was-validated .input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 2;
}
.was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus,
.was-validated .input-group .form-select:invalid:focus,
.input-group .form-select.is-invalid:focus {
  z-index: 3;
}

.btn {
  display: inline-block;
  font-weight: 400;
  line-height: 1.6;
  color: #212529;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.9rem;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: #212529;
}
.btn-check:focus + .btn, .btn:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0b5ed7;
  border-color: #0a58ca;
}
.btn-check:focus + .btn-primary, .btn-primary:focus {
  color: #fff;
  background-color: #0b5ed7;
  border-color: #0a58ca;
  box-shadow: 0 0 0 0.25rem rgba(49, 132, 253, 0.5);
}
.btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0a58ca;
  border-color: #0a53be;
}
.btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(49, 132, 253, 0.5);
}
.btn-primary:disabled, .btn-primary.disabled {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-secondary:hover {
  color: #fff;
  background-color: #5c636a;
  border-color: #565e64;
}
.btn-check:focus + .btn-secondary, .btn-secondary:focus {
  color: #fff;
  background-color: #5c636a;
  border-color: #565e64;
  box-shadow: 0 0 0 0.25rem rgba(130, 138, 145, 0.5);
}
.btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #565e64;
  border-color: #51585e;
}
.btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(130, 138, 145, 0.5);
}
.btn-secondary:disabled, .btn-secondary.disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-success {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-success:hover {
  color: #fff;
  background-color: #157347;
  border-color: #146c43;
}
.btn-check:focus + .btn-success, .btn-success:focus {
  color: #fff;
  background-color: #157347;
  border-color: #146c43;
  box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
}
.btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #146c43;
  border-color: #13653f;
}
.btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
}
.btn-success:disabled, .btn-success.disabled {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}

.btn-info {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-info:hover {
  color: #000;
  background-color: #31d2f2;
  border-color: #25cff2;
}
.btn-check:focus + .btn-info, .btn-info:focus {
  color: #000;
  background-color: #31d2f2;
  border-color: #25cff2;
  box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
}
.btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
  color: #000;
  background-color: #3dd5f3;
  border-color: #25cff2;
}
.btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
}
.btn-info:disabled, .btn-info.disabled {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}

.btn-warning {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-warning:hover {
  color: #000;
  background-color: #ffca2c;
  border-color: #ffc720;
}
.btn-check:focus + .btn-warning, .btn-warning:focus {
  color: #000;
  background-color: #ffca2c;
  border-color: #ffc720;
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
}
.btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .show > .btn-warning.dropdown-toggle {
  color: #000;
  background-color: #ffcd39;
  border-color: #ffc720;
}
.btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
}
.btn-warning:disabled, .btn-warning.disabled {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-danger:hover {
  color: #fff;
  background-color: #bb2d3b;
  border-color: #b02a37;
}
.btn-check:focus + .btn-danger, .btn-danger:focus {
  color: #fff;
  background-color: #bb2d3b;
  border-color: #b02a37;
  box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
}
.btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #b02a37;
  border-color: #a52834;
}
.btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
}
.btn-danger:disabled, .btn-danger.disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-light {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-light:hover {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
}
.btn-check:focus + .btn-light, .btn-light:focus {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
  box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
}
.btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .show > .btn-light.dropdown-toggle {
  color: #000;
  background-color: #f9fafb;
  border-color: #f9fafb;
}
.btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
}
.btn-light:disabled, .btn-light.disabled {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-dark {
  color: #fff;
  background-color: #212529;
  border-color: #212529;
}
.btn-dark:hover {
  color: #fff;
  background-color: #1c1f23;
  border-color: #1a1e21;
}
.btn-check:focus + .btn-dark, .btn-dark:focus {
  color: #fff;
  background-color: #1c1f23;
  border-color: #1a1e21;
  box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5);
}
.btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1a1e21;
  border-color: #191c1f;
}
.btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5);
}
.btn-dark:disabled, .btn-dark.disabled {
  color: #fff;
  background-color: #212529;
  border-color: #212529;
}

.btn-outline-primary {
  color: #0d6efd;
  border-color: #0d6efd;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.5);
}
.btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.5);
}
.btn-outline-primary:disabled, .btn-outline-primary.disabled {
  color: #0d6efd;
  background-color: transparent;
}

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d;
}
.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
  box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.5);
}
.btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}
.btn-check:checked + .btn-outline-secondary:focus, .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.5);
}
.btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-success {
  color: #198754;
  border-color: #198754;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
}
.btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:checked + .btn-outline-success:focus, .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
}
.btn-outline-success:disabled, .btn-outline-success.disabled {
  color: #198754;
  background-color: transparent;
}

.btn-outline-info {
  color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-outline-info:hover {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
}
.btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-check:checked + .btn-outline-info:focus, .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
}
.btn-outline-info:disabled, .btn-outline-info.disabled {
  color: #0dcaf0;
  background-color: transparent;
}

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107;
}
.btn-outline-warning:hover {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
}
.btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-check:checked + .btn-outline-warning:focus, .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
}
.btn-outline-warning:disabled, .btn-outline-warning.disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}
.btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-check:checked + .btn-outline-danger:focus, .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}
.btn-outline-danger:disabled, .btn-outline-danger.disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:hover {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
}
.btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-check:checked + .btn-outline-light:focus, .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
}
.btn-outline-light:disabled, .btn-outline-light.disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-dark {
  color: #212529;
  border-color: #212529;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #212529;
  border-color: #212529;
}
.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5);
}
.btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #212529;
  border-color: #212529;
}
.btn-check:checked + .btn-outline-dark:focus, .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5);
}
.btn-outline-dark:disabled, .btn-outline-dark.disabled {
  color: #212529;
  background-color: transparent;
}

.btn-link {
  font-weight: 400;
  color: #0d6efd;
  text-decoration: underline;
}
.btn-link:hover {
  color: #0a58ca;
}
.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.125rem;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.7875rem;
  border-radius: 0.2rem;
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 0.9rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 0.125rem;
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.15);
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #1e2125;
  background-color: #e9ecef;
}
.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #0d6efd;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #adb5bd;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.7875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #212529;
}

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item {
  color: #dee2e6;
}
.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.15);
}
.dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
  color: #fff;
  background-color: #0d6efd;
}
.dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
  color: #adb5bd;
}
.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item-text {
  color: #dee2e6;
}
.dropdown-menu-dark .dropdown-header {
  color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #0d6efd;
  text-decoration: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: #0a58ca;
}
.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
  isolation: isolate;
}
.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #f8fafc;
  border-color: #dee2e6 #dee2e6 #f8fafc;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #0d6efd;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
  margin-right: 1rem;
  font-size: 1.125rem;
  text-decoration: none;
  white-space: nowrap;
}
.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.125rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  transition: box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 0.25rem;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-sm .offcanvas-top,
.navbar-expand-sm .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-md .offcanvas-top,
.navbar-expand-md .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-lg .offcanvas-top,
.navbar-expand-lg .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xl .offcanvas-top,
.navbar-expand-xl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xxl .offcanvas-top,
.navbar-expand-xxl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas {
  position: inherit;
  bottom: 0;
  z-index: 1000;
  flex-grow: 1;
  visibility: visible !important;
  background-color: transparent;
  border-right: 0;
  border-left: 0;
  transition: none;
  transform: none;
}
.navbar-expand .offcanvas-top,
.navbar-expand .offcanvas-bottom {
  height: auto;
  border-top: 0;
  border-bottom: 0;
}
.navbar-expand .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(207, 205, 205, 0.125);
  border-radius: 0;
  min-height: 350px;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: 1rem 1rem;
}

.card-title {
  margin-bottom: 0.5rem;
}

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: 1rem;
}

.card-header {
  text-align: center;
  font-size: 1.2rem;
  padding: 0.5rem 1rem;
  color: #FFF;
  margin-bottom: 0;
  background-color:  #36B37D ;
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.5rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: #fff;
  border-bottom-color: #fff;
}

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-group > .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
.card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
.card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
.card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
.card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 0.9rem;
  color: #212529;
  text-align: left;
  background-color: #f8fafc;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: #0c63e4;
  background-color: #e7f1ff;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}
.accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  transform: rotate(-180deg);
}
.accordion-button::after {
  flex-shrink: 0;
  width: 1.25rem;
  height: 1.25rem;
  margin-left: auto;
  content: "";
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 1.25rem;
  transition: transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: #f8fafc;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.accordion-item:first-of-type {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-body {
  padding: 1rem 1.25rem;
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0 0;
  margin-bottom: 1rem;
  list-style: none;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  color: #0d6efd;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: #0a58ca;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.page-link:focus {
  z-index: 3;
  color: #0a58ca;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6;
}

.page-link {
  padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.125rem;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.7875rem;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #084298;
  background-color: #cfe2ff;
  border-color: #b6d4fe;
}
.alert-primary .alert-link {
  color: #06357a;
}

.alert-secondary {
  color: #41464b;
  background-color: #e2e3e5;
  border-color: #d3d6d8;
}
.alert-secondary .alert-link {
  color: #34383c;
}

.alert-success {
  color: #0f5132;
  background-color: #d1e7dd;
  border-color: #badbcc;
}
.alert-success .alert-link {
  color: #0c4128;
}

.alert-info {
  color: #055160;
  background-color: #cff4fc;
  border-color: #b6effb;
}
.alert-info .alert-link {
  color: #04414d;
}

.alert-warning {
  color: #664d03;
  background-color: #fff3cd;
  border-color: #ffecb5;
}
.alert-warning .alert-link {
  color: #523e02;
}

.alert-danger {
  color: #842029;
  background-color: #f8d7da;
  border-color: #f5c2c7;
}
.alert-danger .alert-link {
  color: #6a1a21;
}

.alert-light {
  color: #636464;
  background-color: #fefefe;
  border-color: #fdfdfe;
}
.alert-light .alert-link {
  color: #4f5050;
}

.alert-dark {
  color: #141619;
  background-color: #d3d3d4;
  border-color: #bcbebf;
}
.alert-dark .alert-link {
  color: #101214;
}

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.675rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0d6efd;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
          animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
            animation: none;
  }
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}
.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #212529;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #084298;
  background-color: #cfe2ff;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #084298;
  background-color: #bacbe6;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #084298;
  border-color: #084298;
}

.list-group-item-secondary {
  color: #41464b;
  background-color: #e2e3e5;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #41464b;
  background-color: #cbccce;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #41464b;
  border-color: #41464b;
}

.list-group-item-success {
  color: #0f5132;
  background-color: #d1e7dd;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #0f5132;
  background-color: #bcd0c7;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #0f5132;
  border-color: #0f5132;
}

.list-group-item-info {
  color: #055160;
  background-color: #cff4fc;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #055160;
  background-color: #badce3;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #055160;
  border-color: #055160;
}

.list-group-item-warning {
  color: #664d03;
  background-color: #fff3cd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #664d03;
  background-color: #e6dbb9;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #664d03;
  border-color: #664d03;
}

.list-group-item-danger {
  color: #842029;
  background-color: #f8d7da;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #842029;
  background-color: #dfc2c4;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #842029;
  border-color: #842029;
}

.list-group-item-light {
  color: #636464;
  background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #636464;
  background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #636464;
  border-color: #636464;
}

.list-group-item-dark {
  color: #141619;
  background-color: #d3d3d4;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #141619;
  background-color: #bebebf;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #141619;
  border-color: #141619;
}

.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5;
}
.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  opacity: 1;
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin: -0.5rem -0.5rem -0.5rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.6;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
  margin: 0.25rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
.modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
.modal-fullscreen .modal-footer {
  border-radius: 0;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}
.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.6;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.7875rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^=top] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^=right] {
  padding: 0 0.4rem;
}
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^=bottom] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^=left] {
  padding: 0 0.4rem;
}
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.6;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.7875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}
.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0;
}

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.9rem;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 1rem 1rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
.carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}

@-webkit-keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: 0.75s linear infinite spinner-border;
          animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: 0.75s linear infinite spinner-grow;
          animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
.spinner-grow {
    -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
  }
}
.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  transition: transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}
.offcanvas-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin-top: -0.5rem;
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.6;
}

.offcanvas-body {
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
          animation: placeholder-glow 2s ease-in-out infinite;
}

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
          mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
          mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
          animation: placeholder-wave 2s linear infinite;
}

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: #0d6efd;
}
.link-primary:hover, .link-primary:focus {
  color: #0a58ca;
}

.link-secondary {
  color: #6c757d;
}
.link-secondary:hover, .link-secondary:focus {
  color: #565e64;
}

.link-success {
  color: #198754;
}
.link-success:hover, .link-success:focus {
  color: #146c43;
}

.link-info {
  color: #0dcaf0;
}
.link-info:hover, .link-info:focus {
  color: #3dd5f3;
}

.link-warning {
  color: #ffc107;
}
.link-warning:hover, .link-warning:focus {
  color: #ffcd39;
}

.link-danger {
  color: #dc3545;
}
.link-danger:hover, .link-danger:focus {
  color: #b02a37;
}

.link-light {
  color: #f8f9fa;
}
.link-light:hover, .link-light:focus {
  color: #f9fafb;
}

.link-dark {
  color: #212529;
}
.link-dark:hover, .link-dark:focus {
  color: #1a1e21;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: 1px solid #dee2e6 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: 1px solid #dee2e6 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #0d6efd !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #198754 !important;
}

.border-info {
  border-color: #0dcaf0 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #212529 !important;
}

.border-white {
  border-color: #fff !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.35rem + 1.2vw) !important;
}

.fs-2 {
  font-size: calc(1.305rem + 0.66vw) !important;
}

.fs-3 {
  font-size: calc(1.2825rem + 0.39vw) !important;
}

.fs-4 {
  font-size: calc(1.26rem + 0.12vw) !important;
}

.fs-5 {
  font-size: 1.125rem !important;
}

.fs-6 {
  font-size: 0.9rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.6 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: #6c757d !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
      -ms-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.2rem !important;
}

.rounded-2 {
  border-radius: 0.25rem !important;
}

.rounded-3 {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-end {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-start {
  border-bottom-left-radius: 0.25rem !important;
  border-top-left-radius: 0.25rem !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.25rem !important;
  }
  .fs-2 {
    font-size: 1.8rem !important;
  }
  .fs-3 {
    font-size: 1.575rem !important;
  }
  .fs-4 {
    font-size: 1.35rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}

.wrapper {
  display: flex;
  align-items: stretch;
}

#sidebar {
  min-width: 240px;
  max-width: 240px;
}

#sidebar.active {
  margin-left: -250px;
}
@media (max-width: 768px) {
  #sidebar {
      margin-left: -250px;
  }
  #sidebar.active {
      margin-left: 0;
  }
}
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
  font-family: 'Poppins', sans-serif;
  background: #fafafa;
}

p {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1em;
  font-weight: 300;
  line-height: 1.7em;
  color: #999;
}

a, a:hover, a:focus {
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

#sidebar {
  /* don't forget to add all the previously mentioned styles here too */
  background: #FFF;
  color: #277252;
  transition: all 0.3s;
  padding: 2rem;
  border-right: 0.5px solid #F1F1F1;
}
/*
#205C42
#5EE3A9
*/
#sidebar .sidebar-header {
  padding: 20px;
  background: #FFF;
}

#sidebar ul.components {
  padding: 20px 0;
}

#sidebar ul p {
  color: #000;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px;
  font-size: 1.1em;
  display: block;
 
}
#sidebar ul li a:hover {
  color: #36B37D;
  background: #FFF;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
  color: #36B37D;
  background: #F1F1F1;
}
ul ul a {
  font-size: 0.9em !important;
  padding-left: 30px !important;
  background: #6d7fcc;
}
h2.section-title {
  color: #36B37D !important;
  padding: 1rem 0rem;
}
a.nav-link{
  background: transparent;
  /* border-top-left-radius: 50%; */
  border: 3px solid #36B37D;
  color: #36B37D !important;
  border-radius: 25px;
  padding: 6px 19px;
}
a#navbarDropdown {
  background: transparent;
  /* border-top-left-radius: 50%; */
  border: 3px solid #36B37D;
  color: #36B37D;;
  border-radius: 25px;
  padding: 6px 19px;
  /* border-bottom-left-radius: 50%; */
  /* border-top-right-radius: 40%; */
  /* border-bottom-right-radius: 40%; */
  /* border-radius: 30px 0 0 30px !important;
  -moz-border-radius: 30px 0 0 30px;
  -webkit-border-radius: 30px 0 0 30px; */
}
.plus-button{
  color: #fff;
  background-color: transparent;
  border-color: #36B37D;
  border-radius: 50%;
  border: 3px solid #36B37D;
}

a#navbarDropdown.dropdown-toggle {
 
 
  background: transparent;
  /* border-top-left-radius: 50%; */
  border: 0px solid #36B37D !important;
  color: #36B37D;
  border-radius: 25px;
  padding: 6vh 1vh;
  /* border-bottom-left-radius: 50%; */
  /* border-top-right-radius: 40%; */
  /* border-bottom-right-radius: 40%; */
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="../img/logo.jpeg" width="60" heigth="60" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesiòn') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="display:none">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>
