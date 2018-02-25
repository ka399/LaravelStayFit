@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-title">
                <h1>Stayfit Inbox</h1>

            </div>
            <div class="card-body">
                <?php
                switch ($messageID)
                {
                    case "1":
                        $sendername ="Julia Roberts";
                        $sendermail = "julia@hotmail.com";
                        $subject = "Regarding Zumba Classes";
                        $message = "Hi Stayfit,"."<br/>"."I would like to know more about Zumba classes. Can you please let me
                        know the trainer contact details."."<br/>"."Thanks,"."<br/>"."Julia"."<br/";
                        break;
                    case "2":
                        $sendername ="Christy Adams";
                        $sendermail = "CA007@gmail.com";
                        $subject = "Regarding Yearly Membership Discounts";
                        $message = "Hi Stayfit,\n I would like to know more about Yearly membership discounts. Can you please
                    let me know the details via email or call me @ 2038327980.<br/><br/>Thanks,<br/> Christy</p><br/>";
                        break;
                    case "3":
                        $sendername ="Tom Alter";
                        $sendermail = "ta456@hotmail.com";
                        $subject = "Please call me asap";
                        $message = "Hi Stayfit,<br/> I would like to know more about StayFit Gym. Can you please call me asap on
                        2018907890..<br/> Thank you :-)</p><br/>";
                        break;
                    case "4":
                        $sendername ="Shirley Liu";
                        $sendermail = "shirley@yahoo.com";
                        $subject = "Regarding Yoga Classes";
                        $message ="Hi Stayfit,<br/> I would like to know more about Yoga classes. Can you please mail me the
                    trainer contact details. <br/> Thanks,<br/>Shirley <br/>201 867 9870</p><br/>";
                        break;
                    case "5":
                        $sendername ="Indumathi Rajendran";
                        $sendermail = "indutherockstar@rediffmail.com";
                        $subject = "Hello there...this is Indu";
                        $message ="Hi Sir,<br/> I would like to know more about the Stayfit fitness center, like fees, timings
                    etc. Can you please let me know the good time to stop by? Please book my appointment and mail me the
                    details. <br/> Thanks, <br/>Indumathi</p><br/>";
                        break;
                    default:
                        $sendername ="";
                        $sendermail = "";
                        $subject = "";
                        $message ="Incorrect message ID.";

                }
                echo "<p>Sender's Name : $sendername</p>";
                echo "<p>Sender's Email : $sendermail</p>";
                echo "<p>Subject : $subject</p>";
                echo "<p>Message:</p>";
                echo "<p>$message</p>";
                ?>
                    <p><a class="btn btn-info btn-lg" href="{{route('viewmsgs')}}" role="button">Back to Messages &raquo;</a></p>
            </div>
        </div>
    </div>
@endsection
