@include('partials.header')

<div class="container">
    <div class="contact-section">
        <h2>Kontak dan Lokasi</h2>

        <div class="contact-content">
            <!-- Informasi Kontak -->
            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Caringin No.106, Babakan Ciparay, Kota Bandung, Jawa Barat, 20233</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <div>
                            <h4>Telepon</h4>
                            <p><a href="tel:082130168612">082130168612</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:dapodiksdn012bacip@gmail.com">dapodiksdn012bacip@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peta Lokasi -->
            <div class="map-section">
                <h3>Lokasi Kami</h3>
                <div class="map-container">
                    <iframe
                        src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
