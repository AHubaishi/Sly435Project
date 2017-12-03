
// Routine to display date updated in local format

function datemodified ()
{
  var ModDate;
  ModDate = new Date (document.lastModified); 
  document.write ("Page last updated: " + ModDate.toLocaleDateString());
}

function frame_breaker()
{
  if (top.location != self.location) 
	{
    top.location.replace(self.location);
  }
}

// Turn off error reporting

window.onerror = function() {return true};

frame_breaker();