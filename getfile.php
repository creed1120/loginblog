<?php include('templates/header.php'); ?>

<?php
    $file_path = "uploads/file.txt";

    $output = file_get_contents($file_path);

    $ages = explode("\n", $output);

    $totalAge = 0;
    $i = 0;

    foreach ($ages as $age) {
        echo "<p>$age</p>";
        $totalAge = $totalAge + $age;

        $i++;        
    }
    echo "The average age is " . round(($totalAge / $i));

?>



<?php include('templates/footer.php'); ?>