"use strict"; 

// arrow function to get clock info 
let digitalClock = () => {
  let date = new Date(); 
  // let hrs = date.getHours();
  // let min = date.getMinutes(); 
  // let sec = date.getSeconds(); 
  // let meridiam = 'AM';
  let day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  let month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
  
  // // conditon statement created to determne AM/ PM
  // if(hrs=== 0){
  //   hrs = 12; 
  // }else if(hrs > 12) {
  //   hrs = hrs - 12; 
  //   meridiam = 'PM'; 
  // } 
  
  // // ternary operator used for time display 0 infront of number
  // hrs = hrs < 10 ? `0${hrs}` : hrs;
  // min = min < 10 ? `0${min}` : min;
  // sec = sec < 10 ? `0${sec}` : sec;
  
  let time = ` ${day[date.getDay()]}, ${month[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`
document.querySelector('.clock').textContent = time; 
//   setInterval(digitalClock, 1000); // interval set to 1000 mili seconds
}

 digitalClock(); 