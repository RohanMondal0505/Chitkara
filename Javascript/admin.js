// Sidebar Slider:-
const bar = document.querySelector("#bar");
const sidebar = document.querySelector(".sidebar-slid");
const mainContainer = document.querySelector(".main-container");

mainContainer.style.left = "23rem";
mainContainer.style.width = "calc(100% - 5rem - 18rem)";
sidebar.style.left = "5rem";

// mainContainer.style.left = "5rem"
// mainContainer.style.width = "calc(100% - 5rem)"
// sidebar.style.left = "-16rem"

bar.addEventListener("click", () => {
	if (sidebar.style.left == "5rem") {
		sidebar.style.left = "-16rem";
		mainContainer.style.left = "5rem";
		mainContainer.style.width = "calc(100% - 5rem)";
		sidebar.style.transitionDelay = "0s";
		mainContainer.style.transitionDelay = "0s";
	} else if (sidebar.style.left == "-16rem") {
		sidebar.style.left = "5rem";
		mainContainer.style.transitionDelay = ".1s";
		sidebar.style.transitionDelay = ".1s";
		mainContainer.style.left = "23rem";
		mainContainer.style.width = "calc(100% - 5rem - 18rem)";
	}
});

// --------------------------------------------------------------------------------------------

// Bar Background Color
const barListItems = document.querySelectorAll(".sidebar-slid ul li");
const barListIcon = document.querySelectorAll(".sidebar-fix ul li a");
let url = window.location.pathname;
let filename = url.substring(url.lastIndexOf("/") + 1);
filename = filename.split(".")[0];

if (filename == "index") {
	barListItems[0].style.background = "rgb(9, 209, 231)";
}
if (filename == "teacher") {
	barListItems[1].style.background = "rgb(9, 209, 231)";
}
if (filename == "student") {
	barListItems[2].style.background = "rgb(9, 209, 231)";
}
if (filename == "department") {
	barListItems[3].style.background = "rgb(9, 209, 231)";
}
if (filename == "course") {
	barListItems[4].style.background = "rgb(9, 209, 231)";
}
if (filename == "staff") {
	barListItems[5].style.background = "rgb(9, 209, 231)";
}

if (filename == "index") {
	barListIcon[1].style.color = "#00ff7e";
}
if (filename == "folder") {
	barListIcon[2].style.color = "#f78543";
}
if (filename == "search") {
	barListIcon[3].style.color = "#224fb3";
}
if (filename == "setting") {
	barListIcon[4].style.color = "#000000a6";
}

// --------------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------------
