<!-- Nuestros Vinos -->
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
</script>
<!-- Fin Nuestros Vinos -->

<!-- Banner -->
<script>
    var slideIndex = 1;
    var timer = null;
    showSlides(slideIndex);

    function plusSlides(n) {
      clearTimeout(timer);
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      clearTimeout(timer);
      var i;
      var slides = document.getElementsByClassName("mySlides");
      
      if (n==undefined){n = ++slideIndex}
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      
      slides[slideIndex-1].style.display = "block";
      timer = setTimeout(showSlides, 10000);
    } 
</script>
<!-- Fin Banner -->

<!-- Botón Menú -->
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.getElementById("menu").style.display = "none";

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("menu").style.display = "block";
}
</script>
<!-- Fin Botón Menú -->
