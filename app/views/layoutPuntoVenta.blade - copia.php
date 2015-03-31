<!DOCTYPE html>
<html>
  <head>
    <title>:: SALT ::</title>
    <meta charset="UTF-8">
<!--
    <script type="text/javascript">
      (window.NREUM||(NREUM={})).loader_config={xpid:"UQcFWVNbGwEDU1RVDwE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),u=c.length,f=i(a,o,r),d=0;u>d;d++)c[d].apply(f,n);return f}function a(t,e){u[t]=s(t).concat(e)}function s(t){return u[t]||[]}function c(){return n(e)}var u={};return{on:a,emit:e,create:c,listeners:s,_events:u}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(u){try{r("ierr",[u,(new Date).getTime(),!0])}catch(f){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(4),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(u){"stack"in u&&(t(5),t(3),"addEventListener"in window&&t(1),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(2),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:4,2:7,3:5,4:18,5:6,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:18,2:19,ee:"QJf3ax",gos:"7eSDFh"}],5:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:19,2:18,ee:"QJf3ax"}],6:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:19,2:18,ee:"QJf3ax"}],7:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),u=s(a),f=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new f(t);try{i.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=f.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:4,2:19,ee:"QJf3ax"}],8:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,u="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,f=e(u);if(f&&(r.rxSize=f),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,u=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var u=e(o);u&&(r.txSize=u)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var f=0;c>f;f++)n.addEventListener(s[f],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+u(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+u(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:9,3:7,4:4,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],9:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,u="addEventListener",f="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[u]?(c[u]("DOMContentLoaded",o,!1),s[u]("load",n,!1)):(c[f]("onreadystatechange",r),s[f]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],18:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],19:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,u;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){f([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return u=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,u],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,u(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,u="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,u?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){f([o,e,n,r])}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){f([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function f(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:18,ee:"QJf3ax"}]},{},["G9z0Bl",3,8]);
    </script>
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <base href="https://demo.phppointofsale.com/">
        <link rel="icon" href="https://demo.phppointofsale.com/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/bootstrap-3.min.css?14.4" media="all">
        <!--<link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery.gritter.css?14.4" media="all">
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery-ui.css?14.4" media="all">-->
       <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/unicorn.css?14.4" media="all">
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/custom.css?14.4" media="all">
        <!--<link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/datepicker.css?14.4" media="all">
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/bootstrap-select.css?14.4" media="all">-->

        <!--<link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/select2.css?14.4" media="all">-->
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/font-awesome.min.css?14.4" media="all">
        <!--<link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/jquery.loadmask.css?14.4" media="all">
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/token-input-facebook.css?14.4" media="all">-->
        <link rel="stylesheet" rev="stylesheet" href="https://demo.phppointofsale.com/css/KeyTips.min.css?14.4" media="all">
        <script type="text/javascript">
          var SITE_URL= "https://demo.phppointofsale.com/index.php";
        </script>
    
    <!--
        <script src="https://demo.phppointofsale.com/js/all.js?14.4" type="text/javascript" language="javascript" charset="UTF-8"></script>
      -->
    <!--
        <script type="text/javascript">
          COMMON_SUCCESS = "Success";
          COMMON_ERROR = "Error";
          $.ajaxSetup ({
            cache: false,
            headers: { "cache-control": "no-cache" }
          });
          
          $(document).ready(function()
          {
            //Ajax submit current location
            $("#employee_current_location_id").change(function()
            {
              $("#form_set_employee_current_location_id").ajaxSubmit(function()
              {
                window.location.reload(true);
              });
            });
            
            //Keep session alive by sending a request every 5 minutes
            setInterval(function(){$.get('https://demo.phppointofsale.com/index.php/home/keep_alive');}, 300000);
          });
        </script>-->
    
  </head>












  @yield('content')











<!--
<script type="text/javascript" language="javascript">
var submitting = false;
$(document).ready(function()
{   
  //Here just in case the loader doesn't go away for some reason
  $("#ajax-loader").hide();
  
            setTimeout(function(){$('#item').focus();}, 10);  
      
    $(document).focusin(function(event) 
    {
      last_focused_id = $(event.target).attr('id');
    });
    $('#mode_form, #select_supplier_form,#select_location_form,.line_item_form').ajaxForm({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
  $('#add_item_form').ajaxForm({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});
  
  $( "#item" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/item_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {
      event.preventDefault();
      $( "#item" ).val(ui.item.value);
      $('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});
    },
    change: function(event, ui)
    {
      if ($(this).attr('value') != '' && $(this).attr('value') != "Enter item name or scan barcode")
      {
        $("#add_item_form").ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
      }
  
        $(this).attr('value',"Enter item name or scan barcode");
    }
  });
  
  $("#cart_contents input").change(function()
  {
    $(this.form).ajaxSubmit({target: "#register_container",beforeSubmit: receivingsBeforeSubmit});
  });
  
  $('#item,#supplier,#location').click(function()
    {
      $(this).attr('value','');
    });

  $('#mode').change(function()
  {
    $('#mode_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
  });
  
  $('#comment').change(function() 
  {
    $.post('https://demo.phppointofsale.com/index.php/receivings/set_comment', {comment: $('#comment').val()});
  });

  $( "#supplier" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/supplier_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {     
      $( "#supplier" ).val(ui.item.value);
      $('#select_supplier_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});    
    }
  });

  $( "#location" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/location_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {
      $( "#location" ).val(ui.item.value);
      $('#select_location_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});     
    }
  });


    $('#supplier').blur(function()
    {
      $(this).attr('value',"Type supplier's name...");
    });

    $('#location').blur(function()
    {
      $(this).attr('value',"Type Location Name");
    });


    $("#finish_sale_form").submit(function()
  {
          
      if (confirm("Are you sure you want to submit this receiving? This cannot be undone."))
        {
        //Prevent double submission of form
        $("#finish_sale_button").hide();
        return true;
        }
      else {
        return false;
      }
  });
    $("#finish_sale_button").click(function()
    {
    $('#finish_sale_form').submit();
  });

    $("#cancel_sale_button").click(function()
    {
      if (confirm("Are you sure you want to clear this receiving? All items will cleared."))
      {
      $('#cancel_sale_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
      }
    });

  $('.delete_item, #delete_supplier, #delete_location').click(function(event)
  {
    event.preventDefault();
    $("#register_container").load($(this).attr('href'));  
  });

  $("input[type=text]").click(function() {
    $(this).select();
  });
  
  $("#new-supplier").click(function()
  {
    $("body").mask("Please wait...");     
  });
  
  $("#suspend_recv_button").click(function()
  {
    if (confirm("Are you sure you want to suspend this receiving?"))
    {
      if ($("#comment").val())
      {
        $.post('https://demo.phppointofsale.com/index.php/receivings/set_comment', {comment: $('#comment').val()}, function()
        {
          doSuspendRecv();
        });           
      }
      else
      {
        doSuspendRecv();  
      }
    }
  });
});

function doSuspendRecv()
{
      window.location = 'https://demo.phppointofsale.com/index.php/receivings/suspend';
  }
function receivingsBeforeSubmit(formData, jqForm, options)
{
  if (submitting)
  {
    return false;
  }
  submitting = true;
  
  $("#ajax-loader").show();
  $("#finish_sale_button").hide();
}

function itemScannedSuccess(responseText, statusText, xhr, $form)
{
  setTimeout(function(){$('#item').focus();}, 10);
}

</script>
-->

</div>
</div>
    




<!--
<script type="text/javascript" language="javascript">
var submitting = false;
$(document).ready(function()
{   
  //Here just in case the loader doesn't go away for some reason
  $("#ajax-loader").hide();
  
            setTimeout(function(){$('#item').focus();}, 10);  
      
    $(document).focusin(function(event) 
    {
      last_focused_id = $(event.target).attr('id');
    });
    $('#mode_form, #select_supplier_form,#select_location_form,.line_item_form').ajaxForm({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
  $('#add_item_form').ajaxForm({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});
  
  $( "#item" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/item_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {
      event.preventDefault();
      $( "#item" ).val(ui.item.value);
      $('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});
    },
    change: function(event, ui)
    {
      if ($(this).attr('value') != '' && $(this).attr('value') != "Enter item name or scan barcode")
      {
        $("#add_item_form").ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
      }
  
        $(this).attr('value',"Enter item name or scan barcode");
    }
  });
  
  $("#cart_contents input").change(function()
  {
    $(this.form).ajaxSubmit({target: "#register_container",beforeSubmit: receivingsBeforeSubmit});
  });
  
  $('#item,#supplier,#location').click(function()
    {
      $(this).attr('value','');
    });

  $('#mode').change(function()
  {
    $('#mode_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
  });
  
  $('#comment').change(function() 
  {
    $.post('https://demo.phppointofsale.com/index.php/receivings/set_comment', {comment: $('#comment').val()});
  });

  $( "#supplier" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/supplier_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {     
      $( "#supplier" ).val(ui.item.value);
      $('#select_supplier_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: itemScannedSuccess});    
    }
  });

  $( "#location" ).autocomplete({
    source: 'https://demo.phppointofsale.com/index.php/receivings/location_search',
    delay: 300,
    autoFocus: false,
    minLength: 1,
    select: function(event, ui)
    {
      $( "#location" ).val(ui.item.value);
      $('#select_location_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});     
    }
  });


    $('#supplier').blur(function()
    {
      $(this).attr('value',"Type supplier's name...");
    });

    $('#location').blur(function()
    {
      $(this).attr('value',"Type Location Name");
    });


    $("#finish_sale_form").submit(function()
  {
          
      if (confirm("Are you sure you want to submit this receiving? This cannot be undone."))
        {
        //Prevent double submission of form
        $("#finish_sale_button").hide();
        return true;
        }
      else {
        return false;
      }
  });
    $("#finish_sale_button").click(function()
    {
    $('#finish_sale_form').submit();
  });

    $("#cancel_sale_button").click(function()
    {
      if (confirm("Are you sure you want to clear this receiving? All items will cleared."))
      {
      $('#cancel_sale_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit});
      }
    });

  $('.delete_item, #delete_supplier, #delete_location').click(function(event)
  {
    event.preventDefault();
    $("#register_container").load($(this).attr('href'));  
  });

  $("input[type=text]").click(function() {
    $(this).select();
  });
  
  $("#new-supplier").click(function()
  {
    $("body").mask("Please wait...");     
  });
  
  $("#suspend_recv_button").click(function()
  {
    if (confirm("Are you sure you want to suspend this receiving?"))
    {
      if ($("#comment").val())
      {
        $.post('https://demo.phppointofsale.com/index.php/receivings/set_comment', {comment: $('#comment').val()}, function()
        {
          doSuspendRecv();
        });           
      }
      else
      {
        doSuspendRecv();  
      }
    }
  });
});

function doSuspendRecv()
{
      window.location = 'https://demo.phppointofsale.com/index.php/receivings/suspend';
  }
function receivingsBeforeSubmit(formData, jqForm, options)
{
  if (submitting)
  {
    return false;
  }
  submitting = true;
  
  $("#ajax-loader").show();
  $("#finish_sale_button").hide();
}

function itemScannedSuccess(responseText, statusText, xhr, $form)
{
  setTimeout(function(){$('#item').focus();}, 10);
}

</script>
-->
</div>






<script type="text/javascript">
$(document).ready(function()
{
  $("#show_grid").click(function()
  {
    $("#category_item_selection_wrapper").slideDown();
    $("#show_grid").hide();
    $("#hide_grid").show();
  });

  $("#hide_grid,#hide_grid_top").click(function()
  {
    $("#category_item_selection_wrapper").slideUp();
    $("#show_grid").show();
    $("#hide_grid").hide();
  });
  
      $("#show_grid").click();
  
  var current_category = null;

  function load_categories()
  {
    $.get('https://demo.phppointofsale.com/index.php/sales/categories', function(json)
    {
      processCategoriesResult(json);
    }, 'json'); 
  }

/*

  $(document).on('click', ".pagination.categories a", function(event)
  {
    $("#category_item_selection_wrapper").mask("Please wait...");
    event.preventDefault();
    var offset = $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);
  
    $.get('https://demo.phppointofsale.com/index.php/sales/categories/'+offset, function(json)
    {
      processCategoriesResult(json);

    }, "json");
  });

  $(document).on('click', ".pagination.items a", function(event)
  {
    $("#category_item_selection_wrapper").mask("Please wait...");
    event.preventDefault();
    var offset = $(this).attr('href').substring($(this).attr('href').lastIndexOf('/') + 1);
  
    $.post('https://demo.phppointofsale.com/index.php/sales/items/'+offset, {category: current_category}, function(json)
    {
      processItemsResult(json);
    }, "json");
  });

  $('#category_item_selection_wrapper').on('click','.category_item.category', function(event)
  {
    $("#category_item_selection_wrapper").mask("Please wait...");
    
    event.preventDefault();
    current_category = $(this).text();
    $.post('https://demo.phppointofsale.com/index.php/sales/items', {category: current_category}, function(json)
    {
      processItemsResult(json);
    }, "json");
  });

  $('#category_item_selection_wrapper').on('click','.category_item.item', function(event)
  {   
    $("#category_item_selection_wrapper").mask("Please wait...");
    event.preventDefault();
    $( "#item" ).val($(this).data('id'));
    $('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success:function(response)
    {
      gritter("Success","You have successfully added item",'gritter-item-success',false,false);     $("#category_item_selection_wrapper").unmask();
      
    }});  
  });

  $("#category_item_selection_wrapper").on('click', '#back_to_categories', function(event)
  {
    $("#category_item_selection_wrapper").mask("Please wait...");
    
    event.preventDefault();
    load_categories();
  });

  function processCategoriesResult(json)
  { 
    $("#category_item_selection_wrapper .pagination").removeClass('items').addClass('categories');
    $("#category_item_selection_wrapper .pagination").html(json.pagination);
  
    $("#category_item_selection").html('');
  
    for(var k=0;k<json.categories.length;k++)
    {
      var category_item = $("<div/>").attr('class', 'category_item category col-md-2 col-sm-3 col-xs-6').append('<p>'+json.categories[k]+'</p>');
      $("#category_item_selection").append(category_item);
    }
    
    $("#category_item_selection_wrapper").unmask();
  }

  function processItemsResult(json)
  {
    $("#category_item_selection_wrapper .pagination").removeClass('categories').addClass('items');
    $("#category_item_selection_wrapper .pagination").html(json.pagination);

    $("#category_item_selection").html('');
  
    var back_to_categories_button = $("<div/>").attr('id', 'back_to_categories').attr('class', 'category_item back-to-categories col-md-2 col-sm-3 col-xs-6').append('<p>&laquo; '+"Back To Categories"+'</p>');
    $("#category_item_selection").append(back_to_categories_button);

    for(var k=0;k<json.items.length;k++)
    {
      var image_src = json.items[k].image_src;
      var prod_image = "";
      var item_parent_class = "";
      if (image_src != '' ) {
        var item_parent_class = "item_parent_class";
        var prod_image = '<div class="prod_image"><img style="width:167px; height:80px;" src="'+image_src+'" alt="" /></div>';
      }
      
      var item = $("<div/>").attr('class', 'category_item item col-md-2 col-sm-3 col-xs-6 '+item_parent_class).attr('data-id', json.items[k].id).append(prod_image+'<p>'+json.items[k].name+'</p>');
      $("#category_item_selection").append(item);
    }
    
    $("#category_item_selection_wrapper").unmask();
  
  }
  load_categories();
});

  var last_focused_id = null;
  setTimeout(function(){$('#item').focus();}, 10);
*/
</script>












  <!--end #content-->
  <!--end #wrapper-->
  <!--
  <script type="text/javascript">
    window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-2.newrelic.com","licenseKey":"653e27187f","applicationID":"2375780","transactionName":"bwdVbUoEVhcAAUUMDlZNdlpMDFcKTjBUBgRRFF5XXxYXDQ8GVB0=","queueTime":0,"applicationTime":71,"ttGuid":"","agentToken":"","atts":"Q0BWGwIeRRk=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}
  </script>

  <script src="https://js-agent.newrelic.com/nr-476.min.js"></script>
  <script type="text/javascript" src="https://beacon-2.newrelic.com/1/653e27187f?a=2375780&amp;pl=1423187114406&amp;v=476.c73f3a6&amp;to=bwdVbUoEVhcAAUUMDlZNdlpMDFcKTjBUBgRRFF5XXxYXDQ8GVB0%3D&amp;ap=71&amp;be=2357&amp;fe=1273&amp;dc=1135&amp;f=%5B%22err%22,%22xhr%22%5D&amp;perf=%7B%22timing%22:%7B%22of%22:1423187114406,%22n%22:0,%22u%22:2337,%22ue%22:2338,%22dl%22:2350,%22di%22:3491,%22ds%22:3491,%22de%22:3627,%22dc%22:3629,%22l%22:3629,%22le%22:3633,%22f%22:0,%22dn%22:0,%22dne%22:0,%22c%22:0,%22ce%22:0,%22rq%22:4,%22rp%22:2335,%22rpe%22:3486%7D,%22navigation%22:%7B%7D%7D&amp;at=Q0BWGwIeRRk%3D&amp;jsonp=NREUM.setToken"></script>

  <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-5" tabindex="0" style="display: none;"></ul>
  <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-6" tabindex="0" style="display: none;"></ul>
-->

</body>
</html>
