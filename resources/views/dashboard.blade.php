<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"/>
  <title>Dashboard</title>
</head>
<body>
<div class="container my-4">
        <h1>Donation Dashboard</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Donation Amount</th>
                    <th>Message</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($donationUsers as $donationUser)
                    <tr>
                        <td>{{ $donationUser->id }}</td>
                        <td>{{ $donationUser->fullname }}</td>
                        <td>{{ $donationUser->phone_number ?? 'N/A' }}</td>
                        <td>{{ $donationUser->email }}</td>
                        <td>{{ number_format($donationUser->donation_amount, 2) }}</td>
                        <td>{{ $donationUser->message ?? 'No message' }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>