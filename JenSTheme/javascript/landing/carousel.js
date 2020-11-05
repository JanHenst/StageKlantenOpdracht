let carousel = document.getElementsByClassName('carousel');
let carouselContainer =   document.getElementsByClassName('carouselContainer')[0];
let arrowL = document.getElementsByClassName('arrowL')[0];
let arrowR = document.getElementsByClassName('arrowR')[0];


    var images =["https://i.kym-cdn.com/photos/images/newsfeed/001/865/673/cc9.png","https://www.ma-web.nl/media/filer_public_thumbnails/filer_public/ea/29/ea29903f-3fd9-461e-92f0-5af745d6dc19/ma_education_contact_header.png__910x440_q85_box-0,0,1280,401_crop_subsampling-2_upscale.png"];
var currentPic;
carouselF(images,0);


function carouselF(immageArray,pictureNum,next) {
var carouselDiv  = document.createElement("DIV");
carouselDiv.className=  'carousel';

    if(next != null) {
        if (next === true) {
            currentPic++;
            carouselContainer.appendChild(carouselDiv);

            carouselDiv=1;
        }
        if(next===false) {
            currentPic--;
            carouselContainer.insertBefore(carouselDiv, carousel[0]);

            carouselDiv=1;

        }
        if (currentPic ===-1){
            currentPic =immageArray.length-1;
        }
        if(currentPic ===immageArray.length){
            currentPic=0;
        }

    }
    else{
        currentPic =pictureNum;
        carouselDiv=0;
    }

    carousel[carouselDiv].style.backgroundImage="url('"+immageArray[currentPic]+"')";
}
arrowL.addEventListener('click',function() {
    console.log('test');

    carouselF(images, null, false)
});

arrowR.addEventListener('click',function() {
console.log('test');
    carouselF(images, null, true)
});