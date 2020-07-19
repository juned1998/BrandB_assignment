const indexForm = document.querySelector('#showcase-form');
if(indexForm){
  indexForm.addEventListener('submit',handleFormSubmission);
}

const contactForm = document.querySelector('#contact-form');
if(contactForm){
  contactForm.addEventListener('submit',handleFormSubmission);
}

const subscriptionForm = document.querySelector('#subscription-form');
if(subscriptionForm){
  subscriptionForm.addEventListener('submit', handleSubsFormSubmission);
}

function handleSubsFormSubmission(e){
  let formData = {
    email : document.getElementById('subsrcriber-email').value
  }

  let xhr = new XMLHttpRequest();
  let url = 'subscription_process.php';
  let params = `email=${formData.email}`;

  xhr.open('POST', url, true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send(params);

  xhr.onload = function() {
    let responseObject = null;

    if (xhr.status != 200) {
      console.log(`Error ${xhr.status}: ${xhr.statusText}`); 
    }else{

      try{
        responseObject = JSON.parse(xhr.responseText);
        }
      catch(e){
        console.log("Json parse error");
        console.log(responseObject);
      }

      if(responseObject){
        handleFormXHRresponse(responseObject);
      }

    } 
  };

  e.preventDefault();
}





function handleFormSubmission(e){
  let formData = {
    name : document.getElementById('s-name').value,
    email : document.getElementById('s-email').value,
    phone : document.getElementById('s-phone').value,
    company : document.getElementById('s-companyname').value,
    message : document.getElementById('s-message').value
  }

  let xhr = new XMLHttpRequest();
  let url = 'form_process.php';
  let params = `name=${formData.name}&email=${formData.email}&phone=${formData.phone}&companyname=${formData.company}&message=${formData.message}`;
  xhr.open('POST', url, true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send(params);

  xhr.onload = function() {
    let responseObject = null;

    if (xhr.status != 200) {
      console.log(`Error ${xhr.status}: ${xhr.statusText}`); 
    }else{

      try{
        responseObject = JSON.parse(xhr.responseText);
        }
      catch(e){
        console.log("Json parse error");
        console.log(responseObject);
      }

      if(responseObject){
        handleFormXHRresponse(responseObject);
      }

    } 
  };
  e.preventDefault();
}



function handleFormXHRresponse(responseObject){

  let formMessage = document.querySelector('.form-message');

  while(formMessage.firstChild){
    formMessage.firstChild.remove();
  }



  if(!responseObject.valid){
    let ul = document.createElement('ul');
    ul.style.listStyle = "none";
    
    responseObject.responseMessages.forEach(function(response){
      let li = document.createElement('li');
      li.textContent = response;
      ul.appendChild(li);
    });

    formMessage.appendChild(ul);
    formMessage.classList.remove('success');
    formMessage.classList.add('error');
    formMessage.style.display = "block";
    setTimeout(function(){
      formMessage.style.display = "none";
    },5000);
  }
  else{
    formMessage.textContent = responseObject.responseMessages[0];
    formMessage.classList.remove('error');
    formMessage.classList.add('success');
    formMessage.style.display = "block";
    formMessage.parentElement.reset();
    setTimeout(function(){
      formMessage.style.display = "none";
    },5000);

  }
}



