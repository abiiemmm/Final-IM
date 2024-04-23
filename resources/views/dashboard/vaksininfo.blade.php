<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Information</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.9.4/dist/full.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Vaccine Information</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Vaccine 1 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="/images/vaksin 1.jpg" alt="Vaksin 1" class="rounded-lg mb-4">
                <h2 class="text-lg font-semibold mb-2">Vaksin BCG (Bacillus Calmette Guerin)</h2>
                <p class="text-gray-600 mb-4">BCG, BCG vaccine (Bacillus Calmette Guerin) can be given from birth.
                    This immunization aims to provide immunity against tuberculosis (TB).
                    If the BCG vaccine is to be given to babies over 3 months of age,
                    It's a good idea to do a tuberculin test first. BCG may be given if the tuberculin results are negative.</p>
            </div>
            <!-- Vaccine 2 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="/images/vaksin 2.jpg" alt="Vaksin 2" class="rounded-lg mb-4">
                <h2 class="text-lg font-semibold mb-2">MMR vaccine</h2>
                <p class="text-gray-600 mb-4">The MMR vaccine contains vaccines that protect against three viral infections: measles, mumps and rubella. 
                    MMR vaccine is given as a series of two doses with the first dose at 12 to 15 months of age and the second at 4 to 6 years of age.</p>
            </div>
            <!-- Vaccine 3 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="/images/vaksin 3.jpg" alt="Vaksin 3" class="rounded-lg mb-4">
                <h2 class="text-lg font-semibold mb-2">Hepatitis B Vaccine</h2>
                <p class="text-gray-600 mb-4">The hepatitis B vaccine is a mandatory type of vaccine for babies to prevent hepatitis B virus infection which causes liver disorders. 
                    The hepatitis B vaccine contains inactivated hepatitis B virus antigen (HBsAg). 
                    When it enters the body, the antigen will stimulate the immune system to produce antibodies that can fight the hepatitis B virus.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript Section -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</body>

</html>
