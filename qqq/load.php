var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/wiki/load.php","apiScript":"/wiki/api.php"}});mw.loader.register([["site","1383928543",[],"site"],["noscript","1383928543",[],"noscript"],["startup","1406393033",[],"startup"],["user","1383928543",[],"user"],["user.groups","1383928543",[],"user"],["user.options","1406393033",[],"private"],["user.cssprefs","1406393033",["mediawiki.user"],"private"],["user.tokens","1383928543",[],"private"],["filepage","1383928543",[]],["skins.chick","1390870827",[]],["skins.cologneblue","1390870827",[]],["skins.modern","1390870827",[]],["skins.monobook","1390870827",[]],["skins.nostalgia","1390870827",[]],["skins.simple","1390870827",[]],["skins.standard","1390870827",[]],["skins.vector","1390870827",[]],["jquery","1390870827",[]],["jquery.appear",
"1390870827",[]],["jquery.arrowSteps","1390870827",[]],["jquery.async","1390870827",[]],["jquery.autoEllipsis","1390870827",["jquery.highlightText"]],["jquery.byteLength","1390870827",[]],["jquery.byteLimit","1390870827",["jquery.byteLength"]],["jquery.checkboxShiftClick","1390870827",[]],["jquery.client","1390870827",[]],["jquery.collapsibleTabs","1390870827",[]],["jquery.color","1390870827",["jquery.colorUtil"]],["jquery.colorUtil","1390870827",[]],["jquery.cookie","1390870827",[]],["jquery.delayedBind","1390870827",[]],["jquery.expandableField","1390870827",["jquery.delayedBind"]],["jquery.farbtastic","1390870827",["jquery.colorUtil"]],["jquery.footHovzer","1390870827",[]],["jquery.form","1390870827",[]],["jquery.getAttrs","1390870827",[]],["jquery.highlightText","1390870827",[]],["jquery.hoverIntent","1390870827",[]],["jquery.json","1390870827",[]],["jquery.localize","1390870827",[]],["jquery.makeCollapsible","1396458730",[]],["jquery.messageBox","1390870827",[]],["jquery.mockjax",
"1390870827",[]],["jquery.mw-jump","1390870827",[]],["jquery.mwExtension","1390870827",[]],["jquery.placeholder","1390870827",[]],["jquery.qunit","1390870827",[]],["jquery.qunit.completenessTest","1390870827",["jquery.qunit"]],["jquery.spinner","1390870827",[]],["jquery.suggestions","1390870827",["jquery.autoEllipsis"]],["jquery.tabIndex","1390870827",[]],["jquery.tablesorter","1390870827",["jquery.mwExtension"]],["jquery.textSelection","1390870827",[]],["jquery.validate","1390870827",[]],["jquery.xmldom","1390870827",[]],["jquery.tipsy","1390870827",[]],["jquery.ui.core","1390870827",["jquery"],"jquery.ui"],["jquery.ui.widget","1390870827",[],"jquery.ui"],["jquery.ui.mouse","1390870827",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1390870827",[],"jquery.ui"],["jquery.ui.draggable","1390870827",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1390870827",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"]
,"jquery.ui"],["jquery.ui.resizable","1390870827",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1390870827",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1390870827",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1390870827",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1390870827",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1390870827",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1390870827",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1390870827",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1390870827",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1390870827",[
"jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1390870827",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1390870827",["jquery"],"jquery.ui"],["jquery.effects.blind","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1390870827",[
"jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1390870827",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1390870827",["jquery.effects.core"],"jquery.ui"],["mediawiki","1390870827",[]],["mediawiki.api","1390870827",["mediawiki.util"]],["mediawiki.api.category","1390870827",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1390870827",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1390870827",["mediawiki.api"]],["mediawiki.api.titleblacklist","1390870827",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1390870827",["mediawiki.api","mediawiki.user"]],["mediawiki.debug","1390870827",["jquery.footHovzer"]],["mediawiki.debug.init","1390870827",["mediawiki.debug"]],["mediawiki.feedback","1390870827",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1390870827",[]],["mediawiki.Title","1390870827",["mediawiki.util"]],["mediawiki.Uri","1390870827",[]],["mediawiki.user",
"1390870827",["jquery.cookie"]],["mediawiki.util","1396458729",["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"]],["mediawiki.action.edit","1390870827",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.history","1390870827",["jquery.ui.button"],"mediawiki.action.history"],["mediawiki.action.history.diff","1390870827",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1390870827",["mediawiki.util"]],["mediawiki.action.view.metadata","1390870827",[]],["mediawiki.action.view.rightClickEdit","1390870827",[]],["mediawiki.action.watch.ajax","1398018955",["mediawiki.api.watch","mediawiki.util"]],["mediawiki.language","1390870827",[]],["mediawiki.jqueryMsg","1390870827",["mediawiki.language","mediawiki.util"]],["mediawiki.libs.jpegmeta","1390870827",[]],["mediawiki.page.ready","1390870827",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1390870827"
,["jquery.client","mediawiki.util"]],["mediawiki.special","1390870827",[]],["mediawiki.special.block","1390870827",["mediawiki.util"]],["mediawiki.special.changeemail","1390870827",["mediawiki.util"]],["mediawiki.special.changeslist","1390870827",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1390870827",["jquery.byteLimit"]],["mediawiki.special.preferences","1390870827",[]],["mediawiki.special.recentchanges","1390870827",["mediawiki.special"]],["mediawiki.special.search","1390870827",[]],["mediawiki.special.undelete","1390870827",[]],["mediawiki.special.upload","1390870827",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1390870827",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1390870827",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1390870827",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1390870827",[]],[
"mediawiki.legacy.config","1390870827",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1390870827",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1390870827",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.preview","1390870827",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1390870827",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1390870827",[]],["mediawiki.legacy.oldshared","1390870827",[]],["mediawiki.legacy.upload","1390870827",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1390870827",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1390870827",[]]]);mw.config.set({"wgLoadScript":"/wiki/load.php","debug":false,"skin":"monobook","stylepath":"/wiki/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/",
"wgArticlePath":"/wiki/index.php?title=$1","wgScriptPath":"/wiki","wgScriptExtension":".php","wgScript":"/wiki/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://www.opendcim.org","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.11","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"OpenDCIM Wiki","5":"OpenDCIM Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,
"opendcim_wiki":4,"opendcim_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"OpenDCIM Wiki","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"opendcim_org","wgFileCanRotate":true,"wgAvailableSkins":{"vector":"Vector","simple":"Simple","myskin":"MySkin","monobook":"MonoBook","nostalgia":"Nostalgia","cologneblue":"CologneBlue","chick":"Chick","standard":"Standard","modern":"Modern"},"wgExtensionAssetsPath":"/wiki/extensions","wgCookiePrefix":"opendcim_org_wiki_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[]});};if(isCompatible()){document.write("\x3cscript src=\"/wiki/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=monobook\x26amp;version=20140128T010027Z\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: opendcim_org-wiki_:resourceloader:filter:minify-js:7:cc19471bfc20b8d1730b4f45284323b7 */
