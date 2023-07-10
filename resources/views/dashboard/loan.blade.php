<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('dashboard')
    @section('messages')
    @if(session('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    @endsection
    @section('dashboard_Content')
        <h1>Apply Loans</h1>
        <form action="{{route('apply.loan')}}" method="POST">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{Auth::user()->id}}"><br><br>
            </div>
            <div>
                <input type="text" name="username" value="{{Auth::user()->username}}" readonly><br><br>
            </div>
            <div>
                <input type="email" name="email" cols="10" value="{{Auth::user()->email}}" readonly><br><br>
            </div>
            <div>
                <input type="phone" name="phone" placeholder="Enter phone no." required><br><br>
            </div>
            <div>
                <input type="number" name="amount" placeholder="Enter amount of loan"><br><br>
            </div>
            <div>
                <select type="purpose" name="purpose" id="" cols="10" placeholder="Purpose of the loan.">
                <option> ... </option>
                    <option> Morgage </option>
                    <option> Personal Use </option>
                    <option> Education fee purpose </option>
                    <option> Medical Use </option>
                    <option> Entertainment and Parties </option>
                    <option> Matrimonal ceremony </option>
                    <option> Buy a car </option>
                    <option> Capital for economic activity (i.e. Business, Farming e.t.c) </option>
                </select><br><br>
            </div>
            <div>
                <input type="submit" name="apply-loan" value="Apply Loan">
            </div>
        </form>
        <!-- <div>
            <h1>Applied Loans</h1>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $loan)
                        <tr>
                            <form method="POST" action="{{route('edit.loan', $loan->id)}}">
                                @csrf
                                @method('PATCH')
                                <td><input type="text" name="username" value="{{Auth::user()->username}}" readonly></td>
                                <td><input type="text" name="phone" value="{{$loan->phone}}"></td>
                                <td><input type="number" name="amount" value="{{$loan->amount}}"></td>
                                <td><input type="text" name="purpose" value="{{$loan->purpose}}"></td>
                                <td><input type="submit" name="edit" value="Edit"></td>
                            </form>
                            <td>
                                <form method="POST" action="{{route('delete.loan', $loan->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> -->
    @endsection
</body>
</html>