<!DOCTYPE html>
<html>
<head>
    <title>COVID Vaccination Booking</title>
    <style>
        body {
            background: url('https://team.georgia.gov/wp-content/uploads/2021/02/COVID-Vaccine-2048x1365.jpg') center center fixed;
            background-size: cover;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            align-items: flex-start;
            margin-top: 50px;
        }

        .sidebar {
            width: 200px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin-right: 20px;
        }

        .sidebar h2 {
            margin-bottom: 10px;
        }

        .content {
            flex: 1;
            text-align: center;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: bold;
        }

        .container .dropdown {
            display: inline-block;
            margin-right: 10px;
        }

        .container .dropdown select {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container .login-button {
            display: inline-block;
        }

        .container .login-button button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #FF6C8C;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container p {
            margin-top: 50px;
            font-size: 16px;
            line-height: 1.5;
        }

        .container table {
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
            color: #fff;
            font-size: 14px;
        }

        .container table th,
        .container table td {
            padding: 8px;
            border: 1px solid #fff;
        }

        .container table th {
            font-weight: bold;
        }

        .container table td.highlight {
            font-weight: bold;
        }

        .lower-bar {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            color: #fff;
            font-size: 14px;
        }

        .lower-bar a {
            color: #fff;
            text-decoration: underline;
        }

        /* Clock font style */
        .clock-font {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Vaccination is prevention in action.</h2>
            
            
            <p id="your-turn">Vaccination: Your key to a healthier future.</p>
        </div>
        <div class="content">
            <h1><font face="Verdana" size="7"
                      color="black">Welcome to COVID Vaccination Booking</font></h1>
            <div class="dropdown">
                <select id="user-type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="login-button">
                <button id="login-button">Sign In</button>
            </div>
           
            <table>
                <tr>
                    <th><font face="Verdana" size="4"
                              color="black">Measures to be followed:</font></th>
                </tr>
                <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Wear a mask</font></td>
                </tr>
                <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Maintain social distancing</font></td>
                </tr>
                <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Personal protective equipment (PPE)</font></td>
                </tr>
                <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Arrive on time</font></td>
                </tr>
               <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Follow instructions</font></td>
                </tr>
                <tr>
                    <td><font face="Verdana" size="4"
                              color="black">Bring your identification documents</font></td>
                </tr>
            </table>
        </div>
    </div>

 

    <script>
        // Event listener for the "Sign In" button
        document.getElementById('login-button').addEventListener('click', function() {
            var userType = document.getElementById('user-type').value;
            if (userType === 'user') {
                window.location.href = 'login.html';
            } else if (userType === 'admin') {
                window.location.href = 'admin_login.html';
            }
        });

        // Function to update the vaccinated count
        function updateVaccinatedCount() {
            var vaccinatedCount = 2206732370; // Replace with actual value from the database
            document.getElementById('vaccinated-count').textContent = vaccinatedCount.toLocaleString();
        }

        // Initial update
        updateVaccinatedCount();

        // Update every 3 hours
        setInterval(updateVaccinatedCount, 3 * 60 * 60 * 1000);
    </script>
</body>
</html>
