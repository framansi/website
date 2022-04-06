import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs'
import "@lottiefiles/lottie-player";

window.Alpine = Alpine

Alpine.start()
AOS.init();




window.popToast = function(type, message){

    setTimeout(function(){
        document.getElementById('toast_bar').classList.remove('w-full');
        document.getElementById('toast_bar').classList.add('w-0');
    }, 150);
    // After 4 seconds hide the toast
    setTimeout(function(){
        Alpine.store('toast').update({ type, message, show: false });

        setTimeout(function(){
            document.getElementById('toast_bar').classList.remove('w-0');
            document.getElementById('toast_bar').classList.add('w-full');
        }, 300);
    }, 4000);
}

