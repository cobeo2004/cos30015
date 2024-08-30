<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">Welcome to Our Site</h1>
        </div>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <section class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">About Us</h2>
            <p class="text-gray-700">
                <?php
                $aboutText = "We are a company dedicated to providing excellent services to our customers.";
                echo $aboutText;
                ?>
            </p>
        </section>

        <section class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php
            $features = [
                "Innovative Solutions" => "We offer cutting-edge solutions for your business needs.",
                "Expert Team" => "Our team of experts is ready to assist you.",
                "24/7 Support" => "We provide round-the-clock support for our clients.",
                "Customizable Options" => "Tailor our services to fit your specific requirements."
            ];

            foreach ($features as $title => $description) {
                echo "<div class='bg-white rounded-lg shadow-md p-6'>";
                echo "<h3 class='text-xl font-semibold mb-2'>$title</h3>";
                echo "<p class='text-gray-700'>$description</p>";
                echo "</div>";
            }
            ?>
        </section>
    </main>

    <footer class="bg-gray-800 text-white mt-8 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> -->

