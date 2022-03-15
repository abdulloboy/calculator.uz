function add() {
    const one = document.querySelector('#one');
    const two = document.querySelector('#two');
    var result = document.querySelector('#result');

    axios.get('http://calculator.uz/service/public/' + one.value + '/add/' + two.value)
        .then(function (response) {
            result.value = response.data.data;
        })
        .catch(function (error) {
            result.value = "Incorrect request";
        })
}



