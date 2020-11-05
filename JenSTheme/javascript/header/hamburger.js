let hamburger = document.getElementsByClassName('hamburger')[0];
var buttons = document.getElementsByClassName('headerbutton');
var icons =  document.getElementsByClassName('nav-icons');
var pannel =  document.createElement("div");
var PannelBool = true;

// body.onload(panelMake());

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



    if(PannelBool===true) {
        pannel.classList.remove('no-pannel');
        PannelBool=false;
    }
    else if(PannelBool===false){
        pannel.classList.add('no-pannel');
        PannelBool=true;
    }
    console.log("Pannel is"+PannelBool);

});