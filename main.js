/* Set the width of the sidebar to 250px (show it) */

$(function openNav() {
  $(".openbtn").click(function () {
    $("#mySidepanel").css("width", "250px");
  });
});



/* Set the width of the sidebar to 0 (hide it) */

$(function closeNav() {
  $(".closebtn").click(function () {
    $("#mySidepanel").css("width", "0");
  })
})





