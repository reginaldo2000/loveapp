<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">LoveAPP</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="loveapp-navbar">
            <li><a href="{{ route('categorias') }}"><i class="fa fa-asterisk" aria-hidden="true"></i> Categorias</a></li>
            <li><a href="{{ route('produtos') }}"><i class="fa fa-barcode" aria-hidden="true"></i> Produtos</a></li>
            <li><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
        </ul>
    </div>
  </div>