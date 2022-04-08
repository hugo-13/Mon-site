        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var top = document.getElementById("top");

        // Get the offset position of the navbar
        var yes = top.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= yes) {
                top.classList.add("yes");

            } else {
                top.classList.remove("yes");
            }
        }