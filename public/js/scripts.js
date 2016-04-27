/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */

function delFlightBtn(clicked) {

    var flightNum = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;
    var flightDate = document.getElementById(clicked).parentElement.parentElement.children[1].innerHTML;

    window.location.href = "delete_flights.php?fNum=" + flightNum + "&fDate=" + flightDate;

}

function delUserBtn(clicked) {

    var userId = clicked;

    window.location.href = "delete_user.php?id=" + userId;

}

function editUserBtn(clicked) {

    var uId = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;

    window.location.href = "edit_user.php?id=" + uId;
}

function passResetBtn(clicked) {

    var uId = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;

    window.location.href = "pass_reset.php?id=" + uId;
}

function editFlightBtn(clicked) {

    var flightNum = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;
    var flightDate = document.getElementById(clicked).parentElement.parentElement.children[1].innerHTML;

    window.location.href = "edit_flight.php?fNum=" + flightNum + "&fDate=" + flightDate;
}

function assignCrewBtn(clicked) {

    var flightNum = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;
    var flightDate = document.getElementById(clicked).parentElement.parentElement.children[1].innerHTML;

    window.location.href = "assign_flight.php?fNum=" + flightNum + "&fDate=" + flightDate;
}

function editCrewBtn(clicked) {

    var flightNum = document.getElementById(clicked).parentElement.parentElement.children[0].innerHTML;
    var flightDate = document.getElementById(clicked).parentElement.parentElement.children[1].innerHTML;

    window.location.href = "edit_crew.php?fNum=" + flightNum + "&fDate=" + flightDate;
}