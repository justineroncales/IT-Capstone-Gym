


const loginForm = document.getElementById('login');
const alert = document.getElementById('alert');
const login = document.getElementById('btn').addEventListener('click', function(){
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
    
        if(username.length == 0 && password.length == 0){ // specify if naa ba sulod o values ang g pang input sa username or password
           //waitsa, kalimot nako haha
           Swal.fire({
            icon: 'error',
            title: 'Please input empty fields'
           
           
          })
        }else if(username.length == 0){
          Swal.fire({
            icon: 'error',
            title: 'Username field is empty'
           
           
          })
        }else if(password.length == 0){
          Swal.fire({
            icon: 'error',
            title: 'Password field is empty',
           
           
          })
        }
        else{
          const xhr = new XMLHttpRequest(); // sa new na version sa JS .. var ang old new and let pero pede mo mogamit og var
          //ang const basically constant .. d na ma change nimo mga values ana.. since kay object mana aw const ato gamiton.
          xhr.open("POST", 'validation/login.php', true); // unsay URL ? 
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // kani specify na.. html man ato g gamit nga form
          // no need nanang request header kay wala naman pud e submit .. 
          xhr.onreadystatechange = function() { // Call a function when the state changes.
              if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                  // Request finished. Do processing here.
                  //ato e sulod sa local storage ang username para masabtan natog naa gyuy mi login.. awa og e refresh nako
                  //index login, d mo adto sa admin .. 
  
  
                     // waitsa kalimot ko hehe
                 /// let message = this.responseText; // kani diay haha dili nani response TEXT
  
                 let response = JSON.parse(this.response);//mao naning JSON gikan didto sa login php
  
                 //pede nato nato kuhaon ang messages.
  
                 console.log(response.loggedIn);
  
                 if(response.loggedIn){

                  Swal.fire({
                      icon: 'success',
                      title: 'You are now Successfully Login',
                      showConfirmButton: false,
                      timer: 2300
                    })

                    


  
                  //localStorage.setItem('user', username);
                  
                  setTimeout(() => {      
                      window.location.href = 'Dashboard/dashboard.php';
                  }, 2500);
                   // after 2 seconds mo reload na ..
                 }else{

                  Swal.fire({
                      icon: 'error',
                      title: 'Invalid Username/Password...'
                      
                    })
                  //setTimeout(() => {      
                    //  alert.style.display = 'none';
                  //}, 2000);
                 
                 }
  
                /*  
  */
              }
          }
  
          //nag JSON namo ? wala paman gani ni ge introduce hHAHAHAHHA, ayaw mo saba sa inyo maam haha
          // automatioc na AHHAHAHAHAHA
          //try daw
          xhr.send("username="+username+"&password="+password+""); // gamitan nato ni backticks .. pede man e plus plus pero dugay lage.. pareha ani.
            
        }
    })
});
