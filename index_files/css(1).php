@charset "UTF-8";

/* --- EWRrio_hide.css --- */

.navTab.streams a { display: none; }
.navTab.streams .tabLinks a { display: inherit; }

/* --- bb_code.css --- */

.quoteContainer.expanded iframe[data-s9e-mediaembed],
	.quoteContainer.expanded [data-s9e-mediaembed] iframe
	{
		max-height: none;
		max-width:  none;
	}/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	background-color: rgb(44, 44, 44);
margin: 1em 0;
border: 1px solid rgb(44, 44, 44);
-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); -khtml-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

}

	.bbCodeBlock .bbCodeBlock
	{
		background-color: rgb(32, 32, 32);
		border-color: rgb(32, 32, 32);
	}

		.bbCodeBlock .bbCodeBlock .bbCodeBlock
		{
			background-color: rgb(44, 44, 44);
			border-color: rgb(26, 26, 26);
		}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 11px;
font-family: 'Trebuchet MS', Helvetica, Arial, sans-serif;
color: #ffffff;
padding: 3px 8px;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
padding: 10px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 550px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	
}

.bbCodeQuote .attribution
{
	color: #ffffff;

}

	.bbCodeQuote .attribution .AttributionLink
	{
		color: #ffffff;
background: transparent none;
-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
display: inline-block;
min-width: 12px;
text-align: center;

	}
	
		.bbCodeQuote .attribution .AttributionLink:hover
		{
			position: relative;
top: -2px;

		}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-style: italic;
font-size: 9pt;
background-color: rgb(44, 44, 44);
padding: 10px;
overflow: auto;

}

	.bbCodeQuote,
	.bbCodeBlock
	{
		position: relative;
	}
	
	.bbCodeQuote:after,
	.bbCodeBlock:after,
	.bbCodeSpoilerText:after
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

		opacity: 0.5;
		
	}
	
		.OldIE .bbCodeQuote:after,
		.OldIE .bbCodeBlock:after
		{
			display: none;
		}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(13, 94, 145);
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(44, 44, 44, 0) 0%, rgb(44, 44, 44) 80%);
		background: linear-gradient(to bottom, rgba(44, 44, 44, 0) 0%, rgb(44, 44, 44) 80%);
		
		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe, .bbCodeQuote [data-s9e-mediaembed],
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}

	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}

.bbCodeSpoilerText
{
	position: relative;
}

.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(44, 44, 44);
padding: 5px;
margin-top: 5px;
margin-bottom: 5px;
border: 1px solid rgb(13, 58, 105);
-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); -khtml-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(200, 200, 200); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}

/* Advanced bbCode */
.baseHtml .advbbcodebar_encadre .adv_enc_fieldset { border-top: 1px solid #000; }

.baseHtml .advbbcodebar_article fieldset,
.baseHtml .advbbcodebar_fieldset fieldset,
.baseHtml .advbbcodebar_encadre .adv_enc_abovefieldset,
.baseHtml .advbbcodebar_encadre .adv_enc_fieldset
{
	background: transparent;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	border-color: rgb(44, 44, 44) rgb(22, 22, 22) rgb(22, 22, 22) rgb(44, 44, 44);
}

	.baseHtml .advbbcodebar_encadre_skin2 .adv_enc_fieldset,
	.baseHtml .advbbcodebar_encadre_skin2 .adv_enc_fieldset
	{
		border-color: rgb(22, 22, 22) rgb(44, 44, 44) rgb(44, 44, 44) rgb(22, 22, 22);
	}

	.baseHtml .advbbcodebar_article legend,
	.baseHtml .advbbcodebar_fieldset legend
	{
		color: #ffffff;
		background: rgb(13, 94, 145);
		border-width: 0;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		font-weight: normal;
	}

	.baseHtml div .adv_enc_fieldset,
	.baseHtml div .adv_enc_title
	{
		color: inherit;
		background: transparent none;
	}

	.baseHtml .advbbcodebar_encadre .adv_enc_abovefieldset
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	}



@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- likes_summary.css --- */

.likesSummary,
.message .likesSummary.secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	font-size: 11px;
color: rgb(112, 112, 112);
padding: 5px 5px 5px 18px;
margin-top: 10px;
overflow: hidden;
zoom: 1;


	position: relative;
	padding-left: 18px !important;
}

	.likesSummary:before
	{
		background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -155px -58px;
margin-top: -7px;
content: '';
display: block;
position: absolute;
left: 0;
top: 50%;
width: 15px;
height: 14px;

	}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
		{
			.likesSummary:before
			{
				background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
				background-size: 200px 80px;
			}
		}

	.LikeText
	{
		float: left;
		color: messageLikesSummary.color;
	}
	
	.likeInfo
	{
		float: right;
	}

/* --- message_simple.css --- */

/* inline mod stuff */

.messageSimpleList .messageSimple.InlineModChecked
{
	background-color: rgb(48, 48, 48);
border-color: rgb(48, 48, 48);

}

/* note that .messageSimple needs to be enclosed in a .messageSimpleList container */

.messageSimpleList.topBorder
{
	padding-bottom: 5px;
}

.messageSimple
{
	overflow: hidden; zoom: 1;

	padding: 0;
	padding-bottom: 10px;
	
	margin: 10px 0;
}

	#ProfilePostList > .messageSimple:first-child
	{
		margin-top: 0;
	}

	.messageSimple.primaryContent
	{
		padding: 10px;
		position: relative;
		overflow: visible;
	}
	
	.messageSimple.primaryContent:after
	{
		content: '';
		display: block;
		position: absolute;
		left: 0;
		right: 0;
		bottom: -10px;
		height: 10px;
		background: url('styles/black_responsive_blue/xenforo/layout/shadows.png') 50% -15px / 100% 30px no-repeat;
	}

.messageSimpleList.contained .messageSimple
{
	padding: 10px;
	margin: 0;
}

.messageSimple .avatar
{
	float: left;
	font-size: 0;
}

.messageSimple .messageInfo
{
	margin-left: 65px;
}

	.messageSimple .messageContent
	{
		min-height: 35px;
	}

		.messageSimple .messageContent article,
		.messageSimple .messageContent blockquote
		{
			display: inline;
		}

	.messageSimple .poster
	{
		font-weight: bold;
	}

.messageSimple .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 5px;
}

	.messageSimple .privateControls
	{
		float: left;
	}

		.messageSimple .privateControls .item
		{
			float: left;
			margin-right: 10px;
		}

	.messageSimple .publicControls
	{
		float: right;
	}

		.messageSimple .publicControls .item
		{
			float: left;
			margin-left: 10px;
		}

	.messageNotices li
	{
		font-size: 11px;
color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(13, 94, 145);
line-height: 16px;
-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 100%), -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(to right, rgba(0, 0, 0, 0.0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.0) 100%);

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}

			@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi), (min-resolution: 1.5dppx)
			{
				.messageNotices .icon
				{
					background-image: url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite-big.png');
					background-size: 200px 80px;
				}
			}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }


/* deleted / ignored message placeholder */

.messageSimpleList .messageSimple.placeholder
{
	border: none;
	margin: 10px 0;
	padding: 0;
}

.messageSimpleList .placeholder .placeholderContent
{
	overflow: hidden; zoom: 1;
	border: 1px solid rgb(32, 32, 32);
	background: rgb(32, 32, 32);
	-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
	padding: 5px;
	color: rgb(127, 127, 127);
	font-size: 11px;
}

	.messageSimpleList .placeholder a.avatar
	{
		float: left;
		margin-right: 5px;
		display: block;
	}
		
		.messageSimpleList .placeholder a.avatar img
		{
			width: 24px;
			height: 24px;
			display: block;
		}
	
	.messageSimpleList .placeholder .privateControls
	{
		margin-top: 2px;
	}
	
/* likes and comments */

.messageSimple .messageResponse
{
	margin-top: 10px;
	font-size: 11px;
	max-width: 450px;
	_width: 450px;
}

.messageSimple .comment,
.messageSimple .secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	background-color: rgb(32, 32, 32);
padding: 5px;
margin-top: 0;
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);
overflow: hidden;
zoom: 1;

}

	.messageSimple .secondaryContent.likesSummary
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		font-size: 11px;
color: rgb(112, 112, 112);
padding: 5px 5px 5px 18px;
margin-top: 10px;
overflow: hidden;
zoom: 1;

	}

	.messageSimple li:first-child[id] + .comment
	{
		margin-top: 2px;
	}
		
		.messageSimple li:first-child[class] + .comment
		{
			margin-top: 0;
		}

	.messageSimple .comment .avatar img
	{
		float: left;
		width: 32px;
		height: 32px;
	}

	.messageSimple .comment .commentInfo,
	.messageSimple .comment .elements
	{
		margin-left: 42px;
	}

		.messageSimple .comment .commentInfo .likesSummary
		{
			background: none;
			border: none;
			padding: 5px 0 0;
		}

	.messageSimple .comment .commentContent
	{
		min-height: 19px;
	}

	.messageSimple .comment.deleted .commentContent
	{
		color: rgb(153, 153, 153);
		font-size: 11px;
	}

		.messageSimple .commentContent article,
		.messageSimple .commentContent blockquote
		{
			display: inline;
		}
		
	.messageSimple .comment .commentControls
	{
		margin-top: 5px;
	}
	
		.messageSimple .comment .commentControls .item
		{
			margin-left: 10px;
		}
			

.messageSimple .comment textarea
{
	display: block;
	width: 100%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	*width: 96%;
	max-height: 100px;
	resize: vertical;
}

.messageSimple .comment .submit
{
	margin-top: 5px;
	text-align: right;
}


@media (max-width:480px)
{
	.Responsive .messageSimple > .avatar img
	{
		width: 32px;
		height: 32px;
	}

	.Responsive .messageSimple .messageInfo
	{
		margin-left: 46px;
	}
}


/* --- moderator_bar.css --- */

#moderatorBar
{
	background-color: rgb(32, 32, 32);
	border-bottom: 1px solid rgb(32, 32, 32);	
	-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
	font-size: 11px;
	background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
}

	#moderatorBar.alert
	{
		background-color: rgb(13, 94, 145);
		border-bottom-color: rgb(13, 94, 145);
		-webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2) inset;
	}

/*#moderatorBar
{
	-webkit-box-shadow: 0 0 5px rgb(104, 104, 104); -moz-box-shadow: 0 0 5px rgb(104, 104, 104); -khtml-box-shadow: 0 0 5px rgb(104, 104, 104); box-shadow: 0 0 5px rgb(104, 104, 104);
	width: 100%;
	position: fixed;
	top: 0px;
	z-index: 100;
}

body
{
	padding-top: 25px;
}*/

/* clearfix */ #moderatorBar { zoom: 1; } #moderatorBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#moderatorBar .pageContent
{
	padding: 2px 0;
	overflow: auto;
}

#moderatorBar a
{
	display: inline-block;
	padding: 2px 10px;
}

#moderatorBar a,
#moderatorBar .itemCount
{
	color: rgb(173, 173, 173);
}

	#moderatorBar.alert a,
	#moderatorBar.alert .itemCount
	{
		color: #ffffff;
	}

	#moderatorBar a:hover
	{
		text-decoration: none;
		background: #3f3f3f;
		color: #ffffff;
		background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
	}

		#moderatorBar.alert a:hover
		{
			background-color: #ffffff;
			color: rgb(11, 79, 121);
		}
	
	#moderatorBar a:focus
	{
		outline-style: none;
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#moderatorBar .itemLabel,
#moderatorBar .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#moderatorBar .itemCount
{	
	background: #3f3f3f;
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	text-shadow: none;
}

	#moderatorBar.alert .itemCount
	{
		background-color: rgb(13, 58, 105);
	}

	#moderatorBar a:hover .itemCount
	{
		background: rgb(104, 104, 104);
	}

		#moderatorBar.alert a:hover .itemCount
		{
			background-color: rgb(13, 94, 145);
		}

	#moderatorBar .itemCount.alert
	{
		background: rgb(13, 94, 145);
		color: #ffffff;
	}

		#moderatorBar.alert .itemCount.alert
		{
			background: rgb(13, 58, 105);
		}

		#moderatorBar a:hover .itemCount.alert
		{
			background: rgb(13, 94, 145);
			color: #ffffff;
		}
	
#moderatorBar .adminLink
{
	float: right;
}

#moderatorBar .permissionTest,
#moderatorBar .permissionTest:hover
{
	background: #fff;
	font-weight: bold;
}

	#moderatorBar .permissionTest .itemLabel
	{
		color: rgb(104, 104, 104);
	}

	#moderatorBar.alert .permissionTest .itemLabel,
	#moderatorBar .permissionTest:hover .itemLabel
	{
		color: rgb(13, 94, 145);
	}


/* --- nat_public_css.css --- */

.natMenuLevel0
{
	padding-left: 0px;
}

.natMenuLevel1
{
	padding-left: 10px;
}

.natMenuLevel2
{
	padding-left: 20px;
}

.natMenuLevel3
{
	padding-left: 30px;
}

.natMenuLevel4
{
	padding-left: 40px;
}

.natMenuLevel5
{
	padding-left: 50px;
}

.natMenuLevel6
{
	padding-left: 60px;
}

.natMenuLevel7
{
	padding-left: 70px;
}

.natMenuLevel8
{
	padding-left: 80px;
}

.natMenuLevel9
{
	padding-left: 90px;
}

.natMenuLevel10
{
	padding-left: 100px;
}



/* STYLING TO MAKE COLUMN MENUS WORK */
div.natJSMenuColumns
{
	
	background-color: ;
}

/* STYLING TO MAKE COLUMN MENUS WORK */
div.natJSMenuColumns ul
{
	float: left;
	border-bottom: 0px;
	background-color: rgb(32, 32, 32) !important;
	max-height: none !important;
}







/* --- nflj_showcase_font_awesome_rating.css --- */

.rating.RatingWidget dt + dd
{
	white-space: nowrap;
}

.ratings
{
	font-family: FontAwesome;
	font-weight: normal;
	font-style: normal;
}

.rating .star
{
	display: inline-block;
	overflow: hidden;
	white-space: nowrap;
	vertical-align: text-bottom;
	font-size: 1.42em;
	line-height: 1;

	width: 17px;
}

.rating button.star
{
	border: none;
	outline: none;
	padding: 0;
	
	background: none!important;
	width: 17px!important;
	height: 17px!important;

	font-family: inherit;
}

.rating.CustomRatingField button.star,
.rateBlock .rating.RatingWidget button.star
{
	width: 19px!important;
}


/* default (used for custom field stars) */
.rating .star:before
{
	content: "\f006";
	padding-right: 1px;
	color: rgb(112, 112, 112);
}

.rating button.star
{
	cursor: pointer;
}

.rating .star.Full:before
{
	content: "\f005";
	color: #baad1e;
}

.rating .star.Half:before,
.rating .star.Full.Half:before
{
	content: "\f123";
	color: #baad1e;
}

.rating .RatingValue
{
	display: none;
}


/* showcase Author Rating specific ... */
.scAuthorRating .rating .star:before,
.scAuthorRating.rating .star:before
{
	content: "\f006";
	padding-right: 1px;
	color: rgb(112, 112, 112);
}

.scAuthorRating .rating .star.Full:before,
.scAuthorRating.rating .star.Full:before
{
	content: "\f005";
	color: rgb(104, 104, 104);
}

.scAuthorRating .rating .star.Half:before,
.scAuthorRating .rating .star.Full.Half:before,
.scAuthorRating.rating .star.Half:before,
.scAuthorRating.rating .star.Full.Half:before
{
	content: "\f123";
	color: rgb(104, 104, 104);
}


/* showcase User Rating specific ... */
.scUserRating .rating .star:before,
.scUserRating.rating .star:before
{
	content: "\f006";
	padding-right: 1px;
	color: #505050;
}

.scUserRating .rating .star.Full:before,
.scUserRating.rating .star.Full:before
{
	content: "\f005";
	color: #baad1e;
}

.scUserRating .rating .star.Half:before,
.scUserRating .rating .star.Full.Half:before,
.scUserRating.rating .star.Half:before,
.scUserRating.rating .star.Full.Half:before
{
	content: "\f123";
	color: #baad1e;
}

/* --- nflj_showcase_item.css --- */

.nflj_showcase_item .itemAlerts,
.nflj_showcase_item_field .itemAlerts,
.nflj_showcase_reviews .itemAlerts 
{
	background-color: rgb(32, 32, 32);
border: 1px solid rgb(44, 44, 44);
border-right-color: rgb(22, 22, 22);
border-bottom-color: rgb(22, 22, 22);

	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
}
	
	.nflj_showcase_item .itemAlerts dt, 
	.nflj_showcase_item_field .itemAlerts dt,
	.nflj_showcase_reviews .itemAlerts dt	
	{
		color: rgb(130, 130, 130);
		display: inline;
	}
	
	.nflj_showcase_item .itemAlerts dd, 
	.nflj_showcase_item_field .itemAlerts dd,
	.nflj_showcase_reviews .itemAlerts dd 	
	{
		color: rgb(95, 95, 95);
		font-weight: bold;
		display: inline;
	}
	
		.nflj_showcase_item .itemAlerts .icon,
		.nflj_showcase_item_field .itemAlerts .icon,
		.nflj_showcase_reviews .itemAlerts .icon 
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			position: relative;
			vertical-align: bottom;
			color: rgb(112, 112, 112);
		}
		
			.nflj_showcase_item .itemAlerts .icon:after,
			.nflj_showcase_item_field .itemAlerts .icon:after,
			.nflj_showcase_reviews .itemAlerts .icon:after
			{
				 content: '\f013';
				 font-family: 'FontAwesome';
				 font-size: 16px;
				 font-weight: normal;
				 display: inline-block;
				 position: absolute;
				 top: 0;
				 left: 0;
				 right: 0;
				 text-align: center;
				 line-height: 16px;
				 pointer-events: none;
			}

			.nflj_showcase_item .itemAlerts .deletedAlert .icon:after,
			.nflj_showcase_item_field .itemAlerts .deletedAlert .icon:after,
			.nflj_showcase_reviews .itemAlerts .deletedAlert .icon:after
			{ content: '\f05e'; color: rgb(203, 46, 46); }

			.nflj_showcase_item .itemAlerts .moderatedAlert .icon:after,
			.nflj_showcase_item_field .itemAlerts .moderatedAlert .icon:after,
			.nflj_showcase_reviews .itemAlerts .moderatedAlert .icon:after
			{ content: '\f132'; color: rgb(203, 46, 46); }

			.nflj_showcase_item .itemAlerts .draftAlert .icon:after,
			.nflj_showcase_item_field .itemAlerts .draftAlert .icon:after,
			.nflj_showcase_reviews .itemAlerts .draftAlert .icon:after
			{ content: '\f06a'; color: rgb(13, 58, 105); }
	
.nflj_showcase_item .itemAlerts + * > .messageList,
.nflj_showcase_item_field .itemAlerts + * > .messageList,
.nflj_showcase_reviews .itemAlerts + * > .messageList 
{
	border-top: none;
}

.nflj_showcase_item .draft, 
.nflj_showcase_item_field .draft
{
	color: rgb(203, 46, 46);
}

.scAlerts
{
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
}

	.scAlerts .icon
	{
		float: right;
		width: 16px;
		height: 16px;
		margin-left: 5px;
		position: relative;
		vertical-align: bottom;
		color: rgb(13, 94, 145);
	}
		
		.scAlerts .icon:after
		{
			content: '\f013';
			font-family: 'FontAwesome';
			font-size: 16px;
			display: inline-block;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			text-align: center;
			line-height: 16px;
			pointer-events: none;
		}
		
			.scAlerts .deletedAlert .icon:after { content: '\f00d'; }
			.scAlerts .moderatedAlert .icon:after { content: '\f132'; }
			.scAlerts .draftAlert .icon:after { content: '\f044'; }
			.scAlerts .awaitingAlert .icon:after { content: '\f017'; }		
			.scAlerts .lockedAlert .icon:after { content: '\f023'; }	

.showcaseItem 
{
	padding-top: 0px;
	padding-bottom: 15px;
	clear: both;
}

	.showcaseItem .showcaseItemInfo
	{
		overflow: hidden; zoom: 1;
		margin-bottom: 5px;
		margin-left: 0;
	}

		.showcaseItem .showcaseItemInfo .avatar
		{
			float: left;
			margin-right: 10px;
		}

		.showcaseItem .showcaseItemInfo h1
		{
			font-size: 18pt;
overflow: hidden;
zoom: 1;
text-shadow: 0 0 0 transparent, 1px 1px 2px rgba(0, 0, 0, 0.5);

		}

		.showcaseItem .showcaseItemInfo .byLine
		{
			padding: 5px 0px;
		}
	
		.showcaseItem .showcaseItemInfo .customShowcaseFields
		{
		}

			.showcaseItem .showcaseItemInfo .customShowcaseFields.header
			{
			}

			.showcaseItem .showcaseItemInfo .customShowcaseFields dl
			{
				overflow: hidden;
				margin: 4px 0;
			}
	
			.showcaseItem .showcaseItemInfo .customShowcaseFields dt
			{
				width: 190px;
				float: left;
				color: rgb(112, 112, 112);
			}
		
			.showcaseItem .showcaseItemInfo .customShowcaseFields dd
			{
				margin-left: 200px;
			}
		
			.showcaseItem .showcaseItemInfo .customShowcaseFields .plainList
			{
				margin-left: 0;
				list-style-type: none;
			}
		
			.showcaseItem .showcaseItemInfo .customShowcaseFields .plainList > li
			{
				list-style: none;
			}

	.showcaseItem .customShowcaseFields
	{
	}
	
		.showcaseItem .customShowcaseFields.tab1,
		.showcaseItem .customShowcaseFields.tab2,
		.showcaseItem .customShowcaseFields.tab3,
		.showcaseItem .customShowcaseFields.tab4,
		.showcaseItem .customShowcaseFields.tab5
		{
			margin-bottom: 10px;
		}
		
		.showcaseItem .customShowcaseFields.belowInfo
		{
			margin-top: 10px;
		}

		.showcaseItem .customShowcaseFields dl
		{
			overflow: hidden;
			margin: 4px 0;
		}
	
		.showcaseItem .customShowcaseFields dt
		{
			width: 190px;
			float: left;
			color: rgb(112, 112, 112);
		}
		
		.showcaseItem .customShowcaseFields dd
		{
			margin-left: 200px;
		}
		
		.showcaseItem .customShowcaseFields .plainList
		{
			margin-left: 0;
			list-style-type: none;
		}
		
		.showcaseItem .customShowcaseFields .plainList > li
		{
			list-style: none;
		}

.showcaseItemAvatar 
{
	float: left;
	width: 60px
}

.showcaseItemMarkFeatured 
{
	float: right;
	font-size: 11px;	
}

.showcaseItemInfo 
{
	padding: 0;
	margin-left: 65px;
	border-bottom: 1px none black;
}

	.showcaseItemContent 
	{
		min-height: 25px;
	}

		.showcaseItemTitle 
		{
			font-size: 18pt;
			font-weight: normal;
		}
		
			.showcaseItemTitle .prefix 
			{
			    font-size: 80%;
			    line-height: normal;
			    margin: 0;
			}		
		
		.showcaseItemCategory {}

		.showcaseItemDescription 
		{
			color: rgb(112, 112, 112);
		}

	.showcaseItemRate 
	{
		float: right;
		margin-left: 2px;
		width: 175px;
		background: rgb(32, 32, 32);
		padding: 1px;
		font-size: 11px;
		padding: 3px 10px;
		margin: 2px 10px 4px 10px;
		border: 1px solid rgb(32, 32, 32);
		-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
		top: 0;
		right: 0;
		line-height: 14px;
		white-space: nowrap;
		word-wrap: normal;
		overflow: hidden;
	}

	.showcaseItemTabs 
	{
		position: relative;
		font-size: 12px;
	}

	.showcaseItemTabs .pageNavLinkGroup
	{
		margin: 0px;
	}

	.showcaseTabs
	{
		padding-left: 10px;	
	}
	
	.showcaseItemTabs .watchLink
	{
		position: absolute;
		right: 10px;
		top: 2px;
		font-size: 11px;
	}	
	
	.tabPairs 
	{
		/*margin-bottom: 1em;*/
	}

	.tabInfo, .tabPairs 
	{
		max-width: 500px;
	}

	.tabInfo dl, .tabPairs dl 
	{
		margin-bottom: 5px;
	}

	.tabInfo dt, .tabPairs dt 
	{
		width: 30%;
	}

	.tabInfo dd, .tabPairs dd 
	{
		width: 68%;
	}	
	
	#showcasetabcontainer .primaryContent 
	{
		border-bottom: none;
	}

	#showcasetabcontainer .primaryContent:first-child 
	{
		/*padding-bottom: 0;*/
	}	
	
	.showcaseItemMeta 
	{
		font-size: 11px;
		padding: 15px 5px 5px;
		margin: -5px;
		overflow: hidden;
	}
	
		.showcaseItemLink a 
		{
			color: rgb(80, 80, 80);
		}
	
		.showcaseItemTime,
		.showcaseItemTime a 
		{
			color: rgb(112, 112, 112);
		}
		
		.showcaseControlLinks 
		{
			margin-left: 10px;
		}
		
	.showcaseItemPrivateControls 
	{
		float: left;
	}
	
	.showcaseItemPublicControls 
	{
		text-align: right;
	}
	
.showcaseItem .rateBlock,
.showcaseReviews .rateBlock
{
	background-color: rgb(32, 32, 32);
padding: 9px;
margin-bottom: 10px;
border: 1px solid rgb(32, 32, 32);
-webkit-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -moz-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; -khtml-box-shadow: 0 0 0 1px rgb(26, 26, 26) inset; box-shadow: 0 0 0 1px rgb(26, 26, 26) inset;
position: relative;

	margin: 10px auto;
	padding: 5px;
	text-align: center;
	overflow: hidden; zoom: 1;
}

	.showcaseItem .rateBlock:after,
	.showcaseReviews .rateBlock:after
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

	.showcaseItem .rateBlock .rating,
	.showcaseReviews .rateBlock .rating
	{
		display: inline-block;
		text-align: left;
		width: 100px;
	}

	.showcaseItem .rateBlock .Hint,	
	.showcaseReviews .rateBlock .Hint
	{
		display: inline-block;
		width: 0;
		white-space: nowrap;
		word-wrap: normal;
	}

.showcaseItem .mapLocation 
{
	width: 65%;
	display: inline-block;
	vertical-align: top;
}
	
.showcaseItem .mapContainer 
{
	width: 100%;
	padding-top: 15px;
}	

.showcaseComments 
{
}

.commentSimple 
{
	overflow: hidden; zoom: 1;
	padding: 0;
	padding-bottom: 10px;
	margin: 10px 0;
}

	.commentSimple .avatar 	
	{
		float: left;
	}

	.commentSimple .commentInfo 	
	{
		margin-left: 65px;
	}


		
.showcaseComments .submitUnit 
{
    line-height: 31px;
    margin-top: 5px;
    position: relative;
    text-align: right;
    z-index: 1;	
	
}

.showcaseCommentList 
{
}

.showcaseCommentList.findNew 
{
	border-top: 0;
}

.showcaseComment .commentDeletedNotice
{
	margin: 5px 0;
	color: rgb(13, 94, 145);
	font-size: 11px;
}

.showcaseComment.itemCommentDeleted .messageInfo .viewDeletedMessage
{
	display: none
}

.showcaseComment .messageContent .bbCodeBlock.bbCodeQuote blockquote 
{
	display: block
}

.showcaseComment .messageInfo .title 
{
    font-size: 11pt;
    font-weight: bold;
    margin-bottom: 5px;
}

.showcaseComment.messageSimple .messageContentFindNew
{
	min-height: 0;
}

.showcaseComment.messageSimple:last-child
{
	margin-bottom: 0;
}

.LikeLink 
{
	margin-left: 10px;
}

.showcaseItem .likesSummary
{
	margin-top: 10px;
	font-size: 11px;
color: rgb(112, 112, 112);
padding: 5px 5px 5px 18px;
margin-top: 10px;
overflow: hidden;
zoom: 1;

}

	.showcaseItem .likesSummary:before
	{
		background: transparent url('styles/black_responsive_blue/xenforo/xenforo-ui-sprite.png') no-repeat -155px -58px;
margin-top: -7px;
content: '';
display: block;
position: absolute;
left: 0;
top: 50%;
width: 15px;
height: 14px;

	}

.sidebar .showcaseActions, 
.sidebar .showcaseControls 
{
    line-height: 1.5;
    margin-top: 1em;
}

.sidebar .featuredNotice
{
	font-size: 11px;
	padding: 1px 3px;
	color: #ffffff;
	background-color: rgb(13, 94, 145);
	border: 1px solid rgb(13, 94, 145);
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	display: block;
	float: right;
}

.sidebar .callToAction
{
	display: block;
	text-align: center;
	height: auto;
	line-height: normal;
	margin: 15px 0;
}

	.sidebar .callToAction span
	{
		font-size: 12pt;
		padding: 3px 0;
	}

	.sidebar small.minorText
	{
		display: block;
		font-size: 11px;
		font-weight: normal;
	}
	
.sidebar .rating .Hint 
{
    display: block;
}

.showcaseListSidebar .avatarList li
{
	margin: 5px 0;
	overflow: hidden;
	zoom: 1;
}

	.showcaseListSidebar .avatarList .avatar
	{
		margin-right: 5px;
		float: left;
		width: 32px;
		height: 32px;
		width: auto;
		height: auto;
	}

	.showcaseListSidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}

	.showcaseListSidebar .avatarList .title
	{
		font-size: 11px;
		margin-top: 2px;
		display: block;
	}
	
	.showcaseListSidebar .avatarList .username
	{
		font-size: 11px;
		margin-top: 2px;
		display: inline;
	}	

	.showcaseListSidebar .avatarList .extraData,
	.showcaseListSidebar .avatarList .extraData a
	{
		color: rgb(112, 112, 112);
	}
	
.scSidebarCoverImage .avatar {
    display: none;
}

.scSidebarCoverImageContainer
{
	margin: 0;
	position: relative;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}

.scSidebarCoverImageContainer .Filename
{
	display: block;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	margin-bottom: 5px;
}

.scSidebarCoverImageContainer .scCoverImageThumb
{
	width: 100%;
	vertical-align: middle;
	-webkit-border-radius: 3px 3px 0 0; -moz-border-radius: 3px 3px 0 0; -khtml-border-radius: 3px 3px 0 0; border-radius: 3px 3px 0 0;
}

.scCoverImageThumbContainer
{
	overflow: hidden;
	position: relative;
	width: 100%;
}


	

/*legecy CSS */
.scCoverImageContainer {} 

	.scCoverImageContainer .scCoverImageItem 
	{
		float:left; 
		text-align:center;
		padding: 5px;	
	}

	.scCoverImageContainer .scCoverImageItem img
	{
		height:70px; 
		width:100px	
	}

.scItemFilesSidebarContainer .attachment
{
	width: 100%;
}
	
/* for use in the item edit to make required fields stand out more */
.nflj_showcase_item_edit .ctrlUnit > dt dfn,
.nflj_showcase_item_create .ctrlUnit > dt dfn
{
	color: red;
	font-weight: bold;
	font-size: 12px;
}	
	
.nflj_showcase_item_create .xenForm,
.nflj_showcase_item_edit .xenForm
{
    max-width: 1500px;
}


@media (max-width:1200px)
{
	.showcaseItemTabs .watchLink
	{
		position: static;
		float: right;
		margin-bottom: 3px;
	}
}

@media (max-width:480px)
{
	.Responsive .showcaseItem .rateBlock .Hint,
	.Responsive .showcaseReviews .rateBlock .Hint
	{
		display: none;
	}
	
	.Responsive .showcaseItem .customShowcaseFields dt
	{
		width: auto;
		float: none;
	}
	
	.Responsive .showcaseItem .customShowcaseFields dd
	{
		margin-left: 0;
	}
	
	.Responsive .commentSimple .avatar 	
	{
		display: none;
	}

	.Responsive .commentSimple .commentInfo 	
	{
		margin-left: 0;
	}
}


/* --- nflj_showcase_item_image_gallery.css --- */

.es-carousel-wrapper
{
	padding:10px 27px;
	position:relative;
	margin-bottom:20px;
}

.es-carousel
{
	overflow:hidden;
}

	.es-carousel ul
	{
		display:none;
	}
	
		.es-carousel ul li
		{
			height:100%;
			float:left;
			display:block;
		}
		
			.es-carousel ul li a
			{
				display:block;
				border-style:solid;
				border-color: rgb(142, 142, 142);
				opacity:0.8;
				-webkit-touch-callout:none;
				/* option */
				-webkit-transition: all 0.2s ease-in-out;
				-moz-transition: all 0.2s ease-in-out;
				-o-transition: all 0.2s ease-in-out;
				-ms-transition: all 0.2s ease-in-out;
				transition: all 0.2s ease-in-out;
			}

			.es-carousel ul li.selected a
			{
				border-color: rgb(13, 94, 145);
				opacity:1.0;
			}
			
				.es-carousel ul li a img
				{
					display:block;
					border:none;
					max-height:100%;
					max-width:100%;
				}
				
.es-nav span
{
	position:absolute;
	top:50%;
	left:8px;
	width:14px;
	height:26px;
	margin-top:-13px;
	text-indent:-9000px;
	cursor:pointer;
	opacity:0.8;
}

	.es-nav span.es-nav-next
	{
		right:8px;
		left:auto;
	}

	.es-nav span:hover
	{
		opacity:1.0;
	}

	.es-nav span:after
	{
		content: '\f053';
		font-family: FontAwesome;
		font-size: 14px;
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		height: 26px;
		text-align: center;
		line-height: 26px;
		text-indent: 0;
		color: rgb(104, 104, 104);
		color: #ffffff;
	}
 
		.es-nav span:hover:after
		{
			color: rgb(13, 94, 145);
			color: rgb(13, 94, 145);
		}
 
		.es-nav span.es-nav-next:after
		{
			content: '\f054';
		}

/* ---------------------------------------------------------------- */

.rg-image-wrapper
{
	position:relative;
	padding:20px 30px;
	background: rgb(32, 32, 32);
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
	min-height:20px;
}

.rg-image
{
	position:relative;
	text-align:center;
	line-height:0px;
}

	.rg-image img
	{
		max-height:100%;
		max-width:100%;
	}

.rg-image-nav a
{
	position:absolute;
	top:0px;
	left:0px;
	background: rgb(32, 32, 32);
	width:28px;
	height:100%;
	text-indent:-9000px;
	cursor:pointer;
	opacity:0.3;
	outline:none;
	-moz-border-radius: 10px 0px 0px 10px;
	-webkit-border-radius: 10px 0px 0px 10px;
	-webkit-border-radius: 10px 0px 0px 10px; -moz-border-radius: 10px 0px 0px 10px; -khtml-border-radius: 10px 0px 0px 10px; border-radius: 10px 0px 0px 10px;
}

	.rg-image-nav a.rg-image-nav-next
	{
		right:0px;
		left:auto;
		-moz-border-radius: 0px 10px 10px 0px;
		-webkit-border-radius: 0px 10px 10px 0px;
		-webkit-border-radius: 0px 10px 10px 0px; -moz-border-radius: 0px 10px 10px 0px; -khtml-border-radius: 0px 10px 10px 0px; border-radius: 0px 10px 10px 0px;
	}

	.rg-image-nav a:hover
	{
		opacity:0.8;
	}

	.rg-image-nav a:after
	{
		content: '\f053';
		font-family: FontAwesome;
		font-size: 22px;
		position: absolute;
		left: 0;
		right: 0;
		top: 50%;
		margin-top: -11px;
		height: 22px;
		text-align: center;
		line-height: 22px;
		text-indent: 0;
	}
 
		.rg-image-nav a.rg-image-nav-next:after
		{
			content: '\f054';
		}
 
.rg-caption 
{
	text-align:center;
	margin-top:15px;
	position:relative;
}

	.rg-caption p
	{
		font-size:11px;
		letter-spacing:2px;
		font-family: 'Trebuchet MS', 'Myriad Pro', Arial, sans-serif;
		line-height:16px;
		padding:0 15px;
		text-transform:uppercase;
	}

.rg-view
{
	height:30px;
}

	.rg-view a
	{
		display:block;
		float:right;
		width:16px;
		height:16px;
		margin-right:3px;
		opacity:0.8;
		position: relative;
	}

		.rg-view a.rg-view-selected
		{
			display: none;
		}
 
		.rg-view a:hover
		{
			opacity:1.0;
		}
 
		.rg-view a:after
		{
			content: '\f150';
			font-family: FontAwesome;
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			height: 16px;
			text-align: center;
			line-height: 16px;
			font-size: 14px;
		}
 
			.rg-view a.rg-view-full:after
			{
				content: '\f151';
			}

.rg-loading
{
	position:absolute;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	
	background: rgb(32, 32, 32) url("styles/black_responsive_blue/xenforo/widgets/ajaxload.info_000000_facebook.gif") no-repeat 50% 50%;
	
	z-index:100;
	opacity:0.7;
}


/* --- nflj_showcase_reviewfields.css --- */

.rating input[type=radio]
{
	display:none
}

/* for use in the item edit to make required fields stand out more */
.nflj_showcase_review_edit .ctrlUnit > dt dfn,
.nflj_showcase_item_review .ctrlUnit > dt dfn
{
	color: red;
	font-weight: bold;
	font-size: 10px;
}

/* --- nflj_showcase_reviews.css --- */

.showcaseItem.reviews
{
	padding-bottom: 0px;
}

.showcaseReviewList
{
	margin: 0px;
}

.isFindNew .showcaseReviewMessage .itemTitleFindNew 
{
	font-size: 11pt;
	font-weight: bold;
	margin-bottom: 5px;
}

.showcaseReviewMessage .reviewRating 
{
	float: right;
}

.showcaseReviewMessage .reviewTitle 
{
	font-size: 16px;
	font-weight: bold;
	margin-bottom: 15px;
	padding: 0;
}

.isFindNew .showcaseReviewMessage .reviewTitleFindNew 
{
	font-style: italic;
	margin-bottom: 10px;
}

.showcaseReviewMessage .summaryMessage 
{
	margin-bottom: 10px;
	padding: 0;
}

.isFindNew .showcaseReviewMessage .summaryMessage 
{
	margin-bottom: 0;
	padding: 0;
}

.isFindNew.showcaseReview.messageSimple:last-child
{
	margin-bottom: 0;
}

.showcaseReviewMessage .prosMessage 
{
	margin: 10px 0 20px;
	max-width: 400px;
}

	.showcaseReviewMessage .prosMessage .prosHeading 	
	{
		margin: .5em;
		font-weight: bold;
	}
	
	.showcaseReviewMessage .prosMessage .pros 
	{
		margin: .5em 1em;
		display: block;
		line-height: 1.5;
	}
	
.showcaseReviewMessage .consMessage 
{
	margin: 10px 0 20px;
	max-width: 400px;	
}

	.showcaseReviewMessage .consMessage .consHeading 
	{
		margin: .5em;
		font-weight: bold;
	}
	
	.showcaseReviewMessage .consMessage .cons 
	{
		margin: .5em 1em;
		display: block;
		line-height: 1.5;
	}

.showcaseReviewMessage .prosMessage,
.showcaseReviewMessage .consMessage
{
	background-color: rgba(64, 64, 64, .2);
	border: 1px solid rgb(26, 26, 26);
	border-color: rgb(22, 22, 22) rgb(44, 44, 44) rgb(44, 44, 44) rgb(22, 22, 22);
}

.showcaseReview .reviewDeletedNotice
{
	margin: 5px 0;
	color: rgb(13, 94, 145);
	font-size: 11px;
}

.showcaseReview .reviewViewFullNotice
{
	margin: 5px 0;
	color: rgb(13, 94, 145);
	font-size: 11px;
}

.showcaseReview.itemReviewDeleted .showcaseReviewInfo .viewDeletedMessage,
.showcaseReview.itemReviewDeleted .showcaseReviewMessage .viewDeletedMessage,
.showcaseReview.hideReviewContent .showcaseReviewInfo .viewDeletedMessage,
.showcaseReview.hideReviewContent .showcaseReviewMessage .viewDeletedMessage
{
	display: none
}

.showcaseReview .customReviewFields
{
}

	.showcaseReview .customReviewFields.top
	{
		border-bottom: 0px solid rgb(32, 32, 32);
		margin-bottom: 10px;
	}
	
	.showcaseReview .customReviewFields.middle
	{
		border-top: 0px solid rgb(32, 32, 32);
		margin-top: 10px;
		border-bottom: 0px solid rgb(32, 32, 32);
		margin-bottom: 10px;
	}

	.showcaseReview .customReviewFields.bottom
	{
		border-top: 0px solid rgb(32, 32, 32);
		margin-top: 10px;
	}

	.showcaseReview .customReviewFields.self_place
	{
	}

	.showcaseReview .customReviewFields dl
	{
		overflow: hidden;
		margin: 8px 0;
	}

	.showcaseReview .customReviewFields dt
	{
		width: 190px;
		float: left;
		color: rgb(112, 112, 112);
	}
	
	.showcaseReview .customReviewFields dd
	{
		margin-left: 200px;
	}
	
	.showcaseReview .customReviewFields .plainList
	{
		margin-left: 0;
		list-style-type: none;
	}
	
	.showcaseReview .customReviewFields .plainList > li
	{
		list-style: none;
	}

.showcaseReview .likesSummary
{
	font-size: 11px;
color: rgb(112, 112, 112);
padding: 5px 5px 5px 18px;
margin-top: 10px;
overflow: hidden;
zoom: 1;

}

.showcaseReview .messageResponse
{
	max-width: 100%
}
	
.showcaseReview .imageCollection
{
	margin: 10px auto;
	border: 1px solid rgb(26, 26, 26);
	border-color: rgb(44, 44, 44) rgb(22, 22, 22) rgb(22, 22, 22) rgb(44, 44, 44);
	padding: 5px;
	overflow: hidden; zoom: 1;
}
	.showcaseReview .imageCollection .textHeading
	{
		margin-top: 0;
		color: rgb(130, 130, 130);
	}

	.showcaseReview .imageCollection li
	{
		float: left;
		width: 100px;
		height: 100px;
		overflow: hidden;
		border: 1px solid rgb(26, 26, 26);
		border-color: rgb(22, 22, 22) rgb(44, 44, 44) rgb(44, 44, 44) rgb(22, 22, 22);
		text-align: center;
		line-height: 100px;
		font-size: 1px;
		margin: 3px;
		padding: 5px;
		white-space: nowrap;
	}

		.showcaseReview .imageCollection li img
		{
			vertical-align: middle;
		}
		
.scItemFilesSidebarContainer .attachment
{
	width: 100%;
}


	@media (max-width:480px)
	{
		.Responsive .showcaseReview .customReviewFields dt
		{
			width: auto;
			float: none;
		}
	
		.Responsive .showcaseReview .customReviewFields dd
		{
			margin-left: 0;
		}
	}
				

/* --- nflj_sportsbook_tab_links.css --- */

.navTabs .navTab.selected .sportsbookTabLinks .sportsbook li .Popup a:hover,
.navTabs .navTab.selected .sportsbookTabLinks .sportsbook li .Popup a:focus
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

/* --- siropu_chat.css --- */

#siropuChatBar {
	background-color: rgb(32, 32, 32);
border: 1px solid rgb(142, 142, 142);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
position: fixed;
bottom: -1px;
left: 15px;
right: 15px;
z-index: 99;

}
#siropuChatBar a.username:hover {
	text-decoration: none;
}
#siropuChatLastMessage {
	color: rgb(200, 200, 200);
background: rgb(32, 32, 32) url('styles/Siropu/Chat/icons/chat.png') no-repeat 10px 5px;
padding: 6px 0 0 35px;
float: left;

}
#siropuChatLastMessage .DateTime {
	color: rgb(112, 112, 112);

}
#siropuChatToggle {
	background-color: rgb(13, 94, 145);
padding: 5px 10px;
border-left: 1px solid rgb(142, 142, 142);
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
float: right;
display: block;

}
#siropuChatToggle:hover, #siropuChatToggle.siropuChatActiveTab {
	color: rgb(255, 255, 255);
text-decoration: none;
background-color: rgb(49, 124, 229);

}
#siropuChat {
	background-color: rgb(32, 32, 32);
border: 1px solid rgb(64, 64, 64);
position: relative;
z-index: 99;

}
#siropuChat.siropuChatForumsList, #siropuChat.siropuChatPage {
	z-index: 9;
}
#siropuChat.siropuChatAllPages {
	display: none;
position: fixed;
bottom: 30px;
right: 15px;
left: 15px;

}
.siropuChatMaximized #siropuChatContent {
	height: 400px;
}
.siropuChatAllPages.siropuChatMaximized {
	top: 15px;
}
.siropuChatAllPages.siropuChatMaximized #siropuChatContent  {
	height: 80%;
}
#siropuChatHeader {
	background: rgb(13, 94, 145) url('styles/black_responsive_blue/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 7px 10px;
border-bottom: 1px solid rgb(11, 79, 121);

}
#siropuChatHeader > h3 {
	color: #e0e0e0;
display: inline;

}
#siropuChatOptions {
	float: right;
}
#siropuChatOptions > a {
	margin-right: 5px;
}
#siropuChatNotice {
	background: #3A4145 url('styles/black_responsive_blue/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 4px;
border-bottom: 1px solid #2F4552;

}
#siropuChatNoticeText {
	display: inline-block;
}
.siropuChatAds {
	padding: 10px;
	text-align: center;
	border-top: 1px solid rgb(159, 159, 159);
	border-bottom: 1px solid rgb(159, 159, 159);
}
.siropuChatAds img {
	display: block;
	max-width: 100%;
	height: auto;
}
#siropuChatEditor .siropuChatAds {
	border: 0;
}
#siropuChatContent {
	border-top: 1px solid rgb(13, 58, 105);
height: 250px;

}
#siropuChatContent > div {
	height: 100%;
}
#siropuChatTabs {
	margin-top: 10px;
}
#siropuChatTabs a::selection {
	background: transparent;
}
#siropuChatTabs a::-moz-selection {
	background: transparent;
}
#siropuChatTabs > div {
	float: right;
}
.siropuChatMessages, #siropuChatForumActivity, #siropuChatRooms, .siropuChatPrivateMessages {
	color: rgb(200, 200, 200);
background-color: rgb(32, 32, 32);
padding: 0 10px;
overflow: auto;
/*border-right: 1px solid rgb(13, 58, 105);*/
height: 100%;

}
.siropuChatMessages > li, .siropuChatPrivateMessages > li {
	margin: 5px 0;
position: relative;
clear: both;

}
.siropuChatMessages > li:first-child, #siropuChatForumActivity > li:first-child, .siropuChatPrivateMessages > li:first-child {
	margin-top: 10px;
}
.siropuChatMessages > li:last-child, #siropuChatForumActivity > li:last-child, .siropuChatPrivateMessages > li:last-child {
	margin-bottom: 10px;
}
.siropuChatMessages > li:only-child, #siropuChatForumActivity > li:only-child  {
	margin: 10px 0;
}
.siropuChatMessages .username:hover {
	text-decoration: none;
}
#siropuChatRooms > li {
	padding: 5px 0;
border-bottom: 1px solid rgb(159, 159, 159);

}
#siropuChatRooms > li:first-child {
	margin-top: 10px;
	padding-top: 0;
}
#siropuChatRooms > li:last-child {
	border-bottom: 0;
	margin-bottom: 10px;
	padding-bottom: 0;
}
.siropuChatRoomInfo {
	float: left;
	width: 80%;
}
.siropuChatRoomInfo h4 {
	font-size: 16px;
color: rgb(200, 200, 200);

}
.siropuChatRoomInfo h4 em {
	color: rgb(112, 112, 112);

}
.siropuChatRoomInfo p {
	color: rgb(112, 112, 112);

}
.siropuChatRoomActions {
	text-align: left;
}
.siropuChatRoomActions form {
	position: relative;
}
.siropuChatRoomActions button {
	color: rgb(13, 94, 145);
background-color: rgb(49, 124, 229);
padding: 5px 10px;
border: 1px solid rgb(13, 94, 145);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
float: right;
text-align: center;
outline: 0;
cursor: pointer;

}
.siropuChatRoomActions button:hover {
	color: rgb(11, 79, 121);
background-color: rgb(25, 111, 231);

}
.siropuChatRoomActions button p {
	font-size: 10px;
}
.siropuChatRoomActions .textCtrl {
	display: none;
	margin-right: 10px;
	position: absolute;
	top: 2px;
}
.siropuChatRoomActions ul li {
	display: inline-block;
}
.siropuChatRoomNoAccess {
	opacity: 0.7;
}
.siropuChatUsers, #siropuChatPrivateUsers {
	background-color: rgb(32, 32, 32);
padding: 0 10px;
float: right;
overflow: auto;
width: 200px;
height: 100%;

}
.siropuChatUsers > li, #siropuChatPrivateUsers > li {
	position: relative;

}
.siropuChatUsers > li:first-child{
	margin-top: 5px;
}
.siropuChatUsers > li:last-child {
	margin-bottom: 5px;
}
.siropuChatUsers .Popup, #siropuChatUsersWidget .Popup {
	display: inline;
}
.siropuChatAllPages .siropuChatUsers, .siropuChatPage .siropuChatUsers, .siropuChatAllPages #siropuChatPrivateUsers, .siropuChatPage #siropuChatPrivateUsers {
	width: 225px;
}
#siropuChatPrivateUsers {
	padding: 0;
}
#siropuChatPrivateUsers li {
	padding: 5px 10px 10px 10px;
	border-bottom: 1px solid rgb(159, 159, 159);
	font-weight: bold;
	color: rgb(104, 104, 104);
	cursor: pointer;
}
#siropuChatPrivateUsers li:hover, #siropuChatPrivateUsers li.active  {
	background: rgb(173, 173, 173);	
}
.siropuChatMessage {
	color: rgb(200, 200, 200);

}
.siropuChatMessage img {
	max-width: 30%;
}
.siropuChatMessage > ul {
	margin-left: 25px;
}
.siropuChatMessage > ul b {
	cursor: pointer;
}
.siropuChatMeta {
	float: right;
	max-width: 115px;
}
.siropuChatMeta > *, #siropuChatOptions > *, .siropuChatMessageActions li {
	display: inline-block;
}
.siropuChatMessageActions, #siropuChatToggleUsers, #siropuChatStartPrivateConversation, #siropuChatRooms {
	display: none;
}
.siropuChatMessages > li .DateTime, #siropuChatForumActivity > li .DateTime, .siropuChatPrivateMessages > li .DateTime {
	font-size: 10px;
background-color: rgb(80, 80, 80);
padding: 2px 5px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
.siropuChatMessages > li .siropuChatMessage a {
	
}
#siropuChatEditor {
	background-color: rgb(32, 32, 32);
padding: 10px;
border-top: 1px solid rgb(142, 142, 142);
-webkit-border-bottom-right-radius: 5px; -moz-border-radius-bottomright: 5px; -khtml-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;
-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;

}
#siropuChatEditor .textCtrl {
	width: 100%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	line-height: 20px;
	margin-bottom: 5px;
}
#siropuChatEditor.siropuChatEditorTop {
	background: rgb(32, 32, 32);
	border-bottom: 1px solid rgb(142, 142, 142);
	border-top: 0;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}
#siropuChatSubmit {
	float: right;
}
#siropuChatSmilies {
	padding: 10px 0 0 0;
}
#siropuChatSmilies .tabs {
	background: transparent;
}
#siropuChatSmilies .smilieContainer {
	border: 0;
	padding: 0;
	max-height: 100px;
	overflow: auto;
}
#siropuChatSmilies .Smilie {
	display: inline-block;
	cursor: pointer;
}
#siropuChat .avatar img, #siropuChatUsersWidget .avatar img {
	width: 16px;
	height: 16px;
	position: relative;
	top: 5px;
}
#siropuChat .username {
	font-weight: bold;
}
#siropuChat .PopupControl {
	background: none;
}
.siropuChatTagged {
	background-color: rgb(13, 58, 105);
padding: 5px;
border: 1px dotted rgb(13, 94, 145);

}
.siropuChatActive {
	background: url('styles/Siropu/Chat/icons/user-active.png') right center no-repeat;
}
.siropuChatIdle {
	background: url('styles/Siropu/Chat/icons/user-idle.png') right center no-repeat;
}
.siropuChatIdle2 {
	background: url('styles/Siropu/Chat/icons/user-idle2.png') right center no-repeat;
}
.siropuChatLike span, .siropuChatUnlike span, .siropuChatEdit span, .siropuChatDelete span, .siropuChatQuote span, .siropuChatReport span, #siropuChatReports span, #siropuChatRules span, #siropuChatHelp span, #siropuChatPageLink span, #siropuChatToggleUsers span, #siropuChatToggleRooms span {
	height: 12px;
 	width: 12px;
 	display: block;
}
.siropuChatLike span {
	background: url('styles/Siropu/Chat/icons/like.png') left center no-repeat;
	background-size: 12px 12px;
}
.siropuChatUnlike span {
	background: url('styles/Siropu/Chat/icons/unlike.png') left center no-repeat;
	background-size: 12px 12px;
}
.siropuChatEdit span {
	background: url('styles/Siropu/Chat/icons/edit.png') left center no-repeat;
	background-size: 12px 12px;
}
.siropuChatDelete span {
	background: url('styles/Siropu/Chat/icons/delete.png') left center no-repeat;
	background-size: 12px 12px;
}
.siropuChatQuote span {
	background: url('styles/Siropu/Chat/icons/quote.png') left center no-repeat;
	background-size: 12px 12px;
}
.siropuChatReport span {
	background: url('styles/Siropu/Chat/icons/report.png') left center no-repeat;
	background-size: 12px 12px;
}
#siropuChatToggleUsers span {
	background: url('styles/Siropu/Chat/icons/chatters.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
#siropuChatToggleRooms span {
	display: inline-block;
	background: url('styles/Siropu/Chat/icons/rooms.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
#siropuChatToggleUsers, #siropuChatToggleRooms {
	cursor: pointer;
}
#siropuChatToggleRooms > em:hover {
	color: rgb(104, 104, 104);
}
#siropuChatRules span {
	display: inline-block;
	background: url('styles/Siropu/Chat/icons/rules.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
#siropuChatHelp span {
	display: inline-block;
	background: url('styles/Siropu/Chat/icons/help.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
#siropuChatPageLink span {
	display: inline-block;
	background: url('styles/Siropu/Chat/icons/page.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
#siropuChatReports {
	color: rgb(13, 94, 145);
}
#siropuChatReports span {
	display: inline-block;
	background: url('styles/Siropu/Chat/icons/report.png') left center no-repeat;
	background-size: 14px 14px;
	width: 14px;
	height: 14px;
	position: relative;
	top: 3px;
}
.siropuChatNoUsers .siropuChatMessages, .siropuChatNoUsers #siropuChatRooms {
	float: none;
	width: auto !important;
}
.siropuChatNoUsers .siropuChatUsers {
	display: none;
}
.siropuChatIgnored {
	opacity: 0.5;
	background: none !important;
}
.siropuChatWhisperAction, .siropuChatStartConversation {
	cursor: pointer;
}
.siropuChatWhisper .siropuChatWhisperAction {
	color: rgb(112, 112, 112);
}
.siropuChatWhisperPolice .siropuChatWhisperAction {
	color: rgb(13, 94, 145);
}
.siropuChatContentLeft {
	margin-right: 120px;
	text-align: left;
}
.siropuChatContentLeft .username.Tooltip {
	cursor: pointer;
}
#siropuChatEditNotices {
	font-size: 10px;
}
.siropuChatTagAlt.Tooltip {
	font-weight: bold;
	cursor: pointer;
}
#siropuChatNavDivider {
	border-bottom: 1px solid rgb(159, 159, 159);
	margin: 2px 0;
	height: 1px;
}
.navTab.chat.selected #siropuChatNavDivider {
	border-bottom: 0;
	border-right: 1px solid rgb(159, 159, 159);
	margin-top: 3px;
	margin-right: 2px;
	height: auto;
}
#siropuChatForumActivity, #siropuChatRooms, #siropuChatPrivateConversations {
	display: none;
	float: none;
	width: auto;
}
#siropuChatForumActivity > li {
	clear: both;
}
#siropuChatStartPrivateConversation {
	padding: 10px;
	text-align: right;
}
#siropuChatStartPrivateConversation .textCtrl {
	width: 25%;
	padding: 5px;
	margin-bottom: 10px;
}
.siropuChatNoSelection::selection {
	background: transparent;
}
.siropuChatNoSelection::-moz-selection {
	background: transparent;
}
.tabRooms {
	font-weight: bold;
}
.siropuChatRoomName {
	cursor: pointer;
}
.siropuChatRoomJoined form, .siropuChatRoomBanned form {
	opacity: 0.5;
}
.siropuChatRoomJoinedInfo, .siropuChatRoomBannedInfo {
	font-size: 12px;
	color: rgb(112, 112, 112);
}
.roomNewMessage {
	animation: blink 1s steps(5, start) infinite;
  	-webkit-animation: blink 1s steps(5, start) infinite;
}
@keyframes blink {
	to {
		visibility: hidden;
	}
}
@-webkit-keyframes blink {
	to {
		visibility: hidden;
	}
}
.siropuChatUserStatus {
	font-size: 11px;
color: rgb(112, 112, 112);
margin: 5px 0 0 10px;

}
.siropuChatHasStatus {
	background-position: 100% 5px;
}
#siropuChatNoRoomsJoined {
	padding: 10px;
}
a.siropuChatLikeCount {
	color: green;
	font-weight: bold;
	margin-left: 5px;
}

.siropuChatAboveContent {
	margin-bottom: 5px;
}
.chatBotError {
	font-style: italic;
}
#siropuChatNoConversations {
	padding: 10px;
}
.siropuChatLeaveConversation {
	float: right;
	border: 1px solid #ccc;
	-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
	padding: 1px 5px;
	color: #ccc;
	margin-top: 10px;
	font-size: 10px;
}
.siropuChatLeaveConversation:hover {
	border-color: crimson;
	background: crimson;
}
.siropuChatEdited {
	font-size: 10px;
	font-style: italic;
	color: rgb(112, 112, 112);
	cursor: help;
	float: right;
}
@media (max-width: 768px) {
	#siropuChatBar, #siropuChat.siropuChatAllPages {
		left: 10px;
		right: 10px;
	}
	#siropuChat.siropuChatAllPages {
		bottom: 35px;
	}
	#siropuChatToggle {
		float: none;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		border-left: 0;
		border-top: 1px solid rgb(142, 142, 142);
		text-align: center;
	}
	.siropuChatMessages, #siropuChatRooms {
		float: none;
		width: auto !important;
		border-right: 0;
	}
	#siropuChatLastMessage {
		float: none;
		margin-bottom: 5px;
	}
	#siropuChatToggleUsers {
		display: inline-block;
	}
	.siropuChatUsers {
		display: none;
		position: absolute;
		top: 40px;
		left: 10px;
		right: 10px;
		border: 1px solid rgb(142, 142, 142);
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		width: auto;
		height: auto;
		padding-bottom: 5px;
		z-index: 1;
	}
}
@media (max-width: 480px) {
	#siropuChat.siropuChatPage, #siropuChat.siropuChatForumsList {
		margin-bottom: 10px;
	}
	#siropuChat.siropuChatAllPages {
		top: 10px;
	}
	.siropuChatForumsList #siropuChatContent, .siropuChatPage #siropuChatContent {
		height: 250px !important;
	}
	.siropuChatMessages > li {
		margin: 0;
		padding: 5px 0;
		text-align: left;
		border-bottom: 1px solid rgb(159, 159, 159);
	}
	.siropuChatMessages > li:last-child {
		border-bottom: 0;
	}
	.siropuChatPage .siropuChatUsers {
		height: 150px;
	}
	.siropuChatAllPages #siropuChatEditor {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
	}
	.siropuChatAllPages #siropuChatEditor.siropuChatEditorTop {
		position: initial;
		margin-top: 0;
	}
	#siropuChatEditor {
		text-align: center;
	}
	#siropuChatEditor .textCtrl {
		width: 85%;
		margin-bottom: 0;
	}
	#siropuChatEditor .button {
		margin-top: 2px;
	}
	#siropuChatEditor .button .fa {
		font-size: 16px;
	}
	#siropuChatSubmit {
		font-size: inherit;
		font-weight: bold;
	}
	#siropuChatSubmit span {
		display: none;
	}
	#siropuChatSubmit:before {
		content: "+";
	}
	#siropuChatBBCode {
		display: none;
		padding-top: 5px;
	}
	.siropuChatMeta {
		display: block;
		margin: 0 0 5px 5px;
		max-width: initial;
	}
	#siropuChatRooms {
		text-align: center;
	}
	.siropuChatRoomInfo {
		float: none;
		width: auto;
	}
	.siropuChatRoomActions {
		text-align: center;
	}
	.siropuChatRoomActions button {
		float: none;
		margin-top: 10px;
	}
	.siropuChatRoomActions .textCtrl {
		position: initial;
	}
	.siropuChatRoomActions ul {
		margin-top: 5px;
	}
	#siropuChatOptions a > em {
		display: none;
	}
	#siropuChatOptions > * {
		margin: 0 0 0 5px !important;
	}
	#siropuChat .bbCodeBlock, #siropuChat .bbCodeSpoilerText {
		margin-right: 0;
	}
	.siropuChatContentLeft {
		margin-right: 0;
		text-align: left;
	}
	#siropuChat iframe {
		max-width: 90%;
		height: auto;
	}
	.siropuChatAllPages #siropuChatContent  {
		height: 80%;
	}
	#siropuChatPrivateConversations {
		position: relative;
	}
	#siropuChatPrivateUsers {
		float: none;
		width: auto !important;
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		z-index: 2;
	}
	#siropuChatStartPrivateConversation .textCtrl {
		width: 90%;
	}
	#siropuChatTabs > div {
		float: none;
		display: inherit;
		width: 100%;
	}
}
.siropuChatUnlike .fa {color: ;}
.siropuChatLike .fa {color: ;}
.siropuChatEdit .fa {color: ;}
.siropuChatDelete .fa {color: ;}
.siropuChatQuote .fa {color: ;}
.siropuChatReport .fa {color: ;}
#siropuChatToggleRooms .fa {color: ;}
#siropuChatToggleUsers .fa {color: ;}
#siropuChatLastMessage .fa {color: ;}
#siropuChatRules .fa {color: ;}
#siropuChatHelp .fa {color: ;}
#siropuChatPageLink .fa {color: ;}
.button .fa-bold {color: ;}
.button .fa-italic {color: ;}
.button .fa-underline {color: ;}
.button .fa-strikethrough {color: ;}
.button .fa-link {color: ;}
.button .fa-image {color: ;}
.button .fa-play-circle {color: ;}
.button .fa-quote-right {color: ;}
.button .fa-caret-square-o-down {color: ;}
.button .fa-code {color: ;}
.button .fa-smile-o {color: rgb(255, 222, 222);}

/* --- siropu_chat_settings.css --- */

#siropuChatSettings {
	background: rgb(32, 32, 32);
	padding: 10px;
	font-size: 12px;
}
#siropuChatSettings fieldset {
	margin-bottom: 10px;
}
#siropuChatSettings fieldset:last-child {
	margin-bottom: 0;
}
#siropuChatSettings fieldset input {
	position: relative;
    	top: 2px;
}
#siropuChatSettings legend, #siropuChatDisplayMode label, #siropuChatSelectColor label {
	font-weight: bold;
}
#siropuChatDisplayMode, #siropuChatSelectColor {
	margin: 10px 0 0 0;
}
#siropuChatDisplayMode select, #siropuChatSelectColor select {
	width: 100%;
}
#siropuChatSettings .colorPickerPlaceholder {
	width: 86%;
}

/* --- sonnb_xengallery_editor.css --- */

.redactor_btn_insertAlbum {
	background-image: url("styles/sonnb/XenGallery/editor-icons.png") !important;
	background-position: -18px 3px !important;
}

.redactor_btn_insertContent {
	background-image: url("styles/sonnb/XenGallery/editor-icons.png") !important;
	background-position: 3px 3px !important;
}

/* --- sonnb_xengallery_navbar_template.css --- */

.secondaryContent.blockLinksList.xengallery .Popup .PopupControl.PopupOpen, 
.secondaryContent.blockLinksList.xengallery .Popup.PopupContainerControl.PopupOpen {
	background: transparent;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	text-shadow: none;
}

.secondaryContent.blockLinksList.xengallery .Popup .PopupControl:hover, 
.secondaryContent.blockLinksList.xengallery .Popup.PopupContainerControl:hover {
	background-color: transparent;
}

.secondaryContent.blockLinksList.xengallery .Popup .arrowWidget {
	margin-left: 6px;
	margin-top: 0;
}
#MyGalleryMenu .menuColumns,
.galleryExplore .menuColumns,
#GalleryCategories .menuColumns {
	overflow: hidden;
	padding: 2px;
}

.galleryExplore .menuColumns,
#MyGalleryMenu .menuColumns {
	padding: 0;
}
#GalleryCategories {
	width: 240px;
}
#GalleryCategories ul {
	padding: 0;
	border-bottom: 0 none;
}
#GalleryCategories ul a {
	
}

#GalleryCategories.navPopup a:hover, 
.galleryExplore.navPopup a:hover,
#GalleryCategories.navPopup .listItemText a:hover,
.galleryExplore.navPopup .listItemText a:hover {
	text-decoration: none;
background-color: rgb(13, 94, 145);
color: #ffffff !important;

}

/* --- unread_posts_count.css --- */

.postItemCount
{
	background: rgb(95, 95, 95);
	padding: 2px 4px;

	text-align: center;

	font-weight: bold;

	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
	text-shadow: none;

	margin-left: 2px;
}

.postItemCount.alert
{
	background: rgb(203, 46, 46);
	color: white;
	-webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25); box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
}

a:hover .postItemCount
{
	color: white;
}

.Menu .blockLinksList li .postItemCount
{
	float:right;
}

/* --- wf_default.css --- */



.widget-container.sidebar.act-as-sidebar
{
	padding: 0;
margin: 0;
float: none;
font-size: inherit;
width: auto;

}

.sidebar-widget
{
	
}

.hook-widget
{
	
}

.widget-rows > div
{
	margin-top: 5px;
}

.widget-tabs
{
	
}
	.widget-tabs .tabs
	{
		white-space: nowrap;

	}

	.widget-tabs .widget-panes
	{
		
	}

.widget-columns
{
	display: table;
	table-layout: fixed;
	width: 100% !important;
}
.columns-container
{
	display: table-row;
}
.widget-column
{
	display: table-cell;
}


.widget-columns > .columns-container > .widget-column > div
{
	margin-left: 5px;
}
.widget-columns > .columns-container > .widget-column.column-1 > div
{
	margin-left: 0;
}
.widget-columns > .columns-container > .widget-column
{
	border-left: 1px solid rgb(142, 142, 142);
	margin-left: -1px !important;
}
.widget-columns > .columns-container > .widget-column.column-1
{
	border-left: 0;
	margin-left: 0 !important;
}

.widget-rows > div
{
	border-top: 1px solid rgb(142, 142, 142);
	margin-top: 5px;
	padding-top: 5px;
}
.widget-rows > div.row-1
{
	border-top: 0;
	margin-top: 0;
	padding-top: 0;
}


.hook-widget > h3
{
	color: rgb(104, 104, 104);
	font-size: 1.1em;
	font-weight: bold;
}

.widget .avatarHeap
{
	margin-right: -10px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid rgb(159, 159, 159);
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar
{
	float: left;
	font-size: 0;
}

	.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar img
	{
		width: 24px;
		height: 24px;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageInfo
{
	margin-left: 34px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent article,
.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent blockquote
{
	display: inline;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .poster
{
	font-weight: bold;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 4px;
}

.widget .statusPoster textarea {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}
.WidgetFramework_WidgetRenderer_Threads_Sidebar .unread > a
{
	font-weight: bold;
}
.WidgetFramework_WidgetRenderer_Threads_Sidebar.avatarList .username
{
	display: inline;
	font-size: inherit;
	margin: 0;
}

.WidgetFramework_WidgetRenderer_Threads_List.discussionList
{
	overflow: hidden;
	width: 100%;
}
.WidgetFramework_WidgetRenderer_Threads_List .DiscussionList
{
	min-width: 450px;
	width: 100%;
}

.WidgetFramework_WidgetRenderer_Threads_ListCompact
{
}
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol { display: table; width: 100%; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol > li { display: table-row; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol > li > div { display: table-cell; vertical-align: middle; }

	.WidgetFramework_WidgetRenderer_Threads_ListCompact .unread { font-weight: bold; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact div.avatar { width: 20px; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact .avatar img
	{
		border: 0;
		height: 16px;
		width: 16px;
	}

	.WidgetFramework_WidgetRenderer_Threads_ListCompact div.count { text-align: right; width: 50px; }

	.WidgetFramework_WidgetRenderer_Threads_ListCompactMore
	{
		display: none;
		font-size: .9em;
		margin-bottom: -.5em;
		text-align: center;
	}


.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--aware { display: none; }
@media screen and (min-width: 480px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-narrow { display: table-cell; }
}
@media screen and (min-width: 610px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-medium { display: table-cell; }
}
@media screen and (min-width: 800px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-wide { display: table-cell; }
}


.WidgetFramework_WidgetRenderer_Threads_FullThreadList
{
}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .subHeading
	{
		font-size: 1.3em;
	}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info
	{
		padding: 5px 10px;
	}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info.info-top
		{
			border-bottom: 1px dashed rgb(159, 159, 159);
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info.info-bottom
		{
			border-top: 1px dashed rgb(159, 159, 159);
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .counters
		{
			float: right;
		}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message
	{
		margin-bottom: 10px;
	}
	/* clearfix */ .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message { zoom: 1; } .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageInfo
		{
			margin: 0;
			padding: 5px 10px;
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator
		{
			font-size: 10px;
color: #ffffff;
background-color: rgb(13, 94, 145);
padding: 0 4px;
margin: 0;
border: 1px solid rgb(13, 94, 145);
display: block;
position: absolute;
-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
top: -4px;
right: -6px;
z-index: 2;
background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);


			margin-right: -5px;
		}
			.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator span
			{
				background-color: rgb(13, 94, 145);
-webkit-border-bottom-right-radius: 3px; -moz-border-radius-bottomright: 3px; -khtml-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px;
display: block;
position: absolute;
bottom: -4px;
right: -1px;
width: 5px;
height: 4px;

			}

	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageText .readMoreLink
	{
		display: block;
		text-align: right;
	}

.widget-poll .pollBlock .pollContent
{
	padding-left: 0;
	width: auto;
}

.widget-poll .pollBlock .pollOptions,
.widget-poll .pollBlock .pollResults
{
	border: 0;
}

.widget-poll .pollBlock .pollResult h3.optionText
{
	border: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.widget-poll .pollBlock .pollResult .count
{
	padding: 0;
}
.WidgetFramework_WidgetRenderer_ShareThisPage .sharePage .shareControl
{
    float: none;
}

.WidgetFramework_WidgetRenderer_FeedReader_Entries
{
}
	.WidgetFramework_WidgetRenderer_FeedReader_Entries .limitedHeight
	{
		max-height: 54px; 
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry
	{
		text-align: justify;
		display: block;
		overflow: hidden;
		margin-bottom: 3px;
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail
	{
		width: auto;
		float: right;
		margin-left: 3px;
	}
		.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry:nth-child(2n) img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail
		{
			float: left;
			margin-right: 3px;
		}

.widget-tabs .WidgetFramework_WidgetRenderer_XFMG_Media .sectionMain
{
	background: none;
	border: 0;
	margin: 0;
	padding: 0;
}
	.widget-tabs .WidgetFramework_WidgetRenderer_XFMG_Media .sectionMain .titleStrip { display: none; }

.WidgetFramework_WidgetRenderer_XFRM_Resources .Hint
{
	float: right;
}

/* clearfix */ .WidgetFramework_WidgetRenderer_UserFollow h3 { zoom: 1; } .WidgetFramework_WidgetRenderer_UserFollow h3:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
.widget.WidgetFramework_WidgetRenderer_UserFollow h3 > a.count
{
	background-color: rgb(173, 173, 173);
	border: 1px solid rgb(142, 142, 142);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	color: #3f3f3f;
	float: right;
	font-size: 0.8em;
	margin: -3px 0;
	padding: 2px 6px;
}


.Tinhte_XenTag_WidgetRenderer_Cloud h3 { display: none }

/*=Prefixes Fix=*/    
.prefix {
margin-top: 0px;
}
   





/* CSS returned from cache. */