<?php
/**
 * Basic Light css
 */
?>
/* <style> /**/

/* ***************************************
	MISC
*****************************************/
.small a {
	vertical-align: top;
}
.elgg-image .elgg-button-cancel {
	margin-left: 0;
}
.elgg-page-walledgarden .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 120px;
}
.elgg-sidebar .elgg-module .elgg-head h3,
.elgg-sidebar-alt .elgg-module .elgg-head h3 { 
	font-size: 1.25em; 
}
.elgg-sidebar-alt .elgg-avatar-large > a > img {
    width: 150px;
    height: auto;
}
.elgg-sidebar-alt .elgg-module-featured .elgg-gallery > li {
    margin: 0;
}
.elgg-sidebar .elgg-module .elgg-image-block,
.elgg-sidebar-alt .elgg-module .elgg-image-block {
    border-bottom: 1px solid #D1D7DB;
}
.elgg-sidebar .elgg-module .elgg-image-block:last-child,
.elgg-sidebar-alt .elgg-module .elgg-image-block:last-child {
    border-bottom: none;
}
.elgg-module .elgg-list,
.elgg-module-widget .elgg-list {
	border-top: none;
    margin-top: 0;
}
.elgg-module-widget #twitter_widget,
.elgg-module-widget .elgg-gallery,
.elgg-module-widget .elgg-tagcloud,
.elgg-module-widget .elgg-form-messageboard-add {
	padding-top: 5px;
}
.elgg-module-register {
	position: relative;
    float: left;
    width: 57.446808%;
    border-left: 1px solid #D1D7DB;
    margin-left: 4.2553191%;
    padding-left: 20px;
    
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box; 
}
.elgg-module-avatar {
	background: #EDEDED;
    padding: 5px 2px 2px 5px;
}
.elgg-module-thewire {
	padding-top: 7px;
}
.elgg-form-account {
	width: 38.297872%;
}
.groups-profile-icon img {
    width: 200px;
    height: auto;
}

/* ***************************************
	FRIENDSPICKER
*****************************************/
.friends-picker-container h3 {
    font-size: 1.4em !important;
    margin-bottom: 5px;
}
.friends-picker-wrapper {
    width: 100%;
}
.friendspicker-savebuttons {
	background: transparent;
	margin: 10px 10px 10px 0;
}
.friends-picker-container .panel {
	height: 100%;
	width: auto;
    display: block;
	margin: 0;
	padding:0;
    border-bottom: 1px solid #D1D7DB;
}
/* ***************************************
	RESPONSIVE
*****************************************/
html {
    font-size: 100%;
    -moz-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
/*** NAVBAR ***/
.elgg-navbar {
	clear: both;
    *position: relative;
    *z-index: 2;

	background-color: #2B2E31; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#3D4145), to(#2B2E31));
	background-image: -webkit-linear-gradient(top, #3D4145, #2B2E31); 
	background-image:    -moz-linear-gradient(top, #3D4145, #2B2E31);
	background-image:     -ms-linear-gradient(top, #3D4145, #2B2E31);
	background-image:      -o-linear-gradient(top, #3D4145, #2B2E31);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3D4145', endColorstr='#2B2E31', GradientType=0);	

    border-bottom: 1px solid #000;

    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
}
.elgg-navbar .elgg-navbar-inner {
	width: 990px;
	margin: 0 auto;
	*min-width: 100%;
    min-height: 40px;
}
.divider-vertical {
    display: none;
	float: left;
    height: 40px;
    width: 1px;
    margin: 0;
    overflow: hidden;
    background-color: #575D63;
    border-right: 1px solid #232527;
}
.elgg-button-nav {
    display: none;
    font-size: 13px;
    line-height: 8px;
    color: #EBEFF1;
    float: left;
    padding: 15px 15px;
    margin-left: 10px;
}
@media (max-width: 1018px)  {
    .basic-slider {
        height: auto; 
    }
    .elgg-navbar .elgg-navbar-inner {
        width: auto;
    }
    .elgg-menu-topbar-alt {
        margin-right: 20px;
    }
    .elgg-menu-topbar-default {
        margin-left: 20px;
    }
    .elgg-page-default {
        width: 100%;
        min-width: 0;
    }
    .elgg-main {
        padding: 20px;
    }
    #login-dropdown {
        margin-right: 20px;
    }
    .elgg-heading-site, .elgg-heading-site:hover {
        margin-left: 12px;
    }
    .elgg-page-topbar > .elgg-inner {
        width: auto;
        padding: 0;
    }
    .elgg-page-default .elgg-page-header > .elgg-inner {
        width: auto;
    }
    .elgg-page-walledgarden .elgg-page-header > .elgg-inner {
        width: auto;
    }
    .elgg-page-default .elgg-page-body > .elgg-inner {
    	width: auto;
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        width: auto;
        margin: 0 20px;
    }
    .elgg-page-footer {
        width: auto;
    }
    .elgg-layout-one-sidebar .elgg-main {
        width: auto;
    }
    .elgg-layout-two-sidebar .elgg-main {
        width: auto;
    }
    .elgg-menu-site-default {
        right: 20px;
    }
    .elgg-sidebar {
        margin-right: 20px;
    }
    .elgg-sidebar-alt {
        display: none;
    }
    .elgg-main .elgg-output img {
		max-width: 100%;
		width: auto;
		height: auto;
	} 
    .file-photo .elgg-photo {
		max-width: 98%;
    }
    .tidypics-photo {
    	max-width: 97%;
    }
    .elgg-image-block {
        padding: 10px 0;
    } 
}
@media (min-width: 980px) {
    .elgg-navbar .elgg-menu-site {
        display: none;
    }
    .elgg-nav-collapse {
		display: block !important;
	}
}
@media (max-width: 979px) {
    .basic-index .pll {
        padding-left: 0;
    }
    .basic-index .elgg-module {
        overflow: visible;
    }
    .elgg-page-header .elgg-menu-site,
    .elgg-page-topbar .elgg-search,
    .elgg-page-header .elgg-search,
    .elgg-nav-collapse .elgg-menu-item-profile {
    	display: none;
    }
    .elgg-menu-topbar-alt {
        margin-right: 0;
    }
    .elgg-menu-topbar-default {
        margin-left: 0;
    }
    .divider-vertical {
        display: inline;
    }
    #dashboard-info {
    	margin-left: 0;
        margin-right: 0;    
    }
    .profile .elgg-inner {
        margin: 0;
    }
    .elgg-search input[type=text] {
        font-size: 100% !important;
    	color: #FFF;
        background: none;
    	height: 26px;
        border: 1px solid #535C61;
        margin-top: 0;
        width: 180px;
    }
    .elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
        background-color: #6E7A80;
        border: 1px solid #535C61;
        color: #FFF;
    }
    .elgg-search input[type=submit] {
        color: #FFF;
        font-size: 100% !important;
        cursor: pointer;
        display: inline-block;
        border: 1px solid #535C61;
        background: transparent;
        max-width: 100px;
        height: auto;
        padding: 2px 0 3px;
    }
    #groups-tools > li {
        width: 100%;
        float: none;
        margin-bottom: 20px;
    }
    #groups-tools > li:nth-child(odd) {
        margin-right: 0;
    }
    #groups-tools > li:last-child {
        margin-bottom: 0;
    }
    /***** IE ******/
    #groups-tools > .odd {
        margin-right: 0;
    }
    /***** CUSTOM INDEX ******/
    .elgg-col-1of2 {
        width: 100%;
    }
    .prl {
        padding-right: 0;
    }
	.custom-index-col1 > .elgg-inner,
	.custom-index-col2 > .elgg-inner {
		padding: 0;
	}
    /***** WIDGETS ******/
	.elgg-col-1of3,
    .elgg-col-2of3,
    #elgg-widget-col-1,
    #elgg-widget-col-2,
    #elgg-widget-col-3 {
        width: 100%;
        min-height: 0 !important;
    }
    .elgg-module-widget {
        margin: 0 0 15px;
    }
     /***** NAVIGATION ******/
    .elgg-navbar {
        position: relative;
        display: block;
    }
    .elgg-nav-collapse {
        background: #000;
        clear: both;
		display: none;
        padding: 10px 0 10px;
        position: absolute;
        top: 41px;
        *left: 0;
        width: 100%;
        z-index: 10000;
    }
    .elgg-button-nav {
        cursor: pointer;
        display: block;
    }
    .elgg-button-nav:hover {
        color: #FFF;
        text-decoration: none;
    }
    .elgg-nav-collapse .elgg-search-header {
    	display: inline;
        float: none;
        position: static;
    }
    .elgg-nav-collapse ul {
        background: inherit;
        display: block;
        position: static;
        width: auto;
        height: auto;
    }
    .elgg-nav-collapse ul li {
        float: none;
        margin: 1px 10px 0;
    }
    .elgg-nav-collapse ul li a,
    .elgg-nav-collapse ul li a:hover,
     .elgg-nav-collapse ul li.elgg-state-selected a {
		color: #FFF;
    }
    .elgg-nav-collapse ul li ul {        
        border: none;
    }
    .elgg-nav-collapse ul li ul li {
        margin-left: 0;
        margin-right: 0;
    }
    .elgg-nav-collapse li {
        background: #3c4347;
        clear: both;
        float: none;
        padding: 6px 0 6px 20px;
        margin: 0 10px;
    }
    .elgg-nav-collapse li:hover {
        background: #252a2d;
    }
    .elgg-nav-collapse li ul {
    	display: block;
		background: #000;
    }
    .elgg-nav-collapse a:hover {
        background: none repeat scroll 0 0 #F8F8F8;
    }
    .elgg-nav-collapse a, .elgg-nav-collapse ul a {
        color: #EBEFF1;
        display: block;
        font: inherit;
        padding: 0;
    }
    .elgg-nav-collapse a:hover, .elgg-nav-collapse ul a:hover {
        background: none repeat scroll 0 0 transparent;
        color: #FFF;
    }
    .elgg-nav-collapse .elgg-state-selected {
        background-color: #252a2d;
    }
    .elgg-nav-collapse li.elgg-more {
    	padding-bottom: 0;
    }    
    .elgg-nav-collapse li.elgg-more:hover {
    	background: #3c4347;
    }
    .elgg-menu-site-more {
        padding: 0;
    }
    .elgg-menu-site-more > li > a:hover {
        background: #252a2d !important;
    }
    .elgg-menu-site-more > li > a,
    .elgg-menu-site-default > li > a,
    .elgg-menu-site-more > li.elgg-state-selected > a,    
    .elgg-menu-site-default > .elgg-state-selected > a,
	.elgg-menu-site-default > li:hover > a {
    	text-shadow: none;
        background: none !important;
        border: none;
     	color: #FFF !important;           	
        border-radius: 0;
    
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
    }
    .elgg-menu-topbar-alt,
    .elgg-menu-topbar {
        float: none;
        padding: 0;
    }
    .elgg-menu-topbar > li > a {
        margin-left: 0;
    }
    /*** WALLED ***/
    .elgg-body-walledgarden {
    	margin: 0 auto;
        width: auto;
    }
    .elgg-heading-walledgarden br {
    	display: none;
    }
    .elgg-menu-walled-garden {
    	margin: 10px 0;
    }
	.elgg-module-walledgarden {
		width: 100%;
	}
    .elgg-module-walledgarden .elgg-col .elgg-inner {
    	margin: 0;
    }
    .elgg-walledgarden-double > .elgg-head,
    .elgg-walledgarden-double > .elgg-body,
    .elgg-walledgarden-double > .elgg-foot,
    .elgg-walledgarden-single > .elgg-head,
    .elgg-walledgarden-single > .elgg-body,
    .elgg-walledgarden-single > .elgg-foot {
        background: rgba(105, 110, 119, .1);
    }
}
@media (max-width: 767px) {
    .elgg-river-attachments,
    .elgg-river-message,
    .elgg-river-content {
        font-size: 100%;
    }
    .embed-wrapper {
        width: auto;
        margin: 0;
    }
    .elgg-module-register {
        width: 100%;
        border-left: none;
        margin-left: 0;
        padding-left: 0;
    }
    .elgg-form-account {
		min-width: 0;
        width: 100%;
    }
    .elgg-layout-one-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-layout-two-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-sidebar {
        background: rgba(105, 110, 119, .1);
        width: 100%;
        float: left;
        padding: 20px 20px 0 20px;
        margin: 0 0 10px 0;
		
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .elgg-sidebar .elgg-module {
        width: 100%;
        
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .elgg-module-avatar {
        background: none;
    }
    /*** SUB MENUES ***/
    .elgg-menu-page,
    .elgg-menu-owner-block {
		border: 1px solid #D1D7DB;
        border-radius: 12px;
    } 
    .elgg-menu-page li:first-child a,
    .elgg-menu-owner-block li:first-child a {
    	position: static;
    	overflow: hidden;
        border-radius: 12px 12px 0 0;
    }
    .elgg-menu-page li:last-child a,
    .elgg-menu-owner-block li:last-child a {        
		border-bottom: none;
        border-radius: 0 0 12px 12px;
    }    
    .elgg-menu-page li a,
    .elgg-menu-owner-block li a {
        display: block;
        
		border-bottom: 1px solid #D1D7DB;
        padding: 10px;
		margin: 0;       
       
        background-color: #EBEFF1; 
        background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
        background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
        background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
        background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
        background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#EBEFF1', GradientType=0);
        
        -webkit-box-shadow: inset 0 1px 0 #FFFFFF;
        -moz-box-shadow: inset 0 1px 0 #FFFFFF;
        box-shadow: inset 0 1px 0 #FFFFFF;
    }
    .elgg-menu-page li a:hover,
    .elgg-menu-owner-block li a:hover,
    .elgg-menu-page li.elgg-state-selected > a,
    .elgg-menu-owner-block li.elgg-state-selected > a {
        text-decoration: none;
        
        background-color: #FFFFFF; 
        background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#FFFFFF));
        background-image: -webkit-linear-gradient(top, #EEEEEE, #FFFFFF); 
        background-image:    -moz-linear-gradient(top, #EEEEEE, #FFFFFF);
        background-image:     -ms-linear-gradient(top, #EEEEEE, #FFFFFF);
        background-image:      -o-linear-gradient(top, #EEEEEE, #FFFFFF);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#FFFFFF', GradientType=0);
        
        -webkit-box-shadow: inset 0 -1px 0 #FFFFFF;
        -moz-box-shadow: inset 0 -1px 0 #FFFFFF;
        box-shadow: inset 0 -1px 0 #FFFFFF;
    }
    .elgg-menu-entity {
    	margin-left: 0;
        vertical-align: right;  
        height: auto;
    }
    .elgg-menu-entity li {
        vertical-align: right; 
    }
    .elgg-menu-footer-alt,
	.elgg-menu-footer-meta,
    .elgg-menu-footer-default {
    	display: block;
        float: none;
        text-align: center;
    }
    .elgg-page-footer .float-alt {
        float: none;
        text-align: center;
    }
    .tidypics-photo-item + .tidypics-photo-item {
    	margin-left: 0;
        margin-right: 7px;
    }
}
@media (max-width: 640px) {
    .elgg-col-1of4-m {
        width: 100%;
    }
    .basic-index .elgg-module-aside {
        min-height: 0;
        height: auto;
    }
    .groups-profile-fields {
        float: left;
        padding-left: 0;
    }
    .groups-profile-fields .odd,
    .groups-profile-fields .even {
        padding: 0;
    }
    #profile-owner-block {
    	border-right: none;
        width: auto;
    }
    #profile-details {
        display: block;
        float: left;
    }
}
@media (max-width: 480px)  {
    .elgg-main {
        padding: 10px;
    }
    #login-dropdown {
        margin-right: 10px;
    }
    .elgg-heading-site, .elgg-heading-site:hover{
        font-size: 2.6em;
        margin-left: -4px;
    }
    .elgg-page-default .elgg-page-header > .elgg-inner {
        padding: 0 10px;
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        margin: 0 10px;
    }
    .elgg-sidebar {
        padding: 20px 10px 0 10px;
    }
    .elgg-likes {
        width: auto;
    }
    #notificationstable td.namefield {
        width: 20%;
    } 
    .ckeditor-toggle-editor {
        display: none !important;
    }
    td.mceToolbar {
        display: none;
    }
    .elgg-page-footer > .elgg-inner {
        margin: 0 10px;    
    }
    .file-photo .elgg-photo {
		max-width: 97%;
    }
}
@media (max-width: 330px)  {
    #login-dropdown {
        display: none;
    }
}