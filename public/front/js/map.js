function changeStats(buttonIndex) {
    var timeContainer = document.getElementById('timeContainer');
    var dateContainer = document.getElementById('dateContainer');
    var locationContainer = document.getElementById('locationContainer');

    // Replace the following values with your dynamic data or logic
    var newTime, newDate, newLocation;

    // Update values based on the button clicked
    switch (buttonIndex) {
        case 0:
            newTime = "09:00";
            newDate = "25/12/2023";
            newLocation = "Nagpur";
            break;
        case 1:
            newTime = "14:30";
            newDate = "31/01/2023";
            newLocation = "Amravati";
            break;
        case 2:
            newTime = "18:45";
            newDate = "15/07/2023";
            newLocation = "Akola";
            break;
        case 3:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Nanded";
            break;
        case 4:
            newTime = "10:15";
            newDate = "07/10/2023";
            newLocation = "Jalgaon";
            break;
        case 5:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Aurangabad";
            break;
        case 6:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Ahmadnagar";
            break;
        case 7:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Solapur";
            break;
        case 8:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Nashik";
            break;
        case 9:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Pune";
            break;
        case 10:
            newTime = "12:15";
            newDate = "08/09/2023";
            newLocation = "Kolhapur";
            break;
        default:
            // Add 'hidden' class to initiate fade-out transition for default values
            timeContainer.classList.add('hidden');
            dateContainer.classList.add('hidden');
            locationContainer.classList.add('hidden');

            // Set a timeout to update content and initiate fade-in transition for default values
            setTimeout(function () {
                newTime = "12:00";
                newDate = "01/01/2023";
                newLocation = "Default Location";

                timeContainer.querySelector('.stat').innerHTML = `<span>${newTime.split(':')[0]}</span> : <span>${newTime.split(':')[1]}</span>`;
                dateContainer.querySelector('.stat').innerHTML = `<span>${newDate.split('/')[0]}</span>/<span>${newDate.split('/')[1]}</span>/<span>${newDate.split('/')[2]}</span>`;
                locationContainer.querySelector('.stat').innerText = newLocation;

                // Remove 'hidden' class to initiate fade-in transition for default values
                timeContainer.classList.remove('hidden');
                dateContainer.classList.remove('hidden');
                locationContainer.classList.remove('hidden');
            }, 500); // This timeout should match the transition duration
    }

    // For non-default values, update content without animation
    if (buttonIndex !== undefined) {
        timeContainer.querySelector('.stat').innerHTML = `<span>${newTime.split(':')[0]}</span> : <span>${newTime.split(':')[1]}</span>`;
        dateContainer.querySelector('.stat').innerHTML = `<span>${newDate.split('/')[0]}</span>/<span>${newDate.split('/')[1]}</span>/<span>${newDate.split('/')[2]}</span>`;
        locationContainer.querySelector('.stat').innerText = newLocation;
    }
}