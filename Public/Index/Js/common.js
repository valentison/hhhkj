/**
*显示flash，避免IE的激活障碍
*@return nothing flash
*@parameter string movie FLASH文件地址
*@parameter int width FLASH宽
*@parameter int height FLASH高
*@parameter string param_name 调用参数名列表
*@parameter string param_value 调用参数名对应的值列表
*/
function flash(movie,width,height,param_name,param_value){
	var swf_html='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+width+'" height="'+height+'">';
	var params;
	swf_html+='<param name="movie" value="'+movie+'">';
	swf_html+='<param name="quality" value="high">';
	if(param_name!="" && param_value!=""){
		var name_arr=new Array();
		var value_arr=new Array();
		name_arr=param_name.split(",");
		value_arr=param_value.split(",");
		if(name_arr.length==value_arr.length){
			for(icount=0; icount<name_arr.length; icount++){
				swf_html+='<param name="'+name_arr[icount]+'" value="'+value_arr[icount]+'">';
				params+=' '+name_arr[icount]+'='+value_arr[icount];
			}
		}
	}
	swf_html+='<embed src="'+movie+'" width="'+width+'" height="'+height+'"'+params+' quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="opaque"></embed>';
	swf_html+='</object>';
	document.write(swf_html);
}

/**
*重定向函数
*@return nothing forword
*@parameter string url 重定向地址
*@parameter string target 目标
*/
function reforward(url,target){
	if(target=="_blank") window.open(url,'','');
	else window.location.href(url);
}

/**
*刷新验证码
*@return nothing refreshVerify
*@parameter string verify_img_name 验证码图片ID
*@parameter string verify_file_name 验证码文件
*/
function refreshVerify(verify_img_name,verify_file_name){
	var now=new Date();
	$('#'+verify_img_name).attr("src",verify_file_name+"-code-"+now.getTime());;
}

//设为首页
function setHomePage(){
	if(document.all){
		var obj=document.links(0);
		if(obj){
			obj.style.behavior='url(#default#homepage)';
			obj.setHomePage(window.location.href);
		}
  	}else{
		if(window.netscape){
			try{
				netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			}catch (e){
				alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'");
			}
		}
		var prefs=Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		prefs.setCharPref('browser.startup.homepage', window.location.href);
   	}
}

//加入收藏
function addFavorite(){
	var url=document.location.href;
	var title=document.title;
	if(document.all) window.external.addFavorite(url,title);
	else if(window.sidebar) window.sidebar.addPanel(title, url,"");
}