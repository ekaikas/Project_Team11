//Start of Javascript Form Validation part

        const cevent = document.getElementById('cevent');
        const card_name = document.getElementById('card_name');
        const cnumber = document.getElementById('cnumber');
        const snumber = document.getElementById('snumber');
        const email = document.getElementById('email');
        const t_amnt = document.getElementById('t_amnt');
        const bservice = document.getElementById('bservice');
        
            // Event Handler
            form.addEventListener('submit', e => {
                e.preventDefault();
                
                checkInputs();
            });

            function checkInputs() {
                // trim to remove the whitespaces
                const ceventValue = cevent.value.trim();
                const card_nameValue = card_name.value.trim();
                const cnumberValue = cnumber.value.trim();
                const snumberValue = snumber.value.trim();
                const emailValue = email.value.trim();
                const t_amntValue = t_amnt.value.trim();
                const bserviceValue = bservice.value.trim();

                  if(ceventValue === '--select--') {
                    setErrorFor(cevent, 'Make selection');
                } else {
                    setSuccessFor(cevent);
                }
                if(card_nameValue === '') {
                    setErrorFor(card_name, 'Blank field');
                } else {
                    setSuccessFor(card_name);
                }
                if(cnumberValue === '') {
                    setErrorFor(cnumber, 'Card number is blank');
                } else {
                    setSuccessFor(cnumber);
                }

                if(snumberValue === '') {
                    setErrorFor(snumber, 'Sec number is blank');
                } else {
                    setSuccessFor(snumber);
                }
                
                if(emailValue === '') {
                    setErrorFor(email, 'Email is blank');
                } else if (!isEmail(emailValue)) {
                    setErrorFor(email, 'Not a valid email');
                } else {
                    setSuccessFor(email);
                }
                if(t_amntValue === '') {
                    setErrorFor(t_amnt, 'Make a selection');
                } else {
                    setSuccessFor(t_amnt);
                }
                if(bserviceValue === '--none--') {
                    setErrorFor(bservice, 'Make a selection');
                } else {
                    setSuccessFor(bservice);
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
   
    //End of Javascript Form Validation part