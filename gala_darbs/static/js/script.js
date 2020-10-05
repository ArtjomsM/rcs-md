// window.onscroll = function () {
//     navbarScroll();
// }

// function navbarScroll() {
//     if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
//         document.querySelector(".navbar").style.top = "0px";
//     } else {
//         document.querySelector(".navbar").style.top = "-200px";
//     }
// }

function dropdown() {
    document.querySelector('.dropdown-content').classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        let i;
        for (i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

window.onscroll = function () {
    toTop();
}

function toTop() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.querySelector("#to-top").style.display = "block";
    } else {
        document.querySelector("#to-top").style.display = "none";
    }
}