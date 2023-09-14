document.body.onload = function loading() { // код с ютуба
   setTimeout(function set_1() {
      var preloader = document.getElementById("preloader");
      if (!preloader.classList.contains("done")) {
         preloader.classList.add('done');
      }
   }, 380);
};

