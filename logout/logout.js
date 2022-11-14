

//unsay buhaton diri para access tong logout button 
const logoutBtn = document.getElementById('logout');

//since kay wala may form g gamit ang logout button.. click nga event gamiton instead of submit.

logoutBtn.addEventListener('click', () => { //yess 
    const xhr = new XMLHttpRequest();
    xhr.open("GET", '../logout/logout.php', true); // dinhi get na ang gamiton kay wala namay data nga e submit..
    xhr.onreadystatechange = function() { // Call a function when the state changes.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            // Request finished. Do processing here.
            console.log('done!');
           // localStorage.removeItem('user'); // kani mao mao maning sa localstorage na user ganina ato g remove..

            window.location.href = '../index.php';// unsa e butang dha ? URL sa login .. yes index.php 
            //try nato..

           
        }
    }
    xhr.send(); 
})
