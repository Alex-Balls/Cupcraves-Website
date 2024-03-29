<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cupcraves: Home</title>
  <link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
  <meta name="viewport" content="initial-scale=1.0" />
  </script>
</head>
<body id="blogPage">
  <header class="blogHeader pageHeader">
  <h1>Cupcraves<a href="/index.htm" title="home"></a></h1>
  
  <!-- Navagation Menu --> 
    @include('/layouts/nav_main') 
  </header>

  <!-- Body -->
   <div id="contentWrapper">
    <article id="mainContent">
      <h1>About Cupcraves</h1>
      <article class="post">
        <h2>Welcome to CupCraves!</h4>
        <p>My name's Jess, ill be the one baking your delicious cupcakes. I have been baking for 3 years now. I love baking! I put in love, time and of course very yummy ingredients into my cupcakes and will do my absolute best to ensure you have a great experience when booking with me.</p>

        <p>CupCraves is a home business that will cater any occasion you can think of; baby showers, birthdays, weddings, graduations or even those Friday night movie marathon cravings! If we haven't mentioned your desired occasion or event anywhere on our website, contact us and we will do our very best to try to create your vision.</p>

        <p>You have the convenient option of ordering online, where we will deliver the cupcakes to you for free to certain suburbs. You can also pick up from us.
        If you don't want to order online, feel free to give us a call or send us an email to order the cupcakes directly and pay on pick up or delivery. (Note: if paying on the day, we currently only accept cash)</p>

        <p>Enjoy!</p>


        <p>Make a day of it!</p>

        <p>Thinking of buying cupcakes for your event? Is it an event where you need to look your best ? Working from the same residence is a amazingly talented and fully qualified beautician. Why not order some cupcakes and a make-over? Have a look at her talent at <a href="http://www.becsbeauty.com.au">www.becsbeauty.com.au</a></p>
      </article>
    </article>
  
    <!-- Sidebar --> 
    @include('/layouts/sidebar')
    
  <!-- Close div body -->
  </div>
      
    </article>
  </article>


  <!-- Footer -->
  @include('/layouts/footer')
</body>
</html>
