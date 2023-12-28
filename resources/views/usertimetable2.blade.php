@extends('layout2')

@section('content')
    <br>

    <head>
        <meta charset="UTF-8">
        <title>Smart Calendar</title>
        <!-- Include Bootstrap CSS -->
        <!-- Include FullCalendar CSS -->
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" rel="stylesheet">
        <!-- Include FullCalendar JS and moment.js-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>


    </head>
    <style>
        body {
            background: url(A.jpg);
            background-size: 100%;
        }

        h1 {
            color: white;
        }

        .container {
            background-color: white;
        }

        h2,
        span {
            color: black;
        }

        .popup {
            display: none;
            / Initially hidden / position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            width: 80%;
            max-width: 400px;
            margin: 10% auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
    
    <div class="container">
        <div id="calendar"></div>
    </div>
    <br>
    <script>
        
        $(document).ready(function() {
            var calendarVisible = true; // Variable to track calendar visibility
            // Initialize an empty array to store event data
            var eventDataArray = [];

            var calendar = $('#calendar').fullCalendar({
                // Calendar configuration here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true, // Enable drag-and-drop events
                selectable: true, // Enable date range selection
                events: eventDataArray, // Initialize with the empty array
                
            });

            // Close the popup when the close button is clicked
            $('#closePopup').click(function() {
                // Hide the popup container
                $('#popupContainer').hide();

                // Show the calendar
                $('#calendar').show();
            });
            // Function to add an event to the calendar and eventDataArray
            function addEventToCalendar(eventData) {
                // Add the event to the calendar
                calendar.fullCalendar('renderEvent', eventData, true);

                // Add the event data to the eventDataArray
                eventDataArray.push(eventData);
            }

            // Form submission handler
            $('#eventForm').submit(function(event) {
                event.preventDefault();

                // Retrieve event details from the form
                var eventName = $('#eventName').val();
                var eventStartDate = $('#eventStartDate').val();
                var eventEndDate = $('#eventEndDate').val();

                // Create an event object
                var eventData = {
                    title: eventName,
                    start: eventStartDate,
                    end: eventEndDate
                };

                // Add the event to the calendar and eventDataArray
                addEventToCalendar(eventData);

                // Hide the form and show the calendar
                $('#popupContainer').hide();
                $('#calendar').show();

                // Clear form fields
                $('#eventName').val('');
                $('#eventStartDate').val('');
                $('#eventEndDate').val('');
            });
        });
    </script>
@endsection
