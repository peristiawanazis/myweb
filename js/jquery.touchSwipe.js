/*
* touchSwipe - jQuery Plugin
* https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
* http://labs.skinkers.com/touchSwipe/
* http://plugins.jquery.com/project/touchSwipe
*
* Copyright (c) 2010 Matt Bryson (www.skinkers.com)
* Dual licensed under the MIT or GPL Version 2 licenses.
*
* $version: 1.5.0
*/(function(d){var l="left",k="right",c="up",r="down",b="in",s="out",i="none",o="auto",u="horizontal",p="vertical",f="all",e="start",h="move",g="end",m="cancel",a="ontouchstart" in window,t="TouchSwipe";var j={fingers:1,threshold:75,maxTimeThreshold:null,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,pinchIn:null,pinchOut:null,pinchStatus:null,click:null,triggerOnTouchEnd:true,allowPageScroll:"auto",fallbackToMouseEvents:true,excludedElements:"button, input, select, textarea, a, .noSwipe"};d.fn.swipe=function(x){var w=d(this),v=w.data(t);if(v&&typeof x==="string"){if(v[x]){return v[x].apply(this,Array.prototype.slice.call(arguments,1))}else{d.error("Method "+x+" does not exist on jQuery.swipe")}}else{if(!v&&(typeof x==="object"||!x)){return q.apply(this,arguments)}}return w};d.fn.swipe.defaults=j;d.fn.swipe.phases={PHASE_START:e,PHASE_MOVE:h,PHASE_END:g,PHASE_CANCEL:m};d.fn.swipe.directions={LEFT:l,RIGHT:k,UP:c,DOWN:r,IN:b,OUT:s};d.fn.swipe.pageScroll={NONE:i,HORIZONTAL:u,VERTICAL:p,AUTO:o};d.fn.swipe.fingers={ONE:1,TWO:2,THREE:3,ALL:f};function q(v){if(v&&(v.allowPageScroll===undefined&&(v.swipe!==undefined||v.swipeStatus!==undefined))){v.allowPageScroll=i}if(!v){v={}}v=d.extend({},d.fn.swipe.defaults,v);return this.each(function(){var x=d(this);var w=x.data(t);if(!w){w=new n(this,v);x.data(t,w)}})}function n(J,R){var aj=(a||!R.fallbackToMouseEvents),ae=aj?"touchstart":"mousedown",K=aj?"touchmove":"mousemove",ac=aj?"touchend":"mouseup",I="touchcancel";var P=0;var E=null;var S=0;var af=0;var w=0;var U=1;var ak=0;var A=d(J);var F="start";var ai=0;var T=null;var B=0;var M=0;try{A.bind(ae,aa);A.bind(I,D)}catch(ag){d.error("events not supported "+ae+","+I+" on jQuery.swipe")}this.enable=function(){A.bind(ae,aa);A.bind(I,D);return A};this.disable=function(){H();return A};this.destroy=function(){H();A.data(t,null);return A};function aa(ao){if(L()){return}if(d(ao.target).closest(R.excludedElements,A).length>0){return}ao=ao.originalEvent;var an,am=a?ao.touches[0]:ao;F=e;if(a){ai=ao.touches.length}else{ao.preventDefault()}P=0;E=null;ak=null;S=0;af=0;w=0;U=1;T=al();if(!a||(ai===R.fingers||R.fingers===f)||W()){T[0].start.x=T[0].end.x=am.pageX;T[0].start.y=T[0].end.y=am.pageY;B=x();if(ai==2){T[1].start.x=T[1].end.x=ao.touches[1].pageX;T[1].start.y=T[1].end.y=ao.touches[1].pageY;af=w=N(T[0].start,T[1].start)}if(R.swipeStatus||R.pinchStatus){an=ah(ao,F)}}else{D(ao);an=false}if(an===false){F=m;ah(ao,F);return an}else{V(true);A.bind(K,G);A.bind(ac,O)}}function G(ap){ap=ap.originalEvent;if(F===g||F===m){return}var an,am=a?ap.touches[0]:ap;T[0].end.x=a?ap.touches[0].pageX:am.pageX;T[0].end.y=a?ap.touches[0].pageY:am.pageY;M=x();E=Z(T[0].start,T[0].end);if(a){ai=ap.touches.length}F=h;if(ai==2){if(af==0){T[1].start.x=ap.touches[1].pageX;T[1].start.y=ap.touches[1].pageY;af=w=N(T[0].start,T[1].start)}else{T[1].end.x=ap.touches[1].pageX;T[1].end.y=ap.touches[1].pageY;w=N(T[0].end,T[1].end);ak=X(T[0].end,T[1].end)}U=v(af,w)}if((ai===R.fingers||R.fingers===f)||!a){y(ap,E);P=z(T[0].start,T[0].end);S=C(T[0].start,T[0].end);if(R.swipeStatus||R.pinchStatus){an=ah(ap,F)}if(!R.triggerOnTouchEnd){var ao=!Y();if(Q()===true){F=g;an=ah(ap,F)}else{if(ao){F=m;ah(ap,F)}}}}else{F=m;ah(ap,F)}if(an===false){F=m;ah(ap,F)}}function O(at){at=at.originalEvent;if(at.touches&&at.touches.length>0){return true}at.preventDefault();M=x();if(af!=0){w=N(T[0].end,T[1].end);U=v(af,w);ak=X(T[0].end,T[1].end)}P=z(T[0].start,T[0].end);E=Z(T[0].start,T[0].end);S=C();if(R.triggerOnTouchEnd||(R.triggerOnTouchEnd===false&&F===h)){F=g;var ap=ad()||!W();var an=((ai===R.fingers||R.fingers===f)||!a);var am=T[0].end.x!==0;var ao=(an&&am&&ap);if(ao){var aq=Y();var ar=Q();if((ar===true||ar===null)&&aq){ah(at,F)}else{if(!aq||ar===false){F=m;ah(at,F)}}}else{F=m;ah(at,F)}}else{if(F===h){F=m;ah(at,F)}}A.unbind(K,G,false);A.unbind(ac,O,false);V(false)}function D(){ai=0;M=0;B=0;af=0;w=0;U=1;V(false)}function ah(ao,am){var an=undefined;if(R.swipeStatus){an=R.swipeStatus.call(A,ao,am,E||null,P||0,S||0,ai)}if(R.pinchStatus&&ad()){an=R.pinchStatus.call(A,ao,am,ak||null,w||0,S||0,ai,U)}if(am===m){if(R.click&&(ai===1||!a)&&(isNaN(P)||P===0)){an=R.click.call(A,ao,ao.target)}}if(am==g){if(R.swipe){an=R.swipe.call(A,ao,E,P,S,ai)}switch(E){case l:if(R.swipeLeft){an=R.swipeLeft.call(A,ao,E,P,S,ai)}break;case k:if(R.swipeRight){an=R.swipeRight.call(A,ao,E,P,S,ai)}break;case c:if(R.swipeUp){an=R.swipeUp.call(A,ao,E,P,S,ai)}break;case r:if(R.swipeDown){an=R.swipeDown.call(A,ao,E,P,S,ai)}break}switch(ak){case b:if(R.pinchIn){an=R.pinchIn.call(A,ao,ak||null,w||0,S||0,ai,U)}break;case s:if(R.pinchOut){an=R.pinchOut.call(A,ao,ak||null,w||0,S||0,ai,U)}break}}if(am===m||am===g){D(ao)}return an}function Q(){if(R.threshold!==null){return P>=R.threshold}return null}function Y(){var am;if(R.maxTimeThreshold){if(S>=R.maxTimeThreshold){am=false}else{am=true}}else{am=true}return am}function y(am,an){if(R.allowPageScroll===i||W()){am.preventDefault()}else{var ao=R.allowPageScroll===o;switch(an){case l:if((R.swipeLeft&&ao)||(!ao&&R.allowPageScroll!=u)){am.preventDefault()}break;case k:if((R.swipeRight&&ao)||(!ao&&R.allowPageScroll!=u)){am.preventDefault()}break;case c:if((R.swipeUp&&ao)||(!ao&&R.allowPageScroll!=p)){am.preventDefault()}break;case r:if((R.swipeDown&&ao)||(!ao&&R.allowPageScroll!=p)){am.preventDefault()}break}}}function C(){return M-B}function N(ap,ao){var an=Math.abs(ap.x-ao.x);var am=Math.abs(ap.y-ao.y);return Math.round(Math.sqrt(an*an+am*am))}function v(am,an){var ao=(an/am)*1;return ao.toFixed(2)}function X(){if(U<1){return s}else{return b}}function z(an,am){return Math.round(Math.sqrt(Math.pow(am.x-an.x,2)+Math.pow(am.y-an.y,2)))}function ab(ap,an){var am=ap.x-an.x;var ar=an.y-ap.y;var ao=Math.atan2(ar,am);var aq=Math.round(ao*180/Math.PI);if(aq<0){aq=360-Math.abs(aq)}return aq}function Z(an,am){var ao=ab(an,am);if((ao<=45)&&(ao>=0)){return l}else{if((ao<=360)&&(ao>=315)){return l}else{if((ao>=135)&&(ao<=225)){return k}else{if((ao>45)&&(ao<135)){return r}else{return c}}}}}function x(){var am=new Date();return am.getTime()}function H(){A.unbind(ae,aa);A.unbind(I,D);A.unbind(K,G);A.unbind(ac,O);V(false)}function W(){return R.pinchStatus||R.pinchIn||R.pinchOut}function ad(){return ak&&W()}function L(){return A.data(t+"_intouch")===true?true:false}function V(am){am=am===true?true:false;A.data(t+"_intouch",am)}function al(){var am=[];for(var an=0;an<=5;an++){am.push({start:{x:0,y:0},end:{x:0,y:0},delta:{x:0,y:0}})}return am}}})(jQuery);