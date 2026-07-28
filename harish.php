<?php
function calculateScore($name) {
  $matras = ['ा','ि','ी','ु','ू','े','ै','ो','ौ','ॅ','ं','ः','ँ'];
  $tribhuj = ['ं', 'ः'];
  $ekikrit = ['ज्ञ', 'त्र', 'श्र', 'क्त', 'ष्ट', 'द्व', 'ह्न', 'स्व', 'ग्न'];

  $name = preg_replace('/\s+/', '', $name); // remove spaces
  $score = 0;

  foreach ($ekikrit as $combo) {
    $count = substr_count($name, $combo);
    $score += $count * 3;
    $name = str_replace($combo, '', $name);
  }

  // ✅ Fixed this line
  $chars = preg_split('//u', $name, -1, PREG_SPLIT_NO_EMPTY);
  foreach ($chars as $char) {
    if (in_array($char, $tribhuj)) {
      $score += 3;
    } elseif (in_array($char, $matras)) {
      $score += 4;
    } else {
      $score += 2;
    }
  }

  return $score;
}


$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $husband = trim($_POST['husband'] ?? '');
  $wife = trim($_POST['wife'] ?? '');

  if ($husband === '' || $wife === '') {
    $result = "कृपया दोनों नाम दर्ज करें।";
  } else {
    $totalScore = calculateScore($husband) + calculateScore($wife);
    $remainder = $totalScore % 3;

    if ($remainder === 0 || $remainder === 2) {
      $result = "पति पहले मरेगा।";
    } else {
      $result = "पत्नी पहले मरेगी।";
    }

    $result = "👉 " . $result;
  }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>कौन पहले मरेगा?</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #e6f0ff, #ffe6e6);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 10px;
    }

    .container {
      background-color: #fff;
      padding: 30px 20px;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
      text-align: left;
    }

    input {
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border: 1px solid #aaa;
      border-radius: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 14px;
      background-color: #ff4d4d;
      color: white;
      font-size: 18px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #cc0000;
    }

    #result {
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
      animation: fadeIn 0.8s ease-in-out;
    }
   
  
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

  </style>
</head>
<body>

  <div class="container">
    <h2>👫 पति-पत्नी में कौन पहले मरेगा?</h2>
<p style="font-size: 16px; margin-bottom: 20px; color: #555;">
  यह एक मज़ेदार और रोचक गणना है जो आपके और आपके जीवनसाथी के नाम के आधार पर बताती है कि <strong>पति-पत्नी में कौन पहले मरेगा?</strong><br>
  <em>नोट: यह सिर्फ मनोरंजन के लिए है, इसे गंभीरता से न लें।</em>
</p>
    <form method="POST">
      <label for="husband">पति का नाम (हिंदी में)</label>
      <input type="text" id="husband" name="husband" placeholder="जैसे – राम" required />

      <label for="wife">पत्नी का नाम (हिंदी में)</label>
      <input type="text" id="wife" name="wife" placeholder="जैसे – सीता" required />

      <button type="submit">जांचें</button>
    </form>

    <?php if ($result): ?>
      <div id="result"><?= htmlspecialchars($result) ?></div>
    <?php endif; ?>
  </div>

</body>
</html>
