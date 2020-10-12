
  <footer>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-6 mb-md-0 mb-3">
          <b class="text-big">{{$footer->title}}</b>
          <br />
          <p>
            {!!nl2br($footer->description)!!}
          </p>
        </div>
        <div class="col-md-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.950814025002!2d106.7987143!3d-6.2008406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57813a76ce5d%3A0x479ad357d48264ef!2sPurwokinanti%2C%20Pakualaman%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1601912418558!5m2!1sid!2sid"
            width="100%"
            height="200"
            frameborder="0"
            style="border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
      </div>
      <div class="copyright my-2">&copy; 2020 | <b>{{$footer->title}}</b></div>
    </div>
  </footer>
