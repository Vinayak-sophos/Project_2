$(document).ready(function() {
        $('#fullpage').fullpage({
          navigation:true,
          onLeave: function(index, nextIndex, direction) {
            if(index==2&&nextIndex==3)
            {
              $(".screenshot").fadeIn(2000);
            }
          }
        });
    });
