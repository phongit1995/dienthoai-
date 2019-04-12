<script language="javascript">
	var arrImg = new Array();
	arrImg[0] = "images/baner4.png";
	arrImg[1] = "images/baner5.png";
	arrImg[2] = "images/banner3.png";
	arrImg[3] = "images/banner.png";
	arrImg[4] = "images/banner1.png";
	arrImg[5] = "images/banner2.png";

	var n=0;
	setInterval(function(){
		document.getElementById("slide").setAttribute("src",arrImg[n]);
		n++;
		if(n==arrImg.length-1)
			n=0;
	},2000);
</script>
<div class="header" id="slideshow">
	<img src="images/banner3.png" alt="" id="slide">
</div>