<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        
        .certificate {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        
        .title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .recipient {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .date {
            font-size: 16px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="title">Certificate of Achievement</div>
        <div class="recipient">
            This certificate is presented to {{ $recipient }} for successfully completing the course.
        </div>
        <div class="date">{{ $date }}</div>
    </div>
</body>
</html>
