!function(t){function n(s){if(e[s])return e[s].exports;var o=e[s]={i:s,l:!1,exports:{}};return t[s].call(o.exports,o,o.exports,n),o.l=!0,o.exports}var e={};n.m=t,n.c=e,n.d=function(t,e,s){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:s})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},n.p="",n(n.s=1089)}({1089:function(t,n,e){"use strict";function s(t){if(Array.isArray(t)){for(var n=0,e=Array(t.length);n<t.length;n++)e[n]=t[n];return e}return Array.from(t)}Object.defineProperty(n,"__esModule",{value:!0});var o=e(1090);e.n(o);wp.hooks.addFilter("editPost.MoreMenu.tools","stylist/edit-post/menuTools/openInStylist",function(t){return[].concat(s(t),[React.createElement("span",null,React.createElement("a",{href:stylistEditLink.href,class:"components-button components-stylist-button components-menu-item__button"},"Open page in Stylist"))])}),function(t){t(document).ready(function(){t(document).on("click",".stlst-btn,.stlst-btn-bottom",function(){if("pending"==t("#hidden_post_status").val()||"private"==t("#hidden_post_status").val()||"draft"==t("#hidden_post_status").val()||"publish"==t("#hidden_post_status").val()||void 0==t("#hidden_post_status").val()){var n=t("#sample-permalink").find("a").attr("href"),e=t("#post_ID").val();"undefined"!=n&&void 0!==n||(n=t("#sample-permalink").text()),-1!=n.indexOf("://")&&(n=n.split("://")[1]),n="admin.php?page=stylist-editor&href="+encodeURIComponent(n)+"&stlst_id="+e,t(this).hasClass("stlst-btn-bottom")?(n=n.split("&stlst_id"),window.open(n[0]+"&stlst_type="+typenow,"_blank")):window.open(n,"_blank")}else alert("Please save this post as draft or publish.")}),0==t("body").hasClass("post-type-attachment")&&t("#postbox-container-1").length>0&&(t("#postbox-container-1").prepend("<a class='stlst-btn-bottom'>OR <small>CUSTOMIZE "+typenow+" TEMPLATE</small> <span class='dashicons dashicons-external'></span></a>"),t("#postbox-container-1").prepend("<a class='stlst-btn'><span class='dashicons dashicons-admin-appearance'></span><small>Edit Page -</small> Stylist</a>"))})}(jQuery)},1090:function(t,n){}});