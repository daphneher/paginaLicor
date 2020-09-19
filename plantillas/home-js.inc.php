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

<!-- BLOG -->
<script>
var paginacion = document.getElementsByClassName("paginacion_blog");
var index_paginacion = document.getElementsByClassName("paginacion_index");
for (i = 0; i < paginacion.length; i++) {
    paginacion[i].style.display = "none";
    index_paginacion[i].style.backgroundColor = "white";
    index_paginacion[i].style.color = "black";
}
paginacion[0].style.display = "block";
index_paginacion[0].style.backgroundColor = "#9f2428";
index_paginacion[0].style.color = "white";

function cambiarPagina(n) {
    var paginacion = document.getElementsByClassName("paginacion_blog");
    var index_paginacion = document.getElementsByClassName("paginacion_index");
    for (i = 0; i < paginacion.length; i++) {
        paginacion[i].style.display = "none";
        index_paginacion[i].style.backgroundColor = "white";
        index_paginacion[i].style.color = "black";
    }
    paginacion[n-1].style.display = "block";
    index_paginacion[n-1].style.backgroundColor = "#9f2428";
    index_paginacion[n-1].style.color = "white"
}
</script>
<!-- FIN DE BLOG -->
