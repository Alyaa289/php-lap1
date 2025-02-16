document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let isValid = true;

    let firstName = document.getElementById('first-name').value.trim();
    if (firstName === '') {
        document.getElementById('first-name-error').innerText = 'First name is required';
        isValid = false;
    } else {
        document.getElementById('first-name-error').innerText = '';
    }

    let lastName = document.getElementById('last-name').value.trim();
    if (lastName === '') {
        document.getElementById('last-name-error').innerText = 'Last name is required';
        isValid = false;
    } else {
        document.getElementById('last-name-error').innerText = '';
    }

    if (!document.querySelector('input[name="gender"]:checked')) {
        document.getElementById('gender-error').innerText = 'Gender is required';
        isValid = false;
    } else {
        document.getElementById('gender-error').innerText = '';
    }

    if (!isValid) {
        event.preventDefault();
    }
});
