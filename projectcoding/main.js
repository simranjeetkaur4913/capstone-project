let banners=document.querySelector('.slide-items').children;
let nextSlide=document.querySelector(".next");
let prevSlide=document.querySelector(".previous");
let totalSlides=banners.length;
let index=0;
nextSlide.onclick=function()
{
    next("next");
}
prevSlide.onclick=function()
{
    next("prev");
}
function next(way) // function with one parameter
{
    if(way=="next")
        {
            index++;
            if(index===totalSlides)
                {
                    index=0;
                }
        }
    else{
        if(index===0)
            {
                index=totalSlides-1;
            }
        else{
            index--;
        }
    }
    for(i=0;i<banners.length;i++)
        {
            banners[i].classList.remove("active");
        }
    banners[index].classList.add("active");
}