/* ++++++++++++++++++ THIRD-PARTY SCRIPTS ++++++++++++++++++ */

/* Tabs */
(function(a){a.tools=a.tools||{version:"v1.2.6"},a.tools.tabs={conf:{tabs:"a",current:"current",onBeforeClick:null,onClick:null,effect:"default",initialIndex:0,event:"click",rotate:!1,slideUpSpeed:400,slideDownSpeed:400,history:!1},addEffect:function(a,c){b[a]=c}};var b={"default":function(a,b){this.getPanes().hide().eq(a).show(),b.call()},fade:function(a,b){var c=this.getConf(),d=c.fadeOutSpeed,e=this.getPanes();d?e.fadeOut(d):e.hide(),e.eq(a).fadeIn(c.fadeInSpeed,b)},slide:function(a,b){var c=this.getConf();this.getPanes().slideUp(c.slideUpSpeed),this.getPanes().eq(a).slideDown(c.slideDownSpeed,b)},ajax:function(a,b){this.getPanes().eq(0).load(this.getTabs().eq(a).attr("href"),b)}},c,d;a.tools.tabs.addEffect("horizontal",function(b,e){if(!c){var f=this.getPanes().eq(b),g=this.getCurrentPane();d||(d=this.getPanes().eq(0).width()),c=!0,f.show(),g.animate({width:0},{step:function(a){f.css("width",d-a)},complete:function(){a(this).hide(),e.call(),c=!1}}),g.length||(e.call(),c=!1)}});function e(c,d,e){var f=this,g=c.add(this),h=c.find(e.tabs),i=d.jquery?d:c.children(d),j;h.length||(h=c.children()),i.length||(i=c.parent().find(d)),i.length||(i=a(d)),a.extend(this,{click:function(c,d){var i=h.eq(c);typeof c=="string"&&c.replace("#","")&&(i=h.filter("[href*="+c.replace("#","")+"]"),c=Math.max(h.index(i),0));if(e.rotate){var k=h.length-1;if(c<0)return f.click(k,d);if(c>k)return f.click(0,d)}if(!i.length){if(j>=0)return f;c=e.initialIndex,i=h.eq(c)}if(c===j)return f;d=d||a.Event(),d.type="onBeforeClick",g.trigger(d,[c]);if(!d.isDefaultPrevented()){b[e.effect].call(f,c,function(){j=c,d.type="onClick",g.trigger(d,[c])}),h.removeClass(e.current),i.addClass(e.current);return f}},getConf:function(){return e},getTabs:function(){return h},getPanes:function(){return i},getCurrentPane:function(){return i.eq(j)},getCurrentTab:function(){return h.eq(j)},getIndex:function(){return j},next:function(){return f.click(j+1)},prev:function(){return f.click(j-1)},destroy:function(){h.unbind(e.event).removeClass(e.current),i.find("a[href^=#]").unbind("click.T");return f}}),a.each("onBeforeClick,onClick".split(","),function(b,c){a.isFunction(e[c])&&a(f).bind(c,e[c]),f[c]=function(b){b&&a(f).bind(c,b);return f}}),e.history&&a.fn.history&&(a.tools.history.init(h),e.event="history"),h.each(function(b){a(this).bind(e.event,function(a){f.click(b,a);return a.preventDefault()})}),i.find("a[href^=#]").bind("click.T",function(b){f.click(a(this).attr("href"),b)}),location.hash&&e.tabs=="a"&&c.find("[href="+location.hash+"]").length?f.click(location.hash):(e.initialIndex===0||e.initialIndex>0)&&f.click(e.initialIndex)}a.fn.tabs=function(b,c){var d=this.data("tabs");d&&(d.destroy(),this.removeData("tabs")),a.isFunction(c)&&(c={onBeforeClick:c}),c=a.extend({},a.tools.tabs.conf,c),this.each(function(){d=new e(a(this),b,c),a(this).data("tabs",d)});return c.api?d:this}})(jQuery);

	
/*
* Superfish v1.4.8 - jQuery menu widget
* Copyright (c) 2008 Joel Birch
*
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
*
* CHANGELOG: http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt
*/
;(function($){
$.fn.superfish = function(op){
var sf = $.fn.superfish,
c = sf.c,
$arrow = $(['<span class="',c.arrowClass,'"> &#187;</span>'].join('')),
over = function(){
var $$ = $(this), menu = getMenu($$);
clearTimeout(menu.sfTimer);
$$.showSuperfishUl().siblings().hideSuperfishUl();
},
out = function(){
var $$ = $(this), menu = getMenu($$), o = sf.op;
clearTimeout(menu.sfTimer);
menu.sfTimer=setTimeout(function(){
o.retainPath=($.inArray($$[0],o.$path)>-1);
$$.hideSuperfishUl();
if (o.$path.length && $$.parents(['li.',o.hoverClass].join('')).length<1){over.call(o.$path);}
},o.delay);
},
getMenu = function($menu){
var menu = $menu.parents(['ul.',c.menuClass,':first'].join(''))[0];
sf.op = sf.o[menu.serial];
return menu;
},
addArrow = function($a){ $a.addClass(c.anchorClass).append($arrow.clone()); };
return this.each(function() {
var s = this.serial = sf.o.length;
var o = $.extend({},sf.defaults,op);
o.$path = $('li.'+o.pathClass,this).slice(0,o.pathLevels).each(function(){
$(this).addClass([o.hoverClass,c.bcClass].join(' '))
.filter('li:has(ul)').removeClass(o.pathClass);
});
sf.o[s] = sf.op = o;
$('li:has(ul)',this)[($.fn.hoverIntent && !o.disableHI) ? 'hoverIntent' : 'hover'](over,out).each(function() {
if (o.autoArrows) addArrow( $('>a:first-child',this) );
})
.not('.'+c.bcClass)
.hideSuperfishUl();
var $a = $('a',this);
$a.each(function(i){
var $li = $a.eq(i).parents('li');
$a.eq(i).focus(function(){over.call($li);}).blur(function(){out.call($li);});
});
o.onInit.call(this);
}).each(function() {
var menuClasses = [c.menuClass];
if (sf.op.dropShadows && !($.browser.msie && $.browser.version < 7)) menuClasses.push(c.shadowClass);
$(this).addClass(menuClasses.join(' '));
});
};
var sf = $.fn.superfish;
sf.o = [];
sf.op = {};
sf.IE7fix = function(){
var o = sf.op;
if ($.browser.msie && $.browser.version > 6 && o.dropShadows && o.animation.opacity!=undefined)
this.toggleClass(sf.c.shadowClass+'-off');
};
sf.c = {
bcClass : 'sf-breadcrumb',
menuClass : 'sf-js-enabled',
anchorClass : 'sf-with-ul',
arrowClass : 'sf-sub-indicator',
shadowClass : 'sf-shadow'
};
sf.defaults = {
hoverClass : 'sfHover',
pathClass : 'overideThisToUse',
pathLevels : 1,
easing : 'swing',
delay : 800,
animation : {opacity:'show'},
speed : 'slow',
autoArrows : true,
dropShadows : true,
disableHI : false, // true disables hoverIntent detection
onInit : function(){}, // callback functions
onBeforeShow: function(){},
onShow : function(){},
onHide : function(){}
};
$.fn.extend({
hideSuperfishUl : function(){
var o = sf.op,
not = (o.retainPath===true) ? o.$path : '';
o.retainPath = false;
var $ul = $(['li.',o.hoverClass].join(''),this).add(this).not(not).removeClass(o.hoverClass)
.find('>ul').hide().css('visibility','hidden');
o.onHide.call($ul);
return this;
},
showSuperfishUl : function(){
var o = sf.op,
sh = sf.c.shadowClass+'-off',
$ul = this.addClass(o.hoverClass)
.find('>ul:hidden').css('visibility','visible');
sf.IE7fix.call($ul);
o.onBeforeShow.call($ul);
$ul.animate(o.animation,o.speed,o.easing,function()
{ sf.IE7fix.call($ul); o.onShow.call($ul); });
return this;
return this;
}
});
})(jQuery);


/**
 * jQuery goMap
 *
 * @url		http://www.pittss.lv/jquery/gomap/
 * @author	Jevgenijs Shtrauss <pittss@gmail.com>
 * @version	1.3.2 2011.07.01
 * This software is released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 */
if (typeof google !== 'undefined')
(function(a){function c(a){this.setMap(a)}var b=new google.maps.Geocoder;c.prototype=new google.maps.OverlayView;c.prototype.onAdd=function(){};c.prototype.onRemove=function(){};c.prototype.draw=function(){};a.goMap={};a.fn.goMap=function(b){return this.each(function(){var c=a(this).data("goMap");if(!c){var d=a.extend(true,{},a.goMapBase);a(this).data("goMap",d.init(this,b));a.goMap=d}else{a.goMap=c}})};a.goMapBase={defaults:{address:"",latitude:56.9,longitude:24.1,zoom:4,delay:200,hideByClick:true,oneInfoWindow:true,prefixId:"gomarker",polyId:"gopoly",groupId:"gogroup",navigationControl:true,navigationControlOptions:{position:"TOP_LEFT",style:"DEFAULT"},mapTypeControl:true,mapTypeControlOptions:{position:"TOP_RIGHT",style:"DEFAULT"},scaleControl:false,scrollwheel:true,directions:false,directionsResult:null,disableDoubleClickZoom:false,streetViewControl:false,markers:[],overlays:[],polyline:{color:"#FF0000",opacity:1,weight:2},polygon:{color:"#FF0000",opacity:1,weight:2,fillColor:"#FF0000",fillOpacity:.2},circle:{color:"#FF0000",opacity:1,weight:2,fillColor:"#FF0000",fillOpacity:.2},rectangle:{color:"#FF0000",opacity:1,weight:2,fillColor:"#FF0000",fillOpacity:.2},maptype:"HYBRID",html_prepend:"<div class=gomapMarker>",html_append:"</div>",addMarker:false},map:null,count:0,markers:[],polylines:[],polygons:[],circles:[],rectangles:[],tmpMarkers:[],geoMarkers:[],lockGeocode:false,bounds:null,overlays:null,overlay:null,mapId:null,plId:null,pgId:null,cId:null,rId:null,opts:null,centerLatLng:null,init:function(b,d){var e=a.extend(true,{},a.goMapBase.defaults,d);this.mapId=a(b);this.opts=e;if(e.address)this.geocode({address:e.address,center:true});else if(a.isArray(e.markers)&&e.markers.length>0){if(e.markers[0].address)this.geocode({address:e.markers[0].address,center:true});else this.centerLatLng=new google.maps.LatLng(e.markers[0].latitude,e.markers[0].longitude)}else this.centerLatLng=new google.maps.LatLng(e.latitude,e.longitude);var f={center:this.centerLatLng,disableDoubleClickZoom:e.disableDoubleClickZoom,mapTypeControl:e.mapTypeControl,streetViewControl:e.streetViewControl,mapTypeControlOptions:{position:google.maps.ControlPosition[e.mapTypeControlOptions.position.toUpperCase()],style:google.maps.MapTypeControlStyle[e.mapTypeControlOptions.style.toUpperCase()]},mapTypeId:google.maps.MapTypeId[e.maptype.toUpperCase()],navigationControl:e.navigationControl,navigationControlOptions:{position:google.maps.ControlPosition[e.navigationControlOptions.position.toUpperCase()],style:google.maps.NavigationControlStyle[e.navigationControlOptions.style.toUpperCase()]},scaleControl:e.scaleControl,scrollwheel:e.scrollwheel,zoom:e.zoom};this.map=new google.maps.Map(b,f);this.overlay=new c(this.map);this.overlays={polyline:{id:"plId",array:"polylines",create:"createPolyline"},polygon:{id:"pgId",array:"polygons",create:"createPolygon"},circle:{id:"cId",array:"circles",create:"createCircle"},rectangle:{id:"rId",array:"rectangles",create:"createRectangle"}};this.plId=a('<div style="display:none;"/>').appendTo(this.mapId);this.pgId=a('<div style="display:none;"/>').appendTo(this.mapId);this.cId=a('<div style="display:none;"/>').appendTo(this.mapId);this.rId=a('<div style="display:none;"/>').appendTo(this.mapId);for(var g=0,h=e.markers.length;g<h;g++)this.createMarker(e.markers[g]);for(var g=0,h=e.overlays.length;g<h;g++)this[this.overlays[e.overlays[g].type].create](e.overlays[g]);var i=this;if(e.addMarker==true||e.addMarker=="multi"){google.maps.event.addListener(i.map,"click",function(a){var b={position:a.latLng,draggable:true};var c=i.createMarker(b);google.maps.event.addListener(c,"dblclick",function(a){c.setMap(null);i.removeMarker(c.id)})})}else if(e.addMarker=="single"){google.maps.event.addListener(i.map,"click",function(a){if(!i.singleMarker){var b={position:a.latLng,draggable:true};var c=i.createMarker(b);i.singleMarker=true;google.maps.event.addListener(c,"dblclick",function(a){c.setMap(null);i.removeMarker(c.id);i.singleMarker=false})}})}delete e.markers;delete e.overlays;return this},ready:function(a){google.maps.event.addListenerOnce(this.map,"bounds_changed",function(){return a()})},geocode:function(a,c){var d=this;setTimeout(function(){b.geocode({address:a.address},function(b,e){if(e==google.maps.GeocoderStatus.OK&&a.center)d.map.setCenter(b[0].geometry.location);if(e==google.maps.GeocoderStatus.OK&&c&&c.markerId)c.markerId.setPosition(b[0].geometry.location);else if(e==google.maps.GeocoderStatus.OK&&c){if(d.lockGeocode){d.lockGeocode=false;c.position=b[0].geometry.location;c.geocode=true;d.createMarker(c)}}else if(e==google.maps.GeocoderStatus.OVER_QUERY_LIMIT){d.geocode(a,c)}})},this.opts.delay)},geoMarker:function(){if(this.geoMarkers.length>0&&!this.lockGeocode){this.lockGeocode=true;var a=this.geoMarkers.splice(0,1);this.geocode({address:a[0].address},a[0])}else if(this.lockGeocode){var b=this;setTimeout(function(){b.geoMarker()},this.opts.delay)}},setMap:function(a){delete a.mapTypeId;if(a.address){this.geocode({address:a.address,center:true});delete a.address}else if(a.latitude&&a.longitude){a.center=new google.maps.LatLng(a.latitude,a.longitude);delete a.longitude;delete a.latitude}if(a.mapTypeControlOptions&&a.mapTypeControlOptions.position)a.mapTypeControlOptions.position=google.maps.ControlPosition[a.mapTypeControlOptions.position.toUpperCase()];if(a.mapTypeControlOptions&&a.mapTypeControlOptions.style)a.mapTypeControlOptions.style=google.maps.MapTypeControlStyle[a.mapTypeControlOptions.style.toUpperCase()];if(a.navigationControlOptions&&a.navigationControlOptions.position)a.navigationControlOptions.position=google.maps.ControlPosition[a.navigationControlOptions.position.toUpperCase()];if(a.navigationControlOptions&&a.navigationControlOptions.style)a.navigationControlOptions.style=google.maps.NavigationControlStyle[a.navigationControlOptions.style.toUpperCase()];this.map.setOptions(a)},getMap:function(){return this.map},createListener:function(b,c,d){var e;if(typeof b!="object")b={type:b};if(b.type=="map")e=this.map;else if(b.type=="marker"&&b.marker)e=a(this.mapId).data(b.marker);else if(b.type=="info"&&b.marker)e=a(this.mapId).data(b.marker+"info");if(e)return google.maps.event.addListener(e,c,d);else if((b.type=="marker"||b.type=="info")&&this.getMarkerCount()!=this.getTmpMarkerCount())var f=this;setTimeout(function(){f.createListener(b,c,d)},this.opts.delay)},removeListener:function(a){google.maps.event.removeListener(a)},setInfoWindow:function(b,c){var d=this;c.content=d.opts.html_prepend+c.content+d.opts.html_append;var e=new google.maps.InfoWindow(c);e.show=false;a(d.mapId).data(b.id+"info",e);if(c.popup){d.openWindow(e,b,c);e.show=true}google.maps.event.addListener(b,"click",function(){if(e.show&&d.opts.hideByClick){e.close();e.show=false}else{d.openWindow(e,b,c);e.show=true}})},openWindow:function(b,c,d){if(this.opts.oneInfoWindow)this.clearInfo();if(d.ajax){b.open(this.map,c);a.ajax({url:d.ajax,success:function(a){b.setContent(a)}})}else if(d.id){b.setContent(a(d.id).html());b.open(this.map,c)}else b.open(this.map,c)},setInfo:function(b,c){var d=a(this.mapId).data(b+"info");if(typeof c=="object")d.setOptions(c);else d.setContent(c)},getInfo:function(b,c){var d=a(this.mapId).data(b+"info").getContent();if(c)return a(d).html();else return d},clearInfo:function(){for(var b=0,c=this.markers.length;b<c;b++){var d=a(this.mapId).data(this.markers[b]+"info");if(d){d.close();d.show=false}}},fitBounds:function(b,c){var d=this;if(this.getMarkerCount()!=this.getTmpMarkerCount())setTimeout(function(){d.fitBounds(b,c)},this.opts.delay);else{this.bounds=new google.maps.LatLngBounds;if(!b||b&&b=="all"){for(var e=0,f=this.markers.length;e<f;e++){this.bounds.extend(a(this.mapId).data(this.markers[e]).position)}}else if(b&&b=="visible"){for(var e=0,f=this.markers.length;e<f;e++){if(this.getVisibleMarker(this.markers[e]))this.bounds.extend(a(this.mapId).data(this.markers[e]).position)}}else if(b&&b=="markers"&&a.isArray(c)){for(var e=0,f=c.length;e<f;e++){this.bounds.extend(a(this.mapId).data(c[e]).position)}}this.map.fitBounds(this.bounds)}},getBounds:function(){return this.map.getBounds()},createPolyline:function(a){a.type="polyline";return this.createOverlay(a)},createPolygon:function(a){a.type="polygon";return this.createOverlay(a)},createCircle:function(a){a.type="circle";return this.createOverlay(a)},createRectangle:function(a){a.type="rectangle";return this.createOverlay(a)},createOverlay:function(a){var b=[];if(!a.id){this.count++;a.id=this.opts.polyId+this.count}switch(a.type){case"polyline":if(a.coords.length>0){for(var c=0,d=a.coords.length;c<d;c++)b.push(new google.maps.LatLng(a.coords[c].latitude,a.coords[c].longitude));b=new google.maps.Polyline({map:this.map,path:b,strokeColor:a.color?a.color:this.opts.polyline.color,strokeOpacity:a.opacity?a.opacity:this.opts.polyline.opacity,strokeWeight:a.weight?a.weight:this.opts.polyline.weight})}else return false;break;case"polygon":if(a.coords.length>0){for(var c=0,d=a.coords.length;c<d;c++)b.push(new google.maps.LatLng(a.coords[c].latitude,a.coords[c].longitude));b=new google.maps.Polygon({map:this.map,path:b,strokeColor:a.color?a.color:this.opts.polygon.color,strokeOpacity:a.opacity?a.opacity:this.opts.polygon.opacity,strokeWeight:a.weight?a.weight:this.opts.polygon.weight,fillColor:a.fillColor?a.fillColor:this.opts.polygon.fillColor,fillOpacity:a.fillOpacity?a.fillOpacity:this.opts.polygon.fillOpacity})}else return false;break;case"circle":b=new google.maps.Circle({map:this.map,center:new google.maps.LatLng(a.latitude,a.longitude),radius:a.radius,strokeColor:a.color?a.color:this.opts.circle.color,strokeOpacity:a.opacity?a.opacity:this.opts.circle.opacity,strokeWeight:a.weight?a.weight:this.opts.circle.weight,fillColor:a.fillColor?a.fillColor:this.opts.circle.fillColor,fillOpacity:a.fillOpacity?a.fillOpacity:this.opts.circle.fillOpacity});break;case"rectangle":b=new google.maps.Rectangle({map:this.map,bounds:new google.maps.LatLngBounds(new google.maps.LatLng(a.sw.latitude,a.sw.longitude),new google.maps.LatLng(a.ne.latitude,a.ne.longitude)),strokeColor:a.color?a.color:this.opts.circle.color,strokeOpacity:a.opacity?a.opacity:this.opts.circle.opacity,strokeWeight:a.weight?a.weight:this.opts.circle.weight,fillColor:a.fillColor?a.fillColor:this.opts.circle.fillColor,fillOpacity:a.fillOpacity?a.fillOpacity:this.opts.circle.fillOpacity});break;default:return false;break}this.addOverlay(a,b);return b},addOverlay:function(b,c){a(this[this.overlays[b.type].id]).data(b.id,c);this[this.overlays[b.type].array].push(b.id)},setOverlay:function(b,c,d){c=a(this[this.overlays[b].id]).data(c);if(d.coords&&d.coords.length>0){var e=[];for(var f=0,g=d.coords.length;f<g;f++)e.push(new google.maps.LatLng(d.coords[f].latitude,d.coords[f].longitude));d.path=e;delete d.coords}else if(d.ne&&d.sw){d.bounds=new google.maps.LatLngBounds(new google.maps.LatLng(d.sw.latitude,d.sw.longitude),new google.maps.LatLng(d.ne.latitude,d.ne.longitude));delete d.ne;delete d.sw}else if(d.latitude&&d.longitude){d.center=new google.maps.LatLng(d.latitude,d.longitude);delete d.latitude;delete d.longitude}c.setOptions(d)},showHideOverlay:function(b,c,d){if(typeof d==="undefined"){if(this.getVisibleOverlay(b,c))d=false;else d=true}if(d)a(this[this.overlays[b].id]).data(c).setMap(this.map);else a(this[this.overlays[b].id]).data(c).setMap(null)},getVisibleOverlay:function(b,c){if(a(this[this.overlays[b].id]).data(c).getMap())return true;else return false},getOverlaysCount:function(a){return this[this.overlays[a].array].length},removeOverlay:function(b,c){var d=a.inArray(c,this[this.overlays[b].array]),e;if(d>-1){e=this[this.overlays[b].array].splice(d,1);var f=e[0];a(this[this.overlays[b].id]).data(f).setMap(null);a(this[this.overlays[b].id]).removeData(f);return true}return false},clearOverlays:function(b){for(var c=0,d=this[this.overlays[b].array].length;c<d;c++){var e=this[this.overlays[b].array][c];a(this[this.overlays[b].id]).data(e).setMap(null);a(this[this.overlays[b].id]).removeData(e)}this[this.overlays[b].array]=[]},showHideMarker:function(b,c){if(typeof c==="undefined"){if(this.getVisibleMarker(b)){a(this.mapId).data(b).setVisible(false);var d=a(this.mapId).data(b+"info");if(d&&d.show){d.close();d.show=false}}else a(this.mapId).data(b).setVisible(true)}else a(this.mapId).data(b).setVisible(c)},showHideMarkerByGroup:function(b,c){for(var d=0,e=this.markers.length;d<e;d++){var f=this.markers[d];var g=a(this.mapId).data(f);if(g.group==b){if(typeof c==="undefined"){if(this.getVisibleMarker(f)){g.setVisible(false);var h=a(this.mapId).data(f+"info");if(h&&h.show){h.close();h.show=false}}else g.setVisible(true)}else g.setVisible(c)}}},getVisibleMarker:function(b){return a(this.mapId).data(b).getVisible()},getMarkerCount:function(){return this.markers.length},getTmpMarkerCount:function(){return this.tmpMarkers.length},getVisibleMarkerCount:function(){return this.getMarkers("visiblesInMap").length},getMarkerByGroupCount:function(a){return this.getMarkers("group",a).length},getMarkers:function(b,c){var d=[];switch(b){case"json":for(var e=0,f=this.markers.length;e<f;e++){var g="'"+e+"': '"+a(this.mapId).data(this.markers[e]).getPosition().toUrlValue()+"'";d.push(g)}d="{'markers':{"+d.join(",")+"}}";break;case"data":for(var e=0,f=this.markers.length;e<f;e++){var g="marker["+e+"]="+a(this.mapId).data(this.markers[e]).getPosition().toUrlValue();d.push(g)}d=d.join("&");break;case"visiblesInBounds":for(var e=0,f=this.markers.length;e<f;e++){if(this.isVisible(a(this.mapId).data(this.markers[e]).getPosition()))d.push(this.markers[e])}break;case"visiblesInMap":for(var e=0,f=this.markers.length;e<f;e++){if(this.getVisibleMarker(this.markers[e]))d.push(this.markers[e])}break;case"group":if(c)for(var e=0,f=this.markers.length;e<f;e++){if(a(this.mapId).data(this.markers[e]).group==c)d.push(this.markers[e])}break;case"markers":for(var e=0,f=this.markers.length;e<f;e++){var g=a(this.mapId).data(this.markers[e]);d.push(g)}break;default:for(var e=0,f=this.markers.length;e<f;e++){var g=a(this.mapId).data(this.markers[e]).getPosition().toUrlValue();d.push(g)}break}return d},getVisibleMarkers:function(){return this.getMarkers("visiblesInBounds")},createMarker:function(a){if(!a.geocode){this.count++;if(!a.id)a.id=this.opts.prefixId+this.count;this.tmpMarkers.push(a.id)}if(a.address&&!a.geocode){this.geoMarkers.push(a);this.geoMarker()}else if(a.latitude&&a.longitude||a.position){var b={map:this.map};b.id=a.id;b.group=a.group?a.group:this.opts.groupId;b.zIndex=a.zIndex?a.zIndex:0;b.zIndexOrg=a.zIndexOrg?a.zIndexOrg:0;if(a.visible==false)b.visible=a.visible;if(a.title)b.title=a.title;if(a.draggable)b.draggable=a.draggable;if(a.icon&&a.icon.image){b.icon=a.icon.image;if(a.icon.shadow)b.shadow=a.icon.shadow}else if(a.icon)b.icon=a.icon;else if(this.opts.icon&&this.opts.icon.image){b.icon=this.opts.icon.image;if(this.opts.icon.shadow)b.shadow=this.opts.icon.shadow}else if(this.opts.icon)b.icon=this.opts.icon;b.position=a.position?a.position:new google.maps.LatLng(a.latitude,a.longitude);var c=new google.maps.Marker(b);if(a.html){if(!a.html.content&&!a.html.ajax&&!a.html.id)a.html={content:a.html};else if(!a.html.content)a.html.content=null;this.setInfoWindow(c,a.html)}this.addMarker(c);return c}},addMarker:function(b){a(this.mapId).data(b.id,b);this.markers.push(b.id)},setMarker:function(b,c){var d=a(this.mapId).data(b);delete c.id;delete c.visible;if(c.icon){var e=c.icon;delete c.icon;if(e&&e=="default"){if(this.opts.icon&&this.opts.icon.image){c.icon=this.opts.icon.image;if(this.opts.icon.shadow)c.shadow=this.opts.icon.shadow}else if(this.opts.icon)c.icon=this.opts.icon}else if(e&&e.image){c.icon=e.image;if(e.shadow)c.shadow=e.shadow}else if(e)c.icon=e}if(c.address){this.geocode({address:c.address},{markerId:d});delete c.address;delete c.latitude;delete c.longitude;delete c.position}else if(c.latitude&&c.longitude||c.position){if(!c.position)c.position=new google.maps.LatLng(c.latitude,c.longitude)}d.setOptions(c)},removeMarker:function(b){var c=a.inArray(b,this.markers),d;if(c>-1){this.tmpMarkers.splice(c,1);d=this.markers.splice(c,1);var e=d[0];var b=a(this.mapId).data(e);var f=a(this.mapId).data(e+"info");b.setVisible(false);b.setMap(null);a(this.mapId).removeData(e);if(f){f.close();f.show=false;a(this.mapId).removeData(e+"info")}return true}return false},clearMarkers:function(){for(var b=0,c=this.markers.length;b<c;b++){var d=this.markers[b];var e=a(this.mapId).data(d);var f=a(this.mapId).data(d+"info");e.setVisible(false);e.setMap(null);a(this.mapId).removeData(d);if(f){f.close();f.show=false;a(this.mapId).removeData(d+"info")}}this.singleMarker=false;this.lockGeocode=false;this.markers=[];this.tmpMarkers=[];this.geoMarkers=[]},isVisible:function(a){return this.map.getBounds().contains(a)}}})(jQuery)


/***
 * Twitter JS v2.0.0
 * http://code.google.com/p/twitterjs/
 * Copyright (c) 2009 Remy Sharp / MIT License
 * $Date$
 */
 /*
  MIT (MIT-LICENSE.txt)
 */
typeof getTwitters!="function"&&function(){var a={},b=0;!function(a,b){function m(a){l=1;while(a=c.shift())a()}var c=[],d,e,f=!1,g=b.documentElement,h=g.doScroll,i="DOMContentLoaded",j="addEventListener",k="onreadystatechange",l=/^loade|c/.test(b.readyState);b[j]&&b[j](i,e=function(){b.removeEventListener(i,e,f),m()},f),h&&b.attachEvent(k,d=function(){/^c/.test(b.readyState)&&(b.detachEvent(k,d),m())}),a.domReady=h?function(b){self!=top?l?b():c.push(b):function(){try{g.doScroll("left")}catch(c){return setTimeout(function(){a.domReady(b)},50)}b()}()}:function(a){l?a():c.push(a)}}(a,document),window.getTwitters=function(c,d,e,f){b++,typeof d=="object"&&(f=d,d=f.id,e=f.count),e||(e=1),f?f.count=e:f={},!f.timeout&&typeof f.onTimeout=="function"&&(f.timeout=10),typeof f.clearContents=="undefined"&&(f.clearContents=!0),f.twitterTarget=c,typeof f.enableLinks=="undefined"&&(f.enableLinks=!0),a.domReady(function(a,b){return function(){function f(){a.target=document.getElementById(a.twitterTarget);if(!!a.target){var f={limit:e};f.includeRT&&(f.include_rts=!0),a.timeout&&(window["twitterTimeout"+b]=setTimeout(function(){twitterlib.cancel(),a.onTimeout.call(a.target)},a.timeout*1e3));var g="timeline";d.indexOf("#")===0&&(g="search"),d.indexOf("/")!==-1&&(g="list"),a.ignoreReplies&&(f.filter={not:new RegExp(/^@/)}),twitterlib.cache(!0),twitterlib[g](d,f,function(d,e){clearTimeout(window["twitterTimeout"+b]);var f=[],g=d.length>a.count?a.count:d.length;f=["<ul>"];for(var h=0;h<g;h++){d[h].time=twitterlib.time.relative(d[h].created_at);for(var i in d[h].user)d[h]["user_"+i]=d[h].user[i];a.template?f.push("<li>"+a.template.replace(/%([a-z_\-\.]*)%/ig,function(b,c){var e=d[h][c]+""||"";c=="text"&&(e=twitterlib.expandLinks(d[h])),c=="text"&&a.enableLinks&&(e=twitterlib.ify.clean(e));return e})+"</li>"):a.bigTemplate?f.push(twitterlib.render(d[h])):f.push(c(d[h]))}f.push("</ul>"),a.clearContents?a.target.innerHTML=f.join(""):a.target.innerHTML+=f.join(""),a.callback&&a.callback(d)})}}function c(b){var c=a.enableLinks?twitterlib.ify.clean(twitterlib.expandLinks(b)):twitterlib.expandLinks(b),d="<li>";a.prefix&&(d+='<li><span className="twitterPrefix">',d+=a.prefix.replace(/%(.*?)%/g,function(a,c){return b.user[c]}),d+=" </span></li>"),d+='<span className="twitterStatus">'+twitterlib.time.relative(b.created_at)+"</span> ",d+='<span className="twitterTime">'+b.text+"</span>",a.newwindow&&(d=d.replace(/<a href/gi,'<a target="_blank" href'));return d}typeof twitterlib=="undefined"?setTimeout(function(){var a=document.createElement("script");a.onload=a.onreadystatechange=function(){typeof window.twitterlib!="undefined"&&f()},a.src="http://remy.github.com/twitterlib/twitterlib.js";var b=document.head||document.getElementsByTagName("head")[0];b.insertBefore(a,b.firstChild)},0):f()}}(f,b))}}()



/* ==================================================================================================================
	
	CUSTOM SCRIPTS
	
   ================================================================================================================== */

/*
* Init scripts
*/

jQuery(document).ready(function($) {

	/* Main Menu */
	
	$(".root").click(function(e) {
        e.preventDefault();
        $("#main-menu .menu").show();
    });
	
	$('.menu').mobileMenu({
	    defaultText: 'Navigate to...',
	    className: 'select-menu',
	    subMenuDash: '&ndash;'
	});
	
    $(document).mouseup(function(e) {
        if($(e.target).parent("#main-menu .wrap").length==0) {
        	if ($("#main-menu .root").is(":visible")) {
            	$("#main-menu .menu").hide();
            }
        }
    });
	
	$("ul.sf-menu").superfish({ 
		delay: 100, 
		animation: {height:'show'},
		speed: 'normal',
		autoArrows: false,
		dropShadows: false,
		hoverClass: 'sfHover',
		onInit: function(){}
	});
	
	/* Init special tabs */
	$(".tab-nav").each(function() {
		$(this).tabs(".tab-panels > article", {effect: 'fade'});
	});
	
	/* Init common tabs */
	$(".tabs-nav").each(function() {
		$(this).tabs(".tabs-container > .tab-content", {effect: 'fade'});
	});
	
	initPrettyPhoto();

	/* Accordion */
	(function() {
		var $container = $('.acc-container'),
			$trigger   = $('.acc-trigger');
		$container.hide();
		$trigger.first().addClass('active').next().show();

		var fullWidth = $container.outerWidth(true);
		$trigger.css('width', fullWidth);
		$container.css('width', fullWidth);
		$($trigger).on('click', function(e) {
			if( jQuery(this).next().is(':hidden') ) {
				$trigger.removeClass('active').next().slideUp(300);
				jQuery(this).toggleClass('active').next().slideDown(300);
			}
			e.preventDefault();
		});

		// Resize
		$(window).on('resize', function() {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width() );
			$container.css('width', $container.parent().width() );
		});	

	})();
});



function initPrettyPhoto(scope) {
	var pretty_thumbs = [];
	scope = typeof scope !== 'undefined' ? scope + ' ' : '';
	
	$(scope+'a[data-rel^="prettyPhoto"]').each(function() {
		if ($(this).find('.prettyphoto-overlay').length <=0) {
			img = $(this).find('img');
			$(this).css({position:'relative',display:'block',textDecoration:'none'});
			$('<div class="prettyphoto-overlay">zoom</div>').appendTo(this);
		}
	});

	/* Init PrettyPhoto */
	     
	$("a[data-rel^='prettyPhoto']").prettyPhoto({hook:'data-rel', horizontal_padding: 168, theme:'yk1', animationSpeed:'slow', gallery_markup:'',slideshow:5000, social_tools:false, markup:'<div class="pp_pic_holder"> \
			<div class="pp_top"> \
					<div class="pp_left"></div> \
					<div class="pp_middle"></div> \
					<div class="pp_right"></div> \
				</div> \
				<div class="pp_content_container cf"> \
					<div class="pp_left"> \
					<div class="pp_right"> \
						<div class="pp_content"> \
							<div class="pp_loaderIcon"></div> \
							<div class="pp_fade"> \
								<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
								<div class="pp_hoverContainer"> \
									<a class="pp_next" href="#">next</a> \
									<a class="pp_previous" href="#">previous</a> \
								</div> \
								<div id="pp_full_res"></div> \
								<div class="pp_details"> \
									<div class="pp_nav"> \
										<a href="#" class="pp_arrow_previous">Previous</a> \
										<p class="currentTextHolder">0/0</p> \
										<a href="#" class="pp_arrow_next">Next</a> \
									</div> \
									<div class="ppt">&nbsp;</div> \
									<p class="pp_description"></p> \
									<div class="pp_social">{pp_social}</div> \
								</div> \
								<a class="pp_close" href="#">Close</a> \
								<span class="pp_view_detail"><a href="#">â†’ view detail</a></span> \
							</div> \
						</div> \
					</div> \
					</div> \
				</div> \
				<div class="pp_bottom"> \
					<div class="pp_left"></div> \
					<div class="pp_middle"></div> \
					<div class="pp_right"></div> \
				</div> \
			</div> \
			<div class="pp_overlay"></div>'});
}


function initPortfolioFilter() {
	var $filterType = $('#filter-options li.active a').attr('class');
	var $holder = $('.has-filter');
	var $data = $holder.clone();
	$('#filter-options li a').click(function(e) {
		$('#filter-options li').removeClass('active');
		var $filterType = $(this).attr('class');
		$(this).parent().addClass('active');
		
		if ($filterType == 'all') {
			var $filteredData = $data.find('[data-id^="id-"]');
		} 
		else {
			var $filteredData = $data.find('[data-type=' + $filterType + ']');
		}
		$holder.quicksand($filteredData, {
			duration: 800,
			adjustHeight:'dynamic',
			easing: 'easeInOutQuad'},
			function() { 
		    	initPrettyPhoto();
		  	});
		return false;
	});
}


function submitForm(f) {
	var labels = $(f).find('label');
	var fields = $(f).find('.text-field,.text-area');
	var isValid = true;
	
	$("#form-messages").html("");
	
	$(labels).each(function(i) {
		if (!$(labels[i]).hasClass('is-optional')) {
			if ($(fields[i]).val()=='') isValid = false;
		}
	});
	
	$.post('php/contact.php', $(f).serialize(), function(response) {
		Recaptcha.reload();
		data = $.parseJSON(response);
		if (data.status == 'OK') {
			f.reset();
			$.prettyPhoto.open('images/theme/thanks.png','Thanks!','We will response ASAP.');
		}
		else {
			$("#form-messages").html(data.msg);
		}
		
	});
	return false;
}

function isTouchDevice(){
	try{
		document.createEvent("TouchEvent");
		return true;
	}catch(e){
		return false;
	}
}

function touchScroll(el){
  if(isTouchDevice()){ //if touch events existâ€¦
      var scrollStartPosY=0;
      var scrollStartPosX=0;

      el.addEventListener("touchstart", function(event) {
        scrollStartPosY=this.scrollTop+event.touches[0].pageY;
        scrollStartPosX=this.scrollLeft+event.touches[0].pageX;
      },false);

      el.addEventListener("touchmove", function(event) {
        if ((this.scrollTop < this.scrollHeight-this.offsetHeight &&
          this.scrollTop+event.touches[0].pageY < scrollStartPosY-5) ||
          (this.scrollTop != 0 && this.scrollTop+event.touches[0].pageY > scrollStartPosY+5))
              event.preventDefault();  
        if ((this.scrollLeft < this.scrollWidth-this.offsetWidth &&
          this.scrollLeft+event.touches[0].pageX < scrollStartPosX-5) ||
          (this.scrollLeft != 0 && this.scrollLeft+event.touches[0].pageX > scrollStartPosX+5))
              event.preventDefault();  
        this.scrollTop=scrollStartPosY-event.touches[0].pageY;
        this.scrollLeft=scrollStartPosX-event.touches[0].pageX;
      },false);
  }
}