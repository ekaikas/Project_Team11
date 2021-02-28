//Start of Javascript Form Validation part

        const form = document.getElementById('form');
        const firstname = document.getElementById('firstname');
        const lasttname = document.getElementById('lastname');
        const email = document.getElementById('email');
        const cv_pos = document.getElementById('cv_pos');
        const cv_file = document.getElementById('cv_file');
        const file = document.getElementById('file');
        const cv_msg = document.getElementById('cv_msg');

             // Event Handler
            form.addEventListener('submit', e => {
                e.preventDefault();
                
                checkInputs();
            });

            function checkInputs() {
                // trim to remove the whitespaces
                const firstnameValue = firstname.value.trim();
                const lastnameValue = lastname.value.trim();
                const phoneValue = phone.value.trim();
                const emailValue = email.value.trim();
                const cv_posValue = cv_pos.value.trim();
                const cv_fileValue = cv_file.value.trim();
                const fileValue = file.value.trim();
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
                    setErrorFor(phone, 'Phone is blank');
                } else {
                    setSuccessFor(phone);
                }
                
                if(emailValue === '') {
                    setErrorFor(email, 'Email is blank');
                } else if (!isEmail(emailValue)) {
                    setErrorFor(email, 'Not a valid email');
                } else {
                    setSuccessFor(email);
                }
                
                if(cv_fileValue === '') {
                    setErrorFor(cv_file, 'No file uploaded');
                } else {
                    setSuccessFor(cv_file);
                }
                if(fileValue === '') {
                    setErrorFor(file, 'No file uploaded');
                } else {
                    setSuccessFor(file);
                }
                if(cv_msgValue === '') {
                    setErrorFor(cv_msg, 'Cover letter is blank');
                } else {
                    setSuccessFor(cv_msg);
                }
                if(cv_posValue === '--select--') {
                    setErrorFor(cv_pos, 'Position not selected');
                } else {
                    setSuccessFor(cv_pos);
                }
              
            }
            function setErrorFor(input, message) {
                const formControl = input.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'row error';
                small.innerText = message;
            }

            function setSuccessFor(input) {
                const formControl = input.parentElement;
                formControl.className = 'row success';
            }
                
            function isEmail(email) {
                return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }         
    
//Javascript Validation of attached images
    
        function fileValidation() { 
            var fileInput =  
                document.getElementById('file'); 
              
            var filePath = fileInput.value; 
          
            // Allowed image file types 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                alert('Invalid file type. Please select .jpg .jpeg .png .gif'); 
                fileInput.value = ''; 
                return false; 
            }  
            else  
            { 
                // Image preview 
                if (fileInput.files && fileInput.files[0]) { 
                    var reader = new FileReader(); 
                    reader.onload = function(e) { 
                        document.getElementById( 
                            'imagePreview').innerHTML =  
                            '<img src="' + e.target.result 
                            + '"/>'; 
                    }; 
                      
                    reader.readAsDataURL(fileInput.files[0]); 
                } 
            } 
        } 

    //Javascript Validation of attached files

        function cv_fileValidation() { 
            var cv_fileInput =  
                document.getElementById('cv_file'); 
              
            var cv_filePath = cv_fileInput.value; 
          
            // Allowed file type 
            var allowedExtensions =  
                    /(\.pdf)$/i; 
              
            if (!allowedExtensions.exec(cv_filePath)) { 
                alert('Invalid file type. Please select .pdf'); 
                cv_fileInput.value = ''; 
                return false; 
            }  
        } 
    
//End of Javascript Form Validation part


