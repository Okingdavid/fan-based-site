
<?php include('server.php')?>
<?php 


?>

<?php include('header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link
    href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
    rel="stylesheet"
    />
</head>
<body class="font-mono bg-gray-400">
     <div class="w-60 lg:w-7/12 bg-white ml-72 mt-20 p-5 rounded-lg lg:rounded-2xl">
     <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class= "ml-20 px-8 pt-6 pb-8 mb-4 bg-white rounded">

     <h3 class="pt-4 text-4xl text-center">Log In!</h3>
         <!-- Container -->
		<div class="container mx-auto">
          <div class="flex justify-center px-6 my-12">
               <!-- Row -->
               <div class="w-full mr-60 xl:mr-20 xl:w-3/4 lg:w-11/12 flex"> 
                    <div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-32 py-4 mb-3 text-md leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
                                             name="email"
									type="email"
                                              
                                             value=""
                                             required
                                             />
                                            
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									password
								</label>
								<input
									class="w-full px-32 py-4 mb-3 text-lg font-bold leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="password"
                                             name="password"
									type="password"
                                          
                                         value=""
                                             
                                             required
                                             />
                                             
                    </div>
               </div>
                        
          </div>
				
          </div>

          <button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									
                  value="Login"
                  name="login"
								>
									Login
								</button>
          <div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="sign-up.php"
								>
									Don't have an account? sign up!
								</a>
							</div>
			
    </form> 
     </div>
</body>

</html>