        //Start of Javascript Form Validation part


        const cv_pos = document.getElementById('cv_pos');
        const form = document.getElementById('form');
        const firstname = document.getElementById('firstname');
        const lasttname = document.getElementById('lastname');
        const email = document.getElementById('email');
        const cv_msg = document.getElementById('cv_msg');
        
            // Event Handler
            form.addEventListener('submit', e => {
                e.preventDefault();
                
                checkInputs();
            });

            function checkInputs() {
                // trim to remove the whitespaces
                const cv_posValue = cv_pos.value.trim();
                const firstnameValue = firstname.value.trim();
                const lastnameValue = lastname.value.trim();
                const phoneValue = phone.value.trim();
                const emailValue = email.value.trim();
                const cv_msgValue = cv_msg.value.trim();

                  if(cv_posValue === '--select--') {
                    setErrorFor(cv_pos, 'Make a selection');
                } else {
                    setSuccessFor(cv_pos);
                }
                if(firstnameValue === '') {
                    setErrorFor(firstname, 'Firstname is blank');
                } else {
                    setSuccessFor(firstname);
                }
                if(lastnameValue === '') {
                    setErrorFor(lastname, 'Lastname is blank');
                } else {
                    setSuccessFor(lastname);
                }

                if(phoneValue === '') {
                    setErrorFor(phone, 'Phone cannot be blank');
                } else {
                    setSuccessFor(phone);
                }
                
                if(emailValue === '') {
                    setErrorFor(email, 'Email cannot be blank');
                } else if (!isEmail(emailValue)) {
                    setErrorFor(email, 'Not a valid email');
                } else {
                    setSuccessFor(email);
                }
                if(cv_msgValue === '') {
                    setErrorFor(cv_msg, 'You have not type a message');
                } else {
                    setSuccessFor(cv_msg);
                }
              
            }
            function setErrorFor(input, message) {
                const formControl = input.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'col-75 error';
                small.innerText = message;
            }

            function setSuccessFor(input) {
                const formControl = input.parentElement;
                formControl.className = 'col-75 success';
            }
                
            function isEmail(email) {
                return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }         