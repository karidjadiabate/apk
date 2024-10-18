<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier des devoirs & examens</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/dash.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/html/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/lists.css') }}">


    <style>
        body {
            font-family: 'poppins', sans-serif;
            background-color: #F8F8F8;
            color: #353E4A;
        }
        .modal-dialog{
            max-width:600px!important;
        }
        .margin-r{
            margin-right: 20px;
        }
        .containers {
            max-width: 80%;
            margin: 0 auto;
            color: #000;
            margin-left: 150px;
        }
        .fc-day-header .fc-widget-header span{
            font-size:25px;
        }
        .containers H1 {
            color: #293D7A;
            font-weight:0px!important;
        }
        .fc-unthemed td.fc-today {
            background: #C0CCFE !important;
        }
        .fc-basic-view .fc-body .fc-row {
            min-height: 4em;
            height: 95px !important;
        }


        .fc-scroller .fc-day-grid-container {
            overflow: hidden;
            height: 590px!important;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-bar {
            position: relative;
            width: 100%;
            max-width: 400px;
        }
        .fc-center h2{
            text-transform:capitalize;
        }

        .search-bar input {
            border: 1px solid #DBDEE2;
            border-radius: 5px;
            padding: 10px 20px;
            width: 100%;
            font-size: 14px;
            padding-left: 35px;
            outline: none;
            box-shadow: none
        }

        .search-bar i.fa-search {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #8993A0;
        }

        .fc-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            border-bottom: 3px solid #E3E7EE;
            padding-bottom: 20px;
        }
        .fc .fc-row .fc-content-skeleton table, .fc .fc-row .fc-content-skeleton td, .fc .fc-row .fc-helper-skeleton td {
            background: 0 0;
            border-top-color: #97989b !important;
        }
        .fc-toolbar h2 {
            color: #353E4A;
            font-size: 28px;
            width: 65% !important;
        }

        .fc-toolbar .fc-left .fc-button-group {
            display: flex;
            align-items: center;
        }

        .fc-day-header {
            background-color: #fff !important;
            color: #353E4A;
            font-weight: bold;
            text-align: center;
        }

        .fc-day-header .fc-widget-header {
            background-color: #E90C0C
        }

        .fc-day {
            background-color: #F8F8F8;
            gap: 10px
        }

        .fc-today {
            background-color: #C0CCFE !important;
        }

        .fc-event {
            border: 1px solid #8993A04D;
            border-radius: 4px;
            padding: 5px;
        }

        .event-economie-ma2a {
            background-color: #C0CCFE;
            color: #353E4A;
        }

        .fc-event .fc-time {
            color: #1E5AE6;
            font-weight: bold;
        }

        .fc {
            direction: ltr;
            text-align: left;
            background-color: #fff;
            border: 1px solid #E3E7EE;
            margin-bottom: 50px;
        }
        .fc .fc-toolbar>*>:first-child {
            margin-left: 6px!important;
        }
        .fc-event .fc-title {
            color: #353E4A;
        }

        .fc td,
        .fc th {
            /* border-style: solid;
            border-width: 1px; */
            padding: 0;
            vertical-align: top;
        }
        .button-group .fc-prev-button .fc-button .fc-state-default .fc-corner-left{
            background:#F1F4FE!important;
        }
        .fc td {
            border-style: solid;
            border-width: 6px;
            border-color: #fff!important;
            background: #F1F4FE;
            color: #000;
            font-weight: bold;
            border-top-width: 1px;

        }

        .fc thead td:first-child {
            border-top-color: #fff!important;

        }


        /* span {
            font-size: 15px!important;
            font-weight:bold!important;
        } */

        .fc th {

            border-style: none;
            height: 2rem;


        }
        .fc-day-grid-event .fc-content {
            white-space: normal;
        }
        .fc-event .fc-content {
            position: relative;
            z-index: 2;
            background: #fff;
            display: flex;
            margin-right: -6px;
            padding-bottom: 15%;
            margin-bottom: -6px;
            margin-top: -6px;
            padding-left: 1%;
            margin-left: 3%;
            flex-direction: column;
        }
        .fc-event .fc-delete-icon {
            color: #E90C0C;
            /* float: right; */
            /* margin-left: 10px; */
            /* margin-top: -40px; */
            position: absolute;
            top: 0px;
            right: 2px;
        }
        .fc-day-grid .fc-unselectable .fc-row .fc-week .fc-widget-content{
            height:100px!important;
        }
        /* .fc-button-group .fc-button {
            background-color: #1E5AE6;
            color: white;
            border: none;
        }

        .fc-button-group .fc-button:hover {
            background-color: #003CC8;
        } */

        /* .fc-state-active {
            background-color: #003CC8 !important;
        } */

        /* Cacher le bouton aujourd'hui */
        .fc-today-button {
            display: none;
        }

        .fc-left .fc-button-group {
            order: 3;
            display: flex;

        }

        .fc-center {
            display: flex !important;
            justify-content: flex-start;
            align-items: center;

        }
        .fc-toolbar button {
            position: relative;
            background: #003CC8 !important;
            color: #fff !important;
            border-radius: 0px !important;
            height:40px!important;
        }
        .fc-center {
            width: 500px;
        }
        .fc-toolbar h2 {
            color: #293D7A!important;
            font-size: 28px;
            width: 65% !important;
        }
                .fc-prev-button .fc-button .fc-state-default .fc-corner-left{
            background: #F1F4FE!important;
            color: #000!important;
        }
        .fc-next-button .fc-button .fc-state-default .fc-corner-right{
            background: #F1F4FE!important;
            color: #000!important;
        }
        .fc-right {
            order: 1;
            display: flex;

        }
        .fc-toolbar .fc-right {
            float: right;
            margin-right: 10px;
        }
        .fc-day-grid-container{
            height:auto!important;
        }
        .form-control{
            border-radius:0px!important;
        }
        th span  {
            font-size: 20px!important;
        }
        td span  {
            font-size: 15px;
        }
        .margin-space{
            margin-left:20px;
            margin-right:-20px;
        }

    </style>
</head>

<body>
    <!-- header -->
    @include('admin.include.menu')
    <!-- accueil -->

    <div class="containers principal">
        <h2>Calendriers des dévoirs & examens</h2>
        <div id="calendar"></div>

                <!-- Modal -->
        <div class="modal fade" id="createEventModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="custom-close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                    <div class="modal-body">
                        <form id="eventForm">
                            <!-- 8 Input Fields -->
                           <div class="form-group col-md-12 row g-3">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="input1" required>
                                        <option value="" disabled selected>Matière</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                        <!-- Ajoutez d'autres options ici -->
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="input2" required>
                                        <option value="" disabled selected>Catégorie d'évolution</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                        <!-- Ajoutez d'autres options ici -->
                                    </select>
                                </div>
                           </div>
                           <div class="form-group col-md-12 row g-3">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="input3" required>
                                        <option value="" disabled selected>Filière</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                        <!-- Ajoutez d'autres options ici -->
                                    </select>
                                </div>
                               <div class="form-group col-md-6">
                                    <select class="form-control" id="input4" required>
                                        <option value="" disabled selected>Classe</option>
                                        <option value="classe1">Classe 1</option>
                                        <option value="classe2">Classe 2</option>
                                        <option value="classe3">Classe 3</option>
                                        <!-- Ajoutez d'autres options ici -->
                                    </select>
                                </div>
                           </div>
                           <div class="form-group col-md-12 row g-3">
                               <div class="form-group col-md-3">
                                   <input type="time" class="form-control" id="input5" placeholder="Début" required>
                               </div>
                               <div class="form-group col-md-3">
                                   <input type="time" class="form-control" id="input6" placeholder="Fin" required>
                               </div>
                               <div class="form-group col-md-6">
                                   <input type="date" class="form-control" id="input7" placeholder="Date" required>
                               </div>
                           </div>
                        </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-between margin-space">
                        <button type="submit" class="btn btn-success" id="submitEvent">Sauvegarder</button>
                        <button type="button" class="btn btn-secondaire margin-r" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
            <!-- Footer -->

    @include('admin.include.footer')

    <!-- Charger jQuery, moment.js et FullCalendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/fr.js"></script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                locale: 'fr',
                header: {
                    left: 'createButton',
                    center: 'searchBar title ',
                    right: 'agendaDay,agendaWeek,month prev,next'
                },
                customButtons: {
                    createButton: {
                        text: '+ Créer', 
                        click: function() {
                            // Action lorsque le bouton est cliqué
                            $('#createEventModal').modal('show'); // Ouvrir le modal
                        }
                    },

                },
                defaultDate: new Date(),
                editable: true,
                events: [{
                        title: 'Économie \n MA2A',
                        start: '2024-10-15T08:30:00',
                        end: '2024-10-15T12:00:00',
                        className: 'event-economie-ma2a',
                        description: 'Économie pour MA2A',
                    },
                    {
                        title: 'Économie \n CFIC',
                        start: '2024-10-23T08:20:00',
                        end: '2024-10-23T12:00:00',
                        className: 'event-economie-ma2a',
                        description: 'Économie pour CFIC',
                    }
                ],
                eventRender: function(event, element) {
                    element.find('.fc-title').append(
                        '<span class="fc-delete-icon fa fa-times"></span>');
                }
            });
            $(".fc-center").prepend(`
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Rechercher...">
                </div>
            `);
        });
    </script>


</body>

</html>
