var slide_id = 1;
showSlides(slide_id);

// next/previous controls
function plusSlides(element_number)
{
    showSlides(slide_id += element_number);
}
// dot controls
function currentSlide(element_number)
{
    showSlides(slide_id = element_number);
}

function showSlides(element_number)
{
    var i;
    var slides = document.getElementsByClassName("slideshow__element");
    var dots = document.getElementsByClassName("dot");
    if(element_number > slides.length)
    {
        slide_id = 1;
    }
    if(element_number < 1){ slide_id = slides.length}
    for(i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }
    for(i = 0; i < dots.length; i++)
    {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slide_id - 1].style.display = "block";
    dots[slide_id - 1].className += " active";
}