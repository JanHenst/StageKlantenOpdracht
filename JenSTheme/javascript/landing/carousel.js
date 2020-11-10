let carousel = document.getElementsByClassName('carousel');
let carouselContainer =   document.getElementsByClassName('carouselContainer')[0];
let arrowL = document.getElementsByClassName('arrowL')[0];
let arrowR = document.getElementsByClassName('arrowR')[0];


var images = files;
var currentPic;
carouselF(images,0);


function carouselF(imageArray,pictureNum,next) {
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
            currentPic =imageArray.length-1;
        }
        if(currentPic ===imageArray.length){
            currentPic=0;
        }

    }
    else{
        currentPic =pictureNum;
        carouselDiv=0;
    }

    carousel[carouselDiv].style.backgroundImage="url('"+tempuri+"/plaatjes/carousel/carouselContent/"+imageArray[currentPic]+"')";


    //add a aniamtion class before here
    if(carouselDiv === 1){
        carousel[0].remove();
    }
}
arrowL.addEventListener('click',function() {

    carouselF(images, null, false)
});

arrowR.addEventListener('click',function() {
    carouselF(images, null, true)
});
console.log(files[0]);
