function onChange() {
  let select = document.getElementById("area");
  select.onchange = () => {
    if (select.value == "") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "hokkaido") {
      document.getElementsByClassName("hokkaido")[0].style.display = "";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "tohoku") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "chubu") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "kanto") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "kinki") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "chugoku") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "shikoku") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "";
      document.getElementsByClassName("kyushu")[0].style.display = "none";
    } else if (select.value == "kyushu") {
      document.getElementsByClassName("hokkaido")[0].style.display = "none";
      document.getElementsByClassName("tohoku")[0].style.display = "none";
      document.getElementsByClassName("chubu")[0].style.display = "none";
      document.getElementsByClassName("kanto")[0].style.display = "none";
      document.getElementsByClassName("kinki")[0].style.display = "none";
      document.getElementsByClassName("chugoku")[0].style.display = "none";
      document.getElementsByClassName("shikoku")[0].style.display = "none";
      document.getElementsByClassName("kyushu")[0].style.display = "";
    }
  };

  window.onload = onChange;
}
