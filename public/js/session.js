const base_url = "http://3.134.247.207/mdt_final/";
var timeoutID;

function setup() {
    this.addEventListener("mousemove", resetTimer, false);
    this.addEventListener("mousedown", resetTimer, false);
    this.addEventListener("keypress", resetTimer, false);
    this.addEventListener("DOMMouseScroll", resetTimer, false);
    this.addEventListener("mousewheel", resetTimer, false);
    this.addEventListener("touchmove", resetTimer, false);
    this.addEventListener("MSPointerMove", resetTimer, false);

    startTimer();
}
setup();

function startTimer() {
    timeoutID = window.setTimeout(goInactive, 1000 * 60 * 30);
}

function resetTimer(e) {
    window.clearTimeout(timeoutID);

    goActive();
}

function goInactive() {
    window.location.href = base_url+'Usuario/logout';
}

function goActive() {


    startTimer();
}