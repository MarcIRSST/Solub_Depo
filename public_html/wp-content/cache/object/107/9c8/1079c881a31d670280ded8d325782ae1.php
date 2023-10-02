วยe<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:606;s:11:"post_author";s:1:"4";s:9:"post_date";s:19:"2020-09-17 13:06:17";s:13:"post_date_gmt";s:19:"2020-09-17 17:06:17";s:12:"post_content";s:9962:"#content .fusion-text a, #content .fusion-content-boxes a {text-decoration:underline;}

.anchor, div.fusion-menu-anchor {display: block; position: relative; top: -200px; visibility: hidden;}
.irsst-footer a {color: #ead637;}
.flip-box-back-inner div {
  margin: auto;
  width: 75%;
  /*border: 3px solid #000;*/
  padding: 10px;
}

/* Get the first submenu of the last menu item in the main menu. */
.fusion-main-menu ul.sub-menu{

    width: 375px;

}

#ressource.fusion-content-boxes.fusion-columns-1 .fusion-column {
    margin-bottom: 20px;
}

.fusion-page-title-bar .fusion-breadcrumbs a:hover {
    color: #ead637;
}

.popover {max-width: 320px;}
.fusion-text .fusion-popover {text-decoration:underline; color:#2c445e;}
.fusion-text sup{font-size:.67em}


.box-info {border:1px solid #212934;border-radius:4px;background-color:#eee;padding:20px 40px;margin:20px 80px 40px;}
.box-info h4{font-size:1.4em;}

.note-ref{border-top:1px solid #e2e2e2; border-right:1px solid #e2e2e2 ; border-bottom:1px solid #e2e2e2;border-left:1em solid #e2e2e2;border-radius:4px;padding:2em;}
.note-ref .fusion-content-boxes {margin-bottom:0;}


.note-ref .link-area-box-hover .content-box-heading {color:#212934 !important;cursor: pointer !important;}


@media (min-width: 992px){
#demarche-accueil div.fusion-flip-box-wrapper:nth-child(even) {
  margin-top:8em;
}
}

#posts-container p.fusion-single-line-meta {    display: inline;
    padding: .2em .6em .3em;   
    color: #fff;
    white-space: nowrap;
    border-radius: .25em;
		background-color: #777;
}
#posts-container p.fusion-single-line-meta a {color:#fff;}

#posts-container p.fusion-single-line-meta a:hover{color:#fff;
	text-decoration:underline;}

.page-next {margin-left:12px;}


/****mon new code****/
.title-txt{
left: 225px;
position: absolute;
}
.title-bgC h1{
	color:#fff !important;

}
.nav-ps{
	width: 100%;
}
.nav-ps ul{
 display: flex;
 justify-content: space-between;
list-style: none;
padding:0;
text-transform: uppercase;
border-top: solid 1px lightgrey;
padding-top: 10px;
}

/****widget****/
.widgetHome h4{
	font-size:18px !important;
	/*background-color:#ededed;
	padding:10px;*/
	
}
.widgetHome li{
	display: block;
  padding: 10px 10px 10px 12px !important;
  border-bottom: 1px solid #e7e6e6;
  margin-bottom:10px; 
}

.title-barre{
width: 100%;
height: 15px;
background-image: linear-gradient( 
45deg
 ,#2c445e,#307b83);
    margin-bottom: 25px;	
}

.steps{
width:250px;
height:250px;
position:relative;
}
.bubble-title{
position:absolute;
top:30%;
width:80%;
/*height:60%;*/
text-align:center;
left:10%;

/*background-color:red;*/

}

.bubble-title p{
font-size:18px !important;
padding:10px;
line-height:normal;	
margin:auto;

}
.bubble-title p a{
color:#fff !important;
}
.bubble-title:hover  p a{
/*color:#ead637 !important;*/
-webkit-mask-image: linear-gradient(-75deg, rgba(0,0,0,.6) 30%, #000 50%, rgba(0,0,0,.6) 70%);
-webkit-mask-size: 200%;
  animation: texteShine 1s infinite;
}
@-webkit-keyframes texteShine {
  from {
-webkit-mask-position: 150%;
  } 
to {
-webkit-mask-position: -50%;
  }
}
.bubble-title i{
font-size:20px !important;
/*position:absolute;*/
bottom:0;
color:#fff;
opacity:0.6;
}

.bubble-title:hover i {

opacity:1;
animation:rotate-plus 0.5s;
font-size:24px !important;
}
.float img{
width:100%;
}


.floatBg{
width:250px;
height:220px;
z-index:-10;
position:absolute;
}

.container-bubbles{
	margin-left:auto;
	margin-right:auto;
}


/*******bubbles background float******/
.float1{
border-radius: 40% 70% 40% 60% / 70% 40% 70% 40%;
background-image: linear-gradient(45deg,#2c445e,#307b83);
animation: animate 6s ease-in-out  infinite;
}

.float2 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(96deg,#307b83,#91c8ae);
animation: animate2 8s ease-in-out  infinite;
}  

.float3 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(157deg,#91c8ae,#f6bf64);
animation: animate3 7s ease-in-out  infinite;
}   
.float4 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(190deg,#f6bf64,#ed8c66);
animation: animate4 8s ease-in-out  infinite;
}  
.float5 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(200deg,#ed8c66,#e45869);
animation: animate 6s ease-in-out  infinite;
}  
.float6 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(268deg,#e45869,#c70039);
animation: animate2 6s ease-in-out  infinite;
}  
.float7 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(146deg,#c70039,#900c3e);
animation: animate3 8s ease-in-out  infinite;
}  
 
.float8 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(93deg,#900c3e,#571845);
animation: animate 7s ease-in-out  infinite;
}
.float9 {
border-radius: 30% 40% 30% 70% / 60% 30% 50% 40%;
background-image: linear-gradient(93deg,#571845,#a82482);
animation: animate4 5s ease-in-out  infinite;
} 


/*******animations******/
@-webkit-keyframes rotate-plus {
    from{
        -webkit-transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(180deg);			
    }
}

@keyframes animate {
0%{
border-radius:40% 70% 40% 60% / 70% 40% 70% 40%;
}
50%{
border-radius: 60% 50% 60% 40% / 50% 50% 60% 40%;
   
}        
100%{       
border-radius: 40% 70% 40% 60% / 70% 40% 70% 40%;
}
}
 
@keyframes animate2 {
0%{
border-radius:40% 50% 50% 60% / 80% 80% 30% 40%;
}
50%{
border-radius: 40% 70% 60% 30% / 40% 50% 50% 60%;
   
}        
100%{       
border-radius:40% 50% 50% 60% / 80% 80% 30% 40%;
}
}
@keyframes animate3 {
0%{
border-radius:60% 70% 60% 50% / 60% 70% 40% 50%;
}
50%{
border-radius: 60% 50% 50% 70% / 80% 50% 80% 40%;
   
}        
100%{       
border-radius: 60% 70% 60% 50% / 60% 70% 40% 50%;
}
}
@keyframes animate4 {
0%{
border-radius:60% 70% 60% 70% / 60% 50% 70% 80%;
}
50%{
border-radius: 50% 60% 70% 60% / 70% 80% 60% 70%;
   
}        
100%{       
border-radius:60% 70% 60% 70% / 60% 50% 70% 80%;
}
}
/********pages steps**********/

.title-st1{
	position:relative;
	height:200px
}
.title-bgC{
	 width: 190px;
   height: 150px;
   position: absolute;
   border-radius: 50%;
	z-index:-10;
	
}
.title-bgB{
width: 200px;
height: 180px;
position: absolute;
background-image: linear-gradient(45deg,#2c445e,#307b83);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB5{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
200deg
,#ed8c66,#e45869);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB6{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
268deg
,#e45869,#c70039);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB7{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
146deg
,#c70039,#900c3e);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB8{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
93deg
,#900c3e,#571845);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB9{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
93deg
,#571845,#a82482);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB2{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
96deg
,#307b83,#91c8ae);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB3{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
157deg
,#91c8ae,#f6bf64);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}
.title-bgB4{
width: 200px;
height: 180px;
position: absolute;
background-image:linear-gradient(
190deg
,#f6bf64,#ed8c66);
animation: animate3 7s ease-in-out infinite;
z-index:-20;	
top:-20px;
}



/****bureau***/
@media only screen and (min-width:1045px){
	/******steps********/
.container-bubbles{
	display:flex;
	flex-wrap:wrap;
}
	.reverse{
	display:flex;
	flex-direction:row-reverse;
}
.step2{
margin-top:40px;
margin-left:-25px;
}
.step3{
margin-top:60px;
margin-left:-25px;
}
.step4{
margin-top:-60px;
}
.step5{
margin-right:-25px;
margin-top:-20px;
}
.step6{
margin-right:-25px;
margin-top:10px;
}
.step7{

margin-top:-55px;
margin-left:15px;
}
.step8{
margin-left:-38px;
	margin-top:-20px;

}
.step9{
margin-left:-30px;
margin-top:0px;
}

}
@media only screen and (max-width:600px){
.step2{
margin-top:-55px;
}
.step3{
margin-top:-55px;
}
.step4 {
margin-top:-55px;
}
.step5{
margin-top:-55px;
}
.step6{
margin-top:-55px;
}
.step7{

margin-top:-55px;
}
.step8{
margin-top:-55px;

}
.step9{
margin-top:-55px;
}
h1{
		font-size:22px !important;
	}

.title-bgC {
   width: 90px;
   height: 70px;
	top: -10px;

}
.title-bgC h1 {
  margin-left:5px;
	margin-top:22px;

}
.title-bgB,.title-bgB2,.title-bgB3,.title-bgB4,.title-bgB5,.title-bgB6,.title-bgB7,.title-bgB8,.title-bgB9 {
 width: 90px;
height: 84px;
top: -20px;	
}
.title-st1 {
height: 100px;

 
}
.title-txt{
		left:95px;
		font-size: 18px !important;*/
	
	}
}

/****tablette***/
@media only screen and (min-width:600px) and (max-width:1045px) {
.container-bubbles{
	display:flex;
	flex-wrap:wrap;
}
	.steps{
		 width: 200px;
		height:200px;
	}
.floatBg {
    width: 200px;
    height: 180px;	
}

.bubble-title p {
    font-size: 15px !important;
}
/******steps********/
.reverse{
	display:flex;
	flex-direction:row-reverse;
}
.step2{
margin-top:40px;
margin-left:-25px;
}
.step3{
margin-top:60px;
margin-left:-25px;
}
.step4 {
    margin-top: -46px;
}
.step5{
margin-right:-25px;
margin-top:-20px;
}
.step6{
margin-right:-25px;
margin-top:10px;
}
.step7{

margin-top:-55px;
margin-left:15px;
}
.step8{
margin-left:-38px;
	margin-top:-20px;

}
.step9{
margin-left:-30px;
margin-top:0px;
}
.title-txt{		
font-size: 32px !important;
	
	}
}
}";s:10:"post_title";s:17:"Avada-Child-Theme";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"avada-child-theme";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2021-04-14 15:03:27";s:17:"post_modified_gmt";s:19:"2021-04-14 19:03:27";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:43:"http://solub.irsst.qc.ca/avada-child-theme/";s:10:"menu_order";i:0;s:9:"post_type";s:10:"custom_css";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}