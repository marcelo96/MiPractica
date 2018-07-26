<footer>
 <div>
  <h1>
    <div class="col-12 jmy_web_div" data-page="header" id="mas" data-editor="no"><?php $this->pnt('mas','Conoce más hacerca de Cuetzalan...',["secundario"=>"header"]); ?></div>
  </h1>
    <ul id="mas-info">
      <li><a href="<?php $this->url_inicio(); ?>">Ubicación</a></li>
      <li><a href="<?php $this->url_inicio(); ?>">Zonas Arqueologicas</a></li>
      <li><a href="<?php $this->url_inicio(); ?>">Restaurantes</a></li>
      <li><a href="<?php $this->url_inicio(); ?>">Costumbres y tradiciones</a></li>
    </ul>
  </div>
  <div class="col-12 jmy_web_div" data-page="header" id="pie" data-editor="no"><?php $this->pnt('pie','Todos los derechos reservados',["secundario"=>"header"]); ?></div>
</footer>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" 
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<?php  $this->llamar_js(); ?> 
</body>
</html>