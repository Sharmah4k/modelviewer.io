<?php 
if(isset($_GET['car'])){
$car=$_GET['car'];
}
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <script
      type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Quicksand&family=Raleway&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-tabledit@1.0.0/jquery.tabledit.min.js"></script>
  </head>
  <body id="Parentbody" >
    <model-viewer
      id="lazy-load"
      disable-zoom
      skybox-image=""
      bounds="tight"
      reveal="auto"
      loading="eager"
      alt=""
      camera-orbit="auto"
      min-camera-orbit="auto"
      max-camera-orbit="auto"
      field-of-view="30deg"  
      max-field-of-view="40deg"
      min-field-of-view="25deg"
      poster=""
      with-credentials="true"
      animation-name=""
      autoplay=""
      environment-image="../assets/spruit_sunrise_4k.hdr"
      src="https://cdn.glitch.global/1c0e7739-76c0-4e19-933f-f75049828a13/subaruBrz.glb?v=1657471842492"
      preload
      camera-controls
      auto-rotate-delay="500"
      rotation-per-second="45deg"
      touch-action="none"
      shadow-intensity="1"
      style=" height: 100vh;width: 100vw; background: pink; background-size: cover;"> 

      <div class="d-flex" style="width:0; ">
      <div class="controls"id="animation_toggle" style="width: 180 px;display: none;">
        <div style="text-size: 24sp;background-color:white;" class="btn btn-alert">
          Animations:
          <select id="variant"></select>
        </div>
      </div>

     <div class="d-flex" style="width: 0;">
      <button id="pause"class="btn btn-outline-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;display: none;"><i class="fa fa-pause-circle-o"></i></button>
      <button id="play" class="btn btn-outline-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;display: none;">
       <i class="fa fa-play"></i>
      </button>
      <button id="pan" class="btn btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;"><i class="fa fa-hand-paper-o"></i></button>
       <button id="disablepan" class="btn btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white; display: none;"><i class="fa fa-hand-rock-o"></i></button>
       <button id="zoom" class="btn  btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;"><i class="fa fa-search-plus"></i></button>
       <button id="disablezoom" class="btn  btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white; display: none;"><i class="fa fa-search-minus"></i></button>
        <button id="rotate" class="btn btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;"><i class="fa fa-refresh"></i></button>
        <button id="disablerotate" class="btn btn-alert border" style="height:40px;width:40px;margin: 2px;background-color:white;display: none;"><i class="fa fa-stop-circle-o"></i></i></button>


      <button
      id="setting1"
        class="btn btn-alert border"
        style="height:40px;width:40px;margin: 2px;background-color:white;"
        data-toggle="collapse"
        data-target="#demo"
      >
      <i class="fa fa-sliders"></i>
      </button>
      <button
       id="setting2"
        class="btn btn-alert border"
        style="height:40px;width:40px;margin: 2px;background-color:white;"
        data-toggle="collapse"
        data-target="#demo2"
      >
       <i class="fa fa-paint-brush"></i>
      </button>
      <button id="hide_btn" style="height:40px;width:40px;margin: 2px;">hide</button>
     
       </div>
</div>
<button class="btn btn-alert hide" id="back_btn" style="display: none;background-color:white;margin: 5px;float: right;"><i class="fa fa-chevron-left"></i></button>

    <div style=" width: 0;" id="demo" class="controls3  collapse ">
        <div >
          <p class="btn btn-alert border" style="margin:0;background-color:white;font-size: 12px;">
            Metalness:<span id="metalness-value"></span>
          </p>
          <input style="margin:0;"  class="btn-outline-primary" 
            id="metalness"
            type="range"
            min="0"
            max="1"
            step="0.02"
            value="0.1"
          />
        </div>
        <div >
          <p class="btn btn-alert border"  style="margin:0;background-color: white;font-size: 12px;"  >Roughness:<span id="roughness-value"></span></p>
          <input class="btn-outline-primary"
            id="roughness"
            type="range"
            min="0"
            max="1"
            step="0.01"
            value="0"
          />
        </div>
        <div class="slidecontainer ">
          <p class="btn btn-alert border" style="margin:0;background-color: white;font-size: 12px;">Exposure:<span id="brightness-value"></span></p>
          <input class="btn-outline-primary"
            id="brightness"
            type="range"
            max="10"
            step="0.02"
            min="1"
            value="1"
          />
        </div>
        <div class="slidecontainer ">
          <p class="btn btn-alert border" style="margin:0;background-color: white;font-size: 12px;">shadow:<span id="shadow-value"></span></p>
          <input class="btn-outline-primary"
            style=""
            id="shadow"
            type="range"
            max="30"
            step="1"
            min="1"
            value="3"
          />
        </div>
           <div class="slidecontainer ">
          <p class="btn btn-alert border"  style="margin:0;background-color: white;font-size: 12px;">Fov:<span id="fov-value"></span></p>
          <input class="btn-outline-primary"
            style=""
            id="fov"
            type="range"
            max="60"
            step="1"
            min="20"
            value="30"
          />
        </div>
             </div>
         
         <div id="demo2" class="collapse" style="width: 0;">
      
    <div class="slidecontainer ">
          <p class="btn btn-alert border"  style="margin:0;background-color: white;font-size: 12px;">autorotatespeed:<span id="Arotate-value"></span></p>
          <input class="btn-outline-primary"
            style=""
            id="Arotate"
            type="range"
            max="200"
            step="1"
            min="20"
            value="30"
          />
        </div>
         <button id="slide-showx"  name="showslide" onclick="runcolor()"><i class="fa fa-film"></i></button>
          <button id="slide-show-stop"  name="showslide stop" onclick="stopColor()" style="display:none;"><i class="fa fa-desktop"></i></button>

        <div class="d-flex mt-2">
          <img
            id="Bg1"
            class="border"
            height="25px"
            width="25px"
            style="background-color: yellow"
          />
          <img
            id="Bg2"
            class="border"
            height="25px"
            width="25px"
            style="background-color: white"
          />
          <img
            id="Bg3"
            class="border"
            height="25px"
            width="25px"
            style="background-color: orange"
          />
          <img
            id="Bg4"
            class="border"
            height="25px"
            width="25px"
            style="background-color: pink"
          />
          <img
            id="Bg5"
            class="border"
            height="25px"
            width="25px"
            style="background-color: blue"
          />
          <img
            id="Bg6"
            class="border"
            height="25px"
            width="25px"
            style="background-color: green"
          />
          <img
            id="Bg7"
            class="border"
            height="25px"
            width="25px"
            style="background-color: red"
          />
          <img
            id="Bg8"
            class="border"
            height="25px"
            width="25px"
            style="background-color: black"
          />
           
        </div>
     
        <div class="d-flex">
     <img id="carbg1" class="border" height="50px" width="50px" style="background-image: url('../assets/carbackground/thumbnails/3306NewThumb.jpg') ; margin:2dp"/>
     <img id="carbg2" class="border" height="50px" width="50px" style="background-image: url('../assets/carbackground/thumbnails/carbg2thumb.jpg') ; margin:2dp"/>
     <img id="carbg3" class="border" height="50px" width="50px" style="background-image: url('../assets/carbackground/thumbnails/carbg3thumb.jpg') ; margin:2dp"/>
     <img id="carbg4" class="border" height="50px" width="50px" style="background-image: url('../assets/carbackground/thumbnails/carbg4thumb.jpg') ; margin:2dp"/>
        </div>
         </div>
    </model-viewer>

     <style type="text/css">
      model-viewer {
  --progress-bar-color: yellow;
}

    </style>

    <!----  <style>
    #lazy-load-poster {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background-image: url("https://cdn.glitch.com/a9975ea6-8949-4bab-addb-8a95021dc2da%2Fillustration.svg?v=1618177344016");
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
    }
    #button-load {
      background-image: url("https://cdn.glitch.com/a9975ea6-8949-4bab-addb-8a95021dc2da%2Fillustration.svg?v=1618177344016");
      background-repeat: no-repeat;
      background-size: 24px 24px;
      background-position: 6% 50%;
      background-color: #000;
      color: white;
      cursor: pointer;
      border-radius: 6px;
      display: inline-block;
      padding: 10px 18px 9px 40px;
      font-weight: 500;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.2), 0 0 4px rgba(0, 0, 0, 0.25);
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate3d(-50%, -50%, 0);
      z-index: 100;
    }
  </style>--->

    <script>
      // customElements.get("model-viewer").modelCacheSize = 10;
      // modelViewer.constructor.modelCacheSize = 10;
      $(document).ready(function(){
      const modelViewerAnims = document.querySelector("#lazy-load");
      const select = document.querySelector("#variant");

      modelViewerAnims.addEventListener("load", () => {
        const names = modelViewerAnims.availableAnimations;
        for (const name of names) {
          const option = document.createElement("option");
          option.value = name;
          option.textContent = name;
          select.appendChild(option);
        }
        // Adds a default option.
        const option = document.createElement("option");
        option.value = "default";
        option.textContent = "Default";
        select.appendChild(option);
      });

      select.addEventListener("input", (event) => {
        modelViewerAnims.animationName =
          event.target.value === "default" ? null : event.target.value;
         
      });
      if(modelViewerAnims.availableAnimations =="default"){
        $('#pause').hide();
      }

    });
    </script>


<script type="module">


const modelViewer = document.querySelector("model-viewer#lazy-load");

modelViewer.addEventListener("load", () => {
  const colorArray=[0,1,255];
  const changeColor = (event) => {
    var randomNumber=Math.floor(Math.random()*colorArray.length);
    const material = modelViewer.materialFromPoint(event.clientX, event.clientY);
    if (material != null) {
     
      

      material.pbrMetallicRoughness.
        setBaseColorFactor([Math.floor(Math.random()*colorArray.length),Math.floor(Math.random()*colorArray.length),Math.floor(Math.random()*colorArray.length)]);
    }

  };
  modelViewer.addEventListener("click", changeColor);
});

</script>




   <!--- <script>
      const modelViewerColor = document.querySelector("model-viewer#lazy-load");

      document
        .querySelector("#color-controls")
        .addEventListener("click", (event) => {
          const colorString = event.target.dataset.color;

          if (!colorString) {
            return;
          }

          const color = colorString
            .split(",")
            .map((numberString) => parseFloat(numberString));

          console.log("Changing color to: ", color);
          const [material] = modelViewerColor.model.materials;
          material.pbrMetallicRoughness.setBaseColorFactor(color);
        });
    </script> --->

   
    <script>
      const modelViewerParameters = document.querySelector(
        "model-viewer#lazy-load"
      );

      modelViewerParameters.addEventListener("load", (ev) => {
        let material = modelViewerParameters.model.materials[0];

        let metalnessDisplay = document.querySelector("#metalness-value");
        let roughnessDisplay = document.querySelector("#roughness-value");

        metalnessDisplay.textContent =
          material.pbrMetallicRoughness.metallicFactor;
        roughnessDisplay.textContent =
          material.pbrMetallicRoughness.roughnessFactor;

        // Defaults to gold
        material.pbrMetallicRoughness.setBaseColorFactor([
          0.7294, 0.5333, 0.0392,
        ]);

        document
          .querySelector("#metalness")
          .addEventListener("input", (event) => {
            material.pbrMetallicRoughness.setMetallicFactor(event.target.value);
            metalnessDisplay.textContent =parseFloat(event.target.value).toFixed(2);
          });

        document
          .querySelector("#roughness")
          .addEventListener("input", (event) => {
            material.pbrMetallicRoughness.setRoughnessFactor(
              event.target.value
            );
            roughnessDisplay.textContent = parseFloat(event.target.value).toFixed(2);
          });
      });
    </script>

    <script>
      var slider = document.getElementById("brightness");
      var output = document.getElementById("brightness-value");
      var modelV = document.getElementById("lazy-load");
      output.innerHTML = slider.value;

      slider.oninput = function () {
        output.innerHTML =parseFloat(this.value).toFixed(2);
        var intg = parseFloat(this.value);
        modelV.exposure = intg;
      };
    </script>
    <script>
      var slider1 = document.getElementById("shadow");
      var output1 = document.getElementById("shadow-value");
      var modelV1 = document.getElementById("lazy-load");
      output1.innerHTML = slider1.value;

      slider1.oninput = function () {
        output1.innerHTML = parseFloat(this.value).toFixed(2);
        var intg1 = parseFloat(this.value);
        modelV1.shadowIntensity = intg1;
      };
    </script>


     <script>
      var slider2 = document.getElementById("fov");
      var output2 = document.getElementById("fov-value");
      var modelV2 = document.getElementById("lazy-load");
      output2.innerHTML = slider2.value;

      slider2.oninput = function () {
        output2.innerHTML = this.value;
        var intg2 = parseInt(this.value);
        modelV2.setAttribute("field-of-view",intg2+"deg");
      };
    </script>

  <script>
      var slider3 = document.getElementById("Arotate");
      var output3 = document.getElementById("Arotate-value");
      var modelV3 = document.getElementById("lazy-load");
      output3.innerHTML = slider3.value;

      slider3.oninput = function () {
        output3.innerHTML = this.value;
        var intg3 = parseInt(this.value);
        modelV3.setAttribute("rotation-per-second",intg3+"deg");
      };
    </script>

    <script>
      var modelPause = document.getElementById("lazy-load");
      $("#pause").click(function () {
        modelPause.pause();
        $("#pause").hide();
        $("#play").show();
      });
    </script>
    <script>
      var modelPlay = document.getElementById("lazy-load");
      $("#play").click(function () {
        modelPlay.play();
        $("#play").hide();
        $("#pause").show();
      });
    </script>
    <script>
      $(document).ready(function(){
      var modelBg = document.getElementById("lazy-load");
      var parentBody = document.getElementById("Parentbody");
      $("#Bg1").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:yellow;";
           modelBg.skyboxImage="";
           modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
           modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");

      });
      $("#Bg2").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:white;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg3").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:orange;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg4").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:pink;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg5").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:blue;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg6").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:green;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
           modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg7").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:red;";
           modelBg.skyboxImage="";
              modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
      $("#Bg8").click(function () {
        modelBg.style =
          "height: 100vh;width: 100vw; display: block; background:black;";
        parentBody.style = "text-color:black";
         modelBg.skyboxImage="";
            modelBg.maxCameraOrbit="auto";
           modelBg.cameraOrbit="auto";
           modelBg.minCameraOrbit="auto";
           modelBg.removeAttribute("disable-zoom");
            modelBg.removeAttribute("enable-pan");
           modelBg.setAttribute("enable-zoom","");
      });
       $("#hdr1").click(function () {
        modelBg.skyboxImage="assets/spruit_sunrise_4k.hdr";
       //modelBg.skyboxImage="spruit_sunrise_4k.hdr";
         modelBg.style =
          "height: 100vh;width: 100vw; display: block;";
      });


        $("#hdr2").click(function () {
        modelBg.skyboxImage="assets/zavelstein_4k.hdr";
       //modelBg.skyboxImage="spruit_sunrise_4k.hdr";
         modelBg.style =
          "height: 100vh;width: 100vw; display: block;";
      });

        $('#setting1').click(function(){
         $('#demo2').addClass('collapse');
         $('#demo2').removeClass('show');
          });

        $('#setting2').click(function(){
         $('#demo').addClass('collapse');
         $('#demo').removeClass('show');
          });

        $('#hide_btn').click(function(){
          $('#animation_toggle').hide();
          $('#pause').hide();
          $('#play').hide();
          $('#setting1').hide();
           $('#setting2').hide();
           $('#pan').hide();
           $('#disablepan').hide();
           $('#zoom').hide();
           $('#disablezoom').hide();
           $('#rotate').hide();
           $('#disablerotate').hide();
            $('#hide_btn').hide();
             $('#demo').addClass('collapse');
             $('#demo').removeClass('show');
             $('#demo2').addClass('collapse');
             $('#demo2').removeClass('show');
             $('#back_btn').show();
             modelBg.removeAttribute("enable-pan");
             modelBg.setAttribute("disable-zoom","");
              modelBg.setAttribute("touch-action","none");
           

        });

            $('#back_btn').click(function(){
          $('#animation_toggle').show();
          $('#pause').show();
          $('#play').hide();
          $('#setting1').show();
           $('#setting2').show();
            $('#hide_btn').show();
             $('#demo').addClass('collapse');
             $('#demo').removeClass('show');
             $('#demo2').addClass('collapse');
             $('#demo2').removeClass('show');
            $('#back_btn').hide();
                $('#pan').show();
            $('#zoom').show();
             $('#rotate').show();
        });
            $('#carbg1').click(function(){
              modelBg.style=" height: 100vh;width: 100vw;background-image:url('../assets/carbackground/3306New.jpg');background-size: cover;";
              modelBg.maxCameraOrbit="auto 80deg auto";
      modelBg.cameraOrbit="auto 80deg auto";
       modelBg.minCameraOrbit="auto 80deg auto";
       modelBg.removeAttribute("enable-pan");
       modelBg.setAttribute("disable-zoom","");
       modelBg.setAttribute("enviornment-image","../assets/carbackground/3306New.jpg");

            });
              $('#carbg2').click(function(){
              modelBg.style=" height: 100vh;width: 100vw;background-image:url('../assets/carbackground/carbg2.jpg');background-size: cover;";
              modelBg.maxCameraOrbit="auto 80deg auto";
      modelBg.cameraOrbit="auto 80deg auto";
       modelBg.minCameraOrbit="auto 80deg auto";
       modelBg.removeAttribute("enable-pan");
       modelBg.setAttribute("disable-zoom","");
       modelBg.setAttribute("enviornment-image","../assets/carbackground/carbg2.jpg");

            });
                 $('#carbg3').click(function(){
              modelBg.style=" height: 100vh;width: 100vw;background-image:url('../assets/carbackground/carbg3New.jpg');background-size: cover;";
              modelBg.maxCameraOrbit="auto 80deg auto";
      modelBg.cameraOrbit="auto 80deg auto";
       modelBg.minCameraOrbit="auto 80deg auto";
       modelBg.removeAttribute("enable-pan");
       modelBg.setAttribute("disable-zoom","");
        modelBg.setAttribute("enviornment-image","../assets/carbackground/carbg3New.jpg");

            });
                    $('#carbg4').click(function(){
              modelBg.style=" height: 100vh;width: 100vw;background-image:url('../assets/carbackground/carbg4New.jpg');background-size: cover;";
              modelBg.maxCameraOrbit="auto 80deg auto";
      modelBg.cameraOrbit="auto 80deg auto";
       modelBg.minCameraOrbit="auto 80deg auto";
       modelBg.removeAttribute("enable-pan");
       modelBg.setAttribute("disable-zoom","");
       modelBg.setAttribute("enviornment-image","../assets/carbackground/carbg4New.jpg");

            });

          $('#pan').click(function (){
       modelBg.setAttribute("enable-pan","");
       modelBg.setAttribute("touch-action","pan-y");
       modelBg.removeAttribute("disable-zoom");
       $('#pan').hide();
       $('#disablepan').show();
     });
         $('#zoom').click(function (){
       modelBg.removeAttribute("disable-zoom");
        $('#zoom').hide();
       $('#disablezoom').show();
     });
             $('#rotate').click(function (){
       modelBg.setAttribute("auto-rotate","");
        $('#rotate').hide();
       $('#disablerotate').show();
     });

  
     $('#disablepan').click(function (){
       modelBg.removeAttribute('enable-pan');
        modelBg.setAttribute("touch-action","none");
        modelBg.setAttribute("disable-zoom","");
        $('#zoom').show();
        $('#disablezoom').hide();
       $('#disablepan').hide();
       $('#pan').show();
     });
         $('#disablezoom').click(function (){
       modelBg.setAttribute("disable-zoom","");
        $('#disablezoom').hide();
       $('#zoom').show();
     });
             $('#disablerotate').click(function (){
       modelBg.removeAttribute("auto-rotate");
        $('#disablerotate').hide();
       $('#rotate').show();
     });
           


      });
      
    </script>
<script>
   var modelBg = document.getElementById("lazy-load");
function runcolor(){
   modelBg.style =
          "height: 100vh;width: 100vw; display: block; padding: 10px;background:pink;";
  $('#slide-showx').hide();
  $('#slide-show-stop').show();
myInterval = setInterval(setColor, 1000);
  var i=0;
function setColor() {
  let x =document.getElementById("lazy-load");

  var color = ["black", "blue", "brown", "green","yellow","pink","red","orange"];
  x.style.backgroundColor = color[i];
  i = (i + 1) % color.length;
  
}
}
 
function stopColor() {
   $('#slide-showx').show();
  $('#slide-show-stop').hide();
  clearInterval(myInterval);
}
</script>



    <script>
const ModelViewerElement = customElements.get('model-viewer');
ModelViewerElement.dracoDecoderLocation = 'http://example.com/location/of/draco/decoder/files/';
</script>
<script >
  $(document).ready(function () {
     var modelV = document.getElementById("lazy-load");
            var car = "<?php echo $car; ?>" ;
           
            modelV.setAttribute("src",car);
              
           });
</script>
  </body>
</html>
