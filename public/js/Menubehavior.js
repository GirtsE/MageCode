function menu(){
    const linkContainer = document.getElementById("LinkContainer");
    const mainNavBarLinks = document.getElementById("mainNavBarLinks");

        if (linkContainer.style.display === "block") {
            linkContainer.style.display = "none";
            mainNavBarLinks.style.background = "rgba(0, 0, 0, 0)";
            mainNavBarLinks.style.height = "initial"
          }		
        else {
            linkContainer.style.display = "block";
            mainNavBarLinks.style.background = "rgba(0, 0, 0, 0.500)";
            mainNavBarLinks.style.height = "100%"
        }
        

}