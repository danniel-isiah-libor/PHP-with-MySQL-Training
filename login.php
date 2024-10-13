<!DOCTYPE html>
<html lang="en">

    <?php require_once 'head-tag.php';
    
    require_once "./OOP/Middleware.php";

    use OOP\Middleware;

    (new Middleware())->guest();

    $errors = $_SESSION['errors'] ?? [];
    ?>

<body>
    <section class="bg-gray-50">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/phpinventive/register.php" class="w-32 self-start text-black bg-gray-200 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register</a>

        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            Login Page    
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Log in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/phpinventive/process-login.php" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com">
                        <?php 
                            if (isset($errors['email'])) {
                                echo "<p>" . implode(',', $errors['email']) . "</p>";
                            }
                        ?>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
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