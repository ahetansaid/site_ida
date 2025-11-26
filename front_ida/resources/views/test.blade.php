<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Laravel JS</title>
</head>
<body>

    <h1>Test Laravel JS</h1>

    <form>
        <select name="country" id="country-select">
            <option value="">Choisissez un pays</option>
        </select>
    </form>

    <script>
        console.log("Script inline lancé");

        document.addEventListener("DOMContentLoaded", function () {
            const countries = ["Tchad", "Cameroun", "France", "Allemagne"];
            const select = document.getElementById("country-select");

            countries.forEach(country => {
                const option = document.createElement("option");
                option.value = country;
                option.textContent = country;
                select.appendChild(option);
            });
        });
    </script>

</body>
</html>
