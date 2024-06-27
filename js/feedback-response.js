document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    fetch('index.php', {
        method: 'POST',
        body: new FormData(this),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('modalMessage').innerText = 'Feedback sent successfully!';
        } else {
            document.getElementById('modalMessage').innerText = 'Failed to send feedback. ' + data.error;
        }
        var feedbackResponse = new bootstrap.Modal(document.getElementById('feedbackResponse'));
        feedbackResponse.show();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});