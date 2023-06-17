<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <title>Business Card</title>
</head>

<body>
    <style>

@font-face{
	font-family: 'Whyte Inktrap';
	src:url(./fonts/WhyteInktrap-Bold/WhyteInktrap-Bold.ttf);
}
@font-face {
	font-family: 'Space Grotesk';
	src: url(./fonts/Space_Grotesk/SpaceGrotesk-VariableFont_wght.ttf);
}
@font-face {
	font-family: 'Gilroy';
	src: url(./fonts/Gilroy/Gilroy-Bold.ttf);
}


html{
	scroll-behavior: smooth;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
	list-style: none;
	text-decoration: none;
	font-family: 'Montserrat',  sans-serif;
	position: relative;
	
}


/* HEADER */
.header{
	width: 1280px;
	margin-left: auto;
	margin-right: auto;
	padding-top: 10px;
	background-image: url(./img/lines.svg);
	position: relative;
	background-repeat: no-repeat;
	background-size: cover;
}
.header-main{
	width: 100%;

}
.top-left{
	position: absolute;
	border:1px solid red;
	top: 0;
	left: 0;
	width: 587px;
	height: 587px;
	background: rgba(206, 62, 0, 0.32);
	filter: blur(250px);
	
}
.bottom-right{
	position: absolute;
	border:1px solid red;
	bottom: 0;
	right: 0;
	width: 347px;
	height: 347px;
	background: rgba(0, 206, 82, 0.42);
	filter: blur(250px);
}
.nav-menu{
	margin: 10px 30px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	position: relative;
}

.logobrand{
	font-family: 'Whyte Inktrap';
	flex: none;
	order: 0;
	flex-grow: 0;
	font-size: 20px;
	display: inline-block;
	width: 100px;
	height: 47px;
	
}
.right{
	display: flex;
	align-items:center;
	justify-content: space-between;
	width: 400px;
	height: 56px;
}

.logobrand, .right a{
	color:black;
	font-weight: 700;

}
 .right a{
	font-size: 16px;
	line-height: 20px;
	font-family: 'Space Grotesk';
	transition: all .5s ease-in-out;
}
.language{
	position: relative;
	font-size: 16px;
	line-height: 20px;
	color:black;
	font-weight: 700;
	font-family: 'Space Grotesk';
	
}
.language span{
	cursor: pointer;
	font-family: 'Space Grotesk';
}
.arrow-down{
	position: absolute;
	right: -20px;
	top: 2px;
}
.languages{
	padding: 10px;
	width: 80px;
	display: none;
	text-align:start;
	align-items:center;
	border-radius: 5px;
	background: rgba(255,255,255,0.1);
	position: absolute;
	border: none;
	left: -10px;
	top: 25px;
	z-index: 1;
	transition: all .5s ease-in-out;
	box-shadow: 0px 5px 10px rgba(160, 154, 154, 0.767);
	transition: height .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.languages.drop{
	height: 80px;
	background: rgba(255,255,255,0.5);
}


.toggle-btn{
	font-size: 1.5rem;
	cursor: pointer;
	display: none;
}
/* DROPDOWN MENU */
.dropdown_menu{
	display: none;
	position: absolute;
	left: 2.5%;
	top: 60px;
	width: 95%;
	border-radius:10px;
	height: 0;
	text-align: start;
	padding: 10px;
	backdrop-filter: blur(15px);
	z-index: 1;
	overflow: hidden;
	transition: height .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.dropdown_menu.open{
	height: 210px;
	background: rgba(255,255,255,0.5);
}
.dropdown_menu li, .language{
	margin: 15px;
}
.dropdown_menu .language{
	width: 55px;
	
}
.dropdown_menu .droplan{
	overflow: hidden;
	backdrop-filter: blur(15px);
	z-index: 1;
	transition: height .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.dropdown_menu .droplan.drop1{
	height: 80px;
	background: rgba(255,255,255,0.5);
	
}
.dropdown_menu a{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 700;
	font-size: 16px;
	line-height: 20px;
	color: #000000;
}

.header-about{
	display: flex;
	justify-content: center;
	margin: 0 10px;
	margin-top: 80px;
}
.header-img{
	width: 629px;
	animation: slide-in-anim .5s ease-out forwards;
	object-fit: contain;
}

.header-text{
	margin-top: 25px;
	width: 50%;
	animation: slide-in-anim .5s ease-out forwards;
}
.header-text .btn{
	display: flex;
	align-items:center;
	margin-bottom: 90px;
}
.header-text h1{
	font-family: 'Whyte Inktrap';
	font-style: normal;
	font-weight: 700;
	font-size: 64px;
	line-height: 97px;
	color: #1C232C;
	
}
@keyframes slide-in-anim {
	0% {
		opacity: 0;
		transform: translateY(50%);
	}

	100% {
		opacity: 1;
		transform: translateY(0%);
	}
}

.header-text h4{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 700;
	font-size: 24px;
	line-height: 31px;
	color: #1C232C;
	margin-top: 30px;
}
.header-text p{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	color: #1C232C;
	margin: 40px 10px;
}

.meet-me{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	cursor: pointer;
	display: flex;
	flex-direction: row;
	color: whitesmoke;
	justify-content: center;
	align-items: center;
	padding: 10px;
	gap: 10px;
	width: 194px;
	height: 56px;
	background: #B51D1D;
	border-radius: 10px;
	flex: none;
	order: 0;
	flex-grow: 0;
	border:none;
    transition: all .4s ease-in-out;
	margin-right: 20px;
}

.meet-me:hover {
    background: #971A1B;
	box-shadow: 0px 20px 40px rgba(174, 46, 46, 0.25);
}

.send-me{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	cursor: pointer;
	display: flex;
	flex-direction: row;
	color: whitesmoke;
	justify-content: center;
	align-items: center;
	padding: 10px;
	gap: 10px;
	width: 194px;
	height: 56px;
	background: #1C232C;
	border-radius: 10px;
	flex: none;
	order: 0;
	flex-grow: 0;
	border: none;
    transition: all .4s ease-in-out;
	
}

.send-me:hover{
	background: #0D1017;
	box-shadow: 0px 20px 40px rgba(13, 16, 23, 0.25);
}
.contact-me, .follow-me{
	margin-bottom: 40px;
	display: flex;
	align-items: center;
}
.contact-me p, .follow-me p{
	margin: 0;
	font-size: 18px;
	line-height: 23px;
	font-weight: bold;
}
.contact-me  span, .follow-me span{
	border:1px solid #1C232C;
	width: 42px;
	margin-right: 20px;

}
.contact-me a{
	margin-left: 25px;
	transition: all .5s ease;
	
}
.contact-me a:hover, .follow-me a:hover{
	transform: translateY(-5px);
}
.contact-me img, .follow-me img{
	width: 25px;
	height: 25px;
}
.follow-me a{
	transition: all .5s ease;
}
.anim-4{
	margin-left: 40px;
}
.anim-5{
	margin-left: 25px;
}


/* ABOUT */
.about, .contact{
	background: #F6F6F9;
	padding-top: 40px;
	
}
.about-item{
	width: 1280px;
	margin-left: auto;
	margin-right: auto;
	display: flex;
	flex-direction: column;
}

.about h1, .contact h1{
	font-family: 'Whyte Inktrap';
	font-style: normal;
	font-weight: 700;
	font-size: 64px;
	line-height: 97px;
	color: #1C232C;
	margin-bottom: 40px;
}
.reveal{
	transform: translateY(50px);
	opacity: 0;
	transition: all .5s ease;
}
.reveal.active{
	opacity: 1;
	transform: translateY(0px);
}
.about-main, .contact_wrapper{
	margin: 0 15px;
	display: flex;
	justify-content: center;
	
}
.about-content h3{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 700;
	font-size: 42px;
	line-height: 54px;
	color: #1C232C;
}
.about-content  div{
	text-align: end;
	margin: 40px 0;
	margin-right: 40px;
	width: 180px;
}

.about-content span, .contact_wrapper span{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 14px;
	line-height: 18px;
	color: #636C79;
}

.line{
	border:#636C79 1px solid;
	height: 480px;
	margin-right: 50px;
}
.about-text p{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	color: #1C232C;
	margin-bottom: 100px;
}

/* SLIDER */
.slider{
	width: 1280px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	background-image: url(./img/lines.svg);
	position: relative;
	background-repeat: no-repeat;
	background-size: cover;
	padding: 50px;
	
}
.offer_slider-next{
	cursor: pointer;
	position: absolute;
	border:1px solid #1C232C;
	border-radius: 50px;
	padding: 5px;
	color:#1C232C;
	right: 10%;
	top: 35%;
}
.offer_slider-prev{
	cursor: pointer;
	position: absolute;
	border:1px solid #1C232C;
	border-radius: 50px;
	padding: 5px;
	color:#1C232C;
	left: 10%;
	top: 35%;
}
.offer_slider-wrapper{
	width: 67%;
	margin: 60px auto;
}
.offer_slider p{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	text-align: center;
	color: #1C232C;
	margin: 60px auto;
}
.offer_slider h3{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 700;
	font-size: 20px;
	line-height: 32px;
	text-align: center;
	color: #1C232C;
	margin: 20px auto 0 auto;
}
.offer_slider span{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 32px;
	text-align: center;
	color: #636C79;
	margin-bottom: 50px;
}

/* CONTACT */
.contact{
	padding-bottom: 200px;
}
.contact-main{
	width: 1280px;
	margin-left: auto;
	margin-right: auto;
}
.contact_wrapper h3{
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 700;
	font-size: 20px;
	line-height: 26px;
	color: #1C232C;
}
.contact_wrapper-content{
	margin-right: 50px;
}
.contact_wrapper-content div{
	display: flex;
	flex-direction: column;
	align-items:flex-end;
}
.contact_wrapper-content div img{
	width: 30px;
	margin-bottom: 10px;
	margin-top: 30px;
}
.row{
	width: 80%;
}
.row-form{
	display: flex;
	flex-direction: column;
}
.contact_input-inner{
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(45%, 1fr));
	gap: 1rem;
	width: 100%;
}
.contact_input{
	width: 100%;
	height: 56px;
	background: rgba(255, 255, 255, 0.22);
	border: 1px solid #CDD1D6;
	border-radius: 5px;
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 20px;
	display: flex;
	flex-direction: row;
	align-items: center;
	padding: 18px 20px;
	gap: 10px;
	
}

.select-input{
	position: relative;
}
.arrow-select{
	position: absolute;
	right: 5px;
	top: 18px;
}
.contact_input-textarea{
	margin-top: 20px;
	width:100%;
	height: 150px;
	display: flex;
	flex-direction: row;
	align-items: flex-start;
	font-size: 16px;
	padding: 18px 20px;
	gap: 10px;
	background: rgba(255, 255, 255, 0.22);
	border: 1px solid #CDD1D6;
	border-radius: 5px;
	resize: none;
}

.submit-msg{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	padding: 10px;
	gap: 10px;
	color:aliceblue;
	width: 194px;
	height: 56px;
	background: #1C232C;
	border-radius: 10px;
	font-family: 'Space Grotesk';
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 32px;
	margin-top: 25px;
	border: none;
    transition: all .4s ease-in-out;
}
.submit-msg:hover{
	background: #0D1017;
	box-shadow: 0px 20px 40px rgba(13, 16, 23, 0.25);
}


/* FOOTER */
.footer{
	background: #1C232C;
	padding: 25px;
	
	
}
.footer-main{
	width: 1250px;
	margin-left: auto;
	margin-right: auto;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.footer .logobrand{
	color:aliceblue;
}
.footer .follow-me, .footer .contact-me{
	margin: 0;
	color:aliceblue;
	
}
.footer .follow-me span, .footer .contact-me span{
	border:1px solid white;
	width: 80px;
}
.footer .contact-me div, .footer .follow-me div{
	display: flex;
	align-items:center;
}
.footer .follow-me a, .footer .contact-me a{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	padding: 6px;
	gap: 10px;
	margin-left: 10px;
	width: 32px;
	height: 32px;
	background: #FFFFFF;
	box-shadow: 0px 15px 55px rgba(0, 0, 0, 0.01);
	border-radius: 50px;

}
.footer .follow-me a img, .footer .contact-me a img{
	width: 20px;
	height: 20px;
}

.footer .contact-me{
	margin-bottom: 15px;
}
.footer-main .follow-me div{
	margin-left: 10px;
}


@media  screen and (max-width: 1280px) {
	.header, .about-item, .slider, .contact-main, .footer-main{
		width: 100%;
		
	}
	.header-img{
		width: 50%;
	}
}


@media screen and (max-width: 1080px){
	.header-img{
		width: 500px;
	}

}
@media screen and (max-width: 950px){
	.header-about{
		width: 98%;
	}
	.header-img{
		width: 400px;
	}
	.meet-me, .send-me{
		width: 160px;
		height: 50px;
	}
}
@media screen and (max-width: 790px){
	.container{
		width: 100%;
	}
	.logobrand{
		line-height: 25px;
		margin-left: 10px;
	}
	.right{
		margin-right: 10px;
	}
	.header-about{
		flex-direction: column-reverse;
		width: 100%;

	}
	.header-img{
		width: 100%;
	}
	.header-text{
		width: 100%;

	}
	.header-text h1{
		font-size: 50px;
	}
	.header-text h1, .about h1, .contact h1{
		text-align: center;
		margin-left: 0;
	}
	.header-text h4{
		text-align: center;
	}
	.header-text p{
		text-align: center;
	}
	.meet-me, .send-me{
		width: 193px;
height: 56px;
	}
	.about-main, .contact_wrapper{
		flex-direction: column;
	}
	.about-content{
		display: flex;
		align-items:baseline;
		justify-content: space-between;
	}
	.about-content h3{
		font-size: 30px;
	}
	.about-content div{
		margin-right: 5px;
		text-align: center;
	}
	.header-text .btn{
		justify-content: space-around;
	}
	
	.line{
		height: 0;
		width: 100%;
	}
	.about-text p{
		text-align: center;
		margin-top: 40px;
	}
	.offer_slider-prev{
		left: 7%;
		top: 61%;
	}
	.offer_slider-next{
		right: 7%;
		top: 61%;
	}
	.offer_slider-wrapper{
		width: 100%;
		
	}
	.offer_slider p{
		text-align: center;
		font-size: 14px;
	}
	.contact_wrapper-content{
		display: flex;
		align-items:center;
		justify-content: space-between;
		margin: 0;
	}
	.contact_wrapper-content div{
		align-items:center;
		margin: 20px 0;
	}
	
	.contact_wrapper h3 {
		font-size: 14px;
		line-height: 15px;
	}
	.row{
		width: 100%;
		margin-top: 20px;
	}
	.footer-main .follow-me div{
		margin-left: 15px;
	}
	.footer .follow-me, .footer .contact-me{
		margin-bottom: 15px;
		
	}
	.footer .follow-me p{
		font-size: 16px;
	}
	
	.footer .follow-me span, .footer .contact-me span{
		width: 50px;
	}
	.footer .follow-me a {
		
		width: 28px;
		height: 28px;
		margin-left: 15px;
	}
	
}
@media screen and (max-width: 588px){
	.right {
		display: none;
	}
	.top-left{
		border:1px solid red;
		width: 374px;
		height: 374px;
		left: calc(50% - 374px/2 + 0.5px);
		top: -138px;
		border-radius: 50%;
		background: rgba(206, 62, 0, 0.32);
		filter: blur(250px);
	}
	.bottom-right{
		display: none;
	}
	.toggle-btn{
		display: block;
	}
	
	.dropdown_menu{
		display: block;
	}
	.send-me, .meet-me{
		width: 160px;
	}
	.follow-me, .contact-me{
		flex-direction: column;
		margin: 20px 0px;
	}
	.follow-me span, .contact-me span{
		display: none;
	}
	.btn_my_contact{
		display: flex;
		align-items:center;
		justify-content: space-around;
	}
	.header-about{
		margin-left: 0;
		margin-right: 0;
	}
	.about-main{
		width: 90%;
	}
	.contact-me a{
		margin: 0;
	}
	.contact-me div{
		width: 120px;
		display: flex;
		justify-content: space-between;
		margin-top: 10px;
	}
	.follow-me div{
		width: 100px;
		display: flex;
		justify-content: space-around;
		margin-top: 10px;
	}
	.anim-4, .anim-5{
		margin: 0;
	}
	.about-content h3{
		font-size: 21px;
		text-align: center;
		line-height: 24px;
		margin: 10px auto;
	}
	.about-content h3:nth-child(2){
		margin-top: 10px;
	}
	.about-content div{
		text-align: center;
	}
	.contact_wrapper-content{
		flex-direction: column;
	}
	.contact_wrapper{
		width: 90%;
	}
	.contact_wrapper h3 {
		font-size: 26px;
		line-height: 26px;
	}
	.contact_wrapper span{
		font-size: 25px;
		line-height: 40px;
	}
	.contact_input-inner{
		grid-template-columns: none;
	}
	.row-form{
		align-items: center;
	}
	.footer{
		padding: 20px 4%;
	}
	.footer .logobrand{
		font-size: 20px;
		text-align: center;
	}
	.footer .follow-me p{
		font-size: 18px;
	}
	.footer .follow-me span {
		width: 30px;
	}
	.footer .follow-me a {
		width: 25px;
		height: 25px;
		margin-left: 10px;
	}
	.footer .follow-me a img{
		width: 18px;
		height: 18px;
	}
	.footer .follow-me span{
		margin-right: 10px;
	}
	.footer-main .follow-me div{
		margin-left: 0;
	}
	
}
@media screen and (max-width: 420px){
	.header-text {
		margin: 0;
	}
	.header-text h1, .about h1, .contact h1{
		font-size: 36px;
		line-height: 97px;
		margin: 0 auto;
	}
	.header-text h4{
		margin-top: 10px;
	}
	
	.header-text p{
		margin: 0;
		margin-bottom: 40px;
		margin-top: 20px;
		font-size: 12px;
		line-height: 24px;
	}
	.send-me, .meet-me{
		font-size: 15px;
	}
	
	.follow-me span{
		width: 20px;
		margin-right: 2px;
	}
	.follow-me a{
		margin-left: 10px;
	}
	
	.follow-me p, .contact-me p{
		margin: 0;
		font-size: 18px;
		line-height: 24px;
	}
	.nav-menu{
		width: 90%;
		margin: 0 auto;
	}
	.right{
		width: 180px;
	}
	
	.contact_wrapper-content div img{
		width: 30px;
	}
	.contact_wrapper span{
		font-size: 20px;
	}
	.contact_wrapper h3 {
		font-size: 20px;
		line-height: 20px;
		text-align: center;
	}
	
	.footer-main{
		display: flex;
		flex-direction: column-reverse;
	}
	.footer .logobrand{
		margin-top: 20px;
	}
	.footer .follow-me{
		width: 100%;
	}
}
@media  screen and (max-width: 350px) {
	.header-text{
		margin-top: -45px;
	}
	.header-text .btn{
		flex-direction: column;
	}
	.send-me, .meet-me{
		width: 80%;
		margin: 10px auto;
	}
	.top-left{
		width: 200px;
	}
	.header-text h1{
		font-size: 25px;
		line-height: 40px;
	}
	.header-text h4{
		font-size: 20px;
	}
	
	.right{
		width: 160px;
	}
	.right a{
		font-size: 14px;
	}
	.logobrand{
		font-size: 16px;
	}
	
}

    </style>
    <!-- HEADER  -->
    <div class="header">
        <div class="header-main">
            <span class="top-left"></span>
            <span class="bottom-right"></span>
            <div class="nav-menu">
                <a href="https://sultanagro.uz" class="logobrand">Mansurjon Turabov</a>
                <ul id="nav-mobile" class="right">
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                    <div class="language">
                        <span>English</span>
                        <i class="arrow-down fa-solid fa-caret-down"></i>
                        <div class="languages">
                            <a href="index.php">English</a>
                            <a href="./indexx.html">Рус</a>
                        </div>
                    </div>
                </ul>
                <div class="toggle-btn"><i class="fa-solid fa-bars"></i></div>
            </div>
            <div class="dropdown_menu">
                <li><a href="#about">About Me</a></li>
                <li><a href="#contact">Contact Me</a></li>
                <div class="language lan">
                    <span>English</span>
                    <i class="arrow-down fa-solid fa-caret-down"></i>
                    <div class="languages droplan">
                        <a href="index.php">English</a>
                        <a href="./indexx.html">Рус</a>
                    </div>
                </div>
            </div>

            <div class="header-about">
                <div class="header-text">
                    <h1>Mansurjon Turabov</h1>
                    <h4>Export Manager at Sultan Agro Impeks.</h4>
                    <p>15+ successful cases where I consulted for import-export agricultural commodities from Uzbekistan to
                        Kazakhstan, Russian Federation, Ukraine, Belarus, Mongolia, Vietnam, UAE, Georgia and Israel.</p>
                    <div class="btn">
                        <!-- Link to open the modal -->
                        <a class="meet-me" href="#ex1" rel="modal:open">Meet me online</a>
                        <a href="#contact-input" class="send-me">Send me request</a>
                    </div>
                    <div class="btn_my_contact">
                        <div class="contact-me">
                            <span></span>
                            <p>Contact me:</p>
                            <div>
                                <a href="https://t.me/sultanagro_uz"><img src="/api/img/icons8-telegram-100.png" alt="Telegram"></a>
                                <a href="https://wa.me/998994690007"><img src="/api/img/icons8-whatsapp-96.png" alt="WhatsApp"></a>
                                <a href="mailto:manager@sultanagro.uz"><img src="/api/img/icons8-mail-100.png" alt="Email"></a>
                            </div>
                        </div>
                        <div class="follow-me">
                            <span></span>
                            <p>Follow me:</p>
                            <div>
                                <a class="anim-4" href="https://uz.linkedin.com/in/mansurjon-turobov-5a732bbb"><img src="./img/icons8-in-100.png" alt="Linkedin"></a>
                                <a class="anim-5" href="https://tenchat.ru/manshuri21"><img src="./img/tch.svg" alt="TenChat"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="header-img" src="./img/brunet.png" alt="">

            </div>
        </div>


    </div>
    <!-- ABOUT  -->
    <div class="about" id="about">
        <div class="about-item">
            <h1 class="reveal">About Me</h1>
            <div class="about-main">
                <div class="about-content reveal">
                    <div>
                        <img src="./img/check.svg" alt="">
                        <h3>$2,4 mln</h3>
                        <span>Closed deals</span>
                    </div>
                    <div>
                        <img src="./img/smile.svg" alt="">
                        <h3>1 300+</h3>
                        <span>Tons exported products</span>
                    </div>
                    <div>
                        <img src="./img/diamond.svg" alt="">
                        <h3>15</h3>
                        <span>Win-win B2B negotiations</span>
                    </div>
                </div>
                <div class="line reveal"></div>
                <div class="about-text reveal">
                    <p>Mansurjon Turabov, exporter of dried fruits, nuts and beans from Uzbekistan. As of May, 2023 - he is
                        running an export company "Sultan Agro Impeks" LLC in Uzbekistan.
                        <br><br> During his session of meetings with foreign importers, he always tries to be helpful and
                        efficient. One of his praised qualities, according to potential customers who have met with him, is
                        that after identifying their requirements for a specific product, he suggests other suppliers who
                        are good at providing it. This allows them to compare quotations and product quality with other
                        exporters of agricultural products in Uzbekistan. When meeting with customers in Uzbekistan, he
                        always tries to suggest good competitors in the field so that they can spend their time more
                        constructively and become acquainted with the product market.
                        <br><br> His customers feel tranquility and professionalism when cooperating with him. They always
                        know what they are ordering as they receive an email of agreed terms, a list of ordered products
                        with specifications, and lead time before getting a proforma invoice. If the consignee orders under
                        delivery term DAP/CIF (Incoterms 2020), customers get tracing of the batch on a daily basis. Yet,
                        they will have a four-hour time frame for control checking at the customer's warehouse after custom
                        clearance.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- SLIDER  -->
    <div class="slider">
        <i class="offer_slider-prev material-icons">arrow_back</i>
        <i class="offer_slider-next material-icons">arrow_forward</i>

        <div class="offer_slider-wrapper">
            <div class="offer_slider-inner">
                <!-- 1 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 2 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 3 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 4 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTACT  -->
    <div class="contact" id="contact">
        <div class="contact-main">
            <h1 class="reveal">Contact Me</h1>
            <div class="contact_wrapper ">
                <div class="contact_wrapper-content reveal">
                    <div>
                        <img src="./img/call.svg" alt="">
                        <span>Phone:</span>
                        <h3>+998 99 469 00 07</h3>

                    </div>
                    <div>
                        <img src="./img/mail.svg" alt="">
                        <span>Email:</span>
                        <h3>manager@sultanagro.uz</h3>

                    </div>
                    <div>
                        <img src="./img/location.svg" alt="">
                        <span>Address:</span>
                        <h3>Tashkent, Uzbekistan</h3>

                    </div>
                </div>
                <div class="line reveal "></div>
                <div class="row reveal" id="contact-input">
                    <form class="row-form" action="send_message.php" method="post" submit="https://g.page/r/CRJanpiN_D7pEB0/review">
                        <div class="contact_input-inner">
                            <input name="first_name" class="contact_input" type="text" placeholder="First name.." required>
                            <input name="last_name" class="contact_input" type="text" placeholder="Last name.." required>
                            <input name="phone_number" class="contact_input" type="tel" placeholder="Phone number.." required>

                            <input name="email" class="contact_input" type="email" placeholder="Email.." required>
                        </div>
                        <textarea required name="message" class="contact_input-textarea" id="msg" maxlength="200" placeholder='Message..'></textarea>
                        <button class="submit-msg" name="submit" value="submit" type="submit">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
    <div class="footer">
        <div class="footer-main">
            <a href="https://sultanagro.uz" class="logobrand">Mansurjon Turabov</a>
            <div>
                <div class="contact-me">
                    <span></span>
                    <p>Contact me:</p>
                    <div>
                        <a href="https://t.me/sultanagro_uz"><img src="./img/icons8-telegram-100.png" alt="Telegram"></a>
                        <a href="https://wa.me/998994690007"><img src="./img/icons8-whatsapp-96.png" alt="WhatsApp"></a>
                        <a href="mailto:manager@sultanagro.uz"><img src="./img/icons8-mail-100.png" alt="Email"></a>
                    </div>
                </div>
                <div class="follow-me">
                    <span></span>
                    <p>Follow me:</p>
                    <div>
                        <a class="anim-4" href="https://uz.linkedin.com/in/mansurjon-turobov-5a732bbb"><img src="./img/icons8-in-100.png" alt="Linkedin"></a>
                        <a class="anim-5" href="https://tenchat.ru/manshuri21"><img src="./img/tch.svg" alt="TenChat"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->

        <!-- Modal HTML embedded directly into document -->
        <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal">
            <p>
                <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/d/2mr-mgd-2zr/30min" style="min-width:320px;height:700px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
            </p>
            <a href="#" rel="modal:close">Close</a>
        </div>
        <!-- Modal -->


        <script>
            window.addEventListener('DOMContentLoaded', () => {

                //    =========SLIDER=========   //
                const slides = document.querySelectorAll('.offer_slider'),
                    next = document.querySelector('.offer_slider-next'),
                    prev = document.querySelector('.offer_slider-prev'),
                    slidesWrapper = document.querySelector('.offer_slider-wrapper'),
                    slidesField = document.querySelector('.offer_slider-inner'),
                    width = window.getComputedStyle(slidesWrapper).width;

                let slidIndex = 1;
                let offset = 0;

                slidesField.style.width = 100 * slides.length + '%';
                slidesField.style.display = 'flex'
                slidesField.style.transition = '.5s ease all'
                slidesWrapper.style.overflow = 'hidden'

                slides.forEach(slide => {
                    slide.style.width = width
                })

                next.addEventListener('click', () => {
                    if (offset == +width.slice(0, width.length - 2) * (slides.length - 1)) {
                        offset = 0
                    } else {
                        offset += +width.slice(0, width.length - 2)
                    }

                    slidesField.style.transform = `translateX(-${offset}px)`
                })

                prev.addEventListener('click', () => {
                    if (offset == 0) {
                        offset = +width.slice(0, width.length - 2) * (slides.length - 1)
                    } else {
                        offset -= +width.slice(0, width.length - 2)
                    }
                    slidesField.style.transform = `translateX(-${offset}px)`
                })


                //========= ANIMATION =========//
                window.addEventListener('scroll', reveal);

                function reveal() {
                    var reveals = document.querySelectorAll('.reveal');

                    for (var i = 0; i < reveals.length; i++) {
                        var windowHeigth = window.innerHeight;
                        var revealTop = reveals[i].getBoundingClientRect().top;
                        var revealPoint = 10;

                        if (revealTop < windowHeigth - revealPoint) {
                            reveals[i].classList.add('active')
                        } else {
                            reveals[i].classList.remove('active')
                        }
                    }
                }
                // ======== DROPDOWN MENU ===========//
                const toggleBtn = document.querySelector('.toggle-btn'),
                    toggleBtnIcon = document.querySelector('.toggle-btn i'),
                    dropDownMenu = document.querySelector('.dropdown_menu'),
                    clicklan = document.querySelector('.language'),
                    droplan = document.querySelector('.droplan'),
                    lan2 = document.querySelector('.lan'),
                    lang = document.querySelector('.languages');


                toggleBtn.onclick = function() {
                    dropDownMenu.classList.toggle('open');

                    var isOpen = dropDownMenu.classList.contains('open');

                    toggleBtnIcon.classList = isOpen ?
                        'fa-solid fa-xmark' :
                        'fa-solid fa-bars'


                }

                clicklan.onclick = function() {
                    lang.classList.toggle('drop')
                    var isDrop = lang.classList.contains('drop')

                    isDrop ? lang.style.display = 'grid' : lang.style.display = 'none';
                };

                lan2.onclick = function() {
                    droplan.classList.toggle('drop1');
                    var isDrop1 = droplan.classList.contains('drop1');

                    isDrop1 ? droplan.style.display = 'grid' : droplan.style.display = 'none';
                };
            });
        </script>
</body>

</html>