var acc = document.getElementsByClassName("accordion");
var openedPanel = document.getElementById('first_element');
var i;

openedPanel.style.maxHeight = openedPanel.scrollHeight + "px";

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var newPanel = this.nextElementSibling;
    
    if (openedPanel == newPanel) {
      openedPanel.style.maxHeight = openedPanel.scrollHeight + "px";
    } else {
      newPanel.style.maxHeight = newPanel.scrollHeight + "px";
      openedPanel.style.maxHeight = null;
      openedPanel = newPanel;      
    }
  }
}