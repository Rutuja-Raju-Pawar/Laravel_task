<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Students</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('students.create') }}" class="btn btn-primary" style="padding: 5px 12px;">Add Student</a>
        </div>
        <style>
            .table-responsive {
                width: 100%;

                table {
                    width: 100%;
                    margin: 5px 5px;
                    padding: 5px 5px;

                    tr {
                        border-bottom: 1px solid black;

                        .act-btn {
                            padding: 5px;
                            width: 100px;
                            margin-left: 20px;
                            margin-right: -10px;
                            /* padding-left: 40px; */
                            display: flex;

                            /* padding: 2px; */
                            button {
                                margin-right: 1px;
                                margin-left: 10px;
                                padding: 2px 8px;
                            }

                        }

                    }

                    th {
                        border-left: #333;
                    }
                }
            }
        </style>


        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="students-table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th class="">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->dob }}</td>
                            <td class="text-center act-btn">
                                <a href="{{ route('students.edit', $student->id) }}" class="  btn btn-warning btn-sm mx-1"
                                    style="margin-left:40px;padding: 2px 8px;">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#students-table').DataTable({
                    "pagingType": "full_numbers",
                    "language": {
                        "search": "Filter records:"
                    },
                    "columnDefs": [
                        { "orderable": false, "targets": -1 }
                    ]
                });
            });
        </script>
    @endpush

    <style>
        .container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-weight: 600;
            font-size: 2rem;
        }

        .table thead {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }

        .btn-primary:hover {
            background-color: #563d7c;
            border-color: #563d7c;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .btn {
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</x-app-layout>