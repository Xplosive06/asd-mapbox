mapboxgl.accessToken =
  "pk.eyJ1IjoiYXNkZ3JvdXAiLCJhIjoiY2s0ZHdydDJiMDczejNmcXFldWhpd2p4NyJ9.T-LD9nXeLuPGniTskCnt3A";
let start = [2.3514616, 48.8566969];
let end = [2.3514616, 48.8566969];
let map = new mapboxgl.Map({
  container: "map", //Get the map's div
  style: "mapbox://styles/asdgroup/ck4mxkvi7879f1cmizm3bu9hv", //Get the ASD style on MapBox
  center: start, //Start on Europe
  zoom: 1.8, //Initial zoom
  interactive: false //Disabled user's interactions on the map
});

const countries = {
  //Countries list test
  france: { long: 2.3514616, lat: 48.8566969 },
  allemagne: { long: 2.3514616, lat: 48.8566969 },
  paysbas: { long: 2.3514616, lat: 48.8566969 },
  hongkong: { long: 114.1849161, lat: 22.350627 },
  dubai: { long: 55.1887609, lat: 25.0750095 },
  indonesia: { long: 117.8902853, lat: -2.4833826 },
  maroc: { long: -7.3362482, lat: 31.1728205 },
  canada: { long: -107.9917071, lat: 61.0666922 },
  states: { long: -100.33914717538791, lat: 39.891794760631576 }
};

let listOfServices = {
  //Have to get the list of services of the choosen service
  fiscal: ["Mandataire Fiscal", "Domiciliation"],
  social: [
    "Formation DEB",
    "Numéro EORI",
    "Déclaration d'Échanges de Biens / Intrastat"
  ],
  douane: ["Détachement de Travailleurs Étrangers / SIPSI"]
};

const countriesList = document.getElementById("countrieslist");
const servicesOptions = document.getElementById("servicesoptions");
const servicesList = document.getElementById("serviceslist");
const tabsList = document.getElementsByClassName("tab");
const tabs = document.getElementsByClassName("tab");

countriesList.addEventListener("change", function() {
  let val = this.value;
  let selectedCountry = document.getElementById("selected-country");

  selectedCountry.innerHTML = this.value;

  end = [countries[val].long, countries[val].lat];

  map.flyTo({
    // These options control the ending camera position: centered at
    // the end, at zoom level 4, and north up.
    center: end,
    zoom: 4,
    bearing: 0,

    // These options control the flight curve, making it move
    // slowly and zoom out almost completely before starting
    // to pan.
    speed: 1.5, // make the flying slow
    curve: 1, // change the speed at which it zooms out

    // This can be any easing function: it takes a number between
    // 0 and 1 and returns another number between 0 and 1.
    easing: function(t) {
      return t;
    },

    // this animation is considered essential with respect to prefers-reduced-motion
    essential: true
  });

  nextPrev(1);
});

servicesOptions.addEventListener("change", function() {
  nextPrev(1);

  let selectedService = document.getElementById("selected-service");

  selectedService.innerHTML = this.value;

  if (this.value) {
    while (servicesList.firstChild) {
      servicesList.firstChild.remove();
    } //Have to fixed the deleting of the default value (choisissez ...)

    listTest = listOfServices[this.value];

    for (let i = 0; i <= listOfServices[this.value].length - 1; i++) {
      let liElement = document.createElement("li");
      let aElement = document.createElement("a");

      liElement.id = i;
      liElement.textContent = listTest[i];
      liElement.className = "liArrow";

      aElement.appendChild(liElement);
      aElement.href = "#";

      aElement.addEventListener("click", function() {
        document.getElementById("regForm").submit();
      });

      servicesList.appendChild(aElement);
    }
  }
});
