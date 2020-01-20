var kirkiDependencies={listenTo:{},init:function(){var self=this;wp.customize.control.each(function(control){self.showKirkiControl(control)});_.each(self.listenTo,function(slaves,master){_.each(slaves,function(slave){wp.customize(master,function(setting){var setupControl=function(control){var setActiveState,isDisplayed;isDisplayed=function(){return self.showKirkiControl(wp.customize.control(slave))};setActiveState=function(){control.active.set(isDisplayed())};setActiveState();setting.bind(setActiveState);control.active.validate=isDisplayed};wp.customize.control(slave,setupControl)})})})},showKirkiControl:function(control){var self=this,show=true,isOption=control.params&&control.params.kirkiOptionType&&"option"===control.params.kirkiOptionType&&control.params.kirkiOptionName&&!_.isEmpty(control.params.kirkiOptionName),i;if(_.isString(control)){control=wp.customize.control(control)}if("undefined"===typeof control||control.params&&_.isEmpty(control.params.required)){return true}for(i=0;i<control.params.required.length;i++){if(!self.checkCondition(control.params.required[i],control,isOption,"AND")){show=false}}return show},checkCondition:function(requirement,control,isOption,relation){var self=this,childRelation="AND"===relation?"OR":"AND",nestedItems,i;if(isOption&&requirement.setting){if(-1===requirement.setting.indexOf(control.params.kirkiOptionName+"[")){requirement.setting=control.params.kirkiOptionName+"["+requirement.setting+"]"}}if("undefined"!==typeof requirement[0]&&"undefined"===typeof requirement.setting){nestedItems=[];for(i=0;i<requirement.length;i++){nestedItems.push(self.checkCondition(requirement[i],control,isOption,childRelation))}if("OR"===childRelation){return-1!==nestedItems.indexOf(true)}return-1===nestedItems.indexOf(false)}if("undefined"===typeof wp.customize.control(requirement.setting)){return true}self.listenTo[requirement.setting]=self.listenTo[requirement.setting]||[];if(-1===self.listenTo[requirement.setting].indexOf(control.id)){self.listenTo[requirement.setting].push(control.id)}return self.evaluate(requirement.value,wp.customize.control(requirement.setting).setting._value,requirement.operator)},evaluate:function(value1,value2,operator){var found=false;if("==="===operator){return value1===value2}if("=="===operator||"="===operator||"equals"===operator||"equal"===operator){return value1==value2}if("!=="===operator){return value1!==value2}if("!="===operator||"not equal"===operator){return value1!=value2}if(">="===operator||"greater or equal"===operator||"equal or greater"===operator){return value2>=value1}if("<="===operator||"smaller or equal"===operator||"equal or smaller"===operator){return value2<=value1}if(">"===operator||"greater"===operator){return value2>value1}if("<"===operator||"smaller"===operator){return value2<value1}if("contains"===operator||"in"===operator){if(_.isArray(value1)&&_.isArray(value2)){_.each(value2,function(value){if(value1.includes(value)){found=true;return false}});return found}if(_.isArray(value2)){_.each(value2,function(value){if(value==value1){found=true}});return found}if(_.isObject(value2)){if(!_.isUndefined(value2[value1])){found=true}_.each(value2,function(subValue){if(value1===subValue){found=true}});return found}if(_.isString(value2)){if(_.isString(value1)){return-1<value1.indexOf(value2)&&-1<value2.indexOf(value1)}return-1<value1.indexOf(value2)}}return value1==value2}};jQuery(document).ready(function(){kirkiDependencies.init()});