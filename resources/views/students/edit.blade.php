<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    </head>
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            /* Light gradient background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Modern font */
        }

        .container {
            margin: 40px auto;
            padding: 30px 50px;
            max-width: 800px;
            background-color: #ffffff;
            /* White background for form */
            border-radius: 12px;
            /* More pronounced rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Stronger shadow */
            animation: fadeIn 1s ease-in-out;
            /* Fade-in effect */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            /* Larger font size */
            color: #333;
            font-weight: 700;
            /* Bolder title */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            /* Adjusted to take up half of the row */
            max-width: 50%;
            padding: 0 15px;
        }

        .form-label {
            font-weight: 600;
            /* Slightly bolder labels */
            color: #444;
            /* Darker label color */
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            /* Full width inside the column */
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition for inputs */
        }

        .form-control:focus {
            border-color: #007bff;
            /* Blue border on focus */
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
            /* Soft shadow on focus */
        }

        .btn-success {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            background: linear-gradient(45deg, #28a745, #218838);
            /* Gradient button */
            border: none;
            color: #fff;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.3s ease;
            /* Smooth transition and animation */
            margin-top: 20px;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            /* Darker gradient on hover */
            transform: translateY(-3px);
            /* Slight lift on hover */
        }
    </style>
    <div class="container">
        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ old('first_name', $student->first_name) }}">
                </div>

                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ old('last_name', $student->last_name) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email', $student->email) }}">
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="{{ old('phone', $student->phone) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $student->dob) }}">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update Student</button>
        </form>
    </div>
</x-app-layout>