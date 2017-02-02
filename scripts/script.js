// Cacher et affficher les listes des dates et des lieux des events

document.querySelector(".buttonMai").onclick = function () {
  if (window.getComputedStyle(document.querySelector('.listeMai')).display === 'none') {
    document.querySelector(".listeMai").style.display = "block";
    document.querySelector(".listeJuin").style.display = "none";
    document.querySelector(".listeJuillet").style.display = "none";
  } else {
    document.querySelector(".listeMai").style.display = "none";
  }
};

document.querySelector(".buttonJuin").onclick = function () {
  if (window.getComputedStyle(document.querySelector('.listeJuin')).display === 'none' ) {
    document.querySelector(".listeJuin").style.display = "block";
    document.querySelector(".listeJuillet").style.display = "none";
    document.querySelector(".listeMai").style.display = "none";
  } else {
    document.querySelector(".listeJuin").style.display = "none";
  }
};

document.querySelector(".buttonJuillet").onclick = function () {
  if (window.getComputedStyle(document.querySelector('.listeJuillet')).display === 'none' ) {
    document.querySelector(".listeJuillet").style.display = "block";
    document.querySelector(".listeJuin").style.display = "none";
    document.querySelector(".listeMai").style.display = "none";
  } else {
    document.querySelector(".listeJuillet").style.display = "none";
  }
};