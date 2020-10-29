let hamburger = document.getElementsByClassName('hamburger')[0];
var buttons = document.getElementsByClassName('headerbutton');
var icons =  document.getElementsByClassName('nav-icons');
var pannel =  document.createElement("div");



const button_amount = buttons.length;
for(i=0;i<button_amount;i++) {

    pannel.className="pannel";
    pannel.classList.add('no-pannel');
    pannel.appendChild(buttons[0]);

}
pannel.appendChild(icons[0]);

function panelMake() {
    document.body.appendChild(pannel);
}

hamburger.addEventListener('click',function () {
    pannel.classList.remove('no-pannel');
});