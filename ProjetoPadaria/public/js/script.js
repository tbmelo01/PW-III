document.addEventListener("DOMContentLoaded", function() {
  var imagensProduto = document.querySelectorAll(".imagem-produto-fora");
  var overlay = document.getElementById("overlay");

  imagensProduto.forEach(function(imagem) {
      imagem.addEventListener("click", function() {
          // puxa a model
          var model = this.nextElementSibling;

          // Exibe o overlay
          overlay.style.display = "block";

          // Exibe a model correspondente ao produto
          model.style.display = "block";
      });
  });

  overlay.addEventListener("click", function() {
      // Oculta o overlay e todas as modal´s
      overlay.style.display = "none";
      imagensProduto.forEach(function(imagem) {
          var model = imagem.nextElementSibling;
          model.style.display = "none";
      });
  });
});
