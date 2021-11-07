// Hamburger Menu
const hamburger = document.querySelector("nav .hamburger");
const allLinks = document.querySelector("nav .all-links");
const slideShowImg = document.querySelector("#about img");

let list = [
  "1-JudyBandsmer_PaintbrushPhotography.jpg",
  "5-JudyBandsmer_PaintbrushPhotography.jpg",
  "9-JudyBandsmer_PaintbrushPhotography.jpg",
  "11-JudyBandsmer_KarlStobbe.jpg",
];

let rotation = 2;

// On click
hamburger.addEventListener("click", function () {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  allLinks.classList.toggle("open");
  // Do something else, like open/close menu
});

// 1 = 368
// 2 = 435
// 3 = 397
// 4 = 407

// Functions
function changeImage() {
  if (rotation !== 4) {
    slideShowImg.setAttribute(
      "src",
      "./styles/images/photos/full-version/" + String(list[rotation - 1])
    );

    rotation++;
  } else {
    slideShowImg.setAttribute(
      "src",
      "./styles/images/photos/full-version/" + String(list[rotation - 1])
    );
    slideShowImg.style.paddingBottom = "50px";

    rotation = 1;
  }

  setTimeout(changeImage, 3000);
}

// 600, 906 _ 600, 848 _ 600, 828 _ 391, 500
// function changeImage() {
//   if (rotation === 1) {
//     slideShowImg.setAttribute(
//       "src",
//       "./styles/images/photos/full-version/" + String(list[rotation - 1])
//     );
//     console.log("1 " + slideShowImg.clientHeight);
//     slideShowImg.style.paddingBottom = 435 - slideShowImg.clientHeight + "px";

//     rotation++;
//   } else if (rotation === 2) {
//     slideShowImg.setAttribute(
//       "src",
//       "./styles/images/photos/full-version/" + String(list[rotation - 1])
//     );
//     console.log("2 " + slideShowImg.clientHeight);
//     slideShowImg.style.paddingBottom = "0px";

//     rotation++;
//   } else if (rotation === 3) {
//     slideShowImg.setAttribute(
//       "src",
//       "./styles/images/photos/full-version/" + String(list[rotation - 1])
//     );
//     console.log("3 " + slideShowImg.clientHeight);
//     slideShowImg.style.paddingBottom = "0px";

//     rotation++;
//   } else if (rotation === 4) {
//     slideShowImg.setAttribute(
//       "src",
//       "./styles/images/photos/full-version/" + String(list[rotation - 1])
//     );
//     console.log("4 " + slideShowImg.clientHeight);
//     slideShowImg.style.paddingBottom = "0px";

//     rotation = 1;
//   }

//   setTimeout(changeImage, 3000);
// }
