@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background: rgb(32, 32, 32) url('styles/black_responsive_blue/xenforo/layout/pattern.png') repeat top;
min-height: 100%;
min-width: 240px;

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-family: 'Trebuchet MS', Helvetica, Arial, sans-serif;
color: rgb(200, 200, 200);
word-wrap: break-word;
line-height: 1.28;

}

#headerMover
{
	background: rgb(8, 8, 8) url('img/background.png') repeat top;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: #ffffff;
text-decoration: none;

}

	a[href]:hover
	{
		color: rgb(13, 94, 145);
text-decoration: underline;

	}
	
	a:hover
	{
		_color: rgb(13, 94, 145);
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			-webkit-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); -moz-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); -khtml-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5);
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				-webkit-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); -moz-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); -khtml-box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5); box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5);
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		color: rgb(158, 205, 230);
padding: 0 3px;
margin: 0 -3px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: rgb(13, 94, 145);
-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
zoom: 1;
text-shadow: 0 0 0 transparent, 1px 1px 2px rgba(0, 0, 0, 0.5);

}

	.titleBar h1 em
	{
		color: rgb(153, 153, 153);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 11px;
color: rgb(112, 112, 112);
margin-top: 2px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(32, 32, 32);
padding: 2px;
border: 1px solid rgb(32, 32, 32);

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 0;
	background-color: transparent;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(153, 153, 153); }
body .muted, body a.muted, body .muted a { color: rgb(112, 112, 112); }
body .faint, body a.faint, body .faint a { color: rgb(80, 80, 80); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background-color: rgb(64, 64, 64);
padding: 5px 10px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top: 6px solid rgb(64, 64, 64);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color: rgb(64, 64, 64);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 10px solid #3f3f3f;
-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
position: relative;
-webkit-box-shadow: 0px 12px 25px rgba(0,0,0, 0.75); -moz-box-shadow: 0px 12px 25px rgba(0,0,0, 0.75); -khtml-box-shadow: 0px 12px 25px rgba(0,0,0, 0.75); box-shadow: 0px 12px 25px rgba(0,0,0, 0.75);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(63, 63, 63); border-color:  rgba(63, 63, 63, 0.75); _border-color:  rgb(63, 63, 63);
}

	.xenPreviewTooltip .arrow
	{
		border-top: 15px solid rgb(32, 32, 32);
border-right: 15px solid transparent;
border-bottom: 1px none #3f3f3f;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(32, 32, 32);
border-right: 15px solid transparent;
border-bottom: 1px none #3f3f3f;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		margin: 0;
	}

	.xenPreviewTooltip .section
	{
		background-color: rgb(32, 32, 32);
		background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 70%);
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 70%);
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
			padding: 10px;
		}

/* ***************************** */

.importantMessage
{
	position: relative;
	color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 5px;
margin: 10px 0 12px;
border: 1px solid rgb(13, 94, 145);
text-align: center;
-webkit-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.1) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.1) 100%);
-moz-osx-font-smoothing: grayscale;

}

.importantMessage a
{
	font-weight: 600;
	color: inherit !important;
	text-decoration: underline;
}

/* ***************************** */

.section
{
	margin: 10px auto;

}

	.tabs + .section
	{
		margin-top: 0;
	}

	.xengallery_find_new_no_response .tabs + .section,
	.find_new_posts_none .tabs + .section
	{
		margin-top: 10px;
	}

.sectionMain
{
}

	.sectionMain > .section:first-child
	{
		margin-top: 0;
	}

	.sectionMain > .section:last-child
	{
		margin-bottom: 0;
	}

.heading,
.xenForm .formHeader
{
	font-weight: bold;
font-size: 11pt;
color: rgb(173, 173, 173);
padding: 5px 10px;
margin-bottom: 3px;

}

	.heading a { color: rgb(173, 173, 173); }

	.xenForm .formHeader,
	.xenOverlay .heading,
	.editorPopup .heading
	{
		background-color: rgb(13, 94, 145);
		color: #ffffff;
		border-bottom-width: 0;
	}

.subHeading
{
	font-size: 11px;
color: rgb(104, 104, 104);
padding: 5px 10px;
margin: 3px auto 0;

}

	.subHeading a { color: rgb(104, 104, 104); }

.textHeading,
.xenForm .sectionHeader
{
	font-weight: bold;
color: rgb(200, 200, 200);
padding-bottom: 2px;
margin: 10px auto 5px;
border-bottom: 1px solid rgb(22, 22, 22);

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(200, 200, 200);
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
	}

.primaryContent
{
	padding: 9px;

}

	.primaryContent a
	{
		color: #ffffff;

	}

.secondaryContent
{
	padding: 9px;

}

	.secondaryContent a
	{
		color: #ffffff;

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
color: rgb(112, 112, 112);
background: transparent none;
padding: 4px 10px;
border-top: 1px solid rgb(44, 44, 44);
border-bottom: 1px solid rgb(22, 22, 22);
line-height: 16px;

}

	.handleReportForm .sectionFooter
	{
		margin: 10px 0;
		background: rgb(32, 32, 32);
	}
	
	.section .secondaryContent + .sectionFooter
	{
		background: transparent none;
		border-width: 0;
	}

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

/* Backgrounds for sections */
	
.sectionMain,
.primaryContent,
.secondaryContent,
.memberList,
#recentActivity,
.resourceList,
#warnings > div[class=""]
{
	background-color: rgb(32, 32, 32);
padding: 9px;
margin-bottom: 10px;
border: 1px solid rgb(32, 32, 32);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
position: relative;

}

	.discussionList,
	.memberList,
	.messageList .message.messageFullBlock,
	#ProfilePanes #info
	{
		background-color: rgb(32, 32, 32);
padding: 9px;
margin-bottom: 10px;
border: 1px solid rgb(32, 32, 32);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
position: relative;

	}

	.FollowList.memberList,
	a.primaryContent,
	a.secondaryContent,
	form.sectionMain .secondaryContent,
	.watch_forums .sectionMain,
	.sidebar .sectionMain .secondaryContent
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	}

	.sectionMain:after,
	.sidebar .secondaryContent:after,
	.xengallerySideBar .secondaryContent:after,
	.profilePage .mast .primaryContent:after,
	.profilePage .mast .secondaryContent:after,
	.memberList:after,
	.errorPanel:after,
	.nodeDescriptionTip:after,
	.resourceListSidebar .secondaryContent:after
	{
		background-image: url('styles/black_responsive_blue/xenforo/layout/shadows.png');
background-repeat: no-repeat;
background-position: 50% 0;
background-size: 100% 30px;
content: '';
display: block;
position: absolute;
bottom: -11px;
left: 3px;
right: 3px;
pointer-events: none;
height: 10px;

	}

		.FollowList.memberList:after,
		form.sectionMain .secondaryContent:after,
		.watch_forums .sectionMain:after,
		.sidebar .sectionMain .secondaryContent:after
		{
			display: none;
		}

		.nodeDescriptionTip:after
		{
			bottom: -10px;
		}
		
	.messageList .message.messageFullBlock:after,
	
	.message:after,
	
	.profilePage #info:after,
	#recentActivity:after,
	.importantMessage:after,
	.primaryContent.resourceHistory:after
	{
		content: '';
display: block;
position: absolute;
left: 0;
right: 0;
bottom: -11px;
background: url('styles/black_responsive_blue/xenforo/layout/shadows.png') 50% -15px / 100% 30px no-repeat;
height: 10px;

	}

		.mainContentBlock:after
		{
			display: none;
		}
	
.sectionMain,
.discussionList
{
	padding: 3px 7px;
margin: 10px auto 20px;

}


.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 11px;
word-wrap: normal;
min-height: 23px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

	.resourceTabs ul.tabs
	{
		padding-left: 0;
	}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: #ffffff;
text-decoration: none;
background-color: #3f3f3f;
padding: 0 8px;
margin-right: 1px;
border: 1px solid #3f3f3f;
display: inline-block;
line-height: 22px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
height: 22px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	color: #ffffff;
background-color: rgb(13, 94, 145);
padding-bottom: 1px;
border-color: rgb(13, 94, 145);
border-bottom: 1px none black;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:610px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -64px 0;
margin-top: -2px;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 16px;
height: 14px;

}

	@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
	{
		.Popup .arrowWidget
		{
			background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
			background-size: 200px 80px;
		}
	}

	.Popup:hover .arrowWidget
	{
		background-position: -32px 0;
	}

.PopupOpen .arrowWidget,
.PopupOpen:hover .arrowWidget
{
	/* circle-arrow-up */
	background-position: -48px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(13, 94, 145);
text-decoration: none;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		background-color: rgb(13, 94, 145);
border-color: rgb(104, 104, 104);
color: #ffffff !important;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		border-top-left-radius: ;
		border-top-right-radius: ;
		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: rgb(64, 64, 64);*/
	
	font-size: 11px;
border: 0 solid rgb(13, 94, 145);
border-left-width: 2px;
overflow: hidden;
-webkit-box-shadow: 0px 5px 5px rgba(0,0,0, 0.4), 2px 1px 1px rgba(0,0,0, 0.3); -moz-box-shadow: 0px 5px 5px rgba(0,0,0, 0.4), 2px 1px 1px rgba(0,0,0, 0.3); -khtml-box-shadow: 0px 5px 5px rgba(0,0,0, 0.4), 2px 1px 1px rgba(0,0,0, 0.3); box-shadow: 0px 5px 5px rgba(0,0,0, 0.4), 2px 1px 1px rgba(0,0,0, 0.3);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

	#ResourceFilterMenu
	{
		background: rgb(32, 32, 32);
	}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	-webkit-box-shadow: 0 -5px 5px rgba(0, 0, 0, 0.4), 2px -1px 1px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 -5px 5px rgba(0, 0, 0, 0.4), 2px -1px 1px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 -5px 5px rgba(0, 0, 0, 0.4), 2px -1px 1px rgba(0, 0, 0, 0.3); box-shadow: 0 -5px 5px rgba(0, 0, 0, 0.4), 2px -1px 1px rgba(0, 0, 0, 0.3);
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
		
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 15pt;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	background: url(rgba.php?r=32&g=32&b=32&a=229); background: rgba(32, 32, 32, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5202020,endColorstr=#E5202020);
	border-bottom: 1px solid rgb(44, 44, 44);
	position: relative;
	padding: 10px;
}

	.Menu .primaryContent:after
	{
		content: '';
		display: block;
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height: 0;
		border-bottom: 1px solid rgb(22, 22, 22);
	}

	.Menu .primaryContent.menuHeader
	{
		background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
	}

.Menu .secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	background: url(rgba.php?r=32&g=32&b=32&a=229); background: rgba(32, 32, 32, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5202020,endColorstr=#E5202020);
	border-bottom: 1px solid rgb(22, 22, 22);
	padding: 9px;
}

	.Menu .secondaryContent + .secondaryContent
	{
		border-top: 1px solid rgb(44, 44, 44);
	}
	
	.Menu .secondaryContent.menuColumns
	{
		padding: 2px;
	}

.Menu .sectionFooter
{
	background: url(rgba.php?r=32&g=32&b=32&a=229); background: rgba(32, 32, 32, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5202020,endColorstr=#E5202020);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
	padding: 2px;
}

/* form popups */

.formPopup
{
	width: 250px;
	background: url(rgba.php?r=32&g=32&b=32&a=229); background: rgba(32, 32, 32, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5202020,endColorstr=#E5202020);
}

	.formPopup .formPopup,
	.formPopup .primaryControls,
	.formPopup .secondaryControls
	{
		background: transparent none;
	}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}


/* Overlay background */
#exposeMask
{
	
	background-color: rgb(40, 40, 40) !important;
}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	max-width: 642px; /*calc: overlay borders + form padding */
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}

	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: rgb(142, 142, 142);
	}

	.xenOverlay .overlayScroll > li:last-child:after
	{
		display: none;
	}

	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		background-image: url('styles/black_responsive_blue/xenforo/overlay/close.png');
position: absolute;
right: 4px;
top: 4px;
cursor: pointer;
z-index: 2;
width: 35px;
height: 35px;

	}

		.xenOverlay a.close:hover
		{
			background-position: 0 -40px;
		}

		.xenOverlay > a.close:first-child /* for poll results */
		{
			z-index: 2;
			margin-top: -20px;
			margin-right: -20px;
		}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
		{
			.xenOverlay a.close
			{
				background-image: url('styles/black_responsive_blue/xenforo/overlay/close-big.png');
				background-size: 36px 76px;
			}
		}

.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: #e0e0e0;
background-color: rgb(8, 8, 8);
padding: 15px 25px;
border: 1px solid rgb(8, 8, 8);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;

	background-color: rgba(8, 8, 8, 0.9);
	border-color:  rgb(8, 8, 8); border-color:  rgba(8, 8, 8, 0.9); _border-color:  rgb(8, 8, 8);
	_zoom: 1;
	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(8, 8, 8);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: #888888;
	}

	.xenOverlay .formOverlay .heading
	{
		font-weight: bold;
font-size: 12pt;
color: #ffffff;
background: transparent none;
padding: 0 10px;
margin-bottom: 15px;
border-width: 0;

	}

	.xenOverlay .formOverlay .subHeading,
	.xenOverlay .xenForm h3.sectionHeader
	{
		font-weight: bold;
font-size: 11px;
color: #ffffff;
background-color: rgb(32, 32, 32);
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid rgb(32, 32, 32);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;

	}
	
		.xenOverlay .subHeading
		{
			background-color: rgb(32, 32, 32);
			border-color: rgb(32, 32, 32);
			color: #ffffff;
		}

	.xenOverlay .formOverlay .textHeading
	{
		color: #ffffff;

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		
	}

	.xenOverlay .formOverlay .textCtrl option
	{
		
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		
	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		
	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		
	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #ffffff;

	}

		.xenOverlay .formOverlay a.button
		{
			vertical-align: middle;
line-height: 20px;

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		padding: 0;
		background-color: rgb(32, 32, 32);
		border-width: 0;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		
	}

		.xenOverlay .formOverlay .tabs a
		{
			
		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				
			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				
			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/black_responsive_blue/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(142, 142, 142);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	background-color: rgb(8, 8, 8);
padding: 0;
border: 1px solid rgb(8, 8, 8);
-webkit-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgb(26, 26, 26) inset;

	
	background-color: rgba(8, 8, 8, 0.9);
	_zoom: 1;
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: rgb(8, 8, 8);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .NoAutoHeader .sectionMain
	{
		padding: 9px 14px;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/black_responsive_blue/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/black_responsive_blue/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/black_responsive_blue/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
bottom: 70px;
left: 35px;
z-index: 9999;
/* in front of the expose mask */

}

	#StackAlerts .stackAlert
	{
		margin-top: 5px;
border: 1px solid #fff;
position: relative;
-webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -moz-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -khtml-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
width: 270px;

	}

		#StackAlerts .stackAlertContent
		{
			font-weight: bold;
font-size: 11px;
color: #000;
background-color: #fff;
padding: 10px 30px 10px 10px;
border: 2px solid #fff;

			background-color: rgba(255, 255, 255, 0.9);
		}

		#StackAlerts .stackAlertContent a
		{
			color: inherit;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.xenOverlay .primaryContent,
.xenOverlay .secondaryContent,
.xenOverlay .sectionFooter
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

}

	.xenOverlay .primaryContent
	{
		background-color: rgb(32, 32, 32);
padding: 4px 10px;
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);

	}

	.xenOverlay .secondaryContent
	{
		background-color: rgb(32, 32, 32);
padding: 4px 10px;
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);

	}

	.xenOverlay .sectionFooter
	{
		background-color: rgb(32, 32, 32);
padding: 4px 10px;
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);

	}

	.xenOverlay #jumpMenu .primaryContent .secondaryContent
	{
		background: transparent none;
	}

	.xenOverlay .InlineMessageEditor .primaryContent
	{
		border-width: 0;
	}

/* xenTag */
.Tinhte_XenTag_TagsEditor .Tinhte_XenTag_Tag
{
	background: rgb(64, 64, 64) !important;
}

/* Lightbox */
.xenOverlay.lightBox #LightBox #LbUpper
{
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		padding: 5px;
	}

	.Responsive .xenOverlay a.close
	{
		margin-right: 0;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

	.sectionMain .alerts .primaryContent
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		border-top: 1px solid rgb(44, 44, 44);
		border-bottom: 1px solid rgb(22, 22, 22);
		padding: 5px;
	}

	.sectionMain .alerts .primaryContent:first-child
	{
		border-top-width: 0;
	}

	.sectionMain .alerts .primaryContent:last-child
	{
		border-bottom-width: 0;
	}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}




.Alert .avatar.miniMe > img, .alerts .avatar.miniMe > img {
    	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
    	height: 16px;
    	margin-left: -20px;
    	margin-top: 20px;
    	padding: 1px;
    	position: relative;
    	width: 16px;
    	-webkit-box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); -moz-box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); -khtml-box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}
.Alert .avatar.miniMe, .alerts .avatar.miniMe {
    	padding-right: 5px;
}

.alerts ol > li .icon, .Alert .icon {
	font: normal normal normal 32px/1.3 FontAwesome;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	-webkit-transform:  translate(0, 0); -moz-transform:  translate(0, 0); -o-transform:  translate(0, 0); -ms-transform:  translate(0, 0);transform: translate(0, 0);
 	float: left;
	padding-right: 3px;
}



.news_feed_page_global li .icon::before,
.member_view li .icon::before,
.news_feed_page li .icon::before,
.account_likes li .icon::before,
.styleChooser li .icon::before {
        display: none;
}

li.Alert .icon:before, .primaryContent .icon:before {
	content: '\f024';
	color: ;
}

.primaryContent.post_quote .icon:before, .Alert.post_quote .icon:before {
	content: '\f10d';
	color: ;
}
.primaryContent.profile_post_insert .icon:before, .Alert.profile_post_insert .icon:before {
	content: '\f040';
	color: ;
}
.primaryContent.user_following .icon:before, .Alert.user_following .icon:before {
	content: '\f234';
	color: ;
}
.primaryContent.post_insert .icon:before, .Alert.post_insert .icon:before {
	content: '\f075';
	color: ;
}
.primaryContent.post_like .icon:before, .Alert.post_like .icon:before {
	content: '\f164';
	color: rgb(195, 255, 185);
}
.primaryContent.profile_post_like .icon:before, .Alert.profile_post_like .icon:before,
.primaryContent.profile_post_comment_like .icon:before, .Alert.profile_post_comment_like .icon:before {
	content: '\f087';
	color: ;
}
.primaryContent.profile_post_comment_your_profile .icon:before, .Alert.profile_post_comment_your_profile .icon:before {
	content: '\f27b';
	color: ;
}
.primaryContent.profile_post_comment_other_commenter .icon:before, .Alert.profile_post_comment_other_commenter .icon:before {
	content: '\f086';
	color: ;
}
.primaryContent.post_tag .icon:before, .Alert.post_tag .icon:before {
	content: '\f0a4';
	color: ;
}
.primaryContent.profile_post_tag .icon:before, .Alert.profile_post_tag .icon:before {
	content: '\f1fa';
	color: ;
}
.primaryContent.user_trophy .icon:before, .Alert.user_trophy .icon:before {
	content: '\f091';
	color: ;
}
.primaryContent.profile_post_comment_your_post .icon:before, .Alert.profile_post_comment_your_post .icon:before {
	content: '\f0e6';
	color: ;
}
.primaryContent.user_thread_move .icon:before, .Alert.user_thread_move .icon:before {
	content: '\f18e';
	color: rgb(224, 48, 48);
}
.primaryContent.user_report_rejected .icon:before, .Alert.user_report_rejected .icon:before,
.primaryContent.user_report_resolved .icon:before, .Alert.user_report_resolved .icon:before {
	content: '\f071';
	color: rgb(224, 48, 48);
}
.primaryContent.user_profile_post_edit .icon:before, .Alert.user_profile_post_edit .icon:before,
.primaryContent.user_post_edit .icon:before, .Alert.user_post_edit .icon:before {
	content: '\f044';
	color: rgb(224, 48, 48);
}
.primaryContent.user_from_admin .icon:before, .Alert.user_from_admin .icon:before {
	content: '\f0a1';
	color: rgb(224, 48, 48);
}
.primaryContent.resource_rating_review .icon:before, .Alert.resource_rating_review .icon:before {
	content: '\f005';
	color: ;
}
.primaryContent.resource_update_like .icon:before, .Alert.resource_update_like .icon:before {
	content: '\f087';
	color: ;
}
.primaryContent.resource_update_tag .icon:before, .Alert.resource_update_tag .icon:before {
	content: '\f27a';
	color: ;
}
.primaryContent.resource_update_insert .icon:before, .Alert.resource_update_insert .icon:before {
	content: '\f085';
	color: ;
}
.primaryContent.resource_rating_reply .icon:before, .Alert.resource_rating_reply .icon:before {
	content: '\f0e5';
	color: ;
}




.primaryContent.user_resource_rating_delete_resp .icon:before, .Alert.user_resource_rating_delete_resp .icon:before {
	content: '\f12a';
	color: rgb(224, 48, 48);
}
.primaryContent.user_resource_reassign_from .icon:before, .Alert.user_resource_reassign_from .icon:before,
.primaryContent.user_resource_reassign_to .icon:before, .Alert.user_resource_reassign_to .icon:before {
	content: '\f0ec';
	color: rgb(224, 48, 48);
}
.primaryContent.user_resource_delete .icon:before, .Alert.user_resource_delete .icon:before {
	content: '\f147';
	color: rgb(224, 48, 48);
}
.primaryContent.user_resource_edit .icon:before, .Alert.user_resource_edit .icon:before {
	content: '\f044';
	color: rgb(224, 48, 48);
}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
	border-collapse: separate;
}

	.sectionMain > table.dataTable:first-child
	{
		margin-top: 0;
	}

	.sectionMain > table.dataTable:last-child
	{
		margin-bottom: 0;
	}

.dataTable caption
{
	font-weight: bold;
font-size: 11pt;
color: rgb(173, 173, 173);
padding: 5px 10px;
margin-bottom: 3px;

}

.dataTable tr.dataRow td
{
	border-top: 1px solid rgb(44, 44, 44);
	border-bottom: 1px solid rgb(22, 22, 22);
	padding: 5px 10px;
	word-wrap: break-word;
}

	.dataTable tr.dataRow:first-child td
	{
		border-top-width: 0;
	}

		.dataTable tr.dataRow.first-child td
		{
			border-top-width: 0;
		}

	.dataTable tr.dataRow:last-child td
	{
		border-bottom-width: 0;
	}

		.dataTable tr.dataRow.last-child td
		{
			border-bottom-width: 0;
		}

.dataTable tr.dataRow td.secondary
{
	background: rgb(173, 173, 173);
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
}

.dataTable tr.dataRow th
{
	background: rgb(13, 94, 145);
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	color: #ffffff;
	font-size: 11px;
	padding: 6px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-bottom: none;
	padding: 7px 10px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(13, 94, 145);
		color: #ffffff;
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/black_responsive_blue/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	border-top: 1px solid rgb(44, 44, 44);
border-bottom: 1px solid rgb(22, 22, 22);
padding: 4px 0;
overflow: hidden;
zoom: 1;

}

	.memberListItem:first-child
	{
		border-top-width: 0;
padding-top: 0;

	}

	.memberListItem:last-child
	{
		border-bottom-width: 0;
padding-bottom: 0;

	}

	.memberListItem:after
	{
		display: none;
	}
	
	.resource_author_list .memberListItem
	{
		background-color: rgb(32, 32, 32);
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);

		padding: 5px;
	}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 11px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(112, 112, 112);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 11px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-editable.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
	{
		.DismissParent .DismissCtrl
		{
			background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-editable-big.png');
			background-size: 200px 80px;
		}
	}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl,
	#StackAlerts .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover,
		#StackAlerts .DismissParent .DismissCtrl
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 11px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 16px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;


	margin-bottom: -.5em;
}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
		margin-bottom: .5em;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: rgb(95, 95, 95);
text-decoration: none;
background-color: rgb(32, 32, 32);
border: 1px solid rgb(32, 32, 32);
text-align: center;
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;

		
		
		min-width: 19px;
	}
	
		.PageNav a[rel=start]
		{
			width: 19px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
	
		.PageNav a.currentPage
		{
			color: #ffffff;
background-color: rgb(104, 104, 104);
border-color: rgb(104, 104, 104);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(200, 200, 200);
background: transparent none;
padding: 1px;
border: 1px none transparent;
cursor: pointer;

			
			width: 19px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 117px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(112, 112, 112);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 11pt;
font-family: Tahoma, "Times New Roman", Times, serif;
line-height: 1.4;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(44, 44, 44);
			margin-top: 5px;
			position: relative;
		}

			.previewTooltip .posterDate:before
			{
				content: '';
				display: block;
				position: absolute;
				top: -2px;
				left: 0;
				right: 0;
				border-top: 1px solid rgb(22, 22, 22);
			}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 11px;
padding: 2px;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: #ffffff;
padding: 5px 10px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			text-decoration: none;
background-color: rgb(13, 94, 145);
color: #ffffff !important;

		}
		
		.blockLinksList a:active,
		.blockLinksList li.kbSelect a:active,
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label:active,
		.blockLinksList li.kbSelect label:active,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			background-color: rgb(13, 94, 145);
color: #ffffff !important;

		}
		
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	float: right;
	font-size: 9px;
	line-height: 16px;
	color: #fff;
	background-color: rgb(203, 46, 46);
	padding: 0 2px;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	min-width: 12px;
	_width: 12px;
	text-align: center;
	text-shadow: none;
	white-space: nowrap;
	word-wrap: normal;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}

.bubbleLinksList
{
	overflow: hidden;
}

.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	text-decoration: none;
}
	
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		text-decoration: none;
background-color: rgb(13, 94, 145);
color: #ffffff !important;

	}
	
	.bubbleLinksList a.active
	{
		background-color: rgb(13, 94, 145);
color: #ffffff !important;

		font-weight: bold;
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/black_responsive_blue/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(59, 107, 149); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: #ffffff;
	position: relative;

	color: #e0e0e0;
background-color: rgb(8, 8, 8);
padding: 15px 25px;
border: 1px solid rgb(8, 8, 8);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;

}

	.xenOverlay .errorOverlay:before
	{
		content: '';
		z-index: -1;
		position: absolute;
		top: -3px;
		left: -3px;
		right: -3px;
		bottom: -3px;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;	
		border: 1px solid rgb(13, 94, 145);
		
		background-color: rgb(13, 94, 145);

		-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
		background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
	}

	.xenOverlay .errorOverlay .heading
	{
		font-weight: bold;
font-size: 12pt;
color: #ffffff;
background: transparent none;
padding: 0 10px;
margin-bottom: 15px;
border-width: 0;


		padding: 0;
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(112, 112, 112);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: rgb(13, 94, 145);
	border: 1px solid rgb(13, 94, 145);
	color: #ffffff;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
	-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: #ffffff;
	background-color: rgb(13, 94, 145);
	border: 1px solid rgb(13, 94, 145);
	position: relative;
	-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.horizontalContain { overflow-x: auto; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Rainbows */
.bbCodeRainbow {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */

img.mceSmilieSprite.mceSmilie336
{
	width: 23px; height: 23px; background: url('/img/smilies/1f642.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie394
{
	width: 23px; height: 23px; background: url('/img/smilies/1f643.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie383
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie337
{
	width: 23px; height: 23px; background: url('/img/smilies/1f609.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie338
{
	width: 23px; height: 23px; background: url('/img/smilies/1f626.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie342
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie385
{
	width: 23px; height: 23px; background: url('/img/smilies/1f624.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie379
{
	width: 23px; height: 23px; background: url('/img/smilies/1f620.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie339
{
	width: 23px; height: 23px; background: url('/img/smilies/1f621.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie340
{
	width: 23px; height: 23px; background: url('/img/smilies/1f615.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie341
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie399
{
	width: 23px; height: 23px; background: url('/img/smilies/1f913.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie344
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie390
{
	width: 23px; height: 23px; background: url('/img/smilies/1f633.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie343
{
	width: 23px; height: 23px; background: url('/img/smilies/1f601.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie347
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie389
{
	width: 23px; height: 23px; background: url('/img/smilies/1f632.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie392
{
	width: 23px; height: 23px; background: url('/img/smilies/1f636.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie396
{
	width: 23px; height: 23px; background: url('/img/smilies/1f910.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie388
{
	width: 23px; height: 23px; background: url('/img/smilies/1f631.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie398
{
	width: 23px; height: 23px; background: url('/img/smilies/1f912.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie393
{
	width: 23px; height: 23px; background: url('/img/smilies/1f637.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie397
{
	width: 23px; height: 23px; background: url('/img/smilies/1f911.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie345
{
	width: 23px; height: 23px; background: url('/img/smilies/1f613.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie348
{
	width: 23px; height: 23px; background: url('/img/smilies/1f608.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie349
{
	width: 23px; height: 23px; background: url('/img/smilies/1f47f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie346
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie352
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie387
{
	width: 23px; height: 23px; background: url('/img/smilies/1f629.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie351
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie356
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie357
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie386
{
	width: 23px; height: 23px; background: url('/img/smilies/1f627.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie358
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie359
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie360
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie380
{
	width: 23px; height: 23px; background: url('/img/smilies/1f622.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie362
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie361
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie363
{
	width: 23px; height: 23px; background: url('/img/smilies/1f62f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie364
{
	width: 23px; height: 23px; background: url('/img/smilies/1f600.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie366
{
	width: 23px; height: 23px; background: url('/img/smilies/1f603.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie365
{
	width: 23px; height: 23px; background: url('/img/smilies/1f602.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie367
{
	width: 23px; height: 23px; background: url('/img/smilies/1f604.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie368
{
	width: 23px; height: 23px; background: url('/img/smilies/1f605.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie369
{
	width: 23px; height: 23px; background: url('/img/smilies/1f606.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie370
{
	width: 23px; height: 23px; background: url('/img/smilies/1f607.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie395
{
	width: 23px; height: 23px; background: url('/img/smilies/1f644.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie391
{
	width: 23px; height: 23px; background: url('/img/smilies/1f634.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie371
{
	width: 23px; height: 23px; background: url('/img/smilies/1f610.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie372
{
	width: 23px; height: 23px; background: url('/img/smilies/1f611.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie373
{
	width: 23px; height: 23px; background: url('/img/smilies/1f612.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie374
{
	width: 23px; height: 23px; background: url('/img/smilies/1f614.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie375
{
	width: 23px; height: 23px; background: url('/img/smilies/1f616.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie381
{
	width: 23px; height: 23px; background: url('/img/smilies/1f623.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie350
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie376
{
	width: 23px; height: 23px; background: url('/img/smilies/1f617.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie355
{
	width: 23px; height: 23px; background: url('/img/smilies/1f61a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie354
{
	width: 23px; height: 23px; background: url('/img/smilies/1f60d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie377
{
	width: 23px; height: 23px; background: url('/img/smilies/1f618.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie378
{
	width: 23px; height: 23px; background: url('/img/smilies/1f619.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie382
{
	width: 23px; height: 23px; background: url('/img/smilies/1f4a9.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie400
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie406
{
	width: 23px; height: 23px; background: url('/img/smilies/1f638.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie407
{
	width: 23px; height: 23px; background: url('/img/smilies/1f640.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie401
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie402
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie403
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie404
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie405
{
	width: 23px; height: 23px; background: url('/img/smilies/1f63f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie410
{
	width: 23px; height: 23px; background: url('img/smilies/1f409.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie411
{
	width: 23px; height: 23px; background: url('img/smilies/1f40a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie413
{
	width: 23px; height: 23px; background: url('img/smilies/1f40c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie414
{
	width: 23px; height: 23px; background: url('img/smilies/1f40d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie415
{
	width: 23px; height: 23px; background: url('img/smilies/1f414.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie416
{
	width: 23px; height: 23px; background: url('img/smilies/1f415.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie417
{
	width: 23px; height: 23px; background: url('img/smilies/1f417.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie418
{
	width: 23px; height: 23px; background: url('img/smilies/1f418.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie419
{
	width: 23px; height: 23px; background: url('img/smilies/1f419.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie420
{
	width: 23px; height: 23px; background: url('img/smilies/1f41b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie421
{
	width: 23px; height: 23px; background: url('img/smilies/1f41d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie422
{
	width: 23px; height: 23px; background: url('img/smilies/1f41e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie412
{
	width: 23px; height: 23px; background: url('img/smilies/1f40b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie431
{
	width: 23px; height: 23px; background: url('img/smilies/1f42c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie423
{
	width: 23px; height: 23px; background: url('img/smilies/1f420.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie424
{
	width: 23px; height: 23px; background: url('img/smilies/1f422.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie425
{
	width: 23px; height: 23px; background: url('img/smilies/1f423.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie426
{
	width: 23px; height: 23px; background: url('img/smilies/1f425.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie427
{
	width: 23px; height: 23px; background: url('img/smilies/1f426.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie428
{
	width: 23px; height: 23px; background: url('img/smilies/1f427.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie429
{
	width: 23px; height: 23px; background: url('img/smilies/1f428.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie430
{
	width: 23px; height: 23px; background: url('img/smilies/1f42a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie432
{
	width: 23px; height: 23px; background: url('img/smilies/1f42d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie433
{
	width: 23px; height: 23px; background: url('img/smilies/1f42e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie434
{
	width: 23px; height: 23px; background: url('img/smilies/1f42f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie435
{
	width: 23px; height: 23px; background: url('img/smilies/1f430.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie436
{
	width: 23px; height: 23px; background: url('img/smilies/1f431.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie437
{
	width: 23px; height: 23px; background: url('img/smilies/1f432.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie438
{
	width: 23px; height: 23px; background: url('img/smilies/1f433.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie439
{
	width: 23px; height: 23px; background: url('img/smilies/1f434.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie441
{
	width: 23px; height: 23px; background: url('img/smilies/1f436.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie442
{
	width: 23px; height: 23px; background: url('img/smilies/1f437.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie443
{
	width: 23px; height: 23px; background: url('img/smilies/1f438.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie444
{
	width: 23px; height: 23px; background: url('img/smilies/1f439.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie445
{
	width: 23px; height: 23px; background: url('img/smilies/1f43a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie446
{
	width: 23px; height: 23px; background: url('img/smilies/1f43b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie447
{
	width: 23px; height: 23px; background: url('img/smilies/1f43c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie448
{
	width: 23px; height: 23px; background: url('img/smilies/1f43d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie449
{
	width: 23px; height: 23px; background: url('img/smilies/1f43f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie460
{
	width: 23px; height: 23px; background: url('img/smilies/1f47a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie475
{
	width: 23px; height: 23px; background: url('img/smilies/1f980.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie469
{
	width: 23px; height: 23px; background: url('img/smilies/1f577.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie476
{
	width: 23px; height: 23px; background: url('img/smilies/1f981.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie479
{
	width: 23px; height: 23px; background: url('img/smilies/1f984.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie478
{
	width: 23px; height: 23px; background: url('img/smilies/1f983.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie477
{
	width: 23px; height: 23px; background: url('img/smilies/1f982.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie440
{
	width: 23px; height: 23px; background: url('img/smilies/1f435.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie470
{
	width: 23px; height: 23px; background: url('img/smilies/1f648.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie471
{
	width: 23px; height: 23px; background: url('img/smilies/1f649.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie467
{
	width: 23px; height: 23px; background: url('img/smilies/1f48f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie457
{
	width: 23px; height: 23px; background: url('img/smilies/1f470.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie458
{
	width: 23px; height: 23px; background: url('img/smilies/1f476.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie462
{
	width: 23px; height: 23px; background: url('img/smilies/1f47c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie468
{
	width: 23px; height: 23px; background: url('img/smilies/1f4aa.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie454
{
	width: 23px; height: 23px; background: url('img/smilies/1f44d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie455
{
	width: 23px; height: 23px; background: url('img/smilies/1f44e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie453
{
	width: 23px; height: 23px; background: url('img/smilies/1f44c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie452
{
	width: 23px; height: 23px; background: url('img/smilies/1f44a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie456
{
	width: 23px; height: 23px; background: url('img/smilies/1f44f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie472
{
	width: 23px; height: 23px; background: url('img/smilies/1f64c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie474
{
	width: 23px; height: 23px; background: url('img/smilies/1f918.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie465
{
	width: 23px; height: 23px; background: url('img/smilies/1f483.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie409
{
	width: 23px; height: 23px; background: url('img/smilies/1f385.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie463
{
	width: 23px; height: 23px; background: url('img/smilies/1f47d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie464
{
	width: 23px; height: 23px; background: url('img/smilies/1f480.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie473
{
	width: 23px; height: 23px; background: url('img/smilies/1f916.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie461
{
	width: 23px; height: 23px; background: url('img/smilies/1f47b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie459
{
	width: 23px; height: 23px; background: url('img/smilies/1f479.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie408
{
	width: 23px; height: 23px; background: url('img/smilies/1f383.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie466
{
	width: 23px; height: 23px; background: url('img/smilies/1f48b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie450
{
	width: 23px; height: 23px; background: url('img/smilies/1f440.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie451
{
	width: 23px; height: 23px; background: url('img/smilies/1f445.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie487
{
	width: 23px; height: 23px; background: url('img/smilies/1f30d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie488
{
	width: 23px; height: 23px; background: url('img/smilies/1f31b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie489
{
	width: 23px; height: 23px; background: url('img/smilies/1f31d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie490
{
	width: 23px; height: 23px; background: url('img/smilies/1f31e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie491
{
	width: 23px; height: 23px; background: url('img/smilies/1f32d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie492
{
	width: 23px; height: 23px; background: url('img/smilies/1f32e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie493
{
	width: 23px; height: 23px; background: url('img/smilies/1f32f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie494
{
	width: 23px; height: 23px; background: url('img/smilies/1f33b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie495
{
	width: 23px; height: 23px; background: url('img/smilies/1f33d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie496
{
	width: 23px; height: 23px; background: url('img/smilies/1f344.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie497
{
	width: 23px; height: 23px; background: url('img/smilies/1f345.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie498
{
	width: 23px; height: 23px; background: url('img/smilies/1f346.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie499
{
	width: 23px; height: 23px; background: url('img/smilies/1f347.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie500
{
	width: 23px; height: 23px; background: url('img/smilies/1f348.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie501
{
	width: 23px; height: 23px; background: url('img/smilies/1f349.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie502
{
	width: 23px; height: 23px; background: url('img/smilies/1f34a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie503
{
	width: 23px; height: 23px; background: url('img/smilies/1f34b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie504
{
	width: 23px; height: 23px; background: url('img/smilies/1f34c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie505
{
	width: 23px; height: 23px; background: url('img/smilies/1f34d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie506
{
	width: 23px; height: 23px; background: url('img/smilies/1f34e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie507
{
	width: 23px; height: 23px; background: url('img/smilies/1f350.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie508
{
	width: 23px; height: 23px; background: url('img/smilies/1f351.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie509
{
	width: 23px; height: 23px; background: url('img/smilies/1f352.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie510
{
	width: 23px; height: 23px; background: url('img/smilies/1f353.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie511
{
	width: 23px; height: 23px; background: url('img/smilies/1f354.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie512
{
	width: 23px; height: 23px; background: url('img/smilies/1f355.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie513
{
	width: 23px; height: 23px; background: url('img/smilies/1f356.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie514
{
	width: 23px; height: 23px; background: url('img/smilies/1f357.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie515
{
	width: 23px; height: 23px; background: url('img/smilies/1f359.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie516
{
	width: 23px; height: 23px; background: url('img/smilies/1f35a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie517
{
	width: 23px; height: 23px; background: url('img/smilies/1f35b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie518
{
	width: 23px; height: 23px; background: url('img/smilies/1f35c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie519
{
	width: 23px; height: 23px; background: url('img/smilies/1f35d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie520
{
	width: 23px; height: 23px; background: url('img/smilies/1f35e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie521
{
	width: 23px; height: 23px; background: url('img/smilies/1f35f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie522
{
	width: 23px; height: 23px; background: url('img/smilies/1f362.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie523
{
	width: 23px; height: 23px; background: url('img/smilies/1f363.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie524
{
	width: 23px; height: 23px; background: url('img/smilies/1f364.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie525
{
	width: 23px; height: 23px; background: url('img/smilies/1f368.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie526
{
	width: 23px; height: 23px; background: url('img/smilies/1f369.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie527
{
	width: 23px; height: 23px; background: url('img/smilies/1f36a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie528
{
	width: 23px; height: 23px; background: url('img/smilies/1f36b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie529
{
	width: 23px; height: 23px; background: url('img/smilies/1f36c.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie530
{
	width: 23px; height: 23px; background: url('img/smilies/1f36e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie531
{
	width: 23px; height: 23px; background: url('img/smilies/1f36f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie532
{
	width: 23px; height: 23px; background: url('img/smilies/1f370.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie533
{
	width: 23px; height: 23px; background: url('img/smilies/1f372.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie534
{
	width: 23px; height: 23px; background: url('img/smilies/1f373.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie535
{
	width: 23px; height: 23px; background: url('img/smilies/1f374.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie536
{
	width: 23px; height: 23px; background: url('img/smilies/1f375.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie537
{
	width: 23px; height: 23px; background: url('img/smilies/1f377.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie538
{
	width: 23px; height: 23px; background: url('img/smilies/1f378.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie539
{
	width: 23px; height: 23px; background: url('img/smilies/1f37b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie540
{
	width: 23px; height: 23px; background: url('img/smilies/1f37d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie541
{
	width: 23px; height: 23px; background: url('img/smilies/1f37e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie543
{
	width: 23px; height: 23px; background: url('img/smilies/1f381.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie544
{
	width: 23px; height: 23px; background: url('img/smilies/1f382.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie542
{
	width: 23px; height: 23px; background: url('img/smilies/1f37f.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie545
{
	width: 23px; height: 23px; background: url('img/smilies/1f384.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie546
{
	width: 23px; height: 23px; background: url('img/smilies/1f389.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie547
{
	width: 23px; height: 23px; background: url('img/smilies/1f393.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie549
{
	width: 23px; height: 23px; background: url('img/smilies/1f3b5.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie548
{
	width: 23px; height: 23px; background: url('img/smilies/1f396.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie550
{
	width: 23px; height: 23px; background: url('img/smilies/1f3c6.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie552
{
	width: 23px; height: 23px; background: url('img/smilies/1f492.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie553
{
	width: 23px; height: 23px; background: url('img/smilies/1f494.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie554
{
	width: 23px; height: 23px; background: url('img/smilies/1f496.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie555
{
	width: 23px; height: 23px; background: url('img/smilies/1f497.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie556
{
	width: 23px; height: 23px; background: url('img/smilies/1f498.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie557
{
	width: 23px; height: 23px; background: url('img/smilies/1f49d.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie558
{
	width: 23px; height: 23px; background: url('img/smilies/1f4a1.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie559
{
	width: 23px; height: 23px; background: url('img/smilies/1f4a2.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie560
{
	width: 23px; height: 23px; background: url('img/smilies/1f4a3.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie561
{
	width: 23px; height: 23px; background: url('img/smilies/1f4a4.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie562
{
	width: 23px; height: 23px; background: url('img/smilies/1f4ab.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie563
{
	width: 23px; height: 23px; background: url('img/smilies/1f4b0.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie569
{
	width: 23px; height: 23px; background: url('img/smilies/1f9c0.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie570
{
	width: 23px; height: 23px; background: url('img/smilies/2615.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie565
{
	width: 23px; height: 23px; background: url('img/smilies/1f52a.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie566
{
	width: 23px; height: 23px; background: url('img/smilies/1f52b.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie551
{
	width: 23px; height: 23px; background: url('img/smilies/1f453.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie567
{
	width: 23px; height: 23px; background: url('img/smilies/1f576.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie572
{
	width: 23px; height: 23px; background: url('img/smilies/26b0.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie571
{
	width: 23px; height: 23px; background: url('img/smilies/26a0.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie564
{
	width: 23px; height: 23px; background: url('img/smilies/1f51e.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie568
{
	width: 23px; height: 23px; background: url('img/smilies/1f6ab.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie573
{
	width: 23px; height: 23px; background: url('img/smilies/26d4.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie574
{
	width: 23px; height: 23px; background: url('img/smilies/2b55.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie480
{
	width: 23px; height: 23px; background: url('img/smilies/1f192.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie481
{
	width: 23px; height: 23px; background: url('img/smilies/1f193.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie482
{
	width: 23px; height: 23px; background: url('img/smilies/1f195.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie483
{
	width: 23px; height: 23px; background: url('img/smilies/1f197.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie484
{
	width: 23px; height: 23px; background: url('img/smilies/1f198.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie485
{
	width: 23px; height: 23px; background: url('img/smilies/1f199.svg') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie133
{
	width: 31px; height: 24px; background: url('http://i.imgur.com/NXFgbbx.gif') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie122
{
	width: 25px; height: 20px; background: url('https://b.thumbs.redditmedia.com/TmTOaTM6BLsVBmr4Le2xAIo5DlUdEzlaS5ELpcXDNGI.png') no-repeat 0px -440px;
}

img.mceSmilieSprite.mceSmilie102
{
	width: 25px; height: 20px; background: url('https://b.thumbs.redditmedia.com/TmTOaTM6BLsVBmr4Le2xAIo5DlUdEzlaS5ELpcXDNGI.png') no-repeat 0px -20px;
}

img.mceSmilieSprite.mceSmilie101
{
	width: 25px; height: 20px; background: url('https://b.thumbs.redditmedia.com/TmTOaTM6BLsVBmr4Le2xAIo5DlUdEzlaS5ELpcXDNGI.png') no-repeat 0px -40px;
}






/* Widget Framework */
.section.widget-container.widget-tabs
{ 
	clear: both; 
}

.widget-tabs .primaryContent 
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	margin: 0; 
}

.widget-tabs .tabs 
{ 
	margin: 0 10px; 
}

.widget-tabs h3
{
	margin: 0 !important;
	padding: 0 !important;
	font: inherit !important;
	color: inherit !important;
	line-height: 25px;
}

	.widget-tabs h3:after 
	{ 
		display: none !important; 
	}

#customFooter .boxContent a, 
#customFooter .boxContent a:visited 
{
	color: rgb(104, 104, 104);
}

	#customFooter .boxContent a:hover, 
	#customFooter .boxContent a:active 
	{
		color: rgb(13, 94, 145);
	}

/* Remove rounded corners and set correct background for items */
.captchaPhotos ul.captchaPhotos li,
.captchaPhotos ul.captchaPhotos li.checked
{
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	border-color: rgb(44, 44, 44) rgb(22, 22, 22) rgb(22, 22, 22) rgb(44, 44, 44);
}

.xenOverlay .captchaPhotos ul.captchaPhotos li,
.xenOverlay .captchaPhotos ul.captchaPhotos li.checked
{
	border-color: rgb(26, 26, 26);
}

.captchaPhotos ul.captchaPhotos li.checked
{
	background-color: rgb(44, 44, 44);
	border-color: rgb(13, 94, 145);
}

/* Taiga Chat */
div#taigachat_box
{
	background: transparent;
	border-color: rgb(44, 44, 44);
	-webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.25); -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.25); -khtml-box-shadow: 0 0 1px rgba(0, 0, 0, 0.25); box-shadow: 0 0 1px rgba(0, 0, 0, 0.25);
}

blockquote.taigachat_motd
{
	border-top-width: 0;
}

/* Ribbons */
ul.ribbons 
{ 
	margin: 0 -14px; 
}


/* XenTag */
.sectionMain.Tinhte_XenTag_Tags_ThreadView
{
	padding: 9px;

}

.Tinhte_XenTag_TagsEditor .Tinhte_XenTag_TagNew .textCtrl.Tinhte_XenTag_TagNewInput
{
	color: rgb(200, 200, 200);
}

.Tinhte_XenTag_TagsEditor li.Tinhte_XenTag_Tag
{
	font-size: 13px;
font-family: 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 0px 5px;
border: 1px solid rgb(13, 94, 145);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
text-align: center;
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;
outline: none;
line-height: 21px;
display: inline-block;
cursor: pointer;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
height: 21px;

}
	
	.Tinhte_XenTag_TagsEditor li.Tinhte_XenTag_Tag a.delete
	{
		color: inherit;
	}

	.Tinhte_XenTag_TagsEditor li.Tinhte_XenTag_Tag:hover
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;

	}

	.Tinhte_XenTag_TagsEditor li.Tinhte_XenTag_Tag:active
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
outline: 0;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;

	}


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	
	.Responsive .hiddenWideUnder { display: none !important; }
}

@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:800px)
{
	.Responsive .responsiveHide
	{
		display: none !important;
	}

	.Responsive .responsiveShow
	{
		display: block !important;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}





/* Droid Sans Font */

/* latin */
@font-face {
  font-family: 'Droid Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Droid Sans'), local('DroidSans'), url(https://fonts.gstatic.com/s/droidsans/v6/s-BiyweUPV0v-yRb-cjciPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* latin */
@font-face {
  font-family: 'Droid Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Droid Sans Bold'), local('DroidSans-Bold'), url(https://fonts.gstatic.com/s/droidsans/v6/EFpQQyG9GqCrobXxL-KRMYWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/***/

.userLevel
{
	display: inline-block;
	font-size: 16px;
	-webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
	border: solid rgb(200, 200, 200) 2px;
	height: 28px;
	width: 28px;
	line-height: 28px;
	text-align: center;

	cursor: default;
	font-weight: normal;
}


	.userLevel .userLevelNum
	{
		font-family: 'Droid Serif', serif;
		color: rgb(200, 200, 200);
	}

a .userLevel
{
	cursor: pointer;
}

.memberCard .userLevel
{
	border-color: rgb(64, 64, 64);
}

	.memberCard .userLevel .userLevelNum
	{
		color: rgb(64, 64, 64);
	}

.memberListItem .extra .userLevel
{
	position: relative;
	top: -3px;
	margin-right: 6px;
}

.followingList .userLevel
{
	float: right;
}

.userLevel.lvl_0
{
	border-color: #9b9b9b;
}

.userLevel.lvl_10
{
	border-color: #c02942;
}

.userLevel.lvl_20
{
	border-color: #d95b43;
}

.userLevel.lvl_30
{
	border-color: #fecc23;
}

.userLevel.lvl_40
{
	border-color: #467a3c;
}

.userLevel.lvl_50
{
	border-color: #4e8ddb;
}

.userLevel.lvl_60
{
	border-color: #7652c9;
}

.userLevel.lvl_70
{
	border-color: #c252c9;
}

.userLevel.lvl_80
{
	border-color: #542437;
}

.userLevel.lvl_90
{
	border-color: #997c52;
}


/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

		.xenOverlay .close + .xenForm
		{
			max-width: none;
		}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
	margin-bottom: 0;
	padding-bottom: 6px;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup,
.xenForm .ctrlUnit,
.xenForm fieldset + .sectionHeader,
.xenForm .ctrlUnit + .sectionHeader
{
	background-color: rgb(32, 32, 32);
margin: 0 auto;
border-top: 1px solid rgb(44, 44, 44);
border-bottom: 1px solid rgb(22, 22, 22);

}

	.xenOverlay .xenForm fieldset,
	.xenOverlay .xenForm .formGroup,
	.xenOverlay .xenForm .ctrlUnit,
	#loginBar fieldset,
	#loginBar .formGroup,
	#loginBar .ctrlUnit
	{
		background: transparent;
		border-color: transparent;
	}
	
	.xenForm fieldset + .sectionHeader,
	.xenForm .ctrlUnit + .sectionHeader
	{
		padding: 5px 0;
	}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset .ctrlUnit
{
	border-width: 0;
	position: relative;
}

	.sectionMain .xenForm > .ctrlUnit:first-child,
	.sectionMain .xenForm > fieldset:first-child
	{
		border-top-width: 0;
	}

	.sectionMain .ctrlUnit.submitUnit:last-of-type
	{
		border-bottom-width: 0;
	}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	position: relative;
}

	.xenForm fieldset + .ctrlUnit:before,
	.xenForm .submitUnit:before
	{
		border-top: 1px solid rgb(22, 22, 22);
		position: absolute;
		top: -2px;
		left: 0;
		right: 0;
		height: 0;
		content: '';
		display: block;
	}

	.xenOverlay .xenForm fieldset + .ctrlUnit,
	.xenOverlay .xenForm .submitUnit
	{
		border-top-color: transparent;
	}

	.xenOverlay .xenForm fieldset + .ctrlUnit:before,
	.xenOverlay .xenForm .submitUnit:before
	{
		border-top-width: 0;
	}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	background-color: rgb(32, 32, 32);
margin: 0 auto;
border-top: 1px solid rgb(44, 44, 44);
border-bottom: 1px solid rgb(22, 22, 22);

}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}

.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: rgb(200, 200, 200);
background-color: rgb(64, 64, 64);
padding: 3px;
margin-bottom: 2px;
border: 1px solid rgb(64, 64, 64);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
outline: 0;
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
	resize: vertical;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		color: #ffffff;
background-color: ;
border-color: rgb(13, 94, 145);
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;

	}	

	textarea.textCtrl:focus
	{
		
	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: #ccc;
background-color: #202020;
border-color: #444;

	}
	
	.textCtrl.prompt
	{
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}

		.textCtrl.number::-ms-clear,
		.textCtrl.number input::-ms-clear
		{
			display: none;
			width: 0;
			height: 0;
		}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	input[type="search"]
	{
		-webkit-appearance: none;
	}

	input[type="search"]::-webkit-search-decoration,
	input[type="search"]::-webkit-search-results-button,
	input[type="search"]::-webkit-search-results-decoration
	{
		display: none;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

	.sidebar textarea.textCtrl.Elastic
	{
		max-width: 97%;
	}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	color: inherit !important;
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
	box-shadow: none !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 1px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	border: 1px solid rgb(142, 142, 142);
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	display: inline-block;
	padding: 0 3px;
	text-decoration: none;
	background: rgb(142, 142, 142);
	color: rgb(32, 32, 32);
	margin-right: 3px;
	margin-top: 2px;
	font-size: 12px;
	max-width: 98%;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	position: relative;
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: inherit;
		font-weight: bold;
		text-decoration: none;
	}

		html .taggingInput .tag > span:first-child + a:last-child:before
		{
			content: '';
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
		}

	.taggingInput .tag:hover
	{
		background-color: rgb(13, 94, 145);
		border-color: rgb(13, 94, 145);
		color: #ffffff;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	-webkit-appearance: none;
	
	font-size: 13px;
font-family: 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 0px 5px;
border: 1px solid rgb(13, 94, 145);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
text-align: center;
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;
outline: none;
line-height: 21px;
display: inline-block;
cursor: pointer;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
height: 21px;

}

	.xenOverlay .button
	{
		-webkit-box-shadow: 0px 1px 4px 2px rgb(8, 8, 8); -moz-box-shadow: 0px 1px 4px 2px rgb(8, 8, 8); -khtml-box-shadow: 0px 1px 4px 2px rgb(8, 8, 8); box-shadow: 0px 1px 4px 2px rgb(8, 8, 8);

	}
	
	.xenOverlay .sectionFooter .button
	{
		-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 1px 1px 1px rgba(204, 204, 204, 0.1) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 1px 1px 1px rgba(204, 204, 204, 0.1) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 1px 1px 1px rgba(204, 204, 204, 0.1) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 1px 1px 1px rgba(204, 204, 204, 0.1) inset;

	}

	.xenOverlay .section .button, 
	.xenOverlay .sectionMain .button
	{
		-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;
	}

	.formPopup .advSearchLink
	{
		display: block;
		margin: 0 4px;
	}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 3px;
	line-height: 19px;
	height: 19px;
}

.button.primary
{
	
}

.button.light,
input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: #ffffff;
background-color: rgb(44, 44, 44);
border-color: rgb(44, 44, 44);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.05) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.05) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.5) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.5) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.5) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.5) inset;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: #ffffff;
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button,
	.formPopup .advSearchLink:hover
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;

	}

	.button:focus
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
outline: 0;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button,
	.formPopup .advSearchLink:active
	{
		color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
outline: 0;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
-webkit-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0px 1px 4px 0px rgb(26, 26, 26), 0 0 0 1px rgba(0,0,0, 0.15) inset;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
	}
	
	.button.ToggleButton.checked
	{
		color: #ffffff;
background-color: ;
border-color: rgb(13, 94, 145);
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;

	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}
















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	padding: 10px 0;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.xenOverlay .xenForm .ctrlUnit
	{
		padding: 4px 0;
	}

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(112, 112, 112);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(153, 153, 153);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/black_responsive_blue/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 11px;
color: rgb(112, 112, 112);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(153, 153, 153);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(159, 159, 159);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(112, 112, 112);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Trebuchet MS', Helvetica, Arial, sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(32, 32, 32);
	font-size: 11px;
	border: 1px solid rgb(13, 94, 145);
	border-width: 0 0 0 2px;
	-webkit-box-shadow: 0 0 15px #000; -moz-box-shadow: 0 0 15px #000; -khtml-box-shadow: 0 0 15px #000; box-shadow: 0 0 15px #000;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(127, 127, 127);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(127, 127, 127);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(127, 127, 127);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: rgb(13, 94, 145);
			color: #ffffff;
		}

a.caloff {
	color: rgb(112, 112, 112);		
}

a.caloff:hover {
	background-color: #3f3f3f;
	color: #ffffff;
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(13, 94, 145);
	color: #ffffff;
}
ul.autoCompleteList
{
	border: 1px solid rgb(130, 130, 130);
	padding: 0;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
	background: url(rgba.php?r=32&g=32&b=32&a=229); background: rgba(32, 32, 32, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5202020,endColorstr=#E5202020);
	border-top: 1px solid rgb(44, 44, 44);
	border-bottom: 1px solid rgb(22, 22, 22);
}

	ul.autoCompleteList li:first-child
	{
		border-top-width: 0;
	}

	ul.autoCompleteList li:last-child
	{
		border-bottom-width: 0;
	}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(13, 94, 145);
	border-color: rgb(13, 94, 145);
	color: #ffffff;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(200, 200, 200);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}

	.xenForm input.button + a.button 
	{
		margin-top: 1px;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : auto; -moz-column-count : auto;column-count: auto;
	-webkit-column-gap : normal; -moz-column-gap : normal;column-gap: normal;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt,
	.Responsive #loginBar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}

		.Responsive .xenForm .ctrlUnit.submitUnit > dd
		{
			text-align: center;
		}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	
	margin-bottom: 28px;
	
	background-image: url('img/logoback.png');
background-repeat: no-repeat;
background-position: top;

	
}

	#header.movedSelectedRow
	{
		margin-bottom: 0;
	}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sticky navigation */


/* logo stuff */

#logoBlock
{
	
}

	.LoggedOut #logoBlock
	{
		
	}

	#logo
	{
		display: block;
		float: left;
		overflow: hidden;
		width: 100%;
	}

		#logo div
		{
			line-height: 124px;
			*line-height: 128px;
			height: 128px;
			max-width: 100%;
			vertical-align: middle;
		}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(142, 142, 142);
		padding: 5px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		margin: 10px 0;
		border: 1px solid #3f3f3f;
		color: #3f3f3f;
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(127, 127, 127);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 0 0 0 transparent, 1px 1px 10px white;
			color: #3f3f3f;
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: #3f3f3f;
			}

/** center logo */


#logoBlock #logo div
{
	margin-left: 50%;
}

	#logoBlock #logo a
	{
		margin-left: -500px;
	}


@media only screen and (max-width: 610px), only screen and (max-device-width: 610px), only screen and (max-width: 1010px), only screen and (max-device-width: 1010px)
{
	#logoBlock #logo
	{
		float: none;
	}

	#logoBlock #logo div
	{
		margin-left: 50%;
	}

	#logoBlock #logo a
	{
		display: block;
		padding-left: 0;
		margin-left: -500px;
	}
}

@media only screen and (max-width: 1010px), only screen and (max-device-width: 1010px)
{
	#logoBlock #logo div,
	#logoBlock #logo a
	{
		margin-left: 0;
	}

	#logoBlock #logo a img
	{
		max-width: 100%;
	}
}


@media (max-width:610px)
{
	#header
	{
		
	}

	#logoBlock
	{
		
	}

	
}

@media (max-width: 400px)
{
	.LoggedOut #header
	{
		padding-top: 35px;
	}
}




/*----- FOOTER.css -----*/


.footerInner .tem {
    background: url(http://i.imgur.com/6kEJmXK.gif);
    width: 200px;
    height: 132px;
    position: absolute;
    z-index: 10000;
    margin-top: -132px;
    margin-left: -2px;
    right: 0px;
    cursor: pointer;
}



#forumFooter
{
	overflow: hidden;
}

	#forumFooter .footerInner
	{
		border: 2px solid rgb(32, 32, 32);
		-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3) inset;
		margin: 0 -5px;
		padding: 0 3px;
		background-color: rgb(32, 32, 32);

	}

.footer .pageContent
{
	font-size: 11px;
padding: 8px 0 0;
color: rgb(136, 136, 136) !important;
overflow: hidden;
zoom: 1;

}
	
	.footer a,
	.footer a:visited
	{
		padding: 5px;
color: rgb(170, 170, 170) !important;
display: block;

	}
	
		.footerLegal a,
		.footerLegal a:visited
		{
			color: rgb(170, 170, 170) !important;
		}

		.footer a:hover,
		.footer a:active,
		.footerLegal a:hover,
		.footerLegal a:active
		{
			text-decoration: underline;
color: #fff !important;

		}

	.footer .choosers
	{
		float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks.left
		{
			float: left;
			padding-left: 5px;
		}

		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed,
			.footerLinks a.topLink,
			.footerLinks a.homeLink
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -186px -43px;
				padding: 0;
				margin: 5px;
			}

				.footerLinks a.topLink
				{
					background-position: -186px -28px;
				}

				.footerLinks a.homeLink
				{
					width: 15px;
					background-position: -170px -43px;
				}

		.footerLinks .contactLink,
		.footer .choosers dd
		{
			padding-left: 13px;
			position: relative;
		}
		
			.footerLinks .contactLink:before,
			.footer .choosers dd:before
			{
				content: '';
				display: block;
				position: absolute;
				left: 0;
				top: 5px;
				width: 14px;
				height: 14px;
				background: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -186px -58px;
			}
			
				.footer .choosers dd:before
				{
					background-position: -171px -58px;
				}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
		{
			.footerLinks a.globalFeed,
			.footerLinks a.topLink,
			.footerLinks a.homeLink,
			.footerLinks .contactLink:before,
			.footer .choosers dd:before
			{
				background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
				background-size: 200px 80px;
			}
		}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: left;
}
	
	#copyright
	{
		color: rgb(136, 136, 136);
		float: right;
		text-align: right;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive #forumFooter .footerInner
	{
		border-width: 0;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.Responsive #legal,
	.Responsive .footer .choosers,
	.Responsive .footer .footerLinks
	{
		float: left;
		margin-left: -5px;
		position: relative;
		left: 50%;
		overflow: visible;
		clear: left;
		text-align: center;
	}
	
	.Responsive #legal li,
	.Responsive .footer .choosers dd,
	.Responsive .footer .footerLinks li
	{
		margin-left: 0;
		position: relative;
		left: -50%;
	}
	
	.Responsive .footerLegal .pageContent
	{
		text-align: center;
	}
	
	.Responsive #copyright
	{
		float: none;
		text-align: center;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}



.breadBoxTop,
.breadBoxBottom
{
	padding: 0;
margin: 10px 0;
zoom: 1;
clear: both;

}

	.breadBoxTop:before,
	.breadBoxBottom:before,
	.breadBoxTop:after,
	.breadBoxBottom:after
	{
		content: ' ';
		display: table;
		clear: both;
	}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 10px;
float: right;
line-height: 26px;

}

	.breadBoxTop .callToAction
	{
		float: right;
	}

.breadcrumb
{
	font-size: 11px;
background-color: rgb(32, 32, 32);
padding: 0 6px 0 9px;
margin: 0;
border: 1px solid rgb(32, 32, 32);
position: relative;
zoom: 1;
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
height: 24px;

}

.breadcrumb .crumbs
{
	display: block;
	line-height: 24px;
	margin-right: 20px;
}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	
}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	text-decoration: none;
outline: 0 none;
-moz-outline-style: 0 none;

}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		
	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		font-weight: bold;

	}

.breadcrumb .crust .arrow
{
	color: rgb(112, 112, 112);
padding: 0 2px;
display: inline-block;

}

	.breadcrumb .crust .arrow:after
	{
		content: '»';
		display: inline-block;
		font-size: 11px;
	}
	
	.breadcrumb .crust:last-child .arrow
	{
		display: none;
	}
	
	.breadcrumb .crust.last-child .arrow
	{
		display: none;
	}

.breadcrumb .crust .arrow span
{
	display: none;

}

.breadcrumb .crust:hover a.crumb
{
	text-decoration: underline;

}

.breadcrumb .jumpMenuTrigger
{
	background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat 0 0;
margin: 4px 0 0;
display: block;
float: right;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
width: 13px;
height: 16px;

}

	.breadcrumb .jumpMenuTrigger:hover
	{
		background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-editable.png');
	}

	@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
	{
		.breadcrumb .jumpMenuTrigger
		{
			background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
			background-size: 200px 80px;
		}

			.breadcrumb .jumpMenuTrigger:hover
			{
				background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-editable-big.png');
			}
	}



@media (max-width:610px)
{
	.Responsive .breadBoxTop,
	.Responsive .breadBoxBottom
	{
		margin-left: -5px;
		margin-right: -5px;
	}

		.Responsive .breadBoxTop
		{
			margin-top: 0;
		}

		.Responsive .breadBoxBottom
		{
			margin-bottom: 0;
		}

	.Responsive .breadBoxTop .topCtrl
	{
		margin-left: 0;
	}

		.Responsive .breadBoxTop .callToAction
		{
			display: block;
			float: none;
		}

	.Responsive .breadcrumb,
	.Responsive .breadBoxTop .callToAction:first-child:last-child span
	{
		border-left-width: 0;
		border-right-width: 0;
	}

	.Responsive .breadcrumb
	{
		white-space: wrap;
-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
height: auto;

	}
}


#navigationContainer
{
	position: relative;
	
	margin: 0 auto;
	
	background-color: rgb(32, 32, 32);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);

}

	.LoggedOut #navigationContainer
	{
		
	}
	


#navigation .pageContent
{
	
	height: 30px;
	
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 0.6em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 11px;
padding: 0 10px;

		
		height: 30px;
	}
	
		.navTabs .publicTabs
		{
			
			float: left;
			
		}
		
		.navTabs .visitorTabs
		{
			
			float: right;
			
		}

/* ---------------------------------------- */
/* Tabs */

.navTabs .navTab
{
	padding: 0;
margin: 0;

	float: left;
	white-space: nowrap;
	word-wrap: normal;
	max-height: 30px;
}

	.navTabs .navTab.PopupOpen,
	.navTabs .navTab.PopupOpen.selected
	{
		text-shadow: none;
	}
	
	.navTabs .navTab.selected
	{
	}

	.hasHiddenTabs .navTab.responsiveHiddenTabs
	{
		display: block !important;
	}

	.hasHiddenTabs .navTab.hiddenTab
	{
		display: none;
	}

/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink
{
	font-size: 13px;
color: #ffffff;
padding: 1px 12px;
margin: 0;
display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;
white-space: nowrap;
position: relative;
text-shadow: 0 0 0 transparent, 1px 1px 2px rgba(0, 0, 0, 0.5);

	
	height: 28px;
	line-height: 28px;
}

	.navTabs .navLink.hasSplitCtrl
	{
		padding-right: 26px;
	}

	.navTabs .navLink:hover
	{
		color: #ffffff;
text-decoration: none;
background: rgb(13, 94, 145) none;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

	}
	
	.navTabs .navLink:before,
	.navTabs .navLink:after
	{
		content: '';
		display: block;
		position: absolute;
		top: 2px;
		bottom: 2px;
		width: 0;
		left: 0;
		border-left: 1px solid rgb(44, 44, 44);
	}
	
		.navTabs .navLink:after
		{
			left: auto;
			right: 0;
			border-left-color: rgb(22, 22, 22);
		}

		.navTabs .navTab:first-child .navLink:before,
		.navTabs .navTab:last-child .navLink:after,
		.navTabs .lastVisible .navLink:after,
		.navTabs .navTab:hover + .navTab .navLink:before,
		.navTabs .PopupOpen + .navTab .navLink:before
		{
			display: none;
		}

			.navTabs.hasHiddenTabs .lastVisible .navLink:after
			{
				display: block;
			}
	
	.navTabs .navLink strong
	{
		display: inline;
		float: left;
		height: 30px;
	}

	/* ---------------------------------------- */
	/* unselected tab, popup closed */
	
	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}

	.navTabs .navTab.PopupClosed .navLink
	{
	}

		.navTabs .navTab.PopupClosed:hover .navLink
		{
			color: #ffffff;
		}

	/* ---------------------------------------- */
	/* selected tab */
	.navTabs .navTab.selected
	{
		background: rgb(8, 8, 8) url('styles/black_responsive_blue/xenforo/layout/pattern.png') repeat top;
	}

	.navTabs .navTab.selected .navLink
	{
		color: #ffffff;
background: rgb(11, 79, 121) none repeat top;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink,
	.navTabs .navTab.PopupOpen.selected .navLink
	{
		color: #ffffff;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

	}


	/* ---------------------------------------- */
	/* borders for selected, hover and open popups */
	.navTabs .navTab.selected .navLink:before,
	.navTabs .navTab.selected .navLink:after,
	.navTabs .navTab.PopupOpen .navLink:before,
	.navTabs .navTab.PopupOpen .navLink:after,
	.navTabs .navTab .navLink:hover:before,
	.navTabs .navTab .navLink:hover:after
	{
		display: none;
	}
	

/* ---------------------------------------- */
/* Arrow */

.navTabs .SplitCtrl,
.navTabs .navTab .arrowWidget
{
	display: inline-block;
	width: 22px;
	margin-left: -8px;
	height: 30px;
	position: relative;
	vertical-align: top;
}

	.navTabs .SplitCtrl
	{
		margin-left: -22px;
		margin-top: 1px;
	}

.navTabs .navTab .arrowWidget
{
	background: none !important;
	margin: 0 0 0 4px;
	width: 10px;
}

	.navTabs .SplitCtrl:after,
	.navTabs .navTab .arrowWidget:after
	{
		content: '';
		display: block;
		position: absolute;
		height: 14px;
		background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -64px 0;
left: 0;
top: 9px;
width: 14px;

	}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
		{
			.navTabs .SplitCtrl:after,
			.navTabs .navTab .arrowWidget:after
			{
				background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
				background-size: 200px 80px;
			}
		}

	.navTabs .navTab.PopupClosed.selected .SplitCtrl:after,
	.navTabs .navTab.PopupClosed.selected .arrowWidget:after
	{
		background-position: -32px 0;

	}
	
	.navTabs .navTab.PopupClosed:hover .SplitCtrl:after,
	.navTabs .navTab.PopupClosed:hover .arrowWidget:after,
	.navTabs .navTab.PopupClosed .SplitCtrl:hover:after,
	.navTabs .navTab.PopupClosed .arrowWidget:hover:after
	{
		background-position: -16px 0;

	}
	
	.navTabs .navTab.PopupOpen .SplitCtrl:after,
	.navTabs .navTab.PopupOpen .arrowWidget:after,
	.navTabs .navTab.PopupOpen.selected .SplitCtrl:after,
	.navTabs .navTab.PopupOpen.selected .arrowWidget:after
	{
		background-position: -48px 0;

	}
	
	.navTabs .navTab.selected .SplitCtrl,
	.navTabs .navTab.selected .arrowWidget
	{
		display: none;
	}

		.navTabs .navTab.selected.PopupControl .SplitCtrl,
		.navTabs .navTab.selected.PopupControl .arrowWidget
		{
			display: inline-block;
		}

	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	position: absolute;
	left: 0;
	right: 0;
	z-index: 1;
	
	top: 158px;
	
	zoom: 1;	
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}


.navTabs .navTab.selected .tabLinks,
.selectedTabLinks .tabLinks
{
	background-color: rgb(32, 32, 32);
padding: 0 1px;
margin: 0;
border: 1px solid rgb(32, 32, 32);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
height: 26px;

}


	.navTabs .navTab.selected .tabLinks:hover,
	.selectedTabLinks .tabLinks:hover
	{
		
	}

	.navTabs .navTab.selected .blockLinksList,
	.selectedTabLinks .tabLinks .blockLinksList
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	}

	.navTabs .navTab.selected .tabLinks .menuHeader,
	.selectedTabLinks .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li,
	.selectedTabLinks .tabLinks li
	{
		padding: 2px 0;
float: left;

	}

		.navTabs .navTab.selected .tabLinks a,
		.selectedTabLinks .tabLinks a
		{
			line-height: 20px;
			font-size: 11px;
color: #ffffff;
padding: 1px 8px;
display: block;
position: relative;

		}

			.navTabs .navTab.selected .tabLinks a:before,
			.navTabs .navTab.selected .tabLinks a:after,
			.selectedTabLinks .tabLinks a:before,
			.selectedTabLinks .tabLinks a:after
			{
				content: '';
				position: absolute;
				top: 2px;
				bottom: 2px;
				left: 0;
				width: 0;
				border-left: 1px solid rgb(44, 44, 44);
			}

				.navTabs .navTab.selected .tabLinks a:after,
				.selectedTabLinks .tabLinks a:after
				{
					left: auto;
					right: 0;
					border-left-color: rgb(22, 22, 22);
				}

				.navTabs .navTab.selected .tabLinks li:first-child a:before,
				.selectedTabLinks .tabLinks li:first-child a:before,
				.navTabs .navTab.selected .tabLinks li:last-child a:after,
				.selectedTabLinks .tabLinks li:last-child a:after
				{
					display: none;
				}

			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus,
			.selectedTabLinks .tabLinks a:hover,
			.selectedTabLinks .tabLinks a:focus
			{
				color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
padding: 0 7px;
border: 1px solid rgb(13, 94, 145);
outline: 0;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

			}

				.navTabs .navTab.selected .tabLinks a:hover:before,
				.navTabs .navTab.selected .tabLinks a:focus:before,
				.selectedTabLinks .tabLinks a:hover:before,
				.selectedTabLinks .tabLinks a:focus:before,
				.navTabs .navTab.selected .tabLinks a:hover:after,
				.navTabs .navTab.selected .tabLinks a:focus:after,
				.selectedTabLinks .tabLinks a:hover:after,
				.selectedTabLinks .tabLinks a:focus:after
				{
					display: none;
				}
	
			.navTabs .navTab.selected .tabLinks a .postItemCount,
			.selectedTabLinks .tabLinks a .postItemCount,
			.navTabs .navTab.selected .tabLinks a .itemCount,
			.selectedTabLinks .tabLinks a .itemCount
			{
				color: #ffffff;
				background-color: rgb(104, 104, 104);

				float: none;
				margin-top: 2px;
				margin-left: 2px;
				font-weight: bold;
				padding: 2px 4px;
				text-align: center;
			}

			.navTabs .navTab.selected .tabLinks a .postItemCount.alert,
			.selectedTabLinks .tabLinks a .postItemCount.alert,
			.navTabs .navTab.selected .tabLinks a .itemCount.alert,
			.selectedTabLinks .tabLinks a .itemCount.alert
			{
				color: #ffffff;
				background-color: rgb(203, 46, 46);
			}

			.navTabs .navTab.selected .tabLinks a:hover .postItemCount,
			.selectedTabLinks .tabLinks a:hover .postItemCount,
			.navTabs .navTab.selected .tabLinks a:hover .itemCount,
			.selectedTabLinks .tabLinks a:hover .itemCount
			{
				color: rgb(13, 94, 145);
				background-color: #ffffff;
			}

/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-size: 10px;
color: #fff;
background-color: rgb(203, 46, 46);
padding: 0 2px;
margin: 0 0 0 4px;
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
line-height: 15px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
display: inline-block;
float: none;
position: relative;
top: -1px;
height: 15px;

}

	#unreadPostsCount .itemCount.alert
	{
		background-color: rgb(203, 46, 46) !important;
		-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	}

	.navTabs .navLink .itemCount .arrow
	{
		display: none;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: rgb(104, 104, 104);
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread .title a
		{
			color: rgb(13, 94, 145);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	border-bottom: 1px solid rgb(22, 22, 22);
	border-top: 1px solid rgb(44, 44, 44);
	padding: 5px 0;
}

.navPopup .listItem:first-child
{
	border-top: none;
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	background-color: rgb(44, 44, 44);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}

/* Floating quick navigation */
#floatingNavigation
{
	font-weight: bold;
font-size: 13px;
color: #ffffff;
text-decoration: none;
background-color: #fff;
border: 1px solid #fff;
-webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px; border-radius: 8px;
line-height: 1em;
overflow: hidden;
-webkit-box-shadow: 0 0 1px 1px #fff; -moz-box-shadow: 0 0 1px 1px #fff; -khtml-box-shadow: 0 0 1px 1px #fff; box-shadow: 0 0 1px 1px #fff;
opacity: 0.7;
-webkit-transition: opacity 0.25s ease;
-moz-transition: opacity 0.25s ease;
-o-transition: opacity 0.25s ease;
-ms-transition: opacity 0.25s ease;
transition: opacity 0.25s ease;

	display: block;
	position: fixed;
	top: 0;
	right: 0;
	overflow: hidden;
	white-space: nowrap;
}

	.Touch #floatingNavigation,
	#floatingNavigation:hover
	{
		opacity: 1;
	}

	#floatingNavigation a,
	#floatingNavigation a:hover
	{
		text-decoration: none;
background-color: rgb(104, 104, 104);
padding: 4px 10px 8px;
margin: 0;
display: inline-block;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);

	color: inherit;
	}

		#floatingNavigation a:first-child
		{
			-webkit-border-top-left-radius: 8px; -moz-border-radius-topleft: 8px; -khtml-border-top-left-radius: 8px; border-top-left-radius: 8px;
			-webkit-border-bottom-left-radius: 8px; -moz-border-radius-bottomleft: 8px; -khtml-border-bottom-left-radius: 8px; border-bottom-left-radius: 8px;
		}

		#floatingNavigation a:last-child
		{
			-webkit-border-top-right-radius: 8px; -moz-border-radius-topright: 8px; -khtml-border-top-right-radius: 8px; border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px; -moz-border-radius-bottomright: 8px; -khtml-border-bottom-right-radius: 8px; border-bottom-right-radius: 8px;
		}

		#floatingNavigation a:hover
		{
			background-color: rgb(13, 94, 145);
		}



@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 0;
		padding-right: 0;
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}

	.Responsive .navTabs .navTab.selected .tabLinks, 
	.Responsive .selectedTabLinks .tabLinks
	{
		border-left-width: 0;
		border-right-width: 0;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		padding: 0;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 8px;
		
		top: 164px;
		
		display: none;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
		z-index: 10;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: -9px;
		top: -80px;
		
		margin: 0;
		
		background-color: ;
		border: 1px solid transparent;
		padding-top: 5px;
		z-index: 7500;
	}

	#QuickSearch:after
	{
		content: '';
		position: absolute;
		direction: block;
		top: 9px;
		left: 10px;
		width: 15px;
		height: 15px;
		background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
		{
			#QuickSearch:after
			{
				background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
				background-size: 200px 80px;
			}
		}

		
		.breadBoxTop .quickSearchContainer
		{
			float: right;
			position: relative;
			width: 247px;
			height: 24px;
		}

			.breadBoxTop #searchBar
			{
				margin: 0 !important;
				min-width: 0 !important;
				width: auto !important;
			}

			.breadBoxTop #QuickSearch
			{
				top: -6px;
				left: auto;
				right: -9px;
			}

				.breadBoxTop #QuickSearch:after
				{
					top: 10px;
				}

			.breadBoxTop #QuickSearchQuery
			{
				height: 18px;
				line-height: 18px;
			}
		

		#QuickSearch .formPopup
		{
			background: transparent none;
		}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			background-color: rgb(32, 32, 32);
			padding-top: 0;
			padding-bottom: 5px;
			border: 1px solid rgb(32, 32, 32);
			-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset, 0 0 8px rgb(8, 8, 8), 0 0 4px rgb(8, 8, 8); -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset, 0 0 8px rgb(8, 8, 8), 0 0 4px rgb(8, 8, 8); -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset, 0 0 8px rgb(8, 8, 8), 0 0 4px rgb(8, 8, 8); box-shadow: 0 0 0 1px rgb(26, 26, 26) inset, 0 0 8px rgb(8, 8, 8), 0 0 4px rgb(8, 8, 8);
		}

			#QuickSearch.active:before
			{
				content: '';
				display: block;
				position: absolute;
				top: 0;
				left: -1px;
				bottom: -1px;
				width: 0;
				border-left: 2px solid rgb(13, 94, 145);
			}

			#QuickSearch.active:after
			{
				background-position: -96px 0;
			}
		
			#QuickSearch.active .primaryControls
			{
				background: rgb(13, 94, 145);
				padding-top: 5px;
				position: relative;
			}

				#QuickSearch.active .primaryControls:after
				{
					content: '';
					position: absolute;
					bottom: -4px;
					left: 0;
					right: 0;
					height: 4px;
					background: rgb(13, 94, 145);
				}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
			border-color: rgb(13, 94, 145) !important;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}

				#QuickSearch #commonSearches .arrowWidget:hover
				{
					background-position: -64px 0;
				}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 27px 0 113px;
		width: auto;
	}

#QuickSearchQuery
{
	background-color: rgb(32, 32, 32);
	border-color: rgb(32, 32, 32);
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
	padding-left: 21px;
	width: 211px;
}

	#QuickSearchQuery::-webkit-search-decoration,
	#QuickSearchQuery::-webkit-search-results-button,
	#QuickSearchQuery::-webkit-search-results-decoration
	{
		display: none;
	}

.active #QuickSearchQuery
{
	border-color: transparent;
	background: url(rgba.php?r=255&g=255&b=255&a=25) none; background: rgba(255, 255, 255, 0.1) none; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#19FFFFFF,endColorstr=#19FFFFFF);
	-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05) inset;
	color: #ffffff;
}

	#QuickSearch.active ::-moz-placeholder
	{
		color: #ffffff;
		opacity: 1;
		font-style: normal;
	}

	#QuickSearch.active ::-webkit-input-placeholder,
	#QuickSearch.active ::-ms-input-placeholder
	{
		color: #ffffff;
		opacity: 1;
		font-style: normal;
	}


@media (max-width:800px)
{
	
}

@media (max-width:610px)
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		visibility: hidden;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}

	
	.Responsive .breadBoxTop .quickSearchContainer
	{
		display: none;
	}
	
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		height: 0;
		padding-top: 190px;*/ /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: relative;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	margin: 0 15px;
width: 1170px;

	
		width: auto;
		max-width: 1170px; 
		margin: 0 auto;
		_width: 1170px;
	
}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	padding: 1px 0;
margin: -1px 0;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */



.mainContainer
{
	 float: left;
	 margin-right: -260px;
	 margin-bottom: 10px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 260px;
	}

.sidebar
{
	float: right;
	font-size: 11px;
width: 250px;

}

.sidebar .section
{
	background: transparent none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	border-width: 0;
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	padding: 0;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}




/* visitor panel */

.sidebar .visitorPanel
{
	zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 5px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
			display: block;
		}

	.sidebar .visitorPanel .visitorText:after
	{
		content: '';
		display: block;
		clear: both;
	}
	
	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 12pt;
color: #ffffff;
padding-bottom: 5px;
margin-bottom: 5px;
border-bottom: 1px solid rgb(44, 44, 44);
position: relative;

}

	.sidebar .section .primaryContent   h3:after,
	.sidebar .section .secondaryContent h3:after
	{
		border-bottom: 1px solid rgb(22, 22, 22);
content: '';
display: block;
position: absolute;
bottom: 0;
left: 0;
right: 0;
height: 0;

	}

	.sidebar .section .primaryContent > h3:first-child,
	.sidebar .section .secondaryContent > h3:first-child
	{
		margin: -8px -8px 5px;
		padding: 8px 8px 6px;
		border-bottom-width: 0;
		background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
	}

		.sidebar .section .primaryContent > h3:first-child:before,
		.sidebar .section .secondaryContent > h3:first-child:before
		{
			content: '';
			display: block;
			position: absolute;
			bottom: -1px;
			left: 8px;
			right: 8px;
			height: 0;
			border-bottom: 1px solid rgb(44, 44, 44);
		}

		.sidebar .section .primaryContent > h3:first-child:after,
		.sidebar .section .secondaryContent > h3:first-child:after
		{
			left: 8px;
			right: 8px;
		}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 12pt;
color: #ffffff;
}

	.sidebar .section .primaryContent   h3 a:hover,
	.sidebar .section .secondaryContent h3 a:hover
	{
		color: rgb(13, 94, 145);
	}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(104, 104, 104);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(104, 104, 104);
	}








/* login bar */

.sidebar .section.loginButton .secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

}






/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		color: rgb(112, 112, 112);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 11px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(127, 127, 127);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	text-decoration: none;
padding: 0;
margin: 0;
text-align: center;
line-height: 36px;
display: block;
cursor: pointer;
height: 36px;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 12pt;
font-family: 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 0 15px;
border: 1px solid rgb(13, 94, 145);
line-height: 34px;
display: block;
text-shadow: 0 0 0 transparent, 0px 0px 3px rgba(0,0,0, 0.5);
-webkit-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
height: 34px;

	}
	
	#SignupButton:hover .inner
	{
		color: #ffffff;
text-decoration: none;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

	}
	
	#SignupButton:active
	{
		outline-style: none;

	}

/* Sidebar copy */
.sidebarClone
{
	display: none !important;
}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel,
		.Responsive .sidebar .fbRecommendations
		{
			display: none;
		}

	.sidebarClone
	{
		display: block !important;
		float: none;
		width: auto;
	}

		.sidebarClone .section
		{
			float: none;
			margin: 10px auto;
			width: auto;
		}

		.sidebarClone .avatarList ul:after,
		.sidebarClone .avatarList ol:after
		{
			content: '';
			display: block;
			clear: both;
		}

		.sidebarClone .avatarList li
		{
			float: left;
			width: 230px;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/** Text used in message bodies **/

.messageText
{
	font-size: 11pt;
font-family: Tahoma, "Times New Roman", Times, serif;
line-height: 1.4;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	
	font-size: 11px;
margin: 10px 0;
line-height: 16px;
width: 100%;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	padding: 0;
display: inline-block;
line-height: 26px;
outline: 0 none;
cursor: pointer;
min-height: 26px;

	
}

	.breadBoxTop a.callToAction + a.callToAction
	{
		margin-right: 5px;
	}

	.sidebar a.callToAction + a.callToAction
	{
		margin-top: 5px;
	}

	a.callToAction span
	{
		font-weight: bold;
font-size: 12px;
font-family: 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
background-color: rgb(13, 94, 145);
padding: 0 14px;
border: 1px solid rgb(13, 94, 145);
display: block;
-webkit-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset; box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset;
line-height: 24px;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
min-height: 24px;
-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			color: #ffffff;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			text-decoration: none;
background-color: rgb(13, 94, 145);

		}

	a.callToAction span small.minorText
	{
		display: block;
		line-height: 1.2em;
		padding-bottom: 10px;
	}

	.sidebarToggle .callToAction
	{
		text-align: center;
		display: block;
		margin: 5px auto 0;
		max-width: 250px;
	}

		.sidebarToggle .callToAction
		{
			min-height: 34px;
			line-height: 34px;
		}

		.sidebarToggle .callToAction span
		{
			min-height: 32px;
			line-height: 32px;
			font-size: 14px;
		}

			.sidebarToggle .callToAction span strong
			{
				display: inline-block;
				padding-left: 5px;
			}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol,
	ol.avatarHeap,
	ul.avatarHeap
	{
		margin-right: -4px;
		margin-top: -4px;
	}
		
		.avatarHeap ol:after,
		ul.avatarHeap:after,
		ol.avatarHeap:after
		{
			display: block;
			content: '';
			clear: both;
		}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}

		.avatarHeap li .avatar
		{
			display: block;
		}

/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}



/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	
	background: url("styles/black_responsive_blue/xenforo/tags.png") 0 0 repeat-x;
	
	background-size: 15px 200px;
	margin-left: 15px;
	margin-right: 6px;
	height: 18px;
	line-height: 18px;
	padding: 0;
	padding-left: 3px;
	border-width: 0;
	color: rgb(173, 173, 173);
	font-size: 12px;
	margin-bottom: 2px;
}

	@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
	{
		.tagList .tag
		{
			
			background-image: url("styles/black_responsive_blue/xenforo/tags-hd.png");
			
		}
	}

	.tagList .tag:hover
	{
		text-decoration: none;
	}

	.tagList .tag .arrow,
	.tagList .tag:after
	{
		position: absolute;
		display: block;
		width: 15px;
		left: -15px;
		top: 0;
		bottom: 0;
		background: inherit;
		background-repeat: no-repeat;
		background-position: 0 -20px;
	}

		.tagList .tag:after
		{
			content: '';
			left: auto;
			right: -6px;
			width: 6px;
			background-position: 0 -40px;
		}


	.tagList .tag:hover
	{
		color: #ffffff;
		background-position: 0 -120px;
	}

		.tagList .tag:hover .arrow
		{
			background-position: 0 -140px;
		}

		.tagList .tag:hover:after
		{
			background-position: 0 -160px;
		}

/* User name classes */

.username .style3
{
	color: #F25C5C;
}

.username .style16
{
	color: #569AD6;
}

.username .style15
{
	color: #D175FF;
}

.username .style4
{
	color: #20B325;
}

.username .style24
{
	color: #A1D490;
}

.username .style8
{
	color: #9A37E6;
}

.username .style22
{
	color: #F1B76E;
}

.username .style23
{
	color: #F1A26E;
}

.username .style14
{
	color: #CFB038;
}

.username .style13
{
	color: #AFF0A8;
}

.username .style18
{
	color: #FADC64;
}


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background: transparent none;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
display: inline-block;
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;
text-shadow: none;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: #ffffff;
text-decoration: none;
background-color: rgb(13, 94, 145);
border-color: rgb(13, 94, 145);

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: #3f3f3f; background-color: rgb(159, 159, 159); border-color: rgb(159, 159, 159); }
.prefix.prefixSecondary  { color: rgb(13, 58, 105); background-color: rgb(67, 136, 233); border-color: rgb(67, 136, 233); }

.prefix.prefixRed        { color: #e6e6e6; background-color: #b30000; border-color: #b30000; }
.prefix.prefixGreen      { color: #e6e6e6; background-color: #006600; border-color: #006600; }
.prefix.prefixOlive      { color: #e6e6e6; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: rgb(64, 64, 64); background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: #e6e6e6; background-color: blue; border-color: blue; }
.prefix.prefixRoyalBlue  { color: #e6e6e6; background-color: #1c41b0; border-color: #1c41b0;  }
.prefix.prefixSkyBlue    { color: rgb(64, 64, 64); background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: rgb(64, 64, 64); background-color: gray; border-color: gray; }
.prefix.prefixSilver     { color: rgb(64, 64, 64); background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: rgb(64, 64, 64); background-color: yellow; border-color: yellow; }
.prefix.prefixOrange     { color: rgb(64, 64, 64); background-color: orange; border-color: orange; }
.prefix.prefixPurple       { color: #e6e6e6; background-color: #620594; border-color: #620594; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
background: none;
padding: 0;
margin: 0;
border: 0 none black;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
font-weight: normal;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent;
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
	padding: 1px 5px;
	border: 1px solid transparent;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}





	.userBanner.wrapped
	{
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: #ffffff; background-color: rgb(11, 79, 121); border-color: rgb(13, 58, 105); 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerStaff.wrapped span { background-color: rgb(13, 58, 105); }

.userBanner.bannerPrimary { color: #3f3f3f; background-color: rgb(173, 173, 173); border-color: rgb(104, 104, 104); }
.userBanner.bannerPrimary.wrapped span { background-color: rgb(104, 104, 104); }

.userBanner.bannerSecondary { color: rgb(11, 79, 121); background-color: rgb(49, 124, 229); border-color: rgb(49, 124, 229); }
.userBanner.bannerSecondary.wrapped span { background-color: rgb(49, 124, 229); }

.userBanner.bannerRed        { color: white; background-color: red; border-color: darkred; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerRed.wrapped span { background-color: darkred; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: darkgreen; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerGreen.wrapped span { background-color: darkgreen; }

.userBanner.bannerOlive      { color: white; background-color: olive; border-color: olive; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: darkblue; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerBlue.wrapped span { background-color: darkblue; }

.userBanner.bannerRoyalBlue  { color: black; background-color: royalblue; border-color: navy; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerRoyalBlue.wrapped span { background-color: navy; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: lightblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: lightblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: dimgray; }
.userBanner.bannerGray.wrapped span { background-color: dimgray; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: gray; }
.userBanner.bannerSilver.wrapped span { background-color: gray; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: gold; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerYellow.wrapped span { background-color: gold; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: darkorange; 
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
 }
.userBanner.bannerOrange.wrapped span { background-color: darkorange; }



@media (max-width:800px), (max-width:1200px)
{
	.Responsive .pageWidth
	{
		padding-right: 5px;
padding-left: 5px;
margin-right: 0;
margin-left: 0;

	}

		.Responsive #header .pageWidth,
		.Responsive #forumFooter .pageWidth
		{
			padding-left: 0;
			padding-right: 0;
		}

	.Responsive #content .pageContent
	{
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


/* FONT AWESOME NODE ICONS */
@font-face
{
        font-family: 'FontAwesome';
        src: url('./styles/default/xenforo/fonts/fontawesome-webfont.eot');
        src: url('./styles/default/xenforo/fonts/fontawesome-webfont.ttf') format("truetype"),
                url('./styles/default/xenforo/fonts/fontawesome-webfont.woff') format('woff'),
                url('./styles/default/xenforo/fonts/fontawesome-webfont.eot?#iefix') format('embedded-opentype'),
                url('./styles/default/xenforo/fonts/fontawesome-webfont.svg#fontawesome-webfont') format('svg');
        font-style: normal;
        font-weight: normal;
}
body, #headerMover {
	background-image: url("https://api.monosnap.com/rpc/file/download?id=IVwaQB4OQ7pLkYbHG63CVswsTt1P8N");
}

/* Like Button */
.message .publicControls .LikeLink
{
    background: url("img/thumb_up.png") no-repeat #2C2C2C;
    border: 1px solid #1A1A1A;
    background-position: 5px 40%;
    -webkit-box-shadow: 0 0 1px #B2B2B2; -moz-box-shadow: 0 0 1px #B2B2B2; -khtml-box-shadow: 0 0 1px #B2B2B2; box-shadow: 0 0 1px #B2B2B2;
    color: white;
    display: block;
    font-size: 11px;
    font-weight: bold;
    margin-top: 0px;
    padding-left: 23px;
    padding-right: 9px;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
    text-shadow: 0 0 0 transparent, 1px 0 2px #1a1a1a;
}

/* Remove Like Button */
.message .publicControls .unlike
{
    background: url("img/thumb_down.png") no-repeat #2C2C2C;
    border: 1px solid #1A1A1A;
    background-position: 5px 65%;
    -webkit-box-shadow: 0 0 1px #B2B2B2; -moz-box-shadow: 0 0 1px #B2B2B2; -khtml-box-shadow: 0 0 1px #B2B2B2; box-shadow: 0 0 1px #B2B2B2;
    color: white;
    display: block;
    font-size: 11px;
    margin-top: 0px;
    padding-left: 23px;
    padding-right: 9px;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
    text-shadow: 0 0 0 transparent, 1px 0 2px #1a1a1a;
}

/* Reply Button */
.message .publicControls .ReplyQuote.item 
{
    background: url("img/reply.png") no-repeat #2C2C2C;
    border: 1px solid #1A1A1A;
    background-position: 5px 50%;
    -webkit-box-shadow: 0 0 1px #B2B2B2; -moz-box-shadow: 0 0 1px #B2B2B2; -khtml-box-shadow: 0 0 1px #B2B2B2; box-shadow: 0 0 1px #B2B2B2;
    color: white;
    display: block;
    font-size: 11px;
    font-weight: bold;
    margin-top: 0px;
    padding-left: 23px;
    padding-right: 9px;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
    text-shadow: 0 0 0 transparent, 1px 0 2px #1a1a1a;
}




/* Best Answer Button */
.message .publicControls .MarkBestAnswer
{
    background: url("http://findicons.com/files/icons/1156/fugue/16/tick_octagon.png") no-repeat #2C2C2C;
    border: 1px solid #1A1A1A;
    background-position: 5px 50%;
    -webkit-box-shadow: 0 0 1px #B2B2B2; -moz-box-shadow: 0 0 1px #B2B2B2; -khtml-box-shadow: 0 0 1px #B2B2B2; box-shadow: 0 0 1px #B2B2B2;
    color: white;
    display: block;
    font-size: 11px;
    font-weight: bold;
    margin-top: 0px;
    padding-left: 25px;
    padding-right: 9px;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
    text-shadow: 0 0 0 transparent, 1px 0 2px #1a1a1a;
}




/* Fix to Mood Selection */
.chooserColumns.threeColumns li {
    width: 19.4% !important;
}
.moodChooser li {
    width: 19.4% !important;
}
.moodChooser ol {
    height: 340px !important;
}

#imagebox {
    position: fixed;
    z-index:100;
    bottom: -0%;
    right: -0%;
}


.noticeButtonContainer
{
    width: 190px;
    padding: 10px;
}
 
 /*
.csgoIntro
{
    background: url(rgba.php?r=0&g=0&b=0&a=153); background: rgba(0,0,0, 0.6); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);
    color: #ffffff;
    font-size: 13px;
    text-align: center;
}
 
.csgoIntro a
{
    color: rgb(13, 94, 145);
    font-weight: bold;
}
 
.csgoIntro h4
{
    color: rgb(13, 94, 145);
    font-size: 14px;
    font-weight: bold;
}
 
.csgoMember
{
    font-size: 9px;
    font-weight: bold;
}
 
.csgoMember a
{
    color: rgb(25, 111, 231);
}
*/

  /* Tag Icon before tagged user */
.message .messageText .username  {
  background: url("img/tag.png") no-repeat left center transparent;
  height: 13px;
  width: 13px;
  margin-left: 3px;
  padding-left: 16px;
}


/* Search Bar Invisibility */
/*#QuickSearchQuery { 
    background-color: rgba(32, 32, 32, 0.2);
    border-color:  rgb(32, 32, 32); border-color:  rgba(32, 32, 32, 0.3); _border-color:  rgb(32, 32, 32);
    -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
    transition: all .2s;
}
/*#QuickSearchQuery:hover { 
   background-color: rgb(32, 32, 32);
   border-color: rgb(32, 32, 32);
   -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
}
/*#QuickSearch:after { opacity: .5; transition: all .2s; }
/*#QuickSearch:hover:after, #QuickSearch.active:after { opacity: 1; }


/* Forums TitleBar also for threads */
.messageContent .titleBar 
{
    overflow: hidden;
    border-bottom: 1px solid #FFFFFF;

}

#content.forum_list .titleBar { display: none; }

.nodeList .categoryStrip:after {
	content: none !important;
}

.node3 .titleBar,
.node55 .titleBar,
.node67 .titleBar, 
.node173 .titleBar, 
.node12 .titleBar, 
.node17 .titleBar, 
.node4 .titleBar {
  background: #003C61; /* Old browsers */
  padding: 7px;
  padding-left: 10px;
  -webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
  border: 2px solid #002942;
  -webkit-box-shadow: 0 0 2px #4C7E9E inset; -moz-box-shadow: 0 0 2px #4C7E9E inset; -khtml-box-shadow: 0 0 2px #4C7E9E inset; box-shadow: 0 0 2px #4C7E9E inset;}

.node3 .titleBar h1 {color: #EAEAEA; text-shadow: 0 1px 3px #1E1E1E !important;}


/* ----- NODES ------ */
.node.category.level_1.node_3 div.categoryStrip
{
	/* Bacons */ 
	background-color: #C45EC4;
}
.node.category.level_1.node_67 div.categoryStrip
{
	/* Server Information */ 
	background-color: #7936D1;
}
.node.category.level_1.node_12 div.categoryStrip
{
	/* Starbound Discussion */ 
	background-color: #009999;
}



.node.category.level_1.node_173 div.categoryStrip
{
	/* Starbound RP */ 
	background-color: #005499;
}


.node.category.level_1.node_102 div.categoryStrip,  .node.category.level_1.node_89 div.categoryStrip
{



	/* ARK, Terraria*/ 
	background-color: #169816;
}
.node.category.level_1.node_92 div.categoryStrip
{
	/* GAMING*/ 
	background-color: #AC11F7;
}
.node.category.level_1.node_17 div.categoryStrip
{
	/* Other Chat */ 
	background-color: #EF8A24;
}
.node.category.level_1.node_55 div.categoryStrip
{
	/* Staff */ 
	background-color: #D84343;
}

/* ----- NODES  END ------ */

.titleBar {
  background-image: url('img/titlebar.png');
  background-repeat: repeat;
  background-position:right;
  background-color: #202020;
  padding: 7px;
  -webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
  border: 0px solid #202020;
  -webkit-box-shadow: 0 0 2px #636363inset; -moz-box-shadow: 0 0 2px #636363inset; -khtml-box-shadow: 0 0 2px #636363inset; box-shadow: 0 0 2px #636363inset;}
.titleBar h1 {color: #FFFFFF; text-shadow: 0 1px 3px #282828 !important;}
  
 
/* New Button for unread forums */ 
.nodeInfo.unread .nodeTitle:after
 {
	background-color: #003C61;
	content: "NEW";
	color: white;
	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
	margin-left: 5px;
	padding: 1px 5px;
	font-size: 9px; 
}




/* Avatar in visitor tab */
.navTab .accountPopup img
{
    float: left;
    width: 20px;
    height: 20px;
    margin-right: 5px;
    margin-top: 3px;
    -webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
}

/* Firefox fix for avatar in visitor tab */
.navTabs .navTab.account .navLink .accountUsername
{
    display: inline-block;
}







/*=Daily Vote Server OLD CSS=*/
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  font-family: Courier New;
  color: #ffffff;
  font-size: 15px;
  padding: 5px 10px 5px 10px;
  border: dotted #1f628d 1px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}


/*=Font Awesome Icon: Forums=*/
.navTabs .navTab.forums .navLink:before
{
    display: block !important;
    font-family: FontAwesome;
    position: absolute;
    border-left: none;
    top: 0 px;
    left: 5px;
/*--icon to display--*/
    content: "\f03a";
/*--icon color--*/
    color: #FFF;
/*--icon size--*/
    font-size: 14px;
}
/*--icon color if tab is selected--*/
   .navTabs .navTab.forums.selected .navLink:before {color: #FFF;}
/*--icon color if mouse is hovered--*/
   .navTabs .navTab.forums:hover .navLink:before {color: #FFF;}
/*--adjust the px relative to the icon size--*/
   .navTabs .navTab.forums .navLink  { padding-left: 25px; }
   
/*=Font Awesome Icon: Donation Manager=*/
.navTabs .navTab.addm .navLink:before
{
    display: block !important;
    content: "\f08a"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    left: 5px;
}
   .navTabs .navTab.addm.selected .navLink:before {color: #FFF;}
   .navTabs .navTab.addm:hover .navLink:before {color: #FFF;}
   .navTabs .navTab.addm .navLink  { padding-left: 25px; }
   
   
/*=Font Awesome Icon: Memberlist=*/
.navTabs .navTab.members .navLink:before
{
    display: block !important;
    content: "\f00a"; 
    font-family: FontAwesome;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 14px;
    position: absolute;
    border-left: none;
    left: 7px;
}
   .navTabs .navTab.members.selected .navLink:before {color: #FFF;}
   .navTabs .navTab.members:hover .navLink:before {color: #FFF;}
   .navTabs .navTab.members .navLink  { padding-left: 27px; }
   
   /*=Font Awesome Icon: Competitions=*/
.navTabs .navTab.competitions .navLink:before
{
    display: block !important;
    content: "\f0a4"; 
    font-family: FontAwesome;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    border-left: none;
    left: 6px;
}
   .navTabs .navTab.competitions.selected .navLink:before {color: #FFF;}
   .navTabs .navTab.competitions:hover .navLink:before {color: #FFF;}
   .navTabs .navTab.competitions .navLink  { padding-left: 26px; }
   
   
   
/*=Font Awesome Icon: ShowCase=*/
.navTabs .navTab.showcase .navLink:before
{
    display: block !important;
    content: "\f019"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    left: 5px;
}
   .navTabs .navTab.showcase.selected .navLink:before {color: #FFF;}
   .navTabs .navTab.showcase:hover .navLink:before {color: #FFF;}
   .navTabs .navTab.showcase .navLink  { padding-left: 25px; }
   
   
   
/*=Font Awesome Icon: Gallery =*/
.navTabs .navTab.sonnb_xengallery .navLink:before
{
    display: block !important;
    content: "\f083"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    left: 7px;
}
   .navTabs .navTab.sonnb_xengallery .navLink  { padding-left: 27px; }
     

/*=Font Awesome Icon: Chat=*/
.navTabs .navTab.chat .navLink:before
{
    display: block !important;
    content: "\f1d7"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    left: 7px;
}
   .navTabs .navTab.chat .navLink  { padding-left: 27px; }



/*=Font Awesome Icon: Groups=*/
.navTabs .navTab.groups .navLink:before
{
    display: block !important;
    content: "\f0c0"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 14px;
    position: absolute;
    left: 7px;
}
   .navTabs .navTab.groups .navLink  { padding-left: 27px; }



/*=Font Awesome Icon: BADGES=*/
.navTabs .navTab.MasterBadge .navLink:before
{
    display: block !important;
    content: "\f091"; 
    font-family: FontAwesome;
    border-left: none;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    left: 7px;
}
   .navTabs .navTab.MasterBadge .navLink  { padding-left: 24px; }


  
/*=Font Awesome Icon: AWARDS=*/
.navTabs .nodetab48 .navLink:before
{
    display: block !important;
    content: "\f006"; 
    font-family: FontAwesome;
/*--adjust as necessary--*/
    color: #FFF;
    font-size: 15px;
    position: absolute;
    border-left: none;
    left: 6px;
}
   .navTabs .nodetab48.selected .navLink:before {color: #FFF;}
   .navTabs .nodetab48:hover .navLink:before {color: #FFF;}
   .navTabs .nodetab48 .navLink  { padding-left: 25px; }
   
   
/*=Font Awesome Icon: STAFF AREA=*/ 
.navTabs .nodetab55 .navLink:before
{
    display: block !important;
    content: "\f11d"; 
    font-family: FontAwesome;
    text-shadow: 0 0 0 transparent, 0 0 1px #8C0606;
/*--adjust as necessary--*/
    color: rgb(203, 46, 46);
    font-size: 18px;
    position: absolute;
    border-left: none;
    left: 6px;
}
   .navTabs .nodetab55 .navLink  { 
   padding-left: 28px; 
   color: rgb(203, 46, 46);
   font-size:18px; 
   }
   
  

/*=Profile Posts ForumList Title=*/    
/*=.WidgetFramework_WidgetRenderer_ProfilePosts h3 {=*/
/*=font-size: 1.2em;=*/
/*=border-bottom: 1px solid rgb(22, 22, 22);=*/
/*=-webkit-box-shadow: 0 1px 0 #2C2C2C; -moz-box-shadow: 0 1px 0 #2C2C2C; -khtml-box-shadow: 0 1px 0 #2C2C2C; box-shadow: 0 1px 0 #2C2C2C;=*/
/*=margin-bottom: 4px;=*/
/*=padding-bottom:4px;=*/
/*=padding-top:4px;=*/
/*=}


/* User Level Banners */
.userBanner.lvl1{
color: white;
background-color: #54565a;
border-color: #5b606e;}
.userBanner.lvl2{
color: white;
background-color: #54565a;
border-color: #5b606e;}
.userBanner.lvl3{
color: white;
background-color: #54565a;
border-color: #5b606e;}
.userBanner.lvl4{
color: white;
background-color: #54565a;
border-color: #5b606e;}
.userBanner.lvl5{
color: white;
background-color: #54565a;
border-color: #5b606e;}

.userBanner.event{
color: #F0D7F7;
background-color: #B446EB;
border-color: #B446EB;}

.userBanner.admin{
color: #FADCDD;
background-color: red;
border-color: red;}

.userBanner.comuadmin{
color: #E8F3FC;
background-color: #4177A6;
border-color: #4177A6;}

.userBanner.donator{
color: #D7EAFA;
background-color: #BF9C0D;
border-color: #BF9C0D;}

.userBanner.modi{
color: #E0F2D8;
background-color: #3CAD0A;
border-color: #3CAD0A;}

.userBanner.gmod{
color: #D4EBCA;
background-color: #168A1A;
border-color: #168A1A;}


.userBanner.builder{
color: #FAEECD;
background-color: #A1790B;
border-color: #A1790B;}


.userBanner.lvl1, .userBanner.lvl2, .userBanner.lvl3, .userBanner.lvl4, .userBanner.lvl5, .userBanner.event, .userBanner.admin, .userBanner.comuadmin, .userBanner.donator, .userBanner.modi, .userBanner.gmod, .userBanner.builder{
  text-align: center;
  font-weight: bold;
  text-shadow: 0 0 0 transparent, 0 0 2px black;}



.icon-eu {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #F6FFA8), color-stop(0.4, #FFDA82), color-stop(1, #F0B429) );
  background-image: gradient( linear, left top, right top, color-stop(0, #F6FFA8), color-stop(0.4, #FFDA82), color-stop(1, #F0B429) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
.icon-eu:before { content: "\f0e3";
font-family: FontAwesome;
padding-right: 4px;
top: 2px; }
  
  
.icon-draw {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
.icon-draw:before { content: "\f1fc";
font-family: FontAwesome;
padding-right: 4px;
top: 2px; }

.prefix.build, .music, .art, .video, .story, .wip {
color: white;
background-color: #264778;
border-color: #1D3F73;
}
.prefix.build:before { content: "\f03e";
font-family: FontAwesome;
padding-right: 4px;
top: 2px;
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #FFFFFF), color-stop(1.00, #2DD1E3));
color:transparent;
-webkit-background-clip: text;
background-clip: text;
 }
.prefix.music:before { content: "\f001";
font-family: FontAwesome;
padding-right: 4px;
top: 2px;
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #FFFFFF), color-stop(1.00, #2DD1E3));
color:transparent;
-webkit-background-clip: text;
background-clip: text;
 }
 

.question:before {
    content: "\f1cd";
    font-family: FontAwesome;
    margin-right: 4px;
}
.prefix.question {
    background: none repeat scroll 0 0 #4A843C;
    color: #245418;
    font-weight: normal;
    border: double !important;
    font-size: 10pt;
}
.prefix.question:hover {
    background: none repeat scroll 0 0 #4A4E51 !important;
    color: #fafafa !important;
} 
 
 
 
 
 
.prefix.update {
color: #FFF;
background-color: #5FA348;
border-color: #4F8A3B;
}




/* CREATE THREAD ICON FORUM LIST */
.nodeList .nodeText .fa.fa-pencil-square-o { float: left; font-size: 11px; color: rgb(200, 200, 200); padding-right: 3px; margin-top: 6px; }
.nodeList .nodeText .fa.fa-pencil-square-o:hover {color: #003C61; transition: all 0.3s ease-in-out; }


/* Hide Create Thread Forum List Button */
.node_21 .fa.fa-pencil-square-o, .node_5 .fa.fa-pencil-square-o, .node_95 .fa.fa-pencil-square-o {
display: none;
}



/* StackAlert Popup CSS */
#StackAlerts .stackAlert
    {
        margin-top: 5px;
border: 1px solid rgb(26, 26, 26);
position: relative;
-webkit-box-shadow: 0 0 25px rgb(25, 108, 192); -moz-box-shadow: 0 0 25px rgb(25, 108, 192); -khtml-box-shadow: 0 0 25px rgb(25, 108, 192); -webkit-box-shadow: 0 0 25px rgb(25, 108, 192); -moz-box-shadow: 0 0 25px rgb(25, 108, 192); -khtml-box-shadow: 0 0 25px rgb(25, 108, 192); box-shadow: 0 0 25px rgb(25, 108, 192);
width: 270px;

    }
#StackAlerts .stackAlertContent
        {
            font-weight: bold;
font-size: 11px;
color: #fff;
background-color: rgb(32, 32, 32);
padding: 9px;
border: 1px solid rgb(32, 32, 32);

        }
        
/* FIX FOR ROTATING ADS SLIDER BOTTOM PADDING */        
.slider-wrapper.theme-default {
    margin-bottom: 12px;
}      
        


.node .forumNodeInfo .nodeIcon:after, .node .categoryForumNodeInfo .nodeIcon:after
{
font-family: "FontAwesome";
font-size: 30px;
float: right;
}

.node_79 .categoryForumNodeInfo .nodeIcon:after
{
   content: "\f059";
   font-size: 33px;
   color: #C45EC4;
   }


.node_170 .categoryForumNodeInfo .nodeIcon:after
{
   content: "\f1ea";
   font-size: 33px;
   color: #C45EC4;
   }


.node_7 .forumNodeInfo .nodeIcon:after
{
   content: "\f004";
   color: #C45EC4;
   }


.node_105 .linkNodeInfo .nodeIcon:after
{
   content: "\f0c0";
   color: #C45EC4;
   font-family: "FontAwesome";
font-size: 28px;
float: right;
   }

.node_152 .linkNodeInfo .nodeIcon:after
{
   content: "\f121";
   color: #009999;
   font-family: "FontAwesome";
font-size: 30px;
float: right;
   }

.node_151 .linkNodeInfo .nodeIcon:after
{
   content: "\f1c0";
   color: #009999;
   font-family: "FontAwesome";
font-size: 28px;
float: right;
   }


.node_21 .forumNodeInfo .nodeIcon:after
{
   content: "\f1ea";
   color: #C45EC4;
}
.node_68 .forumNodeInfo .nodeIcon:after
{
   content: "\f233";
   color: #7936D1;
}

.node_83 .forumNodeInfo .nodeIcon:after
{
   content: "\f071";
   font-size: 30px;
   color: #7936D1;
}
   
.node_109 .forumNodeInfo .nodeIcon:after
{
   content: "\f02d";
   font-size: 30px;
   color: #7936D1;
}   

.node_80 .categoryForumNodeInfo .nodeIcon:after
{
   content: "\f059";
   font-size: 33px;
   color: #7936D1;
}
.node_5 .forumNodeInfo .nodeIcon:after
{
   content: "\f1ea";
   color: #009999;
}

.node_170 .forumNodeInfo .nodeIcon:after
{
   content: "\f1ea";
   color: #7936D1;
}



.node_172 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}

.node_116 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}

.node_107 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}

.node_114 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}
.node_115 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}
.node_110 .forumNodeInfo .nodeIcon:after
{
   content: "\f036";
   color: #005499;
}






.node_171 .forumNodeInfo .nodeIcon:after
{
   content: "\f02d";
   color: #7936D1;
}

.node_13 .forumNodeInfo .nodeIcon:after
{
   content: "\f1d7";
   color: #009999;
}
.node_14 .forumNodeInfo .nodeIcon:after
{
   content: "\f059";
   font-size: 33px;
   color: #009999;
}
.node_15 .forumNodeInfo .nodeIcon:after
{
   content: "\f1fc";
   color: #009999;
}
.node_90 .forumNodeInfo .nodeIcon:after
{
   content: "\f1bb ";
   color: #00B000;
}
.node_91 .forumNodeInfo .nodeIcon:after
{
   content: "\f1bb ";
   color: #00B000;
}
.node_18 .forumNodeInfo .nodeIcon:after
{
   content: "\f1d7";
   color: #FC9226;
}
.node_94 .forumNodeInfo .nodeIcon:after
{
   content: "\f1fc";
   color: #FC9226;
}
.node_20 .forumNodeInfo .nodeIcon:after
{
   content: "\f01d";
   font-size: 33px;
   color: #FC9226;
}
.node_19 .forumNodeInfo .nodeIcon:after
{
   content: "\f21d";
   font-size: 33px;
   color: #FC9226;
}
.node_22 .forumNodeInfo .nodeIcon:after
{
   content: "\f008";
   color: #FC9226;
}
.node_95 .forumNodeInfo .nodeIcon:after
{
   content: "\f187";
   color: #FC9226;
}
.node_103 .forumNodeInfo .nodeIcon:after
{
   content: "\f1bb";
   color: #00B000;
}
.node_153 .forumNodeInfo .nodeIcon:after
{
   content: "\f1bb";
   color: #00B000;
}

.node_104 .forumNodeInfo .nodeIcon:after
{
   content: "\f1bb";
   color: #00B000;
}

/* NEW Messages */
/*
.node_3 .nodeInfo.unread .nodeTitle:after {
  background-color: violet;
}         
.nodeList .node_3 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px violet;
} 

.node_67 .nodeInfo.unread .nodeTitle:after {
  background-color: #7936D1;
}         
.nodeList .node_67 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px #7936D1;
} 


.node_12 .nodeInfo.unread .nodeTitle:after {
  background-color: #009999;
}         
.nodeList .node_12 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px #009999;
} 

.node_89 .nodeInfo.unread .nodeTitle:after {
  background-color: #00B000;
}        
.nodeList .node_89 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px #00B000;
}
.node_102 .nodeInfo.unread .nodeTitle:after {
  background-color: #00B000;
}        
.nodeList .node_102 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px #00B000;
}

.node_17 .nodeInfo.unread .nodeTitle:after {
  background-color: #FC9226;
}        
.nodeList .node_17 .categoryStrip .nodeTitle a {
text-shadow: 0 0 0 transparent, 0px 0px 5px #FC9226;
} 

*/

/* NAV BAR ARROWS REMOVED */
.navTabs .SplitCtrl:after, .navTabs .navTab .arrowWidget {
display: none;
} 


.bn-box {
  margin: 0px 0px 10px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1); -khtml-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1); box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  font-size: 14px;
  position: relative;
}
.bn-box-content {
  text-shadow: 0 0 0 transparent, 1px 1px 1px #ffffff;
  padding: 7px;
  min-height: 35px;
}
.bn-box.bn-silver {
  border: 1px solid #a0a0a0;
}
.bn-box.bn-silver .bn-box-content {
  color: #7a7a7a;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #ffffff;
  border: 1px solid #ffffff;
  background: #ececec;
  -webkit-box-shadow: inset 0 0 45px #c3c3c3; -moz-box-shadow: inset 0 0 45px #c3c3c3; -khtml-box-shadow: inset 0 0 45px #c3c3c3; box-shadow: inset 0 0 45px #c3c3c3;
}
.bn-box.bn-silver .bn-box-content strong {
  color: #747474;
}
.bn-box.bn-sepia {
  border: 1px solid #c0923b;
}
.bn-box.bn-sepia .bn-box-content {
  color: #866629;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #f8f3e9;
  border: 1px solid #f2e8d5;
  background: #e6d3ae;
  -webkit-box-shadow: inset 0 0 45px #d3b170; -moz-box-shadow: inset 0 0 45px #d3b170; -khtml-box-shadow: inset 0 0 45px #d3b170; box-shadow: inset 0 0 45px #d3b170;
}
.bn-box.bn-sepia .bn-box-content strong {
  color: #7e6027;
}
.bn-box.bn-danger {
  border: 1px solid #be7e0b;
}
.bn-box.bn-danger .bn-box-content {
  color: #764e07;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #fbe1b4;
  border: 1px solid #f9d89c;
  background: #f6c56c;
  -webkit-box-shadow: inset 0 0 45px #f2a61f; -moz-box-shadow: inset 0 0 45px #f2a61f; -khtml-box-shadow: inset 0 0 45px #f2a61f; box-shadow: inset 0 0 45px #f2a61f;
}
.bn-box.bn-danger .bn-box-content strong {
  color: #6c4806;
  font-size: 22px;
  line-height: 42px;
 
}
.bn-box.bn-warning {
  border: 1px solid #dc1215;
}
.bn-box.bn-warning .bn-box-content {
  color: #960c0e;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #fcd8d9;
  border: 1px solid #fac1c1;
  background: #f69293;
  -webkit-box-shadow: inset 0 0 45px #f04648; -moz-box-shadow: inset 0 0 45px #f04648; -khtml-box-shadow: inset 0 0 45px #f04648; box-shadow: inset 0 0 45px #f04648;
}
.bn-box.bn-warning .bn-box-content strong {
  color: #8c0c0d;
}
.bn-box.bn-info {
  border: 1px solid #4195cd;
}
.bn-box.bn-info .bn-box-content {
  color: #286c9a;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #f7fbfd;
  border: 1px solid #e3eff8;
  background: #A5CCE6;
  -webkit-box-shadow: inset 0 0 45px #7ab5dc; -moz-box-shadow: inset 0 0 45px #7ab5dc; -khtml-box-shadow: inset 0 0 45px #7ab5dc; box-shadow: inset 0 0 45px #7ab5dc;
}

.bn-box-content a {
    color: #BF0811;
}

.bn-box.bn-info .bn-box-content strong {
  color: #266791;
}
.bn-box.bn-success {
  border: 1px solid #72c52a;
}
.bn-box.bn-success .bn-box-content {
  color: #4d861c;
  text-shadow: 0 0 0 transparent, 1px 1px 1px #e9f8dc;
  border: 1px solid #dcf3c7;
  background: #c1ea9d;
  -webkit-box-shadow: inset 0 0 45px #96dc5a; -moz-box-shadow: inset 0 0 45px #96dc5a; -khtml-box-shadow: inset 0 0 45px #96dc5a; box-shadow: inset 0 0 45px #96dc5a;
}
.bn-box.bn-success .bn-box-content strong {
  color: #487d1a;
}



#widget-tabs-donate h3 {
        display: none;
}

#widget-tabs-donate .donationCampaign > .secondaryContent {
    margin: 0;
    border: none;
    padding: 0;
    -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
    position: static;
    background-color: transparent;
}

.message .signature .bbCodeImage {
   max-height: 200px !important;
}

/* Crorus' crappy edit of the chat */

#siropuChat.siropuChatAllPages {
    max-width: 1000px;
        width: 100%;
    max-height: 500px !important; 
    left: initial !important;
    bottom: 30px !important;
    top: 45%;
}

#siropuChatBar {
max-width: 998px;
    background-color: rgb(32, 32, 32);
    border: 2px solid rgb(25, 108, 192) !important;
    border-bottom: 0px solid !important;
    -webkit-border-top-left-radius: 0px !important;
    -moz-border-radius-topleft: 0px !important;
    -khtml-border-top-left-radius: 0px !important;
    -webkit-border-top-left-radius: 0px !important; -moz-border-radius-topleft: 0px !important; -khtml-border-top-left-radius: 0px !important; border-top-left-radius: 0px !important;
    -webkit-border-top-right-radius: 0px !important;
    -moz-border-radius-topright: 0px !important;
    -khtml-border-top-right-radius: 0px !important;
    -webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
    left: initial !important;
        width: 100% !important;
}

#siropuChatToggle {

    border-left: none !important;
    -webkit-border-top-right-radius: 0px !important;
    -moz-border-radius-topright: 0px !important;
    -khtml-border-top-right-radius: 0px !important;
    -webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
}

#siropuChatEditor {
    border-top: 0px solid !important;
}

#siropuChatMessages, #siropuChatRooms {
    border-right: 0px solid !important;
}

.siropuChatMessage a.externalLink {
	display: inline;
}
.siropuChatContentLeft {
	text-align: left !important;
	margin: 0px !important;
	
	word-break: normal !important;
}

@media (max-width: 480px) {
    #siropuChatBar {
        display: none;
    }
}





/* Dodgiest of all dodgyness to get around bacon hiding the title from me */
#widget-tab-38 h3 center p {
	display: none;
}

/* Donation widget ultimate fix */
.section.donationCampaign .secondaryContent {
    box-shadow: none !important;
}

.section.donationCampaign .secondaryContent h3 {
    background-image: none !important;
}
.section.donationCampaign .secondaryContent h3:before {
    border: 0 !important;
}

.secondaryContent:after {
    background-image: none !important;
}

/* Server info front page button fix */
.errorPanel .ButtonMonitor:hover {
   color: #ffffff !important;
   text-decoration: none !important;
   font-weight: bold;
 }
 
 .errorPanel .ButtonMonitor {
   font-weight: bold;
 }
 
 .errorPanel:hover {
    background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), -webkit-linear-gradient(left, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.1) 100%), linear-gradient(to right, rgba(255, 255, 255, 0.0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.0) 100%);
 }
 
 /* Password pop-up message */
 
 
 
/* CHAT SCROLL */
.siropuChatMessages::-webkit-scrollbar, #siropuChatForumActivit::-webkit-scrollbary, #siropuChatRooms::-webkit-scrollbar {
    	background: #353535;	
	width: 12px;
}

.siropuChatMessages::-webkit-scrollbar-thumb, #siropuChatForumActivit::-webkit-scrollbar-thumb, #siropuChatRooms::-webkit-scrollbar-thumb {
	background-color: #999;
	/*background-image: -webkit-gradient(linear, 40% 0%, 75% 84%, from(#0d3a69), to(#2e5f94), color-stop(.6,#0d3a69));*/					   
}
 
 
ul.tabs li b.muted {
	color: white;
}

div.siropuChatMessages, div#siropuChatForumActivity, div#siropuChatRooms {
	border-right: none;	
}
ul#siropuChatTabs {
	margin-top: 0px;
	background: #1B1B1B;
}
div#siropuChatContent{
	border-top: none;
	margin-top: 5px;
}
#siropuChat a[href]:hover, #siropuChat .Popup .PopupControl:hover, #siropuChat .Popup.PopupContainerControl:hover {
	color: #D0D0D0;
}
#siropuChat .tabs li a, #siropuChat .tabs.noLinks li {
	background-image: none;
	margin-right: 1px;
}
#siropuChat .tabs li.active a, #siropuChat .tabs.noLinks li.active, #siropuChat .tabs li:hover a, #siropuChat .tabs.noLinks li:hover {
	border-color: #2e5f94;
	background-color: #2e5f94;
}
.siropuChatUsers{
	border-left: 1px solid #2B2B2B;
}


/* -------GROUPFIX 2016 update---------- */

.Team_CommentItem {
    background-color: rgba(32, 32, 32, 0) !important;
}

.Team_navMenuCollapse{
    height: 100% !important;
    line-height: 20px !important;
}

#Team_extraRules .textHeading {
border: 0px !important;
    margin-top: -5px !important;
    font-size: large;
}

#Team_extraRules {
    border:  4px solid rgb(255, 0, 0); border:  4px solid rgba(255, 0, 0, 0.13); _border:  4px solid rgb(255, 0, 0);
    -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
    padding: 7px;
    transition: all 0.50s ease-in-out 0s;
    margin-top: 25px !important;
    background-color: rgba(33, 0, 0, 0.56);
}
.mdl-card {
background: url(rgba.php?r=47&g=47&b=47&a=204) !important; background: rgba(47, 47, 47, 0.8) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC2F2F2F,endColorstr=#CC2F2F2F);
}

.Team_NewsFeedCard .cardPublisher .cardPublisherImg, .Team_NewsFeedCard .cardPublisher {
    -webkit-border-radius: 0% !important; -moz-border-radius: 0% !important; -khtml-border-radius: 0% !important; border-radius: 0% !important;
}

.Team_menuPopup {
    -webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
    background: url(rgba.php?r=43&g=43&b=43&a=247) !important; background: rgba(43, 43, 43, 0.97) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#F72B2B2B,endColorstr=#F72B2B2B);
}
.Team_NavContainer .Team_navItem:hover {
    background-color: rgba(47, 47, 47, 0.8) !important;
    transition: background-color .25s;

}

.Team_menuPopup .Team_subMenu li:hover {
    background-color: rgba(47, 47, 47, 0.8) !important;
}

.Team_menuName {
    color: rgb(159, 159, 159) !important;
    padding: 5px 10px !important;
    margin: 0px !important;
    display: block !important;


}

.Team_NavContainer {
    background-color: rgba(47, 47, 47, 0.8);
    line-height: 15px !important;
}

.Team_userNav .Team_menuPopup {
    right: 0px !important;
}

.Team_BodyComponents .likesSummary, .Team_BodyComponents .message .likesSummary.secondaryContent {
margin-top: 0px !important; 
background: linear-gradient(to right, rgba(13, 94, 145, 0.15), rgba(13, 94, 145, 0), rgba(13, 94, 145, 0), rgba(13, 94, 145, 0)) !important;
}

.lastUpdate.muted {
    font-size: 11px;
    padding: 10px 5px 5px 18px !important;
}

.Team_CommentPublisher .likesSummary {
 background-color: rgba(13, 94, 145, 0) !important;
    padding: 5px 5px 5px 18px !important;
    -webkit-border-radius: 0px !important; 
    -moz-border-radius: 0px !important;
    -khtml-border-radius: 0px !important;
    -webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important; 
}

.Team_BodyComponents .LikeText {
margin-left: 10px !important;
}

.Team_PublicControls .Team_PublicControlsInner {

    background-color: rgba(224, 224, 224, 0.13) !important;
}


.Team_BodyComponents .likesSummary:before {
    left: 10px !important;

}

.Team_navItem.selected {
    background-color: rgba(13, 94, 145, 0.8) !important;
    transition: background-color .25s;
}

.Team_NavContainer .Team_navItem {
    color: white !important;
}

.mdl-menu__outline {
background-color: rgba(43, 43, 43, 0.97) !important;
}

.mdl-menu__item:hover {
    background-color: rgba(47, 47, 47, 0.8) !important;
}

.Team_PublicControlsInner>* {
    color: #FFF !important;
}

.memberListMain .primaryContent {
    position: static;
}

.TeamListSidebar>* {
    border: 0px !important;
}
    
.TeamListSidebar h3 {
    border-bottom: 0px !important;
}    

.Team_SliderContainer .card-item-title {
    background-color: rgba(33, 33, 33, 0.67) !important;
}

.ui-button {
    background: url(rgba.php?r=47&g=47&b=47&a=204) !important; background: rgba(47, 47, 47, 0.8) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC2F2F2F,endColorstr=#CC2F2F2F);
    border: 0px !important;
}

.mdl-button--colored:hover {

    background-color: rgb(25, 108, 192) !important;
    
    color: rgb(255,255,255) !important;
    height: 60px;
    width: 60px;
        transition: all 0.25s ease-in-out 0s;
}

.mdl-button--colored {
   background-color: rgba(25, 108, 192, 0.75) !important;
    color: rgb(255,255,255);
        transition: all 0.25s ease-in-out 0s;
}

a:link.Team_CommentPublicControls {
color: gray !important;
}


.mdl-card__supporting-text {
background-color: rgba(43, 43, 43, 0.97) !important;
color: #dddcdc !important;

text-shadow: 0px -2px 0px #333, 0px 2px 3px #666;
                      
    }

.Team_wall_newsfeed #pageDescription {
display: none;
}

/* event add-on fix --------------------------------------------*/
.fc-today {
    background: url(rgba.php?r=128&g=162&b=183&a=20) !important; background: rgba(128, 162, 183, 0.08) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1480A2B7,endColorstr=#1480A2B7);
}

.fc-today:after {

}
.fc-view, .fc-view > table {
    background: url(rgba.php?r=41&g=41&b=41&a=160); background: rgba(41, 41, 41, 0.63); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#A0292929,endColorstr=#A0292929);
}
.fc .fc-button-group > * {
    background: rgb(58, 135, 173);
}
.fc-day-grid-event .fc-content {
    padding: 5px;
}
.fc-event[href], .fc-event.fc-draggable {
    margin-bottom: 5px;
}

.fc-unthemed th, .fc-unthemed td, .fc-unthemed thead, .fc-unthemed tbody, .fc-unthemed .fc-divider, .fc-unthemed .fc-row, .fc-unthemed .fc-popover {
    border-color:  rgb(25, 25, 25) !important; border-color:  rgba(25, 25, 25, 0.7) !important; _border-color:  rgb(25, 25, 25) !important;
}

.featuredEventList .featuredEvent {

    min-width: 250px;
    max-width: 49.5% !important;
    background: url(rgba.php?r=35&g=35&b=35&a=178) !important; background: rgba(35, 35, 35, 0.7) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#B2232323,endColorstr=#B2232323);
    border:  2px solid rgb(58, 135, 173) !important; border:  2px solid rgba(58, 135, 173, 0.62) !important; _border:  2px solid rgb(58, 135, 173) !important;
    -webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
        text-decoration: none !important;
}

.messageSimple {

    background: url(rgba.php?r=32&g=32&b=32&a=216); background: rgba(32,32,32,0.85); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#D8202020,endColorstr=#D8202020);
    padding: 7px !important;
    border: 1px solid rgb(32, 32, 32);
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
}

.eventInformation {
    background: url(rgba.php?r=32&g=32&b=32&a=216); background: rgba(32,32,32,0.85); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#D8202020,endColorstr=#D8202020);
    padding: 7px !important;
    border: 1px solid rgb(32, 32, 32);
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
        width: inherit !important;
}

.FollowList.memberList {
    background: url(rgba.php?r=32&g=32&b=32&a=216); background: rgba(32,32,32,0.85); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#D8202020,endColorstr=#D8202020);
    padding: 7px !important;
    border: 1px solid rgb(32, 32, 32);
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    -webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
    }
    
.fc .fc-button-group > * {

    -webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
    color: white !important;

    -moz-box-shadow: inset 0px 0px 0px 0px #54a3f7 !important;
    -webkit-box-shadow: inset 0px 0px 0px 0px rgba(84, 163, 247, 0.65) !important;
    -webkit-box-shadow: inset 0px 0px 0px 0px rgba(84, 163, 247, 0.66) !important; -moz-box-shadow: inset 0px 0px 0px 0px rgba(84, 163, 247, 0.66) !important; -khtml-box-shadow: inset 0px 0px 0px 0px rgba(84, 163, 247, 0.66) !important; box-shadow: inset 0px 0px 0px 0px rgba(84, 163, 247, 0.66) !important;
    background: url(rgba.php?r=0&g=44&b=66&a=119) !important; background: rgba(0, 44, 66, 0.47) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#77002C42,endColorstr=#77002C42);
    border:  1px solid rgb(58, 135, 173) !important; border:  1px solid rgba(58, 135, 173, 0.56) !important; _border:  1px solid rgb(58, 135, 173) !important;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    text-decoration: none;
    text-shadow: 0px 0px 0px rgba(21, 70, 130, 0) !important;
}

.fc-toolbar .fc-center {
    display: inline-block;
    font-size: x-large;

}
.fc-toolbar {
    margin-bottom: 5px !important;
}

.fc-agendaDay-button.fc-button {
padding: 0 14px;
}

.fc-agendaWeek-button.fc-button {
padding: 0 16px;
}

.fc-month-button.fc-button {
padding: 0 14px;
}

.fc-event {
    text-decoration: none !important;
    line-height: 1.3;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -khtml-border-radius: 3px;
    -webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
    border: 1px solid #3a87ad;
    background-color: #165A7B !important;
    font-weight: normal;
    transition: all 0.20s ease-in-out 0s;
}

.fc-event:focus {
background-color: #3a87ad !important;
    transition: all 0.20s ease-in-out 0s;
}

.fc-h-event.fc-not-end {
    background: linear-gradient(to left, rgba(0,0,0,0.30) 50px,rgba(0,0,0,0) 150px);

}

.fc-h-event.fc-not-start:before {
    content: "";
    display: inline-block;
    border-bottom-width: 2px;
    border-left-width: 2px;
    -webkit-transform: rotate(-135deg);
    -moz-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    -webkit-transform:  rotate(-135deg); -moz-transform:  rotate(-135deg); -o-transform:  rotate(-135deg); -ms-transform:  rotate(-135deg);transform: rotate(-135deg);
    -webkit-transform-origin: 0% 100%;
    -moz-transform-origin: 0% 100%;
    -ms-transform-origin: 0% 100%;
    -o-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
    position: absolute;
    top: -50%;
    bottom: 50%;
    left: 1.6em;
    right: 0;

}

.fc-h-event.fc-not-start {
 background: linear-gradient(to right, rgba(0,0,0,0.30) 50px,rgba(0,0,0,0) 150px);
}

.fc-h-event.fc-not-end:after {
    content: "";
    display: inline-block;
    border-bottom-width: 2px;
    border-right-width: 2px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform:  rotate(-45deg); -moz-transform:  rotate(-45deg); -o-transform:  rotate(-45deg); -ms-transform:  rotate(-45deg);transform: rotate(-45deg);
    -webkit-transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    -o-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    position: absolute;
    top: -50%;
    bottom: 50%;
    left: 0;
    right: -1.55em;
}

/* Showcase fix --------------------------------------------*/

.showcaseItemInfo {
margin-left: auto !important;
}



/* ==== ILoveBacons Crew === */
.ilbcrew { 
    display: block;
    width: 250px;
    height: 750px;
    margin-top: 1em;
    background-repeat: no-repeat;
    position: absolute;
}
.ilbcrew#left {
    background: url('img/ilbcrew_left_t.png');
    /*background: red; */
    margin-left: -260px;
}

.ilbcrew#right {
    background: url('img/ilbcrew_right_t.png');
    /*background: blue;*/
    margin-left: 1180px;
}

@media (max-width: 1680px) {
	.ilbcrew {
		display: none !important;
	}
}

/* ---CONTEST FIX--- */
.entry {
    background-color: rgba(100, 100, 100, 0.4) !important;
    border:  1px solid rgb(100, 100, 100) !important; border:  1px solid rgba(100, 100, 100, 0.8) !important; _border:  1px solid rgb(100, 100, 100) !important;
}

.entry .controls {
    background-color: rgba(100, 100, 100, 0.3) !important;

}

.entry.myEntry {
    background-color: rgba(13, 94, 145, 0.4) !important;
    border-color:  rgb(13, 94, 145) !important; border-color:  rgba(13, 94, 145, 0.8) !important; _border-color:  rgb(13, 94, 145) !important;
}

.entry.myEntry > .controls {
    background-color: rgba(13, 94, 145, 0.3) !important;
}

/* REMOVE THE FUCKING SHIT */
.nodeList .categoryStrip, #navigationContainer, .errorPanel, a.callToAction span, 
#moderatorBar, .sectionMain, .primaryContent, .secondaryContent, .memberList, #recentActivity,
.resourceList, #warnings > div[class=""], .tabs li.active a, .tabs.noLinks li.active,
.sidebar .section .primaryContent > h3:first-child, .sidebar .section .secondaryContent > h3:first-child
{
	background-image: none;
}
.errorPanel:hover, a.callToAction span:hover, .tabs li:hover a, .tabs.noLinks li:hover
{
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.3) 100%);
}

.sectionMain, .primaryContent, .secondaryContent, .memberList, #recentActivity, .resourceList, #warnings > div[class=""] {
	border: none;
}
.nodeList .node.category { border: none !important; }

/* Bacon hates colour. Always knew he was racists :P */
/*
.node.category .categoryStrip { background: rgb(13, 94, 145) !important; }
.nodeList .categoryStrip .nodeTitle a {  text-shadow: none !important;  }
.nodeIcon:after { color: rgb(13, 94, 145) !important; }
*/



.WidgetFramework_WidgetRenderer_Threads .discussionList {
width: auto !important;}

.WidgetFramework_WidgetRenderer_Threads .listBlock.posterAvatar {
display: none !important;}

.WidgetFramework_WidgetRenderer_Threads .discussionList {

 background-color: rgb(32, 32, 32);
padding-left: 0px  !important; 
 border: 0px solid rgb(32, 32, 32);
 
 -webkit-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset; */
    -moz-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset;
    -khtml-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset;
 -webkit-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 0px rgb(26, 26, 26) inset; box-shadow: 0 0 0 0px rgb(26, 26, 26) inset; */
 position: relative; */
}
    


/* --HIDDING THE MESSAGE COUNTER FOR FRONT PAGE-- */
.node.category_forum.level_2.node_173.beforeLast.odd .nodeStats.pairsInline{
    display: none !imporant;
    visibility: hidden !important;
}


}

.st_giphy_power {
	padding-left:25px;
	background:url(styles/default/Silvertails/Giphy/PoweredBy_Giphy.png) no-repeat top left;
	display: inline-block;
	height: 45px;
	width: 200px;
}

html .redactor_toolbar li a.redactor_btn_stgiphy {
	background: #000000;
        text-align: center;
        background:url(styles/default/Silvertails/Giphy/giphyicon.png) no-repeat top left;
        -webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

html .redactor_toolbar li a.redactor_btn_stgiphy:hover {
        text-align: center;
        background:url(styles/default/Silvertails/Giphy/giphyicon.png) no-repeat top left !important;
        -webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
        text-decoration: underline;
}

.giphyresult {
 overflow: scroll; 
 height: 150px; 
 width:90%; 
 text-align: center;
 display: inline-block;
}
.loadlesslink {
 float: left;
}
.loadmorelink {
 float: right;
}
.giphyresulttable {
 margin: 0 auto;
 border: 0px; 
 width: 100%;
 height: 250px; 
 text-align: center; 
 background: transparent;
 cell-padding: 10px;
}
.giphytd {
 background: transparent;
}

/* Box Beneath */
.redactor_giphy
{
    min-height: 0;
    padding: 5px;
    display: inline-block;
    border-top: 1px solid blue;
    width: 100%;
    border-top: 1px solid rgb(26, 26, 26);

}
.giphyContainer
{
    display: inline-block;
    margin: 2px;
    padding: 2px;
    cursor: pointer;
    line-height: 1.6;
    
}
.giphyresultundertable
{
    display: none;
    border: 0px;
    overflow: auto;
padding: 10px;
}
.giphyTitle
{
	display: table-caption;
	text-align: center;
	font-weight: bold;
	font-size: larger;
}
.giphyHeading
{
	display: table-row;
	font-weight: bold;
	text-align: left;
	background: blue;
        height: 20px;
}
.giphyRow
{
	display: table-row;
}
.giphyCell
{
	display: table-cell;
	padding-left: 5px;
	padding-right: 5px;
	white-space:nowrap;
	width: 100%;
	font-size: 14px;
        border: 1px solid rgb(26, 26, 26);
}

.giphyCell img
{ 
    padding-right: 5px;
}
.quattro_giphy {
	text-align: center;
}
.quattro_giphyresult {	
    overflow: scroll;
    height: 150px;
    width: 100%;
    text-align: center;
    display: inline-block;
}
.quattro_giphyresulttable {
    margin: 0 auto;
    border: 0px;
    width: 100%;
    height: 250px;
    text-align: center;
    background: transparent;
    display: table;
}
.quattro_giphytd {
    background: transparent;
    display: table-cell;
    margin: 0;
    width: 100%;
    text-align: center;
    padding: 5px;
}

/* CSS returned from cache. */