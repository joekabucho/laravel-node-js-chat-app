<!-- resources/views/chat.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">welcome to our car helpline </div>
                    <div class="panel-heading">type a car name enquire  car prices and specs </div>
                    <div class="panel-heading">cars like bmw ,toyota,mitsubishi,nissan,volkswagen,marcedes </div>
                    <div class="content">
                        <!--
                            <div class="row">
                            <div class="col-md-3">
                                <div class=" " style="color: white">

                                </div>
                            </div>

                            <div class="col-md-3">
                                <p class=" ">
                                     <p>Examples</li>
                                      <p>Give Me the details of all the students</p>
                                    <p>whats the total number of students?</p>
                                    <p> who is the first student?</p>
                                    <p>give me the last student</p>
                                </p>
                            </div>
                           </div>-->
                        <br>

                        <div class="row">
                            <div class="col-md-12 offset-5 ">
                                <div id='bodybox'>
                                    <div id='chatborder'>
                                        <div id="chatboxes">

                                        </div>
                                        <input type="text" rows="5" name="chat" class="form-control" id="chatbox" placeholder="Hi there! Type here to talk to me." onfocus="placeHolder()">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <chat-messages :messages="messages"></chat-messages>
                        </div>
                        <div class="panel-footer">
                            <chat-form
                                    v-on:messagesent="addMessage"
                                    :user="{{ Auth::user() }}"
                            ></chat-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection