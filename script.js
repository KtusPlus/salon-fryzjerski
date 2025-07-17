document.querySelectorAll('a[href^="#"]').foreEach(anchor =>
{
    anchor.addEventListener("click", function (e)
{
    e.preventDeafult();
    document.querySelector(this.getAttribute("href")).scrollIntoview(
{
    behavior: "smooth"
});
});
});
