<?php
session_start(); // Start the session
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
 <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(#00bfff, #87cefa);
            min-height: 100vh;
            padding: 20px;
        }

        .container {    
            max-width: 900px;
            margin-top: 50px;
            padding: 20px;
            background-color: #CADCFC;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
            color: #00246B;
            font-size: 28px;
        }

        .table-responsive {
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
        }

        .table th {
            background-color: #00246B;
            color: white;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            background-color: #00246B;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0033cc;
        }

        .btn-clear {
            background-color: #ff4444;
        }

        .btn-clear:hover {
            background-color: #cc0000;
        }
    
       

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .btn {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
  
    <div class="container">
        <h1>Transaction History</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Reference Number</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TXN123456</td>
                        <td>2024-09-01</td>
                        <td>₱150.00</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td><button class="btn" data-bs-toggle="modal" data-bs-target="#transactionModal" onclick="setModalContent('TXN123456', '2024-09-01', '₱150.00', 'Completed', 'Detailed info about TXN123456')">View</button></td>
                    </tr>
                    <tr>
                        <td>TXN789012</td>
                        <td>2024-08-25</td>
                        <td>₱75.00</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                        <td><button class="btn" data-bs-toggle="modal" data-bs-target="#transactionModal" onclick="setModalContent('TXN789012', '2024-08-25', '₱75.00', 'Pending', 'Detailed info about TXN789012')">View</button></td>
                    </tr>
                    <tr>
                        <td>TXN345678</td>
                        <td>2024-08-15</td>
                        <td>₱200.00</td>
                        <td><span class="badge bg-danger">Failed</span></td>
                        <td><button class="btn" data-bs-toggle="modal" data-bs-target="#transactionModal" onclick="setModalContent('TXN345678', '2024-08-15', '₱200.00', 'Failed', 'Detailed info about TXN345678')">View</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center">
            <button class="btn" onclick="downloadCSV()">Download a Copy</button>
            <button class="btn btn-clear" onclick="clearHistory()">Clear History</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="transactionModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transactionModalLabel">Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Reference Number:</strong> <span id="modalRefNum"></span></p>
                    <p><strong>Date:</strong> <span id="modalDate"></span></p>
                    <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                    <p><strong>Status:</strong> <span id="modalStatus"></span></p>
                    <p><strong>Details:</strong> <span id="modalDetails"></span></p>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9JzRG0uQf2wbbJ1cJrN9D0SRm8dUk8DGA9n8VuJ6eAuGNRkgwFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Agp5N6KC3R+O2K8U5t7H8qzpF4O7uqv7FFMOw2cJ0Vr/ytTefKb" crossorigin="anonymous"></script>
    <script>
        function setModalContent(refNum, date, amount, status, details) {
            document.getElementById('modalRefNum').textContent = refNum;
            document.getElementById('modalDate').textContent = date;
            document.getElementById('modalAmount').textContent = amount;
            document.getElementById('modalStatus').textContent = status;
            document.getElementById('modalDetails').textContent = details;
        }

        // Function to clear transaction history
        function clearHistory() {
            const tableBody = document.querySelector('.table tbody');
            tableBody.innerHTML = '<tr><td colspan="5">No transactions found.</td></tr>';
        }
    </script>
</body>
</html>
