document.getElementById("menuButton").onclick = function(){
    document.getElementById("menuItem").classList.add('leftSlide');
  }

  document.getElementById("menuClose").onclick = function(){
    document.getElementById("menuItem").classList.remove("leftSlide");
  }