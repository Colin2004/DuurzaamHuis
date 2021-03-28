function TijdDatumLocatie() {
    setInterval(function () {
      let time = new Date();
      let sec = time.getSeconds();
      let min = time.getMinutes();
      let hr = time.getHours();
      let day = " AM";
      if (hr > 12) {
        day = " PM";
        hr = hr - 12;
      }
      if (sec < 10) {
        sec = "0" + sec;
      }
      if (min < 10) {
        min = "0" + min;
      }
      if (hr < 10) {
        hr = "0" + hr;
      }
      clockdisplay(hr, min, sec, day);
    }, 100);
  
    function clockdisplay(hr, min, sec, day) {
      let clock = document.getElementById("display");
      clock.innerHTML = hr + ":" + min + ":" + sec + "" + day;
    }
  
    var now = new Date();
  
    var days = new Array(
      "Zondag",
      "Maandag",
      "Dinsdag",
      "Woensdag",
      "Donderdag",
      "Vrijdag",
      "Zaterdag"
    );
  
    var months = new Array(
      "Januari",
      "Februari",
      "Maart",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Augustus",
      "September",
      "Oktober",
      "November",
      "December"
    );
  
    var date = (now.getDate() < 10 ? "0" : "") + now.getDate();
  
    function fourdigits(number) {
      return number < 1000 ? number + 1900 : number;
    }
    today =
      days[now.getDay()] +
      ", " +
      date +
      " " +
      months[now.getMonth()] +
      " " +
      fourdigits(now.getYear());
  
    var dag = document.getElementById("dagmaandjaar");
    dag.innerHTML = today;
    var place = Intl.DateTimeFormat().resolvedOptions().timeZone;
    plek = document.getElementById("places");
    plek.innerHTML = place;
  }