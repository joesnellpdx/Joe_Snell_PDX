/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */window.matchMedia=window.matchMedia||function(e,t){"use strict";var n,r=e.documentElement,i=r.firstElementChild||r.firstChild,s=e.createElement("body"),o=e.createElement("div");o.id="mq-test-1";o.style.cssText="position:absolute;top:-100em";s.style.background="none";s.appendChild(o);return function(e){o.innerHTML='&shy;<style media="'+e+'"> #mq-test-1 { width: 42px; }</style>';r.insertBefore(s,i);n=o.offsetWidth===42;r.removeChild(s);return{matches:n,media:e}}}(document);(function(){if(!window.matchMedia("").addListener){var e=window.matchMedia;window.matchMedia=function(t){var n=e(t),r=[],i=!1,s,o=function(){var s=e(t);if(s.matches&&!i)for(var o=0,u=r.length;o<u;o++)r[o].call(n,s);i=s.matches};n.addListener=function(e){r.push(e);s||(s=setInterval(o,1e3))};n.removeListener=function(e){for(var t=0,n=r.length;t<n;t++)r[t]===e&&r.splice(t,1);!r.length&&s&&clearInterval(s)};return n}}})();(function(e){"use strict";e.picturefill=function(){var t=e.document.getElementsByTagName("div");for(var n=0,r=t.length;n<r;n++)if(t[n].getAttribute("data-picture")!==null){var i=t[n].getElementsByTagName("div"),s=[];for(var o=0,u=i.length;o<u;o++){var a=i[o].getAttribute("data-media");(!a||e.matchMedia&&e.matchMedia(a).matches)&&s.push(i[o])}var f=t[n].getElementsByTagName("img")[0];if(s.length){if(!f){f=e.document.createElement("img");f.alt=t[n].getAttribute("data-alt");t[n].appendChild(f)}f.src=s.pop().getAttribute("data-src")}else f&&t[n].removeChild(f)}};if(e.addEventListener){e.addEventListener("resize",e.picturefill,!1);e.addEventListener("DOMContentLoaded",function(){e.picturefill();e.removeEventListener("load",e.picturefill,!1)},!1);e.addEventListener("load",e.picturefill,!1)}else e.attachEvent&&e.attachEvent("onload",e.picturefill)})(this);var Chirp=function(opts){var api={user:"http://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&count={{count}}&include_rts={{retweets}}&exclude_replies={{!replies}}&screen_name={{user}}",list:"http://api.twitter.com/1/{{user}}/lists/{{list}}/statuses.json?include_entities=true",search:"http://search.twitter.com/search.json?include_entities=true&q={{search}}"},options={retweets:!0,replies:!1,user:"joesnellpdx",list:null,search:null,target:"chirps",count:100,max:10,cacheExpire:12e4,success:function(){},error:function(){},templates:{base:'<ul class="chirp">{{tweets}}</ul>',tweet:'<li><a href="http://twitter.com/{{user.screen_name}}" title="{{user.name}} — {{user.description}}"><img src="{{user.profile_image_url}}"></a><span class="user-link"><a href="http://twitter.com/{{user.screen_name}}" title="{{user.name}} — {{user.description}}">{{user.name}}</a></span> {{html}}<span class="meta"><time><a href="http://twitter.com/{{user.screen_name}}/statuses/{{id_str}}">{{time_ago}}</a></time></span></li>'}},ext=function(e,t){for(var n in t)n in e&&(e[n]&&e[n].constructor==Object?ext(e[n],t[n]):e[n]=t[n])},ago=function(e){var t=new Date((e||"").replace(/(\d{1,2}[:]\d{2}[:]\d{2}) (.*)/,"$2 $1").replace(/(\+\S+) (.*)/,"$2 $1").replace(/-/g,"/")),n=((new Date).getTime()-t.getTime())/1e3,r=Math.floor(n/86400);if(isNaN(r)||r<0||r>=31)return;return r==0&&(n<60&&"just now"||n<120&&"1 minute ago"||n<3600&&Math.floor(n/60)+" minutes ago"||n<7200&&"1 hour ago"||n<86400&&Math.floor(n/3600)+" hours ago")||r==1&&"Yesterday"||r<7&&r+" days ago"||r<31&&Math.ceil(r/7)+" weeks ago"},htmlify=function(e,t){var n=[],r=e,i={urls:function(e){return'<a href="'+e.expanded_url+'">'+e.display_url+"</a>"},hashtags:function(e){return'<a href="http://twitter.com/search/%23'+e.text+'">#'+e.text+"</a>"},user_mentions:function(e){return'<a href="http://twitter.com/'+e.screen_name+'" title="'+e.name+'">@'+e.screen_name+"</a>"},media:function(e){return'<a href="'+e.expanded_url+'">'+e.display_url+"</a>"}};for(var s in t){u=t[s];if(t[s].length>0)for(var o=0,u;u=t[s][o];++o)n[u.indices[0]]={start:u.indices[0],end:u.indices[1],link:i[s](u)}}for(var o=n.length-1;o>=0;--o)n[o]!=undefined&&(r=r.substr(0,n[o].start)+n[o].link+r.substr(n[o].end,r.length-1));return r},toHTML=function(e){var t="",n=0;for(twt in e){e[twt].index=++n;e[twt].html=htmlify(e[twt].text,e[twt].entities);e[twt].time_ago=ago(e[twt].created_at);t+=render(options.templates.tweet,e[twt]);if(n==options.max)break}return render(options.templates.base,{tweets:t})},render=function(tpl,data){var output=tpl,dotData=function(d,dotKey){var invert="";if(dotKey.indexOf("!")>-1){dotKey=dotKey.replace(/!/ig,"");invert="!"}try{val=eval(invert+"d['"+dotKey.split(".").join("']['")+"']")}catch(e){val=""}return val},matches=tpl.match(/{{[^}}]*}}/igm);for(var i=0;i<matches.length;++i){var m=matches[i],val=dotData(data,matches[i].replace(/{{|}}/ig,""))||"";output=output.replace(new RegExp(m,"igm"),val)}return output},cache=function(e,t){if(!localStorage||!JSON)return null;var n=(new Date).getTime(),r=null;if(t==undefined){try{r=JSON.parse(unescape(localStorage.getItem(e)))}catch(i){}if(r)if(n-r.time<options.cacheExpire)r=r.data;else{localStorage.removeItem(e);r=null}else r=null;return r}try{localStorage.setItem(e,escape(JSON.stringify({time:n,data:t})))}catch(i){console.log(i)}},get=function(){Chirp.requests=Chirp.requests==undefined?1:Chirp.requests+1;var e=document.createElement("script"),t="callback"+Chirp.requests,n=document.body.children,r=document.scripts[document.scripts.length-1],i=options.list?render(api.list,options):options.search?render(api.search,options):render(api.user,options),s=r.parentNode.nodeName!="head";Chirp[t]=function(e,t){e=e.results?e.results:e;t!==!0&&cache(i,e);var n=document.createElement("div");n.innerHTML=toHTML(e);options.target==null?r.parentNode.insertBefore(n,r):document.getElementById(options.target).innerHTML=n.innerHTML;options.success.call(this,e)};e.onerror=options.error;if(cachedData=cache(i))Chirp[t](cachedData,!0);else{e.src=i+"&callback=Chirp."+t;document.getElementsByTagName("head")[0].appendChild(e)}},init=function(e){if(e&&e!=undefined)if(e.constructor==String){var t=e.split("/"),n={};n.user=t[0];n.list=t[1]?t[1]:null;ext(options,n)}else e.constructor==Object&&ext(options,e)};this.show=function(e){init(e);options.target&&(document.getElementById(options.target).innerHTML="");get()};this.constructor!=Chirp?(new Chirp(opts)).show():init(opts)};Chirp._script=document.scripts[document.scripts.length-1];(function(e){var t=function(){var t=function(t){var n=0,r=0,i=new Array,s,o=0;e("#content-loop a").each(function(){s=e(this);e(s).height("auto");topPostion=s.position().top;if(r!=topPostion){for(currentDiv=0;currentDiv<i.length;currentDiv++)i[currentDiv].height(n);i.length=0;r=topPostion;n=s.height();i.push(s)}else{i.push(s);n=n<s.height()?s.height():n}for(currentDiv=0;currentDiv<i.length;currentDiv++)i[currentDiv].height(n)})},n=function(){e(".add-icon-user a").addClass("icon-user");e(".add-icon-pencil a").addClass("icon-pencil");e(".add-icon-briefcase a").addClass("icon-briefcase");e(".add-icon-comment a").addClass("icon-comment")},r=function(){e("#sidebar .loading-div").length&&matchMedia("only screen and (min-width: 62em)").matches&&e("#sidebar").load("load #secondary",function(){e(this).hide().fadeIn("slow"),e(Chirp)})},i=function(){e("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude()},s=function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var e=document.createElement("style");e.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"));document.getElementsByTagName("head")[0].appendChild(e)}};n();t(".main article");r();i();s()};e(window).load(function(){t()});e(window).resize(function(){t()})})(jQuery);(function(){var e=/\blang(?:uage)?-(?!\*)(\w+)\b/i,t=self.Prism={util:{type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},clone:function(e){var n=t.util.type(e);switch(n){case"Object":var r={};for(var i in e)e.hasOwnProperty(i)&&(r[i]=t.util.clone(e[i]));return r;case"Array":return e.slice()}return e}},languages:{extend:function(e,n){var r=t.util.clone(t.languages[e]);for(var i in n)r[i]=n[i];return r},insertBefore:function(e,n,r,i){i=i||t.languages;var s=i[e],o={};for(var u in s)if(s.hasOwnProperty(u)){if(u==n)for(var a in r)r.hasOwnProperty(a)&&(o[a]=r[a]);o[u]=s[u]}return i[e]=o},DFS:function(e,n){for(var r in e){n.call(e,r,e[r]);t.util.type(e)==="Object"&&t.languages.DFS(e[r],n)}}},highlightAll:function(e,n){var r=document.querySelectorAll('code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code');for(var i=0,s;s=r[i++];)t.highlightElement(s,e===!0,n)},highlightElement:function(r,i,s){var o,u,a=r;while(a&&!e.test(a.className))a=a.parentNode;if(a){o=(a.className.match(e)||[,""])[1];u=t.languages[o]}if(!u)return;r.className=r.className.replace(e,"").replace(/\s+/g," ")+" language-"+o;a=r.parentNode;/pre/i.test(a.nodeName)&&(a.className=a.className.replace(e,"").replace(/\s+/g," ")+" language-"+o);var f=r.textContent;if(!f)return;f=f.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\u00a0/g," ");var l={element:r,language:o,grammar:u,code:f};t.hooks.run("before-highlight",l);if(i&&self.Worker){var c=new Worker(t.filename);c.onmessage=function(e){l.highlightedCode=n.stringify(JSON.parse(e.data));l.element.innerHTML=l.highlightedCode;s&&s.call(l.element);t.hooks.run("after-highlight",l)};c.postMessage(JSON.stringify({language:l.language,code:l.code}))}else{l.highlightedCode=t.highlight(l.code,l.grammar);l.element.innerHTML=l.highlightedCode;s&&s.call(r);t.hooks.run("after-highlight",l)}},highlight:function(e,r){return n.stringify(t.tokenize(e,r))},tokenize:function(e,n){var r=t.Token,i=[e],s=n.rest;if(s){for(var o in s)n[o]=s[o];delete n.rest}e:for(var o in n){if(!n.hasOwnProperty(o)||!n[o])continue;var u=n[o],a=u.inside,f=!!u.lookbehind||0;u=u.pattern||u;for(var l=0;l<i.length;l++){var c=i[l];if(i.length>e.length)break e;if(c instanceof r)continue;u.lastIndex=0;var h=u.exec(c);if(h){f&&(f=h[1].length);var p=h.index-1+f,h=h[0].slice(f),d=h.length,v=p+d,m=c.slice(0,p+1),g=c.slice(v+1),y=[l,1];m&&y.push(m);var b=new r(o,a?t.tokenize(h,a):h);y.push(b);g&&y.push(g);Array.prototype.splice.apply(i,y)}}}return i},hooks:{all:{},add:function(e,n){var r=t.hooks.all;r[e]=r[e]||[];r[e].push(n)},run:function(e,n){var r=t.hooks.all[e];if(!r||!r.length)return;for(var i=0,s;s=r[i++];)s(n)}}},n=t.Token=function(e,t){this.type=e;this.content=t};n.stringify=function(e){if(typeof e=="string")return e;if(Object.prototype.toString.call(e)=="[object Array]")return e.map(n.stringify).join("");var r={type:e.type,content:n.stringify(e.content),tag:"span",classes:["token",e.type],attributes:{}};r.type=="comment"&&(r.attributes.spellcheck="true");t.hooks.run("wrap",r);var i="";for(var s in r.attributes)i+=s+'="'+(r.attributes[s]||"")+'"';return"<"+r.tag+' class="'+r.classes.join(" ")+'" '+i+">"+r.content+"</"+r.tag+">"};if(!self.document){self.addEventListener("message",function(e){var n=JSON.parse(e.data),r=n.language,i=n.code;self.postMessage(JSON.stringify(t.tokenize(i,t.languages[r])));self.close()},!1);return}var r=document.getElementsByTagName("script");r=r[r.length-1];if(r){t.filename=r.src;document.addEventListener&&!r.hasAttribute("data-manual")&&document.addEventListener("DOMContentLoaded",t.highlightAll)}})();Prism.languages.markup={comment:/&lt;!--[\w\W]*?--(&gt;|&gt;)/g,prolog:/&lt;\?.+?\?&gt;/,doctype:/&lt;!DOCTYPE.+?&gt;/,cdata:/&lt;!\[CDATA\[[\w\W]*?]]&gt;/i,tag:{pattern:/&lt;\/?[\w:-]+\s*(?:\s+[\w:-]+(?:=(?:("|')(\\?[\w\W])*?\1|\w+))?\s*)*\/?&gt;/gi,inside:{tag:{pattern:/^&lt;\/?[\w:-]+/i,inside:{punctuation:/^&lt;\/?/,namespace:/^[\w-]+?:/}},"attr-value":{pattern:/=(?:('|")[\w\W]*?(\1)|[^\s>]+)/gi,inside:{punctuation:/=|&gt;|"/g}},punctuation:/\/?&gt;/g,"attr-name":{pattern:/[\w:-]+/g,inside:{namespace:/^[\w-]+?:/}}}},entity:/&amp;#?[\da-z]{1,8};/gi};Prism.hooks.add("wrap",function(e){e.type==="entity"&&(e.attributes.title=e.content.replace(/&amp;/,"&"))});Prism.languages.css={comment:/\/\*[\w\W]*?\*\//g,atrule:/@[\w-]+?(\s+[^;{]+)?(?=\s*{|\s*;)/gi,url:/url\((["']?).*?\1\)/gi,selector:/[^\{\}\s][^\{\}]*(?=\s*\{)/g,property:/(\b|\B)[a-z-]+(?=\s*:)/ig,string:/("|')(\\?.)*?\1/g,important:/\B!important\b/gi,ignore:/&(lt|gt|amp);/gi,punctuation:/[\{\};:]/g};Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{style:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/style(>|&gt;)/ig,inside:{tag:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)|(&lt;|<)\/style(>|&gt;)/ig,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.css}}});Prism.languages.clike={comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|\/\/.*?(\r?\n|$))/g,lookbehind:!0},string:/("|')(\\?.)*?\1/g,keyword:/\b(if|else|while|do|for|return|in|instanceof|function|new|try|catch|finally|null|break|continue)\b/g,"boolean":/\b(true|false)\b/g,number:/\b-?(0x)?\d*\.?[\da-f]+\b/g,operator:/[-+]{1,2}|!|=?&lt;|=?&gt;|={1,2}|(&amp;){1,2}|\|?\||\?|\*|\//g,ignore:/&(lt|gt|amp);/gi,punctuation:/[{}[\];(),.:]/g};Prism.languages.javascript=Prism.languages.extend("clike",{keyword:/\b(var|let|if|else|while|do|for|return|in|instanceof|function|new|with|typeof|try|catch|finally|null|break|continue)\b/g,number:/\b(-?(0x)?\d*\.?[\da-f]+|NaN|-?Infinity)\b/g});Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^/])\/(?!\/)(\[.+?]|\\.|[^/\r\n])+\/[gim]{0,3}(?=\s*($|[\r\n,.;})]))/g,lookbehind:!0}});Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{script:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/script(>|&gt;)/ig,inside:{tag:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)|(&lt;|<)\/script(>|&gt;)/ig,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.javascript}}});(function(){function e(e,t){return Array.prototype.slice.call((t||document).querySelectorAll(e))}function n(e,t,n){var r=t.replace(/\s+/g,"").split(","),i=+e.getAttribute("data-line-offset")||0,s=parseFloat(getComputedStyle(e).lineHeight);for(var o=0,u;u=r[o++];){u=u.split("-");var a=+u[0],f=+u[1]||a,l=document.createElement("div");l.textContent=Array(f-a+2).join(" \r\n");l.className=(n||"")+" line-highlight";l.setAttribute("data-start",a);f>a&&l.setAttribute("data-end",f);l.style.top=(a-i-1)*s+"px";(e.querySelector("code")||e).appendChild(l)}}function r(){var t=location.hash.slice(1);e(".temporary.line-highlight").forEach(function(e){e.parentNode.removeChild(e)});var r=(t.match(/\.([\d,-]+)$/)||[,""])[1];if(!r||document.getElementById(t))return;var i=t.slice(0,t.lastIndexOf(".")),s=document.getElementById(i);if(!s)return;s.hasAttribute("data-line")||s.setAttribute("data-line","");n(s,r,"temporary ");document.querySelector(".temporary.line-highlight").scrollIntoView()}if(!window.Prism)return;var t=crlf=/\r?\n|\r/g,i=0;Prism.hooks.add("after-highlight",function(t){var s=t.element.parentNode,o=s&&s.getAttribute("data-line");if(!s||!o||!/pre/i.test(s.nodeName))return;clearTimeout(i);e(".line-highlight",s).forEach(function(e){e.parentNode.removeChild(e)});n(s,o);i=setTimeout(r,1)});addEventListener("hashchange",r)})();(function(e){var t=e.document;if(!location.hash&&e.addEventListener){window.scrollTo(0,1);var n=1,r=function(){return e.pageYOffset||t.compatMode==="CSS1Compat"&&t.documentElement.scrollTop||t.body.scrollTop||0},i=setInterval(function(){if(t.body){clearInterval(i);n=r();e.scrollTo(0,n===1?0:1)}},15);e.addEventListener("load",function(){setTimeout(function(){r()<20&&e.scrollTo(0,n===1?0:1)},0)})}})(this);