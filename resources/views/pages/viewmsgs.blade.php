@extends('layouts.default')
@section('content')
    <div class="container">
        <H3>Message Dashboard</H3>
        <form action="" method="">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
            <tr>
                <th scope="col">From</th>
                <th scope="col">Message Subject</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                    <td>Julia Roberts</td>
                    <td>
                        <a href="<?=URL::to('viewcontactmessage',1)?>">Regarding Zumba Classes</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-block" onclick="">Delete</button>
                    </td>
            </tr>
            <tr>
                    <td>Christy Adams</td>
                    <td>
                        <a href="<?=URL::to('viewcontactmessage',2)?>">Regarding Yearly Membership Discounts</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-block">Delete</button>
                    </td>
            </tr>
            <tr>
                    <td>Tom Alter</td>
                    <td>
                        <a href="<?=URL::to('viewcontactmessage',3)?>">Please call me asap..</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-block">Delete</button>
                    </td>
            </tr>
            <tr>
                    <td>Shirley Liu</td>
                    <td>
                        <a href="<?=URL::to('viewcontactmessage',4)?>">Regarding Yoga Classes</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-block">Delete</button>
                    </td>
            </tr>
            <tr>
                    <td>Indumathi Rajendran</td>
                    <td>
                        <a href="<?=URL::to('viewcontactmessage',5)?>">Hello there, Please reply!</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-block">Delete</button>
                    </td>
            </tr>
            </tbody>
        </table>
        </form>
    </div>
@endsection