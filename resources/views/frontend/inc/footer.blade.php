<footer class="site-footer border-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Menü</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li class="active"> <a href="{{ route('anasayfa') }}">Ana Sayfa</a> </li>
                <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                <li><a href="{{ route('urunler') }}">Ürünler</a></li>
                <li><a href="{{ route('iletisim') }}">İletişim</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">İletişim</h3>
            <ul class="list-unstyled">
              <li class="address">Adres Bilgileri</li>
              <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
              <li class="email">emailaddress@domain.com</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy; {{ date('Y') }} Tüm hakları saklıdır.</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
