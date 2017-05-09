   <script>
    (function () {
        function checkTime(i) {
            return (i < 10) ? "0" + i : i;
        }

        function startTime() {
            var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                startTime()
            }, 500);
        }

        function getLocation() {
            $.getJSON("https://freegeoip.net/json/", function(data) {
                $('#location').text(data['region_name'] + ', ' + data['country_name']);
            });
        }

        startTime();
        getLocation();
    })();
</script>