<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" class="href">
    <script src="Js/basic.js"></script>
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="images/sparks_logo.png" alt="">
        <div class="info">
          <h3><a href="#">Sparks bank</a></h3>
          <p>A well regulated Bank, developed by ~ Mayur Kukreja</p>
        </div>
      
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="about.html"> About us</a>
          <ul class="side-nav-dropdown">
            
          </ul>
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="newuser.php">Create User</a>
        
          <ul class="side-nav-dropdown">

          </ul>
        </li>
        <li><i class="fa fa-envelope fa-fw"></i><a href="TransferMoney.php">Net banking(E-mail)</a>
          <ul class="side-nav-dropdown">
            
          </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="TransactionHistory.php">Transaction History</a>
          <ul class="side-nav-dropdown">
              >
          </ul>
        </li>
        
        
        
        <!-- Extras -->
        <p>Upcoming Features:</p>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Rewards </a></li>
          <ul class="side-nav-dropdown">
              >
          </ul>
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> Chat Bot </a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="#">FAQs </a></li>
      </ul>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand" href="#">bank<span class="main-color">Dashboard</span></a>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            
            
            
          </div>
        </div>
      </nav>
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Welcome to our Bank</h2>
                <p>Faster & Safer banking experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <a href="TransferMoney.php">
              <div class="box">
                <i class="fa fa-envelope fa-fw bg-primary"></i>
                <div class="info">
                  <h3 a href="TransferDetails.php">Net banking</h3>
                  <p>Pay bills online...</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="newuser.php"> 
              <div class="box">
                <i class="fa fa-file fa-fw danger"></i>
                <div class="info">
                  <h3 a href="newuser.php">Create User</h3>
                  <p>New User Sign-Up</p>
                </div> 
              </div>
              </a>
            </div>
            <div class="col-md-4">
            <a href="TransactionHistory.php">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3 a href="TransactionHistory.php">Transactions</h3>
                  <p>Effortless Transact</p>
                </div>
              </div>
            </div>
              </a>
          </div>
        </div>
  </section>
  <!-- Dummy Data -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <style>
      .container{
        width: 100%;
      }
    </style>
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Web Development Project - Basic Banking System</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Front-End : HTML, CSS , JS | Back-End :  PHP , Database : MySQL </p>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Dummy Data | Template </span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Dynamic Website</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Interactive UI Design</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Unified Banking Experience</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Transaction History</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Bank Dashboard</span>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="content">
  <style>
    .content{
      padding: 25px;
      color: white;

    }
  </style>
  <p>This is dummy data for the documentation of the bank and much more.
  <ul>
    <li>This Website is developed by Mayur Kukreja, as an internship project at The Sparks Foundation.</li>
    <li>Task allotted - <strong>A basic banking System.</strong></li>
  </ul>
  </p>
  <p><strong>DESCRIPTION: </strong> 1. Create a simple dynamic website which has the following specs.
2. Start with creating dummy data in database for upto 10 customers.
Database options: MySQL, MongoDB, Postgres, etc.
Customers table will have basic fields such as name, email, current balance, etc.
Transfers table will record all transfers.
3. Flow: Home Page > View all customers > Select & view 1 customer > Transfer Money > Select customer to transfer to > View all customers.
4. No Login Page. Only transfer of money between multiple users.
5. Hosting the website</p>
</div>

  <!-- Copyright -->
  <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2)">
  <style>
    .text-center{
      color: white;
    }
  </style>
    © 2021 Mayur Kukreja  -   
    <a class="text-dark" href="https://www.linkedin.com/in/mayur-kukreja-797a921a0?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B4voePdgjToeHNg2y4NWhRQ%3D%3D">LinkedIn Profile</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>