<?php
require_once dirname(__FILE__) . "/../src/helper/debug.php"; 
require_once dirname(__FILE__) . "/../src/repository/ticketsrepository.php"; 


if (isset($_GET["ticketid"])){
    //je hebt een id, dus je kan 1 afspraak opvragen
    $TicketItem = TicketsRepository::getTicketById($_GET["ticketid"]);
    $arrTicket = TicketsRepository::getAlleTickets();
}else{
    echo "";

}
function bepaalSelected($parWaarde1 , $parWaarde2){
    if ($parWaarde1 == $parWaarde2){
        return "selected";
    }else{
        return "";
    }
}
?>

<!doctype html>
<html lang="nl">
<head>
<title>Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../scss/screen.css"/>
  <script src="script/dataHandler.js"></script>
</head>
<body>
<header>
<nav class="c-navbar navbar-expand-md navbar-dark mb-5 pb-3">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
          <ul class="navbar-nav ">
            <a href="index.html" class="navbar-brand">
                <img src="../img/logo.png" style="width: 75px;height: 35px;">
            </a>  
            <li class="nav-item">
              <a class="nav-link "  href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../speakers.html">Speakers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../schedule.html">Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../sponsors.html">Sponsors</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link c-active" href="../tickets.html">Tickets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact.html">Contact</a>
              </li>
              <li>
                <form class="example" action="#" style="margin:auto;max-width:300px">
                  <input type="text" placeholder="Search.." name="search2">
                  
                </form></li>      
          </ul>
        </div>  
      </nav>
</header>

<main>
    <section class="container">
        <h1>Edit Ticket</h1>
        <form method="post" action="update-ticket-verwerk.php" class="form">
            <div class="form-group">
                <label for="omschrijving">Ticket Type</label>
                <form>
        <div class="form-group mt-2">
          <select class="form-control" id="sel1">
            <option>Earlybird</option>
            <option>Student</option>
            <option>Regular</option>
            <option>VIP</option>
          </select>
        </div>
      </form>
      <div class="form-group">
    <label for="Amount">Amount</label>
    <select class="form-control" id="Amount">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
    </select>
  </div>
      <div class="form-group">
              <form>
                <div class="form-group">
                  <label for="Voornaam">Voornaam</label>
                    <input type="text" class="form-control" id="Voornaam" placeholder="Voornaam">
                </div>
                <div class="form-group">
                  <label for="Naam">Naam</label>
                    <input type="text" class="form-control" id="Naam" placeholder="Naam">
                </div>
              </form>
            </div>
            <div class="form-group">
              <form>
                <div class="form-group">
                  <label for="postcode">Postcode</label>
                    <input type="text" class="form-control" id="postcode" placeholder="Postcode">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                    <input type="text" class="form-control" id="Email" placeholder="Email">
                </div>
              </form>
            </div>
			
           

			
			
            <input type="submit" name="submit" class="btn btn-default c-btn" value="Update"></input>
        </form>
    </section>
</main>

<div class="c-footer">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3 col-md-4 c-footer__text text-center">Hogeschool
                Howest<br/>
                Marksesteenweg 58<br/> 8500 Kortrijk</div>
            <div class="col-sm-3 col-md-4 c-footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="col-sm-3 col-md-4 c-footer__text"><svg aria-hidden="true" color="white" focusable="false" data-prefix="c-fab" data-icon="facebook" class="svg-inline--fa fa-facebook c-icon fa-w-16 mt-3" height="30px" width="30px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                <svg aria-hidden="true" color="white" height="30px" width="30px" focusable="false" data-prefix="c-fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16 mt-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
            </div>
            
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>