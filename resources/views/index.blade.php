<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6; /* Set your desired background color */
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Make the container full height */
        }

        .newsletter-form {
            background-color: #fff; /* Set your desired background color for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            max-width: 400px; /* Limit the form width */
            width: 100%;
        }

        /* Style the form input */
        .newsletter-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        /* Style the form submit button */
        .newsletter-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ff1e00; /* Set your desired button color */
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        /* Style the form submit button on hover */
        .newsletter-form button[type="submit"]:hover {
            background-color: #b30009; /* Set your desired hover color */
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="newsletter-form">
            <h1 class="text-center pb-3 text-2xl font-bold">
                Newsletter
            </h1>
            <form action="/subscribe" method="POST">
                @csrf
                <input 
                    type="text"
                    name="email"
                    placeholder="Enter Email..."
                    class="px-4 py-2 rounded-xl placeholder-gray-50::placeholder">
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
