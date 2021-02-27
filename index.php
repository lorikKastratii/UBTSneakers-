<?php include "inc/header.php"; ?>
    <style>
        <?php include "css/style.css"; ?>
    </style>

     <div id="upperDiv">
       <img src="images/header2.jpg" alt=""id="headerImage">
    </div>

    <div id="content">
        <div id="slogan">
            <h2 style="margin-top: 20px;">BUY NOW OR CRY LATER</h2>
            <h5 style="font-size: 26px;">Shoes Speak Louder Than Words</h5>
            <button id="buyNowButton"><a href="sneakers.php">BUY NOW</a></button>


        </div>

        <div id="photo">
            <img src="images/justDoIt.png" alt="NIKE JUST DO IT" style="width: 350; height: 400;">
        </div>
    </div>

    <div id="slider">
        <button class="prew" onclick="prewImage()">&larr;</button>
        
        <div id="box">
            <img src="images/basketball.png" alt="">
        </div>

        <button class="next" onclick="nextImage()">&rarr;</button>
    </div>
    

    <?php include "inc/footer.php" ?>

     

     



<!-- slider script -->
 <script>
        var slider_content = document.getElementById('box');
        var image = ['images/basketball.png','images/sneakerClique.jpg'];
        var index = 0;
        function nextImage(){
            if (index == image.length -1){
                index = 0;
            }else {
                index++;
            }
            slider_content.innerHTML = "<img src=" +image[index] + ">";   
        }

        function prewImage(){
            if (Math.abs(index) == image.length - 1){
                index--;
            }else if (index == 0){
                index = image.length-1;
            }else {
                index--;
            }
            slider_content.innerHTML = "<img src=" +image[Math.abs(index)] + ">";
        }
        // setInterval(nextImage,3000);      
    </script> 
  
