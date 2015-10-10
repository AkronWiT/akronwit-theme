//////////////////////////////////////////////////////
// Vertical Center
//////////////////////////////////////////////////////

function verticalAlign(element) {
  var elementDiv       = jQuery(element),
      elementDivHeight = elementDiv.outerHeight(),
      
      wrapperDiv       = jQuery('#our-goal-wrapper'),
      wrapperDivHeight = wrapperDiv.outerHeight(),
      
      elementDiff      = (wrapperDivHeight - elementDivHeight),
      diffEvenly       = elementDiff / 2;
      
  if (diffEvenly > 1) {
    elementDiv.css('margin-top', diffEvenly);
    elementDiv.css('margin-bottom', diffEvenly);    
  }
}


jQuery(function() {
  verticalAlign('#our-goal');
});

jQuery(window).resize(function() {
  verticalAlign('#our-goal');
});