//>>built
define("phpr/Timehelper",["exports","dojo/number"],function(c,d){var b=function(a){return"0"===a.substr(0,1)?a.substr(1):a};c.datetimeToJsDate=function(a){return new Date(a.substr(0,4),b(a.substr(5,2))-1,b(a.substr(8,2)),b(a.substr(11,2)),b(a.substr(14,2)),b(a.substr(17,2)))};c.timeToJsDate=function(a){return new Date(0,0,0,b(a.substr(0,2)),b(a.substr(3,2)),b(a.substr(6,2)))};c.timeToJsDateWithReferenceDate=function(a,e){return new Date(e.getFullYear(),e.getMonth(),e.getDate(),b(a.substr(0,2)),b(a.substr(3,
2)),b(a.substr(6,2)))};c.jsDateToIsoDate=function(a){var b=d.format(a.getDate(),{pattern:"00"}),c=d.format(a.getMonth()+1,{pattern:"00"});return a.getFullYear()+"-"+c+"-"+b};c.jsDateToIsoTime=function(a){var b;b=a.getHours();a=a.getMinutes();if(isNaN(b)||24<b||0>b)hour="00";if(isNaN(a)||60<a||0>a)a="00";return d.format(b,{pattern:"00"})+":"+d.format(a,{pattern:"00"})};c.jsDateToIsoDatetime=function(a){null===a&&(a=new Date);return c.jsDateToIsoDate(a)+" "+c.jsDateToIsoTime(a)}});