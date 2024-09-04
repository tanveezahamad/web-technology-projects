const options = {
	method: 'GET',
	    headers: {
		    'X-RapidAPI-Key': '438afdcebbmshf3ab3fb92e3f1a2p10145fjsnfdc0bafd230c',
		    'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
	    }
    };
    const get = (city)=>{
        try {
            fetch('https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city='+ city, options)
                .then(res => res.json())
                .then(data => {
                    console.log(data)
					temp.innerHTML = data.temp
					feels_like.innerHTML = data.feels_like
					humidity.innerHTML = data.humidity
					min_temp.innerHTML = data.min_temp
					max_temp.innerHTML = data.max_temp
					wind_speed.innerHTML = data.wind_speed
					wind_degrees.innerHTML = data.wind_degrees
        })}
        catch (error) {
	        console.error(error);
        }
    }
	let currentDate = new Date();
	let day = currentDate.getDate();
	let mo = currentDate.getMonth()+1;
	let y = currentDate.getFullYear();
	let da = day+"<span style='color:#fdd663'>-</span>"+mo+"<span style='color:#fdd663'>-</span>"+y

	console.log(currentDate);
	dat.innerHTML = da;
	var h = currentDate.getHours();
	var m = currentDate.getMinutes();
	var r = h+"<span style='color:#fdd663'>:</span>"+m
	ti.innerHTML = r;
    get("Delhi");
	document.getElementById("qwe").addEventListener("click",z);
    function z(){
        changeName.innerHTML = fy.value;
        get(fy.value);

    }

