var kirki=kirki||{};kirki=jQuery.extend(kirki,{util:{webfonts:{google:{fonts:{},initialize:function(){var self=this;self.setFonts()},setFonts:function(){var self=this;if(!_.isEmpty(self.fonts)){return}jQuery.post(ajaxurl,{action:"kirki_fonts_google_all_get"},function(response){self.fonts=JSON.parse(response)})},getFont:function(family){var self=this,fonts=self.getFonts();if("undefined"===typeof fonts[family]){return false}return fonts[family]},getFonts:function(order,category,number){var self=this,ordered={},categorized={},plucked={};order=order||"alpha";order="alpha"!==order&&"popularity"!==order&&"trending"!==order?"alpha":order;number=number||0;number=parseInt(number,10);if("alpha"===order){ordered=jQuery.extend({},self.fonts.items)}else{_.each(self.fonts.order[order],function(family){ordered[family]=self.fonts.items[family]})}if(""===category||!category){categorized=ordered}else{_.each(ordered,function(font,family){if(category===font.category){categorized[family]=font}})}if(0<number){_.each(_.first(_.keys(categorized),number),function(family){plucked[family]=categorized[family]});return plucked}return categorized},getVariants:function(family){var self=this,font=self.getFont(family);if(!font){return false}if(_.isUndefined(font.variants)){return false}return font.variants}},standard:{fonts:{},initialize:function(){var self=this;self.setFonts()},setFonts:function(){var self=this;if(!_.isEmpty(self.fonts)){return}jQuery.post(ajaxurl,{action:"kirki_fonts_standard_all_get"},function(response){self.fonts=JSON.parse(response)})},getVariants:function(){return["regular","italic","700","700italic"]}},getFontType:function(family){var self=this;if("undefined"!==typeof self.standard.fonts[family]||"undefined"!==typeof self.standard.fonts.stack&&"undefined"!==typeof self.standard.fonts.stack[family]){return"standard"}if("undefined"!==typeof self.google.fonts.items[family]){return"google"}return false}},validate:{cssValue:function(value){var validUnits=["fr","rem","em","ex","%","px","cm","mm","in","pt","pc","ch","vh","vw","vmin","vmax"],numericValue,unit;if("string"!==typeof value||"number"!==typeof value){return true}if(0===value||"0"===value||"auto"===value||"inherit"===value||"initial"===value){return true}if(0<=value.indexOf("calc(")&&0<=value.indexOf(")")){return true}numericValue=parseFloat(value);unit=value.replace(numericValue,"");if(!value){return}return!isNaN(numericValue)&&-1<jQuery.inArray(unit,validUnits)}},parseHtmlEntities:function(str){var parser=new DOMParser,dom=parser.parseFromString("<!doctype html><body>"+str,"text/html");return dom.body.textContent}}});