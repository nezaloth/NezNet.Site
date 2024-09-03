/* Function to allow HTML files to be included in one another */
function imageModal()
{
    var z, i, elmnt, file, xhttp, no;

    no = 1;

    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++)
    {
        elmnt = z[i];

        /* Search for elements with a certain attribute: */
        file = elmnt.getAttribute("modal-image");
        if (file)
        {
            // Get Modal
            var modal = document.getElementById("modal" + no);

            // Gets Image And Insert It Inside The Modal, Uses Alt Text As Caption
            var img = document.getElementById("mo" + no);
            var modalImg = document.getElementById("img" + no);
            var captionText = document.getElementById("caption" + no);

            img.onclick = function()
            {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Gets <span> Element That Closes Modal
            var span = document.getElementsByClassName("close")[0];

            // When Click On <span> (x) Closes Modal
            span.onclick = function()
            {
                modal.style.display = "none";
            }

            no++;
        }
    }
};
