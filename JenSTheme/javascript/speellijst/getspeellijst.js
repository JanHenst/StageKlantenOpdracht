    let speellijst = document.getElementsByClassName("speellijst");
    var element=null;



for(i=0;i<speelLijst.length;i++) {
    var today = new Date();

    var datemonthyear = speelLijst[i][0].split('-');
    var currentyear = today.getFullYear();
    var currentmonth = today.getMonth();
    var currentday = today.getDate();

    console.log(datemonthyear);


    var yeartext = document.createTextNode(speelLijst[i][0]);
    var nametext = document.createTextNode(speelLijst[i][1]);
    var locationtext = document.createTextNode(speelLijst[i][2]);
    var pricetext = document.createTextNode("€" + speelLijst[i][3]);
    var urllink = document.createTextNode(speelLijst[i][4]);
    var urltext = document.createTextNode("koop");

    var url = document.createElement("button");
    var price = document.createElement("DIV");
    var Location = document.createElement("DIV");
    var Name = document.createElement("DIV");
    var year = document.createElement("DIV");

    var element = document.createElement("DIV");
    element.appendChild(year);
    element.appendChild(Name);
    element.appendChild(Location);
    element.appendChild(price);
    element.appendChild(url);


    year.appendChild(yeartext);
    Name.appendChild(nametext);
    Location.appendChild(locationtext);
    price.appendChild(pricetext);
    url.appendChild(urltext);

    console.log(datemonthyear[0] + " " + currentyear + " " + datemonthyear[1] + " " + currentmonth + " " + datemonthyear[2] + " " + currentday);

    if (datemonthyear[0] < currentyear||datemonthyear[0] < currentyear&&datemonthyear[1]-1<=currentmonth||datemonthyear[0]<=currentyear&&datemonthyear[1]-1<=currentmonth&&datemonthyear[2]<currentday) {

                speellijst[1].appendChild(element);




}
else {
    speellijst[0].appendChild(element);

}
}

    console.log(speelLijst[0]);


    // datemonthyear[0]<=currentyear&&datemonthyear[1]-1<=currentmonth&&datemonthyear[2]<currentday
