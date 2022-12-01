
    let weather = "http://api.openweathermap.org/data/2.5/forecast?id=524901&appid=c70328c914dd083562afe14476f90dd4"
        console.log("ok!")
    
        fetch(weather)
        .then(response => {
            return response.json();
           ({})
        })
        .then(data => {
            console.log(data)
            
            city = data;
            temp = data;

            city = data.city.name + ' '
            temp = data.list['0'].main.temp + ' '
            humid = data.list['0'].main.humidity
            document.querySelector('.city').insertAdjacentHTML('beforeend', city)
            document.querySelector('.temp').insertAdjacentHTML('beforeend', temp)
            document.querySelector('.humid').insertAdjacentHTML('beforeend', humid)
        })
        .catch(error => console.log('Error ' + error.message))


        // .then(response => {return response.json()})
        // .then(
        //     data => console.log(data)
        // )
        // .catch(err => {console.log('Errors: ' + err.message)})
        // document.write(data)
        



console.log("outside function is fine")