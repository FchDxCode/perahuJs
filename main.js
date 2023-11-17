const img = document.getElementById('boat');

let boatPosition = {
  x: 0,
  y: 0
};

function kiri() {
  boatPosition.x -= 10;
  update();
}

function kanan() {
  boatPosition.x += 10;
  update();
}

function atas() {
  boatPosition.y += 10;
  update();
}

function bawah() {
  boatPosition.y -= 10;
  update();
}

function lompat() {
  img.style.top = '-250px'
  setTimeout(() => {
    img.style.top = '0px'
    update();
  }, 300)
}

function update() {
  img.style.left = boatPosition.x + 'px';
  img.style.bottom = boatPosition.y + 'px';

  boatPosition.x = Math.max(0, Math.min(1000, boatPosition.x));
  boatPosition.y = Math.max(0, Math.min(80, boatPosition.y));
}

document.addEventListener("keydown", function (event) {
  event.preventDefault();
  const key = event.key;
  switch (key) {
    case "ArrowLeft":
      kiri();
      break;

    case "ArrowRight":
      kanan();
      break;

    case "ArrowUp":
      atas();
      break;

    case "ArrowDown":
      bawah();
      break;

    case "a" :
        kiri();
    break;

    case "w" :
        atas();
    break;

    case "s" :
        bawah();
    break;

    case "d" :
        kanan();
    break;

    case " " :
      lompat();
    break;
  }
});

update();
