<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX Page Navigation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="loadPage1">Load Page 1</button>
    <button id="loadPage2">Load Page 2</button>
    <button id="loadPage3">Load Page 3</button>

    <div id="contentContainer">
        <!-- Content will be loaded here -->
    </div>

    <script>
        $(document).ready(function () {
            // Function to load content via AJAX
            function loadPage(pageUrl) {
                $.ajax({
                    url: pageUrl,
                    type: 'GET',
                    dataType: 'html',
                    success: function (data) {
                        $('#contentContainer').html(data);
                    },
                    error: function () {
                        $('#contentContainer').html('Error loading page.');
                    }
                });
            }

            // Click event handlers for buttons
            $('#loadPage1').click(function () {
                loadPage('page1.html');
            });

            $('#loadPage2').click(function () {
                loadPage('page2.html');
            });

            $('#loadPage3').click(function () {
                loadPage('page3.html');
            });
        });
    </script>
</body>
</html>
