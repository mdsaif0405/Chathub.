<div class="time" style="position: absolute; right: 12px;    color: black;">
        <span id="time"></span>
    </div>
    <script>
        // let d = new Date();
        // console.log(d);
        setInterval(updatetime, 1000);

        function updatetime(){
            //var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            //var d = new Date(dateString);
            //var dayName = days[d.getDay()];

            let d = new Date();

            let day = d.toString().split(' ')[0];
            //console.log(typeof(day))
            let date = d.getDate();
            let month = d.toLocaleString('default', { month: 'short' });
            let year = d.getFullYear();

            //console.log(date, month, year);
            let h = d.getHours();
            let m = d.getMinutes();
            let s = d.getSeconds();
            if(h<10){
                h = "0"+h;
            }
            if(m<10){
                m = "0"+m;
            }
            if(s<10){
                s = "0"+s;
            }
            time.innerHTML = day+" "+date+" "+month+" "+year+" "+h+":"+m+":"+s;
            //time.innerHTML = d;
        }
    </script>
