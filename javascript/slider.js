        var slider_content = document.getElementById('box');
        
        var image = ['../images/basketball.png','../images/sneakerClique.jpg','../images/sneakerhead.jpg'];

        var index = 0;

        function nextImage(){
            if (index == image.length -1){
                index = 0;
            }
            else {
                index++;
            }

            slider_content.innerHTML = "<img src=" +image[index] + ">";
            
        }

        function prewImage(){
            if (Math.abs(index) == image.length - 1){
                index--;
            }
            else if (index == 0){
                index = 2;
            }
            else {
                index--;
            }
            slider_content.innerHTML = "<img src=" +image[Math.abs(index)] + ">";
        }


        // setInterval(nextImage,3000);
        