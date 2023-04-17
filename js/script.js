// all custom JS will goes here
function secondaryNavigationChanger(section) {
  // hide all section
  var secondaryNavigationContainer = document.getElementById(
    "secondaryNavigationContainer"
  );
  var content = secondaryNavigationContainer.querySelectorAll("section");
  content.forEach((element) => {
    element.style.display = "none";
  });

  // show wanted section
  document.getElementById(section).style.display = "block";
}
console.log(document);
