/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($){$('select[name="settings[style]"]').bind("change",function(){$("#form").trigger("submit")});$("button.action.add").bind("click",function(){$.post(widgetkitajax+"&task=item_map",{id:$('input[name="id"]').val()},function(data){$(data).appendTo("#items");$("#order").trigger("update")})});if($('input[name="id"]').val()==0){$("button.action.add").trigger("click")}$("#items").delegate(".box","delete",function(e,button){$(this).fadeOut(300,function(){$(this).remove();$("#order").trigger("update")})});$("#items").delegate("input.title","update",function(){var item=$(this).closest(".item");var value=$(this).val()?$(this).val():"untitled";var title=item.find("h3.title");if(item.is(".item:first-child")){title.html(value+'<span class="info">center</span>')}else{title.html(value)}$('#order li[rel="'+item.attr("id")+'"]').html(value)});$("#order").sortable({axis:"y",start:function(event,ui){$("#"+ui.item.attr("rel")).addClass("sortactive")},stop:function(event,ui){setTimeout(function(){$("#"+ui.item.attr("rel")).removeClass("sortactive")},800)},update:function(event,ui){var item=$("#"+ui.item.attr("rel"));var next=ui.item.next();var prev=ui.item.prev();item.find(".html-editor").trigger("editor-action-start");if(next.length){item.insertBefore($("#"+next.attr("rel")))}else{item.insertAfter($("#"+prev.attr("rel")))}item.find(".html-editor").trigger("editor-action-stop");$("#order").trigger("update")}}).bind("update",function(){var $this=$(this);$("li",this).each(function(){if(!$("#"+$(this).attr("rel")).length)$(this).remove()});$("#items > .item").each(function(i){var id=$(this).attr("id");if(!$this.find("[rel='"+id+"']").length){$this.append('<li rel="'+id+'"></li>')}$("input.title",this).trigger("update")})}).trigger("update");var locator=$("#addresslocator"),address=locator.find("input.address"),lat=locator.find("input.lat"),lng=locator.find("input.lng"),map=locator.find("div.map");var gmap=new google.maps.Map(map.get(0),{zoom:4,streetViewControl:false,center:new google.maps.LatLng(-34.397,150.644),mapTypeId:google.maps.MapTypeId.ROADMAP});if(lat.val()!=""&&lng.val()!=""){var initpoint=new google.maps.LatLng(lat.val(),lng.val())}else{var initpoint=new google.maps.LatLng(51.151786,10.415039);lat.val(51.151786);lng.val(10.415039)}gmap.setCenter(initpoint);var marker=new google.maps.Marker({position:initpoint,draggable:true,map:gmap});google.maps.event.addListener(marker,"dragend",function(){lat.val(marker.position.lat());lng.val(marker.position.lng())});$("#items").delegate(".loc-data","click",function(){var $loc=$(this),$spn=$loc.find("span:first"),$lat=$loc.find('input[name$="[lat]"]'),$lng=$loc.find('input[name$="[lng]"]');address.autocomplete({delay:500,minLength:3,source:function(request,response){$.getJSON(widgetkitajax+"&task=locate_map",{address:address.val()},function(data){var ret=response($.map(data.results,function(item){return{label:item.formatted_address,value:item.formatted_address,lat:item.geometry.location.lat,lng:item.geometry.location.lng}}))})},select:function(event,ui){lat.val(ui.item.lat);lng.val(ui.item.lng);var point=new google.maps.LatLng(lat.val(),lng.val());marker.setPosition(point);gmap.setCenter(point)}});address.val("");lat.val($lat.val());lng.val($lng.val());var point=new google.maps.LatLng($lat.val(),$lng.val());marker.setPosition(point);gmap.setCenter(point);locator.find("button").unbind("click").bind("click",function(){$lat.val(lat.val());$lng.val(lng.val());$spn.html("(Lat: "+lat.val()+", Lng: "+lng.val()+")");$.modalwin.close()});$.modalwin(locator)})});