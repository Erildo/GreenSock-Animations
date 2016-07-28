<body>
  <div class="container center">
    <div class="partBlue">
      <div class="blue">
        <div class="blueButton center">
          <p class="HeadBlue">BLUE</p>
          <span class="more">more</span>
        </div>

      </div>
      <div class="page pageLinks">
        <p class="head02 center">more Copy</p>
        <a class="backBlue center">back</a>
      </div>
    </div>

  </div>

</body>
<style>
body {
    width: 100%;
    height: 100%;
	margin: 0;
	color:white;
	font-size:50px;
	text-align: center;
	overflow: hidden;
}
*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }

.container {
	position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 88%;
    z-index: -1;
    background-color: white;
}
.page {
	position: absolute;
	top: 0;
	width: 300%;
	height: 100%;
	font-size: 1.4em;
	z-index: 0;
}
.head, .head02, .blueButton, .greenButton {
	position: absolute;
	top: 50%;
    left: 50%;
    width: 100%;
	line-height: 28px;
	cursor:pointer;
}
.more {
	font-size: 16px;
}
/* ===== BLUE PART ===========*/
.partBlue{
  position:relative;
  height: 100%;
  width: 50%;
  left: 0%;
  float:left;
  z-index:1;
}
.pageLinks {
	left: -300%;
	background: #6D6D90;
}
.backBlue {
	position: absolute;
    bottom: 3%;
	left: 50%;
    width: 50px;
    height: 50px;
	font-size: 22px;
    cursor: pointer;
	display: none;
}
/* ===== GREEN PART ===========*/
.partGreen{
	position: relative;
    width: 50%;
    height: 100%;
    left: 50%;
	z-index:1;
    display: block;
}
.pageRechts {
	left: 100%;
	background: #6D6D90;
}
.backGreen {
	position: absolute;
    bottom: 3%;
	left: 50%;
    width: 50px;
    height: 50px;
	font-size: 22px;
    cursor: pointer;
	display: none;
}
.blue, .green {
	position: relative;
    top: 0;
	width: 100%;
	height: 100%;
}
.blue{
	left: 0%;
	background:blue;
}
.green{
	left: 0%;
	background:green;
}

@media (max-width: 480px) {
.partBlue{
	position: relative;
    height: 50%;
    width: 100%;
	left: 0%;
	font-size: 24px;
    float: left;
}
.partGreen{
	position:absolute;
	top:50%;
	height: 50%;
    width: 100%;
	left: 0%;
	font-size: 24px;
	left: 0%;
}


}
</style>
<script>
window.onload = function() {

	var size = $('.partBlue').css("font-size");
	
	
//  =============  zentrieren  ==========================	
	TweenLite.set(".center", {xPercent:-50, yPercent:-50, force3D:true});

//  =============  BLUE  ==========================	
  
  var currentTimeline = new TimelineLite()
  
  function getBlue() {
    console.log("getBlue")
    currentTimeline.clear();
		currentTimeline.to(".partBlue", 0.5, {zIndex: "10"})
		.to(".partBlue", 1, {left: "75%", width: "25%", zIndex: "10"})
		.to(".HeadBlue", 1, {rotation: -90, scale: 0.8, cursor: "none", immediateRender:false},"-=1")
		.to(".backBlue", 1, {display: "block"}).play();
  }
	

function getBlueMobile() {
    currentTimeline.clear();
		currentTimeline.set(".partBlue", {zIndex: "10"})
		.to(".partBlue", 1, {left: "100%", height: "100%"})
		.to(".pageLinks", 1, {left: "-100%", width: "100%"})
		.to(".backBlue", 1, {display: "block"})
}


//  =============  Buttons  ==========================	 
	$( window ).resize(function() {
	});
	
	function buttons(){
		$('.blueButton').on('click', function(){
			if (size == "24px" ){
				getBlueMobile();
			}else {
				getBlue();
			}
		});
		$(".backBlue").on("click", function() {
			if (size == "24px" ){
				//getBlueMobileRevers();
				//TweenMax.set(".partBlue",{clearProps:'all'});
			}else {
				//getBlueRevers();
			}
      
      currentTimeline.reverse();
      
		}); 
	
	};

	buttons();
	$( window ).resize(function() {
		buttons();
		TweenMax.set(".partBlue",{clearProps:'all'});
	});
}
</script>