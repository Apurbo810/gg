
function validateForm() {
 
        var rent = document.getElementById('rent').value;
        var numberOfRooms = document.getElementById('numberofrooms').value;
        var housenumber = document.getElementById('housenumber').value;
        var address = document.getElementById('address').value;

        if (isNaN(rent) || rent <= 0 || isNaN(numberOfRooms) || numberOfRooms <= 0) {
            alert('Rent and number of rooms must be greater than 0.');
            return false;
        }
        if (housenumber === '' || numberOfRooms === '' || rent === '' || address === '') {
            alert('Please fill out all fields.');
            return false;
        }
        return true;
    }


