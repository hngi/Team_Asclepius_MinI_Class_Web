function validation() {
    let name = document.querySelector('#name').value;
    let email = document.querySelector('#email').value;
    let subject = document.querySelector('#subject').value;
    let story = document.querySelector('#story').value;
    let error = document.querySelector('.status_error');
    let text;
    error.style.padding = "10px";

    if (name.length < 5) {
        text = "name must not be less than 5 characters";
        error.innerHTML = text;
        // setTimeout(() => error.style.display = "none", 5000);
        return false;
    } else if (email.indexOf("@") === -1) {
        text = "Enter a valid Email";
        error.innerHTML = text;
        // setTimeout(() => error.style.display = "none", 5000);
        return false;
    } else if (subject.length < 10) {
        text = "subject field must not be less than 10 characters";
        error.innerHTML = text;
        // setTimeout(() => error.style.display = "none", 5000);
        return false;
    } else if (story.length <= 20) {
        text = "message field must be more than 20 characters";
        error.innerHTML = text;
        // setTimeout(() => error.style.display = "none", 5000);
        return false;
    }

}