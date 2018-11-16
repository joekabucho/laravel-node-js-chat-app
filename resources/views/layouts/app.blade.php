<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

    <!-- resources/views/layouts/app.blade.php -->



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <script type="text/javascript">

        //links
        //http://eloquentjavascript.net/09_regexp.html
        //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
        nlp = window.nlp_compromise;

        var messages = [], //array that hold the record of each string in chat
            lastUserMessage = "", //keeps track of the most recent input string from the user
            botMessage = "", //var keeps track of what the chatbot is going to say
            botName = 'server', //name of the chatbot
            talking = true; //when false the speach function doesn't work
        creator ="joe kabucho";
        //var hours = Math.abs(date1 - date2) / 36e5;
        age="9 hours";

        origin="Nairobi";
        //
        //
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //edit this function to change what the chatbot says
        var names=["samuel kyama","Antony Kamau", "Bill onyango","endward munyao","pauline okwara", "peter kioni","mwenda omega","olean oten","omen intsa", "olunga Tes","otero man", "dj mwas"];
        var numbers=[424,545,677,454,556,678,6743,561,6789,341,345,523,678,231,341,457];
        //fuction che
        function chatbotResponse() {
            talking = true;

            botMessage = "He hasn't taught me how to respond to that yet :("; //the default message

            var keywords=['toyota','bmw','mitsubishi','marcedes','volkswagen','nissan','model:marcedes cls5, price:10000$, horsepower:229, milage:17789km','total','model:volkswagen beatle, price:6000$, horsepower:123, milage:8789km','model:nissan gtr, price:54000$, horsepower:567, milage:17000km','model bmw 320i price 20000$ horsepower 255 milage 3400km','model:toyota prias, price:12000$, horsepower:155, milage:10,000km','model:mitsubishi evolution x, price:18000$, horsepower:345, milage:13000km','age','creator','live'];
            var results="";
            for(var counter=0;counter<keywords.length;counter++){

                var match= lastUserMessage.match(new RegExp (keywords.join("|"),"g"));
                //results.push(keywords[counter]);
                //results.push(keywords[i]);
                console.log("results");
                console.log(match.toString());
                results=match.toString();


                console.log(match);
            }

            if (results === 'bmw' || lastUserMessage =='bmw') {
                const hi = ['model bmw 320i price 20000$ horsepower 255 milage 3400km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }
            else if(results === 'toyota' || lastUserMessage =='toyota' ){
                const hi = ['model:toyota prias, price:12000$, horsepower:155, milage:10000km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }
            else if(results === 'mitsubishi' || lastUserMessage =='mitsubishi' ){
                const hi = ['model:mitsubishi evolution x, price:18000$, horsepower:345, milage:13000km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }
            else if(results === 'nissan' || lastUserMessage =='nissan' ){
                const hi = ['model:nissan gtr, price:54000$, horsepower:567, milage:17000km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }
            else if(results === 'marcedes' || lastUserMessage =='marcedes' ){
                const hi = ['model:marcedes cls5, price:19000$, horsepower:229, milage:17789km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }
            else if(results === 'volkswagen' || lastUserMessage =='volkswagen' ){
                const hi = ['model:volkswagen beatle, price:6000$, horsepower:123, milage:8789km']
                botMessage = hi[Math.floor(Math.random()*(hi.length))];;
            }

            else if (results === 'creator') {
                botMessage = creator  + ' is my creator';
            }
            else if (results === 'age') {
                botMessage = "I am "+age +" old";
            }
            else if (results === 'live') {
                botMessage = "I live in "+origin ;
            }

        }
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //
        //
        //
        //this runs each time enter is pressed.
        //It controls the overall input and output
        function newEntry() {
            //if the message from the user isn't empty then run
            if (document.getElementById("chatbox").value != "") {
                //pulls the value from the chatbox ands sets it to lastUserMessage
                lastUserMessage = document.getElementById("chatbox").value;
                //sets the chat box to be clear
                document.getElementById("chatbox").value = "";
                //adds the value of the chatbox to the array messages
                messages.push("Client : "+ lastUserMessage);
                //Speech(lastUserMessage);  //says what the user typed outloud
                //sets the variable botMessage in response to lastUserMessage
                chatbotResponse();
                //add the chatbot's name and message to the array messages
                messages.push( botName +" : " +  botMessage);
                // says the message using the text to speech function written below
                Speech(botMessage);
                //outputs the last few array elements of messages to html



                for (var i = 1; i < 3; i++) {

                    if (messages[messages.length - i])
                        if(i%2==0)
                            var para = document.createElement("h5");
                        else
                            var para = document.createElement("h5");
                    var node = document.createTextNode(messages[messages.length - i]);


                    para.appendChild(node);


                    var element = document.getElementById("chatboxes");
                    window.scrollTo(0,document.body.scrollHeight);
                    element.appendChild(para);
                    if(i%2==0){
                        //user
                        para.className += "msgcontainer";
                        para.className += " textright";
                    }
                    else{
                        para.className += "msgcontainer";
                        para.className += " textleft";
                    }
                }


            }
        }

        //text to Speech
        //https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
        function Speech(say) {
            if ('speechSynthesis' in window && talking) {
                var utterance = new SpeechSynthesisUtterance(say);
                //msg.voice = voices[10]; // Note: some voices don't support altering params
                //msg.voiceURI = 'native';
                //utterance.volume = 1; // 0 to 1
                //utterance.rate = 0.1; // 0.1 to 10
                //utterance.pitch = 1; //0 to 2
                //utterance.text = 'Hello World';
                //utterance.lang = 'en-US';
                speechSynthesis.speak(utterance);
            }
        }

        //runs the keypress() function when a key is pressed
        document.onkeypress = keyPress;
        //if the key pressed is 'enter' runs the function newEntry()
        function keyPress(e) {
            var x = e || window.event;
            var key = (x.keyCode || x.which);
            if (key == 13 || key == 3) {
                //runs this function when enter is pressed
                newEntry();
            }
            if (key == 38) {
                console.log('hi')
                //document.getElementById("chatbox").value = lastUserMessage;
            }
        }

        //clears the placeholder text ion the chatbox
        //this function is set to run when the users brings focus to the chatbox, by clicking on it
        function placeHolder() {
            document.getElementById("chatbox").placeholder = "";
        }
    </script>
</div>
</body>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</html>
