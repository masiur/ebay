@extends('layouts.default')
    @section('content')
        @include('includes.alert')

<!-- <div class="containercustom">
  <div class="headercustom">
    <h2><center>Messages</center></h2>
    <a href="#" title="Add Friend to this chat">+</a>
  </div>
  <div class="chat-box">
    <div class="message-box left-img">
      <div class="picture">
         <span>Mike Moloney</span>
        <span class="time">10 mins</span>
      </div>
      <div class="message">
        <p>Hey Mike, how are you doing?</p>
      </div>
    </div>
    <div class="message-box right-img">
      <div class="picture">
        <span>Mike Moloney</span>
        <span class="time">2 mins</span>
      </div>
      <div class="message">
        
        <p>Pretty good, Eating nutella, nommommom</p>
      </div>
    </div>
    <div class="enter-message">
      <input class="form-control" type="textarea" row="3" placeholder="Enter your message.."/>
      <button class="btn btn-primary">Send</button>
    </div>
  </div>
</div> 
 -->
<div class="container">
<!-- <div class="row"> -->

 <div  id="live-chat">

    <header class="clearfixcustom">

      <!-- <a href="#" class="chat-close">x</a> -->

      <h4>John Doe</h4>

      <span class="chat-message-counter">3</span>

    </header>

    <div class="chat">

      <div class="chat-history">

        <div class="chat-message clearfixcustom">

          <!-- <img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32"> -->

          <div class="chat-message-content clearfixcustom">

            <span class="chat-time">13:35</span>

            <h5>John Doe</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>

          </div>
          <!-- end chat-message-content -->

        </div>
        <!-- end chat-message -->

        <hr>

        <div class="chat-message clearfixcustom">

          <!-- <img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32"> -->

          <div class="chat-message-content clearfixcustom">

            <span class="chat-time">13:37</span>

            <h5>Marco Biedermann</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>

          </div>
          <!-- end chat-message-content -->

        </div>
        <!-- end chat-message -->

        <hr>

        <div class="chat-message clearfixcustom">

          <!-- <img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32"> -->

          <div class="chat-message-content clearfixcustom">

            <span class="chat-time">13:38</span>

            <h5>John Doe</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

          </div>
          <!-- end chat-message-content -->

        </div>
        <!-- end chat-message -->

        <hr>

      </div>
      <!-- end chat-history -->

      <p class="chat-feedback">Your partner is typing…</p>

      <form action="#" method="post">

        <!-- <fieldset> -->
        <div class="form-group">
        	<div class="row">
        		<div class="col-md-11">
          			<input class="form-control" type="textarea" row="4" placeholder="Type your message…" autofocus>
          		</div>
          		<div class="col-md-1">
          			<button type="submit" class="btn btn-primary">Send</button>
          		</div>
        	</div>
        </div>
        <!-- </fieldset> -->

      </form>

    </div>
    <!-- end chat -->
     </div>
  <!-- end live-chat -->
  </div>
  <!-- </div> -->
  
@stop

@section('style')

<style type="text/css">
	@charset "utf-8";
/* CSS Document */

/* ---------- GENERAL ---------- */

body {
	background: #e9e9e9;
	/*color: #9a9a9a;
	font: 100%/1.5em "Droid Sans", sans-serif;
	margin: 0;*/
}

a { text-decoration: none; }

/*fieldset {
	border: 0;
	margin: 0;
	padding: 0;
}*/

h4, h5 {
	line-height: 1.5em;
	margin: 0;
}

hr {
	background: #e9e9e9;
    border: 0;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 1px;
    margin: 0;
    min-height: 1px;
}

img {
    border: 0;
    display: block;
    height: auto;
    max-width: 100%;
}

/*input {
	border: 0;
	color: inherit;
    font-family: inherit;
    font-size: 100%;
    line-height: normal;
    margin: 0;
}*/

/*p { margin: 0; }*/

.clearfixcustom { *zoom: 1; } /* For IE 6/7 */
.clearfixcustom:before, .clearfixcustom:after {
    content: "";
    display: table;
}
.clearfixcustom:after { clear: both; }

/* ---------- LIVE-CHAT ---------- */

/*#live-chat {
	bottom: 0;
	font-size: 12px;
	right: 24px;
	position: fixed;
	width: 300px;
}*/

#live-chat header {
	background: #dcdde8;
	border-radius: 5px 5px 0 0;
	color: #fff;
	cursor: pointer;
	padding: 16px 24px;
}

#live-chat h4:before {
	background: #1a8a34;
	border-radius: 50%;
	content: "";
	display: inline-block;
	height: 8px;
	margin: 0 8px 0 0;
	width: 8px;
}

#live-chat h4 {
	font-size: 20px;
}

#live-chat h5 {
	font-size: 15px;
}

#live-chat form {
	padding: 24px;
}

#live-chat input[type="text"] {
	border: 1px solid #ccc;
	border-radius: 3px;
	padding: 8px;
	outline: none;
	width: 234px;
}

.chat-message-counter {
	background: #e62727;
	border: 1px solid #fff;
	border-radius: 50%;
	display: none;
	font-size: 12px;
	font-weight: bold;
	height: 28px;
	left: 0;
	line-height: 28px;
	margin: -15px 0 0 -15px;
	position: absolute;
	text-align: center;
	top: 0;
	width: 28px;
}

.chat-close {
	background: #1b2126;
	border-radius: 50%;
	color: #fff;
	display: block;
	float: right;
	font-size: 10px;
	height: 16px;
	line-height: 16px;
	margin: 2px 0 0 0;
	text-align: center;
	width: 16px;
}

.chat {
	background: #fff;
}

.chat-history {
	height: 252px;
	padding: 8px 24px;
	overflow-y: scroll;
}

.chat-message {
	margin: 16px 0;
}

.chat-message img {
	border-radius: 50%;
	float: left;
}

.chat-message-content {
	margin-left: 56px;
}

.chat-time {
	float: right;
	font-size: 10px;
}

.chat-feedback {
	font-style: italic;	
	margin: 0 0 0 80px;
}
</style>


@endsection

@section('script')


<script type="text/javascript">
	(function() {

	$('#live-chat header').on('click', function() {

		$('.chatgg').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});

	$('.chat-close').on('click', function(e) {

		e.preventDefault();
		$('#live-chat').fadeOut(300);

	});

}) ();
</script>

@endsection