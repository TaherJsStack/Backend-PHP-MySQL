<?php

					// To Show NaeBar
		$pageTitle='Trip';			// Show TiTel Page
		include 'init.php';

///========================== Start The Page ================================================================>
?>

<section class="baralax-trip" id="baralax-trip" >
	<div class="top">
		<div class="container">
			<h1><span><strong>ticket.info</strong></span> is simple Way</h1>

		</div>
	</div>
	<div class="under">

	</div>
</section>

<section class="container">
	<h1>Click into button Show All postes</h1>
</section>
<section id="firstSection"> </section>
<section id="therdSection" class="container">

<button class="btn btn-danger btn-lg" onclick='box("h3txt"," p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode","layout/img/latestNews/lts2.jpg");'>click</button>

<button class="btn btn-danger btn-lg" onclick='box("h3txt"," p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode","layout/img/latestNews/lts3.jpg");'>click Other</button>

<button class="btn btn-danger btn-lg" onclick='box("h3txt"," p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode p createTextNode","layout/img/latestNews/lts4.jpg");'>click other 3</button>

</section>


<!--///========= javascript ===========================>-->

<script type="text/javascript">
		
		
/////////////////////
function box(h3txt,createTextNode,imgcrc){
	var  firstSection=document.getElementById('firstSection'),
		 firstSectionH=document.createElement('h1'),
		 fdiv=document.createElement('div'),
		 fdiv2=document.createElement('div'),
		 fdiv3=document.createElement('div'),
		 fdivautoImg=document.createElement('div'),		 
		 fh3=document.createElement('h3'),
		 fh3txt=document.createTextNode(h3txt),
		 fp=document.createElement('p'),
		 fptxt=document.createTextNode(createTextNode),
		 fimg=document.createElement('img'),
		 fspan=document.createElement('span');
	
	firstSection.setAttribute('class','padding container');
	firstSection.appendChild(firstSectionH);
	firstSection.appendChild(fdiv);
	fdiv.setAttribute('class','row');
	
    fdiv.appendChild(fh3);
	fh3.appendChild(fh3txt);	
	
	fdiv.appendChild(fdiv2);
	fdiv.appendChild(fdiv3);
	fdiv2.setAttribute('class','col-md-3');
	
	fdiv2.appendChild(fdivautoImg);
	fdivautoImg.appendChild(fimg);
	fimg.setAttribute('src',imgcrc);
	fimg.setAttribute('width','100%');

	////////////////////////////////////
	
	var autoImg=document.getElementById('autoImg'),
		imgarray=["layout/img/trip/trip1(0).jpg","layout/img/trip/trip1(1).gif","layout/img/trip/trip1(2).jpg","layout/img/latestNews/lts4.jpg"];
	var autonum=0;
	
	
	function changimg(){
		//autoImg.appendChild(fimg);
		fimg.setAttribute('src',imgarray[autonum]);
		autonum++;
		if(autonum >= imgarray.length){
		   autonum=0;
		   }
	}
	
	setInterval(changimg,4000);

	
	
	///////////////////////
	
	
	fdivautoImg.setAttribute('id','autoImg');

	fdiv3.setAttribute('class','col-md-9');
	fdiv3.appendChild(fp);	
	fp.appendChild(fptxt);



	
		


}
////////////////
/*


function box(h3txt,createTextNode,imgcrc){
	var  firstSection=document.getElementById('firstSection'),
		 firstSectionH=document.createElement('h1'),
		 fdiv=document.createElement('div'),
		 fdiv2=document.createElement('div'),
		 fdiv3=document.createElement('div'),
		 fdivautoImg=document.createElement('div'),		 
		 fh3=document.createElement('h3'),
		 fh3txt=document.createTextNode(h3txt),
		 fp=document.createElement('p'),
		 fptxt=document.createTextNode(createTextNode),
		 fimg=document.createElement('img'),
		 fspan=document.createElement('span');
	
	firstSection.setAttribute('class','padding container');
	firstSection.appendChild(firstSectionH);
	firstSection.appendChild(fdiv);
	fdiv.setAttribute('class','row');
	
    fdiv.appendChild(fh3);
	fh3.appendChild(fh3txt);	
	
	fdiv.appendChild(fdiv2);
	fdiv.appendChild(fdiv3);
	fdiv2.setAttribute('class','col-md-3');
	
	fdiv2.appendChild(fdivautoImg);
	fdivautoImg.appendChild(fimg);
	fimg.setAttribute('src',imgcrc);
	fdivautoImg.setAttribute('id','autoImg');

	fdiv3.setAttribute('class','col-md-9');
	fdiv3.appendChild(fp);	
	fp.appendChild(fptxt);





*/


</script>
<!--///========= javascript ===========================>-->


<?php
///========================== Footer Of The Page ================================================================>

include 'include/templet/footer.php';




