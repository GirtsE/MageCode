function menu(){
    const linkContainer = document.getElementById("LinkContainer");
    const mainNavBar = document.getElementById("mainNavBarLinks");

        if (linkContainer.style.display === "block") {
            linkContainer.style.display = "none";
            mainNavBar.style.background = "rgba(0, 0, 0, 0)";
          }		
        else {
            linkContainer.style.display = "block";
            mainNavBar.style.background = "rgba(0, 0, 0, 0.500)";
        }
        

}