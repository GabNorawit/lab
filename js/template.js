      // Function to load content.php after the main page has loaded
      window.addEventListener('load', function() {
        // Fetch content from content.php
        fetch('./content.php')
            .then(response => response.text())
            .then(data => {
                // Insert the fetched content into the placeholder
                document.getElementById('dynamicContent').innerHTML = data;
            })
            .catch(error => console.error('Error fetching content:', error)); });


    document.getElementById('loadContent').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Fetch content from another page using AJAX
        fetch('page.php')
            .then(response => response.text())
            .then(data => {
                // Insert the fetched content into the placeholder
                document.getElementById('dynamicContent').innerHTML = data;
            })
            .catch(error => console.error('Error fetching content:', error));
    });




    