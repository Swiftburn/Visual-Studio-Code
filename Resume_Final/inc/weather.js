    //Grabs API Key
    let weather = "http://api.openweathermap.org/data/2.5/forecast?id=524901&appid=c70328c914dd083562afe14476f90dd4"
        console.log("api key ok!")
    
        //Fetch API
        fetch(weather)
        .then(response => {
            return response.json(); //returns json
        })
        .then(data => {
            //Show data in console
            console.log(data)

            //Finds specific data and stores data in respective variables
            city = data.city.name + ' '
            temp = data.list['0'].main.temp + ' '
            humid = data.list['0'].main.humidity

            //Locates respective classes with respective name, then before the end tag, adds data
            document.querySelector('.city').insertAdjacentHTML('beforeend', city)
            document.querySelector('.temp').insertAdjacentHTML('beforeend', temp)
            document.querySelector('.humid').insertAdjacentHTML('beforeend', humid)
        })
        .catch(error => console.log('Error ' + error.message)) //catch any errors
        



console.log("last check is fine")