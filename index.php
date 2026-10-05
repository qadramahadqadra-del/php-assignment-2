<?php
// Q1 - One Dimensional Array

$array1 = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

$total = 0;
$evenTotal = 0;
$oddTotal = 0;

$min = min($array1);
$max = max($array1);

$minPositions = [];
$maxPositions = [];

foreach ($array1 as $index => $value) {

    $total += $value;

    if ($value % 2 == 0) {
        $evenTotal += $value;
    } else {
        $oddTotal += $value;
    }

    if ($value == $min) {
        $minPositions[] = $index + 1;
    }

    if ($value == $max) {
        $maxPositions[] = $index + 1;
    }
}

// Q2 - Two Dimensional Array

$colors = [

    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]

];

// Q3 - Square Array

$array3 = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$oddTotal3 = 0;
$evenTotal3 = 0;
$allTotal3 = 0;

$rowTotals = [];
$columnTotals = [0, 0, 0];

$diagonal1 = 0;
$diagonal2 = 0;

$min3 = $array3[0][0];
$max3 = $array3[0][0];

$minPositions3 = [];
$maxPositions3 = [];

foreach ($array3 as $i => $row) {

    $rowTotal = 0;

    foreach ($row as $j => $value) {

        $allTotal3 += $value;
        $rowTotal += $value;
        $columnTotals[$j] += $value;

        if ($value % 2 == 0) {
            $evenTotal3 += $value;
        } else {
            $oddTotal3 += $value;
        }

        if ($value < $min3) {
            $min3 = $value;
            $minPositions3 = [($i + 1) . "," . ($j + 1)];
        } elseif ($value == $min3) {
            $minPositions3[] = ($i + 1) . "," . ($j + 1);
        }

        if ($value > $max3) {
            $max3 = $value;
            $maxPositions3 = [($i + 1) . "," . ($j + 1)];
        } elseif ($value == $max3) {
            $maxPositions3[] = ($i + 1) . "," . ($j + 1);
        }
    }

    $rowTotals[] = $rowTotal;
}

for ($i = 0; $i < 3; $i++) {

    $diagonal1 += $array3[$i][$i];
    $diagonal2 += $array3[$i][2 - $i];

}



// Q4 - Student Information

$students = [

    "CA221" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    "CA221_2" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]

];



// Q5 - Student Transcript

$transcript = [

    "Semester 1" => [

        [
            "Course" => "Subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "Subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "Subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ],

    "Semester 2" => [

        [
            "Course" => "Subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],

        [
            "Course" => "Subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "Subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Assignment 2</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-100 text-slate-800">
</header>
<main class="max-w-6xl mx-auto px-6 py-10">
<section class="bg-white rounded-2xl shadow-lg p-6 mb-10">

    <div class="flex items-center gap-3 mb-6">

        <span class="bg-blue-600 text-white px-4 py-2 rounded-lg font-bold">
            Q1
        </span>

        <h2 class="text-2xl font-bold">
            One Dimensional Array
        </h2>

    </div>
    <div class="bg-blue-50 rounded-xl p-5 mb-6">

        <p class="font-semibold text-blue-900 mb-2">
            Array Elements
        </p>

        <p class="font-bold text-blue-700">
            <?php echo implode(", ", $array1); ?>
        </p>

    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="bg-slate-50 rounded-xl p-5 border-l-4 border-blue-600">

            <p class="text-sm text-slate-500">
                Total
            </p>

            <p class="text-2xl font-bold text-blue-700">
                <?php echo $total; ?>
            </p>

        </div>


        <div class="bg-slate-50 rounded-xl p-5 border-l-4 border-green-600">

            <p class="text-sm text-slate-500">
                Even Total
            </p>

            <p class="text-2xl font-bold text-green-700">
                <?php echo $evenTotal; ?>
            </p>

        </div>


        <div class="bg-slate-50 rounded-xl p-5 border-l-4 border-purple-600">

            <p class="text-sm text-slate-500">
                Odd Total
            </p>

            <p class="text-2xl font-bold text-purple-700">
                <?php echo $oddTotal; ?>
            </p>

        </div>


        <div class="bg-red-50 rounded-xl p-5 border-l-4 border-red-600">

            <p class="text-sm text-red-500">
                Minimum
            </p>

            <p class="text-2xl font-bold text-red-700">
                <?php echo $min; ?>
            </p>

            <p class="text-sm mt-2">
                Positions:
                <?php echo implode(", ", $minPositions); ?>
            </p>

        </div>


        <div class="bg-orange-50 rounded-xl p-5 border-l-4 border-orange-600">

            <p class="text-sm text-orange-600">
                Maximum
            </p>

            <p class="text-2xl font-bold text-orange-700">
                <?php echo $max; ?>
            </p>

            <p class="text-sm mt-2">
                Positions:
                <?php echo implode(", ", $maxPositions); ?>
            </p>

        </div>

    </div>

</section>
<section class="bg-white rounded-2xl shadow-lg p-6 mb-10">

    <div class="flex items-center gap-3 mb-6">

        <span class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-bold">
            Q2
        </span>

        <h2 class="text-2xl font-bold">
            Two Dimensional Associative Array
        </h2>

    </div>


    <div class="overflow-x-auto">

        <table class="w-full text-left border-collapse">

            <thead>

                <tr class="bg-indigo-600 text-white">

                    <th class="p-4">Row</th>

                    <th class="p-4 text-center">Red</th>

                    <th class="p-4 text-center">Green</th>

                    <th class="p-4 text-center">Blue</th>

                </tr>

            </thead>


            <tbody>

                <?php foreach ($colors as $row => $values): ?>

                    <tr class="border-b hover:bg-indigo-50">

                        <td class="p-4 font-bold text-indigo-700">
                            <?php echo $row; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $values["Red"]; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $values["Green"]; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $values["Blue"]; ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</section>
<section class="bg-white rounded-2xl shadow-lg p-6 mb-10">

    <div class="flex items-center gap-3 mb-6">

        <span class="bg-purple-600 text-white px-4 py-2 rounded-lg font-bold">
            Q3
        </span>

        <h2 class="text-2xl font-bold">
            Square Two Dimensional Array
        </h2>

    </div>


    <div class="flex justify-center mb-8">

        <table class="border-collapse">

            <?php foreach ($array3 as $row): ?>

                <tr>

                    <?php foreach ($row as $value): ?>

                        <td class="border border-slate-300 px-10 py-5 text-xl font-bold text-center">

                            <?php echo $value; ?>

                        </td>

                    <?php endforeach; ?>

                </tr>

            <?php endforeach; ?>

        </table>

    </div>


    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="bg-green-50 p-5 rounded-xl">

            <p class="text-sm text-slate-500">
                Odd Elements Total
            </p>

            <p class="text-2xl font-bold text-green-700">
                <?php echo $oddTotal3; ?>
            </p>

        </div>


        <div class="bg-blue-50 p-5 rounded-xl">

            <p class="text-sm text-slate-500">
                Even Elements Total
            </p>

            <p class="text-2xl font-bold text-blue-700">
                <?php echo $evenTotal3; ?>
            </p>

        </div>


        <div class="bg-purple-50 p-5 rounded-xl">

            <p class="text-sm text-slate-500">
                All Elements Total
            </p>

            <p class="text-2xl font-bold text-purple-700">
                <?php echo $allTotal3; ?>
            </p>

        </div>


        <div class="bg-slate-50 p-5 rounded-xl">

            <p class="font-bold mb-3">
                Row Totals
            </p>

            <p>Row 1: <?php echo $rowTotals[0]; ?></p>

            <p>Row 2: <?php echo $rowTotals[1]; ?></p>

            <p>Row 3: <?php echo $rowTotals[2]; ?></p>

        </div>


        <div class="bg-slate-50 p-5 rounded-xl">

            <p class="font-bold mb-3">
                Column Totals
            </p>

            <p>Column 1: <?php echo $columnTotals[0]; ?></p>

            <p>Column 2: <?php echo $columnTotals[1]; ?></p>

            <p>Column 3: <?php echo $columnTotals[2]; ?></p>

        </div>


        <div class="bg-slate-50 p-5 rounded-xl">

            <p class="font-bold mb-3">
                Diagonal Totals
            </p>

            <p>Main Diagonal: <?php echo $diagonal1; ?></p>

            <p>Second Diagonal: <?php echo $diagonal2; ?></p>

        </div>


        <div class="bg-red-50 p-5 rounded-xl">

            <p class="font-bold text-red-700">
                Minimum
            </p>

            <p class="text-xl font-bold">
                <?php echo $min3; ?>
            </p>

            <p class="text-sm">
                Positions:
                <?php echo implode(" | ", $minPositions3); ?>
            </p>

        </div>


        <div class="bg-orange-50 p-5 rounded-xl">

            <p class="font-bold text-orange-700">
                Maximum
            </p>

            <p class="text-xl font-bold">
                <?php echo $max3; ?>
            </p>

            <p class="text-sm">
                Positions:
                <?php echo implode(" | ", $maxPositions3); ?>
            </p>

        </div>

    </div>

</section>


 
     


<section class="bg-white rounded-2xl shadow-lg p-6 mb-10">

    <div class="flex items-center gap-3 mb-6">

        <span class="bg-pink-600 text-white px-4 py-2 rounded-lg font-bold">
            Q4
        </span>

        <h2 class="text-2xl font-bold">
            Student Information
        </h2>

    </div>


    <div class="overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>

                <tr class="bg-pink-600 text-white">

                    <th class="p-4">Student ID</th>

                    <th class="p-4">Name</th>

                    <th class="p-4">Phone</th>

                    <th class="p-4">Address</th>

                </tr>

            </thead>


            <tbody>

                <?php foreach ($students as $id => $student): ?>

                    <tr class="border-b hover:bg-pink-50">

                        <td class="p-4 text-center font-bold text-pink-700">
                            <?php echo $id; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $student["Name"]; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $student["Phone"]; ?>
                        </td>

                        <td class="p-4 text-center">
                            <?php echo $student["Address"]; ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</section>

<section class="bg-white rounded-2xl shadow-lg p-6 mb-10">

    <div class="flex items-center gap-3 mb-6">

        <span class="bg-emerald-600 text-white px-4 py-2 rounded-lg font-bold">
            Q5
        </span>

        <h2 class="text-2xl font-bold">
            Student Transcript
        </h2>

    </div>


    <?php foreach ($transcript as $semester => $courses): ?>

        <div class="mb-10">

            <h3 class="text-xl font-bold text-emerald-700 mb-4">
                <?php echo $semester; ?>
            </h3>


            <div class="overflow-x-auto">

                <table class="w-full border-collapse">

                    <thead>

                        <tr class="bg-emerald-600 text-white">

                            <th class="p-3">Course</th>

                            <th class="p-3">CW1</th>

                            <th class="p-3">MidTerm</th>

                            <th class="p-3">CW2</th>

                            <th class="p-3">Final</th>

                            <th class="p-3">Total</th>

                            <th class="p-3">Status</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php foreach ($courses as $course): ?>

                            <tr class="border-b hover:bg-emerald-50">

                                <td class="p-3 text-center font-semibold">
                                    <?php echo $course["Course"]; ?>
                                </td>

                                <td class="p-3 text-center">
                                    <?php echo $course["CW1"]; ?>
                                </td>

                                <td class="p-3 text-center">
                                    <?php echo $course["MidTerm"]; ?>
                                </td>

                                <td class="p-3 text-center">
                                    <?php echo $course["CW2"]; ?>
                                </td>

                                <td class="p-3 text-center">
                                    <?php echo $course["Final"]; ?>
                                </td>

                                <td class="p-3 text-center font-bold">
                                    <?php echo $course["Total"]; ?>
                                </td>

                                <td class="p-3 text-center">

                                    <?php if ($course["Status"] == "Pass"): ?>

                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full font-bold">
                                            Pass
                                        </span>

                                    <?php else: ?>

                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full font-bold">
                                            Fail
                                        </span>

                                    <?php endif; ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    <?php endforeach; ?>
</section>

</main>
</body>
</html>
