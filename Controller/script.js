window.onload = function () {
  var loadBtn = document.getElementById("AdminDataView");
  loadBtn.addEventListener("click", loadPage);
};

function loadPage() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../View/AdminDataView.php", true);
  xhttp.send();
}

window.onload = function () {
  var loadBtn = document.getElementById("AdminAdd");
  loadBtn.addEventListener("click", loadPage);
};

function loadPage() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../View/AdminAdd.php", true);
  xhttp.send();
}
