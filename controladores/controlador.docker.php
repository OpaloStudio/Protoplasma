<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script>
  function activarVentanaInfo() {
    document.getElementById("ventana1").style.display = "block";
    $(".contenidoVentanaInfo").niceScroll(".wrap");
  }

  function activarVentanaCalendario() {
    document.getElementById("ventana2").style.display = "block";
  }

  function activarVentanaContacto() {
    document.getElementById("ventana3").style.display = "block";
  }

  function activarVentanaMapa() {
    document.getElementById("ventana4").style.display = "block";
  }

  function activarVentanaMision() {
    document.getElementById("ventana5").style.display = "block";
  }
</script>

<script>
  function cerrarVentanaInfo() {
    document.getElementById("ventana1").style.display = "none";
  }

  function cerrarVentanaCalendario() {
    document.getElementById("ventana2").style.display = "none";
  }

  function cerrarVentanaContacto() {
    document.getElementById("ventana3").style.display = "none";
  }

  function cerrarVentanaMapa() {
    document.getElementById("ventana4").style.display = "none";
  }

  function cerrarVentanaMision() {
    document.getElementById("ventana5").style.display = "none";
  }
</script>