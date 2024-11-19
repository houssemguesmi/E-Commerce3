if (document.getElementById("loginForm")) {
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/E-Commerce3/login.php', true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    console.log('Login successful: ', response.message);
                    window.location.href = '/E-Commerce3/';
                } else {
                    console.error('Error: ', response.message);
                }
            } else {
                console.error('Error:', xhr.status, xhr.responseText);
            }
        };

        xhr.send(formData);
    });
}
if(document.getElementById("logoutButton")){
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault();

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'logout.php', true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Logout successful. Response: ', xhr);
                // Redirect to home or login page after logout
                // window.location.href = '/E-Commerce3/' // You can change this to your preferred page
            } else {
                console.error('Error: ', xhr.status, xhr.responseText);
            }
        };

        xhr.send();
    });
}
