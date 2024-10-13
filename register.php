<?php 
require_once 'head-tag.php';

if(!isset($_SESSION)) session_start();


if(isset($_SESSION['auth'])){
    header('Location: index.php');
    die();
}
$errors = $_SESSION['errors'] ?? [];
?>

<body>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/phpinventive/login.php" class="w-32 self-start text-black bg-gray-200 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</a>
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            Registration Page    
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/phpinventive/process-registration.php" method="POST">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="name" name="name" id="name" placeholder="Name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" >
                        <?php 
                            if (isset($errors['name'])) {
                                echo "<p class='text-red-900'>" . implode(',', $errors['name']) . "</p>";
                            }
                        ?>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" >
                        <?php 
                            if (isset($errors['email'])) {
                                echo "<p>" . implode(',', $errors['email']) . "</p>";
                            }
                        ?>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" >
                        <?php 
                            if (isset($errors['password'])) {
                                echo "<p>" . implode(',', $errors['password']) . "</p>";
                            }
                        ?>
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                    </div>  
                    <button type="submit" class="w-full text-black bg-gray-200 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    </section>

    <?php require_once 'footer.php'; ?>

</body>
</html>
