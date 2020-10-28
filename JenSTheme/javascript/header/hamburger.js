let hamburger = document.getElementsByClassName('hamburger')[0];
var buttons = document.getElementsByClassName('headerbutton');
var icons =  document.getElementsByClassName('nav-icons');
var pannel =  document.createElement("div");



const button_amount = buttons.length;
for(i=0;i<button_amount;i++) {

    pannel.className="pannel";
    pannel.appendChild(buttons[0]);

}
pannel.appendChild(icons[0]);

hamburger.addEventListener('click',function () {



   document.body.appendChild(pannel);
});