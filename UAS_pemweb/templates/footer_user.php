<!-- Footer -->
<div class="row footer">
  <div class="col text-center">
    <p>2023 &copy;UAS PEMROGRAMAN</a>
    </p>

  </div>
</div>
<!-- Akhir footer -->

</div>

        <div class="cd-signin-modal js-signin-modal">
        <div class="cd-signin-modal__container">
            <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
                <li><a href="#0" data-signin="login" data-type="login">Masuk</a></li>
                <li><a href="#0" data-signin="signup" data-type="signup">Buat Akun</a></li>
            </ul>

            <div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
                <form action="process/login_proses.php" method="post" class="cd-signin-modal__form" >
                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">E-mail</label>
                        <input name="email" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-email" type="email" name="email" value="fauzanalfa@gmail.com" placeholder="E-mail">
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
                        <input name="password" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="password" name="password" value="admin" placeholder="Password">
                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Show</a>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Masuk">
                    </p>
                </form>
                
            </div> 

            <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
                <form id="myForm" action="process/user/tambahUser_proses.php" method="post" class="cd-signin-modal__form" enctype="multipart/form-data">
                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Nama</label>
                        <input name="nama" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username" required="">
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                        <input name="email" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail" required=""> 
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--telephone cd-signin-modal__label--image-replace" for="signup-phone">Telepon</label>
                        <input name="telepon" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-phone" type="tel" placeholder="Telepon" required="">
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
                        <input name="password" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="password"  placeholder="Password" required="">
                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Show</a>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-gender">Jenis Kelamin</label>
                    <select name="gender" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-gender" required="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                    <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--birthdate cd-signin-modal__label--image-replace" for="signup-birthdate">Tanggal Lahir</label>
                    <input name="birthdate" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-birthdate" type="date" value="2003-04-20" required="">
                    <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--address cd-signin-modal__label--image-replace" for="signup-address">Alamat</label>
                    <textarea name="address" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-address" placeholder="Alamat" required=""></textarea>
                    <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
                        <label for="accept-terms">Saya menyetujui <a href="./templates/terms.php">Syarat dan ketentuan</a></label>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Buat akun">
                    </p>
                </form>
            </div> <!-- cd-signin-modal__block -->
        </div> <!-- cd-signin-modal__container -->
    </div> <!-- cd-signin-modal -->
    

    <script>
    document.getElementById('remember-me').addEventListener('change', function() {
    if (this.checked) {
        // Set the expiration date to 3 hours from now
        var date = new Date();
        date.setTime(date.getTime() + (3 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toUTCString();

        // Set all cookies when "Remember me" is checked
        document.cookie = "cookie1=value1" + expires + "; path=/";
        document.cookie = "cookie2=value2" + expires + "; path=/";
        // Add more cookies as needed
    } else {
        // Clear all cookies when "Remember me" is unchecked
        document.cookie = "cookie1=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "cookie2=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        // Clear more cookies as needed
    }
    });

        document.getElementById('myForm').addEventListener('submit', function(event) {
            var checkbox = document.getElementById('accept-terms');
            if (!checkbox.checked) {
                alert('Harap setujui Syarat dan ketentuan!');
                event.preventDefault();
            }
        });
    </script>

<script src="jslogin/placeholders.min.js"></script>
<script src="jslogin/main.js"></script>
<script src="myjs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  </body>
</html>
