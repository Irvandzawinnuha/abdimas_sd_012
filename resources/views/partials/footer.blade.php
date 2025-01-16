<footer class="footer">
    <div class="container"
        style="display: flex; justify-content: space-between; align-items: flex-start; gap: 10px; color: white;">
        <!-- Kontak Info -->
        <div class="footer-contact" style="flex: 1;">
            <div class="contact-info">
                <div class="icon">
                    <a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung"
                        target="_blank">
                        <i class="fa fa-map-marker"></i>
                    </a>
                </div>
                <div class="text">
                    <p><a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung"
                            target="_blank">Jl. Caringin No.106, Babakan Ciparay, Kota Bandung</a></p>
                    <b>Kota Bandung, Jawa Barat, 20233.</b>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20PPDB%20SDN%20012%20Babakan%20Ciparay"
                        target="_blank">
                        <i class="fa fa-phone"></i>
                    </a>
                </div>
                <div class="text">
                    <p>
                        <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20informasi%20PPDB."
                            target="_blank">
                            082130168612
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="mailto:dapodiksdn012bacip@gmail.com">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
                <div class="text">
                    <p>
                        <a href="mailto:dapodiksdn012bacip@gmail.com">dapodiksdn012bacip@gmail.com</a>
                    </p>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="https://www.admin.com" target="_blank">
                        <i class="fa fa-globe"></i>
                    </a>
                </div>
                <div class="text">
                    <p><a href="https://www.admin.com" target="_blank">www.admin.com</a></p>
                </div>
            </div>
        </div>

        <!-- Informasi Sekolah -->
        <div class="footer-info" style="flex: 1;">
            <h3>Tentang SD Negeri 012 Babakan Ciparay</h3>
            <p class="about">SD Negeri 012 Babakan Ciparay Kota Bandung berdomisili di perkotaan yang berdekatan dengan
                Pasar Induk Caringin Bandung, dengan pengembangan ekonomi dan wilayah perdagangan dengan keterjangkauan
                lokasi yang mudah ditempuh melalui sarana transportasi dari berbagai rute.</p>
        </div>

        <!-- Peta -->
        <div class="footer-maps" style="position: relative; width: 300px; height: 300px;">
            <iframe
                src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed"
                width="300" height="300" style="border: 0;" allowfullscreen="" loading="lazy">
            </iframe>
            <a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung" target="_blank"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; text-decoration: none; z-index: 10;">
            </a>
        </div>
    </div>
</footer>

@yield('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.querySelector('.hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');
        const dropdowns = document.querySelectorAll('.mobile-menu .dropdown');

        // Toggle hamburger menu
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Handle dropdown clicks in mobile menu
        dropdowns.forEach(dropdown => {
            const dropdownBtn = dropdown.querySelector('.dropbtn');
            const dropdownContent = dropdown.querySelector('.dropdown-content');

            dropdownBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Close other dropdowns
                dropdowns.forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('active');
                        otherDropdown.querySelector('.dropdown-content').style.display =
                            'none';
                    }
                });

                // Toggle current dropdown
                dropdown.classList.toggle('active');
                dropdownContent.style.display = dropdown.classList.contains('active') ?
                    'block' : 'none';
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
                mobileMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
</script>

</body>

</html>
