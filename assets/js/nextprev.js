function nextPrev(n, domElement) {
  // This function will figure out which tab to display
  // Hide the current tab:
  tabs[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= tabs.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  //on back button, return on default value
  if (n === -1) {
    tabs[currentTab].getElementsByTagName("select")[0].selectedIndex = 0;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}