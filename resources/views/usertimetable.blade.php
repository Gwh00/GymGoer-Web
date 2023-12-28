@extends('layout')

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
    <div id="popupContainer" class="popup">
        <div id="addEventForm" class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <h3 style="color:black;">Add Event</h3>
            <form id="eventForm">
                <label for="eventName" style="color:black;">Event Name:</label>
                <input type="text" id="eventName" name="eventName" style="color:black;" required>
                <br>
                <label for="eventStartDate" style="color:black;">Start Date:</label>
                <input type="date" id="eventStartDate" name="eventStartDate" style="color:black;" required>
                <br>
                <label for="eventEndDate" style="color:black;">End Date:</label>
                <input type="date" id="eventEndDate" name="eventEndDate" style="color:black;" required>
                <br>
                <button type="submit" style="color:black;">Add Event</button>
            </form>
        </div>
    </div>
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
                select: function(start, end, jsEvent, view) {
                    // Hide the calendar
                    $('#calendar').hide();

                    // Display the popup container
                    $('#popupContainer').show();

                    // Populate the event start and end date inputs with the selected date range
                    $('#eventStartDate').val(start.format('YYYY-MM-DD'));
                    $('#eventEndDate').val(end.format('YYYY-MM-DD'));
                }
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
